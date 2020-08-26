<?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인
                            문장이 붉게 변합니다.</small> ]
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
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="50"><button type="button" id="1"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">1.</td>
                                <td>Wo liegt Korea?<span class="tran"><br><small>한국은 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon1"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-1">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="2"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">2.</td>
                                <td>Wo liegt Australien?<span class="tran"><br><small>호주는 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon2"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-2">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="3"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">3.</td>
                                <td>Wo liegt Amerika?<span class="tran"><br><small>미국은 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon3"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-3">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="4"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">4.</td>
                                <td>Wo liegt Österreich?<span class="tran"><br><small>오스트리아는 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon4"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-4">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="5"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">5.</td>
                                <td>Wo liegt der Irak?<span class="tran"><br><small>이라크는 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon5"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-5">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="6"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">6.</td>
                                <td>Wo liegt Indien?<span class="tran"><br><small>인도는 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon6"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-6">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="7"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">7.</td>
                                <td>Wo liegt Kenia?<span class="tran"><br><small>케냐는 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon7"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-7">
                                        .
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="50"><button type="button" id="8"
                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                </th>
                                <td width="50">8.</td>
                                <td>Wo liegt Deutschland?<span class="tran"><br><small>독일은 어디에
                                            있나요?</small></span></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8"
                                            class="form-control q border-bottom-only rounded-0 mx-1 t-6" id="qst-8">
                                        .
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
        $(".tran").hide();
        var an = new
        Array();
        var an = ["In Asien", "In Australien", "In Nordamerika", "In Europa ",
            " In Asien ", " In Asien ", " In Afrika ", " In Europa "
        ];
        $(document).ready(function () {
            /* 소리 출력 전역 변수와 함수 */
            var sen = new
            Array(), pa = new Array(), he = new Array(), last;
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
                    "./<?php echo($root); ?>sounds/Reihe 2/r2 D3.mp3"
                ],
                sprite: {
                    "0": [0,
                        62342
                    ],
                    "1": [4140, 6722],
                    "2": [11746, 7057],
                    "3": [20264, 6258],
                    "4": [27948, 6650],
                    "5": [35626, 5668],
                    "6": [42618, 6609],
                    "7": [50042, 5359],
                    "8": [56675, 5724]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요. < /strong>"
                    );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
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
                    }); /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */ /* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
                        di(th);
                        if (!$.isArray(an[qn])) {
                            /* 1 인 경우 */
                            if (io) {
                                b = an[qn];
                            } else {
                                b = an[qn].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");
                            if (a == b) {
                                return true;
                            }
                        } else {
                            /* 2 이상인 경우 */
                            for (var fd = 0; fd < an[qn].length; fd++) {
                                if (io) {
                                    b = an[qn][fd];
                                } else {
                                    b = an[qn][fd].substr(0, q);
                                }
                                b = b.replace(/ /gi, "");
                                if (a == b) {
                                    return true;
                                }
                            }
                        }
                    }
                    $(".q").on("keyup", function () {
                        $(this).removeClass("bg-danger");
                        $(this).removeClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                            "text-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                            "text-success");
                        if (rfchk($(this))) {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-danger");
                        }
                        if (!$(this).val()) {
                            $(this).removeClass("bg-danger");
                            $(this).removeClass("bg-success");
                            $(this).removeClass("text-white font-weight-bold");
                        }
                        if ($(this).val()) {
                            $("#ant-" + $(this).attr("id").substr(4)).show();
                            $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                        } else {
                            $("#ant-" + $(this).attr("id").substr(4)).hide();
                        }
                    });
                    $(".q").on("focusin", function () {
                        $("#ant-" + $(this).attr("id").substr(4)).show();
                        if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                            $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                        }
                        if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-success");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-success");
                            } else {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-danger");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-danger");
                            }
                        }
                    });
                    $(".q").on("focusout", function () {
                        $("#ant-" + $(this).attr("id").substr(4)).hide();
                        if (rfchk($(this), true)) {
                            $(this).addClass("bg-success");
                            $(this).addClass("text-white");
                        } else {
                            $(this).addClass("bg-danger");
                        }
                        if ($(this).val()) {
                            if ($(this).hasClass("bg-danger")) {
                                x.play();
                            } else if ($(this).hasClass("bg-success")) {
                                o.play();
                                $(this).prop("disabled", true);
                            }
                        }
                        $(this).removeClass("bg-danger");
                        if (!$(this).attr("disabled")) {
                            $(this).removeClass("text-white font-weight-bold");
                            $(this).removeClass("bg-success");
                        }
                    }); /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                    $("#chk").on("click", function () {
                        var na = "";
                        var ri = 0;
                        var qst = $(".q").length;
                        $(".q").each(function () {
                            if (na != "") {
                                na += ", ";
                            }
                            if ($(this).val() == "") {
                                na += $(this).attr("id").substr(
                                    4, 1);
                            }
                        });
                        if ($(this).attr("id") == "done") {} else if (
                            na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass(
                                        "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1"
                                    );
                                    $("#qst-" + (i + 1)).removeClass(
                                        "rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr(
                                        "disabled", true);
                                    $("#qst-" + (i + 1)).addClass(
                                        "wa"
                                    );
                                    $("#qst-" + (i + 1)).removeClass(
                                        "rounded-0");

                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"d-block ra t-6\">" +
                                            an[i] + "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r =
                                            "<div class=\"d-block ra t-6\">";
                                        for (var fd = (an[i].length -
                                                1); fd >= 0; fd--) {
                                            if (fd < (an[i].length -
                                                    1)) {
                                                r = r + " / ";
                                            }
                                            r = r + an[i][fd];
                                        }
                                        r = r + "</div>";
                                        if ($("span.sen").length > 0) {
                                            $("#qst-" + (i + 1))
                                                .closest("span.sen")
                                                .after(r);
                                        } else {
                                            $("#qst-" + (i + 1)).after(
                                                r);
                                        }
                                    }

                                }
                                if ($("#qst-" + (i + 1)).hasClass(
                                        "bg-success")) {
                                    ri++;
                                }
                            }

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");

                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success")
                                .length; /* 맞춘 항목 수 */
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

                            $(this).addClass("btn-" + cl + " text-" +
                                tcl);
                            $(this).html("<h4>" + qa + "문제 중 " + qr +
                                "개를 맞히셨네요!<br>" + st + "</h4>");

                            $(this).prop("disabled", true);
                            $(".tran").show();
                            $(this).attr("id", "done");

                            checkHeight();
                        } else {
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
                        };
                    })

                    /* 역동적 입력란 */
                    function di(th) {
                        var le = 0,
                            mp = 8,
                            l = th.val().length;
                        if (l < 5) {
                            var mp = 10;
                        }
                        if (l >= 20) {
                            var mp = 6;
                        }
                        if (l < 20) {
                            var mp = 8;
                        } else {
                            var mp = 8;
                        }

                        if (l < 5) {
                            l = 5;
                        }
                        if (l < 7) {
                            le = l * 2.2;
                        } else if (l >= 20) {
                            le = l * 1.45;
                        } else if (l >= 5) {
                            le = l * 1.55;
                        }
                        var w = (le + 1) * mp + "px";
                        th.addClass("mx-1");
                        th.css("min-width", w);
                        th.css("max-width", w);
                        th.css("width", w);
                    };

                    /* 전체 입력란 폭 맞추기 */
                    $(".q").each(function () {
                        di($(this));
                    });

                    $("#qst-1").val("In Asien");
                    $("#qst-1").addClass("bg-success text-white font-weight-bold");
                    $("#qst-1").attr("disabled", true);
                    $("#0").show();
                    $(".alert").hide();
                },
                onend: function () {
                    $("div#last")
                        .text("");
                    stopAll();
                    $("#cnt-" +
                            last)
                        .text(sen[
                            last
                        ]);
                    if (last == 0) {
                        if (sen[
                                last] ==
                            2) {
                            $(".tran")
                                .show();
                            $(".so")
                                .each(
                                    function () {
                                        pa[last] =
                                            $("#" +
                                                last
                                            )
                                            .html();
                                    }
                                );
                        }
                    } else if (sen[
                            last] ==
                        2) {
                        if ($("#" +
                                last
                            )
                            .hasClass(
                                "itm"
                            )) {
                            $("#" + last +
                                    ">.tran"
                                )
                                .show();
                        }
                        $("#" +
                                last)
                            .closest(
                                "tr"
                            )
                            .find(
                                ".tran"
                            )
                            .show();
                        pa[last] =
                            $("#" +
                                last
                            )
                            .html();
                    }
                }
            });
        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
