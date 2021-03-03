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
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
                        In Daejeon.<span class="tran"><br>&nbsp;<small>대전에서.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
                        Nein, in Suwon.<span class="tran"><br>&nbsp;<small>아니,
                                수원에서.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
                        Ja, ich spreche gut Englisch.<span class="tran"><br>&nbsp;<small>응, 나 영어
                                잘해.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="4">
                        Nein, ich wohne in Jung-Gu.<span class="tran"><br>&nbsp;<small>아니, 난 중구에
                                살아.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
                        Nein, ich komme nicht aus Finnland.<span class="tran"><br>&nbsp;<small>아니, 나는 필란드 출신이
                                아니야.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="6">
                        Ich wohne auch in Seoul.<span class="tran"><br>&nbsp;<small>나도 서울에
                                살아.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="7">
                        Ich komme aus Brasilien.<span class="tran"><br>&nbsp;<small>나는 브라질
                                출신이야.</small></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>[ <small>문제에 맞는 답안을 알맞게 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center table-light">
                        <tbody>
                            <tr>
                                <th class="bg-light" scope="row" width="10%"><button type="button" id="8"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>1
                                </th>
                                <td class="text-start">Wohnst du in Yeosu?<span class="tran"><br>&nbsp;<small>너는 여수에서
                                            사니?</small></span></td>
                                <td width="40%">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>2</th>
                                <td class="text-start">Kommst du aus Finnland?<span class="tran"><br>&nbsp;<small>넌 핀란드
                                            출신이니?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>3</th>
                                <td class="text-start">Wo wohnst du?<span class="tran"><br>&nbsp;<small>너는 어디에
                                            사니?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="11"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>4</th>
                                <td class="text-start">Ich wohne in Seoul, und du?
                                    <span class="tran"><br>&nbsp;<small>나는 서울에 살아,
                                            너는?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>5</th>
                                <td class="text-start">Woher kommst du?<span class="tran"><br>&nbsp;<small>너는 어디에서
                                            왔어?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="13"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>6</th>
                                <td class="text-start">Sprichst du gut Englisch?<span class="tran"><br>&nbsp;<small>너 영어
                                            잘하니?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row"><button type="button" id="14"
                                        class="so btn btn-outline-dark btn-md me-2">▶</button>7</th>
                                <td class="text-start">Wohnst du in Gwangjin-Gu?
                                    <span class="tran"><br>&nbsp;<small>너는 광진구에
                                            살아?</small></span></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 2/r2 E5.mp3"],
                sprite: {
                    "0": [82, 75176],
                    "1": [30747, 1378],
                    "2": [12509, 2190],
                    "3": [60092, 3527],
                    "4": [72339, 2938],
                    "5": [21131, 3041],
                    "6": [40277, 2659],
                    "7": [49916, 2092],
                    "8": [6795, 3776],
                    "9": [15993, 3589],
                    "10": [25897, 3159],
                    "11": [33422, 4691],
                    "12": [44245, 3184],
                    "13": [53526, 4274],
                    "14": [65480, 4347]
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
                    <?php require "wahl.php"; ?>

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility != "visible" && $(this).attr("id") ==
                            "chk") {
                            $(this).attr("id", "done");
                            $(".itm-lst").each(function () {
                                $(this).find("button").addClass(
                                    "text-success font-weight-bold");
                            });

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
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
                            $(this).attr("id", "done");
                        }
                    });

                    /* 답 미리 넣어놓기 */
                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("w-100 text-start");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        });
                    }

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
                        $("#" + last).closest("tr").find(".tran").each(function () {
                            if (!$(this).parent().hasClass("itm")) {
                                $(this).show();
                            }
                        });
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        })

    </script>
    </body>

</html>
