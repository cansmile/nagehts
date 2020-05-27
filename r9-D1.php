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
                    <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="1">
                        Liebe Julia
                        <span class="tran"><br />사랑하는 율리아</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="2">
                        Hast du Zeit?
                        <span class="tran"><br />시간있니?</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="3">
                        Liebe Grüße
                        <span class="tran"><br />인사를 전하며</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so" id="4">
                        Deine Silvia
                        <span class="tran"><br />너의 실비아가</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="5">
                        Bitte antworte mir bis Mittwoch oder ruf mich an.
                        <span class="tran"><br />수요일까지 나에게 대답을 해주시던지
                            전화해주렴</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="6">
                        ich werde zwanzig.
                        <span class="tran"><br />내가 20살이 되.</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="7">
                        Das möchte ich gern mit dir und meinen anderen Freunden
                        feiern.
                        <span class="tran"><br />너와 나의 다른 친구들과 생일파티를 하고자
                            해.</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="8">
                        Die Party ist am Samstag, 20. 06. um 17.00 Uhr.
                        <span class="tran"><br />파티는 6월 20일 토요일 17시야.</span>
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="9">
                        Ich lade dich herzlich ein.
                        <span class="tran"><br />너를 진심으로 초대한다.</span>
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
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
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
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">
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
                    name: "r9 D1",
                    sprite: {
                        "0": [4.41, 35.58],
                        "1": [17.35, 1.4],
                        "2": [32.81, 1.09],
                        "3": [37.51, 1.13],
                        "4": [38.69, 1.3],
                        "5": [34.21, 2.86],
                        "6": [18.98, 1.6],
                        "7": [20.77, 3.77],
                        "8": [27.46, 3.94],
                        "9": [24.94, 1.77]
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
                    hm[hmn]++; /* 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기 */
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
                            $("#" + hmn).closest(".btn").find(".tran").show();
                        }
                    }
                },
                ready_callback: function () {
                    $(".o").on("click", function () {
                        ion.sound.play("dingdongdang");
                    });
                    $(".x").on("click", function () {
                        ion.sound.play("Cartoon_Boing");
                    });
                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings().hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass("btn-warning");
                            $(this).parent().children().removeClass("btn-light");
                        }; /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(".an").length / $(".q").length) * 100);
                        $(".progress>.bar").attr("width", perc + "%;");
                    }); /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop").popover('hide');
                        }, 500);
                    });
                    $(".so").on("click", function () {
                        if ($(this).attr("id").substr(-2) == "_p") {
                            /* _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause("r9 D1", {
                                part: "0"
                            });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() == "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play("r9 D1", {
                                part: $(this).attr("id")
                            });
                            $(this).html("❚❚");
                        } else if ($(this).html() == "❚❚") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause("r9 D1", {
                                part: $(this).attr("id")
                            });
                            $(this).html("▶");
                        } else {
                            /* _p 붙어 있지 않으면 id 그대로 재생 */
                            ion.sound.play("r9 D1", {
                                part: $(this).attr("id")
                            }); /* 전체 듣기 재생일 때는 일시정지 버튼 보이기 */
                            if ($(this).attr("id") == "0") {
                                $(this).hide();
                                $("#0_p").show();
                            };
                        };
                    });
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find(".btn")) {
                                    $(this).find(".btn").addClass("text-success");
                                }
                            });
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
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
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    var pan = new Array();
                    pan = [1];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                                $("#" + $(this).attr("id")).addClass(
                                    "btn-block font-weight-bold");
                                $("#" + $(this).attr("id")).addClass("border-0");
                                $("#lst-" + pan[p] + ">h2")
                            .remove(); /* $("#lst-" + pan[p]).parent().find(".tran").show(); */
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