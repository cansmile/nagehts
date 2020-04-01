<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="1">Ostern<span class="tran"><br><small>부활절</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="2">Nikolaustag<span class="tran"><br><small>성니콜라스</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="3">Valentinstag<span class="tran"><br><small>발렌타인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="4">Karneval<span class="tran"><br><small>카니발</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="5">Silvester<span class="tran"><br><small>송구영신</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="6">Heiligabend<span class="tran"><br><small>성탄전야</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="7">Advent<span class="tran"><br><small>대림절</small></span>
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
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-8.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-9.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-10.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-11.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-12.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-13.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
					<div class="col-sm-6 col-md-3 col-lg p-2 border border-dark rounded text-center" style="line-height: 5em;"><img src="./images/Reihe 9/Reihe-9-A2-14.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">1.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">
										An <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>und Neujahr feiern alle Familien zu Hause. Sie spielen Karten oder andere Spiele. Um Mitternacht macht man ein großes Feuerwerk und wünscht sich gegenseitig ein gutes neues Jahr.
									<span class="tran"><small>모든 가족들이 송구영신과 새해는 집에서 지낸다. 가족들은 카드놀이나 다른 놀이들을 한다. 자정이 되면 커다란 폭죽을 터트리고 서로에게 새해의 복을 빌어준다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">2.</th>
								 	<td class="border-0 align-middle" style="line-height: 220%;">
										An <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>schenken sich Verliebte und Freunde Postkarten, Geschenke oder Blumen.
									<span class="tran"><small>발렌타인데이는 사랑하는 이들이나 친구들이 우편엽서, 선물 혹은 꽂을 선물한다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">3.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">
										Die Leute freuen sich, wenn der Winter bald vorbei ist und der Frühling kommt. Zu dieser Zeit feiert man <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>, auch Fastnacht oder Fasching genannt. Am Rosenmontag gibt es große Karnervalumzüge. Dafür sind Köln, Mainz und München bekannt.
									<span class="tran"><small>곧 겨울이 가고 봄이 오면 기뻐한다. 이시기에 사람들은 카니발을 하고 이것을 사육제라고도 부른다. 사육제 월요일에는 성대한 카니발퍼레이드가 있다. 이러한 카니발로 쾰른, 마인츠 그리고 뮌헨이 유명하다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">4.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">
										An <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>versteckt der Osterhase Eier im Garten. Kinder suchen dann die Eier.
									<span class="tran"><small>부활절에는 부활절 토끼가 정원에 계란을 숨겨놓는다. 그럼 아이들은 그 계란을 찾는다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">5.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">
										In deutschen Familien steht zu <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>der Adventskranz mit vier Kerzen. An den vier Sonntagen vor Weihnachten brennen die Kerzen.
									<span class="tran"><small>대림절에 독일 가정에는 네 개의 초가 있는 대림절화관이 있다. 성탄절 전 네 번의 일요일에 이 초들이 불을 밝힌다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">6.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">
										Nikolaus war ein Bischof und ein Freund der Kinder. Am <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>stellen Kinder am Abend vor dem 6. Dezember ihre Schuhe oder Socken vor dem Eingang der Wohnung. Am nächsten Morgen finden sie genau dort Süßigkeiten.
									<span class="tran"><small>니콜라우스는 주교였고 아이들의 친구였다. 성니콜라우스의 날,  12월 6일 전날 밤에 아이들은 집 현관앞에 신발이나 양말을 놔둔다. 그다음 날 아침 바로 거기에서 사탕등과 같은 단 것들을 발견한다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">7.</th>
									<td class="border-0 align-middle" style="line-height: 220%;">

										Man feiert häufig <div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
										</div>									 
									<span class="tran"><small>독일에서 크리스마스는 이렇게 지낸다: 아침에는 온 가족이 크리스마스나무를 장식한다. 커피와 슈톨렌 (크리스마스에 먹는 빵)을 먹고 마신 후에 17시에 교회로 간다. 교회에서 집으로 다시오면 가족들은 함께 크리스마스 노래를 부르고 크리스마스선물을 푼다. 크리스마스 음식, 예를 들어 성탄절거위요리는 12월 25일에 먹는다.</small></span></td>
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
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogrouph.js"></script>
	<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./oxsound.php"); ?>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2)=="_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r9 A0", {
						part: "0"
					}
					);
					$("#0").show();
					$(this).hide();
				}
				else if($(this).html()=="▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r9 A0", {
						part: $(this).attr("id")
					}
					);
					$(this).html("❚❚");
				}
				else if($(this).html()=="❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r9 A0", {
						part: $(this).attr("id")
					}
					);
					$(this).html("▶");
				}
				else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r9 A0", {
						part: $(this).attr("id")
					}
					);
					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id")=="0") {
						$(this).hide();
						$("#0_p").show();
					}
					;
				}
				;
			}
			);
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
						$("#"+ $(this).attr("id")).addClass("btn-block");
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
	<?php include "footer.php"; ?>
	</body>
</html>