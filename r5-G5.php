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
					<button type="button" class="mt-1 mx-1 btn text-purple ans2 btn-lg btn-outline-dark so itm" id="1">
					<span class="gen">ein</span><span class="sen">Eis</span><span class="tran">얼음</span><span class="con1">과</span><span class="con2">을</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-danger ans1 btn-lg btn-outline-dark so itm" id="2">
					<span class="gen">eine</span><span class="sen">Sprite</span><span class="tran">스프라이트</span><span class="con1">와</span><span class="con2">를</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-khaki ans1 btn-lg btn-outline-dark so itm" id="3">
					<span class="gen"></span><span class="sen">Pommes frites</span><span class="tran">감자 튀김</span><span class="con1">과</span><span class="con2">을</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-danger ans2 btn-lg btn-outline-dark so itm" id="4">
					<span class="gen">eine</span><span class="sen">Cola</span><span class="tran">콜라</span><span class="con1">와</span><span class="con2">를</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm" id="5">
					<span class="gen">einen</span><span class="sen">Kaffee</span><span class="tran">커피</span><span class="con1">와</span><span class="con2">를</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm" id="6">
					<span class="gen">einen</span><span class="sen">Kuchen</span><span class="tran">케잌</span><span class="con1">과</span><span class="con2">을</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn text-primary ans2 btn-lg btn-outline-dark so itm" id="7">
					<span class="gen">einen</span><span class="sen">Hamburger</span><span class="tran">햄버거</span><span class="con1">와</span><span class="con2">를</span>
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
					<h2>[ <small>버튼을 눌러 선택하여, <br>분류에 맞는 단어를 알맞게 채우세요.</small> ]</h2>
				</div>
			</div>
			<div class="row"><div class="col text-center"><img src="./images/Reihe 5/Reihe-5-G5-1.png" alt="Wer möchte was?" style="max-height: 320px; width: auto;"></div></div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table table-striped text-center">
						<tbody>
							<tr>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>팀은<br></small></span><span class="sen">Tim bestellt</span></h2>
									</div>
									<div id="ans-1"></div>
									<div id="tra-1"></div>
								</td>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>프레디는<br></small></span><span class="sen">Fredi bestellt</span></h2>
									</div>
									<div id="ans-2"></div>
									<div id="tra-2"></div>
								</td>
								<td>
									<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>안나는<br></small></span><span class="sen">Anna bestellt</span></h2>
									</div>
									<div id="ans-3"></div>
									<div id="tra-3"></div>
								</td>
							</tr>
						</tbody>
					</table>
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
		$(".gen").hide();
		$(".tran").hide();
		$(".con1").hide();
		$(".con2").hide();
		$("#chk").hide();
		$(document).ready(function() {
			<?php include "wahl.php"; ?>

			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".itm.text-danger").removeClass("text-danger");
					$(".itm.text-primary").removeClass("text-primary");
					$(".itm.text-purple").removeClass("text-purple");
					$(".itm.text-khaki").removeClass("text-khaki");
					$(".itm").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}
						if($(this).hasClass("ans"+ (a))) {
							$(this).addClass("text-success font-weight-bold");
						}
						else {
							$(this).addClass("text-warning font-weight-bold");
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

				for(var i = 1; i <= $(".itm-lst").length; i++) {
					var ind = 0;
					var lst = new Array();
					var tind = $("#lst-"+i).find(".text-success").length + $("#lst-"+i).find(".text-danger").length;
					$("#ans-"+i).append($("#lst-"+i+">h2>.sen").text() + " ");
					$("#tra-"+i).append("<small>" + $("#lst-"+i+">h2>.tran").text() + " ");
					$("#lst-"+i+">button").each(function() {
						if($(this).hasClass("font-weight-bold") && ($(this).hasClass("text-success") || $(this).hasClass("text-danger"))) {
							ind++;
							switch($(this).find(".gen").text()) {
								case '':
									var ao = "<span class=\"bg-khaki text-white p-0 px-1 rounded\">";
									break;
								case 'einen':
									var ao = "<span class=\"bg-primary text-white p-0 px-1 rounded\">";
									break;
								case 'eine':
									var ao = "<span class=\"bg-danger text-white p-0 px-1 rounded\">";
									break;
								case 'ein':
									var ao = "<span class=\"bg-purple text-white p-0 px-1 rounded\">";
									break;
							}
							var ac = "</span>";
							if(ind == (tind - 1)) {
								$("#ans-"+i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + " und ");
								$("#tra-"+i).append(ao + $(this).find(".tran").text() + ac + $(this).find(".con1").text() + " ");
							} else if(ind == tind) {
								$("#ans-"+i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + ".");
								$("#tra-"+i).append(ao + $(this).find(".tran").text() + ac + $(this).find(".con2").text());
							} else {
								$("#ans-"+i).append(ao + "<strong>" + $(this).find(".gen").text() + "</strong> " + $(this).find(".sen").text() + ac + ", ");
								$("#tra-"+i).append(ao + $(this).find(".tran").text() + ac + ", ");
							}
						}
					});
					$("#tra-"+i).append(" 주문하였습니다.</small>");
				}
				

				if($(".itm").length==$(".itm.text-success").length) {
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
			)
		}
		)

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>