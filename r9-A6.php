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
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
                        vor den Eltern
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="2">
                        Neujahr
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="3">
                        Koreanische Spiele
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
                        am 1.1.
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="5">
                        Reiskuchensuppe
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="6">
                        zu Hause
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="line-height: 250%;">
                    Bei uns in Korea feiert man nicht nur am 1.1
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-1">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    , sondern auch
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-2">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    nach dem Mondkalender Neujahr.<span class="tran"><br><small>우리나라 한국에서는 새해를 양력 1월 1일뿐만 아니라 음력
                            1월1일도 보낸다.</small></span> Dies ist meistens um
                    Januar oder Anfang Februar herum.<span class="tran"><br><small>음력으로 새해는 대부분 1월경이나 2월 초
                            즈음이다.</small></span> Es ist eines der größten Feste
                    in Korea.<span class="tran"><br><small>새해는 한국의 커다란 명절중
                            하나이다.</small></span> Da feiert man mit Familie und
                    Verwandten
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-3">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    .<span class="tran"><br><small>그때 집에서 가족과 친적들과 함께 명절을
                            지낸다.</small></span> Man spielt
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-4">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    , wie zum Beispiel ‚Yutnoli‘ und verbeugt sich
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-5">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    und Älteren.<span class="tran"><br><small>새해에는 한국 전통놀이들, 예를
                            들어 윳놀이를 하고 부모님과 친척어른들에게 새배를 드린다.</small></span>
                    Dabei wünscht man ihnen ein frohes neues Jahr.<span class="tran"><br><small>이때 어른들은 복된 새해를 축원한다 (덕담을
                            한다).</small></span> Als traditionelles Gericht zum
                    Neujahr gibt es
                    <div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-6">
                        <h2 class="btn btn-warning btn-xl ttl d-block">
                            ▼ </h2>
                    </div>
                    .<span class="tran"><br><small>새해명절음식으로 떡국이
                            있다.</small></span> In Korea wird man mit dem Neujahr
                    automatisch 1 Jahr älter, so dass man auch sagt, dass man
                    viel essen soll, damit man das neue Jahr gesund und munter
                    beginnen kann.<span class="tran"><br><small>한국에서는 새해와 더불어
                            자동적으로 한 살이 더 많아지므로, 새해를 건강하고 활기차게 시작할 수 있도록 많이 먹어야
                            한다고 말한다.</small></span>
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

    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
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
                src: ["./dev/sounds/Reihe 9/r9 A6.mp3"],
                sprite: {
                    "0": [768, 59716],
                    "1": [61661, 1337],
                    "2": [63544, 1132],
                    "3": [65022, 1538],
                    "4": [67311, 1661],
                    "5": [69414, 1677],
                    "6": [61564, 1273]
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
                    }); /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find(".btn")) {
                                    $(this).find(".btn").addClass("text-success");
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
                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-block font-weight-bold text-left pl-0");
                                $("#" + $(this).attr("id")).addClass("border-0");
                                $("#lst-" + pan[p] + ">h2").remove();
                                $("#lst-" + pan[p]).parent().find(".tran").show();
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
    </body>

</html>
