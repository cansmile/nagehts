<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken. <br/>
                    <small> 빈칸을 채우세요. </small><br/>
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
                        버튼을 눌러 듣기를 3번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th width="20" class="text-center">
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">1</button>&nbsp;Minsu
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;mit wem gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-1">
                            </div>
                            <div class="input-group">
                                &nbsp;wohin/wo gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-2">
                            </div>
                            <div class="input-group">
                                &nbsp;was unternommen?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-3">
                            </div>
                            <div class="input-group">
                                &nbsp;(nicht)gut? /warum?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-4">
                            </div>
                            <span class="tran">
                                <div class="rounded border border-dark m-1 p-1">
                                    Ich fahre jeden Sommer mit meiner Familie nach Busan, wo meine Großeltern wohnen.<br/>
                                    <small>나는 매년 여름마다 나의 가족과 조부모님이 사시는 부산에 간다.</small><br />
                                    Dort gehe ich gern schwimmen oder liege einfach mal in der Sonne.<br/>
                                    <small>나는 수영을 간다거나 선텐을 하다.</small><br />
                                    Abends mache ich mit meiner Familie Spaziergänge am Strand oder gehe allein aus.<br/>
                                    <small>밤에는 나의 가족과 해변가를 따라 산책을 하거나 혹은 혼자 외출한다.</small><br />
                                    Durch solchen Urlaub kann ich zwar Geld sparen, aber allein ist mir oft langweilig.<br/>
                                    이러한 휴가에서는 경비를 절약할수 있으나 혼자 있는 것이 종종 외롭다.</small><br />
                                    Nächstes Jahr will ich lieber mit meinen Freunden zusammen verreisen.<br/>
                                    <small>내년에는 차라리 나의 친구들과 함께 여행을 가려고 한다.</small><br />
                                </div></span>
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
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">2</button>&nbsp;Timon
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;mit wem gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-5">
                            </div>
                            <div class="input-group">
                                &nbsp;wohin/wo gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-6">
                            </div>
                            <div class="input-group">
                                &nbsp;was unternommen?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-7">
                            </div>
                            <div class="input-group">
                                &nbsp;(nicht)gut? /warum?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-8">
                            </div>
                            <span class="tran">
                                <div class="rounded border border-dark m-1 p-1">
                                    Ich habe mit einer Studentengruppe von meiner Uni an einer Sprachreise nach Dresden teilgenommen.<br/>
                                    <small>나는 여름에 8주동안 미국 방학캠프에서 지도사로 일을 했다.</small><br />
                                    Vormittags hatten wir Sprachkurse und nachmittags gab es interessante Exkursionen.<br/>
                                    <small>이 캠프에는 200여명의 청소년들이 “US-Camp’에 참여하며 대부분 학생들과 대학생을 대상으로 한다.</small><br />
                                    Dadurch konnten wir die Kultur und Geschichte von Dresden sowie anderen Städten näher kennenlernen und unterwegs viel Deutsch sprechen und hören.<br/>
                                    <small>나는 태권도트레이너로 태권도를 가르쳤다.</small><br />
                                    Es war ein unvergessliches Erlebnis für mich.<br/>
                                    <small>이를 통해 나의 영어실력을 향상시킬수 있었고 또한 동시에 돈도 벌을수 있었다.</small><br />
                                </div></span>
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
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">3</button>&nbsp;Heesu
                        </th>
                        <td class="lh250">
                            <div class="input-group">
                                &nbsp;mit wem gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-9">
                            </div>
                            <div class="input-group">
                                &nbsp;wohin/wo gefahren?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-10">
                            </div>
                            <div class="input-group">
                                &nbsp;was unternommen?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-11">
                            </div>
                            <div class="input-group">
                                &nbsp;(nicht)gut? /warum?
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center border-dark col-12 t-6"
                                       style="max-width: 100px; min-width: 150px;" aria-label="." id="qst-12">
                            </div>
                            <span class="tran">
                                <div class="rounded border border-dark m-1 p-1">
                                    Ich habe mit einer Studentengruppe von meiner Uni an einer Sprachreise nach Dresden teilgenommen.<br/>
                                    <small>나는 우리 대학교 학생그룹과 함께 드레스덴 어학연수에 참가 하였다.</small><br />
                                    Vormittags hatten wir Sprachkurse und nachmittags gab es interessante Exkursionen.<br/>
                                    <small>오전에는 언어강좌를 듣고 오후에는 흥미로운 여가프로그램(수학여행)이 있었다.</small><br />
                                    Dadurch konnten wir die Kultur und Geschichte von Dresden sowie anderen Städten näher kennenlernen und unterwegs viel Deutsch sprechen und hören.<br/>
                                    <small>이것을 통해 드래스덴 및 다른 도시들의 문화와 역사를 알수 있었고 중간 중간에 독일어를 많이 말하고 들을 수 있었다.</small><br />
                                    Am Wochenende bin ich mit dem Bus nach Prag und Wien gefahren.<br/>
                                    <small>주말에는 버스로 프라하로 떠났다.</small><br />
                                    Ich habe eine aufregende Zeit voller Abwechslung gehabt und konnte wirklich dabei mein Deutsch verbessern.<br/>
                                    <small>나는 아주 다양한 흥미로운 시간을 보냈고 그것을 통하여 나의 독일어실력을 향상시킬수 있었다.</small><br />
                                    Es war ein unvergessliches Erlebnis für mich.<br/>
                                    <small>이것은 나에게 잊을수 없는 체험이었다.</small><br />
                                </div></span>
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
    var an = ["mit Familie","","","","","","","","","","",""];
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
            src: ["./dev/sounds/Reihe 12/r12 A4.mp3"],
            sprite: {
                "0": [1244, 115097],
                "1": [8829, 40634],
                "2": [51833, 21702],
                "3": [75585, 40756]
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
                pan = [1];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
                }

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

                $("#0").show();
                $(".alert").hide();
            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                $("#cnt-" + last).text(sen[last]);
                if (last == 0) {
                    if (sen[last] == 3) {
                        $(".tran").show();
                        $(".so").each(function () {
                            pa[last] = $("#" + last).html();
                        });
                    }
                } else if (sen[last] == 3) {
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
