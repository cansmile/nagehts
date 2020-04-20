<?php require "header.php"; ?>
	<body>
<?php require "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<style>
	td,th,table {
		border-width: 0;
		border-style: hidden;
	}


</style>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 누르면 소리가 납니다.</small> ]
						<button type="button" class="btn disabled btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn disabled btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button class="btn btn-sm d-inline btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button class="btn btn-sm d-inline btn-<?php echo($color); ?>">▶</button> 버튼을 눌러 2번 들으시면 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="40%" class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">der Kopf
										<span class="tran"><small>머리</small>
									</td>
									<td width="10%" class="align-middle p-0 m-1"><button type="button" id="1" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td rowspan="9" class="align-middle p-0 m-2 pl-2"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E1-1.png" alt="Eva" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">das Auge
										<span class="tran"><small>눈</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="2" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">die Nase
										<span class="tran"><small>코</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="3" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">der Mund
										<span class="tran"><small>입</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="4" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">der Arm
										<span class="tran"><small>팔</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="5" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">die Hand
										<span class="tran"><small>손</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="6" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">der Bauch
										<span class="tran"><small>배</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="7" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">das Bein
										<span class="tran"><small>다리</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="8" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1 text-right font-weight-bold px-2" style="font-size: 1.5em;">der Fuß
										<span class="tran"><small>발</small>
									</td>
									<td class="align-middle p-0 m-1"><button type="button" id="9" class="so btn btn-<?php echo($color); ?>">▶</button></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td rowspan="9" class="align-middle p-0 m-1 text-center"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-E1-2.png" alt="Adam" style="max-width: 100%; height: auto;"></td>
									<td width="10%" class="align-middle p-0 m-1"><button type="button" id="10" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td width="40%" class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">das Ohr
										<span class="tran"><small>귀</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="11" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">das Gesicht
										<span class="tran"><small>얼굴</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="12" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">die Zähne
										<span class="tran"><small>이</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="13" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">der Hals
										<span class="tran"><small>목</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="14" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">der Rücken
										<span class="tran"><small>등</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="15" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">der Finger
										<span class="tran"><small>손가락</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="16" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">die Brust
										<span class="tran"><small>가슴</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="17" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">das Knie
										<span class="tran"><small>무릎</small>
									</td>
								</tr>
								<tr>
									<td class="align-middle p-0 m-1"><button type="button" id="18" class="so btn btn-<?php echo($color); ?>">▶</button></td>
									<td class="align-middle p-0 m-1 text-justify font-weight-bold px-2" style="font-size: 1.5em;">der Zeh
										<span class="tran"><small>발가락</small>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</section>

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

			$(document).ready(function() {
				/* 각 문장 재생 횟수 초기화 */
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
							"1": [16.85,1.87],
							"2": [20,2.9],
							"3": [24.56,1.97],
							"4": [28,2.23],
							"5": [32.03,1.8],
							"6": [35.82,1.6],
							"7": [39.77,1.75],
							"8": [43.28,2.09],
							"9": [47.14,2.13],
							"10": [54.49,1.71],
							"11": [58.46,2.01],
							"12": [62.65,2.17],
							"13": [66.85,2.15],
							"14": [71.2,2.1],
							"15": [79.16,1.98],
							"16": [75.15,1.86],
							"17": [83.41,2.1],
							"18": [87.65,2.07]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "<?php echo($root); ?>sounds/Reihe 8/",
					preload : true,
					volume : 1.0,
					multiplay: false,

					ended_callback: function(obj) {
						/* 재생이 끝날 때 2번 이상이면 번역 보이기 */
						hmn = obj.part;
						hm[hmn]++;

						/* 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기 */
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							if(obj.part > 0) {
								$("#"+obj.part).html("▶");
							}

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
					/* 가장 먼저 지문에 'an' 넣기 */
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};

					/* 문제 풀이 정도 업데이트 */
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");

				});

			/* 팝업 내용 사라지기 */
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					/* _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
					ion.sound.pause("r8 B1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					/* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
					ion.sound.play("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					/* 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기 */
					ion.sound.pause("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					/* _p 붙어 있지 않으면 id 그대로 재생 */
					ion.sound.play("r8 B1", {
						part: $(this).attr("id")
					});

					/* 전체 듣기 재생일 때는 일시정지 버튼 보이기 */
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

			/* 정답확인 */


		$("#0").show();
		$(".alert").hide();


		}

	});

});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>
