<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">Wahl</div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="1">
                    Freunde
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="2">
                    Verwandte
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="3">
                    Fremde
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
                    Kollegen
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="5">
                    Verkäufer
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="6">
                    Lehrer
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="7">
                    Kinder
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="8">
                    Professoren
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="9">
                    Nachbar
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
                <h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]</h2>
                <button type="button"
                        class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                        id="0">
                    HV
                </button>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼은 정답 확인을 한 뒤에 나타납니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row" id="lsts">
            <div style="min-height: 240px;"
                 class="rounded-top border bg-danger border-white itm-lst col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2"
                 id="lst-1">
                <h2 class="text-center bg-white text-dark p-2">duzen</h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-orange border-white itm-lst col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2"
                 id="lst-2">
                <h2 class="text-center bg-white text-dark p-2">siezen</h2>
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
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
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
        }

        /* 문제 재생 */
        var nagehts = new Howl({
            src: [
                "./dev/sounds/Reihe 12/r12 E9a.mp3"
            ],
            sprite: {
                "0": [523, 35714],
                "1": [9465, 1417],
                "2": [12595, 1298],
                "3": [15901, 1342],
                "4": [18941, 1491],
                "5": [25257, 1607],
                "6": [28546, 1596],
                "7": [31888, 1244],
                "8": [34582, 1666],
                "9": [22318, 1562]
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
                            $(this).find("button").addClass("text-success font-weight-bold");
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
                pan = [1, 6];
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
