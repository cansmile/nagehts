<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>

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
								Ich bezahle <span class="nu">①</span>
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
								</div> Pizza.
								<span class="tran"><br><small>저는 피자를 계산하겠습니다.</small></span>
							</td>
						</tr>
						<tr>
							<td>Was bezahlen Sie?<span class="tran"><br><small>무엇을 계산하시겠어요?</small></span></td>
						</tr>
						<tr>
							<td>
								Ich bezahle <span class="nu">②</span>
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
								</div> Cola.
								<span class="tran"><br><small>저는 콜라를 계산하겠습니다.</small></span>
							</td>
						</tr>
						<tr>
							<td>Was bezahlen Sie?<span class="tran"><br><small>무엇을 계산하시겠어요?</small></span></td>
						</tr>
						<tr>
							<td>
								Ich bezahle <span class="nu">③</span>
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
								</div> Steak 
								und <span class="nu">④</span>
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
								</div> Wein.
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
		<script src="./js/jquery-3.3.1.min.js"></script>
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
						name : "Bama_Country_Country",
					}, {
						name : "Cartoon_Boing",
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay: false,
	});

						
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

					alert("모든 문제를 풀어주세요.");
					// alert(na + "번 문제를 풀어주세요.");
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
					$(".nu").show();
					$(".q").hide();
					
					$("span").each(function () {
						if($(this).text() == "①") {
							var tt = $("#qst-1>div.o").text();
						} else if($(this).text() == "②") {
							var tt = $("#qst-2>div.o").text();
						} else if($(this).text() == "③") {
							var tt = $("#qst-3>div.o").text();
						} else if($(this).text() == "④") {
							var tt = $("#qst-4>div.o").text();
						}
					$(this).text(tt);
					$(this).addClass("font-weight-bold");
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
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>