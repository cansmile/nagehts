<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken. <br>
                    <small> 빈칸을 채우세요. </small>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-8"><img src="./dev/images/Reihe 10/Reihe-10-A3-1.png"
                                    alt="Entschuldigung, wo ist das Café Dornbusch?"
                                    style="max-width: 100%; height: auto;"></div>
            <div class="col-4">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col"><span class="tipp">TIPP</span>Wo
                            (+Dat)? <small>어디에 (3격)</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="lh250">
                            neben+ (dem, der) ...<br>vor + (dem, der)
                            ...<br>zwischen + (dem, der) ...<br>hinter :
                            (dem, der)<br>an der Ecke ...<br>in der ...
                            Straße / Gasse<br>in dem ... Weg<br>links /
                            rechts<img src="./dev/images/Reihe 10/Reihe-10-F.png" alt="TIPP"
                                       style="max-width: 100%; height: auto;"><strong>Wechselpräpositionen</strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th colspan="2" scope="col" class="h4 bg-light text-center">
                            <small>Dialog 1</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Entschuldigung, wo ist das Café Dornbusch,
                            bitte ?
                            <span class="tran"><br><small>실례합니다, 도른부슈
                                            카페가 어디에 있습니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                       style="max-width: 100px;" aria-label="." id="qst-1">dem Kino
                                Megabox und dem Restaurant Maredo.
                            </div>
                            <span class="tran"><br><small>메가박스 영화관과 마레도
                                            레스토랑 사이에 있습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Und das Schwimmbad, wo ist das?
                            <span class="tran"><br><small>그리고 수영장은
                                            어디입니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                       style="max-width: 100px;" aria-label="." id="qst-2">dem
                                Tennisplatz im Park. Das ist <input autocomplete="off" type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                                                    style="max-width: 100px;" aria-label="." id="qst-3">der
                                Brechtstraße.
                            </div>
                            <span class="tran"><br><small>공원 안 테니스장 옆에
                                            있습니다. 브레히트슈트라세에 있습니다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th colspan="2" scope="col" class="h4 bg-light text-center">
                            <small>Dialog 2</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Entschuldigung, wo kann man hier
                            übernachten? Gibt es in der Nähe ein Hotel?
                            <span class="tran"><br><small>실례합니다, 이곳에선
                                            어디서 묵을 수 있습니까? 근처에 호텔이
                                            있습니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                       style="max-width: 100px;" aria-label="." id="qst-4">Hotel
                                Augustin.
                            </div>
                            <span class="tran"><br><small>호텔
                                            아우구스틴에서요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Wo ist das, bitte?
                            <span class="tran"><br><small>어디인가요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                Das ist<input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only
                                        mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                              style="max-width: 100px;" aria-label="." id="qst-5">der
                                Mannesstraße,<input autocomplete="off" type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                                    style="max-width: 100px;" aria-label="." id="qst-6">der
                                Buchhandlung.
                            </div>
                            <span class="tran"><br><small>서점 뒤 만네스슈트라세에
                                            있습니다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th colspan="2" scope="col" class="h4 bg-light text-center">
                            <small>Dialog 3</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                Entschuldigung, wie komme ich denn<input autocomplete="off" type="text" class="form-control q
                                        rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                                                         style="max-width: 100px;" aria-label="."
                                                                         id="qst-7">Blumenladen Schön?
                            </div>
                            <span class="tran"><br><small>실례합니다, 쉔 꽃집에
                                            어떻게 가나요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                Der ist<input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only
                                        mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                              style="max-width: 100px;" aria-label="." id="qst-8">der Berliner
                                Straße links.<input autocomplete="off" type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                                    style="max-width: 100px;" aria-label="." id="qst-9">der Ecke
                                ist er.
                            </div>
                            <span class="tran"><br><small>베를리너슈트라세 왼쪽에
                                            있습니다. 그 꽃집은 모퉁이에
                                            있습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Vielen Dank.
                            <span class="tran"><br><small>대단히
                                            감사합니다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th colspan="2" scope="col" class="h4 bg-light text-center">
                            <small>Dialog 4</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                Verzeihung, ich suche eine Post. Gibt es
                                eine in der Nähe?
                                <span class="tran"><br><small>실례합니다,
                                                우체국을 찾고 있습니다. 근처에
                                                있습니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                Ja, gehen Sie hier die Haupstraße immer
                                geradeaus, dann links,<input autocomplete="off" type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                                             style="max-width: 100px;" aria-label="." id="qst-10">dem
                                Reisebüro.
                            </div>
                            <span class="tran"><br><small>네, 여기
                                            하우프트슈트라세에서 직진한 후 좌회전하세요, 여행사
                                            옆입니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                        </th>
                        <td class="lh250">
                            Vielen Dank.
                            <span class="tran"><br><small>대단히
                                            감사합니다.</small></span>
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
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $("#0_p").hide();

    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["Zwischen", ["Neben", "neben"], "in", "Im", "in", "hinter", "zum", "in",
        "An", "neben"
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
        } /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 10/r10 A3.mp3"],
            sprite: {
                "0": [339, 77055],
                "1": [15649, 3374],
                "2": [18995, 3815],
                "3": [22469, 2851],
                "4": [24790, 4556],
                "5": [33786, 5400],
                "6": [39013, 2037],
                "7": [40803, 1746],
                "8": [42331, 3842],
                "9": [49411, 3992],
                "10": [53096, 4555],
                "11": [57407, 1561],
                "12": [64419, 5026],
                "13": [69164, 6894],
                "14": [75772, 1611]
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


                /* 역동적 입력란 */
                $.fn.textWidth = function (text, font) {
                    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
                    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
                    return $.fn.textWidth.fakeEl.width();
                };

                function di(th) {
                    if (th.val().length < 10) {
                        var m = 1.5;
                    }
                    if (th.val().length < 5) {
                        var m = 2;
                    }
                    if (th.val().length < 3) {
                        var m = 3;
                    }
                    if (th.val().length >= 10) {
                        var m = 1.15;
                    }
                    var w = Math.ceil(th.textWidth() * m) + 'px';
                    console.log(w);

                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
                };


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
                    if ($(this).attr("id") == "done") {
                    } else if (na == "") {
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
                                        "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">";
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
                    }
                    ;
                });
                var pan = new Array();
                pan = [];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
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
