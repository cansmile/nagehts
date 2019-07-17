<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Bitte ordnen Sie zu.
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						<small> 알맞은 도시와 국가를 써보세요. </small>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼을 눌러 듣고 알맞은 위치에 국가와 수도를 짝지우세요.</small> ]</h3>

					</div>
				</div>
				<div class="row">
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A1-1.png" style="max-width: 100%; height: auto;" alt="Eiffelturm"></div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A1-2.png" style="max-width: 100%; height: auto;" alt="Freiheitsstatue"></div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A1-3.png" style="max-width: 100%; height: auto;" alt="Griechischer Tempel"></div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A1-4.png" style="max-width: 100%; height: auto;" alt="Amphitheater"></div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A1-5.png" style="max-width: 100%; height: auto;" alt="Pyramide"></div>
				</div>
				<div class="row">
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
							Berlin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
							Washington
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
							Italien
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
							Paris
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
							China
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							Seoul
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
							Österreich
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
							Japan
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="9">
							Peking
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
							die Schweiz
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
							Korea
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
							Rom
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
							Frankreich
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="14">
							Ankara
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="15">
							die Türkei
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
							Amerika
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
							Wien
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="18">
							Tokio
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="19">
							Deutschland
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
							Bern
						</button>
					</div>
				</div>

				<div class="row" id="lsts">
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
						<table class="table text-center">
							<thead>
								<tr>
									<th class="text-center bg-info"> Länder 국가</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="align-middle" id="th-1">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-2">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-3">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-4">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-5">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-6">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-7">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-8">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-9">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-10">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-1">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
						<table class="table text-center">
							<thead>
								<tr>
									<th class="text-center bg-info"> Hauptstädte 수도 </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="align-middle" id="th-11">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-12">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-13">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-14">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-15">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-16">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-17">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-18">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-19">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
								<tr>
									<th scope="row" class="align-middle" id="th-20">
										<div class="itm-lst 1itm" style="min-height: 50px;" id="lst-2">
											<h1 class="btn btn-warning cmp btn-xl ttl d-block">
											▼ </h1>
										</div>
									</th>
								</tr>
							</tbody>
						</table>
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
		<script src="./js/taptocompare.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();

			var cp = new Array();
			var cp = [19, 16, 12, 13, 9, 11, 17, 18, 5, 20, 6, 3, 4, 15, 14, 2, 7, 8, 1, 10]

			
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r2 A1",
						
						sprite: {
							"0": [10.9,49.8],
							"1": [23.7,1.2],
							"2": [28.3,1],
							"3": [30.8,1.2],
							"4": [37.6,.8],
							"5": [39.6,1.3],
							"6": [18.9,.8],
							"7": [44,1.2],
							"8": [57.2,.9],
							"9": [41.7,.8],
							"10": [48.6,.7],
							"11": [16.9,.8],
							"12": [33,.7],
							"13": [35.2,1.3],
							"14": [54.5,1.3],
							"15": [52.6,1.2],
							"16": [26.1,1.2],
							"17": [46.3,1],
							"18": [59,1.5],
							"19": [21.7,1.1],
							"20": [50.6,.7]
						}
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 2/",
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
								ion.sound.pause("r2 A1", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r2 A1", {
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
						$(".alert").hide();

						$("#th-1").find("h1").remove();
						$("#11").appendTo($("#th-1>div"));
						$("#11").addClass("btn-block btn-light");
						$("#th-11").find("h1").remove();
						$("#6").appendTo($("#th-11>div"));
						$("#6").addClass("btn-block btn-light");

					}
				});
			});
		</script>
		<!-- ion.sound finished -->
	</body>
</html>