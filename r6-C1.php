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
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="./dev/images/Reihe 6/Reihe-6-C1-1.png" alt="Wann haben wir Deutschkurs?"
                        style="max-width: 100%; height: auto;">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Hallo, Andrea. Wie geht’s?<span class="tran"><br><small>안녕, 안드레아. 어떻게
                                            지내?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Danke gut. Und dir?<span class="tran"><br><small>고마워 좋아. 넌
                                            어때?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Auch gut. Danke. Wann haben wir
                                    Deutschkurs?<span class="tran"><br><small>나도
                                            좋지. 고마워. 우리 독일어 수업 시간이
                                            언제지?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Deutschunterricht haben wir am Montag und am
                                    Donnerstag.<span class="tran"><br><small>우리
                                            독일어 수업은 월요일하고 목요일이야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Ach so. Um wie viel Uhr beginnt er?<span class="tran"><br><small>아 그래. 몇 시에
                                            시작하지?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Um Viertel nach eins fängt er an.<span class="tran"><br><small>1시 15분에
                                            시작해.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Vielen Dank.<span class="tran"><br><small>고맙다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">시간적 의미의 W-Frage와 전치사
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    • Wann... ? <br><span class="pl-2"><small>언제...?</small></span><br>
                                </td>
                                <td>
                                    ■ Im Januar ... / Am Montag ...<br>
                                    <span class="ml-3">Um 12 Uhr ... / Am Morgen
                                        ...</span><br>
                                </td>
                            <tr>
                                <td>
                                    • Wie viel Uhr... ? <br><span class="pl-2"><small>몇
                                            시...?</small></span><br>
                                </td>
                                <td>
                                    ■ 9 Uhr ... / 12 Uhr ...<br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    • Um wie viel Uhr... ? <br><span class="pl-2"><small>몇
                                            시에...?</small></span><br>
                                </td>
                                <td>
                                    ■ Um 9 Uhr... / Um 12 Uhr ...<br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    • Von wann bis wann..? <br><span class="pl-2"><small>언제부터
                                            언제까지...?</small></span><br>
                                </td>
                                <td>
                                    ■ Von Montag bis Freitag ...<br>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-auto">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="border bg-light">
                                    an | fangen mit +3 (= beginnen) <br><span class="pl-2"><small>~을
                                            시작하다.</small></span><br>
                                    Der Lehrer fängt mit dem Unterricht an.
                                    <br><span class="pl-2"><small>선생님께서 수업을
                                            시작하신다.</small></span><br>
                                    Ein neues Leben fängt an. <br><span class="pl-2"><small>새로운 인생이
                                            시작된다.</small></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-light border border-bottom-0">
                                    <span class="gr"><strong>GR</strong></span>&nbsp;<span
                                        class="prap"><strong>PRÄP.2</strong></span>&nbsp;
                                    <strong>um</strong>&nbsp;<small>[ʊm]
                                        ...경 (시각)</small></td>
                            </tr>
                            <tr>
                                <td class="bg-light border border-top-0"> Ich komme <strong>um</strong> 11 Uhr nachts
                                    nach Hause. <br><span class="pl-2"><small>나는 밤 11시<strong>에</strong>
                                            귀가한다.</small></span><br> <strong>Um</strong> 9 Uhr beginnt der
                                    Deutschunterricht. <br><span class="pl-2"><small>9시<strong>에</strong> 독일어 수업이
                                            시작된다.</small></span><br> <strong>Um</strong> 7 Uhr abends gehe ich nach
                                    Hause. <br><span class="pl-2"><small>저녁 7시<strong>에</strong> 집에
                                            간다.</small></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td>der Deutschkurs <small>독일어 강좌</small> der
                                    Deutschunterricht <small>독일어 수업</small>
                                    beginnen /anfangen <small>시작하다</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="last" class="d-none"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
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
                        "./dev/sounds/Reihe 6/r6 C1.mp3"
                    ],
                    sprite: {
                        "0": [7308, 47924],
                        "1": [12322, 2225],
                        "2": [17260, 2692],
                        "3": [22792, 4308],
                        "4": [31440, 3961],
                        "5": [39974, 3741],
                        "6": [48029, 2693],
                        "7": [53808, 1404]

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

                            /* $("#qst-1>div.o").addClass("an"); */
                            /* $("#qst-1>div.o").addClass("btn-warning"); */
                            /* $("#qst-1>div.o").removeClass("btn-light"); */
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
                                }

                            );
                        }

                        ,
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
                                    }

                                );
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
                }

            )
        });
    </script>
    </body>

</html>
