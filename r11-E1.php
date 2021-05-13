<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Was kostet weniger oder mehr? Was ist billiger oder teurer?<br/>
                    <small> 무엇이 더 싸거나 비싼가요? </small><br/>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
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
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center w-50">Singular</th>
                        <th scope="col" class="text-center w-50">Plural</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-1">&nbsp;Packung
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-2">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-3">&nbsp;Ei
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-4">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-5">&nbsp;Rock
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-6">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="7" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-7">&nbsp;Lachsfilet
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="8" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-8">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="9" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-9">&nbsp;Pfeffer
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-10">
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center w-50">Singular</th>
                        <th scope="col" class="text-center w-50">Plural</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-11">&nbsp;Gurke
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="12" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-12">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="13" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-13">&nbsp;Beutel
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="14" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-14">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="15" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-15">&nbsp;Vollkornbrot
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="16" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-16">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="17" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-17">&nbsp;Tafel
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="18" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-18">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="19" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-19">&nbsp;Mantel
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row my-1">
                                <div class="col-2">
                                    <button type="button" id="20" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                                </div>
                                <div class="col input-group">
                                    die&nbsp;<input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6"
                                           style="max-width: 100px; min-width: 150px;" aria-label="."
                                           id="qst-20">
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

<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["die", "Packungen", "das", "Eier", "der", "Röcke", "das", "Lachsfilets", "der", "Pfeffer", "die", "Gurken", "der", "Beutel", "das", "Vollkornbrote", "die", "Tafeln", "der", "Mäntel"];
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
            src: ["./dev/sounds/Reihe 11/r11 E1.mp3"],
            sprite: {
                "0": [574, 75587],
                "1": [15617, 1919],
                "2": [18588, 2053],
                "3": [21765, 1603],
                "4": [24187, 1736],
                "5": [27237, 1493],
                "6": [30153, 1640],
                "7": [33393, 1812],
                "8": [36379, 2263],
                "9": [39527, 1598],
                "10": [42302, 1646],
                "11": [45508, 1736],
                "12": [48444, 1902],
                "13": [51704, 1623],
                "14": [54741, 1713],
                "15": [57793, 2068],
                "16": [61518, 2108],
                "17": [65141, 1562],
                "18": [68305, 1637],
                "19": [71797, 1523],
                "20": [74701, 1548]
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
                /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */

                /* 값 확인해보자, io값이 참이면 전체 검사 */
                function rfchk(th, io) {
                    var q, qn, a, b, fl;
                    q = th.val().length;
                    qn = (th.attr("id").substr(4)) - 1;
                    a = th.val();
                    a = a.replace(/ /gi, "");

                    di(th);
                    if (!$.isArray(an[qn])) {
                        /* 1 인 경우 */
                        if (io) {
                            b = an[qn];
                        } else {
                            b = an[qn].substr(0, q);
                        }
                        b = b.replace(/ /gi, "");
                        if (a == b) {
                            return true;
                        }
                    } else {
                        /* 2 이상인 경우 */
                        for (var fd = 0; fd < an[qn].length; fd++) {
                            if (io) {
                                b = an[qn][fd];
                            } else {
                                b = an[qn][fd].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");
                            if (a == b) {
                                return true;
                            }
                        }
                    }
                }

                $(".q").on("keyup", function () {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-success");
                    if (rfchk($(this))) {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass(
                            "text-success");
                    } else {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass(
                            "text-danger");
                    }
                    if (!$(this).val()) {
                        $(this).removeClass("bg-danger");
                        $(this).removeClass("bg-success");
                        $(this).removeClass("text-white fw-bold");
                    }
                    if ($(this).val()) {
                        $("#ant-" + $(this).attr("id").substr(4)).show();
                        $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                    } else {
                        $("#ant-" + $(this).attr("id").substr(4)).hide();
                    }
                });
                $(".q").on("focusin", function () {
                    $("#ant-" + $(this).attr("id").substr(4)).show();
                    if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                        $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                    }
                    if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                        if (rfchk($(this))) {
                            $(this).addClass("text-white fw-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white fw-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-danger");
                        }
                    }
                });
                $(".q").on("focusout", function () {
                    $("#ant-" + $(this).attr("id").substr(4)).hide();
                    if (rfchk($(this), true)) {
                        $(this).addClass("bg-success");
                        $(this).addClass("text-white");
                    } else {
                        $(this).addClass("bg-danger");
                    }
                    if ($(this).val()) {
                        if ($(this).hasClass("bg-danger")) {
                            x.play();
                        } else if ($(this).hasClass("bg-success")) {
                            o.play();
                            $(this).prop("disabled", true);
                        }
                    }
                    $(this).removeClass("bg-danger");
                    if (!$(this).attr("disabled")) {
                        $(this).removeClass("text-white fw-bold");
                        $(this).removeClass("bg-success");
                    }
                });
                /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                $("#chk").on("click", function () {
                    var na = "";
                    var ri = 0;
                    var qst = $(".q").length;
                    $(".q").each(function () {
                        if (na != "") {
                            na += ", ";
                        }
                        if ($(this).val() == "") {
                            na += $(this).attr("id").substr(4, 1);
                        }
                    });
                    if ($(this).attr("id") == "done") {
                    } else if (na == "") {
                        for (var i = 0; i < an.length; i++) {
                            var oran = $("#qst-" + (i + 1)).val();
                            if (rfchk($("#qst-" + (i + 1)), true)) {
                                $("#qst-" + (i + 1)).addClass("cr");
                                $("#qst-" + (i + 1)).removeClass("rounded-0");
                            } else {
                                $("#qst-" + (i + 1)).val(oran);
                                $("#qst-" + (i + 1)).attr("disabled", true);
                                $("#qst-" + (i + 1)).addClass("wa");
                                $("#qst-" + (i + 1)).removeClass("rounded-0");
                                if (!$.isArray(an[i])) {
                                    $("#qst-" + (i + 1)).after(
                                        "<div class=\"w-100 ra\" style=\"max-width: 100px; min-width: 150px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"w-100 ra\" style=\"max-width: 100px; min-width: 150px;\">";
                                    for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                        if (fd < (an[i].length - 1)) {
                                            r = r + " / ";
                                        }
                                        r = r + an[i][fd];
                                    }
                                    r = r + "</div>";
                                    if ($("span.sen").length > 0) {
                                        $("#qst-" + (i + 1)).closest("span.sen").after(
                                            r);
                                    } else {
                                        $("#qst-" + (i + 1)).after(r);
                                    }
                                }
                            }
                            if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                                ri++;
                            }
                        }

                        /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $("input.bg-success").length; /* 맞춘 항목 수 */
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
                        $(this).prop("disabled", true);
                        $(".tran").show();
                        $(this).attr("id", "done");
                    } else {
                        alert("모든 문제를 풀어주세요!");
                    }
                    ;
                });
                var pan = new Array();
                pan = [1, 2, 3, 4, 5, 6];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white fw-bold");
                    $(pann).prop("disabled", true);
                }

                /* 역동적 입력란 */
                $.fn.textWidth = function (text, font) {
                    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
                    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
                    return $.fn.textWidth.fakeEl.width();
                };

                function di(th) {
                    if (th.val().length < 10) {
                        var m = 1.75;
                    }
                    if (th.val().length < 5) {
                        var m = 2;
                    }
                    if (th.val().length < 3) {
                        var m = 3;
                    }
                    if (th.val().length >= 10) {
                        var m = 1.35;
                    }
                    var w = Math.ceil(th.textWidth() * m) + 'px';
                    console.log(w);

                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
                };

                $("#0").show();
                $("#ready").hide();
                $(".q").each(function () {
                    $(this).focusout();
                });
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
                    $("#" + last).closest(".row").find(".tran").show();
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
