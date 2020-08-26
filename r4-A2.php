<?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 왼쪽 열과 오른쪽 열을 배열에 넣고 한 부분이라도 정답으로 인정되면 나머지 항목에 자동으로 정답을 입력할 수 있도록 변경 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Ergänzen Sie.
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <small>빈칸을 채우세요.</small></h2>

                    <div class="col-lg-12 mb-4 mt-2 text-center">
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼 또는 <button type="button" class="btn disabled btn-sm btn-outline-dark">단어</button>
                                버튼을 눌러 2번 들으면, 번역이 나옵니다.<br>들으면서 단어를 그림과
                                연결하세요.<br />그림을 눌러도 들을 수 있습니다.</small> ]</h3>
                        <h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는
                                확인 문장이 붉게 변합니다.</small> ]</h3>
                        <h3>[ <small>같은 줄에 있는 답안에 정답을 입력하면 다른 답안은 자동으로
                                채워집니다.</small> ]</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-1.png"
                                                style="max-width:100%;height:auto;" class="so" id="7"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Schloss<span class="tran"><br><small>성</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-2.png"
                                                style="max-width:100%;height:auto;" class="so" id="6"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Ökohaus<span class="tran"><br><small>에코하우스</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-3.png"
                                                style="max-width:100%;height:auto;" class="so" id="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Apartment (das
                                                Hochhaus)<span class="tran"><br><small>아파트</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-4.png"
                                                style="max-width:100%;height:auto;" class="so" id="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Einfamilienhaus<span class="tran"><br><small>단독주택</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-5.png"
                                                style="max-width:100%;height:auto;" class="so" id="5"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Studentenwohnheim<span class="tran"><br><small>기숙사</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-6.png"
                                                style="max-width:100%;height:auto;" class="so" id="3"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                das Reihenhaus<span class="tran"><br><small>연립주택</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <table class="table table-borderless text-center align-middle">
                                <tbody>
                                    <tr>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-A1-7.png"
                                                style="max-width:100%;height:auto;" class="so" id="4"></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="border border-dark rounded p-2 font-weight-bold">
                                                der Bauernhof<span class="tran"><br><small>전원주택</small></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="3">
                                    <div id="ant-1"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon1"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-1">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    Ich bin Anna und wohne in Leipzig.
                                    <span class="tran"><small>나는 안나이고 라이프찌히에
                                            삽니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-8"></div>
                                    <div class="input-group">
                                        Meine Familie wohnt in einem
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8"
                                            class="text-center form-control q rounded-0 border-bottom-only ml-2 col-2 t-6"
                                            id="qst-8">
                                        .
                                    </div>
                                    <span class="tran"><small>나의 가족은 한 아파트에서
                                            삽니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Da wohnen viele Bewohner. Es ist ein sehr
                                    hohes Haus mit vielen Etagen.
                                    <span class="tran"><small>거기에는 많은 입주민들이 살고
                                            있습니다. 아파트는 여러 층으로 된 매우 높은
                                            집입니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="2">
                                    <div id="ant-2"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon2"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-2">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    <div id="ant-9"></div>
                                    <div class="input-group">
                                        Meine Eltern wohnen mit ihrem Hund in
                                        einem 200 Quadratmeter großen
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon9"
                                            class="text-center form-control q rounded-0 border-bottom-only ml-2 col-2 t-6"
                                            id="qst-9">
                                        .
                                    </div>
                                    <span class="tran"><small>나의 부모님은 개 한 마리와 함께
                                            200 평방제곱미터 되는 한가족주택에 살고
                                            있습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Da haben sie einen großen Garten. Ich
                                        verbringe gern meine Ferien bei ihnen.
                                    </div>
                                    <span class="tran"><small>거기에는 커다란 정원이 있습니다.
                                            나는 방학을 부모님집에서 보냅니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="2">
                                    <div id="ant-3"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon3"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-3">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    <div id="ant-10"></div>
                                    <div class="input-group">
                                        Hi! Ich bin Anna und komme aus Dresden.
                                        Ich studiere Theologie in Berlin.
                                    </div>
                                    <span class="tran"><small>안녕! 나는 안나이고 드레스덴에서
                                            왔어. 그리고 베를린에서 신학을
                                            공부해.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Zurzeit wohne ich in einem
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon10"
                                            class="text-center form-control q rounded-0 border-bottom-only ml-2 col-3 t-6"
                                            id="qst-10">
                                        , denn es ist günstig.
                                    </div>
                                    <span class="tran"><small>현재 나는 기숙사에서 거주하는데
                                            (임대료가) 저렴하기 때문이지.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="4">
                                    <div id="ant-4"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon4"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-4">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    <div id="ant-11"></div>
                                    <div class="input-group">
                                        Ich reise gern. Ich möchte gern in
                                        diesem Sommer Heidelberg besuchen.
                                    </div>
                                    <span class="tran"><small>나는 여행을 즐겨합니다. 이번
                                            여름에는 하이델베르크에 가고 싶습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Da will ich das
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon11"
                                            class="text-center form-control q rounded-0 border-bottom-only mx-2 col-2 t-6"
                                            id="qst-11">
                                        besuchen.
                                    </div>
                                    <span class="tran"><small>거기에서 (하이델베르크) 성을
                                            방문하고 싶어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Es ist ein sehr großes und wertvolles
                                        Haus mit einem großen Garten oder einem
                                        Park.
                                    </div>
                                    <span class="tran"><small>성은 커다란 정원이나 공원이 있는
                                            매우 크고 귀중한 집이지요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Darin lebten früher Könige oder Fürsten.
                                    </div>
                                    <span class="tran"><small>옛날에는 거기에서 왕이나 영주들이
                                            거주했지요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="4">
                                    <div id="ant-5"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon5"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-5">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    <div id="ant-12"></div>
                                    <div class="input-group">
                                        Ich bin Bauer von Beruf und liebe die
                                        Natur.
                                    </div>
                                    <span class="tran"><small>나는 농부이고 자연을
                                            사랑합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Mit meiner Familie wohne ich auf einem
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon12"
                                            class="text-center form-control q rounded-0 border-bottom-only mx-2 col-2 t-6"
                                            id="qst-12">
                                        .
                                    </div>
                                    <span class="tran"><small>나는 나의 가족과 농가에 살고
                                            있어요.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Wir lieben frische Luft und haben Tiere
                                        gern, z.B. Kühe, Ziegen, Pferde,
                                        Schweine usw...
                                    </div>
                                    <span class="tran"><small>우리는 신선한 공기와 동물들을
                                            좋아하요. 예를들어 소, 염소, 말 그리고 돼지
                                            등등.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Meine Kinder spielen gern auf dem Hof.
                                        Hier fahren wenige Autos. Das ist gut.
                                    </div>
                                    <span class="tran"><small>나의 아이들은 마당에서 놀기를
                                            즐겨합니다. 여기에는 자동차들이 많이 다니지 않습니다. 그래서
                                            좋습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="3">
                                    <div id="ant-6"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon6"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-6">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    <div id="ant-13"></div>
                                    <div class="input-group">
                                        Ich lebe gern umweltfreundlich.
                                    </div>
                                    <span class="tran"><small>나는 환경친화적으로 사는 것을
                                            좋아합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-13"></div>
                                    <div class="input-group">
                                        Ich fahre gern Rad und esse gern Obst
                                        und Gemüse aus Ökoanbau.
                                    </div>
                                    <span class="tran"><small>나는 자전거를 즐겨 타고
                                            친환경적으로 재배한 과일과 채소를 즐겨
                                            먹습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        Ich lebe auch in einem
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon13"
                                            class="text-center form-control q rounded-0 border-bottom-only mx-2 col-2 t-6"
                                            id="qst-13">
                                        mit Solarenergie und Wasserspartechnik.
                                    </div>
                                    <span class="tran"><small>나는 또한 태양광 에너지와 물
                                            절약 기능을 있는 에코하우스에서
                                            거주합니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-top-only align-middle" rowspan="3">
                                    <div id="ant-7"></div>
                                    <div class="input-group" style="width:50px;" class="text-center">
                                        <input type="text" placeholder="Nr." aria-label="Antwort"
                                            aria-describedby="basic-addon7"
                                            class="text-center form-control q rounded-0 border-bottom-only t-6"
                                            id="qst-7">
                                    </div>
                                </td>
                                <td class="border-top-only">
                                    Wir sind verheiratet und haben noch keine
                                    Kinder.
                                    <span class="tran"><small>우리는 결혼하였고 아직 아이가
                                            없습니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-14"></div>
                                    <div class="input-group">
                                        Wir wohnen jetzt in einem
                                        <input type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon14"
                                            class="text-center form-control q rounded-0 border-bottom-only ml-2 col-2 t-6"
                                            id="qst-14">
                                        .
                                    </div>
                                    <span class="tran"><small>우리는 지금 연립주택에
                                            삽니다.</small></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-15"></div>
                                    <div class="input-group">
                                        Ein
                                        border-
                                        ist meistens ein Familienhaus, in einer
                                        Reihe von gleichen, aneinander gebauten
                                        Häusern.
                                    </div>
                                    <span class="tran"><small>연립주택이란 대부분 동일한 주택이
                                            연 이어져 지어진 주택입니다.</small></span>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".ant").hide();
        $(".tran").hide();
        var an = new Array();
        var an = ["3", "4", "5", "1", "7", "2", "6", "Apartment",
            "Einfamilienhaus", "Studentenwohnheim", "Schloss", "Bauernhof",
            "Ökohaus", "Reihenhaus"
        ];
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
                    "./<?php echo($root); ?>sounds/Reihe 4/r4 A1.mp3"
                ],
                sprite: {
                    "0": [1295, 41265],
                    "1": [11970, 2700],
                    "2": [18235, 2230],
                    "3": [23963, 1763],
                    "4": [28295, 1613],
                    "5": [32346, 2071],
                    "6": [36862, 1996],
                    "7": [41131, 1487]
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
                    /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
                    /* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
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
                            for (var fd = 0; fd < an[qn]
                                .length; fd++) {
                                if (io) {
                                    b = an[qn][fd];
                                } else {
                                    b = an[qn][fd].substr(0,
                                        q);
                                }
                                b = b.replace(/ /gi, "");
                                if (a == b) {
                                    return true;
                                }
                            }
                        }
                    };

                    $(".q").on("keyup", function () {
                        if ($(this).val().length >
                            0) {
                            var wid = (($(this)
                                    .val()
                                    .length) +
                                2) * 2 + "em";
                            $(this).css("width",
                                wid);
                        } else {
                            $(this).css("width", ((
                                    8 + 2) *
                                2 + "em"));
                        }
                        $(this).removeClass(
                            "bg-danger");
                        $(this).removeClass(
                            "bg-success");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-danger");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-success");
                        if (rfchk($(this))) {
                            $(this).addClass(
                                "text-white font-weight-bold"
                            );
                            $(this).addClass(
                                "bg-success");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-success");
                        } else {
                            $(this).addClass(
                                "text-white font-weight-bold"
                            );
                            $(this).addClass(
                                "bg-danger");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-danger");
                        }
                        if (!$(this).val()) {
                            $(this).removeClass(
                                "bg-danger");
                            $(this).removeClass(
                                "bg-success");
                            $(this).removeClass(
                                "text-white font-weight-bold"
                            );
                        }
                        if ($(this).val()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .show();
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                                    .val());
                        } else {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .hide();
                        }
                    });

                    $(".q").on("focusin", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .show();
                        if (!$("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                                    .val());
                        }
                        if ($("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                );
                                $(this).addClass(
                                    "bg-success"
                                );
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-success"
                                    );
                            } else {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                );
                                $(this).addClass(
                                    "bg-danger");
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-danger"
                                    );
                            }
                        }
                    });

                    $(".q").on("focusout", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .hide();
                        if (rfchk($(this), true)) {
                            $(this).addClass(
                                "bg-success");
                            $(this).addClass(
                                "text-white");
                        } else {
                            $(this).addClass(
                                "bg-danger");
                        }
                        if ($(this).val()) {
                            if ($(this).hasClass(
                                    "bg-danger")) {
                                x.play();
                            } else if ($(this)
                                .hasClass(
                                    "bg-success")) {
                                o.play();
                                $(this).prop(
                                    "disabled",
                                    true);
                            }
                        }
                        $(this).removeClass(
                            "bg-danger");
                        if (!$(this).attr(
                                "disabled")) {
                            $(this).removeClass(
                                "text-white font-weight-bold"
                            );
                            $(this).removeClass(
                                "bg-success");
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
                                na += $(this).attr("id").substr(4);
                            }
                        });
                        if ($(this).attr("id") == "done") {} else if (na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass(
                                        "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1"
                                        );
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass(
                                        "wa"
                                        );
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"d-block ra t-6\">" +
                                            an[i] + "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r =
                                            "<div class=\"d-block ra t-6\">";
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
                            } /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".bg-success").length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) * 100; /* 정답 비율 */
                            var tcl = "white"; /* 기본 문자색 */ /* 분류 기준은 100%, 80%, 60%, 40% */
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
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        };
                    });

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
                    $("#0").show();
                    $(".alert").hide();
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
    <?php include"footer.php"; ?>
</body>

</html>
