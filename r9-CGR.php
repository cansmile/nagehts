<?php require_once("heading.php"); ?>
    <style>
        th,
        td {
            height: 80px;
            text-align: center;
            vertical-align: middle;
        }

    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인문장이 나타나고, 오답이 될 때는 확인문장이
                            붉게 변합니다.</small> ]</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Nominativ</th>
                                <th scope="col">Akkusativ</th>
                                <th scope="col">Dativ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-1"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-1"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-2"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-2"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-3"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-3"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-4"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-4"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-5"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-5"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-6"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-6"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-7"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-capitalize" id="qst-7"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-8"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-capitalize" id="qst-8"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-9"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-capitalize" id="qst-9"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-10"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-10"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-11"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-11"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-12"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-12"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-13"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-13"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-14"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-14"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-15"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-15"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-16"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-16"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-17"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-17"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-18"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-18"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-19"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-19"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-20"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-20"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-21"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-21"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-22"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-22"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-23"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-23"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-24"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-24"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    <div id="ant-25"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-25"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-26"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-26"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-27"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-27"> </span></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">m</th>
                                <th scope="col">f</th>
                                <th scope="col">n</th>
                                <th scope="col">Pl.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nominativ</th>
                                <td class="px-2">
                                    <div id="ant-28"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-28"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-29"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-29"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-30"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-30"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-31"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-31"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Akkusativ</th>
                                <td class="px-2">
                                    <div id="ant-32"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-32"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-33"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-33"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-34"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-34"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-35"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-35"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Dativ</th>
                                <td class="px-2">
                                    <div id="ant-36"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-36"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-37"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-37"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-38"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-38"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-39"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-39"> </span></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">m</th>
                                <th scope="col">f</th>
                                <th scope="col">n</th>
                                <th scope="col">Pl.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nominativ</th>
                                <td class="px-2">
                                    <div id="ant-40"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-40"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-41"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-41"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-42"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-42"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-43"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-43"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Akkusativ</th>
                                <td class="px-2">
                                    <div id="ant-44"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-44"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-45"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-45"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-46"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-46"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-47"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-47"> </span></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Dativ</th>
                                <td class="px-2">
                                    <div id="ant-48"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-48"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-49"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-49"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-50"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-50"> </span></div>
                                </td>
                                <td class="px-2">
                                    <div id="ant-51"></div>
                                    <div class="input-group"><span class="sen">
                                            <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                                aria-describedby="basic-addon1"
                                                class="text-center form-control q border-bottom-only rounded-0
                                                text-lowercase" id="qst-51"> </span></div>
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

    <!-- 여러개의 답이 인정되어야 하는 경우는 배열로 처리 -->
    <!-- 확인하는 단계에서는 배열일 경우 모두 대치 -->

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
        var an = ["ich", "mich", "mir", "du", "dich", "dir", "Sie", "Sie",
            "Ihnen", "er", "ihn", "ihm", "sie", "sie", "ihr", "es", "es",
            "ihm", "wir", "uns", "uns", "ihr", "euch", "euch", "sie", "sie",
            "ihnen", "ein", "eine", "ein", "-", "einen", "eine", "ein", "-",
            "einem", "einer", "einem", "-", "der", "die", "das", "die",
            "den", "die", "das", "die", "dem", "der", "dem", "den"
        ];

        $(document).ready(function () {
            /* 입력하는 문자 확인(정답 표시 없음) 여기부터 */ /* 값 확인해보자, io값이 참이면 전체 검사 */
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
            });
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
                    /* 답 맞춰 볼까? */
                    for (var i = 0; i < an.length; i++) {
                        var oran = $("#qst-" + (i + 1)).val();
                        if (rfchk($("#qst-" + (i + 1)), true)) {
                            $("#qst-" + (i + 1)).addClass(
                                "bg-success text-white rounded font-weight-bold p-1 px-2 ms-1");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr("disabled", true);
                            $("#qst-" + (i + 1)).addClass("wa");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after("<div class=\"w-100 ra t-6\">" + an[i] +
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
                                    $("#qst-" + (i + 1)).closest("span.sen").after(r);
                                } else {
                                    $("#qst-" + (i + 1)).after(r);
                                }
                            }
                        }
                        if ($("#qst-" + (i + 1)).hasClass("bg-success")) {
                            ri++;
                        }
                    };

                    /* 정답 확인 div 상자 배경색 속성 없애기 */
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
                    $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                    $(this).prop("disabled", true);
                    $(".tran").show();
                    $(this).attr("id", "done");
                } else {
                    alert("모든 문제를 풀어주세요!");
                };
            });

            var pan = new Array();
            pan = [1, 2, 4, 5, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 19, 20, 21, 22, 23, 24, 25, 26, 28, 29, 30,
                31, 32, 33, 34, 35, 39, 40, 41, 42, 43, 44, 45, 46, 47
            ];
            for (var p = 0; p < pan.length; p++) {
                var pann = "#qst-" + pan[p];
                $(pann).val(an[(pan[p] - 1)]);
                $(pann).prop("disabled", true);
                $(pann).addClass("bg-success text-white font-weight-bold");
                $(pann).closest("tr").find(".tran").show();
            }
        });

    </script>
    </body>

</html>
