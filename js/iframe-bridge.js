/**
 * Na, geht's? Editor - Iframe Bridge Script
 * Injected into the PHP page iframe to enable editor communication.
 * This runs in vanilla JS (no React/TypeScript).
 */
(function() {
  'use strict';

  var PARENT_ORIGIN = '*'; // Will be restricted in production
  var editMode = false;
  var highlightEl = null;
  var highlightOverlay = null;

  // --- Original state tracking for undo/redo ---
  var elementOriginals = {}; // selector → { innerHTML, attributes: {name: value}, styles: {prop: value} }

  // --- Utility: Generate CSS selector for an element ---
  function getSelector(el) {
    if (el.id) {
      return '#' + CSS.escape(el.id);
    }
    var path = [];
    var current = el;
    while (current && current !== document.documentElement && current !== document.body) {
      if (current.id) {
        path.unshift('#' + CSS.escape(current.id));
        break;
      }
      var parent = current.parentElement;
      if (!parent) break;
      var siblings = Array.from(parent.children);
      var index = siblings.indexOf(current) + 1;
      var tag = current.tagName.toLowerCase();
      path.unshift(tag + ':nth-child(' + index + ')');
      current = parent;
    }
    if (path.length === 0) {
      return el.tagName.toLowerCase();
    }
    return path.join(' > ');
  }

  // --- Utility: Get element info ---
  function getElementInfo(el) {
    var rect = el.getBoundingClientRect();
    var classes = Array.from(el.classList);
    var attrs = {};
    for (var i = 0; i < el.attributes.length; i++) {
      var attr = el.attributes[i];
      attrs[attr.name] = attr.value;
    }

    // Detect element type
    var elementType = 'unknown';
    var tag = el.tagName.toLowerCase();
    if (classes.indexOf('itm') >= 0 && el.id) elementType = 'sound_button';
    else if (classes.indexOf('tran') >= 0) elementType = 'translation';
    else if (classes.indexOf('o') >= 0) elementType = 'answer_correct';
    else if (classes.indexOf('x') >= 0) elementType = 'answer_wrong';
    else if (tag === 'input' && classes.indexOf('form-control') >= 0) elementType = 'input_field';
    else if (tag === 'img') elementType = 'image';
    else if (/^h[1-6]$/.test(tag)) elementType = 'heading';
    else if (classes.some(function(c) { return c.indexOf('ans') === 0; })) elementType = 'drag_group';
    else if (['p','span','div','li','td','th','label','a','button'].indexOf(tag) >= 0) elementType = 'text';

    // sound_button의 경우 본문 텍스트와 번역(span.tran)을 분리 추출
    var mainText = undefined;
    var translation = undefined;
    if (elementType === 'sound_button') {
      var tranEl = el.querySelector('.tran');
      if (tranEl) {
        translation = (tranEl.textContent || '').trim();
        var clone = el.cloneNode(true);
        var cloneTran = clone.querySelector('.tran');
        if (cloneTran) cloneTran.remove();
        mainText = (clone.textContent || '').trim();
      } else {
        mainText = (el.textContent || '').trim();
      }
    }

    return {
      selector: getSelector(el),
      tagName: tag,
      id: el.id || '',
      classes: classes,
      rect: { x: rect.x, y: rect.y, width: rect.width, height: rect.height },
      html: el.outerHTML.substring(0, 2000), // Limit size
      textContent: (el.textContent || '').substring(0, 1000),
      attributes: attrs,
      elementType: elementType,
      spriteKey: (elementType === 'sound_button' && el.id) ? el.id : undefined,
      mainText: mainText,
      translation: translation
    };
  }

  // --- Create highlight overlay ---
  function createHighlightOverlay() {
    if (highlightOverlay) return highlightOverlay;
    highlightOverlay = document.createElement('div');
    highlightOverlay.id = 'nge-highlight';
    highlightOverlay.style.cssText =
      'position:fixed;pointer-events:none;z-index:99999;' +
      'border:2px solid #0066ff;background:rgba(0,102,255,0.05);' +
      'transition:all 0.1s ease;display:none;';
    document.body.appendChild(highlightOverlay);
    return highlightOverlay;
  }

  // --- Show highlight on element ---
  function showHighlight(el) {
    var overlay = createHighlightOverlay();
    var rect = el.getBoundingClientRect();
    overlay.style.left = rect.x + 'px';
    overlay.style.top = rect.y + 'px';
    overlay.style.width = rect.width + 'px';
    overlay.style.height = rect.height + 'px';
    overlay.style.display = 'block';
  }

  // --- Hide highlight ---
  function hideHighlight() {
    if (highlightOverlay) {
      highlightOverlay.style.display = 'none';
    }
  }

  // --- Send message to parent ---
  function sendToParent(type, data) {
    window.parent.postMessage({ type: type, data: data }, PARENT_ORIGIN);
  }

  // --- Intercept all clicks in capture phase ---
  document.addEventListener('click', function(e) {
    if (!editMode) return;
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();

    var el = e.target;
    // Walk up to find a meaningful element (skip text nodes, tiny elements)
    while (el && el !== document.body) {
      if (el.nodeType === 1 && el.tagName !== 'BODY' && el.tagName !== 'HTML') {
        break;
      }
      el = el.parentElement;
    }

    if (el && el !== document.body) {
      sendToParent('nge:elementClicked', getElementInfo(el));
    }
  }, true); // Capture phase

  // --- Mouse hover tracking ---
  var lastHovered = null;
  document.addEventListener('mousemove', function(e) {
    if (!editMode) return;

    var el = document.elementFromPoint(e.clientX, e.clientY);
    if (!el || el === document.body || el === document.documentElement || el === highlightOverlay) {
      if (lastHovered) {
        hideHighlight();
        sendToParent('nge:elementUnhovered', null);
        lastHovered = null;
      }
      return;
    }

    if (el !== lastHovered) {
      lastHovered = el;
      showHighlight(el);
      var rect = el.getBoundingClientRect();
      sendToParent('nge:elementHovered', {
        selector: getSelector(el),
        rect: { x: rect.x, y: rect.y, width: rect.width, height: rect.height }
      });
    }
  }, true);

  document.addEventListener('mouseleave', function() {
    if (editMode) {
      hideHighlight();
      sendToParent('nge:elementUnhovered', null);
      lastHovered = null;
    }
  });

  // --- Extract Howler sprite data ---
  function findHowlInstance() {
    // Try known variable name first
    if (typeof window.nagehts !== 'undefined' && window.nagehts._sprite) {
      return window.nagehts;
    }
    // Scan global scope for any Howl instance with sprites
    var keys = Object.keys(window);
    for (var i = 0; i < keys.length; i++) {
      try {
        var obj = window[keys[i]];
        if (obj && typeof obj === 'object' && obj._sprite && obj._src) {
          return obj;
        }
      } catch(e) { /* skip */ }
    }
    return null;
  }

  var spriteExtractAttempts = 0;
  function extractSpriteData() {
    var howl = findHowlInstance();
    if (howl) {
      var src = howl._src;
      if (Array.isArray(src)) src = src[0];
      sendToParent('nge:spriteData', {
        src: src || null,
        sprites: howl._sprite
      });
    } else if (spriteExtractAttempts < 10) {
      // Retry - Howl may not be initialized yet
      spriteExtractAttempts++;
      setTimeout(extractSpriteData, 500);
    }
  }

  // --- Build DOM tree for layers panel ---
  function buildDOMTree(root, depth, maxDepth) {
    if (depth > maxDepth) return [];
    var nodes = [];
    var children = root.children;
    for (var i = 0; i < children.length; i++) {
      var child = children[i];
      // Skip script, style, meta, link, nge elements
      var tag = child.tagName.toLowerCase();
      if (['script','style','meta','link','head','noscript'].indexOf(tag) >= 0) continue;
      if (child.id && child.id.indexOf('nge-') === 0) continue;

      var classes = Array.from(child.classList);
      var label = tag;
      if (child.id) label += '#' + child.id;
      else if (classes.length > 0) label += '.' + classes[0];

      nodes.push({
        selector: getSelector(child),
        tagName: tag,
        id: child.id || '',
        classes: classes,
        depth: depth,
        label: label,
        children: buildDOMTree(child, depth + 1, maxDepth)
      });
    }
    return nodes;
  }

  // --- Save original state before first modification ---
  function saveOriginal(selector, el) {
    if (elementOriginals[selector]) return;
    var attrs = {};
    for (var i = 0; i < el.attributes.length; i++) {
      attrs[el.attributes[i].name] = el.attributes[i].value;
    }
    elementOriginals[selector] = {
      innerHTML: el.innerHTML,
      attributes: attrs
    };
  }

  // --- Apply a single patch to a target element ---
  function applyOnePatch(patch) {
    var selector = patch.selector;
    if (!selector) return;
    var el = document.querySelector(selector);
    if (!el) return;
    saveOriginal(selector, el);

    if (patch.type === 'text_change') {
      if (patch.property === 'innerHTML') {
        el.innerHTML = patch.newValue;
      } else {
        el.textContent = patch.newValue;
      }
    } else if (patch.type === 'attribute_change') {
      el.setAttribute(patch.attribute, patch.newValue);
    } else if (patch.type === 'style_change') {
      el.style.setProperty(patch.property, patch.newValue);
    }
  }

  // --- Restore all elements to original state ---
  function restoreOriginals() {
    var selectors = Object.keys(elementOriginals);
    for (var i = 0; i < selectors.length; i++) {
      var sel = selectors[i];
      var orig = elementOriginals[sel];
      var el = document.querySelector(sel);
      if (!el) continue;
      el.innerHTML = orig.innerHTML;
      // Restore original attributes
      var attrNames = Object.keys(orig.attributes);
      for (var j = 0; j < attrNames.length; j++) {
        el.setAttribute(attrNames[j], orig.attributes[attrNames[j]]);
      }
    }
  }

  // --- Listen for messages from parent ---
  window.addEventListener('message', function(e) {
    var msg = e.data;
    if (!msg || !msg.type) return;

    switch (msg.type) {
      case 'nge:enterEditMode':
        editMode = true;
        createHighlightOverlay();
        // Disable all existing click handlers on .itm, .so, .o, .x elements
        document.querySelectorAll('.itm, .so, .o, .x, button').forEach(function(el) {
          el.style.cursor = 'default';
        });
        // Wait a moment for Howl to initialize, then extract sprite data
        setTimeout(extractSpriteData, 500);
        sendToParent('nge:domReady', null);
        break;

      case 'nge:highlightElement':
        var target = document.querySelector(msg.selector);
        if (target) {
          showHighlight(target);
        }
        break;

      case 'nge:clearHighlight':
        hideHighlight();
        break;

      case 'nge:updateElement':
        var updateTarget = document.querySelector(msg.selector);
        if (updateTarget && msg.patch) {
          saveOriginal(msg.selector, updateTarget);
          applyOnePatch(msg.patch);
        }
        break;

      case 'nge:reapplyAll':
        // Restore all modified elements to original state, then re-apply patches
        restoreOriginals();
        if (msg.patches && Array.isArray(msg.patches)) {
          for (var pi = 0; pi < msg.patches.length; pi++) {
            var p = msg.patches[pi];
            if (p.selector) {
              applyOnePatch(p);
            }
          }
        }
        sendToParent('nge:reapplyDone', null);
        break;

      case 'nge:disableInteractions':
        editMode = true;
        break;

      case 'nge:getElementInfo':
        var infoTarget = document.querySelector(msg.selector);
        if (infoTarget) {
          sendToParent('nge:elementInfo', getElementInfo(infoTarget));
        }
        break;

      case 'nge:getDOMTree':
        var body = document.body;
        var tree = buildDOMTree(body, 0, 8);
        sendToParent('nge:domTree', { tree: tree });
        break;

      case 'nge:applySettings':
        applyPageSettings(msg.settings);
        break;
    }
  });

  // --- Apply page settings (translation rules) ---
  function applyPageSettings(settings) {
    if (!settings) return;

    if (settings.translation_rule === 'answer_check') {
      // Override Howl onend to prevent .tran showing
      // Instead, only show .tran on #chk click
      var script = document.createElement('script');
      script.textContent = [
        '(function() {',
        '  // Override: answer_check mode - translations only shown on #chk click',
        '  var origHowl = window.nagehts;',
        '  if (origHowl && origHowl._onend) {',
        '    var origOnend = origHowl._onend;',
        '    origHowl._onend = origOnend.map(function(fn) {',
        '      return { fn: function() {',
        '        // Run original but hide any .tran that was shown',
        '        fn.fn.apply(this, arguments);',
        '        $(".tran").hide();',
        '      }};',
        '    });',
        '  }',
        '  // Ensure #chk shows translations',
        '  $(document).off("click", "#chk").on("click", "#chk", function() {',
        '    $(".tran").show();',
        '  });',
        '})();'
      ].join('\n');
      document.body.appendChild(script);
    }
  }

  // --- Auto-enter edit mode if loaded in iframe ---
  if (window !== window.parent) {
    // Signal that bridge is ready
    sendToParent('nge:bridgeLoaded', null);
  }
})();
