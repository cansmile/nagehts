<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<header>
			<div class="jumbotron">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">4. Sortieren Sie die Namen nach Vor- und Familiennamen.</h1>
							<h2>
								다음을 성과 이름으로 분류하세요.
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
		
	<section>
			
		<div class="container">
			
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12 so" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="1">
						Brigitte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="2">
						Luisa
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="3">
						Thomas
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="4">
						Koch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="5">
						Johann
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="6">
						Bauer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="7">
						Karl
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="8">
						Schumacher
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="9">
						Martin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="10">
						Monika
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="11">
						Schmidt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="12">
						Schulz
					</button>
				</div>
			</div>

			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
						남자 <strong>Vornamen</strong></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
						여자 <strong>Vornamen</strong></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-warning so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
						성 <strong>Familennamen</strong></h2>&nbsp;
				</div>
			</div>
		</div>
		<!-- 리스트 끝 -->
	</section>

<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<!-- ion.sound -->
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

				// 미리 답 넣어놓기
				$("#3").insertAfter("#lst-1>h2");
				$("#1").insertAfter("#lst-2>h2");
				$("#8").insertAfter("#lst-3>h2");
				$(".itm-lst>button").addClass("btn-block btn-light");
			});
		</script>
	</body>
</html>