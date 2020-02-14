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
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
					das Apartment (das Hochhaus)<span class="tran"><br><small>아파트</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="2">
					das Einfamilienhaus<span class="tran"><br><small>단독주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					das Reihenhaus<span class="tran"><br><small>연립주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="4">
					der Bauernhof<span class="tran"><br><small>전원주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="5">
					das Studentenwohnheim<span class="tran"><br><small>기숙사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					das Ökohaus<span class="tran"><br><small>에코하우스</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					das Schloss<span class="tran"><br><small>성</small></span>
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
					<h2> Welche Wohnform ist das? <br>
					<small>어떤 집 형태인가요?</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="btn disabled btn-sm btn-outline-dark">단어</button> 버튼을 눌러 2번 들으면, 번역이 나옵니다.<br>들으면서 단어를 그림과 연결하세요.<br />그림을 눌러도 들을 수 있습니다.</small> ]</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-1.png" style="max-width:240px; height: auto;" class="so" id="8"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-2.png" style="max-width:240px; height: auto;" class="so" id="9"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-3.png" style="max-width:240px; height: auto;" class="so" id="10"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-4.png" style="max-width:240px; height: auto;" class="so" id="11"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 aling-bottom">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-5.png" style="max-height:240px; max-width: 99%;" class="so" id="12"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-6.png" style="max-width:240px; height: auto;" class="so" id="13"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table text-center">
						<tbody>
							<tr>
								<td height="350" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A1-7.png" style="max-width:240px; height: auto;" class="so" id="14"></td>
							</tr>
							<tr>
								<td class="border-0 align-middle">
									<div class="itm-lst 1itm" id="lst-7">
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
		$("#0").hide();
		$("#0_p").hide();
		$("#chk").hide();
		$(".tran").hide();
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm = new Array(), sen = new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")] = 0;
				sen[$(this).attr("id")] = 0;
			});
			ion.sound({
				sounds : [{
					name : "r4 A1",
					sprite : {
						"0": [6,37.3],
						"1": [12.2,2.7],
						"2": [18.3,2.8],
						"3": [23.7,2.1],
						"4": [28.2,1.8],
						"5": [32.6,2.4],
						"6": [36.7,2.6],
						"7": [40.9,2.3],
						"8": [40.9,2.3],
						"9": [36.7,2.6],
						"10": [12.2,2.7],
						"11": [18.3,2.8],
						"12": [32.6,2.4],
						"13": [23.7,2.1],
						"14": [28.2,1.8]
					}
				},{
					name : "dingdongdang",
					path : "sounds/"
				}, {
					name : "Cartoon_Boing",
					path : "sounds/"
				}],
				path : "sounds/Reihe 4/",
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
						if(obj.part > 11) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("button").find(".tran").show();
						}
					}
				}, ready_callback: function () {
					
			$(".o").on("click", function() {
				ion.sound.play("dingdongdang");
			});
			$(".x").on("click", function() {
				ion.sound.play("Cartoon_Boing");
			});

		$(".so").on("click", function () {
			if($(this).attr("id").substr(-2) == "_p") {
				// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
				ion.sound.pause("r4 A1", {
					part: "0"
				});
				$("#0").show();
				$(this).hide();
			} else if($(this).html() == "▶") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
				ion.sound.play("r4 A1", {
					part: $(this).attr("id")
				});
				$(this).html("❚❚");
			} else if($(this).html() == "❚❚") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
				ion.sound.pause("r4 A1", {
					part: $(this).attr("id")
				});
				$(this).html("▶");
			} else {
				// _p 붙어 있지 않으면 id 그대로 재생
				ion.sound.play("r4 A1", {
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
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
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
					
				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				var qa = $(".itm-lst").length; // 전체 문항 수
				var qr = $(".1itm>.btn-outline-dark").length; // 맞춘 항목 수
				var pe = (qr / qa) * 100; // 정답 비율
				var tcl = "white"; // 기본 문자색

				// 분류 기준은 100%, 80%, 60%, 40%
				if(pe > 99) {
					var st = "원어민이세요?";
					var cl = "lime";
					var tcl = "dark";
				} else if(pe > 79) {
					var st = "어! 좀 하시는데요~^^";
					var cl = "success";
				} else if(pe > 59) {
					var st = "쓰읍~ 다시 해 보실까요";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

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