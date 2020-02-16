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
				<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so text-left" id="1">
					Was hast du gegessen?
					<span class="tran"><br><small>뭘 먹었니?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so text-left" id="2">
					Das ist aber nicht gut! Du musst viel Obst und Gemüse essen.
					<span class="tran"><br><small>그것은 안좋아! 과일과 채소를 많이 먹어야 하는데.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so text-left" id="3">
					Heute verschreibe ich dir ein Medikament!
					<span class="tran"><br><small>오늘 약을 처방해줄게!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so text-left" id="4">
					Guten Tag, Frau Doktor!
					<span class="tran"><br><small>안녕하세요, 선생님!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm so text-left" id="5">
					Gute Besserung!
					<span class="tran"><br><small>얼른 나으렴!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so text-left" id="6">
					Hallo Peter?
					<span class="tran"><br><small>안녕 피터?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so text-left" id="7">
					Ich habe Hamburger gegessen.
					<span class="tran"><br><small>햄버거 먹었어요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so text-left" id="8">
					Was fehlt dir denn?
					<span class="tran"><br><small>어디가 아프니?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so text-left" id="9">
					Mein Magen tut mir sehr weh und ich habe Fieber.
					<span class="tran"><br><small>배가 많이 아프고 열이 있어요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so text-left" id="10">
					Ich esse meistens Fast Food, Hamburger oder Pizza.
					<span class="tran"><br><small>저는 보통 패스트푸드 먹는데, 햄버거나 피자에요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans15 btn-md btn-outline-dark itm so text-left" id="11">
					Danke schön, Frau Doktor!
					<span class="tran"><br><small>고맙습니다, 선생님!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so text-left" id="12">
					Ja, ich weiß.
					<span class="tran"><br><small>네, 알아요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so text-left" id="13">
					(nach der Untersuchung) Peter!
					<span class="tran"><br><small>(검진 후)피터!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so text-left" id="14">
					Du hast Darmgrippe.
					<span class="tran"><br><small>장염에 걸렸구나.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so text-left" id="15">
					 Aber ich bin den ganzen Tag in der Schule und gleich danach habe ich Nachhilfeunterricht.
					<span class="tran"><br><small>하지만 저는 하루 종일 학교에 있고, 곧바로 과외를 가요.</small></span>
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
						<h2> Hören Sie den Dialog und ergänzen Sie. <small> 듣고 채우세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>						
						</h2>
						<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">보기</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
						<table class="table">
							<tbody>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Ärztin:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm col-4" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Peter:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm col-5" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Ärztin:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm col-5" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Peter:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Ärztin:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Peter:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-0 border-0 align-middle" scope="row" width="100">&nbsp;</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Ärztin:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Peter:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm d-inline-block" id="lst-9" style="min-width: 25%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
										<div class="itm-lst 1itm d-inline-block" id="lst-10" style="min-width: 70%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Ärztin:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">&nbsp;</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-12">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">&nbsp;</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-13">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">&nbsp;</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-14">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="100">Peter:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-15">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
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
			$(".tran").hide();
			$("#chk").hide();
			$("#0").hide();
			$("#0_p").hide();
			
			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});

				ion.sound({
					sounds : [{
						name : "r8 D4",

						sprite : {
							"0": [2.73,49.2],
							"1": [20.66,1.56],
							"2": [29.17,4.34],
							"3": [45.62,2.52],
							"4": [13.15,1.58],
							"5": [48.6,1.53],
							"6": [11.27,1.5],
							"7": [22.54,1.79],
							"8": [15.09,1.24],
							"9": [16.78,3.04],
							"10": [24.67,4.1],
							"11": [50.18,1.93],
							"12": [33.81,1.57],
							"13": [42.81,.93],
							"14": [43.78,1.32],
							"15": [35.59,5.3]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 8/",
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
							if(obj.part > 15) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
									$("#"+hmn).find(".tran").show();		
							}


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
					ion.sound.pause("r8 D4", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 D4", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 D4", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 D4", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});


			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

					// 정답 확인 div 상자 배경색 속성 없애기
					$(this).removeClass("btn-light ");

					$(".itm-lst").each(function() {
						if($(this).find("button.btn")) {
							$(this).find("button.btn").addClass("text-success");
						}
					});

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
						var st = "쓰읍~ 다시 해 보실까요";
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
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});
		$("#0").show();
		$(".alert").hide();

<?php include "wahl.php"; ?>

			var pan = new Array();
			// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
			pan = [1, 2, 4, 5, 6, 8, 9, 11, 12, 13, 14];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
						$("#" + $(this).attr("id")).addClass("border-0");
						$("#lst-" + pan[p] + ">h2").remove();
						// $("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>