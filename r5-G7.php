<?php include "header.php"; ?>
<body>
<?php include "back.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">
					a
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="2">
					b
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="3">
					c
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="4">
					d
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="5">
					e
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="6">
					f
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="7">
					g
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
					<h2>[ <small>1~7에 알맞는 답변을 a~g에서 골라 넣으세요.</small> ]</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center" width="50">1.</th>
								<td class="align-middle">Was bekommen Sie?<span class="tran"><br><small>무엇을 주문하시겠습니까?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">2.</th>
								<td class="align-middle">Essen Sie gern Gemüse?<span class="tran"><br><small>야채를 즐겨 드시나요?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">3.</th>
								<td class="align-middle">Haben Sie Gemüsesuppe?<span class="tran"><br><small>야채수프 있나요?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">4.</th>
								<td class="align-middle">Wie schmeckt es?<span class="tran"><br><small>맛은 어때요?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">5.</th>
								<td class="align-middle">Isst du gern Reis?<span class="tran"><br><small>밥 좋아하니?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">6.</th>
								<td class="align-middle">Wie viel macht das?<span class="tran"><br><small>얼마입니까?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">7.</th>
								<td class="align-middle">Ist das Rindfleisch?<span class="tran"><br><small>이것이 쇠고기인가요?</small></span></td>
								<td width="50" class="align-middle">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center" width="50">a</th>
								<td class="align-middle">Nein, ich esse lieber Fleisch.<span class="tran"><br><small>아니요, 나는 고기를 먹는 걸 더 좋아합니다.</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">b</th>
								<td class="align-middle">Nein, aber Gulaschsuppe.<span class="tran"><br><small>아니요, 하지만 굴라쉬 수프.</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">c</th>
								<td class="align-middle">15,50 Euro.<span class="tran"><br><small>15.50 유로.</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">d</th>
								<td class="align-middle">Nein, Schweinefleisch.<span class="tran"><br><small>아니요, 돼지고기요.</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">e</th>
								<td class="align-middle">Sehr lecker!<span class="tran"><br><small>정말 맛있어요!</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">f</th>
								<td class="align-middle">Nicht so gern, lieber Kartoffeln.<span class="tran"><br><small>그렇게 좋아하지 않아. 차라리 감자가 더 좋아.</small></span></td>
							</tr>
							<tr>
								<th scope="row" height="80" class="align-middle bg-dark text-white text-center">g</th>
								<td class="align-middle">Ein Steak, bitte.<span class="tran"><br><small>스테이크 하나 주세요.</small></span></td>
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
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".itm").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}
						if($(this).hasClass("ans"+ (a))) {
							$(".tran").show();
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

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("text-success font-weight-bold");
					}
				});

				var qa = $(".itm-lst").length; // 전체 문항 수
				var qr = $(".text-success").length; // 맞춘 항목 수
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
			}
			}
			);

			<?php include "wahl.php"; ?>

			var pan=new Array(), il;
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[7];
			il=$(".itm-lst").length;
			for(var p=0;
			p < pan.length;
			p++) {
				var pani="#"+ pan[p];
				for(i=0;
				i < il;
				i++) {
					if($(pani).hasClass("ans"+ (i + 1))) {
						$(pani).appendTo("#lst-"+ (i + 1));
						$(pani).addClass("btn-block btn-light");
						$("#lst-"+ (i + 1) + ">h2").remove();
					}
				}
			}
		}
		);

	</script>
	<!-- ion.sound finished -->
	<?php include "footer.php"; ?>
</body>
</html>