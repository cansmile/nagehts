
            <?php require_once("heading.php"); ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4 mt-2 text-center">
                        <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인
                                문장이 붉게 변합니다.</small> ]</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <table class="table table-borderless border border-dark bg-light">
                            <tbody>
                                <tr>
                                    <td class="align-middle" height="80">
                                        Hallo Mina,</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        ich habe heute
                                        <strong><u>leider</u></strong> keine Zeit.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        Ich habe <strong><u>um 14 Uhr</u></strong>
                                        einen Deutschkurs.</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        Ich besuche <strong><u>am
                                                Abend</u></strong> meine Oma.</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        Wir können
                                        <strong><u>vielleicht</u></strong> am
                                        Sonntag ins Kino gehen.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <table class="table table-borderless border border-dark">
                            <tbody>
                                <tr>
                                    <td class="align-middle" height="80">
                                        <div
                                            class="input-group d-inline-flex align-items-baseline">
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control q border-bottom-only border-dark rounded-0"
                                                style="max-width: 120px;"
                                                id="qst-1">
                                            ,
                                        </div>
                                        <span class="tran"><small>미나
                                                안녕,</small></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        <div
                                            class="input-group d-inline-flex align-items-baseline">
                                            Leider&nbsp;
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control q border-bottom-only border-dark rounded-0"
                                                style="min-width: 100px;"
                                                id="qst-2">
                                            .
                                        </div>
                                        <span class="tran"><small>미안하지만 나 오늘 시간
                                                없어.</small></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        <div
                                            class="input-group d-inline-flex align-items-baseline">
                                            Um 14 Uhr&nbsp;
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control q border-bottom-only border-dark rounded-0"
                                                style="min-width: 100px;"
                                                id="qst-3">
                                            .
                                        </div>
                                        <span class="tran"><small>14시에 독일어 수업이
                                                있어.</small></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        <div
                                            class="input-group d-inline-flex align-items-baseline">
                                            Am Abend&nbsp;
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control q border-bottom-only border-dark rounded-0"
                                                style="min-width: 100px;"
                                                id="qst-4">
                                            .
                                        </div>
                                        <span class="tran"><small>저녁에는 우리 할머니 뵈러 가야
                                                해.</small></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" height="80">
                                        <div
                                            class="input-group d-inline-flex align-items-baseline">
                                            Vielleicht&nbsp;
                                            <input autocomplete="off" type="text"
                                                placeholder="Antwort"
                                                aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="form-control q border-bottom-only border-dark rounded-0"
                                                style="min-width: 100px;"
                                                id="qst-5">
                                            .
                                        </div>
                                        <span class="tran"><small>아마 일요일엔 영화관에 갈 수
                                                있을거야.</small></span>
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

        <!-- 여러개의 답이 인정되어야 하는 경우는 배열로 처리 -->
        <!-- 확인하는 단계에서는 배열일 경우 모두 대치 -->

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
            var an = ["Hallo Mina", "habe ich heute keine Zeit",
                "habe ich einen Deutschkurs", "besuche ich meine Oma",
                "können wir am Sonntag ins Kino gehen"
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
                })

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
                })

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
                        } else if ($(this).hasClass(
                            "bg-success")) {
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
                })
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
                            na += $(this).attr("id")
                                .substr(4, 1);
                        }
                    });
                    if ($(this).attr("id") == "done") {} else if (
                        na == "") {
                        for (var i = 0; i < an.length; i++) {
                            var oran = $("#qst-" + (i + 1)).val();
                            if (rfchk($("#qst-" + (i + 1)),
                                true)) {
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
                                        "<div class=\"w-100 ra t-6\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"w-100 ra t-6\">";
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

                        $(this).prop("disabled", true);
                        $(".tran").show();
                        $(this).attr("id", "done");
                    } else {
                        alert("모든 문제를 풀어주세요!");
                    };
                })

                var pan = new Array();
                pan = [1, 2];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).prop("disabled", true);
                    $(pann).addClass(
                        "bg-success text-white font-weight-bold");
                }

            });

        </script>
        </body>

    </html>
