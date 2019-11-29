<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
						<h3>[ <small>문장을 입력하여 정답인 경우 선택지가 나타납니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">1.&nbsp;<span class="py-2 px-2 d-inline-block wd">heißt</span>|<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">wie</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 1 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F1" id="txt-1">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">&lt; 1 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option1-1" autocomplete="off">Wie
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option1-2" autocomplete="off">heißt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option1-3" autocomplete="off">er
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option1-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>그는 이름이 뭔가요?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">Tommy</span>|<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">heißt</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 2 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F2" id="txt-2">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">&lt; 2 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2-1" autocomplete="off">Er
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option2-2" autocomplete="off">heißt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2-3" autocomplete="off">Tommy
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2-4" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>그는 토미라고해요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">2.&nbsp;<span class="py-2 px-2 d-inline-block wd">wohnst</span>|<span class="py-2 px-2 d-inline-block wd">du</span>|<span class="py-2 px-2 d-inline-block wd">wo</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 3 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F3" id="txt-3">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">&lt; 3 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3-1" autocomplete="off">Wo
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option3-2" autocomplete="off">wohnst
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3-3" autocomplete="off">du
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>어디에서 사니?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">in Daegu</span>|<span class="py-2 px-2 d-inline-block wd">du</span>|<span class="py-2 px-2 d-inline-block wd">wohnst</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 4 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F4" id="txt-4">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">&lt; 4 &gt;&nbsp;
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option4-1" autocomplete="off">Wohnst
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option4-2" autocomplete="off">du
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option4-3" autocomplete="off">in Daegu
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option4-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>대구에서 사니?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">Ja,</span>|<span class="py-2 px-2 d-inline-block wd">in Daegu</span>|<span class="py-2 px-2 d-inline-block wd">ich</span>|<span class="py-2 px-2 d-inline-block wd">wohne</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 5 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F5" id="txt-5">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">&lt; 5 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5-1" autocomplete="off">Ja,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5-2" autocomplete="off">ich
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option5-3" autocomplete="off">wohne
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5-4" autocomplete="off">in Daegu
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>응, 난 대구에서 살아.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">3.&nbsp;<span class="py-2 px-2 d-inline-block wd">kommt</span>|<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">woher</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 6 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F6" id="txt-6">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">&lt; 6 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option6-1" autocomplete="off">Woher
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option6-2" autocomplete="off">kommt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option6-3" autocomplete="off">er
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option6-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>그는 어디에서 왔나요</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">aus Chile</span>|<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">kommt</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 7 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F7" id="txt-7">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">&lt; 7 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option7-1" autocomplete="off">Er
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option7-2" autocomplete="off">kommt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option7-3" autocomplete="off">aus Chile
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option7-4" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>그는 칠레 출신이에요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">4.&nbsp;<span class="py-2 px-2 d-inline-block wd">in Asien</span>|<span class="py-2 px-2 d-inline-block wd">Vietnam</span>|<span class="py-2 px-2 d-inline-block wd">liegt</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-8"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 8 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F8" id="txt-8">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">&lt; 8 &gt;&nbsp;
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option8-1" autocomplete="off">Liegt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option8-2" autocomplete="off">Vietnam
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option8-3" autocomplete="off">in Asien
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option8-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>베트남은 아시아 대륙에 있나요?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">ja,</span>|<span class="py-2 px-2 d-inline-block wd">in Asien</span>|<span class="py-2 px-2 d-inline-block wd">Vietnam</span>|<span class="py-2 px-2 d-inline-block wd">liegt</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-9"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 9 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F9" id="txt-9">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">&lt; 9 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9-1" autocomplete="off">Ja,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9-2" autocomplete="off">Vietnam
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option9-3" autocomplete="off">liegt
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9-4" autocomplete="off">in Asien
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>네, 베트남은 아시아 대륙에 있어요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">5.&nbsp;<span class="py-2 px-2 d-inline-block wd">sprechen</span>|<span class="py-2 px-2 d-inline-block wd">Sie</span>|<span class="py-2 px-2 d-inline-block wd">welche Spachen</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-10"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 10 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F10" id="txt-10">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">&lt; 10 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option10-1" autocomplete="off">Welche Sprachen
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option10-2" autocomplete="off">sprechen
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option10-3" autocomplete="off">Sie
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option10-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>당신은 어떤 언어를 말하나요?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">Deutsch und Englisch</span>|<span class="py-2 px-2 d-inline-block wd">ich</span>|<span class="py-2 px-2 d-inline-block wd">speche</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-11"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 11 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F11" id="txt-11">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">&lt; 11 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option11-1" autocomplete="off">Ich
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option11-2" autocomplete="off">speche
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option11-3" autocomplete="off">Deutsch und Englisch
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option11-4" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>저는 독일어와 영어를 말해요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">6.&nbsp;<span class="py-2 px-2 d-inline-block wd">Koreanisch</span>|<span class="py-2 px-2 d-inline-block wd">du</span>|<span class="py-2 px-2 d-inline-block wd">sprichst</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-12"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 12 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F12" id="txt-12">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-12">&lt; 12 &gt;&nbsp;
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option12-1" autocomplete="off">Sprichst
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option12-2" autocomplete="off">du
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option12-3" autocomplete="off">Koreanisch
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option12-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>너는 한국어 말할 수 있니?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">ja,</span>|<span class="py-2 px-2 d-inline-block wd">Koreanisch</span>|<span class="py-2 px-2 d-inline-block wd">ich</span>|<span class="py-2 px-2 d-inline-block wd">spreche</span>|<span class="py-2 px-2 d-inline-block wd">gut</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-13"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 13 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F13" id="txt-13">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-13">&lt; 13 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option13-1" autocomplete="off">Ja,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option13-2" autocomplete="off">ich
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option13-3" autocomplete="off">spreche
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option13-4" autocomplete="off">gut
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option13-5" autocomplete="off">Koreanisch
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option13-6" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>그럼, 나 한국어 잘해.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">7.&nbsp;<span class="py-2 px-2 d-inline-block wd">du</span>|<span class="py-2 px-2 d-inline-block wd">Chinesin</span>|<span class="py-2 px-2 d-inline-block wd">bist</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-14"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 14 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F14" id="txt-14">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-14">&lt; 14 &gt;&nbsp;
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option14-1" autocomplete="off">Bist
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option14-2" autocomplete="off">du
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option14-3" autocomplete="off">Chinesin
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option14-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>너는 중국인이니?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">nein,</span>|<span class="py-2 px-2 d-inline-block wd">Koreanerin</span>|<span class="py-2 px-2 d-inline-block wd">ich</span>|<span class="py-2 px-2 d-inline-block wd">bin</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-15"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 15 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F15" id="txt-15">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-15">&lt; 15 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15-1" autocomplete="off">Nein,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15-2" autocomplete="off">ich
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option15-3" autocomplete="off">bin
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15-4" autocomplete="off">Koreanerin
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>아니, 난 한국인이야.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block">8.&nbsp;<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">Deutscher</span>|<span class="py-2 px-2 d-inline-block wd">ist</span>|<span class="py-2 px-2 d-inline-block wd">?</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-16"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 16 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F16" id="txt-16">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-16">&lt; 16 &gt;&nbsp;
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option16-1" autocomplete="off">Ist
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option16-2" autocomplete="off">er
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option16-3" autocomplete="off">Deutscher
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option16-4" autocomplete="off">?
											</div>
										</div>
										<span class="tran text-right" style="width: 100%;"><br><small>그는 독일인인가요?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><div class="d-inline-block"><span class="py-2 px-2 d-inline-block wd">nein,</span>|<span class="py-2 px-2 d-inline-block wd">Franzose</span>|<span class="py-2 px-2 d-inline-block wd">er</span>|<span class="py-2 px-2 d-inline-block wd">ist</span>|<span class="py-2 px-2 d-inline-block wd">.</span></div></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0" rowspan="2">&nbsp;</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-17"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">[ 17 ]</span></div>
											<input type="text" class="form-control qt" aria-label="F17" id="txt-17">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text-right btn-group btn-group-toggle q" data-toggle="buttons" id="qst-17">&lt; 17 &gt;&nbsp;
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17-1" autocomplete="off">Nein,
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17-2" autocomplete="off">er
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option17-3" autocomplete="off">ist
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17-4" autocomplete="off">Franzose
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17-5" autocomplete="off">.
											</div>
										</div>
										<span class="tran text-right text-" style="width: 100%;"><br><small>아뇨, 그는 프랑스인이에요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- 정답화인 버튼 시작 -->
				<div class="row">
					<div class="btn my-3 btn-light col-sm-12 col-md-126col-lg-12" id="chk">
						정답확인
					</div>
				</div>
				<!-- 정답확인 버튼 끝 -->
		</div>
	</section>
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();
			$(".q").hide();
			$(".pop").addClass("border border-dark border-top-0 border-left-0 border-right-0");
			var an = new Array();
			var an = ["Wie heißt er?","Er heißt Tommy.","Wo wohnst du?","Wohnst du in Daegu?","Ja, ich wohne in Daegu.","Woher kommt er?","Er kommt aus Chile.","Liegt Vietnam in Asien?","Ja, Vietnam liegt in Asien.","Welche Sprachen sprechen Sie?","Ich spreche Deutsch und Englisch.","Sprichst du Koreanisch?","Ja, ich spreche gut Koreanisch.","Bist du Chinesin?","Nein, ich bin Koreanerin.","Ist er Deutscher?","Nein, er ist Franzose."];

			$(document).ready(function() {
				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
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
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};

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

/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
// 값 확인해보자, io값이 참이면 전체 검사
function rfchk(th,io) {
	var q, qn, a, b, fl;
	q = th.val().length;
	qn = (th.attr("id").substr(4))-1;
	a = th.val();
	a = a.replace(/ /gi, "");
	if(!$.isArray(an[qn])) {
		// 1 인 경우 
		if(io) {
			b = an[qn];
		} else {
			b = an[qn].substr(0,q);
		}
		b = b.replace(/ /gi, "");

		if(a == b) {
			return true;
		}

	} else {
		// 2 이상인 경우
		for(var fd = 0; fd < an[qn].length; fd++) {
			if(io) {
				b = an[qn][fd];
			} else {
				b = an[qn][fd].substr(0,q);
			}
			b = b.replace(/ /gi, "");
			
			if(a == b) {
				return true;
			}
		}
		
	}
}
				$(".qt").on("keyup", function () {
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");

					if(rfchk($(this))) {
						$(this).addClass("text-white font-weight-bold");
						$(this).addClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
					} else {
						$(this).addClass("text-white font-weight-bold");
						$(this).addClass("bg-danger");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
					}

					if(!$(this).val()) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).removeClass("text-white font-weight-bold");
					}
					
					if($(this).val()) {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					} else {
						$("#ant-"+$(this).attr("id").substr(4)).hide();
					}
				})

				$(".qt").on("focusin", function() {
					$("#ant-"+$(this).attr("id").substr(4)).show();
					if(!$("#ant-"+$(this).attr("id").substr(4)).text()) {
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					}
					if($("#ant-"+$(this).attr("id").substr(4)).text()) {
						if(rfchk($(this))) {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-success");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
						} else {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}
					}
				})

				$(".qt").on("focusout", function() {
					$("#ant-"+$(this).attr("id").substr(4)).hide();

					if(rfchk($(this),true)) {
						$(this).addClass("bg-success");
						$(this).addClass("text-white");
					} else {
						$(this).addClass("bg-danger");
					}

					if($(this).val()) {
						if($(this).hasClass("bg-danger")) {
							ion.sound.play("Cartoon_Boing");
						} else if($(this).hasClass("bg-success")){
							ion.sound.play("dingdongdang");
							$(this).prop("disabled",true);
						}
					}

					$(this).removeClass("bg-danger");

					if(!$(this).attr("disabled")) {
						$(this).removeClass("text-white font-weight-bold");
						$(this).removeClass("bg-success");
						$(this).closest("table").find(".q").show();
						// $(this).closest("table").find(".tran").each(function () {
						// 	$(this).show();
						// })
					}
				})
				
