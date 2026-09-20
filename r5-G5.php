<?php require_once("heading.php"); ?>
<?php require_once "ready.php"; ?>

<section class="bg-white rounded p-2 nq-wahl" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
            <div class="col-12 py-2 lh250">
                <span class="wd_inline">einen Kaffee</span>
                <span class="wd_inline">Pommes frites</span>
                <span class="wd_inline">eine Cola</span>
                <span class="wd_inline">eine Sprite</span>
                <span class="wd_inline">einen Hamburger</span>
                <span class="wd_inline">ein Eis</span>
                <span class="wd_inline">einen Kuchen</span>
            </div>
        </div>
    </div>
</section>

<section class="nq-exercise" data-type="other" data-reihe="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Hören Sie und ergänzen Sie. <br>
                    <small>듣고 채우세요.</small>
                    <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small><button type="button"
                            class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                        버튼을 눌러 듣기를 2번 완료하면 번역이 나옵니다.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mb-3">
                <img src="./dev/images/Reihe 5/Reihe-5-G5-1.png"
                     alt="Wer bestellt was?"
                     style="max-height: 320px; width: auto;">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <tbody>
                    <tr>
                        <th scope="row" width="96">1. Tim</th>
                        <td>
                            <div id="ant-1"></div>
                            <div class="input-group">
                                Tim bestellt eine Sprite und
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-1">
                                .
                            </div>
                            <span class="tran"><small>팀은 스프라이트 하나와 감자튀김을 주문합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2. Fredi</th>
                        <td>
                            <div id="ant-2"></div>
                            <div class="input-group">
                                Fredi bestellt
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-2">
                                ,
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div id="ant-3"></div>
                            <div class="input-group">
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-3">
                                und
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div id="ant-4"></div>
                            <div class="input-group">
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-4">
                                .
                            </div>
                            <span class="tran"><small>프레디는 콜라 하나, 햄버거 하나, 아이스크림 하나를 주문합니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3. Anna</th>
                        <td>
                            <div id="ant-5"></div>
                            <div class="input-group">
                                Anna bestellt
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-5">
                                und
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div id="ant-6"></div>
                            <div class="input-group">
                                <input autocomplete="off" type="text"
                                       placeholder="Antwort"
                                       aria-label="Antwort"
                                       class="form-control q nq-fill-phrase text-center border-bottom-only rounded-0 ms-1 t-6"
                                       id="qst-6">
                                .
                            </div>
                            <span class="tran"><small>안나는 커피 하나와 케이크 하나를 주문합니다.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                 id="chk">
                정답확인
            </div>
        </div>
    </div>
</section>

