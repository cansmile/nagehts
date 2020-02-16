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
						<h2>Der Kellner oder der Gast?<br>
							<small>종업원? 손님?</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button><br>
						[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 선택하세요.</small> ]

						</h2>
						<h3>[ <small>몇 번을 들어도 번역은 나오지 않습니다.<br>문제를 모두 풀고 번역을 확인하세요.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
						<tr>
							<td width="10%"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
							<td>Ein Glas Wasser, bitte.<span class="tran"><br>&nbsp;<small>물 한 잔 주세요.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">Kellner</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Gast</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td width="10%"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
							<td>Herr Ober, wir möchten gern bestellen.<span class="tran"><br>&nbsp;<small>여기 주문할게요.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">Kellner</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Gast</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td width="10%"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
							<td>Ja, sofort. Was bekommen Sie?<span class="tran"><br>&nbsp;<small>네, 바로 가겠습니다. 뭘 드시겠습니까?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">Kellner</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Gast</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td width="10%"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
							<td>Eine Schweinehaxe mit Sauerkraut, bitte.<span class="tran"><br>&nbsp;<small>자우어크라우트가 있는 슈바이네학세요.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">Kellner</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Gast</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td width="10%"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
							<td>Ich nehme eine Gulaschsuppe und einen Salat.<span class="tran"><br>&nbsp;<small>굴라쉬수프와 샐러드요.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option11" autocomplete="off"><label for="option9">Kellner</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option12" autocomplete="off"><label for="option10">Gast</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td width="10%"><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
							<td>Und was möchten Sie trinken?<span class="tran"><br>&nbsp;<small>그러면 음료는 뭘 드시겠습니까?</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option13" autocomplete="off"><label for="option11">Kellner</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option14" autocomplete="off"><label for="option12">Gast</label>
									</div>
								</div>
							</td>
						</tr>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
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

				ion.sound({
					sounds : [{
						name : "r5 D3 Wer sagt das",

						sprite : {
							"0": [3.84,77.6],
							"1": [13,2.2],
							"2": [21.48,4.33],
							"3": [33.51,4.33],
							"4": [45.14,3.35],
							"5": [66.53,3.46],
							"6": [78.16,3.44]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 5/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
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
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 D3 Wer sagt das", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r5 D3 Wer sagt das", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
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

					alert("모든 문제를 풀어주세요.");
					// alert(na + "번 문제를 풀어주세요.");
				} else {
					$(".tran").show();
					$(".pop").each(function() {
						$(this).removeClass("btn-info");

						if ($(this).hasClass("o") && $(this).hasClass("an")) {
							$(this).removeClass("btn-warning");
							$(this).addClass("btn-success");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-warning font-weight-bold");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-danger");
						} else {
							$(this).addClass("btn-light");
						};

						
					});

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".btn-success").length; // 맞춘 항목 수
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
					$(".tran").show();
				};
			});
		$("#0").show();
		$(".alert").hide();
		// $("#qst-1>div.o").addClass("an");
		// $("#qst-1>div.o").addClass("btn-warning");
		// $("#qst-1>div.o").removeClass("btn-light");
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>