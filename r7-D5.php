<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2" id="1">
							ins Café gehen.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-2" id="2">
							in den Supermarkt gehen.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="3">
							ins Restaurant gehen.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="4">
							in die Buchhandlung gehen.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2" id="5">
							ins Kino gehen.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="6">
							in die Sprachschule gehen.
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr class="border border-dark rounded bg-light">
									<th class="text-center align-middle border-0" scope="row" width="50">Bsp.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Herr Kim will Deutsch lernen. Dann kann er&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>김 선생님은 독일어를 배울 것이다. 그럼 그는 언어학교에 갈 수 있다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">1.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Wir wollen essen gehen. Dann können wir&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>우리는 먹을 것이다. 그럼 우리는 식당에 갈 수 있다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">2.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Frau Lee will Kuchen essen und Kaffee trinken. Dann kann sie&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>이 여사는 케잌을 먹고 커피를 마실 것이다. 그럼 그녀는 카페에 갈 수 있다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">3.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Er will ein Buch kaufen. Dann kann er&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>그는 책을 살 것이다. 그럼 그는 서점에 갈 수 있다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">4.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Wir wollen einen Film sehen. Dann können wir&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>우리는 영화를 볼 것이다. 그럼 우리는 영화관에 갈 수 있다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">5.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Ich will Fleisch besorgen. Dann kann ich&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>나는 고기를 먹을 것이다. 그럼 슈퍼마켓에 갈 수 있다.</small></span>
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
			$(".tran").hide();

			$(document).ready(function() {

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
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

			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10"];
			pan = [1,2];
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
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>