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
                        einen Schweinebraten.<span
                            class="tran">&nbsp;<br /><small>돼지
                                불고기.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="2">
                        eine Bratwurst.<span class="tran">&nbsp;<br /><small>소시지
                                구이.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="3">
                        ein Bier.<span
                            class="tran">&nbsp;<br /><small>맥주.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="4">
                        eine Suppe.<span
                            class="tran">&nbsp;<br /><small>수프</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="5">
                        eine Cola.<span
                            class="tran">&nbsp;<br /><small>콜라</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="6">
                        ein Hähnchen.<span
                            class="tran">&nbsp;<br /><small>닭고기.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="7">
                        einen Kaffee.<span
                            class="tran">&nbsp;<br /><small>커피.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="8">
                        einen Salat.<span
                            class="tran">&nbsp;<br /><small>샐러드.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="9">
                        ein Mineralwasser.<span
                            class="tran">&nbsp;<br /><small>미네랄
                                워터.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="10">
                        Marmelade.<span
                            class="tran">&nbsp;<br /><small>잼.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="11">
                        einen Käsekuchen.<span
                            class="tran">&nbsp;<br /><small>치즈
                                케잌.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="12">
                        ein Wurstbrot.<span class="tran">&nbsp;<br /><small>소시지
                                빵.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="13">
                        Butter(f).<span
                            class="tran">&nbsp;<br /><small>버터.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="14">
                        einen Saft.<span
                            class="tran">&nbsp;<br /><small>주스.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="15">
                        ein Brötchen.<span class="tran">&nbsp;<br /><small>하드
                                롤.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="16">
                        einen Wein.<span
                            class="tran">&nbsp;<br /><small>와인.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="17">
                        Milch(f).<span
                            class="tran">&nbsp;<br /><small>우유.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="18">
                        ein Ei.<span
                            class="tran">&nbsp;<br /><small>계란.</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="19">
                        eine Limonade.<span
                            class="tran">&nbsp;<br /><small>레모네이드.</small></span>
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
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table
                        class="table table-borderless table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">&nbsp;</th>
                                <th class="text-primary" scope="col">m</th>
                                <th class="text-danger" scope="col">f</th>
                                <th class="text-purple" scope="col">n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="5%" class="align-middle">Ich<span
                                        class="tran"><br><small>나는</small></span>
                                </td>
                                <td width="5%" class="align-middle">esse<span
                                        class="tran"><br><small>먹는다</small></span>
                                </td>
                                <td width="30%">
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-primary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-1">
                                        <h2
                                            class="btn btn-primary btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td width="30%">
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-2">
                                        <h2
                                            class="btn btn-danger btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td width="30%">
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-purple itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-3">
                                        <h2
                                            class="btn btn-purple btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Ich<span
                                        class="tran"><br><small>나는</small></span>
                                </td>
                                <td class="align-middle">trinke<span
                                        class="tran"><br><small>마신다</small></span>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-primary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-4">
                                        <h2
                                            class="btn btn-primary btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-5">
                                        <h2
                                            class="btn btn-danger btn-xl ttl w-100">
                                            ▼</h2>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-purple itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-6">
                                        <h2
                                            class="btn btn-purple btn-xl ttl w-100">
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
            <div class="row">
                <div class="col">
                    <table
                        class="text-center table table-borderless table-sm table-striped">
                        <tbody>
                            <tr>
                                <td colspan="4"><span
                                        class="tipp">TIPP</span><strong>Mengenangaben</strong>&nbsp;<small>단위명사</small>
                                </td>
                            </tr>
                            <tr>
                                <td>eine Flasche</td>
                                <td>Mineralwasser</td>
                                <td rowspan="4"
                                    class="bg-white align-middle text-center">
                                    <img src="./dev/images/Reihe 5/Reihe-5-C2-1.png"
                                        alt=""
                                        style="max-height: 120px; width: auto;"><br><small>die
                                        Flasche</small>
                                </td>
                                <td rowspan="4"
                                    class="bg-white align-middle text-center">
                                    <img src="./dev/images/Reihe 5/Reihe-5-C2-2.png"
                                        alt=""
                                        style="max-height: 120px; width: auto;"><br><small>das
                                        Glas</small>
                                </td>
                            </tr>
                            <tr>
                                <td>zwei Flaschen</td>
                                <td>Milch/Cola/Bier</td>
                            </tr>
                            <tr>
                                <td>ein Glas</td>
                                <td>Wein/Bier/Milch</td>
                            </tr>
                            <tr>
                                <td>drei Gläser</td>
                                <td>Saft/Schnaps</td>
                            </tr>
                            <tr>
                                <td>eine Dose</td>
                                <td>Cola</td>
                                <td rowspan="4"
                                    class="bg-white align-middle text-center">
                                    <img src="./dev/images/Reihe 5/Reihe-5-C2-3.png"
                                        alt=""
                                        style="max-height: 120px; width: auto;"><br><small>die
                                        Dose</small>
                                </td>
                                <td rowspan="4"
                                    class="bg-white align-middle text-center">
                                    <img src="./dev/images/Reihe 5/Reihe-5-C2-4.png"
                                        alt=""
                                        style="max-height: 120px; width: auto;"><br><small>die
                                        Tasse</small>
                                </td>
                            </tr>
                            <tr>
                                <td>vier Dosen</td>
                                <td>Bier</td>
                            </tr>
                            <tr>
                                <td>eine Tasse</td>
                                <td>Tee</td>
                            </tr>
                            <tr>
                                <td>zwei Tassen</td>
                                <td>Kaffee</td>
                            </tr>
                        </tbody>
                    </table>
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
                    "./dev/sounds/Reihe 5/r5 C2.mp3"],
                sprite: {
                    "0": [13427, 131520],
                    "1": [23990, 3015],
                    "2": [64889, 2599],
                    "3": [142491, 2410],
                    "4": [72407, 2411],
                    "5": [97420, 2417],
                    "6": [128678, 2696],
                    "7": [56741, 2495],
                    "8": [31188, 2587],
                    "9": [135997, 2628],
                    "10": [84025, 2332],
                    "11": [37301, 2754],
                    "12": [121780, 2782],
                    "13": [78819, 1898],
                    "14": [44894, 2239],
                    "15": [110337, 2312],
                    "16": [50531, 2565],
                    "17": [91210, 2592],
                    "18": [115852, 2389],
                    "19": [102750, 2785]
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
                            $(".itm").each(
                                function () {
                                    if ($(this)
                                        .parent()
                                        .attr(
                                            "id"
                                            )
                                        .length >
                                        5) {
                                        var a =
                                            $(
                                                this)
                                            .parent()
                                            .attr(
                                                "id"
                                                )
                                            .substr(
                                                $(
                                                    this)
                                                .parent()
                                                .attr(
                                                    "id"
                                                    )
                                                .length -
                                                2,
                                                2
                                                );
                                    } else {
                                        var a =
                                            $(
                                                this)
                                            .parent()
                                            .attr(
                                                "id"
                                                )
                                            .substr(
                                                $(
                                                    this)
                                                .parent()
                                                .attr(
                                                    "id"
                                                    )
                                                .length -
                                                1,
                                                1
                                                );
                                    }
                                    $(".tran")
                                        .show();
                                    if ($(this)
                                        .hasClass(
                                            "ans" +
                                            (a))
                                        ) {
                                        $(this)
                                            .addClass(
                                                "text-success fw-bold"
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "text-warning fw-bold"
                                                );
                                        $(this)
                                            .find(
                                                ".tran"
                                                )
                                            .show();
                                    };
                                    if ($(this)
                                        .hasClass(
                                            "text-warning"
                                            )) {
                                        /* $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,)))) */
                                        for (var i =
                                                1; i <=
                                            $(
                                                ".itm-lst")
                                            .length; i++
                                            ) {
                                            if ($(
                                                    this)
                                                .hasClass(
                                                    "ans" +
                                                    i
                                                    )
                                                ) {
                                                $(eval('"#lst-' +
                                                        i +
                                                        '"'
                                                        ))
                                                    .append(
                                                        "<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark w-100 text-danger bg-white fw-bold\">" +
                                                        $(
                                                            this)
                                                        .html() +
                                                        "</button>"
                                                        );
                                                /* $(lstn).append(i); */
                                            }
                                        }
                                    };
                                }
                            );
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst").each(
                                function () {
                                    if ($(this)
                                        .find(
                                            ".itm"
                                            )) {
                                        $(this)
                                            .find(
                                                ".itm"
                                                )
                                            .addClass(
                                                "text-success"
                                                );
                                    }
                                }
                            );
                            var qa = $(".itm")
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
