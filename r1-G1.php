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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark so itm" id="1">
					Tag
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark so itm" id="2">
					Abend
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark so itm" id="3">
					Morgen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark so itm" id="4">
					Nacht
					</button>
				</div>
			</div>
		</div>
	</section>
	<style>
		.itm-lst>button.so:before {content: "Guten";}
		.itm-lst#lst-4>button.itm:before {content: "Gute";}
		.itm-lst>button.so:after {content: "!";}
	</style>
	<section>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2>[ <small>단어를 알맞은 위치에 짝지우세요.</small> ]</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row mt-2" id="lsts">
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-1">
					<img src=".\images\Reihe 1\Reihe-1-G1-1.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>6~11 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-2">
					<img src=".\images\Reihe 1\Reihe-1-G1-2.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>11~17 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-3">
					<img src=".\images\Reihe 1\Reihe-1-G1-3.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
					<button class="btn btn-block mt-0" disable>17~24 Uhr</button>
				</div>
				<div class="rounded-top border border-outline-dark so itm-lst 1itm col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-1" id="lst-4">
					<img src=".\images\Reihe 1\Reihe-1-G1-4.png" style="height: auto; max-width: 100%" class="mx-auto d-block">
					<h2 class="btn btn-warning btn-xl ttl d-block">Guten ___________ ! </h2>&nbsp;
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
	<div id="marg"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- interact.min.js -->
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
			// 정답확인
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".so").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}
						$(".tran").show();
if($(this).hasClass("ans"+ (a))) {
							$(this).addClass("text-success font-weight-bold");
						}
						else {
							$(this).addClass("text-warning font-weight-bold");
							$(this).find(".tran").show();

						}
						;

						if($(this).hasClass("text-warning")) {
							// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
							for(var i = 1; i <= $(".itm-lst").length; i++) {
								if($(this).hasClass("ans"+i)) {
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-sm so btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
									// $(lstn).append(i);
								}
							}
						};

					}
				);

				if($(".so").length==$(".so.text-success").length) {
					ion.sound.play("dingdongdang");
					$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
					$(this).addClass("bg-success font-weight-bold text-white");
				}
				else {
					ion.sound.play("Cartoon_Boing");
					$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
					$(this).addClass("bg-orange font-weight-bold text-white");
				}
				;
			}
			}
			);

			<?php include "wahl.php"; ?>

			// 미리 답 넣어놓기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[4];
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
						$("#lst-"+ (i+1) + ">h2").remove();
					}
				}
			}
		}
		);

	</script>
	<!-- ion.sound finished -->
	<?php include "footer.php"; ?>
	<? } ?>
</body>
</html>