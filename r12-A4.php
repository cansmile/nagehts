<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm"
                        id="3">
                    allein
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm"
                        id="4">
                    allein langweilig
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-sm btn-outline-dark itm"
                        id="5">
                    auf einem US-Feriencamp als Taekwondo-Trainer Taekwondo unterrichtet
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans0 btn-sm btn-outline-dark itm"
                        id="6">
                    Deutsch verbessern
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-sm btn-outline-dark itm"
                        id="7">
                    Englisch verbessern
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm"
                        id="8">
                    Familienurlaub
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm"
                        id="9">
                    Geld sparen
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-sm btn-outline-dark itm"
                        id="10">
                    Geld verdienen
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm"
                        id="11">
                    in der Sonne gelegen
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm"
                        id="12">
                    mit der Familie
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans0 btn-sm btn-outline-dark itm"
                        id="13">
                    mit einer Studentengruppe
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm"
                        id="14">
                    nach Amerika
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm"
                        id="15">
                    nach Busan
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans0 btn-sm btn-outline-dark itm"
                        id="16">
                    nach Dresden
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm"
                        id="17">
                    spazieren gegangen
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans0 btn-sm btn-outline-dark itm"
                        id="18">
                    Sprachkurse und Exkursionen gemacht
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans0 btn-sm btn-outline-dark itm"
                        id="19">
                    Sprachreise
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm"
                        id="20">
                    Work-Camp- Urlaub
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm"
                        id="21">
                    Schwimmen gegangen
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
                <h2> Ergänzen Sie die Lücken. <br/>
                    <small> 빈칸을 채우세요. </small><br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">이름</button>
                        버튼을 눌러 듣기를 3번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row" id="lsts">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 border border-dark rounded p-2 text-center so" id="1">Minsu
                        <span class="tran"><br/><small>민수</small></span>
                    </div>
                </div>
                <div class="row">
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-danger border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-1">
                        <h2 class="btn btn-xl bg-white ttl d-block">Urlaubstyp</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-success border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-2">
                        <h2 class="btn btn-xl bg-white ttl d-block">Mit wem gefahren?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-primary border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-3">
                        <h2 class="btn btn-xl bg-white ttl d-block">Wohin gefahren?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-orange border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-4">
                        <h2 class="btn btn-xl bg-white ttl d-block">Wasunternommen?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-warning border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-5">
                        <h2 class="btn btn-xl bg-white ttl d-block">gut</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-purple border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-6">
                        <h2 class="btn btn-xl bg-white ttl d-block">nicht gut</h2>&nbsp;
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 border border-dark rounded p-2 text-center so" id="2">Timon
                        <span class="tran"><br/><small>티몬</small></span>
                    </div>
                </div>
                <div class="row">
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-danger border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-7">
                        <h2 class="btn btn-xl bg-white ttl d-block">Urlaubstyp</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-success border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-8">
                        <h2 class="btn btn-xl bg-white ttl d-block">Mit wem gefahren?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-primary border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-9">
                        <h2 class="btn btn-xl bg-white ttl d-block">Wohin gefahren?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-orange border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-10">
                        <h2 class="btn btn-xl bg-white ttl d-block">Wasunternommen?</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-warning border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-11">
                        <h2 class="btn btn-xl bg-white ttl d-block">gut</h2>&nbsp;
                    </div>
                    <div style="min-height: 240px;"
                         class="rounded-top border bg-purple border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2"
                         id="lst-12">
                        <h2 class="btn btn-xl bg-white ttl d-block">nicht gut</h2>&nbsp;
                    </div>
                </div>
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
            src: ["./dev/sounds/Reihe 12/r12 A4.mp3"],
            sprite: {
                "0": [1244, 115097],
                "1": [8829, 40634],
                "2": [51833, 21702],
                "3": [75585, 40756]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#wahl").is(":hidden")) {
                        $(".tran").show();/* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".itm")) {
                                $(this).find(".itm").addClass("text-success font-weight-bold");
                            }
                        });
                        var qa = $(".itm-lst>button").length; /* 전체 문항 수 */
                        var qr = $(".text-success").length; /* 맞춘 항목 수 */
                        var pe = (qr / qa) * 100; /* 정답 비율 */
                        var tcl = "white"; /* 기본 문자색 *//* 분류 기준은 100%, 80%, 60%, 40% */
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
                var pan = new Array(),
                    pann;
                pan = [9, 10, 12, 15, 20, 21];
                for (var p = 0; p < pan.length; p++) {
                    pann = "#" + pan[p];
                    for (var i = 0; i < $(".itm-lst").length; i++) {
                        if ($(pann).hasClass("ans" + (i + 1))) {
                            $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                        }
                    }
                }
                $(".itm-lst>button").addClass("btn-block btn-light");

                $("#0").show();
                $(".alert").hide();
                $(".so").on("click", function () {
                    var t = $(this);
                    var ti = t.attr("id");
                    if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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
                    $("#" + last).closest("div.col-12").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
