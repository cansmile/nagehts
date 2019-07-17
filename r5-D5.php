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
						<h2> Hören Sie die Gespräche und ergänzen Sie. <br>
							<small> 대화문을 듣고 채우세요. </small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고, 대화문에 맞는 단어를 선택하여 알맞게 채우세요.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
							Salatteller
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
							große Cola
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
							Schweinebraten mit Salat
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
							Mineralwasser
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
							Bier
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							Currywurst mit Pommes
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
							Glas Rotwein
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
							Käsekuchen
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
							Fischbraten mit Kartoffelsalat
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
							Espresso
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="11">
							Kaffee
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th scope="col"><button type="button" id="12" class="so btn btn-outline-primary">▶</button> Hörtext 1</th>
									<th scope="col"><button type="button" id="13" class="so btn btn-outline-success">▶</button> Hörtext 2</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="30%">
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
											<h2 class="btn btn-primary btn-xl ttl d-block">die Mutter</h2>&nbsp;
										</div>
									</td>
									<td width="30%">
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
											<h2 class="btn btn-success btn-xl ttl d-block">der Mann</h2>&nbsp;
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
											<h2 class="btn btn-primary btn-xl ttl d-block">das Kind</h2>&nbsp;
										</div>
									</td>
									<td>
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-4">
											<h2 class="btn btn-success btn-xl ttl d-block">die Frau</h2>&nbsp;
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th scope="row">Die Mutter</th>
									<td>nimmt</td>
									<td>einen ...</td>
								</tr>
								<tr>
									<th scope="row">Das Kind</th>
									<td>isst</td>
									<td>eine ...</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>trinkt</td>
									<td>ein ...</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th scope="row">Der Mann</th>
									<td>nimmt</td>
									<td>einen ...</td>
								</tr>
								<tr>
									<th scope="row">Die Frau</th>
									<td>isst</td>
									<td>eine ...</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>trinkt</td>
									<td>ein ...</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- 정답화인 버튼 시작 -->
<!-- 				<div class="row">
					<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
						정답확인
					</div>
				</div> -->
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
						name : "r5 D5",

						sprite : {
							"0": [2.8,91.5],
							"1": [36.46,.94],
							"2": [23.24,.72],
							"3": [81.39,1.52],
							"4": [37.87,1.1],
							"5": [83.93,.22],
							"6": [33.33,1.1],
							"7": [78.32,1.13],
							"8": [89.03,1],
							"9": [74.21,2.11],
							"10": [93.24,.97],
							"11": [87.56,.84],
							"12": [15,25],
							"13": [41.7,53]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 5/",
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
							$("#"+hmn).closest("th").find(".tran").show();									
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
					ion.sound.pause("r5 D5", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r5 D5", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 D5", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r5 D5", {
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
					$(".btn-sm").text().appendTo($(this).closest("td"));
					$(".btn-sm").remove();
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