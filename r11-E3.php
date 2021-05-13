<?php require_once( "heading.php" ); ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
    <div class="container">
        <!-- 고르는 아이템들 -->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Hören Sie und sprechen Sie nach.<br>
                    <small>듣고 따라 하세요.</small>
                    <button type="button"
                            class="btn btn-<?php echo( $color ); ?> ms-2 btn-inline so"
                            id="0">
                        HV
                    </button>
                    <h3>[ <small>
                            <button type="button"
                                    class="btn disabled btn-sm btn-<?php echo( $color ); ?>">HV
                            </button>
                            버튼 또는
                            <button type="button"
                                    class="btn btn-sm btn-outline-secondary disabled">▶
                            </button>
                            버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]
                    </h3>
                    <h3>[ <small>그림을 누르면 그림에 대한 음성이 재생됩니다.</small> ]</h3>
                    <h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-1">
                <span class="sen">□  Guten Tag, kann ich Ihnen helfen?</span>
                <span class="tran"><br /><small>안녕하세요? 도와드릴까요?</small></span>
            </div>
            <div class="col-12 my-1">
                ◇  Ich suche ein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-1">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                grau<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-2">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Blazer, der zu mein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-3">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                schwarz<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-4">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Hose passt.
                <span class="tran"><br /><small>제 검정색 바지에 어울리는 회색 캐쥬얼재킷을 찾고 있어요.</small></span>
            </div>
            <div class="col-12 my-1">
                □  Welch<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-5">
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Größe tragen Sie denn?
                <span class="tran"><br /><small>몇 사이즈를 입으시나요?</small></span>
            </div>
            <div class="col-12 my-1">
                <span class="sen">◇  Größe 40.</span>
                <span class="tran"><br /><small>40 사이즈요.</small></span>
            </div>
            <div class="col-12 my-1">
                □  Wie gefällt Ihnen d<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-6">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                lichtgrau<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-7">
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Blazer?
                <span class="tran"><br /><small>이 연한 회색 재킷은 어떠신가요?</small></span>
            </div>
            <div class="col-12 my-1">
                ◇  Ich weiß es nicht. Haben Sie d<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-8">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                noch dunkler<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-9">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                ?
                <span class="tran"><br /><small>모르겠네요. 더 어두운 건 없나요?I</small></span>
            </div>
            <div class="col-12 my-1">
                □  Wie finden Sie dann den hellgrau<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-10">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                ?
                <span class="tran"><br /><small>그럼 이 밝은 회색은 어떻게 생각하세요?</small></span>
            </div>
            <div class="col-12 my-1">
                ◇  Schon besser. Aber ich möchte d<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-11">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                ein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-12">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                bisschen<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-13">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                dunkeler<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-14">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                .
                <span class="tran"><br /><small>좀 나으네요. 하지만 악간 더 어두우면 좋겠어요</small></span>
            </div>
            <div class="col-12 my-1">
                □  Leider haben wir gerade kein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-15">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                dunkelgrau<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-16">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                in Ihrer Größe. Wir haben nur eine Nummer größer<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-17">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                .
                <span class="tran"><br /><small>죄송하지만 지금 더 짙은 회색은 사이즈가 없어요. 한 치수 더 큰 것만 있어요.</small></span>
            </div>
            <div class="col-12 my-1">
                ◇  Könnt<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-18">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Sie mir dann einen in ein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-19">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                ganz<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-20">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        en
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                anderen Farbe zeig<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-21">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                ?
                <span class="tran"><br /><small>그러면 완전 다른 색으로 보여주실 수 있나요?</small></span>
            </div>
            <div class="col-12 my-1">
                □  Selbstverständlich. ein<span class="sen"><span class="nu"></span>
                                <div class="btn-group border border-dark border-bottom-only q d-inline-flex"
                                     data-toggle="buttons" role="group" id="qst-22">
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        e
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        er
                                    </div>
                                    <div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답!">
                                        en
                                    </div>
                                    <div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body"
                                         data-placement="top" data-content="정답이 아니에요.">
                                        x
                                    </div>
                                </div><span class="ans"></span></span>
                Moment bitte.
                <span class="tran"><br /><small>물론이죠. 잠시만요.</small></span>
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
<script src="./dev/js/popper.min.js"></script>
<?php require "footer.php"; ?>
<script src="./dev/js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once( "./dev/oxsound.php" ); ?>
<script>
    $("#0").hide();
    $(".tran").hide();
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
                "./dev/sounds/Reihe 11/r11 E3.mp3"],
            sprite: {
                "0": [0, 47714]
            },
            html5: true,
            volume: 1,
            format: "mp3",
            preload: true,
            onloaderror: function () {
                $(".alert").append(
                    "<br /><strong class=\"fw-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>"
                );
                console.log("다시 읽어주세요!");
            },
            onload: function () {
                $("[data-toggle='popover']").popover({delay: {'hide': 1000}, container: "body"});
                $(".pop").click(function () {/* 가장 먼저 지문에 'an' 넣기 */
                    if (!$(this).siblings().hasClass("an")) {
                        $(this).addClass("an");
                        $(this).addClass("btn-warning");
                        $(this).parent().children().removeClass("btn-light");
                    }
                    ;/* 문제 풀이 정도 업데이트 */
                    var perc = Math.round(($(".an").length / $(".q").length) * 100);
                    $(".progress>.bar").attr("width", perc + "%;");
                });/* 팝업 내용 사라지기 */
                $(".pop").popover().click(function () {
                    setTimeout(function () {
                        $(".pop").popover('hide');
                    }, 500);
                });/* 정답확인 */
                $("#chk").on("click", function () {
                    if ($(".an").length < $(".q").length) {
                        var na = "";
                        $(".q").each(function () {
                            if (!$(this).find("div").hasClass("an")) {
                                if (na != "") {
                                    na += ",";
                                }
                                na += $(this).attr("id").substr(-1);
                            }
                            ;
                        });
                        alert("모든 문제를 풀어주세요.");/* alert(na +"번 문제를 풀어주세요."); */
                    } else {
                        $(".pop").each(function () {
                            $(this).removeClass("btn-info");
                            if ($(this).hasClass("o") && $(this).hasClass("an")) {
                                $(this).removeClass("btn-warning");
                                $(this).addClass("btn-success");
                                $(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-success fw-bold");
                                $(this).closest(".sen").find(".nu").text($.trim($(this).text()));
                            } else if ($(this).hasClass("o")) {
                                $(this).addClass("btn-<?php echo( $color ); ?>");
                                $(this).closest(".sen").find(".ans").html($.trim($(this).closest(".sen").find(".o").text()));
                                $(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-danger fw-bold");
                                $(this).closest(".sen").find(".ans").addClass("rounded bg-warning text-dark fw-bold text-center m-2 p-1 px-2");
                            } else if ($(this).hasClass("an")) {
                                $(this).addClass("btn-warning");
                                $(this).closest(".sen").find(".nu").text($.trim($(this).text()));
                            } else {
                                $(this).addClass("btn-light");
                            }
                            ;$(this).remove();
                        });
                        $(".tran").show();
                        $(".nu").show();
                        $(".q").hide();/* 정답 확인 div 상자 배경색 속성 없애기 */
                        $(this).removeClass("btn-light");
                        var qa = $(".q").length; /* 전체 문항 수 */
                        var qr = $(".bg-success").length; /* 맞춘 항목 수 */
                        var pe = (qr / qa) * 100; /* 정답 비율 */
                        var tcl = "white"; /* 기본 문자색 *//* 분류 기준은 100%, 80%, 60%, 40% */
                        if (pe > 99) {
                            var st = "원어민이세요?";
                            var cl = "lime";
                            var tcl = "dark";
                        } else if (pe > 74) {
                            var st = "어! 좀 하시는데요~^^";
                            var cl = "success";
                        } else if (pe > 49) {
                            var st = "쓰읍~ 다시 해 보실까요!";
                            var cl = "primary";
                        } else {
                            var st = "좀 더 분발해 주세요";
                            var cl = "danger";
                        }
                        $(this).addClass("btn-" + cl + " text-" + tcl);
                        $(this).html("<h4>" + qa + "문제 중" + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
                    }
                    ;
                });
                $("#0").show();
                $("#ready").hide();
                $(".so").on("click", function () {
                    var t = $(this);
                    var ti = t.attr("id");
                    if (($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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
                $("#0").show();
            },
            onend: function () {
                $("div#last").text("");
                stopAll();
                $("#cnt-" + last).text(sen[last]);
                if (last == 0) {
                    if (sen[last] == 2) {
                        $(".tran").show();
                        $(".so").each(function () {
                            pa[last] = $("#" + last).html();
                        });
                    }
                } else if (sen[last] == 2) {
                    if ($("#" + last).hasClass("itm")) {
                        $("#" + last + ">.tran").show();
                    }
                    if (last == 2 || last == 6 || last == 11) {
                        $("#" + last).closest("table").find(".tran").show();
                    } else {
                        $("#" + last).closest("tr").find(".tran").show();
                    }
                    pa[last] = $("#" + last).html();
                }
            }
        });
    });

</script>
</body>

</html>
