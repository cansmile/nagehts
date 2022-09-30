<?php require_once("heading.php"); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
            <div class="col bg-<?php echo($color); ?> rounded text-center text-white fw-bold col-12 mt-1">
                wo
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="1">
                    in den Bergen
                    <span class="tran"><br><small>산으로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="2">
                    am Meer
                    <span class="tran"><br><small>바닷가에</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm" id="3">
                    auf dem Land
                    <span class="tran"><br><small>시골에</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="4">
                    auf einer Insel
                    <span class="tran"><br><small>섬에</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="5">
                    in der Stadt
                    <span class="tran"><br><small>시내에</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="6">
                    in einem Campingplatz
                    <span class="tran"><br><small>캠핑촌에</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm" id="7">
                    in Griechenland
                    <span class="tran"><br><small>그리스에</small></span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col bg-<?php echo($color); ?> rounded text-center text-white fw-bold col-12 mt-1">
                tun
            </div><!---->
            <div class="col-12" id="itms">
                <button class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="8">
                    wandern
                    <span class="tran"><br/><small>산행하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="9">
                    surfen
                    <span class="tran"><br/><small>서핑하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="10">
                    tauchen
                    <span class="tran"><br/><small>잠수하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm" id="11">
                    Kultur und Geschichte erleben
                    <span class="tran"><br/><small>문화와 역사 체험하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="12">
                    Stadtrunfahrt machen
                    <span class="tran"><br/><small>시내 관광하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="13">
                    shoppen
                    <span class="tran"><br/><small>쇼핑하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="14">
                    Campingzelt aufbauen
                    <span class="tran"><br/><small>텐트치기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="15">
                    an Bord schwimmen
                    <span class="tran"><br/><small>선상 수영하기</small></span>
                </button>
                <button class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm" id="16">
                    Beeren pflücken, Bauerhof-Erlebnis machen
                    <span class="tran"><br/><small>농장 체험하기</small></span>
                </button>
            </div>
        </div>
    </div>
    </div></section>
<section>
    <div class="container"><!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]</h2>
            </div>
        </div>
        <div class="row" id="lsts">
            <div style="min-height: 240px;"
                 class="rounded-top border bg-danger border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-1">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-1.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-orange border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-2">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-2.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-warning border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-3">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-3.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-success border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-4">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-4.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-primary border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-5">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-5.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-purple border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-6">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-6.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-purple border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                 id="lst-7">
                <h2 class="text-center bg-white p-2 ttl btn">
                    <img src="./dev/images/Reihe 12/Reihe-12-E2-7.png"
                         alt="Sehen Sie sich die Bilder an. Wie heißen die Reisetypen?"
                         style="max-width: 100%; height: auto;">
                </h2>
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
<script src="./dev/js/taptogroupnomoveh.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./dev/oxsound.php"); ?>
<script>
    $("#0").hide();
    $(".tran").hide();

    $(document).ready(function () {
        <?php require "wahl.php"; ?>
        /* 정답확인 */
        $("#chk").on("click", function () {{
            var na = "";
            if ($("#itms").find("button").length < 1) {
                $(".tran").show();
                /* 정답 확인 div 상자 배경색 속성 없애기 */
                $(this).removeClass("btn-light ");
                $(".itm-lst").each(function () {
                    if ($(this).find(".itm")) {
                        $(this).find(".itm")
                            .addClass(
                                "text-success fw-bold"
                            );
                    }
                });
                var qa = $(".itm").length; /* 전체 문항 수 */
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
        }});
    });
</script>
</body>

</html>
