<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <style>
        td,
        th,
        table {
            border-width: 0;
            border-style: hidden;
        }

    </style>
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
                        class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so"
                        id="1">
                        Der neunte Siebte (Juli)
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so"
                        id="2">
                        Der zwölfte Erste (Januar)
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so"
                        id="3">
                        Der siebzehnte Sechste (Juni)
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so"
                        id="4">
                        Der fünfte Zweite (Februar)
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so"
                        id="5">
                        Der dreiundzwanzigste Zwölfte (Dezember)
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so"
                        id="6">
                        Der erste Fünfte (Mai)
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
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
                </div>
            </div>

            <div class="row">
                <div class="col"><img
                        src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-A4.png"
                        alt="" style="max-width: 100%; height: auto;"> </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="7"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">12.1.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Sonntag. <span
                                        class="tran"><br><small>1월 12일은
                                            일요일입니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="8"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">5.2.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Mittwoch. <span
                                        class="tran"><br><small>2월 5일은
                                            수요일입니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="9"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">1.5.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Donnerstag. <span
                                        class="tran"><br><small>5월 1일은
                                            목요일입니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="10"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">17.6.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Dienstag. <span
                                        class="tran"><br><small>6월 17일은
                                            화요일입니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="11"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">9.7.
                                </td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Mittwoch. <span
                                        class="tran"><br><small>7월 9일은
                                            수요일입니다.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="20" class="text-center">
                                    <button type="button" id="12"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50" class="text-right">
                                    23.12.</td>
                                <td>
                                    <div class="itm-lst 1itm d-inline-block px-0 mr-1"
                                        style="min-width: 200px;" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>ist ein Dienstag. <span
                                        class="tran"><br><small>12월 23일은
                                            화요일입니다.</small></span>
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
            /* 각 문장 재생 횟수 초기화 */
            var hm = new Array(),
                sen = new Array();
            for (i = 0; i < $(".so").length; i++) {
                hm[i] = 0;
                sen[i] = 0;
            }
            ion.sound({
                sounds: [{
                    name: "r9 A4",
                    sprite: {
                        "0": [1.16, 29.88],
                        "1": [23.96, 1.305],
                        "2": [8.5, 1.386],
                        "3": [19.85, 1.519],
                        "4": [12.05, 1.486],
                        "5": [27.42, 2.028],
                        "6": [15.82, 1.573],
                        "7": [8.27, 2.95],
                        "8": [11.79, 2.99],
                        "9": [15.71, 2.94],
                        "10": [19.67, 3.05],
                        "11": [23.84, 2.61],
                        "12": [2726, 3.49]
                    }
                }, {
                    name: "dingdongdang",
                    path: "<?php echo($root); ?>sounds/",
                }, {
                    name: "Cartoon_Boing",
                    path: "<?php echo($root); ?>sounds/",
                }],
                path: "<?php echo($root); ?>sounds/Reihe 9/",
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
                        if (obj.part > 6) {
                            $("#" + obj.part).html("▶");
                        }
                        if (hm[hmn] > 6) {
                            $("#" + hmn).closest("table")
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
                            "r9 A4", {
                                part: "0"
                            });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() ==
                            "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                            "r9 A4", {
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
                            "r9 A4", {
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
                            "r9 A4", {
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
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find(
                                "button").length <
                            1) {
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            $(".itm-lst").each(
                                function () {
                                    if ($(this)
                                        .find(
                                            ".btn"
                                            )) {
                                        $(this)
                                            .find(
                                                ".btn"
                                                )
                                            .addClass(
                                                "text-success"
                                                );
                                    }
                                });

                            var qa = $(".itm-lst")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".text-success")
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

                            $(".btn-lg").text()
                                .appendTo($(this)
                                    .closest("td"));
                            $(".btn-lg").remove();
                        } else {
                            $("div.itm-lst").each(
                                function (idx) {
                                    if (!$(this)
                                        .find(
                                            "button"
                                            )
                                        .length
                                        ) {
                                        if (na !=
                                            ""
                                            ) {
                                            na +=
                                                ", ";
                                        }
                                        na += (idx +
                                            1
                                            );
                                    }
                                }
                            );
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    $("#0").show();
                    $(".alert").hide();

                    <?php require "wahl.php"; ?>

                    var pan = new Array();
                    /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass(
                                    "ans" + pan[p]
                                    )) {
                                $("#" + $(this)
                                        .attr("id"))
                                    .appendTo($(
                                        "#lst-" +
                                        pan[p]));
                                $("#" + $(this)
                                        .attr("id"))
                                    .addClass(
                                        "btn-block"
                                        );
                                $("#lst-" + pan[p] +
                                        ">h2")
                                    .remove();
                                /* $("#lst-"+ pan[p]).parent().find(".tran").show(); */
                            }
                        })
                    }
                }
            });
        });

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
