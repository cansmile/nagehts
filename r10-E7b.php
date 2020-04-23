<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
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
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3"
                        id="1">
                        Berliner Straße
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3"
                        id="2">
                        Kirchenweg
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3"
                        id="3">
                        links
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3"
                        id="4">
                        Prager Straße
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3"
                        id="5">
                        rechts
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3"
                        id="6">
                        Stadtmuseum
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
                    <h2>[ <small>보기를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
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
                            버튼을 눌러도 번역은 나오지 않습니다. 정답확인하면 문장의 번역이 나옵니다.</small> ]
                    </h3>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E7-1.png"
                        alt="Wo ist das?"
                        style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col"
                                    class="font-weight-bold bg-light text-black">
                                    Dialog 2: An der Frauenkirche:<span
                                        class="tran"><br><small>프라우엔키르헤에서</small><br></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button type="button"
                                        id="7"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Guten Tag!<span
                                        class="tran"><br><small>안녕하세요!</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="8"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Guten Tag, kann ich Ihnen helfen?<span
                                        class="tran"><br><small>안녕하세요, 제가
                                            도와드릴까요?</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="9"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Ja, wir suchen das Theater.<span
                                        class="tran"><br><small>네, 우리는 극장을 찾고
                                            있어요.</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="10"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Das Theater?<span
                                        class="tran"><br><small>극장이요?</small><br></span>
                                    Das ist in der Berliner Straße.<span
                                        class="tran"><br><small>베를리너슈트라세에
                                            있어요.</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="11"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Ist das weit?<span
                                        class="tran"><br><small>먼가요?</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="12"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td style="line-height: 250%;">
                                    Nein. Gehen Sie hier den <div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-1">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div> geradeaus.<span
                                        class="tran"><br><small>아니요, 여기서 키르헨벡을
                                            따라 똑바로 가세요.</small><br></span> Am
                                    Ende des Weges biegen Sie nach <div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-2">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div> in die <div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-3">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div>.<span class="tran"><br><small>그길 끝에서
                                            왼쪽으로 꺽어져 프라거슈트라세로
                                            가세요.</small><br></span> Die zweite
                                    Straße gehen Sie nach <div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-4">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div> in die<div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-5">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div>.<span class="tran"><br><small>두번째 길에서
                                            오른쪽 베를리너슈트라세로
                                            가세요.</small><br></span> Dann sehen
                                    Sie schon auf der rechten Seite das Theater,
                                    neben dem <div
                                        class="itm-lst 1itm d-inline-block mx-1"
                                        id="lst-6">
                                        <h2 class="btn btn-warning btn-lg ttl d-block t_add_6"
                                            style="min-width: 90px; max-width: 190px">
                                            ▼ </h2>
                                    </div>.<span class="tran"><br><small>그러면 바로
                                            오른 편에 극장이 보일 거예요. 시립박물관
                                            옆에요.</small><br></span>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="button"
                                        id="13"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </td>
                                <td>
                                    Vielen Dank! Auf Wiedersehen.<span
                                        class="tran"><br><small>네, 대단히 감사합니다.
                                            안녕히 가세요.</small><br></span>
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
            $(".so").each(function () {
                hm[$(this).attr("id")] = 0;
                sen[$(this).attr("id")] = $("#" + $(this).attr(
                    "id")).text();
            });

            ion.sound({
                sounds: [{
                    name: "r10 U7",
                    sprite: {
                        "0": [41.296, 33.985],
                        "7": [45.572, 1.238],
                        "8": [46.810, 2.325],
                        "9": [49.135, 2.121],
                        "10": [51.434, 3.529],
                        "11": [54.964, 1.094],
                        "12": [56.235, 16.543],
                        "13": [72.778, 2.264]
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
                        $("#" + obj.part).text(sen[obj
                            .part]);
                        if (hm[hmn] > 1) {
                            $("#" + hmn).closest("ul").find(
                                ".tran").show();
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
                                "r10 U7", {
                                    part: "0"
                                }
                            );
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).text() ==
                            sen[$(this).attr("id")]
                            ) {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                            "r10 U7", {
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
                                "r10 U7", {
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
                            "r10 U7", {
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

                            /* 정답 확인 div 상자 배경색 속성 없애10 */
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
                                                "text-success font-weight-bold"
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
                    pan = [19, 31];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass(
                                    "ans" + pan[p]
                                    )) {
                                $("#" + $(this)
                                        .attr("id"))
                                    .insertBefore($(
                                        "#lst-" +
                                        pan[p] +
                                        ">h2"));
                                $("#" + $(this)
                                        .attr("id"))
                                    .addClass(
                                        "btn-inline-block"
                                        );
                                $("#" + $(this)
                                        .attr("id"))
                                    .addClass(
                                        "btn-light"
                                        );
                                $("#lst-" + pan[p] +
                                        ">h2")
                                    .remove();
                                /* $("#lst-" + pan[p]).closest("tr").find(".tran").show(); */
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
