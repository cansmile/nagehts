<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
    <div class="container">
        <div class="row">
            <div class="bg-<?php echo( $color ); ?> wahl_title col-12">
                Wahl
            </div>
            <div class="col-12" id="itms">
                <button type="button" id="1" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm">
                    der se<strong>ch</strong>zehnte
                </button>
                <button type="button" id="2" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm">
                    der zwölfte
                </button>
                <button type="button" id="3" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm">
                    der zweiundzwanzigste
                </button>
                <button type="button" id="4" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm">
                    der fünfte
                </button>
                <button type="button" id="5" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm">
                    der achtundzwanzigste
                </button>
                <button type="button" id="6" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm">
                    der neunte
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
                <h2> Sie und ergänzen Sie.<br>
                    <small>듣고 채우세요.</small><button type="button" class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so" id="0">
                        HV
                    </button>
                </h2>
                <h3>[ <small>
                        <button type="button"
                                class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                        </button>
                        버튼 또는
                        <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button>
                        버튼을 눌러 듣고 각 항목에 맞는 단어를 짝지우세요.</small> ]
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless text-center">
                    <tbody>
                    <tr>
                        <td>
                            <div class="bg-lime text-black rounded py-2">
                                <strong>Grundzahlen und Ordnungszahlen</strong>
                                <span class="tran"><br/><small>기수와 서수</small></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th scope="row" width="50">1
                        </td>
                        <td width="50">
                            <button type="button" id="eins" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>eins</td>
                        <td width="50">
                            <button type="button" id="erste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der erste</td>
                    </tr>
                    <tr>
                        <th scope="row">2
                        </td>
                        <td>
                            <button type="button" id="zwei" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>zwei</td>
                        <td>
                            <button type="button" id="zweite" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der zweite</td>
                    </tr>
                    <tr>
                        <th scope="row">3
                        </td>
                        <td>
                            <button type="button" id="drei" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>drei</td>
                        <td>
                            <button type="button" id="dritte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der dritte</td>
                    </tr>
                    <tr>
                        <th scope="row">4
                        </td>
                        <td>
                            <button type="button" id="vier" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>vier</td>
                        <td>
                            <button type="button" id="vierte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der vierte</td>
                    </tr>
                    <tr>
                        <th scope="row">5
                        </td>
                        <td>
                            <button type="button" id="fünf" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>fünf</td>
                        <td>
                            <button type="button" id="fünfte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-1">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6
                        </td>
                        <td>
                            <button type="button" id="sechs" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>sechs</td>
                        <td>
                            <button type="button" id="sechste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der sechs<strong>te</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">7
                        </td>
                        <td>
                            <button type="button" id="sieben" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>sieben</td>
                        <td>
                            <button type="button" id="siebte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der sieb<strong>te</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">8
                        </td>
                        <td>
                            <button type="button" id="acht" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>acht</td>
                        <td>
                            <button type="button" id="achte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der achte</td>
                    </tr>
                    <tr>
                        <th scope="row">9
                        </td>
                        <td>
                            <button type="button" id="neun" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>neun</td>
                        <td>
                            <button type="button" id="neunte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-2">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10
                        </td>
                        <td>
                            <button type="button" id="zehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>zehn</td>
                        <td>
                            <button type="button" id="zehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der zehnte</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th scope="row" width="50">11
                        </td>
                        <td width="50">
                            <button type="button" id="elf"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>elf</td>
                        <td width="50">
                            <button type="button" id="elfte"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der elfte</td>
                    </tr>
                    <tr>
                        <th scope="row">12
                        </td>
                        <td>
                            <button type="button" id="zwölf" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>zwölf</td>
                        <td>
                            <button type="button" id="zwölfte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-3">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">13
                        </td>
                        <td>
                            <button type="button" id="derizehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>dreizehn</td>
                        <td>
                            <button type="button" id="dreizehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der dreizehnte</td>
                    </tr>
                    <tr>
                        <th scope="row">14
                        </td>
                        <td>
                            <button type="button" id="vierzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>vierzehn</td>
                        <td>
                            <button type="button" id="vierzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der vierzehnte</td>
                    </tr>
                    <tr>
                        <th scope="row">15
                        </td>
                        <td>
                            <button type="button" id="fünfzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>fünfzehn</td>
                        <td>
                            <button type="button" id="fünfzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der fünfzehnte</td>
                    </tr>
                    <tr>
                        <th scope="row">16
                        </td>
                        <td>
                            <button type="button" id="sechzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>se<strong>ch</strong>zehn</td>
                        <td>
                            <button type="button" id="sechzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-4">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">17
                        </td>
                        <td>
                            <button type="button" id="siebzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>sie<strong>b</strong>zehn</td>
                        <td>
                            <button type="button" id="siebzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der sie<strong>b</strong>zehnte</td>
                    </tr>
                    <tr>
                        <th scope="row">18
                        </td>
                        <td>
                            <button type="button" id="achtzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>achtzehn</td>
                        <td>
                            <button type="button" id="achtzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der achtzehnte</td>
                    </tr>
                    <tr>
                        <th scope="row">19
                        </td>
                        <td>
                            <button type="button" id="neunzehn" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>neunzehn</td>
                        <td>
                            <button type="button" id="neunzehnte" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der neunzehnte</td>
                    </tr>
                    <th scope="row">20
                    </td>
                    <td>
                        <button type="button" id="zwanzig" class="so btn btn-outline-danger">▶</button>
                    </td>
                    <td>zwanzig</td>
                    <td>
                        <button type="button" id="zwanzigste" class="so btn btn-outline-danger">▶</button>
                    </td>
                    <td>der zwanzig<strong>ste</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th scope="row" width="50">21
                        </td>
                        <td width="50">
                            <button type="button" id="einundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>einundzwanzig</td>
                        <td width="50">
                            <button type="button" id="einundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der einundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">22
                        </td>
                        <td>
                            <button type="button" id="zweiundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>zweiundzwanzig</td>
                        <td>
                            <button type="button" id="zweiundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-5">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">23
                        </td>
                        <td>
                            <button type="button" id="dreiundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>dreiundzwanzig</td>
                        <td>
                            <button type="button" id="dreiundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der dreiundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">24
                        </td>
                        <td>
                            <button type="button" id="vierundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>vierundzwanzig</td>
                        <td>
                            <button type="button" id="vierundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der vierundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">25
                        </td>
                        <td>
                            <button type="button" id="fünfundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>fünfundzwanzig</td>
                        <td>
                            <button type="button" id="fünfundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der fünfundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">26
                        </td>
                        <td>
                            <button type="button" id="sechsundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>sechsundzwanzig</td>
                        <td>
                            <button type="button" id="sechsundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der sechsundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">27
                        </td>
                        <td>
                            <button type="button" id="siebenundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>siebenundzwanzig</td>
                        <td>
                            <button type="button" id="siebenundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der siebenundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">28
                        </td>
                        <td>
                            <button type="button" id="achtundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>achtundzwanzig</td>
                        <td>
                            <button type="button" id="achtundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>
                            <div class="itm-lst 1itm" id="lst-6">
                                <h2 class="btn btn-warning btn-xl ttl w-100">
                                    ▼ </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">29
                        </td>
                        <td>
                            <button type="button" id="neunundzwanzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>neunundzwanzig</td>
                        <td>
                            <button type="button" id="neunundzwanzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der neunundzwanzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">30
                        </td>
                        <td>
                            <button type="button" id="dreißig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>dreißig</td>
                        <td>
                            <button type="button" id="dreißigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der dreißigste</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th scope="row" width="50">40
                        </td>
                        <td width="50">
                            <button type="button" id="vierzig"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>vierzig</td>
                        <td width="50">
                            <button type="button" id="vierzigste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der vierzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">50
                        </td>
                        <td>
                            <button type="button" id="fünfzig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>fünfzig</td>
                        <td>
                            <button type="button" id="fünfzigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der fünfzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">60
                        </td>
                        <td>
                            <button type="button" id="sechzig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>sechzig</td>
                        <td>
                            <button type="button" id="sechzigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der sechzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">70
                        </td>
                        <td>
                            <button type="button" id="siebzig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>siebzig</td>
                        <td>
                            <button type="button" id="siebzigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der siebzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">80
                        </td>
                        <td>
                            <button type="button" id="achtzig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>achtzig</td>
                        <td>
                            <button type="button" id="achtzigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der achtzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">90
                        </td>
                        <td>
                            <button type="button" id="neunzig" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>neunzig</td>
                        <td>
                            <button type="button" id="neunzigste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der neunzigste</td>
                    </tr>
                    <tr>
                        <th scope="row">100
                        </td>
                        <td>
                            <button type="button" id="hundert" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>hundert</td>
                        <td>
                            <button type="button" id="hundertste" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>der (ein)hundertste</td>
                    </tr>
                    <tr>
                        <th scope="row">101
                        </td>
                        <td>
                            <button type="button" id="hunderteins" class="so btn btn-outline-danger">▶</button>
                        </td>
                        <td>hunderteins</td>
                        <td>
                            <button type="button" id="hunderteinste"
                                    class="so btn btn-outline-danger">▶
                            </button>
                        </td>
                        <td>der (ein)hunderteinste</td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td>
                            <div class="bg-lime text-black rounded py-2 text-center">
                                <strong>Monate und
                                    Jahreszeiten</strong><span class="tran"><br><small>달과
                                                계절</small></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th class="align-middle" scope="row" rowspan="3" width="50">
                            <button type="button"
                                    id="Frühling" class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td rowspan="3" class="align-middle text-center">der
                            Frühling
                        </td>
                        <th scope="row" width="50">
                            <button type="button" id="März"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der März</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="April"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der April</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="Mai"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Mai</td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row" rowspan="3">
                            <button type="button" id="Sommer"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td rowspan="3" class="align-middle text-center">der Sommer
                        </td>
                        <th scope="row">
                            <button type="button" id="Juni"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Juni</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="Juli"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Juli</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="August"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der August</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0">
                <table class="table table-borderless my-0">
                    <tbody>
                    <tr>
                        <th class="align-middle" scope="row" rowspan="3" width="50">
                            <button type="button"
                                    id="Herbst" class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td rowspan="3" class="align-middle text-center">der Herbst
                        </td>
                        <th scope="row" width="50">
                            <button type="button" id="September"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der September</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="Oktober"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Oktober</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="November"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der November</td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row" rowspan="3">
                            <button type="button" id="Winter"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td rowspan="3" class="align-middle text-center">der Winter
                        </td>
                        <th scope="row">
                            <button type="button" id="Dezember"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Dezember</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="Januar"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Januar</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" id="Februar"
                                    class="so btn btn-outline-primary">▶
                            </button>
                        </th>
                        <td>der Februar</td>
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

