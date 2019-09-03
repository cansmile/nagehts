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
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="8">
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
		</div>
	</section>
	<section>
		<div class="container">
			
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>단어를 알맞은 성에 짝지우세요.</small> ]</h2>
				</div>
				<div class="border-3 border-danger bg-light col-sm-12 col-md-12 col-lg-12">
					[ 분류: <h6 class="badge badge-primary badge-sm my-3" disabled>남자 Vornamen </h6>&nbsp; <h6 class="badge badge-danger badge-sm my-3" disabled>여자 Vornamen </h6>&nbsp; <h6 class="badge badge-warning badge-sm my-3" disabled>성 Familennamen </h6> ]
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
	<div id="marg"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- ion.sound -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#chk").hide();
		$(document).ready(function() {
			ion.sound( {
				sounds : [ {
					name: "Cartoon_Boing",
				}
				],
				path : "sounds/",
				preload : true,
				volume : 1.0,
				multiplay : false
			}
			);
			<?php include "wahl.php"; ?>
			// 미리 답 넣어놓기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[1, 3, 8];
			for(var p=0;
			p < pan.length;
			p++) {
				var pani="#"+pan[p];
				for(var i=0;
				i < $(".itm-lst").length;
				i++) {
					if($(pani).hasClass("ans"+ (i+1))) {
						$(pani).insertAfter($("#lst-"+ (i+1) + ">h2"));
						$(pani).addClass("btn-block btn-light");
					}
				}
			}
		}
		);

	</script>
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>