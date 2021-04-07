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
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-3 so"
                        id="1">
                    andere
                    <span class="tran"><br /><small>다른</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-3 so"
                        id="2">
                    anprobiert
                    <span class="tran"><br /><small>입어보다</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-3 so"
                        id="3">
                    bunt
                    <span class="tran"><br /><small>가지각색의</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm px-3 so"
                        id="4">
                    eng
                    <span class="tran"><br /><small>꼭끼는</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm px-3 so"
                        id="5">
                    bestellt
                    <span class="tran"><br /><small>주문하다</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans15 btn-md btn-outline-dark itm px-3 so"
                        id="6">
                    Einkaufsbummel
                    <span class="tran"><br /><small>쇼핑하며 돌아다니기</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-3 so"
                        id="7">
                    Farbe
                    <span class="tran"><br /><small>색</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-3 so"
                        id="8">
                    Frühlingsjacke
                    <span class="tran"><br /><small>봄자켓</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm px-3 so"
                        id="9">
                    geIiefert
                    <span class="tran"><br /><small>배송하다</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm px-3 so"
                        id="10">
                    gleiche
                    <span class="tran"><br /><small>같은</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-3 so"
                        id="11">
                    Größe
                    <span class="tran"><br /><small>사이즈</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm px-3 so"
                        id="12">
                    Online-Shop
                    <span class="tran"><br /><small>온라인숍</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-3 so"
                        id="13">
                    reduziert
                    <span class="tran"><br /><small>할인하다</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-3 so"
                        id="14">
                    Sommerkleid
                    <span class="tran"><br /><small>여름원피스</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-3 so"
                        id="15">
                    Schnäppchen
                    <span class="tran"><br /><small>특가상품</small></span>
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
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
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
                Hallo Lisa,
                <span class="tran"><br /><small>안녕 리자,</small><br /></span>

            </div>
            <div class="col-12 lh250 mt-5">
                Am letzten Samstag war ich mit Eva im Kaufhaus.
                <span class="tran"><br /><small>지난 토요일에 에바와 백화점에 갔었어.</small><br /></span>
                Ich wollte eigentlich eine kurze dünne Sommer- oder
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-1">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                kaufen.
                <span class="tran"><br /><small>원래 짧고 얇은 여름자켓이나 봄자켓을 사려고 했어.</small><br /></span>
                Zuerst habe ich eine braune und eine schwarze Jacke
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-2">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><br /><small>제일 먼저 갈색과 검정색 자켓을 입어봤어.</small><br /></span>
                Die braune Jacke war zu klein, aber die schwarze zu groß.
                <span class="tran"><br /><small>갈색 자켓은 너무 작은 반면, 검정색 자켓은 너무 컸어.</small><br /></span>
                Eva hat mir dann eine
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-3">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Jacke empfohlen.
                <span class="tran"><br /><small>그 후에 에바가 다른 자켓을 권해주었어.</small><br /></span>
                Die
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-4">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                hat mir aber nicht so gut gefallen.
                <span class="tran"><br /><small>하지만 색상이 별로 맘에 들지 않았어.</small><br /></span>
                Die war viel zu
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-5">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><br /><small>너무 알록달록했어.</small><br /></span>
                Dann habe ich ein schickes
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-6">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                gefunden, das bis zu 30%
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-7">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                war.
                <span class="tran"><br /><small>그 다음 세련된 여름원피스를 찾아냈는데 30% 까지 할인이 된 거였어.</small><br /></span>
                Das war ein super
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-8">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><br /><small>초 특가상품이었지.</small><br /></span>
                Aber leider gab es das Kleid nicht mehr in meiner
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-9">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                , nur in Größe 36.
                <span class="tran"><br /><small>그런데 아쉽게도 내 사이즈는 더이상 없고, 36 사이즈만 있었어.</small><br /></span>
                Zu
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-10">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                für mich.
                <span class="tran"><br /><small>나한텐 너무 꼭끼었어.</small><br /></span>
                Schließlich habe ich nichts gekauft und bin wieder nach Hause gegangen.
                <span class="tran"><br /><small>결국 아무것도 사지 못하고 집으로 돌아왔어.</small><br /></span>
                Aber zum Glück konnte ich das
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-11">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                Kleid in Größe 38 im
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-12">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                finden und habe es dann auch gleich
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-13">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                .
                <span class="tran"><br /><small>하지만 운좋게 38 사이즈의 같은 원피스를 온라인숍에서 발견하고 바로 주문까지 했어.</small><br /></span>
                Es war sogar mehr als im Kaufhaus reduziert.
                <span class="tran"><br /><small>심지어 백화점보다 더 할인된 거였어.</small><br /></span>
                Jetzt wird’s
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-14">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                und in einigen Tagen ist es endlich da.
                <span class="tran"><br /><small>지금은 배송중이고 며칠후면 드디어 올거야.</small><br /></span>
                Darauf freue ich mich schon sehr.
                <span class="tran"><br /><small>벌써부터 너무 기대가 돼.</small><br /></span>
                Wann hast du denn mal Zeit? Lass uns mal zusammen einen
                <div class="itm-lst 1itm d-inline-flex mx-1 t-3" id="lst-15">
                    <h2 class="btn btn-warning btn-md ttl w-100"
                        style="max-width: 150px; min-width: 150px;">
                        ▼ </h2>
                </div>
                in der Stadt machen!
                <span class="tran"><br /><small>넌 언제 시간이 나는 거니? 우리 함께 한번 시내를 돌며 쇼핑하러 가자!</small><br /></span>
            </div>
            <div class="col-12 mt-5 lh250">
                Bis bald.
                <span class="tran"><br /><small>곧 봐</small><br /></span>

            </div>
            <div class="col-12 lh250">
                Mina
                <span class="tran"><br /><small>미나</small><br /></span>

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
            src: ["./dev/sounds/Reihe 11/r11 B5.mp3"],
            sprite: {
                "0": [1004, 104653],
                "1": [108509, 1514],
                "2": [110976, 1570],
                "3": [113101, 1430],
                "4": [115482, 1346],
                "5": [117617, 1575],
                "6": [120188, 2083],
                "7": [123268, 1366],
                "8": [125798, 2006],
                "9": [128519, 1611],
                "10": [131289, 1444],
                "11": [133672, 1713],
                "12": [136106, 1758],
                "13": [138441, 1818],
                "14": [141248, 1786],
                "15": [143815, 1412]
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
