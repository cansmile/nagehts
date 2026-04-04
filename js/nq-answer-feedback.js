/**
 * nq-answer-feedback.js
 * ─────────────────────────────────────────────────────────────────
 * 1. click-select: 오답 선택 시 정답 즉시 강조 + 재선택(수정) 허용
 * 2. fill-blank  : 오답 blur 시 정답 텍스트 즉시 표시 + #chk 버튼 숨김
 * ─────────────────────────────────────────────────────────────────
 * 의존: jQuery
 * 로드 시점: </body> 직전 (기존 인라인 핸들러보다 나중에 실행됨)
 */
(function ($) {
    'use strict';

    // ─── 1. Click-Select ─────────────────────────────────────────────
    //
    // 기존 인라인 핸들러(Howl onload 내부에서 직접 바인딩)는
    // 첫 번째 클릭만 허용하고 이후 재선택을 막는 구조.
    // 이 이벤트는 document 위임(delegated)으로 등록하므로
    // 기존 핸들러가 버블링을 막지 않는 한, 기존 핸들러 실행 이후에 동작.
    //
    // 동작:
    //   - 이미 채점됨(#done): 무시
    //   - 그룹(.q) 내 기존 선택(.an) 초기화
    //   - 클릭한 버튼에 .an + btn-warning 추가
    //   - 오답(.x): 정답(.o) 버튼에 btn-success 강조
    //   - 정답(.o): 그대로 btn-warning 유지 (정답확인 후 green 처리)
    // ─────────────────────────────────────────────────────────────────
    $(document).on(
        'click',
        '.nq-exercise[data-type="click-select"] .q .pop, ' +
        '.nq-exercise[data-type="grammar"] .q .pop',
        function () {
            var $btn   = $(this);
            var $group = $btn.closest('.q');

            // 이미 채점 완료면 변경 불가
            if (document.getElementById('done')) return;

            // ① 그룹 내 모든 버튼을 초기 상태로 복원
            $group.find('.pop')
                .removeClass('an btn-warning btn-success text-white')
                .addClass('btn-light');

            // ② 현재 버튼 선택 표시 (오답=빨강, 정답=초록)
            if ($btn.hasClass('x')) {
                $btn.removeClass('btn-light').addClass('an wa');
                // ③ 오답이면 정답 즉시 강조 (노랑)
                $group.find('.pop.o')
                    .removeClass('btn-light btn-warning btn-success')
                    .addClass('ra');
            } else {
                $btn.removeClass('btn-light').addClass('an ca');
            }
        }
    );


    // ─── 2. Fill-Blank ────────────────────────────────────────────────
    //
    // 조건: .nq-exercise[data-type="fill-blank"] 가 존재하고
    //       window.an 배열이 전역에 정의된 경우에만 동작.
    //       (모든 fill-blank 파일은 window.an 을 스크립트 최상위에 선언)
    //
    // 동작:
    //   - #chk(정답확인) 버튼 숨김
    //   - focusout 시 오답이면: bg-danger 유지 + 정답 텍스트 .nq-hint 표시
    //   - focusout 시 정답이면: 힌트 제거
    //   - 전체 입력 완료(모두 disabled) 시 #chk 자동 트리거 (진도 기록용)
    // ─────────────────────────────────────────────────────────────────
    $(document).ready(function () {
        var $fillSections = $('.nq-exercise[data-type="fill-blank"]');
        if (!$fillSections.length) return;
        if (typeof window.an === 'undefined') return;

        // 정답확인 버튼 숨김 (자동 완료 처리로 대체)
        $('#chk').hide();

        // focusout 위임 핸들러 (기존 직접 바인딩 핸들러 실행 후 동작)
        $(document).on(
            'focusout',
            '.nq-exercise[data-type="fill-blank"] input.q',
            function () {
                var $input = $(this);

                // 이미 정답 처리된(disabled) 입력 무시
                if ($input.prop('disabled')) return;
                // 빈 입력 무시
                if (!$input.val()) {
                    $input.siblings('.nq-hint').remove();
                    return;
                }

                var correct = nqCheckFill($input);
                if (correct === null) return;

                if (!correct) {
                    // 기존 핸들러가 제거한 bg-danger 복원
                    $input.addClass('bg-danger text-white fw-bold');
                    nqShowFillHint($input);
                } else {
                    // 정답 → 힌트 제거
                    $input.siblings('.nq-hint').remove();
                    // 전체 완료 여부 확인
                    nqAutoComplete();
                }
            }
        );
    });


    // ─── 내부 함수 ────────────────────────────────────────────────────

    /**
     * fill-blank 입력의 정답 여부 확인
     * (각 파일의 rfchk 함수와 동일 로직, io=true 기준)
     * @returns {boolean|null}
     */
    function nqCheckFill($input) {
        if (typeof window.an === 'undefined') return null;
        var qn = parseInt($input.attr('id').replace('qst-', ''), 10) - 1;
        if (isNaN(qn) || qn < 0 || qn >= window.an.length) return null;

        var val = $input.val().replace(/ /g, '');
        var ans = window.an[qn];

        if (!Array.isArray(ans)) {
            return val === ans.replace(/ /g, '');
        }
        return ans.some(function (a) {
            return val === a.replace(/ /g, '');
        });
    }

    /**
     * 입력 아래에 정답 힌트 텍스트 표시
     */
    function nqShowFillHint($input) {
        var qn = parseInt($input.attr('id').replace('qst-', ''), 10) - 1;
        if (typeof window.an === 'undefined' || qn < 0 || qn >= window.an.length) return;

        var ans     = window.an[qn];
        var display = Array.isArray(ans) ? ans.join(' / ') : ans;

        // 이전 힌트 제거 후 새로 추가
        $input.siblings('.nq-hint').remove();
        $('<small class="nq-hint">→ ' + $('<span>').text(display).html() + '</small>')
            .insertAfter($input);
    }

    /**
     * 모든 fill-blank 입력이 완료(disabled)되면 #chk 자동 트리거
     * (진도 기록을 위해 #chk → #done 전환 필요)
     */
    function nqAutoComplete() {
        if (document.getElementById('done')) return;
        var $inputs = $('.nq-exercise[data-type="fill-blank"] input.q');
        if (!$inputs.length) return;

        var allDone = $inputs.toArray().every(function (el) {
            return $(el).prop('disabled');
        });

        if (allDone) {
            $('#chk').trigger('click');
        }
    }

}(jQuery));
