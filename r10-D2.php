<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2> Ergänzen Sie die Lücken. <br>
                        <small> 빈칸을 채우세요. </small>
                        [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                            표시됩니다.</small> ]
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
            <div class="row my-2 py-2 lh350">
                <div class="col">
                    <span class="wd">ausgepackt</span>
                    <span class="wd">besichtigt</span>
                    <span class="wd">gefahren</span>
                    <span class="wd">gegessen</span>
                    <span class="wd">gekauft</span>
                    <span class="wd">gemacht</span>
                    <span class="wd">gesetzt</span>
                    <span class="wd">getrunken</span>
                    <span class="wd">kennengelernt</span>
                    <span class="wd">verpasst</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 border border-dark rounded p-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col" class="h2 bg-light text-center">
                                    <small>Mein Urlaub in Dresden</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height: 250%;">
                                    <div class="input-group d-inline">
                                        Hallo, ich bin gut in Dresden
                                        angekommen.<span class="tran"><br><small>안녕, 난 드레스덴에
                                                잘 도착했어.</small><br></span> <span class="sen">Auf dem Incheon
                                            Flughafen war es so voll von Leuten
                                            beim Check-in, dass ich beinah mein
                                            Flugzeug <input type="text" class="form-control q pl-0 col-4 rounded-0
                                            border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                            t-6"
                                                style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-1">
                                            habe.</span><span class="tran"><br><small>인천공항에서 체크인할
                                                때 사람들로 꽉 차서 거의 비행기를 놓칠 뻔
                                                했어.</small><br></span> Aber,
                                        Gott sei Dank, gab es 1
                                        Stunde-Verspätung!<span class="tran"><br><small>하지만 다행히도 한
                                                시간 지연되었어!.</small><br></span>
                                        Ich bin zuerst nach Frankfurt und dann
                                        anschließend nach Dresden geflogen.<span class="tran"><br><small>난 먼저 프랑크푸르트로
                                                간 다음 이어서 드레스덴으로
                                                갔어.</small><br></span> <span class="sen">Nach der Ankunft in
                                            Dresden bin ich mit dem Taxi ins
                                            Hotel <input type="text" class="form-control q pl-0 col-4 rounded-0
                                            border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                            t-6"
                                                style="max-width: 150px; min-width: 100px;" aria-label="."
                                                id="qst-2">.</span><span class="tran"><br><small>드레스덴에 도착 후
                                                택시를 타고 호텔로
                                                갔어.</small><br></span>
                                    </div>
                                </td>
                            </tr>
                            <td style="line-height: 250%;">
                                <div class="input-group d-inline">
                                    Dort habe ich meinen Koffer <input type="text" class="form-control q pl-0 col-4
                                    rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-3"> und bin
                                    gleich mit der Tram in die Stadtmitte
                                    gefahren und habe dort den Zwinger, die
                                    Frauenkirche und vieles mehr besucht.<span class="tran"><br><small>거기서 짐을 풀고 나서
                                            바로 트램을 타고 시내로 가서 츠빙어, 프라우엔교회, 그리고 여러 곳을
                                            더 방문했어.</small><br></span> Besonders
                                    habe ich in der Gemäldegalerie Alte Meister
                                    am Zwinger die „Sixtinische Madonna” von
                                    Raffael <input type="text" class="form-control q pl-0 col-4 rounded-0
                                    border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-4">.<span
                                        class="tran"><br><small>특히 츠빙어 옆 알테 마이스터
                                            회화관에서 라파엘의 “시스틴의 성모”를
                                            관람했어.</small><br></span> Das war
                                    einfach wunderbar.<span class="tran"><br><small>그것은 정말
                                            굉장했어.</small><br></span> Danach habe
                                    ich mit dem Bus eine Stadtrundfahrt <input type="text" class="form-control q pl-0
                                    col-4 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark
                                    d-inline-block t-6" style="max-width: 150px; min-width: 100px;" aria-label="."
                                    id="qst-5">.<span
                                        class="tran"><br><small>그 후에 버스로 시내관광투어를
                                            했어.</small><br></span> Die Stadt war
                                    wirklich toll!<span class="tran"><br><small>도시가 정말
                                            멋졌어!</small><br></span> Du kennst
                                    mich ja!<span class="tran"><br><small>너도
                                            알잖아!</small><br></span> Ich habe in
                                    der Altmarkt Galerie Geschenke für meine
                                    Familie und auch für dich <input type="text" class="form-control q pl-0 col-4
                                    rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-6">.<span
                                        class="tran"><br><small>알트마르크트 갤러리에서는
                                            가족과 너한테 줄 선물을 샀어.</small><br></span>
                                    Dann habe ich mich in ein Café <input type="text" class="form-control q pl-0 col-4
                                    rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-7">.<span
                                        class="tran"><br><small>그런 다음 카페에 앉아
                                            있었어.</small><br></span> Dort habe
                                    ich Kaffee <input type="text" class="form-control q pl-0 col-4 rounded-0
                                    border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-8"> und den
                                    berühmten Kuchen, Eierschecke <input type="text" class="form-control q pl-0 col-4
                                    rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-9">.<span
                                        class="tran"><br><small>거기서 커피를 마시고 유명한
                                            케이크인 아이어슈에크를 먹었어.</small><br></span>
                                    Einfach köstlich.<span class="tran"><br><small>정말
                                            맛있었어.</small><br></span>
                                </div>
                            </td>
                            </tr>
                            <td style="line-height: 250%;">
                                <div class="input-group d-inline">
                                    Stell dir vor!<span class="tran"><br><small>상상해봐!</small><br></span>
                                    Ich habe da einen Jungen aus Österreich auf
                                    dem Konzert <input type="text" class="form-control q pl-0 col-4 rounded-0
                                    border-bottom-only mx-1 px-2 py-1 text-center border-dark d-inline-block
                                    t-6"
                                        style="max-width: 150px; min-width: 100px;" aria-label="." id="qst-10">.<span
                                        class="tran"><br><small>난 오스트리아 출신 젊은
                                            남자를 콘서트에서 알게 되었어.</small><br></span>
                                    Er ist seit 3 Tagen in Dresden und hört gern
                                    Musik!<span class="tran"><br><small>그는 드레스덴에
                                            머문지 3일 되었고 음악 듣는 걸
                                            좋아해!</small><br></span> Wir sind
                                    zusammen ins Musikcafé gegangen, und haben
                                    zusammen Musik gehört und getanzt.<span class="tran"><br><small>우리는 함께 음악카페에 가서
                                            함께 음악을 듣고 춤을 추었어.</small><br></span>
                                    Ich habe auch heute Abend mit ihm eine
                                    Verabredung!<span class="tran"><br><small>오늘도 저녁에 그와 약속이
                                            있단다!</small><br></span> Wir wollen
                                    zusammen in die Oper gehen.<span class="tran"><br><small>우린 함께 오페라에
                                            갈거야.</small><br></span> Ich schreibe
                                    dir bald wieder.<span class="tran"><br><small>곧 다시
                                            쓸게.</small><br></span> Muss schon
                                    wieder los!<span class="tran"><br><small>벌써
                                            다시 나가 봐야 해!</small><br></span>
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

    <?php require "footer.php"; ?>
    <script src="./dev/js/popper.min.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $("#0_p").hide();
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["verpasst", "gefahren", "ausgepackt", "besichtigt", "gemacht",
            "gekauft", "gesetzt", "getrunken", "gegessen", "kennengelernt"
        ];
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
            } /* 문제 재생 */
            var nagehts = new Howl({
                src: ["./dev/sounds/Reihe 10/r10 D2.mp3"],
                sprite: {
                    "0": [0, 181176]
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

                    /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */ /* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
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
                    };


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
                    });
                    /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                    $("#chk").on("click", function () {
                        var na = "";
                        var ri = 0;
                        var qst = $(".q").length;
                        $(".q").each(function () {
                            if (na != "") {
                                na += ", ";
                            }
                            if ($(this).val() == "") {
                                na += $(this).attr("id").substr(4, 1);
                            }
                        });
                        if ($(this).attr("id") == "done") {} else if (na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass("cr");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass("wa");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"d-block ra t-6\"" +
                                            "style=\"max-width: 150px; min-width: 100px; max-width: 100px;\">" +
                                            an[i] + "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r =
                                            "<div class=\"rad-inline-block t-6\"" +
                                            "style=\"max-width: 150px; min-width: 100px; max-width: 100px;\">";
                                        for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                            if (fd < (an[i].length - 1)) {
                                                r = r + " / ";
                                            }
                                            r = r + an[i][fd];
                                        }
                                        r = r + "</div>";
                                        if ($("span.sen").length > 0) {
                                            $("#qst-" + (i + 1)).closest("span.sen").after(
                                                r);
                                        } else {
                                            $("#qst-" + (i + 1)).after(r);
                                        }
                                    }
                                }
                                if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                                    ri++;
                                }
                            }

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st +
                                "</h4>");
                            $(this).prop("disabled", true);
                            $(".tran").show();
                            $(this).attr("id", "done");
                        } else {
                            alert("모든 문제를 풀어주세요!");
                        };
                    });
                    var pan = new Array();
                    pan = [];
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass("bg-success text-white font-weight-bold");
                        $(pann).prop("disabled", true);
                    }
                    $("#0").show();
                    $(".alert").hide();
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
