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
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">
                        <button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        Sommerschlussverkauf im Kaufhaus Neuwelt
                        <span class="tran"><br/><small>노이벨트 백화점 여름상품 바겐세일</small></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="ps-5">
                        Sparen beim Einkauf und dabei mehr entdecken.
                        <span class="tran"><br/><small>쇼핑하면서 절약하는 동시에 더 많이 발견.</small></span>
                    </td>
                </tr>
                <tr>
                    <td class="ps-5">
                        Designermode für Damen, Herren und Kids im Sonderangebot.
                        <span class="tran"><br/><small>여성, 남성, 아동용 유명 디자이너 패션 특가세일.</small></span>
                    </td>
                </tr>
                <tr>
                    <td class="ps-5">
                        Schuhe und Sportbekleidung jetzt bis zu 50% reduziert!
                        <span class="tran"><br/><small>신발과 스포츠의류는 지금 50%까지 할인!</small></span>
                    </td>
                </tr>
                <tr>
                    <td class="ps-5">
                        Zusätzlich 20% auf Wäsche, Taschen und mehr.
                        <span class="tran"><br/><small>언더웨어, 가방과 더 많은 상품 추가로 20% 더 할인</small></span>
                    </td>
                </tr>
                <tr>
                    <td class="ps-5">
                        Besuchen Sie uns mit Freunden und Familie.
                        <span class="tran"><br/><small>친구, 가족과 함께 방문하세요.</small></span>
                    </td>
                </tr>
                <tr>
                    <td class="ps-5">
                        Montag bis Samstag von 9.30 Uhr bis 20 Uhr
                        <span class="tran"><br/><small>월요일부터 토요일까지 9시 30분부터 20시까지</small></span>
                    </td>
                </tr>
                </tbody>
            </table>
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
                        <td>1. Am Dienstag nach 21.00 Uhr kann man noch einkaufen.
                            <span class="tran"><br/><small>화요일엔 21시 이후에도 쇼핑할 수 있다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-1" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
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
                        <td>2. Das Kaufhaus verkauft auch für Kinder Markenklamotten.
                            <span class="tran"><br/><small>이 백화점은 아동용 브랜드 의류도 판매한다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-2" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>3. Wäsche kann man hier viel billiger kaufen.
                            <span class="tran"><br/><small>여기서 언더웨어를 훨씬 더 싸게 살 수 있다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-3" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Falsch
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </td>
                        <td>4. Das Kaufhaus ist täglich mehr als 10 Stunden geöffnet.
                            <span class="tran"><br/><small>이 백화점은 매일 10시간 이상 개점한다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-4" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
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
                        <td>5. Jogginganzüge sind jetzt sehr günstig.
                            <span class="tran"><br/><small>조깅복은 지금 매우 저렴하다.</small></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group q" id="qst-5" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
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
            src: ["./dev/sounds/Reihe 11/r11 B3.mp3"],
            sprite: {
                "0": [229, 77998],
                "1": [36530, 6010],
                "2": [43742, 5361],
                "3": [50873, 4308],
                "4": [56545, 6010],
                "5": [64405, 5189],
                "6": [6306, 29427]
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
                                }
                                ;
                            });

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".btn-success").length; /* 맞춘 항목 수 */
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
                        }
                        ;
                    }
                });
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
