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
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm py-0 my-0 so" id="1">
					Wann sind die Sprechzeiten von Dr. Fiedler am Mittwoch?<span class="tran"><small><br>피들러 선생님의 수요일 진료시간은 몇 시인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm py-0 my-0" id="2">
					Wann läuft der Film am Samstag ?<span class="tran"><small><br>토요일 영화 상영시간은 언제인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm py-0 my-0 so" id="3">
					Wann sind die Sprechzeiten freitags von der Allianz?<span class="tran"><small><br>알리안츠 보험회사의 금요일 상담시간은 언제인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm py-0 my-0 so" id="4">
					Was kostet der Tanzkurs pro Stunde?<span class="tran"><small><br>댄스 교습소의 시간당 얼마인가요?</small></span>
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
					<h2>Hier sind die Antworten. <small>질문이 주어져 있어요.</small></h2>
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td scope="col" width="60%"><img src="./images/Reihe 6/Reihe-6-C2-1.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
								<td scope="col"><img src="./images/Reihe 6/Reihe-6-C2-3.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td scope="col" width="60%"><img src="./images/Reihe 6/Reihe-6-C2-2.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
								<td scope="col"><img src="./images/Reihe 6/Reihe-6-C2-4.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center" width="50" id="t1">1.</td>
								<td class="border-0" id="b1">
									<div class="itm-lst 1itm py-0 my-0" id="lst-1">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0" id="t2">&nbsp;</td>
								<td class="border-0" id="b2">Der Film läuft um 15.30 ,17.45 und um 20.00 Uhr.<span class="tran"><small><br>영화 상영은 15시 30분, 17시 45분 그리고 20시에 시작합니다.</small></td>
							</tr>
						</span>
					</td>
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center" id="t3">2.</td>
								<td class="border-0" id="b3">
									<div class="itm-lst 1itm py-0 my-0" id="lst-2">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0" id="t4">&nbsp;</td>
								<td class="border-0" id="b4">Am Freitag ist die Sprechzeit von der Allianz von 10 bis 18 Uhr.<span class="tran"><small><br>금요일에 알리안츠 보험회사는 10시에서 18시까지 상담합니다.</small></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center" width="50" id="t5">3.</td>
								<td class="border-0" id="b5">
									<div class="itm-lst 1itm py-0 my-0" id="lst-3">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0" id="t6">&nbsp;</td>
								<td class="border-0" id="b6">Die Sprechstunde von Dr. Fiedler ist am Mittwoch von 8 bis 12 Uhr.<span class="tran"><small><br>피들러 선생님의 수요일 진료 시간은 8시에서 12시까지 입니다.</small></td>
							</tr>
							<tr>
								<td class="border-0 text-center" id="t7">4.</td>
								<td class="border-0" id="b7">
									<div class="itm-lst 1itm py-0 my-0" id="lst-4">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0" id="t8">&nbsp;</td>
								<td class="border-0" id="b8">Die Tanzschule kostet 15 Euro pro Stunde.<span class="tran"><small><br>댄스 교습소는 시간당 15유로를 받습니다.</small></td>
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

		function checkHeight() {
			// 좌우 셀 높이 맞추어 주기
			var tbn = 4; // 전체 셀의 반 값; 좌측과 우측이 같은 경우
			for(var i = 1; i <= tbn; i++) {
				if( $("#b"+i).height() > $("#b"+(i+tbn)).height() ) {
					$("#t"+(i+tbn)).height($("#b"+i).height());
					$("#t"+(i)).height($("#b"+i).height());
					$("#b"+(i+tbn)).height($("#b"+i).height());
				} else if( ($("#b"+i).height() < $("#b"+(i+tbn)).height()) || ($("#b"+i).height() == $("#b"+(i+tbn)).height()) ) {
					$("#t"+(i)).height($("#b"+(i+tbn)).height());
					$("#t"+(i+tbn)).height($("#b"+(i+tbn)).height());
					$("#b"+(i)).height($("#b"+(i+tbn)).height());
				}
			}
		}

		$(document).on("click", function() { checkHeight(); });

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
					name : "r6 C2",
					sprite : {
						"0": [.5, 24],
						"1": [8.3, 3.7],
						"2": [0,0],
						"3": [14.76, 3.8],
						"4": [21.19, 3.3]
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
				path : "sounds/Reihe 6/",
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
							ion.sound.pause("r6 C2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 C2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 C2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 C2", {
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
						$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							$(this).find("button").addClass("okay text-success font-weight-bold");
						});

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

					 // 미리 답 넣어놓기
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
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold");
								// $("#"+ $(this).attr("id")).addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-"+ pan[p]).closest("table").find(".tran").show();
							}
						}
						)
					}


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