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
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
					einen Schweinebraten.<span class="tran">&nbsp;<br /><small>돼지 불고기.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					eine Bratwurst.<span class="tran">&nbsp;<br /><small>소시지 구이.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					ein Bier.<span class="tran">&nbsp;<br /><small>맥주.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					eine Suppe.<span class="tran">&nbsp;<br /><small>수프</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="5">
					eine Cola.<span class="tran">&nbsp;<br /><small>콜라</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="6">
					ein Hähnchen.<span class="tran">&nbsp;<br /><small>닭고기.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					einen Kaffee.<span class="tran">&nbsp;<br /><small>커피.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
					einen Salat.<span class="tran">&nbsp;<br /><small>샐러드.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="9">
					ein Mineralwasser.<span class="tran">&nbsp;<br /><small>미네랄 워터.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="10">
					Marmelade.<span class="tran">&nbsp;<br /><small>잼.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					einen Käsekuchen.<span class="tran">&nbsp;<br /><small>치즈 케잌.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					ein Wurstbrot.<span class="tran">&nbsp;<br /><small>소시지 빵.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="13">
					Butter(f).<span class="tran">&nbsp;<br /><small>버터.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
					einen Saft.<span class="tran">&nbsp;<br /><small>주스.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="15">
					ein Brötchen.<span class="tran">&nbsp;<br /><small>하드 롤.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="16">
					einen Wein.<span class="tran">&nbsp;<br /><small>와인.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="17">
					Milch(f).<span class="tran">&nbsp;<br /><small>우유.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="18">
					ein Ei.<span class="tran">&nbsp;<br /><small>계란.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="19">
					eine Limonade.<span class="tran">&nbsp;<br /><small>레모네이드.</small></span>
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
					<h2> Ergänzen Sie die Tabelle.<br>
					<small>다음 표를 채우세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th class="border-0" scope="col" colspan="2">&nbsp;</th>
								<th class="border-0 text-primary" scope="col">m</th>
								<th class="border-0 text-danger" scope="col">f</th>
								<th class="border-0 text-purple" scope="col">n</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td width="5%" class="align-middle">Ich<span class="tran"><br><small>나는</small></span></td>
								<td width="5%" class="align-middle">esse<span class="tran"><br><small>먹는다</small></span></td>
								<td width="30%">
									<div style="min-height: 240px;" class="rounded-top border border-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
										<h2 class="btn btn-primary btn-xl ttl d-block">▼</h2>&nbsp;
									</div>
								</td>
								<td width="30%">
									<div style="min-height: 240px;" class="rounded-top border border-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
										<h2 class="btn btn-danger btn-xl ttl d-block">▼</h2>&nbsp;
									</div>
								</td>
								<td width="30%">
									<div style="min-height: 240px;" class="rounded-top border border-purple so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
										<h2 class="btn btn-purple btn-xl ttl d-block">▼</h2>&nbsp;
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle">Ich<span class="tran"><br><small>나는</small></span></td>
								<td class="align-middle">trinke<span class="tran"><br><small>마신다</small></span></td>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-4">
										<h2 class="btn btn-primary btn-xl ttl d-block">▼</h2>&nbsp;
									</div>
								</td>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-5">
										<h2 class="btn btn-danger btn-xl ttl d-block">▼</h2>&nbsp;
									</div>
								</td>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-purple so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-6">
										<h2 class="btn btn-purple btn-xl ttl d-block">▼</h2>&nbsp;
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
			<div class="row">
				<div class="col">
					<table class="text-center table table-striped">
						<tbody>
							<tr>
								<td colspan="4"><strong>Mengenangaben</strong>&nbsp;<small>단위명사</small></td>
							</tr>
							<tr>
								<td>eine Flasche</td>
								<td>Mineralwasser</td>
								<td rowspan="4" class="bg-white align-middle text-center">
									<img src="./images/Reihe 5/Reihe-5-C2-1.png" alt="" style="max-height: 120px; width: auto;"><br><small>die Flasche</small>
								</td>
								<td rowspan="4" class="bg-white align-middle text-center">
									<img src="./images/Reihe 5/Reihe-5-C2-2.png" alt="" style="max-height: 120px; width: auto;"><br><small>das Glas</small>
								</td>
							</tr>
							<tr>
								<td>zwei Flaschen</td>
								<td>Milch/Cola/Bier</td>
							</tr>
							<tr>
								<td>ein Glas</td>
								<td>Wein/Bier/Milch</td>
							</tr>
							<tr>
								<td>drei Gläser</td>
								<td>Saft/Schnaps</td>
							</tr>
							<tr>
								<td>eine Dose</td>
								<td>Cola</td>
								<td rowspan="4" class="bg-white align-middle text-center">
									<img src="./images/Reihe 5/Reihe-5-C2-3.png" alt="" style="max-height: 120px; width: auto;"><br><small>die Dose</small>
								</td>
								<td rowspan="4" class="bg-white align-middle text-center">
									<img src="./images/Reihe 5/Reihe-5-C2-4.png" alt="" style="max-height: 120px; width: auto;"><br><small>die Tasse</small>
								</td>
							</tr>
							<tr>
								<td>vier Dosen</td>
								<td>Bier</td>
							</tr>
							<tr>
								<td>eine Tasse</td>
								<td>Tee</td>
							</tr>
							<tr>
								<td>zwei Tassen</td>
								<td>Kaffee</td>
							</tr>
						</tbody>
					</table>
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
		$("#chk").hide();
		$(document).ready(function() {
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
					name : "r5 C2 Tabelle",
					sprite : {
						"0": [13.4, 131.9],
							"1": [25.37, 1.46],
							"2": [66.1, 1.2],
							"3": [143.85, .75],
							"4": [73.8, .9],
							"5": [98.8, 1],
							"6": [130.02, 1],
							"7": [58.05, 1],
							"8": [32.52, 1.16],
							"9": [137.15, 1.3],
							"10": [85.25, 1.01],
							"11": [38.63, 1.36],
							"12": [123.1, 1.23],
							"13": [80.05, .6],
							"14": [46.04, .86],
							"15": [111.54, .98],
							"16": [51.9, 1],
							"17": [93.05, .60],
							"18": [117.21, .87],
							"19": [104.07, 1.2]
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
				path : "sounds/Reihe 5/",
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
						// if(obj.part > 20) {
						// 	$("#"+obj.part).html("▶");
						// }
						$("#"+hmn).closest("th").find(".tran").show();
					}
				}
				, ready_callback: function () {
					$(".o").on("click", function() {
						ion.sound.play("dingdongdang");
					}
					);
					$(".x").on("click", function() {
						ion.sound.play("Cartoon_Boing");
					}
					);
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
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 C2 Tabelle", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 C2 Tabelle", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 C2 Tabelle", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 C2 Tabelle", {
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

					// 정답확인
					$("#chk").on("click", function() {
					if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
						$(this).attr("id", "done");
						$(".tran").show();
						$(".itm").each(function() {
							if($(this).parent().attr("id").length > 5) {
								var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
							} else {
								var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
							}
							$(".tran").show();
if($(this).hasClass("ans"+ (a))) {
								$(this).addClass("text-success font-weight-bold");
							}
							else {
								$(this).addClass("text-warning font-weight-bold");
								$(this).find(".tran").show();

							}
							;

							if($(this).hasClass("text-warning")) {
								// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
								for(var i = 1; i <= $(".itm-lst").length; i++) {
									if($(this).hasClass("ans"+i)) {
										$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
										// $(lstn).append(i);
									}
								}
							};

						}
					);

					if($(".itm").length==$(".itm.text-success").length) {
						ion.sound.play("dingdongdang");
						$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
						$(this).addClass("bg-success font-weight-bold text-white");
					}
					else {
						ion.sound.play("Cartoon_Boing");
						$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
						$(this).addClass("bg-orange font-weight-bold text-white");
					}
					;
				}
			}
					);
					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>