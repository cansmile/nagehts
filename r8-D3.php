<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <style>
        td,
        th,
        table {
            border-width: 0;
            border-style: hidden;
        }

    </style>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so text-left" id="1">
                        Guten Tag, Frau Lehmann. Was kann ich für Sie tun?
                        <span class="tran"><br><small>안녕하세요, 레만 부인. 제가 뭘 도와드릴까요?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so text-left" id="2">
                        Ich komme gleich mit ihm!
                        <span class="tran"><br><small>제가 아들을 데리고 갈게요!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so text-left" id="3">
                        Kann er für heute Vormittag einen Termin haben?
                        <span class="tran"><br><small>오늘 오전에 예약할 수 있나요?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so text-left" id="4">
                        Vielen Dank!
                        <span class="tran"><br><small>감사합니다!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so text-left" id="5">
                        Bis dann!
                        <span class="tran"><br><small>이 따 뵐게요!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so text-left" id="6">
                        Guten Tag, mein Name ist Lehmann.
                        <span class="tran"><br><small>안녕하세요, 저는 레만이라고 해요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so text-left" id="7">
                        Mein Sohn Peter hat Fieber und starke Bauchschmerzen.
                        <span class="tran"><br><small>제 아들 피터가 열이 나고 복통이 심해요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so text-left" id="8">
                        Das ist gut!
                        <span class="tran"><br><small>다행이네요!</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so text-left" id="9">
                        Ja. Wir haben um 11 Uhr einen Termin frei.
                        <span class="tran"><br><small>네. 11시에 시간이 비어있네요.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so text-left" id="10">
                        Guten Tag, Praxis Dr. Fischer.
                        <span class="tran"><br><small>안녕하세요, 피셔 병원입니다.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so text-left" id="11">
                        Keine Ursache. Bis gleich, Frau Lehmann.
                        <span class="tran"><br><small>천만에요. 곧 뵙겠습니다, 레만 부인.</small></span>
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
                    <h2>Ergänzen Sie den Dialog. <small>문장을 완성해 보세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button
                                type="button" class="so btn btn-sm btn-outline-secondary disabled">보기</button> 버튼을 눌러
                            듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Arzthelfer:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Frau Lehmann:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Arzthelfer:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Frau Lehmann:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">&nbsp;</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Arzthelfer:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Frau Lehmann:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 32%;" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 32%;" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    <div class="itm-lst 1itm d-inline-block" style="min-width: 32%;" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Arzthelfer:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="pb-0 pt-3 align-middle" scope="row" width="200">Frau Lehmann:</th>
                                <td class="pb-0 pt-3 align-middle">
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
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
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
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
        $(".tran").hide();
        $("#chk").hide();
        $("#0").hide();

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
                src: ["./dev/sounds/Reihe 8/r8 D3.mp3"],
                sprite: {
                    "0": [4637, 46252],
                    "1": [18378, 3897],
                    "2": [40487, 2143],
                    "3": [28546, 3707],
                    "4": [42836, 1231],
                    "5": [49588, 1389],
                    "6": [13698, 3408],
                    "7": [23610, 4482],
                    "8": [38959, 1530],
                    "9": [34203, 3688],
                    "10": [8927, 3541],
                    "11": [44519, 3736]
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
                                if ($(this).find("button.btn")) {
                                    $(this).find("button.btn").addClass(
                                        "text-success");
                                }
                            });
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    $("#0").show();
                    $(".alert").hide();

                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [1, 4, 6, 7, 9, 11];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-block font-weight-bold");
                                $("#" + $(this).attr("id")).addClass("border-0");
                                $("#lst-" + pan[p] + ">h2")
                            .remove(); /* $("#lst-" + pan[p]).parent().find(".tran").show(); */
                            }
                        })
                    }
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
