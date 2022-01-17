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
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm py-0 my-0 so"
                        id="1">
                    Wann sind die Sprechzeiten von Dr. Fiedler am
                    Mittwoch?<span class="tran"><small><br>피들러 선생님의 수요일
                                    진료시간은 몇 시인가요?</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm py-0 my-0" id="2">
                    Wann läuft der Film am Samstag ?<span class="tran"><small><br>토요일 영화 상영시간은
                                    언제인가요?</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm py-0 my-0 so"
                        id="3">
                    Wann sind die Sprechzeiten freitags von der
                    Allianz?<span class="tran"><small><br>알리안츠 보험회사의 금요일
                                    상담시간은 언제인가요?</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm py-0 my-0 so"
                        id="4">
                    Was kostet der Tanzkurs pro Stunde?<span class="tran"><small><br>댄스 교습소의 시간당
                                    얼마인가요?</small></span>
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
                <h2>Hier sind die Antworten. <small>질문이 주어져 있어요.</small>
                </h2>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td scope="col" width="60%"><img
                                src="./dev/images/Reihe 6/Reihe-6-C2-1.png"
                                alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;">
                        </td>
                        <td scope="col"><img src="./dev/images/Reihe 6/Reihe-6-C2-3.png"
                                             alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td scope="col" width="60%"><img
                                src="./dev/images/Reihe 6/Reihe-6-C2-2.png"
                                alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;">
                        </td>
                        <td scope="col"><img src="./dev/images/Reihe 6/Reihe-6-C2-4.png"
                                             alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center" width="50" id="t1">1.</td>
                        <td id="b1">
                            <div class="itm-lst 1itm py-0 my-0" id="lst-1">
                                <h2 class="btn py-0 my-0 btn-warning btnsml ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="t2">&nbsp;</td>
                        <td id="b2">Der Film läuft um
                            15.30, 17.45 und um 20.00 Uhr.<span class="tran"><small><br>영화 상영은 15시 30분,
                                                17시 45분 그리고 20시에 시작합니다.</small>
                        </td>
                    </tr>
                    </span>
                    </td>
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                            <td class="text-center" id="t3">2.</td>
                            <td id="b3">
                                <div class="itm-lst 1itm py-0 my-0" id="lst-2">
                                    <h2 class="btn py-0 my-0 btn-warning btnsml ttl w-100">
                                        ▼ </h2>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="t4">&nbsp;
                            </td>
                            <td id="b4">Am Freitag
                                sind die Sprechzeiten von der Allianz
                                von 10 bis 13 Uhr.<span class="tran"><small><br>금요일에
                                                        알리안츠 보험회사는 10시에서 13시까지
                                                        상담합니다.</small></td>
                        </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center" width="50" id="t5">3.</td>
                        <td id="b5">
                            <div class="itm-lst 1itm py-0 my-0" id="lst-3">
                                <h2 class="btn py-0 my-0 btn-warning btnsml ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td id="t6">&nbsp;</td>
                        <td id="b6">Die Sprechzeiten
                            von Dr. Fiedler sind am Mittwoch von 8 bis
                            12 Uhr.<span class="tran"><small><br>피들러
                                                선생님의 수요일 진료 시간은 8시에서 12시까지
                                                입니다.</small></td>
                    </tr>
                    <tr>
                        <td class="text-center" id="t7">4.
                        </td>
                        <td id="b7">
                            <div class="itm-lst 1itm py-0 my-0" id="lst-4">
                                <h2 class="btn py-0 my-0 btn-warning btnsml ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="t8">&nbsp;</td>
                        <td id="b8">Der Tanzkurs kostet 15 Euro pro Stunde.<span class="tran"><small><br>댄스 교습소는 시간당15유로를 받습니다.</small>
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
    $(".tran").hide();
    $("#chk").hide();

    function checkHeight() {
        /* 좌우 셀 높이 맞추어 주기 */
        var tbn = 4; /* 전체 셀의 반 값; 좌측과 우측이 같은 경우 */
        for (var i = 1; i <= tbn; i++) {
            if ($("#b" + i).height() > $("#b" + (i + tbn)).height()) {
                $("#t" + (i + tbn)).height($("#b" + i).height());
                $("#t" + (i)).height($("#b" + i).height());
                $("#b" + (i + tbn)).height($("#b" + i).height());
            } else if (($("#b" + i).height() < $("#b" + (i + tbn))
                .height()) || ($("#b" + i).height() == $("#b" + (i + tbn))
                .height())) {
                $("#t" + (i)).height($("#b" + (i + tbn)).height());
                $("#t" + (i + tbn)).height($("#b" + (i + tbn)).height());
                $("#b" + (i)).height($("#b" + (i + tbn)).height());
            }
        }
    }

    $(document).on("click", function () {
        checkHeight();
    });

    $(document).ready(function () {
        $("#0").hide();
        $(".tran").hide();
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
            }
        );

        function stopAll() {
            $(".so").each(function () {
                    $(this).html(pa[$(this).attr("id")]);
                }
            );
        }

        /* 문제 재생 */
        var nagehts = new Howl({

                src: [
                    "./dev/sounds/Reihe 6/r6 C2.mp3"
                ],
                sprite: {
                    "0": [116, 24000],
                    "1": [8060, 3856],
                    "3": [14400, 3912],
                    "4": [21000, 3127]

                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },

                onload: function () {
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl")
                                .visibility !=
                            "visible" && $(this)
                                .attr("id") == "chk") {
                            $(this).attr("id",
                                "done");
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            $(".itm-lst").each(
                                function () {
                                    $(this)
                                        .find(
                                            "button"
                                        )
                                        .addClass(
                                            "okay text-success fw-bold"
                                        );
                                });

                            var qa = $(".itm-lst")
                                .length; /* 전체 문항 수 */
                            var qr = $(".okay")
                                .length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) *
                                100; /* 정답 비율 */
                            var tcl =
                                "white"; /* 기본 문자색 */

                            /* 분류 기준은 100%, 80%, 60%, 40% */
                            if (pe > 99) {
                                var st = "원어민이세요?";
                                var cl = "lime";
                                var tcl = "dark";
                            } else if (pe > 74) {
                                var st =
                                    "어! 좀 하시는데요~^^";
                                var cl = "success";
                            } else if (pe > 49) {
                                var st =
                                    "쓰읍~ 다시 해 보실까요?";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요~";
                                var cl = "danger";
                            }

                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중 " +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st + "</h4>");

                        }
                    });

                    /* 미리 답 넣어놓기 */
                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[
                                    p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "w-100 fw-bold");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }


                    $("#0").show();
                    $("#ready").hide();

                    $(".so").on("click", function () {
                            var t = $(this);
                            var ti = t.attr("id");
                            if (($("div#last").text() == "" || t.text() == "❚❚") && !t
                                .hasClass(".itm-lst")) {
                                $("#last").text(ti);
                                t.text("■");
                                nagehts.seek();
                                nagehts.play(ti);
                                sen[ti]++;
                                last = ti;
                                $("#cnt-" + ti).text(sen[ti]);
                            } else if (last == ti && nagehts.playing($("div#last")
                                .text())) {
                                $("#last").text("");
                                t.html(pa[ti]);
                                nagehts.pause();
                                sen[ti]--;
                                $("#cnt-" + ti).text(sen[ti]);
                            }
                        }
                    );
                }

                ,
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);

                    if (last == 0) {
                        if (sen[last] == 2) {
                            $(".tran").show();

                            $(".so").each(function () {
                                    pa[last] = $("#" +
                                        last).html();
                                }
                            );
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }

                        $("#" + last).closest("tr").find(
                            ".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            }
        )
    });

</script>
</body>

</html>
});

</script>
</body>

</html>
