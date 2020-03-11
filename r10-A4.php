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
				<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm px-3" id="1">
				Wenn ich Aspirin holen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm px-3" id="2">
				Wenn ich Bahnkarten besorgen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm px-3" id="3">
				Wenn ich Brot holen will 
				</button>
				<button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark itm px-3" id="4">
				Wenn ich ein Paket senden will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="5">
				Wenn ich eine Reise nach Spanien buchen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="6">
				Wenn ich übernachten will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm px-3" id="7">
				Wenn ich einen Film sehen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="8">
				Wenn ich essen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="9">
				Wenn ich beten will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="10">
				Wenn ich Fleisch und Käse kaufen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm px-3" id="11">
				Wenn ich frisches Gemüse und Obst kaufen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="12">
				Wenn ich Geld abheben will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm px-3" id="13">
				Wenn ich Gemälde aus dem Mittelalter besichtigen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="14">
				Wenn ich Blumen kaufen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="15">
				Wenn ich Kaffee trinken und Kuchen essen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="16">
				Wenn ich schwimmen will
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="17">
				Wenn ich spazieren gehen will
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
						<h2>[ <small>문장을 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h2>
					</div>
				</div>
				<div class="row">
			</div>
				<div class="row mt-2">
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-1">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich den Bluemenladen.<span class="tran"><br><small>꽃을 사고 싶으면, 꽃집에 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-2">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Hotel Augustin.<span class="tran"><br><small>숙박하고 싶으면, 아우구스틴 호텔로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-3">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich in die Frauenkirche.<span class="tran"><br><small>기도하고 싶으면, 프라우엔 교회로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-4">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Restaurant.<span class="tran"><br><small>먹고 싶으면, 마레도 레스토랑으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-5">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich auf die Bank Sparkasse.<span class="tran"><br><small>현금을 인출하고 싶으면, 슈파카세 은행으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-6">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Reisebüro Welt.<span class="tran"><br><small>스페인 여행을 예약하고 싶으면, 벨트 여행사로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-7">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Café Dornbusch.<span class="tran"><br><small>커피를 마시고 케이크를 먹고 싶으면, 도른부슈 카페로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-8">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich in den Supermarkt Kaiser.<span class="tran"><br><small>고기와 치즈를 사고 싶으면, 카이저 슈퍼마켓으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-9">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich in den Park.<span class="tran"><br><small>산책하러 가고 싶으면, 공원으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-10">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Schwimmbad.<span class="tran"><br><small>수영하고 싶으면, 수영장으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-11">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Kino.<span class="tran"><br><small>영화를 보고 싶으면, 영화관으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-12">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich in die Bäckerei Achso.<span class="tran"><br><small>빵을 사고 싶으면, 악소 빵집으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-13">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich auf den Hauptbahnhof.<span class="tran"><br><small>기차표를 구입하고 싶으면, 중앙역으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-14">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich auf den Markt.<span class="tran"><br><small>신선한 야채와 과일을 사고 싶으면, 시장으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-15">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich in die Apotheke.<span class="tran"><br><small>아스피린을 사고 싶으면, 약국에 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-16">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich ins Stadtmuseum.<span class="tran"><br><small>중세시대의 그럼을 구경하고 싶으면, 시립박물관으로 갑니다.</small></span>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 my-4">
						<div class="itm-lst 1itm" id="lst-17">
							<h2 class="btn btn-warning btn-lg ttl d-inline-block" style="position: relative; top: 6px; max-width: 150px; min-width: 150px;">
							▼ </h2>,&nbsp;gehe ich auf die Post.<span class="tran"><br><small>소포를 보내고 싶으면, 우체국으로 갑니다.</small></span>
						</div>
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
								var st = "쓰읍~ 다시 해 보실까요!";
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
					pan = [6,8,9,10,12,14];
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