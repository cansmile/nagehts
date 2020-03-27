<?php include "header.php"; ?>
	<body>
<?php include "back.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-2" id="1">
					Wann denn?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2" id="2">
					Da habe ich Zeit.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="3">
					Hast du am Samstag Zeit?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="4">
					Sonntagabend ist gut.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="5">
					Leider kann ich nicht.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2" id="6">
					Und am Sonntagabend?
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
					<div class="col-12">
						<table class="table border border-dark">
							<tbody>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Hallo Mina, hier ist Tim.&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<br>Wollen wir ins Kino gehen?
											<span class="tran"><br><small>안녕 미나, 나 팀이야. 토요일에 시간 있어?<br>영화관에 갈래?</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											&nbsp;Ich gehe am Samstag in die Kirche.
											<span class="tran"><br><small>아쉽지만 난 못갈 것 같아. 나 토요일에 교회 가.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>그럼 일요일 저녁은?</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>일요일 저녁에는 괜찮아. 시간 있어. 그럼 몇시에?</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Um 20.30 Uhr.
											<span class="tran"><br><small>20시 30분에.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="20">·</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Gut, bis dann.
											<span class="tran"><br><small>좋아, 그때 봐.</small></span>
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
			$(".tran").hide();
			$("#chk").hide();

			$(document).ready(function() {


<?php include "wahl.php"; ?>

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length == $("#itms").find("button.ans0").length) {
					$(".tran").show();

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
			pan = [4,6];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
						$("#" + $(this).attr("id")).addClass("border-0");
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