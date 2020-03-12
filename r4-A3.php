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
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="1">
					essen, kochen<span class="tran"><br><small>식사, 요리하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="2">
					Kleider aufhängen<span class="tran"><br><small>옷을 걸다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					fernsehen<span class="tran"><br><small>TV를 보다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					duschen<span class="tran"><br><small>샤워를 하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					der Balkon<span class="tran"><br><small>발코니</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="6">
					die Küche<span class="tran"><br><small>부엌</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					Kaffee trinken<span class="tran"><br><small>커피를 마시다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="8">
					das Wohnzimmer<span class="tran"><br><small>거실</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					das Badezimmer<span class="tran"><br><small>욕실</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="10">
					der Flur<span class="tran"><br><small>복도</small></span>
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
					<h2> Wie heißen die Orte? Was macht man da?<br>
					<small> 방 이름이 무엇일까요? 거기서 무엇을 하나요? </small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>단어를 항목에 맞게 짝지우세요.</small> ]</h3>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col" width="40%" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A3.png" alt="Haus" style="width: 100%; height: auto;"></th>
								<th scope="col" width="30%" class="align-middle border-0">Wo?<span class="tran"><br><small>어디?</small></span></th>
								<th scope="col" width="30%" class="align-middle border-0">Was tut man?<span class="tran"><br><small>사람이 무엇을 하나요?</small></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-2.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-4.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-5.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table text-center d-sm-none d-md-none d-lg-block d-xl-block mb-0">
						<thead>
							<tr>
								<th scope="col" width="40%" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A3.png" alt="Haus" style="width: 100%; height: auto;"></th>
								<th scope="col" width="30%" class="align-middle border-0">Wo?<span class="tran"><br><small>어디?</small></span></th>
								<th scope="col" width="30%" class="align-middle border-0">Was tut man?<span class="tran"><br><small>사람이 무엇하나?</small></span></th>
							</tr>
						</thead>
					</table>
					<table class="table text-center mt-0 ">
						<tbody>
							<tr>
								<th width="40%" heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-6.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td width="30%" class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td width="30%" class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-7.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
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
			var hm=new Array(), sen=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
				sen[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r4 A3",
					sprite : {
						"0": [0, 45.66],
						"1": [6.62, 2.74],
						"2": [12.03, 1.79],
						"3": [16.39, 1.58],
						"4": [20.38, 1.32],
						"5": [25.37, 1.37],
						"6": [29, 1.05],
						"7": [32.26, 1.37],
						"8": [36.46, 1.42],
						"9": [40.3, 1.62],
						"10": [44.16, 1.5]
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
				path : "sounds/Reihe 4/",
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
						if(obj.part > 10) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".btn").find(".tran").show();
						}
					}
					checkHeight();
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
							ion.sound.pause("r4 A3", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r4 A3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r4 A3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r4 A3", {
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
						if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
							$(this).attr("id", "done");
							$(".so").each(function() {
								if($(this).parent().attr("id").length > 5) {
									var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
								} else {
									var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
								}

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
						$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						var qa = $(".1itm").length; // 전체 문항 수
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
							var st = "쓰읍~ 다시 해 보실까요?";
							var cl = "primary";
						} else {
							var st = "좀 더 분발해 주세요~";
							var cl = "danger";
						}

						$(this).addClass("btn-" + cl + " text-" + tcl);
						$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

					}
					}
					);
					$("#0").show();
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