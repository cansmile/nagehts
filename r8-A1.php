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
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="1">
					Bodybuilding machen (den Körper trainieren)<span class="tran"><br><small>보디빌딩(신체운동) 하기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="2">
					klettern<span class="tran"><br><small>암벽등반하기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="3">
					Tae-Kwon-Do machen (trainieren)<span class="tran"><br><small>태권도하기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="4">
					Ski fahren<span class="tran"><br><small>스키타기</small></span>
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
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-A1-1.png" alt="Was machen die Personen?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
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
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-A1-2.png" alt="Was machen die Personen?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
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
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-A1-3.png" alt="Was machen die Personen?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
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
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<table class="table border-0">
							<tbody>
								<tr>
									<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-A1-4.png" alt="Was machen die Personen?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
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

			// 보기 란이 비어있으면 wahl 숨기기
			$("#marg").height($("#wahl").height() * 1.5); // wahl 높이만큼 여백 만들기
			$(document).on("click", function() {
				if($("#wahl").find(".itm").length < 1) {
					$("#wahl").hide();					
					$("#marg").hide();
					$("#chk").show();
				} else {
					if($(".ans0").length > 0) {
						if($("#wahl").find(".ans0").length == $(".ans0").length) {
							$("#wahl").hide();
							$("#marg").hide();
							$("#chk").show();
						}
					}
				}
			})

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
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
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
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>