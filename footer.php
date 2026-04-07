<!--공통 스크립트-->
<script src="./dev/js/jquery-3.5.1.min.js"></script>
<script src="./dev/js/bootstrap.js"></script>
<!-- <link href="./dev/images/favicon.ico" rel="shortcut icon"> -->
<link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      rel="stylesheet">
<!-- 꼬리말 시작 -->
<footer class="text-center mt-5">
    <div class="container">
        <div class="row p-3">
            <div class="col-12">
                <p class="p-2 w-100 bg-<?php echo($color); ?> font-weight-bold
                text-white rounded">
                    Copyright © Na, geht's? All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- 꼬리말 끝 -->

<!-- 오답 수정 기능: 오답 input 클릭 시 초기화하여 재입력 가능 -->
<script>
$(document).ready(function() {
    $(document).on("click", "input.q.wa, input.q.bg-danger", function() {
        var $el = $(this);
        if ($el.attr("disabled") || $el.prop("disabled")) {
            $el.prop("disabled", false);
            $el.val("");
            $el.removeClass("wa bg-danger bg-success text-white fw-bold text-danger text-success");
            $el.addClass("border-bottom-only border-dark rounded-0");
            // 정답 표시(ra) 제거
            $el.nextAll(".ra").first().remove();
            $el.closest(".input-group,.d-inline-flex").find(".ra").remove();
        }
    });
});
</script>

<!-- MakeQ LMS: postMessage bridge for iframe completion tracking -->
<script>
(function() {
    if (window.parent === window) return;
    $(document).ready(function() {
        var chkEl = document.getElementById('chk');
        if (!chkEl) return;
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(m) {
                if (m.target.id === 'done') {
                    var total = $('.q').length;
                    var correct = $('.bg-success').length;
                    var pct = total > 0 ? Math.round((correct / total) * 10000) / 100 : 0;
                    window.parent.postMessage({
                        type: 'makeq-completion',
                        correct: correct,
                        total: total,
                        percentage: pct
                    }, '*');
                }
            });
        });
        observer.observe(chkEl, { attributes: true, attributeFilter: ['id'] });
    });
})();
</script>
