<?php require_once("heading.php"); ?>
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
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="1">
                        auf das Rathaus<span class="tran"><br /><small>시청으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="2">
                        auf dem Hauptbahnhof<span class="tran"><br /><small>중앙역에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="3">
                        auf dem Marktplatz<span class="tran"><br /><small>시장 광장에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="4">
                        auf dem Rathaus<span class="tran"><br /><small>시청에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="5">
                        auf dem Turm<span class="tran"><br /><small>탑 위에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="6">
                        auf den Hauptbahnhof<span class="tran"><br /><small>중앙역으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="7">
                        auf den Marktplatz<span class="tran"><br /><small>시장 광장으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="8">
                        auf den Turm<span class="tran"><br /><small>탑 위로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="9">
                        auf der Bank<span class="tran"><br /><small>은행에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="10">
                        auf der Post<span class="tran"><br /><small>우체국에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="11">
                        auf die Bank<span class="tran"><br /><small>은행으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="12">
                        auf die Post<span class="tran"><br /><small>우체국으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="13">
                        im Supermarkt<span class="tran"><br /><small>슈퍼마켓에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="14">
                        im Café<span class="tran"><br /><small>카페에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="15">
                        im Fotostudio<span class="tran"><br /><small>사진관에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="16">
                        im Kaufhaus<span class="tran"><br /><small>백화점에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="17">
                        im Park<span class="tran"><br /><small>공원에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="18">
                        im Reisebüro<span class="tran"><br /><small>여행사에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="19">
                        im Rottannenweg<span class="tran"><br /><small>로트탄넨베크에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="20">
                        im Schwimmbad<span class="tran"><br /><small>수영장에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="21">
                        im Stadtmuseum<span class="tran"><br /><small>시립 박물관에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="22">
                        in dem Bus<span class="tran"><br /><small>버스 안에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="23">
                        in den Bus<span class="tran"><br /><small>버스 안으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="24">
                        in den Park<span class="tran"><br /><small>공원으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="25">
                        in den Rottannenweg<span class="tran"><br /><small>로트탄넨베크로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="26">
                        in der Apotheke<span class="tran"><br /><small>약국에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="27">
                        in der Bäckerei<span class="tran"><br /><small>빵집에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="28">
                        in der Frauenkirche<span class="tran"><br /><small>프라우엔교회에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="29">
                        in der Haupstraße<span class="tran"><br /><small>하우프트슈트라세에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="30">
                        in die Apotheke<span class="tran"><br /><small>약국으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="31">
                        in die Bäckerei<span class="tran"><br /><small>빵집으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="32">
                        in die Frauenkirche<span class="tran"><br /><small>프라우엔교회로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="33">
                        in die Haupstraße<span class="tran"><br /><small>하우프트슈트라세로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="34">
                        ins Café<span class="tran"><br /><small>카페로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="35">
                        ins Fotostudio<span class="tran"><br /><small>사진관으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="36">
                        ins Kaufhaus<span class="tran"><br /><small>백화점으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="37">
                        ins Reisebüro<span class="tran"><br /><small>여행사로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="38">
                        ins Schwimmbad<span class="tran"><br /><small>수영장으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="39">
                        ins Stadtmuseum<span class="tran"><br /><small>시립 박물관으로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="40">
                        zwischen der Kirche und der Bibliothek<span class="tran"><br /><small>교회와 도서관 사이에</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="41">
                        zwischen die Kirche und die Bibliothek<span class="tran"><br /><small>교회와 도서관 사이로</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="42">
                        in den Supermarkt<span class="tran"><br /><small>슈퍼마켓으로</small></span>
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
                    <h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]</h2>
                </div>
            </div>
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top border bg-danger border-white itm-lst col-6 p-2"
                    id="lst-1">
                    <h2 class="btn btn-xl bg-white ttl w-100">Wo? (Präposition
                        + Dativ)</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-success border-white itm-lst col-6 p-2"
                    id="lst-2">
                    <h2 class="btn btn-xl bg-white ttl w-100">Wohin?
                        (Präposition + Akkusativ)</h2>&nbsp;
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
        <!-- 리스트 끝 -->
    </section>
    <div id="marg" class="border-danger"></div>

    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {
            /* 정답확인 */
            $("#chk").on("click", function () {
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
            });
            $("#0").show();
            $("#ready").hide();
            <?php require "wahl.php"; ?>
            var pan = new Array(),
                pann;
            pan = [];
            for (var p = 0; p < pan.length; p++) {
                pann = "#" + pan[p];
                for (var i = 0; i < $(".itm-lst").length; i++) {
                    if ($(pann).hasClass("ans" + (i + 1))) {
                        $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                    }
                }
            }
            $(".itm-lst>button").addClass("w-100 btn-light");
        });

    </script>
    </body>

</html>
