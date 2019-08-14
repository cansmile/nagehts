<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<section>
	<div class="container">
					<!-- 고르는 아이템들 -->
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>[ <small>버튼을 눌러 선택하여, 분류에 맞는 단어를 선택하여<br>알맞게 채우세요.</small> ]</h2>

			</div>
		</div>

		<div class="row">
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm" id="1">
					Bratwurst<span class="tran"><br><small>구운 소세지</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark text-danger so itm" id="2">
					Gemüsesuppe<span class="tran"><br><small>야채 스프</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="3">
					Eis<span class="tran"><br><small>얼음</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-primary so itm" id="4">
					Schweinebraten<span class="tran"><br><small>돼지 불고기</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-secondary so itm" id="5">
					Rindersteak<span class="tran"><br><small>소고기 스태이크</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-danger so itm" id="6">
					Wurst<span class="tran"><br><small>소시지</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-primary so itm" id="7">
					Schinken<span class="tran"><br><small>햄</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="8">
					Weißbrot<span class="tran"><br><small>흰빵</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-secondary so itm" id="9">
					Hähnchen<span class="tran"><br><small>치킨</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm" id="10">
					Käsekuchen<span class="tran"><br><small>치즈 케잌</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="11">
					Obst<span class="tran"><br><small>과일</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm" id="12">
					Salat<span class="tran"><br><small>샐러드</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-danger so itm" id="13">
					Fischplatte<span class="tran"><br><small>생선 접시</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm" id="14">
					Gulaschsuppe<span class="tran"><br><small>굴라시스프</small></span>
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th scope="col">&nbsp;</th>
							<th scope="col">Fleisch</th>
							<th scope="col">kein Fleisch</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" class="text-center align-middle">kalt</th>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
									<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
								</div>
							</td>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
									<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row" class="text-center align-middle">warm</th>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
									<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
								</div>
							</td>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-4">
									<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>&nbsp;
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
					var ri = 0;
					var qst = $(".q").length;
					$(".q").each(function () {
						if(na != "") {
							na += ", ";
						}
						if($(this).val() == "") {
							na += $(this).attr("id").substr(4,1);
						}
					})
					
					if($("#itms").find("button").length < 1) {

						$(this).html("<h4>문제를 모두 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("bg-primary text-white");

					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id","done");
					} else {
						alert("모든 문제를 풀어주세요!");
						// alert(na+"번 문제를 풀어주세요!");
					};
				})
})
		</script>
		<!-- ion.sound finished -->
	</body>
</html>