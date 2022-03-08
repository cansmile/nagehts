<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlush">
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-heading1">
                            <button class="text-danger bg-transparent accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapse1"><strong>F1. Numerus der Nomen
                                    (Sg./Pl.)</strong><small>명사의 수(단수/복수)</small>

                            </button>
                        </h5>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12 text-center"><button type="button" id="1" class="so btn btn-outline-dark btn-sm me-1">▶</button></div>
                                </div>
                                <table class="table table-borderless table-striped align-middle text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">복수형 어미</th>
                                        <th scope="col">단수</th>
                                        <th scope="col">복수</th>
                                        <th scope="col">유형</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">(“)-</th>
                                        <td>das Brötchen<br/>
                                            der Apfel
                                        </td>
                                        <td>die Brötchen<br/>
                                            die Äpfel
                                        </td>
                                        <td>-chen, -lein로 끝나는 명사 모두<br/>
                                            -el, -en, -er 로 끝나는 명사 대부분
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">(“)-e</th>
                                        <td>das Brot<br/>
                                            die Wurst
                                        </td>
                                        <td>die Brote<br/>
                                            die Würste
                                        </td>
                                        <td>단음절 명사에 많음</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">(“)-er</th>
                                        <td>das Ei<br/>
                                            das Glas
                                        </td>
                                        <td>die Eier<br/>
                                            die Gläser
                                        </td>
                                        <td>단음절 중성 명사에 많음<br/>
                                            -tum로 끝나는 명사 모두
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">-n/-en/-nen</th>
                                        <td>die Gurke<br/>
                                            die Pfanne
                                        </td>
                                        <td>die Gurken<br/>
                                            die Pfannen
                                        </td>
                                        <td>-e, -ie, -ung. –heit, -keit -schaft로 끝나는 명사 모두 사람이나 동물을 표현하는 명사와 여성명사에 많음
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">-s</th>
                                        <td>das Filet</td>
                                        <td>die Filets</td>
                                        <td>외래어와 축약어, –a, -i, -o, -u 로 끝나는 명사에 많음</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-heading2">
                            <button class="text-orange bg-transparent accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2"><strong>F2. Deklination der Adjektive
                                    II</strong> <small>형용사의 어미변화</small>
                            </button>
                        </h5>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12 text-center"><button type="button" id="2" class="so btn btn-outline-dark btn-sm me-1">▶</button></div>
                                </div>
                                <table class="table table-borderless text-center align-middle">
                                    <tbody>
                                    <tr>
                                        <th class="table-dark" scope="row" rowspan="3" style="width: 50px;">단수</th>
                                        <td class="table-light fw-bold">1격</td>
                                        <td>der schwarz<strong>e</strong> Mantel<br/>
                                            ein schwarz<strong>er</strong> Mantel
                                        </td>
                                        <td rowspan="2">das weiß<strong>e</strong> Hemd<br/>
                                            ein weiß<strong>es</strong> Hemd
                                        </td>
                                        <td rowspan="2">die grau<strong>e</strong> Jacke<br/>
                                            eine grau<strong>e</strong> Jacke
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-light fw-bold">4격</td>
                                        <td>den schwarz<strong>en</strong> Mantel<br/>
                                            einen schwarz<strong>en</strong> Mantel
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-light fw-bold">3격</td>
                                        <td>dem schwarz<strong>en</strong> Mantel<br/>
                                            einem schwarz<strong>en</strong> Mantel
                                        </td>
                                        <td>dem weiß<strong>en</strong> Hemd<br/>
                                            einem weiß<strong>en</strong> Hemd
                                        </td>
                                        <td>der grau<strong>en</strong> Jacke<br/>
                                            einer grau<strong>en</strong> Jacke
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-center align-middle">
                                    <tbody>
                                    <tr>
                                        <th scope="row" rowspan="3" class="table-dark" style="width: 50px;">복수</th>
                                        <td class="table-light fw-bold">1격</td>
                                        <td rowspan="2">die schwarz<strong>en</strong> Mäntel<br/>
                                            schwarz<strong>e</strong> Mäntel
                                        </td>
                                        <td rowspan="2">die weiß<strong>en</strong> Hemden<br/>
                                            weiß<strong>e</strong> Hemden
                                        </td>
                                        <td rowspan="2">die grau<strong>en</strong> Jacken<br/>
                                            grau<strong>e</strong> Jacken
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-light fw-bold">4격</td>
                                    </tr>
                                    <tr>
                                        <td class="table-light fw-bold">3격</td>
                                        <td>den schwarz<strong>en</strong> Mänteln<br/>
                                            schwarz<strong>en</strong> Mänteln
                                        </td>
                                        <td>den weiß<strong>en</strong> Hemden<br/>
                                            weiß<strong>en</strong> Hemden
                                        </td>
                                        <td>den grau<strong>en</strong> Jacken<br/>
                                            grau<strong>en</strong> Jacken
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-12">
                                        <ul>
                                            <li>소유관사와 부정관사 kein 다음의 형용사는 뒤에 오는 명사가 단수일 경우 부정관사 ein/e 다음에 오는 형용사처럼
                                                어미변화하고, 뒤에 오는 명사가 복수일 경우 정관사 다음에 오는 형용사처럼 어미변화한다.
                                            </li>
                                            <li>복수형 어미가 –(e)n이 아닌 명사의 경우 복수 3격에서 명사의 복수형 뒤에 <strong>–(e)n</strong>을 써
                                                주어야 한다.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12"><button type="button" id="3" class="so btn btn-outline-dark btn-sm me-1">▶</button>Wie gefällt Ihnen <strong>der</strong> lichtgraue Blazer?</div>
                                    <div class="col-12"><button type="button" id="4" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich suche <strong>einen</strong> dunkelgrauen Blazer.</div>
                                    <div class="col-12"><button type="button" id="5" class="so btn btn-outline-dark btn-sm me-1">▶</button>Leider haben wir gerade <strong>keinen</strong>
                                        dunkelgrau<strong>en</strong> in Ihrer Größe.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-heading3">
                            <button class="text-warning bg-transparent accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3"><strong>F3. Komparation der Adjektive</strong>
                                <small>형용사의 비교 변화</small>
                            </button>
                        </h5>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12 text-center"><button type="button" id="6" class="so btn btn-outline-dark btn-sm me-1">▶</button></div>
                                </div>
                                <table class="table table-borderless text-center table-striped align-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">Positiv <small>원급</small></th>
                                        <th scope="col">Komparativ <small>비교급</small></th>
                                        <th scope="col">Superativ <small>최상급</small></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>billig<br/>
                                            klein
                                        </td>
                                        <td>billiger<br/>
                                            kleiner
                                        </td>
                                        <td>am billigsten<br/>
                                            am kleinsten
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dunkel<br/>
                                            teuer
                                        </td>
                                        <td>dunk<strong>l</strong>er<br/>
                                            teu<strong>r</strong>er
                                        </td>
                                        <td>am dunkelsten<br/>
                                            am teuersten
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>hoch<br/>
                                            nah
                                        </td>
                                        <td>h<strong>öh</strong>er<br/>
                                            n<strong>äh</strong>er
                                        </td>
                                        <td>am h<strong>ö</strong>chsten<br/>
                                            am n<strong>ä</strong>chsten
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>lang<br/>
                                            groß<br/>
                                            kurz
                                        </td>
                                        <td>l<strong>ä</strong>nger<br/>
                                            gr<strong>ö</strong>ßer<br/>
                                            k<strong>ü</strong>rzer
                                        </td>
                                        <td>am l<strong>ä</strong>ngsten<br/>
                                            am gr<strong>ö</strong>ßten<br/>
                                            am k<strong>ü</strong>rzesten
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>gern<br/>
                                            gut<br/>
                                            viel
                                        </td>
                                        <td><strong>lieber</strong><br/>
                                            <strong>besser</strong><br/>
                                            <strong>mehr</strong>
                                        </td>
                                        <td>am <strong>liebsten</strong><br/>
                                            am <strong>besten</strong><br/>
                                            am <strong>meisten</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-12"><button type="button" id="7" class="so btn btn-outline-dark btn-sm me-1">▶</button>Könnten Sie die Hose etwas <strong>kürzer</strong> machen?</div>
                                    <div class="col-12"><button type="button" id="8" class="so btn btn-outline-dark btn-sm me-1">▶</button>Dieser Mantel ist <strong>der neuste</strong> bei uns.</div>
                                    <div class="col-12"><button type="button" id="9" class="so btn btn-outline-dark btn-sm me-1">▶</button>Dieses Kleid hier finde ich <strong>am schönsten</strong>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-heading4">
                            <button class="text-primary bg-transparent accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4"><strong>F4. Redewendungen</strong> <small>어휘와
                                    숙어</small>
                            </button>
                        </h5>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body">
                                <table class="table table-borderless text-start bg-light">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="10" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="11"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Was kosten die Erdbeeren im Vergleich
                                                    zu den Pfirsichen?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="12"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">- Im Vergleich zu den Pfirsichen
                                                    kosten die Erdbeeren mehr das Kilo.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="13"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">oder : Im Vergleich zu den Pfirsichen
                                                    sind die Erdbeeren teurer das Kilo.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="14" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="15"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Wie viele Packungen Milch / Schalen
                                                    Erdbeeren / Tafeln Schokolade brauchen wir?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="16"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">- Ich glaube, eine reicht.</div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start bg-light">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="17" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="18"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Ich kaufe Butter im Supermarkt, weil
                                                    die Auswahl größer ist.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="19"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Ich kaufe Erdbeeren auf dem Markt,
                                                    weil sie frischer sind.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="20" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="21"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Entschuldigen Sie, wo finde ich
                                                    Ofenbrot/Salat/Vollmilch?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">&nbsp;</div>
                                                <div class="col-8 mx-1 px-1 lh250">- Ich glaube, beim Gebäck/beim
                                                    Gemüse/bei den Milchprodukten.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="22"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Wo gibt es dann das Gebäck/das
                                                    Gemüse/die Milchprodukte?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">&nbsp;</div>
                                                <div class="col-8 mx-1 px-1 lh250">- Im nächsten/letzten/zweiten Gang
                                                    rechts/links.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start bg-light">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="23" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">&nbsp;</div>
                                                <div class="col-8 mx-1 px-1 lh250">Entschuldigung, wo finde ich
                                                    Strickjacken/Badehosen/Turnschuhe?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">&nbsp;</div>
                                                <div class="col-8 mx-1 px-1 lh250">Die
                                                    Damen-Mode/Herren-Mode/Sportabteilung ist im ersten/zweiten/dritten
                                                    Stock.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="24" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="25"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Darf ich das Hemd mal anprobieren?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1 ms-2">
                                                    <button type="button" id="26"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">- Natürlich. Die Umkleidekabinen sind
                                                    da drüben.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start bg-light">
                                    <tbody>
                                    <tr>
                                        <th class="text-center align-middle m-2 p-2">
                                            <button type="button" id="27" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="28"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Ich suche einen grauen Blazer.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="29"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">- Welche Größe tragen Sie denn?
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="30"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">Größe 40.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <div class="row">
                                                <div class="col-2 mx-1 px-1">
                                                    <button type="button" id="31"
                                                            class="so btn btn-outline-dark btn-sm me-1">▶
                                                    </button>
                                                </div>
                                                <div class="col-8 mx-1 px-1 lh250">- Leider haben wir keinen mehr in
                                                    Ihrer Größe.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless text-start">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">
                                            <button type="button" id="32" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                            Meinung äußern
                                        </th>
                                        <th scope="col" class="text-center">
                                            <button type="button" id="33" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                            dafür sein
                                        </th>
                                        <th scope="col" class="text-center">
                                            <button type="button" id="34" class="so btn btn-outline-dark btn-sm me-1">▶
                                            </button>
                                            dagegen sein
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-middle m-2 p-2">
                                                    <button type="button" id="35" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich bin der Meinung, dass ...<br/>
                                                    <button type="button" id="36" class="so btn btn-outline-dark btn-sm me-1">▶</button>Meiner Meinung nach ...<br/>
                                                    <button type="button" id="37" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich glaube, dass ...<br/>
                                                    <button type="button" id="38" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich denke, dass
                                        </td>
                                        <td class="align-middle m-2 p-2">
                                                    <button type="button" id="39" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich finde es gut.<br/>
                                                    <button type="button" id="40" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich bin dafür, dass ...<br/>
                                                    <button type="button" id="41" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich bin für …<br/>
                                                    <button type="button" id="42" class="so btn btn-outline-dark btn-sm me-1">▶</button>Das finde ich gut, weil ...<br/>
                                                    <button type="button" id="43" class="so btn btn-outline-dark btn-sm me-1">▶</button>Das macht Sinn, weil/denn …
                                        </td>
                                        <td class="align-middle m-2 p-2">
                                                    <button type="button" id="44" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich finde es falsch.<br/>
                                                    <button type="button" id="45" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich bin dagegen, dass ...<br/>
                                                    <button type="button" id="46" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich bin gegen ...<br/>
                                                    <button type="button" id="47" class="so btn btn-outline-dark btn-sm me-1">▶</button>Das ist sinnlos, weil ...<br/>
                                                    <button type="button" id="48" class="so btn btn-outline-dark btn-sm me-1">▶</button>Ich glaube, das macht keinen Sinn.
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
    </div>
