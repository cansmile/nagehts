<?php require "header.php"; ?>

<body>
<?php require "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm" id="1">
						Albertinum
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm" id="2">
						der Zwinger
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm" id="3">
						Deutsches Hygienemuseum
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm" id="4">
						die Semperoper
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm" id="5">
						Frauenkirche
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm" id="6">
						Goldener Reiter
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm" id="7">
						Hochschule für Bild und Kunst
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm" id="8">
						Kreuzkirche
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm" id="9">
						VW- Gläserne Manufaktur
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
				<div class="col-sm-12 col-md-8 col-lg-9"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-c3.png" alt="" style="max-width: 100%; height: auto;"></div>
				<div class="col-sm-12 col-col-md-4 col-lg-3">
					<div class="row">
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							1. <div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							2. <div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							3. <div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							4. <div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							5. <div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							6. <div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							7. <div class="itm-lst 1itm d-inline-block" id="lst-7" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							8. <div class="itm-lst 1itm d-inline-block" id="lst-8" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-12 my-2">
							9. <div class="itm-lst 1itm d-inline-block" id="lst-9" style="min-width: 200px; max-width: 100%;">
								<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인 </div>
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
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
					// 정답확인
					$("#chk").on("click", function() {
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							if($(this).find(".btn")) {
								$(this).find(".btn").addClass("text-success font-weight-bold");
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
					$("#0").show();
					$(".alert").hide();

					<?php require "wahl.php"; ?>

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=[1,3,7,9];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}

		}
		);
</script>
	<!-- ion.sound finished -->
	<?php require "footer.php"; ?>
	</body>
</html>