<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und sprechen Sie nach.<br>
							<small>듣고 따라 하세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" class="text-center" height="100px"><img src="./images/Reihe 1/Reihe-1-D1-1.png" alt="Deutschunterricht" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Guten Tag, ich heiße Heike Klein. Ich bin Ihre Deutschlehrerin.<span class="tran"><br><small>안녕하세요, 저는 하이케 클라인이라고 해요. 저는 여러분의 독일어 선생님에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-success">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Studenten</strong><span class="tran"><br><small><strong>학생들</strong></small></span></div>
										<div class="col-10">Guten Tag, Frau Klein.<span class="tran"><br><small>안녕하세요, 클라인 선생님.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Wer ist Hyun Kim?<span class="tran"><br><small>김현이 누구인가요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-info">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Hyun</strong><span class="tran"><br><small><strong>현</strong></small></span></div>
										<div class="col-10">Das bin ich.<span class="tran"><br><small>저에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Ist Minjung Kim da?<span class="tran"><br><small>김 민정은 있나요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="6" class="so btn btn-outline-success">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Studenten</strong><span class="tran"><br><small><strong>학생들</strong></small></span></div>
										<div class="col-10">Nein, Minjung ist nicht da.<span class="tran"><br><small>아뇨, 민정이는 없어요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Sind Sie Bokum Park?<span class="tran"><br><small>박보검 인가요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>William</strong><span class="tran"><br><small><strong>윌리엄</strong></small></span></div>
										<div class="col-10">Nein, ich heiße William Park.<span class="tran"><br><small>아뇨, 저는 윌리엄박이에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Oh, Entschuldigung!<span class="tran"><br><small>아, 실례했네요!</small></span></div>
									</div>
								</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	<div class="container">


		<div class="row">
			<table class="table border-0">
				<tbody>
					<tr>
						<th scope="row" class="border-top-0">
							<div class="row text-center">
								<div class="col-3"><span class="p-1 m-1 px-2 bg-lime">TIPP</span></div>
								<div class="col-3">da <small>이것</small></div>
								<div class="col-3">nicht <small>아니다</small></div>
								<div class="col-3">Entschldigung <small>실례합니다</small></div>
							</div></th>
					</tr>
				</tbody>
			</table>
		</div>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});

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
							"9": [47,1.9]
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
						// 재상이 끝날 때 2번 이상이면 번역 보이기
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
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};
	
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r1 D1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r1 D1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r1 D1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r1 D1", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>