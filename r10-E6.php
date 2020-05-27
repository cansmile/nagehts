<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie die Lücken. <br>
                        <small> 빈칸을 채우세요. </small>
                        [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row my-2 py-2">
                <div class="col">
                    <span class="wd">bis zum</span>
                    <span class="wd">bis zur</span>
                    <span class="wd">in die</span>
                    <span class="wd">neben dem</span>
                    <span class="wd">zur</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 border border-dark rounded p-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="display-4 bg-light text-center">
                                    <small>z.B.</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 250%;">
                                    <div class="input-group d-inline">
                                        <strong>Entschuldigung, wie komme ich
                                            zur Hanabank?</strong><span class="tran"><br><small><strong>실례합니다,
                                                    하나은행으로 어떻게
                                                    가나요?</strong></small><br></span>
                                        Gehen Sie immer geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-1">
                                        Friedenplatz.<span class="tran"><br><small>프리덴광장까지 계속
                                                직진하세요.</small><br></span> Dann
                                        links <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-2">
                                        Maxstraße.<span class="tran"><br><small>그런 다음 왼쪽
                                                막스슈트라세로 가세요.</small><br></span>
                                        Gehen Sie geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-3">
                                        Post.<span class="tran"><br><small>우체국까지
                                                똑바로 가세요.</small><br></span> Die
                                        Hanabank ist neben der Post.<span class="tran"><br><small>하나은행은 우체국 옆에
                                                있어요.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 border border-dark rounded p-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="display-4 bg-light text-center">
                                    <small>1.</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 250%;">
                                    <div class="input-group d-inline">
                                        <strong>Entschuldigung, wie komme ich
                                            <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                                text-center border-dark d-inline-block t-6"
                                                style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-4">
                                            Peterskirche?</strong><span class="tran"><br><small><strong>실례합니다,
                                                    페터스교회로 어떻게
                                                    가나요?</strong></small><br></span>
                                        Gehen Sie immer geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-5">
                                        Olympicpark.<span class="tran"><br><small>올림픽공원까지 계속
                                                직진하세요.</small><br></span> Dann
                                        links <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-6">
                                        Olympicstraße.<span class="tran"><br><small>그런 다음 왼쪽
                                                올림픽슈트라세로 가세요.</small><br></span>
                                        Gehen Sie geradeaus bis zum
                                        Rathaus.<span class="tran"><br><small>시청까지 똑바로
                                                가세요.</small><br></span> Die
                                        Perterskirche ist neben dem
                                        Rathaus.<span class="tran"><br><small>페터스교회는 시청 옆에
                                                있어요.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 border border-dark rounded p-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="display-4 bg-light text-center">
                                    <small>2.</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 250%;">
                                    <div class="input-group d-inline">
                                        <strong>Entschuldigung, wie komme ich
                                            zum Schwimmbad?</strong><span class="tran"><br><small><strong>실례합니다,
                                                    수영장으로 어떻게
                                                    가나요?</strong></small><br></span>
                                        Gehen Sie immer geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-7">
                                        Kreuzung.<span class="tran"><br><small>교차로까지 계속
                                                직진하세요.</small><br></span> Dann
                                        rechts in die Mariagasse.<span class="tran"><br><small>그런 다음 왼쪽
                                                마리아가세로 가세요.</small><br></span>
                                        Gehen Sie geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-8">
                                        Sportplatz.<span class="tran"><br><small>운동장까지 똑바로
                                                가세요.</small><br></span> Das
                                        Schwimmbad ist <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-9">
                                        Sportplatz.<span class="tran"><br><small>수영장은 운동장 옆에
                                                있어요.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 border border-dark rounded p-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="display-4 bg-light text-center">
                                    <small>3.</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 250%;">
                                    <div class="input-group d-inline">
                                        <strong>Entschuldigung, wie komme ich
                                            <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                                text-center border-dark d-inline-block t-6"
                                                style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-10">
                                            Post?</strong><span class="tran"><br><small><strong>실례합니다,
                                                    우체국으로 어떻게
                                                    가나요?</strong></small><br></span>
                                        Gehen Sie immer geradeaus <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-11">
                                        Familie-Apartment.<span class="tran"><br><small>파밀리에-아파트까지
                                                계속 직진하세요.</small><br></span>
                                        Dann links in die Sammalgasse.<span class="tran"><br><small>그런 다음 왼쪽
                                                자말가세로 가세요.</small><br></span>
                                        Gehen Sie geradeaus bis zum Südtor.<span class="tran"><br><small>남문까지 똑바로
                                                가세요.</small><br></span> Die Post
                                        ist <input type="text" class="form-control q pl-0 col-4 rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark d-inline-block t-6"
                                            style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-12">
                                        Südtor.<span class="tran"><br><small>우체국은 남문 옆에
                                                있어요.</small><br></span>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <!-- interact.min.js -->
    <script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
    <script>
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["bis zum", "in die", "bis zur", "zur", "bis zum", "in die",
            "bis zur", "bis zum", "neben dem", "zur", "bis zum", "neben dem"
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
                        ion.sound.play("Cartoon_Boing");
                    } else if ($(this).hasClass("bg-success")) {
                        ion.sound.play("dingdongdang");
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
                            $("#qst-" + (i + 1)).addClass(
                                "cr"
                            );
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr("disabled", true);
                            $("#qst-" + (i + 1)).addClass(
                                "wa"
                            );
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after(
                                    "<div class=\"d-block ra t-6\" style=\"max-width: 150px; min-width: 100px; max-width: 100px;\">" +
                                    an[i] + "</div>");
                            } else {
                                /* 2 이상인 경우 */
                                var r =
                                    "<div class=\"rad-inline-block t-6\" style=\"max-width: 150px; min-width: 100px; max-width: 100px;\">";
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
                    $(this).removeClass(
                        "btn-light ");
                    var qa = $(".q")
                        .length; /* 전체 문항 수 */
                    var qr = $(
                            ".bg-success")
                        .length; /* 맞춘 항목 수 */
                    var pe = (qr / qa) *
                        100; /* 정답 비율 */
                    var tcl =
                        "white"; /* 기본 문자색 */
                    /* 분류 기준은 100%, 80%, 60%, 40% */
                    if (pe > 99) {
                        var st = "원어민이세요?";
                        var cl = "lime";
                        var tcl = "dark";
                    } else if (pe > 74) {
                        var st =
                            "어! 좀 하시는데요~^^";
                        var cl = "success";
                    } else if (pe > 49) {
                        var st =
                            "쓰읍~ 다시 해 보실까요?";
                        var cl = "primary";
                    } else {
                        var st =
                            "좀 더 분발해 주세요~";
                        var cl = "danger";
                    }
                    $(this).addClass(
                        "btn-" + cl +
                        " text-" + tcl);
                    $(this).html("<h4>" +
                        qa + "문제 중 " +
                        qr +
                        "개를 맞히셨네요!<br>" +
                        st + "</h4>");
                    $(this).prop("disabled",
                        true);
                    $(".tran").show();
                    $(this).attr("id",
                        "done");
                } else {
                    alert("모든 문제를 풀어주세요!");
                    /* alert(na+"번 문제를 풀어주세요!"); */
                };
            });
            var pan = new Array();
            /* pan=[1,2,3,4,5,6,7,8,9,10]; */
            pan = [1, 2, 3];
            for (var p = 0; p < pan.length; p++) {
                var pann = "#qst-" + pan[p];
                $(pann).val(an[(pan[p] - 1)]);
                $(pann).addClass(
                    "bg-success text-white font-weight-bold"
                );
                $(pann).prop("disabled", true);
                /* $(pann).closest("tr").find(".tran").show(); */
            }
        });
    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>