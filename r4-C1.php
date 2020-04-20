<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie und wählen Sie aus.
                        <small><br> 듣고 선택하세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>음성을 듣고 있는 것을 선택하세요.<br><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 <br>문장과 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table
                        class="table table-borderless table-light text-center">
                        <tbody>
                            <tr>
                                <td class="align-middle"><button type="button"
                                        id="1"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q"
                                        data-toggle="buttons" id="qst-1">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            <input type="radio" name="options"
                                                id="option1"
                                                autocomplete="off"><label
                                                for="option1"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-2.png"
                                                    alt="Auto"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            <input type="radio" name="options"
                                                id="option2"
                                                autocomplete="off"><label
                                                for="option2"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-1.png"
                                                    alt="Fahrrad"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                    </div>
                                    <span class="tran"><br>Was ist das? Ist das
                                        ein Fahrrad?&nbsp;Nein, das ist kein
                                        Fahrrad. Das ist ein
                                        Auto.&nbsp;<small><br>이것은 무엇인가요? 이것은
                                            자전거인가요? 아니오, 이것은 자전거가 아니에요. 이것은
                                            자동차에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><button type="button"
                                        id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q"
                                        data-toggle="buttons" id="qst-2">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            <input type="radio" name="options"
                                                id="option3"
                                                autocomplete="off"><label
                                                for="option3"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-3.png"
                                                    alt="Katze"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            <input type="radio" name="options"
                                                id="option4"
                                                autocomplete="off"><label
                                                for="option4"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-4.png"
                                                    alt="Hund"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                    </div>
                                    <span class="tran"><br>Was ist das? Ist das
                                        eine Katze?&nbsp;Nein, das ist keine
                                        Katze. Das ist ein Hund.<small><br>이것은
                                            무엇인가요? 이것은 고양이인가요? 아니오, 이것은 고양이가
                                            아니에요. 이것은 개에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><button type="button"
                                        id="3"
                                        class="so btn btn-outline-success">▶</button>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q"
                                        data-toggle="buttons" id="qst-3">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            <input type="radio" name="options"
                                                id="option5"
                                                autocomplete="off"><label
                                                for="option5"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-6.png"
                                                    alt="Frau"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            <input type="radio" name="options"
                                                id="option6"
                                                autocomplete="off"><label
                                                for="option6"><img
                                                    src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-C1-5.png"
                                                    alt="Mann"
                                                    style="max-width: 240px; height: auto;"></label>
                                        </div>
                                    </div>
                                    <span class="tran"><br>Wer ist das? Ist das
                                        ein Mann? Nein, das ist kein Mann. Das
                                        ist eine Frau.<span
                                            class="tran">&nbsp;<small><br>이 사람은
                                                누구인가요? 이 사람은 남자인가요? 아니오, 이 사람은
                                                남자가 아니에요. 이 사람은
                                                여자에요.</small></span>
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
            <div class="row">
                <div class="col">
                    <table
                        class="table table-borderless table-striped table-sm text-center">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th class="text-primary" scope="col"
                                    colspan="2"><strong>m</strong></th>
                                <th class="text-danger" scope="col" colspan="2">
                                    <strong>f</strong></th>
                                <th class="text-purple" scope="col" colspan="2">
                                    <strong>n</strong></th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-primary">부정관사</td>
                                <td class="text-primary">부정관사</td>
                                <td class="text-danger">부정관사</td>
                                <td class="text-danger">부정관사</td>
                                <td class="text-purple">부정관사</td>
                                <td class="text-purple">부정관사</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    Nominativ<br><small>주격</small></td>
                                <td class="align-middle text-primary">ein Mann
                                </td>
                                <td class="align-middle text-primary">kein Mann
                                </td>
                                <td class="align-middle text-danger">eine Katze
                                </td>
                                <td class="align-middle text-danger">keine Katze
                                </td>
                                <td class="align-middle text-purple">ein Fahrrad
                                </td>
                                <td class="align-middle text-purple">kein
                                    Fahrrad</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <div id="last" class="d-none"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
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
                    "./<?php echo($root); ?>sounds/Reihe 4/r4 C1.mp3"],
                sprite: {
                    "0": [3314, 46832],
                    "1": [16497, 10565],
                    "2": [29597, 10452],
                    "3": [41570, 8545]
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
                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings()
                            .hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass(
                                "btn-warning");
                            $(this).parent()
                                .children()
                                .removeClass(
                                    "btn-light");
                        };
                        /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(
                                ".an")
                            .length / $(
                                ".q").length
                            ) * 100);
                        $(".progress>.bar").attr(
                            "width", perc + "%;"
                            );
                    });
                    /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop")
                                .popover(
                                    'hide');
                        }, 500);
                    });
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($(".an").length < $(
                                ".q").length) {
                            var na = "";
                            $(".q").each(
                        function () {
                                if (!$(this)
                                    .find(
                                        "div"
                                        )
                                    .hasClass(
                                        "an"
                                        )) {
                                    if (na !=
                                        ""
                                        ) {
                                        na +=
                                            ", ";
                                    }
                                    na += $(
                                            this)
                                        .attr(
                                            "id"
                                            )
                                        .substr(
                                            -
                                            1
                                            );
                                };
                            });
                            alert("모든 문제를 풀어주세요.");
                            /* alert(na + "번 문제를 풀어주세요."); */
                        } else {
                            $(".pop").each(
                                function () {
                                    $(this)
                                        .removeClass(
                                            "btn-info"
                                            );
                                    if ($(this)
                                        .hasClass(
                                            "o"
                                            ) &&
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .removeClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .addClass(
                                                "btn-success font-weight-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-warning font-weight-bold text-dark"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-danger"
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };
                                }
                            );
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            var qa = $(".q")
                            .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".btn-success")
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
                        };
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
    <?php require "footer.php"; ?>
</body>

</html>
