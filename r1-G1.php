<?php include "header.php"; ?>
	<body>
		<style>
			.itm-lst>button.so:before {content: "Guten";}
			.itm-lst#lst-4>button.itm:before {content: "Gute";}
			.itm-lst>button.so:after {content: "!";}
		</style>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="1">
							Tag
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="2">
							Abend
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="3">
							Morgen
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="4">
							Nacht
						</button>
					</div>
				</div>

			<!-- 리스트  시작 -->
			<div class="row mt-2" id="lsts">
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-1">
					<img src=".\images\Reihe 1\Reihe-1-G1-1.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>6~11 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-2">
					<img src=".\images\Reihe 1\Reihe-1-G1-2.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>11~17 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-3">
					<img src=".\images\Reihe 1\Reihe-1-G1-3.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>17~24 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-4">
					<img src=".\images\Reihe 1\Reihe-1-G1-4.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
				</div>
			</div>
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
			
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "Cartoon_Boing",
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay : false
				});

				// 미리 답 넣어놓기
				$("#4").insertAfter("#lst-4>h2");
				$("#lst-4>h2").remove();
				$(".itm-lst>button").addClass("btn-block btn-light");
			});

		
		</script>
		<!-- ion.sound finished -->
	</body>
</html>