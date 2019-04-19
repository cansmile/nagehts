<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Markieren Sie Namen, Länder, Alter und Berufe.<br>
						<small>이름과 국가와 나이 그리고 직업에 표시하세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
						HV
					</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
						❚❚
					</button>
					<h3><small>문장을 2번 재생하면 번역이 나옵니다.</small></h3>
					</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<table class="table">
							<tbody>
								<tr>
									<th scope="row" rowspan="3" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-D1-1.png" style="width: auto; max-height: 140px;"></th>
									<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
									<td>[1]
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
										[2]
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
									<td>[3]
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
									<td>[4]
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
									<th scope="row" rowspan="4" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-D1-2.png" style="width: auto; max-height: 140px;"></th>
									<td width="25"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
									<td>[5]
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
										[6]
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
									<td>[7]
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
										<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0" data-toggle="buttons" id="qst-a">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optiona-1" autocomplete="off">Sie
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optiona-2" autocomplete="off">hat
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optiona-3" autocomplete="off">keine
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optiona-4" autocomplete="off">Kinder
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optiona-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran"><br><small>그녀는 아이가 없어요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
									<td>[8]
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
									<th scope="row" rowspan="3" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-D1-3.png" style="width: auto; max-height: 140px;"></th>
									<td width="25"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
									<td>[9]
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
										[10]
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
									<td>[11]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-11">
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
											[12]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-12">
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
									<td><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0" data-toggle="buttons" id="qst-b">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-1" autocomplete="off">Er
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-2" autocomplete="off">ist
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-3" autocomplete="off">der
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-4" autocomplete="off">Beste
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-5" autocomplete="off">in
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-6" autocomplete="off">seinem
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-7" autocomplete="off">Team
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-8" autocomplete="off">,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-9" autocomplete="off">FC
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-10" autocomplete="off">Barcelona
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionb-11" autocomplete="off">.
											</div>
										</div>
										<span class="tran"><br><small>그는 그의 팀, FC 바로셀로나에서 최고에요.</small></span></td>
								</tr>
								<tr>
									<th scope="row" rowspan="5" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-D1-4.png" style="width: auto; max-height: 140px;"></th>
									<td width="25"><button type="button" id="11" class="so btn btn-outline-primary">▶</button></td>
									<td>[13]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-13">
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
										<span class="tran"><br><small>이 사람은 에바 그린이에요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
									<td>[14]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-14">
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
										<span class="tran"><br><small>그녀는 31살이고 미혼이에요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="13" class="so btn btn-outline-danger">▶</button></td>
									<td>[15]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-15">
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
										<span class="tran"><br><small>그녀는 유명한(여)배우에요</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="14" class="so btn btn-outline-danger">▶</button></td>
									<td>[16]<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-16">
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
										<span class="tran"><br><small>프랑스 출신이에요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="15" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0" data-toggle="buttons" id="qst-c">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionc-1" autocomplete="off">Sie
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionc-2" autocomplete="off">ist
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionc-3" autocomplete="off">sehr
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionc-4" autocomplete="off">bekannt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 없어요!">
												<input type="radio" name="options" id="optionc-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran"><br><small>그녀는 많이 유명해요.</small></span></td>
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

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- interact.min.js -->
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".nu").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r3 D1",

						sprite : {
							"0": [7.3,76],
							"1": [19.3,4],
							"2": [23.4,3.3],
							"3": [27,4],
							"4": [36,3],
							"5": [39.3,3.8],
							"6": [43.3,2.3],
							"7": [45.9,4.1],
							"8": [55,3.3],
							"9": [58.7,3.5],
							"10": [62.8,3.9],
							"11": [72,1.5],
							"12": [73.6,3.2],
							"13": [77.5,1.7],
							"14": [79.2,1.6],
							"15": [81.3,1.5]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 3/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}

					},
					ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an") || $(this).hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};

					if(!$(this).siblings().hasClass("o") && !$(this).hasClass("o")) {
						$(this).parent().children().addClass("btn-light");
						$(this).parent().children().removeClass("btn-warning");
						$(this).parent().children().removeClass("an");
					}
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			// 정답확인
			$("#chk").on("click", function() {
				var anl = $(".an").length;
				var ql = $(".q").length;
				$(".q").each(function() {
					if(!$(this).find("div").hasClass("o")) {
						ql--;
					}
				})
				if (anl < ql) {
					var na = "";
					$(".q").each(function() {
						if (!$(this).find("div").hasClass("an") && $(this).find("div").hasClass("o")) {
							if (na != "") {
								na += ", ";
							}
							na += $(this).attr("id").substr(4);
						};
					});

					alert(na + "번 문제를 풀어주세요.");
				} else {
					$(".pop").each(function() {
						$(this).removeClass("btn-info");

						if ($(this).hasClass("o") && $(this).hasClass("an")) {
							$(this).removeClass("btn-warning");
							$(this).addClass("btn-success");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-primary");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-warning");
						} else {
							$(this).addClass("btn-light");
						};
					});
					$(".tran").show();
					$(".nu").show();
					// $(".q").hide();
					

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil(ql/2)) {
						$(this).html('<h4>' + ql + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == ql) {
						$(this).html('<h4>' + ql + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-primary");

					} else {
						$(this).html('<h4>' + ql + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});

		
						$(".so").on("click", function () {
								if($(this).attr("id").substr(-2) == "_p") {
									// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r3 D1", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else if($(this).html() == "▶") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.play("r3 D1", {
										part: $(this).attr("id")
									});
									$(this).html("❚❚");
								} else if($(this).html() == "❚❚") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r3 D1", {
										part: $(this).attr("id")
									});
									$(this).html("▶");
								} else {
									// _p 붙어 있지 않으면 id 그대로 재생
									ion.sound.play("r3 D1", {
										part: $(this).attr("id")
									});

									// 전체 듣기 재생일 때는 일시정지 버튼 보이기
									if($(this).attr("id") == "0") {
										$(this).hide();
										$("#0_p").show();
									};
								};
							});
					// 준비되면 HV 보이기
					$("#0").show();
					$(".alert").hide();


					}
				});
				
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>