<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
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
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn text-secondary ans2 btn-lg btn-outline-dark so itm" id="1">
					Eis
				</button>
				<button type="button" class="mt-1 mx-1 btn text-danger ans1 btn-lg btn-outline-dark so itm" id="2">
					Sprite
				</button>
				<button type="button" class="mt-1 mx-1 btn text-dark ans1 btn-lg btn-outline-dark so itm" id="3">
					Pommes frites
				</button>
				<button type="button" class="mt-1 mx-1 btn text-danger ans2 btn-lg btn-outline-dark so itm" id="4">
					Cola
				</button>
				<button type="button" class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm" id="5">
					Kaffee
				</button>
				<button type="button" class="mt-1 mx-1 btn text-primary ans3 btn-lg btn-outline-dark so itm" id="6">
					Kuchen
				</button>
				<button type="button" class="mt-1 mx-1 btn text-primary ans2 btn-lg btn-outline-dark so itm" id="7">
					Hamburger
				</button>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<table class="table table-striped text-center">
					<tbody>
						<tr>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
									<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>팀은 감자 튀김과 스프라이트를 주문하였습니다.<br></small></span>Tim bestellt</h2>
								</div>
							</td>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
									<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>프레디는 햄버거, 콜라와 얼음을 주문하였습니다.<br></small></span>Fredi bestellt</h2>
								</div>
							</td>
							<td>
								<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
									<h2 class="btn btn-warning btn-xl ttl d-block"><span class="tran"><small>안나는 케잌과 커피를 주문하였습니다.<br></small></span>Anna bestellt</h2>
								</div>
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
			$(".tran").hide();

			$(document).ready(function() {

				$("#chk").on("click", function() {
					var na = "";
					var ri = 0;
					var qst = $(".q").length;
					$(".q").each(function () {
						if(na != "") {
							na += ", ";
						}
						if($(this).val() == "") {
							na += $(this).attr("id").substr(4,1);
						}
					})
					if($(this).attr("id") == "chk") {
						if($("#itms").find("button").length < 1) {
							var itms = "";
							var qq;
							for(var q = 0; q < $(".itm").length; q++) {
								qq = $("#"+q);
								if(qq.hasClass("ans1")) {
									qq.appendTo("#lst1");
								} else if(qq.hasClass("ans2")) {
									qq.appendTo("#lst2");
								} else if(qq.hasClass("ans3")) {
									qq.appendTo("#lst3");
								}
							}
							$(".itm-lst").each(function () {
								$(this).find("button").each(function() {
									$.trim(itms);
									if(itms != "") {
										if($(this).is(":last-child")) {
											itms = itms + " und ";
										} else {
											itms = itms + ", ";
										}
									}
										if($(this).hasClass("text-danger")) {
											itms = itms + "eine ";
										} else if($(this).hasClass("text-primary")) {
											itms = itms + "einen ";
										} else if($(this).hasClass("text-secondary")) {
											itms = itms + "ein ";
										}
										itms = itms + $.trim($(this).text());
								})
								$(this).html($(this).find("h2").html() + " " + itms + ".");
								itms = "";
							})
							$(this).attr("id","done");

							$(this).html("<h4>문제를 모두 맞추셨네요!<br>혹시 독일인이세요?</h4>");
							$(this).addClass("bg-primary text-white");

						$(this).prop("disabled", true);
						$(".tran").show();
						$(this).attr("id","done");
						} else {

							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						};
					}
				})
})
		</script>
		<!-- ion.sound finished -->
	</body>
</html>