<div id="last" class="d-none"></div>
<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<?php require_once(__DIR__ . "/oxsound.php"); ?>
<script>
    $("#0").hide();
    $(".tran").hide();

    var nagehtsAnswerDefs = {
        1: { canonical: "Pommes frites", group: "tim", allowed: ["Pommes frites"] },
        2: { canonical: "eine Cola", group: "fredi", allowed: ["eine Cola", "einen Hamburger", "ein Eis"] },
        3: { canonical: "einen Hamburger", group: "fredi", allowed: ["eine Cola", "einen Hamburger", "ein Eis"] },
        4: { canonical: "ein Eis", group: "fredi", allowed: ["eine Cola", "einen Hamburger", "ein Eis"] },
        5: { canonical: "einen Kaffee", group: "anna", allowed: ["einen Kaffee", "einen Kuchen"] },
        6: { canonical: "einen Kuchen", group: "anna", allowed: ["einen Kaffee", "einen Kuchen"] }
    };

    var nagehtsAnswerGroups = {
        tim: ["Pommes frites"],
        fredi: ["eine Cola", "einen Hamburger", "ein Eis"],
        anna: ["einen Kaffee", "einen Kuchen"]
    };

    function nqNormalizeAnswer(value) {
        return (value || "")
            .toLowerCase()
            .replace(/\s+/g, " ")
            .trim();
    }

    function nqResetField($input) {
        $input.removeClass("bg-danger bg-success text-white fw-bold wa ca rounded p-1 px-2");
        $input.siblings(".nq-g5-hint").remove();
    }

    function nqShowHint($input, answer) {
        $input.siblings(".nq-g5-hint").remove();
        $('<div class="nq-g5-hint ra mt-1">' + $("<span>").text(answer).html() + "</div>").insertAfter($input);
    }

    function nqPreviewField($input) {
        var qn = parseInt($input.attr("id").replace("qst-", ""), 10);
        var def = nagehtsAnswerDefs[qn];
        var value = nqNormalizeAnswer($input.val());
        nqResetField($input);
        if (!value) return;

        var matches = def.allowed.some(function (answer) {
            return value === nqNormalizeAnswer(answer);
        });

        if (matches) {
            $input.addClass("bg-success text-white fw-bold");
        } else {
            $input.addClass("bg-danger text-white fw-bold");
        }
    }

    function nqValidateFinal() {
        var qr = 0;
        var groupedInputs = {};

        $(".q").each(function () {
            var $input = $(this);
            var qn = parseInt($input.attr("id").replace("qst-", ""), 10);
            var def = nagehtsAnswerDefs[qn];
            if (!groupedInputs[def.group]) groupedInputs[def.group] = [];
            groupedInputs[def.group].push({ qn: qn, $input: $input, value: nqNormalizeAnswer($input.val()) });
        });

        Object.keys(groupedInputs).forEach(function (groupName) {
            var remaining = nagehtsAnswerGroups[groupName].map(nqNormalizeAnswer);

            groupedInputs[groupName].forEach(function (entry) {
                var idx = remaining.indexOf(entry.value);
                entry.isCorrect = idx !== -1;
                if (entry.isCorrect) {
                    remaining.splice(idx, 1);
                }
            });
        });

        $(".q").each(function () {
            var $input = $(this);
            var qn = parseInt($input.attr("id").replace("qst-", ""), 10);
            var def = nagehtsAnswerDefs[qn];
            var groupEntries = groupedInputs[def.group];
            var entry = groupEntries.find(function (item) { return item.qn === qn; });

            nqResetField($input);
            $input.prop("disabled", true);

            if (entry && entry.isCorrect) {
                qr += 1;
                $input.addClass("bg-success text-white fw-bold rounded p-1 px-2 ca");
            } else {
                $input.addClass("wa");
                nqShowHint($input, def.canonical);
            }
        });

        return qr;
    }

    $(document).ready(function () {
        var sen = new Array(),
            pa = new Array(),
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

        $(".q").on("input focusout", function () {
            nqPreviewField($(this));
        });

        $("#chk").on("click", function () {
            if ($(this).attr("id") === "done") return;

            var empty = $(".q").toArray().some(function (el) {
                return !$(el).val().trim();
            });

            if (empty) {
                alert("모든 문제를 풀어주세요!");
                return;
            }

            $(".tran").show();
            var qa = $(".q").length;
            var qr = nqValidateFinal();
            var pe = (qr / qa) * 100;
            var tcl = "white";
            var st;
            var cl;

            if (pe > 99) {
                st = "원어민이세요?";
                cl = "success";
                tcl = "dark";
            } else if (pe > 74) {
                st = "어! 좀 하시는데요~^^";
                cl = "success";
            } else if (pe > 49) {
                st = "쓰읍~ 다시 해 보실까요?";
                cl = "primary";
            } else {
                st = "좀 더 분발해 주세요~";
                cl = "danger";
            }

            $(this)
                .removeClass("btn-light")
                .addClass("btn-" + cl + " text-" + tcl)
                .html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>")
                .attr("id", "done");
        });

        var nagehts = new Howl({
            src: [
                "./dev/sounds/Reihe 5/r5 G5.mp3"],
            sprite: {
                "0": [206, 31519],
                "1": [8249, 1142],
                "2": [11068, 1316],
                "3": [14610, 1465],
                "4": [18964, 1233],
                "5": [23311, 1142],
                "6": [27148, 1275],
                "7": [30311, 1315]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
            },
            onload: function () {
                $("#0").show();
                $("#ready").hide();
                $(".so").on("click", function () {
                    var t = $(this);
                    var ti = t.attr("id");
                    if (($("div#last").text() === "" || t.text() === "❚❚")) {
                        $("#last").text(ti);
                        t.text("■");
                        nagehts.seek();
                        nagehts.play(ti);
                        sen[ti]++;
                        last = ti;
                    } else if (last == ti && nagehts.playing($("div#last").text())) {
                        $("#last").text("");
                        t.html(pa[ti]);
                        nagehts.pause();
                        sen[ti]--;
                    }
                });
            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                if (last == 0 && sen[last] == 2) {
                    $(".tran").show();
                    $(".so").each(function () {
                        pa[$(this).attr("id")] = $(this).html();
                    });
                }
            }
        });
    });
</script>
