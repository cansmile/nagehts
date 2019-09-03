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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">
					bitter
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
					sauer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="3">
					scharf
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="4">
					fettig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="5">
					salzig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="6">
					süß
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
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-1.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-2.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-3.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-4.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-5.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-6.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
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
				var na="";
				if($("#itms").find("button").length < 1) {
					$(this).attr("id", "done");
					$(".tran").show();
					$(".itm-lst").each(function() {
						$(this).html($(this).find("button").html());
						$(this).addClass("font-weight-bold bg-white border rounded border-dark");
					}
					);
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
				}
				else {
					$("div.itm-lst").each(function(idx) {
						if( !$(this).find("button").length) {
							if(na !="") {
								na +=", ";
							}
							na +=(idx+1);
						}
					}
					);
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			}
			);
		}
		);
	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>