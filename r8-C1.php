<?php require_once("heading.php"); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Schreiben Sie. <br>
                        <small>써보세요.</small>
                    </h2>
                    <h3>[ <small>대문자로 된 부분을 바른 단어로 입력하세요.</small> ]</h3>
                    <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-borderless my-auto">
                                <tbody>
                                    <tr>
                                        <td width="30">1.</td>
                                        <td class="font-weight-bold">F
                                            – K – P – O</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="ant t-6" id="ant-1"></div>
                                            <div class="input-group">
                                                <input autocomplete="off" type="text" class="form-control q border-bottom-only border border-dark
                                                    rounded-0" aria-label="." id="qst-1">
                                            </div>
                                            <span class="tran"><small>머리</small></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <table class="table table-borderless my-auto">
                                <tbody>
                                    <tr>
                                        <td width="30">2.</td>
                                        <td class="font-weight-bold">N
                                            – A – H – Z</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="ant t-6" id="ant-2"></div>
                                            <div class="input-group">
                                                <input autocomplete="off" type="text" class="form-control q border-bottom-only border border-dark
                                                    rounded-0" aria-label="." id="qst-2">
                                            </div>
                                            <span class="tran"><small>이</small></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col text-center align-middle"><img
                                src="./dev/images/Reihe 8/Reihe-8-C1.png" alt="schmerzen"
                                style="max-width: 240px; height: auto;"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-borderless my-auto">
                                <tbody>
                                    <tr>
                                        <td width="30">3.</td>
                                        <td class="font-weight-bold">S
                                            – L – A – H</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="ant t-6" id="ant-3"></div>
                                            <div class="input-group">
                                                <input autocomplete="off" type="text" class="form-control q border-bottom-only border border-dark
                                                    rounded-0" aria-label="." id="qst-3">
                                            </div>
                                            <span class="tran"><small>목</small></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <table class="table table-borderless my-auto">
                                <tbody>
                                    <tr>
                                        <td width="30">4.</td>
                                        <td class="font-weight-bold">N
                                            – R – K – E – C – Ü</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="ant t-6" id="ant-4"></div>
                                            <div class="input-group">
                                                <input autocomplete="off" type="text" class="form-control q border-bottom-only border border-dark
                                                    rounded-0" aria-label="." id="qst-4">
                                            </div>
                                            <span class="tran"><small>등</small></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <table class="table table-borderless my-auto">
                                <tbody>
                                    <tr>
                                        <td width="30">5.</td>
                                        <td class="font-weight-bold">A
                                            – B – C – U – H</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="ant t-6" id="ant-5"></div>
                                            <div class="input-group">
                                                <input autocomplete="off" type="text" class="form-control q border-bottom-only border border-dark
                                                    rounded-0" aria-label="." id="qst-5">
                                            </div>
                                            <span class="tran"><small>배</small></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
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

        var an = new Array();
        var an = ["Kopf", "Zahn", "Hals", "Rücken", "Bauch"];

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
            };

            $(".q").on("keyup", function () {
                $(this).removeClass("bg-danger");
                $(this).removeClass("bg-success");
                $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-danger");
                $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-success");
                if (rfchk($(this))) {
                    $(this).addClass("text-white font-weight-bold");
                    $(this).addClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                } else {
                    $(this).addClass("text-white font-weight-bold");
                    $(this).addClass("bg-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
                }
                if (!$(this).val()) {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $(this).removeClass("text-white font-weight-bold");
                }
                if ($(this).val()) {
                    $("#ant-" + $(this).attr("id").substr(4)).show();
                    $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                } else {
                    $("#ant-" + $(this).attr("id").substr(4)).hide();
                }
            });
            $(".q").on("focusin", function () {
                $("#ant-" + $(this).attr("id").substr(4)).show();
                if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                    $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                }
                if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                    if (rfchk($(this))) {
                        $(this).addClass("text-white font-weight-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                    } else {
                        $(this).addClass("text-white font-weight-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
                    }
                }
            });
            $(".q").on("focusout", function () {
                $("#ant-" + $(this).attr("id").substr(4)).hide();
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
                    $(this).removeClass("text-white font-weight-bold");
                    $(this).removeClass("bg-success");
                }
            });

            /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */

            /* 정답확인 */
            $("#chk").on("click", function () {
                var na = "";
                var ri = 0;
                var qst = $(".q").length;
                $(".q").each(function () {
                    if (na != "") {
                        na += ", ";
                    }
                    if ($(this).val() == "") {
                        na += $(this).attr("id").substr(4, 1);
                    }
                });
                if ($(this).attr("id") == "done") {} else if (na == "") {
                    for (var i = 0; i < an.length; i++) {
                        var oran = $("#qst-" + (i + 1)).val();
                        if (rfchk($("#qst-" + (i + 1)), true)) {
                            $("#qst-" + (i + 1)).addClass(
                                "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr("disabled", true);
                            $("#qst-" + (i + 1)).addClass("wa");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after("<div class=\"d-block ra t-6\">" + an[i] +
                                    "</div>");
                            } else {
                                /* 2 이상인 경우 */
                                var r = "<div class=\"d-block ra t-6\">";
                                for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                    if (fd < (an[i].length - 1)) {
                                        r = r + " / ";
                                    }
                                    r = r + an[i][fd];
                                }
                                r = r + "</div>";
                                if ($("span.sen").length > 0) {
                                    $("#qst-" + (i + 1)).closest("span.sen").after(r);
                                } else {
                                    $("#qst-" + (i + 1)).after(r);
                                }
                            }
                        }
                        if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
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
                    $(this).addClass("btn-" + cl + " text-" + tcl);
                    $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                    $(this).prop("disabled", true);
                    $(".tran").show();
                    $(this).attr("id", "done");
                } else {
                    alert("모든 문제를 풀어주세요!");
                };
            });

            var pan = new Array();
            pan = ["1"];
            for (var p = 0; p < pan.length; p++) {
                var pann = "#qst-" + pan[p];
                $(pann).val(an[(pan[p] - 1)]);
                $(pann).addClass("bg-success text-white font-weight-bold");
                $(pann).prop("disabled", true);
            }
        });

    </script>
    </body>

</html>
