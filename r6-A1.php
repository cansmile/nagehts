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
                    <h2> Hören Sie und wählen Sie aus.
                    <small><br> 듣고 선택하세요.</small>
                    <button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
                    HV
                    </button>
                    </h2>
                    <h3>[ <small>음성을 듣고 내용과 일치하는 문장을 선택하세요.<br><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장과 번역이 나옵니다.</small> ]</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><strong><button type="button" id="1" class="so btn btn-outline-primary">▶</button>&nbsp;1. Tim Sager</strong></div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-1.png" alt="a. Ich fahre gern Rad." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">a. Ich fahre gern Rad.<span class="tran"><small><br>나는 자전거 타는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-2.png" alt="b. Ich lese gern Bücher." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">b. Ich lese gern Bücher.<span class="tran"><small><br>나는 책 읽는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-3.png" alt="c. Ich spiele gern Fußball." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">c. Ich spiele gern Fußball.<span class="tran"><small><br>나는 축구 하는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-4.png" alt="d. Ich fahre gern Auto." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">d. Ich fahre gern Auto.<span class="tran"><small><br>나는 자동차 운전하는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><strong><button type="button" id="2" class="so btn btn-outline-danger">▶</button>&nbsp;2. Maria Adam</strong></div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-5.png" alt="a. Ich schlafe gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">a. Ich schlafe gern.<span class="tran"><small><br>나는 자는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-6.png" alt="b. Ich esse gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">b. Ich esse gern.<span class="tran"><small><br>나는 먹는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-7.png" alt="c. Ich gehe gern einkaufen." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">c. Ich gehe gern einkaufen.<span class="tran"><small><br>나는 쇼핑하는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-8.png" alt="d. Ich arbeite gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">d. Ich arbeite gern.<span class="tran"><small><br>나는 일하는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><strong><button type="button" id="3" class="so btn btn-outline-success">▶</button>&nbsp;3. Mai Keller</strong></div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-9.png" alt="a. Ich koche gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">a. Ich koche gern.<span class="tran"><small><br>나는 요리하는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-10.png" alt="b. Ich treffe gern Freunde." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">b. Ich treffe gern Freunde.<span class="tran"><small><br>나는 친구들 만나는거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-11.png" alt="c. Ich schwimme gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">c. Ich schwimme gern.<span class="tran"><small><br>나는 수영하는 거 좋아.</small></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <table class="table table-borderless">
                        <tr>
                            <td height="300" class="text-center align-middle"><img src="./<?=$root ?>images/Reihe 6/Reihe-6-A1-12.png" alt="d. Ich putze gern." style="max-height: 240px; max-width: 240px;"></td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-12">
                                    <div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
                                        <input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">○</label>
                                    </div>
                                    <div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
                                        <input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">×</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">d. Ich putze gern.<span class="tran"><small><br>난 청소하는거 좋아.</small></span></td>
                        </tr>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?=$root ?>js/popper.min.js"></script>
    <script src="./<?=$root ?>js/bootstrap.js"></script>
    <script src="./<?=$root ?>js/howler.core.js"></script>
    <!-- 맞고 틀리는지 소리 -->
    <?php require_once("./{$root}oxsound.php"); ?>
    <script>
        $("#0").hide();
        $(".tran").hide();

        $(document).ready(function() {
            // 소리 출력 전역 변수와 함수
            var sen=new Array(), pa=new Array(), he=new Array(), last;

            $(".so").each(function() {
                var t=$(this);
                var ti=t.attr("id");
                sen[ ti]=0;
                pa[ ti]=t.html();
            }

            );

            function stopAll() {
                $(".so").each(function() {
                    $(this).html(pa[ $(this).attr("id")]);
                }

                );
            }

            // 문제 재생
            var nagehts=new Howl( {

                src: [ "./<?php echo($root); ?>sounds/Reihe 6/r6 A1.mp3"],
                    sprite: {
                    "0": [3061, 83124],
                        "1": [17205, 22784],
                        "2": [43021, 22277],
                        "3": [68184, 18001]
                }

                ,
                html5: true,
                volume: 1,
                format: "mp3",
                preload: true,
                onloaderror: function() {
                    $(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
                    console.log("다시 읽어주세요!");
                }

                , onload: function() {
                    $("[data-toggle='popover']").popover( {
                        delay : {
                            'hide': 1000
                        }

                        , container : "body"
                    }

                    );

                    $(".pop").click(function () {

                        // 가장 먼저 지문에 'an' 넣기
                        if ( !$(this).siblings().hasClass("an")) {
                            $(this).addClass("an");
                            $(this).addClass("btn-warning");
                            $(this).parent().children().removeClass("btn-light");
                        }

                        ;
                    }

                    );

                    // 팝업 내용 사라지기
                    $(".pop").popover().click(function() {
                        setTimeout(function() {
                            $(".pop").popover('hide');
                        }

                        , 500);
                    }

                    );

                    // 정답확인
                    $("#chk").on("click", function() {
                        if ($(".an").length < $(".q").length) {
                            var na="";

                            $(".q").each(function() {
                                if ( !$(this).find("div").hasClass("an")) {
                                    if (na !="") {
                                        na +=", ";
                                    }

                                    na +=$(this).attr("id").substr(4);
                                }

                                ;
                            }

                            );
                            alert("모든 문제를 풀어주세요.");
                            // alert(na + "번 문제를 풀어주세요.");
                        }

                        else {
                            $(".tran").show();

                            $(".pop").each(function() {
                                $(this).removeClass("btn-info");

                                if ($(this).hasClass("o") && $(this).hasClass("an")) {
                                    $(this).removeClass("btn-warning");
                                    $(this).addClass("btn-success");
                                }

                                else if ($(this).hasClass("o")) {
                                    $(this).addClass("btn-warning font-weight-bold");
                                }

                                else if ($(this).hasClass("an")) {
                                    $(this).addClass("btn-danger");
                                }

                                else {
                                    $(this).addClass("btn-light");
                                }

                                ;
                            }

                            );
                            $(this).removeClass("btn-light ");
                            // 정답 확인 div 상자 배경색 속성 없애기
                            $(this).removeClass("btn-light ");
                            var qa=$(".q").length;
                            // 전체 문항 수
                            var qr=$(".btn-success").length;
                            // 맞춘 항목 수
                            var pe=(qr / qa) * 100;
                            // 정답 비율
                            var tcl="white";

                            // 기본 문자색
                            // 분류 기준은 100%, 80%, 60%, 40%
                            if(pe > 99) {
                                var st="원어민이세요?";
                                var cl="lime";
                                var tcl="dark";
                            }

                            else if(pe > 74) {
                                var st="어! 좀 하시는데요~^^";
                                var cl="success";
                            }

                            else if(pe > 49) {
                                var st="쓰읍~ 다시 해 보실까요?";
                                var cl="primary";
                            }

                            else {
                                var st="좀 더 분발해 주세요~";
                                var cl="danger";
                            }

                            $(this).addClass("btn-"+ cl + " text-"+ tcl);
                            $(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
                        }

                        ;
                    }

                    );
                    $("#0").show();
                    $(".alert").hide();

                    // $("#qst-1>div.o").addClass("an");
                    // $("#qst-1>div.o").addClass("btn-warning");
                    // $("#qst-1>div.o").removeClass("btn-light");
                    $(".so").on("click", function() {
                        var t=$(this);
                        var ti=t.attr("id");

                        if (($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
                            $("#last").text(ti);
                            t.text("■");
                            nagehts.seek();
                            nagehts.play(ti);
                            sen[ ti]++;
                            last=ti;
                            $("#cnt-"+ ti).text(sen[ ti]);
                        }

                        else if (last==ti && nagehts.playing($("div#last").text())) {
                            $("#last").text("");
                            t.html(pa[ ti]);
                            nagehts.pause();
                            sen[ ti]--;
                            $("#cnt-"+ ti).text(sen[ ti]);
                        }
                    }

                    );
                }

                , onend: function() {
                    $("div#last").text("");
                    stopAll();
                    $("#cnt-"+last).text(sen[last]);

                    if(last==0) {
                        if(sen[last]==2) {
                            $(".tran").show();

                            $(".so").each(function() {
                                pa[last]=$("#"+last).html();
                            }

                            );
                        }
                    }

                    else if(sen[last]==2) {
                        if($("#"+last).hasClass("itm")) {
                            $("#"+last+">.tran").show();
                        }

                        $("#"+last).closest("tr").find(".tran").show();
                        pa[last]=$("#"+last).html();
                    }
                }
            }

            );
        }

        );

    </script>
    <?php require "footer.php"; ?>
</body>
</html>
