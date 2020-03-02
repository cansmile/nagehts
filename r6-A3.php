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
					Staub saugen<span class="tran"><br><small>(진공청소기로) 청소하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="2">
					die Wäsche auf|hängen<span class="tran"><br><small>빨래를 널다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="3">
					den Mülleimer aus|leeren<span class="tran"><br><small>쓰레기통을 비우다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="4">
					ein|kaufen<span class="tran"><br><small>장을 보다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="5">
					(eine) Pause machen<span class="tran"><br><small>쉬다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
					auf|räumen<span class="tran"><br><small>정리하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					Frühstück machen<span class="tran"><br><small>아침식사하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
					auf|stehen<span class="tran"><br><small>기상하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
					(das) Geschirr ab|waschen und ab|trocknen<span class="tran"><br><small>그릇을 설겆이하다.</small></span>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-2.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-3.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-4.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-5.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-6.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-7.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-8.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-9.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<thead>
							<th class="text-center border-0" scope="col"><img src="./images/Reihe 6/Reihe-6-A3-10.png" alt="Wir helfen gern im Haushalt." style="max-width: 212px; height: auto;"></th>
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
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" class="border-0">
									<span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-0">
								<td>auf|hängen <small>걸다</small> aus|leeren <small>비우다</small> ein|kaufen <small>쇼핑하다</small> auf|stehen <small>일어나다</small> auf|räumen <small>정리하다</small> ab|waschen <small>설거지하다</small> ab|trocknen <small>물기를 없애다</small> 등은 <strong>분리전철</strong>과<strong> 기본동사</strong>로 이루어진 분리동사이다.</td>
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
					name : "r6 A3 haushaltok",
					sprite : {
						"0": [2.73, 44.88],
							"1": [13.93, 2.28],
							"2": [36.74, 2.23],
							"3": [41.03, 2.89],
							"4": [32.22, 1.78],
							"5": [45.99, 1.72],
							"6": [27.59, 1.78],
							"7": [9.86, 1.73],
							"8": [23.8, 1.61],
							"9": [18.73, 2.67]
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
							ion.sound.pause("r6 A3 haushaltok", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 A3 haushaltok", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 A3 haushaltok", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 A3 haushaltok", {
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
			if ($(".an").length < $(".q").length) {
				var na="";
				$(".q").each(function() {
					if ( !$(this).find("div").hasClass("an")) {
						if (na !="") {
							na +=", ";
						}
						na +=$(this).attr("id");
					}
					;
				}
				);
				alert(na + "번 문제를 풀어주세요.");
			}
			else {
				$(".itm").each(function() {
					if($(this).parent().attr("id").length > 5) {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
					} else {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
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
						for(var i = 1; i <= $(".itm-lst").length; i++) {
							if($(this).hasClass("ans"+i)) {
								$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger font-weight-bold\">" + $(this).html() + "</button>");
								// $(lstn).append(i);
							}
						}
					};

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

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("text-success");
					}
				});

				var qa = $(".itm-lst").length; // 전체 문항 수
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
			;
		}
					);
					$("#0").show();
					$(".alert").hide();
					$("#7").appendTo($("#lst-1"));
					$("#7").addClass("btn-block");
					$("#lst-1>h2").remove();
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