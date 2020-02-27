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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					der Computer<span class="tran"><br><small>컴퓨터</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="2">
					die Tischlampe<span class="tran"><br><small>스탠드</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="3">
					das I-Pad<span class="tran"><br><small>아이패드</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="4">
					der Rucksack<span class="tran"><br><small>배낭</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm" id="5">
					das Bücherregal<span class="tran"><br><small>책꽂이</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="6">
					die Wanduhr<span class="tran"><br><small>벽시계</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					das Bild<span class="tran"><br><small>그림</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="8">
					der Tisch<span class="tran"><br><small>책상</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="9">
					die Kommode<span class="tran"><br><small>서랍장</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="10">
					der Stuhl<span class="tran"><br><small>의자</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					das Bett<span class="tran"><br><small>침대</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="12">
					die Musik-CD<span class="tran"><br><small>음악 CD</small></span>
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
					<h2> Im Zimmer <br>
					<small> 방에서 </small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="btn disabled btn-sm btn-outline-dark">단어</button> 버튼을 눌러 2번 들으면, 번역이 나옵니다.<br>들으면서 단어를 그림과 연결하세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-1.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-2.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-3.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-4.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-5.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-6.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-7.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-8.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-9.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-10.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-11.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-11">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B1-12.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-12">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
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
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm = new Array(), sen = new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")] = 0;
				sen[$(this).attr("id")] = 0;
			});
			ion.sound({
				sounds : [{
					name : "r4 B1",
					sprite : {
						"0": [6.2,54],
						"12": [35.8,1.9],
						"11": [10.3,1.5],
						"10": [31.6,1.5],
						"2": [53.8,1.9],
						"7": [23.1,1.7],
						"3": [49.4,1.7],
						"5": [57.8,2.2],
						"8": [41,1.2],
						"9": [45,1.8],
						"6": [18.7,1.8],
						"1": [14.5,1.4],
						"4": [27.3,1.7]
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
						if(obj.part > 12) {
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
				ion.sound.pause("r4 B1", {
					part: "0"
				});
				$("#0").show();
				$(this).hide();
			} else if($(this).html() == "▶") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
				ion.sound.play("r4 B1", {
					part: $(this).attr("id")
				});
				$(this).html("❚❚");
			} else if($(this).html() == "❚❚") {
				// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
				ion.sound.pause("r4 B1", {
					part: $(this).attr("id")
				});
				$(this).html("▶");
			} else {
				// _p 붙어 있지 않으면 id 그대로 재생
				ion.sound.play("r4 B1", {
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
					if($(this).find(".so")) {
						$(this).find(".so").addClass("text-success");
					}
				});


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
				alert("모든 문제를 풀어주세요!");
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