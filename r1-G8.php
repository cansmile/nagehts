<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>[ <small>문제를 모두 풀어야 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="my-3 col-sm-12 col-md-12 col-lg-12" id="qst">
                    <table class="table table-borderless">
                        <tr>
                            <th class="table-light" scope="row">1</th>
                            <td><span class="sen">Wie <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-1">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            ist
                                        </div>
                                    </div>
                                    Ihr Name?
                                </span><span class="tran"><br><small>당신의 이름은
                                        무엇인가요?</small></span></td>
                            <td><span class="sen">Mein Name <span
                                        class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-2">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            ist
                                        </div>
                                    </div>
                                    Hanna Koch.
                                </span><span class="tran"><br><small>나의 이름은 한나
                                        코흐입니다.</small></span></td>
                        </tr>
                        <tr>
                            <th class="table-light" scope="row">2</th>
                            <td><span class="sen">Wie <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-3">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            bist
                                        </div>
                                    </div>
                                    du?
                                </span><span class="tran"><br><small>네 이름은
                                        무엇이니?</small></span></td>
                            <td><span class="sen">Ich <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-4">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            heiße
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ist
                                        </div>
                                    </div>
                                    Joseph.
                                </span><span class="tran"><br><small>나는
                                        요셉이라고해.</small></span></td>
                        </tr>
                        <tr>
                            <th class="table-light" scope="row">3</th>
                            <td><span class="sen">Wie <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-5">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            heißen
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            sein
                                        </div>
                                    </div>
                                    Sie?
                                </span><span class="tran"><br><small>당신의 이름은
                                        무엇인가요?</small></span></td>
                            <td><span class="sen">Mein Name <span
                                        class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-6">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            ist
                                        </div>
                                    </div>
                                    Mina Park.
                                </span><span class="tran"><br><small>저의 이름은 미나
                                        박이에요.</small></span></td>
                        </tr>
                        <tr>
                            <th class="table-light" scope="row">4</th>
                            <td><span class="sen">Wer <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-7">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            bist
                                        </div>
                                    </div>
                                    du?
                                </span><span class="tran"><br><small>너는
                                        누구니?</small></span></td>
                            <td><span class="sen">Ich <span class="nu"></span>
                                    <div class="btn-group border border-dark border-bottom-only q"
                                        data-toggle="buttons" role="group" id="qst-8">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            bin
                                        </div>
                                    </div>
                                    Maria.
                                </span><span class="tran"><br><small>나는
                                        마리아야.</small></span></td>
                        </tr>
                        <tr>
                            <th class="table-light" scope="row">5</th>
                            <td><span class="sen">
                                    <div>Wer <span class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" role="group" id="qst-9">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                heißt
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                ist
                                            </div>
                                        </div>
                                        Herr Kim Chul?
                                    </div>
                                </span><span class="tran"><br><small>누가 김 철
                                        선생님이신가요?</small></span></td>
                            <td><span class="sen">
                                    <div>Das <span class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" role="group" id="qst-10">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                heiße
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                bin
                                            </div>
                                        </div>
                                        ich.
                                </span><span class="tran"><br><small>그게
                                        저에요.</small></span>
                </div>
                </td>
                </tr>
                <tr>
                    <th class="table-light" scope="row">6</th>
                    <td>
                        <div><span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q"
                                    data-toggle="buttons" role="group" id="qst-11">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        Heißen
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        Sind
                                    </div>
                                </div>
                                Sie Frau Lee?
                            </span><span class="tran"><br><small>이 여사님이라고
                                    부를까요?</small></span></div>
                    </td>
                    <td>
                        <div><span class="sen">Ja, das <span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q"
                                    data-toggle="buttons" role="group" id="qst-12">
                                    <div class="btn btn-light pop x"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top"
                                        data-content="정답이 아니에요.">
                                        heiße
                                    </div>
                                    <div class="btn btn-light pop o"
                                        data-toggle="popover"
                                        data-container="body"
                                        data-placement="top" data-content="정답!">
                                        bin
                                    </div>
                                </div>
                                ich.
                            </span><span class="tran"><br><small>네 그게
                                    저에요</small></span></div>
                    </td>
                </tr>
                </table>
            </div>
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
        <div class="row">
            <div class="col"></div>
            <div class="col-11 text-center">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
                        <div class="row">
                            <div class="bg-light py-2 col-6">&nbsp;</div>
                            <div class="py-2 col-6"><strong>heißen</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="py-2 col-6 border-right border-dark">
                                <strong>ich</strong></div>
                            <div class="bg-light py-2 col-6">
                                heiß<strong>e</strong></div>
                        </div>
                        <div class="row">
                            <div
                                class="bg-light py-2 col-6 border-right border-dark">
                                <strong>du</strong></div>
                            <div class="py-2 col-6">heiß<strong>t</strong></div>
                        </div>
                        <div class="row">
                            <div class="py-2 col-6 border-right border-dark">
                                <strong>Sie</strong></div>
                            <div class="bg-light py-2 col-6">
                                heiß<strong>en</strong></div>
                        </div>
                        <div class="row">
                            <div class="py-2 col-6">&nbsp;</div>
                            <div class="py-2 col-6">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
                        <div class="row">
                            <div class="bg-light py-2 col-6">&nbsp;</div>
                            <div class="py-2 col-6"><strong>sein</strong></div>
                        </div>
                        <div class="row">
                            <div class="py-2 col-6 border-right border-dark">
                                <strong>ich</strong></div>
                            <div class="bg-light py-2 col-6">
                                <strong>bin</strong></div>
                        </div>
                        <div class="row">
                            <div
                                class="bg-light py-2 col-6 border-right border-dark">
                                <strong>du</strong></div>
                            <div class="py-2 col-6"><strong>bist</strong></div>
                        </div>
                        <div class="row">
                            <div class="py-2 col-6 border-right border-dark">
                                <strong>Sie</strong></div>
                            <div class="bg-light py-2 col-6">
                                <strong>sind</strong></div>
                        </div>
                        <div class="row">
                            <div
                                class="bg-light py-2 col-6 border-right border-dark">
                                <strong>mein Name</strong></div>
                            <div class="py-2 col-6"><strong>ist</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        </div>
    </section>


    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $(".nu").hide();


        $(document).ready(function () {
            $("[data-toggle='popover']").popover({
                delay: {
                    'hide': 1000
                },
                container: "body"
            });

            $(".pop").click(function () {
                /* 가장 먼저 지문에 'an' 넣기 */
                if (!$(this).siblings().hasClass("an")) {
                    $(this).addClass("an");
                    $(this).addClass("btn-warning");
                    $(this).parent().children().removeClass(
                        "btn-light");
                };


            });

            /* 팝업 내용 사라지기 */
            $(".pop").popover().click(function () {
                setTimeout(function () {
                    $(".pop").popover('hide');
                }, 500);
            });

            /* 정답확인 */
            $("#chk").on("click", function () {
                if ($(".an").length < $(".q").length) {
                    var na = "";
                    $(".q").each(function () {
                        if (!$(this).find("div")
                            .hasClass("an")) {
                            if (na != "") {
                                na += ", ";
                            }
                            na += $(this).attr("id")
                                .substr(4);
                        };
                    });

                    alert("모든 문제를 풀어주세요.");
                    /* alert(na + "번 문제를 풀어주세요."); */
                } else {
                    $(".pop").each(function () {
                        $(this).removeClass("btn-info");
                        if ($(this).hasClass("o") && $(
                                this).hasClass("an")) {
                            $(this).removeClass(
                                "btn-warning");
                            $(this).addClass(
                                "btn-success");
                            $(this).parent().find(".nu")
                                .addClass(
                                    "bg-success text-white font-weight-bold rounded p-1 px-2 m-1"
                                    );
                            $(this).closest("td").find(
                                ".nu").addClass(
                                "bg-success text-white font-weight-bold rounded p-1 px-2 m-1"
                                );
                            $(this).closest("td").find(
                                ".nu").text($.trim(
                                $(this).text()));
                        } else if ($(this).hasClass(
                            "o")) {
                            $(this).addClass(
                                "btn-primary");
                            $(this).closest("td").find(
                                ".sen").append(
                                "<button class=\"btn btn-warning text-dark rounded font-weight-bold p-1 px-2 m-1\">" +
                                $(this).closest(
                                    "td").find(".o")
                                .text() +
                                "</button>");
                            $(this).closest("td").find(
                                ".nu").addClass(
                                "btn p-1 px-2 m-1 btn-danger text-white font-weight-bold"
                                );
                        } else if ($(this).hasClass(
                                "an")) {
                            $(this).addClass(
                                "btn-warning");
                            $(this).closest("td").find(
                                ".nu").text($.trim(
                                $(this).text()));
                        } else {
                            $(this).addClass(
                                "btn-light");
                        };
                    });

                    $(".tran").show();
                    $(".nu").show();
                    $(".q").hide();

                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");

                    var qa = $(".q").length; /* 전체 문항 수 */
                    var qr = $(".bg-success")
                    .length; /* 맞춘 항목 수 */
                    var pe = (qr / qa) * 100; /* 정답 비율 */
                    var tcl = "white"; /* 기본 문자색 */

                    /* 분류 기준은 100%, 80%, 60%, 40% */
                    if (pe > 99) {
                        var st = "원어민이세요?";
                        var cl = "lime";
                        var tcl = "dark";
                    } else if (pe > 74) {
                        var st = "어! 좀 하시는데요~^^";
                        var cl = "success";
                    } else if (pe > 49) {
                        var st = "쓰읍~ 다시 해 보실까요?";
                        var cl = "primary";
                    } else {
                        var st = "좀 더 분발해 주세요~";
                        var cl = "danger";
                    }

                    $(this).addClass("btn-" + cl + " text-" +
                        tcl);
                    $(this).html("<h4>" + qa + "문제 중 " + qr +
                        "개를 맞히셨네요!<br>" + st + "</h4>");

                    $(this).attr("id", "done");

                };
            });
            $("#ready").hide();

        });

    </script>
    </body>

</html>
