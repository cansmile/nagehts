<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Hören Sie und ergänzen Sie die Lücken. <br>
                    <small> 듣고 빈칸을 채우세요. </small>
                    <button type="button"
                            class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">▶
                        </button>
                        버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다. 음성을 듣고 정답을
                        입력하세요.</small> ]
                </h3>
                <h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" colspan="2">Bestellung im
                            Restaurant<span
                                class="tran"><small>&nbsp;주문</small></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <button type="button" id="1"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-1"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Herr
                                    Ober,
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon1"
                                           class="form-control q text-center col-4 border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-1">
                                    bitte.
                                </div>
                            </div>
                            <span class="tran"><small>여기 메뉴판 좀
                                            주세요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="2"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>Bitte schön!<span
                                class="tran"><small>&nbsp;<br>여기있습니다.</small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="3"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-2"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Wir
                                    möchten
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon3"
                                           class="form-control col-3 q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-2">
                                    .
                                </div>
                            </div>
                            <span
                                class="tran"><small>주문할게요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="4"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-3"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Ja
                                    natürlich!
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon4"
                                           class="form-control col-4 q text-end pe-0 border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-3">
                                    ?
                                </div>
                            </div>
                            <span class="tran"><small>네, 알겠습니다. 무엇을
                                            드시겠습니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="5"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-4"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Ich nehme
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon5"
                                           class="pe-0 form-control col-6 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-4">
                                    .
                                </div>
                            </div>
                            <span class="tran"><small>전 피자 하나와 샐러드
                                            하나요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="6"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-5"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Und was
                                    möchten Sie
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon6"
                                           class="form-control col-3 q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-5">
                                    ?
                                </div>
                            </div>
                            <span class="tran"><small>그리고
                                            음료는요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="7"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-6"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon7"
                                                                      class="form-control q col-6 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-6">
                                    .
                                </div>
                            </div>
                            <span class="tran"><small>콜라 한 잔
                                            주세요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="8"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-7"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Und Sie?
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon8"
                                           class="form-control q text-center col-6 border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-7">
                                    ?
                                </div>
                            </div>
                            <span class="tran"><small>이 쪽 분은 무엇을
                                            드시겠습니까?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="9"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-8"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">
                                    Ich esse
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon9"
                                           class="form-control col-4 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-8">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div id="ant-9"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">und
                                    trinke
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon9"
                                           class="form-control col-3 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-9">
                                    .
                                </div>
                            </div>
                            <span class="tran"><small>전 스테이크 하나와 와인 한
                                            잔이요.</small></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" colspan="2">Bezahlung im
                            Restaurant<span
                                class="tran"><small>&nbsp;계산</small></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <button type="button" id="10"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-10"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Wir
                                    möchten bitte
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon10"
                                           class="form-control col-4 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-10">
                                    .
                                </div>
                            </div>
                            <span
                                class="tran"><small>계산하겠습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="11"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-11"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Bitte
                                    schön.
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon11"
                                           class="form-control col-6 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-11">
                                    ?
                                </div>
                            </div>
                            <span class="tran"><small>네. 같이 하시겠어요, 아니면
                                            따로 하시겠어요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="12"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-12"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon12"
                                                                      class="form-control col-3 q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-12">
                                    , bitte.
                                </div>
                            </div>
                            <span
                                class="tran"><small>따로요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="13"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-13"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">und
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon13"
                                           class="form-control col-5 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-13">
                                    ?
                                </div>
                            </div>
                            <span class="tran"><small>그럼 무엇을
                                            계산하시나요?</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="14"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-14"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon14"
                                           class="form-control col-6 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-14">
                                </div>
                            </div>
                            <span class="tran"><small>피자,
                                            샐러드,</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div id="ant-15"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Und
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon14"
                                           class="form-control col-6 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-15">
                                    .
                                </div>
                            </div>
                            <span class="tran"><small>그리고
                                            콜라요.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="15"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-16"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon15"
                                                                      class="form-control col-5 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-16">
                                    9,70 €.
                                </div>
                            </div>
                            <span class="tran"><small>9유로 70
                                            입니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="16"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            11 €, bitte.
                            <span class="tran"><small>&nbsp;<br>11유로
                                            드리겠습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="17"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            Vielen Dank!
                            <span
                                class="tran"><small>&nbsp;<br>감사합니다!</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="18"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-17"></div>
                            <div id="ant-18"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Und ich
                                    bezahle
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon18"
                                           class="form-control q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-17">
                                    und
                                </div>
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon18"
                                                                      class="form-control q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-18">
                                    .
                                </div>
                            </div>
                            <span class="tran"><small>그리고 전 스테이크와 와인을
                                            계산하겠습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="19"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-19"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon19"
                                                                      class="form-control col-2 q text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-19">
                                    ,
                                </div>
                            </div>
                            <span class="tran"><small>스태이크
                                            하나,</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div id="ant-20"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">und
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon19"
                                           class="form-control q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-20">
                                    ...,
                                </div>
                            </div>
                            <span class="tran"><small>그리고 와인 한
                                            잔…,</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div id="ant-21"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon19"
                                                                      class="form-control q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-21">
                                    18,50 €.
                                </div>
                            </div>
                            <span class="tran"><small>18유로
                                            50입니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="20"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-22"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex">Hier,
                                    bitte. 20 €.
                                    <input autocomplete="off" type="text"
                                           placeholder="Antwort"
                                           aria-label="Antwort"
                                           aria-describedby="basic-addon20"
                                           class="form-control q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                           id="qst-22">
                                    !
                                </div>
                            </div>
                            <span class="tran"><small>여기 있습니다. 20유로.
                                            됐습니다.</small></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" id="21"
                                    class="so btn btn-outline-success">▶
                            </button>
                        </td>
                        <td>
                            <div id="ant-23"></div>
                            <div class="input-group">
                                <div class="sen d-inline-flex"><input autocomplete="off"
                                                                      type="text"
                                                                      placeholder="Antwort"
                                                                      aria-label="Antwort"
                                                                      aria-describedby="basic-addon21"
                                                                      class="form-control q pe-0 text-center border-bottom-only
                                                rounded-0 ms-1 t-6"
                                                                      id="qst-23">
                                    !
                                </div>
                            </div>
                            <span
                                class="tran"><small>감사합니다!</small></span>
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
<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
    $(".ant").hide();
    var an = new Array();
    var an = ["die Speisekarte", "gern bestellen", "Was möchten Sie",
        "eine Pizza und einen Salat", "trinken", "Ich trinke eine Cola",
        "Was bekommen Sie", "ein Steak", "einen Wein", "bezahlen",
        "Zusammen oder getrennt", "Getrennt", "was bezahlen Sie",
        "Die Pizza, den Salat", "die Cola", "Das macht", "das Steak",
        "den Wein", "Ein Steak", "einen Wein", "das macht", "Stimmt so",
        "Danke schön"
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
                }
            );

            function stopAll() {
                $(".so").each(function () {
                        $(this).html(pa[$(this).attr("id")]);
                    }
                );
            }

            /* 문제 재생 */
            var nagehts = new Howl({

                    src: [
                        "./dev/sounds/Reihe 5/r5 G16.mp3"],
                    sprite: {
                        "0": [5559, 93458],
                        "1": [5797, 3304],
                        "2": [11040, 1597],
                        "3": [13096, 2181],
                        "4": [16690, 3323],
                        "5": [20973, 3852],
                        "6": [25980, 2404],
                        "7": [29252, 2096],
                        "8": [34333, 3074],
                        "9": [39500, 3566],
                        "10": [45336, 2297],
                        "11": [49352, 3359],
                        "12": [53861, 1811],
                        "13": [56642, 1988],
                        "14": [60070, 3497],
                        "15": [66626, 2620],
                        "16": [69987, 1858],
                        "17": [72453, 1572],
                        "18": [76604, 2937],
                        "19": [82668, 5398],
                        "20": [90542, 4551],
                        "21": [97448, 1449]
                    }

                    ,
                    html5: true,
                    volume: 1,
                    format: "mp3",
                    preload: true,
                    onloaderror: function () {
                        $(".alert").append(
                            "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                        console.log("다시 읽어주세요!");
                    }

                    ,
                    onload: function () {

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
                                for (var fd = 0; fd < an[qn]
                                    .length;

                                     fd++) {
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
                        }

                        $(".q").on("keyup", function () {
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
                            }
                        );

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
                            }
                        );

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
                            }
                        )

                        /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                        $("#chk").on("click", function () {
                                var na = "";
                                var ri = 0;
                                var qst = $(".q").length;

                                $(".q").each(function () {
                                        if (na != "") {
                                            na += ", ";
                                        }

                                        if ($(this)
                                                .val() ==
                                            "") {
                                            na += $(
                                                this)
                                                .attr(
                                                    "id"
                                                )
                                                .substr(
                                                    4, 1
                                                );
                                        }
                                    }
                                );

                                if ($(this).attr("id") ==
                                    "done") {
                                } else if (
                                    na == "") {
                                    for (var i = 0; i < an
                                        .length;

                                         i++) {
                                        var oran = $(
                                            "#qst-" + (
                                            i + 1))
                                            .val();

                                        if (rfchk($("#qst-" +
                                            (i + 1)
                                            ), true
                                        )) {
                                            $("#qst-" + (i +
                                                1))
                                                .addClass(
                                                    "bg-success text-white rounded font-weight-bold p-1 px-2 ms-1"
                                                );
                                            $("#qst-" + (i +
                                                1))
                                                .removeClass(
                                                    "rounded-0"
                                                );
                                        } else {
                                            $("#qst-" + (i +
                                                1)).val(
                                                oran);
                                            $("#qst-" + (i +
                                                1))
                                                .attr(
                                                    "disabled",
                                                    true);
                                            $("#qst-" + (i +
                                                1))
                                                .addClass(
                                                    "wa"
                                                );
                                            $("#qst-" + (i +
                                                1))
                                                .removeClass(
                                                    "rounded-0"
                                                );

                                            if (!$.isArray(
                                                an[i]
                                            )) {
                                                $("#qst-" +
                                                    (i +
                                                        1)
                                                )
                                                    .after(
                                                        "<div class=\"w-100 ra t-6\">" +
                                                        an[
                                                            i] +
                                                        "</div>"
                                                    );
                                            } else {
                                                /* 2 이상인 경우 */
                                                var r =
                                                    "<div class=\"w-100 ra t-6\">";
                                                for (var fd =
                                                    (an[i]
                                                            .length -
                                                        1
                                                    ); fd >=
                                                     0;

                                                     fd--) {
                                                    if (fd <
                                                        (an[i]
                                                                .length -
                                                            1
                                                        )
                                                    ) {
                                                        r = r +
                                                            " / ";
                                                    }

                                                    r = r +
                                                        an[
                                                            i]
                                                            [
                                                            fd];
                                                }

                                                r = r +
                                                    "</div>";

                                                if ($(
                                                    "span.sen")
                                                        .length >
                                                    0) {
                                                    $("#qst-" +
                                                        (i +
                                                            1)
                                                    )
                                                        .closest(
                                                            "span.sen"
                                                        )
                                                        .after(
                                                            r
                                                        );
                                                } else {
                                                    $("#qst-" +
                                                        (i +
                                                            1)
                                                    )
                                                        .after(
                                                            r
                                                        );
                                                }
                                            }
                                        }

                                        if ($("#qst-" + (i +
                                            1))
                                            .hasClass(
                                                "bg-success"
                                            )) {
                                            ri++;
                                        }
                                    }

                                    /* 정답 확인 div 상자 배경색 속성 없애기 */
                                    $(this).removeClass(
                                        "btn-light ");
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
                                    $(this).prop("disabled",
                                        true);
                                    $(".tran").show();
                                    $(this).attr("id",
                                        "done");
                                } else {
                                    alert("모든 문제를 풀어주세요!");
                                    /* alert(na+"번 문제를 풀어주세요!"); */
                                }

                                ;
                            }
                        );
                        var pan = new Array();
                        /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23"]; */
                        pan = ["1", "2", "4", "6", "8"];
                        for (var p = 0; p < pan.length;

                             p++) {
                            var pann = "#qst-" + pan[p];
                            $(pann).val(an[(pan[p] - 1)]);
                            $(pann).prop("disabled", true);
                            $(pann).removeClass("rounded-0");
                            $(pann).addClass(
                                "bg-success text-white font-weight-bold"
                            );
                            /* $(pann).closest("tr").find(".tran").show(); */
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

                        /* 전체 입력란 폭 맞추기 */
                        $(".q").each(function () {
                            di($(this));
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
                            }
                        );
                    }

                    ,
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
                                    }
                                );
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
                }
            );
        }
    );

</script>
</body>

</html>
