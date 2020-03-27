<?php include "header.php"; ?>
<body>
<?php include "back.php"; ?>
	<style>
		td {
			height: 20%;
		}
	</style>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="1">
					Südamerika<span class="tran"><br><small>남미</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="2">
					Nordamerika<span class="tran"><br><small>북미</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
					Asien<span class="tran"><br><small>아시아</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="4">
					Australien<span class="tran"><br><small>호주</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="5">
					Afrika<span class="tran"><br><small>아프리카</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="6">
					Europa<span class="tran"><br><small>유럽</small></span>
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
					<h2> Ergänzen Sie die Kontinente.<br>
					<small>빈칸에 알맞은 대륙 이름을 넣어보세요.</small>
					</h2>
					<h3>[ <small>알맞은 위치에 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col"></div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
					<table class="table table-borderless" style="background-size: 100% 100%; background-repeat: no-repeat; background-image: url('./images/Reihe 2/Reihe-2-D1-0.png')" width="100%">
						<tbody>
							<tr>
								<td width="10%" colspan="10">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
								<td>&nbsp;</td>
								<td colspan="2">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
								<td colspan="3">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="10">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="4">&nbsp;</td>
								<td colspan="3">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
								<td colspan="3">&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan="3">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
								<td colspan="4">&nbsp;</td>
								<td colspan="2">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">▼</h2>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="10">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col"></div>
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
	<script src="./js/taptogrouph.js"></script>
	<script src="./js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./oxsound.php"); ?>
	<script>
		$(".tran").hide();
		$("#chk").hide();

		<?php include "wahl.php"; ?>

		// 정답확인
		$("#chk").on("click", function() {
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				$(".itm-lst").each(function() {
					$(this).html($(this).find("button").html());
					$(this).addClass("font-weight-bold bg-white border rounded border-dark text-success");
				}
				);

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				var qa = $(".itm-lst").length; // 전체 문항 수
				var qr = $(".text-success").length; // 맞춘 항목 수
				var pe = (qr / qa) * 100; // 정답 비율
				var tcl = "white"; // 기본 문자색

				// 분류 기준은 100%, 80%, 60%, 40%
				if(pe > 99) {
					var st = "원어민이세요?";
					var cl = "lime";
					var tcl = "dark";
				} else if(pe > 74) {
					var st = "어! 좀 하시는데요~^^";
					var cl = "success";
				} else if(pe > 49) {
					var st = "쓰읍~ 다시 해 보실까요?";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요~";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

				$(this).attr("id","done");

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
	</script>
	<?php include "footer.php"; ?>
</body>
</html>