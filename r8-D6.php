<?php require_once("heading.php"); ?>
    <!-- 보기시작 -->
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm px-3" id="1">
                        Nimm doch Hustensaft!
                        <span class="tran"><br><small>기침약 먹어라!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm px-3" id="2">
                        Lernt nicht viel und geht spazieren!
                        <span class="tran"><br><small>(너희들) 공부 많이하지 말고
                                산책하러가!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm px-3" id="3">
                        Seien Sie bitte ruhig!
                        <span class="tran"><br><small>조용히 하세요!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm px-3" id="4">
                        Geh zum Arzt!
                        <span class="tran"><br><small>의사에게 가봐라(너)!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm px-3" id="5">
                        Habt keine Angst!
                        <span class="tran"><br><small>걱정하지 마(너희들)!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm px-3" id="6">
                        Trinken Sie Kamillentee!
                        <span class="tran"><br><small>카모마일 차 마시지요!</small>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm px-3" id="7">
                        Machen Sie Rückengymnastik!
                        <span class="tran"><br><small>허리운동 하세요!</small>
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
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="50" class="align-middle" scope="col">1.</th>
                                <td class="align-middle">Husten (Kind)
                                    <span class="tran"><br><small>기침
                                            (어린이)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">2.</th>
                                <td class="align-middle">Grippe (Mina)
                                    <span class="tran"><br><small>독감
                                            (미나)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">3.</th>
                                <td class="align-middle">
                                    Rückenschmerzen (Frau Park)
                                    <span class="tran"><br><small>요통 (박
                                            여사)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">4.</th>
                                <td class="align-middle">Bauchschmerzen
                                    (Herr Kim)
                                    <span class="tran"><br><small>복통
                                            (김씨)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">5.</th>
                                <td class="align-middle">nervös (wir)
                                    <span class="tran"><br><small>긴장한
                                            (우리)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">6.</th>
                                <td class="align-middle">Prüfung (wir)
                                    <span class="tran"><br><small>시험
                                            (우리)</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50" class="align-middle" scope="col">7.</th>
                                <td class="align-middle">zu laut
                                    (Studenten)
                                    <span class="tran"><br><small>너무 시끄러운
                                            (학생)</small></span></td>
                                <td class="align-middle">
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
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 8/r8 D6.mp3"],
                sprite: {
                    "0": [264, 49205],
                    "1": [13569, 2351],
                    "2": [19053, 3044],
                    "3": [25359, 2091],
                    "4": [30936, 2046],
                    "5": [36137, 1984],
                    "6": [41401, 2155],
                    "7": [47239, 2456]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
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
                                        "text-success fw-bold");
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

                    <?php require "wahl.php"; ?>

                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#lst-" + pan[p] + ">.itm").addClass("w-100");
                                $("#lst-" + pan[p] + ">h2").remove();
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
