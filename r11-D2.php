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
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">번호
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina ist zu ihrer Sprachreise nach Dresden geflogen. Das war ihr
                erster Flug. Daher berichtet sie ihren Freunden darüber. Ergänzen Sie die Lücken. Bilden Sie Sätze
                entweder im Präteritum, im Perfekt oder im Passiv.
                <span class="tran font-weight-bold">&nbsp;<small>미나는 드레스덴으로 어학연수를 떠났습니다. 이것이 그녀의 첫 번째 비행이었습니다. 그래서 그녀는 그녀의 친구들에게 이것에 대해 알려줍니다. 빈칸을 채우세요. 과거형, 현재완료, 수동태 중에 알맞게 골라 문장을 완성하세요.</small><br/></span>
            </div>
        </div>
        <div class="row lh250">
            <div class="col-sm-12 col-md-6 col-lg-6 h5 text-center">
                Aktivsätze
                <span class="tran"><br><small>능동문</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 h5 text-center">
                Passivsätze
                <span class="tran"><br><small>수동문</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-2">1</button>
                Dort hat man mich eingecheckt und ich habe mein Gepäck aufgegeben.
                <span class="tran"><br/><small>어떤 사람이 나를 체크인하고 나의 짐을 부쳐주었다.</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="7"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-1">
                        </div>
                        <span class="tran"><small>거기에서 나는 체크인되고 나의 짐은 부쳐졌다</small></span>
                    </div>
                </div></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-2">2</button>
                Man hat mir die Bordkarte ausgehändigt.
                <span class="tran"><br/><small>어떤 사람이 나의 탑승권을 넘겨주었다.</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="8"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-2">
                        </div>
                        <span class="tran"><small>탑승권이 나에게 넘겨졌다.</small></span>
                    </div>
                </div></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-2">3</button>
                Man hat die Fluggäste aufgerufen.
                <span class="tran"><br/><small>어떤 사람이 탑승객들을 호명했다.</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="9"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-3">
                        </div>
                        <span class="tran"><small>탑승객들이 호명되었다.</small></span>
                    </div>
                </div></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1 px-2">4</button>
                Während des Flugs hat man uns einige Snacks und Getränke angeboten.
                <span class="tran"><br/><small>어떤사람이 비행 동안 우리에게 약간의 스낵과 음료가 제공하였다.</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="10"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-4">
                        </div>
                        <span class="tran"><small>비행 동안 우리에게 약간의 스낵과 음료가 제공되었다.</small></span>
                    </div>
                </div></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1 px-2">5</button>
                Vor Beginn des Abflugs haben die Flugbegleiterinnen einige Hinweise zum richtigen Anschnallen
                <span class="tran"><br/><small>비행 출발에 앞서 승무원들이 올바른 안전벨트 기능에 대한 주의사항을 주었다.</small></span>
                gegeben.
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="11"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-5">
                        </div>
                        <span class="tran"><small>비행 출발에 앞서 승무원들에 의해 올바른 안전벨트 기능에 대한 주의사항이 주어졌다.</small></span>
                    </div>
                </div></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-2">6</button>
                Man hat mich gefragt , ob ich etwas zu verzollen hätte.
                <span class="tran"><br/><small>어떤 사람이 관세 신고할 것이 있는지 나에게 물었다.</small></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-1">
                                <span class="tran">
                                                <button type="button" id="12"
                                                        class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                                            </span>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" style="min-width: 100%;"
                                   class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1 t-3"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-6">
                        </div>
                        <span class="tran"><small>관세 신고할 것이 있는지 나에게 물어졌다.</small></span>
                    </div>
                </div></div>

        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
        <div class="row">
            <div class="col-12 lh250"><span class="tipp">TIPP</span>독일어에서 위의 문장들에서와 같이 누가 하느냐 보다 행해지는 사건이나 일이 중요할 때
                일반적으로 능동태의 문장의 주어는 man (어떤 사람이)으로 표현되고, 이런 경우 수동태의 문장이 더
                자연스럽다.
            </div>
        </div>
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
    var an = ["Dort wurde ich eingecheckt und mein Gepäck wurde aufgegeben.", "Die Bordkarte wurde mir ausgehändigt.", "Die Fluggäste wurden aufgerufen.", "Während des Flugs wurden uns einige Snacks und Getränke angeboten.", "Vor Beginn des Abflugs wurden von den Flugbegleiterinnen einige Hinweise zum richtigen Anschnallen gegeben.", "Ich wurde gefragt , ob ich etwas zu verzollen hätte."];
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
            src: ["./dev/sounds/Reihe 11/r11 D2.mp3"],
            sprite: {
                "0": [169, 60852],
                "1": [9500, 7236],
                "2": [17842, 5989],
                "3": [25340, 5328],
                "4": [32035, 7697],
                "5": [41541, 9663],
                "6": [52519, 6542],
                "7": [64034, 6634],
                "8": [72067, 5388],
                "9": [79232, 5385],
                "10": [86126, 7328],
                "11": [95498, 9872],
                "12": [107816, 5989]
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
                    $("#" + last).closest("div").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });
</script>
</body>

</html>
