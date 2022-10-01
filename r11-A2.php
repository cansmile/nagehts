<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Was kostet weniger oder mehr? Was ist billiger oder teurer?<br/>
                    <small> 무엇이 더 싸거나 비싼가요? </small><br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">번호</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 py-2 lh250">
                <span class="wd">im Vergleich zu</span>
                <span class="wd">Kilo</span>
                <span class="wd">mehr</span>
                <span class="wd">teurer</span>
                <span class="wd">die</span>
            </div>
        </div>
        <div class="row border border-dark rounded-2 py-3">
            <div class="col-12 h5">
                <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                z.B.: 1 Kilo Pfirsiche 1,99 Euro vs. 1 Kilo Erdbeeren 4.99 Euro
                <span class="tran"><small>z.B.: 복숭아 1kg 1,99 유로 vs. 딸기 1kg 4.99 유로</small></span>
            </div>
            <div class="col-12 mt-2">
                <span class="text-dark me-2 h-100">□</span>Was kosten die Pfirsiche?
                <span class="tran"><small>복숭아는 얼마인가요?</small></span>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-dark me-2 h-100">◇</span><input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-1"> kosten 1,99 Euro pro <input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-2">.
                    <span class="tran"><small>1 킬로그램에 1,99 유로예요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <span class="text-dark me-2 h-100">□</span>Was kosten die Erdbeeren im Vergleich zu den Pfirsichen?
                <span class="tran"><small>복숭아에 비해 딸기는 얼마인가요?</small></span>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-dark me-2 h-100">◇</span><input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-3"> kosten 4,99 Euro pro <input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-4">.
                    <span class="tran"><small>1 킬로그램에 4,99 유로예요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-white me-2">◇</span>
                    <input autocomplete="off" type="text"
                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                           style="max-width: 100px; min-width: 150px;"
                           aria-label="." id="qst-5"> den Pfirsichen kosten die Erdbeeren <input autocomplete="off"
                                                                                                 type="text"
                                                                                                 class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                                                                                 style="max-width: 100px; min-width: 150px;"
                                                                                                 aria-label="."
                                                                                                 id="qst-6">.
                    <span class="tran"><small>복숭아에 비해 딸기가 값이 더 나가요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-white me-2">◇</span>
                    oder : <input autocomplete="off" type="text"
                                  class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                  style="max-width: 100px; min-width: 150px;"
                                  aria-label="." id="qst-7"> den Pfirsichen sind die Erdbeeren<input autocomplete="off"
                                                                                                     type="text"
                                                                                                     class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                                                                                     style="max-width: 100px; min-width: 150px;"
                                                                                                     aria-label="."
                                                                                                     id="qst-8">.
                    <span class="tran"><small>또는: 복숭아에 비해 딸기가 더 비싸요.</small></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 h4 mt-5">
                <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                Vergleichen Sie wie im Beispiel mit anderen Lebensmitteln.
                <span class="tran"><small>보기와 같이 다른 식료품과 비교해보세요.</small></span></div>
            <div class="col-12">
                <div class="row">
                    <div class="col my-2 py-2 lh250">
                        <span class="wd">billiger</span>
                        <span class="wd">Flasche</span>
                        <span class="wd">im Vergleich zur</span>
                        <span class="wd">weinger</span>
                        <span class="wd">die</span>
                    </div>
                </div>
            </div>
            <div class="col-12 h5">
                1 Flasche Limonade 1,49 Euro vs. 1 Flasche Vollmilch 1,07 Euro
                <span class="tran"><small>레몬에이드 1병 1,49 유로 vs. 전유 1병 1,07 유로</small></span>
            </div>
            <div class="col-12 mt-2">
                <span class="text-dark me-2 h-100">□</span>Was kostet die Limonade?
                <span class="tran"><small>레몬에이드는 얼마인가요?</small></span>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-dark me-2 h-100">◇</span><input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-9"> kostet 1,49 Euro pro <input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-10">.
                    <span class="tran"><small>한 병에 1,49 유로예요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <span class="text-dark me-2 h-100">□</span>Was kostet die Vollmilch im Vergleich zur Limonade?
                <span class="tran"><small>레몬에이드에 비해 전유는 얼마인가요?</small></span>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-dark me-2 h-100">◇</span><input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-11"> kostet 1,07 Euro pro <input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-12">.
                    <span class="tran"><small>한 병에 1,07유로예요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-white me-2">◇</span>
                    <input autocomplete="off" type="text"
                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                           style="max-width: 100px; min-width: 150px;"
                           aria-label="." id="qst-13"> Limonade kostet die Vollmilch <input autocomplete="off"
                                                                                           type="text"
                                                                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                                                                           style="max-width: 100px; min-width: 150px;"
                                                                                           aria-label="."
                                                                                           id="qst-14">.
                    <span class="tran"><small>레몬에이드에 비해 전유는 값이 덜 나가요.</small></span>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="input-group"><span class="text-white me-2">◇</span>
                    oder: <input autocomplete="off" type="text"
                                 class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                 style="max-width: 100px; min-width: 150px;"
                                 aria-label="." id="qst-15"> Limonade ist die Vollmilch <input
                        autocomplete="off" type="text"
                        class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                        style="max-width: 100px; min-width: 150px;"
                        aria-label="." id="qst-16">.
                    <span class="tran"><small>또는: 레몬에이드에 비해 전유는 더 싸요.</small></span>
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
        <div class="row">
            <div class="col-12">
                <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                <span class="tipp mr-2">TIPP</span>Numerus der Nomen&nbsp;<span
                    class="tran"><br><small>명사의 수</small></span></div>
        </div>
        <div class="col-12">
            <table class="table table-borderless table-striped table-">
                <thead class="table-light text-center">
                <tr>
                    <th class="w-25" scope="col">&nbsp;</th>
                    <th class="w-25" scope="col">복수형어미</th>
                    <th class="w-25" scope="col">단수</th>
                    <th class="w-25" scope="col">복수</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="table-light text-center align-middle" scope="row" rowspan="4">복수형이 있는 명사</th>
                    <td class="text-center fw-bold">(“)-e</td>
                    <td>der Kopfsalat<br/>
                        der Pfirsich<br/>
                        das Vollkornbrot
                    </td>
                    <td>die Kopfsalate<br/>
                        die Pfirsiche<br/>
                        die Vollkornbrote
                    </td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">(“)-er</td>
                    <td>das Ei</td>
                    <td>das Ei</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">-n/-en</td>
                    <td>die Erdbeere<br/>
                        die Gurke<br/>
                        die Kartoffel<br/>
                        die Bratpfanne
                    </td>
                    <td>die Erdbeeren<br/>
                        die Gurken<br/>
                        die Kartoffeln<br/>
                        die Bratpfannen
                    </td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">-s</td>
                    <td>das Lachsfilet</td>
                    <td>die Lachsfilets</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-striped table-">
                <thead class="table-light text-center">
                <tr>
                    <th class="table-light w-25" scope="col">&nbsp;</th>
                    <th class="text-primary w-25" scope="col">m.</th>
                    <th class="text-purple w-25" scope="col">n.</th>
                    <th class="text-danger w-25" scope="col">f.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="table-light text-center align-middle" scope="row">복수형을 쓰지 않는명사</th>
                    <td class="text-primary">der Paprika<br/>
                        der Pfeffer<br/>
                        der Schnittkäse<br/>
                        der Speisequark
                    </td>
                    <td class="text-purple">das Schweinehackfleisch</td>
                    <td class="text-danger">die Butter<br/>
                        die Leberwurst<br/>
                        die Limonade<br/>
                        die Schokolade<br/>
                        die Seife<br/>
                        die Vollmilch
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
</body>
<script>
    $("#0").hide();
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["Die", "Kilo", "Die", "Kilo", "Im Vergleich zu", "mehr", "Im Vergleich zu", "teuer", "die", "Flasche", "die", "Flasche", "Im Vergleich zur", "weinger", "Im Vergleich zur", "billiger"];
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
            src: ["./dev/sounds/Reihe 11/r11 A2.mp3"],
            sprite: {
                "0": [309, 68943],
                "1": [9998, 30979],
                "2": [41287, 28168],
                "3": [69765, 101545]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"fw-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
                console.log("다시 읽어주세요!");
            },
            onload: function () {/* 음성 준비되면 HV 버튼 나타내기 */
                $("#0").show();
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
                }

                $(".q").on("keyup", function () {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-success");
                    if (rfchk($(this))) {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass(
                            "text-success");
                    } else {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass(
                            "text-danger");
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
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white fw-bold");
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
                                        "<div class=\"w-100 ra\" style=\"max-width: 100px; min-width: 150px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"w-100 ra\" style=\"max-width: 100px; min-width: 150px;\">";
                                    for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                        if (fd < (an[i].length - 1)) {
                                            r = r + " / ";
                                        }
                                        r = r + an[i][fd];
                                    }
                                    r = r + "</div>";
                                    if ($("span.sen").length > 0) {
                                        $("#qst-" + (i + 1)).closest("span.sen").after(r);
                                    } else $("#qst-" + (i + 1)).after(r);
                                }
                            }
                            if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                                ri++;
                            }
                        }

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $("input.bg-success").length; /* 맞춘 항목 수 */
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
                nagehts.volume(0);
                var pan = new Array();
                pan = [2, 4, 5, 6, 7];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white fw-bold");
                    $(pann).prop("disabled", true);
                }
                nagehts.volume(1.0);

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
                    var w = Math.ceil(th.textWidth() * m);
                    if (w < 100) {
                        w = 100;
                    } else {
                        w = w + 'px';
                    }

                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
                };

                $("#0").show();
                $("#ready").hide();
                $(".q").each(function () {
                    $(this).focusout();
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
                    $("#" + last).closest(".row").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>

</html>
