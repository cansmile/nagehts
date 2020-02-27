<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
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
									<strong>F1. Personalpronomen</strong> <small>인칭대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-striped align-middle text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">Nominativ</th>
										<th scope="col" class="border-0">Akkusativ</th>
										<th scope="col" class="border-0">Dativ</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="border-0">ich</td>
										<td class="border-0">mich</td>
										<td class="border-0">mir</td>
									</tr>
									<tr>
										<td class="border-0">du</td>
										<td class="border-0">dich</td>
										<td class="border-0">dir</td>
									</tr>
									<tr>
										<td class="border-0">Sie</td>
										<td class="border-0">Sie</td>
										<td class="border-0">Ihnen</td>
									</tr>
									<tr>
										<td class="border-0">er</td>
										<td class="border-0">ihn</td>
										<td class="border-0">ihm</td>
									</tr>
									<tr>
										<td class="border-0">sie</td>
										<td class="border-0">sie</td>
										<td class="border-0">ihr</td>
									</tr>
									<tr>
										<td class="border-0">es</td>
										<td class="border-0">es</td>
										<td class="border-0">ihm</td>
									</tr>
									<tr>
										<td class="border-0">wir</td>
										<td class="border-0">uns</td>
										<td class="border-0">uns</td>
									</tr>
									<tr>
										<td class="border-0">ihr</td>
										<td class="border-0">euch</td>
										<td class="border-0">euch</td>
									</tr>
									<tr>
										<td class="border-0">sie</td>
										<td class="border-0">sie</td>
										<td class="border-0">ihnen</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0 text-primary">m</th>
										<th scope="col" class="border-0 text-danger">f</th>
										<th scope="col" class="border-0 text-purple">n</th>
										<th scope="col" class="border-0 text-khaki">Pl</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">Nominativ</th>
										<td class="border-0 text-primary">der</td>
										<td class="border-0 text-danger">die</td>
										<td class="border-0 text-purple">das</td>
										<td class="border-0 text-khaki">die</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Akkusativ</th>
										<td class="border-0 text-primary">den</td>
										<td class="border-0 text-danger">die</td>
										<td class="border-0 text-purple">das</td>
										<td class="border-0 text-khaki">die</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Dativ</th>
										<td class="border-0 text-primary">dem</td>
										<td class="border-0 text-danger">der</td>
										<td class="border-0 text-purple">dem</td>
										<td class="border-0 text-khaki">den</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0 text-primary">m</th>
										<th scope="col" class="border-0 text-danger">f</th>
										<th scope="col" class="border-0 text-purple">n</th>
										<th scope="col" class="border-0 text-khaki">Pl</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">Nominativ</th>
										<td class="border-0 text-primary">ein</td>
										<td class="border-0 text-danger">eine</td>
										<td class="border-0 text-purple">ein</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Akkusativ</th>
										<td class="border-0 text-primary">einen</td>
										<td class="border-0 text-danger">eine</td>
										<td class="border-0 text-purple">ein</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Dativ</th>
										<td class="border-0 text-primary">einem</td>
										<td class="border-0 text-danger">einer</td>
										<td class="border-0 text-purple">einem</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>F2. Perfekt: haben/sein + Partizip II</strong> <small>완료형: haben / sein + 과거분사형</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<tbody>
									<tr>
										<th width="45%" scope="col" colspan="3" class="border-0">Grundform : Hilfsverb</th>
										<th width="10%" scope="col" class="border-0">+</th>
										<th width="45%" scope="col" colspan="3" class="border-0">Partizip II</th>
									</tr>
									<tr>
										<td class="border-0 text-right">↙</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">↘</td>
										<td class="border-0"></td>
										<td class="border-0 text-right">↙</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">↘</td>
									</tr>
									<tr>
										<td class="border-0 text-right">haben</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">sein</td>
										<td class="border-0"></td>
										<td class="border-0 text-right">ge-<span class="p-1 border border-secondary rounded m-1 px-3 bg-light"> </span>-t<br>(schwache V)</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">ge-<span class="p-1 border border-secondary rounded m-1 px-3 bg-light"> </span>-en<br>(starke V)</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped" style="line-height: 250%;">
								<thead>
									<tr>
										<th colspan="2" class="border-0 text-center">Hilfsverben: Wann <span class="p-1 px-2 bg-light font-weight-bold border border-dark rounded">haben</span> und wann <span class="p-1 px-2 bg-light font-weight-bold border border-dark rounded">sein</span>? <small>조동사: haben과 sein</small></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="border-0 font-weight-bold text-center">Hilfsverb: haben (70-80%)</td>
										<td class="border-0 font-weight-bold text-center">Hilfsverb: sein (20-30%)</td>
									</tr>
									<tr>
										<td class="border-0">die meisten Verben<br>(V-trans./ V-intrans., +durativ / V-ieren)</td>
										<td class="border-0">nur drei Gruppen von V-intrans.<br>(+Bewegung / +Veränderung / sein, bleiben, werden)</td>
									</tr>
									<tr>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">habe</span> das Buch <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gelesen</span>.</td>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">bin</span> nach Seoul <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gefahren</span>.<br>(<span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">+Bewegung</span>: gehen, fliegen, laufen)</td>
									</tr>
									<tr>
										<td class="border-0">Er <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">hat</span> lange <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gelebt</span>.<br>(schlafen, wohnen, blühen...)</td>
										<td class="border-0">Das Baby <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">ist</span> <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">eingeschlafen</span>.<br>(<span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">+Veränderung</span>: einschlafen, fallen...)</td>
									</tr>
									<tr>
										<td class="border-0">Er <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">hat</span> schon <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">studiert</span>.<br>(telefonieren, kontrollieren...)</td>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">bin</span> hier <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">geblieben</span>.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>F3. Präteritum von sein und haben.</strong> <small>haben과 sein의 과거형.</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table text-center table-striped align-middle">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0">ich</th>
										<th scope="col" class="border-0">du</th>
										<th scope="col" class="border-0">Sie</th>
										<th scope="col" class="border-0">er/sie/es</th>
										<th scope="col" class="border-0">wir</th>
										<th scope="col" class="border-0">ihr</th>
										<th scope="col" class="border-0">sie/Sie</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">sein</th>
										<td class="border-0">war</td>
										<td class="border-0">warst</td>
										<td class="border-0">waren</td>
										<td class="border-0">war</td>
										<td class="border-0">waren</td>
										<td class="border-0">wart</td>
										<td class="border-0">waren</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">haben</th>
										<td class="border-0">hatte</td>
										<td class="border-0">hattest</td>
										<td class="border-0">hatten</td>
										<td class="border-0">hatte</td>
										<td class="border-0">hatten</td>
										<td class="border-0">hattet</td>
										<td class="border-0">hatten</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>F4. Konnektoren: deshalb und weil</strong> <small>접속사: deshalb와 weil</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<td>Ich trinke gern Kaffee. <strong>Deshalb</strong> <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>möchte</strong></span> ich eine Kaffeemaschine <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>haben</strong></span>.</td>
									</tr>
									<tr>
										<td>Man kann Julia eine Halskette schenken, weil sie gern Schmuck <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>trägt</strong></span>.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>F5. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Frohe Weihnachten!</td>
										<td><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Gesegnete Weihnachten!</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Prosit Neujahr!</td>
										<td><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Guten Rutsch ins Neujahr!</td>
									</tr>
									<tr>
										<td><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Frohes neues Jahr!</td>
										<td><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Gesegnetes neues Jahr!</td>
									</tr>
									<tr>
										<td><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Frohe Ostern!</td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Alles Gute zum Geburtstag!</td>
									</tr>
									<tr>
										<td><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Alles Liebe zum Geburtstag!</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Welches Datum haben wir heute?</td>
									</tr>
									<tr>
										<td><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Heute ist der fünfzehnte August.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann hast du Geburtstag?</td>
									</tr>
									<tr>
										<td><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich habe im Juli/ im Sommer / am 30. Juli Geburtstag.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann bist du geboren?</td>
									</tr>
									<tr>
										<td><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin am 30. Juli 2000 geboren.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Am fünfzehnten August ist unabhängiger Tag.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Welche Feiertage und Feste gibt es in Korea?</td>
									</tr>
									<tr>
										<td><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Wir haben Neujahr, Kindertag, unabhängigen Tag, Chusuk etc.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie feiert man in Korea?</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Mit wem feiern Sie?</td>
									</tr>
									<tr>
										<td><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Wir feiern mit Familie. / mit Verwandten. / mit Nachbarn. / mit Freunden.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo feiern Sie?</td>
									</tr>
									<tr>
										<td><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Wir feiern zu Hause. / im Restaurant oder in der Kneipe. / draußen.</td>
									</tr>
									<tr>
										<td><button type="button" id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Wir mieten einen Raum.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td><button type="button" id="26" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was möchten Sie zum Geburtstag bekommen?</td>
									</tr>
									<tr>
										<td><button type="button" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich freue mich [nicht] über das Geschenk.</td>
									</tr>
									<tr>
										<td><button type="button" id="28" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich möchte zum Geburtstag (nicht) gern ein iPad haben.</td>
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
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/howler.core.js"></script>
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
				// src: ["./sounds/Reihe 1/r1 H.mp3"],
				src: ["./sounds/Reihe 9/r9 F.mp3"],
				sprite : {
					"1": [559, 154072],
					"2": [4800, 2061],
					"3": [8030, 2386],
					"4": [11459, 2147],
					"5": [10541, 2250],
					"6": [18645, 2211],
					"7": [22116, 2527],
					"8": [25874, 2185],
					"9": [29515, 2797],
					"10": [33828, 2473],
					"11": [38147, 2752],
					"12": [42133, 3006],
					"13": [46342, 2725],
					"14": [49916, 6976],
					"15": [58044, 2552],
					"16": [61773, 4363],
					"17": [67790, 4226],
					"18": [73489, 3909],
					"19": [78384, 9133],
					"20": [88975, 2593],
					"21": [92699, 2672],
					"22": [96634, 12488],
					"23": [110809, 2119],
					"24": [114061, 10788],
					"25": [125998, 2637],
					"26": [130205, 3399],
					"27": [134522, 8481],
					"28": [144321, 10352]
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
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>