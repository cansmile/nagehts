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
                                    <button
                                        class="btn btn-outline-danger mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse1"
                                        area-expanded="false"
                                        aria-controls="collapse1" id="1">
                                        <strong>F1. unbestimmter Artikel im
                                            Nominativ und Akkusativ</strong>
                                        <small>주격 및 목적격 부정관사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse1"
                                aria-divledby="heading1"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless text-justify align-middle">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="1"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row" rowspan="3">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="2"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Was <strong>ist</strong>
                                                        das?</div>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="3"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist <span
                                                            class="bg-secondary text-white px-2"><strong>ein</strong></span>
                                                        Computer.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="4"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist <span
                                                            class="bg-secondary text-white px-2"><strong>eine</strong></span>
                                                        Uhr.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="5"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist <span
                                                            class="bg-secondary text-white px-2"><strong>ein</strong></span>
                                                        Smartphone.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="6"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row" rowspan="3">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="7"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Was
                                                        <strong>haben</strong>
                                                        Sie?</div>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="8"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ich habe <span
                                                            class="bg-secondary text-white px-2"><strong>einen</strong></span>
                                                        Computer.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="9"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ich habe <span
                                                            class="bg-secondary text-white px-2"><strong>eine</strong></span>
                                                        Uhr.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="10"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ich habe <span
                                                            class="bg-secondary text-white px-2"><strong>ein</strong></span>
                                                        Smartphone.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table
                                    class="table table-borderless table-striped text-center table-sm">
                                    <tbody>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th class="text-primary"
                                                scope="col">m</th>
                                            <th class="text-danger" scope="col">
                                                f</th>
                                            <th class="text-purple" scope="col">
                                                n</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nominativ</th>
                                            <td class="text-primary">ein
                                                Computer</td>
                                            <td class="text-danger">eine Uhr
                                            </td>
                                            <td class="text-purple">ein
                                                Smartphone</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ</th>
                                            <td class="text-primary">einen
                                                Computer</td>
                                            <td class="text-danger">eine Uhr
                                            </td>
                                            <td class="text-purple">ein
                                                Smartphone</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-orange mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse2"
                                        area-expanded="false"
                                        aria-controls="collapse2" id="2">
                                        <strong>F2. bestimmter Artikel im
                                            Nominativ und Akkusativ</strong>
                                        <small>주격 및 목적격 정관사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2"
                                aria-divledby="heading2"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless align-middle">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="11"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="12"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Hier ist der Computer.
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="13"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ich habe den Computer.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="14"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Hier ist die Uhr.</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="15"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ich habe die Uhr.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="16"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Hier ist das Smartphone.
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="17"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ich habe das Smartphone.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table
                                    class="table table-borderless table-striped text-center table-sm">
                                    <tbody>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th class="text-primary"
                                                scope="col">m</th>
                                            <th class="text-danger" scope="col">
                                                f</th>
                                            <th class="text-purple" scope="col">
                                                n</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nominativ</th>
                                            <td class="text-primary">der
                                                Computer</td>
                                            <td class="text-danger">die Uhr</td>
                                            <td class="text-purple">das
                                                Smartphone</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Akkusativ</th>
                                            <td class="text-primary">den
                                                Computer</td>
                                            <td class="text-danger">die Uhr</td>
                                            <td class="text-purple">das
                                                Smartphone</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-warning mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse3"
                                        area-expanded="false"
                                        aria-controls="collapse3" id="3">
                                        <strong>F3. Verbkonjugation von haben
                                            und sein</strong> <small>haben과
                                            sein의 동사변화</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse3"
                                aria-divledby="heading3"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless text-center table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th scope="col">haben</th>
                                            <th scope="col">sein</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ich</th>
                                            <td>habe</td>
                                            <td>bin</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">du</th>
                                            <td>hast</td>
                                            <td>bist</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">er/sie/es</th>
                                            <td>hat</td>
                                            <td>ist</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">wir</th>
                                            <td>haben</td>
                                            <td>sind</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ihr</th>
                                            <td>habt</td>
                                            <td>seid</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">sie/Sie</th>
                                            <td>haben</td>
                                            <td>sind</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-primary mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse4"
                                        area-expanded="false"
                                        aria-controls="collapse4" id="4">
                                        <strong>F4. Negation: kein / keine /
                                            nicht</strong> <small>부정어: kein /
                                            keine / nicht</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse4"
                                aria-divledby="heading4"
                                data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="18"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="19"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Auf Ullungdo gibt es
                                                        <strong>keine</strong>
                                                        Universität.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="20"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Karla ist
                                                        <strong>keine</strong>
                                                        Telefonistin, sondern
                                                        Sekretärin.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="21"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Er ist
                                                        <strong>kein</strong>
                                                        Engländer, sondern
                                                        Amerikaner.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="22"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Sim Chung ist
                                                        <strong>nicht</strong>
                                                        alt.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-purple mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse5"
                                        area-expanded="false"
                                        aria-controls="collapse5" id="5">
                                        <strong>F5. Personalpronomen im
                                            Nominativ</strong> <small>주격
                                            인칭대명사</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse5"
                                aria-divledby="heading5"
                                data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="23"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="24"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist <u>der
                                                            Schrank</u>?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="25"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - <strong>Er</strong>
                                                        ist schön.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="26"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist <u>die Uhr</u>?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="bu
													tton" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - <strong>Sie</strong>
                                                        ist altmodisch.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="28"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist <u>das
                                                            Regal</u>?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="29"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - <strong>Es</strong>
                                                        ist klein.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-pink mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse6"
                                        area-expanded="false"
                                        aria-controls="collapse6" id="6">
                                        <strong>F6. Redewendungen</strong>
                                        <small>어휘와 숙어</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse6"
                                aria-divledby="heading6"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless text-left bg-light">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="30"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie wohnen Sie?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="31"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ich wohne in einem
                                                        Apartment.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="32"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie heißt das Zimmer?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="33"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist ein
                                                        Wohnzimmer.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="34"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Was ist das?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="35"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist ein
                                                        Kugelschreiber.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="36"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie heißt das auf
                                                        Deutsch?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="37"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist ein Foto.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="38"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Das ist eine Kamera.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="39"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie viele Zimmer hat
                                                        Ihre Wohnung?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="40"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Sie hat 3 Zimmer, ein
                                                        Wohnzimmer, ein
                                                        Schlafzimmer und ein
                                                        Kinderzimmer.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-left">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="41"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Was hast du in deiner
                                                        Schultasche?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="42"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ich habe einen
                                                        Kugelschreiber, ein Buch
                                                        und Büroklammern.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="43"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ist das ein Schrank?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="44"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Nein, das ist kein
                                                        Schrank.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="45"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Das ist ein Regal.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="46"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ist das eine Vase?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="47"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Nein, das ist keine
                                                        Vase. Das ist ein Glas.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="48"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ist die Vase klein?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="49"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Nein, die Vase/sie ist
                                                        nicht klein.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table
                                    class="table table-borderless text-left bg-light">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="50"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Ich habe einen Computer,
                                                        eine Uhr und ein Regal.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="51"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Er hat keinen
                                                        Computertisch, keine
                                                        Brille und kein Handy.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-left">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="52"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist das Wohnzimmer?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="53"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Es ist
                                                        dunkel/hell/schön/modisch/altmodisch...
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table
                                    class="table table-borderless text-left bg-light">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="54"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Das ist ein Stuhl. Er
                                                        kostet 77 Euro.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-left">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="55"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist Ihre Adresse?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="56"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Meine Adresse ist ...
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="57"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist deine
                                                        Telefonnummer?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="58"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Meine Telefonnummer
                                                        ist ...</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="59"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        Wie ist ihre
                                                        Handynummer?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="60"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-10 mx-1 px-1 lh250">
                                                        - Ihre Handynummer ist
                                                        ...</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

                src: ["./<?php echo($root); ?>sounds/Reihe 4/r4 F.mp3"],
                sprite: {
                    "1": [8878, 12771],
                    "2": [8878, 2716],
                    "3": [11785, 2576],
                    "4": [14995, 2926],
                    "5": [18724, 2876],
                    "6": [22413, 12371],
                    "7": [22413, 2708],
                    "8": [25175, 3239],
                    "9": [28809, 2209],
                    "10": [32031, 2682],
                    "11": [43395, 20791],
                    "12": [43395, 3260],
                    "13": [47296, 2786],
                    "14": [51053, 2548],
                    "15": [54560, 2151],
                    "16": [58120, 2681],
                    "17": [61236, 2187],
                    "18": [73585, 20618],
                    "19": [73585, 4769],
                    "20": [78050, 5091],
                    "21": [85031, 5063],
                    "22": [90746, 3287],
                    "23": [100598, 18388],
                    "24": [100598, 3079],
                    "25": [103673, 2749],
                    "26": [107319, 2205],
                    "27": [109829, 2703],
                    "28": [113962, 2391],
                    "29": [116567, 2194],
                    "30": [124556, 1424],
                    "31": [126959, 2559],
                    "32": [130795, 1918],
                    "33": [133321, 2146],
                    "34": [136834, 1560],
                    "35": [138627, 2341],
                    "36": [142348, 2227],
                    "37": [144849, 2324],
                    "38": [147546, 2072],
                    "39": [150927, 2367],
                    "40": [153823, 7067],
                    "41": [161868, 2747],
                    "42": [165046, 5662],
                    "43": [171618, 1849],
                    "44": [173804, 2627],
                    "45": [176717, 1628],
                    "46": [180205, 1843],
                    "47": [182548, 4632],
                    "48": [188690, 1765],
                    "49": [181008, 4599],
                    "50": [197111, 5295],
                    "51": [204007, 5363],
                    "52": [211039, 1772],
                    "53": [213793, 9456],
                    "54": [225183, 5391],
                    "55": [232305, 1805],
                    "56": [235070, 1802],
                    "57": [238244, 1973],
                    "58": [241283, 2081],
                    "59": [244799, 1812],
                    "60": [247799, 1840]
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
