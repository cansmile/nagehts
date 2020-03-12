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
									<strong>F1. W-Fragen und Antworten</strong> <small>W-의문사와 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table text-center">
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col" width="50%">묻기</th>
										<th class="bg-light" scope="col">반응</th>
									</tr>
									<tr>
										<th class="bg-light" scope="row"><strong>Woher</strong> kommen Sie?</th>
										<td>Ich komme <strong>aus</strong> Deutschland.</td>
									</tr>
									<tr>
										<th scope="row"><strong>Wo</strong> wohnen Sie?</th>
										<td class="bg-light">Ich wohne <strong>in</strong> München.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Welche</strong> Sprachen sprechen Sie?</th>
										<td class="bg-light"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich spreche Detusch und Englisch.</td>
									</tr>
									<tr>
										<th class="bg-light" scope="row">Wo <strong>liegt</strong> Ghana?</th>
										<td>Ghana liegt <strong>in</strong> Westafrika.</td>
									</tr>
								</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>F2. Ja / Nein - Fragen und Antworten</strong> <small>예/아니요-질문</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th class="text-center" scope="col" width="50%">질문</th>
										<th class="text-center bg-light" scope="col">대답</th>
									</tr>
									<tr>
										<td class="bg-light" scope="row"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Kommen</strong> Sie aus Japan?</td>
										<td><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Ja(Nein)</strong>, ich komme *<strong>(nicht)</strong> aus Japan.</td>
									</tr>
									<tr>
										<td scope="row"><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Wohnen</strong> Sie in Seoul?</td>
										<td class="bg-light"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Ja(Nein)</strong>, ich wohne *<strong>(nicht)</strong> in Seoul.</td>
									</tr>
									<tr>
										<td class="bg-light" scope="row"><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Liegt</strong> Frankreich in Europa?</td>
										<td><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Ja</strong>, es liegt in Europa.</td>
									</tr>
									<tr>
										<th scope="row" colspan="2" class="text-right">* nicht<small>는 부정어로서 영어의 </small>not<small>을 의미한다</small>.</th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>F3. Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-center" width="20%" scope="col">Personalpronomen</th>
										<th class="text-center" width="20%" scope="col">kommen</th>
										<th class="text-center" width="20%" scope="col">wohnen</th>
										<th class="text-center" width="20%" scope="col">sprechen</th>
										<th class="text-center" width="20%" scope="col">liegen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-center" scope="row">ich</th>
										<td class="text-center">komm<strong>e</strong></td>
										<td class="text-center">wohn<strong>e</strong></td>
										<td class="text-center">sprech<strong>e</td></strong>
										<td class="text-center">lieg<strong>e</td></strong>
									</tr>
									<tr>
										<th class="text-center" scope="row">du</th>
										<td class="text-center">komm<strong>st</strong></td>
										<td class="text-center">wohn<strong>st</strong></td>
										<td class="text-center">sprich<strong>st</strong></td>
										<td class="text-center">lieg<strong>st</strong></td>
									</tr>
									<tr>
										<th class="text-center" scope="row">er/sie/es</th>
										<td class="text-center">komm<strong>t</strong></td>
										<td class="text-center">wohn<strong>t</strong></td>
										<td class="text-center">sprich<strong>t</strong></td>
										<td class="text-center">sprich<strong>t</strong></td>
									</tr>
									<tr>
										<th class="text-center" scope="row">Sie</th>
										<td class="text-center">komm<strong>en</strong></td>
										<td class="text-center">komm<strong>en</strong></td>
										<td class="text-center">sprech<strong>en</strong></td>
										<td class="text-center">lieg<strong>en</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>F4. Wortstellung</strong> <small>어순</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-center">
								<thead>
									<tr>
										<th width="25%" scope="col">&nbsp;</th>
										<th width="25%" scope="col" width="33%"><strong>Position 1</strong></th>
										<th width="25%" class="bg-light" width="33%" scope="col"><strong>Position 2</strong></th>
										<th width="25%" scope="col">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">W-Frage<small><br>w-의문문</small></th>
										<td class="bg-light" scope="row"><strong>Woher<br>Wo<br>Welche</strong> Sprachen</td>
										<td><strong>kommen<br>wohnst<br>sprechen</strong></td>
										<td class="bg-light"><strong>Sie?<br>du?<br>Sie?</strong></td>
									</tr>
									<tr>
										<th scope="row" class="bg-light">Ja/Nein - Frage<small><br>예/아니오-의문문</small></th>
										<td><strong>Kommt<br>Liegt</strong></td>
										<td class="bg-light"><strong>er<br>Amerika</strong></td>
										<td><strong>aus Korea?<br>in Nordamerika?</strong></td>
									</tr>
									<tr>
										<th scope="row">Aussagesatz<small><br>평서문</small></th>
										<td class="bg-light" scope="row"><strong>Sie<br>Ich</strong></td>
										<td><strong>kommt<br>wohne</strong></td>
										<td class="bg-light"><strong>aus Italien.<br>in Gwangnaru.</strong></td>
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
							<table class="table text-left">
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Woher kommen Sie?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich komme aus Korea.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Woher kommst du?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich komme aus Korea.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Woher kommt sie?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Sie kommt aus Korea.</td>
									</tr>
									<tr>
										<td colspan="2" class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0 p-0" height="5"></td>
									</tr>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Kommen Sie aus Japan?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), ich komme (nicht) aus Japan.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Kommst du aus Deutschland?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), ich komme (nicht) aus Deutschland.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Kommt sie aus Italien?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0"><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), sie kommt (nicht) aus Italien.</td>
									</tr>
									<tr>
										<td colspan="2" class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0 p-0" height="5"></td>
									</tr>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="26" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo wohnen Sie?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich wohne in Busan.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="28" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo wohnst du?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="29" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich wohne in Busan.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="30" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo wohnt er?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="31" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Er wohnt in Busan.</td>
									</tr>
									<tr>
										<td colspan="2" class="border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0 p-0" height="5"></td>
									</tr>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="32" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="33" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wohnen Sie in Guri?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="34" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), ich wohne (nicht) in Guri.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="35" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wohnst du in Guri ?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="36" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), ich wohne (nicht) in Guri.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="37" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wohnt er in Guri?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="38" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja (Nein), er wohnt (nicht) in Guri.</td>
									</tr>
									<tr>
										<td colspan="2" class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0 p-0" height="5"></td>
									</tr>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="39" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="40" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Welche Sprachen sprechen Sie?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="41" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich spreche Koreanisch, Englisch und Deutsch.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="42" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Welche Sprachen sprichst du?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="43" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich spreche Japanisch.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="44" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Welche Sprachen spricht er?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="45" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Er spricht Japanisch.</td>
									</tr>
									<tr>
										<td colspan="2" class="border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0 p-0" height="5"></td>
									</tr>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="46" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="47" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wo liegt Korea?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="48" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Korea liegt in Asien.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="49" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Liegt Deutschland in Europa?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0"><button type="button" id="50" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ja, es liegt in Europa.</td>
									</tr>

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
				src: ["./sounds/Reihe 2/r2 F.mp3"],
				sprite : {
					"1": [0, 11867],
					"2": [5194, 2544],
					"3": [8500, 3130],
					"4": [11947, 43240],
					"5": [18869, 2531],
					"6": [22235, 8247],
					"7": [32587, 2729],
					"8": [36334, 8665],
					"9": [46813, 3267],
					"10": [51386, 3614],
					"11": [58789, 16087],
					"12": [58789, 2326],
					"13": [61216, 2646],
					"14": [64500, 2539],
					"15": [67097, 2774],
					"16": [70101, 2431],
					"17": [72590, 2225],
					"18": [75981, 33903],
					"19": [75981, 2479],
					"20": [78644, 8168],
					"21": [87500, 2500],
					"22": [90274, 7712],
					"23": [99500, 2527],
					"24": [102318, 7681],
					"25": [109974, 17380],
					"26": [110816, 2267],
					"27": [113827, 2301],
					"28": [107265, 2115],
					"29": [119624, 2427],
					"30": [123366, 1848],
					"31": [125475, 2423],
					"32": [129241, 35028],
					"33": [129241, 2516],
					"34": [132459, 7538],
					"35": [141622, 2246],
					"36": [144283, 7038],
					"37": [152108, 2341],
					"38": [155560, 8016],
					"39": [165183, 25808],
					"40": [165183, 3068],
					"41": [169007, 5469],
					"42": [176403, 2552],
					"43": [180170, 2521],
					"44": [184476, 2706],
					"45": [188432, 2664],
					"46": [192915, 12842],
					"47": [192915, 2084],
					"48": [195706, 2557],
					"49": [199023, 2900],
					"50": [202839, 2799]
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