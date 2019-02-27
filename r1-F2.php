<?php include "header.php"; ?>
	<body>
		<style>
			button.itm {
				word-break: keep-all;
			}
		</style>
<?php include "nav.php"; ?>
		<header>
			<div class="jumbotron">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">2. Wie heißen die Zahlen?</h1>
							<h2>
								다음 숫자들은 어떻게 불리나요?
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
			</div>
		</header>

	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="mb-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans1 so itm" id="1">
						1
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans2 so itm" id="2">
						 2
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans3 so itm" id="3">
						3
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans6 so itm" id="4">
						4
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans7 so itm" id="5">
						5
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans4 so itm" id="6">
						6
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans8 so itm" id="7">
						7
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans5 so itm" id="8">
						8
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans9 so itm" id="9">
						9
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans10 so itm" id="10">
						10
					</button>
				</div>
			</div>
			<!-- 아이템들 끝 -->

			<!-- 리스트 시작 -->
			<div class="row text-center" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-1">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>eins</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-2">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>zwei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-3">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>drei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-4">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>sechs</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-5">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>acht</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-6">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>vier</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-7">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>fünf</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-8">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>sieben</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-9">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>neun</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-auto my-4 mx-1" id="lst-10">
					<h2 class="btn btn-success btn-xl ttl d-block"><strong>zehn</strong></h2>
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
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r1 F1", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r1 F1", {
									part: $(this).attr("id")
								});

								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
								};
							};
						});
						
						// 준비되면 HV 보이기
						// $("#0").show();
					}
					})

				$("#1").insertAfter("#lst-1>h2");
				$(".itm-lst>button").addClass("btn-block btn-light");

				});

		</script>

		<!-- ion.sound finished -->
	</body>
</html>