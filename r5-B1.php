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
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button
                                type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번
                            완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1" class="so btn btn-outline-info">▶</button>
                                </th>
                                <td>Was isst du gern?<span class="tran"><br><small>넌 무엇을 즐겨먹니?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-danger">▶</button></th>
                                <td>Ich esse gern Pizza. Die schmeckt gut.<span class="tran"><br><small>난 피자를 즐겨 먹어. 그것이
                                            맛이 좋거든.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3" class="so btn btn-outline-info">▶</button>
                                </th>
                                <td>Was isst du gern?<span class="tran"><br><small>넌 무엇을 즐겨 먹는데?</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-danger">▶</button></th>
                                <td>Mein Lieblingsessen ist Wurstbrot. Das schmeckt gut.<span class="tran"><br><small>내가
                                            좋아하는 음식은 소시지빵이야. 그것이 맛이 좋아.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5" class="so btn btn-outline-info">▶</button>
                                </th>
                                <td>Ich esse gern Kuchen. Der ist lecker.<span class="tran"><br><small>나는 케이크를 즐겨 먹어.
                                            그것이 맛있어.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless table-striped text-center table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row" colspan="4">Demonstrativpronomen <small>지시대명사</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th class="text-primary" scope="col">m</th>
                                <th class="text-danger" scope="col">f</th>
                                <th class="text-purple" scope="col">n</th>
                            </tr>
                            <tr>
                                <th scope="row">bestimmter Artikel</th>
                                <td class="text-primary"><strong>der</strong> Kuchen</td>
                                <td class="text-danger"><strong>die</strong> Pizza</td>
                                <td class="text-purple"><strong>das</strong> Wurstbrot</td>
                            </tr>
                            <tr>
                                <th scope="row">Demonstrativpronomen</th>
                                <td class="text-primary">der</td>
                                <td class="text-danger">die</td>
                                <td class="text-purple">das</td>
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
    <script>
        $(".tran").hide();
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
            he[ti] = t.height();
        });

        function stopAll() {
            $(".so").each(function () {
                $(this).html(pa[$(this).attr("id")]);
            });
        }
        var nagehts = new Howl({
            /* src: ["./dev/sounds/Reihe 1/r1 H.mp3"], */
            src: ["./dev/sounds/Reihe 5/r5 B1.mp3"],
            sprite: {
                "0": [2696, 51238],
                "1": [17616, 2326],
                "2": [22455, 4052],
                "3": [32363, 1985],
                "4": [38271, 4770],
                "5": [50250, 3637]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                    );
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                /* 음성 준비되면 HV 버튼 나타내기 */
                $("#whole").show();
                $("#ready").hide();
                /* $("#ready").hide(); */
                $(".so").on("click", function (idx) {
                    var t = $(this);
                    var ti = t.attr("id");
                    if ($("div#last").text() == "" || t.text() == "❚❚") {
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

    </script>
    </body>

</html>
