<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2" id="wahl">
        <div class="container">
            <div class="row">
                <div class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button" class="mt-1 mx-1 btn ans31 btn-lg btn-outline-dark itm px-2" id="1">
                        ①
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans30 btn-lg btn-outline-dark itm px-2" id="2">
                        ②
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark itm px-2" id="3">
                        ③
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm px-2" id="4">
                        ④
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans26 btn-lg btn-outline-dark itm px-2" id="5">
                        ⑤
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-2" id="6">
                        ⑥
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-2" id="7">
                        ⑦
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="8">
                        ⑧
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
                    <h2>[ <small>번호를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러도 번역은 나오지 않습니다. 정답확인하면 문장의 번역이 나옵니다.</small> ]
                    </h3>
                </div>
            </div>
            <div class="row my-3 text-center">
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 1
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 2
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 3
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 4
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 5
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 6
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 7
                </div>
                <div class="col-sm-6 col-md-3 col-lg">
                    <button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1 font-weight-bold">
                        ▶
                    </button>Dialog 8
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-9 text-center">
                    <img src="./dev/images/Reihe 10/Reihe-10-A3-1.png" alt="Wo ist das?"
                        style="max-width: 100%; height: auto;"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="display-4">
                                    Dialog 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul type="circle">
                                        <li><button type="button" id="18"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Entschuldigung,
                                            wo kann man hier übernachten? Gibt
                                            es in der Nähe ein Hotel?
                                            <span class="tran"><br><small>실례합니다.
                                                    가르텐슈타트에서는 어디서 머물 수 있습니까? 근처에
                                                    호텔이 있습니까?</small></span>
                                        </li>
                                    </ul>
                                    <ul type="square">
                                        <li><button type="button" id="19"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Im
                                            Hotel Augustin.
                                            <span class="tran"><br><small>호텔
                                                    아우구스틴에서요.</small></span>
                                        </li>
                                    </ul>
                                    <ul type="circle">
                                        <li><button type="button" id="20"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo
                                            ist das, bitte?
                                            <span class="tran"><br><small>어디인가요?</small></span>
                                        </li>
                                    </ul>
                                    <ul type="square">
                                        <li><button type="button" id="21"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Das
                                            ist in der Mannesstraße.
                                            <span class="tran"><br><small>만네스슈트라세에
                                                    있습니다.</small></span></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 rounded p-2 text-center bg-dark text-white font-weight-bold">am</div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-8">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;am Hauptbahnhof<span class="tran"><br><small>중앙역에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-7">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;am Marktplatz<span class="tran"><br><small>시장에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-32">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;am Rathaus<span class="tran"><br><small>시청에</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 rounded p-2 text-center bg-dark text-white font-weight-bold">auf dem/der</div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-9">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;auf dem Tennisplatz<span class="tran"><br><small>테니스장에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-19">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;auf der Bank (Sparkasse)<span class="tran"><br><small>은행(슈파카세)</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 rounded p-2 text-center bg-dark text-white font-weight-bold">im</div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-1">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Blumenladen<span class="tran"><br><small>꽃집에서</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-28">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Café<span class="tran"><br><small>카페에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-24">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Fotostudio<span class="tran"><br><small>사진관에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-3">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Getränkemarkt<span class="tran"><br><small>음료마켓에서</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-31">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Hotel<span class="tran"><br><small>호텔에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-23">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Kaufhaus<span class="tran"><br><small>백화점에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-27">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Kino<span class="tran"><br><small>영화관에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-2">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Park<span class="tran"><br><small>공원에서</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-5">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Parkhaus<span class="tran"><br><small>주차장에서</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-29">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Reisebüro<span class="tran"><br><small>여행사에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-30">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Restaurant<span class="tran"><br><small>식당에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-25">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Schwimmbad<span class="tran"><br><small>수영장에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-26">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Stadtmuseum<span class="tran"><br><small>시립박물관에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-4">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Supermarkt<span class="tran"><br><small>슈퍼마켓에서</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-22">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Theater<span class="tran"><br><small>극장에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-6">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;im Zoo<span class="tran"><br><small>동물원에서</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 rounded p-2 text-center bg-dark text-white font-weight-bold">in der</div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-20">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Apotheke<span class="tran"><br><small>약국에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-10">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Buchhandlung<span class="tran"><br><small>서점에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-11">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Bäckerei<span class="tran"><br><small>빵집에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-12">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Diskothek<span class="tran"><br><small>디스코텍에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-13">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Frauenkirche<span class="tran"><br><small>프라우엔교회에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-15">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Praxis<span class="tran"><br><small>병원에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-14">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Sprachschule<span class="tran"><br><small>어학원에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-16">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Stadtbibliothek<span class="tran"><br><small>시립도서관에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-17">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Telefonzelle<span class="tran"><br><small>공중 전화 박스에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-18">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Touristeninformation<span class="tran"><br><small>관광안내센터에</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="row">
                        <div class="col-2 mr-3 p-0">
                            <div class="itm-lst 1itm" id="lst-21">
                                <h2 class="btn btn-warning btn-lg ttl d-inline-block"> ▼ </h2>
                            </div>
                        </div>
                        <div class="col-8 ml-3 my-auto">
                            &nbsp;in der Videothek<span class="tran"><br><small>비디오테이프 대여점에</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
            <div class="row mt-3">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"><span class="tipp">TIPP</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>장소를 나타내는 3,4격
                                    전치사(Wechselpäpositionen) 중 공간1 개념(Raum1)으로
                                    사용되는 전치사는 <strong>in</strong>,
                                    <strong>an</strong> 그리고 광장이나 거리를 의미 할때는
                                    <strong>auf</strong>가 사용된다. 공공기관(우체국, 은행,
                                    경찰서, 역 공항 등)을 나타날 때도 <strong>auf</strong> 가
                                    사용된다.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 border border-white bg-dark rounded p-3">
                    <div class="border border-dark bg-white">
                        <table class="table table-bordered text-center m-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">in</td>
                                    <td rowspan="2" class="align-middle">안에</td>
                                </tr>
                                <tr>
                                    <td height="100" class="align-middle">
                                        <span class="border border-dark bg-primary rounded p-3">
                                            <span class="border border-dark bg-orange rounded rounded-circle p-1 px-3">
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 border border-white bg-dark rounded p-3">
                    <div class="border border-dark bg-white">
                        <table class="table table-bordered text-center m-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">an</td>
                                    <td rowspan="2" class="align-middle">곁에</td>
                                </tr>
                                <tr>
                                    <td height="100" class="align-middle">
                                        <span class="border border-dark bg-orange rounded rounded-circle p-1 px-3">
                                        </span>
                                        <span class="border border-dark bg-primary rounded p-3 px-4">
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 border border-white bg-dark rounded p-3">
                    <div class="border border-dark bg-white">
                        <table class="table table-bordered text-center m-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">auf</td>
                                    <td rowspan="2" class="align-middle">위에</td>
                                </tr>
                                <tr>
                                    <td height="100" class="align-middle"><span
                                            class="border border-dark bg-orange rounded rounded-circle p-1 px-3"
                                            style="position: relative; top: -14px;"></span><br><span
                                            class="border border-dark bg-primary rounded p-3 px-4"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">1. 건물, 공간 안에 있는
                                    경우:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>im Park, im Restaurant, im
                                    Theater, im Krankenhaus, in der Bibliothek,
                                    in der Kirche</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">2. 공공기관, 길, 광장의
                                    경우:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>auf der Bank, auf dem
                                    Rathaus, auf der Post, auf der Straße, auf
                                    dem Markt, auf dem Platz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">3. </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wechselpräpositionen (3,4격
                                    지배전치사)가 정지상태일 경우(어디에, wo) 3격관사를 수반한다.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row text-center align-middle" style="line-height: 250%;">
                <div class="col-3 align-middle text-center p-0 border border-dark">
                    Abkürzung<br>(<small>축약형</small>)</div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12 border border-dark">
                                    <div class="row">
                                        <div class="col-4 text-center align-middle">
                                            in, an(3,
                                            4)<br>von(3)<br>bei(3)<br>zu(3)<br>&nbsp;
                                        </div>
                                        <div class="col-4 text-center align-middle">
                                            + dem +</div>
                                        <div class="col-4 text-center align-middle">
                                            남성명사<br>중성명사</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 border border-dark">
                                    im<br>am<br>vom<br>beim<br>zum<br></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12 border border-dark">
                                    <div class="row">
                                        <div class="col-4 text-center align-middle">
                                            zu(3)</div>
                                        <div class="col-4 text-center align-middle">
                                            + der +</div>
                                        <div class="col-4 text-center align-middle">
                                            여성명사</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 border border-dark">zur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-sm-3 pt-md-2 pt-lg-1">
                <div class="col-3">&nbsp;</div>
                <div class="col-6">
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <th rowspan="2" scope="col" class="bg-secondary text-white align-middle">
                                    Dativ</th>
                                <th scope="col" class="text-primary bg-light">m
                                </th>
                                <th scope="col" class="text-danger bg-light">f</th>
                                <th scope="col" class="text-purple bg-light">n</th>
                                <th scope="col" class="text-khaki bg-light">Pl.
                                </th>
                            </tr>
                            <tr>
                                <td class="text-primary bg-light">dem
                                </td>
                                <td class="text-danger bg-light">der
                                </td>
                                <td class="text-purple bg-light">dem
                                </td>
                                <td class="text-khaki bg-light">den
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3">&nbsp;</div>
        </div>
    </section>

    <div id="marg"></div>
    <div id="last" class="d-none"></div>

    <?php require "footer.php"; ?>
    <script src="./dev/js/taptogrouph.js"></script>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $("#chk").hide();

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
                src: ["./dev/sounds/Reihe 10/r10 A2-1.mp3"],
                sprite: {
                    "0": [519, 158205],
                    "10": [13381, 12737],
                    "11": [27329, 10910],
                    "12": [39815, 12031],
                    "13": [53382, 21305],
                    "14": [75697, 19189],
                    "15": [95746, 20048],
                    "16": [116649, 24189],
                    "17": [141125, 17051],
                    "18": [14990, 5219],
                    "19": [20126, 2059],
                    "20": [21859, 2016],
                    "21": [23407, 2564]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
                    /* 음성 준비되면 HV 버튼 나타내기 */
                    $("#0").show();
                    $(".alert").hide();
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
                    }); /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애10 */
                            $(this).removeClass("btn-light ");
                            $(".itm-lst").each(function () {
                                if ($(this).find("button.btn")) {
                                    $(this).find("button.btn").addClass(
                                        "text-success");
                                }
                            });
                            var qa = $(".itm-lst").length - $(".itm-lst>.ttl")
                            .length; /* 전체 문항 수 */
                            var qr = $(".text-success").length; /* 맞춘 항목 수 */
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
                            $(".btn-lg").text().appendTo($(this).closest("td"));
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
                            alert("모든 문제를 풀어주세요!");
                        }
                    });

                    <?php require "wahl.php"; ?>
                    var pan = new Array();
                    pan = [19, 31];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[
                                    p] + ">h2"));
                                $("#" + $(this).attr("id")).addClass("btn-block");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }
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
