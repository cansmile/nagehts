<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div
                class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div
                class="col bg-<?php echo( $color ); ?> rounded text-center text-white font-weight-bold col-12 mt-1">
                Schema
            </div>
            <div class="col-12" id="itms">
                <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm"
                        id="7">
                    Anrede
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm"
                        id="8">
                    Schlusssatz
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm"
                        id="9">
                    Einleitungssatz
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm"
                        id="10">
                    Gruß
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm"
                        id="11">
                    Mailtext
                </button>
                <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm"
                        id="12">
                    Unterschrift
                </button>
            </div>
            <div class="col bg-<?php echo( $color ); ?> rounded text-center text-white font-weight-bold col-12 mt-1">
                Redemittel
            </div>
            <div class="col-12" id="13">
                <button type="button"
                        id="14"
                        class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark so itm">
                    Ich interessiere ich mich sehr für Ihre Anzeige
                </button>
                <button type="button"
                        id="15"
                        class="mt-1 mx-1 btn ans10 btn-sm btn-outline-dark so itm">
                    Würden Sie mir bitte auch mitteilen
                </button>
                <button type="button"
                        id="16"
                        class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark so itm">
                    Zuerst würde ich gerne wissen
                </button>
                <button type="button"
                        id="17"
                        class="mt-1 mx-1 btn ans12 btn-sm btn-outline-dark so itm">
                    Es wäre schön,
                </button>
                <button type="button"
                        id="18"
                        class="mt-1 mx-1 btn ans13 btn-sm btn-outline-dark so itm">
                    Ich danke Ihnen im Voraus
                </button>
                <button type="button"
                        id="19"
                        class="mt-1 mx-1 btn ans11 btn-sm btn-outline-dark so itm">
                    Zum Schluss
                </button>
                <button type="button"
                        id="20"
                        class="mt-1 mx-1 btn ans14 btn-sm btn-outline-dark so itm">
                    Mit freundlichen Grüßen
                </button>
                <button type="button"
                        id="21"
                        class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark so itm">
                    Sie erwähnen in Ihrer Anzeige
                </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina will in diesen Sommerferien ihre Deutschkenntnisse verbessern,
                da sie vorhat, nächstes Jahr an der TUD ein Austauschstudium zu machen. Im Internet findet sie folgende
                Anzeige.
                <span class="tran font-weight-bold">&nbsp;<small>미나는 내년에 TUD에서 교환학생연수를 떠날 계획을 가지고 있기 때문에, 여름방학 때 독일어 실력을 향상 시키고 싶어합니다. 인터넷에서 아래의 공고를 찾았습니다.</small></span>
            </div>
        </div>
        <div class="row border border-dark rounded p-2">
            <div class="col-12 h4">Sommerkurse in Dresden
                <span class="tran font-weight-bold">&nbsp;<small>드레스덴 여름어학코스</small></span></div>
            <div class="col-12">
                <ul>
                    <li>Deutschkurse auf verschiedenen Niveaus sowie Prüfungskurse
                        <span class="tran font-weight-bold">&nbsp;<small>다양한 수준의 독일어 강좌와 시험준비반</small></span></li>
                    <li>Einstufung nach einem Einstufungstest
                        <span class="tran font-weight-bold">&nbsp;<small>테스트에 따른 반 편성</small></span></li>
                    <li>kompetente Lehrer und viele Aktivitäten
                        <span class="tran font-weight-bold">&nbsp;<small>자격을 갖춘 좋은 교사 진과 다양한 활동들</small></span></li>
                    <li>Exkursionen (inkludiert in den Sprachkursgebühren) in und außerhalb von Dresden
                        <span class="tran font-weight-bold">&nbsp;<small>드레스덴 안과 바깥의 현장활동 (어학코스비용에 포함)</small></span>
                    </li>
                    <li>mit Teilnahmeausweis Zugang zu Mensen und Bibliotheken der Uni
                        <span class="tran font-weight-bold">&nbsp;<small>대학교의 학생식당, 도서관에 출입이 가능한 참가 증명서</small></span>
                    </li>
                    <li>Unterbringung im internationalem Gästehaus der Uni
                        <span class="tran font-weight-bold">&nbsp;<small>대학의 인터네셔널 게스트하우스 숙소</small></span></li>
                </ul>
            </div>
            <div class="col-12 h5">Nähere Auskünfte bei: TUDIAS (https://www.idfsk.tudias.de/)
                <span
                    class="tran font-weight-bold">&nbsp;<small>자세한 정보 : 투디아스 (https://www.idfsk.tudias.de/)</small></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina findet das Angebot sehr interessant und schreibt eine E-Mail an
                das Sprachinstitut, um sich über den Sommersprachkurs näher zu informieren.
                <span
                    class="tran"><br><small>미나는 이 공고에 매우 흥미가 있어서 여름 어학코스에 대한 상세한 정보를 얻기 위해 어학원에 이메일을 작성합니다.</small></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken.
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br>
                    <small> 빈칸을 채우세요. </small><br>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 border border-dark rounded">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th scope="row" width="20%">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            Sehr geehrte Damen und Herren,
                            <span class="tran">친애하는 선생님들,</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            ich heiße Mina Kim aus Korea und bin Theologiestudentin.
                            <span class="tran">저는 한국에서 온 김미나이고 신학생입니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-7" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            , da ich vorhabe, mich nächstes Jahr für ein einjähriges Austauschstudium an der TUD zu
                            bewerben.
                            <span
                                class="tran"><br/>당신의 광고에 매우 관심이 있습니다, 왜냐하면 내년에 TUD의 1년 교환학생을 지원할 계획을 가지고 있기 때문입니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Daher möchte ich gerne noch einige Informationen bekommen.
                            <span class="tran"><br/>그래서 약간의 정보를 얻고 싶습니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="4">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-8" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            , was in dem Einstufungstest geprüft wird und wie lange der Test dauern würde.
                            <span class="tran"><br/>우선 반편성시험에서 무엇을 보는지 그리고 시험 시간이 얼마나 소요되는지 알고 싶습니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-9" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            spezielle Prüfungskurse. Bieten Sie auch einen B1-Vorbereitungskurs an?
                            <span class="tran"><br/>당신은 공고에서 특별한 시험준비반을 언급하시는데, B1 시험준비반도 제공이 되나요?</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-10" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            , wie viele Teilnehmer eine Gruppe ausmacht und welches Freizeitprogramm angeboten wird?
                            <span class="tran"><br/>또한 한 반에 몇 명이나 참여하는지 그리고 어떤 여가 프로그램이 제공되는지 알려주실 수 있을까요?</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-11" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            möchte ich noch gerne wissen, ob ich einen Rabatt bekommen würde, wenn ich mich für zwei
                            Kurse anmelden würde?
                            <span class="tran"><br />그리고 마지막으로 제가 두 코스를(그러니까 8주) 신청할 경우 할인을 받을 수 있는지 알고 싶습니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="2">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-12" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            , wenn Sie mir genauere Angaben zu meinen Fragen geben würden.
                            <span class="tran">저의 질문에 대한 정확한 답변을 주시면 좋겠습니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-13" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            für Ihre Antwort.
                            <span class="tran">답장해 주실 것에 대해 미리 당신께 감사드립니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="itm-lst 1itm d-inline-block" id="lst-14" style="min-width: 120px!important;">
                                <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                            </div>
                            <span class="tran">인사를 전하며</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶
                                    </button>
                                </div>
                                <div class="col-9">
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2 class="btn btn-warning btn-xl ttl d-block">▼ </h2>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>
                            Mina Kim
                            <span class="tran">김미나</span>
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
            <div class="col-12"><span class="gr">GR</span><span class="tipp">TIPP</span><strong>가정법 II식 (Konjunktiv
                    II)</strong></div>
            <div class="col-12 h5 my-3">가정법 II 사용</div>
            <div class="col-12">
                가정법 II식은 동사의 서법으로 공손한 부탁, 비현실적인 조건, 소망 등을 표현할 수 있다.<br/>
                würden, hätte, wäre 혹은 다른 화법동사의 가정법 II식 형태들은 공손한 부탁을 표현하는데 자주 사용된다.
            </div>
            <div class="col-12 h5 my-3">가정법 II식 형태</div>
            <div class="col-12">
                <ul>
                    <li>가정법 현재에서는 대부분 würden+(일반)동사원형 형태를 취하고 과거의 경우 hätte, wäre+ 과거분사형 의 형태를 사용한다.</li>
                    <li>가정법 II식의 형태는 과거형에서 파생되고 직설법 과거형에서와 같이 일인칭 삼인칭 단수의 동사 형태가 동일하다. 가정법의 동사 어미는 아래와 같다.</li>
                </ul>
            </div>
            <div class="col-12">
                <table class="table table-borderless table-striged text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ich</th>
                        <th scope="col">du</th>
                        <th scope="col">er/sie/es</th>
                        <th scope="col">wir</th>
                        <th scope="col">ihr</th>
                        <th scope="col">sie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>-e</td>
                        <td>-(e)st</td>
                        <td>-e</td>
                        <td>-en</td>
                        <td>-(e)t</td>
                        <td>-en</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 h5">동사의 접속법 II식의 형태는 다음과 같다.</div>
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <th scope="row">Ich</th>
                                <td>würde fahren. (=Ich führe.)</td>
                            </tr>
                            <tr>
                                <th scope="row">Du</th>
                                <td>würdest fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Er / Sie / Es</th>
                                <td>würde fahren.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <th scope="row">Wir</th>
                                <td>würden fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ihr</th>
                                <td>würdet fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Sie</th>
                                <td>würden fahren.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">sein</th>
                        <th scope="col">haben</th>
                        <th scope="col">dürfen</th>
                        <th scope="col">können</th>
                        <th scope="col">müssen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">직설법 과거 3인칭</th>
                        <td>war</td>
                        <td>hatte</td>
                        <td>durfte</td>
                        <td>konnte</td>
                        <td>musste</td>
                    </tr>
                    <tr>
                        <th scope="row">ich</th>
                        <td>wäre</td>
                        <td>hätte</td>
                        <td>dürfte</td>
                        <td>könnte</td>
                        <td>müsste</td>
                    </tr>
                    <tr>
                        <th scope="row">du</th>
                        <td>wärst</td>
                        <td>hättest</td>
                        <td>dürftest</td>
                        <td>könntest</td>
                        <td>müsstest</td>
                    </tr>
                    <tr>
                        <th scope="row">er / sie / es</th>
                        <td>wäre</td>
                        <td>hätte</td>
                        <td>dürfte</td>
                        <td>könnte</td>
                        <td>müsste</td>
                    </tr>
                    <tr>
                        <th scope="row">wir</th>
                        <td>wären</td>
                        <td>hätten</td>
                        <td>dürften</td>
                        <td>könnten</td>
                        <td>müssten</td>
                    </tr>
                    <tr>
                        <th scope="row">sie / Sie</th>
                        <td>wären</td>
                        <td>hätten</td>
                        <td>dürften</td>
                        <td>könnten</td>
                        <td>müssten</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div id="marg"></div>
<div id="last" class="d-none"></div>
<?php require "footer.php"; ?>
<script src="./dev/js/taptogroupnomoveh.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
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
            });
        }

        /* 문제 재생 */
        var nagehts = new Howl({
            src: ["./dev/sounds/Reihe 12/r12 B1.mp3"],
            sprite: {
                "0": [438, 100030],
                "1": [31303, 2819],
                "2": [33805, 19826],
                "3": [53797, 33911],
                "4": [88518, 8387],
                "5": [96978, 2077],
                "6": [98907, 1543],
                "14": [101471, 3599],
                "15": [110928, 2892],
                "16": [105465, 2573],
                "17": [115219, 1229],
                "18": [116899, 1229],
                "19": [113872, 1037],
                "20": [118590, 2252],
                "21": [108113, 2497]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
                console.log("다시 읽어주세요!");
            },
            onload: function () { <?php require "wahl.php"; ?> /* 정답확인 */
                $("#chk").on("click", function () {
                    var na = "";
                    if ($("#itms").find("button").length < 1) {
                        $(".tran").show();

                        /* 정답 확인 div 상자 배경색 속성 없애10 */
                        $(this).removeClass("btn-light ");

                        $(".itm-lst").each(function () {
                            if ($(this).find(
                                "button.btn")) {
                                $(this).find("button.btn")
                                    .addClass(
                                        "text-success font-weight-bold"
                                    );
                            }
                        });

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

                        $(".btn-lg").text().appendTo($(this)
                            .closest("td"));
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
                        alert(na + "번 문제를 풀어주세요!");
                    }
                });
                var pan = new Array();
                pan = [1, 3, 6, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29];
                var il = $("#itms>.itm").length;
                for (var p = 0; p < pan.length; p++) {
                    var pani = "#lst-" + pan[p];
                    $(".itm").each(function () {
                        if ($(this).hasClass("ans" + pan[p])) {
                            $("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
                            $("#" + $(this).attr("id")).addClass("btn-block");
                            $("#lst-" + pan[p] + ">h2").remove();
                        }
                    })
                }
                $("#0").show();
                $(".alert").hide();
                $(".so").on("click", function () {
                    var t = $(this);
                    var ti = t.attr("id");
                    if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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
