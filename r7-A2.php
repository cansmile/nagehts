<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="1">
					<small>Tanzkurs<span class="tran">댄스수업<br>(So. 18 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
					<small>Führung in der Gemäldegalerie<span class="tran">미술관 안내<br>(Fr. 11 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="3">
					<small>Galakonzerte<span class="tran">축제음악회<br>(Sa. 22 Uhr)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="4">
					<small>Kino<span class="tran">영화관<br>(Fr. bis Sa. 15.30)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="5">
					<small>Stadtführung Glanzlicher Dresdens<span class="tran"><br>(Mo, Mi, Fr., Sa. 18.30)</</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="6">
					<small>Circus Krone<span class="tran">크로네 서커스<br>(So. 15.30)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="7">
					<small>Kino<span class="tran"영화관<br>(Fr. bis Sa. 17.45, 20.00)</span></small>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="8">
					<small>Staatsoperette<span class="tran">국립 소오페라단<br>(Sa. 14.30)</span></small>
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
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Vormittag</strong></small><br>(10-12 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Mittag</strong></small><br>(12-13 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Nachmittag</strong></small><br>(13-17 Uhr)</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-primary itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 pt-1 border border-white" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block"><small><strong>Am Abend</strong></small><br>(17-0 Uhr)</h2>&nbsp;
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
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
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
		// $("#0").show();
		$(".alert").hide();

	<?php include "wahl.php"; ?>


		var pan=new Array();
		pan=[2];
		for(var p=0;
		p < pan.length;
		p++) {
			for(var i = 1; i <= $(".itm-lst").length; i++) {
				if($("#"+pan[p]).hasClass("ans"+i)) {
					$("#"+pan[p]).insertAfter("#lst-"+i+ ">h2");
					$("#"+pan[p]).addClass("btn-block");
					$("#"+pan[p]).addClass("btn-light");
					$("#"+pan[p]).find(".tran").show();
				}
			}
		$(".itm-lst>button").addClass("btn-block btn-light");
	}
});
</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>