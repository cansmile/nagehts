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
                    <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인
                            문장이 붉게 변합니다.</small> ]</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 px-0 mx-0">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center bg-light">&nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    ich</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    du</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    sie/es/er</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    wir</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    ihr</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    sie/Sie</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 px-0 mx-0">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center bg-light">
                                    möchten</th>
                                <th scope="col" class="text-center bg-light">wollen
                                </th>
                                <th scope="col" class="text-center bg-light">können
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div id="ant-1"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon1"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-1">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-2"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon2"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-2">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-3"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon3"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-3">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-7"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon7"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-7">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-8"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon8"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-8">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-9"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon9"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-9">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-13"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon13"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-13">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-14"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon14"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-14">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-15"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon15"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-15">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-19"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon19"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-19">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-20"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon20"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-20">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-21"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon21"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-21">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-25"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon25"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-25">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-26"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon26"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-26">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-27"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon27"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-27">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-31"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon31"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-31">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-32"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon32"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-32">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-33"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon33"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-33">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 d-lg-none d-xl-none d-md-block d-sm-block px-0
                    mx-0">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center bg-light">&nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    ich</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    du</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    sie/es/er</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    wir</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    ihr</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-light align-middle">
                                    sie/Sie</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 px-0 mx-0">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center bg-light">müssen
                                </th>
                                <th scope="col" class="text-center bg-light">dürfen
                                </th>
                                <th scope="col" class="text-center bg-light">sollen
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div id="ant-4"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon4"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-4">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-5"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon5"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-5">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-6"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon6"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-6">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-10"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon10"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-10">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-11"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon11"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-11">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-12"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon12"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-12">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-16"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon16"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-16">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-17"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon17"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-17">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-18"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon18"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-18">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-22"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon22"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-22">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-23"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon23"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-23">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-24"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon24"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-24">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-28"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon28"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-28">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-29"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon29"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-29">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-30"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon30"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-30">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ant-34"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon34"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-34">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-35"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon35"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-35">
                                    </div>
                                </td>
                                <td>
                                    <div id="ant-36"></div>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" placeholder="Antwort" aria-label="Antwort"
                                            aria-describedby="basic-addon36"
                                            class="text-center form-control q border border-dark border-bottom-only
                                            rounded-0 mx-2 px-2 py-1" id="qst-36">
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
        var an = [
            "möchte", "will", "kann", "muss", "darf", "soll",
            "möchtest", "willst", "kannst", "musst", "darfst", "sollst",
            "möchte", "will", "kann", "muss", "darf", "soll",
            "möchten", "wollen", "können", "müssen", "dürfen", "sollen",
            "möchtet", "wollt", "könnt", "müsst", "dürft", "sollt",
            "möchten", "wollen", "können", "müssen", "dürfen", "sollen"
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

            /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */ $("#chk").on("click", function () {
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
                                "bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                        } else {
                            $("#qst-" + (i + 1)).val(oran);
                            $("#qst-" + (i + 1)).attr("disabled", true);
                            $("#qst-" + (i + 1)).addClass("wa");
                            $("#qst-" + (i + 1)).removeClass("rounded-0");
                            if (!$.isArray(an[i])) {
                                $("#qst-" + (i + 1)).after("<div class=\"d-block ra t-6\">" + an[i] +
                                    "</div>");
                            } else {
                                /* 2 이상인 경우 */
                                var r = "<div class=\"d-block ra t-6\">";
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
            pan = [2, 3, 4, 6, 7, 9, 11, 12, 13, 14, 16, 18, 20, 21, 23, 25, 27, 28, 30, 31, 32, 35, 36];
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
