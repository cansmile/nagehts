<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>F1. Aufforderung: Modalverben oder Imperativ</strong> <small>요청: 화법조동사 혹은 명령형</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-borderless table-striped">
								<thead>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col">Modalverben</th>
										<th scope="col">Imperative (du, ihr, Sie)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Du sollst(musst) im Bett bleiben.</td>
										<td><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Bleib im Bett! (du)</td>
									</tr>
									<tr>
										<td><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ihr dürft nicht schwimmen gehen.</td>
										<td><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Geht nicht schwimmen! (ihr)</td>
									</tr>
									<tr>
										<td><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie sollen(müssen) Nasentropfen nehmen.</td>
										<td><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Nehmen Sie Nasentropfen! (Sie)</td>
									</tr>
									<tr>
										<td><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Du sollst ruhig sein.</td>
										<td><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sei ruhig! (du)</td>
									</tr>
								</tbody>
							</table>
							<div class="row">
								<div class="col-6">
									<table class="table table-borderless table-striped text-center">
										<tbody>
											<tr>
												<th scpoe="row">sollen</th>
												<td>Aufforderung</td>
											</tr>
											<tr>
												<th scpoe="row">müssen</th>
												<td>Notwendigkeit</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-6">
									<table class="table table-borderless table-striped">
										<thead>
											<tr>
												<th scope="col" colspan="2">Imperativ</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scpoe="row" width="50">Sie:</th>
												<td>Verb-Infinitiv + Sie! (<small>주어와 동사의 어순 바뀜</small>)</td>
											</tr>
											<tr>
												<th scpoe="row">du:</th>
												<td>Verbstamm! (<small>주어와 동사어미 -st 생략</small>)</td>
											</tr>
											<tr>
												<th scpoe="row">ihr:</th>
												<td>Verbstamm + Endung! (<small>주어 생략</small>)</td>
											</tr>
										</tbody>
									</table>
										</div>
							</div>							
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>F2. Verben in Rektionen</strong> <small>동사의 격지배</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table table-borderless table-striped">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th class="align-middle" scope="row">Verben im Nominativ</th>
										<td><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>sein, gehen, kommen, arbeiten, schlafen, fahren, …<br><br><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Er ist mein Lehrer. <br><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wir wollen nach Deutschland fahren. <br><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie kommt nicht.</td>
									</tr>
									<tr>
										<th class="align-middle" scope="row">Verben im Akkusativ</th>
										<td><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button>haben, brauchen, sehen, kaufen, wissen, bekommen, heiraten, besuchen, lieben, essen, kochen, …<br><br><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wir haben keine Zeit zu verlieren. <br><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich brauche deine Hilfe.</td>
									</tr>
									<tr>
										<th class="align-middle" scope="row">Verben im Dativ</th>
										<td><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button>telegrafieren, gratulieren, gefallen, fehlen, es geht, antworten, schmecken, …<br><br><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was fehlt dir? <br><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie fehlt mir.<br><br><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich gratuliere dir zu deinem Geburtstag. <br><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie gefällt es dir hier?<br><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Es gefällt mir gut.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>F3. Personalpronomen im Nominativ, Akkusativ und Dativ</strong> <small>주격, 직접 및 간접목적격 인칭대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table table-borderless table-striped text-center">
								<tbody>
									<tr>
										<th scope="row">Nom.</th>
										<td>ich</td>
										<td>du</td>
										<td>Sie</td>
										<td>er</td>
										<td>sie</td>
										<td>sie</td>
										<td>wir</td>
										<td>ihr</td>
										<td>sie/ Sie</td>
									</tr>
									<tr>
										<th scope="row">Akk.</th>
										<td>mich</td>
										<td>dich</td>
										<td>Sie</td>
										<td>ihn</td>
										<td>sie</td>
										<td>es</td>
										<td>uns</td>
										<td>euch</td>
										<td>sie/Sie</td>
									</tr>
									<tr>
										<th scope="row">Dat.</th>
										<td>mir</td>
										<td>dir</td>
										<td>Ihnen</td>
										<td>ihm</td>
										<td>ihr</td>
										<td>ihm</td>
										<td>uns</td>
										<td>euch</td>
										<td>ihnen/Ihnen</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse6" id="4">
									<strong>F4. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table table-borderless bg-light">
								<thead>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col">Körperteile und Tätigkeiten</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pl-5"><button type="button" id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Man kann mit den Händen schreiben.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="26" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Man kann mit dem Mund essen.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Man kann mit den Beinen gehen.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless">
								<thead>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="28" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col">Krankheiten und Beschwerden</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pl-5"><button type="button" id="29" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Meine Nase tut mir weh.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="30" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sein Zahn tut ihm weh.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="31" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ihr Magen tut ihr weh.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0">&nbsp;</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="32" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Er hat Zahnschmerzen.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="33" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie hat Ohrenschmerzen.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="34" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Er hat Fieber.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="35" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie hat eine Erkältung.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="36" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Herr Kim hat Fieber und Halsschmerzen.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless bg-light">
								<thead>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="37" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col">Redewendungen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pl-5"><button type="button" id="38" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was fehlt Ihnen?</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="39" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich verschreibe Ihnen ein Rezept.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="40" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich schreibe Sie für eine Woche krank.</td>
									</tr>
									<tr>
										<td class="pl-5"><button type="button" id="41" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Gute Besserung!</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="last" class="d-none"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?=$root ?>js/popper.min.js"></script>
		<script src="./<?=$root ?>js/bootstrap.js"></script>
		<script src="./<?=$root ?>js/howler.core.js"></script>
		<script>
			// 소리 출력 전역 변수와 함수
			var sen = new Array(), pa = new Array(), he = new Array(), last;
			$(".so").each(function() {
				var t = $(this);
				var ti = t.attr("id");
				sen[ti] = 0;
				pa[ti] = t.html();
				he[ti] = t.height();
			});

			function stopAll() {
				$(".so").each(function() {
					$(this).html(pa[$(this).attr("id")]);
				});
			}

			var nagehts = new Howl({
				// src: ["./<?=$root ?>sounds/Reihe 1/r1 H.mp3"],
				src: ["./<?=$root ?>sounds/Reihe 8/r8 F.mp3"],
				sprite : {
					"1": [7314, 24008],
					"2": [7441, 3202],
					"3": [10364, 2090],
					"4": [13513, 2470],
					"5": [16306, 2108],
					"6": [19789, 3.583],
					"7": [23367, 2283],
					"8": [26839, 2396],
					"9": [29226, 2143],
					"10": [38026, 75551],
					"11": [40871, 8020],
					"12": [49689, 1774],
					"13": [52815, 2644],
					"14": [56482, 1636],
					"15": [62078, 14445],
					"16": [77078, 2840],
					"17": [80928, 2108],
					"18": [87394, 10782],
					"19": [98990, 1560],
					"20": [101757, 2977],
					"21": [105990, 1620],
					"22": [108780, 2034],
					"23": [111827, 1755],
					"24": [120343, 13901],
					"25": [123867, 2873],
					"26": [127673, 2475],
					"27": [131497, 2819],
					"28": [135981, 33972],
					"29": [140213, 2209],
					"30": [143773, 2264],
					"31": [147594, 2025],
					"32": [151205, 2278],
					"33": [155207, 2441],
					"34": [159162, 1783],
					"35": [162709, 2309],
					"36": [166791, 3126],
					"37": [171500, 17229],
					"38": [174859, 1900],
					"39": [178268, 2882],
					"40": [182409, 2822],
					"41": [187005, 1837]
				},
				html5: true,
				volume: 1,
				format: "mp3",
				preload: true,
				onloaderror: function() {
					$(".alert").append("<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>");
					console.log("다시 읽어주세요!");
				},
				onload: function() {
					// 음성 준비되면 HV 버튼 나타내기 
					$("#whole").show();
					$("#alt").hide();
					// $(".alert").hide();

					$(".so").on("click", function(idx) {
							var t = $(this);
							var ti = t.attr("id");

						if($("div#last").text() == "" || t.text() == "❚❚") {
							$("#last").text(ti);
							t.text("■");
							nagehts.seek();
							nagehts.play(ti);
							sen[ti]++;
				
							last = ti;
				
							$("#cnt-"+ti).text(sen[ti]);
						} else if(last == ti && nagehts.playing($("div#last").text())) {
							$("#last").text("");
							t.html(pa[ti]);
							nagehts.pause();
							sen[ti]--;
							$("#cnt-"+ti).text(sen[ti]);
						}

					});
				},
				onend: function() {
					$("div#last").text("");
					stopAll();
					$("#cnt-"+last).text(sen[last]);
					if(sen[last] == 2) {
						$("#"+last).find(".tran").show();
					}
				}


			});


	
	</script>
<?php include "footer.php"; ?>
	</body>
</html>