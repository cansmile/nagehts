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
					bequem
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
					schmutzig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
					sehr praktisch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					super
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
					sehr hübsch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					ganz schön
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					toll
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					modern
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					sehr interessant
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
					langweilig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
					hässlich
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					schlecht
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="13">
					hell
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="14">
					laut
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="15">
					unpraktisch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="16">
					sauber
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="17">
					zu klein
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="18">
					günstig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					schick
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
					originell
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="21">
					zu teuer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="22">
					sehr ruhig
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small> 단어를 선택하고 아래의 분류(sehr gut, gut, nicht gut)를 누르면 단어가 이동합니다. </small> ]
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					sehr gut</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-primary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					gut</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-khaki so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					nicht gut</h2>&nbsp;
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
			// 정답확인
			$("#chk").on("click", function() {
				var na="";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
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
			<?php include "wahl.php";
			?> // 미리 답 넣어놓기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[4, 10];
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