<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
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
						<h2>[ <small>순서에 맞게 노란 단추를 눌러 넣세요.</small> ]
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
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
									<td>a. Klara Sauer macht zweimal pro Woche Tae-Kwon-Do. Tae-Kwon-Do ist gut für den Körper und Geist. Der Sport macht sie gesund und fit. Konzentration ist dabei sehr wichtig. Jeder kann Tae-Kwon-Do lernen.<span class="tran"><small>클라라 사우어는 일주일에 두 번 태권도를 합니다. 태권도는 몸과 마음에 좋습니다. 이 스포츠는 건강하고 적합합니다. 집중은 매우 중요합니다. 누구나 태권도를 배울 수 있습니다.</small></span></td>
								</tr>
								<tr>
									<td>b. Martin Sager ist Steilwandkletterer. Er trainiert alle zwei Tage nach der Arbeit im Sportzentrum und klettert Wände hoch. Dabei braucht er starke Finger und Arme. Im Urlaub fährt er gern in die Berge zum Klettern.<span class="tran"><small>마틴 자거는 암벽 등반가입니다. 그는 스포츠 센터에서 일한 후 이틀마다 훈련을하고 벽을 올라갑니다. 그것은 강한 손가락과 팔이 필요합니다. 방학 중에 그는 산에서 스키를 타는 것을 좋아합니다.</small></span></td>
								</tr>
								<tr>
									<td>c. In Europa fahren jedes Jahr viele Leute in den Skiurlaub in die Alpen. Manche Leute kommen aber nicht gesund nach Hause. Marie Klein hat sich zum Beispiel beim Skiurlaub das Bein gebrochen und hatte ein Gipsbein.<span class="tran"><small>유럽에서는 많은 사람들이 매년 알프스로 스키타러 갑니다. 어떤 사람들은 건강하게 집에 오지 않습니다. 예를 들어 마리클라인은 스키를 타면서 다리가 부러졌고 다리를 깁스했습니다.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="my-2 col" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
							a
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="2">
							b
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
							c
						</button>
					</div>
					<div class="col-12">
						<table class="table text-center align-middle">
							<thead>
								<tr>
									<th scope="col" class="align-middle">Foto</th>
									<th scope="col" class="align-middle"><img src="./images/Reihe 8/Reihe-8-A1-1.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./images/Reihe 8/Reihe-8-A1-2.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./images/Reihe 8/Reihe-8-A1-4.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
									<th scope="col" class="align-middle"><img src="./images/Reihe 8/Reihe-8-A1-3.png" alt="Lesen Sie die Texte. Ordnen Sie das passende Foto zu." style="max-height: 240px; width: auto;"></th>
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
		

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
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
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r8 A2",

						sprite : {
							"0": [2.13,63.43],
							"1": [8.7,18.47],
							"2": [27.93,16.71],
							"3": [46.71,19.61]
						}
					},{
						name : "Bama_Country_Country",
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
					ion.sound.play("Bama_Country_Country");
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

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
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
	</body>
</html>