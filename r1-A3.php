<?php include "header.php"; ?>
	<body>
		<!-- 넵바 시작 -->
		<div class="dropdown-divider"></div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href=".\r1-Guten Tag!.php">Reihe 1 - A - Inhalt</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 2. Ergänzen Sie </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="r1-A2.php">1. Ordnen Sie zu</a><a class="dropdown-item active" href="r1-A3.php">2. Ergänzen Sie<span class="sr-only">(current)</span></a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=".\index.php">처음</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=".\Deutschland.php">독일은...</a>
					</li>

				</ul>

			</div>
		</nav>
		<!-- 넵바 끝 -->

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