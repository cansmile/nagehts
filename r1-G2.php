<?php include "header.php"; ?>
	<body>
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
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 2. Was sagen die Personen? </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="r1-G1.php">1. Begrüßung </a> <a class="dropdown-item active" href="r1-G2.php">2. Was sagen die Personen? <span class="sr-only">(current)</span></a> <a class="dropdown-item" href="r1-G3.php">3. Frage oder Antwort ? </a> <a class="dropdown-item" href="r1-G7.php">4. Ergänzen Sie: „du“ oder „Sie“. </a> <a class="dropdown-item" href="r1-G8.php">5. Ergänzen Sie die passende Form. </a> <a class="dropdown-item" href="r1-G11.php">6. Hören Sie und ergänzen Sie. </a> 
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
							<h1 class="display-4">2. Was sagen die Personen?<br>Hören Sie und ordnen Sie zu.</h1>
							<h2>
								사람들이 뭐라고 말하나요?<br>듣고 그림과 내용을 연결해 보세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
								HV
							</button>
							<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
								❚❚
							</button>
							</h2>
					</div>
				</div>
			</div>
		</header>

		<section>
			<div class="container">
				<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="1">
							<div class="display-4">1</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark so itm" id="2">
							<div class="display-4">2</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="3">
							<div class="display-4">3</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="4">
							<div class="display-4">4</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="5">
							<div class="display-4">5</div>
						</button>
					</div>
				</div>

			<!-- 리스트  시작 -->
			<div class="row mt-2" id="lsts">
				<div class="rounded-top border border-outline-dark so itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-1">
					<img src=".\images\Reihe 1\Reihe-1-G2-1.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-2">
					<img src=".\images\Reihe 1\Reihe-1-G2-2.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-3">
					<img src=".\images\Reihe 1\Reihe-1-G2-3.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-4">
					<img src=".\images\Reihe 1\Reihe-1-G2-4.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-5">
					<img src=".\images\Reihe 1\Reihe-1-G2-5.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
			</div>
			<div class="row">
				<div class="col-auto">
					<div class="accordion" id="accordionitms1">
						<div class="display-4 text-center">Dialog 1</div>
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="6">
										Auf Wiedersehen!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms1">
								<div class="card-body">안녕히 가세요!</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-outline-info mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="7">
										Auf Wiedersehen!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms1">
								<div class="card-body">안녕히 가세요!</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="accordion" id="accordionitms2">
						<div class="display-4 text-center">Dialog 2</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="8">
										Tschüs, Eva! Ich habe dich lieb!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms2">
								<div class="card-body">잘가, 에바! 사랑해!</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="9">
										Tschüs, Tim! Ich liebe dich auch! Gute Reise!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms2">
								<div class="card-body">안녕, 팀! 나도 사랑해! 여행 잘해!</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="accordion" id="accordionitms3">
						<div class="display-4 text-center">Dialog 3</div>
						<div class="card">
							<div class="card-header" id="headingFive">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="10">
										Guten Tag, Frau Kim!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms3">
								<div class="card-body">안녕하세요, 김 선생님.</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSix">
								<h5 class="mb-0">
									<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" area-expanded="false" aria-controls="collapseSix" id="11">
										Guten Tag, Herr Cho!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionitms3">
								<div class="card-body">안녕하세요, 조 선생님!</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSeven">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseSeven" area-expanded="false" aria-controls="collapseSeven" id="12">
										Willkommen in Dresden. Das ist für Sie!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionitms3">
								<div class="card-body">드레스덴에 오신 것을 환영해요! </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingEight">
								<h5 class="mb-0">
									<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseEight" area-expanded="false" aria-controls="collapseEight" id="13">
										Oh, Danke. Das ist nett!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionitms3">
								<div class="card-body">오, 고마워요. 정말 친절하시네요!</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="accordion" id="accordionitms4">
						<div class="display-4 text-center">Dialog 4</div>
						<div class="card">
							<div class="card-header" id="headingNine">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" area-expanded="false" aria-controls="collapseNine" id="14">
										Hallo, Julia!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionitms4">
								<div class="card-body">안녕, 율리아!</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTen">
								<h5 class="mb-0">
									<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseTen" area-expanded="false" aria-controls="collapseTen" id="15">
										Hallo, Martin! Lange nicht gesehen.
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseTen" aria-labelledby="headingTen" data-parent="#accordionitms4">
								<div class="card-body">안녕, 마틴! 오랫만이다.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="accordion" id="accordionitms5">
						<div class="display-4 text-center">Dialog 5</div>
						<div class="card">
							<div class="card-header" id="headingEleven">
								<h5 class="mb-0">
									<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseEleven" area-expanded="false" aria-controls="collapseEleven" id="16">
										Mama! Mama!
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseEleven" aria-labelledby="headingEleven" data-parent="#accordionitms5">
								<div class="card-body">엄마, 엄마!</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwelve">
								<h5 class="mb-0">
									<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapseTwelve" area-expanded="false" aria-controls="collapseTwelve" id="17">
										Oh, Mein Schatz! Hast du Hunger?
									</button>
								</h5>
							</div>
							<div class="collapse" id="collapseTwelve" aria-labelledby="headingTwelve" data-parent="#accordionitms5">
								<div class="card-body">오, 우리 강아지! 배고프니?</div>
							</div>
						</div>
					</div>
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
		<!-- interact.min.js -->
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".collapse").collapse("hide");

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 U2",

						sprite : {
							"0": [4.9,80.9],
							"1": [8.7,7.7],
							"2": [18.8,15.7],
							"3": [40.4,19],
							"4": [61.5,11.6],
							"5": [75.1,10],
							"6": [11.2,1.6],
							"7": [14.5,2],
							"8": [22.1,3.2],
							"9": [29.2,4.5],
							"10": [40.4,1.6],
							"11": [45.2,1.7],
							"12": [49.2,3.3],
							"13": [56.7,2.5],
							"14": [64.4,1.4],
							"15": [69.5,3],
							"16": [77.17,2],
							"17": [81.9,2.5]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
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
					},
					ready_callback: function () {
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								ion.sound.pause("r1 U2", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else if($(this).attr("id") == 0) {
										//_p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U2", {
											part: $(this).attr("id")
										});
							} else {
								if($(this).parent()[0].tagName == "H5") {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
								}
									if(!$(ch).hasClass("show") || !$(this).hasClass("btn-secondary")) {
										// _p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U2", {
											part: $(this).attr("id")
										});
									}
								};
								
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
								};
							});
					// 준비되면 HV 보이기
					$("#0").show();

					}
				});
				
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>