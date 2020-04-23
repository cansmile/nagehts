<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionitms">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse1" area-expanded="false"
                                        aria-controls="collapse1" id="1">
                                        <strong>H1.
                                            Demonstrativpronomen</strong>
                                        <small>지시대명사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
                                <table class="table table-borderless table-striped text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="20%">&nbsp;
                                            </th>
                                            <th scope="col" width="20%" class="text-primary">m</th>
                                            <th scope="col" width="20%" class="text-danger">f</th>
                                            <th scope="col" width="20%" class="text-purple">n</th>
                                            <th scope="col" width="20%" class="text-khaki">Pl.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span>
                                            </th>
                                            <td class="text-primary">der</td>
                                            <td class="text-danger">die</td>
                                            <td class="text-purple">das</td>
                                            <td class="text-khaki">die</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span>
                                            </th>
                                            <td class="text-primary">den</td>
                                            <td class="text-danger">die</td>
                                            <td class="text-purple">das</td>
                                            <td class="text-khaki">die</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless table-striped" width="80%">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="tipp">TIPP</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><small>지시대명사는 앞에
                                                    언급했던 명사를 다시 지시하며 언급할 때 사용되며,
                                                    각 명사의 성에 해당하는 정관사로
                                                    표현한다.</small></th>
                                        </tr>
                                        <tr>
                                            <td>Isst du gern
                                                Schweinebraten?<br>Ja,
                                                <strong>der</strong> schmeckt
                                                gut.<br><br>
                                                Ich esse gern
                                                Pizza.<br><strong>Die</strong>
                                                ist lecker.<br><br>
                                                Mein Lieblingsessen ist
                                                Hähnchen.<br><strong>Das</strong>
                                                schmeckt sehr gut.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse2" area-expanded="false"
                                        aria-controls="collapse2" id="2">
                                        <strong>H2. bestimmter Artikel</strong>
                                        <small>정관사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
                                <table class="table table-borderless text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="20%">&nbsp;
                                            </th>
                                            <th class="text-primary" scope="col" width="20%">m</th>
                                            <th class="text-danger" scope="col" width="20%">f</th>
                                            <th class="text-purple" scope="col" width="20%">n</th>
                                            <th class="text-khaki" scope="col" width="20%">Pl.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span>
                                            </th>
                                            <td class="text-primary">der Salat
                                            </td>
                                            <td class="text-danger">die Pizza
                                            </td>
                                            <td class="text-purple">das Steak
                                            </td>
                                            <td class="text-khaki">die
                                                Spaghettis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span>
                                            </th>
                                            <td class="text-primary">den Salat
                                            </td>
                                            <td class="text-danger">die Pizza
                                            </td>
                                            <td class="text-purple">das Steak
                                            </td>
                                            <td class="text-khaki">die
                                                Spaghettis</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">Ich bezahle
                                                <strong>den</strong> Salat.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse3" area-expanded="false"
                                        aria-controls="collapse3" id="3">
                                        <strong>H3. unbestimmter
                                            Artikel</strong>
                                        <small>부정(不定)관사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
                                <table class="table table-borderless text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="25%">&nbsp;
                                            </th>
                                            <th class="text-primary" scope="col" width="25%">m</th>
                                            <th class="text-danger" scope="col" width="25%">f</th>
                                            <th class="text-purple" scope="col" width="25%">n</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span>
                                            </th>
                                            <td class="text-primary">ein Salat
                                            </td>
                                            <td class="text-danger">eine Pizza
                                            </td>
                                            <td class="text-purple">ein Steak
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span>
                                            </th>
                                            <td class="text-primary">
                                                <strong>einen</strong> Salat
                                            </td>
                                            <td class="text-danger">eine Pizza
                                            </td>
                                            <td class="text-purple">ein Steak
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Ich bekomme einen
                                                Salat.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse4" area-expanded="false"
                                        aria-controls="collapse4" id="4">
                                        <strong>H4. negativer Artikel</strong>
                                        <small>부정(否定)관사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
                                <table class="table table-borderless text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="20%">&nbsp;
                                            </th>
                                            <th class="text-primary" scope="col" width="20%">m</th>
                                            <th class="text-danger" scope="col" width="20%">f</th>
                                            <th class="text-purple" scope="col" width="20%">n</th>
                                            <th class="text-khaki" scope="col" width="20%">Pl.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span>
                                            </th>
                                            <td class="text-primary">kein Salat
                                            </td>
                                            <td class="text-danger">keine Pizza
                                            </td>
                                            <td class="text-purple">kein Steak
                                            </td>
                                            <td class="text-khaki">keine
                                                Spaghettis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span>
                                            </th>
                                            <td class="text-primary">keinen
                                                Salat</td>
                                            <td class="text-danger">keine Pizza
                                            </td>
                                            <td class="text-purple">kein Steak
                                            </td>
                                            <td class="text-khaki">keine
                                                Spaghettis</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">Ich nehme
                                                <strong>keinen</strong> Salat.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse5" area-expanded="false"
                                        aria-controls="collapse5" id="5">
                                        <strong>H5. Verbkonjugation: essen,
                                            trinken, nehmen, bekommen,
                                            möchten</strong> <small>동사의
                                            변화</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
                                <table class="table table-borderless text-center table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th scope="col">essen</th>
                                            <th scope="col">trinken</th>
                                            <th scope="col">nehmen</th>
                                            <th scope="col">bekommen</th>
                                            <th scope="col">möchten</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ich</th>
                                            <td>ess<strong>e</strong></td>
                                            <td>trink<strong>e</strong></td>
                                            <td>nehm<strong>e</strong></td>
                                            <td>bekomm<strong>e</strong></td>
                                            <td>möcht<strong>e</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">du</th>
                                            <td><strong>i</strong>ss<strong>t</strong>
                                            </td>
                                            <td>trink<strong>st</strong></td>
                                            <td>n<strong>immst</strong></td>
                                            <td>bekomm<strong>st</strong></td>
                                            <td>möchte<strong>st</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">er/sie/es</th>
                                            <td><strong>i</strong>ss<strong>t</strong>
                                            </td>
                                            <td>trink<strong>t</strong></td>
                                            <td>nimm<strong>t</strong></td>
                                            <td>bekomm<strong>t</strong></td>
                                            <td>möcht<strong>e</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">wir</th>
                                            <td>ess<strong>en</strong></td>
                                            <td>trink<strong>en</strong></td>
                                            <td>nehm<strong>en</strong></td>
                                            <td>bekomm<strong>en</strong></td>
                                            <td>möcht<strong>en</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ihr</th>
                                            <td>ess<strong>t</strong></td>
                                            <td>trink<strong>t</strong></td>
                                            <td>nehm<strong>t</strong></td>
                                            <td>bekomm<strong>t</strong></td>
                                            <td>möcht<strong>et</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">sie/Sie</th>
                                            <td>ess<strong>en</strong></td>
                                            <td>trink<strong>en</strong></td>
                                            <td>nehm<strong>en</strong></td>
                                            <td>bekomm<strong>en</strong></td>
                                            <td>möcht<strong>en</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-pink mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse6" area-expanded="false"
                                        aria-controls="collapse6" id="6">
                                        <strong>H6. Redewendungen</strong>
                                        <small>어휘와 숙어</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse6" aria-divledby="heading6" data-parent="#accordionitms">
                                <table class="table table-borderless text-left bg-light">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2" colspan="2"><button
                                                    type="button" id="1"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="2"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Was isst/ trinkst du
                                                        gern?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="3"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Ich esse / trinke gern
                                                        ...</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="4"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Was ist dein
                                                        Lieblingsessen/
                                                        Lieblingsgetränk?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="5"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Mein Lieblingsessen/
                                                        Lieblingsgetränk ist ...
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-left">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2" colspan="2"><button
                                                    type="button" id="6"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="7"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Isst/ Trinkst du gern
                                                        ... ?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="8"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Ja, ich esse/ trinke
                                                        gern ...</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="9"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        <span class="text-white">
                                                        </span>Nein, ich esse/
                                                        trinke nicht so gern ...
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="10"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        <span class="text-white">
                                                        </span>Nein, ich mag
                                                        keinen, keine, kein,
                                                        keine ....</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-left bg-light">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2" colspan="2"><button
                                                    type="button" id="11"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="12"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Was möchtest du?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="13"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Ich möchte/ nehme/
                                                        esse/ trinke</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="14"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Was nimmst du?</div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="</div>mx-1 px-1">
                                                        <button type="button" id="15"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        <span class="text-light">
                                                        </span>Einen/ Eine / Ein
                                                        ...</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1 mx-1 px-1">
                                                        <button type="button" id="16"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div class="col-9 mx-1 px-1 my-auto lh250">
                                                        Was darf es sein?</div>
                                            </td>
                                            <td>
                            </div>&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>
                            <table class="table table-borderless text-left">
                                <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2" colspan="2"><button type="button"
                                                id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-1 mx-1 px-1">
                                                    <button type="button" id="18"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-9 mx-1 px-1 my-auto lh250">
                                                    Was isst du gern?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-1 mx-1 px-1">
                                                    <button type="button" id="19"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-9 mx-1 px-1 my-auto lh250">
                                                    Ich esse gern ...</div>
                                        </td>
                        </div>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-1 mx-1 px-1">
                                        <button type="button" id="20"
                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    </div>
                                    <div class="col-9 mx-1 px-1 my-auto lh250">Was
                                        trinkst du gern?</div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-1 mx-1 px-1">
                                        <button type="button" id="21"
                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    </div>
                                    <div class="col-9 mx-1 px-1 my-auto lh250"> Ich
                                        trinke gern ...</div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                        <table class="table table-borderless text-left bg-light">
                            <tbody>
                                <tr>
                                    <th class="text-center align-middle m-2 p-2" colspan="2"><button type="button"
                                            id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    </th>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">
                                                <button type="button" id="23"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </div>
                                            <div class="col-9 mx-1 px-1 my-auto lh250">
                                                Was bezahlen Sie?</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">
                                                <button type="button" id="24"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </div>
                                            <div class="col-9 mx-1 px-1 my-auto lh250">
                                                Ich bezahle den/ die/ das ...
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless text-left">
                            <tbody>
                                <tr>
                                    <th class="text-center align-middle m-2 p-2" colspan="2"><button type="button"
                                            id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                    </th>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">
                                                <button type="button" id="26"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </div>
                                            <div class="col-9 mx-1 px-1 my-auto lh250">
                                                Zusammen oder getrennt?</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">
                                                <button type="button" id="27"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </div>
                                            <div class="col-9 mx-1 px-1 my-auto lh250">
                                                Zusammen / Getrennt, bitte.
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">
                                                <button type="button" id="28"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </div>
                                            <div class="col-9 mx-1 px-1 my-auto lh250">
                                                Stimmt so.</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1 mx-1 px-1">&nbsp;</div>
                                            <div class="col-9 mx-1 px-1 my-auto">Vielen Dank.</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="last" class="d-none"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <script>
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
                he[ti] = t.height();
            }

        );

        function stopAll() {
            $(".so").each(function () {
                    $(this).html(pa[$(this).attr("id")]);
                }

            );
        }

        var nagehts = new Howl({

                src: ["./<?php echo($root); ?>sounds/Reihe 5/r5 H.mp3"],
                sprite: {
                    "1": [4875, 15966],
                    "2": [4875, 3120],
                    "3": [8332, 2514],
                    "4": [12209, 4155],
                    "5": [16929, 3871],
                    "6": [21871, 19101],
                    "7": [21871, 2635],
                    "8": [25032, 3496],
                    "9": [29228, 4448],
                    "10": [34752, 6182],
                    "11": [42208, 19449],
                    "12": [42208, 2027],
                    "13": [44673, 6580],
                    "14": [56831, 2001],
                    "15": [51279, 4438],
                    "16": [59607, 2086],
                    "17": [63000, 11224],
                    "18": [63000, 1923],
                    "19": [65636, 2195],
                    "20": [68662, 2190],
                    "21": [71804, 2067],
                    "22": [75141, 8353],
                    "23": [75141, 2123],
                    "24": [78238, 5101],
                    "25": [84437, 11008],
                    "26": [84437, 2342],
                    "27": [87621, 5410],
                    "28": [93548, 1795]
                }

                ,
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                        $(".alert").append(
                            "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                        console.log("다시 읽어주세요!");
                    }

                    ,
                onload: function () {
                        /* 음성 준비되면 HV 버튼 나타내기 */
                        $("#whole").show();
                        $("#alt").hide();

                        /* $(".alert").hide(); */
                        $(".so").on("click", function (idx) {
                                var t = $(this);
                                var ti = t.attr("id");

                                if ($("div#last").text() == "" || t
                                    .text() == "❚❚") {
                                    $("#last").text(ti);
                                    t.text("■");
                                    nagehts.seek();
                                    nagehts.play(ti);
                                    sen[ti]++;

                                    last = ti;

                                    $("#cnt-" + ti).text(sen[ti]);
                                } else if (last == ti && nagehts
                                    .playing($("div#last").text())) {
                                    $("#last").text("");
                                    t.html(pa[ti]);
                                    nagehts.pause();
                                    sen[ti]--;
                                    $("#cnt-" + ti).text(sen[ti]);
                                }
                            }

                        );
                    }

                    ,
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);

                    if (sen[last] == 2) {
                        $("#" + last).find(".tran").show();
                    }
                }
            }

        );

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
