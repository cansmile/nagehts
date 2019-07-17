<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>버튼을 눌러 선택하여, 분류에 맞는 단어를 선택하여 알맞게 채우세요.</small> ]</h2>

					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm" id="1">
							Bratwurst
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark text-danger so itm" id="2">
							Gemüsesuppe
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="3">
							Eis
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-primary so itm" id="4">
							Schweinebraten
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-secondary so itm" id="5">
							Rindersteak
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-danger so itm" id="6">
							Wurst
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark text-primary so itm" id="7">
							Schinken
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="8">
							Weißbrot
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-secondary so itm" id="9">
							Hähnchen
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm" id="10">
							Käsekuchen
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-secondary so itm" id="11">
							Obst
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-primary so itm" id="12">
							Salat
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark text-danger so itm" id="13">
							Fischplatte
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark text-danger so itm" id="14">
							Gulaschsuppe
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
<!-- 				<div class="row">
					<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
						정답확인
					</div>
				</div> -->
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
		</script>
		<!-- ion.sound finished -->
	</body>
</html>