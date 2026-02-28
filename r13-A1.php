<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2 nq-wahl" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="1">
                    Kraftwerk
                    <span class="tran"><br><small>발전소</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="2">
                    Abgase
                    <span class="tran"><br><small>배기가스</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
                    Abfall
                    <span class="tran"><br><small>쓰레기</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="4">
                    Feinstaub
                    <span class="tran"><br><small>미세먼지</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="5">
                    Zigarettenkippen
                    <span class="tran"><br><small>담배꽁초</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="6">
                    Wasserverschmutzung
                    <span class="tran"><br><small>수질오염</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="7">
                    COVID-19
                    <span class="tran"><br><small>코로나19</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm" id="8">
                    gelber Sand
                    <span class="tran"><br><small>황사</small></span>
                </button>
                <button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm" id="9">
                    Tierquälerei
                    <span class="tran"><br><small>동물학대</small></span>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="nq-exercise" data-type="dragtogroup" data-reihe="13">
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h3>[ <small>Welches Umweltproblem ist das? Ordnen Sie den Bildern die Begriffe zu.
                    <span class="tran"><br /><small>어떠한 환경문제인가요? 개념과 그림을 연결하세요.</small></span>
                </small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-1.svg"
                                 alt="Umweltproblem 1"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-2.svg"
                                 alt="Umweltproblem 2"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-3.svg"
                                 alt="Umweltproblem 3"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-4.svg"
                                 alt="Umweltproblem 4"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-5.svg"
                                 alt="Umweltproblem 5"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-6.svg"
                                 alt="Umweltproblem 6"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-7.svg"
                                 alt="Umweltproblem 7"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-7">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-8.svg"
                                 alt="Umweltproblem 8"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-8">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td height="200" class="align-middle">
                            <img src="./dev/images/Reihe 13/Reihe-13-A1-9.svg"
                                 alt="Umweltproblem 9"
                                 style="max-width: 100%; height: auto; max-height: 180px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm" id="lst-9">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 정답확인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인</div>
        </div>
        <!-- 정답확인 버튼 끝 -->
    </div>
</section>

<div id="marg"></div>
<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/dragtogroup.js"></script>
<script>
    $(".tran").hide();
    $("#chk").hide();

    $(document).ready(function () {
        /* 정답확인 */
        $("#chk").on("click", function () {
            if ($("#itms").find("button").length < 1) {
                $(".tran").show();
                $(this).removeClass("btn-light");
                $(".itm-lst").each(function () {
                    if ($(this).find("button.btn")) {
                        $(this).find("button.btn").addClass("text-success fw-bold");
                    }
                });
                var qa = $(".itm-lst").length;
                var qr = $(".text-success").length;
                var pe = (qr / qa) * 100;
                var tcl = "white";
                if (pe > 99) {
                    var st = "원어민이세요?";
                    var cl = "lime";
                    tcl = "dark";
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
                $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
            } else {
                alert("모든 문제를 풀어주세요!");
            }
        });

        <?php require "wahl.php"; ?>
    });
</script>
</body>
</html>
