/* 드래그하여 비교/연결하기
 *
 * taptocompareh.js를 대체하는 드래그 앤 드롭 인터랙션
 * 양쪽 테이블에서 서로 짝을 맞추는 비교 인터랙션
 * cp 배열을 통한 짝 검증 지원
 *
 * 기존 DOM 구조:
 *   div#itms > button.itm.ans{N}
 *   th#th-{N} > div.itm-lst#lst-{N} > .ttl
 *   cp 배열: 각 아이템의 짝 아이디
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
    if (e.touches && e.touches.length > 0) return { x: e.touches[0].clientX, y: e.touches[0].clientY };
    if (e.changedTouches && e.changedTouches.length > 0) return { x: e.changedTouches[0].clientX, y: e.changedTouches[0].clientY };
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
      'width:' + rect.width + 'px;opacity:0.9;transform:scale(1.05);' +
      'box-shadow:0 4px 12px rgba(0,0,0,0.3);transition:transform 0.1s ease;' +
      'left:' + (x - dragOffsetX) + 'px;top:' + (y - dragOffsetY) + 'px;';
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

  // 좌우 행 높이 동기화 (번역 표시 등으로 높이가 달라질 때)
  var syncTimer = null;
  function syncRowHeights() {
    var ths = $('th[scope=row]');
    if (ths.length < 2) return;
    var half = Math.floor(ths.length / 2);
    for (var i = 1; i <= half; i++) {
      var l = $('#th-' + i);
      var r = $('#th-' + (i + half));
      l.css('height', 'auto');
      r.css('height', 'auto');
      var h = Math.max(l.outerHeight(), r.outerHeight());
      l.height(h);
      r.height(h);
    }
  }
  function debouncedSync() {
    if (syncTimer) clearTimeout(syncTimer);
    syncTimer = setTimeout(syncRowHeights, 50);
  }

  function checkPairMatch(itemEl, targetEl) {
    // cp 배열이 있으면 짝 검증
    if (typeof cp !== 'undefined' && Array.isArray(cp)) {
      var itemId = parseInt(itemEl.id, 10) || 0;
      var partnerId = cp[itemId - 1]; // 이 아이템의 짝

      // targetEl(itm-lst)의 부모 th를 기준으로 반대쪽 확인
      var targetTh = targetEl.closest ? targetEl.closest('th[scope=row]') : $(targetEl).closest('th[scope=row]')[0];
      if (!targetTh) return true; // th 못찾으면 허용

      var ths = $('th[scope=row]').length;
      var half = ths / 2;
      var thNum = parseInt(targetTh.id.substr(3), 10);
      var oppNum = thNum <= half ? thNum + half : thNum - half;
      var oppBtn = $('#th-' + oppNum).find('button');

      if (oppBtn.length && oppBtn.attr('id')) {
        var oppId = parseInt(oppBtn.attr('id'), 10);
        // 반대쪽에 버튼이 있으면: 현재 아이템이 그 버튼의 짝인지 확인
        if (cp[oppId - 1] !== itemId) {
          return false; // 짝이 아님 → 거부
        }
      } else {
        // 반대쪽이 비어있으면: 짝이 아직 풀(#itms)에 있는지 확인
        if (!$('#itms').find('button#' + partnerId).length) {
          return false; // 짝이 이미 다른 행에 배치됨 → 거부
        }
      }
    }
    return true;
  }

  function handleDrop(target) {
    if (!dragging || !target) return false;

    var ansGroup = getAnswerGroup(dragging);
    var targetGroup = getTargetGroup(target);
    var ttl = target.querySelector('.ttl');
    var isSingleItem = target.classList.contains('1itm');

    if (ansGroup === targetGroup) {
      // 짝 검증 (cp 배열)
      var pairValid = checkPairMatch(dragging, target);

      if (pairValid) {
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
    setTimeout(cleanupDrag, SNAP_DURATION);
  }

  function cleanupDrag() {
    if (dragClone && dragClone.parentNode) dragClone.parentNode.removeChild(dragClone);
    if (dragging) { dragging.classList.remove('nge-dragging'); dragging.style.opacity = ''; }
    highlightTarget(null);
    dragClone = null;
    dragging = null;
  }

  var startX = 0, startY = 0, isDragging = false, pendingEl = null;

  function onPointerDown(e) {
    var el = e.target.closest('button.itm');
    if (!el) return;
    if (el.parentElement && el.parentElement.classList.contains('itm-lst')) return;

    var pos = getEventPos(e);
    startX = pos.x; startY = pos.y;
    pendingEl = el; isDragging = false;

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
        if (success) {
          cleanupDrag();
          syncRowHeights();
          // 드래그로 배치 완료 시 wahl.php의 donewahl() 감지 트리거
          setTimeout(function () { $(document).trigger('click'); }, 50);
        }
      } else {
        snapBack();
      }
    } else if (pendingEl) {
      if (!pendingEl.parentElement.classList.contains('itm-lst')) {
        pendingEl.classList.remove('btn-light');
        pendingEl.classList.toggle('btn-secondary');
      }
    }
    pendingEl = null; isDragging = false;
  }

  function onPointerCancel() {
    if (isDragging) snapBack();
    pendingEl = null; isDragging = false;
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
    var th = $(this).closest('th[scope=row]').attr('id');
    var thNum = th ? parseInt(th.substr(3), 10) : 0;
    var ths = $('th[scope=row]').length;
    var half = ths / 2;
    var opp = thNum <= half ? thNum + half : thNum - half;

    var bt = $('#th-' + opp).find('button');
    var bti = bt.length ? bt.attr('id') : null;
    var cpi = (typeof cp !== 'undefined' && bti) ? cp[parseInt(bti, 10) - 1] : null;

    $('.btn-secondary').each(function () {
      var tt = $(this);
      var ansGroup = getAnswerGroup(this);

      if (ansGroup !== tn) {
        if (typeof x !== 'undefined' && x.play) x.play();
        if ($(this).parent().hasClass('itm-lst')) {
          $(this).blur();
          $(this).addClass('btn-light');
        }
      } else {
        if (cpi) {
          if (cpi == tt.attr('id')) {
            if (tm === 0) {
              if (typeof o !== 'undefined' && o.play) o.play();
              $(this).addClass('w-100 btn-light');
              $(this).insertAfter(t);
            }
            if ($(this).closest('.1itm').children('button').length) tm = 1;
            if (t.parent().hasClass('1itm')) {
              t.remove();
              $(this).removeClass('itm btn-secondary');
            }
          } else {
            if (typeof x !== 'undefined' && x.play) x.play();
            if ($(this).parent().hasClass('itm-lst')) {
              $(this).blur();
              $(this).addClass('btn-light');
            }
          }
        } else {
          if ($('#itms').find('button#' + (typeof cp !== 'undefined' ? cp[parseInt(tt.attr('id'), 10) - 1] : '')).length) {
            if (tm === 0) {
              if (typeof o !== 'undefined' && o.play) o.play();
              $(this).addClass('w-100 btn-light');
              $(this).insertAfter(t);
            }
            if ($(this).closest('.1itm').children('button').length) tm = 1;
            if (t.parent().hasClass('1itm')) {
              t.remove();
              $(this).removeClass('itm btn-secondary');
            }
          } else {
            if (typeof x !== 'undefined' && x.play) x.play();
            if ($(this).parent().hasClass('itm-lst')) {
              $(this).blur();
              $(this).addClass('btn-light');
            }
          }
        }
      }
    });
    $('.itm').removeClass('btn-secondary');
    syncRowHeights();
  });

  // 되돌리기
  $('#rst').on('click', function () {
    for (var i = 1; i <= $('.itm').length; i++) {
      var btn = $('#' + i);
      btn.appendTo('#itms');
      btn.removeClass('w-100 btn-light btn-secondary');
    }
  });

  $(document).ready(function () {
    if ($('#itms').length) $('.itm').appendTo('#itms');
    $('[data-toggle="popover"]').popover({ container: 'body' });

    // 클릭마다 높이 동기화 (번역 토글, 아이템 배치 등)
    $(document).on('click', function () {
      setTimeout(syncRowHeights, 100);
    });
    // 윈도우 리사이즈 시 높이 재계산
    window.addEventListener('resize', debouncedSync);
    // 초기 높이 동기화
    setTimeout(syncRowHeights, 200);
    // 전역 접근 (PHP onend 등에서 호출 가능)
    window.nqSyncRowHeights = syncRowHeights;
  });

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
