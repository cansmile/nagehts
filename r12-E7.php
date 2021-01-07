<?php require_once( "heading.php" ); ?>
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
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>

                </h2>
                <h3>[ <small>문제를 모두 풀고 확인하세요.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th rowspan="4" scope="row" width="150">
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button><br />
                            1) Auf dem Bahnhof
                            <span class="tran"><br><small>기차역에서</small></span>
                        </td>
                        <td>Auf dem Bahnhof Wegen einer Bauarbeit ist die Waldstraße gesperrt.
                            <span class="tran"><br><small>기차역에서   공사로 발트길이 패쇄되었습니다.</small></span></td>
                        <td class="align-middle" width="200">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option1"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option2"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Herr Kim, kommen Sie bitte zur Information.
                            <span class="tran"><br><small>김선생님, 안내실로 와주세요</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option3"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option4"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Die Regionalbahn aus Leipzig hat 20 Minuten Verspätung
                            <span class="tran"><br><small>라이프치히에서 오는 국철이 20분 연착됩니다</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option5"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option6"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Der ICE nach Berlin fährt in wenigen Minuten auf Gleis 10 ab
                            <span class="tran"><br><small>베를린으로 가는 ICE가 10번 선로에서 곧 출발합니다.</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option7"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option8"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th rowspan="5" scope="row" width="150">
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button><br />
                            2) Am Flughafen
                            <span class="tran"><br><small>공항에서</small></span>
                        </td>
                        <td>Am Flughafen Frau Kaiser, bitte kommen Sie zur Information in Halle C
                            <span class="tran"><br><small>공항에서    카이저씨, C홀에 있는 안내실로 와주시기 바랍니다.</small></span></td>
                        <td class="align-middle" width="200">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option9"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option10"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Machen Sie bitte den Motor aus.
                            <span class="tran"><br><small>엔진을 끄세요</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option11"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option12"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Der Flug aus Paris hat eine Stunde Verspätung.
                            <span class="tran"><br><small>파리발 비행기가 한시간 연착입니다</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option13"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option14"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Letzter Aufruf gebucht auf Flug 707 nach London.
                            <span class="tran"><br><small>런던행 707비행기 탑승자에게 마지막 탑승방송입니다</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option15"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option16"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Der Flug 404 aus San Francisco landet in wenigen Minuten.
                            <span class="tran"><br><small>샌프란시스코발 404 비행기 수분내에 착륙합니다.</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option17"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option18"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th rowspan="5" scope="row" width="150">
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-2">▶</button><br />
                            3) Im Fernbus
                            <span class="tran"><br><small>고속버스에서</small></span>
                        </td>
                        <td>Im Fernbus Liebe Fahrgäste, wir fahren gleich ab.
                            <span class="tran"><br><small>고속버스에서  버스탑승자여러분, 저희는 곧 출발합니다.</small></span></td>
                        <td class="align-middle" width="200">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option19"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option20"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Bitte schnallen Sie sich an.
                            <span class="tran"><br><small>안전밸트를 매세요</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option21"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option22"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>- In wenigen Minuten kommen wir am Zielort an. Wir wünschen Ihnen eine angenehme Reise.
                            <span class="tran"><br><small>수분내에 저희들은 목적지에 도착합니다. 여러분들에게 편안한 여행이 되길 바랍니다.</small></span>
                        </td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-12">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option23"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option24"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>- Wir machen jetzt eine kleine Pause und treffen uns wieder hier vor dem Bus.
                            <span class="tran"><br><small>우리들은 잠시 휴식시간을 가지고 이곳 버스앞에서 다시  만나요.</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-13">
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option25"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option26"><label
                                        for="option2">Falsch</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>– Liebe Fluggäste, hier spricht Ihr Kapitän Martin Fischer.
                            <span class="tran"><br><small>비행기 탑승자여러분, 여러분의 기장 마틴피셔입니다.</small></span></td>
                        <td class="align-middle">
                            <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-14">
                                <div class="btn btn-light pop x" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답이 아니에요.">
                                    <input autocomplete="off" type="radio" name="options" id="option27"><label
                                        for="option1">Richtig</label>
                                </div>
                                <div class="btn btn-light pop o" data-toggle="popover" data-container="body"
                                     data-placement="top" data-content="정답!">
                                    <input autocomplete="off" type="radio" name="options" id="option28"><label
                                        for="option2">Falsch</label>
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

<script src="./dev/js/popper.min.js"></script>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
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
            });
        }

        /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 12/r12 E7.mp3"],
            sprite: {
                "0": [968, 107738],
                "1": [12592, 24583],
                "2": [39579, 36345],
                "3": [78809, 29769]
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
                        $(this).parent().children().removeClass(
                            "btn-light");
                    }
                    ;
                    /* 문제 풀이 정도 업데이트 */
                    var perc = Math.round(($(".an").length / $(".q").length) *
                        100);
                    $(".progress>.bar").attr("width", perc + "%;");
                });

                /* 팝업 내용 사라지기 */
                $(".pop").popover().click(function () {
                    setTimeout(function () {
                            $(".pop").popover('hide');
                        },
                        500);
                });

                /* 정답확인 */
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
                                }
                                ;
                            });
                            alert("모든 문제를 풀어주세요.");
                        } else {
                            $(".tran").show();
                            $(this).attr("id", "done");
                            $(".pop").each(function () {
                                $(this).removeClass("btn-info");
                                if ($(this).hasClass("o") && $(this).hasClass(
                                    "an")) {
                                    $(this).removeClass("btn-warning");
                                    $(this).addClass("btn-success");
                                } else if ($(this).hasClass("o")) {
                                    $(this).addClass("btn-primary");
                                } else if ($(this).hasClass("an")) {
                                    $(this).addClass("btn-warning");
                                } else {
                                    $(this).addClass("btn-light");
                                }
                                ;
                            });

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
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
                            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" +
                                st + "</h4>");
                        }
                        ;
                    }
                });
                var pan = new Array();
                pan = [1];
                var il = $(".q").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#qst-" + pan[p];
                    $("#qst-" + pan[p] + ">div.o").addClass("an");
                    $("#qst-" + pan[p] + ">div.o").addClass("btn-warning");
                    $("#qst-" + pan[p] + ">div.o").removeClass("btn-light");
                    $("#qst-" + pan[p] + ">div.o").closest("tr").find("td>.tran").show();
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
                    $("#" + last).closest("table").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
