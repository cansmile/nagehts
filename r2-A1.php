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
                    <div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12"
                        id="itms">
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="1">
                            Berlin
                            <span class="tran"><small>베를린</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="2">
                            Washington
                            <span class="tran"><small>워싱턴</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="3">
                            Italien
                            <span class="tran"><small>이탈리아</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="4">
                            Paris
                            <span class="tran"><small>파리</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="5">
                            China
                            <span class="tran"><small>중국</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="6">
                            Seoul
                            <span class="tran"><small>서울</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="7">
                            Österreich
                            <span class="tran"><small>오스트리아</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="8">
                            Japan
                            <span class="tran"><small>일본</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="9">
                            Peking
                            <span class="tran"><small>북경</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="10">
                            die Schweiz
                            <span class="tran"><small>스위스</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="11">
                            Korea
                            <span class="tran"><small>대한민국</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="12">
                            Rom
                            <span class="tran"><small>로마</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="13">
                            Frankreich
                            <span class="tran"><small>프랑스</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="14">
                            Ankara
                            <span class="tran"><small>앙카라</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="15">
                            die Türkei
                            <span class="tran"><small>터키</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="16">
                            Amerika
                            <span class="tran"><small>미국</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="17">
                            Wien
                            <span class="tran"><small>빈</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="18">
                            Tokio
                            <span class="tran"><small>동경</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                            id="19">
                            Deutschland
                            <span class="tran"><small>독일</small></span>
                        </button>
                        <button type="button"
                            class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                            id="20">
                            Bern
                            <span class="tran"><small>베른</small></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Bitte ordnen Sie zu.
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button><br>
                        <small> 알맞은 도시와 국가를 써보세요. </small>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼을 눌러 듣고 알맞은 위치에 국가와 수도를 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A1-1.png"
                        style="max-width: 100%; height: auto;" alt="Eiffelturm">
                </div>
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A1-2.png"
                        style="max-width: 100%; height: auto;"
                        alt="Freiheitsstatue"></div>
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A1-3.png"
                        style="max-width: 100%; height: auto;"
                        alt="Griechischer Tempel"></div>
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A1-4.png"
                        style="max-width: 100%; height: auto;"
                        alt="Amphitheater"></div>
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A1-5.png"
                        style="max-width: 100%; height: auto;" alt="Pyramide">
                </div>
            </div>
            <div class="row" id="lsts">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th class="bg-info"> Länder 국가</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="align-middle" id="th-1">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-2">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-3">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-4">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-5">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-6">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-7">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-8">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-9">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-10">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-1">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th class="bg-info"> Hauptstädte 수도
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="align-middle" id="th-11">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-12">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-13">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-14">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-15">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-16">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-17">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-18">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-19">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle" id="th-20">
                                    <div class="itm-lst 1itm align-middle"
                                        id="lst-2">
                                        <h1
                                            class="btn btn-warning cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
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
    <script src="./dev/js/taptocompareh.js"></script>
    <!-- interact.min.js -->
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $("#chk").hide();
        var cp = new Array();
        var cp = [19, 16, 12, 13, 9, 11, 17, 18, 5, 20, 6, 3, 4, 15, 14, 2, 7,
            8, 1, 10
        ];
        $(document).ready(function () {
            function checkHeight() {
                /* 좌우 셀 높이 맞추어 주기 */
                var tbn = 10; /* 전체 셀의 반 값; 좌측과 우측이 같은 경우 */
                for (var i = 1; i <= tbn; i++) {
                    if ($("#th-" + i).height() > $("#th-" + (i + tbn))
                        .height()) {
                        $("#th-" + (i + tbn)).height($("#th-" + i)
                            .height());
                    } else {
                        $("#th-" + (i)).height($("#th-" + (i + tbn))
                            .height());
                    }
                }
            }
            $(document).on("click", function () {
                checkHeight();
            });
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
                    "./dev/sounds/Reihe 2/r2 A1.mp3"],
                sprite: {
                    "0": [2378, 57789],
                    "1": [23474, 1277],
                    "2": [28129, 1240],
                    "3": [30463, 1466],
                    "4": [37155, 1305],
                    "5": [39384, 1258],
                    "6": [18545, 1088],
                    "7": [43709, 1357],
                    "8": [56924, 1284],
                    "9": [41317, 1245],
                    "10": [48010, 1562],
                    "11": [16547, 1309],
                    "12": [32689, 1067],
                    "13": [35021, 1447],
                    "14": [54462, 1245],
                    "15": [52310, 1467],
                    "16": [25869, 1435],
                    "17": [45906, 1203],
                    "18": [58875, 1421],
                    "19": [21467, 1336],
                    "20": [50219, 1197]
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
                        if ($(this).attr("id") ==
                            "chk") {
                            var na = "";
                            if ($("#itms").find(
                                    "button")
                                .length < 1) {
                                $(".tran").show();
                                /* 정답 확인 div 상자 배경색 속성 없애기 */
                                $(this).removeClass(
                                    "btn-light "
                                    );
                                $(".itm-lst>button")
                                    .addClass(
                                        "text-success font-weight-bold"
                                        );
                                var qa = $(
                                        ".itm-lst")
                                    .length; /* 전체 문항 수 */
                                var qr = $(
                                    ".text-success"
                                    )
                                .length; /* 맞춘 항목 수 */
                                var pe = (qr / qa) *
                                    100; /* 정답 비율 */
                                var tcl =
                                "white"; /* 기본 문자색 */
                                /* 분류 기준은 100%, 80%, 60%, 40% */
                                if (pe > 99) {
                                    var st =
                                        "원어민이세요?";
                                    var cl = "lime";
                                    var tcl =
                                    "dark";
                                } else if (pe >
                                    74) {
                                    var st =
                                        "어! 좀 하시는데요~^^";
                                    var cl =
                                        "success";
                                } else if (pe >
                                    49) {
                                    var st =
                                        "쓰읍~ 다시 해 보실까요?";
                                    var cl =
                                        "primary";
                                } else {
                                    var st =
                                        "좀 더 분발해 주세요~";
                                    var cl =
                                        "danger";
                                }
                                $(this).addClass(
                                    "btn-" +
                                    cl +
                                    " text-" +
                                    tcl);
                                $(this).html(
                                    "<h4>" +
                                    qa +
                                    "문제 중 " +
                                    qr +
                                    "개를 맞히셨네요!<br>" +
                                    st + "</h4>"
                                    );
                                $(this).attr("id",
                                    "done");
                                $(".btn-lg").text()
                                    .appendTo($(
                                            this)
                                        .closest(
                                            "td"));
                                $(".btn-lg")
                                .remove();
                            } else {
                                $("div.itm-lst")
                                    .each(function (
                                        idx) {
                                        if (!$(
                                                this)
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
                                            na +=
                                                (idx +
                                                    1
                                                    );
                                        }
                                    });
                                alert(
                                    "모든 문제를 풀어주세요!");
                                /* alert(na+"번 문제를 풀어주세요!"); */
                            }
                        }
                    });
                    /* 준비되면 HV 보이기 */
                    $("#0").show();
                    $("#ready").hide();
                    $("#th-1").find("h1").remove();
                    $("#11").appendTo($("#th-1>div"));
                    $("#11").addClass(
                        "w-100 btn-outline-dark font-weight-bold"
                        );
                    $("#11").addClass("border-0");
                    $("#th-11").find("h1").remove();
                    $("#6").appendTo($("#th-11>div"));
                    $("#6").addClass(
                        "w-100 btn-outline-dark font-weight-bold"
                        );
                    $("#6").addClass("border-0");
                    checkHeight();
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
