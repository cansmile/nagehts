/* 드래그하여 넣기 (이동 없음 버전)
 *
 * taptogroupnomoveh.js를 대체하는 드래그 앤 드롭 인터랙션
 * 정답 시 아이템이 타겟으로 이동하되, 초기화 시 원래 위치로 돌아가지 않음
 * (#itms로 appendTo하지 않음)
 *
 * 기존 DOM 구조를 그대로 사용:
 *   button.itm.ans{N}
 *   div.itm-lst#lst-{N} > .ttl
 */
(function () {
  'use strict';

  var dragging = null;
  var dragClone = null;
  var dragOffsetX = 0;
  var dragOffsetY = 0;
  var hoveredTarget = null;
  var DRAG_THRESHOLD = 5;
  var SNAP_DURATION = 200;

  function getAnswerGroup(el) {
    var classes = el.className.split(/\s+/);
    for (var i = 0; i < classes.length; i++) {
      var match = classes[i].match(/^ans(\d+)$/);
      if (match) return parseInt(match[1], 10);
    }
    return 0;
  }

  function getTargetGroup(el) {
    var id = el.id || '';
    var match = id.match(/^lst-(\d+)$/);
    return match ? parseInt(match[1], 10) : 0;
  }

  function getEventPos(e) {
    if (e.touches && e.touches.length > 0) {
      return { x: e.touches[0].clientX, y: e.touches[0].clientY };
    }
    if (e.changedTouches && e.changedTouches.length > 0) {
      return { x: e.changedTouches[0].clientX, y: e.changedTouches[0].clientY };
    }
    return { x: e.clientX, y: e.clientY };
  }

  function elementFromPos(x, y) {
    if (dragClone) dragClone.style.pointerEvents = 'none';
    var el = document.elementFromPoint(x, y);
    if (dragClone) dragClone.style.pointerEvents = '';
    return el;
  }

  function findDropTarget(x, y) {
    var el = elementFromPos(x, y);
    while (el) {
      if (el.classList && el.classList.contains('itm-lst')) return el;
      if (el.classList && el.classList.contains('ttl')) return el.closest('.itm-lst') || el.parentElement;
      el = el.parentElement;
    }
    return null;
  }

  function createClone(el, x, y) {
    var rect = el.getBoundingClientRect();
    var clone = el.cloneNode(true);
    clone.className = el.className + ' nge-drag-clone';
    clone.style.cssText =
      'position:fixed;z-index:99999;pointer-events:none;' +
      'width:' + rect.width + 'px;' +
      'opacity:0.9;transform:scale(1.05);' +
      'box-shadow:0 4px 12px rgba(0,0,0,0.3);' +
      'transition:transform 0.1s ease;' +
      'left:' + (x - dragOffsetX) + 'px;' +
      'top:' + (y - dragOffsetY) + 'px;';
    document.body.appendChild(clone);
    return clone;
  }

  function moveClone(x, y) {
    if (!dragClone) return;
    dragClone.style.left = (x - dragOffsetX) + 'px';
    dragClone.style.top = (y - dragOffsetY) + 'px';
  }

  function highlightTarget(target) {
    if (hoveredTarget === target) return;
    if (hoveredTarget) hoveredTarget.classList.remove('nge-drop-hover');
    hoveredTarget = target;
    if (target) target.classList.add('nge-drop-hover');
  }

  function handleDrop(target) {
    if (!dragging || !target) return false;

    var ansGroup = getAnswerGroup(dragging);
    var targetGroup = getTargetGroup(target);
    var ttl = target.querySelector('.ttl');
    var isSingleItem = target.classList.contains('1itm');

    if (ansGroup === targetGroup) {
      if (typeof o !== 'undefined' && o.play) o.play();

      dragging.classList.add('w-100', 'btn-light');
      dragging.classList.remove('btn-secondary');
      if (ttl) {
        ttl.parentNode.insertBefore(dragging, ttl.nextSibling);
      } else {
        target.appendChild(dragging);
      }

      if (isSingleItem && ttl) {
        ttl.remove();
        dragging.classList.remove('itm', 'btn-secondary');
      }
      return true;
    } else {
      if (typeof x !== 'undefined' && x.play) x.play();
      snapBack();
      return false;
    }
  }

  function snapBack() {
    if (!dragging || !dragClone) return;
    var rect = dragging.getBoundingClientRect();
    dragClone.style.transition = 'all ' + SNAP_DURATION + 'ms ease';
    dragClone.style.left = rect.left + 'px';
    dragClone.style.top = rect.top + 'px';
    dragClone.style.opacity = '0.5';
    dragClone.style.transform = 'scale(1)';
    setTimeout(cleanupDrag, SNAP_DURATION);
  }

  function cleanupDrag() {
    if (dragClone && dragClone.parentNode) dragClone.parentNode.removeChild(dragClone);
    if (dragging) {
      dragging.classList.remove('nge-dragging');
      dragging.style.opacity = '';
    }
    highlightTarget(null);
    dragClone = null;
    dragging = null;
  }

  var startX = 0, startY = 0;
  var isDragging = false;
  var pendingEl = null;

  function onPointerDown(e) {
    var el = e.target.closest('button.itm');
    if (!el) return;
    if (el.parentElement && el.parentElement.classList.contains('itm-lst')) return;

    var pos = getEventPos(e);
    startX = pos.x;
    startY = pos.y;
    pendingEl = el;
    isDragging = false;

    var rect = el.getBoundingClientRect();
    dragOffsetX = pos.x - rect.left;
    dragOffsetY = pos.y - rect.top;
  }

  function onPointerMove(e) {
    if (!pendingEl) return;
    var pos = getEventPos(e);

    if (!isDragging) {
      if (Math.abs(pos.x - startX) + Math.abs(pos.y - startY) < DRAG_THRESHOLD) return;
      isDragging = true;
      dragging = pendingEl;
      dragging.classList.add('nge-dragging');
      dragging.style.opacity = '0.3';
      dragClone = createClone(dragging, pos.x, pos.y);
      if (e.cancelable) e.preventDefault();
    }

    if (isDragging) {
      if (e.cancelable) e.preventDefault();
      moveClone(pos.x, pos.y);
      highlightTarget(findDropTarget(pos.x, pos.y));
    }
  }

  function onPointerUp(e) {
    if (!pendingEl) return;

    if (isDragging && dragging) {
      var pos = getEventPos(e);
      var target = findDropTarget(pos.x, pos.y);
      if (target) {
        var success = handleDrop(target);
        if (success) cleanupDrag();
      } else {
        snapBack();
      }
    } else if (pendingEl) {
      if (!pendingEl.parentElement.classList.contains('itm-lst')) {
        pendingEl.classList.remove('btn-light');
        pendingEl.classList.toggle('btn-secondary');
      }
    }

    pendingEl = null;
    isDragging = false;
  }

  function onPointerCancel() {
    if (isDragging) snapBack();
    pendingEl = null;
    isDragging = false;
  }

  document.addEventListener('mousedown', onPointerDown, false);
  document.addEventListener('mousemove', onPointerMove, false);
  document.addEventListener('mouseup', onPointerUp, false);
  // 터치 이벤트 — touchmove/touchend/cancel은 document에서 처리
  document.addEventListener('touchmove', onPointerMove, { passive: false });
  document.addEventListener('touchend', onPointerUp, false);
  document.addEventListener('touchcancel', onPointerCancel, false);

  // touchstart: 드래그 영역에 non-passive로 등록 (모바일 스크롤 방지)
  // document에 passive 버전도 등록 (드래그 영역 밖에서 시작하는 터치 대비)
  document.addEventListener('touchstart', onPointerDown, { passive: true });

  function attachDragAreaTouch() {
    var area = document.getElementById('itms') || document.getElementById('wahl');
    if (!area) return;
    area.addEventListener('touchstart', function (e) {
      var el = e.target.closest('button.itm');
      if (!el) return;
      if (el.parentElement && el.parentElement.classList.contains('itm-lst')) return;
      // 드래그 가능한 아이템 터치 시 브라우저 기본 제스처(스크롤) 방지
      if (e.cancelable) e.preventDefault();
      // onPointerDown은 document의 passive handler가 호출함
    }, { passive: false });
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', attachDragAreaTouch);
  } else {
    attachDragAreaTouch();
  }

  // .ttl 클릭 시 선택된 아이템 넣기 (기존 호환)
  $(document).on('click', '.ttl', function () {
    var t = $(this);
    var tn = parseInt($(this).parent().attr('id').substr(4), 10);
    var tm = 0;
    var isSingle = t.parent().hasClass('1itm');

    $('.btn-secondary').each(function () {
      var ansGroup = getAnswerGroup(this);
      if (ansGroup !== tn) {
        if (typeof x !== 'undefined' && x.play) x.play();
        if ($(this).parent().hasClass('itm-lst')) {
          $(this).blur();
          $(this).addClass('btn-light');
        }
      } else {
        if (tm === 0) {
          if (typeof o !== 'undefined' && o.play) o.play();
          $(this).addClass('w-100 btn-light');
          $(this).insertAfter(t);
        }
        if ($(this).closest('.1itm').children('button').length > 0) tm = 1;
        if (isSingle) {
          t.remove();
          $(this).removeClass('itm btn-secondary');
        }
      }
    });
    $('.itm').removeClass('btn-secondary');
  });

  // Init — nomove 버전에서는 #itms로 모으지 않음
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover({ container: 'body' });
  });

  // --- 채점 검증 (공유 함수) ---
  window.nqValidateGrading = window.nqValidateGrading || function () {
    var qa = 0, qr = 0;
    $('.itm-lst').each(function () {
      var targetGroup = parseInt($(this).attr('id').substr(4), 10);
      $(this).find('button').each(function () {
        qa++;
        var ansGroup = getAnswerGroup(this);
        if (ansGroup === targetGroup) {
          $(this).addClass('text-success fw-bold');
          qr++;
        } else {
          $(this).addClass('text-danger fw-bold');
        }
      });
    });
    return { qa: qa, qr: qr };
  };

  // --- 학습 결과 저장 ---
  function nqSaveDragResult(correct, total) {
    if (!total || total <= 0) return;
    var filename = window.location.pathname.split('/').pop();
    if (!filename) return;
    fetch('/api/progress/save-by-file', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
      credentials: 'same-origin',
      body: JSON.stringify({ filename: filename, correct_count: correct, total_count: total })
    }).then(function (res) { return res.json(); })
      .then(function (json) {
        if (json.score !== undefined) console.log('[nqGrading] 저장됨: ' + correct + '/' + total + ' (' + json.score + '%)');
      }).catch(function () {});
  }

  $(document).ready(function () {
    var chkEl = document.getElementById('chk');
    if (!chkEl) return;
    var observer = new MutationObserver(function (mutations) {
      mutations.forEach(function (m) {
        if (m.type === 'attributes' && m.attributeName === 'id' && chkEl.id === 'done') {
          observer.disconnect();
          setTimeout(function () {
            var qa = document.querySelectorAll('.itm-lst button.itm').length;
            var qr = document.querySelectorAll('.itm-lst button.text-success, .itm-lst button.fw-bold.text-success').length;
            nqSaveDragResult(qr, qa);
          }, 0);
        }
      });
    });
    observer.observe(chkEl, { attributes: true });
  });

  // CSS
  var style = document.createElement('style');
  style.textContent =
    '.nge-dragging { cursor: grabbing !important; }' +
    '.nge-drag-clone { cursor: grabbing; border-radius: 4px; }' +
    '.nge-drop-hover { outline: 2px dashed #0d6efd !important; outline-offset: 2px; background-color: rgba(13,110,253,0.08) !important; transition: all 0.15s ease; }' +
    'button.itm { cursor: grab; touch-action: none; user-select: none; -webkit-user-select: none; }' +
    'button.itm:active { cursor: grabbing; }' +
    '.itm-lst button.itm { cursor: default; touch-action: auto; }';
  document.head.appendChild(style);

})();
