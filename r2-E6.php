<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm"
                        id="1">
                        Und du, wer bist du?
                        <span class="tran"><br>&nbsp;<small>그리고 넌, 네 이름은
                                뭐야?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm"
                        id="2">
                        Wo wohnen Sie?
                        <span class="tran"><br>&nbsp;<small>당신은 어디에서
                                사나요?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm"
                        id="3">
                        Und dir? Geht es dir gut?
                        <span class="tran"><br>&nbsp;<small>너는 어때? 잘
                                지내니?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm"
                        id="4">
                        Wie heißen Sie?
                        <span class="tran"><br>&nbsp;<small>당신의 이름은
                                뭔가요?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm"
                        id="5">
                        Wohnst du in Berlin?
                        <span class="tran"><br>&nbsp;<small>너는 어디
                                살아?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm"
                        id="6">
                        Wie geht es dir?
                        <span class="tran"><br>&nbsp;<small>너는? 너는 잘
                                지내?</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm"
                        id="7">
                        Sprechen Sie Deutsch?
                        <span class="tran"><br>&nbsp;<small>독일어를 말할 수
                                있나요?</small></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>[ <small>문제에 맞는 답안을 알맞게 짝지우세요.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless table-light">
                        <tbody>
                            <tr>
                                <th class="bg-light" scope="row" width="10%">1
                                </th>
                                <td width="40%">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Mein Name ist Mina Kim.
                                    <span class="tran"><br>&nbsp;<small>저의 이름은
                                            미나 김이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">2</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ich wohne in Seoul.
                                    <span class="tran"><br>&nbsp;<small>저는 서울에서
                                            살아요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">3</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, ich spreche etwas Deutsch.
                                    <span class="tran"><br>&nbsp;<small>네, 저는
                                            독일어를 조금 해요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">4</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ich bin Sabine.
                                    <span class="tran"><br>&nbsp;<small>나는
                                            자비네야.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">5</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Gut, danke!
                                    <span class="tran"><br>&nbsp;<small>잘지내,
                                            고마워!</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">6</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, Danke.
                                    <span class="tran"><br>&nbsp;<small>응,
                                            고마워.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-light" scope="row">7</th>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                                <td>
                                    Ja, ich wohne in Berlin.
                                    <span class="tran"><br>&nbsp;<small>응, 난
                                            베를린에 살아.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/taptogrouph.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $("#chk").hide();
        $(document).ready(function () {
            <?php require "wahl.php"; ?>
            /* 정답확인 */
            $("#chk").on("click", function () {
                var na = "";
                if ($("#itms").find("button").length < 1) {
                    $(".tran").show();
                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                    $(this).removeClass("btn-light ");
                    $(".itm-lst>button").addClass(
                        "text-success font-weight-bold text-left");
                    var qa = $(".itm-lst").length; /* 전체 문항 수 */
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
                    alert(na + "번 문제를 풀어주세요!");
                }
            });
            var pan = new Array();
            /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
            pan = [1];
            var il = $("#itms>.itm").length;
            for (var p = 0; p < pan.length; p++) {
                var pani = "#lst-" + pan[p];
                $(".itm").each(function () {
                    if ($(this).hasClass("ans" + pan[p])) {
                        $("#" + $(this).attr("id")).appendTo($(
                            "#lst-" + pan[p]));
                        $("#" + $(this).attr("id")).addClass(
                            "btn-block text-left");
                        /* $("#"+ $(this).attr("id")).addClass("border-0"); */
                        $("#lst-" + pan[p] + ">h2").remove();
                        /* $("#lst-"+ pan[p]).closest("tr").find(".tran").show(); */
                    }
                })
            }
        })

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
