<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="1">
                        Tanzkurs<small><span class="tran"><br>댄스강좌<br>(Sa. 18
                                Uhr)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
                        Führung in der Gemäldegalerie<small><span class="tran"><br>미술관 안내 관람<br>(Fr. 11
                                Uhr)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="3">
                        Galakonzerte<small><span class="tran"><br>갈라콘서트<br>(Sa.
                                19 Uhr)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="4">
                        Kino<small><span class="tran"><br>영화관<br>(So. bis So.
                                15.30)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="5">
                        Stadtführung Glanzlichter Dresdens<small><span class="tran"><br>드레스덴 하이라이트 시티투어<br>(Mo, Mi,
                                Fr., Sa. 18.30)</small></</span> </button> <button type="button"
                            class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="6">
                        Circus Krone<small><span class="tran"><br>크로네
                                서커스<br>(So. 15.30)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="7">
                        Kino<small><span class="tran"><br>영화관<br>(Fr. bis So.
                                17.45, 20.00)</span></small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="8">
                        Staatsoperette<small><span class="tran"><br>국립
                                오페레타극장<br>(Sa. 14.30)</span></small>
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
                    <h2>[ <small>단어를 알맞은 칸<small>(Am Vormittag, Am Mittag, Am
                                Nachmittag, Am Abend)</small>에 넣으세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-1.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-2.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-3.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-4.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-5.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-6.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img
                        src="./dev/images/Reihe 7/Reihe-7-A2-7.png"
                        alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
            </div>
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top bg-danger itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 pt-1 border border-white"
                    id="lst-1">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        <small><strong>Am Vormittag</strong></small><br>(10-12
                        Uhr)</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-success itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 pt-1 border border-white"
                    id="lst-2">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        <small><strong>Am Mittag</strong></small><br>(12-13 Uhr)
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-info itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 pt-1 border border-white"
                    id="lst-3">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        <small><strong>Am Nachmittag</strong></small><br>(13-17
                        Uhr)</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-primary itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 pt-1 border border-white"
                    id="lst-4">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        <small><strong>Am Abend</strong></small><br>(17-20 Uhr)
                    </h2>&nbsp;
                </div>
            </div>
            <!-- 리스트 끝 -->
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
        </div>
    </section>
    <div id="marg"></div>
    <div id="last" class="d-none"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>

    <script>
        $("#0").hide();
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {
            /* 소리 출력 전역 변수와 함수 */
            var sen = new Array(),
                pa = new Array(),
                he = new Array(),
                last;
            $(".so").each(function () {
                var t = $(this);
                var ti = t.attr("id");
                sen[ti] = 0;
                pa[ti] = t.html();
            });

            function stopAll() {
                $(".so").each(function () {
                    $(this).html(pa[$(this).attr("id")]);
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 7/r7 A2.mp3"],
                sprite: {
                    "0": [876, 40859],
                    "1": [11862, 1469],
                    "3": [18434, 1867],
                    "4": [22810, 1264],
                    "5": [26163, 3172],
                    "6": [31984, 1713],
                    "7": [35993, 1147],
                    "8": [39561, 2123]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {

                    <?php require "wahl.php"; ?>

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility != "visible" && $(this).attr("id") ==
                            "chk") {
                            $(this).attr("id", "done");
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                $(this).find("button").addClass(
                                    "text-success fw-bold");
                            });
                            var qa = $(".itm-lst>button").length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */

                            /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
                        }
                    });

                    /* 미리 답 넣어놓기 */
                    var pan = new Array();
                    pan = [2];
                    for (var p = 0; p < pan.length; p++) {
                        for (var i = 1; i <= $(".itm-lst").length; i++) {
                            if ($("#" + pan[p]).hasClass("ans" + i)) {
                                $("#" + pan[p]).insertAfter("#lst-" + i + ">h2");
                                $("#" + pan[p]).addClass("w-100");
                                $("#" + pan[p]).addClass(
                                    "btn-light"); /* $("#"+pan[p]).find(".tran").show(); */
                            }
                        }
                        $(".itm-lst>button").addClass("w-100 btn-light");
                    }
                    $("#0").show();
                    $("#ready").hide();

                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(
                                ".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(sen[ti]);
                        } else if (last == ti && nagehts.playing($("div#last").text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(sen[ti]);
                        }
                    });
                },
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);
                    if (last == 0) {
                        if (sen[last] == 2) {
                            $(".tran").show();
                            $(".so").each(function () {
                                pa[last] = $("#" + last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("button").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
    </body>

</html>
