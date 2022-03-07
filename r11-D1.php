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
                <button type="button" id="1" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm px-3 itm so">
                    anbaut<span class="tran"><br><small>재배하다</small></span>
                </button>
                <button type="button" id="2" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm px-3 itm so">
                    bekanntesten<span class="tran"><br><small>가장 잘 알려진</small></span>
                </button>
                <button type="button" id="3" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3 itm so">
                    Einkommen<span class="tran"><br><small>수입</small></span>
                </button>
                <button type="button" id="4" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3 itm so">
                    erhältlich<span class="tran"><br><small>구할 수 있는</small></span>
                </button>
                <button type="button" id="5" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3 itm so">
                    Fairtrade Siegel<span class="tran"><br><small>공정거래-인증</small></span>
                </button>
                <button type="button" id="6" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3 itm so">
                    Fairem Handel<span class="tran"><br><small>공정거래</small></span>
                </button>
                <button type="button" id="7" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3 itm so">
                    Herstellern<span class="tran"><br><small>생산자</small></span>
                </button>
                <button type="button" id="8" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3 itm so">
                    Lebensbedingungen<span class="tran"><br><small>생활조건</small></span>
                </button>
                <button type="button" id="9" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm px-3 itm so">
                    profitieren<span class="tran"><br><small>이익을 얻다</small></span>
                </button>
                <button type="button" id="10" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3 itm so">
                    transparent<span class="tran"><br><small>투명한</small></span>
                </button>
                <button type="button" id="11" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3 itm so">
                    Versorgung<span class="tran"><br><small>공급</small></span>
                </button>
                <button type="button" id="12" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm px-3 itm so">
                    vertrauenswürdig<span class="tran"><br><small>신뢰할 만한</small></span>
                </button>
                <button type="button" id="13" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-3 itm so">
                    Weltläden<span class="tran"><br><small>수입상점</small></span>
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
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2">
            <div class="col-12 mt-3">
                Minas Beitrag über Fairen Handel
                <span class="tran"><small>공정거래에 대한 미나의 기고</small><br></span>

            </div>
            <div class="col-12 mt-3 lh350">Gestern habe ich im Supermarkt eine Packung Kaffee mit dem
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                gekauft.
                <span class="tran"><small>어제 슈퍼마켓에서 공정거래 인증이 있는 커피 한 팩을 샀어.</small><br></span>
                Zurzeit  kann man oft die Marke von Fairtrade bzw.
                <span class="tran"><small>현재 슈퍼마켓의 다양한 제품에서 공정거래 또는 공정한 거래 표시를 자주 볼 수 있어.</small><br></span>

                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                auf verschiedenen Produkten im Supermarkt finden.
                <span class="tran"><small>너희들도 공정 거래에 대해 벌써 들어 봤니?</small><br></span>
                Habt ihr auch schon von Fairem Handel gehört?
                <span class="tran"><small>그것에 대해 나는 며칠 전에야 TV 방송에서 알게 되었어.</small><br></span>
                Darüber habe ich erst vor einigen Tagen in einer Fernsehsendung erfahren.
                <span class="tran"><small>좋은 점은 공정거래를 통해 상대적으로 어려운 생산업체를 도울 수 있다는 거야.</small><br></span>
                Das Gute dabei ist, dass man durch Fairen Handel benachteiligten
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                helfen hann.
                <span class="tran"><small>따라서 우리가 공정거래 제품을 더 많이 사면 생산자들은 안정적인 수입과 더 나은 미래를 위한 기회를 가질 수 있어.</small><br></span>
                Wenn wir also mehr Fairtrade-Produkte einkaufen, können Produzenten ein stabiles
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                und die Chance auf eine bessere Zukunft haben.
                <span class="tran"><small>이것은 예를 들어 물과 전기를 공급하거나 학교를 개조함으로써 재배를 하는 나라에 사는 가족의 근로 및 생활 조건을 개선할 수 있다는 걸 의미해.</small><br></span>
                Das bedeutet, die Arbeits- und
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                von den Familien in den Anbauländern können verbessert werden, zum Beispiel durch eine
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                mit Wasser und Strom oder durch die Sanierung von Schulen.
                <span class="tran"><small>독일에는 많은 슈퍼마켓, 카페, 제과점 및 레스토랑, 유기농 및 수입상점에 2000개 이상의 공정거래 제품이 있어.</small><br></span>

                In Deutschland gibt es über 2000 Fairtrade-Produkte in vielen Supermärkten, Cafés, Bäckereien und Restaurants, Bio- und
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><small>오늘날 공정거래 제품은 거의 어디서나 살 수 있어.</small><br></span>
                Heute sind Fairtrade-Produkte praktisch überall
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>.
                <span class="tran"><small>생산공정은 특히 투명해.</small><br></span>
                Besonders ist der Produktionsprozess
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-9">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><small>즉, 누가 우리의 식료품을 재배하는지, 어디서 왔는지 추적할 수 있어.</small><br></span>
                Das heißt, wir können verfolgen, wer unsere Lebensmittel
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-10">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                und woher sie kommen.
                <span class="tran"><small>그래서 공정 거래 제품은 신뢰할만해.</small><br></span>
                Deshalb sind Fairtrade-Produkte
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-11">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><small>TV 방송에 따르면 커피는 가장 잘 알려진 공정거래 제품 중 하나야.</small><br></span>

                Nach Angaben der Sendung ist Kaffee einer der
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-12">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Produkte des Fairen Handels.
                <span class="tran"><small>그외에도 바나나, 코코아, 쌀, 차, 설탕 등과 같은 다른 공정 거래 제품도 많이 있어.</small><br></span>
                Außerdem gibt es auch noch viele andere Fairtrade-Produkte wie Bananen, Kakao, Reis, Tee, Zucker usw. Wenn wir nun Fairtrade-Produkte kaufen würden, dann könnten nicht nur die Produzenten, sondern auch ihre Familien
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-13">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><small>우리가 이제 공정거래 제품을 구매한다면 생산자뿐만 아니라 그 가족들도 혜택을 받을 수 있어.</small><br></span>
                Wir können mit unserer Wahl bessere Waren bewusst kaufen und damit etwas verändern.
                <span class="tran"><small>우리의 선택으로 우리는 의식적으로 더 좋은 상품을 구매하여 무언가를 바꿀 수 있어.</small><br></span>
                Was sagt ihr dazu?
                <span class="tran"><small>그것에 대해 어떻게 생각하니?</small><br></span>

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
            src: ["./dev/sounds/Reihe 11/r11 D1.mp3"],
            sprite: {
                "0": [458, 153554],
                "1": [154904, 1668],
                "2": [157871, 1481],
                "3": [160968, 1427],
                "4": [163950, 1680],
                "5": [167120, 1750],
                "6": [170342, 1827],
                "7": [173623, 1529],
                "8": [176472, 1993],
                "9": [179910, 1693],
                "10": [182736, 1702],
                "11": [185163, 1511],
                "12": [187575, 1982],
                "13": [190197, 1736]
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
                $("#0").show();
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
