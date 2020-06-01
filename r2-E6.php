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
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="1">
                        Und du, wer bist du?
                        <span class="tran"><br>&nbsp;<small>그리고 넌, 네 이름은
                                뭐야?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
                        Wo wohnen Sie?
                        <span class="tran"><br>&nbsp;<small>당신은 어디에서
                                사나요?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
                        Und dir? Geht es dir gut?
                        <span class="tran"><br>&nbsp;<small>너는 어때? 잘
                                지내니?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
                        Wie heißen Sie?
                        <span class="tran"><br>&nbsp;<small>당신의 이름은
                                뭔가요?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="5">
                        Wohnst du in Berlin?
                        <span class="tran"><br>&nbsp;<small>너는 베를린에서 사니?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
                        Wie geht es dir?
                        <span class="tran"><br>&nbsp;<small>너는? 너는 잘
                                지내?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
                        Sprechen Sie Deutsch?
                        <span class="tran"><br>&nbsp;<small>독일어를 말할 수
                                있나요?</small></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>[ <small>문제에 맞는 답안을 알맞게 짝지우세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless table-light">
                        <tbody>
                            <tr>
                                <th class="bg-light" scope="row" width="30">1</th>
                                <td width="50"><button type="button" id="8"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button>
                                </td>
                                <td width="40%">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Mein Name ist Mina Kim.
                                    <span class="tran"><br>&nbsp;<small>저의 이름은
                                            미나 김이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">2</th>
                                <td><button type="button" id="9"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ich wohne in Seoul.
                                    <span class="tran"><br>&nbsp;<small>저는 서울에서
                                            살아요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">3</th>
                                <td><button type="button" id="10"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, ich spreche etwas Deutsch.
                                    <span class="tran"><br>&nbsp;<small>네, 저는
                                            독일어를 조금 해요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">4</th>
                                <td><button type="button" id="11"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ich bin Sabine.
                                    <span class="tran"><br>&nbsp;<small>나는
                                            자비네야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">5</th>
                                <td><button type="button" id="12"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Gut, danke!
                                    <span class="tran"><br>&nbsp;<small>잘지내,
                                            고마워!</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">6</th>
                                <td><button type="button" id="13"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, auch gut. Danke.
                                    <span class="tran"><br>&nbsp;<small>응,
                                            고마워.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">7</th>
                                <td><button type="button" id="14"
                                        class="so btn btn-outline-dark btn-md mr-2">▶</button></td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, ich wohne in Berlin.
                                    <span class="tran"><br>&nbsp;<small>응, 난
                                            베를린에 살아.</small></span>
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
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./<?php echo($root); ?>sounds/Reihe 2/r2 E6.mp3"
                ],
                sprite: {
                    "0": [2404, 68300],
                    "1": [38061, 2404],
                    "2": [19091, 1431],
                    "3": [55312, 1909],
                    "4": [10201, 1511],
                    "5": [65224, 1608],
                    "6": [47856, 1511],
                    "7": [28267, 1758],
                    "8": [7632, 7304],
                    "9": [16766, 6864],
                    "10": [26134, 7307],
                    "11": [35632, 7816],
                    "12": [45447, 6939],
                    "13": [53713, 6816],
                    "14": [62425, 7864]
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
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst>button").addClass(
                                "text-success font-weight-bold text-left");
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
                        } else {
                            $("div.itm-lst").each(function (idx) {
                                if (!$(this).find("button").length) {
                                    if (na != "") {
                                        na += ", ";
                                    }
                                    na += (idx + 1);
                                }
                            });
                            alert(na + "번 문제를 풀어주세요!");
                        }
                    });
                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-block text-left"
                                    ); /* $("#"+ $(this).attr("id")).addClass("border-0"); */
                                $("#lst-" + pan[p] + ">h2")
                                    .remove(); /* $("#lst-"+ pan[p]).closest("tr").find(".tran").show(); */
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
                                pa[last] = $("#" +
                                    last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(".tran").each(function () {
                            if (!$(this).parent().hasClass("itm")) {
                                $(this).show();
                            }
                        });

                        pa[last] = $("#" + last).html();
                    }
                }


            });

        })

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
