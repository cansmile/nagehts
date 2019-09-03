<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="1">
					im Biergarten
					<span class="tran"><small>야외 맥주집에서</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="2">
					im Restaurant
					<span class="tran"><small>식당에서</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="3">
					in der Weinstube
					<span class="tran"><small>와인바에서</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="4">
					in der Mensa
					<span class="tran"><small>학생식당에서</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="5">
					am Imbiss
					<span class="tran"><small>스낵바에서</small></span>
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
					<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle text-center" height="300"><img src="./images/Reihe 5/Reihe-5-A1-1.png" alt="Wo sind die Leute und was machen sie?" style="max-width: 240px; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle text-center" height="300"><img src="./images/Reihe 5/Reihe-5-A1-2.png" alt="Wo sind die Leute und was machen sie?" style="max-width: 240px; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle text-center" height="300"><img src="./images/Reihe 5/Reihe-5-A1-3.png" alt="Wo sind die Leute und was machen sie?" style="max-width: 240px; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle text-center" height="300"><img src="./images/Reihe 5/Reihe-5-A1-4.png" alt="Wo sind die Leute und was machen sie?" style="max-width: 240px; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 align-middle text-center" height="300"><img src="./images/Reihe 5/Reihe-5-A1-5.png" alt="Wo sind die Leute und was machen sie?" style="max-width: 240px; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-5">
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
	<script src="./js/jquery-3.3.1.min.js"></script>
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
			if($(this).attr("id") == "chk") {
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(this).attr("id", "done");
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
				} else {
					alert("모든 문제를 풀어주세요!");
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