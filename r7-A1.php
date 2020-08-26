<?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <style>
        td,
        th,
        table {
            border-width: 0;
            border-style: hidden;
        }

    </style>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
                        zum Deutschkurs
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="2">
                        in die Oper
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="3">
                        in den Park
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="4">
                        zum Fußball
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="5">
                        ins Restaurant
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="6">
                        nehme ich am Gottesdienst teil
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so" id="7">
                        zum Flohmarkt
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="8">
                        spiele ich Fußball
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="9">
                        sehe ich mir eine Oper an
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="10">
                        lerne ich Deutsch
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm so" id="11">
                        kaufe ich gute gebrauchte Sachen ein
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="12">
                        esse ich zu Mittag
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="13">
                        in die Kirche
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so" id="14">
                        gehe ich spazieren
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">1.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Samstag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">토요일에
                                        나는 식당에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 점심식사를 한다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">2.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Samstagabend gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">토요일
                                        저녁에 나는 오페라 공연장에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 오페라를 본다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">3.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Samstagvormittag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">토요일
                                        오전에 나는 독일어 수업에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 독일어를 배운다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">4.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Freitagnachmittag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">금요일
                                        오후에 나는 축구하러 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 축구를 한다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">5.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Sonntagvormittag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">일요일
                                        오전에 나는 교회에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-10">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 예배를 드린다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">6.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Sonntagnachmittag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-11">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">일요일
                                        오후에 나는 공원에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-12">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 산책한다.</span><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="p-1 m-0 align-middle" style="line-height: 250%;" width="20" scope="row"
                                    rowspan="4">7.</th>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Am Samstagnachmittag gehe ich
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-13">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">토요일
                                        오후에 나는 벼룩시장에 간다.</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    Da
                                    <div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;"
                                        id="lst-14">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1 m-0 align-middle" style="line-height: 250%;">
                                    <span class="p-2 my-2 bg-success text-white rounded">거기서
                                        나는 중고 물건을 산다.</span><br>
                                </td>
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
            <div class="row">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"><span class="tipp">TIPP</span>&nbsp;<strong>Wohin
                                    gehen?</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="50%">
                                <span class="ml-3">• in den (m), die (f), ins
                                    (n) + Haus und Gebäude, Ort</span><br>
                                <span class="ml-3">• zum (m,n) zur (f) +
                                    Aktivitäten, Person</span><br>
                            </td>
                            <td class="align-middle text-center">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="bg-light border border-dark rounded m-0 p-2 px-3">
                                                    &nbsp;</span>
                                                <span class="m-0"
                                                    style="position: relative; left: -8px; font-size: 2em;">
                                                    ←</span>
                                                <span class="bg-light border border-dark rounded m-0 p-2 px-3"
                                                    style="position: relative; left: -12px;"><strong>in</strong></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="bg-light border border-dark rounded m-0 p-2 px-3">
                                                    &nbsp;</span>
                                                <span class="m-0" style="font-size: 2em;">
                                                    ←</span>
                                                <span class="bg-light border border-dark rounded m-0 p-2 px-3"
                                                    style="position: relative; left: -12px;"><strong>zu</strong></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td>
                                <table class="table table-borderless text-center">
                                    <thead>
                                        <tr>
                                            <th class="border-white border" scope="col">&nbsp;</th>
                                            <th class="border-white border bg-light" scope="col" colspan="3">best.
                                                Artikel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border-white border bg-light" scope="row">1격</th>
                                            <td class="border-white border">der
                                            </td>
                                            <td class="border-white border">die
                                            </td>
                                            <td class="border-white border">das
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-white border bg-light" scope="row">4격</th>
                                            <td class="border-white border">den
                                            </td>
                                            <td class="border-white border">die
                                            </td>
                                            <td class="border-white border">das
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-white border bg-light" scope="row">3격</th>
                                            <td class="border-white border">dem
                                            </td>
                                            <td class="border-white border">der
                                            </td>
                                            <td class="border-white border">dem
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"><span class="tipp">TIPP</span><strong>da</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="ml-3">• <small>공간적 의미: 저기, 거기,
                                        여기</small></span><br>
                                <span class="ml-3">• <small>시간적 의미: 그때, 그
                                        당시</small></span><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div id="marg"></div>
    <div id="last" class="d-none"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/taptogrouph.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $("#0").hide();
        $("#chk").hide();
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
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./<?php echo($root); ?>sounds/Reihe 7/r7 A1.mp3"],
                sprite: {
                    "0": [1442, 105203],
                    "1": [107400, 1522],
                    "2": [109500, 1537],
                    "3": [93206, 1723],
                    "4": [78068, 1523],
                    "5": [111836, 1607],
                    "6": [89025, 2450],
                    "7": [100412, 2034],
                    "8": [85252, 2002],
                    "9": [114144, 2173],
                    "10": [117285, 1573],
                    "11": [103840, 2712],
                    "12": [13589, 1794],
                    "13": [81490, 1658],
                    "14": [96807, 2109]
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
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find(".btn")) {
                                    $(this).find(".btn").addClass(
                                        "text-success font-weight-bold");
                                }
                            });
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
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
                    $(".alert").hide();
                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-block font-weight-bold text-left pl-0");
                                $("#" + $(this).attr("id")).addClass("border-0");
                                $("#lst-" + pan[p] + ">h2").remove();
                                $("#lst-" + pan[p]).parent().find(".tran").show();
                            }
                        })
                    };

                    /* 미리 넣기 여백의 미 */
                    $(".itm").each(function () {
                        if ($(this).text() != "▼" && $(this).closest("table")) {
                            $(this).parent().css("min-width", ($(this).length + 1) * 8 +
                                "px");
                            $(this).addClass("text-center");
                            $(this).closest(".itm-lst").addClass("mx-0 px-0");
                        }
                    });
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
    <?php require "footer.php"; ?>
</body>

</html>
