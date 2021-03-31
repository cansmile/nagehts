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
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3 so"
                        id="1">
                    frischer <span class="tran"><br /><small>더 신선한</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3 so"
                        id="2">
                    größer <span class="tran"><br /><small>더 큰</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3 so"
                        id="3">
                    günstiger <span class="tran"><br /><small>더 저렴한</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3 so"
                        id="4">
                    hausgemacht <span class="tran"><br /><small>수제의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3 so"
                        id="5">
                    keine <span class="tran"><br /><small>~이 없는</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3 so"
                        id="6">
                    näher <span class="tran"><br /><small>더 가까운</small></span>
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
            <div class="col-12 lh250">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr class="text-center">
                        <th scope="col" class="table-light"><strong>im Supermarkt</strong>&nbsp;<small>슈퍼마켓에서</small></th>
                        <th scope="col" class="table-light"><strong>auf dem Markt</strong>&nbsp;<small>시장에서</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ich kaufe Butter im Supermarkt, weil die Auswahl
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            ist.
                            <span class="tran"><br /><small>저는 선택의 폭이 더 크기 떄문에 버터를 슈퍼마켓에서 삽니다.</small></span>
                        </td>
                        <td>Ich kaufe Erdbeeren auf dem Markt, weil sie
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            sind.
                            <span class="tran"><br /><small>저는 더 신선하기 때문에 딸기를 시장에서 삽니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Ich kaufe  Schweinehackfleisch im Supermakt, weil der Preis viel
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            ist.
                            <span class="tran"><br /><small>저는 가격이 훨씬 더 저렴하기 때문에 다진 돼지고기를 슈퍼마켓에서 삽니다.</small></span>
                        </td>
                        <td>Ich kaufe Kartoffeln auf dem Markt, weil der Markt
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            ist.
                            <span class="tran"><br /><small>저는 시장이 더 가깝기 때문에 감자를 시장에서 삽니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Ich kaufe Bratpfanne im Supermakt, weil es
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Pfanne auf dem Markt gibt.
                            <span class="tran"><br /><small>저는 프라이팬이 시장에는 없기 떄문에 프라이팬을 슈퍼마켓에서 삽니다.</small></span>
                        </td>
                        <td>Ich kaufe Leberwurst auf dem Markt, weil sie
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            ist.
                            <span class="tran"><br /><small>저는 수제라서 간소시지를 시장에서 삽니다.</small></span>
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
        <div class="row mt-5">
            <div class="col-12 my-2"><span class="tipp">TIPP</span>&nbsp;<strong>Komparation der Adjektive</strong>&nbsp;<small>형용사의
                    비교변화: </small><strong>형용사의 비교급 = 원급+er</strong></div>
            <div class="col-12 mt-3">
                <table class="table table-borderless table-striped text-center">
                    <thead class="table-gray">
                    <th scope="col" class="fw-bold"><strong>Positiv</strong>&nbsp;<small>원급</small></th>
                    <th scope="col" class="fw-bold"><strong>Komparativ</strong>&nbsp;<small>비교급</small></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>günstig</td>
                        <td>güntiger</td>
                    </tr>
                    <tr>
                        <td>frisch</td>
                        <td>frischer</td>
                    </tr>
                    <tr>
                        <td>groß</td>
                        <td>größer</td>
                    </tr>
                    <tr>
                        <td>nah</td>
                        <td>näher</td>
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
            src: ["./dev/sounds/Reihe 11/r11 A5.mp3"],
            sprite: {
                "0": [112, 75185],
                "1": [64623, 1126],
                "2": [69616, 1157],
                "3": [59419, 1275],
                "4": [76698, 1217],
                "5": [75576, 917],
                "6": [74145, 1114]
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
