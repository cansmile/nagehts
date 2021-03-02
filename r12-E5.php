<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken.<br/>
                    <small> 빈칸을 채우세요. </small>
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
                <h3>
                    [ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼과 Mina의
                        <button type="button"
                                class="btn disabled btn-sm btn-outline-dark">▶
                        </button>
                        버튼은 문제를 풀어야 나타납니다.
                    </small> ]
                </h3>
            </div>
        </div>
        <div class="row lh250">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-11 mx-1">
                        <table class="table table-borderless">
                            <thead class="table-dark">
                            <tr>
                                <th score="col"><strong>Notiz</strong>
                                    <span class="tran"><br/><small>주의</small></span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <li>
                                            sich impfen lassen
                                            <span class="tran"><br><small>예방접종하다</small></span>
                                        </li>
                                        <li>
                                            Reisepass verlängern lassen
                                            <span class="tran"><br><small>여권연장하다</small></span>
                                        </li>
                                        <li>
                                            das Visum erstellen
                                            <span class="tran"><br><small>비자발급하다</small></span>
                                        </li>
                                        <li>
                                            Reise buchen
                                            <span class="tran"><br><small>여행예약하다</small></span>
                                        </li>
                                        <li>
                                            die Tasche packen
                                            <span class="tran"><br><small>짐을 싸다</small></span>
                                        </li>
                                        <li>
                                            das Zimmer reservieren
                                            <span class="tran"><br><small>방을 예약하다</small></span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row form-inline">
                    <div class="col-11 mx-auto border border-dark rounded">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>Hast du dich schon impfen lassen?
                                    <span class="tran"><br><small>예방접종은 했니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="8"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, ich wurde schon geimpft.
                                    <span class="tran"><br><small>네, 예방접종 했어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>Hast du deinen Reisepass verlängern lassen?
                                    <span class="tran"><br><small>너의 여권은 연장했니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="9"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, mein Reisepass
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-1">
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-2">.
                                    <span class="tran"><br><small>네, 저의 여권은 연장되었어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>Und dein Visum?
                                    <span class="tran"><br><small>그리고 너의 비자는?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="10"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, das Visum
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-3">
                                    auch schon
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-4">
                                    .
                                    <span class="tran"><br><small>네, 비자도 이미 발급됐어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </
                                    button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-5">
                                    du die Reise
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-6">
                                    ?
                                    <span class="tran"><br><small>너의 여행은 예약했니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="11"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, die Reise
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-7">
                                    auch schon
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-8">
                                    .
                                    <span class="tran"><br><small>네, 여행도 이미 예약됐어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-9">
                                    du die Tasche
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-10">
                                    ?
                                    <span class="tran"><br><small>짐은 챙겼니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="12"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, die Tasche
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-11">
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-12">
                                    .
                                    <span class="tran"><br><small>네, 짐도 다 쌌어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-13">
                                    du das Zimmer
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-14">
                                    ?
                                    <span class="tran"><br><small>방은 예약했니?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;
                                    <span class="tran">
                                        <button type="button" id="13"
                                                class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                                    </span>
                                </th>
                                <td><strong>Mina:</strong></td>
                                <td>
                                    Ja, das Zimmer
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-15">
                                    <input autocomplete="off" type="text" style="max-width: 80px; min-width: 80px;"
                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3"
                                           placeholder="Antwort" aria-label="Antwort" id="qst-16">
                                    .
                                    <span class="tran"><br><small>네, 방은 예약됐어요.</small></span>
                                </td>
                            </tr>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <button type="button" id="7" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </th>
                                <td><strong>Mutter:</strong></td>
                                <td>Gut! Mina! Dann kann nichts mehr schief gehen, oder?
                                    <span class="tran"><br><small>좋아 미나! 더 이상 확인할 것이 없구나, 그렇지?</small></span>
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

<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["wurde", "verlängert", "wurde", "erstellt", "Hast", "gebucht", "wurde", "gebucht", "Hast", "gepackt", "wurde", "gepackt", "Hast", "reserviert", "wurde", "reserviert"];
    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array(),
        sen = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
        sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
            .html();
    });

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
            src: ["./dev/sounds/Reihe 12/r12 E5.mp3"],
            sprite: {
                "0": [31, 58674],
                "1": [9568, 2289],
                "2": [16475, 2778],
                "3": [24332, 1618],
                "4": [31725, 2278],
                "5": [39601, 2167],
                "6": [46924, 2459],
                "7": [54435, 1549],
                "8": [12491, 2741],
                "9": [19933, 3266],
                "10": [26707, 3638],
                "11": [34807, 3228],
                "12": [42643, 2875],
                "13": [50455, 3158]
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
                $("#ready").hide();
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

                /* 값 확인해보자, io값이 참이면 전체 검사 */
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
                        var m = 1.35;
                    }
                    var w = Math.ceil(th.textWidth() * m) + 'px';
                    console.log(w);

                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
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
                })

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
                                    $("#qst-" + (i + 1)).after("<div class=\"w-100 ra t-6\" style=\"max-width: 100px;\">" + an[i] + "</div>");
                                } else {/* 2 이상인 경우 */
                                    var r = "<div class=\"w-100 ra t-6\" style=\"max-width: 100px;\">";
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
                        ;

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
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
                        $("#0").show();
                    } else {
                        alert("모든 문제를 풀어주세요!");
                    }
                    ;
                });
                var pan = new Array();
                pan = [1, 2, 6, 7, 8, 17];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
                    di($(pann));
                }
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
