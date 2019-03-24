<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<style>
	td {
		height: 20%;
	}
</style>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Ergänzen Sie die Kontinente.<br>
							<small>빈칸에 알맞은 대륙 이름을 넣어보세요.</small>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="1">
							Südamerika
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
							Nordamerika
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
							Asien
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="4">
							Australien
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="5">
							Afrika
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="6">
							Europa
						</button>
					</div>
				</div>
				<div class="row text-center">
					<div class="col"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
						<table class="table" style="background-size: 100% 100%; background-repeat: no-repeat; background-image: url('./images/Reihe 2/Reihe-2-D1-0.png')" width="100%">
							<tbody>
								<tr>
									<td class="border-top-0 border-bottom-0" width="10%" colspan="10">&nbsp;</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" colspan="3">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
									<td class="border-top-0 border-bottom-0">&nbsp;</td>
									<td class="border-top-0 border-bottom-0" colspan="2">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
									<td class="border-top-0 border-bottom-0" colspan="3">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
									<td class="border-top-0 border-bottom-0">&nbsp;</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" colspan="10">&nbsp;</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" colspan="4">&nbsp;</td>
									<td class="border-top-0 border-bottom-0" colspan="3">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
									<td class="border-top-0 border-bottom-0" colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">&nbsp;</td>
									<td class="border-top-0 border-bottom-0" colspan="3">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
									<td class="border-top-0 border-bottom-0" colspan="4">&nbsp;</td>
									<td class="border-top-0 border-bottom-0" colspan="2">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" colspan="10">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col"></div>
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
		<script src="./js/ion.sound.min.js"></script>
		<script></script>
		<!-- ion.sound finished -->
	</body>
</html>