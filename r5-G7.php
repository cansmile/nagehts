<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<section>
	<div class="container">
					<!-- 고르는 아이템들 -->
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>[ <small>1~7에 알맞는 답변을 a~g에서 골라 넣으세요.</small> ]</h2>
			</div>
		</div>

		<div class="row">
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
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
							<td class="align-middle">Essen Sie gern Gemüse?<span class="tran"><br><small>야채를 즐거 드시나요?</small></span></td>
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
							<td class="align-middle">Nein, ich esse lieber Fleisch.<span class="tran"><br><small>아니, 나는 고기를 먹는 걸 더 좋아합니다.</small></span></td>
						</tr>
						<tr>
							<th scope="row" height="80" class="align-middle bg-dark text-white text-center">b</th>
							<td class="align-middle">Nein, aber Gulaschsuppe.<span class="tran"><br><small>아니, 하지만 굴 라쉬 수프.</small></span></td>
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
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

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
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});
				$("#7").insertAfter("#lst-1>h2");
				$("#lst-1>h2").remove();

			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>