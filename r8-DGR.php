<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm rounded px-3" id="1">
					부탁
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm rounded px-3" id="2">
					소망
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm rounded px-3" id="3">
					명령
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm rounded px-3" id="4">
					충고/조언
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
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">1.</th>
									<td width="200" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Räum auf!
									<span class="tran"><br><small>우리 아이는 감기에 걸렸어요.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">2.</th>
									<td width="200" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Helft mir, bitte.
									<span class="tran"><br><small>저는 두통이 있어요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">3.</th>
									<td width="200" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Bleib bitte im Bett!
									<span class="tran"><br><small>저는 복통이 있어요.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-middle" scope="col">4.</th>
									<td width="200" class="border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle">Kommen Sie gut nach Hause!
									<span class="tran"><br><small>저는 귀가 아파요.</small></span></td>
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
				$("#lst-" + pan[p]).closest("tr").find(".tran").show();
			}
		})
	}
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
	</body>
</html>
<?php include "footer.php"; ?>