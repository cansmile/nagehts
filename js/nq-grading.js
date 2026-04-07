/**
 * nq-grading.js - 정답확인 결과를 나의 학습에 저장
 * 모든 문제 유형에서 공통 사용
 */
(function() {
    'use strict';

    // 현재 파일명 추출
    var path = window.location.pathname;
    var filename = path.substring(path.lastIndexOf('/') + 1);

    /**
     * 정답확인 결과를 서버에 저장
     * @param {number} correct - 맞은 수
     * @param {number} total   - 전체 수
     */
    /**
     * 정답확인 결과 표시 + 저장 (공통)
     * 기존 3개 템플릿(dragtogroup, click-select)에서 중복되던 15줄을 1줄 호출로 대체
     * @param {HTMLElement} chkEl - #chk 버튼 (this)
     * @param {number} correct - 맞은 수
     * @param {number} total   - 전체 수
     */
    window.nqShowResult = function(chkEl, correct, total) {
        var $el = $(chkEl);
        $el.attr("id", "done");
        $el.removeClass("btn-light");
        var pe = (correct / total) * 100;
        var st, cl, tcl = "white";
        if (pe > 99) { st = "원어민이세요?"; cl = "success"; tcl = "dark"; }
        else if (pe > 74) { st = "어! 좀 하시는데요~^^"; cl = "success"; }
        else if (pe > 49) { st = "쓰읍~ 다시 해 보실까요?"; cl = "primary"; }
        else { st = "좀 더 분발해 주세요~"; cl = "danger"; }
        $el.addClass("btn-" + cl + " text-" + tcl);
        $el.html("<h4>" + total + "문제 중 " + correct + "개를 맞히셨네요!<br>" + st + "</h4>");
        nqSaveResult(correct, total);
    };

    /**
     * 정답확인 결과를 서버에 저장
     * @param {number} correct - 맞은 수
     * @param {number} total   - 전체 수
     */
    window.nqSaveResult = function(correct, total) {
        if (!filename || total <= 0) return;

        var data = JSON.stringify({
            filename: filename,
            correct_count: correct,
            total_count: total
        });

        // Fetch API 사용 (jQuery 의존 없이)
        fetch('/api/progress/save-by-file', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            credentials: 'same-origin',
            body: data
        }).then(function(res) {
            return res.json();
        }).then(function(json) {
            if (json.score !== undefined) {
                console.log('[nqGrading] 저장됨: ' + correct + '/' + total + ' (' + json.score + '%)');
            }
        }).catch(function() {
            // 저장 실패 시 무시 (학습에 지장 없도록)
        });
    };
})();
