<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="1">
					Franz Scholl
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="2">
					Robert Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
					Maria Holm und Robert Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="4">
					Nora
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="5">
					Silvia Mark und Hans Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="6">
					Hans, Georg und Sabine
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm" id="7">
					Silvia Mark
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="8">
					Nora
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="9">
					Sabine Holm
					</button>
				</div>
			</div>
		</div>
	</section>
<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2> Sprechen Sie über den Stammbaum.
								<br><small>아래 가계도에 대해 이야기해보세요.</small>
							</h2>
							<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><img src="./images/Reihe 3/Reihe-3-F1.png" alt="Stammbaum" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Robert Holm</span><span class="wd">Maria Holm</span><span class="wd">Birgit Mark</span><span class="wd">Anton Mark</span><span class="wd">Silvia Mark</span><span class="wd">Hans Holm</span><span class="wd">Georg Holm</span><span class="wd">Sabine Holm</span><span class="wd">Franz Scholl</span><span class="wd">Nora</span><span class="wd">Alex</span><span class="wd">Johanna</span><span class="wd">Manuel</span></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table text-center">
							<thead>
								<tr class="border border-dark bg-dark text-white font-weight-bold rounded py-0">
									<th scope="col" width="50" class="border-0 display-4 py-0 align-text-top"><small>1.1.</small></th>
									<th scope="col" class="border-0 text-left">
									Wer bin ich?
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><br>
										<small>나는 누구인가요? 노라</small>
									</span>
								</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="50" scops="row" class="border-0">1.</th>
									<td class="border-0 text-left">
									Meine Eltern heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
									<span class="tran"><br>
										<small>저의 부모님은 질비아 마크와 한스 홀름이에요.</small>
									</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">2.</th>
									<td class="border-0 text-left">
									Meine Großeltern heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
									<span class="tran"><br>
										<small>저의 조부모님은 마리아 홀름과 로버트 홀름이에요.</small>
									</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">3.</th>
									<td class="border-0 text-left">Mein Bruder heißt Alex.
										<span class="tran"><br>
											<small>저의 남동생은 알렉스에요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">4.</th>
									<span class="tran"><br>
											<small></small>
										</span>
									<td class="border-0 text-left">Mein Vater hat eine Schwester.
										<span class="tran"><br>
											<small>저의 아버지는 여동생이 한 분 있어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">&nbsp;</th>
									<td class="border-0 text-left">
									Sie heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											<small>그녀는 자비네 홀름이에요.</small>
										</span>
								</td>
								</tr>
							</tbody>
						</table>
						<table class="table text-center">
							<thead>
								<tr class="border border-dark bg-dark text-white font-weight-bold rounded py-0">
									<th scope="col" width="50" class="border-0 display-4 py-0 align-text-top"><small>1.2.</small></th>
									<th scope="col" class="border-0 text-left">
										Wer bin ich?
										<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
										<span class="tran"><br>
											<small>나는 누구인가요? 로버트 홀름</small>
										</span>
								</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="50" scops="row" class="border-0">1.</th>
									<td class="border-0 text-left">Meine Frau heißt Maria Holm.
										<span class="tran"><br>
											<small>저의 아내는 마리아 홀름이에요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">2.</th>
									<td class="border-0 text-left">
									Meine Kinder heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											<small>제 아이들은 한스,게오르그와 자비네이에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">3.</th>
									<td class="border-0 text-left">Mein Sohn, Hans Holm hat eine Tochter.
										<span class="tran"><br>
											<small>제 아들, 한스 홀름은 딸 하나가 있어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">&nbsp;</th>
									<td class="border-0 text-left">
									Sie heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											<small>그녀는 노라에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">4.</th>
									<td class="border-0 text-left">Meine Tochter ist mit ihm verheiratet.
										<span class="tran"><br>
											<small>저의 딸은 결혼했어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">&nbsp;</th>
									<td class="border-0 text-left">
									Er heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											<small>그는 프란쯔 숄이에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row" class="border-0">5.</th>
									<td class="border-0 text-left">
									Meine Schwiegertochter heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran">저의 며느리는 질비아 마크에요.<br>
											<small></small>
										</span>
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
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td class="text-center">
										<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
											HV
										</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
											❚❚
										</button>
										<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="10" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großvater</span><span class="wd">Opa</span><span class="wd"><small>할아버지</small></span><button type="button" id="11" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großmutter</span><span class="wd">Oma</span><span class="wd"><small>할머니</small></span><button type="button" id="12" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großeltern</span><span class="wd"><small>조부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="13" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Vater</span><span class="wd"><small>아버지</small></span><button type="button" id="14" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Mutter</span><span class="wd"><small>어머니</small></span><button type="button" id="15" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Eltern</span><span class="wd"><small>부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="16" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Sohn</span><span class="wd"><small>아들</small></span><button type="button" id="17" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Tochter</span><span class="wd"><small>딸</small></span><button type="button" id="18" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Kinder</span><span class="wd"><small>자녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="19" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Bruder</span><span class="wd"><small>형제</small></span><button type="button" id="20" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwester</span><span class="wd"><small>자매</small></span><button type="button" id="21" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Geschwister</span><span class="wd"><small>형제자매</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="22" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkelsohn</span><span class="wd"><small>손자</small></span><button type="button" id="23" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkeltochter</span><span class="wd"><small>손녀</small></span><button type="button" id="24" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkelkinder</span><span class="wd"><small>손자손녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="25" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwager</span><span class="wd"><small>형부, 처남, 매부, 매형</small></span><button type="button" id="26" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwägerin</span><span class="wd"><small>형수, 처제, 올케 …</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="27" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Onkel</span><span class="wd"><small>삼촌, 숙부</small></span><button type="button" id="28" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Tante</span><span class="wd"><small>이모, 고모, 숙모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="29" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Mann</span><span class="wd"><small>남편</small></span><button type="button" id="30" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Frau</span><span class="wd"><small>아내</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="31" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegervater</span><span class="wd"><small>장인. 시부</small></span><button type="button" id="32" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegermutter</span><span class="wd"><small>장모, 시모</small></span><button type="button" id="33" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegereltern</span><span class="wd"><small>처부모, 시부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="34" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegersohn</span><span class="wd"><small>사위</small></span><button type="button" id="35" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegertochter</span><span class="wd"><small>며느리</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="36" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Neffe</span<span class="wd"><small>조카</small></span><button type="button" id="37" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Nichte</span><span class="wd"><small>조카딸</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="38" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Cousin</span><span class="wd"><small>사촌 형제</small></span><button type="button" id="39" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Cousine</span><span class="wd"><small>사촌 자매</small></span></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</section>
		
	<div id="marg"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
		$("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm = new Array(), sen = new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")] = 0;
				sen[$(this).attr("id")] = 0;
			});
			ion.sound({
				sounds : [{
				name : "r3 F1",
					sprite : {
						"0": [0, 131],
						"10": [7.95, 5.77],
						"11": [15.62, 5.03],
						"12": [22.85, 2.24],
						"13": [26.94, 1.64],
						"14": [30.71, 1.15],
						"15": [34.54, 1.58],
						"16": [38.33, 1.74],
						"17": [41.67, 1.3],
						"18": [46.11, 1.33],
						"19": [50.16, 1.8],
						"20": [54.46, 1.66],
						"21": [57.82, 2.07],
						"22": [62.13, 1.79],
						"23": [65.86, 1.84],
						"24": [70, 2.07],
						"25": [75.03, 2],
						"26": [78.8, 1.57],
						"27": [82.93, 1.27],
						"28": [86.43, 1.34],
						"29": [90.74, 1.33],
						"30": [94.411, 1.78],
						"31": [98.54, 1.95],
						"32": [102.54, 1.7],
						"33": [106.86, 1.53],
						"34": [110.28, 2.02],
						"35": [114.09, 2.2],
						"36": [118.52, 1.17],
						"37": [121.94, 1],
						"38": [125.42, 1.17],
						"39": [128.82, 1.6]
					}
				},{
					name : "dingdongdang",
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
						if(obj.part > 8) {
							$("#"+obj.part).html("▶");
						}
															$("#"+hmn).closest("th").find(".tran").show();
					}
				}, ready_callback: function () {
					
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
		$(".so").on("click", function () {
			if($(this).attr("id").substr(-2) == "_p") {
				// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
			ion.sound.pause("r3 F1", {
					part: "0"
				});
				$("#0").show();
				$(this).hide();
			} else if($(this).html() == "▶") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
			ion.sound.play("r3 F1", {
					part: $(this).attr("id")
				});
				$(this).html("❚❚");
			} else if($(this).html() == "❚❚") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
			ion.sound.pause("r3 F1", {
					part: $(this).attr("id")
				});
				$(this).html("▶");
			} else {
				// _p 붙어 있지 않으면 id 그대로 재생
			ion.sound.play("r3 F1", {
					part: $(this).attr("id")
				});
				// 전체 듣기 재생일 때는 일시정지 버튼 보이기
				if($(this).attr("id") == "0") {
					$(this).hide();
					$("#0_p").show();
				};
			};
		});

		<?php include "wahl.php"; ?>

		// 정답확인
		$("#chk").on("click", function() {
			var na = "";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				$(".itm-lst").each(function() {
					$(this).html($(this).find("button").html());
					$(this).addClass("font-weight-bold text-success");
				})


				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				var qa = $(".itm-lst").length; // 전체 문항 수
				var qr = $(".text-success").length; // 맞춘 항목 수
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
					var st = "쓰읍~ 다시 해 보실까요!";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

				$(".btn-lg").text().appendTo($(this).closest("td"));
				$(".btn-lg").remove();
			} else {
				$("div.itm-lst").each(function(idx) {
					if(!$(this).find("button").length) {
						if(na != "") {
							na += ", ";
						}
						na += (idx+1);
					}
				});
				alert("빈 칸을 모두 채워주세요.");
				// alert(na+"번 문제를 풀어주세요!");
			}
		});
	$("#0").show();
	$(".alert").hide();
	}
	});
	
	});
		
	</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>