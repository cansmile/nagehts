<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Mädchen- oder Jungennamen?</h2>
							<p> 여자 혹은 남자이름? </p>
				</div>
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
							Julia
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
							Thomas
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
							Sabine
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
							Max
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
							Daniel
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							Christiane
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
							Klaus
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
							Inge
						</button>
					</div>
				</div>

				<div class="row" id="lsts">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
						<table class="table text-center">
							<thead>
								<tr>
									<th colspan="4" class="text-center bg-info"> 남자 Vornamen </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="align-middle">1</th>
									<td class="align-middle">Martin</td>
									<td class="align-middle">Heinz</td>
									<td class="align-middle">Peter</td>
								</tr>
								<tr>
									<th scope="row" class="align-middle">2</th>
									<td class="align-middle">Franz</td>
									<td class="align-middle">Alberto</td>
									<td class="align-middle">Otto</td>
								</tr>
								<tr>
									<th scope="row" class="align-middle">3</th>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Frank</td>
								</tr>
								<tr>
									<th scope="row" class="align-middle">4</th>
									<td class="align-middle">Marko</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Rudolf</td>
								</tr>
								<tr>
									<th scope="row" class="align-middle">5</th>
									<td class="align-middle">Stefan</td>
									<td class="align-middle">Oliver</td>
									<td class="align-middle">Karl</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">6</th>
									<td class="align-middle">Andreas</td>
									<td class="align-middle">Johann</td>
									<td class="align-middle">Christian</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">7</th>
									<td class="align-middle">
										 <div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Anton</td>
									<td class="align-middle">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1 itm-lst 1itm" id="lst-2">
						<table class="table text-center">
							<thead>
								<tr>
									<th colspan="4" class="text-center bg-danger"> 여자 Vornamen </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="align-middle" scope="row">1</th>
									<td class="align-middle">Birgit</td>
									<td class="align-middle">Hilde</td>
									<td class="align-middle">Luisa</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">2</th>
									<td class="align-middle">Barbara</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Helga</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">3</th>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">4</th>
									<td class="align-middle">Monika</td>
									<td class="align-middle">Angelika</td>
									<td class="align-middle">Brigitte</td>
								</tr>
								<tr>
									<th class="align-middle" scope="row">5</th>
									<td class="align-middle">Maja</td>
									<td class="align-middle">Heike</td>
									<td class="align-middle">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col"></div>
				<div class="col-sm-9 col-md-8 col-lg-7 col-xl-10">
					<table class="table text-center">
						<thead>
							<th scope="col">
								Nach-(Familien)namen (Herr / Frau)
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Müller Bauer Wecker Schneider Koch Schmidt Schumacher</td>
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
			
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "Cartoon_Boing",
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay : false
				});
			});
		</script>
		<!-- ion.sound finished -->
	</body>
</html>