<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">Wahl</div>
            <div class="col bg-<?php echo( $color ); ?> rounded text-center text-white fw-bold col-12 mt-1">
                Klaudia
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">die
                    Schultasche<span class="tran"><br><small>책가방</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">das Lineal<span
                        class="tran"><br><small>자</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="10">der Kleber<span
                        class="tran"><br><small>풀</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="11">der
                    Radiergummi<span class="tran"><br><small>지우개</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">die
                    Buntstifte<span class="tran"><br><small>색연필</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="13">das Geld<span
                        class="tran"><br><small>돈</small></span></button>
            </div>
            <div class="col bg-<?php echo( $color ); ?> rounded text-center text-white fw-bold col-12 mt-1">
                Michael
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="14">das
                    Wörterbuch<span class="tran"><br><small>사전</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="15">die Büroklammern<span
                        class="tran"><br><small>클립</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="16">das Geld<span
                        class="tran"><br><small>돈</small></span></button>
                <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="17">der
                    Bleistift<span
                        class="tran"><br><small>연필</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm"
                        id="18">
                    der Kuli<span class="tran"><br><small>볼펜</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm"
                        id="19">
                    die Schultasche<span
                        class="tran"><br><small>책가방</small></span>
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
                <h2> Hören Sie und ergänzen Sie.<br>
                    <small>듣고 채우세요.</small>
                    <button type="button"
                            class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">단어
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
                <h3>[ <small>단어를 그림에 맞게 짝지우세요.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="align-top h4" rowspan="2">1</td>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-1.png"
                                style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td><span
                                class="h4 fw-bold">Claudia</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-2.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-1">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-3.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-2">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-4.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-3">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-5.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-4">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-6.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-5">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-1-7.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-6">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="align-top h4" rowspan="2">2</td>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-1.png"
                                style="max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td><span
                                class="h4 fw-bold">Michael</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 4/Reihe-4-C2-2-2.png"
                                 alt="Was ist das?"
                                 style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-7">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-3.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-8">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-4.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-9">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-5.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-10">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-6.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-11">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"><img
                                src="./dev/images/Reihe 4/Reihe-4-C2-2-7.png"
                                alt="Was ist das?"
                                style="max-width: 120px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-12">
                                <h2
                                    class="btn btn-warning btn-xl ttl w-100">
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
        <div class="row">
            <div class="col-12">
                <table
                    class="table table-borderless table-striped text-center table-sm">
                    <tbody>
                    <tr>
                        <td colspan="4" class="text-start">haben 동사는 4격
                            목적어를 취하며, 명사를 부정할 때는 kein이라는 부정관사를
                            사용한다.<br>이 때 kein은 부정관사류(ein, nein)와 같이 동일하게
                            관사어미변화한다. (keinen, keine, kein)
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="text-primary"><strong>m</strong></td>
                        <td class="text-danger"><strong>f</strong></td>
                        <td class="text-purple"><strong>n</strong></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="text-primary"><strong>부정관사</strong>
                        </td>
                        <td class="text-danger"><strong>부정관사</strong>
                        </td>
                        <td class="text-purple"><strong>부정관사</strong>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Nominativ<small>&nbsp;주격</small></strong>
                        </td>
                        <td class="text-primary">kein Kuli</td>
                        <td class="text-danger">keine Schultasche</td>
                        <td class="text-purple">kein Geld</td>
                    </tr>
                    <tr>
                        <td><strong>Akkusativ<small>&nbsp;목적격</small></strong>
                        </td>
                        <td class="text-primary">keinen Kuli</td>
                        <td class="text-danger">keine Schultasche</td>
                        <td class="text-purple">kein Geld</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <table
                    class="table table-borderless table-striped text-center table-sm">
                    <tbody>
                    <tr>
                        <td colspan="7" class="text-start">
                            <strong>(un)bestimmte Artikel</strong></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="text-primary" colspan="2">
                            <strong>m</strong></td>
                        <td class="text-danger" colspan="2">
                            <strong>f</strong></td>
                        <td class="text-purple" colspan="2">
                            <strong>n</strong></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="text-primary"><strong>부정관사</strong>
                        </td>
                        <td class="text-primary"><strong>정관사</strong>
                        </td>
                        <td class="text-danger"><strong>부정관사</strong>
                        </td>
                        <td class="text-danger"><strong>정관사</strong>
                        </td>
                        <td class="text-purple"><strong>부정관사</strong>
                        </td>
                        <td class="text-purple"><strong>정관사</strong>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Nominativ<small>&nbsp;주격</small></strong>
                        </td>
                        <td class="text-primary">ein Tisch</td>
                        <td class="text-primary">der Tisch</td>
                        <td class="text-danger">eine Uhr</td>
                        <td class="text-danger">die Uhr</td>
                        <td class="text-purple">ein Auto</td>
                        <td class="text-purple">das Auto</td>
                    </tr>
                    <tr>
                        <td><strong>Akkusativ<small>&nbsp;목적격</small></strong>
                        </td>
                        <td class="text-primary">einen Tisch</td>
                        <td class="text-primary">den Tisch</td>
                        <td class="text-danger">eine Uhr</td>
                        <td class="text-danger">die Uhr</td>
                        <td class="text-purple">ein Auto</td>
                        <td class="text-purple">das Auto</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div id="marg"></div>
<div id="last" class="d-none"></div>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogroupnomoveh.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
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
                "./dev/sounds/Reihe 4/r4 C2a.mp3"],
            sprite: {
                "0": [1455, 61038],
                "8": [15937, 1703],
                "9": [19577, 1694],
                "10": [23824, 1444],
                "11": [27769, 1744],
                "12": [31538, 1877],
                "13": [34999, 1418],
                "14": [40439, 1661],
                "15": [44598, 1761],
                "16": [48944, 1490],
                "17": [52874, 1496],
                "18": [56945, 1419],
                "19": [60474, 1677],
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                <?php require "wahl.php"; ?>
                /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find(
                        "button").length <
                        1) {
                        $(".tran").show();
                        $(".itm-lst").each(
                            function () {
                                $(this)
                                    .html($(
                                        this)
                                        .find(
                                            "button"
                                        )
                                        .html()
                                    );
                                $(this)
                                    .addClass(
                                        "text-success fw-bold"
                                    );
                            }
                        );
                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass(
                            "btn-light ");
                        var qa = $(".itm-lst")
                            .length; /* 전체 문항 수 */
                        var qr = $(
                            ".text-success")
                            .length; /* 맞춘 항목 수 */
                        var pe = (qr / qa) *
                            100; /* 정답 비율 */
                        var tcl =
                            "white"; /* 기본 문자색 */
                        /* 분류 기준은 100%, 80%, 60%, 40% */
                        if (pe > 99) {
                            var st = "원어민이세요?";
                            var cl = "lime";
                            var tcl = "dark";
                        } else if (pe > 74) {
                            var st =
                                "어! 좀 하시는데요~^^";
                            var cl = "success";
                        } else if (pe > 49) {
                            var st =
                                "쓰읍~ 다시 해 보실까요?";
                            var cl = "primary";
                        } else {
                            var st =
                                "좀 더 분발해 주세요~";
                            var cl = "danger";
                        }
                        $(this).addClass(
                            "btn-" + cl +
                            " text-" + tcl);
                        $(this).html("<h4>" +
                            qa + "문제 중 " +
                            qr +
                            "개를 맞히셨네요!<br>" +
                            st + "</h4>");
                    } else {
                        $("div.itm-lst").each(
                            function (idx) {
                                if (!$(this)
                                    .find(
                                        "button"
                                    )
                                    .length
                                ) {
                                    if (na !=
                                        ""
                                    ) {
                                        na +=
                                            ", ";
                                    }
                                    na += (idx +
                                        1
                                    );
                                }
                            }
                        );
                        alert(na +
                            "번 문제를 풀어주세요!");
                    }
                });
                $("#0").show();
                $("#ready").hide();
                $(".so").on("click", function () {
                    var t = $(this);
                    var ti = t.attr("id");
                    if (($("div#last").text() ==
                        "" || t.text() ==
                        "❚❚") && !t
                        .hasClass(".itm-lst")) {
                        $("#last").text(ti);
                        t.text("■");
                        nagehts.seek();
                        nagehts.play(ti);
                        sen[ti]++;
                        last = ti;
                        $("#cnt-" + ti).text(
                            sen[ti]);
                    } else if (last == ti &&
                        nagehts.playing($(
                            "div#last")
                            .text())) {
                        $("#last").text("");
                        t.html(pa[ti]);
                        nagehts.pause();
                        sen[ti]--;
                        $("#cnt-" + ti).text(
                            sen[ti]);
                    }
                });
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
