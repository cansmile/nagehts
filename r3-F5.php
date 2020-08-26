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
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
                        Korea
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="2">
                        Mexiko
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so" id="3">
                        Griechenland
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="4">
                        Franzose
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="5">
                        Ungarin
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans15 btn-md btn-outline-dark itm so" id="6">
                        Indien
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="7">
                        Polen
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="8">
                        Ungarn
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="9">
                        Deutschland
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so" id="10">
                        Mexikaner
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="11">
                        Polin
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm so" id="12">
                        Griechin
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="13">
                        Frankreich
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="14">
                        Deutscher
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans16 btn-md btn-outline-dark itm so" id="15">
                        Inder
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="16">
                        Koreanerin
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie und sprechen Sie nach.<br>
                        <small>듣고 따라하세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                    <h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4 mt-2 border border-dark rounded p-2">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td>Vivien(Ungarn)</td>
                                <td>Sumi (Korea)</td>
                            </tr>
                            <tr>
                                <td>Pierre (Frankreich)</td>
                                <td>Diana (Griechenland)</td>
                            </tr>
                            <tr>
                                <td>Max (Deutschland)</td>
                                <td>Carlos (Mexiko)</td>
                            </tr>
                            <tr>
                                <td>Julia (Polen)</td>
                                <td>Amit (Indien)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mb-4 mt-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="50%">
                                    <img src="./<?php echo($root); ?>images/sym_frau.png" alt="Frau"
                                        style="max-height: 140px; width: auto;">
                                </th>
                                <th scope="col" class="text-center" width="50%">
                                    <img src="./<?php echo($root); ?>images/sym_mann.png" alt="Mann"
                                        style="max-height: 140px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 350%;"><button type="button" id="17"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Vivien kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Sie ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>비비안은 헝가리
                                            출신이에요. 그녀는 헝가리인이에요.</small></span>
                                </td>
                                <td style="line-height: 350%;"><button type="button" id="18"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Pierre kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Er ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>피에르는 프랑스
                                            출신이에요. 그는 프랑스인이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 350%;"><button type="button" id="19"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Sumi kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Sie ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>수미는 한국 출신이에요.
                                            그녀는 한국인이에요.</small></span>
                                </td>
                                <td style="line-height: 350%;"><button type="button" id="20"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Max kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Er ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>막스는 독일 출신이고,
                                            독일인이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 350%;"><button type="button" id="21"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Julia kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Sie ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>율리아는 폴란드 출신이고
                                            폴란드인이에요.</small></span>
                                </td>
                                <td style="line-height: 350%;"><button type="button" id="22"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Carlos kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Er ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-12">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>카를로스는 멕시코
                                            출신이에요. 그는 멕시코인이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 350%;"><button type="button" id="23"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Diana kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-13">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Sie ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-14">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>다이아나는 그리스
                                            출신이에요. 그녀는 그리스인이에요.</small></span>
                                </td>
                                <td style="line-height: 350%;"><button type="button" id="24"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    Amit kommt aus
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-15">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .<br>
                                    Er ist
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;"
                                        id="lst-16">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>아밋은 인도 출신이에요.
                                            그는 인도인이에요.</small></span>
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
        $("chk").hide();
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
            }
            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./<?php echo($root); ?>sounds/Reihe 3/r3 F5.mp3"
                ],
                sprite: {
                    "0": [86, 50198],
                    "1": [55962, 1288],
                    "2": [73239, 1256],
                    "3": [62628, 1430],
                    "4": [67923, 1515],
                    "5": [54036, 1360],
                    "6": [76868, 1335],
                    "7": [59615, 1207],
                    "8": [52520, 1267],
                    "9": [69865, 1353],
                    "10": [74824, 1668],
                    "11": [61266, 1126],
                    "12": [64531, 1255],
                    "13": [66213, 1411],
                    "14": [71491, 1207],
                    "15": [78442, 1219],
                    "16": [57692, 1616],
                    "17": [34, 5374],
                    "18": [27080, 5200],
                    "19": [7228, 5237],
                    "20": [33446, 3700],
                    "21": [13881, 4868],
                    "22": [39086, 5611],
                    "23": [20591, 4697],
                    "24": [45684, 4510]
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
                        if (($("div#last").text() ==
                                "" || t.text() ==
                                "❚❚") && !t
                            .hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        } else if (last == ti &&
                            nagehts.playing($(
                                    "div#last")
                                .text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        }
                    });

                    <?php require "wahl.php"; ?>

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if (!$("#itms").find(
                                "button").length) {
                            $("span.nu").each(
                                function () {
                                    $(this)
                                        .text($
                                            .trim(
                                                $(
                                                    this)
                                                .closest(
                                                    "tr"
                                                )
                                                .find(
                                                    ".itm-lst"
                                                )
                                                .text()
                                            )
                                        );
                                    $(this)
                                        .removeClass(
                                            "btn btn-outline-dark btn-sm nu"
                                        );
                                    $(this)
                                        .addClass(
                                            "font-weight-bold rounded bg-success text-white p-1 px-2 m-1"
                                        );
                                }
                            );

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst>button")
                                .addClass(
                                    "text-success font-weight-bold"
                                );

                            var qa = $(".itm-lst")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".text-success")
                                .length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) *
                                100; /* 정답 비율 */
                            var tcl =
                                "white"; /* 기본 문자색 */

                            /* 분류 기준은 100%, 80%, 60%, 40% */
                            if (pe > 99) {
                                var st = "원어민이세요?";
                                var cl = "lime";
                                var tcl = "dark";
                            } else if (pe > 74) {
                                var st =
                                    "어! 좀 하시는데요~^^";
                                var cl = "success";
                            } else if (pe > 49) {
                                var st =
                                    "쓰읍~ 다시 해 보실까요?";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요~";
                                var cl = "danger";
                            }

                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중 " +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st + "</h4>");

                            $(this).attr("id",
                                "done");


                            $(".tran").show();
                            $(".itm-lst").hide();
                        } else {
                            $("div.itm-lst").each(
                                function (idx) {
                                    if (!$(this)
                                        .find(
                                            "button"
                                        )
                                        .length
                                    ) {
                                        if (na !=
                                            ""
                                        ) {
                                            na +=
                                                ", ";
                                        }
                                        na += (idx +
                                            1
                                        );
                                    }
                                }
                            );
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
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
                                pa[last] = $("#" +
                                    last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(
                            ".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
