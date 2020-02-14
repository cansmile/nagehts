<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 itm" id="1">
					Hilfe!<span class="tran"><br><small>도와주세요!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 itm" id="2">
					Auf Wiedersehen!<span class="tran"><br><small>다시 만나요</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 itm" id="3">
					Guten Tag!<span class="tran"><br><small>안녕하세요(낮인사)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 itm" id="4">
					Gute Nacht!<span class="tran"><br><small>안녕히 주무세요</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 itm" id="5">
					Danke. Das ist nett.<span class="tran"><br><small>감사합니다. 참 친절하시네요.</small></span>
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
					<h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-1">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-1.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-2">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-2.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-3">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-3.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-4">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-4.png" class="ttl">
				</div>
				<div style="min-height: 320px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl" id="lst-5">
					<img style="width: 100%; height: auto;" src=".\images\Reihe 1\Reihe-1-A3-5.png" class="ttl">
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
		</div>
	</section>
	
	<div id="marg"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<script src="./js/ion.sound.min.js"></script>
	<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>
	<script>
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 정답확인
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".itm").each(function() {
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
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
									// $(lstn).append(i);
								}
							}
						};

					}
				);

				if($(".itm").length==$(".itm.text-success").length) {
					o.play();
					$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
					$(this).addClass("bg-success font-weight-bold text-white");
				}
				else {
					x.play();
					$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
					$(this).addClass("bg-orange font-weight-bold text-white");
				}
				;
			}
			}
			);
		}
		);
		<?php include "wahl.php"; ?>
		var pan=new Array(), pann;
		// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
		pan=[];
		for(var p=0;
		p < pan.length;
		p++) {
			pann="#"+pan[p];
			for(var i=0;
			i < $(".itm-lst").length;
			i++) {
				if($(pann).hasClass("ans"+ (i+1))) {
					$(pann).insertAfter("#lst-"+ (i+1) + ">h2");
				}
			}
			$(pann).find(".tran").show();
		}
		$(".itm-lst>button").addClass("btn-block btn-light");

	</script>
	<!-- ion.sound finished -->
	<?php include "footer.php"; ?>
</body>
</html>