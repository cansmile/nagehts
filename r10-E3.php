<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3"
                        id="1">
                        auf der Bank
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3"
                        id="2">
                        im Blumenladen
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3"
                        id="3">
                        im Café
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3"
                        id="4">
                        im Hotel
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3"
                        id="5">
                        im Kino
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3"
                        id="6">
                        im Reisebüro
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3"
                        id="7">
                        in der Apotheke
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3"
                        id="8">
                        in der Kirche
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3"
                        id="9">
                        in der Touristeninformation
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">1.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;Blumen kaufen.<span
                                            class="tran"><br><small>꽃가게에서는 꽃을 살
                                                수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">2.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;beten und auch am
                                        Gottesdienst teilnehmen.<span
                                            class="tran"><br><small>교회에서는 기도할 수
                                                있고 예배에도 참석할 수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">3.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;Geld wechseln.<span
                                            class="tran"><br><small>은행에서는 환전할 수
                                                있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">4.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;Dornbusch Kaffee
                                        trinken und Kuchen essen.<span
                                            class="tran"><br><small>도른부쉬 카페에서는
                                                커피를 마시고 케이크를 먹을 수
                                                있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">5.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;einen Stadtplan
                                        holen.<span
                                            class="tran"><br><small>관광안내소에서는
                                                시가지도를 얻을 수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">6.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;eine Reise buchen.<span
                                            class="tran"><br><small>여행사에서는 여행을
                                                예약할 수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">7.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;einen Film sehen.<span
                                            class="tran"><br><small>영화관에서는 영화를 볼
                                                수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">8.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;Aspirin holen.<span
                                            class="tran"><br><small>약국에서는 아스피린을
                                                살 수 있다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 my-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20" class="align-middle">9.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        Man kann &nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                                            ▼ </h2>&nbsp;übernachten.<span
                                            class="tran"><br><small>호텔에서는 하룻 밤
                                                묵을 수 있다.</small></span>
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
        </div>
    </section>

    <div id="marg"></div>

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
        $(".tran").hide();
        $("#chk").hide();

        $(document).ready(function () {

            /* 정답확인 */
            $("#chk").on("click", function () {
                var na = "";
                if ($("#itms").find("button").length < 1) {
                    $(".tran").show();

                    /* 정답 확인 div 상자 배경색 속성 없애10 */
                    $(this).removeClass("btn-light ");

                    $(".itm-lst").each(function () {
                        if ($(this).find(
                            "button.btn")) {
                            $(this).find("button.btn")
                                .addClass(
                                    "text-success font-weight-bold"
                                    );
                        }
                    });

                    var qa = $(".itm-lst").length; /* 전체 문항 수 */
                    var qr = $(".text-success")
                    .length; /* 맞춘 항목 수 */
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

                    $(this).addClass("btn-" + cl + " text-" +
                        tcl);
                    $(this).html("<h4>" + qa + "문제 중 " + qr +
                        "개를 맞히셨네요!<br>" + st + "</h4>");

                    $(".btn-lg").text().appendTo($(this)
                        .closest("td"));
                    $(".btn-lg").remove();
                } else {
                    $("div.itm-lst").each(function (idx) {
                        if (!$(this).find("button")
                            .length) {
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
            pan = [];
            var il = $("#itms>.itm").length;
            for (var p = 0; p < pan.length; p++) {
                var pani = "#lst-" + pan[p];
                $(".itm").each(function () {
                    if ($(this).hasClass("ans" + pan[p])) {
                        $("#" + $(this).attr("id"))
                            .insertBefore($("#lst-" + pan[p] +
                                ">h2"));
                        $("#" + $(this).attr("id")).addClass(
                            "btn-inline-block");
                        $("#" + $(this).attr("id")).addClass(
                            "btn-light");
                        $("#lst-" + pan[p] + ">h2").remove();
                    }
                })
            }
        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
