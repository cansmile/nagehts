<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
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
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
                        <table class="table table-borderless text-center">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="1"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Hallo, ich <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-1">
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    heiße
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    heißt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    heißen
                                                </div>
                                            </div> Abena.<span
                                                class="ans"></span><span
                                                class="tran"><br><small>안녕하세요,
                                                    저는
                                                    아비나에요.</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="2"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Wie <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-2">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    heiße
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    heißt
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    heißen
                                                </div>
                                            </div> Sie?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>당신은 이름이
                                                    뭐에요?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="3"
                                            class="so btn btn-outline-info">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Ich <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-3">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    sind
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    bin
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    ist
                                                </div>
                                            </div> Muammar.<span
                                                class="ans"></span><span
                                                class="tran"><br><small>저는
                                                    무아마에요.</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="4"
                                            class="so btn btn-outline-info">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Woher <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-4">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    komme
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    kommt
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    kommen
                                                </div>
                                            </div> Sie?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>당신은 어디에서
                                                    왔나요?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="5"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Ich <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-5">
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    komme
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    kommt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    kommen
                                                </div>
                                            </div> aus Ghana. Und Sie?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>저는 가나
                                                    출신이에요.
                                                    당신은요?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="6"
                                            class="so btn btn-outline-info">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Ich <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-6">
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    komme
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    kommt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    kommen
                                                </div>
                                            </div> aus Libyen.<span
                                                class="ans"></span><span
                                                class="tran"><br><small>저는
                                                    리비아출신이에요.</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="7"
                                            class="so btn btn-outline-info">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Wo <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-7">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liege
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    liegt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liegen
                                                </div>
                                            </div> Ghana?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>가나는 어디에
                                                    있죠?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="8"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Ghana <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-8">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liege
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    liegt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liegen
                                                </div>
                                            </div> in Westafrika.<span
                                                class="ans"></span><span
                                                class="tran"><br><small>가나는
                                                    서아프리카에
                                                    있어요.</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="9"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Wo <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-9">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liege
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    liegt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liegen
                                                </div>
                                            </div> Libyen?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>리비아는 어디에
                                                    있나요?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="10"
                                            class="so btn btn-outline-danger">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen"><span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-10">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    Liege
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    Liegt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    Liegen
                                                </div>
                                            </div> Libyen in Westafrika?<span
                                                class="ans"></span><span
                                                class="tran"><br><small>리비아는
                                                    서아프리카에
                                                    있나요?</small></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button type="button" id="11"
                                            class="so btn btn-outline-info">▶</button>
                                    </th>
                                    <td class="text-start">
                                        <span class="sen">Nein, Libyen <span
                                                class="nu"></span>
                                            <div class="btn-group q"
                                                data-toggle="buttons" role="group"
                                                id="qst-11">
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liege
                                                </div>
                                                <div class="btn btn-light pop o"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답!">
                                                    liegt
                                                </div>
                                                <div class="btn btn-light pop x"
                                                    data-toggle="popover"
                                                    data-container="body"
                                                    data-placement="top"
                                                    data-content="정답이 아니에요.">
                                                    liegen
                                                </div>
                                            </div> in Nordafrika.<span
                                                class="ans"></span><span
                                                class="tran"><br><small>아뇨, 리비아는
                                                    북아프라카에 있어요.</small></span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        <table
                            class="table table-borderless text-center text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col"">vier
                                    Himmelsrichtungen<br><small>네 방위</small>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style=" height: 65px;">der
                                        Norden<br><small>북</small></td>
                                </tr>
                                <tr>
                                    <td style="height: 65px;">der
                                        Westen<br><small>서</small></td>
                                </tr>
                                <tr>
                                    <td style="height: 65px;">der
                                        Osten<br><small>동</small></td>
                                </tr>
                                <tr>
                                    <td style="height: 65px;">der
                                        Süden<br><small>남</small></td>
                                </tr>
                                <tr>
                                    <td style="height: 65px;">die
                                        Mitte<br><small>중앙</small></td>
                                </tr>
                                <tr>
                                    <td style="height: 65px;"><img
                                            src="./dev/images/Reihe 2/Reihe-2-D2-1.png"
                                            alt="Map"
                                            style="max-width: 100%; height: auto;">
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
                <div class="row">
                    <div class="col">
                        <table
                            class="table table-borderless text-center table-sm">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="h3">Norden</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-end h3">
                                        Westen</td>
                                    <td class="align-middle"><img
                                            src="./dev/images/Reihe 2/Reihe-2-D2-2.png"
                                            alt="Himmelsrichtungen"
                                            style="max-height: 320px; width: auto">
                                    </td>
                                    <td class="align-middle text-start h3">
                                        Osten</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="h3">Süden</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <div id="last" class="d-none"></div>
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
                    "./dev/sounds/Reihe 2/r2 D2.mp3"
                ],
                sprite: {
                    "0": [1138, 50607],
                    "1": [8245, 2950],
                    "2": [11601, 1606],
                    "3": [17165, 1623],
                    "4": [19015, 1557],
                    "5": [23891, 3840],
                    "6": [30292, 1834],
                    "7": [32252, 1601],
                    "8": [37470, 2244],
                    "9": [40130, 1719],
                    "10": [42001, 2580],
                    "11": [48196, 3573]
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
                                                ", ";
                                        }
                                        na += $(
                                                this
                                            )
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
                            /* alert(na + "번 문제를 풀어주세요."); */
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
                                                        this
                                                    )
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
                                                        this
                                                    )
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
                                                "rounded bg-warning text-dark fw-bold m-2 p-1 px-2"
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
                                                        this
                                                    )
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
                                });
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide();



                            $(this).removeClass(
                                "btn-light ");

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            var qa = $(".q")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                "span.bg-success"
                            ).length; /* 맞춘 항목 수 */
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
                        };
                    });

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
