<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie die Lücken. <br>
                        <small> 빈칸을 채우세요. </small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>

                    </h2>
                    <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col my-2 py-2 lh250">
                    <span class="border border-dark p-1 px-2 rounded">danken</span>
                    <span class="border border-dark p-1 px-2 rounded">gratulieren</span>
                    <span class="border border-dark p-1 px-2 rounded">fehlen</span>
                    <span class="border border-dark p-1 px-2 rounded">helfen</span>
                    <span class="border border-dark p-1 px-2 rounded">ihr</span>
                    <span class="border border-dark p-1 px-2 rounded">mir</span>
                    <span class="border border-dark p-1 px-2 rounded">sie</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center align-middle" width="80">
                                    <button type="button" id="1" class="so btn btn-outline-dark btn-sm m-1">▶</button>
                                    <span
                                        class="border border-dark bg-secondary text-white rounded p-1 px-2 m-1">1</span>
                                </th>
                                <td class="lh350">
                                    <div class="input-group">
                                        Julia ist dieses Wochenende auf der
                                        Dienstreise in München. Martin ist ein
                                        bisschen traurig: Julia <input autocomplete="off" type="text" class="form-control q pl-0 col-2
                                        rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                        style="min-width: 150px;" aria-label="."
                                            id="qst-1"> Martin. Er denkt den ganzen Tag an <input autocomplete="off" type="text"
                                            class="form-control q pl-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark mx-1 t-6" style="min-width: 150px;" aria-label="."
                                            id="qst-2">. <span class="tran"><small>율리아는 이번 주말에
                                                출장으로 뮌헨에 있다. 마틴은 조금 슬프다: 마틴은
                                                율리아가 그립다. 그는 하루 종일 그녀를
                                                생각한다.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center align-middle">
                                    <button type="button" id="2" class="so btn btn-outline-dark btn-sm m-1">▶</button>
                                    <span
                                        class="border border-dark bg-secondary text-white rounded p-1 px-2 m-1">2</span>
                                </th>
                                <td class="lh350">
                                    <div class="input-group">
                                        Ich bade mein Baby. Mein Mann steht
                                        neben mir und <input autocomplete="off" type="text" class="form-control q pl-0 col-2 rounded-0
                                        border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                        style="min-width: 150px;" aria-label="."
                                            id="qst-3"><input autocomplete="off" type="text" class="form-control q pl-0 col-2 rounded-0
                                            border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                            style="min-width: 150px;" aria-label="."
                                            id="qst-4">. <span class="tran"><small>나는 나의 아기를
                                                목욕시킨다. 나의 남편은 나의 곁에서 나를
                                                도와준다.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center align-middle">
                                    <button type="button" id="3" class="so btn btn-outline-dark btn-sm m-1">▶</button>
                                    <span
                                        class="border border-dark bg-secondary text-white rounded p-1 px-2 m-1">3</span>
                                </th>
                                <td class="lh350">
                                    <div class="input-group">
                                        Marias Mutter hat Geburtstag. Maria ruft
                                        sie an und <input autocomplete="off" type="text" class="form-control q pl-0 col-2 rounded-0
                                        border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                        style="min-width: 150px;" aria-label="."
                                            id="qst-5"><input autocomplete="off" type="text" class="form-control q pl-0 col-2 rounded-0
                                            border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                            style="min-width: 150px;" aria-label="."
                                            id="qst-6">. Ihre Mutter <input autocomplete="off" type="text" class="form-control q pl-0 col-2
                                            rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1
                                            t-6" style="min-width: 150px;" aria-label="."
                                            id="qst-7"><input autocomplete="off" type="text" class="form-control q pl-0 col-2 rounded-0
                                            border-bottom-only mx-1 px-2 py-1 text-center border-dark mx-1 t-6"
                                            style="min-width: 150px;" aria-label="."
                                            id="qst-8">: „Ach, Maria, das ist aber nett, dass du an
                                        meinen Geburtstag denkst!“
                                        <span class="tran"><small>마리아의 어머니는
                                                생신이다. 마리아는 그녀에게 전화해서 축하한다. 그녀의
                                                어머니는 그녀에게 감사 인사를 한다: “아, 마리아, 네가
                                                나의 생일을 기억해주니 기분이
                                                좋구나!”</small><br></span>
                                    </div>
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
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["fehlt", "sie", "hilft", "mir", "gratuliert", "ihr", "dankt",
            "ihr"
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
                });
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 9/r9 E7.mp3"],
                sprite: {
                    "0": [0, 42589],
                    "1": [10275, 11763],
                    "2": [22753, 5525],
                    "3": [29075, 12265]
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
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                            "text-success");
                        if (rfchk($(this))) {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-danger");
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
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-success");
                            } else {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-danger");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-danger");
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
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass("cr");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass("wa");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"d-block ra t-6\">" + an[i] +
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
                                            $("#qst-" + (i + 1)).closest("span.sen").after(
                                                r);
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
                            $(this).prop("disabled", true);
                            $(".tran").show();
                            $(this).attr("id", "done");
                        } else {
                            alert("모든 문제를 풀어주세요!");
                        };
                    });
                    var pan = new Array();
                    pan = [1, 2];
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass("bg-success text-white font-weight-bold");
                        $(pann).prop("disabled",
                        true);
                    }

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
        });

    </script>
    </body>

</html>
