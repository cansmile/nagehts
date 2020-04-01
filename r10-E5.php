<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="1">
				neben dem Hotel / hinter der Kirche und dem Stadtmuseum
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="2">
				neben der Universität /  hinter der Autowerkstatt
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
				zwischen dem Supermarkt und der Stadtbibliothek / neben dem Supermarkt
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="4">
				zwischen der Kirche / neben dem Museum
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
					<div class="col-sm-12 col-md-12 col-lg-12"><img src="./images/Reihe 10/Reihe-10-E5-1 (2).png" alt="Entschuldigung, wo ist ... ?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 border border-dark rounded p-5">
						<strong>z.b.:</strong><br>
						<ul type="square">
							<li>Entschuldigung, wo ist das Hotel?<span class="tran"><br><small>실례지만, 호텔이 어디 있나요?</small><br></span></li>
						</ul>
						<ul type="circle">
							<li>
								<div class="itm-lst 1itm d-inline-block" id="lst-1">
									Das ist
									<h2 class="btn btn-warning btn-lg ttl mx-1 d-block" style="min-width: 450px; max-width: 600px;">
									▼ </h2>
									.
								</div>
							</li>
						</ul>
						<span class="tran"><br><small>슈퍼마켓과 시립도서관 사이에 또는 슈퍼마켓 옆에 있습니다.</small><br></span><br>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm-12 col-md-12 col-lg-4 my-2 font-weight-bold">
						1. Entschuldigen Sie, wo ist die Kirche?<span class="tran"><br><small>실례지만, 교회가 어디 있나요?</small><br></span>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-8 my-2">
						Sie ist
						<div class="itm-lst 1itm d-inline-block" id="lst-2">
							<h2 class="btn btn-warning btn-lg ttl mx-1 d-block" style="min-width: 450px; max-width: 600px;">
							▼ </h2>
						</div>
							.
						<span class="tran"><br><small>대학교 옆에 또는 자동차정비소 뒤에 있습니다.</small><br></span>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 my-2 font-weight-bold">
						2. Entschuldigen Sie, wo ist die Universität?<span class="tran"><br><small>실례지만, 대학교가 어디 있나요?</small><br></span>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-8 my-2">
						Sie ist
						<div class="itm-lst 1itm d-inline-block" id="lst-3">
							<h2 class="btn btn-warning btn-lg ttl mx-1 d-block" style="min-width: 450px; max-width: 600px;">
							▼ </h2>
						</div>.
						 <span class="tran"><br><small>교회와 박물관 사이에 또는 박물관 옆에 있습니다</small><br></span>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 my-2 font-weight-bold">
						3. Entschuldigen Sie, wo ist der Supermarkt?<span class="tran"><br><small>실례지만, 슈퍼마켓이 어디 있나요?</small><br></span>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-8 my-2">
						Er ist
						<div class="itm-lst 1itm d-inline-block" id="lst-4">
							<h2 class="btn btn-warning btn-lg ttl mx-1 d-block" style="min-width: 450px; max-width: 600px;">
							▼ </h2>
						</div>.
						<span class="tran"><br><small>호텔 옆에 또는 교회 뒤에 있습니다</small><br></span>
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
		pan = [1];
		var il = $("#itms>.itm").length;
		for(var p = 0; p < pan.length; p++) {
		var pani = "#lst-" + pan[p];
			$(".itm").each(function() {
				if($(this).hasClass("ans" + pan[p])) {
					$("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[p] + ">h2"));
					// $("#" + $(this).attr("id")).addClass("btn-inline-block");
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