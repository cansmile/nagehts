<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Wie heißt das Zimmer? Was macht man da?<br>
							<small> 방 이름이 무엇일까요? 거기서 무엇을 하나요? </small>
						</h2>
						<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 항목에 맞게 짝지우세요.</small> ]</h2>
					</div>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="1">
							essen, kochen<span class="tran"><br><small>먹기, 요리하기</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="2">
							Kleider aufhängen<span class="tran"><br><small>옷 걸기</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="3">
							fernsehen<span class="tran"><br><small>TV보기</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="4">
							die Küche<span class="tran"><br><small>부엌</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
							das Wohnzimmer<span class="tran"><br><small>거실</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							der Flur<span class="tran"><br><small>복도</small></span>
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th width="25%" scope="row"><img src="./images/Reihe 4/Reihe-4-A3.png" alt="Haus" style="width: 100%; height: auto;"></th>
									<td width="25%"><img src="./images/Reihe 4/Reihe-4-A3-5.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></td>
									<td width="25%"><img src="./images/Reihe 4/Reihe-4-A3-6.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></td>
									<td width="25%"><img src="./images/Reihe 4/Reihe-4-A3-7.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<th scope="row">Wo?<span class="tran"><br><small>어디?</small></span></th>
									<td>
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">Was tut man?<span class="tran"><br><small>사람이 무엇하나?</small></span></th>
									<td>
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td>
										<div class="itm-lst 1itm" id="lst-6">
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
			$(".tran").hide();

			$(document).ready(function() {

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(".itm-lst").each(function() {
						$(this).html($(this).find("button").html());
						$(this).addClass("font-weight-bold");
					})
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
					$(".tran").show();
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
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>