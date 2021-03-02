<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Hören Sie und ergänzen Sie ↗ oder ↘.<br>
                    <small>듣고 ↗ 또는 ↘를 채우세요.</small>
                    <button type="button"
                        class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                        id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small><button type="button"
                            class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                        버튼 또는 <button type="button"
                            class="so btn btn-sm btn-outline-secondary disabled">번호</button>
                        버튼을 눌러 2번 재생이 끝나면 번역이 나옵니다.</small> ]</h3>
                <h3>[ <small>문제를 모두 풀고 정답확인을 해도 정답과 함께 번역이 나옵니다.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"
                id="qst">
                <table class="table table-borderless text-center">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">문장</th>
                            <th scope="col">억양</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><button type="button" id="1"
                                    class="so btn btn-secondary">1</button></th>
                            <td class="text-left">Wie ist ihr Name?<span
                                    class="tran"><br><small>당신의 이름은
                                        무엇인가요?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-1">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="2"
                                    class="so btn btn-secondary">2</button></th>
                            <td class="text-left">Ich heiße Maria Kim.<span
                                    class="tran"><br><small>저는 마리아
                                        킴입니다.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-2">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="3"
                                    class="so btn btn-secondary">3</button></th>
                            <td class="text-left">Mina. Und du?<span
                                    class="tran"><br><small>미나야.
                                        너는?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-3">
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="4"
                                    class="so btn btn-secondary">4</button></th>
                            <td class="text-left">Ja, mein Name ist Kim.<span
                                    class="tran"><br><small>응, 나의 이름은
                                        김이야.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-4">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="5"
                                    class="so btn btn-secondary">5</button></th>
                            <td class="text-left">Wie geht es dir?<span
                                    class="tran"><br><small>어떻게
                                        지내?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-5">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"
                id="qst">
                <table class="table table-borderless text-center">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">문장</th>
                            <th scope="col">억양</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><button type="button" id="6"
                                    class="so btn btn-secondary">6</button></th>
                            <td class="text-left">Danke, gut. Und dir?<span
                                    class="tran"><br><small>고마워, 좋아.
                                        너는?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-6">
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="7"
                                    class="so btn btn-secondary">7</button></th>
                            <td class="text-left">Was machen Sie ?<span
                                    class="tran"><br><small>당신은 무슨 일을
                                        하시나요?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-7">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="8"
                                    class="so btn btn-secondary">8</button></th>
                            <td class="text-left">Sind Sie Studentin?<span
                                    class="tran"><br><small>당신은
                                        학생인가요?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-8">
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="9"
                                    class="so btn btn-secondary">9</button></th>
                            <td class="text-left">Woher kommen Sie?<span
                                    class="tran"><br><small>어디에서
                                        오셨나요?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-9">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><button type="button" id="10"
                                    class="so btn btn-secondary">10</button>
                            </th>
                            <td class="text-left">Kommen Sie aus Korea?<span
                                    class="tran"><br><small>당신은 한국에서
                                        오셨나요?</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" rold="group" id="qst-10">
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        ↗
                                    </div>
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        ↘
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                id="chk">
                정답확인
            </div>
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
                    "./dev/sounds/Reihe 1/r1 G11.mp3"],
                sprite: {
                    "0": [1423, 62203],
                    "1": [8348, 4345],
                    "2": [14591, 4633],
                    "3": [21023, 4354],
                    "4": [26902, 4563],
                    "5": [33677, 3331],
                    "6": [38751, 4617],
                    "7": [44751, 3047],
                    "8": [49916, 3449],
                    "9": [55572, 3570],
                    "10": [60818, 3807]
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
                                            4
                                            );
                                };
                            });
                            alert(na +
                                "번 문제를 풀어주세요.");
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
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-warning text-dark"
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

                            $(this).removeClass(
                                "btn-light ");
                            $(".tran").show();
                        };
                    });
                    $("#0").show();
                    $("#ready").hide();
                    $("#option2").parent().addClass(
                        "an btn-warning");
                    $("#option2").parent().removeClass(
                        "btn-light");
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
