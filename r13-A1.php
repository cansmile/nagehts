<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2"
         id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3"
                        id="1">
                    Kraftwerk<span class="tran"><br/><small>발전소</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3"
                        id="2">
                    Abgase<span class="tran"><br/><small>배기가스</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3"
                        id="3">
                    Abfall<span class="tran"><br/><small>쓰레기</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3"
                        id="4">
                    Feinstaub<span class="tran"><br/><small>미세먼지</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3"
                        id="5">
                    Zigarettenkippen<span class="tran"><br/><small>담배꽁초</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3"
                        id="6">
                    Wasserverschmutzung<span class="tran"><br/><small>수질오염</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-3"
                        id="7">
                    COVID-19<span class="tran"><br/><small>코로나19</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3"
                        id="8">
                    gelber Sand<span class="tran"><br/><small>황사</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3"
                        id="9">
                    Tierquälerei<span class="tran"><br/><small>동물학대</small></span>
                </button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>[ <small>Welches Umweltproblem ist das? Ordnen Sie den Bildern die Begriffe zu.
                        <span class="tran"><br /><small>어떠한 환경문제인가요? 개념과 그림을 연결하세요.</small></span>
                    </small> ]
                </h2>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2">
            <div class="col-12 lh250">
                1)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>발전소</small></span>
            </div>
            <div class="col-12 lh250">
                2)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>배기가스</small></span>
            </div>
            <div class="col-12 lh250">
                3)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>쓰레기</small></span>
            </div>
            <div class="col-12 lh250">
                4)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>미세먼지</small></span>
            </div>
            <div class="col-12 lh250">
                5)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>담배꽁초</small></span>
            </div>
            <div class="col-12 lh250">
                6)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>수질오염</small></span>
            </div>
            <div class="col-12 lh250">
                7)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>코로나19</small></span>
            </div>
            <div class="col-12 lh250">
                8)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>황사</small></span>
            </div>
            <div class="col-12 lh250">
                9)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-9">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
                <span class="tran"><small>동물학대</small></span>
            </div>
        </div>
        <!-- 정답확인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                 id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
    </div>
</section>
<!-- 보기끝 -->

<div id="marg"></div>
<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/dragtogroup.js"></script>
<script>
    $(".tran").hide();
    $("#chk").hide();

    $(document).ready(function () {
        /* 정답확인 */
        $("#chk").on("click", function () {
            if ($("#itms").find("button").length < 1) {
                $(".tran").show();

                $(this).removeClass("btn-light");

                $(".itm-lst").each(function () {
                    if ($(this).find("button.btn")) {
                        $(this).find("button.btn").addClass("text-success");
                    }
                });

                var qa = $(".itm-lst").length;
                var qr = $(".text-success").length;
                var pe = (qr / qa) * 100;
                var tcl = "white";

                if (pe > 99) {
                    var st = "원어민이세요?";
                    var cl = "lime";
                    tcl = "dark";
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
                $(this).html("<h4>" + qa + "문제 중 " + qr +
                    "개를 맞히셨네요!<br>" + st + "</h4>");
            } else {
                alert("모든 문제를 풀어주세요!");
            }
        });

        <?php require "wahl.php"; ?>
    });
</script>
</body>
</html>
