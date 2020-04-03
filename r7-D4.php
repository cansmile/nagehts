<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="1">
					kann
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2" id="2">
					sollst
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="3">
					müssen
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2" id="4">
					muss
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="5">
					müssen
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="6">
					dürfen
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
						<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-1">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0">1.</td>
								</tr>
								<tr>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-D4-1.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="border border-dark rounded p-3">
											<div class="p-2 m-0">
												Sie&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;hier nicht rauchen.
												<span class="tran"><br><small>여기서 담배를 피울 수 없습니다.</small></span>
											</div>
											<div class="p-2 m-0">
												Sie&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;Ihre Zigarette ausmachen.
												<span class="tran"><br><small>담배를 꺼야합니다.</small></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-1">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0">2.</td>
								</tr>
								<tr>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-D4-3.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="border border-dark rounded p-3">
											<div class="p-2 m-0">
												Mina, du&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;deine Hausaufgaben machen.
												<span class="tran"><br><small>미나, 너 숙제 해야지.</small></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-1">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0">3.</td>
								</tr>
								<tr>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-D4-2.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="border border-dark rounded p-3">
											<div class="p-2 m-0">
												&nbsp;Ich bin verletzt.
												<span class="tran"><br><small>나는 다쳤어요.</small></span>
											</div>
											<div class="p-2 m-0">
												Ich&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;nicht in die Schule gehen.
												<span class="tran"><br><small>나는 학교에 갈 수 없어요.</small></span>
											</div>
											<div class="p-2 m-0">
												Ich&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;zu Hause bleiben.
												<span class="tran"><br><small>나는 집에 있어야 해요.</small></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-1">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0">4.</td>
								</tr>
								<tr>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 7/Reihe-7-D4-4.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="border border-dark rounded p-3">
											<div class="p-2 m-0">
												Oh! Wir&nbsp;
												<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
														<h2 class="btn btn-warning btn-xl ttl d-block">
														▼ </h2>
												</div>
												&nbsp;einkaufen.
												<span class="tran"><br><small>오! 우리 장 봐야 해.</small></span>
											</div>
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
			$(".tran").hide();
			$("#chk").hide();

			$(document).ready(function() {

<?php include "wahl.php"; ?>

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("text-success font-weight-bold");
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
						// $("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}
	
});
			
		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>