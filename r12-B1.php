<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina will in diesen Sommerferien ihre Deutschkenntnisse verbessern,
                da sie vorhat, nächstes Jahr an der TUD ein Austauschstudium zu machen. Im Internet findet sie folgende
                Anzeige.
                <span class="tran font-weight-bold">&nbsp;<small>미나는 내년에 TUD에서 교환학생연수를 떠날 계획을 가지고 있기 때문에, 여름방학 때 독일어 실력을 향상 시키고 싶어합니다. 인터넷에서 아래의 공고를 찾았습니다.</small></span>
            </div>
        </div>
        <div class="row border border-dark rounded p-2">
            <div class="col-12 h4">Sommerkurse in Dresden
                <span class="tran font-weight-bold">&nbsp;<small>드레스덴 여름어학코스</small></span></div>
            <div class="col-12">
                <ul>
                    <li>Deutschkurse auf verschiedenen Niveaus sowie Prüfungskurse
                        <span class="tran font-weight-bold">&nbsp;<small>다양한 수준의 독일어 강좌와 시험준비반</small></span></li>
                    <li>Einstufung nach einem Einstufungstest
                        <span class="tran font-weight-bold">&nbsp;<small>테스트에 따른 반 편성</small></span></li>
                    <li>kompetente Lehrer und viele Aktivitäten
                        <span class="tran font-weight-bold">&nbsp;<small>자격을 갖춘 좋은 교사 진과 다양한 활동들</small></span></li>
                    <li>Exkursionen (inkludiert in den Sprachkursgebühren) in und außerhalb von Dresden
                        <span class="tran font-weight-bold">&nbsp;<small>드레스덴 안과 바깥의 현장활동 (어학코스비용에 포함)</small></span>
                    </li>
                    <li>mit Teilnahmeausweis Zugang zu Mensen und Bibliotheken der Uni
                        <span class="tran font-weight-bold">&nbsp;<small>대학교의 학생식당, 도서관에 출입이 가능한 참가 증명서</small></span>
                    </li>
                    <li>Unterbringung im internationalem Gästehaus der Uni
                        <span class="tran font-weight-bold">&nbsp;<small>대학의 인터네셔널 게스트하우스 숙소</small></span></li>
                </ul>
            </div>
            <div class="col-12 h5">Nähere Auskünfte bei: TUDIAS (https://www.idfsk.tudias.de/)
                <span
                    class="tran font-weight-bold">&nbsp;<small>자세한 정보 : 투디아스 (https://www.idfsk.tudias.de/)</small></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wd_inline_inverted">Mina findet das Angebot sehr interessant und schreibt eine E-Mail an
                das Sprachinstitut, um sich über den Sommersprachkurs näher zu informieren.
                <span
                    class="tran"><br><small>미나는 이 공고에 매우 흥미가 있어서 여름 어학코스에 대한 상세한 정보를 얻기 위해 어학원에 이메일을 작성합니다.</small></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2> Ergänzen Sie die Lücken.
                    <button type="button" class="btn btn-<?php echo( $color ); ?> ml-2 btn-inline so" id="0">
                        HV
                    </button>
                    <br>
                    <small> 빈칸을 채우세요. </small><br>
                    [ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게
                        표시됩니다.</small> ]
                </h2>
            </div>
        </div>
        <div class="row lh250">
            <div class="col-12 my-1 rounded bg-dark text-white font-weight-bold">Schema</div>
            <div class="col-12">
                <span class="wd mx-1">Anrede</span>
                <span class="wd mx-1">Schlusssatz</span>
                <span class="wd mx-1">Einleitungssatz</span>
                <span class="wd mx-1">Gruß</span>
                <span class="wd mx-1">Mailtext</span>
                <span class="wd mx-1">Unterschrift</span>
            </div>
            <div class="col-12 my-1 rounded bg-dark text-white font-weight-bold">Redemittel</div>
            <div class="col-12">
                <span class="wd mx-1">Ich interessiere ich mich sehr für Ihre Anzeige</span>
                <span class="wd mx-1">Würden Sie mir bitte auch mitteilen</span>
                <span class="wd mx-1">Zuerst würde ich gerne wissen</span>
                <span class="wd mx-1">Ich danke Ihnen im Voraus</span>
                <span class="wd mx-1">Zum Schluss</span>
                <span class="wd mx-1">Mit freundlichen Grüßen,  Es wäre schön,</span>
                <span class="wd mx-1">Sie erwähnen in Ihrer Anzeige,</span>
            </div>
        </div>
        <div class="row lh350">
            <div class="col-12 border border-dark rounded py-3">
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-1">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">Sehr geehrte Damen und Herren,
                        <span class="tran font-weight-bold">&nbsp;<small>친애하는 선생님들,</small></span></div>
                </div>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                ich heiße Mina Kim aus Korea und bin Theologiestudentin.
                                <span class="tran font-weight-bold">&nbsp;<small>저는 한국에서 온 김미나이고 신학생입니다.</small></span>
                            </div>
                            <div class="col-12">
                                <div class="input-group text-break">
                                    <input autocomplete="off" type="text"
                                           class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                           style="max-width: 50px;" aria-label="." id="qst-7">
                                    da ich vorhabe, mich nächstes Jahr für ein einjähriges Austauschstudium an der TUD
                                    zu bewerben.
                                    <span class="tran font-weight-bold">&nbsp;<small>당신의 광고에 매우 관심이 있습니다, 왜냐하면 내년에 TUD의 1년 교환학생을 지원할 계획을 가지고 있기 때문입니다.</small></span>
                                </div>
                            </div>
                            <div class="col-12">
                                Daher möchte ich gerne noch einige Informationen bekommen.
                                <span class="tran font-weight-bold">&nbsp;<small>그래서 약간의 정보를 얻고 싶습니다.</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-3">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-8">
                            was in dem Einstufungstest geprüft wird und wie lange der Test dauern würde.
                            <span class="tran font-weight-bold">&nbsp;<small>우선 반편성시험에서 무엇을 보는지 그리고 시험 시간이 얼마나 소요되는지 알고 싶습니다.</small></span>
                        </div>
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-9">
                            spezielle Prüfungskurse. Bieten Sie auch einen B1-Vorbereitungskurs an?
                            <span class="tran font-weight-bold">&nbsp;<small>당신은 공고에서 특별한 시험준비반을 언급하시는데, B1 시험준비반도 제공이 되나요?</small></span>
                        </div>
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-10">
                            wie viele Teilnehmer eine Gruppe ausmacht ist und welches Freizeitprogramm angeboten wird?
                            <span class="tran font-weight-bold">&nbsp;<small>또한 한 반에 몇 명이나 참여하는지 그리고 어떤 여가 프로그램이 제공되는지 알려주실 수 있을까요?</small></span>
                        </div>
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-11">
                            möchte ich noch gerne wissen, ob ich einen Rabatt bekommen würde, wenn ich mich für zwei
                            Kurse anmelden würde?
                            <span class="tran font-weight-bold">&nbsp;<small>그리고 마지막으로 제가 두 코스를(그러니까 8주) 신청할 경우 할인을 받을 수 있는지 알고 싶습니다.</small></span>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-4">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-12">
                            wenn Sie mir genauere Angaben zu meinen Fragen geben würden.
                            <span class="tran font-weight-bold">&nbsp;<small>저의 질문에 대한 정확한 답변을 주시면 좋겠습니다.</small></span>
                        </div>
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-13">
                            für Ihre Antwort.
                            <span class="tran font-weight-bold">&nbsp;<small>답장해 주실 것에 대해 미리 당신께 감사드립니다.</small></span>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-5">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group text-break">
                            <input autocomplete="off" type="text"
                                   class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark"
                                   style="max-width: 50px;" aria-label="." id="qst-14">
                            <span class="tran font-weight-bold">&nbsp;<small>인사를 전하며</small></span>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-3 col-lg-2 align-top bg-gray-light">
                        <div class="input-group text-break">
                            <button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>
                            <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1
                        text-center border-dark" style="max-width: 80px;"
                                   aria-label="." id="qst-6">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">Mina Kim
                        <span class="tran font-weight-bold">&nbsp;<small>김미나</small></span></div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 border border-dark rounded lh350">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col"><span class="tipp">TIPP</span>&nbsp;독일어로 이메일을 작성할 때 사적 이메일(persönlich)과 준 공식적 이메일(halbformell)이 존재한다.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-12 lh250 border border-dark rounded p-2">
                                    <span class="wd mx-1">소문자</span>
                                    <span class="wd mx-1">선생님</span>
                                    <span class="wd mx-1">정중한 부탁, 감사의 말</span>
                                    <span class="wd mx-1">간단한 자기소개</span>
                                    <span class="wd mx-1">(끝)인사 (Gruss)</span>
                                    <span class="wd mx-1">본론(Mailtext)</span>
                                    <span class="wd mx-1">도입(Einleitungssatz)</span>
                                    <span class="wd mx-1">맺음말 (Schlusssatz), 친한 사람</span>
                                    <span class="wd mx-1">잘 알지 못하는 사람</span>
                                    <span class="wd mx-1">콤마(,)</span>
                                    <span class="wd mx-1">메일을 쓰는 이유</span>
                                    <span class="wd mx-1">du</span>
                                    <span class="wd mx-1">형태 (du, dir, dich, dein)</span>
                                    <span class="wd mx-1">Sie</span>
                                    <span class="wd mx-1">형태 (Sie,Ihnen, Ihr)</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                사적 이메일은 주로 친구 등
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-15">
                                에게
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-16">
                                로 글을 쓴다.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                준 공식적인 이메일은 위와 같이
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-17">
                                , 상관,
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-18">
                                선생님 등이나 공적인 관계, 공공업무에서 쓰는 것이며
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-19">
                                로만 글을 쓴다.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                사적 그리고 준 공식적 이메일의 구조는 공통적으로 인사말(호칭Anrede) ->
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-20">
                                ->
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-21">
                                ->
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-22">
                                ->
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-23">
                                -> 이름 (성과 이름)으로 되어 있다.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            준 공식적 이메일의 인사말(호칭Anrede)은 초면의 알지 못하는 사람에게는 sehr geehrte Damen und Herren 이라고 하고, 알고 있는 분에게는 sehr geehrte Herr 00(남) 또는 sehr geehrte Frau 00(여)라고 한다.
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                준 공식적-사적 이메일에서는 인사말(호칭Anrede)을 쓰고 난 뒤에는 반드시
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-24">
                                를 찍고, 이어지는 도입 문장(Einleitungssatz)은
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-25">
                                로 시작한다.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                도입부(Einleitungssatz)에서는
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-26">
                                와 함께
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-27">
                                를 짧고 정중하게 언급한다.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="xi-angle-down mt-3"></i>
                            <div class="input-group text-break">
                                맺음말(Schlusssatz)에서는
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-28">
                                과
                                <input autocomplete="off" type="text" class="form-control q rounded-0 border-bottom-only mx-1 px-2 py-1 text-center border-dark t-6" style="max-width: 80px;" aria-label="." id="qst-29">
                                을 쓴다. (Es wäre schön, wenn … /Ich würde mich freuen/ Für Ihre Antwort wäre ich Ihnen sehr dankbar/Vielen Dank im Voraus....)
                            </div>
                        </td>
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
        <div class="row">
            <div class="col-12"><span class="gr">GR</span><span class="tipp">TIPP</span><strong>가정법 II식 (Konjunktiv
                    II)</strong></div>
            <div class="col-12 h5 my-3">가정법 II 사용</div>
            <div class="col-12">
                가정법 II식은 동사의 서법으로 공손한 부탁, 비현실적인 조건, 소망 등을 표현할 수 있다.<br/>
                würden, hätte, wäre 혹은 다른 화법동사의 가정법 II식 형태들은 공손한 부탁을 표현하는데 자주 사용된다.
            </div>
            <div class="col-12 h5 my-3">가정법 II식 형태</div>
            <div class="col-12">
                <ul>
                    <li>가정법 현재에서는 대부분 würden+(일반)동사원형 형태를 취하고 과거의 경우 hätte, wäre+ 과거분사형 의 형태를 사용한다.</li>
                    <li>가정법 II식의 형태는 과거형에서 파생되고 직설법 과거형에서와 같이 일인칭 삼인칭 단수의 동사 형태가 동일하다. 가정법의 동사 어미는 아래와 같다.</li>
                </ul>
            </div>
            <div class="col-12">
                <table class="table table-borderless table-striged text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ich</th>
                        <th scope="col">du</th>
                        <th scope="col">er/sie/es</th>
                        <th scope="col">wir</th>
                        <th scope="col">ihr</th>
                        <th scope="col">sie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>-e</td>
                        <td>-(e)st</td>
                        <td>-e</td>
                        <td>-en</td>
                        <td>-(e)t</td>
                        <td>-en</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 h5">동사의 접속법 II식의 형태는 다음과 같다.</div>
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <th scope="row">Ich</th>
                                <td>würde fahren. (=Ich führe.)</td>
                            </tr>
                            <tr>
                                <th scope="row">Du</th>
                                <td>würdest fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Er / Sie / Es</th>
                                <td>würde fahren.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <th scope="row">Wir</th>
                                <td>würden fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ihr</th>
                                <td>würdet fahren.</td>
                            </tr>
                            <tr>
                                <th scope="row">Sie</th>
                                <td>würden fahren.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-borderless table-striped">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">sein</th>
                        <th scope="col">haben</th>
                        <th scope="col">dürfen</th>
                        <th scope="col">können</th>
                        <th scope="col">müssen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">직설법 과거 3인칭</th>
                        <td>war</td>
                        <td>hatte</td>
                        <td>durfte</td>
                        <td>konnte</td>
                        <td>musste</td>
                    </tr>
                    <tr>
                        <th scope="row">ich</th>
                        <td>wäre</td>
                        <td>hätte</td>
                        <td>dürfte</td>
                        <td>könnte</td>
                        <td>müsste</td>
                    </tr>
                    <tr>
                        <th scope="row">du</th>
                        <td>wärst</td>
                        <td>hättest</td>
                        <td>dürftest</td>
                        <td>könntest</td>
                        <td>müsstest</td>
                    </tr>
                    <tr>
                        <th scope="row">er / sie / es</th>
                        <td>wäre</td>
                        <td>hätte</td>
                        <td>dürfte</td>
                        <td>könnte</td>
                        <td>müsste</td>
                    </tr>
                    <tr>
                        <th scope="row">wir</th>
                        <td>wären</td>
                        <td>hätten</td>
                        <td>dürften</td>
                        <td>könnten</td>
                        <td>müssten</td>
                    </tr>
                    <tr>
                        <th scope="row">sie / Sie</th>
                        <td>wären</td>
                        <td>hätten</td>
                        <td>dürften</td>
                        <td>könnten</td>
                        <td>müssten</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
    var an = ["Anrede", "Einleitungssatz", "Mailtext", "Schlusssatz", "Gruß", "Unterschrift", "Ich interessiere mich sehr für Ihre Anzeige,", "Zuerst würde ich gerne wissen", "Sie erwähnen in Ihrer Anzeige", "Würden Sie mir bitte auch mitteilen", "Zum Schluss", "Es wäre schön", "Ich danke Ihnen im Voraus", "Mit freundlichen Grüßen", "친한 사람들", "du-형태 (du, dir, dich, dein)", "잘 알지 못하는 사람", "선생님", "Sie-형태 (Sie, Ihnen, Ihr)", "도입(Einleitungssatz)", "본론(Mailtext)", "맺음말(Schlusssatz)", "(끝)인사 (Gruss)", "콤마(,)", "소문자", "간단한 자기 소개", "메일을 쓰는 이유", "정중한 부탁", "감사의 말"];
    /* 각 문장 재생 횟수 초기화 */
    var hm = new Array(),
        sen = new Array();
    $(".so").each(function () {
        hm[$(this).attr("id")] = 0;
        sen[$(this).attr("id")] = $("#" + $(this).attr("id"))
            .html();
    });
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
            src: ["./dev/sounds/Reihe 12/r12 B1.mp3"],
            sprite: {
                "0": [438, 100030],
                "1": [31303, 2819],
                "2": [33805, 19826],
                "3": [53797, 33911],
                "4": [88518, 8387],
                "5": [96978, 2077],
                "6": [98907, 1543]
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
                });

                /* 값 확인해보자, io값이 참이면 전체 검사 */
                function rfchk(th, io) {
                    var q, qn, a, b, fl;
                    q = th.val().length;
                    qn = (th.attr("id").substr(4)) - 1;
                    a = th.val();
                    a = a.replace(/ /gi, "");
                    di(th);
                    if (!$.isArray(an[qn])) {/* 1 인 경우 */
                        if (io) {
                            b = an[qn];
                        } else {
                            b = an[qn].substr(0, q);
                        }
                        b = b.replace(/ /gi, "");
                        if (a == b) {
                            return true;
                        }
                    } else {/* 2 이상인 경우 */
                        for (var fd = 0; fd < an[qn].length; fd++) {
                            if (io) {
                                b = an[qn][fd];
                            } else {
                                b = an[qn][fd].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");
                            if (a == b) {
                                return true;
                            }
                        }
                    }
                }

                /* 역동적 입력란 */
                function di(th) {
                    var le = 0, mp = 8, l = th.val().length;
                    if (l < 5) {
                        var mp = 10;
                    } else if (l > 30) {
                        var mp = 6;
                    } else if (l < 30) {
                        var mp = 8;
                    } else {
                        var mp = 8;
                    }
                    if (l >= 5) {
                        le = l;
                    } else {
                        le = 5;
                    }
                    var w = (le + 1) * mp + "px";
                    th.addClass("mx-1");
                    th.css("min-width", w);
                    th.css("max-width", w);
                    th.css("width", w);
                };

                $(".q").on("keyup", function () {
                    $(this).removeClass("bg-danger");
                    $(this).removeClass("bg-success");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-danger");
                    $("#ant-" + $(this).attr("id").substr(4)).removeClass("text-success");
                    if (rfchk($(this))) {
                        $(this).addClass("text-white font-weight-bold");
                        $(this).addClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                    } else {
                        $(this).addClass("text-white font-weight-bold");
                        $(this).addClass("bg-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
                    }
                    if (!$(this).val()) {
                        $(this).removeClass("bg-danger");
                        $(this).removeClass("bg-success");
                        $(this).removeClass("text-white font-weight-bold");
                    }
                    if ($(this).val()) {
                        $("#ant-" + $(this).attr("id").substr(4)).show();
                        $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                    } else {
                        $("#ant-" + $(this).attr("id").substr(4)).hide();
                    }
                });
                $(".q").on("focusin", function () {
                    $("#ant-" + $(this).attr("id").substr(4)).show();
                    if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                        $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                    }
                    if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                        if (rfchk($(this))) {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-success");
                        } else {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass("text-danger");
                        }
                    }
                });
                $(".q").on("focusout", function () {
                    $("#ant-" + $(this).attr("id").substr(4)).hide();
                    if (rfchk($(this), true)) {
                        $(this).addClass("bg-success");
                        $(this).addClass("text-white");
                    } else {
                        $(this).addClass("bg-danger");
                    }
                    if ($(this).val()) {
                        if ($(this).hasClass("bg-danger")) {
                            x.play();
                        } else if ($(this).hasClass("bg-success")) {
                            o.play();
                            $(this).prop("disabled", true);
                        }
                    }
                    $(this).removeClass("bg-danger");
                    if (!$(this).attr("disabled")) {
                        $(this).removeClass("text-white font-weight-bold");
                        $(this).removeClass("bg-success");
                    }
                })
                /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                $("#chk").on("click", function () {
                    var na = "";
                    var ri = 0;
                    var qst = $(".q").length;
                    $(".q").each(function () {
                        if (na != "") {
                            na += ", ";
                        }
                        if ($(this).val() == "") {
                            na += $(this).attr("id").substr(4, 1);
                        }
                    });
                    if ($(this).attr("id") == "done") {
                    } else if (na == "") {
                        for (var i = 0; i < an.length; i++) {
                            var oran = $("#qst-" + (i + 1)).val();
                            if (rfchk($("#qst-" + (i + 1)), true)) {
                                $("#qst-" + (i + 1)).addClass("cr");
                                $("#qst-" + (i + 1)).removeClass("rounded-0");
                            } else {
                                $("#qst-" + (i + 1)).val(oran);
                                $("#qst-" + (i + 1)).attr("disabled", true);
                                $("#qst-" + (i + 1)).addClass("wa");
                                $("#qst-" + (i + 1)).removeClass("rounded-0");
                                if (!$.isArray(an[i])) {
                                    $("#qst-" + (i + 1)).after(
                                        "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">" +
                                        an[i] + "</div>");
                                } else {
                                    /* 2 이상인 경우 */
                                    var r =
                                        "<div class=\"d-block ra t-6\" style=\"max-width: 100px;\">";
                                    for (var fd = (an[i].length - 1); fd >= 0; fd--) {
                                        if (fd < (an[i].length - 1)) {
                                            r = r + " / ";
                                        }
                                        r = r + an[i][fd];
                                    }
                                    r = r + "</div>";
                                    if ($("span.sen").length > 0) {
                                        $("#qst-" + (i + 1)).closest("span.sen").after(
                                            r);
                                    } else {
                                        $("#qst-" + (i + 1)).after(r);
                                    }
                                }
                            }
                            if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                                ri++;
                            }
                        }
                        ; /* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light ");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $(".bg-success").length; /* 맞춘 항목 수 */
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
                        $(this).prop("disabled", true);
                        $(".tran").show();
                        $(this).attr("id", "done");
                    } else {
                        alert("모든 문제를 풀어주세요!");
                    }
                    ;
                });
                var pan = new Array();
                pan = [1, 6, 15, 19, 21];
                for (var p = 0; p < pan.length; p++) {
                    var pann = "#qst-" + pan[p];
                    $(pann).val(an[(pan[p] - 1)]);
                    $(pann).addClass("bg-success text-white font-weight-bold");
                    $(pann).prop("disabled", true);
                    di($(pann));
                }
                $("#0").show();
                $(".alert").hide();

            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                $("#cnt-" + last).text(sen[last]);
                if (last == 0) {
                    if (sen[last] == 3) {
                        $(".tran").show();
                        $(".so").each(function () {
                            pa[last] = $("#" + last).html();
                        });
                    }
                } else if (sen[last] == 3) {
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
