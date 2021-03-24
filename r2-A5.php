<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Richtig oder falsch? Markieren Sie.<br>
                        <small>어느 것이 옳은지 체크해보세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>몇 번을 들어도 번역은 나오지 않습니다.<br>문제를 모두 풀고 번역을
                            확인하세요.</small> ]</h3>

                </div>
            </div>

            <div class="row text-center">
                <div class="col"><img
                        src="./dev/images/Reihe 2/Reihe-2-A4-1.png"
                        style="max-width: 480px; height: auto;"
                        alt="Sandmännchen"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table
                        class="table table-borderless text-center">
                        <tr>
                            <td>Anna Müller wohnt in Berlin.<span
                                    class="tran">&nbsp;<br><small>안나 뮐러는 베를린에
                                        산다.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" role="group" id="qst-1">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        richtig
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        falsch
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Max Fernández kommt aus Mexiko.<span
                                    class="tran">&nbsp;<br><small>막스 페르난데즈는
                                        멕시코출신이다.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" role="group" id="qst-2">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        richtig
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        falsch
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Max Fernández wohnt in Berlin.<span
                                    class="tran">&nbsp;<br><small>막스 페르난데즈는 베를린에
                                        산다.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" role="group" id="qst-3">
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        richtig
                                    </div>
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        falsch
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Anna Müllers Mutter wohnt in Dresden.<span
                                    class="tran">&nbsp;<br><small>안나 뮐러는 드레스덴에
                                        산다.</small></span></td>
                            <td>
                                <div class="btn-group q"
                                    data-toggle="buttons" role="group" id="qst-4">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        richtig
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        falsch
                                    </div>
                                </div>
                            </td>
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
        $(document).ready(function () { /* 소리 출력 전역 변수와 함수 */
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
                    "./dev/sounds/Reihe 2/r2 A4 A5.mp3"],
                sprite: {
                    "0": [1397, 31190]
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
                                                "btn-success fw-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-warning fw-bold text-dark"
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
                                });

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
                    $("#ready").hide();
                    $("#qst-1>div.o").addClass("an");
                    $("#qst-1>div.o").addClass(
                        "btn-warning");
                    $("#qst-1>div.o").removeClass(
                        "btn-light");

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
                }


            });
        });

    </script>
    </body>

</html>
