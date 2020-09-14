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
                        im Biergarten
                        <span class="tran"><small>야외 맥주집에서</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="2">
                        im Restaurant
                        <span class="tran"><small>식당에서</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="3">
                        in der Weinstube
                        <span class="tran"><small>와인바에서</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="4">
                        in der Mensa
                        <span class="tran"><small>학생식당에서</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="5">
                        am Imbiss
                        <span class="tran"><small>스낵바에서</small></span>
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
                    <h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"
                                    height="300"><img
                                        src="./dev/images/Reihe 5/Reihe-5-A1-1.png"
                                        alt="Wo sind die Leute und was machen sie?"
                                        style="max-width: 240px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"
                                    height="300"><img
                                        src="./dev/images/Reihe 5/Reihe-5-A1-2.png"
                                        alt="Wo sind die Leute und was machen sie?"
                                        style="max-width: 240px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"
                                    height="300"><img
                                        src="./dev/images/Reihe 5/Reihe-5-A1-3.png"
                                        alt="Wo sind die Leute und was machen sie?"
                                        style="max-width: 240px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"
                                    height="300"><img
                                        src="./dev/images/Reihe 5/Reihe-5-A1-4.png"
                                        alt="Wo sind die Leute und was machen sie?"
                                        style="max-width: 240px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"
                                    height="300"><img
                                        src="./dev/images/Reihe 5/Reihe-5-A1-5.png"
                                        alt="Wo sind die Leute und was machen sie?"
                                        style="max-width: 240px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
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
        </div>
    </section>

    <div id="marg"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {
            <?php require "wahl.php"; ?>
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
                                "text-success font-weight-bold"
                                );
                        } else {
                            $(this).addClass(
                                "text-warning font-weight-bold"
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
                                            "<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" +
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
                    $(".itm-lst").each(function () {
                        if ($(this).find(".btn")) {
                            $(this).find(".btn")
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
                }
                $('.tran').show();
            });
        });

    </script>
    </body>

</html>
