<?php require_once("heading.php"); ?>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Sprechen Sie in der Klasse. <small>수업시간에
                            이야기해보세요.</small>
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
                </div>
            </div>
            <div class="row my-2">
                <span class="wd mr-1">gebacken</span>
                <span class="wd mr-1">gefahren</span>
                <span class="wd mr-1">gekommen</span>
                <span class="wd mr-1">gemacht</span>
                <span class="wd mr-1">geredet</span>
                <span class="wd mr-1">geblieben</span>
                <span class="wd mr-1">gegangen</span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group lh350">
                        Ich heiße Silvia. <span class="tran">&nbsp;<small>나는 실비아라고
                                해.</small>&nbsp;</span>Gestern hatte ich meinen 20. Geburtstag. <span
                            class="tran">&nbsp;<small>나는 어제 20살 생일을 맞이했어.</small>&nbsp;</span>Es war einfach ein
                        wunderschönes Erlebnis. <span class="tran">&nbsp;<small>파티는 진짜 너무 멋진 경험이었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Gleich am Morgen hat meine Freundin mich <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="anrufen"
                            id="qst-1"> und mir zum Geburtstag <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="gratuliert"
                            id="qst-2"> . <span class="tran">&nbsp;<small>아침이
                                되자마자 내 친구가 나에게 전화하여 나에게 생일 축하를 해주었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Zum FrühstücZum Frühstück hat meine Mutter
                        mir ein leckeres Frühstück mit gekochtem Ei, und Speck und Toast <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="machen"
                            id="qst-3"> . <span class="tran">&nbsp;<small>아침식사에 엄마가
                                나에게 삶은 계란, 베이컨, 토스트 빵으로 맛난 아침식사를 해주었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Sie hat sogar einen selbstgemachten Kuchen <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="backen"
                            id="qst-4"> - <span class="tran">&nbsp;<small>더욱이 엄마가 손수
                                케익을 만들어 주셨어.</small>&nbsp;</span>Erdbeerkuchen mit Sahne, einfach köstlich! <span
                            class="tran">&nbsp;<small>생크림 딸기 케익, 진짜 맛있었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Am Nachmittag haben mich
                        meine Freunde abgeholt und für mich eine Überraschungsparty bei Alex organisiert. <span
                            class="tran">&nbsp;<small>오후에는 친구들이 나를 데리려 왔고 알렛스 집에서 나를 위한 깜짝 파티를
                                준비했어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Es waren alle da. <span class="tran">&nbsp;<small>친구들이 모두 다
                                왔어.</small>&nbsp;</span>Selbst Carlos, unser Austausstudent aus Spanien, war auch mit
                        dabei. <span class="tran">&nbsp;<small>스페인에서 온 교환학생인 카를로스도 왔어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Und meine
                        alte Schulfreundin Julia ist aus Frankfurt <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="kommen"
                            id="qst-5"> . <span class="tran">&nbsp;<small>나의 오랜
                                학교친구인 율리아도 프랑크프르트에서 왔어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Sie ist mit der Bahn zu mir <input
                            type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="fahren"
                            id="qst-6"> , um mir zum Geburtstag zu gratulieren.
                        <span class="tran">&nbsp;<small>율리아는 나에게 생일축하인사를 하려고 기차를 타고 왔어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Wir haben
                        <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="grillen"
                            id="qst-7"> und dabei Musik <input type="text"
                            class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="hören"
                            id="qst-8"> . <span class="tran">&nbsp;<small>리는 그릴도 하고
                                음악도 들었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Bis zum Abend hin haben wir <input type="text"
                        class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                        border-dark mx-1" aria-label="." placeholder="reden"
                        id="qst-9"> , <input type="text"
                        class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                        border-dark mx-1" aria-label="." placeholder="tanzen"
                        id="qst-10"> und viel <input type="text"
                        class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                        border-dark mx-1" aria-label="." placeholder="lachen"
                        id="qst-11"> . <span class="tran">&nbsp;<small>저녁까지 이야기도
                            나누었고, 춤도 추고 많이 웃었어.</small>&nbsp;</span>
                        </div>
                        <div class="input-group lh350">
                            Als Geburtstagsgeschenk habe ich von allen
                        Konzertkarten für das nächste Xavier Naidoo Konzert für die erste Reihe bekommen. <span
                            class="tran">&nbsp;<small>모든 친구들에게서 첫 번째 줄에서 관람할 수 있는 자비어 나이두 콘서트 표를 생일선물로
                                받았어.</small>&nbsp;</span>Einfach genial! <span class="tran">&nbsp;<small>진짜 기발한
                                    선물이었어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Sie sind spät gegen 11Uhr nach Hause <input type="text"
                        class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                        border-dark mx-1" aria-label="." placeholder="gehen"
                        id="qst-12"> , nur Leoni ist bei mir <input type="text"
                        class="form-control q pl-0 rounded-0 border-bottom-only mx-1 px-2 py-1 text-center
                            border-dark mx-1" aria-label="." placeholder="bleiben"
                            id="qst-13"> und hat übernachtet. <span
                            class="tran">&nbsp;<small>친구들은 (저녁) 11시경에 집으로 돌아갔고 레오니만 우리집에 머물면서 잠을
                                잤어.</small>&nbsp;</span>
                    </div>
                    <div class="input-group lh350">
                        Diesen Tag vergesse ich ganz bestimmt nicht so schnell. <span
                            class="tran">&nbsp;<small>나는 이날을 그렇게 빨리 잊지 않을 것 같아.</small>&nbsp;</span>Wie war denn dein
                        letzter Geburtstag? <span class="tran">&nbsp;<small>너의 최근 생일파티는 어땠어?</small>&nbsp;</span> Erzähl
                        doch mal!<span class="tran">&nbsp;<small>이야기 좀 해주렴!</small>&nbsp;</span> </div>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
    </section>

    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $(".tran").hide();
        $(".ant").hide();
        var an = new Array();
        var an = ["angerufen", "gratuliert", "gemacht", "gebacken", "gekommen",
            "gefahren", "gegrillt", "gehört", "geredet", "getanzt", "gelacht",
            "gegangen", "geblieben"
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
                src: ["./dev/sounds/Reihe 9/r9 D4.mp3"],
                sprite: {
                    "0": [1439, 109097]
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
                    /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */

                    /* 값 확인해보자, io값이 참이면 전체 검사 */
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
                                            "<div class=\"d-block ra t-6\">" + an[i] +
                                            "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r = "<div class=\"d-block ra t-6\">";
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
                            };

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

                    var pan = new Array();
                    pan = [1, 2, 7, 8, 10, 11];
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
