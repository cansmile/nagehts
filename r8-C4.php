<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Markieren Sie.<br>
                        <small>체크해보세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless text-center">
                        <tr>
                            <td width="30%"><button type="button" id="1"
                                    class="so btn btn-outline-orange">▶</button>&nbsp;Martin Fischer</td>
                            <td width="30%"><button type="button" id="2"
                                    class="so btn btn-outline-success">▶</button>&nbsp;Marie Schmidt</td>
                            <td width="30%"><button type="button" id="3"
                                    class="so btn btn-outline-purple">▶</button>&nbsp;Max</td>
                        </tr>
                    </table>
                </div>
                <div class="col-12">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-1">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>마틴피셔는 독감이다.</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">hat Grippe.</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-2">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>막스는 열이 있다.</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">hat Fieber.</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-3">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>마리 슈미트는 기침을 한다.</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">hat Husten.</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-4">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>마틴 피셔는 일하러 갈 수 없다.</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">kann nicht arbeiten gehen.</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-5">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>마리 슈미트는 쇼핑을 갈 수 없다.</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">kann nicht einkaufen gehen.</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-6">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>막스는 오늘 축구를 할 수 없다.</small></span>
                                </td>
                                <th scope="row">kann heute nicht Fußball spielen.</th>
                            </tr>
                            <tr>
                                <th width="50%" class="text-center" scope="row" colspan="2">Was sagt der Arzt?<span
                                        class="tran"><br><small>의사는 무슨 말을 하나요?</small></span></th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-8">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>“아스피린을 먹어야 해.”</small></span>
                                </td>
                                <th scope="row">„Du sollst Aspirin nehmen“</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-9">
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>“기침약을 복용하세요.”</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">„Nehmen Sie Hustensaft.”</th>
                            </tr>
                            <tr>
                                <td class="text-end py-0">
                                    <div class="btn-group q" data-toggle="buttons" role="group" id="qst-10">
                                        <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답!">
                                            Martin Fischer
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Marie Schmidt
                                        </div>
                                        <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                            data-placement="top" data-content="정답이 아니에요.">
                                            Max
                                        </div>
                                    </div>
                                    <span class="tran"><br><small>“누워있으셔야 해요.”</small></span>
                                </td>
                                <th width="50%" class="ailgn-middle" scope="row">„Sie sollen im Bett bleiben”.</th>
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

    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        /* 각 문장 재생 횟수 초기화 */
        var hm = new Array();
        $(".so").each(function () {
            hm[$(this).attr("id")] = 0;
        });

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
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 8/r8 C4.mp3"],
                sprite: {
                    "0": [1969, 68837],
                    "1": [8663, 19735],
                    "2": [31911, 21609],
                    "3": [57009, 13630]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    /* 음성 준비되면 HV 버튼 나타내기 */
                    $("#0").show();
                    $("#ready").hide();
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
                    }); /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($(this).attr("id") == "chk") {
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
                                alert("모든 문제를 풀어주세요.");
                            } else {
                                $(".tran").show();
                                $(this).attr("id", "done");
                                $(".pop").each(function () {
                                    $(this).removeClass("btn-info");
                                    $(this).removeClass("btn-warning");
                                    if ($(this).hasClass("o") && $(this).hasClass(
                                            "an")) {
                                        $(this).addClass("btn-success");
                                    } else if ($(this).hasClass("o")) {
                                        $(this).addClass("btn-warning");
                                    } else if ($(this).hasClass("an")) {
                                        $(this).addClass("btn-danger");
                                    } else {
                                        $(this).addClass("btn-light");
                                    };
                                }); /* 정답 확인 div 상자 배경색 속성 없애기 */
                                $(this).removeClass("btn-light ");
                                var qa = $(".q").length; /* 전체 문항 수 */
                                var qr = $(".btn-success").length; /* 맞춘 항목 수 */
                                var pe = (qr / qa) * 100; /* 정답 비율 */
                                var tcl =
                                "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                                $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" +
                                    st + "</h4>");
                            };
                        }
                    });
                    var pan = new Array();
                    pan = [1, 4, 9];
                    var il = $(".q").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#qst-" + pan[p];
                        $("#qst-" + pan[p] + ">div.o").addClass("an");
                        $("#qst-" + pan[p] + ">div.o").addClass("btn-warning");
                        $("#qst-" + pan[p] + ">div.o").removeClass("btn-light");
                    }
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
        });

    </script>
    </body>

</html>
