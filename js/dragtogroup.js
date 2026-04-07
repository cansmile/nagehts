/* 드래그하여 넣기 (Drag to Group)
 *
 * taptogrouph.js를 대체하는 드래그 앤 드롭 인터랙션
 * 기존 DOM 구조를 그대로 사용:
 *   div#itms > button.itm.ans{N}
 *   div#lsts > div.itm-lst#lst-{N} > .ttl
 *
 * 터치 + 마우스 모두 지원
 */
(function () {
  'use strict';

  // --- State ---
  var dragging = null;       // 현재 드래그 중인 요소
  var dragClone = null;      // 드래그 시 보이는 복제본
  var dragOffsetX = 0;
  var dragOffsetY = 0;
  var dropTargets = [];      // .itm-lst 요소들
  var hoveredTarget = null;  // 현재 호버 중인 드롭 타겟

  // --- Configuration ---
  var DRAG_THRESHOLD = 5;    // 드래그 시작 임계값 (px)
  var SNAP_DURATION = 200;   // 스냅 애니메이션 시간 (ms)

  // --- Sound references (globally defined by pages) ---
  // o = correct sound, x = wrong sound

  // --- Utility ---
  function getAnswerGroup(el) {
    // button.itm의 ans{N} 클래스에서 번호 추출
    var classes = el.className.split(/\s+/);
    for (var i = 0; i < classes.length; i++) {
      var match = classes[i].match(/^ans(\d+)$/);
      if (match) return parseInt(match[1], 10);
    }
    return 0;
  }

  function getTargetGroup(el) {
    // .itm-lst의 id에서 번호 추출: "lst-{N}" → N
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
    // dragClone을 일시적으로 숨겨서 아래 요소를 찾기
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

  // --- Create drag clone ---
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

  // --- Move clone ---
  function moveClone(x, y) {
    if (!dragClone) return;
    dragClone.style.left = (x - dragOffsetX) + 'px';
    dragClone.style.top = (y - dragOffsetY) + 'px';
  }

  // --- Highlight drop target ---
  function highlightTarget(target) {
    if (hoveredTarget === target) return;
    if (hoveredTarget) {
      hoveredTarget.classList.remove('nge-drop-hover');
    }
    hoveredTarget = target;
    if (target) {
      target.classList.add('nge-drop-hover');
    }
  }

  // --- Handle drop ---
  // 정답 검증 없이 아무 슬롯에나 배치 가능 (채점은 nqValidateGrading에서 수행)
  function handleDrop(target) {
    if (!dragging || !target) return false;

    var ttl = target.querySelector('.ttl');
    // 1itm 클래스이거나, 이미 버튼이 있고 ttl이 없는 존 = 이미 1개 차있음 → 교체
    var isSingleItem = target.classList.contains('1itm');
    var hasExistingBtn = !ttl && target.querySelector('button');
    if (hasExistingBtn) isSingleItem = true;

    // 이미 차 있는 1itm 슬롯 → 기존 버튼을 #itms로 되돌리기 (교체)
    if (isSingleItem && !ttl) {
      var existing = target.querySelector('button');
      if (existing) {
        var source = document.getElementById('itms');
        if (source) {
          existing.classList.remove('w-100', 'btn-light');
          existing.classList.add('itm');
          source.appendChild(existing);
          // #wahl 다시 표시 (아이템이 되돌아왔으므로)
          $('#wahl').show();
          $('#marg').show();
        }
      }
    }

    // 버튼을 타겟에 넣기 (항상 수락)
    dragging.classList.add('w-100', 'btn-light');
    dragging.classList.remove('btn-secondary');
    if (ttl) {
      ttl.parentNode.insertBefore(dragging, ttl.nextSibling);
    } else {
      target.appendChild(dragging);
    }

    // 한 아이템만 넣는 상자면 타이틀 제거
    if (isSingleItem && ttl) {
      ttl.remove();
      dragging.classList.remove('itm');
    }

    return true;
  }

  // --- Snap back animation ---
  function snapBack() {
    if (!dragging || !dragClone) return;

    var el = dragging;
    var rect = el.getBoundingClientRect();
    dragClone.style.transition = 'all ' + SNAP_DURATION + 'ms ease';
    dragClone.style.left = rect.left + 'px';
    dragClone.style.top = rect.top + 'px';
    dragClone.style.opacity = '0.5';
    dragClone.style.transform = 'scale(1)';

    setTimeout(function () {
      cleanupDrag();
    }, SNAP_DURATION);
  }

  // --- Cleanup ---
  function cleanupDrag() {
    if (dragClone && dragClone.parentNode) {
      dragClone.parentNode.removeChild(dragClone);
    }
    if (dragging) {
      dragging.classList.remove('nge-dragging');
      dragging.style.opacity = '';
    }
    highlightTarget(null);
    dragClone = null;
    dragging = null;
  }

  // --- Start tracking ---
  var startX = 0, startY = 0;
  var isDragging = false;
  var pendingEl = null;

  function onPointerDown(e) {
    var el = e.target.closest('button.itm');
    if (!el) return;

    // 이미 배치된 아이템은 드래그 안 함
    if (el.parentElement && el.parentElement.classList.contains('itm-lst')) return;

    var pos = getEventPos(e);
    startX = pos.x;
    startY = pos.y;
    pendingEl = el;
    isDragging = false;

    var rect = el.getBoundingClientRect();
    dragOffsetX = pos.x - rect.left;
    dragOffsetY = pos.y - rect.top;

    // 터치 스크롤 방지
    if (e.type === 'touchstart') {
      // preventDefault는 dragThreshold 초과 후에만
    }
  }

  function onPointerMove(e) {
    if (!pendingEl) return;

    var pos = getEventPos(e);
    var dx = pos.x - startX;
    var dy = pos.y - startY;

    if (!isDragging) {
      if (Math.abs(dx) + Math.abs(dy) < DRAG_THRESHOLD) return;

      // 드래그 시작
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

      // 드롭 타겟 감지
      var target = findDropTarget(pos.x, pos.y);
      highlightTarget(target);
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
          // 성공 시 클론 제거
          cleanupDrag();
          // 드래그로 배치 완료 시 wahl.php의 donewahl() 감지 트리거
          setTimeout(function () { $(document).trigger('click'); }, 50);
        }
        // 실패 시 snapBack이 이미 호출됨
      } else {
        // 빈 곳에 놓으면 되돌리기
        snapBack();
      }
    } else if (pendingEl) {
      // 클릭 (드래그 안 됨) — 기존 tap 동작: 토글 선택
      if (!pendingEl.parentElement.classList.contains('itm-lst')) {
        pendingEl.classList.remove('btn-light');
        pendingEl.classList.toggle('btn-secondary');
      }
    }

    pendingEl = null;
    isDragging = false;
  }

  function onPointerCancel() {
    if (isDragging) {
      snapBack();
    }
    pendingEl = null;
    isDragging = false;
  }

  // --- Attach event listeners ---
  // 마우스 이벤트
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

  // --- .ttl 클릭 시 선택된 아이템 넣기 (기존 호환) ---
  // 정답 검증 없이 선택된 아이템을 슬롯에 배치 (채점은 nqValidateGrading에서 수행)
  $(document).on('click', '.ttl', function () {
    var t = $(this);
    var isSingle = t.parent().hasClass('1itm');

    // 선택된 첫 번째 아이템만 배치
    var selected = $('.btn-secondary').first();
    if (selected.length === 0) return;

    selected.addClass('w-100 btn-light');
    selected.removeClass('btn-secondary');
    selected.insertAfter(t);

    if (isSingle) {
      t.remove();
      selected.removeClass('itm');
    }

    $('.itm').removeClass('btn-secondary');
  });

  // --- Init: 로딩되면 아이템 셔플 ---
  $(document).ready(function () {
    // 아이템을 #itms로 모으기 (기존 호환)
    if ($('#itms').length) {
      $('.itm').appendTo('#itms');
    }
    $('[data-toggle="popover"]').popover({ container: 'body' });
  });

  // --- 채점 검증 (공유 함수) ---
  // 각 .itm-lst의 button이 올바른 위치인지 ansN vs lst-N 비교
  // 오답 시 정답 텍스트를 노랑(.ra)으로 표시
  window.nqValidateGrading = function () {
    var qa = 0, qr = 0;
    // 정답 맵 생성: ansN → 버튼 텍스트
    var answerMap = {};
    $('.itm-lst button').each(function () {
      var classes = this.className.split(/\s+/);
      for (var i = 0; i < classes.length; i++) {
        var m = classes[i].match(/^ans(\d+)$/);
        if (m) { answerMap[m[1]] = $.trim($(this).text()); break; }
      }
    });
    // 소스 영역(#itms)에 남은 미배치 버튼도 맵에 추가
    $('#itms button').each(function () {
      var classes = this.className.split(/\s+/);
      for (var i = 0; i < classes.length; i++) {
        var m = classes[i].match(/^ans(\d+)$/);
        if (m) { answerMap[m[1]] = $.trim($(this).text()); break; }
      }
    });

    $('.itm-lst').each(function () {
      qa++;
      var $lst = $(this);
      var btn = $lst.find('button');
      var targetGroup = parseInt($lst.attr('id').substr(4), 10);
      if (btn.length) {
        var ansGroups = [];
        var classes = btn[0].className.split(/\s+/);
        for (var i = 0; i < classes.length; i++) {
          var m = classes[i].match(/^ans(\d+)$/);
          if (m) { ansGroups.push(parseInt(m[1], 10)); }
        }
        if (ansGroups.indexOf(targetGroup) !== -1) {
          btn.addClass('ca');
          qr++;
        } else {
          btn.addClass('wa');
          /* 오답 옆에 정답 표시 */
          var correctText = answerMap[String(targetGroup)] || '';
          if (correctText) {
            $('<span class="ra ms-1">' + $('<span>').text(correctText).html() + '</span>')
              .insertAfter(btn);
          }
        }
      }
    });
    return { qa: qa, qr: qr };
  };

  // --- 학습 결과 저장 (#chk → #done 전환 감지) ---
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
            var qa = document.querySelectorAll('.itm-lst').length;
            var qr = document.querySelectorAll('.itm-lst button.text-success').length;
            nqSaveDragResult(qr, qa);
          }, 0);
        }
      });
    });
    observer.observe(chkEl, { attributes: true });
  });

  // --- Inject CSS ---
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
