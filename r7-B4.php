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
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="1">
					Gehen wir ins Café?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm" id="2">
					Vielleicht...
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="3">
					Gehen wir morgen Abend ins Kino?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="4">
					Tut mir leid, ich habe leider keine Zeit.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="5">
					Ich kann leider nicht.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="6">
					Ich habe schon etwas vor.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm" id="7">
					Das weiß ich noch nicht.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="8">
					Okay!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="9">
					Ja, klar!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="10">
					Lust auf ...?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="11">
					Gute Idee!
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
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<table class="table">
					<thead>
						<tr>
							<th class="border-0" scope="col" colspan="2"><span class="bg-info text-white rounded p-2">1. etwas vorschlagen&nbsp;<small>제안하기</small></span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="3" width="20" class="bg-info border border-white p-0 &nbsp;m-0 text-white text-center align-middle"></td>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
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
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<table class="table">
					<thead>
						<tr>
							<th class="border-0" scope="col" colspan="2"><span class="bg-primary text-white rounded p-2">2. reagieren <small>반응하기</small></span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="3" width="20" class="bg-danger border border-white p-0 m-0 text-white text-center align-middle">&nbsp;</td>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="3" width="20" class="bg-success border border-white p-0 m-0 text-white text-center align-middle">&nbsp;</td>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="3" width="20" class="bg-primary border border-white p-0 m-0 text-white text-center align-middle">&nbsp;</td>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<div class="itm-lst 1itm" id="lst-9">
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

<?php include "wahl.php"; ?>

	// 정답확인
	$("#chk").on("click", function() {
		var na = "";
		if($("#itms").find("button").length < 1) {
			$(".tran").show();

			$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
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

	var pan = new Array();
	// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
	pan = ["1","3","5","6","8"];
	var il = $("#itms>.itm").length;
	for(var p = 0; p < pan.length; p++) {
	var pani = "#lst-" + pan[p];
		$(".itm").each(function() {
			if($(this).hasClass("ans" + pan[p])) {
				$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
				$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
				$("#" + $(this).attr("id")).addClass("border-0");
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