<div id="marg"></div>
<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/taptogrouph.js"></script>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
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
            src: ["./dev/sounds/Reihe 9/r9 AGR.mp3"],
            sprite: {
                "0": [0, 315795],
                "1": [174391, 2289],
                "2": [160454, 1958],
                "3": [198526, 2871],
                "4": [135688, 1838],
                "5": [223936, 2889],
                "6": [150035, 1777],
                "7": [5448, 258557],
                "8": [264150, 51064],
                "acht": [24615, 1310],
                "achte": [146340, 1895],
                "achtundzwanzig": [83305, 1995],
                "achtundzwanzigste": [223936, 2889],
                "achtzehn": [52111, 1943],
                "achtzehnte": [181906, 2301],
                "achtzig": [105533, 1674],
                "achtzigste": [249142, 2183],
                "April": [277518, 1779],
                "August": [288282, 1734],
                "derizehn": [37954, 1635],
                "Dezember": [299238, 1771],
                "drei": [12677, 1442],
                "dreiundzwanzig": [66984, 2089],
                "dreiundzwanzigste": [203052, 2990],
                "dreizehnte": [163754, 2316],
                "dreißig": [89862, 1717],
                "dreißigste": [232320, 2121],
                "dritte": [128271, 1865],
                "eins": [8044, 1526],
                "einundzwanzig": [60627, 2055],
                "einundzwanzigste": [194573, 2723],
                "elf": [32199, 1164],
                "elfte": [157044, 1783],
                "erste": [121760, 1694],
                "Februar": [272595, 1891],
                "Frühling": [305060, 1815],
                "fünfundzwanzig": [73633, 2163],
                "fünfundzwanzigste": [211755, 2722],
                "fünf": [17431, 1418],
                "fünfte": [135688, 1838],
                "fünfzehn": [43598, 1822],
                "fünfzehnte": [170580, 2654],
                "fünfzig": [96059, 1471],
                "fünfzigste": [239239, 2153],
                "Herbst": [310935, 1795],
                "hundert": [111543, 1792],
                "hunderteins": [114788, 2071],
                "hunderteinste": [258820, 2284],
                "hundertste": [255739, 2107],
                "Januar": [270140, 1844],
                "Juli": [285498, 1782],
                "Juni": [282647, 1830],
                "Mai": [280192, 1451],
                "März": [275068, 1770],
                "neun": [27091, 1512],
                "neunte": [150035, 1777],
                "neunundzwanzig": [86790, 2117],
                "neunundzwanzigste": [228258, 2833],
                "neunzehn": [54830, 1824],
                "neunzehnte": [186067, 2280],
                "neunzig": [108508, 1925],
                "neunzigste": [252594, 2113],
                "November": [296603, 1785],
                "Oktober": [293890, 1901],
                "sechs": [19621, 1537],
                "sechste": [139343, 1796],
                "sechsundzwanzig": [76962, 2065],
                "sechsundzwanzigste": [216048, 2621],
                "sechzehn": [46416, 1669],
                "sechzehnte": [174391, 2289],
                "sechzig": [99045, 1849],
                "sechzigste": [242594, 2125],
                "September": [291061, 1905],
                "sieben": [21983, 1652],
                "siebenundzwanzig": [80222, 2067],
                "siebenundzwanzigste": [219589, 2865],
                "siebte": [142848, 1713],
                "siebzehn": [49192, 1944],
                "siebzehnte": [177840, 2386],
                "siebzig": [102126, 1795],
                "siebzigste": [246027, 2013],
                "Sommer": [307960, 1638],
                "vier": [15093, 1334],
                "vierte": [131648, 1829],
                "vierundzwanzig": [70278, 1973],
                "vierundzwanzigste": [207466, 2653],
                "vierzehn": [40794, 1568],
                "vierzehnte": [167185, 2320],
                "vierzig": [92697, 1707],
                "vierzigste": [235369, 2256],
                "Winter": [313703, 1589],
                "zehn": [29615, 1474],
                "zehnte": [153284, 1386],
                "zwanzig": [57595, 1573],
                "zwanzigste": [189849, 2510],
                "zwei": [10052, 1680],
                "zweite": [124869, 1989],
                "zweiundzwanzig": [63804, 2164],
                "zweiundzwanzigste": [198526, 2871],
                "zwölf": [34506, 1724],
                "zwölfte": [160454, 1958]
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

                <?php require "wahl.php"; ?>

                /* 정답확인 */
                $("#chk").on("click",
                    function () {
                        var na = "";
                        if ($("#itms").find("button").length < 1) {
                            $(".tran").show();
                            $(".itm-lst").each(function () {
                                $(this).html($(this).find("button").html());
                                $(this).addClass(
                                    "text-success fw-bold"); /* $(this).addClass("fw-bold bg-white border rounded border-dark"); */
                            }); /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".itm-lst").length; /* 전체 문항 수 */
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
                $("#0").show();
                $("#ready").hide();
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
