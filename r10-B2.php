<?php include "header.php"; ?>
	<body>
<?php include "back.php"; ?>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm px-3" id="1">
				Berliner Straße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm px-3" id="2">
				Brechtstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="3">
				Bäckerei Achso
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="4">
				Café Dornbusch
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="5">
				Café Dornbusch
				</button>
				<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm px-3" id="6">
				die Brechtstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm px-3" id="7">
				Hauptstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="8">
				Hauptstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="9">
				Hotel Augustin
				</button>
				<button type="button" class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark itm px-3" id="10">
				Kino Megabox
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="11">
				Pragerstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark itm px-3" id="12">
				Restaurant Maredo
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="13">
				St-Petrus-Platz
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="14">
				St-Petrus-Platz
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="15">
				Stadtbibliothek
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="16">
				Stadtmuseum
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="17">
				Stadtmuseum
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm px-3" id="18">
				Telefonzelle
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="19">
				Theater
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
					<div class="col-12 border border-dark bg-secondary text-white font-weight-bold rounded p-1 pt-3 pl-3 mt-5">
						<span class="border border-white p-1 px-2 rounded bg-dark">Dialog 1</span> Wie komme ich zum
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-1">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>?
					</div>
					<div class="col-12 p-3" style="line-height: 250%;">
						Zuerst gehen Sie die
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-2">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						geradeaus bis zum
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-3">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Dort links an der Ecke ist die
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-4">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Hinter der Bäckerei ist das Hotel Augustin.
						<span class="tran"><br><small>우선 하우프트슈트라세에서 세인트-페트루스-플라츠까지 직진하세요. 악소 빵집이 왼쪽 코너에 있습니다. 빵집 뒤에 아우구스틴 호텔이 있습니다.</small></span>
					</div>
					<div class="col-12 border border-dark bg-secondary text-white font-weight-bold rounded p-1 pt-3 pl-3 mt-5">
						<span class="border border-white p-1 px-2 rounded bg-dark">Dialog 2</span> Wie komme ich zum / zur
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-5">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>?
					</div>
					<div class="col-12 p-3" style="line-height: 250%;">
						Zuerst hier geradeaus bis zur
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-6">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						, dort rechts. An der
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-7">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						und dem
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-8">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						vorbei. Und da links an der Ecke liegt auch das
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-5">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						.
						<span class="tran"><br><small>우선 여기서 프라거슈트라세까지 직진하셔서, 거기서 오른쪽으로 가세요. 시립도서관과 극장을 지나 가세요. 그리면 거기 왼쪽코너에 시립박물관이 있습니다.</small></span>
					</div>
					<div class="col-12 border border-dark bg-secondary text-white font-weight-bold rounded p-1 pt-3 pl-3 mt-5">
						<span class="border border-white p-1 px-2 rounded bg-dark">Dialog 3</span> Wie komme ich zum/zur
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-10">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>?
					</div>
					<div class="col-12 p-3" style="line-height: 250%;">
						Hier die
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-11">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						geradeaus bis zum
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-3">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Dort an der
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-13">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						rechts in die
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-14">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Gehen Sie
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-15">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						geradeaus bis zur
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-16">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Dort sehen Sie dann
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-10">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						. Es liegt direkt zwischen dem
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-18">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						und dem
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-19">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
						.
						<span class="tran"><br><small>여기 하우프트슈트라세에서 세인트-페트루스-플라츠까지 직진하세요. 거기 공중전화박스에서 오른쪽 브레히트슈트라세로 가세요. 브레히트슈트라세를 따라 베를리너슈트라세까지가세요. 거기서 도른부슈 카페가 보입니다. 바로 메가박스 영화관과 마레도 레스토랑 사이에 위치하고 있습니다.</small></span>
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
					pan = [1,2,8,11,14,19];
					var il = $("#itms>.itm").length;
					for(var p = 0; p < pan.length; p++) {
					var pani = "#lst-" + pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans" + pan[p])) {
								$("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[p] + ">h2"));
								$("#" + $(this).attr("id")).addClass("btn-inline-block btn-light");
								$("#" + $(this).attr("id")).css("min-width","100%");
								$("#" + $(this).attr("id")).css("position","relative");
								$("#" + $(this).attr("id")).css("left","-6px");
								$("#" + $(this).attr("id")).css("top","-6px");
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