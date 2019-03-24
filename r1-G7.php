<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

<section>
	<div class="container">
		<div class="row"></div>
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="my-3 col-sm-12 col-md-12 col-lg-12" id="qst">
				<table class="table table-light text-center">
						<tr>
							<th scope="row">1</th>
							<td>Ich heiße Tim, und <span class="nu">①</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">du</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Sie</label>
									</div>
								</div>
							?<span class="tran"><br><small>나는 팀이라고 해. <strong>너</strong>는?</small></span></td>
							<td>Mina.<span class="tran"><br><small>미나.</small></span></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Wie heißen <span class="nu">②</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">du</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Sie</label>
									</div>
								</div>
							?<span class="tran"><br><small><strong>당신</strong>의 이름은 무엇인가요?</small></span></td>
							<td>Mein Name ist Schumacher.<span class="tran"><br><small>나의 이름은 슈마허에요.</small></span></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Ich heiße Lee, Und <span class="nu">③</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">du</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Sie</label>
									</div>
								</div>
								?<span class="tran"><br><small>나는 이라고 해. <strong>너</strong>는?</small></span></td>
							<td>Park, Anna Park.<span class="tran"><br><small>박, 안나 박이야.</small></span></td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>Hallo, ich bin Max! Und wie heißt <span class="nu">④</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">du</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Sie</label>
									</div>
								</div>
							?<span class="tran"><br><small>안녕, 나는 막스야! <strong>너</strong>는 이름이 뭐니?</small></span></td>
							<td>Ich heiße Susanne!<span class="tran"><br><small>나는 수잔이야!</small></span></td>
						</tr>
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
			$(".tran").hide();
			$(".nu").hide();
			
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "Bama_Country_Country"
					}, {
						name : "Cartoon_Boing"
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay : true,
					ready_callback: function() {

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
							$(this).addClass("btn-primary");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-warning");
						} else {
							$(this).addClass("btn-light");
						};

						
					});

					$("span").each(function () {
						if($(this).text() == "①") {
							var iq = $("#qst-1>div.o").find("label").text();
						} else if($(this).text() == "②") {
							var iq = $("#qst-2>div.o").find("label").text();
						} else if($(this).text() == "③") {
							var iq = $("#qst-3>div.o").find("label").text();
						} else if($(this).text() == "④") {
							var iq = $("#qst-4>div.o").find("label").text();
						}
						$(this).text(iq);
						$(this).addClass("font-weight-bold");

					});

					$(".tran").show();
					$(".nu").show();
					$(".q").hide();

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-success");

					} else {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});
			$(".alert").hide();
		}
	});
});
	
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>