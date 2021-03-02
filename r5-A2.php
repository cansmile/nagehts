<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn text-danger ans5 btn-lg btn-outline-dark so itm" id="1">
                        die Wurst<span class="tran"><br><small>소시지</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans3 btn-lg btn-outline-dark so itm" id="2">
                        das Brot<span class="tran"><br><small>빵</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans16 btn-lg btn-outline-dark so itm" id="3">
                        das Wasser<span class="tran"><br><small>물</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans13 btn-lg btn-outline-dark so itm"
                        id="4">
                        der Kaffee<span class="tran"><br><small>커피</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans12 btn-lg btn-outline-dark so itm"
                        id="5">
                        der Tee<span class="tran"><br><small>차</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans9 btn-lg btn-outline-dark so itm" id="6">
                        der Käse<span class="tran"><br><small>치즈</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans11 btn-lg btn-outline-dark so itm"
                        id="7">
                        der Reis<span class="tran"><br><small>밥</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-danger ans14 btn-lg btn-outline-dark so itm" id="8">
                        die Schokolade<span class="tran"><br><small>쵸콜릿</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans15 btn-lg btn-outline-dark so itm"
                        id="9">
                        der Kuchen<span class="tran"><br><small>케잌</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans2 btn-lg btn-outline-dark so itm" id="10">
                        das Obst<span class="tran"><br><small>과일</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans10 btn-lg btn-outline-dark so itm"
                        id="11">
                        das Fleisch<span class="tran"><br><small>고기</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans1 btn-lg btn-outline-dark so itm" id="12">
                        das Gemüse<span class="tran"><br><small>야채</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-danger ans17 btn-lg btn-outline-dark so itm"
                        id="13">
                        die Milch<span class="tran"><br><small>우유</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-primary ans4 btn-lg btn-outline-dark so itm"
                        id="14">
                        der Salat<span class="tran"><br><small>샐러드</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans8 btn-lg btn-outline-dark so itm" id="15">
                        das Bier<span class="tran"><br><small>맥주</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-purple ans6 btn-lg btn-outline-dark so itm" id="16">
                        das Eis<span class="tran"><br><small>아이스크림</small></span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn text-danger ans7 btn-lg btn-outline-dark so itm" id="17">
                        die Suppe<span class="tran"><br><small>수프</small></span>
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
                    <h2>[ <small>그림에 맞는 단어를 그림 아래에 노란 단추를 눌러 넣세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-1.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-2.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-3.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-4.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-11.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-10.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-9.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-8.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-7.png" alt="Was ist das?"
                                    style="max-width: 212px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-6.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-13.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-5.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-12">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-12.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-13">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-14.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-14">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-15.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-15">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-16.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-16">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <th class="text-center align-middle" scope="col" height="250"><img
                                    src="./dev/images/Reihe 5/Reihe-5-A2-17.png" alt="Was ist das?"
                                    style="max-width: 120px; height: auto;">
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="itm-lst 1itm" id="lst-17">
                                        <h2 class="btn btn-warning btn-xl ttl w-100">
                                            ▼ </h2>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
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
                    "./dev/sounds/Reihe 5/r5 A2.mp3"
                ],
                sprite: {
                    "0": [908, 96164],
                    "1": [30601, 1768],
                    "2": [20733, 1724],
                    "3": [90493, 1701],
                    "4": [73051, 1827],
                    "5": [67151, 1597],
                    "6": [51448, 1848],
                    "7": [61899, 1894],
                    "8": [78912, 1888],
                    "9": [85108, 1598],
                    "10": [15449, 1766],
                    "11": [56693, 1820],
                    "12": [9893, 1899],
                    "13": [95313, 1846],
                    "14": [25537, 1768],
                    "15": [46417, 1649],
                    "16": [35806, 1840],
                    "17": [41146, 1548]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show();
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find(".so")) {
                                    $(this).find(".so").addClass("okay");
                                }
                            });
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".okay").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 00; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            $(this).addClass("btn-" + cl + " text-" + tcl);
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
                            $(".btn-lg").text().appendTo($(this).closest("td"));
                            $(".btn-lg").remove();
                        } else {
                            $("div.itm-lst").each(function (idx) {
                                if (!$(this).find("button").length) {
                                    if (na != "") {
                                        na += ", ";
                                    }
                                    na += (idx + 1);
                                }
                            });
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });

                    $("#0").show();
                    $("#ready").hide();

                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() == "" || t.text() == "❚❚") &&
                            !t.hasClass(".itm-lst")) {
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
                    }); /* 미리 답 넣어놓기 */
                    var pan =
                        new Array(); /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass("w-100 btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }
                    $("#0").show();
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
