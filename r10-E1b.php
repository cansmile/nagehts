<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="1">
				den
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm px-3" id="2">
				der
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
				den
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm px-3" id="4">
				dem
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="5">
				den
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="6">
				die
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="7">
				den
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="8">
				die
				</button>
				<button type="button" class="mt-1 mx-1 btn ans0 btn-lg btn-outline-dark itm px-3" id="9">
				des
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="10">
				die
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="11">
				das
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="12">
				den
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
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">1.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-10.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz fliegt unter&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Stuhl.<span class="tran"><br><small>참새가 의자 아래로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">2.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-11.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz fliegt in&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Kasten<span class="tran"><br><small>참새가 상자 안으로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">3.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-12.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz fliegt über&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Tisch.<span class="tran"><br><small>참새가 책상 위로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">4.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-13.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-2">
											Der Spatz fliegt hinter&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Milch.<span class="tran"><br><small>참새가 우유 뒤로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">5.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-14.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz fliegt vor&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Spiegel.<span class="tran"><br><small>참새가 거울 앞으로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">6.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-15.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-2">
											Der Spatz fliegt neben&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Vase.<span class="tran"><br><small>참새가 꽃병 옆으로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">7.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-16.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-2">
											Der Spatz fliegt zwischen&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Bücher.<span class="tran"><br><small>참새가 책 사이로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">8.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-17.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-3">
											Der Spatz fliegt an&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Fenster.<span class="tran"><br><small>참새가 창가로 날아간다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table text-center">
							<tbody>
								<tr>
									<td width="20" class="border-0 align-top">9.</td>
									<td class="border-0"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E1-18.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz fliegt auf&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;Apfel.<span class="tran"><br><small>참새가 사과 위로 날아간다.</small></span>
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
<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./<?php echo($root); ?>js/popper.min.js"></script>
<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
<!-- interact.min.js -->
<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
<script>
	$(".tran").hide();
	$("#chk").hide();

	$(document).ready(function() {

		// 정답확인
		$("#chk").on("click", function() {
			var na = "";
			if(($("#itms").find("button").length-$(".ans0").length) < 1) {
				$(".tran").show();

				// 정답 확인 div 상자 배경색 속성 없애10
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find("button.btn")) {
						$(this).find("button.btn").addClass("text-success font-weight-bold");
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
<?php include "footer.php"; ?>
	</body>
</html>