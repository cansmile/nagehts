<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <?php $single_line_height = 50; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie und ergänzen Sie die Lücken. <br>
                        <small> 듣고 빈칸을 채우세요. </small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다. 음성을 듣고 정답을
                            입력하세요.</small> ]</h3>
                    <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle" width="50"
                                    rowspan="2" scope="row"><button
                                        type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle" width="50">1.
                                </td>
                                <td class="align-middle">Räumen Sie
                                    gern auf?<span class="tran"><small><br>당신은
                                            치우는 것을 좋아하나요?</small></span></td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle"></td>
                                <td class="align-middle"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-1">
                                        , ich räume gern auf.
                                    </div><span class="tran"><small><br>네, 치우는 거
                                            좋아해요.</small>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-2">
                                        , ich räume nicht gern auf.
                                    </div><span class="tran"><small><br>아뇨, 저는
                                            치우는 거 좋아하지 않아요.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle" width="50"
                                    rowspan="2" scope="row"><button
                                        type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle" width="50">2.
                                </td>
                                <td class="align-middle">Gehen Sie gern
                                    spazieren?<span class="tran"><small><br>당신은
                                            산책하는 것을 좋아하지 않나요?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle"></td>
                                <td class="align-middle"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-3">
                                        , ich gehe gern spazieren.
                                    </div><span class="tran"><small><br>네, 산책하는
                                            거 좋아해요.</small>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-4">
                                        , ich gehe nicht gern spazieren.
                                    </div><span class="tran"><small><br>아뇨, 저는
                                            산책하는 거 좋아하지 않아요.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle" width="50"
                                    rowspan="2" scope="row"><button
                                        type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle" width="50">3.
                                </td>
                                <td class="align-middle">Gehen Sie
                                    nicht gern schwimmen?<span
                                        class="tran"><small><br>당신은 수영하는 것을 좋아하지
                                            않나요?</small></span></td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle"></td>
                                <td class="align-middle"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-5">
                                        , ich gehe gern schwimmen.
                                    </div><span class="tran"><small><br>네, 수영하는거
                                            좋아해요.</small>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-6"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-6">
                                        , ich gehe nicht gern schwimmen.
                                    </div><span class="tran"><small><br>아뇨, 수영하는
                                            거 좋아하지 않아요.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle" width="50"
                                    rowspan="2" scope="row"><button
                                        type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle" width="50">4.
                                </td>
                                <td class="align-middle">Kochen Sie
                                    nicht gern?<span class="tran"><small><br>당신은
                                            요리하는 것을 좋아하지 않나요?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle"></td>
                                <td class="align-middle"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-7"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-7">
                                        , ich koche gern.
                                    </div><span class="tran"><small><br>네, 저는
                                            요리하는거 좋아해요.</small>
                                </td>
                            </tr>
                            <tr>
                                <td height="<?php echo($single_line_height); ?>"
                                    class="align-middle">
                                    <div class="ant t-6" id="ant-8"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text"
                                            class="form-control text-right col-2 pr-0 mr-0 border-bottom-only rounded q
                                            t-6"
                                            aria-label="." id="qst-8">
                                        , ich koche nicht gern.
                                    </div><span class="tran"><small><br>아뇨, 저는
                                            요리하는 거 좋아하지 않아요.</small>
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
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">
                                    <span
                                        class="tipp">TIPP</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <strong>[긍정적 의문문]</strong><br>
                                    <div class="ml-4 pt-2">긍정의 대답은 ja<br>
                                        부정의 대답은 nein, nicht로 답을 한다.</div>
                                </td>
                                <td class="align-middle">
                                    <strong>[부정적 의문문]</strong> nicht, kein
                                    포함<br>
                                    <div class="ml-4 pt-2">긍정의 대답은 doch<br>
                                        부정의 대답은 nein, nicht로 답을 한다.</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>

    <script>
        $("#0").hide();
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["Ja", "Nein", "Ja", "Nein", "Doch", "Nein", "Doch", "Nein"];
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
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 6/r6 E2.mp3"],
                sprite: {
                    "0": [1539, 99571],
                    "1": [10409, 19170],
                    "2": [35167, 20290],
                    "3": [58426, 20175],
                    "4": [82625, 19563]
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
                    $("#0").show();
                    $(".alert").hide();
                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(
                                ".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(sen[ti]);
                        } else if (last == ti && nagehts.playing($("div#last").text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(sen[ti]);
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
                                pa[last] = $("#" + last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
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
                    /* 답 맞춰 볼까? */
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
                    };

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
                    checkHeight();
                } else {
                    alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                };
            });
            var pan = new Array();
            pan = [];
            for (var p = 0; p < pan.length; p++) {
                var pann = "#qst-" + pan[p];
                $(pann).val(an[(pan[p] - 1)]);
                $(pann).prop("disabled", true);
                $(pann).addClass("bg-success text-white font-weight-bold");
                $(pann).closest("tr").find(".tran").show();
            }
        });

    </script>
    </body>

</html>
