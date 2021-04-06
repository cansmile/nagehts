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
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="1">
                    Damenwäsche
                    <span class="tran"><br /><small>여성언더웨어</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="2">
                    Heimtextilien
                    <span class="tran"><br /><small>홈텍스타일</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="3">
                    Kinderschuhe
                    <span class="tran"><br /><small>아동신발</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm so" id="4">
                    Lebensmittel
                    <span class="tran"><br /><small>식료품</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm so" id="5">
                    Schreibwaren
                    <span class="tran"><br /><small>문구</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm so" id="6">
                    Uhren & Schmuck
                    <span class="tran"><br /><small>시계/보석류</small></span>
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
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center align-middle">
                <img src="./dev/images/Reihe%2011/Reihe-11-B2a-1.png" alt="Ergänzen Sie den Plan." class="w-100 h-auto">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th scope="row" class="table-light w-25 display-6 fw-bold text-center" rowspan="2">4</th>
                        <td class="align-middle">Elektrogeräte
                            <span class="tran"><br><small>가전제품</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Haushaltswaren
                            <span class="tran"><br><small>생활용품</small></span>
                        </td>
                        <td class="align-middle">Möbel
                            <span class="tran"><br><small>가구</small></span>
                        </td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center" rowspan="2">3</th>
                        <td class="align-middle">Kinder-Mode
                            <span class="tran"><br><small>아동의류</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Spielwaren
                            <span class="tran"><br><small>문구</small></span>
                        </td>
                        <td class="align-middle">Sportabteilung
                            <span class="tran"><br><small>스포츠용품</small></span>
                        </td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center" rowspan="2">2</th>
                        <td class="align-middle">Herren-Mode
                            <span class="tran"><br><small>남성패션</small></span>
                        </td>
                        <td class="align-middle">Herrenwäsche
                            <span class="tran"><br><small>남성언더웨어</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Damen- & Herren-Schuhe
                            <span class="tran"><br><small>여성성/남성신발</small></span>
                        </td>
                        <td class="align-middle">&nbsp;</td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center" rowspan="2">1</th>
                        <td class="align-middle">Damen-Mode
                            <span class="tran"><br><small>여성패션</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Friseur
                            <span class="tran"><br><small>미용실</small></span>
                        </td>
                        <td class="align-middle">Änderungsschneiderei
                            <span class="tran"><br><small>수선</small></span>
                        </td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center" rowspan="4">EG</th>
                        <td class="align-middle">Accessoires
                            <span class="tran"><br><small>액세서리</small></span>
                        </td>
                        <td class="align-middle">Kosmetik
                            <span class="tran"><br><small>화장품</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                        <td class="align-middle">Reisegepäck
                            <span class="tran"><br><small>여행가방</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Bücher
                            <span class="tran"><br><small>도서</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Information
                            <span class="tran"><br><small>안내</small></span>
                        </td>
                        <td class="align-middle">EC-Geldautomat
                            <span class="tran"><br><small>EC-현금인출기</small></span>
                        </td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center" rowspan="3">UG</th>
                        <td class="align-middle">Bäckerei
                            <span class="tran"><br><small>제과점</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm m-0" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Zeitschriften
                            <span class="tran"><br><small>잡지</small></span>
                        </td>
                        <td class="align-middle">Kundendienst
                            <span class="tran"><br><small>고객서비스센터</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Feinschmecker Treff
                            <span class="tran"><br><small>푸드코트</small></span>
                        </td>
                        <td class="align-middle">&nbsp;</td>
                    </tr>
                    <tr class="border border-top-only border-darkblue">
                        <th scope="row" class="table-light display-6 fw-bold text-center">P</th>
                        <td class="align-middle">Tiefgarage
                            <span class="tran"><br><small>지하주차장</small></span>
                        </td>
                        <td class="align-middle">&nbsp;</td>
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
            src: ["./dev/sounds/Reihe 11/r11 B2a.mp3"],
            sprite: {
                "0": [798, 128369],
                "1": [71031, 2038],
                "2": [119606, 2366],
                "3": [100974, 2007],
                "4": [20481, 2001],
                "5": [104290, 2153],
                "6": [44033, 2003]
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
