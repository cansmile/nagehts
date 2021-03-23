z<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie und ergänzen Sie mit „ein/-e/-en“ oder
                        „kein/-e/-en“.<br>
                        <small>듣고 “ein/-e/-en” 또는 “kein/-e/-en“을 채우세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                    <h3>[ <small>듣고 빈칸에 어울리는 단어로 채우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 lh250">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th rowspan="3" class="align-top h4 font-weight-bold">1</th>
                                <td scope="row" rowspan="7"
                                    class="text-center align-middle"><img
                                        src="./dev/images/Reihe 4/Reihe-4-C2-1-1.png"
                                        style="max-width: 140px; height: auto;">
                                </td>
                                <td width="25"><button type="button" id="1"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Claudia hat eine Schultasche, aber sie hat
                                    kein Lineal.<span
                                        class="tran"><br><small>클라우디아는 책가방이 있지만
                                            자는 없습니다. </small></span></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="2"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="input-group">
                                        Sie hat einen Kleber, aber
                                        <input autocomplete="off" type="text"
                                            class="form-control q border-bottom-only rounded-0 mx-1 col-3 t-6"
                                            aria-label="." id="qst-1">
                                        Radiergummi.
                                    </div><span class="tran"><br><small>그녀는 풀이
                                            있지만 지우개가 없습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="input-group">
                                        Sie hat Buntstifte, aber
                                        <input autocomplete="off" type="text"
                                            class="form-control q border-bottom-only rounded-0 mx-1 col-3 t-6"
                                            aria-label="." id="qst-2">
                                        Geld.
                                    </div><span class="tran"><br><small>그녀는 색연필이
                                            있지만 돈은 없습니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 lh250">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th rowspan="4" class="align-top h4 font-weight-bold">2</th>
                                <td scope="row" rowspan="7"
                                    class="text-center align-middle"><img
                                        src="./dev/images/Reihe 4/Reihe-4-C2-2-1.png"
                                        style="max-width: 140px; height: auto;">
                                </td>
                                <td width="25"><button type="button" id="4"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>Michael hat ein Wörterbuch, aber er hat
                                    keine Büroklammern.<span
                                        class="tran"><br><small>미하엘은 사전을 가지고 있지만
                                            클립은 없습니다.</small></span></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="input-group">
                                        Er hat Geld, aber
                                        <input autocomplete="off" type="text"
                                            class="form-control q border-bottom-only rounded-0 mx-1 col-3 t-6"
                                            aria-label="." id="qst-3">
                                        Bleistift.
                                    </div><span class="tran"><br><small>그는 돈이
                                            있지만 연필은 없습니다.
                                        </small></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button" id="6"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group">
                                        Er hat
                                        <input autocomplete="off" type="text"
                                            class="form-control q border-bottom-only rounded-0 mx-1 col-3 t-6"
                                            aria-label="." id="qst-4">
                                        Kuli,
                                    </div><span class="tran"><br><small>그는 펜이
                                            있지만</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="input-group">
                                        aber
                                        <input autocomplete="off" type="text"
                                            class="form-control q border-bottom-only rounded-0 mx-1 col-3 t-6"
                                            aria-label="." id="qst-5">
                                        Schultasche.
                                    </div><span class="tran"><br><small>책가방은 가지고
                                            있지 않습니다.</small></span>
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
                <div class="col-12">
                    <table
                        class="table table-borderless table-striped text-center table-sm">
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-start">haben 동사는 4격
                                    목적어를 취하며, 명사를 부정할 때는 kein이라는 부정관사를
                                    사용한다.<br>이 때 kein은 부정관사류(ein, nein)와 같이 동일하게
                                    관사어미변화한다. (keinen, keine, kein)</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-primary"><strong>m</strong></td>
                                <td class="text-danger"><strong>f</strong></td>
                                <td class="text-purple"><strong>n</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-primary"><strong>부정관사</strong>
                                </td>
                                <td class="text-danger"><strong>부정관사</strong>
                                </td>
                                <td class="text-purple"><strong>부정관사</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Nominativ<small>&nbsp;주격</small></strong>
                                </td>
                                <td class="text-primary">kein Kuli</td>
                                <td class="text-danger">keine Schultasche</td>
                                <td class="text-purple">kein Geld</td>
                            </tr>
                            <tr>
                                <td><strong>Akkusativ<small>&nbsp;목적격</small></strong>
                                </td>
                                <td class="text-primary">keinen Kuli</td>
                                <td class="text-danger">keine Schultasche</td>
                                <td class="text-purple">kein Geld</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <table
                        class="table table-borderless table-striped text-center table-sm">
                        <tbody>
                            <tr>
                                <td colspan="7" class="text-start">
                                    <strong>(un)bestimmte Artikel</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-primary" colspan="2">
                                    <strong>m</strong></td>
                                <td class="text-danger" colspan="2">
                                    <strong>f</strong></td>
                                <td class="text-purple" colspan="2">
                                    <strong>n</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-primary"><strong>부정관사</strong>
                                </td>
                                <td class="text-primary"><strong>정관사</strong>
                                </td>
                                <td class="text-danger"><strong>부정관사</strong>
                                </td>
                                <td class="text-danger"><strong>정관사</strong>
                                </td>
                                <td class="text-purple"><strong>부정관사</strong>
                                </td>
                                <td class="text-purple"><strong>정관사</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Nominativ<small>&nbsp;주격</small></strong>
                                </td>
                                <td class="text-primary">ein Tisch</td>
                                <td class="text-primary">der Tisch</td>
                                <td class="text-danger">eine Uhr</td>
                                <td class="text-danger">die Uhr</td>
                                <td class="text-purple">ein Auto</td>
                                <td class="text-purple">das Auto</td>
                            </tr>
                            <tr>
                                <td><strong>Akkusativ<small>&nbsp;목적격</small></strong>
                                </td>
                                <td class="text-primary">einen Tisch</td>
                                <td class="text-primary">den Tisch</td>
                                <td class="text-danger">eine Uhr</td>
                                <td class="text-danger">die Uhr</td>
                                <td class="text-purple">ein Auto</td>
                                <td class="text-purple">das Auto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="marg"></div>
    <div id="last" class="d-none"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".ant").hide();
        $(".tran").hide();
        var an = new Array();
        var an = ["keinen", "kein", "keinen", "einen", "keine"];
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
                    "./dev/sounds/Reihe 4/r4 C2b.mp3"
                ],
                sprite: {
                    "0": [1346, 52855],
                    "1": [15932, 4406],
                    "2": [23087, 4029],
                    "3": [27798, 3241],
                    "4": [36933, 5964],
                    "5": [43905, 4276],
                    "6": [49500, 2333],
                    "7": [51795, 2509]
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
                onload: function () {/* 입력하는 문자 확인(정답 표시 없음) 여기부터 *//* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
                        di(th);
                        if (!$.isArray(an[qn])) {/* 1 인 경우 */
                            if (io) {
                                b = an[qn];
                            } else {
                                b = an[qn].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");
                            if (a == b) {
                                return true;
                            }
                        } else {/* 2 이상인 경우 */
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
                        if ($(this).val().length > 0) {
                            var wid = (($(this).val().length) + 2) * 2 + "em";
                            $(this).css("width", wid);
                        } else {
                            $(this).css("width", ((8 + 2) * 2 + "em"));
                        }
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
                    });/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
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
                        if ($(this).attr("id") == "done") {
                        } else if (na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2 ms-1");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass("wa");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after("<div class=\"w-100 ra t-6\">" + an[i] + "</div>");
                                    } else {/* 2 이상인 경우 */
                                        var r = "<div class=\"w-100 ra t-6\">";
                                        for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                            if (fd < (an[i].length - 1)) {
                                                r = r + " / ";
                                            }
                                            r = r + an[i] [fd];
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
                            }/* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 *//* 분류 기준은 100%, 80%, 60%, 40% */
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
                            alert("모든 문제를 풀어주세요!");/* alert(na+"번 문제를 풀어주세요!"); */
                        }
                        ;
                    });
                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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

                    /* 역동적 입력란 */
                    $.fn.textWidth = function (text, font) {
                        if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
                        $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
                        return $.fn.textWidth.fakeEl.width();
                    };

                    function di(th) {
                        if (th.val().length < 10) {
                            var m = 1.75;
                        }
                        if (th.val().length < 5) {
                            var m = 2;
                        }
                        if (th.val().length < 3) {
                            var m = 3;
                        }
                        if (th.val().length >= 10) {
                            var m = 1.35;
                        }
                        var w = Math.ceil(th.textWidth() * m) + 'px';
                        console.log(w);

                        th.css("min-width", w);
                        th.css("max-width", w);
                        th.css("width", w);
                    };

                    /* 전체 입력란 폭 맞추기 */
                    $(".q").each(function () {
                        di($(this));
                    });
                    $("#0").show();
                    $("#ready").hide();
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
