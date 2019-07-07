<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<section>
		<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>단어를 넣을 때는 그림을 누르세요.<br><small>(다중 선택이 되지만 클릭한 그림 하나에 답안 하나만 배치됩니다.)</small></h2>
				</div>
			</div>
			
			<!-- 고르는 아이템들 -->
			
			<div class="row">
				<div class="mb-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 itm" id="1">
						schlecht
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 itm" id="2">
						 gut
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 itm" id="3">
						super
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 itm" id="4">
						es geht
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 itm" id="5">
						sehr schlecht
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 itm" id="6">
						sehr gut
					</button>
				</div>
			</div>
			<!-- 아이템들 끝 -->

			<!-- 리스트 시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-1">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-1.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-2">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-2.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-3">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-3.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-4">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-4.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-5">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-5.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-6">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-C2-6.png" class="ttl">
				</div>
			</div>
	</section>

<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script src="./js/taptogroup.js"></script>

		<script>
			$(document).ready(function() {
				// 미리 답 넣어놓기
				$("#3").insertAfter("#lst-1>img");
				$("#4").insertAfter("#lst-4>img");
				$("#5").insertAfter("#lst-6>img");
				$(".itm-lst>button").addClass("btn-block btn-light");
			});		

		</script>
	</body>
</html>