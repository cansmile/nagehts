<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
					<h3>[ <small>알맞은 단어를 선택하세요.</small> ]</h3>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Was bezahlen Sie?<span class="tran"><br><small>무엇을 계산하시겠어요?</small></span></td>
						</tr>
						<tr>
							<td>
								<span class="sen">Ich bezahle <span class="nu">①</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option1" autocomplete="off"><span  class="text-primary">den</span>
										</div>
										<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option2" autocomplete="off"><span  class="text-danger">die</span>
										</div>
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><span  class="text-secondary">das</span>
										</div>
									</div> Pizza.<span class="ans"></span></span>
								<span class="tran"><br><small>저는 피자를 계산하겠습니다.</small></span>
							</td>
						</tr>
						<tr>
							<td>Was bezahlen Sie?<span class="tran"><br><small>무엇을 계산하시겠어요?</small></span></td>
						</tr>
						<tr>
							<td>
								<span class="sen">Ich bezahle <span class="nu">②</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><span  class="text-primary">den</span>
										</div>
										<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option5" autocomplete="off"><span  class="text-danger">die</span>
										</div>
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option6" autocomplete="off"><span  class="text-secondary">das</span>
										</div>
									</div> Cola.<span class="ans"></span></span>
								<span class="tran"><br><small>저는 콜라를 계산하겠습니다.</small></span>
							</td>
						</tr>
						<tr>
							<td>Was bezahlen Sie?<span class="tran"><br><small>무엇을 계산하시겠어요?</small></span></td>
						</tr>
						<tr>
							<td>
								<span class="sen">Ich bezahle <span class="nu">③</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option7" autocomplete="off"><span  class="text-primary">den</span>
										</div>
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option8" autocomplete="off"><span  class="text-danger">die</span>
										</div>
										<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option9" autocomplete="off"><span  class="text-secondary">das</span>
										</div>
									</div> Steak <span class="ans"></span></span>
								<span class="sen">und <span class="nu">④</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
										<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option10" autocomplete="off"><span  class="text-primary">den</span>
										</div>
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11" autocomplete="off"><span  class="text-danger">die</span>
										</div>
										<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option12" autocomplete="off"><span  class="text-secondary">das</span>
										</div>
									</div> Wein.<span class="ans"></span></span>
								<span class="tran"><br><small>저는 스테이크와 와인을 계산하겠습니다.</small></span>
							</td>
						</tr>
					</tbody>
				</table></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table text-center">
						<thead>
							<tr>
								<th colspan="4" class="border border-white ">bestimmter Artikel im Nominativ und Akkusativ</th>
							</tr>
							<tr>
								<th scope="col" width="25%" class="border border-white ">&nbsp;</th>
								<th scope="col" width="25%" class="border border-white bg-light text-primary">m</th>
								<th scope="col" width="25%" class="border border-white bg-light text-danger">f</th>
								<th scope="col" width="25%" class="border border-white bg-light text-purple">n</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="border border-white bg-light" scope="row">Nominativ</th>
								<td class="border border-white text-primary"><strong>der</strong> Salat</td>
								<td class="border border-white text-danger"><strong>die</strong> Pizza</td>
								<td class="border border-white text-purple"><strong>das</strong> Steak</td>
							</tr>
							<tr>
								<th class="border border-white bg-light" scope="row">Akkusativ</th>
								<td class="border border-white text-primary"><strong>den</strong> Salat</td>
								<td class="border border-white text-danger"><strong>die</strong> Pizza</td>
								<td class="border border-white text-purple"><strong>das</strong> Steak</td>
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

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".nu").hide();

			$(document).ready(function() {
				ion.sound({
					sounds : [{
						name : "dingdongdang",
					}, {
						name : "Cartoon_Boing",
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay: false,
	});

						
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
							$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
						} else {
							$(this).addClass("btn-light");
						};
						$(this).remove();
					});
					$(".tran").show();
					$(".nu").show();
					$(".q").hide();
					


					$(this).removeClass("btn-light ");

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
						var st = "쓰읍~ 다시 해 보실까요?";
						var cl = "primary";
					} else {
						var st = "좀 더 분발해 주세요~";
						var cl = "danger";
					}

					$(this).addClass("btn-" + cl + " text-" + tcl);
					$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
				};
			});				
			});
			
		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>