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
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="1">
                        Fußballspieler
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm"
                        id="2">
                        Eva
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm"
                        id="3">
                        Frankreich
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="4">
                        28
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="5">
                        Becker
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="6">
                        Clara
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="7">
                        Bäcker
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="8">
                        Argentinien
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
                    <h2> Ergänzen Sie die Tabelle.<br>
                        <small>다음 표를 채우세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣고, 각 항목에 알맞은 단어를 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table-borderless table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" scope="row" rowspan="2">
                                    &nbsp;</th>
                                <th class="text-center" score="col" colspan="2">
                                    ♀ Wie heißt sie?<br>♂ Wie heißt er?</th>
                                <th class="text-center" score="col">♀ Woher
                                    kommt sie?<br>♂ Woher kommt er?</th>
                                <th class="text-center" score="col">♀ Wie alt
                                    ist sie?<br>♂ Wie alt ist er?</th>
                                <th class="text-center" score="col">♀ Was ist
                                    sie von Beruf?<br>♂ Was ist er von Beruf?
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">Vorname</th>
                                <th class="text-center" scope="row">
                                    (Familien-)Name</th>
                                <td class="align-middle text-center"></td>
                                <td class="align-middle text-center"></td>
                                <td class="align-middle text-center"></td>
                                <td class="align-middle text-center"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="align-middle text-center"
                                    scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td class="align-middle text-center">Felix</td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">Deutschland
                                </td>
                                <td class="align-middle text-center">26</td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center"
                                    scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">Smith</td>
                                <td class="align-middle text-center">Amerika
                                </td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">Ärztin</td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center"
                                    scope="row"><button type="button" id="11"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td class="align-middle text-center">Lionel</td>
                                <td class="align-middle text-center">Messi</td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">25</td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle text-center"
                                    scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">Green</td>
                                <td class="align-middle text-center">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2
                                            class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td class="align-middle text-center">31</td>
                                <td class="align-middle text-center">
                                    Schauspielerin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 col-xl-5">
                    <table
                        class="table table-borderless text-center table-striped table-sm">
                        <tbody>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">Was</th>
                                <td
                                    class="border border-dark border-right-only">
                                    ist</td>
                                <td
                                    class="border border-dark border-right-only">
                                    er/sie</td>
                                <td>von
                                    Beruf?</td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">&nbsp;</th>
                                <td
                                    class="border border-dark border-right-only">
                                    bist</td>
                                <td
                                    class="border border-dark border-right-only">
                                    du</td>
                                <td>&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">&nbsp;</th>
                                <td
                                    class="border border-dark border-right-only">
                                    sind</td>
                                <td
                                    class="border border-dark border-right-only">
                                    Sie/sie</td>
                                <td>&nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <table
                        class="table table-borderless text-center table-striped table-sm">
                        <tbody>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">Ich</th>
                                <td
                                    class="border border-dark border-right-only">
                                    bin</td>
                                <td>…</td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">Er/Sie</th>
                                <td
                                    class="border border-dark border-right-only">
                                    ist</td>
                                <td>&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">Sie/Sie</th>
                                <td
                                    class="border border-dark border-right-only">
                                    sind</td>
                                <td>&nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <table
                        class="table table-borderless text-center table-striped table-sm">
                        <tbody>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">Was</th>
                                <td
                                    class="border border-dark border-right-only">
                                    macht</td>
                                <td>er/sie?
                                </td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">&nbsp;</th>
                                <td
                                    class="border border-dark border-right-only">
                                    machst</td>
                                <td>du?</td>
                            </tr>
                            <tr>
                                <th class="border border-dark border-right-only"
                                    scope="row">&nbsp;</th>
                                <td
                                    class="border border-dark border-right-only">
                                    machen</td>
                                <td>Sie/sie?
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
                    "./dev/sounds/Reihe 3/r3 D1.mp3"],
                sprite: {
                    "0": [779, 82211],
                    "9": [16983, 13637],
                    "10": [33578, 16106],
                    "11": [52741, 13835],
                    "12": [69730, 13637]
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
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find(
                                "button").length <
                            1) {
                            $(".tran").show();
                            $(".itm-lst").each(
                                function () {
                                    $(this)
                                        .html($(
                                                this)
                                            .find(
                                                "button"
                                                )
                                            .html()
                                            );
                                    $(this)
                                        .addClass(
                                            "text-success font-weight-bold"
                                            );
                                    /* $(this).addClass("font-weight-bold bg-white border rounded border-dark"); */
                                }
                            );
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            var qa = $(".itm-lst")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".text-success")
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
                        } else {
                            $("div.itm-lst").each(
                                function (idx) {
                                    if (!$(this)
                                        .find(
                                            "button"
                                            )
                                        .length
                                        ) {
                                        if (na !=
                                            ""
                                            ) {
                                            na +=
                                                ", ";
                                        }
                                        na += (idx +
                                            1
                                            );
                                    }
                                }
                            );
                            alert(na +
                                "번 문제를 풀어주세요!");
                        }
                    });
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
