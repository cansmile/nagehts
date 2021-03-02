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
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm t-3 btn-outline-dark itm so" id="1">
                    Parkplatz
                    <span class="tran"><br><small>주차장</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-sm t-3 btn-outline-dark itm so" id="2">
                    Autobahn
                    <span class="tran"><br><small>고속도로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans11 btn-sm t-3 btn-outline-dark itm so" id="3">
                    Fitnessraum
                    <span class="tran"><br><small>핏트니스실</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm t-3 btn-outline-dark itm so" id="4">
                    mit dem Taxi
                    <span class="tran"><br><small>택시로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm t-3 btn-outline-dark itm so" id="5">
                    mit dem Flugzeug
                    <span class="tran"><br><small>비행기로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans12 btn-sm t-3 btn-outline-dark itm so" id="6">
                    Schwimmbad
                    <span class="tran"><br><small>수영장</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm t-3 btn-outline-dark itm so" id="7">
                    WLAN im Zimmer
                    <span class="tran"><br><small>방에 와이파이</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm t-3 btn-outline-dark itm so" id="8">
                    mit dem Bus
                    <span class="tran"><br><small>버스로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm t-3 btn-outline-dark itm so" id="9">
                    mit der Bahn
                    <span class="tran"><br><small>기차로</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm t-3 btn-outline-dark itm so" id="10">
                    Rezeption 24 Stunden besetzt
                    <span class="tran"><br><small>24시간 접수대</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans10 btn-sm t-3 btn-outline-dark itm so" id="11">
                    Frühstück
                    <span class="tran"><br><small>아침</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans13 btn-sm t-3 btn-outline-dark itm so" id="12">
                    Tennisplatz
                    <span class="tran"><br><small>테니스장</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans20 btn-sm t-3 btn-outline-dark itm so" id="13">
                    tanzen
                    <span class="tran"><br><small>춤추다</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans15 btn-sm t-3 btn-outline-dark itm so" id="14">
                    Rad fahren
                    <span class="tran"><br><small>자전거타기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans16 btn-sm t-3 btn-outline-dark itm so" id="15">
                    drei-Sterne Hotel
                    <span class="tran"><br><small>삼성급호텔</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans17 btn-sm t-3 btn-outline-dark itm so" id="16">
                    wandern
                    <span class="tran"><br><small>산행하다</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans18 btn-sm t-3 btn-outline-dark itm so" id="17">
                    surfen
                    <span class="tran"><br><small>서핑하다</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-sm t-3 btn-outline-dark itm so" id="18">
                    Restaurant
                    <span class="tran"><br><small>레스토랑</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans14 btn-sm t-3 btn-outline-dark itm so" id="19">
                    fotografieren
                    <span class="tran"><br><small>사진찍기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans19 btn-sm t-3 btn-outline-dark itm so" id="20">
                    mit dem Schiff
                    <span class="tran"><br><small>배로</small></span>
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
                <h2>Ordnen Sie zu.<small><br />채우세요</small></h2>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br/>
                    [ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button
                            type="button" class="btn btn-sm btn-outline-secondary disabled">알파벳
                        </button>
                        버튼을 눌러
                        듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-1.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-2.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-3.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-4.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-5.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-6.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-7.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-8.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-9.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-9">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-10.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-10">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-11.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-11">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-12.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-12">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-13.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-13">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-14.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-14">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-15.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-15">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-16.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-16">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-17.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-17">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-18.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-18">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-19.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-19">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="./dev/images/Reihe 12/Reihe-12-E3-20.svg" alt="Piktogramme"
                                 style="width: 72px; height: 72px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-20">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<script src="https://kit.fontawesome.com/3380850483.js" crossorigin="anonymous"></script>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $("#chk").hide();

    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array(),
        sen = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
        sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
            .html();
    });

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
            src: ["./dev/sounds/Reihe 12/r12 E3.mp3"],
            sprite: {
                "0": [,],
                "1": [13774, 1414],
                "2": [35459, 1482],
                "3": [44480, 1588],
                "4": [9338, 1526],
                "5": [28686, 1730],
                "6": [47565, 1576],
                "7": [17452, 1708],
                "8": [25174, 1338],
                "9": [32799, 1430],
                "10": [20823, 3291],
                "11": [41374, 3060],
                "12": [50052, 1570],
                "13": [72452,],
                "14": [56056, 1859],
                "15": [59657, 2049],
                "16": [63267, 1298],
                "17": [65908, 1472],
                "18": [38944, 1436],
                "19": [52665, 1732],
                "20": [68721, 1627]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                /* 음성 준비되면 HV 버튼 나타내기 */
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
                }); /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn").addClass("text-success");
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
                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [1, 3, 10, 16];
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
                $("#ready").hide();
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
