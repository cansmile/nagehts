<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
							a. In Daejeon.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
							b. Nein, in Suwon.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
							c. Ja, ich spreche gut Englisch.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="4">
							d. Nein, ich wohne in Jung-Gu.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
							e. Nein, ich komme nicht aus Finnland.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="6">
							f. Ich wohne auch in Seoul.
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="7">
							g. Ich komme aus Brasilien.
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
							<tbody>
								<tr>
									<th class="bg-light" scope="row" width="10%">1</th>
									<td>Wohnst du in Yeosu?<br><span class="tran">&nbsp;<small>너는 여수에서 사니?</small></span></td>
									<td width="40%">
										<div class="itm-lst 1itm" id="lst-1">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>아니 난 수원에.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">2</th>
									<td>Kommst du aus Finnland?<br><span class="tran">&nbsp;<small>넌 핀란드 출신이니?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-2">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>아니, 나는 필란드 출신이 아니야.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">3</th>
									<td>Wo wohnst du?<br><span class="tran">&nbsp;<small>너는 어디에 사니?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-3">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>대전에서.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">4</th>
									<td>Ich wohne in Seoul, und du?<br><span class="tran">&nbsp;<small>나는 서울에 살아, 너는?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-4">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>나도 서울에 살아.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">5</th>
									<td>Woher kommst du?<br><span class="tran">&nbsp;<small>너는 어디에서 왔어?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-5">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>나는 브라질 출신이야.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">6</th>
									<td>Sprichst du gut Englisch?<br><span class="tran">&nbsp;<small>너 영어 잘 말하니?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-6">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>응, 나 영어 잘해.</small></span></td>
								</tr>
								<tr>
									<th class="bg-light" scope="row">7</th>
									<td>Wohnst du in Gwangjin-Gu?<br><span class="tran">&nbsp;<small>너는 광진구에 살아?</small></span></td>
									<td>
										<div class="itm-lst 1itm" id="lst-7">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
										</div>
									<span class="tran">&nbsp;<small>아니, 난 중구에 살아.</small></span></td>
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
			<div class="row text-center">
				<div class="col"></div>
				<div class="col-sm-9 col-md-8 col-lg-7 col-xl-10">
					<table class="table text-center">
						<thead>
							<th scope="col">
								※ 참고
							</th>
						</thead>
						<tbody>
							<tr>
								<td><a href="./r2-Grammatik und Wendungen.php">Grammatik und Wendungen</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div clasas="col"></div>				
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

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
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
			$("#2").appendTo($("#lst-1"));
			$("#2").addClass("btn-block");
			$("#lst-1>h2").remove();
		})
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>