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
					fahren<span class="tran"><br><small>운전하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					essen<span class="tran"><br><small>먹다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
					gehen<span class="tran"><br><small>걷다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					besuchen<span class="tran"><br><small>방문하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					schenken<span class="tran"><br><small>선물하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					einladen<span class="tran"><br><small>초대하다, 싣다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					gefallen<span class="tran"><br><small>맘에 들다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					bekommen<span class="tran"><br><small>얻다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
					schreiben<span class="tran"><br><small>쓰다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="10">
					es geht<span class="tran"><br><small>그럭저럭 지내다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
					schicken<span class="tran"><br><small>보내다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
					einkaufen<span class="tran"><br><small>구매하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="13">
					gratulieren<span class="tran"><br><small>축하하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
					danken<span class="tran"><br><small>생각하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
					haben<span class="tran"><br><small>가지다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
					schlafen<span class="tran"><br><small>잠자다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
					lernen<span class="tran"><br><small>배우다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
					helfen<span class="tran"><br><small>돕다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					anrufen<span class="tran"><br><small>전화하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
					fragen<span class="tran"><br><small>묻다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="21">
					schmecken<span class="tran"><br><small>맛이나다</small></span>
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
			<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-1">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Nominativ<span class="tran"><small><br>1격 지배 동사</small></span>
</h2>&nbsp;
				</div>
			<div style="min-height: 240px;" class="rounded-top border bg-orange border-white so itm-lst col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-2">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Akkusativ<span class="tran">&nbsp;<small><br>4격 지배 동사</small></span>
</h2>&nbsp;
				</div>
			<div style="min-height: 240px;" class="rounded-top border bg-warning border-white so itm-lst col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-3">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block">Verben im Dativ<span class="tran">&nbsp;<small>3격 그리고</small></span><br>und Akkusativ<span class="tran">&nbsp;<small>4격 지배동사</small></span>
</h2>&nbsp;
				</div>
			<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-4">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-3">Verben im Dativ<span class="tran">&nbsp;<small>3격 지배동새</small></span>
</h2>&nbsp;
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
					name : "r8 C5",
					sprite : {
						"0": [.5, 94],
						"1": [90.42, 1.62],
						"2": [18.38, 1],
						"3": [86.61, 1.51],
						"4": [21.01, 1.06],
						"5": [23.96, 1.32],
						"6": [27.1, 1.48],
						"7": [30.15, 1.54],
						"8": [33.51, 1.17],
						"9": [37.26, 1.27],
						"10": [41.18, 1.07],
						"11": [44.58, 1.14],
						"12": [48.79, 1.6],
						"13": [52.72, 1.66],
						"14": [56.74, 1.23],
						"15": [60, 1.24],
						"16": [83.06, 1.46],
						"17": [64.28, 1],
						"18": [68.1, 1.22],
						"19": [71.73, 1.55],
						"20": [75.41, 1.22],
						"21": [79.45, 1.21]
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
							ion.sound.pause("r8 C5", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r8 C5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r8 C5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r8 C5", {
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
						var na = "";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							$(".itm-lst").each(function() {
								if($(this).find("button.btn")) {
									$(this).find("button.btn").addClass("text-success");
								}
							});

							var qa = $(".itm").length; // 전체 문항 수
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
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
					});

		<?php include "wahl.php"; ?>

				var pan = new Array(), pann;
				// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
				pan = [1,3,16];
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