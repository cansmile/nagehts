<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

<section>
	<div class="container">
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und ergänzen Sie ↗ oder ↘.<br>
						<small>듣고 ↗ 또는 ↘를 채우세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
					</button>
					</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">번호</button> 버튼을 눌러 2번 재생이 끝나면 번역이 나옵니다.</small> ]</h3>
						<h3>[ <small>문제를 모두 풀고 정답확인을 해도 정답과 함께 번역이 나옵니다.</small> ]</h3>

			</div>
		</div>
		<div class="row">
			<div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="qst">
				<table class="table table-light text-center">
						<tr>
							<th class="bg-light" scope="col">번호</th>
							<th class="bg-light" scope="col">문장</th>
							<th class="bg-light" scope="col">억양</th>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="1" class="so btn btn-secondary">1</button></th>
							<td>Wie ist ihr Name?<span class="tran"><br><small>당신의 이름은 무엇인가요?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="2" class="so btn btn-secondary">2</button></th>
							<td>Ich heiße Maria Kim.<span class="tran"><br><small>저는 마리아 킴입니다.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="3" class="so btn btn-secondary">3</button></th>
							<td>Mina. Und du?<span class="tran"><br><small>미나야. 너는?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">↗</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="4" class="so btn btn-secondary">4</button></th>
							<td>Ja, mein Name ist Kim.<span class="tran"><br><small>응, 나의 이름은 김이야.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="5" class="so btn btn-secondary">5</button></th>
							<td>Wie geht es dir?<span class="tran"><br><small>어떻게 지내?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">↘</label>
									</div>
								</div>
							</td>
						</tr>
					</table>
			</div>
			<div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="qst">
				<table class="table table-light text-center">
						<tr>
							<th class="bg-light" scope="col">번호</th>
							<th class="bg-light" scope="col">문장</th>
							<th class="bg-light" scope="col">억양</th>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="6" class="so btn btn-secondary">6</button></th>
							<td>Danke, gut. Und dir?<span class="tran"><br><small>고마워, 좋아. 너는?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">↗</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="7" class="so btn btn-secondary">7</button></th>
							<td>Was machen Sie ?<span class="tran"><br><small>당신은 무슨 일을 하시나요?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="8" class="so btn btn-secondary">8</button></th>
							<td>Sind Sie Studentin?<span class="tran"><br><small>당신은 학생인가요?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">↗</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="9" class="so btn btn-secondary">9</button></th>
							<td>Woher kommen Sie?<span class="tran"><br><small>어디에서 오셨나요?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">↗</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">↘</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="10" class="so btn btn-secondary">10</button></th>
							<td>Kommen Sie aus Korea?<span class="tran"><br><small>당신은 한국에서 오셨나요?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">↗</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">↘</label>
									</div>
								</div>
							</td>
						</tr>
					</table>
			</div>
		</div>
		<div class="row">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
		</div>

		<!-- 정답확인 버튼 끝 -->
	</div>
</section>

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
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

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});
				ion.sound({
					sounds : [{
						name : "r1 U11",

						sprite : {
							"0": [3.8,61],
							"1": [11,1.9],
							"2": [17.5,1.7],
							"3": [23.2,2.3],
							"4": [29,2.7],
							"5": [35.7,1.5],
							"6": [40.7,2.7],
							"7": [46.6,1.3],
							"8": [51.7,1.9],
							"9": [57.7,1.4],
							"10": [62.5,2.1]
						}
					},{
						name : "dingdongdang",
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
							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();									
							}

						};
					}, ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
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
					ion.sound.pause("r1 U11", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).attr("id") == 0) {
							//_p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r1 U11", {
								part: $(this).attr("id")
							});
				} else {
					if($(this).parent()[0].tagName == "H5") {
						var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
					}
						if(!$(ch).hasClass("show") || !$(this).hasClass("btn-secondary")) {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r1 U11", {
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


			// 정답확인
			$("#chk").on("click", function() {
				if ($(".an").length < $(".q").length) {
					var na = "";
					$(".q").each(function() {
						if (!$(this).find("div").hasClass("an")) {
							if (na != "") {
								na += ", ";
							}
							na += $(this).attr("id").substr(4);
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
							$(this).addClass("btn-warning text-dark");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-danger");
						} else {
							$(this).addClass("btn-light");
						};

						
					});

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
						var st = "쓰읍~ 다시 해 보실까요";
						var cl = "primary";
					} else {
						var st = "좀 더 분발해 주세요";
						var cl = "danger";
					}

					$(this).addClass("btn-" + cl + " text-" + tcl);
					$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

					$(this).attr("id","done");

					$(this).removeClass("btn-light ");
					$(".tran").show();
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {} else if ($(".btn-success").length == $(".q").length) {} else { };
				};
			});
		$("#0").show();
		$(".alert").hide();
		$("#option2").parent().addClass("an btn-warning");
		$("#option2").parent().removeClass("btn-light");
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>