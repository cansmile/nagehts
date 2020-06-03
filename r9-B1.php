<?php require "header.php"; ?>

<body>
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
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="1">
                        1
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="2">
                        2
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
                        3
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="4">
                        4
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="5">
                        5
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="6">
                        6
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="7">
                        a
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm px-3" id="8">
                        b
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="9">
                        c
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="10">
                        d
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="11">
                        e
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm px-3" id="12">
                        f
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
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>A</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-1.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="13"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-1">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-7">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>B</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-2.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="14"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-2">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-8">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>C</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-3.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="15"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-3">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-9">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>D</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-4.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="16"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-4">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-10">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>E</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-5.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="17"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-5">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-11">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2 align-middle text-center" style="line-height: 5em;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center align-middle">
                                            <span
                                                class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>F</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" height="150">
                                            <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B1-6.png"
                                                alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <button type="button" id="18"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-6">
                                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                                    ▼ </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle" height="80">
                                            <div class="itm-lst 1itm" id="lst-12">
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>1</strong></span><br>Herzlichen
                            Glückwunsch, Sara.<br>Hier ist mein Geschenk.<span class="tran"><br><small>사라야, (생일) 축하해! 여기
                                    내
                                    선물</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>2</strong></span><br>Ich
                            habe im Mai Geburtstag, du auch?<span class="tran"><br><small>나는 5월에 생일이야, 너도
                                    그래?</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>3</strong></span><br>Hier,
                            die Kinderschokolade ist lecker.<span class="tran"><br><small>여기, 이 어린이초코렛
                                    맛있단다.</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>4</strong></span><br>Wo
                            ist denn die Geburtstagstorte?<br><span class="tran"><br><small>생일케익이
                                    어디있지?</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>5</strong></span><br>Wer
                            mag noch Kekse?<br><span class="tran"><br><small>누가
                                    또 과자를 좋아하니?</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>6</strong></span><br>Trinkst
                            du auch Kaffee?<br><span class="tran"><br><small>너도
                                    커피마시니?</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>a</strong></span><br>Ja,
                            ich habe auch im Mai Geburtstag!<span class="tran"><br><small>응, 나도 5월에
                                    생일이야</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>b</strong></span><br>Da!
                            Auf dem Tisch!<span class="tran"><br><small>저기? 탁자위에
                                    있어.</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>c</strong></span><br>Oh,
                            eine Musik-CD. Danke. Das ist ja toll.<span class="tran"><br><small>오, 음악CD구나. 정말
                                    좋다</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>d</strong></span><br>Ich,
                            die Kekse sind meine Lieblingskekse.<span class="tran"><br><small>나! 이 과자는 내가 좋아하는
                                    과자야</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>e</strong></span><br>Nein
                            danke, meine Zähne!<span class="tran"><br><small>괜찮아
                                    (안먹을께), 내 이가!</small></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border border-light">
                            <span
                                class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>f</strong></span><br>Nein,
                            ich darf nicht. Ich kann dann nicht schlafen.<span class="tran"><br><small>아 나. 마시면 안되. 그럼
                                    잠을
                                    못자서.</small></span>
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
                src: ["./<?php echo($root); ?>sounds/Reihe 9/r9 B1.mp3"],
                sprite: {
                    "0": [586, 77581],
                    "13": [14256, 7677],
                    "14": [24898, 10879],
                    "15": [38901, 7655],
                    "16": [9317, 8199],
                    "17": [61364, 7383],
                    "18": [70965, 7202]
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
                    pan = [1, 7];
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
