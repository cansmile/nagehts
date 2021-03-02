<?php require_once("heading.php"); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Der Kellner oder der Gast?<br>
                    <small>종업원? 손님?</small>
                    <button type="button"
                            class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                    <br>
                    [ <small>
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶
                        </button>
                        버튼을 눌러 듣고 선택하세요.</small> ]
                </h2>
                <h3>[ <small>몇 번을 들어도 번역은 나오지 않습니다.<br>문제를 모두 풀고 번역을
                        확인하세요.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table
                    class="table table-borderless text-center">
                    <tr>
                        <td width="10%">
                            <button type="button" id="1"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Ein Glas Wasser, bitte.<span
                                class="tran"><br>&nbsp;<small>물 한 잔
                                        주세요.</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-1">
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <button type="button" id="2"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Herr Ober, wir möchten gern bestellen.<span
                                class="tran"><br>&nbsp;<small>여기
                                        주문할게요.</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-2">
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <button type="button" id="3"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Ja, sofort. Was bekommen Sie?<span
                                class="tran"><br>&nbsp;<small>네, 바로 가겠습니다. 뭘
                                        드시겠습니까?</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-3">
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <button type="button" id="4"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Eine Schweinehaxe mit Sauerkraut, bitte.<span
                                class="tran"><br>&nbsp;<small>자우어크라우트가 있는
                                        슈바이네학세요.</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-4">
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <button type="button" id="5"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Ich nehme eine Gulaschsuppe und einen
                            Salat.<span class="tran"><br>&nbsp;<small>굴라쉬수프와
                                        샐러드요.</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-5">
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <button type="button" id="6"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>Und was möchten Sie trinken?<span
                                class="tran"><br>&nbsp;<small>그러면 음료는 뭘
                                        드시겠습니까?</small></span></td>
                        <td>
                            <div class="btn-group q"
                                 data-toggle="buttons" role="group" id="qst-6">
                                <div class="btn btn-light pop o"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Kellner
                                </div>
                                <div class="btn btn-light pop x"
                                     data-toggle="popover"
                                     data-container="body"
                                     data-placement="top"
                                     data-content="정답이 아니에요.">
                                    Gast
                                </div>
                            </div>
                        </td>
                    </tr>
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

<div id="last" class="d-none"></div>

<script src="./dev/js/popper.min.js"></script>
<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./dev/oxsound.php"); ?>
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
        } /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 5/r5 D3.mp3"],
            sprite: {
                "0": [1947, 79072],
                "1": [12843, 2173],
                "2": [21566, 3593],
                "3": [33636, 3578],
                "4": [44884, 3224],
                "5": [66095, 3932],
                "6": [78258, 2636]
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
                });
                $("[data-toggle='popover']").popover({
                    delay: {
                        'hide': 1000
                    },
                    container: "body"
                });
                $(".pop").click(function () {
                    /* 가장 먼저 지문에 'an' 넣기 */
                    if (!$(this).siblings().hasClass("an")) {
                        $(this).addClass("an");
                        $(this).addClass("btn-warning");
                        $(this).parent().children().removeClass("btn-light");
                    }; /* 문제 풀이 정도 업데이트 */
                    var perc = Math.round(($(".an").length / $(".q").length) * 100);
                    $(".progress>.bar").attr("width", perc + "%;");
                }); /* 팝업 내용 사라지기 */
                $(".pop").popover().click(function () {
                    setTimeout(function () {
                        $(".pop").popover('hide');
                    }, 500);
                }); /* 정답확인 */
                $("#chk").on("click", function () {
                    if ($(".an").length < $(".q").length) {
                        var na = "";
                        $(".q").each(function () {
                            if (!$(this).find("div").hasClass("an")) {
                                if (na != "") {
                                    na += ",";
                                }
                                na += $(this).attr("id").substr(-1);
                            };
                        });
                        alert("모든 문제를 풀어주세요.");
                    } else {
                        $(".pop").each(function () {
                            $(this).removeClass("btn-info");
                            if ($(this).hasClass("o") && $(this).hasClass(
                                "an")) {
                                $(this).removeClass("btn-warning");
                                $(this).addClass("btn-success");
                                $(this).closest(".sen").find(".nu").addClass(
                                    "rounded p-1 px-2 text-white bg-success font-weight-bold"
                                );
                                $(this).closest(".sen").find(".nu").text($.trim(
                                    $(this).text()));
                            } else if ($(this).hasClass("o")) {
                                $(this).addClass("btn-<?php echo($color); ?>");
                                $(this).closest(".sen").find(".ans").html($
                                    .trim($(this).closest(".sen").find(".o")
                                        .text()));
                                $(this).closest(".sen").find(".nu").addClass(
                                    "rounded p-1 px-2 text-white bg-danger font-weight-bold"
                                );
                                $(this).closest(".sen").find(".ans").addClass(
                                    "rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2"
                                );
                            } else if ($(this).hasClass("an")) {
                                $(this).addClass("btn-warning");
                                $(this).closest(".sen").find(".nu").text($.trim(
                                    $(this).text()));
                            } else {
                                $(this).addClass("btn-light");
                            };
                            // $(this).remove();
                        });
                        $(".tran").show();
                        $(".nu").show();
                        $(".q").hide();

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $(".btn-success").length; /* 맞춘 항목 수 */
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
                            var st = "쓰읍~ 다시 해 보실까요!";
                            var cl = "primary";
                        } else {
                            var st = "좀 더 분발해 주세요";
                            var cl = "danger";
                        }
                        $(this).addClass("btn-" + cl + " text-" + tcl);
                        $(this).html("<h4>" + qa + "문제 중" + qr + "개를 맞히셨네요!<br>" + st +
                            "</h4>");
                    };
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
                            pa[last] = $("#" + last).html();
                        });
                    }
                } else if (sen[last] == 2) {
                    if ($("#" + last).hasClass("itm")) {
                        // $("#" + last + ">.tran").show();
                    }
                    // $("#" + last).closest("tr").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }

        });
    });

</script>
</body>

</html>
