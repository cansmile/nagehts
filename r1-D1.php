<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und sprechen Sie nach.</h2>
							<p>
								듣고 따라하세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
							❚❚
						</button>
						</p>
				</div>
				<div class="row">
					<div class="col"><img src=".\images\Reihe 1\Reihe-1-D1-1.png" style="max-width: 100%; height: auto;" class="d-block"></div>
				</div>
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="1">
									<strong>Frau Klein</strong> Guten Tag, ich heiße Heike Klein. Ich bin Ihre Deutschlehrerin.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
							<div class="card-body">안녕하세요, 저는 하이케 클라인이라고 해요. 저는 여러분의 독일어 선생님에요.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-success mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									<strong>Studenten</strong> Guten Tag, Frau Klein.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
							<div class="card-body">안녕하세요, 클라인 선생님.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									<strong>Frau Klein</strong> Wer ist Hyun Kim?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
							<div class="card-body">김현이 누구인가요?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-info mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									<strong>Hyun</strong> Das bin ich.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
							<div class="card-body">저에요.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="5">
									<strong>Frau Klein</strong> Ist Minjung Kim da?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms">
							<div class="card-body">김민정 있나요?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-outline-success mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" area-expanded="false" aria-controls="collapseSix" id="6">
									<strong>Studenten</strong> Nein, Minjung ist nicht da.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionitms">
							<div class="card-body">아뇨, 민정이는 없어요.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSeven">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseSeven" area-expanded="false" aria-controls="collapseSeven" id="7">
									<strong>Frau Klein</strong> Sind Sie Bokum Park?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionitms">
							<div class="card-body">박보검 인가요?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingEight">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseEight" area-expanded="false" aria-controls="collapseEight" id="8">
									<strong>William</strong> Nein, ich heiße William Park.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionitms">
							<div class="card-body">아뇨, 저는 윌리엄박이에요.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingNine">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" area-expanded="false" aria-controls="collapseNine" id="9">
									<strong>Frau Klein</strong> Oh, Entschuldigung!
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionitms">
							<div class="card-body">아, 실례했네요!</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTen">
							<h5 class="mb-0">
								<button class="btn btn-secondary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTen" area-expanded="false" aria-controls="collapseTen" id="10">
									da
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTen" aria-labelledby="headingTen" data-parent="#accordionitms">
							<div class="card-body">여기</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingEleven">
							<h5 class="mb-0">
								<button class="btn btn-secondary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseEleven" area-expanded="false" aria-controls="collapseEleven" id="11">
									nicht
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseEleven" aria-labelledby="headingEleven" data-parent="#accordionitms">
							<div class="card-body">아니다</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwelve">
							<h5 class="mb-0">
								<button class="btn btn-secondary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwelve" area-expanded="false" aria-controls="collapseTwelve" id="12">
									Entschuldigung
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTwelve" aria-labelledby="headingTwelve" data-parent="#accordionitms">
							<div class="card-body">실례합니다</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row mt-3">
					<div class="col"></div>
					<div class="col-11 text-center">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="py-1 col-4 border-right border-dark"><strong>Wer</strong></div>
									<div class="bg-light py-1 col-4 border-right border-dark"><i>ist</i></div>
									<div class="py-1 col-4">…?</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="py-1 col-4 border-right border-dark">Das</div>
									<div class="bg-light py-1 col-4 border-dark"><i>bin ich.</i></div>
									<div class="py-1 col-4">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col"></div>
				</div>
				<div class="row mt-3">
					<div class="col"></div>
					<div class="col-11 text-center">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="bg-light py-1 col-4 border-right border-dark"><strong>Ist</strong></div>
									<div class="py-1 col-4 border-right border-dark"><i>Minjung Kim</i></div>
									<div class="bg-light py-1 col-4"><i>…?</i></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="py-1 col-4">&nbsp;</div>
									<div class="py-1 col-4">&nbsp;</div>
									<div class="py-1 col-4">&nbsp;</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="py-1 col-4 border-right border-dark"><strong>Bist</strong></div>
									<div class="bg-light py-1 col-4 border-right border-dark"><i>du</i></div>
									<div class="py-1 col-4"><i>…?</i></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="bg-light py-1 col-4">Ja</div>
									<div class="py-1 col-4">/</div>
									<div class="bg-light py-1 col-4">Nein</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="bg-light py-1 col-4 border-right border-dark"><strong>Sind</strong></div>
									<div class="py-1 col-4 border-right border-dark"><i>Sie</i></div>
									<div class="bg-light py-1 col-4"><i>…?</i></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
								<div class="row">
									<div class="py-1 col-4">&nbsp;</div>
									<div class="py-1 col-4">&nbsp;</div>
									<div class="py-1 col-4">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col"></div>
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
						name : "r1 D1",

						sprite : {
							"0": [8.1,41],
							"1": [16.2,5.1],
							"2": [23.6,2],
							"3": [27.3,1.5],
							"4": [30.4,1.3],
							"5": [33.6,1.8],
							"6": [36.5,2.7],
							"7": [40.6,1.8],
							"8": [43.4,2.5],
							"9": [47,1.9],
							"10": [34.75,.5],
							"11": [38.05,.3],
							"12": [47.9,1]
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
									ion.sound.pause("r1 D1", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else {
									if($(this).attr("id") != 0) {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
										if(!$(ch).hasClass("show")) {
											// _p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 D1", {
												part: $(this).attr("id")
											});
										}
									} else {
											//_p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 D1", {
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