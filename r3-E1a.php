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
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="1">
				Wie ist Ihre Adresse?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="2">
				Wie ist Ihre E-Mail-Adresse?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
				was sind Sie von Beruf?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="4">
				Wie ist Ihre Telefonnummer?
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
						<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h2>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<div class="row"><div class="col bg-gray-light">
							<table class="table">
								<tbody>
									<tr>
										<td class="border-0 text-left">Jonas Meyer</td>
									</tr>
									<tr>
										<td class="border-0 text-left">&nbsp;&nbsp;Diplom Ingenieur Siemens</td>
									</tr>
									<tr>
										<td class="border-0 text-left">Nonnendammallee 72</td>
									</tr>
									<tr>
										<td class="border-0 text-left">13628 Berlin Germany</td>
									</tr>
									<tr>
										<td class="border-0 text-right">&nbsp;</td>
									</tr>
									<tr>
										<td class="border-0 text-right">Tel.: (0941) 95 83 13</td>
									</tr>
									<tr>
										<td class="border-0 text-right">Handy: (0176) 59 17 77</td>
									</tr>
									<tr>
										<td class="border-0 text-right">E-Mail: jonasmeyer@yahoo.de</td>
									</tr>
								</tbody>
							</table>
						</div></div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table">
							<tbody>
								<tr>
									<td colspan="2" class="border-0">
										Herr Meyer, <div class="itm-lst 1itm d-inline-block" id="lst-1">
											<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 210px;"> ▼ </h2>
										</div>
										<span class="tran"><br><small>마이어씨, 당신의 직업은 무엇입니까?</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										Ich bin Ingenieur. Ich arbeite bei Siemens.
										<span class="tran"><br><small>저는 엔지니어입니다. 지멘스에서 일하고 있습니다.</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm d-inline-block" style="min-width: 50px;" id="lst-2">
											<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 210px;"> ▼ </h2>
										</div>
										<span class="tran"><br><small>당신의 주소는 어떻게 됩니까?</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										Meine Adresse ist Nonnendammallee 72, 13628 Berlin.
										<span class="tran"><br><small>저의 주소는 논넨담말레 72, 13628 베를린입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm d-inline-block" style="min-width: 50px;" id="lst-3">
											<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 210px;"> ▼ </h2>
										</div>
										<span class="tran"><br><small>당신의 전화번호는 어떻게 됩니까?</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										Meine Telefonnummer ist 958313. Und die Vorwahl ist 0941.
										<span class="tran"><br><small>제 전화번호는 958313입니다. 그리고 지역번호는 0941입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm d-inline-block" style="min-width: 50px;" id="lst-4">
											<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 210px;"> ▼ </h2>
										</div>
										<span class="tran"><br><small>당신의 이메일주소는 어떻게 됩니까?</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										Meine E-Mail-Adresse ist jonasmeyer@yahoo.de.
										<span class="tran"><br><small>저의 이메일 주소는 jonasmeyer@yahoo.de입니다.</small></span>
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

				// 정답 확인 div 상자 배경색 속성 없애10
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find("button.btn")) {
						$(this).find("button.btn").addClass("text-success");
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
		// pan = ["1","2","3","4","5","6","7","8","9","10"];
		pan = [];
		var il = $("#itms>.itm").length;
		for(var p = 0; p < pan.length; p++) {
		var pani = "#lst-" + pan[p];
			$(".itm").each(function() {
				if($(this).hasClass("ans" + pan[p])) {
					$("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[p] + ">h2"));
					$("#" + $(this).attr("id")).addClass("btn-inline-block");
					$("#" + $(this).attr("id")).addClass("btn-light");
					$("#lst-" + pan[p] + ">h2").remove();
					// $("#lst-" + pan[p]).closest("tr").find(".tran").show();
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