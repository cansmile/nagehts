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
                    weniger Energie zu verbrauchen<span class="tran"><br/><small>에너지를 덜 소비하기 위해</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3"
                        id="2">
                    den Treibhauseffekt zu reduzieren<span class="tran"><br/><small>온실효과를 줄이기 위해</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3"
                        id="3">
                    die Versauerung von Wasser und Boden zu verringern<span class="tran"><br/><small>수질과 토양의 산성화를 줄이기 위해</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3"
                        id="4">
                    wertvolle Rohstoffe zur Wiederverarbeitung zu bekommen<span class="tran"><br/><small>귀중한 원료를 재가공하기 위해</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3"
                        id="5">
                    die Umwelt weniger zu belasten<span class="tran"><br/><small>환경에 부담을 덜 주기 위해</small></span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="nq-exercise" data-type="dragtogroup" data-reihe="13">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>[ <small>Wozu trennt man den Müll? Ergänzen Sie.
                        <span class="tran"><br /><small>왜 분리수거를 할까요? 빈칸을 채우세요.</small></span>
                    </small> ]
                </h2>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2" style="line-height: 2.2;">
            <div class="col-12 lh250">
                1) Man trennt den Müll, um
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 450px; min-width: 450px;">
                        ▼ </h2>
                </div>
                .
            </div>
            <div class="col-12 lh250">
                2) Man trennt den Müll, um
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 450px; min-width: 450px;">
                        ▼ </h2>
                </div>
                .
            </div>
            <div class="col-12 lh250">
                3) Man trennt den Müll, um
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 450px; min-width: 450px;">
                        ▼ </h2>
                </div>
                .
            </div>
            <div class="col-12 lh250">
                4) Man trennt den Müll, um
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 450px; min-width: 450px;">
                        ▼ </h2>
                </div>
                .
            </div>
            <div class="col-12 lh250">
                5) Man trennt den Müll, um
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 450px; min-width: 450px;">
                        ▼ </h2>
                </div>
                .
            </div>
        </div>

        <!-- GR Tipp -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>GR Tipp: um...zu + Infinitiv</h4>
                    <p><strong>um...zu + Infinitiv</strong>는 „~하기 위해서"라는 목적을 나타내는 구문입니다.</p>
                    <p>주절과 부사절의 <strong>주어가 동일</strong>할 때 사용합니다.</p>
                    <table class="table table-sm table-bordered mt-2">
                        <tr>
                            <td><strong>Struktur:</strong></td>
                            <td>Hauptsatz, <strong>um</strong> ... <strong>zu</strong> + Infinitiv</td>
                        </tr>
                        <tr>
                            <td><strong>Beispiel:</strong></td>
                            <td>Man trennt den Müll, <strong>um</strong> die Umwelt weniger <strong>zu</strong> belasten.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><small>환경에 부담을 덜 주기 위해 사람들은 분리수거를 한다.</small></td>
                        </tr>
                    </table>
                    <p class="mt-2"><small>주어가 다를 경우에는 <strong>damit</strong>를 사용합니다:<br />
                    Die Eltern trennen den Müll, <strong>damit</strong> ihre Kinder eine saubere Umwelt haben.</small></p>
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

                var _r = nqValidateGrading();

                var qa = _r.qa;
                var qr = _r.qr;
                var pe = (qr / qa) * 100;
                var tcl = "white";

                if (pe > 99) {
                    var st = "원어민이세요?";
                    var cl = "success";
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
                        $(this).attr("id","done");
            } else {
                alert("모든 문제를 풀어주세요!");
            }
        });

        <?php require "wahl.php"; ?>
    });
</script>
</body>
</html>
