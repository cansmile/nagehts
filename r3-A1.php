<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once"ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Hören Sie und sprechen Sie nach.<br>
                        <small>듣고 따라 하세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼 또는 <button type="button"
                                    class="btn btn-sm btn-outline-secondary disabled">▶</button>
                                버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                        <h3>[ <small>그림을 누르면 그림에 대한 음성이 재생됩니다.</small> ]</h3>
                        <h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <table class="table table-borderless lh250">
                        <thead>
                            <tr>
                                <th scope="col" width="100"><button
                                        type="button" id="1"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <th scope="col" colspan="2"
                                    class=" text-white bg-danger">
                                    <h4>Das ist meine Familie.<span
                                            class="tran"><br><small>나의
                                                가족입니다.</small></span></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3"><img
                                        src="./dev/images/Reihe 3/Reihe3-A-A1-1.png"
                                        alt="Das ist meine Familie."
                                        usemap="#image-map1">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <table class="table table-borderless lh250">
                        <thead>
                            <tr>
                                <th scope="col" width="100"><button
                                        type="button" id="2"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <th scope="col" colspan="2"
                                    class=" text-white bg-primary">
                                    <h4>Wer ist das?<span
                                            class="tran"><br><small>이 사람은
                                                누구인가요?</small></span></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Das bin ich.<span
                                        class="tran"><br><small>저에요.</small></span>
                                </td>
                                <td rowspan="3" width="240"><img
                                        src="./dev/images/Reihe 3/Reihe3-A-A1-2.png"
                                        id="21" class="so"
                                        style="width: auto; max-height: 140px;"
                                        alt="Das ist meine Familie."></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Das ist <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-1">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Frau.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            아내에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Wir sind verheiratet.<span
                                        class="tran"><br><small>우리는
                                            결혼했어요.</small></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <table class="table table-borderless lh250">
                        <thead>
                            <tr>
                                <th scope="col" width="100"><button
                                        type="button" id="6"
                                        class="so btn btn-outline-purple">▶</button>
                                </th>
                                <th scope="col" colspan="2"
                                    class=" text-white bg-purple">
                                    <h4>Wer ist das?<span
                                            class="tran"><br><small>이 사람은
                                                누구인가요?</small></span></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-purple">▶</button>
                                </th>
                                <td><span class="sen">Das ist <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-2">
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                meine
                                            </div>
                                        </div>Sohn.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            아들이에요.</small></span>
                                </td>
                                <td rowspan="4" width="240"><img
                                        src="./dev/images/Reihe 3/Reihe3-A-A1-3.png"
                                        style="width: auto; max-height: 140px;"
                                        id="22" class="so"
                                        alt="Das ist meine Familie.">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-purple">▶</button>
                                </th>
                                <td><span class="sen">Das ist <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-3">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Tochter.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            딸이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-purple">▶</button>
                                </th>
                                <td><span class="sen">Das sind <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-4">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Kinder.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            아이들이에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-purple">▶</button>
                                </th>
                                <td><span class="sen">Mein Sohn ist 6 und <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-5">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Tochter ist 10.<span
                                            class="ans"></span>
                                    </span><span class="tran"><br><small>제 아들은
                                            6살이고, 제 딸은 10살이에요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <table class="table table-borderless lh250">
                        <thead>
                            <tr>
                                <th scope="col" width="100"><button
                                        type="button" id="11"
                                        class="so btn btn-outline-info">▶</button>
                                </th>
                                <th scope="col" colspan="2"
                                    class=" text-white bg-info">
                                    <h4>Wer ist das?<span
                                            class="tran"><br><small>이 사람은
                                                누구인가요?</small></span></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-info">▶</button>
                                </th>
                                <td><span class="sen">Das ist <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-6">
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                meine
                                            </div>
                                        </div>Vater.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            아버지에요.</small></span>
                                </td>
                                <td rowspan="3" width="240"><img
                                        src="./dev/images/Reihe 3/Reihe3-A-A1-4.png"
                                        style="width: auto; max-height: 140px;"
                                        id="23" class="so"
                                        alt="Das ist meine Familie."></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="13"
                                        class="so btn btn-outline-info">▶</button>
                                </th>
                                <td><span class="sen">Das ist <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-7">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Mutter.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            어머니에요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="14"
                                        class="so btn btn-outline-info">▶</button>
                                </th>
                                <td><span class="sen">Das sind <span
                                            class="nu"></span>
                                        <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                            data-toggle="buttons" role="group" id="qst-8">
                                            <div class="btn btn-light pop x px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                mein
                                            </div>
                                            <div class="btn btn-light pop o px-1"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                meine
                                            </div>
                                        </div>Eltern.<span class="ans"></span>
                                    </span><span class="tran"><br><small>제
                                            부모님이에요.</small></span>
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
    <div id="last" class="d-none"></div>
    <map name="image-map1">
        <area id="15" class="so" alt="Frau" title="Frau"
            coords="6,250,17,242,29,199,37,190,38,119,32,104,39,93,56,55,79,50,105,47,125,62,133,86,141,92,137,113,146,131,138,138,131,174,147,183,153,196,171,206,171,217,146,228,135,244,128,254"
            shape="poly">
        <area id="16" class="so" alt="Vater" title="Vater"
            coords="131,174,141,136,158,121,184,111,163,93,160,85,152,78,146,58,154,47,160,27,170,18,195,18,212,15,229,29,234,45,242,49,238,68,229,94,222,107,222,112,245,127,251,139,255,162,264,169,257,179,264,187,259,196,264,199,263,205,198,205,207,199,218,182,229,167,223,161,219,136,205,119,184,116,158,124,145,144,147,162,141,170,145,177"
            shape="poly">
        <area id="17" class="so" alt="Mutter" title="Mutter"
            coords="247,63,236,72,239,82,254,90,268,105,288,112,315,114,333,123,339,146,347,153,342,168,347,176,356,171,347,136,344,125,328,114,315,103,325,90,337,98,345,90,342,78,336,70,333,59,329,38,314,19,288,14,269,19,250,36"
            shape="poly">
        <area id="18" class="so" alt="Son" title="Sohn"
            coords="128,255,147,227,172,217,170,205,155,197,151,179,144,173,145,165,147,140,161,124,185,114,207,121,221,140,219,160,226,162,222,176,215,181,210,195,197,205,197,216,218,222,232,236,241,254,172,258,148,257"
            shape="poly">
        <area id="19" class="so" alt="Tochter" title="Tochter"
            coords="261,255,352,254,347,229,321,210,320,197,332,189,343,187,347,192,354,186,350,172,348,148,332,121,310,112,283,112,269,123,261,142,255,150,255,161,266,173,261,178,267,189,262,195,267,205,273,203,281,197,291,205,302,208,300,217,281,222,269,235"
            shape="poly">
        <area id="20" class="so" alt="ich" title="ich"
            coords="350,62,346,54,366,36,393,36,402,40,402,28,417,46,424,36,424,52,434,58,432,82,437,87,436,101,426,107,429,117,426,112,424,128,413,144,402,149,406,160,432,172,451,188,462,218,464,254,440,253,352,250,346,223,327,212,331,186,344,182,346,191,357,177,357,166,385,161,380,149,366,144,357,134,347,112,339,101,347,87"
            shape="poly">
    </map>
    <script src="./dev/js/popper.min.js"></script>
    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
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
                    if (!$("#chk").hasClass("btn-lg")) {
                        $(this).closest("tr").find(".tran").show();
                    }
                });
            }
            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 3/r3 A1.mp3"],
                sprite: {
                    "0": [699, 66081],
                    "1": [13071, 2420],
                    "2": [16876, 11284],
                    "3": [19151, 1615],
                    "4": [22286, 1920],
                    "5": [26045, 2091],
                    "6": [31612, 18329],
                    "7": [34743, 1928],
                    "8": [38361, 1982],
                    "9": [42024, 2172],
                    "10": [45940, 4091],
                    "11": [53777, 12820],
                    "12": [57188, 1934],
                    "13": [60751, 2015],
                    "14": [64447, 2141],
                    "15": [22286, 1920],
                    "16": [57188, 1934],
                    "17": [60751, 2015],
                    "18": [34743, 1928],
                    "19": [38361, 1982],
                    "20": [19151, 1615],
                    "21": [13071, 2420],
                    "22": [42024, 2172],
                    "23": [64447, 2141]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings()
                            .hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass(
                                "btn-warning");
                            $(this).parent()
                                .children()
                                .removeClass(
                                    "btn-light");
                        };
                        /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(
                                ".an")
                            .length / $(
                                ".q").length
                            ) * 100);
                        $(".progress>.bar").attr(
                            "width", perc + "%;"
                            );
                    });
                    /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop")
                                .popover(
                                    'hide');
                        }, 500);
                    });
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($(".an").length < $(
                                ".q").length) {
                            var na = "";
                            $(".q").each(
                        function () {
                                if (!$(this)
                                    .find(
                                        "div"
                                        )
                                    .hasClass(
                                        "an"
                                        )) {
                                    if (na !=
                                        ""
                                        ) {
                                        na +=
                                            ",";
                                    }
                                    na += $(
                                            this)
                                        .attr(
                                            "id"
                                            )
                                        .substr(
                                            -
                                            1
                                            );
                                };
                            });
                            alert("모든 문제를 풀어주세요.");
                            /* alert(na +"번 문제를 풀어주세요."); */
                        } else {
                            $(".pop").each(
                                function () {
                                    $(this)
                                        .removeClass(
                                            "btn-info"
                                            );
                                    if ($(this)
                                        .hasClass(
                                            "o"
                                            ) &&
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .removeClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .addClass(
                                                "btn-success"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-success fw-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-<?php echo($color); ?>"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .html(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .closest(
                                                        ".sen"
                                                        )
                                                    .find(
                                                        ".o"
                                                        )
                                                    .text()
                                                    )
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-danger fw-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .addClass(
                                                "rounded bg-warning text-dark fw-bold text-center m-2 p-1 px-2"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };
                                    $(this)
                                        .remove();
                                }
                            );
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide();
                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light");
                            var qa = $(".q")
                            .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".bg-success")
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
                                    "쓰읍~ 다시 해 보실까요!";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요";
                                var cl = "danger";
                            }
                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중" +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st + "</h4>");
                        };
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

                        if (last == 2 || last == 6 ||
                            last == 11) {
                            $("#" + last).closest("table")
                                .find(".tran").show();
                        } else {
                            $("#" + last).closest("tr")
                                .find(".tran").show();
                        }
                        pa[last] = $("#" + last).html();
                    }
                }
            });
        });

    </script>
</body>

</html>
