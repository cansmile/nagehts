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
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Herr Ober, die Speisekarte bitte.<span
                                        class="tran"><br><small>여기 메뉴판 좀
                                            주세요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Bitte schön!<span class="tran"><br><small>여기
                                            있습니다!</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Wir möchten gern bestellen.<span
                                        class="tran"><br><small>주문할게요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Ja, natürlich! Was möchten Sie?<span
                                        class="tran"><br><small>네, 알겠습니다. 무엇을
                                            드시겠습니까?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Ich nehme eine Pizza und einen Salat.<span
                                        class="tran"><br><small>전 피자 하나와 샐러드
                                            하나요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Und was möchten Sie trinken?<span
                                        class="tran"><br><small>그리고
                                            음료는요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Ich trinke eine Cola.<span
                                        class="tran"><br><small>콜라 한 잔
                                            주세요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Und Sie? Was bekommen Sie?<span
                                        class="tran"><br><small>이 쪽 분은 무엇을
                                            드시겠습니까?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-success">▶</button>
                                </th>
                                <td>Ich esse ein Steak und trinke einen
                                    Wein.<span class="tran"><br><small>전 스테이크
                                            하나와 와인 한 잔이요.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table
                        class="table table-borderless table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">SPEISEKARTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-primary">Wein (m)</td>
                                <td class="text-danger">Suppe (f)</td>
                            </tr>
                            <tr>
                                <td class="text-purple">Steak (n)</td>
                                <td class="text-primary">Salat (m)</td>
                            </tr>
                            <tr>
                                <td class="text-danger">Cola (f)</td>
                                <td class="text-purple">Fleisch (n)</td>
                            </tr>
                            <tr>
                                <td class="text-purple">Brot (n)</td>
                                <td class="text-danger">Pizza (f)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
            }
            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./<?php echo($root); ?>sounds/Reihe 5/r5 D4.mp3"],
                sprite: {
                    "0": [1030, 47117],
                    "1": [10841, 3217],
                    "2": [16298, 1251],
                    "3": [18197, 2119],
                    "4": [21895, 3015],
                    "5": [26204, 3540],
                    "6": [31182, 2239],
                    "7": [34233, 2093],
                    "8": [39544, 2898],
                    "9": [44686, 3400]
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
                        if (($("div#last").text() ==
                                "" || t.text() ==
                                "❚❚") && !t
                            .hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        } else if (last == ti &&
                            nagehts.playing($(
                                    "div#last")
                                .text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(
                                sen[ti]);
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
                                pa[last] = $("#" +
                                    last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(
                            ".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
