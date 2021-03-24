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
                <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="1">
                    Erholungsreise
                    <span class="tran"><br><small>휴양여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so" id="2">
                    Flitterwochen
                    <span class="tran"><br><small>신혼여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="3">
                    Badeurlaub
                    <span class="tran"><br><small>바닷가여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="4">
                    Familienurlaub
                    <span class="tran"><br><small>가족휴가여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="5">
                    Campingurlaub
                    <span class="tran"><br><small>캠핑휴가여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="6">
                    Kreuzfahrt
                    <span class="tran"><br><small>크루즈여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="7">
                    Städtereise
                    <span class="tran"><br><small>도시여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="8">
                    Sprachreise
                    <span class="tran"><br><small>어학연수</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="9">
                    Studienreise
                    <span class="tran"><br><small>답사, 연구여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm so" id="10">
                    Rucksackreise/Backpacking
                    <span class="tran"><br><small>배낭여행</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm so" id="11">
                    Work-Camp-Urlaub
                    <span class="tran"><br><small>캠프-봉사 휴가</small></span>
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
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-1.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-2.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-3.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-4.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-5.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-6.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-7.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-8.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-9.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-10.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
                        <td height="250" class="align-middle">
                            <img src="./dev/images/Reihe 12/Reihe-12-A1-11.png"
                                 alt="Wie heißen die Urlaubs-und Reisetypen?"
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
            src: ["./dev/sounds/Reihe 12/r12 A1.mp3"],
            sprite: {
                "0": [174, 75752],
                "1": [12649, 1932],
                "2": [18802, 1787],
                "3": [24618, 1595],
                "4": [30771, 2185],
                "5": [37514, 1764],
                "6": [43583, 1764],
                "7": [49331, 2000],
                "8": [55299, 2017],
                "9": [61115, 2185],
                "10": [67015, 3871],
                "11": [73809, 2103],
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"fw-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
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
                });

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
                pan = [1, 8, 11];
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
