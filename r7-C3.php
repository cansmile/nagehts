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
				<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-2" id="1">
					essen und trinken.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm px-2" id="2">
					duschen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm px-2" id="3">
					rauchen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm px-2" id="4">
					schwimmen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm px-2" id="4">
					darf
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm px-2" id="5">
					Bücher lesen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm px-2" id="6">
					essen und trinken.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm px-2" id="7">
					einen Film sehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm px-2" id="8">
					keine Getränke mitbringen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm px-2" id="9">
					leise sprechen.
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
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
						<table class="table p-0 m-0">
							<tbody>
								<tr>
									<td class="border-0">1.</td>
									<td class="border-0"><img src="./images/Reihe 7/Reihe-7-C3-1.png" alt="Was kann man, was darf man nicht und was muss man machen?" style="max-width: 100%; height: auto;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle">
										Hier kann man
										<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										Hier muss man
										<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										Hier darf man nicht
										<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
						<table class="table p-0 m-0">
							<tbody>
								<tr>
									<td class="border-0">2.</td>
									<td class="border-0"><img src="./images/Reihe 7/Reihe-7-C3-2.png" alt="Was kann man, was darf man nicht und was muss man machen?" style="max-width: 100%; height: auto;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle">
										Hier kann man
										<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										Hier muss man
										<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
						<table class="table p-0 m-0">
							<tbody>
								<tr>
									<td class="border-0">3.</td>
									<td class="border-0"><img src="./images/Reihe 7/Reihe-7-C3-3.png" alt="Was kann man, was darf man nicht und was muss man machen?" style="max-width: 100%; height: auto;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle">
										Hier kann man
										<div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										Hier darf man
										<div class="itm-lst 1itm d-inline-block" id="lst-7" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
						<table class="table p-0 m-0">
							<tbody>
								<tr>
									<td class="border-0">4.</td>
									<td class="border-0"><img src="./images/Reihe 7/Reihe-7-C3-4.png" alt="Was kann man, was darf man nicht und was muss man machen?" style="max-width: 100%; height: auto;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle">
										Hier kann man
										<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 40%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										Hier
										<div class="itm-lst 1itm d-inline-block" id="lst-8" style="min-width: 20%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>&nbsp;
										man nicht
										<div class="itm-lst 1itm d-inline-block" id="lst-9" style="min-width: 40%; ">
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