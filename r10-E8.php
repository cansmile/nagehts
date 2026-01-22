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
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="1">
                        abgeflogen<span class="tran"><br><small>출발했다(비행기로)</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="2">
                        abgesprochen<span class="tran"><br><small>약속했다/합의했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="3">
                        abgezahlt<span class="tran"><br><small>(빚을) 갚았다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="4">
                        angekommen<span class="tran"><br><small>도착했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="5">
                        angerufen<span class="tran"><br><small>전화했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="6">
                        angezogen<span class="tran"><br><small>입었다/껴 입었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="7">
                        aufgeblieben<span class="tran"><br><small>늦게까지 깨어 있었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="8">
                        aufgefunden<span class="tran"><br><small>발견했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="9">
                        aufgegessen<span class="tran"><br><small>다 먹었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="10">
                        aufgeschrieben<span class="tran"><br><small>적어 두었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="11">
                        aufgewacht<span class="tran"><br><small>잠에서 깼다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="12">
                        ausgesucht<span class="tran"><br><small>골랐다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="13">
                        ausgetrunken<span class="tran"><br><small>다 마셨다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="14">
                        befunden<span class="tran"><br><small>(~에) 있었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="15">
                        begangen<span class="tran"><br><small>(범죄/실수 등을) 저질렀다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="16">
                        bekommen<span class="tran"><br><small>받았다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="17">
                        berufen<span class="tran"><br><small>임명했다/불렀다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="18">
                        besprochen<span class="tran"><br><small>논의했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="19">
                        besucht<span class="tran"><br><small>방문했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="20">
                        betrunken<span class="tran"><br><small>취했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="21">
                        bezahlt<span class="tran"><br><small>지불했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="22">
                        bezogen<span class="tran"><br><small>관련되었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="23">
                        eingekauft<span class="tran"><br><small>장을 봤다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="24">
                        eingeschlafen<span class="tran"><br><small>잠들었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="25">
                        erlernt<span class="tran"><br><small>배웠다/습득했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="26">
                        erwacht<span class="tran"><br><small>깨어났다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="27">
                        fotografiert<span class="tran"><br><small>사진을 찍었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="28">
                        geblieben<span class="tran"><br><small>머물렀다/남아 있었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="29">
                        gefahren<span class="tran"><br><small>(차로) 갔다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="30">
                        geflogen<span class="tran"><br><small>날았다/비행했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="31">
                        gefunden<span class="tran"><br><small>찾았다/발견했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="32">
                        gegangen<span class="tran"><br><small>갔다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="33">
                        gegessen<span class="tran"><br><small>먹었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="34">
                        gekauft<span class="tran"><br><small>샀다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="35">
                        gekommen<span class="tran"><br><small>왔다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="36">
                        gelernt<span class="tran"><br><small>배웠다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="37">
                        gerufen<span class="tran"><br><small>불렀다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="38">
                        geschlafen<span class="tran"><br><small>잤다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="39">
                        geschrieben<span class="tran"><br><small>썼다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="40">
                        gesprochen<span class="tran"><br><small>말했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="41">
                        gesucht<span class="tran"><br><small>찾았다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="42">
                        getrunken<span class="tran"><br><small>마셨다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="43">
                        gewacht<span class="tran"><br><small>깨어 있었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="44">
                        gezahlt<span class="tran"><br><small>지불했다/냈다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="45">
                        gezogen<span class="tran"><br><small>당겼다/이사했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="46">
                        nachgelernt<span class="tran"><br><small>다시/추가로 배웠다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="47">
                        studiert<span class="tran"><br><small>공부했다/전공했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="48">
                        teleforniert<span class="tran"><br><small>전화했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="49">
                        unterschrieben<span class="tran"><br><small>서명했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="50">
                        verblieben<span class="tran"><br><small>남아 있었다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="51">
                        verfahren<span class="tran"><br><small>진행했다/처리했다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="52">
                        verflogen<span class="tran"><br><small>날아가 버렸다/사라졌다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="53">
                        verkauft<span class="tran"><br><small>팔았다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="54">
                        verschlafen<span class="tran"><br><small>늦잠잤다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="55">
                        weggegangen<span class="tran"><br><small>떠나갔다</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="56">
                        zurückgefahren<span class="tran"><br><small>(차로) 돌아갔다</small></span>
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
                    class="rounded-top border bg-danger border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-1">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        ge/.../(e)t</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-orange border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-2">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        Präfixe/ ge/.../(e)t</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-warning border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-3">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        (Präfixe) ...t</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-success border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-4">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        ge/.../en</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-primary border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-5">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        Präfixe/ ge/.../en</h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-purple border-white itm-lst col-sm-12 col-md-6 col-lg-4 col-xl-2 p-2"
                    id="lst-6">
                    <h2
                        class="btn btn-xl bg-white ttl w-100 fw-bold">
                        (Präfix) ....en</h2>&nbsp;
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
            pan = [1, 2, 4, 5, 7, 8, 9, 10, 13, 14, 15, 18, 19, 20, 22,
                23, 27, 28, 30, 31, 33, 34, 35, 37, 39, 42, 45,
                48, 50, 51, 53, 54
            ];
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
