<?php require_once("heading.php"); ?>
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
                        <tbody>
                            <tr>
                                <th scope="row" class="table-light">1</th>
                                <td><span class="sen">Ich heiße Tim, und <span
                                            class="nu">①</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-1">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                du
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                Sie
                                            </div>
                                        </div>?
                                    </span><span class="tran"><br><small>나는 팀이라고
                                            해.
                                            <strong>너</strong>는?</small></span>
                                </td>
                                <td>Mina.<span
                                        class="tran"><br><small>미나.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-light">2</th>
                                <td><span class="sen">Wie heißen <span
                                            class="nu">②</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-2">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                du
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                Sie
                                            </div>
                                        </div>?
                                    </span><span
                                        class="tran"><br><small><strong>당신</strong>의
                                            이름은 무엇인가요?</small></span></td>
                                <td>Mein Name ist Schumacher.<span
                                        class="tran"><br><small>나의 이름은
                                            슈마허에요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-light">3</th>
                                <td><span class="sen">Ich heiße Lee, Und <span
                                            class="nu">③</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-3">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                du
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                Sie
                                            </div>
                                        </div>?
                                    </span><span class="tran"><br><small>저는 이 라고
                                            합니다.
                                            <strong>당신</strong>은요?</small></span>
                                </td>
                                <td>Park, Anna Park.<span
                                        class="tran"><br><small>박, 안나
                                            박이야.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-light">4</th>
                                <td><span class="sen">Hallo, ich bin Max! Und
                                        wie heißt <span class="nu">④</span>
                                        <div class="btn-group border border-dark border-bottom-only q"
                                            data-toggle="buttons" rold="group" id="qst-4">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                du
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                Sie
                                            </div>
                                        </div>?
                                    </span><span class="tran"><br><small>안녕, 나는
                                            막스야! <strong>너</strong>는 이름이
                                            뭐니?</small></span></td>
                                <td>Ich heiße Susanne!<span
                                        class="tran"><br><small>나는
                                            수잔이야!</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                    id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
        </div>
    </section>


    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
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
            })

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

                    alert(na + "번 문제를 풀어주세요.");
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
                                    "bg-success text-white fw-bold rounded p-1 px-2 m-1 me-0"
                                    );
                            $(this).closest("td").find(
                                ".nu").addClass(
                                "bg-success text-white fw-bold rounded p-1 px-2 m-1 me-0"
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
                                "<button class=\"btn btn-warning text-dark rounded fw-bold p-1 px-2 m-1\">" +
                                $(this).closest(
                                    "td").find(".o")
                                .text() +
                                "</button>");
                            $(this).closest("td").find(
                                ".nu").addClass(
                                "btn p-1 px-2 m-1 btn-danger text-white fw-bold"
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
