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
                <button type="button" class="mt-1 mx-1 btn ans1 btn-md t-3 btn-outline-dark itm so" id="1">
                    könntest
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-md t-3 btn-outline-dark itm so" id="2">
                    würde
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-md t-3 btn-outline-dark itm so" id="3">
                    wollte
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-md t-3 btn-outline-dark itm so" id="4">
                    wären
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-md t-3 btn-outline-dark itm so" id="5">
                    möchte
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-md t-3 btn-outline-dark itm so" id="6">
                    hätten
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-md t-3 btn-outline-dark itm so" id="7">
                    sollten
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-md t-3 btn-outline-dark itm so" id="8">
                    bräuchte
                </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center align-middle">
                <h2> Ergänzen Sie die Lücken.<br/>
                    <small> 빈칸을 채우세요. </small>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-striped text-center">
                    <thead>
                    <tr>
                        <th scope="col" width="20%">&nbsp;</th>
                        <th scope="col" width="20%">&nbsp;</th>
                        <th scope="col" width="20%">&nbsp;</th>
                        <th scope="col" width="20%">Indikativ Präteritum</th>
                        <th scope="col" width="20%">Konjunktiv Ⅱ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="align-middle">1</th>
                        <td class="align-middle">
                            haben
                        </td>
                        <td class="align-middle">
                            du
                        </td>
                        <td class="align-middle">
                            hattest
                        </td>
                        <td class="align-middle">
                            hättest
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">2</th>
                        <td class="align-middle">
                            können
                        </td>
                        <td class="align-middle">
                            sie
                        </td>
                        <td class="align-middle">
                            konnte
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">3</th>
                        <td class="align-middle">
                            müssen
                        </td>
                        <td class="align-middle">
                            ihr
                        </td>
                        <td class="align-middle">
                            musstet
                        </td>
                        <td class="align-middle">
                            müsstet
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">4</th>
                        <td class="align-middle">
                            sollen
                        </td>
                        <td class="align-middle">
                            Sie
                        </td>
                        <td class="align-middle">
                            sollten
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">5</th>
                        <td class="align-middle">
                            werden
                        </td>
                        <td class="align-middle">
                            er
                        </td>
                        <td class="align-middle">
                            wurde
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">6</th>
                        <td class="align-middle">
                            dürfen
                        </td>
                        <td class="align-middle">
                            wir
                        </td>
                        <td class="align-middle">
                            durften
                        </td>
                        <td class="align-middle">
                            dürften
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">7</th>
                        <td class="align-middle">
                            wollen
                        </td>
                        <td class="align-middle">
                            ich
                        </td>
                        <td class="align-middle">
                            wollte
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">8</th>
                        <td class="align-middle">
                            sein
                        </td>
                        <td class="align-middle">
                            sie(pl.)
                        </td>
                        <td class="align-middle">
                            waren
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">9</th>
                        <td class="align-middle">
                            mögen
                        </td>
                        <td class="align-middle">
                            es
                        </td>
                        <td class="align-middle">
                            mochte
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">10</th>
                        <td class="align-middle">
                            gehen
                        </td>
                        <td class="align-middle">
                            ich
                        </td>
                        <td class="align-middle">
                            ging
                        </td>
                        <td class="align-middle">
                            ginge
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">11</th>
                        <td class="align-middle">
                            lassen
                        </td>
                        <td class="align-middle">
                            er
                        </td>
                        <td class="align-middle">
                            ließ
                        </td>
                        <td class="align-middle">
                            ließe
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">12</th>
                        <td class="align-middle">
                            nehmen
                        </td>
                        <td class="align-middle">
                            es
                        </td>
                        <td class="align-middle">
                            nahm
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">13</th>
                        <td class="align-middle">
                            brauchen
                        </td>
                        <td class="align-middle">
                            du
                        </td>
                        <td class="align-middle">
                            brauchte
                        </td>
                        <td class="align-middle">
                            <div class="itm-lst 1itm w-100" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">14</th>
                        <td class="align-middle">
                            haben
                        </td>
                        <td class="align-middle">
                            wir
                        </td>
                        <td class="align-middle">
                            hatten
                        </td>
                        <td class="align-middle">
                            hätten
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">15</th>
                        <td class="align-middle">
                            kommen
                        </td>
                        <td class="align-middle">
                            ich
                        </td>
                        <td class="align-middle">
                            kam
                        </td>
                        <td class="align-middle">
                            käme
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
        /* 음성 준비되면 HV 버튼 나타내기 */
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
        pan = [];
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
</script>
</body>

</html>
