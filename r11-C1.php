<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">Wahl</div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="1">
                    Ich bin der Meinung, dass ...
                    <span class="tran"><br /><small>저는 ...라는 의견입니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="2">
                    Das finde ich gut, weil ...
                    <span class="tran"><br /><small>...하기 때문에 저는 좋다고 생각합니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="3">
                    Ich bin dagegen, dass ...
                    <span class="tran"><br /><small>저는 ...하는데 반대입니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="4">
                    Ich bin dafür, dass ...
                    <span class="tran"><br /><small>저는 ...하는데 찬성입니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="5">
                    Ich denke, dass ...
                    <span class="tran"><br /><small>저는  ...라고 생각합니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="6">
                    Ich finde es gut.
                    <span class="tran"><br /><small>저는 그것을 좋다고 생각합니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="7">
                    Das macht Sinn, weil/denn …
                    <span class="tran"><br /><small>...하기 때문에 그것은 의미가 있습니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="8">
                    Ich glaube, das macht keinen Sinn.
                    <span class="tran"><br /><small>그것은 무의미한 일이라고 생각합니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="9">
                    Ich finde es falsch.
                    <span class="tran"><br /><small>저는 그것을 잘못이라고 생각합니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="10">
                    Ich bin für ...
                    <span class="tran"><br /><small>저는  ...에 찬성입니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="11">
                    Ich bin gegen ...
                    <span class="tran"><br /><small>저는 ...에 반대입니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="12">
                    Ich glaube, dass ...
                    <span class="tran"><br /><small>저는 ...라고 믿습니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="13">
                    Das ist sinnlos, weil ...
                    <span class="tran"><br /><small>...하기 때문에 그것은 의미가 없습니다.</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="14">
                    Meiner Meinung nach ...
                    <span class="tran"><br /><small>제 의견으로는 ...</small></span>
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
                <h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">번호</button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                </h3>
            </div>
        </div>
        <!-- 리스트  시작 -->
        <div class="row" id="lsts">
            <div style="min-height: 240px;"
                 class="rounded-top border bg-danger border-white itm-lst col-4 p-2"
                 id="lst-1">
                <h2 class="btn btn-xl bg-white ttl w-100">Meinung äußern&nbsp;<small>&nbsp;<strong>의견 표현</strong></small></h2>&nbsp;
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-success border-white itm-lst col-4 p-2"
                 id="lst-2">
                <h2 class="btn btn-xl bg-white ttl w-100">dafür sein&nbsp;<small>&nbsp;<strong>찬성</strong></small></h2>&nbsp;
            </div>
            <div style="min-height: 240px;"
                 class="rounded-top border bg-primary border-white itm-lst col-4 p-2"
                 id="lst-3">
                <h2 class="btn btn-xl bg-white ttl w-100">dagegen sein&nbsp;<small><strong>반대</strong></small></h2>&nbsp;
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
    <!-- 리스트 끝 -->
</section>
<div id="marg" class="border-danger"></div>
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
            src: ["./dev/sounds/Reihe 11/r11 C1.mp3"],
            sprite: {
                "0": [611, 79330],
                "1": [12017, 2099],
                "2": [16823, 2304],
                "3": [22816, 2037],
                "4": [28099, 2107],
                "5": [33354, 2081],
                "6": [37807, 1902],
                "7": [42467, 4133],
                "8": [49019, 2456],
                "9": [54201, 2025],
                "10": [58963, 1669],
                "11": [63236, 1616],
                "12": [67606, 1965],
                "13": [72612, 2447],
                "14": [78222, 1698]
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
                        $(".tran").show();
                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        $(".itm-lst").each(function () {
                            if ($(this).find(".itm")) {
                                $(this).find(".itm")
                                    .addClass(
                                        "text-success fw-bold"
                                    );
                            }
                        });
                        var qa = $(".itm").length; /* 전체 문항 수 */
                        var qr = $(".text-success")
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
                        $(".btn-lg").text().appendTo($(this)
                            .closest("td"));
                        $(".btn-lg").remove();
                    } else {
                        $("div.itm-lst").each(function (idx) {
                            if (!$(this).find("button")
                                .length) {
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

                var pan = new Array(),
                    pann;
                pan = [1];
                for (var p = 0; p < pan.length; p++) {
                    pann = "#" + pan[p];
                    for (var i = 0; i < $(".itm-lst").length; i++) {
                        if ($(pann).hasClass("ans" + (i + 1))) {
                            $(pann).insertAfter("#lst-" + (i + 1) + ">h2");
                        }
                    }
                }
                $(".itm-lst>button").addClass("w-100 btn-light");

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
