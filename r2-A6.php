<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!-- 알림 시작 -->
    <?php require_once "ready.php"; ?>
    <!-- 알림 끝 -->
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Richtig oder falsch? Markieren Sie.<br>
                        <small>어느 것이 옳은지 체크해보세요.</small>
                        <button type="button"
                            class="btn btn-<?php echo($color); ?> ml-2 btn-inline so"
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-center align-middle"><button
                                        type="button" id="18"
                                        class="btn btn-danger btn-lg so">▶</button>
                                </th>
                                <td colspan="2"
                                    class="text-center text-white bg-danger align-middle h3"
                                    height="20px">Dialog 1</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="1"
                                        class="btn btn-outline-danger so">▶</button>
                                </th>
                                <td><span class="sen">Ich heiß<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-1">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option1"
                                                    autocomplete="off"><label
                                                    for="option1">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option2"
                                                    autocomplete="off"><label
                                                    for="option2">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option3"
                                                    autocomplete="off"><label
                                                    for="option3">en</label>
                                            </div>
                                        </div>
                                        Tim.<span class="ans"></span><span
                                            class="tran"><br><small>나는 팀이라고
                                                해.</small></span>
                                    </span></td>
                                <td rowspan="5"
                                    class="text-center align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 2/Reihe-2-A6-1.png"
                                        alt="Tim"
                                        style="max-width: 320px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="2"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td><span class="sen">Ich komm<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-2">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option4"
                                                    autocomplete="off"><label
                                                    for="option4">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option5"
                                                    autocomplete="off"><label
                                                    for="option5">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option6"
                                                    autocomplete="off"><label
                                                    for="option6">en</label>
                                            </div>
                                        </div>
                                        aus Frankreich.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>나는 프랑스
                                                출신이야.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="3"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td><span class="sen">Ich wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-3">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option7"
                                                    autocomplete="off"><label
                                                    for="option7">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option8"
                                                    autocomplete="off"><label
                                                    for="option8">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option9"
                                                    autocomplete="off"><label
                                                    for="option9">en</label>
                                            </div>
                                        </div>
                                        in Paris.<span class="ans"></span><span
                                            class="tran"><br><small>나는 파리에
                                                살아.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="4"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td>Das ist mein Vater.<span
                                        class="ans"></span><span
                                        class="tran"><br><small>이 분은 나의
                                            아버지야.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="5"
                                        class="so btn btn-outline-danger">▶</button>
                                </th>
                                <td><span class="sen">Er wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-4">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option10"
                                                    autocomplete="off"><label
                                                    for="option10">e</label>
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option11"
                                                    autocomplete="off"><label
                                                    for="option11">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option12"
                                                    autocomplete="off"><label
                                                    for="option12">en</label>
                                            </div>
                                        </div>
                                        in Marseille.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>그는 마르세유에 살고
                                                계셔.</small></span>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-center align-middle"><button
                                        type="button" id="19"
                                        class="so btn btn-warning btn-lg">▶</button>
                                </th>
                                <td colspan="2"
                                    class="text-center bg-warning align-middle h3"
                                    height="20px">Dialog 2</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button type="button" id="6"
                                        class="so btn btn-outline-warning">▶</button>
                                </td>
                                <td><span class="sen">Ich heiß<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-5">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option13"
                                                    autocomplete="off"><label
                                                    for="option13">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option14"
                                                    autocomplete="off"><label
                                                    for="option14">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option15"
                                                    autocomplete="off"><label
                                                    for="option15">en</label>
                                            </div>
                                        </div>
                                        Susi.<span class="ans"></span><span
                                            class="tran"><br><small>나는
                                                수시야.</small></span>
                                    </span></td>
                                <th scope="row" rowspan="7"
                                    class="text-center align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 2/Reihe-2-A6-2.png"
                                        alt="Susi"
                                        style="max-width: 320px; height: auto;">
                                </th>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="7"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td>Das ist mein Teddybär, Lars.<span
                                        class="ans"></span><span
                                        class="tran"><br><small>이것은 나의 태디베어야,
                                            라스야.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="8"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td><span class="sen">Ich wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-6">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option16"
                                                    autocomplete="off"><label
                                                    for="option16">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option17"
                                                    autocomplete="off"><label
                                                    for="option17">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option18"
                                                    autocomplete="off"><label
                                                    for="option18">en</label>
                                            </div>
                                        </div>
                                        in Seoul,<span class="ans"></span><span
                                            class="tran"><br><small>나는 서울에
                                                살아.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="9"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td><span class="sen">aber ich komm<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-7">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option19"
                                                    autocomplete="off"><label
                                                    for="option19">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option20"
                                                    autocomplete="off"><label
                                                    for="option20">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option21"
                                                    autocomplete="off"><label
                                                    for="option21">en</label>
                                            </div>
                                        </div>
                                        aus England.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>그렇지만 영국에서
                                                왔어.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="10"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td>Das ist meine Mutter.<span
                                        class="ans"></span><span
                                        class="tran"><br><small>이 분은 나의
                                            엄마야.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="11"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td><span class="sen">Sie heiß<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-8">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option22"
                                                    autocomplete="off"><label
                                                    for="option22">e</label>
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option23"
                                                    autocomplete="off"><label
                                                    for="option23">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option24"
                                                    autocomplete="off"><label
                                                    for="option24">en</label>
                                            </div>
                                        </div>
                                        Monalisa<span class="ans"></span><span
                                            class="tran"><br><small>그녀는 모나리자라고
                                                불려.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="12"
                                        class="so btn btn-outline-warning">▶</button>
                                </th>
                                <td><span class="sen">und wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-9">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option25"
                                                    autocomplete="off"><label
                                                    for="option25">e</label>
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option26"
                                                    autocomplete="off"><label
                                                    for="option26">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option27"
                                                    autocomplete="off"><label
                                                    for="option27">en</label>
                                            </div>
                                        </div>
                                        in Seoul.<span class="ans"></span><span
                                            class="tran"><br><small>그리고 서울에 살고
                                                계셔.</small></span>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-center align-middle"><button
                                        type="button" id="20"
                                        class="so btn btn-primary btn-lg">▶</button>
                                </th>
                                <td colspan="2"
                                    class="text-center text-white bg-primary align-middle h3"
                                    height="20px">Dialog 3</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><button type="button" id="13"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Ich komm<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-10">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option28"
                                                    autocomplete="off"><label
                                                    for="option28">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option29"
                                                    autocomplete="off"><label
                                                    for="option29">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option30"
                                                    autocomplete="off"><label
                                                    for="option30">en</label>
                                            </div>
                                        </div>
                                        aus der Türkei.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>나는
                                                터키출신이야.</small></span>
                                    </span></td>
                                <td rowspan="5"
                                    class="text-center align-middle"><img
                                        src="./<?php echo($root); ?>images/Reihe 2/Reihe-2-A6-3.png"
                                        alt="Wie"
                                        style="max-width: 320px; height: auto;">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="14"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Ich wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-11">
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option31"
                                                    autocomplete="off"><label
                                                    for="option31">e</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option32"
                                                    autocomplete="off"><label
                                                    for="option32">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option33"
                                                    autocomplete="off"><label
                                                    for="option33">en</label>
                                            </div>
                                        </div>
                                        in Dresden.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>나는 드레스덴에
                                                살아.</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="15"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td>Das ist mein Freund.<span
                                        class="ans"></span><span
                                        class="tran"><br><small>얘는 내
                                            친구야.</small></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="16"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">Er komm<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-12">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option34"
                                                    autocomplete="off"><label
                                                    for="option34">e</label>
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option35"
                                                    autocomplete="off"><label
                                                    for="option35">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option36"
                                                    autocomplete="off"><label
                                                    for="option36">en</label>
                                            </div>
                                        </div>
                                        aus Japan,<span class="ans"></span><span
                                            class="tran"><br><small>그는 일본에서
                                                왔어,</small></span>
                                    </span></td>
                            </tr>
                            <tr>
                                <th scope="row"><button type="button" id="17"
                                        class="so btn btn-outline-primary">▶</button>
                                </th>
                                <td><span class="sen">aber wohn<span
                                            class="nu"></span>
                                        <div class="btn-group btn-group-toggle border border-dark border-bottom-only q"
                                            data-toggle="buttons" id="qst-13">
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option37"
                                                    autocomplete="off"><label
                                                    for="option37">e</label>
                                            </div>
                                            <div class="btn btn-light pop o"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답!">
                                                <input type="radio"
                                                    name="options" id="option38"
                                                    autocomplete="off"><label
                                                    for="option38">t</label>
                                            </div>
                                            <div class="btn btn-light pop x"
                                                data-toggle="popover"
                                                data-container="body"
                                                data-placement="top"
                                                data-content="정답이 아니에요.">
                                                <input type="radio"
                                                    name="options" id="option39"
                                                    autocomplete="off"><label
                                                    for="option39">en</label>
                                            </div>
                                        </div>
                                        in Leipzig.<span
                                            class="ans"></span><span
                                            class="tran"><br><small>그렇지만 라이프치히에
                                                살아.</small></span>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 정답화인 버튼 시작 -->
            <div class="row">
                <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12"
                    id="chk">
                    정답확인
                </div>
            </div>
            <!-- 정답확인 버튼 끝 -->
        </div>
    </section>

    <div id="last" class="d-none"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <script src="./<?php echo($root); ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();
        $(document).ready(function () { /* 소리 출력 전역 변수와 함수 */
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
                    "./<?php echo($root); ?>sounds/Reihe 2/r2 A6.mp3"],
                sprite: {
                    "0": [978, 76196],
                    "1": [7482, 1779],
                    "2": [12024, 2227],
                    "3": [16926, 2252],
                    "4": [21968, 1800],
                    "5": [26000, 2140],
                    "6": [31557, 1889],
                    "7": [35254, 2634],
                    "8": [39800, 1970],
                    "9": [41885, 2189],
                    "10": [47976, 1702],
                    "11": [52014, 1700],
                    "12": [54132, 1738],
                    "13": [59576, 2533],
                    "14": [64497, 2008],
                    "15": [69109, 1792],
                    "16": [73013, 1988],
                    "17": [75034, 2042],
                    "18": [7540, 20648],
                    "19": [31571, 24438],
                    "20": [59576, 17506]
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

                    /* 정답확인 */
                    $("#chk").on("click", function () {
                        if ($(".an").length < $(
                                ".q").length) {
                            var na = "";
                            $(".q").each(
                        function () {
                                if (!$(this)
                                    .find(
                                        "div"
                                        )
                                    .hasClass(
                                        "an"
                                        )) {
                                    if (na !=
                                        ""
                                        ) {
                                        na +=
                                            ", ";
                                    }
                                    na += $(
                                            this)
                                        .attr(
                                            "id"
                                            )
                                        .substr(
                                            -
                                            1
                                            );
                                };
                            });

                            alert("모든 문제를 풀어주세요.");
                            /* alert(na + "번 문제를 풀어주세요."); */
                        } else {
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
                                                "btn-success"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-success font-weight-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "o")
                                        ) {
                                        $(this)
                                            .addClass(
                                                "btn-<?php echo($color); ?>"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .html(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .closest(
                                                        ".sen"
                                                        )
                                                    .find(
                                                        ".o"
                                                        )
                                                    .text()
                                                    )
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .addClass(
                                                "rounded p-1 px-2 text-white bg-danger font-weight-bold"
                                                );
                                        $(this)
                                            .closest(
                                                ".sen"
                                                )
                                            .find(
                                                ".ans"
                                                )
                                            .addClass(
                                                "rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2"
                                                );
                                    } else if (
                                        $(this)
                                        .hasClass(
                                            "an"
                                            )) {
                                        $(this)
                                            .addClass(
                                                "btn-warning"
                                                );
                                        $(this)
                                            .closest(
                                                "td"
                                                )
                                            .find(
                                                ".nu"
                                                )
                                            .text(
                                                $
                                                .trim(
                                                    $(
                                                        this)
                                                    .text()
                                                    )
                                                );
                                    } else {
                                        $(this)
                                            .addClass(
                                                "btn-light"
                                                );
                                    };
                                    $(this)
                                        .remove();
                                });
                            $(".tran").show();
                            $(".nu").show();
                            $(".q").hide();

                            /* 정답 확인 div 상자 배경색 속성 없애기 */
                            $(this).removeClass(
                                "btn-light ");

                            var qa = $(".q")
                            .length; /* 전체 문항 수 */
                            var qr = $(
                                    ".bg-success")
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
                                st + "</h4>");

                            $(this).attr("id",
                                "done");

                        };
                    });
                    $("#0").show();
                    $(".alert").hide();
                    /* 답 자동 채우기 */
                    var pan = new Array();
                    /* pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"]; */
                    pan = [1];
                    for (var p = 0; p < pan.length; p++) {
                        var pani = "#qst-" + pan[p] +
                            ">div.o";
                        $(pani).addClass("an");
                        $(pani).addClass("btn-warning");
                        $(pani).removeClass("btn-light");
                    }

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


                },
                onend: function () {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-" + last).text(sen[last]);
                }


            });
        });

    </script>
    <?php require "footer.php"; ?>
</body>

</html>
