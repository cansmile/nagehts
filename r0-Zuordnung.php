<?php include "header.php"; ?>
	<body>
<?php include "inhalt.php"; ?>

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p>
								&nbsp;
							</p>
							<h1 class="display-4">C. Zuodnung<br />
								</h1>
							<h2>
							Wie viel wissen Sie über die deutsche Sprache?
							<br>
							Sortieren Sie die Wörter nach den Themen.
							</h2>
								
							<p>
								독일어에 대해 얼마나 아나요? 다음 단어들을 주제에 따라 나누세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		
	<section>
			
		<div class="container-fluid">
			<!-- 첫 번째 문제 -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 mb-1 mt">
					<h3>단어를 넣을 때는 그림이나 주제를 누르세요.</h3>
					<div class="border-3 border-danger bg-light col-sm-12 col-md-12 col-lg-12">
						[ 주제: <h6 class="badge badge-primary badge-sm my-3" disabled>Begrüße 인사 </h6>&nbsp; <h6 class="badge badge-info badge-sm my-3" disabled>Sport 스포츠 </h6>&nbsp; <h6 class="badge badge-success badge-sm my-3" disabled>Musik 음악 </h6>&nbsp; <h6 class="badge badge-danger badge-sm my-3" disabled>Getränke 음료 </h6>&nbsp; <h6 class="badge badge-warning badge-sm my-3" disabled>Familie 가족 </h6> ] <strong>여러단어 선택</strong>이 가능합니다.
					</div>
				</div>
			</div>
			
			
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12 so" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="1">
						Fußball
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark so itm" id="2">
						Opa
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="3">
						Cola
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="4">
						Klassik
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="5">
						Tennis
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="6">
						Kaffee
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="7">
						Tschüs
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="8">
						Tag
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="9">
						Bier
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark so itm" id="10">
						Baby
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="11">
						Basketball
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="12">
						K-Popmusik
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark so itm" id="13">
						Mama
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="14">
						Tee
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="15">
						Hallo
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="16">
						Rap
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark so itm" id="17">
						Papa
					</button>
				</div>
			</div>

			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
						<img src=".\images\Reihe 0\Reihe-0-1.png" style="max-width: 100%; height: auto;" class="d-block">
						<strong>Begrüßung</strong> 인사 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
						<img src=".\images\Reihe 0\Reihe-0-2.png" style="max-width: 100%; height: auto;" class="d-block">
						<strong>Sport</strong> 스포츠 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
						<img src=".\images\Reihe 0\Reihe-0-3.png" style="max-width: 100%; height: auto;" class="d-block">
						<strong>Musik</strong> 음악 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block">
						<img src=".\images\Reihe 0\Reihe-0-4.png" style="max-width: 100%; height: auto;" class="d-block">
						<strong>Getränke</strong> 음료 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-warning so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-5">
					<h2 class="btn btn-light btn-xl ttl d-block">
						<img src=".\images\Reihe 0\Reihe-0-5.png" style="max-width: 100%; height: auto;" class="d-block">
						<strong>Familie</strong> 가족 </h2>&nbsp;
				</div>
			</div>
		</div>
		<!-- 리스트 끝 -->
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
						name : "R0_Ordnen_Sie",
						
						sprite: {
							"0": [0,59.8],
							"1": [0,1.6],
							"2": [3.9,1.5],
							"3": [7.5,1.3],
							"4": [11.3,1.1],
							"5": [14.8,1.4],
							"6": [18.4,1.5],
							"7": [22.1,1.4],
							"8": [26,1.3],
							"9": [30,1.3],
							"10": [33.3,1.6],
							"11": [37.1,1.5],
							"12": [40.9,1.4],
							"13": [44.3,1.5],
							"14": [48,.8],
							"15": [51.3,1],
							"16": [54.9,1],
							"17": [58.2,1.2]
						}
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 0/",
					preload : true,
					volume : 1.0,
					multiplay : false,
					
					ended_callback: function (obj) {
						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
						};
					},
					ready_callback: function () {
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("R0_Ordnen_Sie", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("R0_Ordnen_Sie", {
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
						$("#0").show();
					}
				});
			});
		</script>
	</body>
</html>