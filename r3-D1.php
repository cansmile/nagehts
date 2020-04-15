<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Markieren Sie Namen, Länder, Alter und Berufe.<br>
					<small>이름과 국가와 나이 그리고 직업에 표시하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="text-center align-middle"><img src="./<?php echo($root); ?>images/Reihe 3/Reihe-3-D1-1.png" style="width: auto; max-height: 140px;"></th>
								<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td><span class="num">[1]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1-1" autocomplete="off">Das
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option1-3" autocomplete="off">Felix Becker
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1-4" autocomplete="off">,
									</div>
								</div>
								<span class="num">[2]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option2-1" autocomplete="off">26
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2-2" autocomplete="off">Jahre
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2-3" autocomplete="off">alt
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2-4" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>이 사람은 펠릭스 베커이고, 26살이에요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="num">[3]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-1" autocomplete="off">Er
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-2" autocomplete="off">kommt
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-3" autocomplete="off">aus
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option3-4" autocomplete="off">Deutschland
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-5" autocomplete="off">und
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-6" autocomplete="off">wohnt
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-7" autocomplete="off">in
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-8" autocomplete="off">Köln
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3-9" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>그는 독일 출신이고 쾰른에서 살아요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="num">[4]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-1" autocomplete="off">Er
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4-3" autocomplete="off">Bäcker
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-4" autocomplete="off">und
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-5" autocomplete="off">arbeitet
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-6" autocomplete="off">in
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-7" autocomplete="off">einer
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-8" autocomplete="off">Bäckerei
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option4-9" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>그는 제빵사이고 빵집에서 일해요.</small></span></td>
							</tr>
							<tr>
								<th scope="row" rowspan="4" class="text-center align-middle border border-dark border-left-0 border-right-0 border-bottom-0"><img src="./<?php echo($root); ?>images/Reihe 3/Reihe-3-D1-2.png" style="width: auto; max-height: 140px;"></th>
								<td width="25" class="border border-dark border-left-0 border-right-0 border-bottom-0"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
								<td class="border border-dark border-left-0 border-right-0 border-bottom-0"><span class="num">[5]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-5">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option5-1" autocomplete="off">Das
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option5-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option5-3" autocomplete="off">Clara Smith
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option5-4" autocomplete="off">,
									</div>
								</div>
								<span class="num">[6]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-6">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6-1" autocomplete="off">aus
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option6-2" autocomplete="off">Amerika
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6-3" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>이 사람은 클라라 스미스이고, 미국 출신이에요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="num">[7]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-7">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-1" autocomplete="off">Sie
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option7-3" autocomplete="off">28
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-4" autocomplete="off">Jahre
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-5" autocomplete="off">alt
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-6" autocomplete="off">und
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-7" autocomplete="off">verheiratet
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7-8" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>그녀는 28살이고 결혼했어요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Sie</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">hat</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">keine</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Kinder</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">.</span><span class="tran"><br><small>그녀는 아이가 없어요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="num">[8]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-8">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-1" autocomplete="off">Sie
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8-3" autocomplete="off">Ärztin
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-4" autocomplete="off">und
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-5" autocomplete="off">arbeitet
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-6" autocomplete="off">im
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-7" autocomplete="off">Krankenhaus
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8-8" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>그녀는 의사이고 병원에서 일해요.</small></span></td>
							</tr>
							<tr>
								<th scope="row" rowspan="3" class="text-center align-middle border border-dark border-left-0 border-right-0 border-bottom-0"><img src="./<?php echo($root); ?>images/Reihe 3/Reihe-3-D1-3.png" style="width: auto; max-height: 140px;"></th>
								<td width="25" class="border border-dark border-left-0 border-right-0 border-bottom-0"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
								<td class="border border-dark border-left-0 border-right-0 border-bottom-0"><span class="num">[9]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-9">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option9-1" autocomplete="off">Das
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option9-2" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option9-3" autocomplete="off">Lionel Messi
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option9-4" autocomplete="off">,
									</div>
								</div>
								<span class="num">[10]</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-10">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option10-1" autocomplete="off">aus
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option10-2" autocomplete="off">Argentinien
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option10-3" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>이 사람은 리오넬 메시, 아르헨티나 출신이에요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="9" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="num">[11]</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-11">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11-1" autocomplete="off">Er
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11-2" autocomplete="off">ist
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option11-3" autocomplete="off">25
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11-4" autocomplete="off">Jahre
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11-5" autocomplete="off">alt
										</div>
									</div>
									<span class="num">[12]</span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-12">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option12-1" autocomplete="off">und
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option12-2" autocomplete="off">Fußballspieler
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option12-3" autocomplete="off">.
									</div>
								</div>
								<span class="tran"><br><small>그는 25살이고 축구선수에요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="10" class="so btn btn-outline-danger">▶</button></td>
								<td>
								<span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Er</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">ist</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">der</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Beste</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">in</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">seinem</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Team</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">,</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">FC</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Barcelona</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">.</span><span class="tran"><br><small>그는 그의 팀, FC 바로셀로나에서 최고에요.</small></td>
							</tr>
							<tr>
								<th scope="row" rowspan="5" class="text-center align-middle border border-dark border-left-0 border-right-0 border-bottom-0"><img src="./<?php echo($root); ?>images/Reihe 3/Reihe-3-D1-4.png" style="width: auto; max-height: 140px;"></th>
								<td width="25" class="border border-dark border-left-0 border-right-0 border-bottom-0"><button type="button" id="11" class="so btn btn-outline-primary">▶</button></td>
								<td class="border border-dark border-left-0 border-right-0 border-bottom-0">
									<span class="num">[13]</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-13">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option13-1" autocomplete="off">Das
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option13-2" autocomplete="off">ist
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option13-3" autocomplete="off">Eva Green
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option13-4" autocomplete="off">.
										</div>
									</div>
									<span class="tran"><br><small>이 사람은 에바 그린이에요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="num">[14]</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-14">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-1" autocomplete="off">Sie
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-2" autocomplete="off">ist
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option14-3" autocomplete="off">31
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-4" autocomplete="off">Jahre
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-5" autocomplete="off">alt
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-6" autocomplete="off">und
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-7" autocomplete="off">ledig
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-8" autocomplete="off">.
										</div>
									</div>
									<span class="tran"><br><small>그녀는 31살이고 미혼이에요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="13" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="num">[15]</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-15">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-1" autocomplete="off">Sie
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14-2" autocomplete="off">ist
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option14-3" autocomplete="off">Schauspielerin
										</div>
									</div>
									<span class="tran"><br><small>그녀는 유명한 배우에요</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="14" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="num">[16]</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-16">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16-1" autocomplete="off">und
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16-2" autocomplete="off">kommt
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16-3" autocomplete="off">aus
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option16-4" autocomplete="off">Frankreich
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16-5" autocomplete="off">.
										</div>
									</div>
									<span class="tran"><br><small>프랑스 출신이에요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="15" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">Sie</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">ist</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">sehr</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">bekannt</span><span class="border border-dark border-left-0 border-right-0 border-top-0 bg-light mx-0 p-2">.</span><span class="tran"><br><small>그녀는 매우 유명해요.</small></span>
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
	$(document).ready(function() {
		// 소리 출력 전역 변수와 함수
		var sen=new Array(),
		pa=new Array(),
		he=new Array(),
		last;
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
			src: [ "./<?php echo($root); ?>sounds/Reihe 3/r3 D1.mp3"],
			sprite: {
				"0": [779, 82211],
				"1": [18760, 3945],
				"2": [22892, 3649],
				"3": [26820, 3779],
				"4": [35664, 3288],
				"5": [39051, 3815],
				"6": [43135, 2028],
				"7": [45620, 4018],
				"8": [54581, 3579],
				"9": [58367, 3663],
				"10": [62470, 4090],
				"11": [71705, 1704],
				"12": [73379, 3304],
				"13": [77208, 1846],
				"14": [78969, 2030],
				"15": [81269, 1893]
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
			,
			onload: function() {
				$("[data-toggle='popover']").popover( {
					delay : {
						'hide': 1000
					}
					,
					container : "body"
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
					// 문제 풀이 정도 업데이트
					var perc=Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
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
						var anl=$(".an").length;
						var ql=$(".q").length;
						$(".q").each(function() {
							if( !$(this).find("div").hasClass("o")) {
								ql--;
							}
						}
						);
						if (anl < ql) {
							var na="";
							$(".q").each(function() {
								if ( !$(this).find("div").hasClass("an") && $(this).find("div").hasClass("o")) {
									if (na !="") {
										na +=", ";
									}
									na +=$(this).attr("id").substr(4);
								}
								;
							}
							);
							alert(na + "번 문제를 풀어주세요.");
						}
						else if($(this).attr("id")=="chk") {
							$(this).attr("id", "done");
							var tt;
							$(".pop").each(function() {
								tt=$.trim($(this).text());
								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass().addClass("text-white bg-success");
								}
								else if ($(this).hasClass("o")) {
									$(this).removeClass().addClass("text-dark bg-warning");
								}
								else if ($(this).hasClass("an")) {
									$(this).removeClass().addClass("text-white bg-danger");
								}
								else {
									$(this).removeClass();
								}

								$(this).addClass("font-weight-bold rounded p-1 pr-2");
								if(tt.length > 1) {
									$(this).html("&nbsp;"+tt);
								}
								else {
									$(this).html(tt);
								}
							}
							);
							$(".tran").show();
							$(".nu").show();
							$(".num").hide();
							$(".btn-group").addClass("border-0");
							$(".border.border-dark.border-left-0.border-right-0.border-top-0.bg-light.mx-0.p-2").removeClass().addClass("font-weight-bold mx-1");
							$(this).removeClass("btn-light ");


							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".bg-success").length; // 맞춘 항목 수
							var pe = (qr / qa) * 100; // 정답 비율
							var tcl = "white"; // 기본 문자색

							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st = "원어민이세요?";
								var cl = "lime";
								var tcl = "dark";
							} else if(pe > 74) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 49) {
								var st = "쓰읍~ 다시 해 보실까요?";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요~";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

							$(".text-warning").removeClass().addClass("text-danger font-weight-bold");
							$(".text-primary").removeClass().addClass("text-success font-weight-bold");
						}
						;
					}
				);
				$("#0").show();
				$(".alert").hide();
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
				$("#0").show();
			}
			,
			onend: function() {
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
	<?php include"footer.php"; ?>
</body>
</html>