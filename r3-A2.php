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
						<h2>Hören Sie und sprechen Sie nach.<br>
							<small>듣고 따라 하세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
						<table class="table text-center">
							<thead>
								<tr>
									<th scope="col" colspan="3"><img src="./images/Reihe 3/Reihe3-A-A1-4.png" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="bg-light"><small>나의</small>mein</th>
									<td class="bg-light">Vater</td>
								</tr>
								<tr>
									<th rowspan="2" class="align-middle bg-light">meine</th>
									<td class="bg-light">Mutter</td>
								</tr>
								<tr>
									<td class="bg-light">Eltern</td>
								</tr>
								<tr>
									<th colspan="3" height="1" class="p-0 m-0 border-0">&nbsp;</th>
								</tr>
								<tr>
									<th class="bg-light"><small>당신의</small>Ihr</th>
									<td class="bg-light">Vater</td>
								</tr>
								<tr>
									<th rowspan="2" class="align-middle bg-light">Ihre</th>
									<td class="bg-light">Mutter</td>
								</tr>
								<tr>
									<td class="bg-light">Eltern</td>
								</tr>
								<tr>
									<th colspan="3" height="1" class="p-0 m-0 border-0">&nbsp;</th>
								</tr>
								<tr>
									<th class="bg-light">ich</th>
									<td class="bg-light">komme</td>
								</tr>
								<tr>
									<th class="bg-light"><small>당신</small>Sie</th>
									<td class="bg-light">komm<strong>en</strong></td>
								</tr>
								<tr>
									<th class="bg-light"><small>그들</small>sie</th>
									<td class="bg-light">komm<strong>en</strong></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></th>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger text-center">▶</button></th>
									<td class="text-center">Das sind meine Großeltern, mein Opa und meine Oma.<span class="tran"><br><small>이 분들은 저의 조부모님들, 저의 할아버지와 저의 할머니세요. </small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Was machen sie?<span class="tran"><br><small>그들은 무엇을 하시나요?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger text-center">▶</button></th>
									<td class="text-center">Mein Opa ist Pfarrer und meine Oma ist Lehrerin.<span class="tran"><br><small>저의 할아버지께서는 목사님이시고 저의 할머니는 선생님이세요.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Kommen sie aus Korea?<span class="tran"><br><small>그들은 한국 출신인가요?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="6" class="so btn btn-outline-danger text-center">▶</button></th>
									<td class="text-center">Ja, sie kommen aus Seoul, Korea.<span class="tran"><br><small>네, 그분들은 한국, 서울에서 오셨어요.</small></span></td>
								</tr>
								<tr>
							</tbody>
						</table>
						<table class="table text-center table-striped">
							<thead>
								<tr>
									<th scope="col">&nbsp;</th>
									<th scope="col">maskulin(m)</th>
									<th scope="col">feminin(f)</th>
									<th scope="col">Plural(Pl.)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>Vater</td>
									<td>Mutter</td>
									<td>Eltern</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>Bruder</td>
									<td>Schwester</td>
									<td>Geschwister</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>Großvater</td>
									<td>Großmutter</td>
									<td>Großeltern</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>Sohn</td>
									<td>Tochter</td>
									<td>Kinder</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>

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
						name : "r3 A2",

						sprite : {
							"0": [10.7,25],
							"1": [11.1,1.6],
							"2": [13.9,5.1],
							"3": [20,1.8],
							"4": [23,5],
							"5": [28,2.3],
							"6": [31,3.6]
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
						// 재상이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else if(hmn < 15) {
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
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
					ion.sound.pause("r3 A2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r3 A2", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r3 A2", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r3 A2", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
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