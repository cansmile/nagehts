<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<section>
		<div class="container">
			<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 선택하고 아래의 성(m, f, n)을 누르면 단어가 이동합니다.</small> ]</h2>
					</div>
				</div>
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12 so" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
						Bleistift
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
						Uhr
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
						Buch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
						Laptop
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
						Bibel
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
						Brille
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
						Ledersofa
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
						Kopfhörer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
						Bett
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
						Kühlschrank
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
						Smartphone
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
						Lampe
					</button>
				</div>
			</div>

			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-info so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>m</strong></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>f</strong></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-warning so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>n</strong></h2>&nbsp;
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
				$("#1").insertAfter("#lst-1>h2");
				$(".itm-lst>button").addClass("btn-block btn-light");
			});
		</script>
	</body>
</html>