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
                    <button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="10">
                        Berlin
                    </button>
                    <button type="button" class="mt-1 mx-1 so btn ans1 btn-lg btn-outline-dark itm" id="11">
                        Amerika
                    </button>
                    <button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="12">
                        Berlin
                    </button>
                    <button type="button" class="mt-1 mx-1 so btn ans3 btn-lg btn-outline-dark itm" id="13">
                        Dresden
                    </button>
                    <button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="14">
                        Berlin
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
                    <h2><button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                    <h3>[ <small>듣고 알맞은 위치에 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col"><img src="./dev/images/Reihe 2/Reihe-2-A4-1.png"
                        style="max-width: 480px; height: auto;" alt="Sandmännchen"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="prev">
                    <table class="table table-borderless table-light">
                        <tbody>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="1"
                                        class="so btn btn-danger">▶</button>
                                </th>
                                <td>Hallo, ich bin Anna Müller. <span class="tran">&nbsp;<br><small>안녕하세요, 저는
                                            안나 뮐러에요.</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="2"
                                        class="so btn btn-primary">▶</button>
                                </th>
                                <td>Hallo, ich heiße Max Fernández. <span class="tran">&nbsp;<br><small>안녕하세요, 저는
                                            막스 페르난데즈에요.</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="3"
                                        class="so btn btn-danger">▶</button>
                                </th>
                                <td>Ah, kommen Sie aus Mexiko? <span class="tran">&nbsp;<br><small>아, 멕시코
                                            출신이신가요?</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="4"
                                        class="so btn btn-primary">▶</button>
                                </th>
                                <td>Nein, aus
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 150px;" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    . <span class="tran">&nbsp;<br><small>아니오,
                                            <strong>미국</strong>
                                            출신이에요.</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="5"
                                        class="so btn btn-danger">▶</button>
                                </th>
                                <td>Und wohnen Sie hier in
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 150px;" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    ? <span class="tran">&nbsp;<br><small>그러면
                                            당신은 <strong>베를린</strong>에서
                                            사시나요?</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="6"
                                        class="so btn btn-primary">▶</button>
                                </th>
                                <td>Ja. Und Sie? <span class="tran">&nbsp;<br><small>네,
                                            당신은요?</span></td></small>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="7"
                                        class="so btn btn-primary">▶</button>
                                </th>
                                <td>Wohnen Sie auch in
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 150px;" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    ? <span class="tran">&nbsp;<br><small><strong>베를린</strong>에서
                                            사시나요?</span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="8"
                                        class="so btn btn-danger">▶</button>
                                </th>
                                <td>Nein, ich wohne in
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 150px;" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    . <span class="tran">&nbsp;<br><small>아뇨, 저는
                                            <strong>드레스덴</strong>에서
                                            살아요.</small></span></td>
                            </tr>
                            <tr>
                                <th class="text-end" scope="row"><button type="button" id="9"
                                        class="so btn btn-danger">▶</button>
                                </th>
                                <td>Aber meine Mutter wohnt hier in
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 150px;" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                    . <span class="tran">&nbsp;<br><small>하지만, 제
                                            어머님은 <strong>베를린</strong>에서
                                            사세요.</small></span></td>
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
                <div class="col-11">
                    <div class="row">
                        <div class="col-12 text-start my-2"><span class="tipp">TIPP</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row" width="30%"
                                            class="border border-dark border-right-only text-center">
                                            Sie<br /><small>(당신)</small>
                                        </th>
                                        <td class="align-middle">wohn<strong>en
                                                in</strong>…</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border border-dark border-right-only text-center">
                                            Ich<br /><small>(나)</small>
                                        </th>
                                        <td class="align-middle">wehn<strong>e
                                                in</strong> …</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border border-dark border-right-only text-center">Meine
                                            Mutter<br /><small>(나의 엄마)</small></th>
                                        <td class="align-middle">wohn<strong>t in</strong>…</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row" width="30%"
                                            class="border border-dark border-right-only text-center">Sie<br />
                                            <small>(당신)</small>
                                        </th>
                                        <td class="align-middle">komm<strong>en aus
                                            </strong>…</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border border-dark border-right-only text-center">
                                            Ich<br /><small>(나)</small>
                                        </th>
                                        <td class="align-middle">komm<strong>e
                                                aus</strong> …</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border border-dark border-right-only text-center">
                                            Maria<br /><small>(마리아)</small></th>
                                        <td class="align-middle">komm<strong>t aus</strong>…</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        $("#chk").hide();
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
                src: [
                    "./dev/sounds/Reihe 2/r2 A4 A5.mp3"
                ],
                sprite: {
                    "0": [1397, 31190],
                    "1": [8316, 2645],
                    "2": [11433, 2784],
                    "3": [14366, 2750],
                    "4": [17303, 2264],
                    "5": [20025, 2236],
                    "6": [22468, 2048],
                    "7": [24826, 2065],
                    "8": [27393, 2773],
                    "9": [29969, 2579],
                    "10": [36141, 1135],
                    "11": [34180, 1415],
                    "12": [37797, 1149],
                    "13": [39499, 1337],
                    "14": [41409, 1058]
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
                        if ($("#wahl").visibility != "visible" && $(this).attr("id") ==
                            "chk") {
                            $(this).attr("id", "done");

                            $(".itm-lst").each(function () {
                                $(this).find("button").addClass(
                                    "text-success font-weight-bold");
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
                            $(this).attr("id", "done");
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
    </body>

</html>
