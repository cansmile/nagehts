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
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
                        Liebe Grüße<span class="tran"><br><small>사랑을
                                담아</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="2">
                        leider kann ich doch nicht kommen.<span class="tran"><br><small>안타 깝게도 난 갈 수가
                                없어.</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="3">
                        Betreff: Kino<span class="tran"><br><small>제목:
                                영화</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="4">
                        Vielleicht können wir morgen ins Kino gehen?<span class="tran"><br><small>우리 내일 영화 보러 갈수
                                있을까?</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="5">
                        Lieber Max,<span class="tran"><br><small>막스에게,</small></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2">
                    <div class="col-12 mb-4 mt-2 text-center">
                        <h2>1. Wählen Sie aus.
                            <small><br> 선택하세요.</small>
                        </h2>
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="p-0 pt-2">
                                    <span class="bg-dark text-white m-0 p-1 px-2 rounded"
                                        style="font-size: 1.5em;">Betreff:
                                        Kino</span>
                                    <div class="rounded bg-info text-white m-0 p-3" style="font-size: 1.5em;">Max, ich
                                        komme
                                        nicht. Keine Lust! Mina</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless mt-auto">
                        <tbody>
                            <tr>
                                <td class="p-0 align-middle">
                                    Die SMS ist
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
                                        <div class="btn btn-light pop x pb-0" data-toggle="popover"
                                            data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option3">höflich.</label>
                                        </div>
                                        <div class="btn btn-light pop o pb-0" data-toggle="popover"
                                            data-container="body" data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option4">unhöflich.</label>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="col-12 mb-4 mt-2 text-center">
                        <h2>2. Sortieren Sie Wendungen. Schreiben Sie dann die
                            E-Mail neu.
                            <small><br> 아래의 낱말들을 맞는 순으로 정렬하여 이메일을 새로 써보세요.
                            </small>
                            <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                                HV
                            </button>
                        </h2>
                        <h3>[ <small>음성을 듣고 내용과 일치하는 문장을 선택하세요.</small> ]</h3>
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼을 눌러 듣기를 2번 완료하면 문장과 번역이 나옵니다.</small> ]</h3>

                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="my-0 py-1">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="my-0 py-1">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="my-0 py-1">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="my-0 py-1">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="my-0 py-1">
                                    <div class="itm-lst 1itm" id="lst-5">
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
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
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
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 7/r7 B6.mp3"],
                sprite: {
                    "0": [1289, 20706],
                    "1": [20470, 1601],
                    "2": [13739, 2162],
                    "3": [8944, 2139],
                    "4": [16639, 3070],
                    "5": [12069, 1363]
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
                    });

                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });

                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings()
                            .hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass(
                                "btn-warning");
                            $(this).parent()
                                .children()
                                .removeClass(
                                    "btn-light");
                        };

                        /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(
                                ".an")
                            .length / $(
                                ".q").length
                        ) * 100);
                        $(".progress>.bar").attr(
                            "width", perc + "%;"
                        );

                    });

                    /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop")
                                .popover(
                                    'hide');
                        }, 500);
                    });

                    <?php require "wahl.php"; ?>

                    /* 정답확인 */
                    $("#chk").on("click",
                        function () {
                            if ($(this).attr("id") == "chk") {
                                if ($(".an").length < $(".q").length || $("#itms>button")
                                    .length) {
                                    var na = "";
                                    $(".q").each(function () {
                                        if (!$(this).find("div").hasClass("an")) {
                                            if (na != "") {
                                                na += ", ";
                                            }
                                            na += $(this).attr("id").substr(4);
                                        };
                                    });
                                    alert("모든 문제를 풀어주세요.");
                                } else {
                                    $(this).attr("id", "done");
                                    $(".tran").show();
                                    $(".pop").each(function () {
                                        $(this).removeClass("btn-info");
                                        if ($(this).hasClass("o") && $(this).hasClass(
                                                "an")) {
                                            $(this).removeClass("btn-warning");
                                            $(this).addClass("btn-success");
                                        } else if ($(this).hasClass("o")) {
                                            $(this).addClass("btn-primary");
                                        } else if ($(this).hasClass("an")) {
                                            $(this).addClass("btn-warning");
                                        } else {
                                            $(this).addClass("btn-light");
                                        };
                                    });
                                    $(this).removeClass("btn-light ");
                                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                                    $(this).removeClass("btn-light ");
                                    $(".itm-lst").each(function () {
                                        if ($(this).find(".btn")) {
                                            $(this).find(".btn").addClass(
                                                "text-success font-weight-bold");
                                        }
                                    });
                                    var qa = $(".itm-lst").length + $(".q")
                                        .length; /* 전체 문항 수 */
                                    var qr = $(".text-success").length + $(".btn-success")
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
                                    $(this).addClass("btn-" + cl + " text-" + tcl);
                                    $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" +
                                        st + "</h4>");
                                };
                            }
                        });
                    $("#0").show();
                    $(".alert").hide();
                    var pan =
                        new Array();
                    pan = ["1"];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("btn-block");
                                $("#lst-" + pan[p] + ">h2")
                                    .remove();
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
