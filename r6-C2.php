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
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm py-0 my-0" id="1">
					Wann sind die Sprechzeiten von Dr. Fiedler am Mittwoch?<span class="tran"><small><br>피들러 선생님의 수요일 진료시간은 몇 시인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm py-0 my-0" id="2">
					Wann läuft der Film am Samstag ?<span class="tran"><small><br>토요일 영화 상영시간은 언제인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm py-0 my-0" id="3">
					Wann sind die Sprechzeiten freitags von der Allianz?<span class="tran"><small><br>알리안츠 보험회사의 금요일 상담시간은 언제인가요?</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm py-0 my-0" id="4">
					Was kostet der Tanzkurs pro Stunde?<span class="tran"><small><br>댄스 교습소의 시간당 얼마인가요?</small></span>
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
					<h2>Hier sind die Antworten. <small>질문이 주어져 있어요.</small></h2>
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td scope="col" width="60%"><img src="./images/Reihe 6/Reihe-6-C2-1.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
								<td scope="col"><img src="./images/Reihe 6/Reihe-6-C2-3.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td scope="col" width="60%"><img src="./images/Reihe 6/Reihe-6-C2-2.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
								<td scope="col"><img src="./images/Reihe 6/Reihe-6-C2-4.png" alt="Wie sind die Fragen?" style="max-width: 100%; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center" width="50">1.</td>
								<td class="border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-1">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">Der Film läuft um 15.30 ,17.45 und um 20.00 Uhr.<span class="tran"><small><br>영화 상영은 15시 30분, 17시 45분 그리고 20시에 시작합니다.</small></td>
							</tr>
						</span>
					</td>
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center">2.</td>
								<td class="border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-2">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">Am Freitag ist die Sprechzeit von der Allianz von 10 bis 18 Uhr.<span class="tran"><small><br>금요일에 알리안츠 보험회사는 10시에서 18시까지 상담합니다.</small></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 text-center" width="50">3.</td>
								<td class="border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-3">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">Die Sprechstunde von Dr. Fiedler ist am Mittwoch von 8 bis 12 Uhr.<span class="tran"><small><br>피들러 선생님의 수요일 진료 시간은 8시에서 12시까지 입니다.</small></td>
							</tr>
							<tr>
								<td class="border-0 text-center">4.</td>
								<td class="border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-4">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0">&nbsp;</td>
								<td class="border-0">Die Tanzschule kostet 15 Euro pro Stunde.<span class="tran"><small><br>댄스 교습소는 시간당 15유로를 받습니다.</small></td>
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
	<script src="./js/jquery-3.3.1.min.js"></script>
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
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
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
						$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold text-left pl-0");
						$("#"+ $(this).attr("id")).addClass("border-0");
						$("#lst-"+ pan[p] + ">h2").remove();
						$("#lst-"+ pan[p]).closest("table").find(".tran").show();
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