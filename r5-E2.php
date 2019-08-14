<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]</h2>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">
							bitter
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
							sauer
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="3">
							scharf
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="4">
							fettig
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="5">
							salzig
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="6">
							süß
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-1.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-1">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-2.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-2">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-3.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-3">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-4.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-4">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-5.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-5">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td class="align-middle text-center"><img src="./images/Reihe 5/Reihe-5-E2-6.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-6">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
			$(".tran").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

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
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(".itm-lst").each(function() {
						$(this).html($(this).find("button").html());
						$(this).addClass("font-weight-bold bg-white border rounded border-dark");
					})
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert(na+"번 문제를 풀어주세요!");
				}
			});
		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>