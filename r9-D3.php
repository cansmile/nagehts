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
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="1">
                        Herzlichen Glückwunsch zur neuen Wohnung.
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm"
                        id="2">
                        Herzliche Grüße
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="3">
                        Wie groß ist sie?
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="4">
                        vielen Dank für die Einladung.
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="5">
                        Und wie hoch ist die Miete?
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm"
                        id="6">
                        Und wie hoch ist die Miete?
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="7">
                        Liebe Mina,
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm"
                        id="8">
                        Ich freue mich auf die Party.
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="9">
                        Ich komme gern. Ich möchte gern wissen, wo du wohnst.
                        <span class="tran"><br />translate</span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm"
                        id="10">
                        ○○○
                        <span class="tran"><br />translate</span>
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
                    <h2>Hören Sie und vergleichen Sie.<small>듣고 비교하세요.</small>
                    </h2>
                    <h3>[ <small>보기를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button><button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0_p">
                            ❚❚
                        </button>
                        </h2>
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼 또는 <button type="button"
                                    class="btn btn-sm btn-outline-secondary disabled">단어</button>
                                버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row border border-dark p-2 rounded">
                <div class="col-12" style="line-height: 250%;">Mina hat eine
                    neue Wohnung.<span class="tran"><br><small>미나는 새로운 집을
                            구했다.</small><br></span> Sie möchte Sie zur
                    Einweihungsparty einladen.<span class="tran"><br><small>그녀는
                            당신을 집들이 파티에 초대하고 싶다. </small><br></span>Die Party
                    findet am Samstag, den 10. Dezember um 17 Uhr statt.<span
                        class="tran"><br><small>파티는 12월 10일 토요일, 17시에
                            열린다.</small><br></span>
                    <ul>
                        <li>Sie danken ihr zuerst für die Einladung.<span
                                class="tran"><br><small>당신은 우선 그녀에게 초대에 대한 감사를
                                    전한다.</small><br></span></li>
                        <li>Sagen Sie, Sie kommen.<span
                                class="tran"><br><small>당신은 참석하겠다고
                                    말하라.</small><br></span></li>
                        <li>Fragen Sie, wie die Anschrift ist, wie groß die
                            Wohnung ist, wie hoch die Miete ist.<span
                                class="tran"><br><small>주소가 어떻게 되는지, 집은 얼마나 큰지,
                                    월세는 어느 정도 되는지 물어보라.</small><br></span></li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
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
        $("#0").hide();
        $("#0_p").hide();
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {
            <?php require "wahl.php"; ?>

            /* 정답확인 */
            $("#chk").on("click", function () {
                var na = "";
                if ($("#itms").find("button").length < 1) {
                    $(".tran").show();

                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");

                    $(".itm-lst").each(function () {
                        if ($(this).find(".btn")) {
                            $(this).find(".btn")
                                .addClass(
                                    "text-success");
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

            var pan = new Array();
            /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
            pan = [1, 9, 10];
            var il = $("#itms>.itm").length;
            for (var p = 0; p < pan.length; p++) {
                var pani = "#lst-" + pan[p];
                $(".itm").each(function () {
                    if ($(this).hasClass("ans" + pan[p])) {
                        $("#" + $(this).attr("id")).appendTo($(
                            "#lst-" + pan[p]));
                        $("#" + $(this).attr("id")).addClass(
                            "btn-block font-weight-bold");
                        $("#" + $(this).attr("id")).addClass(
                            "border-0");
                        $("#lst-" + pan[p] + ">h2").remove();
                        /* $("#lst-" + pan[p]).parent().find(".tran").show(); */
                    }
                })
            }

        });

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
