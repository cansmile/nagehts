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
					<button type="button" class="mt-1 mx-1 btn text-danger ans5 btn-lg btn-outline-dark so itm" id="1">
					die Wurst<span class="tran"><br><small>소시지</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans3 btn-lg btn-outline-dark so itm" id="2">
					das Brot<span class="tran"><br><small>빵</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans16 btn-lg btn-outline-dark so itm" id="3">
					das Wasser<span class="tran"><br><small>물</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans13 btn-lg btn-outline-dark so itm" id="4">
					der Kaffee<span class="tran"><br><small>커피</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans12 btn-lg btn-outline-dark so itm" id="5">
					der Tee<span class="tran"><br><small>차</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans9 btn-lg btn-outline-dark so itm" id="6">
					der Käse<span class="tran"><br><small>치즈</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans11 btn-lg btn-outline-dark so itm" id="7">
					der Reis<span class="tran"><br><small>밥</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-danger ans14 btn-lg btn-outline-dark so itm" id="8">
					die Schokolade<span class="tran"><br><small>쵸콜릿</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans15 btn-lg btn-outline-dark so itm" id="9">
					der Kuchen<span class="tran"><br><small>케잌</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans2 btn-lg btn-outline-dark so itm" id="10">
					das Obst<span class="tran"><br><small>과일</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans10 btn-lg btn-outline-dark so itm" id="11">
					das Fleisch<span class="tran"><br><small>고기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans1 btn-lg btn-outline-dark so itm" id="12">
					das Gemüse<span class="tran"><br><small>야채</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-danger ans17 btn-lg btn-outline-dark so itm" id="13">
					die Milch<span class="tran"><br><small>우유</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans4 btn-lg btn-outline-dark so itm" id="14">
					der Salat<span class="tran"><br><small>샐러드</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans8 btn-lg btn-outline-dark so itm" id="15">
					das Bier<span class="tran"><br><small>맥주</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-purple ans6 btn-lg btn-outline-dark so itm" id="16">
					das Eis<span class="tran"><br><small>아이스크림</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-danger ans7 btn-lg btn-outline-dark so itm" id="17">
					die Suppe<span class="tran"><br><small>수프</small></span>
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
					<h2>[ <small>그림에 맞는 단어를 그림 아래에 노란 단추를 눌러 넣세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-1.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-2.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-3.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-4.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-11.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-10.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-9.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-8.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-7.png" alt="Was ist das?" style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-6.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-13.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-5.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-12.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-13">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-14.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-14">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-15.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-15">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-16.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-16">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<table class="table">
						<thead>
							<th class="text-center align-middle border-0" scope="col" height="250"><img src="./images/Reihe 5/Reihe-5-A2-17.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-17">
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
					name : "r5 A2",
					sprite : {
						"0": [3, 94.2],
							"1": [30.7, 2.2],
							"2": [20.8, 1.9],
							"3": [90.3, 2.1],
							"4": [72.8, 2.2],
							"5": [67.1, 2],
							"6": [51.4, 2.3],
							"7": [61.9, 2],
							"8": [78.9, 2.2],
							"9": [84.9, 2.5],
							"10": [15.2, 2.3],
							"11": [56.5, 2.4],
							"12": [10, 2.1],
							"13": [95.7, 2],
							"14": [25.3, 2.3],
							"15": [46.3, 2.3],
							"16": [35.9, 1.8],
							"17": [41, 2]
					}
				}
				, {
					name: "Bama_Country_Country",
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
						if(obj.part > 17) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					$(".o").on("click", function() {
						ion.sound.play("Bama_Country_Country");
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
							ion.sound.pause("r5 A2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 A2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 A2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 A2", {
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
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();
							$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
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
					
					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=[1];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block btn-light");
								$("#lst-"+ pan[p] + ">h2").remove();
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