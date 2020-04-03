<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="1">
					Tanzkurs<small><span class="tran"><br>댄스강좌<br>(So. 18 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
					Führung in der Gemäldegalerie<small><span class="tran"><br>미술관 안내 관람<br>(Fr. 11 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="3">
					Galakonzerte<small><span class="tran"><br>갈라콘서트<br>(Sa. 22 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="4">
					Kino<small><span class="tran"><br>영화관<br>(Fr. bis Sa. 15.30)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="5">
					Stadtführung Glanzlichter Dresdens<small><span class="tran"><br>드레스덴 하이라이트 시티투어<br>(Mo, Mi, Fr., Sa. 18.30)</</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="6">
					Circus Krone<small><span class="tran"><br>크로네 서커스<br>(So. 15.30)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="7">
					Kino<small><span class="tran"><br>영화관<br>(Fr. bis Sa. 17.45, 20.00)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="8">
					Staatsoperette<small><span class="tran"><br>국립 오페라극장<br>(Sa. 14.30)</span></small>
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
					<h2>[ <small>단어를 알맞은 칸<small>(Am Vormittag, Am Mittag, Am Nachmittag, Am Abend)</small>에 넣으세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-1.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-2.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-3.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-4.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-5.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-6.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-A2-7.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Vormittag</strong></small><br>(10-12 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Mittag</strong></small><br>(12-13 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Nachmittag</strong></small><br>(13-17 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-primary itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Abend</strong></small><br>(17-0 Uhr)</h2>&nbsp;
				</div>
			</div>
			<!-- 리스트 끝 -->
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
		</div>
	</div>
</section>

<div id="marg"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./<?php echo($root); ?>js/popper.min.js"></script>
<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
<!-- interact.min.js -->
<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
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
					name : "r7 A2",
					sprite : {
						"0": [1.28, 40.4],
						"1": [12.26, 1.34],
						"3": [18.64, 2.18],
						"4": [23.09, 1.04],
						"5": [26.55, 2.92],
						"6": [32.34, 1.44],
						"7": [36.29, 1],
						"8": [40, 1.89]
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
				path : "<?php echo($root); ?>sounds/Reihe 7/",
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
							ion.sound.pause("r7 A2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r7 A2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 A2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r7 A2", {
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
							$(this).find("button").addClass("text-success font-weight-bold");
						});

						var qa = $(".itm-lst>button").length; // 전체 문항 수
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

					 // 미리 답 넣어놓기
					var pan=new Array();
					pan=[2];
					for(var p=0;
					p < pan.length;
					p++) {
						for(var i = 1; i <= $(".itm-lst").length; i++) {
							if($("#"+pan[p]).hasClass("ans"+i)) {
								$("#"+pan[p]).insertAfter("#lst-"+i+ ">h2");
								$("#"+pan[p]).addClass("btn-block");
								$("#"+pan[p]).addClass("btn-light");
								// $("#"+pan[p]).find(".tran").show();
							}
						}
					$(".itm-lst>button").addClass("btn-block btn-light");
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
<?php include "footer.php"; ?>
	</body>
</html>