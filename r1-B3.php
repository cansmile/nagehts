<?php include "header.php"; ?>
	<body>
		<!-- 넵바 시작 -->
		<div class="dropdown-divider"></div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href=".\r1-Wie heissen Sie.php">Reihe 1 - B - Inhalt</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 2. Wie heißt du? </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="r1-B1.php">1. Hören Sie und sprechen Sie nach. </a><a class="dropdown-item active" href="r1-B3.php">2. Wie heißt du? <span class="sr-only">(current)</span></a><a class="dropdown-item" href="r1-B4.php">3. Ergänzen Sie die Lücken! Mädchen- oder Jungennamen?</a><a class="dropdown-item" href="r1-B5.php">4. Sortieren Sie die Namen nach Vor- und Familennamen.</a>
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
							<h1 class="display-4">2. Wie heißt du?<br>Hören Sie und sprechen Sie nach.</h1>
							<h2>
								네 이름은 무엇이니? 듣고 따라하세요.
								<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
									HV
								</button>
								<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
									❚❚
								</button>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section>
			<div class="container">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="1">
									Hallo! Ich bin Maria. Und du? Wie heißt du?
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
						<div class="card-body">안녕! 난 마리아라고해. 너는? 네 이름은 뭐야?</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									Hallo! Ich heiße Joseph.
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
						<div class="card-body">안녕! 난 요셉이라고해.</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									Freut mich, Joseph!
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
						<div class="card-body">반가워, 요셉!</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									Freut mich auch, Maria!
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
						<div class="card-body">나도 반가워, 마리아!</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col"></div>
					<div class="col-11 text-center">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-12">
								<div class="row">
									<div class="bg-light py-1 col-3 border-right border-dark">Wie</div>
									<div class="bg-light py-1 col-3 border-right border-dark"><i>heiß<strong>en</strong></i></div>
									<div class="bg-light py-1 col-6">Sie?</div>
								</div>
								<div class="row">
									<div class="py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="py-1 col-3 border-right border-dark"><i>heiß<strong>t</strong></i></div>
									<div class="py-1 col-6">du?</div>
								</div>
								<div class="row">
									<div class="bg-light py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="bg-light py-1 col-3 border-right border-dark"><i>ist</i></div>
									<div class="bg-light py-1 col-6">dein / Ihr Name?</div>
								</div>
								<div class="row">
									<div class="py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="py-1 col-6">&nbsp;</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-12">
								<div class="row">
									<div class="py-1 col-8 border-right border-dark">Ich</div>
									<div class="py-1 col-4"><i>heiß<strong>e</strong></i>…</div>
								</div>
								<div class="row">
									<div class="bg-light py-1 col-8 border-right border-dark">Ich</div>
									<div class="bg-light py-1 col-4"><i>bin…</i></div>
								</div>
								<div class="row">
									<div class="py-1 col-8 border-right border-dark">Mein Name</div>
									<div class="py-1 col-4"><i>ist…</i></div>
								</div>
								<div class="row">
									<div class="bg-light py-1 col-8 border-right border-dark">&nbsp;</div>
									<div class="bg-light py-1 col-4">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</section>
		

		
		<!-- 꼬리말 시작 -->
		<footer class="text-center mt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<p>
							Copyright © Na, geht's? All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- 꼬리말 끝 -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 B3",

						sprite : {
							"0": [3.2,24.5],
							"1": [11.1,5.2],
							"2": [19.6,2],
							"3": [22.7,1.5],
							"4": [25,1.6]
						}
					}],
					path : "sounds/Reihe 1/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
						};
					}, ready_callback: function () {
							$(".itm").on("click", function () {
								if($(this).attr("id").substr(-2) == "_p") {
									ion.sound.pause("r1 B3", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else {
									if($(this).attr("id") != 0) {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
										if(!$(ch).hasClass("show")) {
											// _p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 B3", {
												part: $(this).attr("id")
											});
										}
									} else {
											//_p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 B3", {
												part: $(this).attr("id")
											});
									}
									
									// 전체 듣기 재생일 때는 일시정지 버튼 보이기
									if($(this).attr("id") == "0") {
										$(this).hide();
										$("#0_p").show();
									};
								}
							});
						// 준비되면 HV 보이기
						$("#0").show();
						}
					})
				});

		</script>

		<!-- ion.sound finished -->
	</body>
</html>