</section>

<div id="last" class="d-none"></div>

<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
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
        src: ["./dev/sounds/Reihe 11/r11 F.mp3"],
        sprite: {
            "1": [215, 61267],
            "2": [61698, 101888],
            "3": [164925, 3267],
            "4": [169945, 3365],
            "5": [175186, 4933],
            "6": [180729, 94339],
            "7": [275596, 3447],
            "8": [280724, 3352],
            "9": [285757, 3142],
            "10": [374187, 17162],
            "11": [374187, 4587],
            "12": [379411, 4936],
            "13": [385603, 5133],
            "14": [392380, 16083],
            "15": [392380, 12307],
            "16": [405846, 2473],
            "17": [409251, 9966],
            "18": [409251, 4434],
            "19": [414824, 4441],
            "20": [420686, 53727],
            "21": [420686, 28662],
            "22": [451808, 22752],
            "23": [474967, 31948],
            "24": [509152, 8883],
            "25": [509152, 2833],
            "26": [513128, 4916],
            "27": [520354, 14780],
            "28": [520354, 2792],
            "29": [524197, 2431],
            "30": [529151, 1917],
            "31": [531904, 3731],
            "32": [294632, 18867],
            "33": [316256, 27979],
            "34": [347480, 24042],
            "35": [298971, 2242],
            "36": [303742, 1755],
            "37": [307462, 1972],
            "38": [311261, 1997],
            "39": [320202, 2295],
            "40": [324811, 1926],
            "41": [329075, 1883],
            "42": [334207, 1719],
            "43": [338483, 5567],
            "44": [351774, 2051],
            "45": [356326, 2543],
            "46": [360960, 1662],
            "47": [364517, 2674],
            "48": [369209, 2692]
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
            $("#whole").show();
            $("#ready").hide();
            /* $("#ready").hide(); */

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
</body>

</html>
