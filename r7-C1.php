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
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">
					a. Mama, darf ich ein Eis?<span class="tran"><br><small>엄마, 아이스크림 먹어도 되요?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="2">
					b. Hier darf man nicht parken.<span class="tran"><br><small>여기에 주차를 하면 안 된다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="3">
					c. Das Kind kann schon stehen.<br>Es kann aber noch nicht laufen.<span class="tran"><br><small>아이는 설 수 있다. 하지만 걷지는 못한다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="4">
					d. Hier muss man leise sprechen.<span class="tran"><br><small>여기에서 조용히 이야기해야 한다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="5">
					e. Tim hat Ferien.<br>Er muss nicht in die Schule gehen.<span class="tran"><br><small>팀은 방학이다. 그는 학교에 갈 필요가 없다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="6">
					f. Hier kann man parken.<span class="tran"><br><small>여기에 주차를 할 수 있다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="7">
					g. Hier muss man stoppen.<span class="tran"><br><small>여기에서는 무조건 서야한다.</small></span>
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
				<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-1.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-2.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-3.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-4.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-5.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-6.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
				<table class="table border-0">
					<tbody>
						<tr>
							<td height="250" class="border-0 align-middle text-center"><img src="./images/Reihe 7/Reihe-7-C1-7.png" alt="Was kann / muss / darf man (nicht)?" style="max-height: 240px; max-width: 100%; width: auto;"></td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
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

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

					$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});

<?php include "wahl.php"; ?>

			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan = [];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block");
						$("#" + $(this).attr("id")).addClass("btn-light");
						$("#lst-" + pan[p] + ">h2").remove();
						$("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>