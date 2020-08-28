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
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="6">
                        a
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="7">
                        b
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="8">
                        c
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="9">
                        d
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="10">
                        e
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
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle text-center" scope="row">1.</th>
                                <td class="align-middle">Jemand
                                    schwimmt.<span class="tran"><small><br>어떤
                                            사람이 수영한다.</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm py-0 my-0" id="lst-1">
                                        <h2 class="btn btn-warning btn-lg ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center" scope="row">2.</th>
                                <td class="align-middle">Jemand sieht
                                    fern.<span class="tran"><small><br>어떤 사람이
                                            TV를 본다.</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm py-0 my-0" id="lst-2">
                                        <h2 class="btn btn-warning btn-lg ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center" scope="row">3.</th>
                                <td class="align-middle">Jemand kauft
                                    ein.<span class="tran"><small><br>어떤 사람이
                                            구매한다.</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm py-0 my-0" id="lst-3">
                                        <h2 class="btn btn-warning btn-lg ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle text-center" scope="row">4.</th>
                                <td class="align-middle">Jemand
                                    schläft.<span class="tran"><small><br>어떤 사람이
                                            잔다.</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm py-0 my-0" id="lst-4">
                                        <h2 class="btn btn-warning btn-lg ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center" scope="row">5.</th>
                                <td class="align-middle">Jemand macht
                                    eine Flasche Sekt auf.<span class="tran"><small><br>어떤 사람이 샴페인 병을
                                            연다.</small></span></td>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm py-0 my-0" id="lst-5">
                                        <h2 class="btn btn-warning btn-lg ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="text-center align-middle" scope="col"><span
                                        class="p-2 px-3 rounded m-1 text-white bg-danger">a</span>
                                </th>
                                <th class="text-center align-middle" scope="col"><span
                                        class="p-2 px-3 rounded m-1 text-dark bg-warning">b</span>
                                </th>
                                <th class="text-center align-middle" scope="col"><span
                                        class="p-2 px-3 rounded m-1 text-white bg-success">c</span>
                                </th>
                                <th class="text-center align-middle" scope="col"><span
                                        class="p-2 px-3 rounded m-1 text-white bg-info">d</span>
                                </th>
                                <th class="text-center align-middle" scope="col"><span
                                        class="p-2 px-3 rounded m-1 text-white bg-primary">e</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">
                                    <button type="button" id="1" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-center align-middle">
                                    <button type="button" id="2" class="so btn btn-outline-warning">▶</button>
                                </td>
                                <td class="text-center align-middle">
                                    <button type="button" id="3" class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="text-center align-middle">
                                    <button type="button" id="4" class="so btn btn-outline-info">▶</button>
                                </td>
                                <td class="text-center align-middle">
                                    <button type="button" id="5" class="so btn btn-outline-primary">▶</button>
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
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {            /* 소리 출력 전역 변수와 함수 */
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
                src: ["./dev/sounds/Reihe 6/r6 E1.mp3"],
                sprite: {
                    "0": [4209, 110667],
                    "1": [7900, 12253],
                    "2": [21693, 10480],
                    "3": [35967, 17376],
                    "4": [57718, 39084],
                    "5": [98689, 17099]
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

            <?php require "wahl.php"; ?>

            var pan = new Array();
            pan = [1];
            var il = $("#itms>.itm").length;
            for (var p = 0; p < pan.length; p++) {
                var pani = "#lst-" + pan[p];
                $(".itm").each(function () {
                    if ($(this).hasClass("ans" + pan[p])) {
                        $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                        $("#" + $(this).attr("id")).addClass(
                            "btn-block font-weight-bold");
                        $("#lst-" + pan[p] + ">h2").remove();
                        $("#lst-" + pan[p]).parent().find(".tran").show();
                    }
                })
            }
        });

    </script>
    </body>

</html>
