<?php require "header.php"; ?>
	<body>
<?php require "nav.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" id="wahl">
	<div class="container">
		<div class="row">
			<div class="bg-<?php echo($color); ?> wahl_title col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm rounded-circle px-3" id="1">
					a
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm rounded-circle px-3" id="2">
					b
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm rounded-circle px-3" id="3">
					c
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					d
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-6 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>a</strong></span><br><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-D1-1.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-6 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>b</strong></span><br><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-D1-3.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-6 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>c</strong></span><br><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-D1-2.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-6 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>d</strong></span><br><img src="./<?php echo($root); ?>images/Reihe 8/Reihe-8-D1-4.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table table-borderless">
							<tbody>
								<tr>
									<th width="50" class="align-middle" scope="col">1.</th>
									<td width="50" class="align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Mein Kind hat eine Erkältung.
									<span class="tran"><small>우리 아이는 감기에 걸렸어요.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="align-middle" scope="col">2.</th>
									<td width="50" class="align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Ich habe Zahnschmerzen.
									<span class="tran"><small>저는 치통이 있어요.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="align-middle" scope="col">3.</th>
									<td width="50" class="align-middle">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Ich habe Magenschmerzen.
									<span class="tran"><small>저는 복통이 있어요.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="align-middle" scope="col">4.</th>
									<td width="50" class="align-middle">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="align-middle">Mein Ohr tut weh.
									<span class="tran"><small>저는 귀가 아파요.</small></span></td>
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

	/* 정답확인 */
	$("#chk").on("click", function() {
		var na = "";
		if($("#itms").find("button").length < 1) {
			$(".tran").show();

			/* 정답 확인 div 상자 배경색 속성 없애기 */
			$(this).removeClass("btn-light ");

			$(".itm-lst").each(function() {
				if($(this).find("button.btn")) {
					$(this).find("button.btn").addClass("text-success");
				}
			});

			var qa = $(".itm-lst").length; /* 전체 문항 수 */
			var qr = $(".text-success").length; /* 맞춘 항목 수 */
			var pe = (qr / qa) * 100; /* 정답 비율 */
			var tcl = "white"; /* 기본 문자색 */

			/* 분류 기준은 100%, 80%, 60%, 40% */
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
			/* alert(na+"번 문제를 풀어주세요!"); */
		}
	});

<?php require "wahl.php"; ?>

	var pan = new Array();
	/* pan = ["1","2","3","4","5","6","7","8","9","10"]; */
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
				$("#lst-" + pan[p]).closest("tr").find(".tran").show();
			}
		})
	}
});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>
