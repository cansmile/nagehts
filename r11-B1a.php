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
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm so" id="1">
                    Badesachen
                    <span class="tran"><br><small>욕실용품</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans18 btn-sm btn-outline-dark itm so" id="2">
                    Camembert
                    <span class="tran"><br><small>까망베르치즈</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans13 btn-sm btn-outline-dark itm so" id="3">
                    Fleisch- und Wurstwaren
                    <span class="tran"><br><small>육류/소시지</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="4">
                    Gebäck
                    <span class="tran"><br><small>제빵류</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans15 btn-sm btn-outline-dark itm so" id="5">
                    Getränke
                    <span class="tran"><br><small>음료</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans19 btn-sm btn-outline-dark itm so" id="6">
                    Gewürze
                    <span class="tran"><br><small>조미료</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="7">
                    Haushaltswaren
                    <span class="tran"><br><small>생활용퓸</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans17 btn-sm btn-outline-dark itm so" id="8">
                    Milchprodukte
                    <span class="tran"><br><small>유제품</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm so" id="9">
                    Obst und Gemüse
                    <span class="tran"><br><small>과일/채소</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm so" id="10">
                    Ofenbrot
                    <span class="tran"><br><small>오벤브로트</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm so" id="11">
                    Pflegedusche
                    <span class="tran"><br><small>바디워시</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans14 btn-sm btn-outline-dark itm so" id="12">
                    Rostbratwurst
                    <span class="tran"><br><small>로스트브라트부르스트</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans20 btn-sm btn-outline-dark itm so" id="13">
                    Salz
                    <span class="tran"><br><small>소금</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans12 btn-sm btn-outline-dark itm so" id="14">
                    Schokoriegel
                    <span class="tran"><br><small>초콜릿바</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans11 btn-sm btn-outline-dark itm so" id="15">
                    Süßwaren
                    <span class="tran"><br><small>과자류</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans10 btn-sm btn-outline-dark itm so" id="16">
                    tiefgekühltes Hänchen
                    <span class="tran"><br><small>냉동 치킨</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm so" id="17">
                    Tiefkühlkost
                    <span class="tran"><br><small>냉동식품</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans16 btn-sm btn-outline-dark itm so" id="18">
                    Traubensaft
                    <span class="tran"><br><small>포도주스</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="19">
                    Wasserfilter
                    <span class="tran"><br><small>정수기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm so" id="20">
                    Zucchini
                    <span class="tran"><br><small>호박</small></span>
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
                <h2>Ergänzen Sie die richtigen Wörter.<small><br />알맞은 단어를 채우세요.</small></h2>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h3>
            </div>
        </div>
        <div class="row border-bottom-0">
            <div class="col-5">
                <table class="table table-borderless text-center" border-spacing="5">
                    <tbody class="align-middle">
                    <tr>
                        <td class="p-1 w-25">
                            <div class="itm-lst 1itm m-0" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1 w-25">
                            <div class="itm-lst 1itm m-0" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-9">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-10">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-13">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-14">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-17">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-18">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-1 d-none d-sm-bolck d-md-block d-lg-block d-xl-block d-xs-none border border-dark border-1 border-top-0 border-bottom-0"></div>
            <div class="col-5">
                <table class="table table-borderless text-center">
                    <tbody class="align-middle">
                    <tr>
                        <td class="p-1 w-25">
                            <div class="itm-lst 1itm m-0" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1 w-25">
                            <div class="itm-lst 1itm m-0" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-11">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-12">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-15">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-16">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-19">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="p-1">
                            <div class="itm-lst 1itm m-0" id="lst-20">
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
            src: ["./dev/sounds/Reihe 11/r11 B1a.mp3"],
            sprite: {
                "0": [248, 57627],
                "1": [13240, 1431],
                "2": [31816, 1670],
                "3": [23539, 2360],
                "4": [34346, 1566],
                "5": [49247, 1438],
                "6": [54445, 1527],
                "7": [8218, 1731],
                "8": [29395, 1838],
                "9": [38726, 2132],
                "10": [36423, 1342],
                "11": [15211, 2008],
                "12": [26365, 1777],
                "13": [56615, 1644],
                "14": [46652, 1713],
                "15": [44249, 1670],
                "16": [20535, 2002],
                "17": [17891, 1865],
                "18": [51672, 1700],
                "19": [10699, 1550],
                "20": [41278, 1570]
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
                pan = [1, 4, 6, 7, 10, 12, 13, 15, 18, 19];
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
