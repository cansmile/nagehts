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
									<strong>G1. W-Fragen und Antworten</strong> <small>W-의문사와 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-borderless align-middle">
								<tbody>
									<tr>
										<td><strong>Wer</strong> ist das?</td>
										<td>Das ist mein Vater.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> alt sind Sie?</td>
										<td>Ich bin 43 Jahre alt.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> viele Geschwister hast du?</td>
										<td>Ich habe 3 Geschwister.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> ist Ihre Telefonnummer?</td>
										<td>Meine Telefonnummer ist 010-2777-3321.</td>
									</tr>
									<tr>
										<td><strong>Was</strong> sind Sie von Beruf?</td>
										<td>Ich bin Taxifahrer.</td>
									</tr>
									<tr>
										<td><strong>Was</strong> macht sie?</td>
										<td>Sie ist Studentin.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>G2. Ja / Nein Fragen und Antworten</strong> <small>“예”, “아니요”로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table table-borderless align-middle">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Ist</strong> das deine Mutter?</td>
										<td><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ja./ Nein, das ist meine Tante.</td>
									</tr>
									<tr>
										<td><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Haben</strong> Sie Kinder?</td>
										<td><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ja./ Nein, ich habe keine Kinder.</td>
									</tr>
									<tr>
										<td><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Sind</strong> Sie Lehrerin?</td>
										<td><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ja./ Nein, ich bin Ärztin.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>G3. Personalpronomen</strong> <small>인칭 대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table table-borderless text-center align-middle">
								<thead>
									<tr>
										<th scope="col">Singular</th>
										<th scope="col">Plural</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ich</td>
										<td>wir</td>
									</tr>
									<tr>
										<td>du</td>
										<td>ihr</td>
									</tr>
									<tr>
										<td>er/sie/es</td>
										<td>sie</td>
									</tr>
									<tr>
										<td>Sie</td>
										<td>Sie</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>G4. Possessivartikel im Nominativ</strong> <small>주격의 소유관사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table table-borderless text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="4">Singular</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ich</td>
										<td><strong>mein-</strong></td>
										<td>er</td>
										<td><strong>sein-</strong></td>
									</tr>
									<tr>
										<td>du</td>
										<td><strong>dein-</strong></td>
										<td>sie</td>
										<td><strong>ihr-</strong></td>
									</tr>
									<tr>
										<td>Sie</td>
										<td><strong>Ihr-</strong></td>
										<td>es</td>
										<td><strong>sein-</strong></td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="2">Plural</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>sie</td>
										<td>ihr-</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless table-striped text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="3" class="text-center align-middle">Sg.</th>
										<th scope="col" rowspan="2" class="text-center align-middle">Pl.</th>
									</tr>
									<tr>
										<th scope="col" class="text-center align-middle">m</th>
										<th scope="col" class="text-center align-middle">f</th>
										<th scope="col" class="text-center align-middle">n</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>mein Vater</td>
										<td>mein Vater</td>
										<td>mein Kind</td>
										<td>meine Eltern</td>
									</tr>
									<tr>
										<td>dein Vater</td>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
									</tr>
									<tr>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
										<td>Ihr Kind</td>
										<td>Ihre Eltern</td>
									</tr>
									<tr>
										<td>sein Vater</td>
										<td>sein Vater</td>
										<td>sein Kind</td>
										<td>seine Eltern</td>
									</tr>
									<tr>
										<td>ihr Vater</td>
										<td>ihre Mutter</td>
										<td>ihr Kind</td>
										<td>ihre Eltern</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>G5. Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table table-borderless text-center align-middle table-striped">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">machen</th>
										<th scope="col">arbeiten</th>
										<th scope="col">studieren</th>
										<th scope="col">haben</th>
										<th scope="col">sein</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">ich</th>
										<td>mache</td>
										<td>mache</td>
										<td>studiere</td>
										<td>habe</td>
										<td>bin</td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td>mach<strong>st</strong></td>
										<td>arbeite<strong>st</strong></td>
										<td>studier<strong>st</strong></td>
										<td>ha<strong>st</strong></td>
										<td>bist</td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td>mach<strong>t</strong></td>
										<td>arbeite<strong>t</strong></td>
										<td>studier<strong>t</strong></td>
										<td>ha<strong>t</strong></td>
										<td>ist</td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>mach<strong>en</strong></td>
										<td>arbeit<strong>en</strong></td>
										<td>studier<strong>en</strong></td>
										<td>hab<strong>en</strong></td>
										<td>sind</td>
									</tr>
									<tr>
										<th scope="row">sind</th>
										<td>mach<strong>t</strong></td>
										<td>arbeite<strong>t</strong></td>
										<td>studier<strong>t</strong></td>
										<td>hab<strong>t</strong></td>
										<td>seid</td>
									</tr>
									<tr>
										<th scope="row">sie/Sie</th>
										<td>mach<strong>en</strong></td>
										<td>arbeit<strong>en</strong></td>
										<td>studier<strong>en</strong></td>
										<td>hab<strong>en</strong></td>
										<td>sind</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-pink mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse6" area-expanded="false" aria-controls="collapse6" id="6">
									<strong>G6. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse6" aria-divledby="heading6" data-parent="#accordionitms">
							<table class="table table-borderless text-left bg-light">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wer ist das?</td>
										<td><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Das ist meine Mutter.</td>
									</tr>
									<tr>
										<td><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ist das dein Vater?</td>
										<td><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja. / Nein, das ist mein Onkel.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-left">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie alt sind Sie?</td>
										<td><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin 35 Jahre alt.</td>
									</tr>
									<tr>
										<td><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie alt bist du?</td>
										<td><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin 19 Jahre alt.</td>
									</tr>
									<tr>
										<td><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie alt ist er?</td>
										<td><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Er ist 20 Jahre alt.</td>
									</tr>
									<tr>
										<td><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie alt ist sie?</td>
										<td><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Sie ist 22 Jahre alt.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-left bg-light">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie viele Geschwister haben Sie?</td>
										<td><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich habe einen Bruder.</td>
									</tr>
									<tr>
										<td><button type="button" id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie viele Kinder hast du?</td>
										<td><button type="button" id="26" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich habe keine Kinder.</td>
									</tr>
									<tr>
										<td><button type="button" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Haben Sie Kinder?</td>
										<td><button type="button" id="28" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja. / Nein, ich habe keine Kinder.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-left">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="29" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="30" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was ist Ihr Familienstand?</td>
										<td><button type="button" id="31" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin ledig. / verheiratet. / geschieden. / verwitwet.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-left bg-light">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="32" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="33" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was sind Sie von Beruf?</td>
										<td><button type="button" id="34" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin Kellnerin.</td>
									</tr>
									<tr>
										<td><button type="button" id="35" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was bist du von Beruf?</td>
										<td><button type="button" id="36" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin Student.</td>
									</tr>
									<tr>
										<td><button type="button" id="37" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machen Sie?</td>
										<td><button type="button" id="38" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin Lehrerin.</td>
									</tr>
									<tr>
										<td><button type="button" id="39" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machst du?</td>
										<td><button type="button" id="40" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich bin Fußballspieler.</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless text-left">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="41" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="42" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie ist Ihre Adresse?</td>
										<td><button type="button" id="43" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Meine Adresse ist ...</td>
									</tr>
									<tr>
										<td><button type="button" id="44" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie ist deine Telefonnummer?</td>
										<td><button type="button" id="45" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Meine Telefonnummer ist ...</td>
									</tr>
									<tr>
										<td><button type="button" id="46" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie ist ihre Handynummer?</td>
										<td><button type="button" id="47" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ihre Handynummer ist ...</td>
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
				src: ["./sounds/Reihe 3/r3 G.mp3"],
				sprite : {
					"1": [0, 27726],
					"2": [6248, 2123],
					"3": [8867, 5599],
					"4": [15623, 2067],
					"5": [18098, 6299],
					"6": [25814, 1985],
					"7": [28132, 5000],
					"8": [37632, 14668],
					"9": [37632, 2117],
					"10": [40823, 1739],
					"11": [43537, 2167],
					"12": [46530, 5693],
					"13": [53729, 25987],
					"14": [53791, 1818],
					"15": [56366, 2456],
					"16": [59906, 1932],
					"17": [61767, 2921],
					"18": [66978, 2157],
					"19": [69980, 2641],
					"20": [73931, 1969],
					"21": [76680, 2997],
					"22": [80640, 23518],
					"23": [80640, 3168],
					"24": [85059, 2104],
					"25": [89029, 2149],
					"26": [92443, 2083],
					"27": [96200, 1808],
					"28": [98851, 5862],
					"29": [106220, 15613],
					"30": [106506, 3351],
					"31": [110262, 11067],
					"32": [123286, 24673],
					"33": [123286, 2540],
					"34": [126538, 2496],
					"35": [129871, 2546],
					"36": [133123, 2103],
					"37": [136747, 1977],
					"38": [139249, 2030],
					"39": [142697, 1762],
					"40": [145687, 2228],
					"41": [149414, 24559],
					"42": [149414, 2470],
					"43": [152701, 1973],
					"44": [157307, 2606],
					"45": [160659, 2410],
					"46": [165146, 2517],
					"47": [168975, 2495]
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