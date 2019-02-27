<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">2. Ergänzen Sie.
							<br />
							</h1>
							<h2>말풍선에 알맞은 표현을 체우세요.</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
			
	<section>
		<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>단어를 넣을 때는 그림을 누르세요.</h2>
				</div>
			</div>
			
			<!-- 고르는 아이템들 -->
			
			<div class="row">
				<div class="mb-2  col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans3 itm" id="1">
						Hilfe!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans1 itm" id="2">
						Auf Wiedersehen!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans2 itm" id="3">
						Guten Tag!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans5 itm" id="4">
						Gute Nacht!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans4 itm" id="5">
						Danke. Das ist nett.
					</button>
				</div>
			</div>
			<!-- 아이템들 끝 -->

			<!-- 리스트 시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-1">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-1.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-2">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-2.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-3">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-3.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-4">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-4.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-sm col-md col-lg my-4 mx-1" id="lst-5">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-5.png" class="ttl">
				</div>
			</div>
	</section>

<?php include "footer.php"; ?>
		<?php require_once('./footer.php'); ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script src="./js/taptogroup.js"></script>
	</body>
</html>