<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie die Lücken. <br>
                        <small> 빈칸을 채우세요. </small>
                        [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0_p">
                            ❚❚
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-8"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-A3-1.png"
                        alt="Entschuldigung, wo ist das Café Dornbusch?" style="max-width: 100%; height: auto;"></div>
                <div class="col-4">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"><span class="tipp">TIPP</span>Wo
                                    (+Dat)? <small>어디에 (3격)</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="lh250">
                                    neben+ (dem, der) ...<br>vor + (dem, der)
                                    ...<br>zwischen + (dem, der) ...<br>hinter :
                                    (dem, der)<br>an der Ecke ...<br>in der ...
                                    Straße / Gasse<br>in dem ... Weg<br>links /
                                    rechts<img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-F.png" alt="TIPP"
                                        style="max-width: 100%; height: auto;"><strong>Wechselpräpositionen</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="h4 bg-light text-center">
                                    <small>Dialog 1</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Entschuldigung, wo ist das Café Dornbusch,
                                    bitte ?
                                    <span class="tran"><br><small>실례합니다, 도른부슈
                                            카페가 어디에 있습니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        <input type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-1">dem Kino
                                        Megabox und dem Restaurant Maredo.
                                    </div>
                                    <span class="tran"><br><small>메가박스 영화관과 마레도
                                            레스토랑 사이에 있습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Und das Schwimmbad, wo ist das?
                                    <span class="tran"><br><small>그리고 수영장은
                                            어디입니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        <input type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-2">dem
                                        Tennisplatz im Park. Das ist <input type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-3">der
                                        Brechtstraße.
                                    </div>
                                    <span class="tran"><br><small>공원 안 테니스장 옆에
                                            있습니다. 브레히트슈트라세에 있습니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="h4 bg-light text-center">
                                    <small>Dialog 2</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Entschuldigung, wo kann man hier
                                    übernachten? Gibt es in der Nähe ein Hotel?
                                    <span class="tran"><br><small>실례합니다, 이곳에선
                                            어디서 묵을 수 있습니까? 근처에 호텔이
                                            있습니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        <input type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2
                                        py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-4">Hotel
                                        Augustin.
                                    </div>
                                    <span class="tran"><br><small>호텔
                                            아우구스틴에서요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Wo ist das, bitte?
                                    <span class="tran"><br><small>어디인가요?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        Das ist<input type="text" class="form-control q rounded-0 border-bottom-only
                                        mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-5">der
                                        Mannesstraße,<input type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-6">der
                                        Buchhandlung.
                                    </div>
                                    <span class="tran"><br><small>서점 뒤 만네스슈트라세에
                                            있습니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="h4 bg-light text-center">
                                    <small>Dialog 3</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        Entschuldigung, wie komme ich denn<input type="text" class="form-control q
                                        rounded-0 border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-7">Blumenladen Schön?
                                    </div>
                                    <span class="tran"><br><small>실례합니다, 쉔 꽃집에
                                            어떻게 가나요?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        Der ist<input type="text" class="form-control q rounded-0 border-bottom-only
                                        mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-8">der Berliner
                                        Straße links.<input type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1 text-center
                                            border-dark col-sm-12 col-md-6 col-md col-lg text-capitalize t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-9">der Ecke
                                        ist er.
                                    </div>
                                    <span class="tran"><br><small>베를리너슈트라세 왼쪽에
                                            있습니다. 그 꽃집은 모퉁이에
                                            있습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Vielen Dank.
                                    <span class="tran"><br><small>대단히
                                            감사합니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="h4 bg-light text-center">
                                    <small>Dialog 4</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        Verzeihung, ich suche eine Post. Gibt es
                                        eine in der Nähe?
                                        <span class="tran"><br><small>실례합니다,
                                                우체국을 찾고 있습니다. 근처에
                                                있습니까?</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    <div class="input-group">
                                        Ja, gehen Sie hier die Haupstraße immer
                                        geradeaus, dann links,<input type="text" class="form-control q rounded-0
                                        border-bottom-only mx-1 px-2 py-1
                                            text-center border-dark col-sm-12 col-md-6 col-md col-lg t-6"
                                            style="max-width: 100px;" aria-label="." id="qst-10">dem
                                        Reisebüro.
                                    </div>
                                    <span class="tran"><br><small>네, 여기
                                            하우프트슈트라세에서 직진한 후 좌회전하세요, 여행사
                                            옆입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td class="lh250">
                                    Vielen Dank.
                                    <span class="tran"><br><small>대단히
                                            감사합니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
        </div>
    </section>


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
        $(".ant").hide();
        var an = new Array();
        var an = ["Zweischen", "Neben", "in", "Im", "in", "hinter", "zum", "n",
            "An", "neben"
        ];
        $(document).ready(function () {
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
                    for (var fd = 0; fd < an[qn].length; fd++) {
                        if (io) {
                            b = an[qn][fd];
                        } else {
                            b = an[qn][fd].substr(0, q);
                        }
                        b = b.replace(/ /gi, "");
                        if (a == b) {
                            return true;
                        }
                    }
                }
            }

            /* 각 문장 재생 횟수 초기화 */
            var hm = new Array(),
                sen = new Array();
            for (i = 0; i < $(".so").length; i++) {
                hm[i] = 0;
                sen[i] = 0;
            }
            ion.sound({
                sounds: [{
                    name: "r10 A3",
                    sprite: {
                        "0": [.839, 76.555],
                        "1": [16.149, 2.874],
                        "2": [19.495, 3.315],
                        "3": [22.969, 2.351],
                        "4": [25.290, 4.056],
                        "5": [34.286, 4.900],
                        "6": [39.513, 1.537],
                        "7": [41.303, 1.246],
                        "8": [42.831, 3.342],
                        "9": [49.911, 3.492],
                        "10": [53.596, 4.055],
                        "11": [57.907, 1.061],
                        "12": [64.919, 4.526],
                        "13": [69.664, 6.394],
                        "14": [76.272, 1.111]
                    }
                }, {
                    name: "dingdongdang",
                    path: "<?php echo($root); ?>sounds/",
                }, {
                    name: "Cartoon_Boing",
                    path: "<?php echo($root); ?>sounds/",
                }],
                path: "<?php echo($root); ?>sounds/Reihe 10/",
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
                        if (obj.part > 0) {
                            $("#" + obj.part).html("▶");
                        }
                        if (hm[hmn] > 1) {
                            $("#" + hmn).closest(".table")
                                .find(".tran").show();
                        }
                    }
                },
                ready_callback: function () {
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
                                "r10 A3", {
                                    part: "0"
                                }
                            );
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() ==
                            "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                                "r10 A3", {
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
                                "r10 A3", {
                                    part: $(
                                            this)
                                        .attr(
                                            "id"
                                        )
                                }
                            );
                            $(this).html("▶");
                        } else {
                            /* _p 붙어 있지 않으면 id 그대로 재생 */
                            ion.sound.play(
                                "r10 A3", {
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


                    $(".q").on("keyup", function () {
                        $(this).removeClass("bg-danger");
                        $(this).removeClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                            "text-success");
                        if (rfchk($(this))) {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-danger");
                        }
                        if (!$(this).val()) {
                            $(this).removeClass("bg-danger");
                            $(this).removeClass("bg-success");
                            $(this).removeClass("text-white font-weight-bold");
                        }
                        if ($(this).val()) {
                            $("#ant-" + $(this).attr("id").substr(4)).show();
                            $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                        } else {
                            $("#ant-" + $(this).attr("id").substr(4)).hide();
                        }
                    });
                    $(".q").on("focusin", function () {
                        $("#ant-" + $(this).attr("id").substr(4)).show();
                        if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                            $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                        }
                        if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-success");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-success");
                            } else {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-danger");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-danger");
                            }
                        }
                    });
                    $(".q").on("focusout", function () {
                        $("#ant-" + $(this).attr("id").substr(4)).hide();
                        if (rfchk($(this), true)) {
                            $(this).addClass("bg-success");
                            $(this).addClass("text-white");
                        } else {
                            $(this).addClass("bg-danger");
                        }
                        if ($(this).val()) {
                            if ($(this).hasClass("bg-danger")) {
                                ion.sound.play("Cartoon_Boing");
                            } else if ($(this).hasClass("bg-success")) {
                                ion.sound.play("dingdongdang");
                                $(this).prop("disabled", true);
                            }
                        }
                        $(this).removeClass("bg-danger");
                        if (!$(this).attr("disabled")) {
                            $(this).removeClass("text-white font-weight-bold");
                            $(this).removeClass("bg-success");
                        }
                    });
                    /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */

                    $("#chk").on("click", function () {
                        var na = "";
                        var ri = 0;
                        var qst = $(".q").length;
                        $(".q").each(function () {
                            if (na != "") {
                                na += ", ";
                            }
                            if ($(this).val() == "") {
                                na += $(this).attr("id").substr(4, 1);
                            }
                        });
                        if ($(this).attr("id") == "done") {} else if (na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass(
                                        "cr"
                                        );
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass(
                                        "wa"
                                        );
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">" +
                                            an[i] + "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r =
                                            "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">";
                                        for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                            if (fd < (an[i].length - 1)) {
                                                r = r + " / ";
                                            }
                                            r = r + an[i][fd];
                                        }
                                        r = r + "</div>";
                                        if ($("span.sen").length > 0) {
                                            $("#qst-" + (i + 1)).closest("span.sen").after(
                                                r);
                                        } else {
                                            $("#qst-" + (i + 1)).after(r);
                                        }
                                    }
                                }
                                if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                                    ri++;
                                }
                            } /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            $(this).prop("disabled", true);
                            $(".tran").show();
                            $(this).attr("id", "done");
                        } else {
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        };
                    });

                    var pan = new Array();
                    /* pan=[1,2,3,4,5,6,7,8,9,10]; */
                    pan = [];
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass(
                            "bg-success text-white font-weight-bold"
                        );
                        $(pann).prop("disabled", true);
                        /* $(pann).closest("tr").find(".tran").show(); */
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
