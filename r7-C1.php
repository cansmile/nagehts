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
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="1">
                        a. Mama, darf ich ein Eis?<span class="tran"><br><small>엄마, 아이스크림 먹어도
                                되요?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="2">
                        b. Hier darf man nicht parken.<span class="tran"><br><small>여기에 주차를 하면 안
                                된다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="3">
                        c. Das Kind kann schon stehen.<br>Es kann aber noch
                        nicht laufen.<span class="tran"><br><small>아이는 설 수 있다.
                                하지만 걷지는 못한다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="4">
                        d. Hier muss man leise sprechen.<span class="tran"><br><small>여기에서 조용히 이야기해야
                                한다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="5">
                        e. Tim hat Ferien.<br>Er muss nicht in die Schule
                        gehen.<span class="tran"><br><small>팀은 방학이다. 그는 학교에 갈
                                필요가 없다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="6">
                        f. Hier kann man parken.<span class="tran"><br><small>여기에 주차를 할 수
                                있다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="7">
                        g. Hier muss man stoppen.<span class="tran"><br><small>여기에서는 무조건
                                서야한다.</small></span>
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
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
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-1.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-2.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-3.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-4.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-5.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-6.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="250" class="align-middle text-center">
                                    <img src="./dev/images/Reihe 7/Reihe-7-C1-7.png"
                                        alt="Was kann / muss / darf man (nicht)?"
                                        style="max-height: 240px; max-width: 100%; width: auto;">
                                </td>
                            </tr>
                            <tr>
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
                src: ["./dev/sounds/Reihe 7/r7 C1.mp3"],
                sprite: {
                    "0": [0, 46226],
                    "1": [13243, 2598],
                    "2": [17791, 2187],
                    "3": [21803, 4780],
                    "4": [28660, 2243],
                    "5": [33358, 3985],
                    "6": [39944, 1776],
                    "7": [43483, 1930]
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

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find(".btn")) {
                                    $(this).find(".btn").addClass(
                                        "text-success font-weight-bold");
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

                    <?php require "wahl.php"; ?>

                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("w-100");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                                $("#lst-" + pan[p]).parent().find(".tran").show();
                            }
                        })
                    }

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
