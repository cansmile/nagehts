<?php require_once("heading.php"); ?>
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
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
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
                                <td>Wir möchten bitte bezahlen.<span
                                        class="tran"><br><small>계산하겠습니다.
                                        </small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Bitte schön. Zusammen oder getrennt?<span
                                        class="tran"><br><small>네. 같이 하시겠어요, 아니면
                                            따로 하시겠어요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Getrennt, bitte.<span
                                        class="tran"><br><small>따로요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Und was bezahlen Sie?<span
                                        class="tran"><br><small>그럼 무엇을
                                            계산하시나요?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Die Pizza, den Salat und die Cola.<span
                                        class="tran"><br><small>피자, 샐러드,
                                            콜라요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="6"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Das macht 9,70.<span
                                        class="tran"><br><small>9유로 70
                                            입니다.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>11 Euro, bitte.<span
                                        class="tran"><br><small>11유로
                                            드립니다.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Vielen Dank!<span
                                        class="tran"><br><small>감사합니다!</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-success">▶</button>
                                </th>
                                <td>Und ich bezahle das Steak und den Wein.<span
                                        class="tran"><br><small>전 스테이크 하나와 와인 한
                                            잔이요.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Ein Steak und einen Wein..., das macht 18
                                    Euro 50.<span class="tran"><br><small>스테이크와
                                            와인…. 18유로 50입니다.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="11"
                                        class="so btn btn-outline-success">▶</button>
                                </th>
                                <td>Hier, bitte. 20 Euro. Stimmt so.<span
                                        class="tran"><br><small>여기 있습니다. 20유로.
                                            거스름 돈은 됐습니다. </small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Danke schön!<span
                                        class="tran"><br><small>감사합니다!</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <table
                        class="table table-borderless table-striped text-justify">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="text-center">
                                    주문과 계산</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>주문할 때 부정관사를 사용한 것과는 달리 계산할 때에는 먹은 음식을 계산한
                                    것이므로 정관사를 사용한다.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">„zusammen oder
                                    getrennt?”</td>
                            </tr>
                            <tr>
                                <td>한꺼번에 아니면 각자 계산하시겠습니까?</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">„Stimmt so.”</td>
                            </tr>
                            <tr>
                                <td>계산할 때 거스름돈을 팁으로 주겠다는 표현이다. 한국어로 “거스름돈은
                                    됐습니다.”로 번역할 수 있다.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
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
                    "./dev/sounds/Reihe 5/r5 F2.mp3"],
                sprite: {
                    "0": [1181, 63412],
                    "1": [11128, 2508],
                    "2": [15226, 3354],
                    "3": [19676, 1675],
                    "4": [22452, 1972],
                    "5": [25880, 3540],
                    "6": [32580, 2466],
                    "7": [35872, 1777],
                    "8": [38346, 1434],
                    "9": [42388, 3616],
                    "10": [48494, 5366],
                    "11": [56394, 3293],
                    "12": [63125, 1572]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    $("#0").show();
                    $("#ready").hide();

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
    </body>

</html>
