<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
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
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm"
                        id="1">
                        0342
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm"
                        id="2">
                        234399
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="3">
                        Alsterstraße 88, 15334 Frankfurt
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm"
                        id="4">
                        Bankkauffrau
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm"
                        id="5">
                        der Volksbank
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm"
                        id="6">
                        sophiebauer@gmail.com
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col bg-gray-light">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td class="text-left">Sophie Bauer</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            &nbsp;&nbsp;Diplomkauffrau Volksbank
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Alsterstraße 88
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">15334 Frankfurt
                                            Germany</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Tel.: (0342) 23
                                            43 99</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Handy: (0170) 23
                                            55 41</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">E-Mail:
                                            sophiebauer@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless table-light text-left">
                        <tbody>
                            <tr>
                                <td>
                                    Frau Bauer, was sind Sie von Beruf?
                                    <span class="tran"><br><small>바우어씨, 당신은 무슨일을
                                            하시나요?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ich bin
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>저는
                                            은행원입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ich arbeite bei
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>폴크스방크에서
                                            일합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wie ist Ihre Adresse?
                                    <span class="tran"><br><small>당신의 주소는 어떻게
                                            됩니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Meine Adresse ist
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>저의 주소는 알스터슈트라세
                                            88, 15334 프랑크푸르트입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wie ist Ihre Telefonnummer?
                                    <span class="tran"><br><small>당신의 전화번호는 어떻게
                                            됩니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Meine Telefonnummer ist
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>저의 전화번호는
                                            234399입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Und die Vorwahl ist
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>그리고 지역번호는
                                            0342입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wie ist Ihre E-Mail-Address?
                                    <span class="tran"><br><small>당신의 이메일 주소는
                                            어떻게 됩니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Meine E-Mail-Adresse ist
                                    <div class="itm-lst 1itm d-inline-block"
                                        style="min-width: 150px;" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                    .
                                    <span class="tran"><br><small>저의 이메일 주소는
                                            sophiebauer@gmail.com입니다.</small></span>
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
            <div class="row">
                <div
                    class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-2">
                    <div class="row">
                        <div class="col">
                            <table
                                class="table table-borderless table-striped text-center table-sm">
                                <tbody>
                                    <tr>
                                        <td>Wie ist</td>
                                        <td>Ihre</td>
                                        <td>Adresse?</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>deine</td>
                                        <td>E-Mail-Adresse?</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>ihre</td>
                                        <td>Telefonnummer?</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>seine</td>
                                        <td>Handynummer?</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-2">
                    <div class="row">
                        <div class="col">
                            <table
                                class="table table-borderless table-striped text-center table-sm">
                                <tbody>
                                    <tr>
                                        <td>Meine</td>
                                        <td>Adresse</td>
                                        <td>ist ...</td>
                                    </tr>
                                    <tr>
                                        <td>Meine</td>
                                        <td>E-Mail-Adresse</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Ihre</td>
                                        <td>Telefonnummer</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Seine</td>
                                        <td>Handynummer</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="marg"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#chk").hide();
        $(".tran").hide();
        $(document).ready(function () {
            <?php require "wahl.php"; ?>

            /* 정답확인 */
            $("#chk").on("click", function () {
                var na = "";
                if ($("#itms").find("button").length < 1) {
                    $("span.nu").each(function () {
                        $(this).text($.trim($(this)
                            .closest("tr").find(
                                ".itm-lst")
                            .text()));
                        $(this).removeClass(
                            "btn btn-outline-dark btn-sm nu"
                            );
                        $(this).addClass(
                            "font-weight-bold rounded bg-success text-white p-1 px-2 m-1"
                            );
                    });
                    $(".tran").show();
                    $(".itm-lst").hide();

                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
                    $(".itm-lst>button").addClass(
                        "text-success font-weight-bold");

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

                    $(this).attr("id", "done");
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
                    alert(na + "번 문제를 풀어주세요!");
                }
            });
            $("#0").show();
            $(".alert").hide();

            var pan = new Array();
            pan = [1];
            /* pan = ["1","2","3","4","5","6"]; */
            var il = $("#itms>.itm").length;
            for (var p = 0; p < pan.length; p++) {
                var pani = "#lst-" + pan[p];
                $(".itm").each(function () {
                    if ($(this).hasClass("ans" + pan[p])) {
                        $("#" + $(this).attr("id")).appendTo($(
                            "#lst-" + pan[p]));
                        $("#" + $(this).attr("id")).addClass(
                            "btn-block");
                        $("#lst-" + pan[p] + ">h2").remove();
                    }

                })
            }

        });

    </script>
    </body>

</html>
