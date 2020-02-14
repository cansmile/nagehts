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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">Ostern<span class="tran"><br><small>부활절</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="2">Nikolaustag<span class="tran"><br><small>성니콜라스</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="3">Valentinstag<span class="tran"><br><small>발렌타인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="4">Karneval<span class="tran"><br><small>카니발</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="5">Neujahr Silveser<span class="tran"><br><small>새해 전날</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="6">Heiligabend<span class="tran"><br><small>성탄전야</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="7">Advent<span class="tran"><br><small>대림절</small></span>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-1.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-2.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-3.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-4.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-5.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-6.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
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
								<td height="250" class="border-0 align-middle"><img src="./images/Reihe 9/Reihe-9-A0-7.png" alt="Wann ist das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인 </div>
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
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("text-success");
					}
				});

				var qa = $(".itm-lst").length; // 전체 문항 수
				var qr = $(".text-success").length; // 맞춘 항목 수
				var pe = (qr / qa) * 100; // 정답 비율
				var tcl = "white"; // 기본 문자색

				// 분류 기준은 100%, 80%, 60%, 40%
				if(pe > 99) {
					var st = "원어민이세요?";
					var cl = "lime";
					var tcl = "dark";
				} else if(pe > 79) {
					var st = "어! 좀 하시는데요~^^";
					var cl = "success";
				} else if(pe > 59) {
					var st = "쓰읍~ 다시 해 보실까요";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

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

		<?php include "wahl.php"; ?>
		
		var pan=new Array();
		// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
		pan=[1];
		var il=$("#itms>.itm").length;
		for(var p=0;
		p < pan.length;
		p++) {
			var pani="#lst-"+ pan[p];
			$(".itm").each(function() {
				if($(this).hasClass("ans"+ pan[p])) {
					$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
					$("#"+ $(this).attr("id")).addClass("btn-block btn-light");
					$("#lst-"+ pan[p] + ">h2").remove();
				}
			}
			)
					}
	}
	);
	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
	</body>
</html>