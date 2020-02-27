<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2>Hören Sie und sprechen Sie nach.
							<small>듣고 따라하세요.</small>
							<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
							</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
								❚❚
							</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>

							</p>
					</div>
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
									<td>
										<span class="sen">Hallo! Ich <span class="nu">①</span>
										<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option1" autocomplete="off">ist
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option2" autocomplete="off">bin
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off">sind
										</div>
									</div> Maria. Und du? Wie heißt du?<span class="ans">&nbsp;</span></span>
								<span class="tran"><br><small>안녕! 난 마리아라고해. 너는? 네 이름은 뭐야?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
									<td>
								<span class="sen">Hallo! Ich <span class="nu">②</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off">heißen
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option5" autocomplete="off">heißt
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option6" autocomplete="off">heiße
										</div>
									</div> Joseph.<span class="ans">&nbsp;</span></span>
								<span class="tran"><br><small>안녕! 난 요셉이라고해.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
									<td>Freut mich, Joseph!<span class="tran"><br><small>반가워, 요셉!</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
									<td>Freut mich auch, Maria!<span class="tran"><br><small>나도 반가워, 마리아!</small></span></td>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".nu").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
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
						});
				
						// 팝업 내용 사라지기
						$(".pop").popover().click(function() {
							setTimeout(function() {
								$(".pop").popover('hide');
							}, 500);
						});

						// 정답확인
						$("#chk").on("click", function() {
							if ($(".an").length < $(".q").length) {
								var na = "";
								$(".q").each(function() {
									if (!$(this).find("div").hasClass("an")) {
										if (na != "") {
											na += ", ";
										}
										na += $(this).attr("id").substr(-1);
									};
								});

								alert("모든 문제를 풀어주세요.");
								// alert(na + "번 문제를 풀어주세요.");
							} else {
								$(".pop").each(function() {
									$(this).removeClass("btn-info");

									if ($(this).hasClass("o") && $(this).hasClass("an")) {
										$(this).removeClass("btn-warning");
										$(this).addClass("btn-success");
										$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-success font-weight-bold");
										$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
									} else if ($(this).hasClass("o")) {
										$(this).addClass("btn-<?php echo($color); ?>");
										$(this).closest(".sen").find(".ans").html($.trim($(this).closest(".sen").find(".o").text()));
										$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-danger font-weight-bold");
										$(this).closest(".sen").find(".ans").addClass("rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2");
									} else if ($(this).hasClass("an")) {
										$(this).addClass("btn-warning");
										$(this).closest("td").find(".nu").text($.trim($(this).text()));
									} else {
										$(this).addClass("btn-light");
									};
									$(this).remove();
								});
								$(".tran").show();
								$(".nu").show();
								$(".q").hide();
								

								// 정답 확인 div 상자 배경색 속성 없애기
								$(this).removeClass("btn-light ");

								var qa = $(".q").length; // 전체 문항 수
								var qr = $(".bg-success").length; // 맞춘 항목 수
								var pe = (qr / qa) * 100; // 정답 비율
								var tcl = "white"; // 기본 문자색

								// 분류 기준은 100%, 80%, 60%, 40%
								if(pe > 99) {
									var st = "원어민이세요?";
									var cl = "lime";
									var tcl = "dark";
								} else if(pe > 74) {
									var st = "어! 좀 하시는데요~^^";
									var cl = "success";
								} else if(pe > 49) {
									var st = "쓰읍~ 다시 해 보실까요!";
									var cl = "primary";
								} else {
									var st = "좀 더 분발해 주세요";
									var cl = "danger";
								}

								$(this).addClass("btn-" + cl + " text-" + tcl);
								$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

								$(this).attr("id","done");
								
							};
						});

							$(".so").on("click", function () {
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
	<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>