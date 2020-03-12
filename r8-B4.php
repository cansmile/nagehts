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
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
					anfassen<span class="tran"><br><small>건드리다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					essen<span class="tran"><br><small>먹다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					trinken<span class="tran"><br><small>마시다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					lachen<span class="tran"><br><small>웃다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="5">
					sehen<span class="tran"><br><small>보다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
					hören<span class="tran"><br><small>듣다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
					stehen<span class="tran"><br><small>서다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="8">
					gehen<span class="tran"><br><small>걷다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="9">
					geben<span class="tran"><br><small>주다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="10">
					tragen<span class="tran"><br><small>들다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="11">
					schneiden<span class="tran"><br><small>자르다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="12">
					lesen<span class="tran"><br><small>읽다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="13">
					schreiben<span class="tran"><br><small>쓰다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="14">
					rauchen<span class="tran"><br><small>담배피우다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="15">
					aufmachen<span class="tran"><br><small>열다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="16">
					küssen<span class="tran"><br><small>키스하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="17">
					riechen<span class="tran"><br><small>냄새를 맡다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
					atmen<span class="tran"><br><small>호흡하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					singen<span class="tran"><br><small>노래하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="20">
					tanzen<span class="tran"><br><small>춤추다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="21">
					husten<span class="tran"><br><small>기침하다</small></span>
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
						<h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-1">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-1.png" alt="Hand" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-2">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-2.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-primary border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-3">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-3.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-orange border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-4">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-4.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-5">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-5.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-purple border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-6">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-6.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
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
			</div>
		</section>

<div id="marg" class="border-danger"></div>		
		
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
					name : "r8 B4",
					sprite : {
						"0": [.848, 71.392],
						"1": [8.138, 1.591],
						"2": [11.886, .907],
						"3": [14.879, 1.265],
						"4": [18.446, .804],
						"5": [21.097, 1.363],
						"6": [24.291, 1.106],
						"7": [27.328, 1.410],
						"8": [30.491, 1.378],
						"9": [33.552, 1.423],
						"10": [36.790, 1.244],
						"11": [39.781, 1.516],
						"12": [43.342, 1.144],
						"13": [46.405, 1.301],
						"14": [49.195, 1.774],
						"15": [52.663, 1.069],
						"16": [55.380, .796],
						"17": [58.595, 1.209],
						"18": [61.802, 1.128],
						"19": [64.897, 1.222],
						"20": [68.066, 1.025],
						"21": [70.748, 1.004]
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
				path : "sounds/Reihe 8/",
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
							ion.sound.pause("r8 B4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r8 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r8 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r8 B4", {
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
							$(this).find(".itm").addClass("okay");
						});

						var qa = $(".itm-lst>.itm").length; // 전체 문항 수
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
					var pan = new Array(), pann;
					pan = [15,21];
					for(var p = 0; p < pan.length; p++) {
						pann = "#"+pan[p];
						for(var i = 0; i < $(".itm-lst").length; i++) {
							if($(pann).hasClass("ans" + (i+1))) {
								$(pann).insertAfter("#lst-" + (i+1) + ">h2");
							}
						}
						// $(pann).find(".tran").show();
					}
					$(".itm-lst>button").addClass("btn-block btn-light");


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