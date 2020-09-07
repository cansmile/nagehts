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
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm"
                        id="1">
                        Ärztin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm"
                        id="2">
                        Kellner
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="3">
                        Architekt
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="4">
                        Verkäufer
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="5">
                        Friseurin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="6">
                        Hausfrau
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm"
                        id="7">
                        Sekretärin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="8">
                        Taxifahrer
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="9">
                        Lehrer
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm"
                        id="10">
                        Ingenieur
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
                    <h2> Ordnen Sie zu. <br>
                        <small>알맞은 직업을 찾아보세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼 또는 <button type="button"
                                    class="btn btn-sm btn-outline-secondary disabled">▶</button>
                                버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                        <h3>[ <small>듣고 단어를 알맞은 항목이 짝지우세요.</small> ]</h3>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">
                                    <button type="button" id="11"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;교사</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="12"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;점원</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="13"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;주부</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="14"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;미용사</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="15"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;건축가</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-2.png"
                                        alt="2"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-3.png"
                                        alt="3"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-9.png"
                                        alt="9"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-10.png"
                                        alt="10"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-7.png"
                                        alt="7"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">
                                    <button type="button" id="16"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;택시기사</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="17"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;의사</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="18"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;기술자</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="19"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;웨이터</span>
                                </th>
                                <th scope="col" class="text-center">
                                    <button type="button" id="20"
                                        class="so btn btn-outline-danger">▶</button>
                                    <span class="tran">&nbsp;비서</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-8.png"
                                        alt="8"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-6.png"
                                        alt="6"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-1.png"
                                        alt="1"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-5.png"
                                        alt="5"
                                        style="max-width: 100%; height: auto;">
                                </td>
                                <td><img src="./dev/images/Reihe 3/Reihe-3-D4-4.png"
                                        alt="4"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
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
                    "./dev/sounds/Reihe 3/r3 D4.mp3"],
                sprite: {
                    "0": [1892, 46540],
                    "1": [36326, 1344],
                    "2": [43212, 1452],
                    "3": [28871, 1525],
                    "4": [16514, 1949],
                    "5": [24991, 1519],
                    "6": [20661, 1534],
                    "7": [46760, 1756],
                    "8": [32593, 1828],
                    "9": [11753, 1588],
                    "10": [39977, 1394],
                    "11": [11753, 1588],
                    "12": [16514, 1949],
                    "13": [20661, 1534],
                    "14": [24991, 1519],
                    "15": [28871, 1525],
                    "16": [32593, 1828],
                    "17": [36326, 1344],
                    "18": [39977, 1394],
                    "19": [43212, 1452],
                    "20": [46760, 1756]
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
</body>

</html>
