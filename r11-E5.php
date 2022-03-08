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
                <button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm so" id="1">
                    Danke, ich schaue nur mal.
                    <span class="tran"><br><small>고마워요, 구경만 좀 할게요. </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm so" id="2">
                    Dann fragen Sie mal den Kundendienst im Untergeschoss.
                    <span class="tran"><br><small>그러면 지하층에 있는 고객서비스센터에 문의해 보세요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm so" id="3">
                    Die Farbe finde ich sehr schick, aber das Design gefällt mir nicht.
                    <span class="tran"><br><small>색상은 아주 세련된 것 같은데 디자인이 마음에 안들어요.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="4">
                    Im zweiten Stock. Da vorne ist die Rolltreppe.
                    <span class="tran"><br><small>2층에 있어요. 저기 앞쪽에 에스컬레이터가 있어요. </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="5">
                    Ja, möchten Sie diesen hier mal anprobieren?
                    <span class="tran"><br><small>네, 여기 이걸 한 번 입어보시겠어요? </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="6">
                    Natürlich. Die Umkleidekabinen sind da drüben.
                    <span class="tran"><br><small>물론이죠. 탈의실은 저기 저 쪽에 있어요. </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm so" id="7">
                    Nein, das ist nicht so wichtigl. Ich möchte nur etwas Preiswertes.
                    <span class="tran"><br><small>아니요, 그건 별로 중요하지 않아요. 다만 비싸지 않은 걸 원해요. </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm so" id="8">
                    Sehr gut. Schauen Sie doch einmal am Spiegel.
                    <span class="tran"><br><small>아주 잘 어울려요. 거울로 한번 보세요. </small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm so" id="9">
                    Sie enthält ein Jahr Garantie.
                    <span class="tran"><br><small>1년 보증이예요.</small></span>
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
                <h2>Ergänzen Sie die richtigen Wörter.<small><br/>알맞은 단어를 채우세요.</small></h2>
                <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            1. Entschuldigung, ich suche Hemden. Wo gibt es die Herrenabteilung?
                            <span class="tran"><br/><small>실레하지만, 셔츠를 찾고 있는데요. 신사복매장은 어디에 있나요? </small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            2. Darf ich das Hemd mal anprobieren?
                            <span class="tran"><br/><small>이 셔츠를 좀 입어봐도 될까요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="12" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            3. Haben Sie noch einen passenden Rock zu dieser Bluse?
                            <span class="tran"><br/><small>이 캐쥬얼재킷에 어울리는 스커트도 있나요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="13" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            4. Kann ich Ihnen helfen?
                            <span class="tran"><br/><small>도와드릴까요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            5. Wie finden Sie das T- Shirt ?
                            <span class="tran"><br/><small>이 티셔츠는 어떻게 생각하세요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="15" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            6. Suchen Sie eine bestimmte Marke?
                            <span class="tran"><br/><small>특정 브랜드를 찾으시나요??</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="16" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            7. Wie steht mir dieses rote Kleid?
                            <span class="tran"><br/><small>이 빨간 원피스가 저한테 어떤가요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" width="50">
                            <button type="button" id="17" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                        </th>
                        <td>
                            8. Wie lange ist die Kaffeemaschine garantiert?
                            <span class="tran"><br/><small>이 커피메이커 보증기간이 얼마나 긴가요?</small></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                    <th scope="col" width="50">
                        <button type="button" id="18" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </th>
                    <td>
                        9. Der Laptop, den ich hier gekauft habe, funktioniert nicht mehr.
                        <span class="tran"><br/><small>여기서 구입한 노트북이 더이상 작동을 안하네요. </small></span>
                    </td>
                    </td>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="itm-lst 1itm m-0" id="lst-9">
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
            src: ["./dev/sounds/Reihe 11/r11 E5.mp3"],
            sprite: {
                "0": [857, 90408],
                "1": [40700, 2343],
                "2": [87434, 3831],
                "3": [46783, 4900],
                "4": [13379, 3997],
                "5": [32981, 3115],
                "6": [23079, 4193],
                "7": [57224, 5611],
                "8": [67871, 3372],
                "9": [78000, 2708],
                "10": [6884, 6593],
                "11": [18361, 4486],
                "12": [27788, 4308],
                "13": [37102, 3406],
                "14": [42966, 3462],
                "15": [52809, 4137],
                "16": [63415, 4146],
                "17": [72505, 4999],
                "18": [81172, 6192]
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
