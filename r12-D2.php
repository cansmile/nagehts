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
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md t-3 btn-outline-dark itm so" id="1">
                    Die Bordkarte wurde mir ausgehändigt.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md t-3 btn-outline-dark itm so" id="2">
                    Die Fluggäste wurden aufgerufen.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md t-3 btn-outline-dark itm so" id="3">
                    Dort wurde ich eingecheckt und mein Gepäck wurde aufgegeben.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-md t-3 btn-outline-dark itm so" id="4">
                    Ich wurde gefragt , ob ich etwas zu verzollen hätte.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md t-3 btn-outline-dark itm so" id="5">
                    Vor Beginn des Abflugs wurden von den Flugbegleiterinnen einige Hinweise zum richtigen Anschnallen
                    gegeben.
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md t-3 btn-outline-dark itm so" id="6">
                    Während des Flugs wurden uns einige Snacks und Getränke angeboten.
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
                        버튼 또는
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">번호
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">
                            Aktivsätze
                            <span class="tran"><br><small>능동문</small></span>
                        </th>
                        <th scope="col">
                            Passivsätze
                            <span class="tran"><br><small>수동문</small></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="7" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Dort hat man mich eingecheckt und ich habe mein Gepäck aufgegeben.
                                    <span class="tran"><br><small>어떤 사람이 나를 체크인하고 나의 짐을 부쳐주었다.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>거기에서 나는 체크인되고 나의 짐은 부쳐졌다</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="8" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Man hat mir die Bordkarte ausgehändigt.
                                    <span class="tran"><br><small>어떤 사람이 나의 탑승권을 넘겨주었다.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>탑승권이 나에게 넘겨졌다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="9" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Man hat die Fluggäste aufgerufen.
                                    <span class="tran"><br><small>어떤 사람이 탑승객들을 호명했다.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>탑승객들이 호명되었다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Während des Flugs hat man uns einige Snacks und Getränke angeboten.
                                    <span class="tran"><br><small>어떤사람이 비행 동안 우리에게 약간의 스낵과 음료가 제공하였다.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>비행 동안 우리에게 약간의 스낵과 음료가 제공되었다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Vor Beginn des Abflugs haben die Flugbegleiterinnen einige Hinweise zum richtigen
                                    Anschnallen gegeben.
                                    <span
                                        class="tran"><br><small>비행 출발에 앞서 승무원들이 올바른 안전벨트 기능에 대한 주의사항을 주었다. gegeben.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>비행 출발에 앞서 승무원들에 의해 올바른 안전벨트 기능에 대한 주의사항이 주어졌다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-1">
                                    <button type="button" id="12" class="so btn btn-outline-dark btn-sm me-1 px-2">▶
                                    </button>
                                </div>
                                <div class="col-sm-9 col-md-10 col-lg-11">
                                    Man hat mich gefragt , ob ich etwas zu verzollen hätte.
                                    <span class="tran"><br><small>어떤 사람이 관세 신고할 것이 있는지 나에게 물었다.</small></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" style="min-width: 300px;" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                            <span class="tran"><br><small>관세 신고할 것이 있는지 나에게 물어졌다.</small></span>
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
        <div class="row">
            <div class="col-12 lh250"><span class="tipp">TIPP</span>독일어에서 위의 문장들에서와 같이 누가 하느냐 보다 행해지는 사건이나 일이 중요할 때
                일반적으로 능동태의 문장의 주어는 man (어떤 사람이)으로 표현되고, 이런 경우 수동태의 문장이 더
                자연스럽다.
            </div>
        </div>
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
            src: ["./dev/sounds/Reihe 12/r12 D2.mp3"],
            sprite: {
                "0": [169, 60852],
                "1": [74159, 3297],
                "2": [74130, 3282],
                "3": [66516, 4113],
                "4": [110136, 3505],
                "5": [98187, 7433],
                "6": [88604, 5114],
                "7": [9500, 7236],
                "8": [17842, 5989],
                "9": [25340, 5328],
                "10": [32035, 7697],
                "11": [41541, 9663],
                "12": [52519, 6542]
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
                });
                <?php require "wahl.php"; ?>
                var pan = new Array();
                pan = [1];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("w-100 btn-light");
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
