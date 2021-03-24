<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2"

         id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="1">
                    A. <small>Erholungsreise</small>
                    <span class="tran"><small><br/>휴양여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="2">
                    B. <small>Flitterwochen</small>
                    <span class="tran"><small><br/>신혼여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="3">
                    C. <small>Badeurlaub</small>
                    <span class="tran"><small><br/>바닷가여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="4">
                    D. <small>Familienurlaub</small>
                    <span class="tran"><small><br/>가족휴가여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="5">
                    E. <small>Campingurlaub</small>
                    <span class="tran"><small><br/>캠핑휴가여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="6">
                    F. <small>Kreuzfahrt</small>
                    <span class="tran"><small><br/>크루즈여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="7">
                    G. <small>Städtereise</small>
                    <span class="tran"><small><br/>도시여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="8">
                    H. <small>Sprachreise</small>
                    <span class="tran"><small><br/>어학연수</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="9">
                    I. <small>Studienreise</small>
                    <span class="tran"><small><br/>답사, 연구여행</small></span>
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="10">
                    J. <small>Rucksackreise / Backpacking</small>
                    <span class="tran"><small><br/>배낭여행</small></span>
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
                <h2>Ordnen Sie zu.<br />[ <small>알맞게 연결하세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
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
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">1</span>
                        <button type="button" id="11"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Sophie hat ihre
                        Doktorarbeit abgegeben und anschließend auch ihr Rigorosum erfolgreich
                        abgeschlossen. Sie will daher in diesem Sommer nichts tun und sich nur ausruhen.
                        <span
                            class="tran"><br><small>소피는 박사논문을 제출하고 이어서 구술시험까지 성공적으로 마쳤다. 그녀는 이번 여름에 아무 것도 하지 않고 휴식을 하려고 한다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-1">
                            <h2
                                class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">2</span>
                        <button type="button" id="12"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Martin und Eva
                        haben
                        gestern in der Kirche geheiratet und werden eine Woche in der Karibik ihre
                        Flitterwochen verbringen.
                        <span
                            class="tran"><br><small>마틴과 에바는 어제 교회에서 결혼을 했고, 일주일 동안 카리브해에서 시간을 보내고자 한다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-2">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">3</span>
                        <button type="button" id="13"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Herr Schneider
                        will mit
                        seiner Frau und den Kindern, seinen Eltern und auch der Familie seiner
                        Schwester zusammen in Urlaub fahren.
                        <span
                            class="tran"><br><small>슈나이더씨는 그의 아내와 자녀들, 부모님과 여자 형제의 가족들까지 함께 휴가를 가려고 한다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-3">
                            <h2
                                class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">4</span>
                        <button type="button" id="14"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Heike möchte in
                        diesen
                        Sommerferien mit dem Fahrrad nach Leipzig, Berlin und Wittenberg fahren und
                        dort viele Sehenswürdigkeiten, wie die Nikoleikirche, die Thomaskirche, die Berliner Mauer
                        und auch
                        die Schlosskirche, besichtigen.
                        <span
                            class="tran"><br><small>하이케는 이번 여름방학 때 자전거를 타고 라이프치히, 베를린과 비텐베르크로 가서 거기에서 니콜라이 교회, 토마스 교회, 베를린 장벽, 성채교회 등 많은 명소들을 구경하고 싶어한다</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-4">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">5</span>
                        <button type="button" id="15"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Familie Müller
                        hat
                        neulich einen Wohnwagen gekauft und hat vor, in der Natur viel Zeit zu
                        verbringen.
                        <span
                            class="tran"><br><small>뮬러씨의 가족은 최근에 캠핑카를 구매해서 자연 속에서 시간을 보낼 계획을 가지고 있다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-5">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">6</span>
                        <button type="button" id="16"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Mina möchte gern
                        in
                        Dresden an der TUDIAS am Deutschkurs und auch am Freizeitprogramm teilnehmen.
                        Somit möchte sie nicht nur ihre Deutschkenntnisse verbessern, sondern auch die Leute und die
                        deutsche Kultur näher kennenlernen.
                        <span
                            class="tran"><br><small>미나는 드레스덴의 투디아스에서 어학코스와 여가 프로그램에 참석하길 원한다. 그래서 독일어 실력을 향상시킬뿐 아니라, 사람들과 독일 문화도 좀더 잘 알고 싶어 한다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-6">
                            <h2
                                class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">7</span>
                        <button type="button" id="17"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Tim möchte in
                        seinem
                        Urlaub gern ans Meer fahren. Dort möchte er schwimmen, surfen und auch am Strand mit seinen
                        Freunden
                        feiern.
                        <span
                            class="tran"><br><small>팀은 그의 휴가 때 바닷가에 가고 싶다. 그곳에서 수영, 서핑을 하고 친구들과 해변에서 파티도 하고 싶다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-7">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">8</span>
                        <button type="button" id="18"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Herr und Frau
                        Kim feiern
                        dieses Jahr ihre silberne Hochzeit. Aus diesem Anlass wollen sie mit dem Schiff durch Europa
                        reisen.

                        <span
                            class="tran"><br><small>김씨 부부는 올해 은혼식을 갖는다. 이번 기회에 그들은 배를 타고 유럽을 여행하려고 한다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-8">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">9</span>
                        <button type="button" id="19"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Minsu studiert
                        Archäologie und interessiert sich für die Geschichte und Gegenwart Griechenlands und
                        ganz besonders für das aufregende antike Erbe. Daher hat er eine 15-tägige ausführliche
                        Reise durch
                        Griechenland gebucht, deren Reiseroute von Athen, über Epidauros, Sparta, Olympia
                        Thessaloniki und
                        wieder nach Athen führt.
                        <span
                            class="tran"><br><small>민수는 고고학을 공부해서 그리스의 역사와 현재에 관심이 있고, 특히 생동감 있는 고대 유산에 큰 관심이 있다. 그래서 15일 간 그리스를 통과하는 여행을 예약했다. 아테네에서 출발하여 에피다우로스, 스파르타, 올림피아 테살로니키를 거쳐 다시 아테네로 돌아오는 여정이다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-9">
                            <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 my-4 lh250">
                <div class="row">
                    <div class="col-9 text-justify">
                        <span class="rounded bg-black text-white text-center p-1 px-2 m-1">10</span>
                        <button type="button" id="20"
                                class="so btn btn-sm btn-outline-dark">▶
                        </button>&nbsp;Ich will diesen
                        Sommer
                        drei Wochen allein durch Europa reisen und habe dafür online wichtige Tipps
                        eingeholt.
                        Basierend darauf habe ich vor, zuerst eine grobe Reiseroute festzulegen und dementsprechend
                        rechtzeitig günstige Flugtickets sowie den Eurail-Pass und Unterkünfte online zu buchen.
                        Vielleicht
                        lerne ich auf der Reise auch nette Backpacker kennen. Darauf freue ich mich schon sehr.
                        <span
                            class="tran"><br><small>나는 이번 여름 3주 동안 혼자 유럽을 여행할 것이다. 이를 위해 온라인에서 중요한 팁들을 수집했다. 이러한 정보를 바탕으로, 우선 큰 여행경로을 결정하고 이에 맞는 저렴한 비행기 티켓, 유레일패스와 숙소를 온라인으로 예약할 예정이다. 나는 여행 동안에 친절한 배낭여행객들을 사귈 수도 있을 것이다. 이것에 대해 매우 기쁘다.</small></span>
                    </div>
                    <div class="col-3">
                        <div class="itm-lst 1itm" id="lst-10">
                            <h2
                                class="btn btn-warning btn-lg ttl d-inline-block t_add_6"
                                style="max-width: 50px; min-width: 50px;">
                                ▼ </h2>
                        </div>
                    </div>
                </div>
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
<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $("#chk").hide();

    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array(),
        sen = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
        sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
            .html();
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
            });
        } /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 12/r12 A2.mp3"],
            sprite: {
                "0": [573, 185271],
                "11": [11303, 14663],
                "12": [27183, 11015],
                "13": [39285, 10287],
                "14": [51433, 19170],
                "15": [71820, 9513],
                "16": [83194, 18311],
                "17": [102723, 12088],
                "18": [116672, 11015],
                "19": [128904, 27325],
                "20": [156587, 29042]
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

                /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn").addClass(
                                    "text-success fw-bold");
                            }
                        });
                        var qa = $(".itm-lst").length; /* 전체 문항 수 */
                        var qr = $(".text-success").length; /* 맞춘 항목 수 */
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
                        $(".btn-lg").text().appendTo($(this).closest("td"));
                        $(".btn-lg").remove();
                    } else {
                        $("div.itm-lst").each(function (idx) {
                            if (!$(this).find("button").length) {
                                if (na != "") {
                                    na += ", ";
                                }
                                na += (idx + 1);
                            }
                        });
                        alert("모든 문제를 풀어주세요!");
                    }
                });
                $("#0").show();
                $("#ready").hide();

                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [1,4,10];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("w-100");
                            $("#lst-" + pan[p] + ">h2").remove();
                        }
                    })
                }
                $("#0").show();
                $("#ready").hide();
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
                    $("#" + last).closest("div").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
