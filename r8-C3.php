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
			<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="1">
				Halsschmerzen
			</button>
			<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2" id="2">
				Bauchschmerzen
			</button>
			<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="3">
				Fieber
			</button>
			<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2" id="4">
				Ohrenschmerzen
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
							<td class="border-0">Er kann nicht laut sprechen.
							<span class="tran"><br><small>그는 크게 말할 수 없다.</small></span></td>
						</tr>
						<tr>
							<td class="border-0">&nbsp;</td>
							<td class="border-0">
								Er hat&nbsp;
								<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 50%;">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
								</div>.
								<span class="tran"><br><small>그는 인후염이 있다.</small></span>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tr>
							<th class="border-0" scope="row" width="30">2.</th>
							<td class="border-0">Minas Körpertemperatur ist 38.5˚Celsius.
							<span class="tran"><br><small>미나의 체온이 38.5도이다.</small></span></td>
						</tr>
						<tr>
							<td class="border-0">&nbsp;</td>
							<td class="border-0">
								Sie hat&nbsp;
								<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 50%;">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
								</div>.
								<span class="tran"><br><small>그녀는 열이 있다.</small></span>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tr>
							<th class="border-0" scope="row" width="30">3.</th>
							<td class="border-0">Meine Ohren tun weh.
							<span class="tran"><br><small>나는 귀가 아프다.</small></span></td>
						</tr>
						<tr>
							<td class="border-0">&nbsp;</td>
							<td class="border-0">
								Ich habe&nbsp;
								<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 50%;">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
								</div>.
								<span class="tran"><br><small>나는 귀통증이 있다.</small></span>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tr>
							<th class="border-0" scope="row" width="30">4.</th>
							<td class="border-0">Ich habe zu viel gegessen.
							<span class="tran"><br><small>나는 너무 많이 먹었다.</small></span></td>
						</tr>
						<tr>
							<td class="border-0">&nbsp;</td>
							<td class="border-0">
								Ich habe&nbsp;
								<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 50%;">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
								</div>.
								<span class="tran"><br><small>나는 복통이 있다.</small></span>
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

		// 정답확인
		$("#chk").on("click", function() {
			var na = "";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();

				$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
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