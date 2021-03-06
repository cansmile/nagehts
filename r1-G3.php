<?php require_once("heading.php"); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Hören Sie und ergänzen Sie „?“ oder „.“.<br>
                        <small>빈칸에 물음표(?) 또는 마침표(.)를 넣으세요.</small>
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
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <p class="h4">Dialog 1</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>
                                    <div>
                                        <span class="sen">Ich heiße Martin<span
                                                class="nu">①</span>
                                            <div class="btn-group border border-dark border-bottom-only q"
                                                data-toggle="buttons" rold="group"
                                                id="qst-1">
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    .
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    ?
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <span class="tran"><br><small>나는 마틴이야<span
                                                class="nu">①</span></small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Und wie heißt du<span
                                            class="nu">②</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-2">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                .
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>네 이름은 뭐니<span
                                                class="nu">②</span></small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Tim<span
                                            class="nu">③</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-3">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                .
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><br><small>팀이야<span
                                                class="nu">③</span></small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <p class="h4">Dialog 2</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-success">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Wie heißen Sie<span
                                            class="nu">④</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-4">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                .
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>당신의 이름은
                                            무엇인가요<span
                                                class="nu">④</span></small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-info">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Mein Name ist Sauer<span
                                            class="nu">⑤</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-5">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                .
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>저의 이름은
                                            자우어에요<span
                                                class="nu">⑤</span></small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <p class="h4">Dialog 3</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Ich heiße Esswein<span
                                            class="nu">⑥</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-6">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                .
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>제 이름은
                                            에쓰바인이에요<span
                                                class="nu">⑥</span></small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Und Sie<span
                                            class="nu">⑦</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-7">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                .
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>당신은요<span
                                                class="nu">⑦</span></small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Anna, Anna Kim<span
                                            class="nu">⑧</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-8">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                .
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                ?
                                            </div>
                                        </div>
                                    </span>
                                    <span class="tran"><br><small>안나, 안나
                                            킴이에요<span
                                                class="nu">⑧</span></small></span>
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

    <div id="last" class="d-none"></div>
    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $(".nu").hide();

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
                    "./dev/sounds/Reihe 1/r1 G3.mp3"],
                sprite: {
                    "0": [1843, 36214],
                    "1": [12473, 1830],
                    "2": [16614, 1811],
                    "3": [19885, 1179],
                    "4": [22814, 1540],
                    "5": [26112, 1831],
                    "6": [29455, 1939],
                    "7": [32618, 1327],
                    "8": [35417, 2517]
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
                                                "btn-success"
                                                );
                                        $(this)
                                            .parent()
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "bg-success text-white font-weight-bold rounded p-1 px-2 m-1"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "bg-success text-white font-weight-bold rounded p-1 px-2 m-1"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-primary"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".sen"
                                                )
                                            .append(
                                                "<button class=\"btn btn-warning text-dark rounded font-weight-bold p-1 px-2 m-1\">" +
                                                $(
                                                    this)
                                                .closest(
                                                    "td"
                                                    )
                                                .find(
                                                    ".o"
                                                    )
                                                .text() +
                                                "</button>"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "btn p-1 px-2 m-1 btn-danger text-white font-weight-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };


                                }
                            );
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide();

                            var qa = $(".q")
                            .length; /* 전체 문항 수 */
                            var qr = $(
                                ".sen>.bg-success"
                                )
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

                        }
                    });

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
