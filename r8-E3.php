<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
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
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
                        Bleiben Sie im Bett und trinken Sie viel Tee.<span class="tran"><br>&nbsp;<small>침대에 누워 차를 많이
                                마시세요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
                        Ich habe Husten und auch Fieber.<span class="tran"><br>&nbsp;<small>제가 기침하고 열도
                                있어서요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="3">
                        Danke, Frau Doktor.<span class="tran"><br>&nbsp;<small>감사해요, 의사
                                선생님.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
                        Ich verschreibe Ihnen ein Rezept.<span class="tran"><br>&nbsp;<small>제가 처방전을
                                드릴게요.</small></span>
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
                    <h2>Er gänzen Sie.<br><small>채우세요. </small>[ <small>단어를 누르면
                            소리가 납니다.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td scope="row" width="50">
                                    <button type="button" id="5" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Guten Tag, Herr Kim. Was fehlt Ihnen
                                    denn?<span class="tran"><br><small>안녕하세요, 김
                                            선생님. 무슨 일이신가요?</small></span></td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="6" class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>Guten Tag, Frau Doktor!<span class="tran"><br><small>안녕하세요, 의사
                                            선생님!</small></span></td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="7" class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="8" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Ach so! Machen Sie sich oben frei und husten
                                    Sie mal!<span class="tran"><br><small>알겠어요!
                                            상체를 편하게 하시고 기침한 번
                                            해보세요!</small></span></td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="9" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>(Nach der Untersuchung) Sie haben
                                    Grippe.<span class="tran"><br><small>(진찰 후)
                                            당신은 독감이 있으세요.</small></span></td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="10" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="11" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>und schreibe Sie für eine Woche krank.<span class="tran"><br><small>그리고 일주일치 약을 써
                                            드릴게요.</small></span></td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="12" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="13" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <button type="button" id="14" class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Gute Besserung, Herr Kim!<span class="tran"><br><small>얼른 회복하세요, 김
                                            선생님!</small></span></td>
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
                src: ["./<?php echo($root); ?>sounds/Reihe 8/r8 E3.mp3"],
                sprite: {
                    "0": [4076, 37305],
                    "1": [34340, 3418],
                    "2": [18366, 2287],
                    "3": [37698, 1791],
                    "4": [29454, 2361],
                    "5": [13108, 3357],
                    "6": [16532, 1839],
                    "7": [18366, 2287],
                    "8": [20842, 4249],
                    "9": [27706, 1676],
                    "10": [29452, 2360],
                    "11": [31950, 2255],
                    "12": [34390, 3387],
                    "13": [37928, 1753],
                    "14": [39556, 2017]
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

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find("button.btn")) {
                                    $(this).find("button.btn").addClass(
                                        "text-success");
                                }
                            });
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */

                            /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            $(".btn-lg").text().appendTo($(this).closest("td"));
                            $(".btn-lg").remove();
                        } else {
                            $("div.itm-lst").each(function (idx) {
                                if (!$(this).find("button").length) {
                                    if (na != "") {
                                        na += ", ";
                                    }
                                    na += (idx + 1);
                                }
                            });
                            alert("모든 문제를 풀어주세요!");
                        }
                    });
                    $("#0").show();
                    $(".alert").hide();

                    <?php require "wahl.php"; ?>
                    /* 자동 답 채우기 */
                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("btn-block");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2")
                            .remove();
                            }
                        })
                    }
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
