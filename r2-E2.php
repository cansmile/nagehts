<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>빈칸을 알맞은 단어로 채우세요</small> ]
                        <button type="button" class="btn btn-<?php echo($color); ?> ms-2 btn-inline so" id="0">
                            HV
                        </button>
                    </h2>
                    <h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인
                            문장이 붉게 변합니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col"><img
                                        src="./dev/images/Reihe 2/Reihe-2-E-2.png" alt="Herkunft"
                                        style="max-width: 100%; height: auto;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="my-1 text-center" id="sehen">
                                        <span class="wd">das Namdaemun
                                            Tor</span><span class="wd">das
                                            Brandenburger Tor</span><span class="wd">der
                                            Eiffelturm</span><span class="wd">das Kolosseum</span><span class="wd">das
                                            Känguru</span><span class="wd">der Taco</span><span class="wd">der
                                            Panda</span><span class="wd">die
                                            Freiheitsstatue</span><span class="wd">die Pyramide</span><span
                                            class="wd">der Mt.
                                            Kilimanjaro</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="my-1 text-center" id="city">
                                        <span class="wd">Berlin</span><span class="wd">New York</span><span
                                            class="wd">Giza</span><span class="wd">Paris</span><span
                                            class="wd">Seoul</span><span class="wd">Mexico City</span><span
                                            class="wd">Moshi</span><span class="wd">Peking</span><span
                                            class="wd">Rom</span><span class="wd">Sydney</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="my-1 text-center" id="coun">
                                        <span class="wd">Korea</span><span class="wd">Australien</span><span
                                            class="wd">Tanzania</span><span class="wd">Frankreich</span><span
                                            class="wd">Ägypten</span><span class="wd">Amerika</span><span
                                            class="wd">Deutschland</span><span class="wd">Italien</span><span
                                            class="wd">China</span><span class="wd">Mexico</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="my-1 text-center" id="land">
                                        <span class="wd">Südamerika</span><span class="wd">Nordamerika</span><span
                                            class="wd">Asien</span><span class="wd">Australien</span><span
                                            class="wd">Afrika</span><span class="wd">Europa</span></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-0"></div>
                                    <div class="input-group lh250">
                                        <strong>z.B. Namdeamun
                                            Tor:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" value="das" aria-label="Antwort"
                                            aria-describedby="basic-addon1" class="form-control border-bottom-only
                                            rounded-0 mx-1 bg-success text-white
                                            font-weight-bold text-center" disabled="true t-6"
                                            style="min-width: 50px; max-width: 80px;">
                                        Namdaemun Tor?
                                        <input autocomplete="off" type="text" value="Es" aria-label="Antwort"
                                            aria-describedby="basic-addon2" class="form-control border-bottom-only
                                            rounded-0 mx-1 bg-success text-white
                                            font-weight-bold text-center" disabled="true t-6"
                                            style="min-width: 50px; max-width: 80px;">ist
                                        in Seoul,
                                        <input autocomplete="off" type="text" value="Korea" aria-label="Antwort"
                                            aria-describedby="basic-addon3" class="form-control border-bottom-only
                                            rounded-0 mx-1 bg-success text-white
                                            font-weight-bold text-center" disabled="true t-6"
                                            style="min-width: 50px; max-width: 80px;">.
                                        Korea ist in <input autocomplete="off" type="text" value="Asien" aria-label="Antwort"
                                            aria-describedby="basic-addon4" class="form-control border-bottom-only
                                            rounded-0 mx-1 bg-success text-white
                                            font-weight-bold text-center" disabled="true t-6"
                                            style="min-width: 50px; max-width: 80px;">.

                                    </div>
                                    <span class="tran"><br> <small class="text-dark">남대문은 어디에 있나요? 그것은
                                            한국, 서울에 있습니다. 한국은 아시아 대륙에
                                            있습니다.</small></span></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-1"></div>
                                    <div class="ant t-6" id="ant-2"></div>
                                    <div class="ant t-6" id="ant-3"></div>
                                    <div class="ant t-6" id="ant-4"></div>
                                    <div class="input-group lh250">
                                        <strong>1. Brandenburger Tor:</strong>&nbsp;
                                        Wo ist<input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon5"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-1">Brandenburger Tor?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon6"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-2">ist in Berlin, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon7"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-3">. Deutschland liegt in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-4">.
                                        <span class="tran"><br><small>브란덴부르크는
                                                어디에 있나요? 그것은 독일, 베를린에 있습니다. 독일은
                                                유럽 대륙에 위치합니다.</small></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-5"></div>
                                    <div class="ant t-6" id="ant-6"></div>
                                    <div class="ant t-6" id="ant-7"></div>
                                    <div class="ant t-6" id="ant-8"></div>
                                    <div class="input-group lh250">
                                        <strong>2. Kolosseum:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon9"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-5"> Kolosseum?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon10"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-6"> ist in Rom, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon11"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-7">. Italien liegt in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon12"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-8">.
                                        <span class="tran"><br><small>콜로세움은 어디에
                                                있나요? 그것은 이탈리아, 로마에 있습니다. 이탈리아는
                                                유럽 대륙에 위치합니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-9"></div>
                                    <div class="ant t-6" id="ant-10"></div>
                                    <div class="ant t-6" id="ant-11"></div>
                                    <div class="ant t-6" id="ant-12"></div>
                                    <div class="input-group lh250">
                                        <strong>3. Eiffelturm:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon13"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-9">Eiffelturm?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon14"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-10"> ist in Paris, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon15"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-11">. Frankreich ist in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon16"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-12">.
                                        <span class="tran"><br><small>에펠탑은 어디에
                                                있나요? 그것은 프랑스, 파리에 있습니다. 프랑스는 유럽
                                                대륙에 위치합니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-13"></div>
                                    <div class="ant t-6" id="ant-14"></div>
                                    <div class="ant t-6" id="ant-15"></div>
                                    <div class="ant t-6" id="ant-16"></div>
                                    <div class="input-group lh250">
                                        <strong>4. Panda:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon17"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-13"> Panda?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon18"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-14"> ist in Peking, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon19"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-15">. China ist in <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon20"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-16">.
                                        <span class="tran"><br><small>판다는 어디에
                                                있나요? 그것은 중국, 북경에 있습니다. 중국은 아시아
                                                대륙에 위치합니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-17"></div>
                                    <div class="ant t-6" id="ant-18"></div>
                                    <div class="ant t-6" id="ant-19"></div>
                                    <div class="ant t-6" id="ant-20"></div>
                                    <div class="input-group lh250">
                                        <strong>5. Pyramide:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon21"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-17"> Pyramide?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon22"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-18"> ist in Giza, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon23"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-19">. Ägypten ist in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon24"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-20">.
                                        <span class="tran"><br><small>피라미드는 어디에
                                                있나요? 그것은 이집트, 기자에 있습니다. 이집트는
                                                아프리카 대륙에 있습니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-21"></div>
                                    <div class="ant t-6" id="ant-22"></div>
                                    <div class="ant t-6" id="ant-23"></div>
                                    <div class="ant t-6" id="ant-24"></div>
                                    <div class="input-group lh250">
                                        <strong>6. Mt.
                                            Kilimanjaro:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon25"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-21"> Mt. Kilimanjaro?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon26"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-22"> ist in Moshi, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon27"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-23">. Tanzania ist in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon28"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-24">.
                                        <span class="tran"><br><small>킬리만자로 산은
                                                어디에 있나요? 그것은 탄자니아 모시에 있습니다.
                                                탄자니아는 아프리카 대륙에
                                                있습니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-25"></div>
                                    <div class="ant t-6" id="ant-26"></div>
                                    <div class="ant t-6" id="ant-27"></div>
                                    <div class="ant t-6" id="ant-28"></div>
                                    <div class="input-group lh250">
                                        <strong>7. Känguru:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon29"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-25"> Känguru?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon30"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-26"> ist in Sydney, <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon31"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-27">. Australien ist in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon32"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-28">.
                                        <span class="tran"><br><small>캥거루는 어디에
                                                있나요? 그것은 호주, 시드니에 있습니다. 호주는
                                                오스트레일리아 대륙에
                                                위치합니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-29"></div>
                                    <div class="ant t-6" id="ant-30"></div>
                                    <div class="ant t-6" id="ant-31"></div>
                                    <div class="ant t-6" id="ant-32"></div>
                                    <div class="input-group lh250">
                                        <strong>8.
                                            Freiheitsstatue:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon33"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-29"> Freiheitsstatue?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon34"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-30"> ist in New York,
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon35"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-31">. Amerika ist in
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon36"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-32">.
                                        <span class="tran"><br><small>자유의 여신상은
                                                어디에 있나요? 그것은 미국, 뉴욕에 있습니다. 미국은
                                                북미 대륙에 있습니다.</small></span>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ant t-6" id="ant-33"></div>
                                    <div class="ant t-6" id="ant-34"></div>
                                    <div class="ant t-6" id="ant-35"></div>
                                    <div class="ant t-6" id="ant-36"></div>
                                    <div class="input-group lh250">
                                        <strong>9. Taco:</strong>&nbsp;
                                        Wo ist <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon37"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-33"> Taco?
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon38"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-34"> ist in Mexico City,
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon39"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-35">. Mexico ist in <input autocomplete="off"
                                            type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon40"
                                            class="form-control q border-bottom-only rounded-0 mx-1 border-dark"
                                            style="min-width: 50px; max-width: 80px;" id="qst-36">.
                                        <span class="tran"><br><small>타코는 어디에
                                                있나요? 그것은 멕시코, 멕시코시에 있습니다. 멕시코는
                                                북미 대륙에 있습니다.</small></span>

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
        </div>
    </section>

    <div id="last" class="d-none"></div>


    <?php require "footer.php"; ?>
    <script src="./dev/js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./dev/oxsound.php"); ?>

    <script>
        $(".tran").hide();
        $(".ant").hide();
        $("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
        $("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
        var an = new Array();
        var an = ["das", "Es", "Deutschland", "Europa", "das", "Es", "Italien",
            "Europa", "der", "Er", "Frankreich", "Europa", "der", "Er",
            "China", "Asien", "die", "Sie", "Ägypten", "Afrika", "der",
            "Er", "Tanzania", "Afrika", "das", "Es", "Australien",
            "Australien", "die", "Sie", "Amerika", "Nordamerika", "der",
            "Er", "Mexico", "Nordamerika"
        ];
        var ant = new Array();

        function ch() {
            $(".wd").removeClass("bg-warning text-dark");
            $(".wd").each(function () {
                var t = $(this);
                var tt = t.text().trim();
                $("input").each(function () {
                    if ($(this).val().indexOf(tt) != -1) {
                        t.addClass("bg-warning text-dark");
                    }
                })

            })
        }

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
            }

            /* 문제 재생 */
            var nagehts = new Howl({
                src: [
                    "./dev/sounds/Reihe 2/r2 E2.mp3"
                ],
                sprite: {
                    "0": [3410, 151681]
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
                    $("#ready").hide();

                    $(".so").on("click", function () {
                        var t = $(this);
                        var ti = t.attr("id");

                        if (($("div#last").text() ==
                                "" || t.text() ==
                                "❚❚") && !t
                            .hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ti]++;

                            last = ti;

                            $("#cnt-" + ti).text(
                                sen[ti]);
                        } else if (last == ti &&
                            nagehts.playing($(
                                    "div#last")
                                .text())) {
                            $("#last").text("");
                            t.html(pa[ti]);
                            nagehts.pause();
                            sen[ti]--;
                            $("#cnt-" + ti).text(
                                sen[ti]);
                        }

                    });


                    /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
                    /* 값 확인해보자, io값이 참이면 전체 검사 */
                    function rfchk(th, io) {
                        var q, qn, a, b, fl;
                        q = th.val().length;
                        qn = (th.attr("id").substr(4)) - 1;
                        a = th.val();
                        a = a.replace(/ /gi, "");
                        if (!$.isArray(an[qn])) {
                            /* 1 인 경우 */
                            if (io) {
                                b = an[qn];
                            } else {
                                b = an[qn].substr(0, q);
                            }
                            b = b.replace(/ /gi, "");
                            if (a == b) {
                                return true;
                            }
                        } else {
                            /* 2 이상인 경우 */
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
                    $(".q").on("keyup", function () {
                        $(this).removeClass("bg-danger");
                        $(this).removeClass("bg-success");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                        "text-danger");
                        $("#ant-" + $(this).attr("id").substr(4)).removeClass(
                            "text-success");
                        if (rfchk($(this))) {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-success");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-success");
                        } else {
                            $(this).addClass("text-white font-weight-bold");
                            $(this).addClass("bg-danger");
                            $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                "text-danger");
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
                        ch();
                    })

                    $(".q").on("focusin", function () {
                        $("#ant-" + $(this).attr("id").substr(4)).show();
                        if (!$("#ant-" + $(this).attr("id").substr(4)).text()) {
                            $("#ant-" + $(this).attr("id").substr(4)).text($(this).val());
                        }
                        if ($("#ant-" + $(this).attr("id").substr(4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-success");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-success");
                            } else {
                                $(this).addClass("text-white font-weight-bold");
                                $(this).addClass("bg-danger");
                                $("#ant-" + $(this).attr("id").substr(4)).addClass(
                                    "text-danger");
                            }
                        }
                    })

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
                        if ($(this).attr("id") == "done") {} else if (na == "") {
                            for (var i = 0; i < an.length; i++) {
                                var oran = $("#qst-" + (i + 1)).val();
                                if (rfchk($("#qst-" + (i + 1)), true)) {
                                    $("#qst-" + (i + 1)).addClass(
                                        "bg-success text-white rounded font-weight-bold p-1 px-2 ms-1"
                                    );
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                } else {
                                    $("#qst-" + (i + 1)).val(oran);
                                    $("#qst-" + (i + 1)).attr("disabled", true);
                                    $("#qst-" + (i + 1)).addClass("wa");
                                    $("#qst-" + (i + 1)).removeClass("rounded-0");
                                    if (!$.isArray(an[i])) {
                                        $("#qst-" + (i + 1)).after(
                                            "<div class=\"w-100 ra t-6\">" + an[i] +
                                            "</div>");
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r = "<div class=\"w-100 ra t-6\">";
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
                            } /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass("btn-light ");
                            var qa = $(".q").length; /* 전체 문항 수 */
                            var qr = $(".q.bg-success").length; /* 맞춘 항목 수 */
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
                            $(this).prop("disabled", true);
                            $(".tran").show();
                            $(this).attr("id", "done");
                            checkHeight();
                        } else {
                            alert("모든 문제를 풀어주세요!"); /* alert(na+"번 문제를 풀어주세요!"); */
                        };
                    })

                    var pan = new Array();
                    /* pan=[1,2,3,4,5,6,7,8,9,10]; */
                    pan = [13, 14, 15, 16, 25, 26, 27, 28, 29, 30, 31, 32];
                    for (var p = 0; p < pan.length; p++) {
                        var pann = "#qst-" + pan[p];
                        $(pann).val(an[(pan[p] - 1)]);
                        $(pann).addClass(
                            "bg-success text-white font-weight-bold");
                        $(pann).prop("disabled", true);
                        /* $(pann).closest("tr").find(".tran").show(); */
                    }

                    ch();

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
                                pa[last] = $("#" +
                                    last).html();
                            });
                        }
                    } else if (sen[last] == 2) {
                        if ($("#" + last).hasClass("itm")) {
                            $("#" + last + ">.tran").show();
                        }
                        $("#" + last).closest("tr").find(
                            ".tran").show();
                        pa[last] = $("#" + last).html();
                    }
                }


            });

        });

    </script>
    <!--  finished -->
    </body>

</html>
