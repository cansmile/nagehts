<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Kreuzen Sie an.<br>
                    <small>표시해 보세요.</small>
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>

                </h2>
                <h3>[ <small>문제를 모두 풀고 확인하세요.</small> ]</h3>
            </div>
        </div>
        <div class="row border border-dark rounded-3">
            <div class="col-12 lh250">Hallo Lisa,</div>
            <div class="col-12 lh250">wie geht's dir? <span class="tran"><br/><small></small></span>
                Ich habe dir ja von den Adidas-Turnschuhen erzählt, die ich mir unbedingt holen wollte. <span
                    class="tran"><br/><small></small></span><br/>
                Ich bin extra ins Charlotte-<br/>Outlet gefahren, aber da gab es leider keine mehr in meiner Schuhgröße
                - alle ausverkauft!
                <span class="tran"><br/><small></small></span>
                Ich bin ganz enttäuscht nach Hause, um gleich im Internet nach dem gleichen Modell zu suchen. <span
                    class="tran"><br/><small></small></span>
                Und siehe da! <span class="tran"><br/><small></small></span>
                Die gleichen Modelle in einer noch schöneren Farbe und auch viel günstiger! <span
                    class="tran"><br/><small></small></span>
                Ich konnte es kaum glauben und war so froh, sodass ich sie sofort bestellt habe. <span
                    class="tran"><br/><small></small></span>
                Super, oder? <span class="tran"><br/><small></small></span>
                Ich meld' mich heute Abend mal bei dir. <span class="tran"><br/><small></small></span>
                Lass uns ins Café gehen und plaudern, okay? <span class="tran"><br/><small></small></span>
            </div>
            <div class="col-12 lh250">Bis später.</div>
            <div class="col-12 lh250 mt-3">Laura</div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="30">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col" class="w-25 text-center">richtig / falsch</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>1. Laura hat Turnschuhe im Charlotte-Outlet gekauft.
                            <span class="tran"><br/><small>1.  라우라는 운동화를 샤를롯데 아울렛에서 샀다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-1" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>2. Da gab es keine mehr in ihrer Schuhgröße.
                            <span class="tran"><br/><small>2.  그곳에는 그녀의 운동화 사이즈가 더이상 없었다..</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-2" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요!">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>3. Im Internet hat sie die gleichen Modelle gefunden.
                            <span class="tran"><br/><small>3.  그녀는 인터넷에서 같은 모델을 발견했다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-3" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요!">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>4. Sie hat die Turnschuhe online teurer gekauft
                            <span class="tran"><br/><small>4.  그녀는 그 운동화를 온라인으로 더 비싸게 샀다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-4" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>5. Heute abend möchte sie ihre Freundin treffen.
                            <span class="tran"><br/><small>5.  오늘 저녁 그녀는 친구와 만나고 싶어한다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-5" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요!">
                                    Falsch
                                </div>
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

<div id="last" class="d-none"></div>

<script src="./dev/js/popper.min.js"></script>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
    });

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
            src: ["./dev/sounds/Reihe 11/r11 E9.mp3"],
            sprite: {
                "0": [044, 56573],
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
                        $(this).parent().children().removeClass(
                            "btn-light");
                    }
                    ;
                    /* 문제 풀이 정도 업데이트 */
                    var perc = Math.round(($(".an").length / $(".q").length) *
                        100);
                    $(".progress>.bar").attr("width", perc + "%;");
                });

                /* 팝업 내용 사라지기 */
                $(".pop").popover().click(function () {
                    setTimeout(function () {
                            $(".pop").popover('hide');
                        },
                        500);
                });

                /* 정답확인 */
                $("#chk").on("click", function () {
                        if ($(this).attr("id") == "chk") {
                            if ($(".an").length < $(".q").length) {
                                var na = "";
                                $(".q").each(function () {
                                    if (!$(this).find("div").hasClass("an")) {
                                        if (na != "") {
                                            na += ", ";
                                        }
                                        na += $(this).attr("id").substr(4);
                                    }
                                    ;
                                });
                                alert("모든 문제를 풀어주세요.");
                            } else {
                                $(".tran").show();
                                $(this).attr("id", "done");
                                $(".pop").each(function () {
                                    $(this).removeClass("btn-info");
                                    if ($(this).hasClass("o") && $(this).hasClass("an")) {
                                        $(this).removeClass("btn-warning");
                                        $(this).addClass("btn-success");
                                    } else if ($(this).hasClass("o")) {
                                        $(this).addClass("btn-primary");
                                    } else if ($(this).hasClass("an")) {
                                        $(this).addClass("btn-warning");
                                    } else {
                                        $(this).addClass("btn-light");
                                    }
                                    ;
                                });/* 정답 확인 div 상자 배경색 속성 없애기 */
                                $(this).removeClass("btn-light ");
                                var qa = $(".q").length; /* 전체 문항 수 */
                                var qr = $(".btn-success").length; /* 맞춘 항목 수 */
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
                            ;
                        }
                    }
                );
                var pan = new Array();
                pan = [];
                var il = $(".q").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#qst-" + pan[p];
                    $("#qst-" + pan[p] + ">div.o").addClass("an");
                    $("#qst-" + pan[p] + ">div.o").addClass("btn-warning");
                    $("#qst-" + pan[p] + ">div.o").removeClass("btn-light");
                    $("#qst-" + pan[p] + ">div.o").closest("tr").find(".tran").show();
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
