<?php require "nav.php"; ?>
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
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="1">
                        1
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="2">
                        2
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
                        3
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="4">
                        4
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="5">
                        5
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="6">
                        a
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="7">
                        b
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="8">
                        c
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="9">
                        d
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="10">
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
                    <h2>[ <small>알파벳을] 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러도 번역은 나오지 않습니다. 정답확인하면 문장의 번역이 나옵니다.</small> ]
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 p-2 align-middle text-center"
                            style="line-height: 5em;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center align-middle" width="30"><span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle">
                                                <strong>A</strong></span>
                                        </th>
                                        <td class="text-center align-middle" width="250">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-C1-1.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-1">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-6">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p-2 align-middle text-center"
                            style="line-height: 5em;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center align-middle" width="30"><span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle">
                                                <strong>B</strong></span>
                                        </th>
                                        <td class="text-center align-middle" width="250">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-C1-2.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-2">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-7">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p-2 align-middle text-center"
                            style="line-height: 5em;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center align-middle" width="30"><span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle">
                                                <strong>C</strong></span>
                                        </th>
                                        <td class="text-center align-middle" width="250">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-C1-3.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-3">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-8">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p-2 align-middle text-center"
                            style="line-height: 5em;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center align-middle" width="30"><span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle">
                                                <strong>D</strong></span>
                                        </th>
                                        <td class="text-center align-middle" width="250">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-C1-4.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-4">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-9">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p-2 align-middle text-center"
                            style="line-height: 5em;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center align-middle" width="30"><span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle">
                                                <strong>E</strong></span>
                                        </th>
                                        <td class="text-center align-middle" width="250">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-C1-5.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-5">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="itm-lst 1itm" id="lst-10">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 p-2 border border-light"><button type="button" id="11"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>1</strong></span><br>Die Verkäuferin zeigt der Mutter und dem Kind ein
                            Wertkauftelefon.<span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="12"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>2</strong></span><br>Eine Kursteilnehmerin stellt dem Lehrer eine Frage nach
                            dem Dativ.<span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="13"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>3</strong></span><br>Der Vater will seiner Tochter beim Sprachenlernen
                            helfen.<span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="14"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>4</strong></span><br>Tim schenkt seiner Freundin zum Valentinstag eine
                            Halskette.<span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="15"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>5</strong></span><br>Die Oma kauft ihrem Enkelkind zum Geburtstag ein
                            Fahrrad.<span class="tran"><br><small></small></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 p-2 border border-light"><button type="button" id="16"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>a</strong></span><br>Deshalb kauft er ihr ein Wörterbuch.<br>
                                <span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="17"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>b</strong></span><br>Er erklärt ihr den Dativ.<br>
                                <span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="18"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>c</strong></span><br>Er schenkt ihr die Kette.<br>
                                <span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="19"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>d</strong></span><br>Sie zeigt ihnen ein Wertkauftelefon<br>
                                <span class="tran"><br><small></small></span>
                        </div>
                        <div class="col-12 p-2 border border-light"><button type="button" id="20"
                                class="so btn btn-outline-dark btn-sm mr-1">▶</button><span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2">
                                <strong>e</strong></span><br>Sie will ihm das Fahrrad schenken.<br>
                                <span class="tran"><br><small></small></span>
                        </div>
                    </div>
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
                src: ["./<?php echo($root); ?>sounds/Reihe 9/r9 C1.mp3"],
                sprite: {
                    "0": [550, 98783],
                    "11": [48551, 7359],
                    "12": [85440, 7545],
                    "13": [13440, 7056],
                    "14": [31249, 7084],
                    "15": [67815, 6792],
                    "16": [21561, 5290],
                    "17": [94526, 473],
                    "18": [39887, 4058],
                    "19": [57917, 5423],
                    "20": [76563, 4862]
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
                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [1, 6];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("btn-block");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }
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
    <?php require "footer.php"; ?>
</body>

</html>
