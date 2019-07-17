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
						<h2> Ordnen Sie zu. <br>
							<small>알맞은 직업을 찾아보세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>
						<h3>[ <small>듣고 단어를 알맞은 항목이 짝지우세요.</small> ]</h3>

						</h2>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="1">
							Ärztin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="2">
							Kellner
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="3">
							Architekt
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
							Verkäufer
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="5">
							Friseurin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="6">
							Hausfrau
						</button>
						<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="7">
							Sekretärin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="8">
							Taxifahrer
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
							Lehrer
						</button>
						<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="10">
							Ingenieur
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center">
										<button type="button" id="11" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;교사</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="12" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;점원</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="13" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;주부</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="14" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;미용사</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="15" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;건축가</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="./images/Reihe 3/Reihe-3-D4-2.png" alt="2" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-3.png" alt="3" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-9.png" alt="9" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-10.png" alt="10" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-7.png" alt="7" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-1">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-2">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-3">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-4">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-5">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center">
										<button type="button" id="16" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;택시기사</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="17" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;의사</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="18" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;기술자</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="19" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;웨이터</span>
									</th>
									<th scope="col" class="text-center">
										<button type="button" id="20" class="so btn btn-outline-danger">▶</button>
										<span class="tran">&nbsp;비서</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="./images/Reihe 3/Reihe-3-D4-8.png" alt="8" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-6.png" alt="6" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-1.png" alt="1" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-5.png" alt="5" style="max-width: 100%; height: auto;"></td>
									<td><img src="./images/Reihe 3/Reihe-3-D4-4.png" alt="4" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-6">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-7">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-8">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-9">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-10">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
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
						name : "r3 D4",

						sprite : {
							"0": [3.8,45],
							"1": [36.6,1.6],
							"2": [43.6,1.5],
							"3": [29.2,1.6],
							"4": [16.8,1.8],
							"5": [25,1.9],
							"6": [20.8,1.7],
							"7": [46.8,2],
							"8": [32.6,2.2],
							"9": [11.8,1.8],
							"10": [40,1.7],
							"11": [10,3.4],
							"12": [15,3.7],
							"13": [19.4,3.1],
							"14": [23.5,3.5],
							"15": [27.7,2.9],
							"16": [31.5,3.5],
							"17": [35.4,2.9],
							"18": [38.6,3],
							"19": [42.3,2.7],
							"20": [45.5,3.4]
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
							if(obj.part > 10) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("th").find(".tran").show();									
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
					ion.sound.pause("r3 D4", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r3 D4", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r3 D4", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r3 D4", {
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
					// alert(na+"번 문제를 풀어주세요!");
					alert("빈 칸을 모두 채워주세요.");
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