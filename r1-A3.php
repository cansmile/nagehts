<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="mb-2 col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 itm" id="1">
					Hilfe!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 itm" id="2">
					Auf Wiedersehen!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 itm" id="3">
					Guten Tag!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 itm" id="4">
					Gute Nacht!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 itm" id="5">
					Danke. Das ist nett.
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>단어를 넣을 때는 그림을 누르세요.</h2>
					<h3>[ <small>단어를 알맞은 그림과 짝지우세요. 다중 선택이 되지만 그림 하나에 단어 하나만 배치됩니다.</small> ]</h3>
				</div>
			</div>
			<!-- 리스트 시작 -->
			<div class="row mt-4" id="lsts">
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-1">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-1.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-2">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-2.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-3">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-3.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-4">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-4.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-5">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-5.png" class="ttl">
				</div>
			</div>
		</div>
	</section>
	<div id="marg"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/ion.sound.min.js"></script>
	<script src="./js/taptogroup.js"></script>
	<script>
		$("#chk").hide();
		$(document).on("ready", function() {
			// 정답확인
			$("#chk").on("click", function() {
				var na="";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
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
			<?php include "wahl.php"; ?>
		});

	</script>
	<?php include "footer.php"; ?>
</body>
</html>