<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 알맞은 칸<small>(Am Vormittag, Am Mittag, Am Nachmittag, Am Abend)</small>에 넣으세요.</small> ]
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-1.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-2.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-3.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-4.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-5.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-6.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3"><img src="./images/Reihe 7/Reihe-7-A2-7.png" alt="Was möchten Sie am Wochenende machen?" style="max-width: 100%; height: auto;"></div>
				</div>
				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="1">
							<small>Tanzkurs</small> (So. 18 Uhr)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="2">
							<small>Stadtführung</small> (Fr.11 Uhr)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
							<small>Staatsoperette</small> (Sa. 14.30)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="4">
							<small>Galakonzerte</small> (Sa. 22 Uhr)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="5">
							<small>Kino</small> (Fr. bis Sa. 15.30)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="6">
							<small>Stadtführung</small> (Mo, Mi, Fr., Sa. 18.30)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="7">
							<small>Circus Krone</small> (So. 15.30)
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="8">
							<small>Kino</small> (Fr. bis Sa. 17.45, 20.00)
						</button>
					</div>
				</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 pt-1 border border-white" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Vormittag</strong></small><br>(7-10 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 pt-1 border border-white" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Mittag</strong></small><br>(11-13 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 pt-1 border border-white" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Nachmittag</strong></small><br>(13-18 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-primary itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 pt-1 border border-white" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Abend</strong></small><br>(17-22 Uhr)</h2>&nbsp;
				</div>
			</div>
		<!-- 리스트 끝 -->
				<!-- 정답화인 버튼 시작 -->
				<div class="row">
					<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
						정답확인
					</div>
				</div>
				<!-- 정답확인 버튼 끝 -->
			</div>
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
		// $("#0").show();
		$(".alert").hide();

			var pan = new Array();
			pan = ["2"];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).insertAfter($("#lst-" + pan[p] + ">h2"));
						$("#" + $(this).attr("id")).addClass("btn-block");
						$("#" + $(this).attr("id")).addClass("btn-light");
						$("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}
			$(".itm-lst>button").addClass("btn-block btn-light");

	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>