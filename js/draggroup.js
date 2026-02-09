/**
 * Na, geht's? - Drag & Drop Group Assignment
 * Replaces taptogrouph.js with touch/mouse drag support.
 *
 * Required DOM structure:
 *   div#itms > button.itm.ans{N}   (draggable items with answer class)
 *   div#lsts > div.itm-lst#lst-{N} > .ttl   (drop targets)
 *
 * Sound effects: global `o` (correct) and `x` (wrong) Howl instances.
 */
(function () {
  'use strict';

  // --- State ---
  var dragEl = null;       // Currently dragged element
  var dragClone = null;    // Visual clone for dragging
  var startX = 0, startY = 0;
  var offsetX = 0, offsetY = 0;
  var isDragging = false;
  var DRAG_THRESHOLD = 5;  // px before drag starts

  // --- Init on DOM ready ---
  $(document).ready(function () {
    // Move items to #itms container (original behavior)
    $(".itm").appendTo("#itms");
    $("[data-toggle='popover']").popover({ container: "body" });

    // Setup draggable items
    setupDraggables();

    // Setup droppable targets
    setupDroppables();
  });

  // --- Setup draggable items ---
  function setupDraggables() {
    var $items = $("button.itm");

    // Mouse events
    $items.on("mousedown", onDragStart);
    $(document).on("mousemove", onDragMove);
    $(document).on("mouseup", onDragEnd);

    // Touch events
    $items.on("touchstart", onTouchStart);
    $(document).on("touchmove", onTouchMove);
    $(document).on("touchend touchcancel", onTouchEnd);

    // Prevent default drag behavior
    $items.on("dragstart", function (e) { e.preventDefault(); });

    // Add visual cue
    $items.css("cursor", "grab");
    $items.css("touch-action", "none");
    $items.css("user-select", "none");
  }

  // --- Setup droppable targets ---
  function setupDroppables() {
    $(".itm-lst").each(function () {
      $(this).css("min-height", "50px");
      $(this).css("transition", "background-color 0.2s");
    });
  }

  // --- Mouse drag handlers ---
  function onDragStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    e.preventDefault();
    startDrag(this, e.pageX, e.pageY);
  }

  function onDragMove(e) {
    if (!dragEl) return;
    e.preventDefault();
    moveDrag(e.pageX, e.pageY);
  }

  function onDragEnd(e) {
    if (!dragEl) return;
    endDrag(e.pageX, e.pageY);
  }

  // --- Touch drag handlers ---
  function onTouchStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    var touch = e.originalEvent.touches[0];
    startDrag(this, touch.pageX, touch.pageY);
  }

  function onTouchMove(e) {
    if (!dragEl) return;
    e.preventDefault();
    var touch = e.originalEvent.touches[0];
    moveDrag(touch.pageX, touch.pageY);
  }

  function onTouchEnd(e) {
    if (!dragEl) return;
    var x = startX, y = startY; // fallback
    if (e.originalEvent.changedTouches && e.originalEvent.changedTouches.length) {
      var touch = e.originalEvent.changedTouches[0];
      x = touch.pageX;
      y = touch.pageY;
    }
    endDrag(x, y);
  }

  // --- Core drag logic ---
  function startDrag(el, x, y) {
    dragEl = el;
    startX = x;
    startY = y;
    isDragging = false;

    var rect = el.getBoundingClientRect();
    offsetX = x - rect.left - window.scrollX;
    offsetY = y - rect.top - window.scrollY;
  }

  function moveDrag(x, y) {
    if (!dragEl) return;

    // Check threshold
    if (!isDragging) {
      var dx = x - startX;
      var dy = y - startY;
      if (Math.sqrt(dx * dx + dy * dy) < DRAG_THRESHOLD) return;
      isDragging = true;
      createClone();
    }

    // Move clone
    if (dragClone) {
      dragClone.style.left = (x - offsetX) + "px";
      dragClone.style.top = (y - offsetY) + "px";
    }

    // Highlight drop target under cursor
    highlightDropTarget(x, y);
  }

  function endDrag(x, y) {
    if (!dragEl) return;

    if (isDragging) {
      var target = findDropTarget(x, y);
      if (target) {
        handleDrop(dragEl, target);
      } else {
        // Animate back (snap)
        animateReturn();
      }
    } else {
      // It was just a click, toggle selection (backward compat)
      $(dragEl).toggleClass("btn-secondary");
      $(dragEl).removeClass("btn-light");
    }

    cleanup();
  }

  // --- Clone management ---
  function createClone() {
    if (!dragEl) return;

    // Create visual clone
    dragClone = dragEl.cloneNode(true);
    dragClone.id = "";
    dragClone.style.position = "fixed";
    dragClone.style.zIndex = "99999";
    dragClone.style.pointerEvents = "none";
    dragClone.style.opacity = "0.85";
    dragClone.style.transform = "scale(1.05) rotate(2deg)";
    dragClone.style.transition = "transform 0.15s, opacity 0.15s";
    dragClone.style.boxShadow = "0 4px 16px rgba(0,0,0,0.2)";

    var rect = dragEl.getBoundingClientRect();
    dragClone.style.width = rect.width + "px";
    dragClone.style.left = rect.left + "px";
    dragClone.style.top = rect.top + "px";

    document.body.appendChild(dragClone);

    // Dim original
    $(dragEl).css("opacity", "0.3");
  }

  function animateReturn() {
    if (!dragClone || !dragEl) return;
    var rect = dragEl.getBoundingClientRect();
    dragClone.style.transition = "all 0.3s ease";
    dragClone.style.left = rect.left + "px";
    dragClone.style.top = rect.top + "px";
    dragClone.style.opacity = "0";
    setTimeout(function () {
      removeClone();
    }, 300);
  }

  function removeClone() {
    if (dragClone && dragClone.parentNode) {
      dragClone.parentNode.removeChild(dragClone);
    }
    dragClone = null;
  }

  function cleanup() {
    if (dragEl) {
      $(dragEl).css("opacity", "");
    }
    removeClone();
    dragEl = null;
    isDragging = false;

    // Remove all highlights
    $(".itm-lst").css("background-color", "");
    $(".itm-lst").removeClass("nge-drop-hover");
  }

  // --- Drop target detection ---
  function findDropTarget(x, y) {
    var targets = $(".itm-lst");
    var result = null;

    targets.each(function () {
      var rect = this.getBoundingClientRect();
      if (
        x >= rect.left && x <= rect.right &&
        y >= rect.top && y <= rect.bottom
      ) {
        result = this;
      }
    });

    return result;
  }

  function highlightDropTarget(x, y) {
    $(".itm-lst").css("background-color", "");
    $(".itm-lst").removeClass("nge-drop-hover");

    var target = findDropTarget(x, y);
    if (target) {
      $(target).css("background-color", "rgba(0, 102, 255, 0.1)");
      $(target).addClass("nge-drop-hover");
    }
  }

  // --- Handle drop ---
  function handleDrop(item, target) {
    var $item = $(item);
    var targetN = $(target).attr("id").substr(4); // "lst-1" -> "1"

    // Find answer class (ans1, ans2, etc.)
    var itemAns = null;
    var numGroups = $(".itm-lst").length;
    for (var i = 1; i <= numGroups; i++) {
      if ($item.hasClass("ans" + i)) {
        itemAns = i;
        break;
      }
    }

    if (String(itemAns) !== String(targetN)) {
      // Wrong answer
      if (typeof x !== "undefined" && x.play) x.play();

      // Shake animation on clone
      if (dragClone) {
        dragClone.style.transform = "translateX(-10px)";
        setTimeout(function () {
          dragClone.style.transform = "translateX(10px)";
          setTimeout(function () {
            dragClone.style.transform = "translateX(0)";
          }, 80);
        }, 80);
      }

      // Return to original position
      setTimeout(function () { animateReturn(); }, 250);
      return;
    }

    // Correct answer
    if (typeof o !== "undefined" && o.play) o.play();

    // Move item into the target group
    var $ttl = $(target).find(".ttl");
    $item.addClass("w-100 btn-light");
    $item.removeClass("btn-secondary");
    $item.insertAfter($ttl);

    // If single-item group (.1itm), remove title and mark item
    if ($(target).hasClass("1itm")) {
      $ttl.remove();
      $item.removeClass("itm");
    }

    // Remove clone immediately
    removeClone();
    $item.css("opacity", "");

    // Add subtle success animation
    $item.css("transform", "scale(1.05)");
    $item.css("transition", "transform 0.2s");
    setTimeout(function () {
      $item.css("transform", "");
    }, 200);
  }

  // --- CSS injection for drag states ---
  var style = document.createElement("style");
  style.textContent =
    ".nge-drop-hover { outline: 2px dashed #0066ff; outline-offset: -2px; }" +
    "button.itm { transition: opacity 0.2s, transform 0.2s; }" +
    "button.itm:active { cursor: grabbing; }";
  document.head.appendChild(style);

})();
