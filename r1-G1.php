<?php include "header.php"; ?>
	<body>
		<style>
			.itm-lst>button.so:before {content: "Guten";}
			.itm-lst#lst-4>button.itm:before {content: "Gute";}
			.itm-lst>button.so:after {content: "!";}
		</style>
		<!-- 넵바 시작 -->
		<div class="dropdown-divider"></div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href=".\r1-Uebungen.php">Reihe 1 - G - Inhalt</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 1. Begrüßung </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item active" href="r1-G1.php">1. Begrüßung <span class="sr-only">(current)</span></a> <a class="dropdown-item" href="r1-G2.php">2. Was sagen die Personen? </a> <a class="dropdown-item" href="r1-G3.php">3. Frage oder Antwort ? </a> <a class="dropdown-item" href="r1-G7.php">4. Ergänzen Sie: „du“ oder „Sie“. </a> <a class="dropdown-item" href="r1-G8.php">5. Ergänzen Sie die passende Form. </a> <a class="dropdown-item" href="r1-G11.php">6. Hören Sie und ergänzen Sie. </a> 
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
				<div class="container-fluid">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">1. Begrüßung</h1>
							<h2>
								인사
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>

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