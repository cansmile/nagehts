<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="1">
					Fußball spielen<span class="tran"><br><small>축구</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="2">
					Karten spielen<span class="tran"><br><small>카드 놀이하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="3">
					Tennis spielen<span class="tran"><br><small>테니스 하기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="4">
					in den Park gehen<span class="tran"><br><small>공원에 가다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="5">
					in die Disko gehen<span class="tran"><br><small>디스코장에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="6">
					in die Oper gehen<span class="tran"><br><small>오페라 하우스에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="7">
					in die Stadt gehen<span class="tran"><br><small>시내에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so" id="8">
					in den Zoo gehen<span class="tran"><br><small>동물원에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="9">
					in die Bibliothek gehen<span class="tran"><br><small>도서관에 가다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="10">
					ins Kino<span class="tran"><br><small>영화관에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="11">
					ins Theater<span class="tran"><br><small>극장에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="12">
					ins Museum gehen<span class="tran"><br><small>박물관에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="13">
					ins Konzert gehen<span class="tran"><br><small>콘서트에 가다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="14">
					fotografieren<span class="tran"><br><small>사진찍다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="15">
					joggen<span class="tran"><br><small>조깅하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="16">
					lesen<span class="tran"><br><small>읽다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="17">
					schwimmen<span class="tran"><br><small>수영하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="18">
					tanzen<span class="tran"><br><small>춤추다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="19">
					Fahrrad fahren<span class="tran"><br><small>운전하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="20">
					spazieren gehen<span class="tran"><br><small>산책하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm so" id="21">
					Musik hören<span class="tran"><br><small>음악 듣기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="22">
					ins Café gehen<span class="tran"><br><small>카페에서</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="23">
					ins Restaurant gehen<span class="tran"><br><small>레스토랑에서</small></span>
				</button>
			</div>
		</div>
	</div>
