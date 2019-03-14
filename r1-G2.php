<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und ordnen Sie zu.
							<small> 듣고 그림과 내용을 연결해 보세요.</small>
							<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
				</div>
				<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="1">
							<div class="display-4">1</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="2">
							<div class="display-4">2</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="3">
							<div class="display-4">3</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="4">
							<div class="display-4">4</div>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="5">
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
					<table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="18">Dialog 1</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">1</button></th>
							<td>
								Auf Wiedersehen!
								<span class="tran"><br><small>안녕히 계세요!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="7" class="so btn btn-outline-success">2</button></th>
							<td>
								Auf Wiedersehen!
								<span class="tran"><br><small>안녕히 계세요!</small></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="col-auto">
					<table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="19">Dialog 2</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">1</button></th>
							<td>
								Tschüs, Eva! Ich habe dich lieb!
								<span class="tran"><br><small>잘가, 에바! 사랑해!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="9" class="so btn btn-outline-success">2</button></th>
							<td>
								Tschüs, Tim! Ich liebe dich auch! Gute Reise!
								<span class="tran"><br><small>안녕, 팀! 나도 사랑해! 여행 잘해!</small></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="col-auto">
					<table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="20">Dialog 3</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="10" class="so btn btn-outline-primary">1</button></th>
							<td>
								Guten Tag, Frau Kim!
								<span class="tran"><br><small>안녕하세요, 김 선생님.</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="11" class="so btn btn-outline-success">2</button></th>
							<td>
								Guten Tag, Herr Cho!
								<span class="tran"><br><small>안녕하세요, 조 선생님!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="12" class="so btn btn-outline-primary">3</button></th>
							<td>
								Willkommen in Dresden! Das ist für Sie!
								<span class="tran"><br><small>드레스덴에 오신 것을 환영해요! 이거 받으세요!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="13" class="so btn btn-outline-success">4</button></th>
							<td>
								Oh, Danke. Das ist nett!
								<span class="tran"><br><small>오, 고마워요. 정말 친절하시네요!</small></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="col-auto">
					<table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="21">Dialog 4</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="14" class="so btn btn-outline-primary">1</button></th>
							<td>
								Hallo, Julia!
								<span class="tran"><br><small>안녕, 율리아!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="15" class="so btn btn-outline-success">2</button></th>
							<td>
								Hallo, Martin! Lange nicht gesehen.
								<span class="tran"><br><small>안녕, 마틴! 오랫만이다.</small></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="col-auto">
					<table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="22">Dialog 5</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="16" class="so btn btn-outline-primary">1</button></th>
							<td>
								Mama! Mama!
								<span class="tran"><br><small>엄마, 엄마!</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="17" class="so btn btn-outline-success">2</button></th>
							<td>
								Oh, Mein Schatz! Hast du Hunger?
								<span class="tran"><br><small>오, 우리 강아지! 배고프니?</small></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
		<!-- 정답확인 버튼 끝 -->

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
			$(".tran").hide();
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
							"17": [81.9,2.5],
							"18": [8.7,7.7],
							"19": [18.8,15.7],
							"20": [40.4,19],
							"21": [61.5,11.6],
							"22": [75.1,10]
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
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r1 U2", {
									part: $(this).attr("id")
								});
							}
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
								};
							});

									// 정답확인
			$("#chk").on("click", function() {
				if ($("#itms").find("button").length > 0) {
					var na = "";
					$(".itm").each(function() {
						if ($(this).parent("#itms").length) {
							if (na != "") {
								na += ", ";
							}
							na += $(this).attr("id");
						};
					});

					alert(na + "번 항목을 넣어주세요.");
				} else {
					$(".pop").each(function() {
						$(this).removeClass("btn-info");

						if ($(this).hasClass("o") && $(this).hasClass("an")) {
							$(this).removeClass("btn-warning");
							$(this).addClass("btn-success");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-primary");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-warning");
						} else {
							$(this).addClass("btn-light");
						};
					});
					$(".tran").show();

					$(this).removeClass("btn-light ");
					$(this).html("<h4>문제를 모두 맞추셨네요!<br>훌륭합니다!</h4>");
					$(this).addClass("btn-primary");

				};
			});

					// 준비되면 HV 보이기
					$("#0").show();
					$(".alert").hide();

					}
				});
				
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>