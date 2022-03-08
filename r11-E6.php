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
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="1">
                    Familienname
                    <span class="tran"><br /><small>성</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm so" id="2">
                    Farbe
                    <span class="tran"><br /><small>색상</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm so" id="3">
                    Größe
                    <span class="tran"><br /><small>사이즈</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm so" id="4">
                    Kontakt
                    <span class="tran"><br /><small>연락처</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm so" id="5">
                    Menge
                    <span class="tran"><br /><small>수량</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="6">
                    Postleitzahl
                    <span class="tran"><br /><small>우편번호</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm so" id="7">
                    Wohnort
                    <span class="tran"><br /><small>거주지</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="8">
                    Straße
                    <span class="tran"><br /><small>거리명</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm so" id="9">
                    Überweisung
                    <span class="tran"><br /><small>계좌이체</small></span>
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
                <h2>Max Fieber möchte online ein T-Shirt bestellen und füllt das Bestellungsfomular aus.
                    Ergänzen Sie die richtigen Wörter.
                    <small><br/>막스 피버는 온라인으로 티셔츠를 하나 주문하고 싶어서 주문서를 작성합니다.
                        알맞은 단어를 채우세요.
                    </small></h2>
                <h3>[ <small><button type="button"
                                     class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                        버튼은 정답 확인을 한 뒤에 나타납니다.</small> ]</h3>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th class="table-light h4" scope="col" colspan="2">Bestellung<small>&nbsp;주문</small></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" style="width:150px;">
                            <div class="itm-lst 1itm m-0" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </th>
                        <td>Fieber <span class="tran"><br /><small>피버</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Vorname <span class="tran"><br /><small>이름</small></span></th>
                        <td>Max <span class="tran"><br /><small>막스</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="itm-lst 1itm m-0" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </th>
                        <td>Hausstraße <span class="tran"><br /><small>하우스슈트라세</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Hausnummer: <span class="tran"><br /><small>번지</small></span></th>
                        <td>48</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="itm-lst 1itm m-0" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </th>
                        <td>01069</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="itm-lst 1itm m-0" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </th>
                        <td>Dresden <span class="tran"><br /><small>드레스덴</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Land: <span class="tran"><br /><small>국가</small></span></th>
                        <td>Deutschland <span class="tran"><br /><small>독일</small></span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="itm-lst 1itm m-0" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>(Rufnummer)
                        </th>
                        <td>+49 32 10 98 76 53</td>
                    </tr>
                    <tr>
                        <th scope="row">Bestellungsnummer: <span class="tran"><br /><small>주문번호</small></span></th>
                        <td>3250190820</td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="row">
                                <div class="col-12 border border-dark">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th scope="col" width="33%">
                                                <div class="itm-lst 1itm m-0" id="lst-6">
                                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                                        ▼ </h2>
                                                </div>
                                            </th>
                                            <th scope="col" width="33%">
                                                <div class="itm-lst 1itm m-0" id="lst-7">
                                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                                        ▼ </h2>
                                                </div>
                                            </th>
                                            <th scope="col" width="33%">
                                                <div class="itm-lst 1itm m-0" id="lst-8">
                                                    <h2 class="btn btn-warning btn-xl ttl w-100">
                                                        ▼ </h2>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="lh350">
                                        <tr>
                                            <td>
                                                <input type="checkbox" disabled>&nbsp;M<br />
                                                <input type="checkbox" disabled>&nbsp;L<br />
                                                <input type="checkbox" checked disabled>&nbsp;XL
                                            </td>
                                            <td>
                                                <input type="checkbox" disabled>&nbsp;weiß <span
                                                    class="tran"><br /><small>흰색</small></span><br />
                                                <input type="checkbox" disabled>&nbsp;schwarz <span
                                                    class="tran"><br /><small>검정색</small></span><br />
                                                <input type="checkbox" checked disabled>&nbsp;blau <span
                                                    class="tran"><br /><small>파란색</small></span>
                                            </td>
                                            <td>
                                                <small>
                                                    <span class="border px-3 py-2  border-1  border border-rounded rounded-circle">▲</span><br />
                                                    <span class="border px-3 py-2  border-1 bg-light border border-dark">1</span><br />
                                                    <span class="border px-3 py-2  border-1  border border-rounded rounded-circle">▼</span>
                                                </small>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </td>
                    </tr>
                    <tr class="align-middle">
                        <th scope="row">Zahlungswunsch <span class="tran"><br /><small>결제방법 선택</small></span></th>
                        <td>
                            <div class="row">
                                <div class="col-6"><input type="checkbox" disabled>
                                    <div class="itm-lst 1itm m-0 d-inline" id="lst-9">per
                                        <h2 class="btn btn-warning btn-xl ttl w-50">
                                            ▼ </h2>
                                    </div>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="checkbox" checked disabled>mit Kreditikarte <span
                                        class="tran"><br /><small>카드</small></span>
                                </div>
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
            src: ["./dev/sounds/Reihe 11/r11 E6.mp3"],
            sprite: {
                "0": [373, 107363],
                "1": [108511, 2207],
                "2": [111988, 1541],
                "3": [115068, 1850],
                "4": [118194, 1561],
                "5": [121516, 1242],
                "6": [124154, 2051],
                "7": [127698, 1769],
                "8": [130716, 1808],
                "9": [133719, 1728]
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
                        $("#0").show();
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
