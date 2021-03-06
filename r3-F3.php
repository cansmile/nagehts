<?php require_once("heading.php"); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-lg-12 mb-4 mt-2 text-center">
                        <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는
                                확인 문장이 붉게 변합니다.</small> ]</h2>
                    </div>
                </div>
            </div>
            <div class="row py-2 my-2">
                <div class="col">
                    <span class="p-2 border border-dark rounded">heiße</span>
                    <span class="p-2 border border-dark rounded">heißen</span>
                    <span class="p-2 border border-dark rounded">machen</span>
                    <span class="p-2 border border-dark rounded">studiere</span>
                    <span class="p-2 border border-dark rounded">bin</span>
                    <span class="p-2 border border-dark rounded">sind</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4 mt-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="ant t-6" id="ant-1"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Wie
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-1">
                                            Sie?
                                        </div>
                                    </span>
                                    <span class="tran"><small>당신의 이름은
                                            무엇인가요?</small></span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="ant t-6" id="ant-2"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Ich
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon2"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-2">
                                            Tim Schulz.
                                        </div>
                                    </span>
                                    <span class="tran"><small>저는 팀
                                            슐츠에요.</small></span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="ant t-6" id="ant-3"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Und was
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon3"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-3">
                                            Sie beruflich?
                                        </div>
                                    </span>
                                    <span class="tran"><small>그리고 당신은 무슨 일을
                                            하나요?</small></span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="ant t-6" id="ant-4"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Ich
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon4"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-4">
                                            Student und
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon5"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-5">
                                            Theologie.
                                        </div>
                                    </span>
                                    <span class="tran"><small>저는 학생이고 신학을
                                            공부해요</small></span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="ant t-6" id="ant-6"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Wie alt
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon6"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-6">
                                            Sie?
                                        </div>
                                    </span>
                                    <span class="tran"><small>당신은 몇
                                            살인가요?</small></span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">
                                    <div class="ant t-6" id="ant-7"></div>
                                    <span class="sen">
                                        <div class="input-group">
                                            Ich
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon7"
                                                class="form-control col-3 q border-bottom-only rounded-0 mx-1 t-6"
                                                id="qst-7">
                                            20 Jahre alt.
                                        </div>
                                    </span>
                                    <span class="tran"><small>저는
                                            스무살이에요.</small></span>
                                </th>
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


    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $(".ant").hide();
        $("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
        $("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
        var an = new Array();
        var an = ["heißen", ["heiße", "bin"], "machen", "bin", "studiere",
            "sind", "bin"
        ];
        $(document).ready(function () {
            /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
            /* 값 확인해보자, io값이 참이면 전체 검사 */
            function rfchk(th, io) {
                var q, qn, a, b, fl;
                q = th.val().length;
                qn = (th.attr("id").substr(4)) - 1;
                a = th.val();
                a = a.replace(/ /gi, "");
                if (!$.isArray(an[qn])) {
                    /* 1 인 경우 */
                    if (io) {
                        b = an[qn];
                    } else {
                        b = an[qn].substr(0, q);
                    }
                    b = b.replace(/ /gi, "");
                    if (a == b) {
                        return true;
                    }
                } else {
                    /* 2 이상인 경우 */
                    for (var fd = 0; fd < an[qn].length; fd++) {
                        if (io) {
                            b = an[qn][fd];
                        } else {
                            b = an[qn][fd].substr(0, q);
                        }
                        b = b.replace(/ /gi, "");
                        if (a == b) {
                            return true;
                        }
                    }
                }
            }
            $(".q").on("keyup", function () {
                $(this).removeClass("bg-danger");
                $(this).removeClass("bg-success");
                $("#ant-" + $(this).attr("id").substr(4))
                    .removeClass("text-danger");
                $("#ant-" + $(this).attr("id").substr(4))
                    .removeClass("text-success");
                if (rfchk($(this))) {
                    $(this).addClass(
                        "text-white font-weight-bold");
                    $(this).addClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4))
                        .addClass("text-success");
                } else {
                    $(this).addClass(
                        "text-white font-weight-bold");
                    $(this).addClass("bg-danger");
                    $("#ant-" + $(this).attr("id").substr(4))
                        .addClass("text-danger");
                }
                if (!$(this).val()) {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $(this).removeClass(
                        "text-white font-weight-bold");
                }
                if ($(this).val()) {
                    $("#ant-" + $(this).attr("id").substr(4))
                        .show();
                    $("#ant-" + $(this).attr("id").substr(4))
                        .text($(this).val());
                } else {
                    $("#ant-" + $(this).attr("id").substr(4))
                        .hide();
                }
            });
            $(".q").on("focusin", function () {
                $("#ant-" + $(this).attr("id").substr(4))
            .show();
                if (!$("#ant-" + $(this).attr("id").substr(4))
                    .text()) {
                    $("#ant-" + $(this).attr("id").substr(4))
                        .text($(this).val());
                }
                if ($("#ant-" + $(this).attr("id").substr(4))
                    .text()) {
                    if (rfchk($(this))) {
                        $(this).addClass(
                            "text-white font-weight-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(
                            4)).addClass("text-success");
                    } else {
                        $(this).addClass(
                            "text-white font-weight-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(
                            4)).addClass("text-danger");
                    }
                }
            });
            $(".q").on("focusout", function () {
                $("#ant-" + $(this).attr("id").substr(4))
            .hide();
                if (rfchk($(this), true)) {
                    $(this).addClass("bg-success");
                    $(this).addClass("text-white");
                } else {
                    $(this).addClass("bg-danger");
                }
                if ($(this).val()) {
                    if ($(this).hasClass("bg-danger")) {
                        x.play();
                    } else if ($(this).hasClass("bg-success")) {
                        o.play();
                        $(this).prop("disabled", true);
                    }
                }
                $(this).removeClass("bg-danger");
                if (!$(this).attr("disabled")) {
                    $(this).removeClass(
                        "text-white font-weight-bold");
                    $(this).removeClass("bg-success");
                }
            });
            /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
            $("#chk").on("click", function () {
                var na = "";
                var ri = 0;
                var qst = $(".q").length;
                $(".q").each(function () {
                    if (na != "") {
                        na += ", ";
                    }
                    if ($(this).val() == "") {
                        na += $(this).attr("id").substr(
                            4, 1);
                    }
                });
                if ($(this).attr("id") == "done") {} else if (
                    na == "") {
                    for (var i = 0; i < an.length; i++) {
                        var oran = $("#qst-" + (i + 1)).val();
                        if (rfchk($("#qst-" + (i + 1)), true)) {
                            $("#qst-" + (i + 1)).addClass(
                                "bg-success text-white rounded font-weight-bold p-1 px-2 ms-1"
                                );
                            $("#qst-" + (i + 1)).removeClass(
                                "rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr(
                                "disabled", true);
                            $("#qst-" + (i + 1)).addClass(
                                "wa"
                                );
                            $("#qst-" + (i + 1)).removeClass(
                                "rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after(
                                    "<div class=\"d-inline-block ra t-6\">" +
                                    an[i] + "</div>");
                            } else {
                                /* 2 이상인 경우 */
                                var r =
                                    "<div class=\"d-inline-block ra t-6\">";
                                for (var fd = (an[i].length -
                                    1); fd >= 0; fd--) {
                                    if (fd < (an[i].length -
                                        1)) {
                                        r = r + " / ";
                                    }
                                    r = r + an[i][fd];
                                }
                                r = r + "</div>";
                                if ($("span.sen").length > 0) {
                                    $("#qst-" + (i + 1))
                                        .closest("span.sen")
                                        .after(r);
                                } else {
                                    $("#qst-" + (i + 1)).after(
                                        r);
                                }
                            }
                        }
                        if ($("#qst-" + (i + 1)).hasClass(
                                "bg-success")) {
                            ri++;
                        }
                    }
                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
                    var qa = $(".q").length; /* 전체 문항 수 */
                    var qr = $(".bg-success").length; /* 맞춘 항목 수 */
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
                    $(this).prop("disabled", true);
                    $(".tran").show();
                    $(this).attr("id", "done");
                } else {
                    alert("모든 문제를 풀어주세요!");
                    /* alert(na+"번 문제를 풀어주세요!"); */
                };
            })
        });

    </script>
    </body>

</html>
