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
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="1">
					Auf der linken(rechten) Seite finden Sie .....
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="2">
					Bitte.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="3">
					Dann die (erste, zweite, dritte) Straße links/rechts!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="4">
					Der/Die/Das .... ist in der Nähe.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="5">
					Entschuldigen Sie bitte! Gibt es hier einen/ eine/ ein....?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="6">
					Entschuldigung, wie komme ich zum/ zur....?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="7">
					Entschuldigung, wo finde ich …?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="8">
					Gehen Sie (die ...Straße) immer geradeaus/nach links/ nach rechts.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="9">
					Gern geschehen!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="10">
					Ich bin fremd hier.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="11">
					Ich suche ....
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="12">
					Neben dem Supermarkt.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="13">
					Nichts zu danken!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="14">
					Tut mir Leid. Das weiß ich nicht.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="15">
					Verzeihung, ich suche...
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="16">
					Vielen Dank!
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="17">
					Zwischen der Post und dem Reisebüro.
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
						<h2>[ <small>단어를 알맞은 위치에 넣으세요.</small> ]</h2>
					</div>
				</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2" id="lst-1">
					<h2 class="btn btn-xl bg-white ttl d-block">nach dem Weg fragen</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2" id="lst-2">
					<h2 class="btn btn-xl bg-white ttl d-block">den Weg beschreiben</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-primary border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2" id="lst-3">
					<h2 class="btn btn-xl bg-white ttl d-block">nicht den Weg kennen</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-orange border-white itm-lst col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 p-2" id="lst-4">
					<h2 class="btn btn-xl bg-white ttl d-block">sich bedanken / antworten</h2>&nbsp;
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
		</div>
		<!-- 리스트 끝 -->
		</section>

<div id="marg" class="border-danger"></div>		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
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

					<?php include "wahl.php"; ?>

					var pan = new Array(), pann;
					// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
					pan = [];
					for(var p = 0; p < pan.length; p++) {
						pann = "#"+pan[p];
						for(var i = 0; i < $(".itm-lst").length; i++) {
							if($(pann).hasClass("ans" + (i+1))) {
								$(pann).insertAfter("#lst-" + (i+1) + ">h2");
							}
						}
						// $(pann).find(".tran").show();
					}
					$(".itm-lst>button").addClass("btn-block btn-light");
		}
		);
</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>