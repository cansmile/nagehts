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
                    Dutzend<span class="tran"><br /><small>다스</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3 so"
                        id="2">
                    ein<span class="tran"><br /><small>하나의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3 so"
                        id="3">
                    eine<span class="tran"><br /><small>하나의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3 so"
                        id="4">
                    etwas<span class="tran"><br /><small>약간</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3 so"
                        id="5">
                    keine<span class="tran"><br> /<small>~이 없는</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3 so"
                        id="6">
                    Packungen<span class="tran"><br /><small>팩</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3 so"
                        id="7">
                    Pfund<span class="tran"><br /><small>파운드</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3 so"
                        id="8">
                    Schale<span class="tran"><br /><small>쟁반</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3 so"
                        id="9">
                    Sechserpackung<span class="tran"><br> /<small>6개들이 포장</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm px-3 so"
                        id="10">
                    Tafel<span class="tran"><br /><small>판</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm px-3 so"
                        id="11">
                    Tüte<span class="tran"><br /><small>봉지</small></span>
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
        <div class="row lh250 border-2 rounded">
            <div class="col-12">
                <span class="col wd_inline text-nowrap">Vollmilch x 1</span>
                <span class="col wd_inline text-nowrap">Vollkornbrot(250g) x 1</span>
                <span class="col wd_inline text-nowrap">Eier(12 St.) x 2</span>
                <span class="col wd_inline text-nowrap">Limonade(0.33L) x 6</span>
                <span class="col wd_inline text-nowrap">Erdbereen</span>
                <span class="col wd_inline text-nowrap">Schkolade x 1</span>
                <span class="col wd_inline text-nowrap">Chips x 1</span>
            </div>
        </div>
        <div class="row mt-2 border border-dark rounded-3 p-2">
            <div class="col-12 lh250">
                <table class="table table-borderless table-striped">
                    <tbody>
                    <tr>
                        <th scope="row" class="text-center" width="50">◇</th>
                        <td>
                            Heute müssen wir einkaufen gehen. Der Kühlschrank ist fast leer.
                            <span class="tran"><br /><small>오늘 우리는 쇼핑하러 가야해. 냉장고가 거의 비었어.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            Was sollen wir kaufen?
                            <span class="tran"><br /><small>뭘 사야하지?</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">◇</th>
                        <td>
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Vollmilch und Vollkornbrot für das morgige Frühstück.
                            <span class="tran"><br /><small>내일 아침식사로 먹을 전유와 통밀빵 약간.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            Wie viele
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Milch brauchen wir denn?
                            <span class="tran"><br /><small>우유는 몇 팩이나 필요해?</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">◇</th>
                        <td>
                            Ich glaube,
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            reicht und auch
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            halbes
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Brot.
                            <span class="tran"><br /><small>내 생각엔 하나면 충분하고 빵도 반 파운드 필요해.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            O. K., gibt es noch Eier?
                            <span class="tran"><br /><small>오케이, 달걀은 아직 있어?</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">◇</th>
                        <td>
                            Nein,
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            mehr. Wir brauchen zwei
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            frische Eier.
                            <span class="tran"><br /><small>아니, 하나도 없어. 신선한 달걀 두 다스가 필요해.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            Sonst noch etwas? Haben wir noch Limonade übrig?
                            <span class="tran"><br /><small>그밖에 또 뭐? 레몬에이드 남은게 아직 있나?</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            Nein, wir müssen eine
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Limo kaufen.
                            <span class="tran"><br /><small>아니, 6개들이 레몬에이드를 사야해.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">◇</th>
                        <td>
                            Lass uns eine
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-9">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Erdbeeren kaufen. Darauf habe ich gerade Appetit.
                            <span class="tran"><br /><small>딸기 한 바구니 사자. 지금 막 그게 먹고싶어.</small></br></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">□</th>
                        <td>
                            O. K., ich möchte auch noch eine
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-10">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Schokolade und eine
                            <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-11">
                                <h2 class="btn btn-warning btn-md ttl w-100"
                                    style="max-width: 150px; min-width: 150px;">
                                    ▼ </h2>
                            </div>
                            Chips.
                            <span class="tran"><br /><small>오케이, 나도 초콜릿 하나와 감자칩 한봉지도 사고싶어.</small></br></span>
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
            src: ["./dev/sounds/Reihe 11/r11 E2.mp3"],
            sprite: {
                "0": [139, 54953],
                "1": [55550, 1302],
                "2": [57651, 1110],
                "3": [59744, 1243],
                "4": [61819, 1359],
                "5": [63895, 1283],
                "6": [66095, 1452],
                "7": [68240, 1042],
                "8": [70217, 1314],
                "9": [72210, 1710],
                "10": [75177, 1153],
                "11": [77571, 1140]
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
