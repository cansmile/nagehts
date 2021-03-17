<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md t-3 btn-outline-dark itm" id="1">
                    dass
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md t-3 btn-outline-dark itm" id="3">
                    weil
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 ans6 btn-md t-3 btn-outline-dark itm" id="4">
                    Wenn
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md t-3 btn-outline-dark itm" id="5">
                    obwohl
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 ans4 btn-md t-3 btn-outline-dark itm" id="6">
                    Wenn
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md t-3 btn-outline-dark itm" id="7">
                    als
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
                <h2> Ergänzen Sie die Lücken.<br/>
                    <small> 빈칸을 채우세요. </small>
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <tbody>
                    <tr>
                        <th scope="row" width="50">&nbsp;</th>
                        <td width="50">
                            <button type="button" id="9" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Lieber Tim,
                            <span class="tran"><br><small>팀에게,</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1)</th>
                        <td>
                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Es tut mir leid,
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            ich dir schon lange nicht mehr geschrieben habe.
                            <span class="tran"><br><small>1)	오랫동안 너에게 편지를 쓰지 못해서 미안해.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2)</th>
                        <td>
                            <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Ich hatte sehr wenig Zeit, mich bei dir zu melden,
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            im Juni die Abiturprüfungen waren.
                            <span class="tran"><br><small>6월에 아비투어 시험이 있어서 너에게 연락할 시간이 없었어.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3)</th>
                        <td>
                            <button type="button" id="12" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            ich vorher sehr viel gelernt habe, waren meine Noten nicht so gut.
                            <span class="tran"><br><small>내가 그전에 공부를 열심히 했음에도, 내 성적은 그렇게 좋지 못했어.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4)</th>
                        <td>
                            <button type="button" id="13" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            man in Deutschland Medizin studieren will, muss man einen richtig guten Abiabschluss haben.
                            <span class="tran"><br><small>독일에서 의학을 공부하려면, 아주 좋은 성적이 있어야 하거든.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5)</th>
                        <td>
                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            ich jünger war, wollte ich unbedingt Medizin studieren.
                            <span class="tran"><br><small>내가 좀 더 어렸을 때, 나는 무조건 의학을 공부하려고 했어.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6)</th>
                        <td>
                            <button type="button" id="15" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Aber eigentlich interessiere ich mich auch für andere Berufe.
                            <span class="tran"><br><small>하지만 다른 직업에도 흥미가 있어.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7)</th>
                        <td>
                            <button type="button" id="16" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            ich eine Stelle in der Bank bekomme, dann studiere ich nicht.
                            <span class="tran"><br><small>은행에서 자리를 얻으면, 나는 대학에 가지 않을거야.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8)</th>
                        <td>
                            <button type="button" id="17" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Du hast geschrieben,
                            <div class="itm-lst 1itm mx-2 d-inline-block" style="min-width: 100px;" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            du schon seit zwei Jahren studierst.
                            <span class="tran"><br><small>너는 이미 2년동안 대학에서 공부했다고 썼잖아.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9)</th>
                        <td>
                            <button type="button" id="18" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Ich würde mich freuen, dass
                            du mir mehr darüber erzählst.
                            <span class="tran"><br><small>네가 나에게 그것에 대해 이야기해주면 기쁠 것 같아.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <button type="button" id="19" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Herzliche Grüße
                            <span class="tran"><br><small>인사를 전하며</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <button type="button" id="20" class="so btn btn-outline-dark btn-sm me-1 px-2">▶</button>
                        </td>
                        <td>
                            Max
                            <span class="tran"><br><small>막스</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인</div>
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
        if($(this).attr("id") > 0) {
            $(this).hide();
        }
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
            src: ["./dev/sounds/Reihe 12/r12 E12.mp3"],
            sprite: {
                "0": [368, 133622],
                "9": [136963, 1773],
                "10": [140124, 6953],
                "11": [149948, 9409],
                "12": [161987, 8904],
                "13": [173835, 9982],
                "14": [186631, 7737],
                "15": [196448, 7518],
                "16": [206004, 8422],
                "17": [218380, 6537],
                "18": [227664, 7007],
                "19": [237246, 1611],
                "20": [239082, 1018]
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
                }); /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".btn")) {
                                $(this).find(".btn").addClass("text-success");
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
                    $(".so").show();
                });
                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [1, 3];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $(this).appendTo($("#lst-" + pan[p]));
                            $(this).addClass("w-100 btn-light");
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
                    $("#" + last).closest("tr").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