/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
				$("#chk").on("click", function() {
					var na = "";
					var da = "";
					var ri = 0;
					var txt = $(".qt").length;
					$(".q").each(function() {
						if (!$(this).find("div").hasClass("an")) {
							if($(this).css("display") != "none") {
								da += "< "+$(this).attr("id").substr(4)+" >";
							}
						};
					});

					$(".qt").each(function () {
						if($(this).val() == "") {
							na += "[ "+$(this).attr("id").substr(4)+" ]";
						}
					})
					
					if(na == "" && da == "") {
						for(var i = 0; i < an.length; i++) {
							var oran = $("#txt-"+(i+1)).val();
							if(rfchk($("#txt-"+(i+1)))) {
								$("#txt-"+(i+1)).addClass("bg-success text-white");
							} else {
								$("#txt-"+(i+1)).val(an[i]);
								$("#txt-"+(i+1)).attr("disabled",true);
								$("#txt-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span>");
							}

							if($("#txt-"+(i+1)).hasClass("bg-success")) {
								ri++;
							}

						}

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

					txt += $(".q").length;
					ri += $(".btn-success").length;


					if (ri < (txt/2)) {
						$(this).html('<h4>' + txt + "문제 중 " + ri + "개를 맞히셨네요!</h4>");
						$(this).addClass("bg-danger text-white");
					} else if(ri == txt) {
						$(this).html('<h4>' + txt + "문제 중 " + ri + "개를 맞히셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("bg-primary text-white");
					} else {
						$(this).html('<h4>' + txt + "문제 중 " + ri + "개를 맞히셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("bg-warning text-white");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					} else if(na != "" && da == "") {
						alert(na+"번 문제를 입력하세요!");
					} else if(na == "" && da != "") {
						alert(da+"번 문제를 선택하세요!");
					} else if(na != "" && da != "") {
						alert(da+"번 문제를 선택하세요!\n"+na+"번 문제를 입력하세요!");
					}
				})

				$("#txt-1").val(an[0]);
				$("#option1-2").parent().addClass("an");
				$("#option1-2").parent().addClass("btn-warning");
				$("#option1-2").parent().removeClass("btn-light");
				$("#txt-1").prop("disabled",true);
				$("#txt-1").addClass("bg-success text-white font-weight-bold");
				$("#qst-1").show();
				$("#qst-1").closest("table").find(".tran").each(function () {
					$(this).show();
				})
				$("#qst-1").closest("table").find(".wd").each(function () {
					$(this).addClass("text-muted")
				})

			})
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>