<?php require_once("heading.php"); ?>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
                        arbeiten<span class="tran"><br><small>일하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
                        aufstehen<span class="tran"><br><small>(아침에)
                                일어나다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="3">
                        bleiben<span class="tran"><br><small>머물다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="4">
                        einschlafen<span class="tran"><br><small>잠들다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
                        fahren<span class="tran"><br><small>타고가다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
                        fliegen<span class="tran"><br><small>날아가다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
                        gefallen<span class="tran"><br><small>마음에
                                들다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
                        haben<span class="tran"><br><small>가지다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="9">
                        kommen<span class="tran"><br><small>오다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
                        lesen<span class="tran"><br><small>읽다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
                        passieren<span class="tran"><br><small>(일이) 일어나다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
                        rennen<span class="tran"><br><small>달리다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
                        schlafen<span class="tran"><br><small>잠자다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="14">
                        sehen<span class="tran"><br><small>보다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="15">
                        sein<span class="tran"><br><small>~이다,
                                ~있다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
                        studieren<span class="tran"><br><small>대학에 다니다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="17">
                        umsteigen<span class="tran"><br><small>이사하다</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
                        werden<span class="tran"><br><small>~가 되다</small></span>
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
                    <h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
                    </h2>
                </div>
            </div>
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top border bg-danger border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4
                    col-xl-4 p-2" id="lst-1">
                    <h2 class="btn btn-xl bg-white ttl d-block font-weight-bold">
                        haben + Partzip <span class="tran"><br><small>haben +
                                과거분사</small></span></h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-success border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4
                    col-xl-4 p-2" id="lst-2">
                    <h2 class="btn btn-xl bg-white ttl d-block font-weight-bold">
                        Sein + Partzip: Bewegungsverben <span class="tran"><br><small>Sein + 과거분사:
                                장소이동</small></span></h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-primary border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4
                    col-xl-4 p-2" id="lst-3">
                    <h2 class="btn btn-xl bg-white ttl d-block font-weight-bold">
                        Sein + Partzip: Veränderungsverben <span class="tran"><br><small>Sein + 과거분사:
                                상태변화</small></span></h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top border bg-orange border-white itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4
                    col-xl-4 p-2" id="lst-4">
                    <h2 class="btn btn-xl bg-white ttl d-block font-weight-bold">
                        Sein + Partzip: Sonderverben <span class="tran"><br><small>Sein + 과거분사:
                                예외동사</small></span></h2>&nbsp;
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
        <!-- 리스트 끝 -->
    </section>

    <div id="marg" class="border-danger"></div>

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
                        if ($(this).find(
                                "button.btn")) {
                            $(this).find("button.btn")
                                .addClass(
                                    "text-success");
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

            <?php require "wahl.php"; ?>

            var pan = new Array(),
                pann;
            pan = [4, 15];
            for (var p = 0; p < pan.length; p++) {
                pann = "#" + pan[p];
                for (var i = 0; i < $(".itm-lst").length; i++) {
                    if ($(pann).hasClass("ans" + (i + 1))) {
                        $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                    }
                }
            }
            $(".itm-lst>button").addClass("btn-block btn-light");

        });

    </script>
    </body>

</html>
