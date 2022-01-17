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
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm t-3 btn-outline-dark itm so" id="1">
                    A
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm t-3 btn-outline-dark itm so" id="2">
                    B
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm t-3 btn-outline-dark itm so" id="3">
                    C
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm t-3 btn-outline-dark itm so" id="4">
                    D
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm t-3 btn-outline-dark itm so" id="5">
                    E
                </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-12 border border-dark rounded lh250 pt-4">
                <ol type="a">
                    <li>Ich möchte eine Fahrkarte nach Berlin, bitte.
                        <span class="tran"><br/><small>베를린으로 가는 티켓 하나 부탁드립니다.</small></span>
                        <br/>Um welche Uhrzeit möchten Sie fahren?
                        <span class="tran"><br/><small>몇 시에 가기 원하세요?</small></span>
                    </li>
                    <li>Was sagt die Durchsage? Auf welchem Gleis fährt der Zug nach Berlin?
                        <span class="tran"><br/><small>안내방송이 뭐라고 말하는거야? 베를린으로 가는 기차는 몇 번 선로에서 가?</small></span>
                    </li>
                    <li><strike>Entschuldigung, wie kann ich am Automaten eine Fahrkarte kaufen?</strike>
                        <span class="tran"><br/><small>실례합니다, 자동매표기에서 기차표를 어떻게 살 수 있을까요?</small></span>
                    </li>
                    <li>Wir müssen doch auf dem Fahrplan sehen, wo der Zug aus Berlin ankommt.
                        <span class="tran"><br/><small>우리는 운행시간표에서 베를린에서 오는 기차가 어디에 도착하는지 봐야해.</small></span>
                        <br/>Da steht: Ankunft um 11. 30 Uhr von Gleis 9.
                        <span class="tran"><br/><small>저기 있다: 11시 30분 9번 선로에 도착.</small></span>
                    </li>
                    <li>Schnell, wir müssen uns beeilen! Unser Zug fährt gleich ab.
                        <span class="tran"><br/><small>빨리, 우리는 서둘러야 해. 우리 기차가 곧 출발해.</small></span>
                        <br/>Ah, wie ärgerlich! Unser Zug ist abgefahren! Wir haben ihn verpasst!
                        <span class="tran"><br/><small>아, 저런! 우리 기차가 출발했어. 우리는 기차를 놓쳤어!</small></span>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Ordnen Sie zu.<small><br/>채우세요</small></h2>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br/>
                    [ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button
                            type="button" class="btn btn-sm btn-outline-secondary disabled">알파벳
                        </button>
                        버튼을 눌러
                        듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E6-1.png"
                                 alt="Welches Bild passt zu welchem Dialog?"
                                 style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E6-2.png"
                                 alt="Welches Bild passt zu welchem Dialog?"
                                 style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E6-3.png"
                                 alt="Welches Bild passt zu welchem Dialog?"
                                 style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E6-4.png"
                                 alt="Welches Bild passt zu welchem Dialog?"
                                 style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E6-5.png"
                                 alt="Welches Bild passt zu welchem Dialog?"
                                 style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
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
            src: ["./dev/sounds/Reihe 12/r12 E6.mp3"],
            sprite: {
                "0": [411, 68599],
                "1": [6932, 9320],
                "2": [18722, 8044],
                "3": [29368, 7682],
                "4": [40053, 12730],
                "5": [55394, 13410]
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
            onload: function () {
                /* 음성 준비되면 HV 버튼 나타내기 */
                $("#0").show();
                $("#ready").hide();
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
                            $("#" + $(this).attr("id")).addClass("w-100 btn-light");
                            $("#lst-" + pan[p] + ">h2").remove();
                        }
                    })
                }
                $("#0").show();
                $("#ready").hide();
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
