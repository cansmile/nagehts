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
                                        <strong>F1. W-Fragen und
                                            Antworten</strong> <small>W-의문사와
                                            대답</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse1"
                                aria-divledby="heading1"
                                data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="1"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="col"
                                            width="50%">질문</th>
                                        <th class="text-center bg-light"
                                            scope="col">대답</th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="2"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    <strong>Woher</strong>
                                                    kommen Sie?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="3"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich komme
                                                    <strong>aus</strong>
                                                    Deutschland.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="4"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    <strong>Wo</strong> wohnen
                                                    Sie?</div>
                                            </div>
                                            </th>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="5"
                                                        class="so btd btn-outline-dark btn-sm mr-2 my-auto">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich wohne
                                                    <strong>in</strong> München.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="6"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    <strong>Welche</strong>
                                                    Sprachen sprechen Sie?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="7"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich spreche Detusch und
                                                    Englisch.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="8"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    <strong>Wo</strong> liegt
                                                    Ghana?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="9"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ghana liegt
                                                    <strong>in</strong>
                                                    Westafrika.</div>
                                            </div>
                                        </td>
                                    </tr>
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
                                        <strong>F2. Ja / Nein Fragen und
                                            Antworten</strong>
                                        <small>예/아니요-질문</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2"
                                aria-divledby="heading2"
                                data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class="text-center align-middle m-2 p-2"
                                                colspan="2"><button
                                                    type="button" id="10"
                                                    class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" scope="col"
                                                width="50%">질문</th>
                                            <th class="text-center bg-light"
                                                scope="col">대답</th>
                                        </tr>
                                        <tr>
                                            <td class="bg-light" scope="row">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="11"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Kommen</strong>
                                                        Sie aus Japan?</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="12"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Ja(Nein)</strong>,
                                                        ich komme
                                                        *<strong>(nicht)</strong>
                                                        aus Japan.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="13"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Wohnen</strong>
                                                        Sie in Seoul?</div>
                                                </div>
                                            </td>
                                            <td class="bg-light">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="14"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Ja(Nein)</strong>,
                                                        ich wohne
                                                        *<strong>(nicht)</strong>
                                                        in Seoul.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light" scope="row">
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="15"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Liegt</strong>
                                                        Frankreich in Europa?
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="mx-1 px-1">
                                                        <button type="button"
                                                            id="16"
                                                            class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                    </div>
                                                    <div
                                                        class="col-8 mx-1 px-1 lh250">
                                                        <strong>Ja</strong>, es
                                                        liegt in Europa.</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="2"
                                                class="text-right">*
                                                nicht<small>는 부정어로서 영어의
                                                </small>not<small>을
                                                    의미한다</small>.</th>
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
                                        <strong>F3. Verbkonjugation</strong>
                                        <small>동사변화</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse3"
                                aria-divledby="heading3"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="20%"
                                                scope="col">Personalpronomen
                                            </th>
                                            <th class="text-center" width="20%"
                                                scope="col">kommen</th>
                                            <th class="text-center" width="20%"
                                                scope="col">wohnen</th>
                                            <th class="text-center" width="20%"
                                                scope="col">sprechen</th>
                                            <th class="text-center" width="20%"
                                                scope="col">liegen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-center" scope="row">
                                                ich</th>
                                            <td>
                                                komm<strong>e</strong></td>
                                            <td>
                                                wohn<strong>e</strong></td>
                                            <td>
                                                sprech<strong>e</td></strong>
                                            <td>
                                                lieg<strong>e</td></strong>
                                        </tr>
                                        <tr>
                                            <th class="text-center" scope="row">
                                                du</th>
                                            <td>
                                                komm<strong>st</strong></td>
                                            <td>
                                                wohn<strong>st</strong></td>
                                            <td>
                                                sprich<strong>st</strong></td>
                                            <td>
                                                lieg<strong>st</strong></td>
                                        </tr>
                                        <tr>
                                            <th class="text-center" scope="row">
                                                er/sie/es</th>
                                            <td>
                                                komm<strong>t</strong></td>
                                            <td>
                                                wohn<strong>t</strong></td>
                                            <td>
                                                sprich<strong>t</strong></td>
                                            <td>
                                                sprich<strong>t</strong></td>
                                        </tr>
                                        <tr>
                                            <th class="text-center" scope="row">
                                                Sie</th>
                                            <td>
                                                komm<strong>en</strong></td>
                                            <td>
                                                komm<strong>en</strong></td>
                                            <td>
                                                sprech<strong>en</strong></td>
                                            <td>
                                                lieg<strong>en</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <thead class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-outline-primary mt-1 mx-1 btn-block"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapse4"
                                        area-expanded="false"
                                        aria-controls="collapse4" id="4">
                                        <strong>F4. Wortstellung</strong>
                                        <small>어순</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse4"
                                aria-divledby="heading4"
                                data-parent="#accordionitms">
                                <table
                                    class="table table-borderless text-center">
                                    <thead>
                                        <tr>
                                            <th width="25%" scope="col">&nbsp;
                                            </th>
                                            <th width="25%" scope="col"
                                                width="33%"><strong>Position
                                                    1</strong></th>
                                            <th width="25%" class="bg-light"
                                                width="33%" scope="col">
                                                <strong>Position 2</strong></th>
                                            <th width="25%" scope="col">&nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                W-Frage<small><br>w-의문문</small>
                                            </th>
                                            <td class="bg-light" scope="row">
                                                <strong>Woher<br>Wo<br>Welche</strong>
                                                Sprachen</td>
                                            <td><strong>kommen<br>wohnst<br>sprechen</strong>
                                            </td>
                                            <td class="bg-light">
                                                <strong>Sie?<br>du?<br>Sie?</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light">
                                                Ja/Nein -
                                                Frage<small><br>예/아니오-의문문</small>
                                            </th>
                                            <td><strong>Kommt<br>Liegt</strong>
                                            </td>
                                            <td class="bg-light">
                                                <strong>er<br>Amerika</strong>
                                            </td>
                                            <td><strong>aus Korea?<br>in
                                                    Nordamerika?</strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Aussagesatz<small><br>평서문</small>
                                            </th>
                                            <td class="bg-light" scope="row">
                                                <strong>Sie<br>Ich</strong></td>
                                            <td><strong>kommt<br>wohne</strong>
                                            </td>
                                            <td class="bg-light"><strong>aus
                                                    Italien.<br>in
                                                    Gwangnaru.</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </thead>
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
                                        <strong>F5. Redewendungen</strong>
                                        <small>어휘와 숙어</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse5"
                                aria-divledby="heading5"
                                data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="17"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="18"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Woher kommen Sie?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="19"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich komme aus Korea.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="20"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Woher kommst du?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="21"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich komme aus Korea.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="22"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Woher kommt sie?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="23"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Sie kommt aus Korea.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-light p-0"
                                            height="5"></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="24"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="25"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Kommen Sie aus Japan?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="26"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), ich komme
                                                    (nicht) aus Japan.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="27"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Kommst du aus Deutschland?
                                                </div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="28"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), ich komme
                                                    (nicht) aus Deutschland.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="29"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Kommt sie aus Italien?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="30"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), sie kommt
                                                    (nicht) aus Italien.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-light p-0"
                                            height="5"></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="31"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wo wohnen Sie?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich wohne in Busan.</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wo wohnst du?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich wohne in Busan.</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wo wohnt er?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Er wohnt in Busan.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-0" height="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="38"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wohnen Sie in Guri?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), ich wohne
                                                    (nicht) in Guri.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="41"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wohnst du in Guri ?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), ich wohne
                                                    (nicht) in Guri.</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wohnt er in Guri?</div>
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja (Nein), er wohnt
                                                    (nicht) in Guri.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-light p-0"
                                            height="5"></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="45"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="46"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">
                                                    Welche Sprachen sprechen
                                                    Sie?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="47"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich spreche Koreanisch,
                                                    Englisch und Deutsch.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="48"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Welche Sprachen sprichst du?
                                                </div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="49"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ich spreche Japanisch.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="50"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Welche Sprachen spricht er?
                                                </div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="51"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Er spricht Japanisch.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-0" height="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2"
                                            colspan="2"><button type="button"
                                                id="52"
                                                class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="53"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Wo liegt Korea?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="54"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Korea liegt in Asien.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button"
                                                        id="55"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Liegt Deutschland in Europa?
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
                                                    class="col-8 mx-1 px-1 lh250">
                                                    Ja, es liegt in Europa.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

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
        });

        function stopAll() {
            $(".so").each(function () {
                $(this).html(pa[$(this).attr("id")]);
            });
        }

        var nagehts = new Howl({
            /* src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 H.mp3"], */
            src: ["./<?php echo($root); ?>sounds/Reihe 2/r2 F.mp3"],
            sprite: {
                "1": [222, 37337],
                "2": [7722, 2012],
                "3": [11499, 2159],
                "4": [15634, 1738],
                "5": [18998, 1866],
                "6": [23166, 2471],
                "7": [27003, 2816],
                "8": [31971, 1849],
                "9": [35036, 2516],
                "10": [38036, 43396],
                "11": [45286, 2178],
                "12": [48494, 8179],
                "13": [59151, 2383],
                "14": [62852, 8510],
                "15": [73330, 2777],
                "16": [77717, 3151],
                "17": [84852, 16278],
                "18": [84852, 2327],
                "19": [87543, 2256],
                "20": [91099, 1896],
                "21": [93543, 2141],
                "22": [96533, 2002],
                "23": [98850, 1777],
                "24": [102270, 33861],
                "25": [102770, 2234],
                "26": [105123, 7467],
                "27": [113888, 2197],
                "28": [116692, 7283],
                "29": [125739, 2356],
                "30": [128746, 7192],
                "31": [137335, 16568],
                "32": [137335, 1788],
                "33": [140216, 1906],
                "34": [143732, 1624],
                "35": [146094, 2080],
                "36": [149699, 1711],
                "37": [152010, 1956],
                "38": [155627, 32733],
                "39": [155627, 2079],
                "40": [158662, 7331],
                "41": [167842, 1938],
                "42": [170474, 6848],
                "43": [178395, 2195],
                "44": [181741, 7557],
                "45": [191574, 25523],
                "46": [191574, 3203],
                "47": [195262, 5418],
                "48": [202639, 2375],
                "49": [206471, 2266],
                "50": [210815, 2623],
                "51": [214726, 2430],
                "52": [219238, 12590],
                "53": [219238, 1769],
                "54": [222176, 2202],
                "55": [225637, 2265],
                "56": [229074, 2765]
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

                });
            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                $("#cnt-" + last).text(sen[last]);
                if (sen[last] == 2) {
                    $("#" + last).find(".tran").show();
                }
            }


        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
