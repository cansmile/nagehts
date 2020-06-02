<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
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
                <div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="1">
                        a
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="2">
                        b
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="3">
                        c
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
                    <h2>[ <small>순서에 맞게 노란 단추를 눌러 넣세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row p-2 m-1 border border-dark rounded">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>a. Klara Sauer macht zweimal pro Woche Tae-Kwon-Do. Tae-Kwon-Do ist gut für den
                                    Körper und Geist. Der Sport macht sie gesund und fit. Konzentration ist dabei sehr
                                    wichtig. Jeder kann Tae-Kwon-Do lernen.<span class="tran"><small>클라라 자우어는 일주일에 두 번
                                            태권도를 합니다. 태권도는 몸과 마음에 좋습니다. 이 스포츠는 건강과 체력 유지에 적합합니다. 태권도에서 집중은 매우 중요합니다. 누구나
                                            태권도를 배울 수 있습니다.</small></span></td>
                            </tr>
                            <tr>
                                <td>b. Martin Sager ist Steilwandkletterer. Er trainiert alle zwei Tage nach der Arbeit
                                    im Sportzentrum und klettert Wände hoch. Dabei braucht er starke Finger und Arme. Im
                                    Urlaub fährt er gern in die Berge zum Klettern.<span class="tran"><small>마틴 자거는 암벽
                                            등반가입니다. 그는 스포츠 센터에서 일한 후 이틀에 한 번 훈련을하고 암벽을 탑니다. 암벽등반할 때는 강한 손가락과 팔이 필요합니다.
                                            휴가 중에 그는 암벽등반하러 산에 가는 것을 좋아합니다.</small></span></td>
                            </tr>
                            <tr>
                                <td>c. In Europa fahren jedes Jahr viele Leute in den Skiurlaub in die Alpen. Viele
                                    Leute kommen aber nicht gesund nach Hause. Marie Klein hat sich zum Beispiel beim
                                    Skiurlaub das Bein gebrochen und hatte ein Gipsbein.<span class="tran"><small>유럽에서는
                                            많은 사람들이 매년 알프스로 스키타러 갑니다. 그러나 어떤 사람들이 건강한 상태로 집에 오지 못합니다. 예를 들어 마리 클라인은 스키를
                                            타다가 다리가 부러져 깁스를 했습니다.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th class="align-middle" socpe="col">a</th>
                                <th class="align-middle" socpe="col">b</th>
                                <th class="align-middle" socpe="col">c</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle"><button type="button" id="4"
                                        class="so btn btn-outline-pink">▶</button></td>
                                <td class="align-middle"><button type="button" id="5"
                                        class="so btn btn-outline-success">▶</button></td>
                                <td class="align-middle"><button type="button" id="6"
                                        class="so btn btn-outline-info">▶</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless text-center align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">Foto</th>
                                <th scope="col" class="align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-1.png"
                                        alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu."
                                        style="max-height: 240px; width: auto;"></th>
                                <th scope="col" class="align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-2.png"
                                        alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu."
                                        style="max-height: 240px; width: auto;"></th>
                                <th scope="col" class="align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-4.png"
                                        alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu."
                                        style="max-height: 240px; width: auto;"></th>
                                <th scope="col" class="align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-3.png"
                                        alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu."
                                        style="max-height: 240px; width: auto;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="align-middle">Text</th>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/taptogrouph.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
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
                src: ["./<?php echo($root); ?>sounds/Reihe 8/r8 A2.mp3"],
                sprite: {
                    "0": [416, 64542],
                    "4": [8508, 17795],
                    "5": [27743, 16453],
                    "6": [46597, 18361]
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
                        if ($("#itms").find("button.itm").length < 1) {
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");

                            $(".itm-lst").each(function () {
                                if (($.trim($(this).find(".btn").text()) != "▼") &&
                                    $(this).find(".btn")) {
                                    $(this).find(".btn").addClass("text-success");
                                }
                            });

                            var qa = $(".itm-lst>.text-success").length; /* 전체 문항 수 */
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
                    $(".alert").hide();

                    <?php require "wahl.php"; ?>

                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("btn-block");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                                $("#lst-" + pan[p]).parent().find(".tran").show();
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
    <?php require "footer.php"; ?>
</body>

</html>
