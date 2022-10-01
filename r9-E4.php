<?php require_once( "heading.php" ); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken. <br>
                    <small> 빈칸을 채우세요. </small>
                </h2>
                <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]</h3>
            </div>
        </div>
        <div class="row border border-dark p-2 my-2 rounded py-4">
            <div class="fw-bold col-sm-12 col-md-2 col-lg-2"><span
                    class="border border-dark bg-dark text-white p-1 px-2 rounded me-1">Bsp.</span>Julia
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3">eine Halskette
                schenken<br>Sie trägt gern Schmuck.
            </div>
            <div class="col-sm-12 col-md-8 col-lg-7" style="line-height: 200%;">
                <div class="input-group">
                    Man kann ihr eine Halskette schenken, weil <input autocomplete="off" type="text" class="form-control q ps-0 rounded-0 border-bottom-only mx-1 px-2 py-1 border-dark
                            mx-1 mt-2 t-6" aria-label="." id="qst-1">.
                </div>
                <span class="tran"><small>그녀가 액세서리를 좋아하기 때문에 그녀에게 목걸이를 선물할 수
                            있다.</small></span>
            </div>
        </div>
        <div class="row border border-dark p-2 my-2 rounded py-4">
            <div class="fw-bold col-sm-12 col-md-2 col-lg-2">Mina
                und Sujin
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3">einen Reiseführer
                schenken<br>Sie fahren nach Berlin.
            </div>
            <div class="col-sm-12 col-md-8 col-lg-7" style="line-height: 200%;">
                <div class="input-group">
                    Man kann ihnen einen Reiseführer
                    schenken, weil <input autocomplete="off" type="text" class="form-control q ps-0 rounded-0 border-bottom-only mx-1 px-2 py-1 border-dark
                            mx-1 mt-2 t-6" aria-label="." id="qst-2">.
                </div>
                <span class="tran"><small>그들이 베를린으로 가기 때문에, 그들에게 여행 안내서를 선물할
                            수 있다.</small></span>
            </div>
        </div>
        <div class="row border border-dark p-2 my-2 rounded py-4">
            <div class="fw-bold col-sm-12 col-md-2 col-lg-2">Jochen
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3">einen Mülleimer
                schenken<br>Er räumt gern auf.
            </div>
            <div class="col-sm-12 col-md-8 col-lg-7" style="line-height: 200%;">
                <div class="input-group">
                    Man kann ihm einen Mülleimer
                    schenken, weil <input autocomplete="off" type="text" class="form-control q ps-0 rounded-0 border-bottom-only mx-1 px-2 py-1 border-dark
                            mx-1 mt-2 t-6" aria-label="." id="qst-3">.
                </div>
                <span class="tran"><small>그가 청소를 좋아하기 때문에, 그에게 휴지통을 선물할 수
                            있다.</small></span>
            </div>
        </div>
        <div class="row border border-dark p-2 my-2 rounded py-4">
            <div class="fw-bold col-sm-12 col-md-2 col-lg-2">Bernd
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3">eine Krawatte
                schenken<br>Er hat bald ein Vorstellungsgespräch.
            </div>
            <div class="col-sm-12 col-md-8 col-lg-7" style="line-height: 200%;">
                <div class="input-group">
                    Mann kann ihm eine
                    Krawatte schenken, weil <input autocomplete="off" type="text" class="form-control q ps-0 rounded-0 border-bottom-only mx-1 px-2 py-1 border-dark
                            mx-1 mt-2 t-6" aria-label="." id="qst-4">.
                </div>
                <span class="tran"><small>그가 면접을 앞두고 있기 때문에, 그에게 넥타이를 선물할 수
                            있다.</small></span>
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
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col"><span class="tipp">TIPP</span>weil
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center" style="line-height: 250%;">
                        weil은 <strong>종속접속사</strong>로 <span
                            class="border border-dark rounded p-1 px-2 fw-bold"><small>주어(S)
                                        + ··· + 동사(V)</small></span> 종속문에서는 분리
                        동사가 분리되지 않는다.<br><strong>Bsp.</strong> aufraumen
                        --> aufräumt
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["sie gern Schmuck trägt", "sie nach Berlin fahren",
        "er gern aufräumt", "er bald ein Vorstellungsgespräch hat"
    ];
    $(document).ready(function () {
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
            $("#ant-" + $(this).attr("id").substr(4))
                .removeClass("text-danger");
            $("#ant-" + $(this).attr("id").substr(4))
                .removeClass("text-success");
            if (rfchk($(this))) {
                $(this).addClass(
                    "text-white fw-bold");
                $(this).addClass("bg-success");
                $("#ant-" + $(this).attr("id").substr(4))
                    .addClass("text-success");
            } else {
                $(this).addClass(
                    "text-white fw-bold");
                $(this).addClass("bg-danger");
                $("#ant-" + $(this).attr("id").substr(4))
                    .addClass("text-danger");
            }
            if (!$(this).val()) {
                $(this).removeClass("bg-danger");
                $(this).removeClass("bg-success");
                $(this).removeClass(
                    "text-white fw-bold");
            }
            if ($(this).val()) {
                $("#ant-" + $(this).attr("id").substr(4))
                    .show();
                $("#ant-" + $(this).attr("id").substr(4))
                    .text($(this).val());
            } else {
                $("#ant-" + $(this).attr("id").substr(4))
                    .hide();
            }
        });

        $(".q").on("focusin", function () {
            $("#ant-" + $(this).attr("id").substr(4))
                .show();
            if (!$("#ant-" + $(this).attr("id").substr(4))
                .text()) {
                $("#ant-" + $(this).attr("id").substr(4))
                    .text($(this).val());
            }
            if ($("#ant-" + $(this).attr("id").substr(4))
                .text()) {
                if (rfchk($(this))) {
                    $(this).addClass(
                        "text-white fw-bold");
                    $(this).addClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(
                        4)).addClass("text-success");
                } else {
                    $(this).addClass(
                        "text-white fw-bold");
                    $(this).addClass("bg-danger");
                    $("#ant-" + $(this).attr("id").substr(
                        4)).addClass("text-danger");
                }
            }
        });

        $(".q").on("focusout", function () {
            $("#ant-" + $(this).attr("id").substr(4))
                .hide();
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
                $(this).removeClass(
                    "text-white fw-bold");
                $(this).removeClass("bg-success");
            }
        })

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

        /* 전체 입력란 폭 맞추기 */
        $(".q").each(function () {
            di($(this));
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
                    na += $(this).attr("id").substr(
                        4, 1);
                }
            });
            if ($(this).attr("id") == "done") {
            } else if (
                na == "") {
                for (var i = 0; i < an.length; i++) {
                    var oran = $("#qst-" + (i + 1)).val();
                    if (rfchk($("#qst-" + (i + 1)), true)) {
                        $("#qst-" + (i + 1)).addClass(
                            "cr"
                        );
                        $("#qst-" + (i + 1)).removeClass(
                            "rounded-0");
                    } else {
                        $("#qst-" + (i + 1)).val(oran);
                        $("#qst-" + (i + 1)).attr(
                            "disabled", true);
                        $("#qst-" + (i + 1)).addClass(
                            "wa"
                        );
                        $("#qst-" + (i + 1)).removeClass(
                            "rounded-0");
                        if (!$.isArray(an[i])) {
                            $("#qst-" + (i + 1)).after(
                                "<div class=\"ramt-2 t-6\" style=\"vertical-align: text-bottom;\">" +
                                an[i] + "</div>");
                        } else {
                            /* 2 이상인 경우 */
                            var r =
                                "<div class=\"ramt-2 t-6\" style=\"vertical-align: text-bottom;\">";
                            for (var fd = (an[i].length -
                                1); fd >= 0; fd--) {
                                if (fd < (an[i].length -
                                    1)) {
                                    r = r + " / ";
                                }
                                r = r + an[i][fd];
                            }
                            r = r + "</div>";
                            if ($("span.sen").length > 0) {
                                $("#qst-" + (i + 1))
                                    .closest("span.sen")
                                    .after(r);
                            } else {
                                $("#qst-" + (i + 1)).after(
                                    r);
                            }
                        }
                    }
                    if ($("#qst-" + (i + 1)).hasClass(
                        "bg-success")) {
                        ri++;
                    }
                }
                /* 정답 확인 div 상자 배경색 속성 없애기 */
                $(this).removeClass("btn-light ");
                var qa = $(".q").length; /* 전체 문항 수 */
                var qr = $(".bg-success")
                    .length; /* 맞춘 항목 수 */
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
                $(this).addClass("btn-" + cl + " text-" +
                    tcl);
                $(this).html("<h4>" + qa + "문제 중 " + qr +
                    "개를 맞히셨네요!<br>" + st + "</h4>");
                $(this).prop("disabled", true);
                $(".tran").show();
                $(this).attr("id", "done");
            } else {
                alert("모든 문제를 풀어주세요!");
                /* alert(na+"번 문제를 풀어주세요!"); */
            }
            ;
        });
        var pan = new Array();
        /* pan=[1,2,3,4,5,6,7,8,9,10]; */
        pan = [1];
        for (var p = 0; p < pan.length; p++) {
            var pann = "#qst-" + pan[p];
            $(pann).val(an[(pan[p] - 1)]);
            $(pann).addClass(
                "bg-success text-white fw-bold");
            $(pann).prop("disabled", true);
            di($("#qst-" + pan[p]));
        }
    });

</script>
</body>

</html>
