<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
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
                    <button type="button" class="mt-1 mx-1 btn ans31 btn-lg btn-outline-dark itm px-3" id="1">
                        ①
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans30 btn-lg btn-outline-dark itm px-3" id="2">
                        ②
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark itm px-3" id="3">
                        ③
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm px-3" id="4">
                        ④
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans26 btn-lg btn-outline-dark itm px-3" id="5">
                        ⑤
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="6">
                        ⑥
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="7">
                        ⑦
                    </button>
                    <button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="8">
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
                    <h2>[ <small>알파벳을] 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
                            HV
                        </button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0_p">
                            ❚❚
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러도 번역은 나오지 않습니다. 정답확인하면 문장의 번역이 나옵니다.</small> ]
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-9 text-center">
                    <img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-A3-1.png" alt="Wo ist das?"
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
                                        <li><button type="button" id="10"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Entschuldigung,
                                            wo kann man hier übernachten? Gibt
                                            es in der Nähe ein Hotel?
                                            <span class="tran"><br><small>실례합니다.
                                                    가르텐슈타트에서는 어디서 머물 수 있습니까? 근처에
                                                    호텔이 있습니까?</small></span>
                                        </li>
                                    </ul>
                                    <ul type="square">
                                        <li><button type="button" id="11"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Im
                                            Hotel Augustin.
                                            <span class="tran"><br><small>호텔
                                                    아우구스틴에서요.</small></span>
                                        </li>
                                    </ul>
                                    <ul type="circle">
                                        <li><button type="button" id="12"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo
                                            ist das, bitte?
                                            <span class="tran"><br><small>어디인가요?</small></span>
                                        </li>
                                    </ul>
                                    <ul type="square">
                                        <li><button type="button" id="13"
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
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-1">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Blumenladen<span class="tran"><br><small>꽃집에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-2">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Park<span class="tran"><br><small>공원에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-3">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Getränkemarkt<span class="tran"><br><small>음료마켓에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-4">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Supermarkt<span class="tran"><br><small>슈퍼마켓에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-5">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Parkhaus<span class="tran"><br><small>주차장에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-6">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Zoo<span class="tran"><br><small>동물원에서</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-7">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;am Marktplatz<span class="tran"><br><small>시장에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-8">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;am Hauptbahnhof<span class="tran"><br><small>중앙역에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-9">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;auf dem Tennisplatz<span class="tran"><br><small>테니스장에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-10">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Buchhandlung<span class="tran"><br><small>서점에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-11">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Bäckerei<span class="tran"><br><small>빵집에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-12">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Diskothek<span class="tran"><br><small>디스코텍에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-13">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Frauenkirche<span class="tran"><br><small>프라우엔교회에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-14">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Sprachschule<span class="tran"><br><small>어학원에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-15">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Praxis<span class="tran"><br><small>병원에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-16">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Stadtbibliothek<span class="tran"><br><small>시립도서관에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-17">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Telefonzelle<span class="tran"><br><small>공중 전화 박스에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-18">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Touristeninformation<span class="tran"><br><small>관광안내센터에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-19">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;auf der Bank (Sparkasse)<span class="tran"><br><small>은행(슈파카세)</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-20">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Apotheke<span class="tran"><br><small>약국에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-21">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;in der Videothek<span class="tran"><br><small>비디오테이프 대여점에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-22">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Theater<span class="tran"><br><small>극장에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-23">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Kaufhaus<span class="tran"><br><small>백화점에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-24">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Fotostudio<span class="tran"><br><small>사진관에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-25">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Schwimmbad<span class="tran"><br><small>수영장에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-26">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Stadtmuseum<span class="tran"><br><small>시립박물관에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-27">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Kino<span class="tran"><br><small>영화관에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-28">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Café<span class="tran"><br><small>카페에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-29">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Reisebüro<span class="tran"><br><small>여행사에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-30">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Restaurant<span class="tran"><br><small>식당에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-31">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Hotel<span class="tran"><br><small>호텔에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-32">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;am Rathaus<span class="tran"><br><small>시청에</small></span></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-33">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Restaurant<span class="tran"><br><small>식당에</small></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="itm-lst 1itm" id="lst-34">
                        <h2 class="btn btn-warning btn-lg ttl d-inline-block t_add_6">
                            ▼ </h2>&nbsp;im Stadtmuseum<span class="tran"><br><small>시립박물관에</small></span>
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
                                            class="border border-dark bg-primary rounded p-3 px-4 t_add_6"></span>
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
                <div class="col-9">
                    <div class="row">
                        <div class="col-9">
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
                        <div class="col-9">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/taptogroup.js"></script>
    <!-- interact.min.js -->
    <script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
    <script>
        $("#0").hide();
        $("#0_p").hide();
        $(".tran").hide();
        $("#chk").hide();

        $(document).ready(function () {
            /* 각 문장 재생 횟수 초기화 */
            var hm = new Array(),
                sen = new Array();
            $(".so").each(function () {
                hm[$(this).attr("id")] = 0;
                sen[$(this).attr("id")] = $("#" + $(this).attr(
                    "id")).text();
            });

            ion.sound({
                sounds: [{
                    name: "r10 A2-1 Wo sind die Leute",
                    sprite: {
                        "0": [1.019, 157.705],
                        "10": [15.490, 4.719],
                        "11": [20.626, 1.559],
                        "12": [22.359, 1.516],
                        "13": [23.907, 2.064]
                    }
                }, {
                    name: "dingdongdang",
                    path: "<?php echo($root); ?>sounds/",
                }, {
                    name: "Cartoon_Boing",
                    path: "<?php echo($root); ?>sounds/",
                }],
                path: "<?php echo($root); ?>sounds/Reihe 10/",
                preload: true,
                volume: 1.0,
                multiplay: false,
                ended_callback: function (obj) {
                    /* 재생이 끝날 때 2번 이상이면 번역 보이기 */
                    hmn = obj.part;
                    hm[hmn]++; /* 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기 */
                    if (obj.part == "0") {
                        $("#0").show();
                        $("#0_p").hide();
                        if (hm[hmn] > 1) {
                            $(".tran").show();
                        }
                    } else {
                        $("#" + obj.part).text(sen[obj.part]);
                        if (hm[hmn] > 1) {
                            $("#" + hmn).closest("ul").find(".tran").show();
                        }
                    }
                },
                ready_callback: function () {
                    $(".o").on("click", function () {
                        ion.sound.play("dingdongdang");
                    });
                    $(".x").on("click", function () {
                        ion.sound.play("Cartoon_Boing");
                    });
                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });
                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings().hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass("btn-warning");
                            $(this).parent().children().removeClass("btn-light");
                        }; /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(".an").length / $(".q").length) * 100);
                        $(".progress>.bar").attr("width", perc + "%;");
                    }); /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop").popover('hide');
                        }, 500);
                    });
                    $(".so").on("click", function () {
                        if ($(this).attr("id").substr(-2) == "_p") {
                            /* _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause("r10 A2-1 Wo sind die Leute", {
                                part: "0"
                            });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).text() == sen[$(this).attr("id")]) {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play("r10 A2-1 Wo sind die Leute", {
                                part: $(this).attr("id")
                            });
                            $(this).html("❚❚");
                        } else if ($(this).html() == "❚❚") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause("r10 A2-1 Wo sind die Leute", {
                                part: $(this).attr("id")
                            });
                            $(this).html("▶");
                        } else {
                            /* _p 붙어 있지 않으면 id 그대로 재생 */
                            ion.sound.play("r10 A2-1 Wo sind die Leute", {
                                part: $(this).attr("id")
                            }); /* 전체 듣기 재생일 때는 일시정지 버튼 보이기 */
                            if ($(this).attr("id") == "0") {
                                $(this).hide();
                                $("#0_p").show();
                            };
                        };
                    }); /* 정답확인 */
                    $("#chk").on("click", function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show(); /* 정답 확인 div 상자 배경색 속성 없애10 */
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
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        }
                    });
                    <?php require "wahl.php"; ?>
                    var pan = new Array(); /* pan = ["1","2","3","4","5","6","7","8","9","10"]; */
                    pan = [19, 31];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass("ans" + pan[p])) {
                                $("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[
                                    p] + ">h2"));
                                $("#" + $(this).attr("id")).addClass("btn-inline-block");
                                $("#" + $(this).attr("id")).addClass("btn-light");
                                $("#lst-" + pan[p] + ">h2").remove();
                            }
                        })
                    }
                    $("#0").show();
                    $(".alert").hide();
                }
            });
        });

    </script>
    <!-- ion.sound finished -->
    <?php require "footer.php"; ?>
</body>

</html>
