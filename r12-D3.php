<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken.<br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>

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
            <div class="col-sm-12 col-md-6 col-lg-6">1. Ich erzähle euch in meinem ersten Bericht, was ich beim Check-in und nach dem Landen erlebt habe.</div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;" class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1" placeholder="Antwort" aria-label="Antwort" id="qst-1">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">2. Auf den Monitor fand ich die Flugnummer die Abflugzeit sowie auch den Check-In Schalter.</div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;" class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1" placeholder="Antwort" aria-label="Antwort" id="qst-2">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">3. Bevor ich zum Flugsteig kam, musste ich mich einer Sicherheitskontrolle unterziehen.</div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;" class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1" placeholder="Antwort" aria-label="Antwort" id="qst-3">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">4. Als ich dann am Zielflughafen landete, ging ich zuerst einmal Richtung Gepäckausgabe.</div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;" class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1" placeholder="Antwort" aria-label="Antwort" id="qst-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">5. Am entsprechenden Förderband angekommen nahm ich dann mein Gepäck herunter.</div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input autocomplete="off" type="text" style="max-width: 100px; min-width: 100px;" class="form-control q rounded-0 border border-dark border-bottom-only mx-1 px-2 py-1" placeholder="Antwort" aria-label="Antwort" id="qst-5">
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
    $(".tran").hide();
    var an = new Array();
    var an = ["나의 첫 보고서로 체크인할 때와 비행기 도착 후 내가 무엇을 경험 하였는지를 말해 줄께.", "모니터에서 비행기 번호와 출발시간과 체크인 창구(번호)를 찾았다.", "비행기 탑승 전에 나는 보안검사를 통과해야 했다.", "목적지 공항에 도착했을 때, 나는 우선 짐을 찾는 곳으로 갔다.", "나는 정해진 컨베이어 벨트에서 나의 짐을 찾았다."];


    $(document).ready(function () {

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
    });
</script>
</body>

</html>
