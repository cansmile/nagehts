<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="1">
					essen, kochen<span class="tran"><br><small>식사, 요리하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="2">
					Kleider aufhängen<span class="tran"><br><small>옷을 걸다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					fernsehen<span class="tran"><br><small>TV를 보다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					duschen<span class="tran"><br><small>샤워를 하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					der Balkon<span class="tran"><br><small>발코니</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="6">
					die Küche<span class="tran"><br><small>부엌</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					Kaffee trinken<span class="tran"><br><small>커피를 마시다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="8">
					das Wohnzimmer<span class="tran"><br><small>거실</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					das Badezimmer<span class="tran"><br><small>욕실</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="10">
					der Flur<span class="tran"><br><small>복도</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Wie heißen die Orte? Was macht man da?<br>
					<small> 방 이름이 무엇일까요? 거기서 무엇을 하나요? </small>
					</h2>
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 항목에 맞게 짝지우세요.</small> ]</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col" width="40%" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A3.png" alt="Haus" style="width: 100%; height: auto;"></th>
								<th scope="col" width="30%" class="align-middle border-0">Wo?<span class="tran"><br><small>어디?</small></span></th>
								<th scope="col" width="30%" class="align-middle border-0">Was tut man?<span class="tran"><br><small>사람이 무엇을 하나요?</small></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-2.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-4.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-5.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table text-center d-sm-none d-md-none d-lg-block d-xl-block mb-0">
						<thead>
							<tr>
								<th scope="col" width="40%" class="align-middle border-0"><img src="./images/Reihe 4/Reihe-4-A3.png" alt="Haus" style="width: 100%; height: auto;"></th>
								<th scope="col" width="30%" class="align-middle border-0">Wo?<span class="tran"><br><small>어디?</small></span></th>
								<th scope="col" width="30%" class="align-middle border-0">Was tut man?<span class="tran"><br><small>사람이 무엇하나?</small></span></th>
							</tr>
						</thead>
					</table>
					<table class="table text-center mt-0 ">
						<tbody>
							<tr>
								<th width="40%" heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-6.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td width="30%" class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td width="30%" class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th heigh="150" scope="row"><img src="./images/Reihe 4/Reihe-4-A3-7.png" alt="Wo und Was tut man?" style="max-width: 100%; height: auto;"></th>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle border-0 text-center">
									<div class="itm-lst 1itm" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
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
	
	<div id="marg"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			<?php include "wahl.php"; ?>
			// 정답확인
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".so").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}

						if($(this).hasClass("ans"+ (a))) {
							$(this).addClass("text-success font-weight-bold");
						}
						else {
							$(this).addClass("text-warning font-weight-bold");
							$(this).find(".tran").show();

						}
						;

						if($(this).hasClass("text-warning")) {
							// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
							for(var i = 1; i <= $(".itm-lst").length; i++) {
								if($(this).hasClass("ans"+i)) {
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
									// $(lstn).append(i);
								}
							}
						};

					}
				);
				$(".tran").show();

				if($(".itm").length==$(".itm.text-success").length) {
					ion.sound.play("dingdongdang");
					$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
					$(this).addClass("bg-success font-weight-bold text-white");
				}
				else {
					ion.sound.play("Cartoon_Boing");
					$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
					$(this).addClass("bg-orange font-weight-bold text-white");
				}
				;
			}
			}
			);
		}
		);

	
	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>