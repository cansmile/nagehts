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
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina ist zur Teilnahme am Sprachkurs auf dem Frankfurter Flughafen
                gelandet. Sie hat bereits zu Hause eine Bahnkarte gebucht. Schauen Sie sich die Bahnkarte an und
                antworten Sie bitte auf die Fragen.
                <span class="tran font-weight-bold"><br/><small>미나는 어학코스에 참여하기 위해 프랑크푸르트 공항에 내렸습니다. 그녀는 이미 집에서 기차표를 예약했습니다. 아래 기차표를 보고 질문에 답하세요.</small><br/></span>
            </div>
        </div>
        <div class="row lh250">
            <div class="col-12">
                <img src="./dev/images/Reihe 12/Reihe-12-C1.png" alt="Bahnkartenreservierung"
                     style="max-width: 100%; height: auto;">
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Wann fährt der Zug von Frankfurt ab?
                                <span class="tran"><br><small>기차가 언제 프랑크푸르트를 출발합니까? </small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            Um <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                      class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                      placeholder="Antwort" aria-label="Antwort" id="qst-1"> Uhr
                        </div>
                        <span class="tran">
                            <button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Wann kommt der Zug in Dresden an?
                                <span class="tran"><br><small>기차가 언제 드레스덴에 도착합니까? </small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            Um <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                      class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                      placeholder="Antwort" aria-label="Antwort" id="qst-2"> Uhr
                        </div>
                        <span class="tran">
                            <button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Wo muss man umsteigen?
                                <span class="tran"><br><small>어디에서 환승해야 합니까?</small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            In <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                      class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                      placeholder="Antwort" aria-label="Antwort" id="qst-3">
                        </div>
                        <span class="tran">
                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Wie lange dauert die Fahrt?
                                <span class="tran"><br><small>기차시간은얼마나 소요됩니까?</small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-4"> Stunde
                            <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-4"> Minuten
                        </div>
                        <span class="tran">
                            <button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Was kostet eine Fahrkarte?
                                <span class="tran"><br><small>기차표 가격은 얼마입니까?</small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 lh350">
                        <div class="input-group">
                            <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-5">
                            EUR.
                        </div>
                        <div class="input-group">
                            Im Sparangebot
                            <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-5">
                            EUR.
                        </div>
                        <span class="tran">
                            <button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Auf welchem Gleis fährt der Zug ab?
                                <span class="tran"><br><small>기차는 몇 번 선로에서 출발합니까? </small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            Auf Gleis <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-6">
                        </div>
                        <span class="tran">
                            <button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 my-2">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            </div>
                            <div class="col-9">
                                Auf welchem Gleis kommt der Zug in Dresden an?
                                <span class="tran"><br><small>기차는 드레스덴에서 몇 번 선로에 도착합니까?</small></span></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="input-group">
                            Auf Gleis <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t_add_6"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-7">
                        </div>
                        <span class="tran">
                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                        </span>
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
    var an = ["16.13", "20.34", "Leipzig", "4", "21", "92,60", "59,90", "4", "1"];
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
            src: ["./dev/sounds/Reihe 12/r12 C2.mp3"],
            sprite: {
                "0": [366, 80750],
                "1": [8063, 3194],
                "2": [12875, 3098],
                "3": [17590, 2602],
                "4": [22112, 2520],
                "5": [26154, 2905],
                "6": [30869, 2616],
                "7": [35487, 3482],
                "8": [41934, 2827],
                "9": [46750, 3213],
                "10": [52373, 1937],
                "11": [56854, 3507],
                "12": [63079, 9229],
                "13": [74187, 2162],
                "14": [78623, 2377]
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

                /* 역동적 입력란 */
                function di(th) {
                    var le = 0, mp = 8, l = th.val().length;
                    if (l < 5) {
                        var mp = 10;
                    } else if (l > 30) {
                        var mp = 6;
                    } else if (l < 30) {
                        var mp = 8;
                    } else {
                        var mp = 8;
                    }
                    if (l >= 5) {
                        le = l;
                    } else {
                        le = 5;
                    }
                    var w = (le + 1) * mp + "px";
                    th.addClass("mx-1");
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
                        ; /* 정답 확인 div 상자 배경색 속성 없애기 */
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
                pan = [1];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
                    di($(pann));
                }
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
                    $("#" + last).closest(".row").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });
</script>
</body>

</html>
