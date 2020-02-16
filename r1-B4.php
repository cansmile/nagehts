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
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					Julia
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
					Thomas
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					Sabine
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					Max
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
					Daniel
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					Christiane
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					Klaus
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					Inge
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
					<h2>Mädchen- oder Jungennamen?
					<small>여자 혹은 남자이름?</small>
					</h2>
					<h2>[ <small>단어를 알맞은 위치에 짝지우세요. 다중 선택이 되지만 한 위치에 한 단어만 배치됩니다.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼은 정답 확인을 한 뒤에 나타납니다.</small> ]</h3>
				</div>
				
			</div>
			<div class="row" id="lsts">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
					<table class="table text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-info"> 남자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="align-middle">1</th>
								<td class="align-middle">Martin</td>
								<td class="align-middle">Heinz</td>
								<td class="align-middle">Peter</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">2</th>
								<td class="align-middle">Franz</td>
								<td class="align-middle">Alberto</td>
								<td class="align-middle">Otto</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Frank</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">4</th>
								<td class="align-middle">Marko</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Rudolf</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">5</th>
								<td class="align-middle">Stefan</td>
								<td class="align-middle">Oliver</td>
								<td class="align-middle">Karl</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">6</th>
								<td class="align-middle">Andreas</td>
								<td class="align-middle">Johann</td>
								<td class="align-middle">Christian</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">7</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Anton</td>
								<td class="align-middle">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1 1itm" id="lst-2">
					<table class="table text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-danger"> 여자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle" scope="row">1</th>
								<td class="align-middle">Birgit</td>
								<td class="align-middle">Hilde</td>
								<td class="align-middle">Luisa</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">2</th>
								<td class="align-middle">Barbara</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Helga</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">4</th>
								<td class="align-middle">Monika</td>
								<td class="align-middle">Angelika</td>
								<td class="align-middle">Brigitte</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">5</th>
								<td class="align-middle">Maja</td>
								<td class="align-middle">Heike</td>
								<td class="align-middle">&nbsp;</td>
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
				<div class="col-12">
					<table class="table text-center">
						<thead>
							<th scope="col">
								Nach-(Familien)namen (Herr / Frau)
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Müller Bauer Wecker Schneider Koch Schmidt Schumacher</td>
							</tr>
						</tbody>
					</table>
				</div>
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
					name : "r1 B4",
					sprite : {
						"0": [0, 106.22],
						"1": [67.73, 2.27],
						"2": [26.64, 1.59],
						"3": [71.64, 2.04],
						"4": [28.34, 1.66],
						"5": [34.28, 1.88],
						"6": [73.63, 2],
						"7": [49.4, 2.16],
						"8": [75.7, 1.8]
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
				path : "sounds/Reihe 1/",
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
						if(obj.part < 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".btn").find(".tran").show();
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
							ion.sound.pause("r1 B4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r1 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r1 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r1 B4", {
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
						if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
							$(this).attr("id", "done");

							$(".itm-lst").each(function() {
								$(this).find(".so").addClass("okay");
							});
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".itm-lst").length; // 전체 문항 수
							var qr = $(".okay").length; // 맞춘 항목 수
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
							$("#0").show();

							$(this).attr("id","done");

						}
					}
					);
					<?php include "wahl.php";
					?>
				


					// $("#0").show();
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