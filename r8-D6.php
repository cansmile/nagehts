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
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm rounded-circle px-3" id="1">
					a
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm rounded-circle px-3" id="2">
					b
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm rounded-circle px-3" id="3">
					c
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					d
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					e
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					f
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					g
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
					<div class="my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th class="border-0 align-middle" scope="row">a</th>
									<td class="border-0 align-middle">Nimm doch Hustensaft!
										<span class="tran"><br><small>기침 시럽 복용!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">b</th>
									<td class="border-0 align-middle">Lernt nicht viel und geht spazieren!
									<span class="tran"><br><small>(너희들) 많이 공부하지 말고 산책가거라!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">c</th>
									<td class="border-0 align-middle">Seien Sie bitte ruhig!
									<span class="tran"><br><small>조용히 하세요!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">d</th>
									<td class="border-0 align-middle">Geh zum Arzt!
									<span class="tran"><br><small>의사에게 가거라(너)!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">e</th>
									<td class="border-0 align-middle">Habt keine Angst!
									<span class="tran"><br><small>두려워하지 말아라(너희들)!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">f</th>
									<td class="border-0 align-middle">Trinken Sie Kamillentee!
									<span class="tran"><br><small>카모마일 차 마시지요!</small></td>
								</tr>
								<tr>
									<th class="border-0 align-middle" scope="row">g</th>
									<td class="border-0 align-middle">Machen Sie Rückengymnastik!
									<span class="tran"><br><small>허리 운동하세요!</small></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">1.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Husten (Kind)
									<span class="tran"><br><small>기침 (어린이)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">2.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Grippe (Mina)
									<span class="tran"><br><small>독감 (미나)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">3.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Rückenschmerzen (Frau Park)
									<span class="tran"><br><small>요통 (박 여사)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">4.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Bauchschmerzen (Herr Kim)
									<span class="tran"><br><small>독감 (김씨)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">5.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">nervös (wir)
									<span class="tran"><br><small>긴장 (우리)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">6.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Prüfung (wir)
									<span class="tran"><br><small>검사 (우리)</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">7.</th>
									<td width="50" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">zu laut (Studenten)
									<span class="tran"><br><small>큰 소리 (학생)</small></span></td>
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

			// 정답 확인 div 상자 배경색 속성 없애기
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
	pan = [1];
	var il = $("#itms>.itm").length;
	for(var p = 0; p < pan.length; p++) {
	var pani = "#lst-" + pan[p];
		$(".itm").each(function() {
			if($(this).hasClass("ans" + pan[p])) {
				$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
				$("#" + $(this).attr("id")).addClass("btn-block");
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