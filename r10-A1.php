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
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="1">
                        das Schwimmbad
                        <span class="tran"><br><small>수영장</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="2">
                        das Kino (Megabox)
                        <span class="tran"><br><small>영화관 (메가박스)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="3">
                        der Blumenladen (Schön)
                        <span class="tran"><br><small>꽃집 (쉔)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
                        die Bank (Sparkasse)
                        <span class="tran"><br><small>은행 (슈파카세)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="5">
                        die Kirche (Frauenkirche)
                        <span class="tran"><br><small>교회 (프라우엔교회)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="6">
                        die Bäckerei (Achso)
                        <span class="tran"><br><small>빵집 (악소)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="7">
                        die Apotheke (Löwe)
                        <span class="tran"><br><small>약국 (뢰베)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="8">
                        der Supermarkt (Kaiser)
                        <span class="tran"><br><small>슈퍼마켓 (카이저)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="9">
                        die Post
                        <span class="tran"><br><small>우체국</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="10">
                        die Sprachschule (Translingua)
                        <span class="tran"><br><small>어학원
                                (트란스링구아)</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="11">
                        der Park
                        <span class="tran"><br><small>공원</small></span>
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
                    <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-9 text-center">
                    <img src="./dev/images/Reihe 10/Reihe-10-A1.png" alt="Wo ist das?"
                        style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td>①</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>②</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>③</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>④</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑤</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑥</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑦</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑧</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑨</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑩</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>⑪</td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인 </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
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
        $(".tran").hide();
        $("#chk").hide();

        /* 각 문장 재생 횟수 초기화 */
        var hm = new Array(),
            sen = new Array();
        $(".so").each(function () {
            hm[$(this).attr("id")] = 0;
            sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
                .html();
        });

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
                src: ["./dev/sounds/Reihe 10/r10 A1.mp3"],
                sprite: {
                    "0": [0, 39216],
                    "1": [4531, 1841],
                    "2": [7217, 2193],
                    "3": [10785, 2242],
                    "4": [14212, 2148],
                    "5": [17699, 2384],
                    "6": [21213, 2289],
                    "7": [24533, 2350],
                    "8": [27963, 2452],
                    "9": [31425, 1500],
                    "10": [33620, 2868],
                    "11": [37517, 1464]
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
                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("w-100 btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }
                    $("#0").show();
                    $("#ready").hide();
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
