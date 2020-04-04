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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					einkaufen<span class="tran"><br><small>쇼핑하다, 장을보다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					zuhören<span class="tran"><br><small>경청하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
					gehören<span class="tran"><br><small>~에 속하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					aufhören<span class="tran"><br><small>끝나다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					besuchen<span class="tran"><br><small>방문하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					suchen<span class="tran"><br><small>찾다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					hören<span class="tran"><br><small>듣다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					aufstehen<span class="tran"><br><small>일어나다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					zählen<span class="tran"><br><small>세다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
					bezahlen<span class="tran"><br><small>지불하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					stehen<span class="tran"><br><small>서 있다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					verkaufen<span class="tran"><br><small>판매하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
					schlafen<span class="tran"><br><small>자다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="14">
					bestehen<span class="tran"><br><small>합격하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
					einschlafen<span class="tran"><br><small>잠들다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
					kaufen<span class="tran"><br><small>구매하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
					anrufen<span class="tran"><br><small>전화를 걸다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="18">
					erzählen<span class="tran"><br><small>이야기하다</small></span>
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
					<h2>[ <small>단어를 알맞은 칸(einfache Verben, trennbare Verben, untrennbare Verben)에 넣으세요.</small> ]
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
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>einfache Verben</strong><br><small>단순동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>trennbare Verben</strong><br><small>분리동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>untrennbare Verben</strong><br><small>비분리동사</small></h2>&nbsp;
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
				name : "r6 E5",
				sprite : {
					"0": [1.1, 91.02],
						"1": [25.41, 1.33],
						"2": [28.9, 1.84],
						"3": [32.88, 1.38],
						"4": [36.97, 1.68],
						"5": [40.45, 1.63],
						"6": [44.05, 1.35],
						"7": [47.31, 1.48],
						"8": [50.94, 1.52],
						"9": [54.87, 1.68],
						"10": [58.75, 1.58],
						"11": [62.5, 1.92],
						"12": [66.4, 1.3],
						"13": [70.49, 1.38],
						"14": [73.74, 1.69],
						"15": [77.98, 1.73],
						"16": [82.43, 1.26],
						"17": [86.24, 1.57],
						"18": [90, 1.31]
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
			path : "<?php echo($root); ?>sounds/Reihe 6/",
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
						ion.sound.pause("r6 E5", {
							part: "0"
						}
						);
						$("#0").show();
						$(this).hide();
					}
					else if($(this).html()=="▶") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.play("r6 E5", {
							part: $(this).attr("id")
						}
						);
						$(this).html("❚❚");
					}
					else if($(this).html()=="❚❚") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r6 E5", {
							part: $(this).attr("id")
						}
						);
						$(this).html("▶");
					}
					else {
						// _p 붙어 있지 않으면 id 그대로 재생
						ion.sound.play("r6 E5", {
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
				<?php include "wahl.php";
				?> // 정답확인
				$("#chk").on("click", function() {
					if($("#wahl").visibility !="visible"&& $(this).attr("id")=="chk") {
						$(this).attr("id", "done");
						$(".itm").each(function() {
							if($(this).parent().attr("id").length > 5) {
								var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
							}
							else {
								var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
							}
							$(".tran").show();
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
								for(var i=1;
								i <=$(".itm-lst").length;
								i++) {
									if($(this).hasClass("ans"+i)) {
										$(eval('"#lst-'+ i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">"+ $(this).html() + "</button>");
										// $(lstn).append(i);
									}
								}
							}
							;
						}
						);
						$(".pop").each(function() {
							$(this).removeClass("btn-info");
							if ($(this).hasClass("o") && $(this).hasClass("an")) {
								$(this).removeClass("btn-warning");
								$(this).addClass("text-success font-weight-bold");
							}
							else if ($(this).hasClass("o")) {
								$(this).addClass("text-danger font-weight-bold");
							}
							else if ($(this).hasClass("an")) {
								$(this).addClass("btn-warning");
							}
							else {
								$(this).addClass("btn-light");
							}
							;
						}
						);
						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");
						var qa=$(".itm").length; // 전체 문항 수
						var qr=$(".text-success").length; // 맞춘 항목 수
						var pe=(qr / qa) * 100; // 정답 비율
						var tcl="white"; // 기본 문자색
						// 분류 기준은 100%, 80%, 60%, 40%
						if(pe > 99) {
							var st="원어민이세요?";
							var cl="lime";
							var tcl="dark";
						}
						else if(pe > 74) {
							var st="어! 좀 하시는데요~^^";
							var cl="success";
						}
						else if(pe > 49) {
							var st="쓰읍~ 다시 해 보실까요?";
							var cl="primary";
						}
						else {
							var st="좀 더 분발해 주세요~";
							var cl="danger";
						}
						$(this).addClass("btn-"+ cl + " text-"+ tcl);
						$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
					}
				}
				);
				// $("#0").show();
				var pan=new Array();
				// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
				pan=[1, 12, 13, 16];
				for(var p=0;
				p < pan.length;
				p++) {
					var pani="#"+ pan[p];
					for(var n=0;
					n < $(".itm-lst").length;
					n++) {
						if($(pani).hasClass("ans"+(n+1))) {
							$(pani).insertAfter($("#lst-"+(n+1)+">h2"));
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
<!-- ion.sound finished -->
<?php include "footer.php"; ?>
</body>
</html>