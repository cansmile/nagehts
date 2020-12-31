<?php require_once("heading.php"); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo($color); ?> wahl_title col-12">
                Wahl</div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md t-3 btn-outline-dark itm so" id="1">
                    Hier ist Kim. Ich möchte gern von Montag den 12. bis Mittwoch den 14. Juli in Ihrem Hotel übernachten. Haben Sie noch ein Zimmer für mich frei?
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md t-3 btn-outline-dark itm so" id="2">
                    Gut! Das nehme ich dann. Ab wann könnte ich dann einchecken? Ich komme nämlich am 12. Juli gegen 14 Uhr an.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md t-3 btn-outline-dark itm so" id="3">
                    Ein Einzelzimmer, bitte.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-md t-3 btn-outline-dark itm so" id="4">
                    Haben Sie Parkplätze? Kann ich dort mein Auto parken?
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-md t-3 btn-outline-dark itm so" id="5">
                    Mein Name ist Mina Kim.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md t-3 btn-outline-dark itm so" id="6">
                    Was kostet ein Einzelzimmer mit Frühstück?
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-md t-3 btn-outline-dark itm so" id="7">
                    Danke, gleichfalls
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md t-3 btn-outline-dark itm so" id="8">
                    Sehr gut. Bekomme ich dann den Schlüssel an der Rezeption?
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
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button><br/>
                    [ <small><button type="button"
                                         class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button
                                type="button" class="btn btn-sm btn-outline-secondary disabled">알파벳</button> 버튼을 눌러
                            듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina will telefonisch ein Zimmer im Hotel buchen. Was sagt Mina? Ergänzen Sie, bitte.
                <span class="tran"><br><small>미나는 전화로 호텔방을 예약하려고 합니다. 미나가 뭐라고 하나요? 채우세요.</small></span></div>
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th scope="row">
                            <button type="button" id="9" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Guten Tag, Hotel Waltstein, Bauer am Apparat, was kann ich für Sie tun?
                            <span class="tran"><br><small>안녕하십니까, 호텔 발트슈타인입니다. 저는 바우어입니다. 무엇을 도와드릴까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="10" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>저는 김입니다. 7월 12일 월요일부터 14일 수요일까지 당신의 호텔에서 묵고 싶습니다. 저를 위해 남는 방이 있을까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="11" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Einen Moment, bitte. ... Ja, wir haben noch freie Zimmer. Möchten Sie ein Einzel- oder Doppelzimmer?
                            <span class="tran"><br><small>잠시만요. 네, 방이 있습니다. 1인실 방을 원하시나요? 아님  2인실 원하시나요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="12" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>저는 1인실을 원합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="13" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Gut, möchten Sie das Zimmer mit oder ohne Frühstück?
                            <span class="tran"><br><small>좋습니다, 조식 포함을 원하시나요? 아님 조식제외를 원하시나요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="14" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>조식을 포함한 1인실 가격이 어떻게 되나요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="15" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Mit Frühstück kostet das Zimmer für eine Nacht 55 Euro.
                            <span class="tran"><br><small>조식을 포함한 1인실은 하루에 55유로입니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="16" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>좋습니다! 그걸로 부탁합니다. 방은 언제부터 입실가능하나요? 저는 7월 12일 14시쯤 도착합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="17" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Das Zimmer ist ab 13 Uhr frei.
                            <span class="tran"><br><small>방은 13시부터 입실 가능합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="18" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>아주 좋군요. 그러면 제가 프론트 리셉션에서 열쇠를 받을 수 있을까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="19" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Ja. richtig. Dabei sollten Sie auch ein Anmeldeformular ausfüllen und wir bräuchten auch Ihren Ausweis oder Reisepass.
                            <span class="tran"><br><small>네 맞습니다. 그때 투숙객을 위한 신고서를 작성하셔야 합니다. 저희는 또한 당신의 신분증이나 여권이 필요합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="20" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>Ist gut.
                            <span class="tran"><br><small>알겠습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="21" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Auf welchem Namen soll ich das Zimmer reservieren?
                            <span class="tran"><br><small>어떤 이름으로 방을 예약해 드릴까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="22" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>제 이름은 김미나입니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="23" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Gut. Das Zimmer ist reserviert für Sie, Frau Kim.
                            <span class="tran"><br><small>좋습니다. 김씨 이름으로 예약되었습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="24" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>Vielen Dank.
                            <span class="tran"><br><small>감사합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="25" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Haben Sie noch Fragen?
                            <span class="tran"><br><small>질문이 더 있으신가요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="26" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>Ja,
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>네. 주차공간이 있나요? 거기에 제 자동차를 주차할 수 있을까요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="27" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Ja, vor dem Hotel gibt es Parkplätze.
                            <span class="tran"><br><small>네, 호텔 앞에 주차장이 있습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="28" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>Vielen Dank.
                            <span class="tran"><br><small>감사합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="29" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Gern geschehen. Wir erwarten Sie dann am 12. Juli.
                            <span class="tran"><br><small>별말씀을요. 7월 12일에뵙겠습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="30" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>Ja, auf Wiederhören.
                            <span class="tran"><br><small>네. 안녕히 계세요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="31" class="so btn btn-outline-danger btn-sm mr-1 px-3">A</button>
                        </th>
                        <td>Auf Wiederhören. Und einen schönen Tag noch.
                            <span class="tran"><br><small>안녕히 계세요. 즐거운 하루되세요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="32" class="so btn btn-outline-primary btn-sm mr-1 px-3">B</button>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl d-block">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>네. 즐거운 하루되세요.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인 </div>
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
<?php require_once("./dev/oxsound.php"); ?>
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
            src: ["./dev/sounds/Reihe 12/r12 C4.mp3"],
            sprite: {
                "0": [430, 133276],
                "1": [22664, 11337],
                "2": [62592, 9267],
                "3": [44291, 2233],
                "4": [134292, 4214],
                "5": [96975, 2238],
                "6": [52757, 3558],
                "7": [131587, 2048],
                "8": [75986, 4606],
                "9": [16935, 4987],
                "10": [22664, 11337],
                "11": [34431, 9022],
                "12": [44291, 2233],
                "13": [47600, 4447],
                "14": [52757, 3558],
                "15": [56779, 4969],
                "16": [62592, 9267],
                "17": [72591, 2737],
                "18": [75986, 4606],
                "19": [81319, 8713],
                "20": [90710, 1622],
                "21": [93014, 3112],
                "22": [96975, 2238],
                "23": [99952, 3917],
                "24": [104386, 1528],
                "25": [106545, 1962],
                "26": [109653, 5232],
                "27": [115089, 2866],
                "28": [118294, 1500],
                "29": [120601, 4225],
                "30": [125702, 1886],
                "31": [128256, 2719],
                "32": [131587, 2048]
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
                pan = [1];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("btn-block btn-light");
                            $("#lst-" + pan[p] + ">h2").remove();
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
