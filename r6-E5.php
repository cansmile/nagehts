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
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
                        einkaufen<span class="tran"><br><small>쇼핑하다,
                                장을보다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
                        zuhören<span class="tran"><br><small>경청하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
                        gehören<span class="tran"><br><small>~에
                                속하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
                        aufhören<span class="tran"><br><small>끝나다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
                        besuchen<span class="tran"><br><small>방문하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
                        suchen<span class="tran"><br><small>찾다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
                        hören<span class="tran"><br><small>듣다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
                        aufstehen<span class="tran"><br><small>일어나다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
                        zählen<span class="tran"><br><small>세다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
                        bezahlen<span class="tran"><br><small>지불하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
                        stehen<span class="tran"><br><small>서 있다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
                        verkaufen<span class="tran"><br><small>판매하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
                        schlafen<span class="tran"><br><small>자다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="14">
                        bestehen<span class="tran"><br><small>합격하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
                        einschlafen<span class="tran"><br><small>잠들다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
                        kaufen<span class="tran"><br><small>구매하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
                        anrufen<span class="tran"><br><small>전화를
                                걸다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="18">
                        erzählen<span class="tran"><br><small>이야기하다</small></span>
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
                    <h2>[ <small>단어를 알맞은 칸(einfache Verben, trennbare Verben,
                            untrennbare Verben)에 넣으세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top bg-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
                    <h2 class="btn btn-light btn-xl ttl d-block">
                        <strong>einfache Verben</strong><br><small>단순동사</small>
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-success itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
                    <h2 class="btn btn-light btn-xl ttl d-block">
                        <strong>trennbare Verben</strong><br><small>분리동사</small>
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                    id="lst-3">
                    <h2 class="btn btn-light btn-xl ttl d-block">
                        <strong>untrennbare
                            Verben</strong><br><small>비분리동사</small></h2>&nbsp;
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
    <div id="marg"></div>
    <div id="last" class="d-none"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
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
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 6/r6 E5.mp3"],
                sprite: {
                    "0": [1069, 90161],
                    "1": [24910, 1623],
                    "2": [28787, 1693],
                    "3": [32617, 1561],
                    "4": [36668, 1788],
                    "5": [40194, 1622],
                    "6": [43788, 1484],
                    "7": [47270, 1378],
                    "8": [50710, 1637],
                    "9": [54629, 1616],
                    "10": [58448, 1714],
                    "11": [62491, 1493],
                    "12": [66067, 1538],
                    "13": [70150, 1531],
                    "14": [73570, 1662],
                    "15": [77678, 2059],
                    "16": [81854, 1457],
                    "17": [85950, 1687],
                    "18": [89586, 1679]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    $("#0").show();
                    $(".alert").hide();
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
                        $("#" + last).closest("tr").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });

            $(".so").on("click", function () {
                var t = $(this);
                var ti = t.attr("id");
                if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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
                if ($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
                    $(this).attr("id", "done");
                    $(".itm").each(function () {
                        if ($(this).parent().attr("id").length > 5) {
                            var a = $(this).parent().attr("id").substr($(this).parent().attr(
                                "id").length - 2, 2);
                        } else {
                            var a = $(this).parent().attr("id").substr($(this).parent().attr(
                                "id").length - 1, 1);
                        }
                        $(".tran").show();
                        if ($(this).hasClass("ans" + (a))) {
                            $(this).addClass("text-success font-weight-bold");
                        } else {
                            $(this).addClass("text-warning font-weight-bold");
                            $(this).find(".tran").show();
                        };
                        if ($(this).hasClass("text-warning")) {
                            /* $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,)))) */
                            for (var i = 1; i <= $(".itm-lst").length; i++) {
                                if ($(this).hasClass("ans" + i)) {
                                    $(eval('"#lst-' + i + '"')).append(
                                        "<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" +
                                        $(this).html() + "</button>"); /* $(lstn).append(i); */
                                }
                            }
                        };
                    }); /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
                    var qa = $(".itm").length; /* 전체 문항 수 */
                    var qr = $(".text-success").length; /* 맞춘 항목 수 */
                    var pe = (qr / qa) * 100; /* 정답 비율 */
                    var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                }
            });

            var pan = new Array();
            /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
            pan = [1, 12, 13, 16];
            for (var p = 0; p < pan.length; p++) {
                var pani = "#" + pan[p];
                for (var n = 0; n < $(".itm-lst")
                    .length; n++) {
                    if ($(pani).hasClass("ans" + (
                            n + 1))) {
                        $(pani).insertAfter($(
                            "#lst-" + (n +
                                1) + ">h2"));
                        $(pani).addClass(
                            "btn-block btn-light"
                        );
                    }
                }
            }

            $("#0").show();
            $(".alert").hide();

        });

    </script>
    </body>

</html>
