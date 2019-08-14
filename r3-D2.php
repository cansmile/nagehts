<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Ergänzen Sie die Tabelle.<br>
							<small>다음 표를 채우세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고, 각 항목에 알맞은 단어를 짝지우세요.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="1">
							Fußballspieler
						</button>
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="2">
							Eva
						</button>
						<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="3">
							Frankreich
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="4">
							25
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
							Becker
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="6">
							Clara
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="7">
							Bäcker
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="8">
							Argentinien
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="text-center" scope="row" rowspan="2">&nbsp;</th>
									<th class="text-center" score="col" colspan="2">♀ Wie heißt sie?<br>♂ Wie heißt er?</th>
									<th class="text-center" score="col">♀ Woher kommt sie?<br>♂ Woher kommt er?</th>
									<th class="text-center" score="col">♀ Wie alt ist sie?<br>♂ Wie alt ist er?</th>
									<th class="text-center" score="col">♀ Was ist sie von Beruf?<br>♂ Was ist er von Beruf?</th>
								</tr>
								<tr>
									<th class="text-center" scope="row">Vorname</th>
									<th class="text-center" scope="row">(Familien-)Name</th>
									<td class="align-middle text-center"></td>
									<td class="align-middle text-center"></td>
									<td class="align-middle text-center"></td>
									<td class="align-middle text-center"></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="align-middle text-center" scope="row"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></th>
									<td class="align-middle text-center">Felix</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-1">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">Deutschland</td>
									<td class="align-middle text-center">26</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-2">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="align-middle text-center" scope="row"><button type="button" id="10" class="so btn btn-outline-danger">▶</button></th>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-3">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">Smith</td>
									<td class="align-middle text-center">Amerika</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-4">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">Ärztin</td>
								</tr>
								<tr>
									<th class="align-middle text-center" scope="row"><button type="button" id="11" class="so btn btn-outline-danger">▶</button></th>
									<td class="align-middle text-center">Lionel</td>
									<td class="align-middle text-center">Messi</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-5">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">25</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-6">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="align-middle text-center" scope="row"><button type="button" id="12" class="so btn btn-outline-danger">▶</button></th>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-7">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">Green</td>
									<td class="align-middle text-center">
										<div class="itm-lst 1itm" id="lst-8">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
									<td class="align-middle text-center">31</td>
									<td class="align-middle text-center">Schauspielerin</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 col-xl-5">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">Was</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">ist</td>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">er/sie</td>
									<td class="border border-dark border-0">von Beruf?</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">&nbsp;</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">bist</td>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">du</td>
									<td class="border border-dark border-0">&nbsp;</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">&nbsp;</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">sind</td>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">Sie/sie</td>
									<td class="border border-dark border-0">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">Ich</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">bin</td>
									<td class="border border-dark border-0">…</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">Er/Sie</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">ist</td>
									<td class="border border-dark border-0">&nbsp;</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">Sie/Sie</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">sind</td>
									<td class="border border-dark border-0">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">Was</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">macht</td>
									<td class="border border-dark border-0">er/sie?</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">&nbsp;</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">machst</td>
									<td class="border border-dark border-0">du?</td>
								</tr>
								<tr>
									<th class="border border-dark border-top-0 border-left-0 border-bottom-0" scope="row">&nbsp;</th>
									<td class="border border-dark border-top-0 border-left-0 border-bottom-0">machen</td>
									<td class="border border-dark border-0">Sie/sie?</td>
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
						name : "r3 D1",

						sprite : {
							"0": [16.8,66.8],
							"9": [16.4,15.2],
							"10": [33.8,16.2],
							"11": [52.7,14.5],
							"12": [70,13.8]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 3/",
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
							if(obj.part > 8) {
								$("#"+obj.part).html("▶");
							}
							$("#"+hmn).closest("th").find(".tran").show();									
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
					ion.sound.pause("r3 D1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r3 D1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r3 D1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r3 D1", {
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
					$(".itm-lst").each(function() {
						$(this).html($(this).find("button").html());
						$(this).addClass("font-weight-bold text-success");
					})
					$(this).html("<h4>모든 답을 다 맞추셨네요!<br>혹시 독일인이세요?</h4>");
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
					alert("빈 칸을 모두 채워주세요.");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});
		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>