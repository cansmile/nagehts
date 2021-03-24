<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="1">
                    Ich hoffe, bald von dir/Ihnen zu hören
                    <span class="tran"><br><small>당신의/ 너의 답신에 기대하며.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="2">
                    Auf deine / Ihre Antwort freue ich mich sehr.
                    <span class="tran"><br><small>곧 너에게/ 당신에게 소식을 듣기를 바란다/ 바랍니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm" id="3">
                    Vielen Dank für deine/Ihre Mail oder für deine /Ihre Einladung. Ich habe mich sehr gefreut.
                    <span class="tran"><br><small>너의 (당신의) 이메일에 또는 초대에 감사해요. 그것이 나를 기쁘게 하였어요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="4">
                    Melde dich / Melden Sie sich bald bei mir.
                    <span class="tran"><br><small>곧 나에게 연락해 /연락주세요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm" id="5">
                    Mir geht es gut, (weil ....)
                    <span class="tran"><br><small>나는 잘지내요, 왜냐하면….</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="6">
                    Es wäre schön, wenn …
                    <span class="tran"><br><small>…한다면 좋을텐데(요.)</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm" id="7">
                    Wie geht es dir/Ihnen?
                    <span class="tran"><br><small>어떻게 지내니/ 지내세요?</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="8">
                    Richte 000/ Richten Sie meine Grüße aus.
                    <span class="tran"><br><small>나의 인사를 000에게 전해줘/ 전해주세요.</small></span>
                </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken. <br/>
                    <small> 빈칸을 채우세요. </small><br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
            </div>
        </div>
        <div class="row" id="lsts">
            <div class="col-12">
                <div class="row">
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-danger border-white itm-lst col-6 p-2"
                         id="lst-1">
                        <h2 class="btn btn-xl bg-white ttl w-100">Anfang</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-success border-white itm-lst col-6 p-2"
                         id="lst-2">
                        <h2 class="btn btn-xl bg-white ttl w-100">Schluss</h2>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                 id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
    </div>
</section>
<div id="marg"></div>
<div id="last" class="d-none"></div>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogroupnomoveh.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $(".tran").hide();
    /* 정답확인 */
    $("#chk").on("click", function () {
        var na = "";
        if ($("#wahl").is(":hidden")) {
            $(".tran").show();/* 정답 확인 div 상자 배경색 속성 없애기 */
            $(this).removeClass("btn-light ");
            $(".itm-lst").each(function () {
                if ($(this).find(".itm")) {
                    $(this).find(".itm").addClass("text-success fw-bold");
                }
            });
            var qa = $(".itm-lst>button").length; /* 전체 문항 수 */
            var qr = $(".text-success").length; /* 맞춘 항목 수 */
            var pe = (qr / qa) * 100; /* 정답 비율 */
            var tcl = "white"; /* 기본 문자색 *//* 분류 기준은 100%, 80%, 60%, 40% */
            if (pe > 99) {
                var st = "원어민이세요?";
                var cl = "lime";
                var tcl = "dark";
            } else if (pe > 74) {
                var st = "어! 좀 하시는데요~^^";
                var cl = "success";
            } else if (pe > 49) {
                var st = "쓰읍~ 다시 해 보실까요?";
                var cl = "primary";
            } else {
                var st = "좀 더 분발해 주세요~";
                var cl = "danger";
            }
            $(this).addClass("btn-" + cl + " text-" + tcl);
            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
            $(".btn-lg").text().appendTo($(this).closest("td"));
            $(".btn-lg").remove();
        } else {
            $("div.itm-lst").each(function (idx) {
                if (!$(this).find("button").length) {
                    if (na != "") {
                        na += ", ";
                    }
                    na += (idx + 1);
                }
            });
            alert("모든 문제를 풀어주세요!");
        }
    });
    <?php require "wahl.php"; ?>
    var pan = new Array(),
        pann;
    pan = [1, 7];
    for (var p = 0; p < pan.length; p++) {
        pann = "#" + pan[p];
        for (var i = 0; i < $(".itm-lst").length; i++) {
            if ($(pann).hasClass("ans" + (i + 1))) {
                $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
            }
        }
    }
    $(".itm-lst>button").addClass("w-100 btn-light");
</script>
</body>

</html>
