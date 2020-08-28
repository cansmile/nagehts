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
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="1">
                        Berlin
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="2">
                        California
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="3">
                        Korea
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="4">
                        Seoul
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="5">
                        Deutschland
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="6">
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
                    <h2> Hören Sie und ergänzen Sie.<br />
                        <small> 듣고 알맞은 국가와 도시를 넣으세요. </small>
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
                    <h3>[ <small>듣고 알맞은 위치에 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="17"
                                    class="so btn btn-danger btn-lg">▶</button>
                            </th>
                            <td width="70%"
                                class="bg-danger text-white align-middle"
                                height="20px">
                                <h3>Sandmännchen</h1>
                            </td>
                            <td rowspan="4" class="align-middle">
                                <img src="./dev/images/Reihe 2/Reihe-2-A2-1.png"
                                    style="max-width: 240px; height: auto;"
                                    alt="Sandmännchen"></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="7"
                                    class="so btn btn-outline-primary">▶</button>
                            </th>
                            <td class="text-left">Hallo, Sandmännchen! Woher kommst du? <br /><span
                                    class="tran">&nbsp;<small>안녕, 잔맨셴! 너는 어디에서
                                        왔니?</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="8"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">Ich komme aus
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-1">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div><br /><span class="tran">&nbsp;<small>나는
                                        <strong>독일</strong>에서 왔어.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="9"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">und ich wohne in
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-2">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div>.<br /><span class="tran">&nbsp;<small>그리고
                                        나는 <strong>베를린</strong>에
                                        살아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="18"
                                    class="so btn btn-warning btn-lg">▶</button>
                            </th>
                            <td width="70%"
                                class="bg-warning align-middle"
                                height="20px">
                                <h3>Pororo</h1>
                            </td>
                            <td rowspan="4" class="align-middle">
                                <img src="./dev/images/Reihe 2/Reihe-2-A2-2.png"
                                    style="max-width: 240px; height: auto;"
                                    alt="Pororo"></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="10"
                                    class="so btn btn-outline-primary">▶</button>
                            </th>
                            <td class="text-left">Hi, Pororo ! Woher kommst du? <br /><span
                                    class="tran">&nbsp;<small>안녕, 뽀로로! 너너는 어디에서
                                        왔니?</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="11"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">Ich komme aus
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-3">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div>.<br /><span class="tran">&nbsp;<small>나는
                                        <strong>한국</strong>에서 왔어.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="12"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">Ich wohne in
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-4">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div>.<br /><span class="tran">&nbsp;<small>나는
                                        <strong>서울</strong>에서 살아.</small></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless text-center table-light">
                        <tr>
                            <th scope="col" class="align-middle">
                                <button type="button" id="19"
                                    class="so btn btn-primary btn-lg">▶</button>
                            </th>
                            <td width="70%"
                                class="bg-primary text-white align-middle"
                                height="20px">
                                <h3>Minnie Mouse</h1>
                            </td>
                            <td rowspan="5" class="align-middle">
                                <img src="./dev/images/Reihe 2/Reihe-2-A2-3.png"
                                    style="max-width: 150px; height: auto;"
                                    alt="Minnie Mouse"></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="13"
                                    class="so btn btn-outline-primary">▶</button>
                            </th>
                            <td class="text-left">Hallo, Minnie Mouse, woher kommst du? <br /><span
                                    class="tran">&nbsp;<small>안녕, 미니 마우스, 너는
                                        어디에서 왔니?</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="14"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">Ich komme aus
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-5">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div>.<br /><span class="tran">&nbsp;<small>나는
                                        <strong>미국</strong>에서 왔어.</small></span>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="15"
                                    class="so btn btn-outline-primary">▶</button>
                            </th>
                            <td class="text-left">Und wo wohnst du? <br /><span
                                    class="tran">&nbsp;<small>그러면 어디에서
                                        살아?</small></span></td>
                        </tr>
                        <tr>
                            <th class="bg-light" scope="row"><button
                                    type="button" id="16"
                                    class="so btn btn-outline-danger">▶</button>
                            </th>
                            <td class="text-left">Ich wohne in
                                <div class="itm-lst 1itm d-inline-block mr-2"
                                    id="lst-6">
                                    <h2 class="btn btn-warning btn-xl ttl d-block"
                                        style="min-width: 150px;">
                                        ▼ </h2>
                                </div>.<br /><span class="tran">&nbsp;<small>나는
                                        <strong>캘리포니아</strong>에
                                        살아.</small></span></td>
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
                <div class="col-12 lh350"><span class="tipp">TIPP</span></div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table class="table table-borderless text-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2">Woher<small> 어디에서?</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="border border-dark border-right-only">Sie</th>
                                <td class="text-left">komm<strong>en aus…</strong></td>
                            </tr>
                            <tr>
                                <th scope="row" class="border border-dark border-right-only">Ich</th>
                                <td class="text-left">komm<strong>e aus…</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table class="table table-borderless text-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2">Wo<small> 어디?</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="border border-dark border-right-only">Sie</th>
                                <td class="text-left">wohn<strong>en in…</strong></td>
                            </tr>
                            <tr>
                                <th scope="row" class="border border-dark border-right-only">Ich</th>
                                <td class="text-left">wohn<strong>e in…</strong></td>
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
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 2/r2 A2.mp3"],
                sprite: {
                    "0": [941, 56382],
                    "1": [59835, 1353],
                    "2": [67824, 1526],
                    "3": [62424, 1330],
                    "4": [64401, 1214],
                    "5": [58381, 1267],
                    "6": [65812, 1491],
                    "7": [9660, 4126],
                    "8": [17396, 2180],
                    "9": [19801, 2010],
                    "10": [26680, 3051],
                    "11": [32930, 1892],
                    "12": [35240, 1786],
                    "13": [41751, 3080],
                    "14": [47759, 2307],
                    "15": [51607, 2337],
                    "16": [55223, 2085],
                    "17": [9660, 12345],
                    "18": [26680, 10508],
                    "19": [41751, 15572]
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
                        if (!$("#itms").find(
                                "button").length) {

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst>button")
                                .addClass(
                                    "text-success font-weight-bold"
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
                                "개를 맞히셨네요!<br />" +
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
