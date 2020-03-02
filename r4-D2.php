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
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					bequem<span class="tran"><br /><small>편안한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
					schmutzig<span class="tran"><br /><small>더러운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
					sehr praktisch<span class="tran"><br /><small>매우 실용적인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					super<span class="tran"><br /><small>매우 좋은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
					sehr hübsch<span class="tran"><br /><small>매우 귀여운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					ganz schön<span class="tran"><br /><small>제법 예쁜</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					toll<span class="tran"><br /><small>대단히 좋은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					modern<span class="tran"><br /><small>현대식의</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					sehr interessant<span class="tran"><br /><small>매우 흥미로운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
					langweilig<span class="tran"><br /><small>지루한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
					hässlich<span class="tran"><br /><small>못생긴</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					schlecht<span class="tran"><br /><small>나쁜</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="13">
					hell<span class="tran"><br /><small>밝은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="14">
					laut<span class="tran"><br /><small>시끄러운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="15">
					unpraktisch<span class="tran"><br /><small>비실용적인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="16">
					sauber<span class="tran"><br /><small>깨끗한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="17">
					zu klein<span class="tran"><br /><small>너무 작은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="18">
					günstig<span class="tran"><br /><small>저렴한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					schick<span class="tran"><br /><small>세련된</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
					originell<span class="tran"><br /><small>독창적인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="21">
					zu teuer<span class="tran"><br /><small>너무 비싼</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="22">
					sehr ruhig<span class="tran"><br /><small>매우 조용한</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small> 단어를 선택하고 아래의 분류(sehr gut, gut, nicht gut)를 누르면 단어가 이동합니다. </small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					sehr gut<span class="tran"><br />매우 좋은</span></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					gut<span class="tran"><br />좋은</span></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-khaki so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					nicht gut<span class="tran"><br />좋지 않은</span></h2>&nbsp;
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
		<!-- 리스트 끝 -->
	</section>
	<div id="marg"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- ion.sound -->
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
					name : "r4 D2",
					sprite : {
						"0": [.97, 104.84],
						"1": [20.35, 1.52],
						"2": [24.32, 1.59],
						"3": [28.08, 1.87],
						"4": [31.75, 1.5],
						"5": [35.62, 1.75],
						"6": [39.98, 1.73],
						"7": [44.01, 1.1],
						"8": [47.43, 1.23],
						"9": [51.09, 1.75],
						"10": [55.72, 1.46],
						"11": [59.36, 1.44],
						"12": [63.26, 1.09],
						"13": [67.37, 1.29],
						"14": [71.92, 1.45],
						"15": [76.16, 1.8],
						"16": [80.3, 1.65],
						"17": [84.33, 1.75],
						"18": [88.64, 1.5],
						"19": [92.41, 3.86],
						"20": [95.43, 1.51],
						"21": [98.85, 1.72],
						"22": [102.28, 2.12]
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
							ion.sound.pause("r4 D2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r4 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r4 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r4 D2", {
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
							var st = "쓰읍~ 다시 해 보실까요!";
							var cl = "primary";
						} else {
							var st = "좀 더 분발해 주세요";
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
					pan=[];
					// pan=[4, 10];
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#"+pan[p];
						for(var i=0;
						i < $(".itm-lst").length;
						i++) {
							if($(pani).hasClass("ans"+ (i+1))) {
								$(pani).insertAfter($("#lst-"+ (i+1) + ">h2"));
								$(pani).addClass("btn-block btn-light");
							}
						}
					}


					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		}
		);

	
	</script>
	<? } ?>

	<?php include "footer.php"; ?>
</body>
</html>