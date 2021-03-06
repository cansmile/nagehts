<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
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
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="1">
                        modern<span class="tran"><br><small>현대식의</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="2">
                        günstig<span class="tran"><br><small>저렴한</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="3">
                        praktisch<span
                            class="tran"><br><small>실용적인</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="4">
                        interessant<span
                            class="tran"><br><small>흥미로운</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="5">
                        bequem<span class="tran"><br><small>편안한</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="6">
                        schön<span class="tran"><br><small>아름다운</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="7">
                        gut<span class="tran"><br><small>좋은</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm"
                        id="8">
                        groß<span class="tran"><br><small>큰</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="9">
                        hässlich<span class="tran"><br><small>못생긴</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="10">
                        unpraktisch<span
                            class="tran"><br><small>비실용적인</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="11">
                        klein<span class="tran"><br><small>작은</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="12">
                        unbequem<span class="tran"><br><small>불편한</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="13">
                        teuer<span class="tran"><br><small>비싼</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="14">
                        altmodisch<span
                            class="tran"><br><small>구식의</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="15">
                        langweilig<span
                            class="tran"><br><small>지루한</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm"
                        id="16">
                        schlecht<span class="tran"><br><small>나쁜</small></span>
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
                    <h2> Ordnen Sie zu. </h2>
                    <p> 알맞은 단어끼리 연결해보세요. <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button></p>
                </div>
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h3>[ <small>붉은 색 단어는 왼편에 푸른 색 단어는 오른편에 넣으세요.<br>왼쪽 또는 오른쪽에
                            단어가 있을 때 짝이 맞지 않은 단어는 들어가지 않습니다.</small> ]</h3>
                </div>
            </div>
            <div class="row" id="lsts">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <th scope="row" id="th-1">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-2">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-3">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-4">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-5">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-6">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-7">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-8">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-1">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <th scope="row" id="th-9">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-10">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-11">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-12">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-13">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-14">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-15">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" id="th-16">
                                    <div class="align-middle itm-lst 1itm py-0"
                                        style="min-height: 50px;" id="lst-2">
                                        <h1
                                            class="btn btn-warning my-0 cmp btn-xl ttl w-100">
                                            ▼ </h1>
                                    </div>
                                </th>
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
    <div id="last" class="d-none"></div>
    <?php require "footer.php"; ?>
    <script src="./dev/js/taptocompareh.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        var cp = new Array();
        var cp = [14, 13, 10, 15, 12, 9, 16, 11, 6, 3, 8, 5, 2, 1, 4, 7];
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
                src: [
                    "./dev/sounds/Reihe 4/r4 D1.mp3"],
                sprite: {
                    "0": [461, 77492],
                    "1": [8966, 1730],
                    "2": [12660, 1774],
                    "3": [16127, 2058],
                    "4": [20044, 1926],
                    "5": [23785, 1899],
                    "6": [27864, 1365],
                    "7": [32572, 1327],
                    "8": [37040, 1390],
                    "9": [40839, 1734],
                    "10": [45423, 2042],
                    "11": [50378, 1896],
                    "12": [55304, 1997],
                    "13": [59880, 1513],
                    "14": [64884, 1772],
                    "15": [70010, 2231],
                    "16": [73456, 1755]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find(
                                "button").length <
                            1) {
                            $(".tran").show();
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");
                            $(".itm-lst").each(
                                function () {
                                    if ($(this)
                                        .find(
                                            ".so"
                                            )) {
                                        $(this)
                                            .find(
                                                ".so"
                                                )
                                            .addClass(
                                                "text-success"
                                                );
                                    }
                                }
                            );
                            var qa = $(".itm-lst")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".text-success")
                                .length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) *
                            100; /* 정답 비율 */
                            var tcl =
                            "white"; /* 기본 문자색 */
                            /* 분류 기준은 100%, 80%, 60%, 40% */
                            if (pe > 99) {
                                var st = "원어민이세요?";
                                var cl = "lime";
                                var tcl = "dark";
                            } else if (pe > 74) {
                                var st =
                                    "어! 좀 하시는데요~^^";
                                var cl = "success";
                            } else if (pe > 49) {
                                var st =
                                    "쓰읍~ 다시 해 보실까요?";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요~";
                                var cl = "danger";
                            }
                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중 " +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st + "</h4>");
                            $(".btn-lg").text()
                                .appendTo($(this)
                                    .closest("td"));
                            $(".btn-lg").remove();
                        } else {
                            $("div.itm-lst").each(
                                function (idx) {
                                    if (!$(this)
                                        .find(
                                            "button"
                                            )
                                        .length
                                        ) {
                                        if (na !=
                                            ""
                                            ) {
                                            na +=
                                                ", ";
                                        }
                                        na += (idx +
                                            1
                                            );
                                    }
                                }
                            );
                            alert("모든 문제를 풀어주세요!");
                            /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    $("#0").show();
                    $("#ready").hide();
                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");
                        if (($("div#last").text() ==
                                "" || t.text() ==
                                "❚❚") && !t
                            .hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;
                            last = ti;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        } else if (last == ti &&
                            nagehts.playing($(
                                    "div#last")
                                .text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        }
                    });
                    $("#0").show();
                },
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);
                    if (last == 0) {
                        if (sen[last] == 2) {
                            $(".tran").show();
                            $(".so").each(function () {
                                pa[last] = $("#" +
                                    last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(
                            ".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
</body>

</html>
