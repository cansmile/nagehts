<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Richtig oder falsch? Markieren Sie.<br>
							<small>어느 것이 옳은지 체크해보세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>						
						</h2>
						<h3>[ <small>몇 번을 들어도 번역은 나오지 않습니다.<br>문제를 모두 풀고 번역을 확인하세요.</small> ]</h3>

					</div>
				</div>

				<div class="row text-center">
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A4-1.png" style="max-width: 480px; height: auto;" alt="Sandmännchen"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
						<tr>
							<td>Anna Müller wohnt in Berlin.<span class="tran">&nbsp;<small>안나 뮐러는 베를린에 산다.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">richtig</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">falsch</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Max Fernández kommt aus Mexiko.<span class="tran">&nbsp;<small>막스 페르난데즈는 멕시코출신이다.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">richtig</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">falsch</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Max Fernández wohnt in Berlin.<span class="tran">&nbsp;<small>막스 페르난데즈는 베를린에 산다.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">richtig</label>
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">falsch</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Anna Müllers Mutter wohnt in Dresden.<span class="tran">&nbsp;<small>안나 뮐러는 드레스덴에 산다.</small></span></td>
							<td>
								<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">richtig</label>
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">falsch</label>
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
		

		
<?php include "footer.php"; ?>
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

				ion.sound({
					sounds : [{
						name : "r2 A4 A5",

						sprite : {
							"0": [8.4,24.2]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 2/",
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
					ion.sound.pause("r2 A4 A5", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r2 A4 A5", {
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

					alert(na + "번 문제를 풀어주세요.");
				} else {
					$(".tran").show();
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
						$(this).removeClass("btn btn-outline-dark btn-sm");
						$(this).addClass("font-weight-bold");

					});

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
		$("#0").show();
		$(".alert").hide();
		$("#qst-1>div.o").addClass("an");
		$("#qst-1>div.o").addClass("btn-warning");
		$("#qst-1>div.o").removeClass("btn-light");
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>