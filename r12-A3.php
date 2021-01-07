<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Was ist wichtig für sie? Ergänzen Sie die Verben in der richtigen Form. <br/>
                    <small> 무엇이 중요할까요? 동사를 알맞은 형태로 써넣으세요. </small><br/>
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
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">번호</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 py-2 lh250">
                <span class="wd">machen</span>
                <span class="wd">besichtigen</span>
                <span class="wd">kennenlernen</span>
                <span class="wd">treiben</span>
                <span class="wd">machen</span>
                <span class="wd">liegen</span>
                <span class="wd">fahren</span>
                <span class="wd">ausgeben</span>
                <span class="wd">sparen</span>
                <span class="wd">haben</span>
                <span class="wd">unternehmen</span>
                <span class="wd">machen</span>
                <span class="wd">anssehen</span>
                <span class="wd">speisen</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">1</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Wir
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                                                    py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-1">
                                gern Städtereisen.
                            </div>
                            <span class="tran"><br/><small>우리는 도시 여행을 좋아한다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Dabei
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-2">
                                wir viele Sehenswürdigkeiten.
                            </div>
                            <span class="tran"><br/><small>거기에서 우리는 많은 명소들을 구경한다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">2</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Für mich ist wichtig, Kultur und auch Leute
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 mr-0 pr-0 text-right border-dark t-6"
                                       style="max-width: 30px; min-width: 50px;" aria-label="." id="qst-3">zu
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 ml-0 pl-0 text-left border-dark t-6"
                                       style="max-width: 30px; min-width: 50px;" aria-label="." id="qst-4">.
                            </div>
                            <span
                                class="tran"><br/><small>나에게 문화와 사람들을 알아가는 것은 매우 중요하다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                Dazu besuche ich die berühmten Dome und Paläste.
                            </div>
                            <span class="tran"><br/><small>그것을 위해 나는 유명한 대성당과 성을 방문한다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">3</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Ich
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-5">gern
                                Wassersport, wie z.B. schwimmen tauchen.
                            </div>
                            <span class="tran"><br/><small>나는 수영이나 다이빙 같은 수중 스포츠 하기를 좋아한다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Und ich
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-6">gern am
                                Strand
                                in der Sonne und genieße das Wellenrauschen.
                            </div>
                            <span
                                class="tran"><br/><small>그리고 해변에서 태양 아래에 누워 파도 소리를 듣는다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            Das ist wie im Paradies!
                            <span class="tran"><br/><small>이것은 마치 낙원에 있는 것과 같다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">4</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Wir
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-7">jedes Jahr
                                ins Allgäu. Wir lieben die Wanderungen in den Bergen, aber auch Bungee-Jumping und
                                Trekkingtouren.
                            </div>
                            <span
                                class="tran"><br/><small>우리는 매년 알고이에 간다. 우리는 산 속을 산책하고, 번지점프와 트래킹 투어를 사랑한다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">5</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Meine Familie
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-8">mit dem
                                Wohnwagen Campingurlaub.
                            </div>
                            <span class="tran"><br/><small>나의 가족은 캠핑카로 캠핑 휴가를 간다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Dafür brauchen wir nicht viel Geld
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-9">
                                &nbsp;und können daher viel Geld
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-10">.
                            </div>
                            <span class="tran"><br/><small>이를 위해 우리는 많은 돈을 지출할 필요가 없으며 많은 돈을 절약할 수 있다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">6</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Ich möchte im Urlaub gern nur Zeit für meine Frau und meine Kinder
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-11">.
                            </div>
                            <span class="tran"><br/><small>나는 휴가 때 나의 아내와 자녀들을 위해서만 시간을 갖고 싶다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Wir wollen viel gemeinsam
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-12">, wie z.B.
                                schöne Ausflüge in die Berge machen.
                            </div>
                            <span class="tran"><br/><small>우리는 산으로 소풍을 가는 등 함께 많은 시간을 보낼 것이다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">7</button>
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Ich bevorzuge eine Gruppenreise, da man viele Hauptsehenswürdigkeiten
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-13">kann.
                            </div>
                            <span class="tran"><br/><small>나는 여러 주요 명소들을 볼 수 있는 단체 여행을 선호한다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th width="20" class="text-center">&nbsp;</th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;Außerdem
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-14">
                                &nbsp;man einen Halt am einheimischen Bazaar und
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-15">in
                                gehobenen Restaurants.
                            </div>
                            <span class="tran"><br/><small>그 외에도 토속적인 재래시장을 가고 고급 레스토랑에서 식사한다.</small></span>
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
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["machen", "besichtigen", "kennen", "lernen", "treibe", "liege", "fahren", "macht", "auszugeben", "sparen", "haben", "unternehmen", "ansehen", "macht", "speist"];
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
            src: ["./dev/sounds/Reihe 12/r12 A3.mp3"],
            sprite: {
                "0": [205, 100970],
                "1": [9027, 8381],
                "2": [18820, 10762],
                "3": [30318, 14968],
                "4": [47020, 10851],
                "5": [59029, 11676],
                "6": [71604, 13791],
                "7": [86661, 14615]
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
                                        "<div class=\"d-block ra\" style=\"max-width: 100px; min-width: 150px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"d-block ra\" style=\"max-width: 100px; min-width: 150px;\">";
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
                var pan = new Array();
                pan = [1, 9, 14, 15];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
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
                        var m = 1.15;
                    }
                    var w = Math.ceil(th.textWidth() * m) + 'px';
                    console.log(w);

                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
                };

                $("#0").show();
                $(".alert").hide();
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
                    $("#" + last).closest("table").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
