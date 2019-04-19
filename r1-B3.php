<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2>Hören Sie und sprechen Sie nach.
							<small>듣고 따라하세요.</small>
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
							HV
							</button><button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
								❚❚
							</button>
						</h2>
							<h3><small>2번 재생하면 번역이 나옵니다.</small></h3>
							</p>
					</div>
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" height="100px" class="text-center display-4 text-white bg-success" colspan="2">Dialog</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="itm btn btn-outline-danger">▶</button></th>
									<td>Hallo! Ich bin Maria. Und du? Wie heißt du?<span class="tran"><br><small>안녕! 난 마리아라고해. 너는? 네 이름은 뭐야?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="itm btn btn-outline-danger">▶</button></th>
									<td>Hallo! Ich heiße Joseph.<span class="tran"><br><small>안녕! 난 요셉이라고해.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="itm btn btn-outline-danger">▶</button></th>
									<td>Freut mich, Joseph!<span class="tran"><br><small>반가워, 요셉!</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="itm btn btn-outline-danger">▶</button></th>
									<td>Freut mich auch, Maria!<span class="tran"><br><small>나도 반가워, 마리아!</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col"></div>
					<div class="col-11 text-center">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-12">
								<div class="row">
									<div class="bg-light py-1 col-3 border-right border-dark">Wie</div>
									<div class="bg-light py-1 col-3 border-right border-dark"><i>heiß<strong>en</strong></i></div>
									<div class="bg-light py-1 col-6">Sie?</div>
								</div>
								<div class="row">
									<div class="py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="py-1 col-3 border-right border-dark"><i>heiß<strong>t</strong></i></div>
									<div class="py-1 col-6">du?</div>
								</div>
								<div class="row">
									<div class="bg-light py-1 col-3 border-right border-dark">&nbsp;</div>
									<div class="bg-light py-1 col-3 border-right border-dark"><i>ist</i></div>
									<div class="bg-light py-1 col-6">dein / Ihr Name?</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-12">
								<div class="row">
									<div class="py-1 col-8 border-right border-dark">Ich</div>
									<div class="py-1 col-4"><i>heiß<strong>e</strong></i>…</div>
								</div>
								<div class="row">
									<div class="bg-light py-1 col-8 border-right border-dark">Ich</div>
									<div class="bg-light py-1 col-4"><i>bin…</i></div>
								</div>
								<div class="row">
									<div class="py-1 col-8 border-right border-dark">Mein Name</div>
									<div class="py-1 col-4"><i>ist…</i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</section>
		

		
		<!-- 꼬리말 시작 -->
		<footer class="text-center mt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<p>
							Copyright © Na, geht's? All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- 꼬리말 끝 -->
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
			$(".tran").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".itm").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r1 B3",

						sprite : {
							"0": [3.2,24.5],
							"1": [11.1,5.2],
							"2": [19.6,2],
							"3": [22.7,1.5],
							"4": [25,1.6]
						}
					}],
					path : "sounds/Reihe 1/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}

					}, ready_callback: function () {
							$(".itm").on("click", function () {
								if($(this).attr("id").substr(-2) == "_p") {
									// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r1 B3", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else if($(this).html() == "▶") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.play("r1 B3", {
										part: $(this).attr("id")
									});
									$(this).html("❚❚");
								} else if($(this).html() == "❚❚") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r1 B3", {
										part: $(this).attr("id")
									});
									$(this).html("▶");
								} else {
									// _p 붙어 있지 않으면 id 그대로 재생
									ion.sound.play("r1 B3", {
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
						}
					})
				});

		</script>

		<!-- ion.sound finished -->
	</body>
</html>