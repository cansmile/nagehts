<?php include "header.php"; ?>

<body>
<?php include "back.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und sprechen Sie nach.<br>
						<small>듣고 따라 하세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0"> HV </button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p"> ❚❚ </button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table text-center">
						<tbody>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0" rowspan="3">Hast du</td>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0" colspan="2">heute Abend</td>
								<td class="border-0 align-middle" rowspan="3">Zeit?</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0" rowspan="2">morgen</td>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">früh</td>
							</tr>
							<tr>
								<td class="border-0 align-middle">Nachmittag</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Hast du heute Abend Zeit? <span class="tran"><br><small>너 오늘 저녁 시간 있니?</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Hast du morgen früh Zeit? <span class="tran"><br><small>너 내일 일찍 시간 있니?</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Hast du morgen Nachmittag Zeit? <span class="tran"><br><small>너 내일 오후에 시간 있니?</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table text-center">
						<tbody>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0" rowspan="4">Ich möchte gern</td>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">zum Fußballspiel gehen.</td>
								<td class="border-0 align-middle" rowspan="4">Hast du Lust?<br>Kommst du mit?</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">ins Konzert gehen.</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">ins Kino gehen.</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">essen gehen.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Ich möchte gern zum Fußballspiel gehen. <span class="tran"><br><small>나 축구하러 가려고 해.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Ich möchte gern ins Konzert gehen. <span class="tran"><br><small>나 콘서트에 가려고 해.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Ich möchte gern ins Kino gehen. <span class="tran"><br><small>나 영화관에 가려고 해.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="7" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Ich möchte gern essen gehen. <span class="tran"><br><small>나 먹으러 가려고 해.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Hast du Lust? <span class="tran"><br><small>너도 갈래?</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="9" class="so btn btn-outline-primary">▶</button></td>
								<td class="border-0 align-middle">Kommst du mit? <span class="tran"><br><small>너도 같이 갈래?</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12 bg-success text-white p-2 text-center rounded-circle"><strong>Zusage <small>승락</small></strong></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table text-center">
						<tbody>
							<tr>
								<td class="align-middle border border-dark border-top-0 border-bottom-0 border-left-0" colspan="2">Ja, das klingt gut!</td>
								<td class="align-middle border-0" rowspan="2">&nbsp;</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-top-0 border-bottom-0 border-left-0" colspan="2">Ja, gerne. Ich habe Zeit.</td>
							</tr>
							<tr>
								<td class="border-0 align-middle p-0" height="5"></td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">Wann</td>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">fängt das denn an?</td>
								<td class="align-middle border-0"> Um 4 Uhr.</td>
							</tr>
							<tr>
								<td class="border-0 align-middle p-0" height="5"></td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">Wo</td>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">treffen wir uns?</td>
								<td class="align-middle border-0">Bei mir zu Hause.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="10" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Ja, das klingt gut! <span class="tran"><br><small>그래, 좋다!</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="11" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Ja, gern. Ich habe Zeit. <span class="tran"><br><small>그래, 좋다. 나 시간 있어.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="12" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Wann fängt das denn an? <span class="tran"><br><small>언제 시작하는데?</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="13" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Um 4 Uhr. <span class="tran"><br><small>4시에.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="14" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Wo treffen wir uns? <span class="tran"><br><small>우리 어디서 만나?</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="15" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 align-middle">Bei mir zu Hause. <span class="tran"><br><small>우리 집에서.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12 bg-danger text-white p-2 text-center rounded-circle"><strong>Absage <small>거절</small></strong></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table text-center">
						<tbody>
							<tr>
								<td class="align-middle border-0">Tut mir leid, das geht nicht.</td>
							</tr>
						</tbody>
					</table>
					<table class="table text-center">
						<tbody>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">Ich habe</td>
								<td class="align-middle border-0">leider keine Zeit.</td>
							</tr>
							<tr>
								<td class="border-0 align-middle p-0" height="5"></td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">Ich muss</td>
								<td class="align-middle border-0">lernen.</td>
							</tr>
							<tr>
								<td class="border-0 align-middle p-0" height="5"></td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">Vielleicht</td>
								<td class="align-middle border-0">das nächste Mal.</td>
							</tr>
							<tr>
								<td class="align-middle border border-dark border-left-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="align-middle border-0">morgen.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="16" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 align-middle">Tut mir leid, das geht nicht. <span class="tran"><br><small>미안해, 난 안되겠다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="17" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 align-middle">Ich habe leider keine Zeit. <span class="tran"><br><small>유감스럽게도 시간이 없어.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="18" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 align-middle">Ich muss lernen. <span class="tran"><br><small>나 공부해야 해.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="19" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 align-middle">Vielleicht das nächste Mal. <span class="tran"><br><small>아마도 다음 번에 될 수 있어.</small></span></td>
							</tr>
							<tr>
								<td class="border-0 align-middle" width="50"><button type="button" id="20" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 align-middle">Vielleicht morgen. <span class="tran"><br><small>아마도 내일은 될 수 있어.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
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

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});
				ion.sound({
					sounds : [{
						name : "r7 B1",

						sprite : {
							"0": [11.28,159.22],
							"1": [24.55,3.76],
							"2": [32.08,3.96],
							"3": [39.6,3.96],
							"4": [47.52,5.14],
							"5": [56.24,5.74],
							"6": [64.56,4.55],
							"7": [71.88,4.35],
							"8": [79.41,2.37],
							"9": [85.75,2.37],
							"10": [97.23,2.17],
							"11": [103.37,4.35],
							"12": [112.09,2.37],
							"13": [117.43,3.56],
							"14": [123.37,3.16],
							"15": [128.72,1.98],
							"16": [138.03,2.77],
							"17": [145.75,2.97],
							"18": [153.28,3.16],
							"19": [160.21,3.76],
							"20": [166.55,4.15]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
						
					}],
					path : "sounds/Reihe 7/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재상이 끝날 때 2번 이상이면 번역 보이기
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
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
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
					ion.sound.pause("r7 B1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r7 B1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r7 B1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r7 B1", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>