<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="1">
                        Salatteller<span class="tran"><br>&nbsp;<small>샐러드
                                접시</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="2">
                        Cola<span
                            class="tran"><br>&nbsp;<small>콜라</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="3">
                        Schweinebraten mit Salat<span
                            class="tran"><br>&nbsp;<small>샐러드 곁들인 돼지고기 구이
                            </small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="4">
                        Mineralwasser<span class="tran"><br>&nbsp;<small>미네랄
                                워터</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="5">
                        Bier<span
                            class="tran"><br>&nbsp;<small>맥주</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="6">
                        Currywurst mit Pommes<span
                            class="tran"><br>&nbsp;<small>감자 곁들인 카레
                                소시지</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="7">
                        Rotwein<span class="tran"><br>&nbsp;<small>적
                                포도주</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="8">
                        Käsekuchen<span class="tran"><br>&nbsp;<small>치즈
                                케잌</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="9">
                        Fischbraten mit Kartoffelsalat<span
                            class="tran"><br>&nbsp;<small>감자 샐러드 곁들인 생선
                                구이</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm"
                        id="10">
                        Espresso<span
                            class="tran"><br>&nbsp;<small>에스프레소</small></span></button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="11">
                        Kaffee<span
                            class="tran"><br>&nbsp;<small>커피</small></span></button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie die Gespräche und ergänzen Sie. <br>
                        <small> 대화문을 듣고 채우세요. </small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣고, 대화문에 맞는 단어를 선택하여 알맞게 채우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center"><button
                                        type="button" id="12"
                                        class="so btn btn-outline-primary">▶</button>
                                    Hörtext 1</th>
                                <th scope="col" class="text-center"><button
                                        type="button" id="13"
                                        class="so btn btn-outline-success">▶</button>
                                    Hörtext 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="m-0 p-0"><span
                                        class="tran text-start"><br>
                                        <strong>Mama: Na, Tim, was möchtest du
                                            trinken?</strong><br>
                                        <small>엄마: 글쎄, 팀, 무엇을 마실래?</small><br>
                                        <strong>Kind: Aja, ich möchte gern eine
                                            große Cola trinken. Darf ich,
                                            Mama?</strong><br>
                                        <small>아이: 음, 나는 큰 콜라를 마시고 싶어요. 그래도 되요,
                                            엄마?</small><br>
                                        <strong>Mama: Na klar! Was möchtest du
                                            essen? Hier ist die Currywurst sehr
                                            lecker.</strong><br>
                                        <small>엄마: 물론이지! 무엇을 먹기 원하니? 여기 카레소시지가
                                            맛있단다.</small><br>
                                        <strong>Kind: Ach, echt? Ich liebe
                                            Currywurst mit Pommes.</strong><br>
                                        <small>아이: 아, 정말요? 저는 감자튀김과 함께 카레소시지가
                                            좋아요.</small><br>
                                        <strong>Mama: Ich nehme dann einen
                                            Salatteller und ein
                                            Mineralwasser.</strong><br>
                                        <small>엄마: 그럼 나는 샐러드 한 접시하고 미네랄워터를
                                            먹어야겠다.</small><br>
                                    </span></td>
                                <td class="m-0 p-0"><span
                                        class="tran text-start"><br>
                                        <strong>Frau: Ah! das Restaurant ist
                                            wirklich schön. Und die Musik!
                                            Ausgezeichnet!</strong><br>
                                        <small>여자: 아! 레스토랑 좋네요. 그리고 음악도! 정말
                                            좋아요!</small><br>
                                        <strong>Mann: Ich freue mich, dass es
                                            dir gefällt. Was möchtest du? Ich
                                            lade dich ein.</strong><br>
                                        <small>남자: 저도 기쁘네요, 당신이 좋아하니까. 뭐드시겠어요?
                                            당신 먼저 고르세요. </small><br>
                                        <strong>Frau: Oh, danke. Das ist sehr
                                            nett von dir. Ich bin hier zum
                                            ersten Mal. Kannst du mir etwas
                                            empfehlen?</strong><br>
                                        <small>여자: 오, 고마워요. 정말 좋아요. 저는 여기 처음이에요.
                                            저에게 추천해 주실 수 있나요?</small><br>
                                        <strong>Mann: Du isst nur vegetarisch
                                            oder? Der Fischbraten hier ist sehr
                                            gut. Er wird dir gut
                                            schmecken.</strong><br>
                                        <small>남자: 채식만 하시지요? 여기 생선 구이는 정말 좋아요.
                                            맛있을거에요.</small><br>
                                        <strong>Frau: Gut! Ich nehme dann den
                                            Fischbraten mit Kartoffelsalat. Als
                                            Getränk nehme ich ein Glas
                                            Rotwein.</strong><br>
                                        <small>여자: 좋아요! 저는 그러면 감자샐러드와 함께 생선구이로
                                            할래요. 음료로는 적포도주 한잔으로 할게요.</small><br>
                                        <strong>Mann: Gut, dann nehme ich einen
                                            Schweinebraten mit Salat und trinke
                                            ein Bier dazu. Und als
                                            Nachtisch?</strong><br>
                                        <small>남자: 좋아요, 그럼 저는 샐러드와 함께 구운 돼지 고기를
                                            먹고 맥주를 마실게요. 그리고 디저트는요?</small><br>
                                        <strong>Frau: Einen Kaffee und einen
                                            Käsekuchen! Und was möchtest
                                            du?</strong><br>
                                        <small>여자: 커피와 치즈 케이크! 그리고
                                            당신은요?</small><br>
                                        <strong>Mann: Ich nehme einen
                                            Espresso.</strong><br>
                                        <small>남자: 저는 에스프레소 한잔이요.</small><br>
                                    </span></td>
                            </tr>
                            <tr>
                                <td width="30%">
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-1">
                                        <h2
                                            class="btn btn-primary btn-xl ttl w-100">
                                            die Mutter</h2>&nbsp;
                                    </div>
                                </td>
                                <td width="30%">
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-3">
                                        <h2
                                            class="btn btn-success btn-xl ttl w-100">
                                            Mann</h2>&nbsp;
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-2">
                                        <h2
                                            class="btn btn-primary btn-xl ttl w-100">
                                            das Kind</h2>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div style="min-height: 240px;"
                                        class="rounded-top border border-secondary itm-lst col-xs col-sm col-md col-lg pt-1 m-1"
                                        id="lst-4">
                                        <h2
                                            class="btn btn-success btn-xl ttl w-100">
                                            die Frau</h2>&nbsp;
                                    </div>
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
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table
                        class="text-center table table-borderless table-sm table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Die Mutter</th>
                                <td>nimmt</td>
                                <td>einen ...</td>
                            </tr>
                            <tr>
                                <th scope="row">Das Kind</th>
                                <td>isst</td>
                                <td>eine ...</td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>trinkt</td>
                                <td>ein ...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table
                        class="text-center table table-borderless table-sm table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Mann</th>
                                <td>nimmt</td>
                                <td>einen ...</td>
                            </tr>
                            <tr>
                                <th scope="row">Die Frau</th>
                                <td>isst</td>
                                <td>eine ...</td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>trinkt</td>
                                <td>ein ...</td>
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
            }
            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 5/r5 D5.mp3"],
                sprite: {
                    "0": [1079, 90641],
                    "1": [97729, 1380],
                    "2": [93897, 1053],
                    "3": [106047, 2200],
                    "4": [99288, 1396],
                    "5": [108805, 1056],
                    "6": [95379, 2007],
                    "7": [104420, 1042],
                    "8": [112574, 1444],
                    "9": [101452, 2528],
                    "10": [114757, 1453],
                    "11": [110776, 1190],
                    "12": [14564, 24445],
                    "13": [41657, 50751]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility !=
                            "visible" && $(this)
                            .attr("id") == "chk") {
                            $(this).attr("id",
                                "done");
                            $(".itm").each(
                                function () {
                                    if ($(this)
                                        .parent()
                                        .attr(
                                            "id"
                                            )
                                        .length >
                                        5) {
                                        var a =
                                            $(
                                                this)
                                            .parent()
                                            .attr(
                                                "id"
                                                )
                                            .substr(
                                                $(
                                                    this)
                                                .parent()
                                                .attr(
                                                    "id"
                                                    )
                                                .length -
                                                2,
                                                2
                                                );
                                    } else {
                                        var a =
                                            $(
                                                this)
                                            .parent()
                                            .attr(
                                                "id"
                                                )
                                            .substr(
                                                $(
                                                    this)
                                                .parent()
                                                .attr(
                                                    "id"
                                                    )
                                                .length -
                                                1,
                                                1
                                                );
                                    }
                                    $(".tran")
                                        .show();
                                    if ($(this)
                                        .hasClass(
                                            "ans" +
                                            (a))
                                        ) {
                                        $(this)
                                            .addClass(
                                                "text-success fw-bold"
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "text-warning fw-bold"
                                                );
                                        $(this)
                                            .find(
                                                ".tran"
                                                )
                                            .show();
                                    };
                                    if ($(this)
                                        .hasClass(
                                            "text-warning"
                                            )) {
                                        /* $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,)))) */
                                        for (var i =
                                                1; i <=
                                            $(
                                                ".itm-lst")
                                            .length; i++
                                            ) {
                                            if ($(
                                                    this)
                                                .hasClass(
                                                    "ans" +
                                                    i
                                                    )
                                                ) {
                                                $(eval('"#lst-' +
                                                        i +
                                                        '"'
                                                        ))
                                                    .append(
                                                        "<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark w-100 text-danger bg-white fw-bold\">" +
                                                        $(
                                                            this)
                                                        .html() +
                                                        "</button>"
                                                        );
                                                /* $(lstn).append(i); */
                                            }
                                        }
                                    };
                                }
                            );
                            $(".pop").each(
                                function () {
                                    $(this)
                                        .removeClass(
                                            "btn-info"
                                            );
                                    if ($(this)
                                        .hasClass(
                                            "o"
                                            ) &&
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .removeClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .addClass(
                                                "text-success fw-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "text-danger fw-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-warning"
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };
                                }
                            );
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst").each(
                                function () {
                                    if ($(this)
                                        .find(
                                            ".itm"
                                            )) {
                                        $(this)
                                            .find(
                                                ".itm"
                                                )
                                            .addClass(
                                                "text-success"
                                                );
                                    }
                                }
                            );
                            var qa = $(".itm")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".text-success")
                                .length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) *
                            100; /* 정답 비율 */
                            var tcl =
                            "white"; /* 기본 문자색 */
                            /* 분류 기준은 100%, 80%, 60%, 40% */
                            if (pe > 99) {
                                var st = "원어민이세요?";
                                var cl = "lime";
                                var tcl = "dark";
                            } else if (pe > 74) {
                                var st =
                                    "어! 좀 하시는데요~^^";
                                var cl = "success";
                            } else if (pe > 49) {
                                var st =
                                    "쓰읍~ 다시 해 보실까요?";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요~";
                                var cl = "danger";
                            }
                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중 " +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st + "</h4>");
                        }
                    });
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
