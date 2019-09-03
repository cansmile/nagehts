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
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
					Bleistift<span class="tran">&nbsp;<small>연필</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					Uhr<span class="tran">&nbsp;<small>시계</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
					Buch<span class="tran">&nbsp;<small>책</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					Laptop<span class="tran">&nbsp;<small>노트북</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
					Bibel<span class="tran">&nbsp;<small>성경</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					Brille<span class="tran">&nbsp;<small>안경</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
					Ledersofa<span class="tran">&nbsp;<small>가죽구두</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
					Kopfhörer<span class="tran">&nbsp;<small>헤드폰</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
					Bett<span class="tran">&nbsp;<small>침대</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
					Kühlschrank<span class="tran">&nbsp;<small>냉장고</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
					Smartphone<span class="tran">&nbsp;<small>스마트폰</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
					Lampe<span class="tran">&nbsp;<small>등불</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>단어를 선택하고 아래의 성(m, f, n)을 누르면 단어가 이동합니다.</small> ]</h2>
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
				<div style="min-height: 240px;" class="rounded-top bg-purple so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>n</strong></h2>&nbsp;
				</div>
			</div>
		</div>
		<!-- 리스트 끝 -->
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
		<!-- 정답확인 버튼 끝 -->
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
		$(".tran").hide();
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
			$("#chk").on("click", function() {
				var na="";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
				}
				else {
					$("div.itm-lst").each(function(idx) {
						if( !$(this).find("button").length) {
							if(na !="") {
								na +=", ";
							}
							na +=(idx+1);
						}
					}
					);
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			}
			);
			<?php include "wahl.php"; ?>o
			// 미리 답 넣어놓기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[1];
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