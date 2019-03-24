<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Hören Sie und sprechen Sie nach.<br>
							<small>듣고 따라하세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
							Österreicher
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="2">
							Schweizerin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="3">
							Amerikaner
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
							Japanerin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="5">
							Spanierin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							Deutsch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="7">
							Spanisch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
							Deutsch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="9">
							Englisch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="10">
							Deutsch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="11">
							Italiener
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col" colspan="2">Land<small>나라</small></th>
									<th scope="col" colspan="2">Mann<small>남</small></th>
									<th scope="col" colspan="2">Frau<small>여</small></th>
									<th scope="col" colspan="2">Sprache<small>언어</small></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Korea</th>
									<td><button type="button" id="12" class="so btn btn-danger">▶</button></td>
									<td>Koreaner</td>
									<td><button type="button" id="13" class="so btn btn-danger">▶</button></td>
									<td>Koreanerin</td>
									<td><button type="button" id="14" class="so btn btn-danger">▶</button></td>
									<td>Koreanisch</td>
									<td><button type="button" id="15" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Japan</th>
									<td><button type="button" id="16" class="so btn btn-danger">▶</button></td>
									<td>Japaner</td>
									<td><button type="button" id="17" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="18" class="so btn btn-danger">▶</button></td>
									<td>Japanisch</td>
									<td><button type="button" id="19" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">China</th>
									<td><button type="button" id="20" class="so btn btn-danger">▶</button></td>
									<td>Chinese</td>
									<td><button type="button" id="21" class="so btn btn-danger">▶</button></td>
									<td>Chinesin</td>
									<td><button type="button" id="22" class="so btn btn-danger">▶</button></td>
									<td>Chinesisch</td>
									<td><button type="button" id="23" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Deutschland</th>
									<td><button type="button" id="24" class="so btn btn-danger">▶</button></td>
									<td>Deutscher</td>
									<td><button type="button" id="25" class="so btn btn-danger">▶</button></td>
									<td>Deutsche</td>
									<td><button type="button" id="26" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="27" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Österreich</th>
									<td><button type="button" id="28" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="29" class="so btn btn-danger">▶</button></td>
									<td>Österreicherin</td>
									<td><button type="button" id="30" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="31" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">die Schweiz</th>
									<td><button type="button" id="32" class="so btn btn-danger">▶</button></td>
									<td>Schweizer</td>
									<td><button type="button" id="33" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="34" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="35" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Frankreich</th>
									<td><button type="button" id="36" class="so btn btn-danger">▶</button></td>
									<td>Franzose</td>
									<td><button type="button" id="37" class="so btn btn-danger">▶</button></td>
									<td>Französin</td>
									<td><button type="button" id="38" class="so btn btn-danger">▶</button></td>
									<td>Französisch</td>
									<td><button type="button" id="39" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Amerika</th>
									<td><button type="button" id="40" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="41" class="so btn btn-danger">▶</button></td>
									<td>Amerikanerin</td>
									<td><button type="button" id="42" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="43" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Spanien</th>
									<td><button type="button" id="44" class="so btn btn-danger">▶</button></td>
									<td>Spanier</td>
									<td><button type="button" id="45" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="46" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="47" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">Italien</th>
									<td><button type="button" id="48" class="so btn btn-danger">▶</button></td>
									<td>
								<div class="itm-lst 1itm" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
									<td><button type="button" id="49" class="so btn btn-danger">▶</button></td>
									<td>Italienerin</td>
									<td><button type="button" id="50" class="so btn btn-danger">▶</button></td>
									<td>Italienisch</td>
									<td><button type="button" id="51" class="so btn btn-danger">▶</button></td>
								</tr>
								<tr>
									<th scope="row">die Türkei</th>
									<td><button type="button" id="52" class="so btn btn-danger">▶</button></td>
									<td>Türke</td>
									<td><button type="button" id="53" class="so btn btn-danger">▶</button></td>
									<td>Türkin</td>
									<td><button type="button" id="54" class="so btn btn-danger">▶</button></td>
									<td>Türkisch</td>
									<td><button type="button" id="55" class="so btn btn-danger">▶</button></td>
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
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r2 C2",

						sprite : {
							"0": [4.4,105],
							"1": [46.5,1.4],
							"2": [57.9,1.1],
							"3": [75.5,1.3],
							"4": [22,1.1],
							"5": [86.9,1],
							"6": [41.7,1.3],
							"7": [89.3,.8],
							"8": [50.9,1.3],
							"9": [80.2,1.3],
							"10": [60,.8],
							"11": [93.7,1.2],
							"12": [8.2,1.3],
							"13": [10.7,.9],
							"14": [13.1,1],
							"15": [15.1,1.4],
							"16": [18,.9],
							"17": [19.8,1.3],
							"18": [22,1.1],
							"19": [24.3,1.1],
							"20": [26.9,1],
							"21": [28.8,1.2],
							"22": [30.7,1.3],
							"23": [32.9,1.1],
							"24": [35.4,1.2],
							"25": [37.5,1.2],
							"26": [39.7,1.1],
							"27": [41.7,1.3],
							"28": [44.4,1.3],
							"29": [46.5,1.4],
							"30": [48.8,1.8],
							"31": [50.9,1.3],
							"32": [53.2,2],
							"33": [55.6,1.3],
							"34": [57.9,1.1],
							"35": [60,.8],
							"36": [64,1.5],
							"37": [66.4,1],
							"38": [68.7,1.3],
							"39": [70.9,1.1],
							"40": [73.4,1.3],
							"41": [75.5,1.3],
							"42": [77.8,1.2],
							"43": [80.2,1.3],
							"44": [82.6,1],
							"45": [84.8,.9],
							"46": [86.9,1],
							"47": [89.3,.8],
							"48": [91.4,1.1],
							"49": [93.7,1.2],
							"50": [96.3,1.1],
							"51": [98.5,1.2],
							"52": [101.1,1.3],
							"53": [103.5,1.3],
							"54": [1.4,.9],
							"55": [108.1,1.3]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 2/",
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
								if(hmn == 17) {
									for(j = 7; j <= 9; j++) {
										$("#"+j).closest("tr").find(".tran").show();		
									}
								} else if(hmn == 18) {
									for(j = 10; j <= 12; j++) {
										$("#"+j).closest("tr").find(".tran").show();		
									}
								} else if(hmn == 19) {
									for(j = 13; j <= 16; j++) {
										$("#"+j).closest("tr").find(".tran").show();		
									}
								} else {
									$("#"+hmn).closest("tr").find(".tran").show();									
								}

							}


						}

					}, ready_callback: function () {
						
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
					ion.sound.pause("r2 C2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r2 C2", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r2 C2", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r2 C2", {
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

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert(na+"번 문제를 풀어주세요!");
				}
			});
		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>