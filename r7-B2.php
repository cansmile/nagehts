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
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so"
                        id="1">
                        Ich möchte heute nicht.
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so"
                        id="2">
                        Ich will ein bisschen lernen und fernsehen.
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so"
                        id="3">
                        Wollen wir zusammen essen gehen?
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so"
                        id="4">
                        Ich will heute ins Konzert gehen.
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
                    <button type="button"
                        class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                        id="0">
                        HV
                    </button>
                    </h2>
                    <h3>[ <small>단어를 선택하고 알맞은 위치의 단추를 누르세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="50"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Wittmer.
                                    <span
                                        class="tran"><br><small>비트머.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Hallo, Nina. Hier ist Tim.
                                    <span class="tran"><br><small>안녕, 니나.
                                            팀이야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Hallo, Tim. Wie geht es dir?
                                    <span class="tran"><br><small>안녕, 팀. 어떻게
                                            지내?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Gut. Und dir?
                                    <span class="tran"><br><small>잘지내.
                                            너는?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="9"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Auch gut.
                                    <span class="tran"><br><small>나도
                                            잘지내.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="10"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Sag mal. Was machst du heute Abend?
                                    <span class="tran"><br><small>말해. 너 오늘 저녁에
                                            뭐해?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="11"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Nichts Besonderes.
                                    <span
                                        class="tran"><br><small>별일없는데.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50">&nbsp;</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-danger btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>

                                    <span class="tran"><small>공부 좀 하다가 TV좀
                                            볼거야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="13"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Ach, Das kannst du immer machen.
                                    <span class="tran"><br><small>아, 그건 맨날 할 수
                                            있잖아.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50">&nbsp;</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-primary btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>

                                    <span class="tran"><small>나 오늘 콘서트
                                            가려고해.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="15"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>In der Musikhalle I gibt es ein Jazz-Fest.
                                    <span class="tran"><br><small>음악홀 I에서 재즈
                                            콘서트가 있어.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="16"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Ach nee, dazu habe ich keine Lust.
                                    <span class="tran"><br><small>아, 싫어. 나는
                                            별로야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50">&nbsp;</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-danger btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>

                                    <span class="tran"><small>오늘은 가고 싶지
                                            않아.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="18"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Schade. Was möchtest du denn?
                                    <span class="tran"><br><small>유감이네. 그럼 너는
                                            뭐하고 싶니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50">&nbsp;</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-primary btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>

                                    <span class="tran"><small>함께 밥 먹으러
                                            갈까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="20"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Ja, das ist eine gute Idee.
                                    <span class="tran"><br><small>응, 좋은
                                            생각이야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="21"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Gut. Treffen wir uns um halb neun? Soll ich
                                    dich abholen?
                                    <span class="tran"><br><small>좋아. 우리 8시 반에
                                            데리러갈까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="22"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Ja, gut. Danke!
                                    <span class="tran"><br><small>그래, 좋다.
                                            고마워.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50"><button type="button" id="23"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Bitte. Bis dann!
                                    <span class="tran"><br><small>괜찮아. 그럼 그 때
                                            보자.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                    id="chk">
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
                src: ["./dev/sounds/Reihe 7/r7 B2.mp3"],
                sprite: {
                    "0": [3322, 58528],
                    "1": [44783, 1812],
                    "2": [32013, 2854],
                    "3": [48674, 2052],
                    "4": [36557, 2427],
                    "5": [19181, 1260],
                    "6": [20377, 2176],
                    "7": [22595, 2587],
                    "8": [25004, 1876],
                    "9": [26774, 1399],
                    "10": [28136, 2375],
                    "11": [30456, 1600],
                    "12": [31964, 2903],
                    "13": [34541, 2246],
                    "14": [36502, 2430],
                    "15": [38910, 3102],
                    "16": [41994, 2841],
                    "17": [44725, 1941],
                    "18": [46389, 2432],
                    "19": [48690, 2092],
                    "20": [50802, 2460],
                    "21": [53898, 4215],
                    "22": [57944, 2173],
                    "23": [60000, 1875]
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
