<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
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
                <h3>[ <small>문제를 풀어야
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        가 나타납니다.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <table class="table table-borderless">
                <thead class="table-light">
                <tr>
                    <th scope="col" colspan="3" class="text-center h4">Situationen&nbsp;<small
                            class="fw-bold">상황</small></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="30">
                        <button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>1. Max möchte sich verschiedene Modelle direkt ansehen und einen neuen Motorroller kaufen.
                        <span class="tran"><br/><small>막스는 여러가지 모델을 직접 보고 새로운 스쿠터를 사고 싶어합니다.</small></span>
                    </td>
                    <td width="50">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30">
                        <button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>2. Julia sucht einen gebrauchten Computertisch.
                        <span class="tran"><br/><small>율리아는 중고 컴퓨터책상을 찾고 있습니다.</small></span>
                    </td>
                    <td width="30">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-2">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30">
                        <button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>3. Jörgs Rasierschaum ist alle. Er muss sich sofort einen neuen besorgen.
                        <span class="tran"><br/><small>외르크는 면도크림을 다 썼습니다. 그는 당장 새 거 하나를 사야 합니다.</small></span>
                    </td>
                    <td width="30">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-3">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30">
                        <button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>4. Mina hat sich einen Mantel gekauft, aber die Ärmel sind ihr zu lang. Sie will sich die Ärmel
                        kürzen lassen.
                        <span class="tran"><br/><small>미나는 외투를 샀는데 소매가 너무 깁니다. 그녀는 소매를 짧게 수선을 맡기려고 합니다.</small></span>
                    </td>
                    <td width="30">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-4">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30">
                        <button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>5. Max möchte seinem Bruder einen Anzug schenken.
                        <span class="tran"><br/><small>막스는 남동생에게 양복을 선물하고 싶어합니다.</small></span>
                    </td>
                    <td width="30">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-5">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30">
                        <button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1">▶</button>
                    </td>
                    <td>6. Lisas Wasserkocher ist kaputt. Sie möchte sich den neuesten mit Rabatt kaufen.
                        <span class="tran"><br/><small>리사의 전기주전자가 고장이 났습니다. 그녀는 최신형을 할인해서 사고 싶어합니다.</small></span>
                    </td>
                    <td width="30">
                        <div class="input-group">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border border-dark border-bottom-only text-center w-100"
                                   placeholder="Antwort" aria-label="Antwort" id="qst-6">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12 text-center h4 bg-light py-2">Anzeigen&nbsp;<small class="fw-bold">광고</small></div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="12" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    a. Sonderverkauf im Kaufhaus Neuwelt
                    <span class="tran"><br/><small>노이벨트 백화점 바겐세일</small></span><br/></div>
                Nicht verpassen!
                <span class="tran"><br/><small>놓치지 마세요!</small></span><br/>
                Nur drei Tage gültig!
                <span class="tran"><br/><small>단 3일간 유효!</small></span><br/>
                Freitag bis Sonntag, 21.-23. 08. 2020
                <span class="tran"><br/><small>2020. 08. 21-23 금요일부터 일요일까지</small></span><br/>
                Neueste Elektrogeräte zu 20% ermäßigten Preisen
                <span class="tran"><br/><small>최신 가전제품을 20% 할인된 가격으로</small></span><br/>
            </div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="7" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    b. Claudia‘s Nähstudio Änderungsschneiderei
                    <span class="tran"><br><small>클라우디아 바느질스튜디오 수선점</small></span><br/></div>
                Expressänderungen/Gardinen
                <span class="tran"><br><small>빠른 수선/커튼</small></span><br/>
                Fachkundige Beratungen & Reparaturen
                <span class="tran"><br><small>전문적인 상담과 수선</small></span><br/>
                0170/45789654
                <span class="tran"><br><small>0170/4545789654</small></span><br/>
                Universitätsstr. 23
                <span class="tran"><br><small>우니베르지테트슈트라세 23</small></span><br/>
                44801 Bochum Startseite
                <span class="tran"><br><small>44801 보훔 홈페이지</small></span><br/>
            </div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="8" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    c. Einkaufszentrum W-Markt
                    <span class="tran"><br><small>쇼핑센터 W-마트</small></span><br/></div>
                Stöbern und entdecken!
                <span class="tran"><br><small>찾으면 나옵니다!</small></span><br/>
                Hier finden Sie alles, was Sie suchen!
                <span class="tran"><br><small>당신 찾는 모든 것이 여기 있습니다!</small></span><br/>
                Die modernsten Herrenkleider wie im Kaufhaus!
                <span class="tran"><br><small>백화점 상품같은 최신 유행의 남성의류!</small></span><br/>
                Lassen Sie es sich nicht entgehen!
                <span class="tran"><br><small>놓치지 마세요!</small></span><br/>
            </div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="9" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    d. Größter Garagen-Flohmarkt in der Dürerstraße
                    <span class="tran"><br><small>뒤러슈트라쎄에서 가장 큰 창고-벼룩시장</small></span><br/></div>
                Samstag, 19. 09. 2020
                <span class="tran"><br><small>2020.09.19. 토요일</small></span><br/>
                10.30 – 17.30 Uhr
                <span class="tran"><br><small>10:30-17:30</small></span><br/>
                Ort: Dürerstr. 11, 01069 Dresden
                <span class="tran"><br><small>장소: 뒤러슈트라쎄 11, 01069 드레스덴</small></span><br/>
                Bücher/Elektro/Haushaltswaren/Klamotten/
                <span class="tran"><br><small>도서/전자제품/생활용품/의류/</small></span><br/>
                Möbel/Spielwaren
                <span class="tran"><br><small>가구/장난감</small></span><br/>
            </div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    e. Motorradhaus Fieber
                    <span class="tran"><br/><small>피버 오토바이 대리점</small></span><br/></div>
                Riesige Auswahl an Motorrädern, Elektrorollern, Kick-Scootern und weiteres Zubehör
                <span class="tran"><br/><small>오토바이 선택의 폭이 엄청 큼</small></span><br/>
                Probefahrten möglich
                <span class="tran"><br/><small>전기스쿠터, 킥스쿠터와 그 밖의 부속품</small></span><br/>
                Schneller professioneller Reparaturservice
                <span class="tran"><br/><small>시승 가능</small></span><br/>
            </div>
            <div class="col-6 p-3 border border-dark rounded-3">
                <div class="fw-bold my-2 bg-gray-light p-2 rounded-3 h5">
                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm me-2 bg-white">▶</button>
                    f. Drogerie Mähler
                    <span class="tran"><br><small>멜러 상점</small></span><br/></div>
                Vielfalt für die ganze Familie!
                <span class="tran"><br><small>전 가족을 위한 갖가지 용품</small></span><br/>
                Spezielle Qualität!
                <span class="tran"><br><small>우수한 품질!</small></span><br/>
                Reiches preiswertes Sortiment an Selbstbräuner, Sonnenpflege, Gesichtspflege, Haarpflege, Herrenpflege &
                Rasur, Körperpflege
                <span
                    class="tran"><br><small>가성비좋고 다양한 셀프태닝용품, 선탠용품, 페이스케어용품, 헤어케어용품, 남성용품과 면도용품, 바디케어용품</small></span><br/>
            </div>
        </div>
        <!-- 정답화인 버튼 시작 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                정답확인
            </div>
        </div>
        <!-- 정답확인 버튼 끝 -->
        <div class="row mb-3">
            <div class="col-12 fw-bold"><span class="tipp">TIPP</span>&nbsp;<button type="button" id="13"
                                                                                       class="so btn btn-outline-dark btn-sm me-2 bg-white">
                    ▶
                </button>&nbsp;Adjektive im Superlativ
                <small>형용사의 최상급: am + 원급+st+en / (관사) + 원급+st+어미</small>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center fw-bold table-light w-25" scope="col">Positiv&nbsp;<small>원급</small></th>
                    <th class="text-center fw-bold table-light" scope="col" colspan="2">Superativ&nbsp;<small>최상급</small></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="2">neu</td>
                    <td rowspan="2" ><strong>am</strong> neu<strong>sten</strong></td>
                    <td >den neu<strong>sten</strong> Wasserkocher</td>
                </tr>
                <tr>
                    <td>neu<strong>ste</strong> Elektogeräte</td>
                </tr>
                <tr>
                    <td>modern</td>
                    <td><strong>am</strong> modern<strong>sten</strong></td>
                    <td>die modern<strong>sten</strong> Herrenkleider</td>
                </tr>
                <tr>
                    <td>groß</td>
                    <td><strong>am</strong> größ<strong>ten</strong></td>
                    <td>größ<strong>ter</strong> Garagen-Flohmarkt</td>
                </tr>
                </tbody>
            </table>
        </div>
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
    var an = ["e", "d", "f", "b", "c", "a"];
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
            src: ["./dev/sounds/Reihe 11/r11 B4.mp3"],
            sprite: {
                "0": [381, 227318],
                "1": [10617, 8529],
                "2": [21839, 5385],
                "3": [30732, 7487],
                "4": [41222, 10498],
                "5": [54568, 5685],
                "6": [62827, 8444],
                "7": [73827, 19591],
                "8": [93694, 25292],
                "9": [119575, 15029],
                "10": [134788, 27317],
                "11": [161962, 15849],
                "12": [178052, 18534],
                "13": [196957, 30588]
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

                /* 값 확인해보자, io값이 참이면 전체 검사 */
                function rfchk(th, io) {
                    var q, qn, a, b, fl;
                    q = th.val().length;
                    qn = (th.attr("id").substr(4)) - 1;
                    a = th.val();
                    a = a.replace(/ /gi, "");
                    if (!$.isArray(an[qn])) {/* 1 인 경우 */
                        if (io) {
                            b = an[qn];
                        } else {
                            b = an[qn].substr(0, q);
                        }
                        b = b.replace(/ /gi, "");
                        if (a == b) {
                            return true;
                        }
                    } else {/* 2 이상인 경우 */
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
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-success");
                    if (rfchk($(this))) {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                    } else {
                        $(this).addClass("text-white fw-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
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
                            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                        } else {
                            $(this).addClass("text-white fw-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
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
                })
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
                                        "<div class=\"w-100 ra t-3\" style=\"max-width: 100px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"w-100 ra t-3\" style=\"max-width: 100px;\">";
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
                        ; /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $(".bg-success").length; /* 맞춘 항목 수 */
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
                        $("#0").show();
                    } else {
                        alert("모든 문제를 풀어주세요!");
                    }
                    ;
                });
                var pan = new Array();
                pan = [];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white fw-bold");
                    $(pann).prop("disabled", true);
                    di($(pann));
                }
                $("#ready").hide();

            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                $("#cnt-" + last).text(sen[last]);
                if (last == 0) {
                    if (sen[last] == 3) {
                        $(".tran").show();
                        $(".so").each(function () {
                            pa[last] = $("#" + last).html();
                        });
                    }
                } else if (sen[last] == 3) {
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