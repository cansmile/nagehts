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
                    <h2>Hören Sie und sprechen Sie nach.<br>
                        <small>듣고 따라 하세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Hallo, Maria!<span
                                        class="tran"><br><small>안녕,
                                            마리아!</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Hallo, Joseph!<span
                                        class="tran"><br><small>안녕,
                                            요셉!</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Wie geht es <span
                                            class="nu">①</span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-1">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option1"
                                                    autocomplete="off">du
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!zx">
                                                <input type="radio"
                                                    name="options" id="option2"
                                                    autocomplete="off">dir
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option3"
                                                    autocomplete="off">Ihnen
                                            </div>
                                        </div>?<span class="ans">&nbsp;</span>
                                    </span>
                                    <span class="tran"><br><small>어떻게
                                            지내?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>
                                    <span class="sen">Danke, gut. Und <span
                                            class="nu">②</span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-2">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option4"
                                                    autocomplete="off">dir
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option5"
                                                    autocomplete="off">du
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option6"
                                                    autocomplete="off">Sie
                                            </div>
                                        </div> ?<span class="ans">&nbsp;</span>
                                    </span>
                                    <span class="tran"><br><small>고마워, 좋아.
                                            너는?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Es geht. Danke.<span
                                        class="tran"><br><small>그럭저럭 지내.
                                            고마워.</small></span></td>
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
                    "./<?php echo($root); ?>sounds/Reihe 1/r1 C3.mp3"],
                sprite: {
                    "0": [1532, 22365],
                    "1": [12127, 1751],
                    "2": [14537, 1559],
                    "3": [16691, 1612],
                    "4": [18913, 2580],
                    "5": [21777, 2188]
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
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-success font-weight-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
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
                                                "btn-<?php echo($color); ?>"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .html(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .closest(
                                                        ".sen"
                                                        )
                                                    .find(
                                                        ".o"
                                                        )
                                                    .text()
                                                    )
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-danger font-weight-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .addClass(
                                                "rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2"
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
                                    $(this)
                                        .remove();
                                });
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            var qa = $(".q")
                            .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".bg-success")
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
                        };
                    });

                    $("#0").show();
                    $(".alert").hide();

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
