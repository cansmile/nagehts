<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="1">
				an
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="2">
				auf
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="3">
				hinter
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="4">
				in
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="5">
				neben
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="6">
				unter
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="7">
				vor
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="8">
				zwischen
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="9">
				über
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
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">1.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-1.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-1">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;dem Stuhl.<span class="tran"><br><small>참새가 의자 아래 있다,</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">2.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-2.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-2">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;dem Kasten.<span class="tran"><br><small>참새가 상자 안에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">3.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-3.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-3">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;der Banane.<span class="tran"><br><small>참새가 바나나 위에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">4.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-4.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-4">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;der Milch.<span class="tran"><br><small>참새가 우유 뒤에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">5.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-5.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-5">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;dem Spiegel.<span class="tran"><br><small>참새가 거울 앞에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">6.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-6.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-6">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;der Vase.<span class="tran"><br><small>참새가 꽃병 옆에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">7.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-7.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-7">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;den Büchern.<span class="tran"><br><small>참새가 책 사이에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">8.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-8.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-8">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;dem Fenster.<span class="tran"><br><small>참새가 창가에 있다.</small></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 my-2">
						<table class="table table-borderless text-center">
							<tbody>
								<tr>
									<td width="20" class="align-top">9.</td>
									<td><img src="./images/Reihe 10/Reihe-10-E1-9.png" alt="" style="max-width: 100%; height: auto;"></td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="itm-lst 1itm" id="lst-9">
											Der Spatz ist&nbsp;<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px;">
											▼ </h2>&nbsp;dem Apfel.<span class="tran"><br><small>참새가 사과 위에 있다.</small></span>
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