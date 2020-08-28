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
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless" style="height: 100%;">
                        <tbody>
                            <tr>
                                <td class="text-center align-middle"><img
                                        src="./dev/images/Reihe 2/Reihe-2-E-1.png" alt="Herkunft"
                                        style="max-width: 100%;  height: auto;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless table-responsive">
                        <tbody>
                            <tr>
                                <th>1.</th>
                                <td><button type="button" id="1"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Peter kommt<span
                                        class="tran"><br><small>피터는
                                            <strong>독일에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon1"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-1">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>2.</th>
                                <td><button type="button" id="2"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Lucia kommt<span
                                        class="tran"><br><small>루시아는
                                            <strong>스페인에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon2"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-2">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>3.</th>
                                <td><button type="button" id="3"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Ivan kommt<span
                                        class="tran"><br><small>이반은
                                            <strong>러시아에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon3"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-3">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>4.</th>
                                <td><button type="button" id="4"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Merve kommt<span
                                        class="tran"><br><small>메릐베는
                                            <strong>터키에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon4"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-4">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>5.</th>
                                <td><button type="button" id="5"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Arthur kommt<span
                                        class="tran"><br><small>아서는
                                            <strong>브라질에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon5"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-5">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>6.</th>
                                <td><button type="button" id="6"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Diana kommt<span
                                        class="tran"><br><small>다이아나는
                                            <strong>그리스에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-6"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon6"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-6">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>7.</th>
                                <td><button type="button" id="7"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Arti kommt<span
                                        class="tran"><br><small>아르티는
                                            <strong>수단에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-7"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon7"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-7">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>8.</th>
                                <td><button type="button" id="8"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Linh kommt<span
                                        class="tran"><br><small>린은
                                            <strong>베트남에서</strong>
                                            왔다.</small></span>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-8"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-8">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>9.</th>
                                <td><button type="button" id="9"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Xiao kommt<span
                                        class="tran"><br><small>샤오는
                                            <strong>중국에서</strong>
                                            왔다.</small></span>
                                </td>
                                <td>
                                    <div class="ant t-6" id="ant-9"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon9"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-9">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>10.</th>
                                <td><button type="button" id="10"
                                        class="so btn btn-outline-dark mr-1 btn-md">▶</button>Vanessa kommt<span
                                        class="tran"><br><small>바네사는
                                            <strong>우크라이나에서</strong>
                                            왔다.</small></span></td>
                                <td>
                                    <div class="ant t-6" id="ant-10"></div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon10"
                                            class="form-control q border-bottom-only rounded-0 px-1 t-6" id="qst-10">
                                        .
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="border border-dark" width="90" rowspan="15">aus</th>
                                <td class="border border-dark">
                                    <button type="button" id="11" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Korea</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="12" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Deutschland</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="13" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    China</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="14" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Brasilien</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="15" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Spanien</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="16" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    England</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="17" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Vietnam</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="18" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Ungarn</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="19" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Österreich</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="20" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Griechenland</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="21" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Polen</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="22" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Japan</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="23" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Amerika</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="24" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Russland</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">…</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="border border-dark" width="90" rowspan="5">aus der</th>
                                <td class="border border-dark">
                                    <button type="button" id="25" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Schweiz</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="26" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Türkei</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="27" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Ukraine</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">…</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="border border-dark" width="90" rowspan="4">aus dem</th>
                                <td class="border border-dark">
                                    <button type="button" id="28" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Iran</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="29" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Irak</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="30" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    Sudan</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">…</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="border border-dark" width="90" rowspan="3">aus den</th>
                                <td class="border border-dark">
                                    <button type="button" id="31" class="so btn btn-outline-dark mr-1 btn-md">▶</button>
                                    U.S.A</td>
                            </tr>
                            <tr>
                                <td class="border border-dark">
                                    <button type="button" id="32" class="so btn btn-outline-dark mr-1 btn-md">▶</button>

                                    Niederlande<strong>n</strong></td>
                            </tr>
                            <tr>
                                <td class="border border-dark">…</td>
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
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>

    <script>
        $("td").addClass("py-2 align-middle");
        $("th").addClass("align-middle");
        $(".tran").hide();
        var an = new Array();
        var an = ["aus Deutschland", "aus Spanien", "aus Russland",
            "aus der Türkei", "aus Brasilien",
            "aus Griechenland", "aus dem Sudan", "aus Vietnam", "aus China",
            "aus der Ukraine"
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
                src: [
                    "./dev/sounds/Reihe 2/r2 E1.mp3"
                ],
                sprite: {
                    "1": [1288, 4190],
                    "2": [8563, 4944],
                    "3": [16677, 4597],
                    "4": [24870, 4424],
                    "5": [32801, 4619],
                    "6": [39927, 4387],
                    "7": [48426, 4852],
                    "8": [57231, 3858],
                    "9": [64526, 4443],
                    "10": [72224, 4653],
                    "11": [78831, 1873],
                    "12": [81757, 2059],
                    "13": [85171, 1814],
                    "14": [88213, 2025],
                    "15": [91287, 2227],
                    "16": [94585, 2038],
                    "17": [97643, 1861],
                    "18": [100519, 2013],
                    "19": [103664, 2110],
                    "20": [106819, 2052],
                    "21": [109906, 1967],
                    "22": [113151, 2003],
                    "23": [116197, 2515],
                    "24": [119576, 1858],
                    "25": [122615, 1944],
                    "26": [125564, 2179],
                    "27": [128294, 2381],
                    "28": [131666, 2176],
                    "29": [134690, 2223],
                    "30": [138105, 1693],
                    "31": [140630, 2432],
                    "32": [144418, 2591]
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
                    /* 음성 준비되면 HV 버튼 나타내기 */
                    $("#0").show();
                    $(".alert").hide();

                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");

                        if (($("div#last").text() ==
                                "" || t.text() ==
                                "❚❚") && !t
                            .hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;

                            last = ti;

                            $("#cnt-" + ti).text(
                                sen[ti]);
                        } else if (last == ti &&
                            nagehts.playing($(
                                    "div#last")
                                .text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(
                                sen[ti]);
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
                                    $("#qst-" + (i + 1)).addClass(
                                        "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1"
                                        );
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
                            } /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            checkHeight();
                        } else {
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        };
                    })

                    var pan = new Array();
                    /* pan=[1,2,3,4,5,6,7,8,9,10]; */
                    pan = [5, 9, 10];
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass(
                            "bg-success text-white font-weight-bold");
                        $(pann).prop("disabled", true);
                        /* $(pann).closest("tr").find(".tran").show(); */
                    }



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
