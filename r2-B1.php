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
                    <h2>Hören Sie und sprechen Sie nach.<br>
                        <small>듣고 따라 하세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center h4 text-white bg-success" height="50px">Dialog</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Woher kommen Sie?<span class="tran"><br><small>당신은 어디에서
                                            오셨나요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td><span class="sen">Ich komme aus Korea. Ich
                                        bin <span class="nu"></span>
                                        <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
                                            <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                                data-placement="top" data-content="정답이 아니에요.">
                                                <input type="radio" name="options" id="option1"
                                                    autocomplete="off"><label for="option1">Koreaner</label>
                                            </div>
                                            <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                                data-placement="top" data-content="정답!">
                                                <input type="radio" name="options" id="option2"
                                                    autocomplete="off"><label for="option2">Koreanerin</label>
                                            </div>
                                        </div>.<span class="ans"></span><span class="tran"><br><small>저는 한국에서 왔어요.
                                                한국(여)인이에요.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Kommen Sie aus Seoul?<span class="tran"><br><small>서울에서
                                            왔나요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Nein, ich komme aus Busan. Aber ich wohne in
                                    Seoul.<span class="tran"><br><small>아뇨, 저는
                                            부산 출신이에요. 하지만 서울에
                                            살아요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Woher kommen Sie?<span class="tran"><br><small>당신은 어디에서
                                            오셨나요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Ich komme aus Japan. Ich
                                        bin <span class="nu"></span>
                                        <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
                                            <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                                data-placement="top" data-content="정답!">
                                                <input type="radio" name="options" id="option3"
                                                    autocomplete="off"><label for="option3">Japaner</label>
                                            </div>
                                            <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                                data-placement="top" data-content="정답이 아니에요.">
                                                <input type="radio" name="options" id="option4"
                                                    autocomplete="off"><label for="option4">Japanerin</label>
                                            </div>
                                        </div>.<span class="ans"></span><span class="tran"><br><small>저는 일본에서 왔어요.
                                                저는 일본인입니다.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Und wo wohnen Sie?<span class="tran"><br><small>그러면 어디에서
                                            살아요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Ich wohne auch in Seoul.<span class="tran"><br><small>저도 서울에서
                                            살아요.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                    <table class="table text-danger table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col"><img src="./<?php echo($root); ?>images/sym_frau.png" alt="Frau"
                                        style="max-height: 40px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="height: 65px;">Koreanerin</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Japanerin</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Chinesin</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Deutsche</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                    <table class="table text-primary table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col"><img src="./<?php echo($root); ?>images/sym_mann.png" alt="Mann"
                                        style="max-height: 40px; width: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="height: 65px;">Koreaner</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Japaner</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Chinese</td>
                            </tr>
                            <tr>
                                <td style="height: 65px;">Deutscher</td>
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
        $("#0").hide()
        $(".tran").hide()
        $(document).ready(function () {
            /* 소리 출력 전역 변수와 함수 */
            var sen = new Array(),
                pa = new Array(),
                he = new Array(),
                last
            $(".so").each(function () {
                var t = $(this)
                var ti = t.attr("id")
                sen[ti] = 0
                pa[ti] = t.html()
            })

            function stopAll() {
                $(".so").each(function () {
                    $(this).html(pa[$(this).attr("id")])
                })
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./<?php echo($root); ?>sounds/Reihe 2/r2 B1.mp3"],
                sprite: {
                    "0": [1226, 54162],
                    "1": [13965, 1804],
                    "2": [18080, 3997],
                    "3": [25313, 2035],
                    "4": [29516, 4957],
                    "5": [38927, 1814],
                    "6": [43024, 3713],
                    "7": [48773, 2034],
                    "8": [53098, 2461],
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        '<br /><strong class="font-weight-bold text-dark h4">페이지를 다시 읽어주시기 바래요.</strong>',
                    )
                    console.log("다시 읽어주세요!")
                },
                onload: function () {
                    $("[data-toggle='popover']").popover({
                        delay: {
                            hide: 1000,
                        },
                        container: "body",
                    })
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings().hasClass("an")) {
                            $(this).addClass("an")
                            $(this).addClass("btn-warning")
                            $(this).parent().children().removeClass("btn-light")
                        } /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(".an").length / $(".q").length) * 100)
                        $(".progress>.bar").attr("width", perc + "%;")
                    }) /* 팝업 내용 사라지기 */
                    $(".pop")
                        .popover()
                        .click(function () {
                            setTimeout(function () {
                                $(".pop").popover("hide")
                            }, 500)
                        }) /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($(".an").length < $(".q").length) {
                            var na = ""
                            $(".q").each(function () {
                                if (!$(this).find("div").hasClass("an")) {
                                    if (na != "") {
                                        na += ", "
                                    }
                                    na += $(this).attr("id").substr(-1)
                                }
                            })
                            alert(
                                "모든 문제를 풀어주세요.",
                            ) /* alert(na + "번 문제를 풀어주세요."); */
                        } else {
                            $(".pop").each(function () {
                                $(this).removeClass("btn-info")
                                if ($(this).hasClass("o") && $(this).hasClass("an")) {
                                    $(this).removeClass("btn-warning")
                                    $(this).addClass("btn-success")
                                    $(this)
                                        .closest(".sen")
                                        .find(".nu")
                                        .addClass(
                                            "rounded p-1 px-2 text-white bg-success font-weight-bold",
                                        )
                                    $(this)
                                        .closest(".sen")
                                        .find(".nu")
                                        .text($.trim($(this).text()))
                                } else if ($(this).hasClass("o")) {
                                    $(this).addClass("btn-<?php echo($color); ?>")
                                    $(this)
                                        .closest(".sen")
                                        .find(".ans")
                                        .html(
                                            $.trim(
                                                $(this)
                                                    .closest(".sen")
                                                    .find(".o")
                                                    .text(),
                                            ),
                                        )
                                    $(this)
                                        .closest(".sen")
                                        .find(".nu")
                                        .addClass(
                                            "rounded p-1 px-2 text-white bg-danger font-weight-bold",
                                        )
                                    $(this)
                                        .closest(".sen")
                                        .find(".ans")
                                        .addClass(
                                            "rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2",
                                        )
                                } else if ($(this).hasClass("an")) {
                                    $(this).addClass("btn-warning")
                                    $(this)
                                        .closest(".sen")
                                        .find(".nu")
                                        .text($.trim($(this).text()))
                                } else {
                                    $(this).addClass("btn-light")
                                }
                                $(this).remove()
                            })
                            $(".tran").show()
                            $(".nu").show()
                            $(".q").hide() /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ")
                            var qa = $(".q").length /* 전체 문항 수 */
                            var qr = $("span.bg-success").length /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100 /* 정답 비율 */
                            var tcl =
                                "white" /* 분류 기준은 100%, 80%, 60%, 40% */ /* 기본 문자색 */
                            if (pe > 99) {
                                var st = "원어민이세요?"
                                var cl = "lime"
                                var tcl = "dark"
                            } else if (pe > 74) {
                                var st = "어! 좀 하시는데요~^^"
                                var cl = "success"
                            } else if (pe > 49) {
                                var st = "쓰읍~ 다시 해 보실까요?"
                                var cl = "primary"
                            } else {
                                var st = "좀 더 분발해 주세요~"
                                var cl = "danger"
                            }
                            $(this).addClass("btn-" + cl + " text-" + tcl)
                            $(this).html(
                                "<h4>" +
                                    qa +
                                    "문제 중 " +
                                    qr +
                                    "개를 맞히셨네요!<br>" +
                                    st +
                                    "</h4>",
                            )
                        }
                    })
                    $(".so").on("click", function () {
                        var t = $(this)
                        var ti = t.attr("id")
                        if (
                            ($("div#last").text() == "" || t.text() == "❚❚") &&
                            !t.hasClass(".itm-lst")
                        ) {
                            $("#last").text(ti)
                            t.text("■")
                            nagehts.seek()
                            nagehts.play(ti)
                            sen[ti]++
                            last = ti
                            $("#cnt-" + ti).text(sen[ti])
                        } else if (
                            last == ti &&
                            nagehts.playing($("div#last").text())
                        ) {
                            $("#last").text("")
                            t.html(pa[ti])
                            nagehts.pause()
                            sen[ti]--
                            $("#cnt-" + ti).text(sen[ti])
                        }
                    })
                    $("#0").show()
                },
                onend: function () {
                    $("div#last").text("")
                    stopAll()
                    $("#cnt-" + last).text(sen[last])
                },
            })
        })
    </script>
    <?php require "footer.php"; ?>
</body>

</html>
