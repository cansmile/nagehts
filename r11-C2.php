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
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
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
                        <br />1. Das Online-Shopping wird immer wichtiger für uns. Es gehört zu unserem Alltag. Nicht selten kaufe ich auch im Internet ein. Dort kaufe ich gern Schuhe oder Kleidung, weil es viele Angebote gibt und man sie miteinander vergleichen kann. Vor allem wird die Ware in nur ein paar Tagen vor die Tür geliefert. Was nicht passt, kann einfach wieder zurückgeschickt werden. Das finde ich einfach prima.
                        <br /><br /><strong>Julia 20</strong><br />
                        <span class="tran"><br><small>온라인 쇼핑은 우리에게 점점 더 중요 해지고 있습니다. 그것은 우리 일상생활의 일부입니다. 저도 가끔 인터넷 쇼핑을 합니다. 거기에서 저는 신발이나 옷을 사는 것을 좋아합니다, 왜냐하면 여러 이벤트가 있고 서로 비교할 수 있기 때문입니다. 무엇보다 상품이 단 며칠 후에 문 앞으로 배송됩니다. 맞지 않는 것은 쉽게 반품할 수 있습니다. 정말 대단하다고 생각합니다.
<br /><br /><strong>율리아 20</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
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
                        <br />2. Online-Shopping ist sehr bequem. Das gebe ich zu. Aber man kann durch den Einkauf den kleinen, lokalen Läden schaden, die dadurch Verluste machen. Man verursacht beim Online Shopping Verpackungsmüll. Nee, lieber nicht.
                        <br /><br /><strong>Wolfgang 40</strong><br />
                        <span class="tran"><br><small>온라인 쇼핑은 정말 편리합니다. 그것은 저도 동의합니다. 하지만 온라인 구매로 인해 영세한 지역의 상점이 손해를 보는 피해를 줄 수 있습니다. 온라인 쇼핑을 할 때 포장재 쓰레기가 발생합니다. 아니오, 저는 좋아하지 않는 편입니다.
<br /><br /><strong>볼프강 40</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
                        <div class="btn-group q" id="qst-3" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Falsch
                                </div>
                            </div>
                        <br />3. Unschlagbar ist der Einkauf im Internet, weil es dort einfach alles gibt. Mir ist es schon oft passiert, dass ich im Laden etwas bestimmtes kaufen wollte und es dort einfach nicht gefunden habe. Ein paar Klicks im Internet und schon findet man, was man sucht und auch gleich bestellt. Das ist wunderbar. Ich kann es nur jedem empfehlen.
                        <br /><br /><strong>Michael 28</strong><br />
                        <span class="tran"><br><small>인터넷 쇼핑은 그냥 모든 것이 있기 때문에 정말 탁월합니다. 상점에서 어떤 것을 사고 싶었는데 그곳에서 쉽게 찾을 수 없었던 일이 전에 종종 있었습니다. 인터넷에서는 몇 번 클릭하면 금새 원하는 제품을 찾아 바로 주문할 수 있습니다. 정말 대단합니다. 누구에게나 추천 할 수 있습니다.
<br /><br /><strong>미하엘 28</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
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
                        <br />4. Wenn der Winter kommt und das Weihnachtsfest vor der Tür steht, sind die Lieferungen praktisch. Am Abend bestelle ich auf der Couch schnell die Geschenke, und ein paar Tage später stehen sie bei mir vor der Tür. Das Online-Shopping-Wunder ist eine geniale Erfindung.
                        <br /><br /><strong>Jan 22</strong><br />
                        <span class="tran"><br><small>겨울이 오고 크리스마스가 임박하면 배달이 편리합니다. 저녁에 소파에 앉아 선물을 재빨리 주문하면 며칠 후 그것들은 우리 집 문 앞에 있습니다. 온라인 쇼핑의 기적은 천재적인 발명품입니다.
