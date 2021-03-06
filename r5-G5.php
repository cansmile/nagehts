<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2"

         id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button"
                        class="mt-1 mx-1 btn text-purple ans2 btn-lg btn-outline-dark so itm"
                        id="1">
                    <span class="gen">ein</span><span
                        class="sen">Eis</span><span
                        class="tran">아이스크림</span><span
                        class="con1">과</span><span class="con2">을</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-danger ans1 btn-lg btn-outline-dark so itm"
                        id="2">
                    <span class="gen">eine</span><span
                        class="sen">Sprite</span><span
                        class="tran">스프라이트</span><span
                        class="con1">와</span><span class="con2">를</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-khaki ans1 btn-lg btn-outline-dark so itm"
                        id="3">
                    <span class="gen"></span><span class="sen">Pommes
                            frites</span><span class="tran">감자 튀김</span><span
                        class="con1">과</span><span class="con2">을</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-danger ans2 btn-lg btn-outline-dark so itm"
                        id="4">
                    <span class="gen">eine</span><span
                        class="sen">Cola</span><span
                        class="tran">콜라</span><span
                        class="con1">와</span><span class="con2">를</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm"
                        id="5">
                    <span class="gen">einen</span><span
                        class="sen">Kaffee</span><span
                        class="tran">커피</span><span
                        class="con1">와</span><span class="con2">를</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm"
                        id="6">
                    <span class="gen">einen</span><span
                        class="sen">Kuchen</span><span
                        class="tran">케잌</span><span
                        class="con1">과</span><span class="con2">을</span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn text-primary ans2 btn-lg btn-outline-dark so itm"
                        id="7">
                    <span class="gen">einen</span><span
                        class="sen">Hamburger</span><span
                        class="tran">햄버거</span><span
                        class="con1">와</span><span class="con2">를</span>
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
                <h2>[ <small>버튼을 눌러 선택하여, <br>분류에 맞는 단어를 알맞게 채우세요.</small> ]
                    <button type="button"
                            class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">단어
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col text-center"><img
                    src="./dev/images/Reihe 5/Reihe-5-G5-1.png"
                    alt="Wer möchte was?"
                    style="max-height: 320px; width: auto;"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table
                    class="table table-borderless table-striped text-center">
                    <tbody>
                    <tr>
                        <td>
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-1">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                            <span
                                                class="tran"><small>팀은<br></small></span><span
                                        class="sen">Tim bestellt</span>
                                </h2>
                            </div>
                            <div id="ans-1"></div>
                            <div id="tra-1"></div>
                        </td>
                        <td>
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-2">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                            <span
                                                class="tran"><small>프레디는<br></small></span><span
                                        class="sen">Fredi
                                                bestellt</span></h2>
                            </div>
                            <div id="ans-2"></div>
                            <div id="tra-2"></div>
                        </td>
                        <td>
                            <div style="min-height: 240px;"
                                 class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                 id="lst-3">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                            <span
                                                class="tran"><small>안나는<br></small></span><span
                                        class="sen">Anna bestellt</span>
                                </h2>
                            </div>
                            <div id="ans-3"></div>
                            <div id="tra-3"></div>
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
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".gen").hide();
    $(".tran").hide();
    $(".con1").hide();
    $(".con2").hide();
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
                "./dev/sounds/Reihe 5/r5 G5.mp3"],
            sprite: {
                "0": [206, 31519],
                "1": [8249, 1142],
                "2": [11068, 1316],
                "3": [14610, 1465],
                "4": [18964, 1233],
                "5": [23311, 1142],
                "6": [27148, 1275],
                "7": [30311, 1315]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                <?php require "wahl.php"; ?>
                /* 정답확인 */
                $("#chk").on("click", function () {
                    if ($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
                        $(this).attr("id", "done");
                        $(".itm.text-danger").removeClass("text-danger");
                        $(".itm.text-primary").removeClass("text-primary");
                        $(".itm.text-purple").removeClass("text-purple");
                        $(".itm.text-khaki").removeClass("text-khaki");
                        $(".itm").each(function () {
                            if ($(this).parent().attr("id").length > 5) {
                                var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
                            } else {
                                var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
                            }
                            if ($(this).hasClass("ans" + (a))) {
                                $(this).addClass("text-success font-weight-bold");
                            } else {
                                $(this).addClass("text-warning font-weight-bold");
                            }
                            ;
                            if ($(this).hasClass("text-warning")) {/* $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,)))) */
                                for (var i = 1; i <= $(".itm-lst").length; i++) {
                                    if ($(this).hasClass("ans" + i)) {
                                        $(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark w-100 text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");/* $(lstn).append(i); */
                                    }
                                }
                            }
                            ;
                        });
                        for (var i = 1; i <= $(".itm-lst").length; i++) {
                            var ind = 0;
                            var lst = new Array();
                            var tind = $("#lst-" + i).find(".text-success").length + $("#lst-" + i).find(".text-danger").length;
                            $("#ans-" + i).append($("#lst-" + i + ">h2>.sen").text() + " ");
                            $("#tra-" + i).append("<small>" + $("#lst-" + i + ">h2>.tran").text() + " ");
                            $("#lst-" + i + ">button").each(function () {
                                if ($(this).hasClass("font-weight-bold") && ($(this).hasClass("text-success") || $(this).hasClass("text-danger"))) {
                                    ind++;
                                    switch ($(this).find(".gen").text()) {
                                        case '':
                                            var ao = "<span class=\"bg-khaki text-white p-0 px-1 rounded\">";
                                            break;
                                        case 'einen':
                                            var ao = "<span class=\"bg-primary text-white p-0 px-1 rounded\">";
                                            break;
                                        case 'eine':
                                            var ao = "<span class=\"bg-danger text-white p-0 px-1 rounded\">";
                                            break;
                                        case 'ein':
                                            var ao = "<span class=\"bg-purple text-white p-0 px-1 rounded\">";
                                            break;
                                    }
                                    var ac = "</span>";
                                    if (ind == (tind - 1)) {
                                        $("#ans-" + i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + " und ");
                                        $("#tra-" + i).append(ao + $(this).find(".tran").text() + ac + $(this).find(".con1").text() + " ");
                                    } else if (ind == tind) {
                                        $("#ans-" + i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + ".");
                                        $("#tra-" + i).append(ao + $(this).find(".tran").text() + ac + $(this).find(".con2").text());
                                    } else {
                                        $("#ans-" + i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + ", ");
                                        $("#tra-" + i).append(ao + $(this).find(".tran").text() + ac + ", ");
                                    }
                                }
                            });
                            $("#tra-" + i).append(" 주문하였습니다.</small>");
                        }/* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".itm")) {
                                $(this).find(".itm").addClass("okay");
                            }
                        });
                        var qa = $(".itm").length; /* 전체 문항 수 */
                        var qr = $(".okay").length; /* 맞춘 항목 수 */
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
                    }
                    $(".tran").show();
                });
                /* 미리 답 넣어놓기 */
                var pan = new Array();
                /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                pan = [];
                /* pan=[4, 10]; */
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#" + pan[p];
                    for (var i = 0; i < $(".itm-lst").length; i++) {
                        if ($(pani).hasClass("ans" + (i + 1))) {
                            $(pani).insertAfter($("#lst-" + (i + 1) + ">h2"));
                            $(pani).addClass("w-100 btn-light");
                        }
                    }
                }
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
