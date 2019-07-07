<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<section>
		<div class="container">
			
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2><small>(단어를 선택하여 분류에 맞게 배치시키세요. 다중 선택이 됩니다.)</small>
						</h2>
				</div>
				<div class="border-3 border-danger bg-light col-sm-12 col-md-12 col-lg-12">
						[ 분류: <h6 class="badge badge-primary badge-sm my-3" disabled>남자 Vornamen </h6>&nbsp; <h6 class="badge badge-danger badge-sm my-3" disabled>여자 Vornamen </h6>&nbsp; <h6 class="badge badge-warning badge-sm my-3" disabled>성 Familennamen </h6> ]
				</div>
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12 so" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
						Birgit
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
						Luisa
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
						Thomas
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="4">
						Koch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
						Johann
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="6">
						Bauer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
						Karl
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
						Schumacher
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
						Martin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="10">
						Monika
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
						Schmidt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
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