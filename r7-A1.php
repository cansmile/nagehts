<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<style>
		td,th,table {
			border-width: 0;
			border-style: hidden;
		}
	</style>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm" id="1">
					zum Deutschkurs
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm" id="2">
					in die Oper
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm" id="3">
					in den Park
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm" id="4">
					zum Fußball
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm" id="5">
					ins Restaurant
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm" id="6">
					nehme ich am Gottesdienst teil
					</button>
					<button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm" id="7">
					zum Flohmarkt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm" id="8">
					spiele ich Fußball
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm" id="9">
					sehe ich mir eine Oper an
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm" id="10">
					lerne ich Deutsch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm" id="11">
					kaufe ich gute gebrauchte Sachen ein
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="12">
					gehe ich essen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm" id="13">
					in die Kirche
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm" id="14">
					gehe ich spazieren
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
					<h2>Sprechen Sie in der Klasse. <small>수업시간에 이야기해보세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">1.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Samstag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">토요일에 나는 식당에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 식사를 한다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">2.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Samstagabend gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">토요일 저녁에 나는 오페라 공연장에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 오페라를 본다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">3.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Samstagvormittag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">토요일 오전에 나는 독일어 수업에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 독일어를 배운다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">4.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Freitagnachmittag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">금요일 오후에 나는 축구하러 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 축구를 한다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">5.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Sonntagvormittag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">일요일 오전에 나는 교회에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 예배를 드린다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">6.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Sonntagnachmittag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-11">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">일요일 오후에 나는 공원에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-12">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 산책한다.</span><br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="p-1 m-0 border-0 align-middle" style="line-height: 250%;" width="20" scope="row" rowspan="4">7.</th>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Am Samstagnachmittag gehe ich
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-13">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">토요일 오후에 나는 벼룩시장에 간다.</span><br>
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									Da
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-14">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.
								</td>
							</tr>
							<tr>
								<td class="p-1 m-0 border-0 align-middle" style="line-height: 250%;">
									<span class="p-2 my-2 bg-success text-white rounded">거기서 나는 중고 물건을 산다.</span><br>
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
				<table class="table">
					<thead>
						<tr>
							<th scope="col"><span class="bg-lime font-weight-bold rounded p-1 px-2 m-1">TIPP</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="50%">
								<strong>Wohin gehen?</strong><br>
								<span class="ml-3">• in den (m), die (f), ins (n) + Haus und Gebäude, Ort</span><br>
								<span class="ml-3">• zum (m,n) zur (f) + Aktivitäten, Person</span><br>
							</td>
							<td class="align-middle text-center">
								<table class="table">
									<tbody>
										<tr>
											<td><span class="bg-light border border-dark rounded m-0 p-2 px-3">&nbsp;</span><span class="m-0" style="position: relative; left: -8px; font-size: 2em;">←</span><span class="bg-light border border-dark rounded m-0 p-2 px-3" style="position: relative; left: -12px;"><strong>in</strong></span></td>
										</tr>
										<tr>
											<td><span class="bg-light border border-dark rounded m-0 p-2 px-3">&nbsp;</span><span class="m-0" style="font-size: 2em;">←</span><span class="bg-light border border-dark rounded m-0 p-2 px-3" style="position: relative; left: -12px;"><strong>zu</strong></span></td>
										</tr>
									</tbody>
								</table>
							</td>
							<td>
								<table class="table text-center">
									<thead>
										<tr>
											<th class="border-white border" scope="col">&nbsp;</th>
											<th class="border-white border bg-light" scope="col" colspan="3">best. Artikel</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="border-white border bg-light" scope="row">1격</th>
											<td class="border-white border">der</td>
											<td class="border-white border">die</td>
											<td class="border-white border">das</td>
										</tr>
										<tr>
											<th class="border-white border bg-light" scope="row">4격</th>
											<td class="border-white border">den</td>
											<td class="border-white border">die</td>
											<td class="border-white border">das</td>
										</tr>
										<tr>
											<th class="border-white border bg-light" scope="row">3격</th>
											<td class="border-white border">dem</td>
											<td class="border-white border">der</td>
											<td class="border-white border">dem
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
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
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
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
					name : "r7 A1",
					sprite : {
						"0": [9.87, 109.26]
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
						if(obj.part > 5) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("table").find(".tran").show();
						}
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
							ion.sound.pause("r7 A1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r7 A1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 A1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r7 A1", {
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
					// 정답확인
					$("#chk").on("click", function() {
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();
							$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
							$(this).removeClass("btn-light");
							$(this).addClass("btn-primary");
							$(".btn-lg").text().appendTo($(this).closest("td"));
							$(".btn-lg").remove();
						}
						else {
							$("div.itm-lst").each(function(idx) {
								if( !$(this).find("button").length) {
									if(na !="") {
										na +=", ";
									}
									na +=(idx+1);
								}
							}
							);
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
					}
					);
					$("#0").show();
					$(".alert").hide();

					<?php include "wahl.php"; ?>

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=["1", "2", "3", "4", "5", "6"];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold text-left pl-0");
								$("#"+ $(this).attr("id")).addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								$("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}
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