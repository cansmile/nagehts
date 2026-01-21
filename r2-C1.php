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
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="1">
                        Korea
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="2">
                        Ägypterin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="3">
                        Koreaner
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm"
                        id="4">
                        Englisch
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm"
                        id="5">
                        Amerikaner
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="6">
                        Arabisch
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="7">
                        Koreanisch
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="8">
                        Ägypten
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm"
                        id="9">
                        Amerika
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
                    <h2>
                        [ <small>듣고 알맞은 위치에 단어를 짝지우세요.</small> ]<button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
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
                <div
                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                    <table class="table table-borderless text-center"
                        style="min-height: 100%;">
                        <tr>
                            <td class="align-middle"><img
                                    src="./dev/images/Reihe 2/Reihe-2-C1-1.png"
                                    style="max-width: 100%; height: auto;"
                                    alt="Dooly"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <table
                        class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="22"
                                    class="so btn btn-danger btn-lg">▶</button>
                            </th>
                            <td class="bg-danger text-white"
                                height="25px">
                                <h3>Dooly</h3>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="10"
                                    class="so btn btn-danger">▶</button></th>
                            <td class="text-start">Das ist Dooly. <br><span
                                    class="tran">&nbsp;<small>이 아이는
                                        둘리에요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="11"
                                    class="so btn btn-danger">▶</button></th>
                            <td class="text-start">Er kommt aus
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-1">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>한국</strong>에서
                                        왔어요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="12"
                                    class="so btn btn-danger">▶</button></th>
                            <td class="text-start">Er ist
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-2">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>한국인</strong>이에요.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="13"
                                    class="so btn btn-danger">▶</button></th>
                            <td class="text-start">Er spricht
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-3">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>한국어</strong>를
                                        말해요.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div
                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                    <table class="table table-borderless text-center"
                        style="min-height: 100%;">
                        <tr>
                            <td class="align-middle"><img
                                    src="./dev/images/Reihe 2/Reihe-2-C1-2.png"
                                    style="max-width: 100%; height: auto;"
                                    alt="Kleopatra"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <table
                        class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="23"
                                    class="so btn btn-info btn-lg">▶</button>
                            </th>
                            <td class="bg-info text-white text-start"
                                height="25px">
                                <h3>Kleopatra</h3>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="14"
                                    class="so btn btn-info">▶</button></th>
                            <td>Das ist Kleopatra. <br><span
                                    class="tran">&nbsp;<small>이 사람은
                                        클레오파트라에요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="15"
                                    class="so btn btn-info">▶</button></th>
                            <td class="text-start">Sie kommt aus
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-4">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그녀는
                                        <strong>이집트</strong>에서
                                        왔어요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="16"
                                    class="so btn btn-info">▶</button></th>
                            <td class="text-start">Sie ist
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-5">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그녀는
                                        <strong>이집트인</strong>이에요.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="17"
                                    class="so btn btn-info">▶</button></th>
                            <td class="text-start">Sie spricht
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-6">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그녀는
                                        <strong>아랍어</strong>를
                                        말해요.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div
                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                    <table class="table table-borderless text-center"
                        style="min-height: 100%;">
                        <tr>
                            <td class="align-middle"><img
                                    src="./dev/images/Reihe 2/Reihe-2-C1-3.png"
                                    style="max-width: 100%; height: auto;"
                                    alt="Mickey Mouse"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <table
                        class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="24"
                                    class="so btn btn-primary btn-lg">▶</button>
                            </th>
                            <td class="bg-primary text-white"
                                height="25px">
                                <h3>Mickey Mouse</h3>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="18"
                                    class="so btn btn-primary">▶</button></th>
                            <td class="text-start">Das ist Mickey Mouse. <br><span
                                    class="tran">&nbsp;<small>이 아이는 미키
                                        마우스에요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="19"
                                    class="so btn btn-primary">▶</button></th>
                            <td class="text-start">Er kommt aus
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-7">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>미국</strong>에서
                                        왔어요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="20"
                                    class="so btn btn-primary">▶</button></th>
                            <td class="text-start">Er ist
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-8">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>미국인</strong>이에요.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="21"
                                    class="so btn btn-primary">▶</button></th>
                            <td class="text-start">Er spricht
                                <div class="itm-lst 1itm d-inline-block"
                                    style="min-width: 30%;" id="lst-9">
                                    <h2
                                        class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                . <br><span class="tran">&nbsp;<small>그는
                                        <strong>영어</strong>를
                                        말해요..</small></span></td>
                        </tr>
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
            <div class="row">
                <div class="col-12">
                    <table
                        class="table table-borderless text-center table-sm table-striped">
                        <thead>
                            <tr>
                                <th class="text-start" scope="col"><span
                                        class="tipp">TIPP</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">ich</th>
                                <td>spreche</td>
                            </tr>
                            <tr>
                                <th scope="row">er/sie</th>
                                <td>spricht</td>
                            </tr>
                            <tr>
                                <th scope="row">Sie</th>
                                <td>sprechen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 2/r2 C1.mp3"],
                sprite: {
                    "0": [1370, 55027],
                    "1": [59017, 1264],
                    "2": [67884, 1586],
                    "3": [61067, 1490],
                    "4": [76633, 1678],
                    "5": [74326, 1658],
                    "6": [70111, 1421],
                    "7": [63431, 1650],
                    "8": [65559, 1454],
                    "9": [72126, 1306],
                    "10": [11016, 1701],
                    "11": [12936, 1944],
                    "12": [17622, 1859],
                    "13": [21525, 1930],
                    "14": [26798, 1799],
                    "15": [30092, 2274],
                    "16": [34703, 2077],
                    "17": [38354, 1892],
                    "18": [42876, 1976],
                    "19": [46104, 2035],
                    "20": [50327, 2175],
                    "21": [54316, 2018],
                    "22": [11016, 12684],
                    "23": [26798, 13437],
                    "24": [42876, 13787]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
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
                        var na = "";
                        if (!$("#itms").find(
                                "button").length) {
                            $("span.nu").each(
                                function () {
                                    $(this)
                                        .text($
                                            .trim(
                                                $(
                                                    this)
                                                .closest(
                                                    "tr"
                                                    )
                                                .find(
                                                    ".itm-lst"
                                                    )
                                                .text()
                                                )
                                            );
                                    $(this)
                                        .removeClass(
                                            "btn btn-outline-dark btn-sm nu"
                                            );
                                    $(this)
                                        .addClass(
                                            "fw-bold rounded bg-success text-white p-1 px-2 m-1"
                                            );
                                }
                            );

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst>button")
                                .addClass(
                                    "text-success fw-bold"
                                    );

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

                            $(this).attr("id",
                                "done");


                            $(".tran").show();
                            $(".itm-lst").hide();
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
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
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
