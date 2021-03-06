<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-2" id="1">
                    Wann denn?
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-2" id="2">
                    Da habe ich Zeit.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-2" id="3">
                    Hast du am Samstag Zeit?
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-2" id="4">
                    Sonntagabend ist gut.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-2" id="5">
                    Leider kann ich nicht.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-2" id="6">
                    Und am Sonntagabend?
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
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h3>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless border border-dark">
                    <tbody>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>■</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                Hallo Mina, hier ist Tim.&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                <br>Wollen wir ins Kino gehen?
                                <span class="tran"><br><small>안녕 미나, 나
                                                팀이야. 토요일에 시간 있어?<br>영화관에
                                                갈래?</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>●</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                <div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                &nbsp;Ich gehe am Samstag in die Kirche.
                                <span class="tran"><br><small>아쉽지만 난 못갈
                                                것 같아. 나 토요일에 교회
                                                가.</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>■</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                <div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그럼 일요일
                                                저녁은?</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>●</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                <div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                <div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                <div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 30%; ">
                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>일요일 저녁에는
                                                괜찮아. 시간 있어. 그럼
                                                몇시에?</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>■</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                Um 20.30 Uhr.
                                <span class="tran"><br><small>20시
                                                30분에.</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center align-middle" scope="row" width="20"><small>●</small></th>
                        <td class="align-middle">
                            <div class="p-2 m-0">
                                Gut, bis dann.
                                <span class="tran"><br><small>좋아, 그때
                                                봐.</small></span>
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
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $("#chk").hide();

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
        };
        /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 7/r7 D8.mp3"],
            sprite: {
                "0": [3444, 47112]
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
                <?php require "wahl.php"; ?>

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

                /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length == $(
                        "#itms").find("button.ans0").length) {
                        $(".tran").show();

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");

                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn")
                                    .addClass(
                                        "text-success");
                            }
                        });

                        var qa = $(".itm-lst").length; /* 전체 문항 수 */
                        var qr = $(".text-success")
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

                        $(".btn-lg").text().appendTo($(this)
                            .closest("td"));
                        $(".btn-lg").remove();
                    } else {
                        $("div.itm-lst").each(function (idx) {
                            if (!$(this).find("button")
                                .length) {
                                if (na != "") {
                                    na += ", ";
                                }
                                na += (idx + 1);
                            }
                        });
                        alert("모든 문제를 풀어주세요!");
                        /* alert(na+"번 문제를 풀어주세요!"); */
                    }
                });

                var pan = new Array();
                pan = [4, 6];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("w-100");
                            $("#" + $(this).attr("id")).addClass("border-0");
                            $("#" + $(this).attr("id")).addClass("border-0 text-start");
                            $("#lst-" + pan[p] + ">h2").remove();/* $("#lst-" + pan[p]).parent().find(".tran").show(); */
                        }
                    })
                }

                $("#0").show();
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