<br /><br /><strong>얀 22</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
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
                        <br />5. Ich liebe Einkaufsbummel, und zwar gemeinsam mit meinen Freundinnen. Wir genießen es, entspannt shoppen zu gehen. Wir können die Kleidungen anprobieren und uns gegenseitig beraten, was uns steht und was nicht. Danach gehen wir auch ins Café und plaudern. Gemeinsam einen Eiskaufsbummel zu machen macht uns mehr Spaß als allein am Computer zu sitzen.
                        <br /><br /><strong>Erika 25</strong><br />
                        <span class="tran"><br><small>나는 쇼핑하며 돌아다니는 것, 정확히는 친구들과 함께 쇼핑하기를 좋아합니다. 우리는 여유 있게 쇼핑하는 것을 즐깁니다. 우리는 옷을 입어보면서 무엇이 어울리는지 어울리지 않는지 서로 조언해줄 수 있습니다. 그런 다음 카페에 가서 이야기를 나눕니다. 함께 쇼핑하며 돌아다니는 것이 혼자 컴퓨터 앞에 앉아 있는 것보다 더 즐겁습니다.
<br /><br /><strong>에리카 25</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
                        <div class="btn-group q" id="qst-6" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Falsch
                                </div>
                            </div>
                        <br />6. Auch wenn viele Läden anbieten, Lebensmittel nach Hause zu liefern, gehe ich wie die meisten Deutschen nach wie vor lieber selber in den Supermarkt, um einzukaufen. Dadurch kann ich mit meinen Augen überprüfen, ob das Obst oder Gemüse tatsächlich frisch ist.
                        <br /><br /><strong>Luise 55</strong><br />
                        <span class="tran"><br><small>많은 가게에서 식료품을 집으로 배달해준다 하더라도, 저는 대부분의 독일인처럼 여전히 직접 슈퍼마켓에 장을 보러 가는 것을 더 좋아합니다. 이를 통해 과일이나 채소가 실제로 신선한지 눈으로 확인할 수 있습니다.
<br /><br /><strong>루이제 55</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="7" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
                        <div class="btn-group q" id="qst-7" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Falsch
                                </div>
                            </div>
                        <br />7. Ich lasse mir keine Ware aus China oder anderen entfernten Ländern schicken. Sonst haben wir wieder ein Problem mit dem Umweltschutz. Die Registrierung wird zwar einfacher, das Bestellen immer schneller, aber die Mitarbeiter werden oft nicht gut behandelt. Deswegen versuche ich, selbst in den Läden einzukaufen.
                        <br /><br /><strong>Eva 58</strong><br />
                        <span class="tran"><br><small>나는 중국이나 멀리 떨어진 다른 나라에서 물건을 시키지 않습니다. 그렇지 않으면 환경 보호에 다시 문제가 생길 것입니다. 가입이 더 쉬워지고 주문이 점점 더 빨라지지만 직원들은 종종 잘 대우받지 못합니다. 그래서 저는 가게에서 직접 사려고 합니다.
<br /><br /><strong>에파 58</strong>
</small></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="row">
                    <div class="col-2 p-3 align-middle">
                        <button type="button" id="8" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-10 p-3 border border-dark rounded-3">
                        <div class="btn-group q" id="qst-8" data-toggle="buttons" role="group">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    Richtig
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    Falsch
                                </div>
                            </div>
                        <br />8. Ich lasse mich gern in einem Geschäft beraten. Die Verkäufer/-innen helfen mir bei der Wahl. Das gibt es im Internet eben nicht. Mir fehlen die Menschen, die mich angenmessen beraten können. Ich lese auch die Bewertungen von Produkten. Aber leider sind diese oft nicht echt.
                        <br /><br /><strong>Jana 62</strong><br />
                        <span class="tran"><br><small>저는 상점에서 조언받는 것을 좋아합니다. 판매원이 저의 선택에 도움을 줍니다. 바로 그것이 인터넷에는 없습니다. 저에게 적절한 조언을 해줄 수 있는 사람들이 없어서 아쉽습니다. 제품 리뷰도 읽습니다. 그러나 유감스럽게도 이들은 종종 진짜가 아닙니다
<br /><br /><strong>야나 62</strong>
</small></span>
                    </div>
                </div>
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
            src: ["./dev/sounds/Reihe 11/r11 C2.mp3"],
            sprite: {
                "0": [308, 215413],
                "1": [10318, 34386],
                "2": [45077, 18422],
                "3": [64099, 25095],
                "4": [89815, 19384],
                "5": [109689, 27469],
                "6": [137404, 23109],
                "7": [160850, 27205],
                "8": [188933, 26883]
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
