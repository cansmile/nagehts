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
                    <h3>[ <small
                        ><button class="btn btn-sm disabled d-inline btn-<?php echo($color); ?>">HV</button> 버튼 또는
                        <button class="btn btn-sm disabled d-inline btn-<?php echo($color); ?>">▶</button> 버튼을 눌러 2번
                        들으시면 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td width="40%" class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Kopf
                                    <span class="tran"><small>머리</small>
                                </td>
                                <td width="10%" class="align-middle p-0 m-1"><button type="button" id="1"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td rowspan="9" class="align-middle p-0 m-2 pl-2"><img
                                        src="./dev/images/Reihe 8/Reihe-8-E1-1.png" alt="Eva"
                                        style="max-width: 100%; height: auto;"></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">das Auge
                                    <span class="tran"><small>눈</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="2"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">die Nase
                                    <span class="tran"><small>코</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="3"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Mund
                                    <span class="tran"><small>입</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="4"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Arm
                                    <span class="tran"><small>팔</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="5"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">die Hand
                                    <span class="tran"><small>손</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="6"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Bauch
                                    <span class="tran"><small>배</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="7"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">das Bein
                                    <span class="tran"><small>다리</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="8"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1 text-right font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Fuß
                                    <span class="tran"><small>발</small>
                                </td>
                                <td class="align-middle p-0 m-1"><button type="button" id="9"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td rowspan="9" class="align-middle p-0 m-1 text-center"><img
                                        src="./dev/images/Reihe 8/Reihe-8-E1-2.png" alt="Adam"
                                        style="max-width: 100%; height: auto;"></td>
                                <td width="10%" class="align-middle p-0 m-1"><button type="button" id="10"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td width="40%" class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">das Ohr
                                    <span class="tran"><small>귀</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="11"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">das Gesicht
                                    <span class="tran"><small>얼굴</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="12"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">die Zähne
                                    <span class="tran"><small>이</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="13"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Hals
                                    <span class="tran"><small>목</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="14"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Rücken
                                    <span class="tran"><small>등</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="15"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Finger
                                    <span class="tran"><small>손가락</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="16"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">die Brust
                                    <span class="tran"><small>가슴</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="17"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">das Knie
                                    <span class="tran"><small>무릎</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0 m-1"><button type="button" id="18"
                                        class="so btn btn-<?php echo($color); ?>">▶</button></td>
                                <td class="align-middle p-0 m-1 text-justify font-weight-bold px-2"
                                    style="font-size: 1.5em;">der Zeh
                                    <span class="tran"><small>발가락</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();

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
                src: ["./dev/sounds/Reihe 8/r8 B1.mp3"],
                sprite: {
                    "0": [644, 88647],
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
        });

    </script>
    </body>

</html>
