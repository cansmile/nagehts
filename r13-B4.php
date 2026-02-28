<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2 nq-wahl" id="wahl">
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
                    Plastiktüten<span class="tran"><br/><small>비닐봉지</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3"
                        id="2">
                    Tabletten<span class="tran"><br/><small>알약</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3"
                        id="3">
                    Eierschalen<span class="tran"><br/><small>달걀 껍질</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3"
                        id="4">
                    Erdnussbuttergläser<span class="tran"><br/><small>땅콩버터 병</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3"
                        id="5">
                    Weinflaschen<span class="tran"><br/><small>와인병</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3"
                        id="6">
                    Bierflaschen<span class="tran"><br/><small>맥주병</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-3"
                        id="7">
                    Zeitungen<span class="tran"><br/><small>신문</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3"
                        id="8">
                    Schuhkarton<span class="tran"><br/><small>신발 상자</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3"
                        id="9">
                    Zeitschriften<span class="tran"><br/><small>잡지</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm px-3"
                        id="10">
                    Joghurtbecher<span class="tran"><br/><small>요거트 컵</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm px-3"
                        id="11">
                    Styropor<span class="tran"><br/><small>스티로폼</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm px-3"
                        id="12">
                    Tomatendosen<span class="tran"><br/><small>토마토 캔</small></span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="nq-exercise" data-type="dragtogroup" data-reihe="13">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>[ <small>Mülltrennung: Ordnen Sie den Müll in die richtige Tonne.
                        <span class="tran"><br /><small>분리수거: 쓰레기를 올바른 수거함에 넣으세요.</small></span>
                    </small> ]
                </h2>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2">
            <!-- Restmüll-Tonne -->
            <div class="col-12 mt-2"><h4 class="text-danger">Restmüll-Tonne <small>일반쓰레기 수거함</small></h4></div>
            <div class="col-12 lh250">
                1)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                2)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                3)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>

            <!-- Glas-Tonne -->
            <div class="col-12 mt-3"><h4 class="text-success">Glas-Tonne <small>유리 수거함</small></h4></div>
            <div class="col-12 lh250">
                4)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                5)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                6)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>

            <!-- Papier-Tonne -->
            <div class="col-12 mt-3"><h4 class="text-primary">Papier-Tonne <small>종이 수거함</small></h4></div>
            <div class="col-12 lh250">
                7)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                8)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                9)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-9">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>

            <!-- Verpackung-Tonne -->
            <div class="col-12 mt-3"><h4 class="text-warning">Verpackung-Tonne <small>포장재 수거함</small></h4></div>
            <div class="col-12 lh250">
                10)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-10">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                11)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-11">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
            </div>
            <div class="col-12 lh250">
                12)
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-12">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 200px; min-width: 200px;">
                        ▼ </h2>
                </div>
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
