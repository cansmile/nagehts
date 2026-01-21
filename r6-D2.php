<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <style>
        td,
        th,
        table {
            border-width: 0;
            border-style: hidden;
        }

    </style>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>보기를 어울리는 위치에 알맞은 형태로 입력하세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col align-middle text-center border border-dark p-1 px-2 pt-2 m-1 rounded">
                    zu Abend essen<span class="tran"><br /><small>저녁
                            먹기</small></span></div>
                <div class="col align-middle text-center border border-dark p-1 px-2 pt-2 m-1 rounded">
                    die Zeitung lesen<span class="tran"><br /><small>신문읽기</small></span></div>
                <div class="col align-middle text-center border border-dark p-1 px-2 pt-2 m-1 rounded">
                    fernsehen<span class="tran"><br /><small>TV
                            보기</small></span></div>
                <div class="col align-middle text-center border border-dark p-1 px-2 pt-2 m-1 rounded">
                    Fotos machen<span class="tran"><br /><small>사진찍기</small></span></div>
                <div class="col align-middle text-center border border-dark p-1 px-2 pt-2 m-1 rounded">
                    das Mittagessen bestellen<span class="tran"><br /><small>점심
                            주문하기</small></span></div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="6"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-0.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td height="100" class="align-middle">Martin
                                    Klein ist Bankkaufmann.<span class="tran"><small><br>마틴 클라인은
                                            은행원입니다.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-1.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Um halb zehn&nbsp;<br />
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" class="form-control border border-bottom-only q"
                                            aria-label="." id="qst-1" style="position: relation; top: 5px;">
                                    </div><span class="tran"><br /><small>9시
                                            30분에 그는 신문을 읽습니다.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="8"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-2.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Um halb zwei&nbsp;<br />
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" class="form-control border border-bottom-only q"
                                            aria-label="." id="qst-2" style="position: relation; top: 5px;">
                                    </div><span class="tran"><br /><small>1시
                                            30분에 그는 점심을 주문합니다.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="9"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-4.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Um drei&nbsp;<br />
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" class="form-control border border-bottom-only q"
                                            aria-label="." id="qst-3" style="position: relation; top: 5px;">
                                    </div><span class="tran"><br /><small>3시에 그는
                                            사진을 찍습니다.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="10"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-5.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Um halb acht&nbsp;<br />
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" class="form-control border border-bottom-only q"
                                            aria-label="." id="qst-4" style="position: relation; top: 5px;">
                                    </div><span class="tran"><br /><small>7시
                                            30분에 그는 저녁을 먹습니다.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><button type="button" id="11"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                            </tr>
                            <tr>
                                <td height="200" class="align-middle text-center"><img
                                        src="./dev/images/Reihe 6/Reihe-6-D2-3.png"
                                        alt="Wohin passt das?" style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Um zehn&nbsp;<br />
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" class="form-control border border-bottom-only q"
                                            aria-label="." id="qst-5" style="position: relation; top: 5px;">
                                    </div><span class="tran"><br /><small>10시에
                                            그는 TV를 봅니다.</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["liest er die Zeitung.", "bestellt er das Mittagessen.",
            "macht er Fotos.", "isst er zu Abend.", "sieht er fern."
        ];
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
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 6/r6 D2.mp3"],
                sprite: {
                    "0": [3783, 45196],
                    "6": [12086, 2998],
                    "7": [18349, 2972],
                    "8": [24960, 3382],
                    "9": [31981, 2703],
                    "10": [38986, 3764],
                    "11": [46158, 2702]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    $("#0").show();
                    $("#ready").hide();
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
                    $(this).addClass("text-white fw-bold");
                    $(this).addClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                } else {
                    $(this).addClass("text-white fw-bold");
                    $(this).addClass("bg-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
                }
                if (!$(this).val()) {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $(this).removeClass("text-white fw-bold");
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
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                    } else {
                        $(this).addClass("text-white fw-bold");
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
                    $(this).removeClass("text-white fw-bold");
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
                                "bg-success text-white rounded fw-bold p-1 px-2 ms-1");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr("disabled", true);
                            $("#qst-" + (i + 1)).addClass("wa");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after("<div class=\"w-100 ra t-6\">" + an[i] +
                                    "</div>");
                            } else {
                                /* 2 이상인 경우 */
                                var r = "<div class=\"w-100 ra t-6\">";
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
                $(pann).addClass("bg-success text-white fw-bold");
                $(pann).closest("tr").find(".tran").show();
            }
        });

    </script>
    </body>

</html>
