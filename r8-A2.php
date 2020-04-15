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
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="1">
					a
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="2">
					b
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="3">
					c
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
						<h2>[ <small>순서에 맞게 노란 단추를 눌러 넣세요.</small> ]
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>
				<div class="row p-2 m-1 border border-dark rounded">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td>a. Klara Sauer macht zweimal pro Woche Tae-Kwon-Do. Tae-Kwon-Do ist gut für den Körper und Geist. Der Sport macht sie gesund und fit. Konzentration ist dabei sehr wichtig. Jeder kann Tae-Kwon-Do lernen.<span class="tran"><small>클라라 자우어는 일주일에 두 번 태권도를 합니다. 태권도는 몸과 마음에 좋습니다. 이 스포츠는 건강과 체력 유지에 적합합니다. 태권도에서 집중은 매우 중요합니다. 누구나 태권도를 배울 수 있습니다.</small></span></td>
								</tr>
								<tr>
									<td>b. Martin Sager ist Steilwandkletterer. Er trainiert alle zwei Tage nach der Arbeit im Sportzentrum und klettert Wände hoch. Dabei braucht er starke Finger und Arme. Im Urlaub fährt er gern in die Berge zum Klettern.<span class="tran"><small>마틴 자거는 암벽 등반가입니다. 그는 스포츠 센터에서 일한 후 이틀에 한 번 훈련을하고 암벽을 탑니다. 암벽등반할 때는 강한 손가락과 팔이 필요합니다. 휴가 중에 그는 암벽등반하러 산에 가는 것을 좋아합니다.</small></span></td>
								</tr>
								<tr>
									<td>c. In Europa fahren jedes Jahr viele Leute in den Skiurlaub in die Alpen. Viele Leute kommen aber nicht gesund nach Hause. Marie Klein hat sich zum Beispiel beim Skiurlaub das Bein gebrochen und hatte ein Gipsbein.<span class="tran"><small>유럽에서는 많은 사람들이 매년 알프스로 스키타러 갑니다. 그러나 어떤 사람들이 건강한 상태로 집에 오지 못합니다. 예를 들어 마리 클라인은 스키를 타다가 다리가 부러져 깁스를 했습니다.</small></span></td>
								</tr>
							</tbody>
						</table>
						<table class="table text-center">
							<thead>
								<tr>
									<th class="border-0 align-middle" socpe="col">a</th>
									<th class="border-0 align-middle" socpe="col">b</th>
									<th class="border-0 align-middle" socpe="col">c</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0 align-middle border-0"><button type="button" id="4" class="so btn btn-outline-pink">▶</button></td>
									<td class="border-0 align-middle border-0"><button type="button" id="5" class="so btn btn-outline-success">▶</button></td>
									<td class="border-0 align-middle border-0"><button type="button" id="6" class="so btn btn-outline-info">▶</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table text-center align-middle">
							<thead>
								<tr>
									<th scope="col" class="align-middle">Foto</th>
									<th scope="col" class="align-middle"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-1.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-2.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-4.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-A1-3.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="align-middle">Text</th>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-1">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-3">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-4">
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
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});

				ion.sound({
					sounds : [{
						name : "r8 A2",

						sprite : {
							"0": [2.13,63.43],
							"4": [8.7,18.47],
							"5": [27.93,16.71],
							"6": [46.71,19.61]
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
							if(obj.part < 4) {
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
					ion.sound.pause("r8 A2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 A2", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 A2", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 A2", {
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
				if($("#itms").find("button.itm").length < 1) {
					$(".tran").show();

					// 정답 확인 div 상자 배경색 속성 없애기
					$(this).removeClass("btn-light ");

					$(".itm-lst").each(function() {
						if(($.trim($(this).find(".btn").text()) != "▼") && $(this).find(".btn")) {
							$(this).find(".btn").addClass("text-success");
						}
					});

					var qa = $(".itm-lst>.text-success").length; // 전체 문항 수
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

<?php require "wahl.php"; ?>

			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10"];
			pan = [];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block");
						$("#" + $(this).attr("id")).addClass("btn-light");
						$("#lst-" + pan[p] + ">h2").remove();
						$("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}

		}
	});

});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>