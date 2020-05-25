<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 보기시작 -->
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so"
                        id="1">
                        die Verstopfung<span
                            class="tran"><br><small>변비</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so"
                        id="2">
                        Zahnschmerzen<span
                            class="tran"><br><small>치통</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so"
                        id="3">
                        die Erkältung<span
                            class="tran"><br><small>감기</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so"
                        id="4">
                        die Bauchschmerzen<span
                            class="tran"><br><small>복통</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so"
                        id="5">
                        die Grippe<span
                            class="tran"><br><small>독감</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so"
                        id="6">
                        die Kopfschmerzen<span
                            class="tran"><br><small>두통</small></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Schreiben Sie. <br>
                        <small>써보세요.</small>
                    </h2>
                    <h2>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]
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
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-1.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-2.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-3.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-4.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-5.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td height="300"
                                    class="align-middle align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-C2-6.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="itm-lst 1itm" id="lst-6">
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
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">1.</th>
                                <td class="align-middle" width="100">
                                    Kopfschmerzen</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-1">
                                    </div>
                                    <span class="tran"><small>그녀의 머리가 아프다. 그녀는
                                            두통이 있다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">2.</th>
                                <td class="align-middle" width="100">
                                    Zahnschmerzen</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-2">
                                    </div>
                                    <span class="tran"><small>그녀의 이가 아프다. 그녀는
                                            치통이 있다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">3.</th>
                                <td class="align-middle" width="100">
                                    Bauchschmerzen</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-3">
                                    </div>
                                    <span class="tran"><small>그녀의 배가 아프다. 그녀는
                                            복통이 있다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">4.</th>
                                <td class="align-middle" width="100">
                                    Husten/<br>Halsschmerzen</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-4">
                                    </div>
                                    <span class="tran"><small>그의 목이 아프다. 그는 기침을
                                            하거나 인후통이 있다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">5.</th>
                                <td class="align-middle" width="100">
                                    Grippe</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-5">
                                    </div>
                                    <span class="tran"><small>그녀는 열이 있다. 그녀는
                                            독감이다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row"
                                    width="30">6.</th>
                                <td class="align-middle" width="100">
                                    Durchfall/<br>Verstopfung</td>
                                <td class="align-middle">
                                    <div class="ant t-6" id="ant-6"></div>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control q border-bottom-only align-middle border border-dark rounded-0"
                                            aria-label="." id="qst-6">
                                    </div>
                                    <span class="tran"><small>그의 배가 아프다. 그는
                                            변비이거나 설사 중이다.</small></span>
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
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <table class="table text-center table-light">
                        <tbody>
                            <tr>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="2" style="line-height: 2em;">
                                    Seine<br>Ihre</td>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Hand</td>
                                <td class="align-middle align-middle"
                                    rowspan="2">tut weh.</td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Nase</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <table class="table text-center table-light">
                        <tbody>
                            <tr>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="3" style="line-height: 2em;">
                                    Seine<br>Ihre</td>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Zähne(Pl.)</td>
                                <td class="align-middle" rowspan="3">
                                    tun weh.</td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Ohren(Pl.)</td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Augen(Pl.)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <table class="table text-center table-light">
                        <tbody>
                            <tr>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="3" style="line-height: 2em;">
                                    Seine<br>Ihre</td>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Kopf</td>
                                <td class="align-middle align-middle"
                                    rowspan="3">tut weh.</td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Ohr</td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-dark border-right-only align-middle">
                                    Bauch</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <table class="table text-center table-light">
                        <tbody>
                            <tr>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="4" style="line-height: 2em;">
                                    Er<br>Sie</td>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="4">hat</td>
                                <td class="align-middle">Fieber.</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Erkältung. /
                                    Grippe.</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Durchfall. /
                                    Verstopfung.</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Husten.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <table class="table text-center table-light">
                        <tbody>
                            <tr>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="3" style="line-height: 2em;">
                                    Er<br>Sie</td>
                                <td class="border border-dark border-right-only align-middle"
                                    rowspan="3">hat</td>
                                <td class="align-middle">Zahnschmerzen.
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    Ohrenschmerzen.</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    Magenschmerzen.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="marg"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/taptogroupnomove.js"></script>
    <!-- interact.min.js -->
    <script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
    <script>
        $("#0").hide();
        $("#0_p").hide();
        $(".tran").hide();
        $("#chk").hide();
        $(".ant").hide();

        var an = new Array();
        var an = ["Ihr Kopf tut weh. Sie hat Kopfschmerzen.",
            "Ihr Zahn tut weh. Sie hat Zahnschmerzen.",
            "Ihr Bauch tut weh. Sie hat Bauchschmerzen.", [
                "Sein Hals tut weh. Er hat Husten und Halsschmerzen.",
                "Sein Hals tut weh. Er hat Husten/Halsschmerzen.",
                "Sein Hals tut weh. Er hat Husten.",
                "Sein Hals tut weh. Er hat Halsschmerzen."
            ], "Sie hat Fieber. Sie hat Grippe.", [
                "Sein Bauch tut weh. Er hat Durchfall oder Verstopfung.",
                "Sein Bauch tut weh. Er hat Durchfall/Verstopfung.",
                "Sein Bauch tut weh. Er hat Durchfall.",
                "Sein Bauch tut weh. Er hat Verstopfung."
            ]
        ];

        $(document).ready(function () {
            /* 각 문장 재생 횟수 초기화 */
            var hm = new Array(),
                sen = new Array();
            for (i = 0; i < $(".so").length; i++) {
                hm[i] = 0;
                sen[i] = 0;
            }
            ion.sound({
                sounds: [{
                    name: "r8 C2",
                    sprite: {
                        "0": [.5, 33.4],
                        "1": [13.06, 1.57],
                        "2": [17.07, 1.28],
                        "3": [20.54, 1.58],
                        "4": [24.47, 1.235],
                        "5": [28.07, 1.23],
                        "6": [31.61, 1.6]
                    }
                }, {
                    name: "dingdongdang",
                    path: "<?php echo($root); ?>sounds/",
                }, {
                    name: "Cartoon_Boing",
                    path: "<?php echo($root); ?>sounds/",
                }],
                path: "<?php echo($root); ?>sounds/Reihe 8/",
                preload: true,
                volume: 1.0,
                multiplay: false,
                ended_callback: function (obj) {
                    /* 재생이 끝날 때 2번 이상이면 번역 보이기 */
                    hmn = obj.part;
                    hm[hmn]++;
                    /* 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기 */
                    if (obj.part == "0") {
                        $("#0").show();
                        $("#0_p").hide();
                        if (hm[hmn] > 1) {
                            $(".tran").show();
                        }
                    } else {
                        if (obj.part < 0) {
                            $("#" + obj.part).html("▶");
                        }
                        if (hm[hmn] > 1) {
                            $("#" + hmn).closest(".btn")
                                .find(".tran").show();
                        }
                    }
                },
                ready_callback: function () {

                    /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
                    /* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
                        if (!$.isArray(an[qn])) {
                            /* 1 인 경우 */
                            if (io) {
                                b = an[qn];
                            } else {
                                b = an[qn].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");

                            if (a == b) {
                                return true;
                            }

                        } else {
                            /* 2 이상인 경우 */
                            for (var fd = 0; fd < an[qn]
                                .length; fd++) {
                                if (io) {
                                    b = an[qn][fd];
                                } else {
                                    b = an[qn][fd].substr(0,
                                        q);
                                }
                                b = b.replace(/ /gi, "");

                                if (a == b) {
                                    return true;
                                }
                            }

                        }
                    }

                    $(".q").on("keyup", function () {
                        $(this).removeClass(
                            "bg-danger");
                        $(this).removeClass(
                            "bg-success");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-danger");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-success");

                        if (rfchk($(this))) {
                            $(this).addClass(
                                "text-white font-weight-bold"
                                );
                            $(this).addClass(
                                "bg-success");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-success");
                        } else {
                            $(this).addClass(
                                "text-white font-weight-bold"
                                );
                            $(this).addClass(
                                "bg-danger");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-danger");
                        }

                        if (!$(this).val()) {
                            $(this).removeClass(
                                "bg-danger");
                            $(this).removeClass(
                                "bg-success");
                            $(this).removeClass(
                                "text-white font-weight-bold"
                                );
                        }

                        if ($(this).val()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .show();
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                            .val());
                        } else {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .hide();
                        }
                    })

                    $(".q").on("focusin", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .show();
                        if (!$("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                            .val());
                        }
                        if ($("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                    );
                                $(this).addClass(
                                    "bg-success"
                                    );
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-success"
                                        );
                            } else {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                    );
                                $(this).addClass(
                                    "bg-danger");
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-danger"
                                        );
                            }
                        }
                    })

                    $(".q").on("focusout", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .hide();

                        if (rfchk($(this), true)) {
                            $(this).addClass(
                                "bg-success");
                            $(this).addClass(
                                "text-white");
                        } else {
                            $(this).addClass(
                                "bg-danger");
                        }
                        if ($(this).val()) {
                            if ($(this).hasClass(
                                    "bg-danger")) {
                                ion.sound.play(
                                    "Cartoon_Boing"
                                    );
                            } else if ($(this)
                                .hasClass(
                                    "bg-success")) {
                                ion.sound.play(
                                    "dingdongdang"
                                    );
                                $(this).prop(
                                    "disabled",
                                    true);
                            }
                        }

                        $(this).removeClass(
                            "bg-danger");
                        if (!$(this).attr(
                                "disabled")) {
                            $(this).removeClass(
                                "text-white font-weight-bold"
                                );
                            $(this).removeClass(
                                "bg-success");
                        }
                    })
                    /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */




                    $(".o").on("click", function () {
                        ion.sound.play(
                            "dingdongdang");
                    });
                    $(".x").on("click", function () {
                        ion.sound.play(
                            "Cartoon_Boing");
                    });
                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings()
                            .hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass(
                                "btn-warning");
                            $(this).parent()
                                .children()
                                .removeClass(
                                    "btn-light");
                        };
                        /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(
                                ".an")
                            .length / $(
                                ".q").length
                            ) * 100);
                        $(".progress>.bar").attr(
                            "width", perc + "%;"
                            );
                    });
                    /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop")
                                .popover(
                                    'hide');
                        }, 500);
                    });
                    $(".so").on("click", function () {
                        if ($(this).attr("id")
                            .substr(-2) == "_p") {
                            /* _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause(
                            "r8 C2", {
                                part: "0"
                            });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() ==
                            "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                            "r8 C2", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            $(this).html("❚❚");
                        } else if ($(this).html() ==
                            "❚❚") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause(
                            "r8 C2", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            $(this).html("▶");
                        } else {
                            /* _p 붙어 있지 않으면 id 그대로 재생 */
                            ion.sound.play(
                            "r8 C2", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            /* 전체 듣기 재생일 때는 일시정지 버튼 보이기 */
                            if ($(this).attr(
                                "id") == "0") {
                                $(this).hide();
                                $("#0_p").show();
                            };
                        };
                    });


                    $("#chk").on("click", function () {
                            var na = "";
                            var ri = 0;
                            var qst = $(".q").length;
                            $(".q").each(function () {
                                if (na != "") {
                                    na += ", ";
                                }
                                if ($(this)
                                    .val() ==
                                    "") {
                                    na += $(
                                            this)
                                        .attr(
                                            "id"
                                            )
                                        .substr(
                                            4, 1
                                            );
                                }
                            });
                            if ($(this).attr("id") ==
                                "done") {} else if (
                                na == "") {
                                for (var i = 0; i < an
                                    .length; i++) {
                                    var oran = $(
                                            "#qst-" + (
                                                i + 1))
                                        .val();
                                    if (rfchk($("#qst-" +
                                                (i + 1)
                                                ), true
                                            )) {
                                        $("#qst-" + (i +
                                                1))
                                            .addClass(
                                                "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1"
                                                );
                                        $("#qst-" + (i +
                                                1))
                                            .removeClass(
                                                "rounded-0"
                                                );
                                    } else {
                                        $("#qst-" + (i +
                                            1)).val(
                                            oran);
                                        $("#qst-" + (i +
                                                1))
                                            .attr(
                                                "disabled",
                                                true);
                                        $("#qst-" + (i +
                                                1))
                                            .addClass(
                                                "wa"
                                                );
                                        $("#qst-" + (i +
                                                1))
                                            .removeClass(
                                                "rounded-0"
                                                );

                                        if (!$.isArray(
                                                an[i]
                                                )) {
                                            $("#qst-" +
                                                    (i +
                                                        1)
                                                    )
                                                .after(
                                                    "<div class=\"d-block ra t-6\">" +
                                                    an[
                                                        i] +
                                                    "</div>"
                                                    );
                                        } else {
                                            /* 2 이상인 경우 */
                                            var r =
                                                "<div class=\"d-block ra t-6\">";
                                            for (var fd =
                                                    (an[i]
                                                        .length -
                                                        1
                                                        ); fd >=
                                                0; fd--
                                                ) {
                                                if (fd <
                                                    (an[i]
                                                        .length -
                                                        1
                                                        )
                                                    ) {
                                                    r = r +
                                                        " / ";
                                                }
                                                r = r +
                                                    an[
                                                        i]
                                                    [
                                                    fd];
                                            }
                                            r = r +
                                                "</div>";
                                            if ($(
                                                    "span.sen")
                                                .length >
                                                0) {
                                                $("#qst-" +
                                                        (i +
                                                            1)
                                                        )
                                                    .closest(
                                                        "span.sen"
                                                        )
                                                    .after(
                                                        r
                                                        );
                                            } else {
                                                $("#qst-" +
                                                        (i +
                                                            1)
                                                        )
                                                    .after(
                                                        r
                                                        );
                                            }
                                        }

                                    }
                                    if ($("#qst-" + (i +
                                            1))
                                        .hasClass(
                                            "bg-success"
                                            )) {
                                        ri++;
                                    }
                                }

                                /* 정답 확인 div 상자 배경색 속성 없애기 */
                                $(this).removeClass(
                                    "btn-light ");

                                $(".itm-lst").each(
                                    function () {
                                        if ($(this)
                                            .find(
                                                "button.btn"
                                                )) {
                                            $(this)
                                                .find(
                                                    "button.btn"
                                                    )
                                                .addClass(
                                                    "okay text-success"
                                                    );
                                        }
                                    });

                                var qa = $(".itm-lst")
                                    .length + $(".q")
                                    .length; /* 전체 문항 수 */
                                var qr = $(".okay")
                                    .length + $(
                                        ".bg-success")
                                    .length; /* 맞춘 항목 수 */
                                var pe = (qr / qa) *
                                100; /* 정답 비율 */
                                var tcl =
                                "white"; /* 기본 문자색 */

                                /* 분류 기준은 100%, 80%, 60%, 40% */
                                if (pe > 99) {
                                    var st = "원어민이세요?";
                                    var cl = "lime";
                                    var tcl = "dark";
                                } else if (pe > 74) {
                                    var st =
                                        "어! 좀 하시는데요~^^";
                                    var cl = "success";
                                } else if (pe > 49) {
                                    var st =
                                        "쓰읍~ 다시 해 보실까요?";
                                    var cl = "primary";
                                } else {
                                    var st =
                                        "좀 더 분발해 주세요~";
                                    var cl = "danger";
                                }

                                $(this).addClass(
                                    "btn-" + cl +
                                    " text-" + tcl);
                                $(this).html("<h4>" +
                                    qa + "문제 중 " +
                                    qr +
                                    "개를 맞히셨네요!<br>" +
                                    st + "</h4>");

                                $(this).prop("disabled",
                                    true);
                                $(".tran").show();
                                $(this).attr("id",
                                    "done");
                            } else {
                                alert("모든 문제를 풀어주세요!");
                                /* alert(na+"번 문제를 풀어주세요!"); */
                            };
                        })

                        <?php require "wahl.php"; ?>


                    /* 쓰기 채우기 */
                    var pan = new Array(),
                        pann;
                    pan = [1];
                    /* pan = ["1","2","4","6","8"]; */
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass(
                            "bg-success text-white font-weight-bold"
                            );
                        $(pann).prop("disabled", true);
                        /* $(pann).closest("tr").find(".tran").show(); */
                    }

                    /* 보기 채우기 */
                    pan = []
                    for (var q = 0; q < pan.length; q++) {
                        pann = "#" + pan[q];
                        for (var i = 0; i < $(".itm-lst")
                            .length; i++) {
                            if ($(pann).hasClass("ans" + (
                                    i + 1))) {
                                $(pann).appendTo($("#lst-" +
                                    (i + 1)));
                                $(pann).addClass(
                                    "btn-block");
                                /* $(pann).find(".tran").show(); */
                                $("#lst-" + (i + 1) + ">h2")
                                    .remove();
                            }
                        }
                    }


                    $("#0").show();
                    $(".alert").hide();
                }
            });
        });

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
