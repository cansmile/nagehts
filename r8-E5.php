<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Schreiben Sie. <br>
                        <small>써보세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="4" width="5%">1.
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E5-1.png" alt="erkältet"
                                        class="rounded d-sm-none d-md-block d-lg-block d-xl-block "
                                        style="max-width: 180px; height: auto;">
                                </th>
                                <td>
                                    <button type="button" id="1"
                                        class="so btn btn-outline-primary btn-sm mx-2">▶</button>
                                        <strong>erkältet:</strong>
                                    <span class="tran"><br><small>감기</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Mina&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon1" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-1">
                                        &nbsp;erkältet.
                                    </div>
                                    <span class="tran"><small>미나는
                                            감기입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>im Bett bleiben
                                    <span class="tran"><br><small>침대에</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon2" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-2">
                                        &nbsp;im Bett&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon3" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-3">.
                                    </div>
                                    <span class="tran"><small>그녀는 침대에 있어야만
                                            합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>nicht schwimmen gehen
                                    <span class="tran"><br><small>수영하러
                                            가다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon4" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-4">
                                        &nbsp;nicht schwimmen&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon5" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-5">.
                                    </div>
                                    <span class="tran"><small>그녀는 수영하러 가면
                                            안됩니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nasentropfen nehmen.
                                    <span class="tran"><br><small>콧물약을
                                            넣다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon6" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-6">
                                        &nbsp;Nasentropfen&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon7" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-7">.
                                    </div>
                                    <span class="tran"><small>그녀는 콧물약을 넣어야만
                                            합니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="4">2.
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E5-2.png" alt="nervös"
                                        class="rounded d-sm-none d-md-block d-lg-block d-xl-block "
                                        style="max-width: 180px; height: auto;">
                                </th>
                                <td>
                                    <button type="button" id="2"
                                        class="so btn btn-outline-primary btn-sm mx-2">▶</button>
                                        <strong>nervös:</strong>
                                    <span class="tran"><br><small>신경질 적인
                                            :</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-8">
                                        &nbsp;nervös.
                                    </div>
                                    <span class="tran"><small>그녀는
                                            신경질적입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Alkohol
                                    <span class="tran"><br><small>술</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon9" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 col-5 t-6" id="qst-9">
                                        &nbsp;keinen Alkohol&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon10" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-10">.
                                    </div>
                                    <span class="tran"><small>그녀는 술을 마시지
                                            말아야합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Gymnastik machen
                                    <span class="tran"><br><small>체조를
                                            하다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon11" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-11">
                                        &nbsp;Gymnastik&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon12" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-12">
                                    </div>
                                    <span class="tran"><small>그녀는 체조를
                                            해야합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>viel spazieren gehen
                                    <span class="tran"><br><small></small></span>
                                </td>
                                <td>
                                    <div class="input-group">und viel
                                        spazieren&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon13" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-13">.
                                    </div>
                                    <span class="tran"><small>그리고 많이 산책해야만
                                            합니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="4">3.
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E5-3.png" alt="Durchfall"
                                        class="rounded d-sm-none d-md-block d-lg-block d-xl-block "
                                        style="max-width: 180px; height: auto;">
                                </th>
                                <td>
                                    <button type="button" id="3"
                                        class="so btn btn-outline-dark btn-sm mx-2">▶</button>
                                        <strong>Durchfall:</strong>
                                    <span class="tran"><br><small>설사
                                            :</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Er&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon14" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-14">
                                        &nbsp;Durchfall.
                                    </div>
                                    <span class="tran"><small>그는 설사를
                                            합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>viel Wasser trinken
                                    <span class="tran"><br><small>물을 많이
                                            마시다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Er&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon15" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-15">
                                        &nbsp;viel Wasser&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon16" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-16">
                                        .
                                    </div>
                                    <span class="tran"><small>그는 물을 많이
                                            마셔야합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Schokolade essen
                                    <span class="tran"><br><small>초콜릿을
                                            먹다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Er&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon17" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-17">&nbsp;keine
                                        Schokolade
                                    </div>
                                    <span class="tran"><small>그는 초콜릿을 먹어서는
                                            안됩니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Eis essen
                                    <span class="tran"><br><small>아이스크림을
                                            먹다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">und kein Eis&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon18" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-18">
                                        &nbsp;.
                                    </div>
                                    <span class="tran"><small>그리고 아이스크림을 먹어서는
                                            안됩니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="4">4.
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E5-4.png"
                                        alt="Rückenschmerzen"
                                        class="rounded d-sm-none d-md-block d-lg-block d-xl-block "
                                        style="max-width: 180px; height: auto;">
                                </th>
                                <td>
                                    <button type="button" id="4"
                                        class="so btn btn-outline-primary btn-sm mx-2">▶</button>

                                    <strong>Rückenschmerzen:</strong>
                                    <span class="tran"><br><small>허리 통증
                                            :</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon19" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-19">Rückenschmerzen.
                                    </div>
                                    <span class="tran"><small>그녀는 허리 통증이
                                            있습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Sport treiben
                                    <span class="tran"><br><small>운동을
                                            하다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">Sie&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon20" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-20">
                                        &nbsp;Sport&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon21" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-21">,
                                    </div>
                                    <span class="tran"><small>그녀는 운동을 해야
                                            합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Yoga machen
                                    <span class="tran"><br><small>요가를
                                            하다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">z.B. Yoga&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon22" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-22">
                                    </div>
                                    <span class="tran"><small>예를 들어 요가를
                                            해야하고</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>gerade sitzen
                                    <span class="tran"><br><small>바르게
                                            앉다</small></span>
                                </td>
                                <td>
                                    <div class="input-group">und gerade&nbsp;
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon23" class="text-center form-control q
                                            border-bottom-only border-dark rounded-0 t-6" id="qst-23">.
                                    </div>
                                    <span class="tran"><small>바르게 앉아야
                                            합니다.</small></span>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["ist", ["soll", "muss"], "bleiben", "darf", "gehen", ["soll",
                "muss"
            ], "nehmen", "ist", "darf", "trinken", ["soll", "muss"],
            "machen", "gehen", "hat", ["soll", "muss"], "trinken", "darf",
            "essen", "hat", ["soll", "muss"], "treiben", "machen", "sitzen"
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
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./<?php echo($root); ?>sounds/Reihe 8/r8 E5.mp3"],
                sprite: {
                    "0": [1204, 64564],
                    "1": [8021, 13901],
                    "2": [23281, 13359],
                    "3": [38775, 13204],
                    "4": [53648, 12274]
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
                        $("#" + last).closest("table").find(".tran").show();
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
                di(th);

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

            /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */ $("#chk").on("click", function () {
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
                        };

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


            /* 역동적 입력란 */
            function di(th) {
                var le = 0,
                    mp = 8,
                    l = th.val().length;
                if (l < 5) {
                    var mp = 10;
                }
                if (l >= 20) {
                    var mp = 6;
                }
                if (l < 20) {
                    var mp = 8;
                } else {
                    var mp = 8;
                }

                if (l < 5) {
                    l = 5;
                }
                if (l < 7) {
                    le = l * 2.2;
                } else if (l >= 20) {
                    le = l * 1.45;
                } else if (l >= 5) {
                    le = l * 1.55;
                }
                var w = (le + 1) * mp + "px";
                th.addClass("mx-1");
                th.css("min-width", w);
                th.css("max-width", w);
                th.css("width", w);
            };

            /* 전체 입력란 폭 맞추기 */
            $(".q").each(function () {
                di($(this));
            });

            var pan = new Array();
            pan = [1, 9, 10, 15, 16, 20];
            for (var p = 0; p < pan.length; p++) {
                var pann = "#qst-" + pan[p];
                if ($.isArray(an[(pan[p] - 1)])) {
                    $(pann).val(an[(pan[p] - 1)][0]);
                } else {
                    $(pann).val(an[(pan[p] - 1)]);
                }
                $(pann).addClass("bg-success text-white font-weight-bold");
                $(pann).prop("disabled", true);
            }

        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
