/**
 * Na, geht's? - Drag & Drop Group (No Move variant)
 * Replaces taptogroupnomoveh.js with touch/mouse drag support.
 * Same as draggroup.js but items start in their original positions
 * instead of being moved to #itms on load.
 *
 * Required DOM structure:
 *   button.itm.ans{N}   (draggable items, already in place)
 *   div#lsts > div.itm-lst#lst-{N} > .ttl   (drop targets)
 */
(function () {
  'use strict';

  var dragEl = null;
  var dragClone = null;
  var startX = 0, startY = 0;
  var offsetX = 0, offsetY = 0;
  var isDragging = false;
  var DRAG_THRESHOLD = 5;

  $(document).ready(function () {
    // NOTE: Unlike draggroup.js, do NOT move items to #itms
    $("[data-toggle='popover']").popover({ container: "body" });
    setupDraggables();
    setupDroppables();
  });

  function setupDraggables() {
    var $items = $("button.itm");
    $items.on("mousedown", onDragStart);
    $(document).on("mousemove", onDragMove);
    $(document).on("mouseup", onDragEnd);
    $items.on("touchstart", onTouchStart);
    $(document).on("touchmove", onTouchMove);
    $(document).on("touchend touchcancel", onTouchEnd);
    $items.on("dragstart", function (e) { e.preventDefault(); });
    $items.css({ "cursor": "grab", "touch-action": "none", "user-select": "none" });
  }

  function setupDroppables() {
    $(".itm-lst").each(function () {
      $(this).css({ "min-height": "50px", "transition": "background-color 0.2s" });
    });
  }

  function onDragStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    e.preventDefault();
    initDrag(this, e.pageX, e.pageY);
  }
  function onDragMove(e) { if (!dragEl) return; e.preventDefault(); moveDrag(e.pageX, e.pageY); }
  function onDragEnd(e) { if (!dragEl) return; endDrag(e.pageX, e.pageY); }

  function onTouchStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    var t = e.originalEvent.touches[0];
    initDrag(this, t.pageX, t.pageY);
  }
  function onTouchMove(e) {
    if (!dragEl) return; e.preventDefault();
    var t = e.originalEvent.touches[0]; moveDrag(t.pageX, t.pageY);
  }
  function onTouchEnd(e) {
    if (!dragEl) return;
    var px = startX, py = startY;
    if (e.originalEvent.changedTouches && e.originalEvent.changedTouches.length) {
      var t = e.originalEvent.changedTouches[0]; px = t.pageX; py = t.pageY;
    }
    endDrag(px, py);
  }

  function initDrag(el, x, y) {
    dragEl = el; startX = x; startY = y; isDragging = false;
    var r = el.getBoundingClientRect();
    offsetX = x - r.left - window.scrollX;
    offsetY = y - r.top - window.scrollY;
  }

  function moveDrag(x, y) {
    if (!dragEl) return;
    if (!isDragging) {
      if (Math.sqrt(Math.pow(x - startX, 2) + Math.pow(y - startY, 2)) < DRAG_THRESHOLD) return;
      isDragging = true;
      createClone();
    }
    if (dragClone) { dragClone.style.left = (x - offsetX) + "px"; dragClone.style.top = (y - offsetY) + "px"; }
    highlightTarget(x, y);
  }

  function endDrag(x, y) {
    if (!dragEl) return;
    if (isDragging) {
      var target = findTarget(x, y);
      if (target) handleDrop(dragEl, target); else animateReturn();
    } else {
      $(dragEl).toggleClass("btn-secondary").removeClass("btn-light");
    }
    cleanup();
  }

  function createClone() {
    if (!dragEl) return;
    dragClone = dragEl.cloneNode(true);
    dragClone.id = "";
    Object.assign(dragClone.style, {
      position: "fixed", zIndex: "99999", pointerEvents: "none",
      opacity: "0.85", transform: "scale(1.05) rotate(2deg)",
      transition: "transform 0.15s, opacity 0.15s",
      boxShadow: "0 4px 16px rgba(0,0,0,0.2)"
    });
    var r = dragEl.getBoundingClientRect();
    dragClone.style.width = r.width + "px";
    dragClone.style.left = r.left + "px";
    dragClone.style.top = r.top + "px";
    document.body.appendChild(dragClone);
    $(dragEl).css("opacity", "0.3");
  }

  function animateReturn() {
    if (!dragClone || !dragEl) return;
    var r = dragEl.getBoundingClientRect();
    Object.assign(dragClone.style, { transition: "all 0.3s ease", left: r.left + "px", top: r.top + "px", opacity: "0" });
    setTimeout(removeClone, 300);
  }

  function removeClone() {
    if (dragClone && dragClone.parentNode) dragClone.parentNode.removeChild(dragClone);
    dragClone = null;
  }

  function cleanup() {
    if (dragEl) $(dragEl).css("opacity", "");
    removeClone(); dragEl = null; isDragging = false;
    $(".itm-lst").css("background-color", "").removeClass("nge-drop-hover");
  }

  function findTarget(x, y) {
    var result = null;
    $(".itm-lst").each(function () {
      var r = this.getBoundingClientRect();
      if (x >= r.left && x <= r.right && y >= r.top && y <= r.bottom) result = this;
    });
    return result;
  }

  function highlightTarget(x, y) {
    $(".itm-lst").css("background-color", "").removeClass("nge-drop-hover");
    var t = findTarget(x, y);
    if (t) $(t).css("background-color", "rgba(0,102,255,0.1)").addClass("nge-drop-hover");
  }

  function handleDrop(item, target) {
    var $item = $(item);
    var targetN = $(target).attr("id").substr(4);
    var itemAns = null;
    for (var i = 1; i <= $(".itm-lst").length; i++) {
      if ($item.hasClass("ans" + i)) { itemAns = i; break; }
    }

    if (String(itemAns) !== String(targetN)) {
      if (typeof x !== "undefined" && x.play) x.play();
      if (dragClone) {
        dragClone.style.transform = "translateX(-10px)";
        setTimeout(function () {
          if (dragClone) dragClone.style.transform = "translateX(10px)";
          setTimeout(function () { if (dragClone) dragClone.style.transform = "translateX(0)"; }, 80);
        }, 80);
      }
      setTimeout(animateReturn, 250);
      return;
    }

    if (typeof o !== "undefined" && o.play) o.play();
    var $ttl = $(target).find(".ttl");
    $item.addClass("w-100 btn-light").removeClass("btn-secondary");
    $item.insertAfter($ttl);
    if ($(target).hasClass("1itm")) { $ttl.remove(); $item.removeClass("itm"); }
    removeClone();
    $item.css({ opacity: "", transform: "scale(1.05)", transition: "transform 0.2s" });
    setTimeout(function () { $item.css("transform", ""); }, 200);
  }

  var style = document.createElement("style");
  style.textContent =
    ".nge-drop-hover{outline:2px dashed #0066ff;outline-offset:-2px}" +
    "button.itm{transition:opacity .2s,transform .2s}" +
    "button.itm:active{cursor:grabbing}";
  document.head.appendChild(style);
})();
