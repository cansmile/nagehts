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
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="1">
					Aspirin nehmen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2" id="2">
					Gymnastik machen und mehr Sport treiben.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="3">
					nicht mehr rauchen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="4">
					mehr Obst und Gemüse essen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2" id="4">
					abends Schlaftee trinken.
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tr>
								<th class="border-0" scope="row" width="30">1.</th>
								<td class="border-0">Mina ist oft erkältet.
								<span class="tran"><br><small>미나는 종종 감기에 걸립니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">
									Sie soll&nbsp;
									<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 50%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
									</div>
									<span class="tran"><br><small>그녀는 과일과 채소를 더 많이 먹어야 합니다.</small></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tr>
								<th class="border-0" scope="row" width="30">2.</th>
								<td class="border-0">Minho hat Fieber.
								<span class="tran"><br><small>민호는 열이 있습니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">
									Er soll&nbsp;
									<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 50%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
									</div>
									<span class="tran"><br><small>그는 아스피린을 복용해야 합니다.</small></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tr>
								<th class="border-0" scope="row" width="30">3.</th>
								<td class="border-0">Meine Oma hat Schlafstörungen.
								<span class="tran"><br><small>나의 할머니는 수면에 문제가 있습니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">
									Sie soll&nbsp;
									<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 50%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
									</div>
									<span class="tran"><br><small>그녀는 잠이 오는 차를 마셔야 합니다.</small></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tr>
								<th class="border-0" scope="row" width="30">4.</th>
								<td class="border-0">Herr Heine hat immer Husten.
								<span class="tran"><br><small>하이네 씨는 항상 기침을 합니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">
									Er soll&nbsp;
									<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 50%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
									</div>
									<span class="tran"><br><small>그는 담배를 피우지 않아야 합니다.</small></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tr>
								<th class="border-0" scope="row" width="30">5.</th>
								<td class="border-0">Frau Nolte hat schon lange Rückenschmerzen.
								<span class="tran"><br><small>놀테 부인은 허리 통증을 오래 앓고 있습니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">
									Sie soll&nbsp;
									<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 50%;">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
									</div>
									<span class="tran"><br><small>그녀는 체조를 하고 더 많은 운동을 해야 합니다.</small></span>
								</td>
							</tr>
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

<?php include "wahl.php"; ?>


			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10"];
			pan = [1];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#lst-" + pan[p] + ">.itm").addClass("btn-block font-weight-bold");
						$("#lst-" + pan[p] + ">.itm").addClass("border-0");
						$("#lst-" + pan[p] + ">h2").remove();
						$("#lst-" + pan[p]).closest("table").find(".tran").show();
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