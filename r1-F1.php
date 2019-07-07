<?php include "header.php"; ?>
	<body>
		<style>
			button.itm {
				word-break: keep-all;
				word-wrap: normal;
			}
		</style>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und sprechen Sie nach.<br>
							<p>
								듣고 따라하세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
							❚❚
						</button>
						</p>
						</h2>
				</div>

				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3><small>(<button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼을 누르시면 음성이 들려요. 각 항목을 누르면 해당 그림이 나옵니다.)</small></h3>
					</div>
				</div>

				<div class="accordion row" id="accordionitms">
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="1">
									eins
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-1.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									zwei
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-2.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									drei
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-3.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									vier
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-4.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="5">
									fünf
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-5.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseSix" area-expanded="false" aria-controls="collapseSix" id="6">
									sechs
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-6.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingSeven">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseSeven" area-expanded="false" aria-controls="collapseSeven" id="7">
									sieben
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-7.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingEight">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseEight" area-expanded="false" aria-controls="collapseEight" id="8">
									acht
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-8.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingNine">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseNine" area-expanded="false" aria-controls="collapseNine" id="9">
									neun
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-9.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0">
						<div class="card-header" id="headingTen">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 itm" type="button" data-toggle="collapse" data-target="#collapseTen" area-expanded="false" aria-controls="collapseTen" id="10">
									zehn
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTen" aria-labelledby="headingTen" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-10.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
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
						name : "r1 F1",

						sprite : {
							"0": [7.1,27.4],
							"1": [11.4,1.2],
							"2": [14.1,1],
							"3": [16.8,1],
							"4": [19.1,1.2],
							"5": [21.6,1.2],
							"6": [24.1,1.3],
							"7": [26.7,1.2],
							"8": [28.9,1],
							"9": [31.3,1],
							"10": [33.3,1.3]
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
									ion.sound.pause("r1 F1", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else {
									if($(this).attr("id") != 0) {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
										if(!$(ch).hasClass("show")) {
											// _p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 F1", {
												part: $(this).attr("id")
											});
										}
									} else {
											//_p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 F1", {
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
						$(".alert").hide();
						}
					})
				});

		</script>

		<!-- ion.sound finished -->
	</body>
</html>