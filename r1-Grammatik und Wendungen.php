<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require  "ready.php"; ?>
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
                                        <strong> H1. W-Fragen und Antworten</strong> <small>의문사로 시작하는 의문문과 대답</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2" colspan="2"><button type="button"
                                                id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="col" width="50%">묻기</th>
                                        <th class="text-center bg-light" scope="col">반응</th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="2"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Wie heißen</strong> Sie?
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="3"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Ich heiße David Kim.</div>
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
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Wie ist</strong> Ihr Name?
                                                </div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="5"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Mein Name ist Michael Brunner.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="6"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Wie geht</strong> es Ihnen?
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="7"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Danke, gut. Und Ihnen?</div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse2" area-expanded="false"
                                        aria-controls="collapse2" id="2">
                                        <strong> H2. Ja / Nein Fragen und Antworten</strong> <small>“예”, “아니요”로 시작하는
                                            의문문과 대답</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2" colspan="2"><button type="button"
                                                id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="col" width="50%">질문</th>
                                        <th class="text-center bg-light" scope="col">대답</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="9"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Sind</strong> Sie Herr Kim?
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="10"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Ja, das bin ich.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="11"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Bist</strong> du So-Mang?
                                                </div>
                                            </div>
                                        </th>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="12"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Nein, ich bin Un-Hae.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="13"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250"><strong>Ist</strong> Frau Kwan da?
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="14"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Nein, Frau Kwan ist nicht da.</div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse3" area-expanded="false"
                                        aria-controls="collapse3" id="3">
                                        <strong> H3. Verbkonjugation</strong> <small>동사변화</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
                                <div class="row">
                                    <div class="col-11 text-center">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
                                                <div class="row">
                                                    <div class="bg-light py-2 col-6">&nbsp;</div>
                                                    <div class="py-2 col-6"><strong>heißen</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="py-2 col-6 border-right border-dark">
                                                        <strong>ich</strong></div>
                                                    <div class="bg-light py-2 col-6">heiß<strong>e</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="bg-light py-2 col-6 border-right border-dark">
                                                        <strong>du</strong></div>
                                                    <div class="py-2 col-6">heiß<strong>t</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="py-2 col-6 border-right border-dark">
                                                        <strong>Sie</strong></div>
                                                    <div class="bg-light py-2 col-6">heiß<strong>en</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="py-2 col-6">&nbsp;</div>
                                                    <div class="py-2 col-6">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
                                                <div class="row">
                                                    <div class="bg-light py-2 col-6">&nbsp;</div>
                                                    <div class="py-2 col-6"><strong>sein</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="py-2 col-6 border-right border-dark">
                                                        <strong>ich</strong></div>
                                                    <div class="bg-light py-2 col-6"><strong>bin</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="bg-light py-2 col-6 border-right border-dark">
                                                        <strong>du</strong></div>
                                                    <div class="py-2 col-6"><strong>bist</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="py-2 col-6 border-right border-dark">
                                                        <strong>Sie</strong></div>
                                                    <div class="bg-light py-2 col-6"><strong>sind</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="bg-light py-2 col-6 border-right border-dark">
                                                        <strong>mein Name</strong></div>
                                                    <div class="py-2 col-6"><strong>ist</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse4" area-expanded="false"
                                        aria-controls="collapse4" id="4">
                                        <strong> H4. Wortstellung</strong> <small>어순</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
                                <table class="table table-borderless text-center">
                                    <tr>
                                        <th scope="col" width="33%"><strong>Position 1</strong></th>
                                        <th class="bg-light" width="33%" scope="col"><strong>Position 2</strong></th>
                                        <th scope="col">Position 3</th>
                                    </tr>
                                    <tr>
                                        <td class="bg-light" scope="row"><strong>Wie</strong></td>
                                        <td><strong>heißen</strong></td>
                                        <td class="bg-light">Sie?</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><strong>Wie</strong></td>
                                        <td class="bg-light"><strong>ist</strong></td>
                                        <td>Ihr Name?</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light" scope="row"><strong>Sind</strong></td>
                                        <td><strong>Sie</strong></td>
                                        <td class="bg-light">Frau Kwan?</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><strong>Ich</strong></td>
                                        <td class="bg-light"><strong>heiße</strong></td>
                                        <td>Meier.</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light" scope="row"><strong>Mein Name</strong></td>
                                        <td><strong>ist</strong></td>
                                        <td class="bg-light">Brunner.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button"
                                        data-toggle="collapse" data-target="#collapse5" area-expanded="false"
                                        aria-controls="collapse5" id="5">
                                        <strong> H5. Redewendungen</strong> <small>어휘와 숙어</small>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="border-bottom-0 border-dark border" width="50%">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="15"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Hallo!</div>
                                            </div>
                                        </td>
                                        <td class="bg-light border border-dark border-bottom-0">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="16"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Tschüs!</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 border-bottom-0 border-dark border">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="17"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Guten Morgen!</div>
                                            </div>
                                        </td>
                                        <td class="bg-light border border-dark border-top-0">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="18"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Auf Wiedersehen!</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 border-bottom-0 border-dark border">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="19"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Guten Tag!</div>
                                            </div>
                                        </td>
                                        <td class="border border-dark border-bottom-0">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="20"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Entschuldigung.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 border-bottom-0 border-dark border">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="21"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Guten Abend!</div>
                                            </div>
                                        </td>
                                        <td class="border border-dark border-top-0 border-bottom-0">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 border-dark border">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="22"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Gute Nacht!</div>
                                            </div>
                                        </td>
                                        <td class="border border-dark border-top-0">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="23"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wie heißen Sie?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="24"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ich heiße Sandra Bauer.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="25"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wie heißt du?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="26"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ich heiße Sandra.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="27"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wie ist Ihr Name?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="28"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Mein Name ist Arum Park.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="29"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wie ist dein Name?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="30"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Mein Name ist Arum.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="31"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wie geht es Ihnen? / Wie geht es
                                                    dir?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="32"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Danke, es geht mir super. / sehr
                                                    gut. / gut. / nicht so gut. / schlecht. / es geht. / so la la. / Und
                                                    Ihnen? / Und dir?</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="33"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wer sind Sie?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="34"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ich bin Yuna Kim.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="35"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wer bist du?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="36"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ich bin Yuna.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="37"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wer ist Herr Bauer?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="38"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Das bin ich.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="39"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Wer ist Somang Kim?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="40"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Das bin ich.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="41"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Sind Sie Frau Lee?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="42"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ja, das bin ich. / Nein, ich bin
                                                    Frau Park.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="43"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Bist du Sung Hwa?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="44"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ja, das bin ich. / Nein, ich bin
                                                    Chung Man.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="45"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">Ist Herr Jang da?</div>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="row">
                                                <div class="mx-1 px-1">
                                                    <button type="button" id="46"
                                                        class="so btn btn-outline-dark btn-sm mr-1">▶</button>
                                                </div>
                                                <div class="col-10 mx-1 px-1 lh250">- Ja, Herr Jang ist da. / Nein, Herr
                                                    Jang ist nicht da.</div>
                                            </div>
                                        </td>
                                        </tra>
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
            src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 H.mp3"],
            sprite: {
                "1": [319, 21565],
                "2": [5099, 1894],
                "3": [7667, 2077],
                "4": [10683, 2020],
                "5": [13552, 2597],
                "6": [16960, 2017],
                "7": [19539, 2537],
                "8": [24656, 23010],
                "9": [30196, 1980],
                "10": [33265, 1771],
                "11": [36201, 1855],
                "12": [38910, 2111],
                "13": [42165, 1938],
                "14": [44868, 2581],
                "15": [55523, 1519],
                "16": [70261, 1684],
                "17": [58222, 1690],
                "18": [73544, 1767],
                "19": [61227, 1593],
                "20": [76860, 1888],
                "21": [64256, 1634],
                "22": [67369, 1564],
                "23": [80578, 1777],
                "24": [83494, 2236],
                "25": [87262, 1614],
                "26": [90132, 2110],
                "27": [93557, 1975],
                "28": [96783, 2347],
                "29": [100860, 1766],
                "30": [103902, 1992],
                "31": [107209, 4701],
                "32": [113215, 27789],
                "33": [142961, 1915],
                "34": [146602, 2002],
                "35": [150266, 1719],
                "36": [153270, 1845],
                "37": [156811, 2029],
                "38": [160170, 1955],
                "39": [163371, 2137],
                "40": [167114, 1544],
                "41": [170272, 1978],
                "42": [173229, 5813],
                "43": [180443, 1926],
                "44": [183154, 5747],
                "45": [190539, 2099],
                "46": [193972, 6451]
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

                    if ($("div#last").text() == "" || t.text() == "❚❚") {
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
