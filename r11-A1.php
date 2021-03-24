<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm so" id="1">
                    Bratpfanne
                    <span class="tran"><br><small>프라이팬</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so" id="2">
                    Butter
                    <span class="tran"><br><small>버터</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm so" id="3">
                    Eier
                    <span class="tran"><br><small>달걀</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="4">
                    Erdbeeren
                    <span class="tran"><br><small>딸기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="5">
                    Gurken
                    <span class="tran"><br><small>오이</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans20 btn-lg btn-outline-dark itm so" id="6">
                    Kartoffeln
                    <span class="tran"><br><small>감자</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="7">
                    Kopfsalat
                    <span class="tran"><br><small>양상추</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="8">
                    Leberwurst
                    <span class="tran"><br><small>긴소시지</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="9">
                    Limonade
                    <span class="tran"><br><small>레몬에이드</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark itm so" id="10">
                    Paprika
                    <span class="tran"><br><small>파프리카</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm so" id="11">
                    Pfeffer
                    <span class="tran"><br><small>후추</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm so" id="12">
                    Pfirsiche
                    <span class="tran"><br><small>복숭아</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm so" id="13">
                    Schnittkäse
                    <span class="tran"><br><small>슬라이스치즈</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark itm so" id="14">
                    Schokolade
                    <span class="tran"><br><small>쵸콜릿</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="15">
                    Schweinehackfleisch
                    <span class="tran"><br><small>다진 돼지고기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark itm so" id="16">
                    Seife
                    <span class="tran"><br><small>비누</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="17">
                    Speisequark
                    <span class="tran"><br><small>응유치즈</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="18">
                    tiefgekühltes Lachsfilet
                    <span class="tran"><br><small>냉동 순살연어</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm so" id="19">
                    Vollkornbrot
                    <span class="tran"><br><small>통밀빵</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm so" id="20">
                    Vollmilch
                    <span class="tran"><br><small>전유</small></span>
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
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1kg 4,44 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle"-0>
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-1.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1kg 11,99 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-2.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">250g 0,52 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-3.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1 Stück 1,07 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-4.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1 kg 2,99 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-5.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1 Liter 1,49 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-6.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">100g 1,19 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-7.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1kg 5.99 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-8.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">250g 2,19 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-9.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-9">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">50g 0.57 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-10.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-10">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1 Liter 1,07 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-11.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-11">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">500g 1.36 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-12.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-12">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">24cm 31,90 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-13.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-13">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">1kg 1,84 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-14.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-14">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">150g 1,56 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-15.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-15">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">10 Stück 1,95 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-16.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-16">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">500g 1,35 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-17.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-17">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">100g 1.39 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-18.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-18">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">100g 1,07 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-19.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-19">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td class="text-start h4">2kg 1,95 €</td>
                    </tr>
                    <tr>
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 11/Reihe-11-A1-20.png"
                                 alt="Wie heißen die Artikel?"
                                 style="max-width: 100%; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-20">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
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
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인</div>
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
            src: ["./dev/sounds/Reihe 11/r11 A1.mp3"],
            sprite: {
                "0": [33,76023],
                "1": [7674, 1566],
                "2": [10913, 1115],
                "3": [14082, 1184],
                "4": [17465, 1760],
                "5": [21320, 1378],
                "6": [24688, 1732],
                "7": [27965, 1938],
                "8": [31425, 2094],
                "9": [35340, 1903],
                "10": [38974, 1540],
                "11": [42077, 1429],
                "12": [45634, 1653],
                "13": [49025, 1979],
                "14": [52907, 1729],
                "15": [56258, 2132],
                "16": [59952, 1618],
                "17": [63016, 1993],
                "18": [66597, 2578],
                "19": [70805, 2365],
                "20": [74619, 1479],
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
                /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn").addClass(
                                    "text-success fw-bold");
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
                        alert("모든 문제를 풀어주세요!");
                    }
                });
                $("#0").show();
                $("#ready").hide();

                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("w-100");
                            $("#lst-" + pan[p] + ">h2").remove();
                        }
                    })
                }

                $("#0").show();
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
