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
                        fahren<span class="tran"><br><small>운전하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
                        essen<span class="tran"><br><small>먹다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
                        gehen<span class="tran"><br><small>걷다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
                        besuchen<span class="tran"><br><small>방문하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
                        schenken<span class="tran"><br><small>선물하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
                        einladen<span class="tran"><br><small>초대하다, 싣다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
                        gefallen<span class="tran"><br><small>맘에 들다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
                        bekommen<span class="tran"><br><small>얻다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
                        schreiben<span class="tran"><br><small>쓰다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="10">
                        es geht<span class="tran"><br><small>그럭저럭 지내다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
                        schicken<span class="tran"><br><small>보내다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
                        einkaufen<span class="tran"><br><small>구매하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="13">
                        gratulieren<span class="tran"><br><small>축하하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
                        danken<span class="tran"><br><small>생각하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
                        haben<span class="tran"><br><small>가지다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
                        schlafen<span class="tran"><br><small>잠자다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
                        lernen<span class="tran"><br><small>배우다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
                        helfen<span class="tran"><br><small>돕다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
                        anrufen<span class="tran"><br><small>전화하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
                        fragen<span class="tran"><br><small>묻다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="21">
                        schmecken<span class="tran"><br><small>맛이나다</small></span>
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
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
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
                <div style="min-height: 240px;" class="rounded-top border bg-danger border-white itm-lst col-xs-6
                col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-1">
                    <h2 style="min-height: 60px;"
                        class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Nominativ<span
                            class="tran"><small><br>1격 지배 동사</small></span>
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;" class="rounded-top border bg-orange border-white itm-lst col-xs-6
                col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-2">
                    <h2 style="min-height: 60px;"
                        class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Akkusativ<span
                            class="tran">&nbsp;<small><br>4격 지배 동사</small></span>
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;" class="rounded-top border bg-warning border-white itm-lst col-xs-6
                col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-3">
                    <h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block">Verben im Dativ<span
                            class="tran">&nbsp;<small>3격 그리고</small></span><br>und Akkusativ<span
                            class="tran">&nbsp;<small>4격 지배동사</small></span>
                    </h2>&nbsp;
                </div>
                <div style="min-height: 240px;" class="rounded-top border bg-success border-white itm-lst col-xs-6
                col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-4">
                    <h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-3">Verben im Dativ<span
                            class="tran">&nbsp;<small>3격 지배동새</small></span>
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
                });
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 8/r8 C5.mp3"],
                sprite: {
                    "0": [500, 91199],
                    "1": [90223, 1568],
                    "2": [17989, 1228],
                    "3": [86441, 1421],
                    "4": [20510, 1524],
                    "5": [23668, 1317],
                    "6": [26686, 1706],
                    "7": [29946, 1578],
                    "8": [33266, 1350],
                    "9": [36882, 1455],
                    "10": [40635, 1516],
                    "11": [44270, 1365],
                    "12": [48520, 1747],
                    "13": [52283, 1910],
                    "14": [56485, 1445],
                    "15": [60076, 1273],
                    "16": [82831, 1521],
                    "17": [63780, 1526],
                    "18": [67666, 1366],
                    "19": [71436, 1767],
                    "20": [75147, 1507],
                    "21": [79024, 1359]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append("<br />" +
                        "<strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    /* 음성 준비되면 HV 버튼 나타내기 */
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

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find("button.btn")) {
                                    $(this).find("button.btn").addClass(
                                        "text-success");
                                }
                            });
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
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
                    pan = [1, 3, 16];
                    for (var p = 0; p < pan.length; p++) {
                        pann = "#" + pan[p];
                        for (var i = 0; i < $(".itm-lst").length; i++) {
                            if ($(pann).hasClass("ans" + (i + 1))) {
                                $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                            }
                        }
                    }

                    $(".itm-lst>button").addClass("btn-block btn-light");
                    $("#0").show();
                    $(".alert").hide();
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
