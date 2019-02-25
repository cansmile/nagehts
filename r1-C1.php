<?php include "header.php"; ?>
	<body>
		<!-- 넵바 시작 -->
		<div class="dropdown-divider"></div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href=".\r1-Wie geht es Ihnen.php">Reihe 1 - C - Inhalt</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 2. Wie geht es Ihnen? </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="r1-C2.php">1. Ordnen Sie zu</a> <a class="dropdown-item active" href="r1-C1.php">2. Wie geht es Ihnen? <span class="sr-only">(current)</span></a> <a class="dropdown-item" href="r1-C3.php">3. Wie geht es dir?</a>
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
							<h1 class="display-4">2. Wie geht es Ihnen?<br>Hören Sie und sprechen Sie nach.</h1>
							<h2>
								어떻게 지내시나요? 듣고 따라하세요.
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
									Guten Tag, Frau Kwan.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
							<div class="card-body">안녕하세요, 권 선생님.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									Guten Tag, Herr Park. Wie geht es Ihnen?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
							<div class="card-body">안녕하세요, 박 선생님. 어떻게 지내시나요?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									Danke, gut. Und Ihnen?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
							<div class="card-body">감사합니다, 좋아요. 선생님은요?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									Auch gut. Danke.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
							<div class="card-body">저도 좋아요. 감사해요.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-secondary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="5">
									Wie geht es Ihnen?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms">
							<div class="card-body">어떻게 지내셨어요?</div>
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
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 C1",

						sprite : {
							"0": [7.1,21.8],
							"1": [14.3,1.8],
							"2": [17.3,3.8],
							"3": [22.3,3],
							"4": [26.5,1.9],
							"5": [7,1.6]
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
									ion.sound.pause("r1 C1", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else if($(this).parents("div.card")) {
									if($(this).attr("id") != 0) {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
										if(!$(ch).hasClass("show")) {
											// _p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 C1", {
												part: $(this).attr("id")
											});
										}
									} else {
											//_p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 C1", {
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