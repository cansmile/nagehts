<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <!-- 보기시작 -->
    <section class="bg-white rounded p-2"

        id="wahl">
        <div class="container">
            <div class="row">
                <div
                    class="bg-<?php echo($color); ?> wahl_title col-12">
                    Wahl</div>
                <div class="col-12" id="itms">
                    <button type="button"
                        class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm so"
                        id="1">die Tasse<span
                            class="tran"><br><small>잔</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans20 btn-lg btn-outline-dark itm so"
                        id="2">die Kosmetik<span
                            class="tran"><br><small>화장품</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans25 btn-lg btn-outline-dark itm so"
                        id="3">die Socken(Pl.)<span
                            class="tran"><br><small>양말(복수)</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm so"
                        id="4">der Ring<span
                            class="tran"><br><small>반지</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark itm so"
                        id="5">das Parfüm<span
                            class="tran"><br><small>향수</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans21 btn-lg btn-outline-dark itm so"
                        id="6">die Musik CDs(Pl.)<span
                            class="tran"><br><small>음악 CD(복수)</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans22 btn-lg btn-outline-dark itm so"
                        id="7">die Kamera<span
                            class="tran"><br><small>카메라</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm so"
                        id="8">der Reiseführer<span class="tran"><br><small>여행
                                가이드 책자</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark itm so"
                        id="9">das Campingzelt<span
                            class="tran"><br><small>야영</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm so"
                        id="10">das Kochbuch<span
                            class="tran"><br><small>요리책</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm so"
                        id="11">das Wörterbuch<span
                            class="tran"><br><small>사전</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm so"
                        id="12">die Kaffeemaschine<span
                            class="tran"><br><small>커피 머신</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans24 btn-lg btn-outline-dark itm so"
                        id="13">der Laptop<span
                            class="tran"><br><small>노트북</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans23 btn-lg btn-outline-dark itm so"
                        id="14">die Taucherbrille<span
                            class="tran"><br><small>수경</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark itm so"
                        id="15">der Kuli<span
                            class="tran"><br><small>볼펜</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so"
                        id="16">der Kuss<span
                            class="tran"><br><small>키스</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so"
                        id="17">der Wein<span
                            class="tran"><br><small>와인</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so"
                        id="18">der Mülleimer<span
                            class="tran"><br><small>쓰레기통</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so"
                        id="19">das Deodorant<span
                            class="tran"><br><small>데오도란트</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so"
                        id="20">der Gutschein<span
                            class="tran"><br><small>상품권</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm so"
                        id="21">der Hund<span
                            class="tran"><br><small>강아지</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so"
                        id="22">der Schmuck<span
                            class="tran"><br><small>장식</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so"
                        id="23">das Geld<span
                            class="tran"><br><small>돈</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so"
                        id="24">die Krawatte<span
                            class="tran"><br><small>넥타이</small></span>
                    </button>
                    <button type="button"
                        class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so"
                        id="25">die Pflanze<span
                            class="tran"><br><small>식물</small></span>
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
                    <h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0">
                            HV
                        </button><button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
                            id="0_p">
                            ❚❚
                        </button>
                    </h2>
                    <h3>[ <small><button type="button"
                                class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                            버튼 또는 <button type="button"
                                class="btn btn-sm btn-outline-secondary disabled">단어</button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-1.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-1">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-2.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-2">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-3.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-3">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-4.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-4">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-5.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-5">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-6.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-6">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-7.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-7">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-8.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-8">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-9.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-9">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-10.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-10">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-11.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-11">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-12.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-12">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-13.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-13">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-14.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-14">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-15.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-15">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-16.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-16">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-17.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-17">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-18.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-18">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-19.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-19">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-20.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-20">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-21.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-21">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-22.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-22">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-23.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-23">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-24.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-24">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td height="350" class="align-middle">
                                    <img src="./<?php echo($root); ?>images/Reihe 9/Reihe-9-B3-25.png"
                                        alt="Wo ist das?"
                                        style="max-width: 100%; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="itm-lst 1itm" id="lst-25">
                                        <h2
                                            class="btn btn-warning btn-xl ttl d-block">
                                            ▼ </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                    id="chk"> 정답확인 </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
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
            for (i = 0; i < $(".so").length; i++) {
                hm[i] = 0;
                sen[i] = 0;
            }
            ion.sound({
                sounds: [{
                    name: "r9 B3",
                    sprite: {
                        "0": [1, 93.1],
                        "1": [43.29, 1.45],
                        "2": [74.03, 1.54],
                        "3": [92.38, 1.75],
                        "4": [49.75, 1.62],
                        "5": [70.56, 1.82],
                        "6": [77.56, 2.31],
                        "7": [81.91, 1.49],
                        "8": [46.15, 2.3],
                        "9": [66.91, 2.14],
                        "10": [60, 1.98],
                        "11": [52.79, 2.16],
                        "12": [56.61, 1.84],
                        "13": [88.99, 1.87],
                        "14": [85, 2.05],
                        "15": [63.93, 1.5],
                        "16": [16.23, 1.7],
                        "17": [37.16, 1.53],
                        "18": [30.2, 1.96],
                        "19": [23.27, 1.52],
                        "20": [26.67, 1.57],
                        "21": [40.31, 1.62],
                        "22": [9.44, 1.4],
                        "23": [33.93, 1.48],
                        "24": [12.73, 1.7],
                        "25": [19.4, 1.74]
                    }
                }, {
                    name: "dingdongdang",
                    path: "<?php echo($root); ?>sounds/",
                }, {
                    name: "Cartoon_Boing",
                    path: "<?php echo($root); ?>sounds/",
                }],
                path: "<?php echo($root); ?>sounds/Reihe 9/",
                preload: true,
                volume: 1.0,
                multiplay: false,
                ended_callback: function (obj) {
                    /* 재생이 끝날 때 2번 이상이면 번역 보이기 */
                    hmn = obj.part;
                    hm[hmn]++;
                    /* 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기 */
                    if (obj.part == "0") {
                        $("#0").show();
                        $("#0_p").hide();
                        if (hm[hmn] > 1) {
                            $(".tran").show();
                        }
                    } else {
                        if (obj.part < 0) {
                            $("#" + obj.part).html("▶");
                        }
                        if (hm[hmn] > 1) {
                            $("#" + hmn).closest(".btn")
                                .find(".tran").show();
                        }
                    }
                },
                ready_callback: function () {
                    $(".o").on("click", function () {
                        ion.sound.play(
                            "dingdongdang");
                    });
                    $(".x").on("click", function () {
                        ion.sound.play(
                            "Cartoon_Boing");
                    });
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
                    $(".so").on("click", function () {
                        if ($(this).attr("id")
                            .substr(-2) == "_p") {
                            /* _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause(
                            "r9 B3", {
                                part: "0"
                            });
                            $("#0").show();
                            $(this).hide();
                        } else if ($(this).html() ==
                            "▶") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.play(
                            "r9 B3", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            $(this).html("❚❚");
                        } else if ($(this).html() ==
                            "❚❚") {
                            /* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
                            ion.sound.pause(
                            "r9 B3", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            $(this).html("▶");
                        } else {
                            /* _p 붙어 있지 않으면 id 그대로 재생 */
                            ion.sound.play(
                            "r9 B3", {
                                part: $(
                                        this)
                                    .attr(
                                        "id"
                                        )
                            });
                            /* 전체 듣기 재생일 때는 일시정지 버튼 보이기 */
                            if ($(this).attr(
                                "id") == "0") {
                                $(this).hide();
                                $("#0_p").show();
                            };
                        };
                    });

                    <?php require "wahl.php"; ?>
                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($("#wahl").visibility !=
                            "visible" && $(this)
                            .attr("id") == "chk") {
                            $(this).attr("id",
                                "done");
                            $(".tran").show();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            $(".itm-lst").each(
                                function () {
                                    $(this)
                                        .find(
                                            ".so"
                                            )
                                        .addClass(
                                            "okay"
                                            );
                                });

                            var qa = $(
                                    ".itm-lst>.so")
                                .length; /* 전체 문항 수 */
                            var qr = $(".okay")
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

                        }
                    });

                    /* 미리 답 넣어놓기 */
                    var pan = new Array();
                    /* pan = []; */
                    pan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                    var il = $("#itms>.itm").length;
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#lst-" + pan[p];
                        $(".itm").each(function () {
                            if ($(this).hasClass(
                                    "ans" + pan[p]
                                    )) {
                                $("#" + $(this)
                                        .attr("id"))
                                    .appendTo($(
                                        "#lst-" +
                                        pan[p]));
                                $("#" + $(this)
                                        .attr("id"))
                                    .addClass(
                                        "btn-block btn-light"
                                        );
                                $("#lst-" + pan[p] +
                                        ">h2")
                                    .remove();
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
