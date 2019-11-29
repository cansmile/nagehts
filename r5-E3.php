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
				<button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm" id="1">
					salzig<span class="tran"><br /><small>짜요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="2">
					hart<span class="tran"><br /><small>딱딱해요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm" id="3">
					zu süß<span class="tran"><br /><small>너무 달아요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="4">
					warm<span class="tran"><br /><small>미지근해요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="5">
					kalt<span class="tran"><br /><small>차가워요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm" id="6">
					zu scharf<span class="tran"><br /><small>너무 매워요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="7">
					trocken<span class="tran"><br /><small>말랐어요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm" id="8">
					nicht frisch<span class="tran"><br /><small>신선하지 않아요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="9">
					zu bitter<span class="tran"><br /><small>너무 써요.</small></span>
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
					<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="4" class="border-0" class="align-middle text-center border-0" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-1.png" alt="Face" style="max-width: 120px; height: auto;"></th>
								<td colspan="4" class="border-0">Schmeckt der Wein?</td>
							</tr>
							<tr>
								<td rowspan="3" class="border-0">Danke, ja,</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">er</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">ist</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">köstlich.</td>
							</tr>
							<tr>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">…</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">schmeckt</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">sehr gut.</td>
							</tr>
							<tr>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">gut.</td>
							</tr>
							<tr>
								<th scope="row" rowspan="2" class="border-0" class="align-middle text-center border-0" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-2.png" alt="Face" style="max-width: 120px; height: auto;"></th>
								<td colspan="4" class="border-0">Schmeckt der Wein?</td>
							</tr>
							<tr>
								<td colspan="4" class="border-0">Nein, er ist sauer.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>와인이</small><br></span>Der Wein ist</th>
								<td class="border-0"><span class="tran"><small>셔요.</small><br></span>sauer.</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>너무 달아요.</small><br></span>süß.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>따뜻해요.</small></span>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>빵이</small><br></span>Das Brot ist</th>
								<td class="border-0"><span class="tran"><small>오래됐어요.</small><br></span>alt.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>말랐어요.</small></span>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>딱딱해요.</small></span>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>고기가</small><br></span>Das Fleisch ist</th>
								<td class="border-0"><span class="tran"><small>너무 기름져요.</small><br></span>zu fettig.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>차가워요.</small></span>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>말랐어요.</small><br></span>trocken.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>맥주가</small><br></span>Das Bier ist</th>
								<td class="border-0">
									<span class="tran"><small>너무 써요.</small></span>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>따뜻해요.</small><br></span>warm.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>스프가</small><br></span>Die Suppe ist</th>
								<td class="border-0">
									<span class="tran"><small>짜요.</small></span>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>너무 매워요</small><br></span>zu scharf.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>소스가</small><br></span>Die Soße ist</th>
								<td class="border-0"><span class="tran"><small>짜요</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>너무 매워요.</small></span>
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>레몬에이드가</small><br></span>Die Limo ist</th>
								<td class="border-0"><span class="tran"><small>미지근해요.</small><br></span>warm.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>너무 달아요.</small></span>
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>샐러드가</small><br></span>Der Salat ist</th>
								<td class="border-0"><span class="tran"><small>짜요.</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>신선하지 않아요.</small></span>
									<div class="itm-lst 1itm" id="lst-9">
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
		$("#chk").hide();
		$(".tran").hide();
		$(".itm-lst").each(function() {
			$(this).closest("td").find(".tran").show();
		});
		$("#wahl").find(".tran").hide();
		$(document).ready(function() {
			<?php include "wahl.php"; ?>

			// 정답확인
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(".tran").show();
					$(this).attr("id", "done");
					$(".itm").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}
						$(".tran").show();
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
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-md btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
								}
							}
						};

					}
				);


				$(".pop").each(function() {
					$(this).removeClass("btn-info");
					if ($(this).hasClass("o") && $(this).hasClass("an")) {
						$(this).removeClass("btn-warning");
						$(this).addClass("text-success font-weight-bold");
					}
					else if ($(this).hasClass("o")) {
						$(this).addClass("text-danger font-weight-bold");
					}
					else if ($(this).hasClass("an")) {
						$(this).addClass("btn-warning");
					}
					else {
						$(this).addClass("btn-light");
					}
					;
				}
				);

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