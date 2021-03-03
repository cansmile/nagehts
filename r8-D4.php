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
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so text-start" id="1">
                        Was hast du gegessen?
                        <span class="tran"><br><small>뭘 먹었니?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so text-start" id="2">
                        Das ist aber nicht gut! Du musst viel Obst und Gemüse
                        essen.
                        <span class="tran"><br><small>그것은 안좋아! 과일과 채소를 많이 먹어야
                                하는데.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so text-start" id="3">
                        Heute verschreibe ich dir ein Medikament!
                        <span class="tran"><br><small>오늘 약을
                                처방해줄게!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so text-start" id="4">
                        Guten Tag, Frau Doktor!
                        <span class="tran"><br><small>안녕하세요, 선생님!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm so text-start" id="5">
                        Gute Besserung!
                        <span class="tran"><br><small>얼른 나으렴!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so text-start" id="6">
                        Hallo Peter?
                        <span class="tran"><br><small>안녕 피터?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so text-start" id="7">
                        Ich habe Hamburger gegessen.
                        <span class="tran"><br><small>햄버거 먹었어요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so text-start" id="8">
                        Was fehlt dir denn?
                        <span class="tran"><br><small>어디가 아프니?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so text-start" id="9">
                        Mein Magen tut mir sehr weh und ich habe Fieber.
                        <span class="tran"><br><small>배가 많이 아프고 열이
                                있어요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so text-start" id="10">
                        Ich esse meistens Fast Food, Hamburger oder Pizza.
                        <span class="tran"><br><small>저는 보통 패스트푸드 먹는데, 햄버거나
                                피자에요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans15 btn-md btn-outline-dark itm so text-start" id="11">
                        Danke schön, Frau Doktor!
                        <span class="tran"><br><small>고맙습니다, 선생님!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so text-start" id="12">
                        Ja, ich weiß.
                        <span class="tran"><br><small>네, 알아요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so text-start" id="13">
                        (nach der Untersuchung) Peter!
                        <span class="tran"><br><small>(검진 후)피터!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so text-start" id="14">
                        Du hast Darmgrippe.
                        <span class="tran"><br><small>장염에 걸렸구나.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so text-start" id="15">
                        Aber ich bin den ganzen Tag in der Schule und gleich
                        danach habe ich Nachhilfeunterricht.
                        <span class="tran"><br><small>하지만 저는 하루 종일 학교에 있고, 곧바로
                                과외를 가요.</small></span>
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
                    <h2> Hören Sie den Dialog und ergänzen Sie. <small> 듣고
                            채우세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">보기</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Ärztin:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Peter:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Ärztin:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm col-5" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Peter:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Ärztin:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Peter:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-0 align-middle" scope="row" width="100">&nbsp;</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Ärztin:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Peter:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm d-inline-block" id="lst-9" style="min-width: 25%;">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    <div class="itm-lst 1itm d-inline-block" id="lst-10" style="min-width: 70%;">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Ärztin:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">&nbsp;</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-12">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">&nbsp;</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-13">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">&nbsp;</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-14">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="100">Peter:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-15">
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
        $(".tran").hide();
        $("#chk").hide();
        $("#0").hide();

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
                src: ["./dev/sounds/Reihe 8/r8 D4.mp3"],
                sprite: {
                    "0": [897, 50674],
                    "1": [20300, 1873],
                    "2": [28832, 4593],
                    "3": [45120, 2842],
                    "4": [12728, 1896],
                    "5": [48161, 1518],
                    "6": [11042, 1563],
                    "7": [22205, 2078],
                    "8": [14590, 1850],
                    "9": [16280, 3534],
                    "10": [24355, 4300],
                    "11": [49680, 1958],
                    "12": [33370, 1895],
                    "13": [42505, 1306],
                    "14": [43814, 1789],
                    "15": [35136, 5405]
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
                            alert("모든 문제를 풀어주세요!");
                        }
                    });
                    $("#0").show();
                    $("#ready").hide();
                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [1, 2, 4, 5, 6, 8, 9, 11, 12, 13, 14];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "w-100 font-weight-bold");
                                $("#" + $(this).attr("id")).addClass("border-0");
                                $("#lst-" + pan[p] + ">h2").remove();
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
