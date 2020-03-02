<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<style>
	td,th,table {
		border-width: 0;
		border-style: hidden;
	}
</style>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					das Auge, -n<span class="tran">&nbsp;<small>눈</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="2">
					das Bein, -e<span class="tran">&nbsp;<small>다리</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="3">
					das Gesicht<span class="tran">&nbsp;<small>얼굴</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark so itm" id="4">
					das Knie, -<span class="tran">&nbsp;<small>무릎</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="5">
					das Ohr, -en<span class="tran">&nbsp;<small>귀</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
					der Arm, -e<span class="tran">&nbsp;<small>팔</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="7">
					der Bauch<span class="tran">&nbsp;<small>배</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark so itm" id="8">
					der Finger, -<span class="tran">&nbsp;<small>손가락</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="9">
					der Fuß, -<span style="position: relative; left: -.2em;">̈ e</span><span class="tran">&nbsp;<small>발</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark so itm" id="10">
					der Hals<span class="tran">&nbsp;<small>목</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					der Kopf<span class="tran">&nbsp;<small>머리</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="12">
					der Mund<span class="tran">&nbsp;<small>입</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark so itm" id="13">
					der Rücken<span class="tran">&nbsp;<small>등</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark so itm" id="14">
					der Zeh, -en<span class="tran">&nbsp;<small>발가락</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark so itm" id="15">
					die Brust, -<span style="position: relative; left: -.2em;">̈ e</span><span class="tran">&nbsp;<small>가슴</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="16">
					die Hand, -<span style="position: relative; left: -.2em;">̈ e</span><span class="tran">&nbsp;<small>손</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="17">
					die Nase<span class="tran">&nbsp;<small>코</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm" id="18">
					die Zähne<span class="tran">&nbsp;<small>치아</small></span>
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
						<h2>[ <small>단어를 누르면 소리가 납니다.</small> ]
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td width="50%" class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td rowspan="9" class="border-0 align-middle p-0 m-2 pl-2"><img src="./images/Reihe 8/Reihe-8-E1-1.png" alt="Eva" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td rowspan="9" class="border-0 align-middle p-0 m-1 text-center"><img src="./images/Reihe 8/Reihe-8-E1-2.png" alt="Adam" style="max-width: 100%; height: auto;"></td>
									<td width="50%" class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-12">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-13">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-14">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-15">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-16">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-17">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle p-0 m-1">
										<div class="itm-lst 1itm" id="lst-18">
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
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});

				ion.sound({
					sounds : [{
						name : "r8 B1",

						sprite : {
							"0": [7.9,82.09],
							"1": [20,2.9],
							"2": [43.28,2.09],
							"3": [58.46,2.01],
							"4": [83.41,2.1],
							"5": [54.49,1.71],
							"6": [32.03,1.8],
							"7": [39.77,1.75],
							"8": [79.16,1.98],
							"9": [47.14,2.13],
							"10": [66.85,2.15],
							"11": [16.85,1.87],
							"12": [28,2.23],
							"13": [71.2,2.1],
							"14": [87.65,2.07],
							"15": [75.15,1.86],
							"16": [35.82,1.6],
							"17": [24.56,1.97],
							"18": [62.65,2.17]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 8/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							if(obj.part < 1) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
									$("#"+hmn).closest("button").find(".tran").show();		
							}


						}

					}, ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};
	
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 B1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 B1", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

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


			$("#0").show();
			$(".alert").hide();

<?php include "wahl.php"; ?>


			// 자동 답 채우기
			var pan = new Array();
			// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
			pan = [1,3,4,5,6,9,11,13,15,17];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block");
						$("#" + $(this).attr("id")).addClass("btn-light");
						$("#lst-" + pan[p] + ">h2").remove();
						// $("#lst-" + pan[p]).closest("tr").find(".tran").show();
					}
				})
			}

		}

	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>