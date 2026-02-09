/**
 * Na, geht's? - Drag & Drop Compare Assignment
 * Replaces taptocompareh.js with touch/mouse drag support.
 *
 * Required DOM structure:
 *   div#itms > button.itm.ans{N}   (draggable items with answer class)
 *   div#lsts > div.itm-lst#lst-{N} > .ttl   (drop targets in table rows)
 *   th[scope=row]#th-{N}   (table header rows for comparison)
 *
 * Compare array: global `cp` array maps item IDs to their compare partners.
 * Sound effects: global `o` (correct) and `x` (wrong) Howl instances.
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
    $(".itm").appendTo("#itms");
    $("[data-toggle='popover']").popover({ container: "body" });
    setupDraggables();
    setupDroppables();
    setupReset();
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

  function setupReset() {
    $("#rst").on("click", function () {
      $(".itm").each(function () {
        $(this).appendTo("#itms");
        $(this).removeClass("w-100 btn-light btn-secondary");
      });
    });
  }

  // --- Mouse handlers ---
  function onDragStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    e.preventDefault();
    initDrag(this, e.pageX, e.pageY);
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

  // --- Touch handlers ---
  function onTouchStart(e) {
    if ($(this).parent().hasClass("itm-lst") && !$(this).hasClass("itm")) return;
    var t = e.originalEvent.touches[0];
    initDrag(this, t.pageX, t.pageY);
  }
  function onTouchMove(e) {
    if (!dragEl) return;
    e.preventDefault();
    var t = e.originalEvent.touches[0];
    moveDrag(t.pageX, t.pageY);
  }
  function onTouchEnd(e) {
    if (!dragEl) return;
    var px = startX, py = startY;
    if (e.originalEvent.changedTouches && e.originalEvent.changedTouches.length) {
      var t = e.originalEvent.changedTouches[0];
      px = t.pageX; py = t.pageY;
    }
    endDrag(px, py);
  }

  // --- Core logic ---
  function initDrag(el, x, y) {
    dragEl = el;
    startX = x; startY = y;
    isDragging = false;
    var rect = el.getBoundingClientRect();
    offsetX = x - rect.left - window.scrollX;
    offsetY = y - rect.top - window.scrollY;
  }

  function moveDrag(x, y) {
    if (!dragEl) return;
    if (!isDragging) {
      if (Math.sqrt(Math.pow(x - startX, 2) + Math.pow(y - startY, 2)) < DRAG_THRESHOLD) return;
      isDragging = true;
      createClone();
    }
    if (dragClone) {
      dragClone.style.left = (x - offsetX) + "px";
      dragClone.style.top = (y - offsetY) + "px";
    }
    highlightTarget(x, y);
  }

  function endDrag(x, y) {
    if (!dragEl) return;
    if (isDragging) {
      var target = findTarget(x, y);
      if (target) {
        handleDrop(dragEl, target);
      } else {
        animateReturn();
      }
    } else {
      $(dragEl).toggleClass("btn-secondary");
      $(dragEl).removeClass("btn-light");
    }
    cleanup();
  }

  // --- Clone ---
  function createClone() {
    if (!dragEl) return;
    dragClone = dragEl.cloneNode(true);
    dragClone.id = "";
    Object.assign(dragClone.style, {
      position: "fixed", zIndex: "99999", pointerEvents: "none",
      opacity: "0.85", transform: "scale(1.05) rotate(2deg)",
      transition: "transform 0.15s, opacity 0.15s",
      boxShadow: "0 4px 16px rgba(0,0,0,0.2)",
    });
    var rect = dragEl.getBoundingClientRect();
    dragClone.style.width = rect.width + "px";
    dragClone.style.left = rect.left + "px";
    dragClone.style.top = rect.top + "px";
    document.body.appendChild(dragClone);
    $(dragEl).css("opacity", "0.3");
  }

  function animateReturn() {
    if (!dragClone || !dragEl) return;
    var rect = dragEl.getBoundingClientRect();
    Object.assign(dragClone.style, {
      transition: "all 0.3s ease",
      left: rect.left + "px", top: rect.top + "px", opacity: "0"
    });
    setTimeout(removeClone, 300);
  }

  function removeClone() {
    if (dragClone && dragClone.parentNode) dragClone.parentNode.removeChild(dragClone);
    dragClone = null;
  }

  function cleanup() {
    if (dragEl) $(dragEl).css("opacity", "");
    removeClone();
    dragEl = null; isDragging = false;
    $(".itm-lst").css("background-color", "").removeClass("nge-drop-hover");
  }

  // --- Drop target ---
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
    if (t) { $(t).css("background-color", "rgba(0,102,255,0.1)").addClass("nge-drop-hover"); }
  }

  // --- Drop handler with compare logic ---
  function handleDrop(item, target) {
    var $item = $(item);
    var targetN = $(target).attr("id").substr(4);

    // Get answer number
    var itemAns = null;
    for (var i = 1; i <= $(".itm-lst").length; i++) {
      if ($item.hasClass("ans" + i)) { itemAns = i; break; }
    }

    // Get the table row for comparison
    var $ttl = $(target).find(".ttl");
    var th = $ttl.closest("th[scope=row]").attr("id");
    var thNum = th ? parseInt(th.substr(3)) : 0;
    var ths = $("th[scope=row]").length;
    var half = ths / 2;
    var opp = thNum <= half ? thNum + half : thNum - half;

    // Check compare partner
    var oppBtn = $("#th-" + opp).find("button");
    var cpi = null;
    if (oppBtn.length && typeof cp !== "undefined") {
      var bti = parseInt(oppBtn.attr("id"));
      cpi = cp[bti - 1];
    }

    if (String(itemAns) !== String(targetN)) {
      // Wrong group
      wrongAnswer();
      return;
    }

    // Correct group - now check compare logic
    var itemId = parseInt($item.attr("id"));

    if (cpi) {
      // Opposite side has a button - check if this item matches
      if (cpi === itemId) {
        correctDrop($item, $ttl, target);
      } else {
        wrongAnswer();
      }
    } else {
      // No opposite button - check if partner is still in #itms
      if (typeof cp !== "undefined" && cp[itemId - 1] && $("#itms").find("button#" + cp[itemId - 1]).length) {
        correctDrop($item, $ttl, target);
      } else {
        wrongAnswer();
      }
    }
  }

  function correctDrop($item, $ttl, target) {
    if (typeof o !== "undefined" && o.play) o.play();
    $item.addClass("w-100 btn-light").removeClass("btn-secondary");
    $item.insertAfter($ttl);
    if ($(target).hasClass("1itm")) {
      $ttl.remove();
      $item.removeClass("itm");
    }
    removeClone();
    $item.css({ opacity: "", transform: "scale(1.05)", transition: "transform 0.2s" });
    setTimeout(function () { $item.css("transform", ""); }, 200);
  }

  function wrongAnswer() {
    if (typeof x !== "undefined" && x.play) x.play();
    if (dragClone) {
      dragClone.style.transform = "translateX(-10px)";
      setTimeout(function () {
        if (dragClone) dragClone.style.transform = "translateX(10px)";
        setTimeout(function () {
          if (dragClone) dragClone.style.transform = "translateX(0)";
        }, 80);
      }, 80);
    }
    setTimeout(animateReturn, 250);
  }

  // CSS
  var style = document.createElement("style");
  style.textContent =
    ".nge-drop-hover{outline:2px dashed #0066ff;outline-offset:-2px}" +
    "button.itm{transition:opacity .2s,transform .2s}" +
    "button.itm:active{cursor:grabbing}";
  document.head.appendChild(style);

})();
