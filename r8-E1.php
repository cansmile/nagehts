<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <style>
        td,
        th,
        table {
            border-width: 0;
            border-style: hidden;
        }

    </style>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
                        das Auge, -n<span class="tran">&nbsp;<small>눈</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="2">
                        das Bein, -e<span class="tran">&nbsp;<small>다리</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="3">
                        das Gesicht<span class="tran">&nbsp;<small>얼굴</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark so itm" id="4">
                        das Knie, -<span class="tran">&nbsp;<small>무릎</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="5">
                        das Ohr, -en<span class="tran">&nbsp;<small>귀</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
                        der Arm, -e<span class="tran">&nbsp;<small>팔</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="7">
                        der Bauch<span class="tran">&nbsp;<small>배</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark so itm" id="8">
                        der Finger, -<span class="tran">&nbsp;<small>손가락</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="9">
                        der Fuß, -<span style="position: relative; left: -.2em;">̈
                            e</span><span class="tran">&nbsp;<small>발</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark so itm" id="10">
                        der Hals<span class="tran">&nbsp;<small>목</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
                        der Kopf<span class="tran">&nbsp;<small>머리</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="12">
                        der Mund<span class="tran">&nbsp;<small>입</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark so itm" id="13">
                        der Rücken<span class="tran">&nbsp;<small>등</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark so itm" id="14">
                        der Zeh, -en<span class="tran">&nbsp;<small>발가락</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark so itm" id="15">
                        die Brust, -<span style="position: relative; left: -.2em;">̈
                            e</span><span class="tran">&nbsp;<small>가슴</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="16">
                        die Hand, -<span style="position: relative; left: -.2em;">̈
                            e</span><span class="tran">&nbsp;<small>손</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="17">
                        die Nase<span class="tran">&nbsp;<small>코</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm" id="18">
                        die Zähne<span class="tran">&nbsp;<small>치아</small></span>
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
                    <h2>[ <small>단어를 누르면 소리가 납니다.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="50%" class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td rowspan="9" class="align-middle p-0 m-2 ps-2">
                                    <img src="./dev/images/Reihe 8/Reihe-8-E1-1.png" alt="Eva"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td rowspan="9" class="align-middle p-0 m-1 text-center">
                                    <img src="./dev/images/Reihe 8/Reihe-8-E1-2.png" alt="Adam"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td width="50%" class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-12">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-13">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-14">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-15">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-16">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-17">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1">
                                    <div class="itm-lst 1itm" id="lst-18">
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
                src: ["./dev/sounds/Reihe 8/r8 B1.mp3"],
                sprite: {
                    "0": [7721, 81570],
                    "1": [16811, 1580],
                    "2": [20613, 1720],
                    "3": [24440, 1630],
                    "4": [28056, 1740],
                    "5": [31873, 1653],
                    "6": [35595, 1561],
                    "7": [39549, 1953],
                    "8": [43169, 1879],
                    "9": [46952, 2047],
                    "10": [54237, 1699],
                    "11": [58329, 1969],
                    "12": [62472, 1992],
                    "13": [66736, 1846],
                    "14": [71041, 1761],
                    "15": [79075, 2010],
                    "16": [74885, 1880],
                    "17": [83254, 1934],
                    "18": [87431, 1963]
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
                    }); /* 정답확인 */
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
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
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
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    $("#0").show();
                    $("#ready").hide();

                    <?php require "wahl.php"; ?>

                    /* 자동 답 채우기 */
                    var pan = new Array();
                    pan = [1, 3, 4, 5, 6, 9, 11, 13, 15, 17];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("w-100");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2")
                            .remove();
                            }
                        })
                    }
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
