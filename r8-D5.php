<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2 so" id="1">
                        Aspirin nehmen.
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2 so" id="2">
                        Gymnastik machen und mehr Sport treiben.
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2 so" id="3">
                        nicht mehr rauchen.
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="4">
                        mehr Obst und Gemüse essen.
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2 so" id="5">
                        abends Schlaftee trinken.
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
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0_p">
                            ❚❚
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row" width="30">1.</th>
                            <td>Mina ist oft erkältet.
                                <span class="tran"><br><small>미나는 종종 감기에
                                        걸립니다.</small></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                Sie sollte&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 50%;">
                                    <h2 class="btn btn-warning btn-xl ttl d-block">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그녀는 과일과 채소를 더 많이
                                        먹어야 합니다.</small></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row" width="30">2.</th>
                            <td>Minho hat Fieber.
                                <span class="tran"><br><small>민호는 열이
                                        있습니다.</small></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                Er sollte&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 50%;">
                                    <h2 class="btn btn-warning btn-xl ttl d-block">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그는 아스피린을 복용해야
                                        합니다.</small></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row" width="30">3.</th>
                            <td>Meine Oma hat Schlafstörungen.
                                <span class="tran"><br><small>나의 할머니는 수면에 문제가
                                        있습니다.</small></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                Sie sollte&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 50%;">
                                    <h2 class="btn btn-warning btn-xl ttl d-block">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그녀는 잠이 오는 차를 마셔야
                                        합니다.</small></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row" width="30">4.</th>
                            <td>Herr Heine hat immer Husten.
                                <span class="tran"><br><small>하이네 씨는 항상 기침을
                                        합니다.</small></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                Er sollte&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 50%;">
                                    <h2 class="btn btn-warning btn-xl ttl d-block">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그는 담배를 피우지 않아야
                                        합니다.</small></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row" width="30">5.</th>
                            <td>Frau Nolte hat schon lange
                                Rückenschmerzen.
                                <span class="tran"><br><small>놀테 부인은 허리 통증을 오래
                                        앓고 있습니다.</small></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                Sie sollte&nbsp;
                                <div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 50%;">
                                    <h2 class="btn btn-warning btn-xl ttl d-block">
                                        ▼ </h2>
                                </div>
                                <span class="tran"><br><small>그녀는 체조를 하고 더 많은
                                        운동을 해야 합니다.</small></span>
                            </td>
                        </tr>
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
                    name: "r8 D5",
                    sprite: {
                        "0": [.500, 81.459]
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
                                "r8 D5", {
                                    part: "0"
                                });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() ==
                            "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                                "r8 D5", {
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
                                "r8 D5", {
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
                                "r8 D5", {
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
                                            "button.btn"
                                        )) {
                                        $(this)
                                            .find(
                                                "button.btn"
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
                                });
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });

                    <?php require "wahl.php"; ?>


                    var pan = new Array();
                    /* pan = ["1","2","3","4","5","6","7","8","9","10"]; */
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#lst-" + pan[p] + ">.itm").addClass(
                                    "btn-block");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
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
