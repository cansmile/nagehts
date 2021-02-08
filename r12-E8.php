<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md t-3 btn-outline-dark itm so" id="1">
                    Wählen Sie den Zielort aus. Gibt es mehrere Reisemöglichkeiten, wählen Sie den gewünschten Reiseweg
                    aus. Geben Sie dann ein, wie viele Personen reisen.<span class="tran"><br/><small>목적지를 선택하세요. 몇 가지 여행의 선택사항이 있습니다. 원하는 여정을 선택하시고, 몇 명인지 입력하세요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md t-3 btn-outline-dark itm so" id="2">
                    Gern geschehen. Einen angenehmen Aufenthalt in Deutschland!<span class="tran"><br/><small>천만에요. 독일에서 편안히 머무시길!</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md t-3 btn-outline-dark itm so" id="3">
                    Achja? Dann eben ohne Ermäßigung. Wenn der Preis dann angezeigt wird, drücken Sie auf
                    „Bezahlen“.<span class="tran"><br/><small>그러면 할인(아이, 학생, 그룹)을 선택할 필요가 없습니다. 가격이 표시되면, “지불”을 누르세요. 어떻게 지불하시겠습니까? 체크카드, 신용카드 혹은 현금의 지불방법을 선택해주세요?</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md t-3 btn-outline-dark itm so" id="4">
                    Na sehen Sie? Hier ist Ihre Bahnkarte. Hier unten können Sie sie entnehmen.<span
                        class="tran"><br/><small>좋습니다. 여기 기차표가 있습니다. 기차표를 뽑으세요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md t-3 btn-outline-dark itm so" id="5">
                    Ermäßigung bedeutet, dass Kinder, Studenten, Gruppen eine Bahnkarte günstiger kaufen können. Sie
                    sind Studentin, richtig?<span class="tran"><br/><small>할인은 어린이, 학생, 그룹이 기차표를 저렴하게 살 수 있는 것을 의미합니다. 당신이 학생이라면, 학생증을 가지고 있을 것입니다. 그것으로 저렴하게 표를 살 수 있습니다</small></span>
                </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Sie will am Automaten eine
                    einfache Fahrkarte nach Dresden kaufen. Dabei hilft ihr eine Frau . Ergänzen Sie die Lücken.<br/>
                    <small>미나는 자동매표기에서 드레스덴으로 가는 표 한 장을 사려고 합니다. 한 사람이 미나를 돕습니다. 빈칸을
                        채우세요. </small>
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
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Entschuldigung, wie kann man am Automaten eine Fahrkarte kaufen?
                            <span class="tran"><br/><small>실례합니다. 어떻게 자동매표기에서 기차표를 살 수 있을까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            &nbsp;
                        </td>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Gut, ich will allein nach Dresden fahren. Aber hier steht Ermäßigung. Was bedeutet das?
                            <span class="tran"><br/><small>좋습니다, 저는 혼자 드레스덴에 가려고 합니다. 하지만 여기 할인이라고 있군요. 무슨 뜻인가요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            &nbsp;
                        </td>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Ja, richtig.
                            <span class="tran"><br/><small>네, 맞아요.</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Dann klicken Sie auf „Student“ und bekommen das Ticket ermäßigt, also billiger.
                            <span class="tran"><br><small>그리고 학생을 클릭해서 할인된 저렴한 티켓을 받으세요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Ja, aber ich studiere in Korea, nicht hier. Ich will nur am Sommersprachkurs in Dresden
                            teilnehmen.
                            <span class="tran"><br/><small>네, 하지만 저는 여기가 아니라 한국에서 공부하고 있습니다. 저는 드레스덴에 여름어학코스에 참여하려고 합니다.</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            &nbsp;
                        </td>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Aha!
                            <span class="tran"><br/><small>아!</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Wie möchten Sie zahlen? Hier können Sie Ihre Zahlmethode auswählen. Sehen Sie?
                            <span class="tran"><br/><small>어떻게 결제하시겠어요? 여기에서 지불방법을 선택할 수 있습니다. 보이세요?</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Ja, ich sehe, man kann mit einer Bankomatkarte, Kreditkarte oder bar bezahlen. Dann zahle
                            ich am besten mit der Kreditkarte. (Sie schiebt sie ein.)
                            <span class="tran"><br/><small>네 보입니다. 직불카드, 신용카드 또는 현금으로 지불할 수 있군요. 그러면 저는 신용카드로 결제하는게 좋겠습니다.</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            &nbsp;
                        </td>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Ah, super! Vielen Dank für Ihre Hilfe.
                            <span class="tran"><br/><small>도와주셔서 감사합니다.</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Frau
                            <span class="tran"><br/><small>여자</small></span>
                        </th>
                        <td width="50">
                            &nbsp;
                        </td>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Mina
                            <span class="tran"><br/><small>미나</small></span>
                        </th>
                        <td width="50">
                            <button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button>
                        </td>
                        <td>Vielen Dank! Und Ihnen einen schönen Tag noch!
                            <span class="tran"><br/><small>감사합니다! 당신도 좋은 하루 보내세요!</small></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인</div>
        </div>
        <!-- 정답확인 버튼 끝 -->
    </div>
</section>

<div id="marg"></div>
<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $("#chk").hide();

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
            src: ["./dev/sounds/Reihe 12/r12 E8.mp3"],
            sprite: {
                "0": [359, 122908],
                "1": [24728, 10981],
                "2": [114793, 4436],
                "3": [74530, 8063],
                "4": [103480, 6201],
                "5": [45060, 9983],
                "6": [19037, 5007],
                "7": [36644, 6264],
                "8": [56343, 1763],
                "9": [59176, 5704],
                "10": [65839, 7745],
                "11": [83251, 1193],
                "12": [84939, 5740],
                "13": [91387, 10678],
                "14": [110200, 3640],
                "15": [119549, 3718]
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
                }); /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn").addClass("text-success");
                            }
                        });
                        var qa = $(".itm-lst").length; /* 전체 문항 수 */
                        var qr = $(".text-success").length; /* 맞춘 항목 수 */
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
                        $(".btn-lg").text().appendTo($(this).closest("td"));
                        $(".btn-lg").remove();
                    } else {
                        $("div.itm-lst").each(function (idx) {
                            if (!$(this).find("button").length) {
                                if (na != "") {
                                    na += ", ";
                                }
                                na += (idx + 1);
                            }
                        });
                        alert("모든 문제를 풀어주세요!");
                    }
                });
                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("btn-block btn-light");
                            $("#lst-" + pan[p] + ">h2").remove();
                            $(this).closest("tr").find(".tran").show();
                        }
                    })
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
