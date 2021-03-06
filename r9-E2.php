<?php require_once("heading.php"); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie die Lücken. <br>
                        <small> 빈칸을 채우세요. </small>
                    </h2>
                    <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col my-2 py-2 lh250">
                    <span class="border border-dark p-1 px-2 rounded">Weihnachten<span
                            class="tran">&nbsp;<small>크리스마스</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Ostern<span
                            class="tran">&nbsp;<small>부활절</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Silvester<span class="tran">&nbsp;<small>12월
                                31일</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Karneval<span
                            class="tran">&nbsp;<small>카니발</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Oktoberfest<span
                            class="tran">&nbsp;<small>옥토버페스트</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Valentinstag<span
                            class="tran">&nbsp;<small>발렌타인데이</small></span></span>
                    <span class="border border-dark p-1 px-2 rounded">Geburtstag<span
                            class="tran">&nbsp;<small>생일</small></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="input-group lh350">
                        <input autocomplete="off" type="text" class="form-control q ps-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1 t_add_3" style="min-width: 150px;" aria-label="." id="qst-1">Frühling –
                        Hase –
                        Eier –
                        Schokolade
                        <span class="tran"><strong>부활절</strong>&nbsp;<small>봄
                                -토끼 -달걀 - 초콜릿</small></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="input-group lh350">
                        <input autocomplete="off" type="text" class="form-control q ps-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1 t_add_3" style="min-width: 150px;" aria-label="." id="qst-2">Maske –
                        Kostüm –
                        Karnerval
                        – Rosenmontag
                        <span class="tran"><strong>카니발</strong>&nbsp;<small>가면 -
                                의상 - 카니발 - 장미의 월요일</small></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="input-group lh350">
                        <input autocomplete="off" type="text" class="form-control q ps-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1 t_add_3" style="min-width: 150px;" aria-label="." id="qst-3">Bier – Musik
                        – Brezel
                        -
                        München
                        <span class="tran"><strong>옥토버페스트</strong>&nbsp;<small>맥주
                                - 음악 - 브레첼 - 뮌헨</small></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="input-group lh350">
                        <input autocomplete="off" type="text" class="form-control q ps-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1 t_add_3" style="min-width: 150px;" aria-label="." id="qst-4">Kranz
                        –Weihnachtsbaum–
                        Geschenke – Familie
                        <span class="tran"><strong>크리스마스</strong>&nbsp;<small>화관
                                - 크리스마스트리 - 선물 -</small></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="input-group lh350">
                        <input autocomplete="off" type="text" class="form-control q ps-0 col-2 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1 t_add_3" style="min-width: 150px;" aria-label="." id="qst-5">Alter –
                        Geburtstagstorte –
                        Kerze – Party – Geschenke
                        <span class="tran"><strong>생일</strong>&nbsp;<small>나이 -
                                생일케이크 - 초- 파티 - 선물</small></span>
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
        var an = ["Ostern", "Karneval", "Oktoberfest", "Weihnachten",
            "Geburtstag"
        ];
        $(document).ready(function () {
            /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */ /* 값 확인해보자, io값이 참이면 전체 검사 */
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
                $(".tran").show();
            });
            var pan = new Array();
            pan = [1];
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
