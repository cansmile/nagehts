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
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="1">
					der Stuhl<span class="tran"><br><small>의자</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm" id="2">
					der Vorhang<span class="tran"><br><small>커튼</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm" id="3">
					die Hände (Pl.)<span class="tran"><br><small>손(복수)</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm" id="4">
					die Zahnbürste<span class="tran"><br><small>칫솔</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm" id="5">
					der Tisch<span class="tran"><br><small>책상</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="6">
					die Zahnpasta<span class="tran"><br><small>치약</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm" id="7">
					das Auge<span class="tran"><br><small>눈</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm" id="8">
					die Vase<span class="tran"><br><small>꽃병</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="9">
					die Blume<span class="tran"><br><small>화초</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="10">
					die Brille<span class="tran"><br><small>안경</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm" id="11">
					der Bleistift<span class="tran"><br><small>연필</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="12">
					das Fenster<span class="tran"><br><small>창문</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="13">
					die Handschuhe (Pl.)<span class="tran"><br><small>장갑(복수)</small></span></button>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="14">
					der Spitzer<span class="tran"><br><small>연필깎이</small></span></button>
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
					<h2>
					<small> [ 단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요. ] </small>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-4.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-2.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-3.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-1.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-5.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-6.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-7.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-8.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-9.png" alt="Was ist das?" style="max-width: 100%; height: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-10.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-11.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-11">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-12.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-12">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-13.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-13">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table">
						<thead>
							<th height="200" class="text-center border-0 align-middle" scope="col"><img src="./images/Reihe 4/Reihe-4-B4-14.png" alt="Was ist das?" style="max-height: 100%; width: auto;"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="border-0">
									<div class="itm-lst 1itm" id="lst-14">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</th>
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
	<div id="marg"></div>
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
			<?php include "wahl.php";
			?> // 정답확인
			$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".so").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}

						if($(this).hasClass("ans"+ (a))) {
							$(this).addClass("text-success font-weight-bold");
						}
						else {
							$(this).addClass("text-warning font-weight-bold");
							$(this).find(".tran").show();

						}
						;

						if($(this).hasClass("text-warning")) {
							// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
							for(var i = 1; i <= $(".itm-lst").length; i++) {
								if($(this).hasClass("ans"+i)) {
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
									// $(lstn).append(i);
								}
							}
						};

					}
				);
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

			}
			}
			);
			$("#0").show();
			$(".alert").hide();
			}
			);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>