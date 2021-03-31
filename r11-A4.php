<?php require_once( "heading.php" ); ?>
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
                        class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-3 so"
                        id="1">
                    alles<span class="tran"><br/><small>모두</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm px-3 so"
                        id="2">
                    anderen<span class="tran"><br/><small>다른</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3 so"
                        id="3">
                    eigentlich<span class="tran"><br/><small>원래</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3 so"
                        id="4">
                    frisches<span class="tran"><br/><small>신선한</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3 so"
                        id="5">
                    hausgemachte<span class="tran"><br/><small>수제의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3 so"
                        id="6">
                    jeden ~<span class="tran"><br/><small>마다</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm px-3 so"
                        id="7">
                    online<span class="tran"><br/><small>온라인으로</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3 so"
                        id="8">
                    regionale<span class="tran"><br/><small>지역의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3 so"
                        id="9">
                    schade<span class="tran"><br/><small>아쉬운</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3 so"
                        id="10">
                    verschiedene<span class="tran"><br/><small>다양한</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3 so"
                        id="11">
                    zufrieden<span class="tran"><br/><small>만족한</small></span>
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
                <h2>[ <small>Vervollständigen Sie die Sätze mit den richtigen Wörtern.
                        <span class="tran"><br /><small>리자는 요일장에 갔던 일을 페이스북에 씁니다. 알맞은 단어로 문장을 완성하세요.</small></span>
                    </small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">번호</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼은 정답을 확인해야 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2">
            <div class="col-12 mb-5">
                Hallo, Mina,<span class="tran"><br/><small>안녕, 미나,</small></span>
            </div>
            <div class="col-12 lh250">
                gestern war ich auf dem Samstagsmarkt in der Nähe von meiner Wohnung. Da gibt es
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Samstag ganz tolle
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Produkte. Deshalb kaufe ich hier oft
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Obst, Gemüse,
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Würste, Käse usw. Man kann vor allem auch
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Kuchen probieren und natürlich auch kaufen.
                <span class="tran"><br><small>어제 나는 집 근처 토요일장에 갔었어. 그 시장에는 토요일마다 아주 좋은 지역 특산품들이 있어. 그래서 여기서 자주 신선한 과일, 채소, 다양한 소시지, 치즈 등을 사곤 해. 특히 수제 케이크도 맛볼 수 있고 물론 살 수도 있어.</small></span>
            </div>
            <div class="col-12 lh250">
                Ich war sehr
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                mit meinem Einkauf, denn ich konnte
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                finden, was ich
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                kaufen wollte. Es ist aber immer sehr
                <div class="itm-lst 1itm d-inline-flex ms-1 me-0 pe-0 t-3" id="lst-9">
                    <h2 class="btn btn-warning btn-md ttl w-100 me-0"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                , der Wochenmarkt findet nämlich nur einmal pro Woche statt. Deshalb gehe ich dann in den Supermarkt,
                wenn ich an einem
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-10">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Wochentag etwas besorgen muss. Auf dem Markt gibt es ja auch keine Haushaltswaren. Die muss ich dann
                auch im Supermarkt oder
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-11">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                kaufen.
                <span class="tran"><br><small>내가 쇼핑한 것에 매우 만족했는데, 원래 내가 사려던 것을 모두 찾을 수 있어서야. 하지만 요일장이 주에 한 번만 열려서 언제나 매우 아쉬워. 그 떄문에 다른 요일에 무엇인가 사야할 떄면 나는 슈퍼마켓에 가. 물론 시장에는 생활용폼도 없어. 그럴 경우에도 그것들을 슈퍼마켓이나 온라인으로 사야해.</small></span>
            </div>
            <div class="col-12">
                Wie ist es bei dir ? Erzähl mal!
                <span class="tran"><br><small>너네 나라에선 어떠니? 얘기해줘!</small></span>
            </div>
            <div class="col-12 mt-5">
                Liebe Grüße
                <span class="tran"><br><small>인사를 전하며,</small></span>
            </div>
            <div class="col-12">
                Lisa
                <span class="tran"><br><small>리자</small></span>
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
        <div class="row mt-5">
            <div class="col-12 my-2"><span class="tipp">TIPP</span>&nbsp;<strong>Deklination der Adjektive</strong>&nbsp;<small>형용사의
                    어미변화</small></div>
            <div class="col-12 mt-3">
                <table class="table table-bordered border-light text-center">
                    <thead class="table-light fw-bold">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                        <th class="text-primary w-25" scope="col">maskulin</th>
                        <th class="text-purple w-25" scope="col">neutrum</th>
                        <th class="text-danger w-25" scope="col">feminin</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" rowspan="3" class="table-light fw-bold align-middle">단수</th>
                        <td class="table-light fw-bold">1격</td>
                        <td class="text-primary">hausgemachter Kuchen ein anderer Wochentag
                        </td>
                        <td class="text-purple align-middle" rowspan="2">frisches Obst</td>
                        <td class="text-danger align-middle" rowspan="2">leckere Wurst</td>
                    </tr>
                    <tr>
                        <td class="table-light fw-bold">4격</td>
                        <td class="text-primary">hausgemachten Kuchen einen anderen Wochentag</td>
                    </tr>
                    <tr>
                        <td class="table-light fw-bold">3격</td>
                        <td class="text-primary">hausgemachtem Kuchen einem anderen Wochentag</td>
                        <td class="text-purple">frischem Obst</td>
                        <td class="text-danger">leckerer Wurst</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3" class="table-light fw-bold align-middle">복수</th>
                        <td class="table-light fw-bold">1격</td>
                        <td class="text-primary align-middle" rowspan="2">andere Wochentage</td>
                        <td class="text-purple align-middle" rowspan="2">regionale Produkte</td>
                        <td class="text-danger align-middle" rowspan="2">verschiedene Würste</td>
                    </tr>
                    <tr>
                        <td class="table-light fw-bold">4격</td>
                    </tr>
                    <tr>
                        <td class="table-light fw-bold">3격</td>
                        <td class="text-primary">anderen Wochentagen</td>
                        <td class="text-purple">regionalen Produkten</td>
                        <td class="text-danger">verschiedenen Würsten</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
    $(".tran").hide();
    $("#chk").hide();

    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array(),
        sen = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
        sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
            .html();
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
        } /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 11/r11 A4.mp3"],
            sprite: {
                "0": [40, 68779],
                "1": [69473, 1429],
                "2": [71370, 1212],
                "3": [73467, 1504],
                "4": [75856, 1372],
                "5": [77964, 1702],
                "6": [80319, 1349],
                "7": [82522, 1424],
                "8": [84469, 1753],
                "9": [87018, 1342],
                "10": [89163, 1678],
                "11": [91679, 1322]
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

                $(".tran").hide();
                $("#chk").hide();

                $(document).ready(function () {
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show();
                            $("#0").show();

                            /* 정답 확인 div 상자 배경색 속성 없애10 */
                            $(this).removeClass("btn-light ");

                            $(".itm-lst").each(function () {
                                if ($(this).find(
                                    "button.btn")) {
                                    $(this).find("button.btn")
                                        .addClass(
                                            "text-success");
                                }
                            });

                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".text-success")
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

                            $(this).addClass("btn-" + cl + " text-" +
                                tcl);
                            $(this).html("<h4>" + qa + "문제 중 " + qr +
                                "개를 맞히셨네요!<br>" + st + "</h4>");

                            $(".btn-lg").text().appendTo($(this)
                                .closest("td"));
                            $(".btn-lg").remove();
                        } else {
                            $("div.itm-lst").each(function (idx) {
                                if (!$(this).find("button")
                                    .length) {
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

                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id"))
                                    .insertBefore($("#lst-" + pan[p] +
                                        ">h2"));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-inline-block");
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
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
