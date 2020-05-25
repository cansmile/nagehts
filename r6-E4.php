<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Hören Sie und markieren Sie.
                        <small><br> 듣고 표시하세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>음성을 듣고 알맞은 것을 선택하세요.<br><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-0">
                    <table class="table table-borderless my-0">
                        <thead>
                            <tr>
                                <th scope="col" width="50">
                                    &nbsp;</th>
                                <th scope="col"></th>
                                <th scope="col" width="60%">
                                    trennbar <i>oder</i> nicht trennbar</th>
                            </tr>
                        </thead>
                    </table>
                    <table class="table table-borderless table-striped text-center my-0">
                        <tbody>
                            <tr>
                                <th width="50" scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>aufstehen
                                    <span class="tran"><br><small>일어나다</small></span>
                                </td>
                                <td width="60%">
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option1">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option2">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>bezahlen
                                    <span class="tran"><br><small>지불하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option3">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option4">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>versuchen
                                    <span class="tran"><br><small>시도하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option5">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option6">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>anmachen
                                    <span class="tran"><br><small>켜다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option7">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option8">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>einschlafen
                                    <span class="tran"><br><small>잠들다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option9">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option10">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>einladen
                                    <span class="tran"><br><small>초대하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option11">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option12">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-0">
                    <div class="col d-sm-none d-md-none d-lg-block d-xl-block">
                        <table class="table table-borderless my-0">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">
                                        &nbsp;</th>
                                    <th scope="col"></th>
                                    <th scope="col" width="60%">trennbar <i>oder</i> nicht
                                        trennbar</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <table class="table table-borderless table-striped text-center my-0">
                        <tbody>
                            <tr>
                                <th width="50" scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>erzählen
                                    <span class="tran"><br><small>이야기하다</small></span>
                                </td>
                                <td width="60%">
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option13">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option14">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>besuchen
                                    <span class="tran"><br><small>방문하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option15">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option16">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>gehören
                                    <span class="tran"><br><small>속하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option17">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option18">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>aufhängen
                                    <span class="tran"><br><small>걸다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option19">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option20">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="11"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>verstehen
                                    <span class="tran"><br><small>이해하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option21">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option22">nicht
                                                trennbar</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>vorlesen
                                    <span class="tran"><br><small>낭독하다</small></span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-12">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            <input type="radio" name="options" id="option3" autocomplete="off"><label
                                                for="option23">trennbar</label>
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            <input type="radio" name="options" id="option4" autocomplete="off"><label
                                                for="option24">nicht
                                                trennbar</label>
                                        </div>
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

    <div id="last" class="d-none"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>

    <script>
        $("#0").hide();
        $(".tran").hide();
        $(document).ready(function () {
            /* 소리 출력 전역 변수와 함수 */
            var sen = new Array(),
                pa = new Array(),
                he = new Array(),
                last;
            $(".so").each(function () {
                var t = $(this);
                var ti = t.attr("id");
                sen[ti] = 0;
                pa[ti] = t.html();
            });

            function stopAll() {
                $(".so").each(function () {
                    $(this).html(pa[$(this).attr("id")]);
                });
            };

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./<?php echo($root); ?>sounds/Reihe 6/r6 E4.mp3"],
                sprite: {
                    "0": [4728, 63298],
                    "1": [15243, 1717],
                    "2": [20701, 1882],
                    "3": [26080, 1679],
                    "4": [30827, 1613],
                    "5": [35242, 1971],
                    "6": [39637, 1678],
                    "7": [44090, 1528],
                    "8": [48561, 1473],
                    "9": [53033, 1582],
                    "10": [57513, 1583],
                    "11": [61986, 1709],
                    "12": [66309, 1701]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    $("#0").show();
                    $(".alert").hide();
                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(
                                ".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(sen[ti]);
                        } else if (last == ti && nagehts.playing($("div#last").text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(sen[ti]);
                        }
                    });
                },
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);
                    if (last == 0) {
                        if (sen[last] == 2) {
                            $(".tran").show();
                            $(".so").each(function () {
                                pa[last] = $("#" + last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
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

            /* 정답확인 */
            $("#chk").on("click", function () {
                if ($(".an").length < $(".q").length) {
                    var na = "";
                    $(".q").each(function () {
                        if (!$(this).find("div").hasClass("an")) {
                            if (na != "") {
                                na += ", ";
                            }
                            na += $(this).attr("id").substr(4);
                        };
                    });
                    alert("모든 문제를 풀어주세요."); /* alert(na + "번 문제를 풀어주세요."); */
                } else {
                    $(".tran").show();
                    $(".pop").each(function () {
                        $(this).removeClass("btn-info");
                        if ($(this).hasClass("o") && $(this).hasClass("an")) {
                            $(this).removeClass("btn-warning");
                            $(this).addClass("btn-success");
                        } else if ($(this).hasClass("o")) {
                            $(this).addClass("btn-warning font-weight-bold");
                        } else if ($(this).hasClass("an")) {
                            $(this).addClass("btn-danger");
                        } else {
                            $(this).addClass("btn-light");
                        };
                    });
                    $(this).removeClass("btn-light "); /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
                    var qa = $(".q").length; /* 전체 문항 수 */
                    var qr = $(".btn-success").length; /* 맞춘 항목 수 */
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
                    $(this).addClass("btn-" + cl + " text-" + tcl);
                    $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                };
            });
            $("#0").show();
            $(".alert").hide();

        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
