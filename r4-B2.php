<?php require_once("heading.php"); ?>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="1">
                        Computer<span class="tran"><br><small>컴퓨터</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="2">
                        Tischlampe<span class="tran"><br><small>탁상등</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
                        I-Pad<span class="tran"><br><small>아이패드</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="4">
                        Rucksack<span class="tran"><br><small>배낭</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="5">
                        Bücherregal<span class="tran"><br><small>책꽂이</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="6">
                        Wanduhr<span class="tran"><br><small>벽시계</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="7">
                        Bett<span class="tran"><br><small>침대</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="8">
                        Tisch<span class="tran"><br><small>책상</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="9">
                        Kommode<span class="tran"><br><small>서랍장</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="10">
                        Stuhl<span class="tran"><br><small>의자</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="11">
                        Bild<span class="tran"><br><small>그림</small></span></button>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="12">
                        Musik-CD<span class="tran"><br><small>음악
                                CD</small></span></button>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>단어를 선택하고 아래의 성(M, F, N)을 누르면 단어가 이동합니다.</small>
                        ]</h2>
                </div>
            </div>
            <!-- 고르는 아이템들 -->
            <!-- 리스트  시작 -->
            <div class="row" id="lsts">
                <div style="min-height: 240px;"
                    class="rounded-top bg-primary itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        남성 <strong>M</strong></h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        여성 <strong>F</strong></h2>&nbsp;
                </div>
                <div style="min-height: 240px;"
                    class="rounded-top bg-purple itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
                    <h2 class="btn btn-light btn-xl ttl w-100">
                        중성 <strong>N</strong></h2>&nbsp;
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
    <div id="marg"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
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
                if ($("#wahl").visibility != "visible" && $(
                        this).attr("id") == "chk") {
                    $(this).attr("id", "done");
                    $(".itm").each(function () {
                        if ($(this).parent().attr("id")
                            .length > 5) {
                            var a = $(this).parent()
                                .attr("id").substr($(
                                        this).parent()
                                    .attr("id").length -
                                    2, 2);
                        } else {
                            var a = $(this).parent()
                                .attr("id").substr($(
                                        this).parent()
                                    .attr("id").length -
                                    1, 1);
                        }
                        $(".tran").show();
                        if ($(this).hasClass("ans" + (
                                a))) {
                            $(this).addClass(
                                "text-success fw-bold"
                            );
                        } else {
                            $(this).addClass(
                                "text-warning fw-bold"
                            );
                            $(this).find(".tran")
                                .show();
                        };
                        if ($(this).hasClass(
                                "text-warning")) {
                            /* $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,)))) */
                            for (var i = 1; i <= $(
                                    ".itm-lst")
                                .length; i++) {
                                if ($(this).hasClass(
                                        "ans" + i)) {
                                    $(eval('"#lst-' +
                                            i + '"'
                                        ))
                                        .append(
                                            "<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark w-100 text-danger bg-white fw-bold\">" +
                                            $(this)
                                            .html() +
                                            "</button>"
                                        );
                                    /* $(lstn).append(i); */
                                }
                            }
                        };
                    });

                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
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
                }
            });
            <?php require "wahl.php"; ?>
            /* 미리 답 넣어놓기 */
            var pan = new Array();
            /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
            pan = [];
            for (var p = 0; p < pan.length; p++) {
                var pani = "#" + pan[p];
                for (var i = 0; i < $(".itm-lst").length; i++) {
                    if ($(pani).hasClass("ans" + (i + 1))) {
                        $(pani).insertAfter($("#lst-" + (i + 1) +
                            ">h2"));
                        $(pani).addClass("w-100 btn-light");
                    }
                }
            }
        });

    </script>
    </body>

</html>
