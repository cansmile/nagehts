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
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm rounded-circle px-3" id="1">
					a
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm rounded-circle px-3" id="2">
					b
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm rounded-circle px-3" id="3">
					c
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm rounded-circle px-3" id="4">
					d
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm rounded-circle px-3" id="5">
					e
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm rounded-circle px-3" id="6">
					f
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm rounded-circle px-3" id="7">
					g
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
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>a</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-1.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>b</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-2.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>c</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-3.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>d</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-4.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>e</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-5.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>f</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-6.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
							<div class="col-4 p-2 border border-dark rounded text-center" style="line-height: 5em;"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>g</strong></span><br><img src="./images/Reihe 9/Reihe-9-A2-7.png" alt="Zu welchem Arzt gehen Sie?" style="max-width: 100%; height: auto;"></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">1.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">An <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-2 py-1 mx-1">Silvester</span> und Neujahr feiern alle Familien zu Hause. Sie spielen Karten oder andere Spiele. Um Mitternacht macht man ein großes Feuerwerk und wünscht sich gegenseitig ein gutes neues Jahr.
									<span class="tran"><small>모든 가족들이 송구영신과 새해는 집에서 지낸다. 가족들은 카드놀이나 다른 놀이들을 한다. 자정이 되면 커다란 폭죽을 터트리고 서로에게 새해의 복을 빌어준다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">2.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
								 	<td class="border-0 align-middle" style="line-height: 220%;">An <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span> schenken sich Verliebte und Freunde Postkarten, Geschenke oder Blumen.
									<span class="tran"><small>발렌타임의 날에는 사랑하는 이들이나 친구들이 우편엽서, 선물 혹은 꽂을 선물한다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">3.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">Die Leute freuen sich, wenn der Winter bald vorbei ist und der Frühling kommt. Zu dieser Zeit feiert man <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span>, auch Fastnacht oder Fasching genannt. Am Rosenmontag gibt es große Karnervalumzüge. Dafür sind Köln, Mainz und München bekannt.
									<span class="tran"><small>곧 겨울이 가고 봄이 오면 기뻐한다. 이시기에 사람들은 카니발을 하고 이것을 사육제라고도 부른다. 사육제 월요일에는 성대한 카니발퍼레이드가 있다. 이러한 카니발로 쾰른, 마인쯔 그리고 뮌헨이 유명하다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">4.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">An <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span> versteckt der Osterhase Eier im Garten. Kinder suchen dann die Eier.
									<span class="tran"><small>부활절에 부활절 토끼가 정원에 계란을 숨겨놓는다. 그럼 아이들은 그 계란을 찾는다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">5.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">In deutschen Familien steht zu <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span> der Adventskranz mit vier Kerzen. An den vier Sonntagen vor Weihnachten brennen die Kerzen.
									<span class="tran"><small>대림절에 독일 가정에는 네 개의 초를 가진 대림절화관이 있다. 성탄절 전 네 번의 대림절에 이 초들이 빛을 비춘다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">6.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">Nikolaus war ein Bischof und ein Freund der Kinder. Am <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span> stellen Kinder am Abend vor dem 6. Dezember ihre Schuhe oder Socken vor dem Eingang der Wohnung. Am nächsten Morgen finden sie genau dort Süßigkeiten.
									<span class="tran"><small>니콜라우스는 주교였고 아이들의 친구였다. 성니콜라우스의 날,  12월 6일 전날 밤에 아이들은 집 현관앞에 신발이나 양말을 놔둔다. 그다음 날 아침 바로 그곳에서 사탕등과 같은 단 것들을 찾는다.</small></span></td>
								</tr>
								<tr>
									<th width="50" class="border-0 align-top" scope="col">7.</th>
									<td width="50" class="border-0 align-top">
										<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block rounded-circle">
											▼ </h2>
										</div>
									</td>
									<td class="border-0 align-middle" style="line-height: 220%;">Man feiert häufig <span class="border border-dark border-left-0 border-top-0 border-right-0 rounded-0 px-5 py-1 mx-1">&nbsp;&nbsp;</span> in Deutschland wie folgt: Am Morgen schmückt die ganze Familie den Weihnachtsbaum. Nach dem Kaffeetrinken und dem Weihnachtsstollen geht sie um 17 Uhr in die Kirche. Wenn sie nach der Kirche wieder zu Hause ist, singen alle gemeinsam Weihnachtslieder. Sie packen dann die Geschenke aus. Ein festliches Weihnachtsessen, z.B. die Weihnachsgans gibt es erst am 25. Dezember.
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

			// 정답 확인 div 상자 배경색 속성 없애기
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
				var st = "쓰읍~ 다시 해 보실까요";
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