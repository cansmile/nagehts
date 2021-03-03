<?php require_once("heading.php"); ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인
                            문장이 붉게 변합니다.</small> ]</h2>
                    <h3>[ <small>입력한 문장이 정답인 경우 나타나는 선택지에서 동사를 고르세요.</small> ]
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ms-2 btn-inline so"
                            id="0">
                            HV
                        </button>
                        </h2>
                        <h3>[ <small><button type="button"
                                    class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button>
                                버튼 또는 <button type="button"
                                    class="btn btn-sm btn-outline-secondary disabled">▶</button>
                                버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">1.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">heißt</span>|<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">wie</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-1"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 1 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F1" id="txt-1">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-1">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Wie
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            er
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>그는 이름이
                                            뭔가요?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">Tommy</span>|<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">heißt</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-2"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 2 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F2" id="txt-2">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-2">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Er
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            heißt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Tommy
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>그는
                                            토미라고해요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">2.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">wohnst</span>|<span
                                            class="py-2 px-2 d-inline-block">du</span>|<span
                                            class="py-2 px-2 d-inline-block">wo</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-3"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 3 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F3" id="txt-3">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-3">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Wo
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            wohnst
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            du
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>어디에서
                                            사니?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">in
                                            Daegu</span>|<span
                                            class="py-2 px-2 d-inline-block">du</span>|<span
                                            class="py-2 px-2 d-inline-block">wohnst</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-4"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 4 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F4" id="txt-4">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-4">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            Wohnst
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            du
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            in Daegu
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>대구에서
                                            사니?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">Ja,</span>|<span
                                            class="py-2 px-2 d-inline-block">in
                                            Daegu</span>|<span
                                            class="py-2 px-2 d-inline-block">ich</span>|<span
                                            class="py-2 px-2 d-inline-block">wohne</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-5"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 5 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F5" id="txt-5">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-5">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Ja,
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ich
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            wohne
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            in Daegu
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>응, 난
                                            대구에서 살아.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">3.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">kommt</span>|<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">woher</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-6"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 6 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F6" id="txt-6">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-6">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Woher
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            kommt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            er
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>그는 어디에서
                                            왔나요</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">aus
                                            Chile</span>|<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">kommt</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-7"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 7 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F7" id="txt-7">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-7">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Er
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            kommt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            aus Chile
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>그는 칠레
                                            출신이에요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">4.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">in
                                            Asien</span>|<span
                                            class="py-2 px-2 d-inline-block">Vietnam</span>|<span
                                            class="py-2 px-2 d-inline-block">liegt</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-8"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 8 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F8" id="txt-8">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-8">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            Liegt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Vietnam
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            in Asien
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>베트남은 아시아
                                            대륙에 있나요?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">ja,</span>|<span
                                            class="py-2 px-2 d-inline-block">in
                                            Asien</span>|<span
                                            class="py-2 px-2 d-inline-block">Vietnam</span>|<span
                                            class="py-2 px-2 d-inline-block">liegt</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-9"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 9 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F9" id="txt-9">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-9">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Ja,
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Vietnam
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            liegt
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            in Asien
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>네, 베트남은
                                            아시아 대륙에 있어요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">5.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">sprechen</span>|<span
                                            class="py-2 px-2 d-inline-block">Sie</span>|<span
                                            class="py-2 px-2 d-inline-block">welche
                                            Sprachen</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-10"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 10 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F10" id="txt-10">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-10">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Welche
                                            Sprachen
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            sprechen
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Sie
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>당신은 어떤
                                            언어를 말하나요?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">Deutsch
                                            und Englisch</span>|<span
                                            class="py-2 px-2 d-inline-block">ich</span>|<span
                                            class="py-2 px-2 d-inline-block">spreche</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-11"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 11 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F11" id="txt-11">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-11">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Ich
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            spreche
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Deutsch und
                                            Englisch
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>저는 독일어와
                                            영어를 말해요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">6.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">Koreanisch</span>|<span
                                            class="py-2 px-2 d-inline-block">du</span>|<span
                                            class="py-2 px-2 d-inline-block">sprichst</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-12"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 12 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F12" id="txt-12">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-12">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            Sprichst
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            du
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Koreanisch
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>너는 한국어
                                            말할 수 있니?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">ja,</span>|<span
                                            class="py-2 px-2 d-inline-block">Koreanisch</span>|<span
                                            class="py-2 px-2 d-inline-block">ich</span>|<span
                                            class="py-2 px-2 d-inline-block">spreche</span>|<span
                                            class="py-2 px-2 d-inline-block">gut</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-13"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 13 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F13" id="txt-13">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-13">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Ja,
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ich
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            spreche
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            gut
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Koreanisch
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>그럼, 나
                                            한국어 잘해.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">7.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">du</span>|<span
                                            class="py-2 px-2 d-inline-block">Chinesin</span>|<span
                                            class="py-2 px-2 d-inline-block">bist</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-14"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 14 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F14" id="txt-14">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-14">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            Bist
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            du
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Chinesin
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>너는
                                            중국인이니?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">nein,</span>|<span
                                            class="py-2 px-2 d-inline-block">Koreanerin</span>|<span
                                            class="py-2 px-2 d-inline-block">ich</span>|<span
                                            class="py-2 px-2 d-inline-block">bin</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-15"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 15 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F15" id="txt-15">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-15">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Nein,
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ich
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            bin
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Koreanerin
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>아니, 난
                                            한국인이야.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block">8.&nbsp;<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">Deutscher</span>|<span
                                            class="py-2 px-2 d-inline-block">ist</span>|<span
                                            class="py-2 px-2 d-inline-block">?</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-16"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 16 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F16" id="txt-16">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-16">
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            Ist
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            er
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Deutscher
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            ?
                                        </div>
                                    </div>
                                    <span class="tran text-end"
                                        style="width: 100%;"><br><small>그는
                                            독일인인가요?</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">
                                    <div class="d-inline-block"><span
                                            class="py-2 px-2 d-inline-block">nein,</span>|<span
                                            class="py-2 px-2 d-inline-block">Franzose</span>|<span
                                            class="py-2 px-2 d-inline-block">er</span>|<span
                                            class="py-2 px-2 d-inline-block">ist</span>|<span
                                            class="py-2 px-2 d-inline-block">.</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">&nbsp;</th>
                                <td>
                                    <div class="ant t-6" id="ant-17"></div><span
                                        class="sen">
                                        <div class="input-group">
                                            [ 17 ]
                                            <input autocomplete="off" type="text"
                                                class="form-control qt border-bottom-only rounded-0 mx-1 t-6"
                                                aria-label="F17" id="txt-17">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-end btn-group q"
                                        data-toggle="buttons" role="group" id="qst-17">
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Nein,
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            er
                                        </div>
                                        <div class="btn btn-light pop o"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답!">
                                            ist
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            Franzose
                                        </div>
                                        <div class="btn btn-light pop x"
                                            data-toggle="popover"
                                            data-container="body"
                                            data-placement="top"
                                            data-content="정답이 아니에요.">
                                            .
                                        </div>
                                    </div>
                                    <span class="tran text-end text-"
                                        style="width: 100%;"><br><small>아뇨, 그는
                                            프랑스인이에요.</small></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-126col-lg-12"
                    id="chk">
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
        $(".q").hide();
        $("#0").hide();
        $(".pop").addClass(
            "border border-dark border-bottom-only");
        var an = new Array();
        var an = ["Wie heißt er?", "Er heißt Tommy.", "Wo wohnst du?",
            "Wohnst du in Daegu?", "Ja, ich wohne in Daegu.",
            "Woher kommt er?", "Er kommt aus Chile.",
            "Liegt Vietnam in Asien?", "Ja, Vietnam liegt in Asien.",
            "Welche Sprachen sprechen Sie?",
            "Ich spreche Deutsch und Englisch.", "Sprichst du Koreanisch?",
            "Ja, ich spreche gut Koreanisch.", "Bist du Chinesin?",
            "Nein, ich bin Koreanerin.", "Ist er Deutscher?",
            "Nein, er ist Franzose."
        ];

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
                    "./dev/sounds/Reihe 2/r2 E4.mp3"],
                sprite: {
                    "0": [517, 87366]
                },
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function () {
                    $(".alert").append(
                        "<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                        );
                    console.log("다시 읽어주세요!");
                },
                onload: function () {
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
                            for (var fd = 0; fd < an[qn]
                                .length; fd++) {
                                if (io) {
                                    b = an[qn][fd];
                                } else {
                                    b = an[qn][fd].substr(0,
                                        q);
                                }
                                b = b.replace(/ /gi, "");

                                if (a == b) {
                                    return true;
                                }
                            }

                        }
                    }

                    $("[data-toggle='popover']").popover({
                        delay: {
                            'hide': 1000
                        },
                        container: "body"
                    });

                    $(".pop").click(function () {
                        /* 가장 먼저 지문에 'an' 넣기 */
                        if (!$(this).siblings()
                            .hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass(
                                "btn-warning");
                            $(this).parent()
                                .children()
                                .removeClass(
                                    "btn-light");
                        };

                        /* 문제 풀이 정도 업데이트 */
                        var perc = Math.round(($(
                                ".an")
                            .length / $(
                                ".q").length
                            ) * 100);
                        $(".progress>.bar").attr(
                            "width", perc + "%;"
                            );

                    });

                    /* 팝업 내용 사라지기 */
                    $(".pop").popover().click(function () {
                        setTimeout(function () {
                            $(".pop")
                                .popover(
                                    'hide');
                        }, 500);
                    });


                    $(".qt").on("keyup", function () {
                        $(this).removeClass(
                            "bg-danger");
                        $(this).removeClass(
                            "bg-success");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-danger");
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .removeClass(
                                "text-success");

                        if (rfchk($(this))) {
                            $(this).addClass(
                                "text-white font-weight-bold"
                                );
                            $(this).addClass(
                                "bg-success");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-success");
                        } else {
                            $(this).addClass(
                                "text-white font-weight-bold"
                                );
                            $(this).addClass(
                                "bg-danger");
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .addClass(
                                    "text-danger");
                        }

                        if (!$(this).val()) {
                            $(this).removeClass(
                                "bg-danger");
                            $(this).removeClass(
                                "bg-success");
                            $(this).removeClass(
                                "text-white font-weight-bold"
                                );
                        }

                        if ($(this).val()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .show();
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                            .val());
                        } else {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .hide();
                        }
                    })

                    $(".qt").on("focusin", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .show();
                        if (!$("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            $("#ant-" + $(this)
                                    .attr("id")
                                    .substr(4))
                                .text($(this)
                            .val());
                        }
                        if ($("#ant-" + $(this)
                                .attr("id").substr(
                                    4)).text()) {
                            if (rfchk($(this))) {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                    );
                                $(this).addClass(
                                    "bg-success"
                                    );
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-success"
                                        );
                            } else {
                                $(this).addClass(
                                    "text-white font-weight-bold"
                                    );
                                $(this).addClass(
                                    "bg-danger");
                                $("#ant-" + $(this)
                                        .attr("id")
                                        .substr(4))
                                    .addClass(
                                        "text-danger"
                                        );
                            }
                        }
                    })

                    $(".qt").on("focusout", function () {
                        $("#ant-" + $(this).attr(
                                "id").substr(4))
                            .hide();

                        if (rfchk($(this), true)) {
                            $(this).addClass(
                                "bg-success");
                            $(this).addClass(
                                "text-white");
                        } else {
                            $(this).addClass(
                                "bg-danger");
                        }

                        if ($(this).val()) {
                            if ($(this).hasClass(
                                    "bg-danger")) {
                                x.play();
                            } else if ($(this)
                                .hasClass(
                                    "bg-success")) {
                                o.play();
                                $(this).prop(
                                    "disabled",
                                    true);
                                $(this).closest(
                                        "table")
                                    .find(".q")
                                    .show();
                            }
                        }

                        $(this).removeClass(
                            "bg-danger");

                        if (!$(this).attr(
                                "disabled")) {
                            $(this).removeClass(
                                "text-white font-weight-bold"
                                );
                            $(this).removeClass(
                                "bg-success");
                            /* $(this).closest("table").find(".tran").each(function () { */
                            /*     $(this).show(); */
                            /* }) */
                        }
                    })

                    /* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
                    $("#chk").on("click", function () {
                        var na = "";
                        var da = "";
                        var ri = 0;
                        var txt = $(".qt").length;
                        $(".q").each(function () {
                            if (!$(this)
                                .find("div")
                                .hasClass(
                                    "an")) {
                                if ($(this)
                                    .css(
                                        "display"
                                        ) !=
                                    "none"
                                    ) {
                                    da +=
                                        "< " +
                                        $(
                                            this)
                                        .attr(
                                            "id"
                                            )
                                        .substr(
                                            4
                                            ) +
                                        " >";
                                }
                            };
                        });

                        $(".qt").each(function () {
                            if ($(this)
                                .val() ==
                                "") {
                                na += "[ " +
                                    $(this)
                                    .attr(
                                        "id"
                                        )
                                    .substr(
                                        4) +
                                    " ]";
                            }
                        })

                        if (na == "" && da == "") {
                            for (var i = 0; i < an
                                .length; i++) {
                                var oran = $(
                                        "#txt-" + (
                                            i + 1))
                                    .val();
                                if (rfchk($("#txt-" +
                                            (i + 1)
                                            ), true
                                        )) {
                                    $("#txt-" + (i +
                                            1))
                                        .addClass(
                                            "bg-success text-white rounded font-weight-bold p-1 px-2 ms-1"
                                            );
                                    $("#txt-" + (i +
                                            1))
                                        .removeClass(
                                            "rounded-0"
                                            );
                                } else {
                                    $("#qst-" + (i +
                                        1)).val(
                                        oran);
                                    $("#qst-" + (i +
                                            1))
                                        .addClass(
                                            "wa"
                                            );
                                    $("#qst-" + (i +
                                            1))
                                        .attr(
                                            "disabled",
                                            true);
                                    $("#qst-" + (i +
                                            1))
                                        .removeClass(
                                            "rounded-0"
                                            );

                                    if (!$.isArray(
                                            an[i]
                                            )) {
                                        $("#qst-" +
                                                (i +
                                                    1)
                                                )
                                            .after(
                                                "<div class=\"w-100 ra t-6\">" +
                                                an[
                                                    i] +
                                                "</div>"
                                                );
                                    } else {
                                        /* 2 이상인 경우 */
                                        var r =
                                            "<div class=\"w-100 ra t-6\">";
                                        for (var fd =
                                                (an[i]
                                                    .length -
                                                    1
                                                    ); fd >=
                                            0; fd--
                                            ) {
                                            if (fd <
                                                (an[i]
                                                    .length -
                                                    1
                                                    )
                                                ) {
                                                r = r +
                                                    " / ";
                                            }
                                            r = r +
                                                an[
                                                    i]
                                                [
                                                fd];
                                        }
                                        r = r +
                                            "</div>";
                                        if ($(
                                                "span.sen")
                                            .length >
                                            0) {
                                            $("#qst-" +
                                                    (i +
                                                        1)
                                                    )
                                                .closest(
                                                    "span.sen"
                                                    )
                                                .after(
                                                    r
                                                    );
                                        } else {
                                            $("#qst-" +
                                                    (i +
                                                        1)
                                                    )
                                                .after(
                                                    r
                                                    );
                                        }
                                    }
                                    $(".qt").each(
                                        function () {
                                            if (!
                                                $(
                                                    this)
                                                .hasClass(
                                                    "bg-success"
                                                    )
                                                ) {
                                                $(this)
                                                    .addClass(
                                                        "bg-danger text-white font-weight-bold rounded"
                                                        );
                                                $(this)
                                                    .attr(
                                                        "disabled",
                                                        true
                                                        );

                                            }
                                        })
                                }
                                if ($("#txt-" + (i +
                                        1))
                                    .hasClass(
                                        "bg-success"
                                        )) {
                                    ri++;
                                }
                            }

                            $(this).prop("disabled",
                                true);
                            $(".tran").show();
                            $(this).attr("id",
                                "done");


                            $(".pop").each(
                                function () {
                                    $(this)
                                        .removeClass(
                                            "btn-info"
                                            );

                                    if ($(this)
                                        .hasClass(
                                            "o"
                                            ) &&
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .removeClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .addClass(
                                                "btn-success font-weight-bold"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-warning font-weight-bold text-dark"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-danger"
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };
                                });


                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            var qa = $(".q")
                                .length + $(".qt")
                                .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".bg-success")
                                .length + $(
                                    ".btn-success")
                                .length; /* 맞춘 항목 수 */
                            var pe = (qr / qa) *
                            100; /* 정답 비율 */
                            var tcl =
                            "white"; /* 기본 문자색 */

                            /* 분류 기준은 100%, 80%, 60%, 40% */
                            if (pe > 99) {
                                var st = "원어민이세요?";
                                var cl = "lime";
                                var tcl = "dark";
                            } else if (pe > 74) {
                                var st =
                                    "어! 좀 하시는데요~^^";
                                var cl = "success";
                            } else if (pe > 49) {
                                var st =
                                    "쓰읍~ 다시 해 보실까요?";
                                var cl = "primary";
                            } else {
                                var st =
                                    "좀 더 분발해 주세요~";
                                var cl = "danger";
                            }

                            $(this).addClass(
                                "btn-" + cl +
                                " text-" + tcl);
                            $(this).html("<h4>" +
                                qa + "문제 중 " +
                                qr +
                                "개를 맞히셨네요!<br>" +
                                st);

                        } else if (na != "" && da ==
                            "") {
                            alert(na +
                                "번 문제를 입력하세요!");
                        } else if (na == "" && da !=
                            "") {
                            alert(da +
                                "번 문제를 선택하세요!");
                        } else if (na != "" && da !=
                            "") {
                            alert(da +
                                "번 문제를 선택하세요!\n" +
                                na +
                                "번 문제를 입력하세요!");
                        }
                    })

                    var pan = new Array();
                    /* pan=[1,2,3,4,5,6,7,8,9,10]; */
                    pan = [1, 2, 5, 7, 9, 11, 13, 15, 17];
                    for (var p = 0; p < pan.length; p++) {
                        var pann1 = "#txt-" + pan[p];
                        var pann2 = "#qst-" + pan[p];
                        $(pann1).val(an[(pan[p] - 1)]);
                        $(pann1).addClass(
                            "bg-success text-white font-weight-bold"
                            );
                        $(pann1).prop("disabled", true);
                        $(pann2).show();
                        /* $(pann).closest("tr").find(".tran").show(); */
                    }

                    $("#option1-2").parent().addClass("an");
                    $("#option1-2").parent().addClass(
                        "btn-warning");
                    $("#option1-2").parent().removeClass(
                        "btn-light");

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
                    $("#0").show();

                },
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);
                }


            });

        })

    </script>
    </body>

</html>
