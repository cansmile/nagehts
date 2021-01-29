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
                        Staub saugen<span class="tran"><br><small>(진공청소기로)
                                청소하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="2">
                        die Wäsche auf|hängen<span class="tran"><br><small>빨래를
                                널다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="3">
                        den Mülleimer aus|leeren<span class="tran"><br><small>쓰레기통을 비우다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="4">
                        ein|kaufen<span class="tran"><br><small>장을
                                보다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="5">
                        eine Pause machen<span class="tran"><br><small>쉬다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
                        auf|räumen<span class="tran"><br><small>정리하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
                        Frühstück machen<span class="tran"><br><small>아침식사하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
                        auf|stehen<span class="tran"><br><small>기상하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
                        das Geschirr ab|waschen und ab|trocknen<span class="tran"><br><small>그릇을 설겆이하다.</small></span>
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
                    <h2>[ <small>그림에 맞는 단어를 그림 아래에 노란 단추를 눌러 넣세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-2.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-3.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-4.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-5.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-6.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-7.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-8.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-9.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center" scope="col"><img
                                    src="./dev/images/Reihe 6/Reihe-6-A3-10.png"
                                    alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </th>
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
            <div class="row">
                <div class="col">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <span class="tipp">TIPP</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="lh250">auf|hängen
                                        <small>걸다</small> aus|leeren
                                        <small>비우다</small> ein|kaufen
                                        <small>쇼핑하다</small> auf|stehen
                                        <small>일어나다</small> auf|räumen
                                        <small>정리하다</small> ab|waschen
                                        <small>설거지하다</small> ab|trocknen
                                        <small>물기를 없애다</small> 등은
                                        <strong>분리전철</strong>과<strong>
                                            기본동사</strong>로 이루어진 분리동사이다.</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
                    }

                );

                function stopAll() {
                    $(".so").each(function () {
                            $(this).html(pa[$(this).attr("id")]);
                        }

                    );
                }

                /* 문제 재생 */
                var nagehts = new Howl({

                        src: [
                            "./dev/sounds/Reihe 6/r6 A3.mp3"
                        ],
                        sprite: {
                            "0": [615, 46829],
                            "1": [13902, 1909],
                            "2": [36449, 2094],
                            "3": [40953, 2511],
                            "4": [31842, 1716],
                            "5": [45888, 1546],
                            "6": [27490, 1524],
                            "7": [9612, 1707],
                            "8": [23559, 1529],
                            "9": [18425, 2845]
                        }

                        ,
                        html5: true,
                        volume: 1,
                        format: "mp3",
                        preload: true,
                        onloaderror: function () {
                                $(".alert").append(
                                    "<br><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                                );
                                console.log("다시 읽어주세요!");
                            },
                        onload: function () {
                                <?php require "wahl.php"; ?>

                                /* 정답확인 */
                                $("#chk").on("click", function () {
                                    if ($("#wahl").visibility != "visible" && $(this) .attr("id") == "chk") {
                                        $(this).attr("id", "done");

                                        $(".itm-lst").each(function() {
                                            $(this).find("button").addClass("text-success font-weight-bold");
                                        });

                                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                                        $(this).removeClass("btn-light ");
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
                                        $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                                        $(this).attr("id", "done");
                                    }
                                });
                                $("#0").show();
                                $(".alert").hide();

                                /* 답 미리넣어놓기 */
                                var pan = new Array();
                                pan = [7]; /* pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]; */
                                var il = $("#itms>.itm").length;
                                for (var p = 0; p < pan.length; p++) {
                                    var pani = "#lst-" + pan[p];
                                    $(".itm").each(function () {
                                        if ($(this).hasClass("ans" + pan[p])) {
                                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                            $("#" + $(this).attr("id")).addClass("btn-block text-center");
                                            $("#lst-" + pan[p] + ">h2").remove();
                                            $("#lst-" + pan[p]).parent().find(".tran").show();
                                        }
                                    })
                                }

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
                    }

                );
            }

        );

    </script>
    </body>

</html>
