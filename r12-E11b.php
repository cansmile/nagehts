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
                    <br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
            </div>
        </div>
        <div class="row lh250">
            <div class="col-sm-12 col-md-6 col-lg-6 bg-light border border-white">
                <div class="row form-inline">
                    <div class="col-12">
                        1) er – sich Zeit nehmen
                    </div>
                    <div class="col-12">
                        Ich würde mich freuen, wenn <input autocomplete="off" type="text"
                                                           style="max-width: 80px; min-width: 80px;"
                                                           class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3 d-inline"
                                                           placeholder="Antwort" aria-label="Antwort" id="qst-1">
                        <span class="tran"><br/><small>그가 시간이 너 낸다면 기쁠 것 같아요</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray-light border border-white">
                <div class="row form-inline">
                    <div class="col-12">
                        2) sie(Pl.) – mehr Geduld haben
                    </div>
                    <div class="col-12">
                        Es wäre schön, wenn <input autocomplete="off" type="text"
                                                   style="max-width: 80px; min-width: 80px;"
                                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3 d-inline"
                                                   placeholder="Antwort" aria-label="Antwort" id="qst-2">
                        <span class="tran"><br/><small>그들이 좀 더 인내를 가진다면 좋을텐데.</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 bg-light border border-white">
                <div class="row form-inline">
                    <div class="col-12">
                        3) du – mich in Ruhe lassen
                    </div>
                    <div class="col-12">
                        Ich wäre dir dankbar, wenn <input autocomplete="off" type="text"
                                                          style="max-width: 80px; min-width: 80px;"
                                                          class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3 d-inline"
                                                          placeholder="Antwort" aria-label="Antwort" id="qst-3">
                        <span class="tran"><br/><small>네가 나를 가만히 놔두면 감사하겠어</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray-light border border-white">
                <div class="row form-inline">
                    <div class="col-12">
                        4) ich – nicht so viel arbeiten müssen
                    </div>
                    <div class="col-12">
                        Ich wäre froh, wenn <input autocomplete="off" type="text"
                                                   style="max-width: 80px; min-width: 80px;"
                                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3 d-inline"
                                                   placeholder="Antwort" aria-label="Antwort" id="qst-4">
                        <span class="tran"><br/><small>내가 이렇게 많이 일을 할 필요가 없다면 좋겠어</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 bg-light border border-white">
                <div class="row form-inline">
                    <div class="col-12">
                        5) du – abends früher nach Hause kommen
                    </div>
                    <div class="col-12">
                        Ich wäre dankbar, wenn <input autocomplete="off" type="text"
                                                      style="max-width: 80px; min-width: 80px;"
                                                      class="form-control q rounded-0 border border-dark border-bottom-only text-center mx-1 px-2 py-1 t-3 d-inline"
                                                      placeholder="Antwort" aria-label="Antwort" id="qst-5">
                        <span class="tran"><br/><small>네가 저녁에 좀 일찍 귀가한다면 고마울 것 같아.</small></span>
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
    $(".tran").hide();
    var an = new Array();
    var an = [["er sich mehr Zeit nehmen würde.","er sich mehr Zeit nehmen nähme."], "sie mehr Geduld hätten.", ["du mich in Ruhe lassen würdest.", "du mich in Ruhe lassen ließest."], "ich nicht so viel arbeiten müsste.", ["du abends früher nach Hause kommen würdest.", "du abends früher nach Hause kommen kämest."]];


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

    $(".q").on("keyup", function () {
        $(this).removeClass("bg-danger");
        $(this).removeClass("bg-success");
        $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-danger");
        $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-success");
        if (rfchk($(this))) {
            $(this).addClass("text-white fw-bold");
            $(this).addClass("bg-success");
            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
        } else {
            $(this).addClass("text-white fw-bold");
            $(this).addClass("bg-danger");
            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
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
                $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
            } else {
                $(this).addClass("text-white fw-bold");
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
            $(this).removeClass("text-white fw-bold");
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
        $(pann).addClass("bg-success text-white fw-bold");
        $(pann).prop("disabled", true);
        di($(pann));
    }
</script>
</body>

</html>
