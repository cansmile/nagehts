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
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3"
                        id="1">
                        an das
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3"
                        id="2">
                        an den
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3"
                        id="3">
                        hinter das
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3"
                        id="4">
                        in das
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3"
                        id="5">
                        in das
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm px-3"
                        id="6">
                        in den
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3"
                        id="7">
                        in die
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3"
                        id="8">
                        neben den
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3"
                        id="9">
                        vor die
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3"
                        id="10">
                        wieder in
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3"
                        id="11">
                        zwischen die
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
                        src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E-2-2.png"
                        alt="Wohin bringt sie die Gegenstände? Mina"
                        style="max-width: 100%; height: auto;"></div>
                <div class="col-12 font-weight-bold display-4">Mina...</div>
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
                                        hängt das Bild&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bett.<span
                                            class="tran"><br><small>그림을 침대 뒤에
                                                놓습니다.</small></span>
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
                                        legt den Teddybär&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bett.<span
                                            class="tran"><br><small>테디베어를 침대에
                                                놓습니다.</small></span>
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
                                        stellt die Kaffeetasse&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bücher und den
                                        Computer.<span
                                            class="tran"><br><small>커피잔을 책과 컴퓨터
                                                사이에 놓습니다.</small></span>
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
                                        stellt den Kaktus&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Fenster.<span
                                            class="tran"><br><small>선인장을 창가에
                                                놓습니다.</small></span>
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
                                        stellt den Stuhl&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Tisch.<span
                                            class="tran"><br><small>의자를 책상 옆에
                                                놓습니다.</small></span>
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
                                        stellt die Blumen&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Vase auf den
                                        Tisch.<span class="tran"><br><small>꽃을
                                                꽃병에 꽂아 책상 위에
                                                놓습니다.</small></span>
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
                                    <div class="itm-lst 1itm" id="lst-7">
                                        bringt den Spatz&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Käfig.<span
                                            class="tran"><br><small>참새를 새장에 다시
                                                넣습니다.</small></span>
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
                                    <div class="itm-lst 1itm" id="lst-8">
                                        legt das Geld&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Portemonnaie.<span
                                            class="tran"><br><small>돈을 지갑 안에
                                                넣습니다.</small></span>
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
                                    <div class="itm-lst 1itm" id="lst-9">
                                        stellt den Mülleimer&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Tisch.<span
                                            class="tran"><br><small>휴지통을 책상 옆에
                                                놓습니다.</small></span>
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
                                    <div class="itm-lst 1itm" id="lst-10">
                                        legt das Handy&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Bücher.<span
                                            class="tran"><br><small>휴대폰을 책 앞에
                                                놓습니다.</small></span>
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
                                    <div class="itm-lst 1itm" id="lst-11">
                                        wirft das Schmierpapier und die
                                        Bananenschale&nbsp;<h2
                                            class="btn btn-warning btn-lg ttl d-inline-block t+6">
                                            ▼ </h2>&nbsp;Mülleimer.<span
                                            class="tran"><br><small>이면지와 바나나 껍질을
                                                휴지통 안에 던져 넣습니다.</small></span>
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
            pan = [1, 3, 4, 6, 8];
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
