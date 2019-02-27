<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<header>
			<div class="jumbotron">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">3. Wie geht es dir?<br>Hören Sie und sprechen Sie nach.</h1>
							<h2>
								어떻게 지내? 듣고 따라하세요.
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
									Hallo, Maria!
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
							<div class="card-body">안녕, 마리아!</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									Hallo, Joseph!
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
							<div class="card-body">안녕, 요셉!</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									Wie geht es dir?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
							<div class="card-body">어떻게 지내?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									Danke, gut. Und dir?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
							<div class="card-body">고마워, 좋아. 너는?</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="5">
									Es geht. Danke.
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms">
							<div class="card-body">그럭저럭 지내. 고마워.</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-secondary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" area-expanded="false" aria-controls="collapseSix" id="6">
									Wie geht es dir?
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionitms">
							<div class="card-body">어떻게 지내니?</div>
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
						name : "r1 C3",

						sprite : {
							"0": [3.9,20.1],
							"1": [12.4,1.4],
							"2": [15,1.1],
							"3": [17.1,1.2],
							"4": [19.2,2.3],
							"5": [22.2,1.8],
							"6": [3.9,1.4]
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
									ion.sound.pause("r1 C3", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else {
									if($(this).attr("id") != 0) {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
										if(!$(ch).hasClass("show")) {
											// _p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 C3", {
												part: $(this).attr("id")
											});
										}
									} else {
											//_p 붙어 있지 않으면 id 그대로 재생
											ion.sound.play("r1 C3", {
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