</section>

		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
				<div class="row" id="lsts">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-1.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-2.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-3.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-4.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-5.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-6.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-7.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="300" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-8.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3 text-center">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="250" class="border-0 align-middle"><img src="./images/Reihe 7/Reihe-7-D1-9.png" alt="Wo ist das?" style="max-width: 100%; max-height: 100%; width: auto; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="rounded-top itm-lst pt-1 p-2 border border-dark" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Bilden Sie Sätze. <small> 작문해보세요. </small></h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">1.</th>
											<td class="border-0" width="40%">- ins Kino./ gehe / Ich <br>- einen Film. / Da / sehe ich</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-1"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-1">
												</div><span class="tran"><small><br>저는 영화관에 갑니다. 거기서 영화를 봅니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">2.</th>
											<td class="border-0" width="40%">- in die Bibliothek. / Sie geht<br>- Da / Bücher. / liest sie</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-2"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-2">
												</div><span class="tran"><small><br>그녀는 도서관에 갑니다. 거기서 책을 읽습니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">3.</th>
											<td class="border-0" width="40%">- geht / in den Park. / Er <br>- joggt / er. / Da</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-3"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-3">
												</div><span class="tran"><small><br>그는 공원에 갑니다. 거기서 조깅을 합니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">4.</th>
											<td class="border-0" width="40%">- ins Konzert. / Er / geht<br>- hört / er / Da / Musik.</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-4"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-4">
												</div><span class="tran"><small><br>그는 음악회에 갑니다. 거기서 음악을 듣습니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">5.</th>
											<td class="border-0" width="40%">- zum Fußballplatz. / geht / Sie<br>- spielt / sie / Da / Fußball. </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-5"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-5">
												</div><span class="tran"><small><br>그녀는 축구장에 갑니다. 거기서 축구를 합니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<th class="border-0" scope="row" width="50">6.</th>
											<td class="border-0" width="40%">- gehe / Ich / in die Disko. <br>- tanze / ich. / Da</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<table class="table">
									<tbody>
										<tr>
											<td class="border-0">
												<div class="ant" id="ant-6"></div>
												<div class="input-group">										
													<input type="text" class="form-control q border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1" aria-label="." id="qst-6">
												</div><span class="tran"><small><br>나는 클럽에 갑니다. 거기서 춤을 춥니다.</small></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
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
		
	<div id="marg"></div>

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();
			$("#chk").hide();

			var an = new Array(), antr = new Array();
			var an = ["Ich gehe ins Kino. Da sehe ich einen Film.","Sie geht in die Bibliothek. Da liest sie Bücher.","Er geht in den Park. Da joggt er.","Er geht ins Konzert. Da hört er Musik.",["Sie geht zum Fußballplatz. Da spielt sie Fußball.", "Sie geht zum Fussballplatz. Da spielt sie Fussball."],"Ich gehe in die Disko. Da tanze ich."];
			var antr = ["Ich gehe ins Kino. Da sehe ich einen Film.","Sie geht in die Bibliothek. Da liest sie Bücher.","Er geht in den Park. Da joggt er.","Er geht ins Konzert. Da hört er Musik.",["Sie geht zum Fußballplatz. Da sie spielt Fußball.", "Sie geht zum Fussballplatz. Da sie spielt Fußball."],"Ich gehe in die Disko. Da tanze ich."];

			$(document).ready(function() {


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

			// 각 문장 재생 횟수 초기화
			var hm=new Array(), sen=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
				sen[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r7 D1",
					sprite : {
						"0": [.5, 109.42],
						"1": [9.24, 1.77],
						"2": [13.07, 1.9],
						"3": [17.12, 1.88],
						"4": [21.24, 2.04],
						"5": [25.25, 2.15],
						"6": [29.79, 1.88],
						"7": [33.8, 2.09],
						"8": [37.92, 1.89],
						"9": [41.76, 2.91],
						"10": [46.72, 1.51],
						"11": [50.01, 1.67],
						"12": [53.53, 1.74],
						"13": [57.69, 2.07],
						"14": [62.18, 1.89],
						"15": [65.97, 1.15],
						"16": [69.4, 1.19],
						"17": [72.66, 1.14],
						"18": [75.79, 1.58],
						"19": [79.78, 1.59],
						"20": [83.72, 1.98],
						"21": [88.32, 1.63],
						"22": [92.26, 1.94],
						"23": [96.25, 2.36]
					}
				}
				, {
					name: "dingdongdang",
						path: "sounds/"
				}
				, {
					name: "Cartoon_Boing",
						path: "sounds/"
				}
				],
				path : "sounds/Reihe 7/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					// 재생이 끝날 때 2번 이상이면 번역 보이기
					hmn=obj.part;
					hm[hmn]++;
					// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
					if(obj.part=="0") {
						$("#0").show();
						$("#0_p").hide();
						if(hm[hmn] > 1) {
							$(".tran").show();
						}
					}
					else {
						if(obj.part < 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".btn").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					$(".q").on("keyup", function () {
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

					$(".q").on("focusin", function() {
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

					$(".q").on("focusout", function() {
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
						}
					})
	/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */

					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 D1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r7 D1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 D1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r7 D1", {
								part: $(this).attr("id")
							}
							);
							// 전체 듣기 재생일 때는 일시정지 버튼 보이기
							if($(this).attr("id")=="0") {
								$(this).hide();
								$("#0_p").show();
							}
							;
						}
						;
					}
					);

<?php include "wahl.php"; ?>

				$("#chk").on("click", function() {
						var na="";
						var ri=0;
						var qst=$(".q").length;
						$(".q").each(function () {
							if(na !="") {
								na +=", ";
							}
							if($(this).val()=="") {
								na +=$(this).attr("id").substr(4, 1);
							}
						}
						);
						if($(this).attr("id")=="done") {}
						else if(na=="") {
							for(var i=0;
							i < an.length;
							i++) {
								var oran=$("#qst-"+(i+1)).val();
								if(rfchk($("#qst-"+(i+1)), true)) {
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
									$("#qst-"+(i+1)).after("<br /><div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							if($(this).find(".itm")) {
								$(this).find(".itm").addClass("text-success font-weight-bold");
							}
						});

						var qa = $(".itm-lst>.itm").length + $(".q").length; // 전체 문항 수
						var qr = $(".text-success").length + $(".bg-success").length; // 맞춘 항목 수
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

							$(this).prop("disabled", true);
							$(".tran").show();
							$(this).attr("id", "done");
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					})

				var pan = new Array();
				pan = [];
				// pan = [1,6,8,10,12,13,17,22,23];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#"+pan[p];
					for(n = 1; n < $(".itm-lst").length; n++) {
						if($(pann).hasClass("ans" + n)) {
							$(pann).insertAfter("#lst-" + n +">h2");
							$(pann).addClass("btn-block btn-light");
							$(pann).find(".tran").show();
						}
					}
				}		

				pan = [1];
				// pan = ["1","2","4","6","8"];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).addClass("bg-success text-white font-weight-bold");
					$(pann).prop("disabled",true);
					// $(pann).closest("tr").find(".tran").show();
				}		




					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>