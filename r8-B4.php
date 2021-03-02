<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
                        anfassen<span class="tran"><br><small>건드리다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
                        essen<span class="tran"><br><small>먹다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
                        trinken<span class="tran"><br><small>마시다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
                        lachen<span class="tran"><br><small>웃다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="5">
                        sehen<span class="tran"><br><small>보다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
                        hören<span class="tran"><br><small>듣다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
                        stehen<span class="tran"><br><small>서다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="8">
                        gehen<span class="tran"><br><small>걷다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="9">
                        geben<span class="tran"><br><small>주다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="10">
                        tragen<span class="tran"><br><small>들다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="11">
                        schneiden<span class="tran"><br><small>자르다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="12">
                        lesen<span class="tran"><br><small>읽다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="13">
                        schreiben<span class="tran"><br><small>쓰다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="14">
                        rauchen<span class="tran"><br><small>담배피우다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="15">
                        aufmachen<span class="tran"><br><small>열다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="16">
                        küssen<span class="tran"><br><small>키스하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="17">
                        riechen<span class="tran"><br><small>냄새를 맡다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
                        atmen<span class="tran"><br><small>호흡하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
                        singen<span class="tran"><br><small>노래하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="20">
                        tanzen<span class="tran"><br><small>춤추다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="21">
                        husten<span class="tran"><br><small>기침하다</small></span>
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
                    <h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button
                                type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를
                            2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top border bg-danger border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-1">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-1.png" alt="Hand"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-success border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-2">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-2.png" alt="Was passt?"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-primary border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-3">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-3.png" alt="Was passt?"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-orange border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-4">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-4.png" alt="Was passt?"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-lime border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-5">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-5.png" alt="Was passt?"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-purple border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2"
                    id="lst-6">
                    <h2 class="btn btn-xl bg-white ttl w-100"><img
                            src="./dev/images/Reihe 8/Reihe-8-B4-6.png" alt="Was passt?"
                            style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
        </div>
        <!-- 리스트 끝 -->
    </section>
    <div id="marg" class="border-danger"></div>
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
                });
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 8/r8 B4.mp3"],
                sprite: {
                    "0": [348, 71892],
                    "1": [7638, 2091],
                    "2": [11386, 1407],
                    "3": [14379, 1765],
                    "4": [17946, 1304],
                    "5": [20597, 1863],
                    "6": [23791, 1506],
                    "7": [26828, 1910],
                    "8": [29991, 1878],
                    "9": [33052, 1923],
                    "10": [36290, 1744],
                    "11": [39281, 2016],
                    "12": [42842, 1644],
                    "13": [45905, 1801],
                    "14": [48695, 2274],
                    "15": [52163, 1569],
                    "16": [54880, 1296],
                    "17": [58095, 1709],
                    "18": [61302, 1628],
                    "19": [64397, 1722],
                    "20": [67566, 1525],
                    "21": [70248, 1504]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    /* 음성 준비되면 HV 버튼 나타내기 */
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

                    <?php require "wahl.php"; ?>

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility != "visible" && $(this).attr("id") ==
                            "chk") {
                            $(this).attr("id", "done");
                            $(".tran").show();
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                $(this).find(".itm").addClass("okay");
                            });
                            var qa = $(".itm-lst>.itm").length; /* 전체 문항 수 */
                            var qr = $(".okay").length; /* 맞춘 항목 수 */
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
                    var pan = new Array(),
                        pann;
                    pan = [15, 21];
                    for (var p = 0; p < pan.length; p++) {
                        pann = "#" + pan[p];
                        for (var i = 0; i < $(".itm-lst").length; i++) {
                            if ($(pann).hasClass("ans" + (i + 1))) {
                                $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                            }
                        }
                        /* $(pann).find(".tran").show(); */
                    }
                    $(".itm-lst>button").addClass("w-100 btn-light");
                    $("#0").show();
                    $("#ready").hide();
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
                        $("#" + last).closest("tr").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
    </body>

</html>
