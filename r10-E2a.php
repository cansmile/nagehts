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
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3"
                        id="1">
                        an der
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3"
                        id="2">
                        auf dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3"
                        id="3">
                        auf dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3"
                        id="4">
                        auf dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3"
                        id="5">
                        hinter dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3"
                        id="6">
                        in dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3"
                        id="7">
                        neben dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3"
                        id="8">
                        unter dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3"
                        id="9">
                        unter dem
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3"
                        id="10">
                        zwischen den
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3"
                        id="11">
                        über dem
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
            <div class="row">
                <div class="col-12"><img
                        src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E-2-1.png"
                        alt="Wo sind die Gegenstände im Zimmer?"
                        style="max-width: 100%; height: auto;"></div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">1.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        Das Bild hängt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Wand.<span
                                            class="tran"><br><small>그림은 벽에 걸려
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">2.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        Der Teddybär sitzt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bett.<span
                                            class="tran"><br><small>테디베어는 침대 위에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">3.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        Die Kaffeetasse ist&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Computer.<span
                                            class="tran"><br><small>커피잔은 컴퓨터 옆에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">4.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        Der Kaktus steht&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Stuhl.<span
                                            class="tran"><br><small>선인장은 의자 뒤에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">5.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        Der Computer ist&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Büchern und der
                                        Kaffeetasse.<span
                                            class="tran"><br><small>컴퓨터는 책과 커피잔
                                                사이에 있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">6.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        Die Blumen sind&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Mülleimer.<span
                                            class="tran"><br><small>꽃은 휴지통 안에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">7.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        Der Spatz sitzt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Stuhl.<span
                                            class="tran"><br><small>참새는 의자 위에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">8.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        Das Geld liegt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Stuhl.<span
                                            class="tran"><br><small>돈은 의자 아래
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">9.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        Die Lampe hängt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bett.<span
                                            class="tran"><br><small>전등은 침대 위에
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">10.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        Das Handy liegt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bett.<span
                                            class="tran"><br><small>휴대폰은 침대 아래
                                                있습니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td width="20" class="align-top">11.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-10">
                                        Das Schmierpapier liegt&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Teppich.<span
                                            class="tran"><br><small>이면지는 카페트 위에
                                                있습니다.</small></span>
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
    <script src="./<?php echo($root); ?>js/taptogroup.js"></script>
    <!-- interact.min.js -->
    <script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
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
                    /* alert(na+"번 문제를 풀어주세요!"); */
                }
            });

            <?php require "wahl.php"; ?>

            var pan = new Array();
            /* pan = ["1","2","3","4","5","6","7","8","9","10"]; */
            pan = [1, 5, 8, 10];
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
                        /* $("#lst-" + pan[p]).closest("tr").find(".tran").show(); */
                    }
                })
            }
        });

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
