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
                <h3>[ <small><button type="button"
                                     class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                        버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-sm-1 col-2 p-3 align-middle">
                        <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-sm-11 col-10 p-3 border border-dark rounded-3">
                        <strong>Mina</strong>: Hm, der Rooibostee schmeckt sehr gut. Tim, probier doch mal. Die Teesorten mit diesem Label bürgen mit ihrem Namen für die Qualität der Produkte. Deshalb kaufe ich sie, obwohl sie etwas teurer sind. Sie sind sogar UTZ zertifiziert.
                        <span class="tran"><br><small><strong>미나</strong>: 흠, 루이보스차 맛이 아주 좋아. 팀, 한 번 마셔봐. 이 라벨이 붙은 차는 그 이름으로 제품의 품질을 보증해. 그래서 조금 더 비싸지만 구입하고 있어. 이것들은 심지어 UTZ 인증을 받았어.</small></span>
                    </div>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-sm-1 col-2 p-3 align-middle">
                        <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-sm-11 col-10 p-3 border border-dark rounded-3">
                        <strong>Tim</strong>: Mina, Was ist UTZ? Was hat das mit Tee zu tun?
                        <span class="tran"><br><small><strong>팀</strong>: 미나, UTZ가 뭐야? 이것이 차와 무슨 관련이 있어?</small></span>
                    </div>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-sm-1 col-2 p-3 align-middle">
                        <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-sm-11 col-10 p-3 border border-dark rounded-3">
                        <strong>Mina</strong>: UTZ ist eine renomierte unabhängige Stiftung in Amsterdam und wurde 2002 gegründet. UTZ bedeutet in der Maya-Sprache „Gut“. Sie unterhält nach ihren eigenen Angaben weltweit das größte Labelprogramm für Kaffee und zertifiziert Rooibos und Tee. Sie stellt hohe Anforderungen an zertifizierte Produkte, die von Bauern mit besseren Anbaumethoden im Hinblick auf Menschen und Umwelt angebaut werden. Außerdem ist es den Verbrauchern möglich, durch die Codes die Rohstoffe bis hin zum Anbaubetrieb zurückzuverfolgen.
                        <span class="tran"><br><small><strong>미나</strong>: UTZ는 암스테르담에 있는 유명한 독립 재단이고 2002년에 설립되었어. UTZ는 마야어로 "좋은"을 의미해. 자체 설명에 따르면 세계 최대의 커피 라벨 프로그램을 운영하고 루이보스와 차를 인증하고 있어. 이 재단은 사람과 환경을 고려한 더 나은 재배방법으로 농민이 재배하는 인증 제품에 많은 요구사항을 부과하고 있어. 또한 소비자가 코드를 통해서 원료를 재배업체까지 추적 할 수 있어.</small></span>
                    </div>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-sm-1 col-2 p-3 align-middle">
                        <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </div>
                    <div class="col-sm-11 col-10 p-3 border border-dark rounded-3">
                        <strong>Tim</strong>: Verstehe. Man könnte also sagen, dass das UTZ-Siegel für eine bessere Vorsorge für zukünftige Generationen steht.
                        <span class="tran"><br><small><strong>팀</strong>: 그렇구나. 그러면 UTZ 인증은 미래 세대를 위한 더 나은 대비를 의미한다고 말할 수 있겠다.</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col" class="w-25 text-center">richtig / falsch</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><strong>1</strong>. Tim kauft gern Teesorten, die UTZ zertifiziert sind.
                            <span class="tran"><br><small>팀은 UTZ 인증을 받은 차를 구매하기를 좋아한다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                        <td><strong>2</strong>. Diese Produkte sind qualitativ sehr gut, und sogar sehr günstig.
                            <span class="tran"><br><small>2. 이 제품품질이 매우 좋고, 가격도 매우 저렴하다</small></span>
                        </td>
                        <td class="text-center py-2">
                            <div class="btn-group q" id="qst-2" data-toggle="buttons" role="group">
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
                        <td><strong>3</strong>. UTZ ist eine berühmte Stiftung in den Niederlanden.
                            <span class="tran"><br><small>UTZ는 네덜란드에 있는 유명한 재단이다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                        <td><strong>4</strong>. UTZ wurde 2010 gegründet.
                            <span class="tran"><br><small>UTZ는 2010년에 세워졌다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                        <td><strong>5</strong>. UTZ bedeutet in der Maya-Sprache „Gut“.
                            <span class="tran"><br><small>UTZ는 마야어로 “좋은”을 의미한다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                    <tr>
                        <td><strong>6</strong>. Die Produkte dafür sind Rooibos und Tee.
                            <span class="tran"><br><small>이를 위한 제품들은 루이보스와 차다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                        </td>
                    </tr>
                    <tr>
                        <td><strong>7</strong>. Minderjährige dürfen hier beim Anbau nur für einen guten Lohn angestellt werden.
                            <span class="tran"><br><small>7. 미성년자곳에서 경작할 때 좋은 임금으로 고용될 수 있다</small></span>
                        </td>
                        <td class="text-center py-2">
                            <div class="btn-group q" id="qst-7" data-toggle="buttons" role="group">
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
                        <td><strong>8</strong>. Sie werden von den Bauern mit besseren Anbaumethoden, besonders im Hinblick auf die Umwelt angebaut.
                            <span class="tran"><br><small>이것들은 특히 환경을 고려한 더 나은 재배방법으로 농부들에 의해 재배된다.</small></span>
                        </td>
                        <td class="text-center py-2">
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
                        </td>
                    </tr>
                    <tr>
                        <td><strong>9</strong>. Die Verbraucher können durch Codes die Produkte bis hin zum Anbaubetrieb zurückverfolgen.
                            <span class="tran"><br><small>소비자들은 코드를 통해 제품을 재배업체까지 추적할 수 있다.</small></span>
                        </td>
                        <td class="text-center py-2">
                            <div class="btn-group q" id="qst-9" data-toggle="buttons" role="group">
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
            src: ["./dev/sounds/Reihe 11/r11 D2.mp3"],
            sprite: {
                "0": [3, 87015],
                "1": [14755, 19512],
                "2": [34631, 4470],
                "3": [39101, 38480],
                "4": [78462, 8557]
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
                    $("#" + last).closest("row").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
