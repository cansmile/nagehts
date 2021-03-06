    <?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Was ist Ihr Familienstand? <br>
                        <small>가족상황이 어떻게 되죠?</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                    <h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col" width="25%"><img
                                        src="./dev/images/Reihe 3/Reihe-3-C2-1.png"
                                        style="max-width: 100%; height: auto;" alt=""></th>
                                <th scope="col" width="25%"><img
                                        src="./dev/images/Reihe 3/Reihe-3-C2-2.png"
                                        style="max-width: 100%; height: auto;" alt=""></th>
                                <th scope="col" width="25%"><img
                                        src="./dev/images/Reihe 3/Reihe-3-C2-3.png"
                                        style="max-width: 100%; height: auto;" alt=""></th>
                                <th scope="col" width="25%"><img
                                        src="./dev/images/Reihe 3/Reihe-3-C2-4.png"
                                        style="max-width: 100%; height: auto;" alt=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ledig&nbsp;<small>미혼</small></td>
                                <td>
                                    verheiratet&nbsp;<small>기혼</small></td>
                                <td>
                                    geschieden&nbsp;<small>이혼</small></td>
                                <td>
                                    verwitwet&nbsp;<small>사별</small></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="row">
                                    <div class="col-1">
                                        <button type="button" id="1"
                                                class="so btn btn-outline-danger">▶</button>
                                    </div><div class="col-9 text-start lh250">
                                        Was ist Ihr Familienstand?<span class="tran"><br><small>가족상황이 어떻게
                                                    되죠?</small></span>
                                    </div>
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="row">
                                    <div class="col-1">
                                        <button type="button" id="2"
                                                class="so btn btn-outline-danger">▶</button>
                                    </div><div class="col-9 text-start lh250">
                                        Ich bin verheiratet.<span class="tran"><br><small>저는
                                                    결혼했어요.</small></span>
                                    </div>
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="row">
                                    <div class="col-1">
                                        <button type="button" id="3"
                                                class="so btn btn-outline-danger">▶</button>
                                    </div><div class="col-9 text-start lh250">
                                        Haben Sie Kinder?<span class="tran"><br><small>아이가
                                                    있으신가요?</small></span>
                                    </div>
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="row">
                                    <div class="col-1">
                                        <button type="button" id="4"
                                                class="so btn btn-outline-danger">▶</button>
                                    </div><div class="col-9 text-start lh250">
                                            <span class="sen">Nein, ich habe <span class="nu"></span>
                                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                                    data-toggle="buttons" role="group" id="qst-1">
                                                    <div class="btn btn-light pop x px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                                        kein
                                                    </div>
                                                    <div class="btn btn-light pop o px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답!">
                                                        keine
                                                    </div>
                                                    <div class="btn btn-light pop x px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                                        nicht
                                                    </div>
                                                </div> Kinder. Und Sie?<span class="ans"></span>
                                            </span>
                                            <span class="tran"><br><small>아뇨, 저는 아이가
                                                    없어요. 당신은요?</small></span>
                                    </div>
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="row">
                                    <div class="col-1">
                                        <button type="button" id="5"
                                                class="so btn btn-outline-danger">▶</button>
                                    </div><div class="col-9 text-start lh250">
                                            <span class="sen">Ich bin <span class="nu"></span>
                                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                                    data-toggle="buttons" role="group" id="qst-2">
                                                    <div class="btn btn-light pop x px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                                        kein
                                                    </div>
                                                    <div class="btn btn-light pop x px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                                        keine
                                                    </div>
                                                    <div class="btn btn-light pop o px-1" data-toggle="popover"
                                                        data-container="body" data-placement="top" data-content="정답!">
                                                        nicht
                                                    </div>
                                                </div> verheiratet. Ich bin ledig.<span class="ans"></span>
                                            </span>
                                            <span class="tran"><br><small>저는 결혼하지 않았어요.
                                                    저는 미혼이에요.</small></span>
                                    </div>
                                </div></td>
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
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-sm table-borderless">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="p-2"><span class="tipp">TIPP</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">부정사 nicht는 동사, 형용사, 부사 등을 부정하는데
                                    사용되고, kein은 명사를 부정하는데 사용된다.</th>
                            </tr>
                        </tbody>
                    </table>
                </s>
            </di>
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
                src: ["./dev/sounds/Reihe 3/r3 C2.mp3"],
                sprite: {
                    "0": [2510, 25292],
                    "1": [7473, 2181],
                    "2": [11794, 1840],
                    "3": [15175, 1601],
                    "4": [18147, 3761],
                    "5": [24350, 3180]
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
                    });
                    /* 정답확인 */
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
                            alert("모든 문제를 풀어주세요."); /* alert(na +"번 문제를 풀어주세요."); */
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
                                $(this).remove();
                            });
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
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
                        $("#" + last).closest("tr").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });
    </script>
</body>
</html>
