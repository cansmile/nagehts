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
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="1">
                        Arzt
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="2">
                        Lehrer
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm"
                        id="3">
                        Friseur
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="4">
                        Kellner
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="5">
                        Architektin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm"
                        id="6">
                        Sekretär
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm"
                        id="7">
                        Ingenieurin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="8">
                        Verkäuferin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="9">
                        Taxifahrerin
                    </button>
                </div>
            </div>
        </div>
    </section>
    <style>
        td,
        th {
            height: 80px;
            text-align: center;
            vertical-align: middle;
        }

    </style>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie. <br>
                        <small>알맞은 직업을 채우세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="text-center">
                                    <img src="./dev/images/sym_mann.png"
                                        alt="mann"
                                        style="max-height: 140px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="b1">
                                    <button type="button" id="10"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">Verkäufer <span
                                        class="tran"><small><br>&nbsp;(남)점원</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b2">
                                    <button type="button" id="12"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;웨이터</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b3">
                                    <button type="button" id="14"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(남)선생님</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b4">
                                    <button type="button" id="16"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">Architekt <span
                                        class="tran"><small><br>(남)건축가&nbsp;</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b5">
                                    <button type="button" id="18"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(남)의사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b6">
                                    <button type="button" id="20"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">Taxifahrer <span
                                        class="tran"><small><br>&nbsp;(남)택시기사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b7">
                                    <button type="button" id="22"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(남)미용사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b8">
                                    <button type="button" id="24"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(남)비서</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b9">
                                    <button type="button" id="26"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td class="text-primary">Ingenieur <span
                                        class="tran"><small><br>&nbsp;(남)기술자</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="text-center">
                                    <img src="./dev/images/sym_frau.png"
                                        alt="frau"
                                        style="max-height: 140px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="b10">
                                    <button type="button" id="11"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(여)점원</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b11">
                                    <button type="button" id="13"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">Kellnerin <span
                                        class="tran"><small><br>&nbsp;웨이트리스</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b12">
                                    <button type="button" id="15"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">Lehrerin <span
                                        class="tran"><small><br>&nbsp;(여)선생님</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b13">
                                    <button type="button" id="17"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(여)건축가</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b14">
                                    <button type="button" id="19"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">Ärztin <span
                                        class="tran"><small><br>&nbsp;(여)의사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b15">
                                    <button type="button" id="21"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(여)택시기사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b16">
                                    <button type="button" id="23"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">Friseurin <span
                                        class="tran"><small><br>&nbsp;(여)미용사</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b17">
                                    <button type="button" id="25"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">Sekretärin <span
                                        class="tran"><small><br>&nbsp;(여)비서</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="b18">
                                    <button type="button" id="27"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td class="text-danger">
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <span
                                        class="tran"><small>&nbsp;(여)기술자</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table
                        class="table table-borderless table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-primary"><img
                                        src="./dev/images/sym_mann.png"
                                        alt="mann"
                                        style="max-height: 140px; width: auto;">
                                </th>
                                <th scope="col" class="text-danger"><img
                                        src="./dev/images/sym_frau.png"
                                        alt="frau"
                                        style="max-height: 140px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-primary" id="t1">
                                    Kellner</td>
                                <td class="align-middle text-danger">
                                    Kellner<strong>in</strong></td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t2">
                                    Lehrer</td>
                                <td class="align-middle text-danger">
                                    Lehrer<strong>in</strong></td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t3">
                                    Taxifahrer</td>
                                <td class="align-middle text-danger">
                                    Taxifahrer<strong>in</strong></td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t4">
                                    Verkäufer</td>
                                <td class="align-middle text-danger">
                                    Verkäufer<strong>in</strong></td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t5">
                                    Arzt</td>
                                <td class="align-middle text-danger">
                                    Ärzt<strong>in</strong></td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t6">
                                    &nbsp;</td>
                                <td class="align-middle text-danger">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t7">
                                    Krankenpfleger</td>
                                <td class="align-middle text-danger">
                                    Krankenschwester</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t8">
                                    Hausmann</td>
                                <td class="align-middle text-danger">Hausfrau
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-primary" id="t9">
                                    Bankkaufmann</td>
                                <td class="align-middle text-danger">
                                    Bankkauffrau</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
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
                    "./dev/sounds/Reihe 3/r3 D5.mp3"
                ],
                sprite: {
                    "0": [1713, 49867],
                    "1": [27745, 1234],
                    "2": [17423, 1523],
                    "3": [38044, 1334],
                    "4": [12837, 1265],
                    "5": [24697, 1936],
                    "6": [42987, 1546],
                    "7": [49949, 1578],
                    "8": [9662, 1849],
                    "9": [34866, 2082],
                    "10": [7263, 1700],
                    "11": [9662, 1849],
                    "12": [12837, 1265],
                    "13": [14721, 1578],
                    "14": [17423, 1523],
                    "15": [19688, 1384],
                    "16": [22340, 1599],
                    "17": [24697, 1936],
                    "18": [27745, 1234],
                    "19": [29952, 1432],
                    "20": [32443, 1831],
                    "21": [34866, 2082],
                    "22": [38044, 1334],
                    "23": [40279, 1523],
                    "24": [42987, 1546],
                    "25": [45131, 1760],
                    "26": [47784, 1476],
                    "27": [49949, 1578]
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
                                                this
                                                )
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
    <?php include"footer.php"; ?>
</body>

</html>
