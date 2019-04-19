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
								듣고 따라 말하세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
							❚❚
						</button>
						</p>
				</div>
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
							"4": [26.5,1.9]
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
						$(".alert").hide();
						}
					})
				});

		</script>

		<!-- ion.sound finished -->
	</body>
</html>