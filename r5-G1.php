<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
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
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm"
                        id="1">
                        Bratwurst<span class="tran"><br><small>구운
                                소세지</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark text-danger so itm"
                        id="2">
                        Gemüsesuppe<span class="tran"><br><small>야채
                                스프</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-purple so itm"
                        id="3">
                        Eis<span class="tran"><br><small>얼음</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-primary so itm"
                        id="4">
                        Schweinebraten<span class="tran"><br><small>돼지
                                불고기</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-purple so itm"
                        id="5">
                        Rindersteak<span class="tran"><br><small>소고기
                                스태이크</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-danger so itm"
                        id="6">
                        Wurst<span class="tran"><br><small>소시지</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-primary so itm"
                        id="7">
                        Schinken<span class="tran"><br><small>햄</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-purple so itm"
                        id="8">
                        Weißbrot<span class="tran"><br><small>흰빵</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-purple so itm"
                        id="9">
                        Hähnchen<span class="tran"><br><small>치킨</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm"
                        id="10">
                        Käsekuchen<span class="tran"><br><small>치즈
                                케잌</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-purple so itm"
                        id="11">
                        Obst<span class="tran"><br><small>과일</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm"
                        id="12">
                        Salat<span class="tran"><br><small>샐러드</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-danger so itm"
                        id="13">
                        Fischplatte<span class="tran"><br><small>생선
                                접시</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm"
                        id="14">
                        Gulaschsuppe<span
                            class="tran"><br><small>굴라시스프</small></span>
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
                    <h2>[ <small>버튼을 눌러 선택하여, 분류에 맞는 단어를 선택하여<br>알맞게
                            채우세요.</small> ]
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table
                        class="table table-borderless table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Fleisch</th>
                                <th scope="col">kein Fleisch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"
                                    class="text-center align-middle">kalt</th>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="text-center align-middle">warm</th>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
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
            }
            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 5/r5 G1.mp3"],
                sprite: {
                    "0": [2140, 60575],
                    "1": [12628, 1605],
                    "2": [16296, 1699],
                    "3": [19821, 1174],
                    "4": [23078, 1940],
                    "5": [26899, 1645],
                    "6": [30776, 1168],
                    "7": [33950, 1594],
                    "8": [37631, 1559],
                    "9": [41081, 1513],
                    "10": [45720, 1681],
                    "11": [49602, 1286],
                    "12": [53158, 1361],
                    "13": [57265, 1650],
                    "14": [60960, 1652]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility !=
                            "visible" && $(this)
                            .attr("id") == "chk") {
                            $(this).attr("id",
                                "done");
                            $(".tran").show();
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst").each(
                                function () {
                                    $(this)
                                        .find(
                                            ".so"
                                            )
                                        .addClass(
                                            "okay fw-bold"
                                            );
                                }
                            );
                            var qa = $(
                                    ".itm-lst>.so")
                                .length; /* 전체 문항 수 */
                            var qr = $(".okay")
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
                        }
                    });
                    /* 미리 답 넣어놓기 */
                    var pan = new Array();
                    /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                    pan = [];
                    /* pan=[4, 10]; */
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#" + pan[p];
                        for (var i = 0; i < $(".itm-lst")
                            .length; i++) {
                            if ($(pani).hasClass("ans" + (
                                    i + 1))) {
                                $(pani).insertAfter($(
                                    "#lst-" + (i +
                                        1) + ">h2"));
                                $(pani).addClass(
                                    "w-100 btn-light"
                                    );
                            }
                        }
                    }
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
