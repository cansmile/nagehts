<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">Wahl</div>
            <div class="col bg-<?php echo( $color ); ?> rounded text-center text-white fw-bold col-12 mt-1">
                Anrede&nbsp;<small>호칭</small>
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="1">
                    Lieber Tom
                    <span class="tran"><br><small>사랑하는 톰</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="2">
                    Liebe Frau Schneider
                    <span class="tran"><br><small>친애하는 슈나이더부인</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="3">
                    Sehr geehrte Frau Dr. Eva Fischer
                    <span class="tran"><br><small>존경하는 에바피셔박사님</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="4">
                    Sehr geehrte Damen und Herren,
                    <span class="tran"><br><small>친애하는 신사숙녀여러분</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="5">
                    Hallo, Maria
                    <span class="tran"><br><small>안녕 마리아</small></span>
                </button>
            </div>
            <div class="col bg-<?php echo( $color ); ?> rounded text-center text-white fw-bold col-12 mt-1">
                Grußformeln&nbsp;<small>끝인사</small>
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="6">
                    Viele Grüße
                    <span class="tran"><br><small>인사를 전하며</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="7">
                    Mit freundlichen Grüßen
                    <span class="tran"><br><small>친절의 인사를 담아서</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="8">
                    Bis bald
                    <span class="tran"><br><small>곧 만나길</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="9">
                    Liebe Grüße
                    <span class="tran"><br><small>사랑의 인사를</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="10">
                    Herzlichen Grüßen
                    <span class="tran"><br><small>진심의 인사를 담아서</small></span>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]</h2>
            </div>
        </div>
        <div class="row text-center" id="lsts">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table
                    class="table table-borderless table-striped text-center">
                    <thead>
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Anrede</th>
                        <th scope="col">Gruss</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="5%" class="align-middle">siezen</th>
                        <td width="40%">
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-1">
                                <h2
                                    class="btn btn-danger btn-xl ttl w-100">
                                    ▼</h2>&nbsp;
                            </div>
                        </td>
                        <td width="40%">
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-orange itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-2">
                                <h2
                                    class="btn btn-orange btn-xl ttl w-100">
                                    ▼</h2>&nbsp;
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle">duzen</th>
                        <td>
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-warning itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-3">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼</h2>&nbsp;
                            </div>
                        </td>
                        <td>
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-success itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-4">
                                <h2
                                    class="btn btn-success btn-xl ttl w-100">
                                    ▼</h2>&nbsp;
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                 id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
    </div>
</section>
<div id="marg"></div>
<div id="last" class="d-none"></div>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogroupnomoveh.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#chk").hide();
    $("#0").hide();
    $(".tran").hide();
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
        }

        /* 문제 재생 */
        var nagehts = new Howl({
            src: [
                "./dev/sounds/Reihe 12/r12 E9b.mp3"
            ],
            sprite: {
                "0": [801, 52632],
                "1": [11257, 1680],
                "2": [14915, 1715],
                "3": [19125, 2898],
                "4": [25512, 2363],
                "5": [30842, 1435],
                "6": [34226, 1719],
                "7": [38295, 2138],
                "8": [42942, 1469],
                "9": [46961, 1669],
                "10": [51708, 1755]
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

                    if (($("div#last").text() ==
                        "" || t.text() ==
                        "❚❚") && !t
                        .hasClass(".itm-lst")) {
                        $("#last").text(ti);
                        t.text("■");
                        nagehts.seek();
                        nagehts.play(ti);
                        sen[ti]++;

                        last = ti;

                        $("#cnt-" + ti).text(
                            sen[ti]);
                    } else if (last == ti &&
                        nagehts.playing($(
                            "div#last")
                            .text())) {
                        $("#last").text("");
                        t.html(pa[ti]);
                        nagehts.pause();
                        sen[ti]--;
                        $("#cnt-" + ti).text(
                            sen[ti]);
                    }

                });

                /* 정답확인 */
                $("#chk").on("click", function () {
                    if ($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
                        $(this).attr("id", "done");

                        $(".itm-lst").each(function () {
                            $(this).find("button").addClass("text-success fw-bold");
                        });

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
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
                        $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                        $(this).attr("id", "done");
                    }
                });
                <?php require "wahl.php"; ?>

                /* 미리 답 넣어놓기 */
                var pan = new Array();
                /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                pan = [2, 6];
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#" + pan[p];
                    for (var i = 0; i < $(".itm-lst")
                        .length; i++) {
                        if ($(pani).hasClass("ans" + (
                            i + 1))) {
                            $(pani).insertAfter($(
                                "#lst-" + (i +
                                1) + ">h2"));
                            $(pani).addClass(
                                "w-100 btn-light"
                            );
                        }
                    }
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
                            pa[last] = $("#" +
                                last).html();
                        });
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


        });

    });

</script>
</body>

</html>
