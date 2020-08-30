<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Hören Sie und sprechen Sie nach.<br>
                        <small>듣고 따라 하세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0"> HV </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td class="align-middle border border-dark border-right-only"
                                    rowspan="3">Hast du</td>
                                <td class="align-middle border border-dark border-right-only"
                                    colspan="2">heute Abend</td>
                                <td class="align-middle" rowspan="3">
                                    Zeit?</td>
                            </tr>
                            <tr>
                                <td class="align-middle border border-dark border-right-only"
                                    rowspan="2">morgen</td>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    früh</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Nachmittag
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Hast du heute
                                    Abend Zeit? <span class="tran"><br><small>너
                                            오늘 저녁 시간 있니?</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Hast du morgen
                                    früh Zeit? <span class="tran"><br><small>너
                                            내일 일찍 시간 있니?</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Hast du morgen
                                    Nachmittag Zeit? <span
                                        class="tran"><br><small>너 내일 오후에 시간
                                            있니?</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td class="align-middle border border-dark border-right-only"
                                    rowspan="4">Ich möchte gern</td>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    zum Fußballspiel gehen.</td>
                                <td class="align-middle" rowspan="4">
                                    Hast du Lust?<br>Kommst du mit?</td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    ins Konzert gehen.</td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    ins Kino gehen.</td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    essen gehen.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Ich möchte
                                    gern zum Fußballspiel gehen. <span
                                        class="tran"><br><small>나 축구하러 가려고
                                            해.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="5"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Ich möchte
                                    gern ins Konzert gehen. <span
                                        class="tran"><br><small>나 콘서트에 가려고
                                            해.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Ich möchte
                                    gern ins Kino gehen. <span
                                        class="tran"><br><small>나 영화관에 가려고
                                            해.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="7"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Ich möchte
                                    gern essen gehen. <span
                                        class="tran"><br><small>나 먹으러 가려고
                                            해.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Hast du Lust?
                                    <span class="tran"><br><small>너도
                                            갈래?</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="9"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="align-middle">Kommst du mit?
                                    <span class="tran"><br><small>너도 같이
                                            갈래?</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="col-12 bg-success text-white p-2 text-center rounded-circle">
                    <strong>Zusage <small>승락</small></strong></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td class="align-middle border border-dark border-right-only"
                                    colspan="2">Ja, das klingt gut!</td>
                                <td class="align-middle" rowspan="2">
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td class="align-middle border border-dark border-right-only"
                                    colspan="2">Ja, gerne. Ich habe Zeit.</td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0"
                                    height="5"></td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    Wann</td>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    fängt das denn an?</td>
                                <td class="align-middle"> Um 4 Uhr.
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0"
                                    height="5"></td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    Wo</td>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    treffen wir uns?</td>
                                <td class="align-middle">Bei mir zu
                                    Hause.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="10"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Ja, das klingt
                                    gut! <span class="tran"><br><small>그래,
                                            좋다!</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="11"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Ja, gern. Ich
                                    habe Zeit. <span class="tran"><br><small>그래,
                                            좋다. 나 시간 있어.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="12"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Wann fängt das
                                    denn an? <span class="tran"><br><small>언제
                                            시작하는데?</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="13"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Um 4 Uhr.
                                    <span
                                        class="tran"><br><small>4시에.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="14"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Wo treffen wir
                                    uns? <span class="tran"><br><small>우리 어디서
                                            만나?</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="15"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td class="align-middle">Bei mir zu
                                    Hause. <span class="tran"><br><small>우리
                                            집에서.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="col-12 bg-danger text-white p-2 text-center rounded-circle">
                    <strong>Absage <small>거절</small></strong></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td class="align-middle">Tut mir leid,
                                    das geht nicht.</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    Ich habe</td>
                                <td class="align-middle">leider keine
                                    Zeit.</td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0"
                                    height="5"></td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    Ich muss</td>
                                <td class="align-middle">lernen.</td>
                            </tr>
                            <tr>
                                <td class="align-middle p-0"
                                    height="5"></td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    Vielleicht</td>
                                <td class="align-middle">das nächste
                                    Mal.</td>
                            </tr>
                            <tr>
                                <td
                                    class="align-middle border border-dark border-right-only">
                                    &nbsp;</td>
                                <td class="align-middle">morgen.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="16"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="align-middle">Tut mir leid,
                                    das geht nicht. <span
                                        class="tran"><br><small>미안해, 난
                                            안되겠다.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="17"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="align-middle">Ich habe
                                    leider keine Zeit. <span
                                        class="tran"><br><small>유감스럽게도 시간이
                                            없어.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="18"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="align-middle">Ich muss
                                    lernen. <span class="tran"><br><small>나 공부해야
                                            해.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="19"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="align-middle">Vielleicht das
                                    nächste Mal. <span
                                        class="tran"><br><small>아마도 다음 번에 될 수
                                            있어.</small></span></td>
                            </tr>
                            <tr>
                                <td class="align-middle" width="50">
                                    <button type="button" id="20"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="align-middle">Vielleicht
                                    morgen. <span class="tran"><br><small>아마도
                                            내일은 될 수 있어.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
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
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 7/r7 B1.mp3"],
                sprite: {
                    "0": [11328, 158588],
                    "1": [25242, 2586],
                    "2": [32727, 2620],
                    "3": [39629, 3317],
                    "4": [48091,3980],
                    "5": [57273, 3384],
                    "6": [64969, 3312],
                    "7": [72283, 3250],
                    "8": [79454, 1636],
                    "9": [85724, 1772],
                    "10": [96801, 2544],
                    "11": [103704, 3380],
                    "12": [111768, 2406],
                    "13": [118049, 2155],
                    "14": [123504, 2174],
                    "15": [128138, 2460],
                    "16": [137674, 3066],
                    "17": [145945, 2370],
                    "18": [153643, 1977],
                    "19": [160263, 2842],
                    "20": [167390, 2241]
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

                    $("#0").show();
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
