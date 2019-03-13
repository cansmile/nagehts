<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und ergänzen Sie „?“ oder „.“.<br>
						<small>빈칸에 물음표(?) 또는 마침표(.)를 넣으세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
						HV
					</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
						❚❚
					</button>
					</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
				<div class="accordion" id="accordionitms1">
					<div class="display-4 text-center mb-2">Dialog 1</div>
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									Ich heiße Martin <span class="btn btn-outline-dark btn-sm">①</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms1">
							<div class="card-body">저는 마틴이에요 <span class="btn btn-outline-dark btn-sm">①</span></div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
							<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									Und wie heißt du <span class="btn btn-outline-dark btn-sm">②</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms1">
							<div class="card-body">당신은요 <span class="btn btn-outline-dark btn-sm">②</span></div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									Tim <span class="btn btn-outline-dark btn-sm">③</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms1">
							<div class="card-body">팀 <span class="btn btn-outline-dark btn-sm">③</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
				<div class="accordion" id="accordionitms2">
					<div class="display-4 text-center mb-2">Dialog 2</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-success mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									Wie heißen Sie <span class="btn btn-outline-dark btn-sm">④</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms2">
							<div class="card-body">당신의 이름은 무엇인가요 <span class="btn btn-outline-dark btn-sm">④</span></div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-success mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									Mein Name ist Sauer <span class="btn btn-outline-dark btn-sm">⑤</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms2">
							<div class="card-body">저의 이름은 자우어에요 <span class="btn btn-outline-dark btn-sm">⑤</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
				<div class="accordion" id="accordionitms3">
					<div class="display-4 text-center mb-2">Dialog 3</div>
					<div class="card">
						<div class="card-header" id="heading6">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse6" area-expanded="false" aria-controls="collapse6" id="6">
									Ich heiße Esswein <span class="btn btn-outline-dark btn-sm">⑥</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse6" aria-divledby="heading6" data-parent="#accordionitms3">
							<div class="card-body">제 이름은 에쓰바인이에요 <span class="btn btn-outline-dark btn-sm">⑥</span></div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading7">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse7" area-expanded="false" aria-controls="collapse7" id="7">
									Und Sie <span class="btn btn-outline-dark btn-sm">⑦</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse7" aria-divledby="heading7" data-parent="#accordionitms3">
							<div class="card-body">당신은요 <span class="btn btn-outline-dark btn-sm">⑦</span></div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading8">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 so btn-block" type="button" data-toggle="collapse" data-target="#collapse8" area-expanded="false" aria-controls="collapse8" id="8">
									Anna, Anna Kim <span class="btn btn-outline-dark btn-sm">⑧</span>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse8" aria-divledby="heading8" data-parent="#accordionitms3">
							<div class="card-body">안나, 안나 킴이에요 <span class="btn btn-outline-dark btn-sm">⑧</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="my-3 col-sm-12 col-md-12 col-lg-12" id="qst">
				<table class="table table-light">
					<thead>
						<tr>
							<th scope="col">&nbsp;</th>
							<th scope="col" colspan="3" class="text-center border border-dark border-bottom-0">Dialog 1</th>
							<th scope="col" colspan="2" class="text-center border border-dark border-bottom-0">Dialog 2</th>
							<th scope="col" colspan="3" class="text-center border border-dark border-bottom-0">Dialog 3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Q</th>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-right-0">①</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">②</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-left-0">③</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-right-0">④</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-left-0">⑤</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-right-0">⑥</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">⑦</td>
							<td class="text-center border border-dark border-top-0 border-bottom-0 border-left-0">⑧</td>
						</tr>
						<tr>
							<th scope="row">A</th>
							<td class="text-center border border-dark border-top-0 border-right-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option1" autocomplete="off">.
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-top-0 border-left-0 border-right-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off">.
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-top-0 border-left-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option5" autocomplete="off">.
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-top-0 border-right-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7" autocomplete="off">.
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-left-0 border-top-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option9" autocomplete="off">.
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option10" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-right-0 border-top-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option13" autocomplete="off">.
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option14" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-left-0 border-right-0 border-top-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option15" autocomplete="off">.
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option16" autocomplete="off">?
									</div>
								</div>
							</td>
							<td class="text-center border border-dark border-left-0 border-top-0">
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option17" autocomplete="off">.
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option18" autocomplete="off">?
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
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
			$(".collapse").collapse("hide");

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 U3",

						sprite : {
							"0": [3.8,34.5],
							"1": [12.7,1.6],
							"2": [17,1.5],
							"3": [20.1,.9],
							"4": [23.2,1.2],
							"5": [26.4,1.8],
							"6": [29.6,2],
							"7": [33,1],
							"8": [35.8,2.5]
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

					alert(na + "번 문제를 풀어주세요.");
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

					$("span").each(function () {
						if($(this).text() == "①") {
							$(this).parent().append($("#qst-1>div.o").text());
							$(this).remove();
						} else if($(this).text() == "②") {
							$(this).parent().append($("#qst-2>div.o").text());
							$(this).remove();
						} else if($(this).text() == "③") {
							$(this).parent().append($("#qst-3>div.o").text());
							$(this).remove();
						} else if($(this).text() == "④") {
							$(this).parent().append($("#qst-4>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑤") {
							$(this).parent().append($("#qst-5>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑥") {
							$(this).parent().append($("#qst-6>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑦") {
							$(this).parent().append($("#qst-7>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑧") {
							$(this).parent().append($("#qst-8>div.o").text());
							$(this).remove();
						}
					});

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-primary");

					} else {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});

		
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								ion.sound.pause("r1 U3", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else if($(this).attr("id") == 0) {
										//_p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U3", {
											part: $(this).attr("id")
										});
							} else {
								if($(this).parent()[0].tagName == "H5") {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
								}
									if(!$(ch).hasClass("show") || !$(this).hasClass("btn-secondary")) {
										// _p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U3", {
											part: $(this).attr("id")
										});
									}
								};
								
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
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