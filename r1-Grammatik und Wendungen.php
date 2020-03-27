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
									<strong> H1. W-Fragen und Antworten</strong> <small>의문사로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-borderless">
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th class="text-center" scope="col" width="50%">묻기</th>
										<th class="text-center bg-light" scope="col">반응</th>
									</tr>
									<tr>
										<th class="bg-light" scope="row"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie <strong>heißen</strong> Sie?</th>
										<td>Ich <strong>heiße</strong> David Kim.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wie <strong>ist</strong> Ihr Name?</th>
										<td class="bg-light">Mein Name <strong>ist</strong> Michael Brunner.</td>
									</tr>
									<tr>
										<th class="bg-light" scope="row">Wie <strong>geht</strong> es Ihnen?</th>
										<td><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Danke, gut. Und Ihnen?</td>
									</tr>
								</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong> H2. Ja / Nein Fragen und Antworten</strong> <small>“예”, “아니요”로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table table-borderless">
								<tr>
									<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								</tr>
								<tr>
									<th class="text-center" scope="col" width="50%">질문</th>
									<th class="text-center bg-light" scope="col">대답</th>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>Sind</strong> Sie Herr Kim?</th>
									<td><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ja, das bin ich.</td>
								</tr>
								<tr>
									<th scope="row"><strong>Bist</strong> du So-Mang?</th>
									<td class="bg-light"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Nein, ich bin Un-Hae.</td>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><strong>Ist</strong> Frau Kwan da?</th>
									<td><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Nein, Frau Kwan ist nicht da.</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong> H3. Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<div class="row">
								<div class="col-11 text-center">
									<div class="row">
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
											<div class="row">
												<div class="bg-light py-2 col-6">&nbsp;</div>
												<div class="py-2 col-6"><strong>heißen</strong></div>
											</div>
											<div class="row">
												<div class="py-2 col-6 border-right border-dark"><strong>ich</strong></div>
												<div class="bg-light py-2 col-6">heiß<strong>e</strong></div>
											</div>
											<div class="row">
												<div class="bg-light py-2 col-6 border-right border-dark"><strong>du</strong></div>
												<div class="py-2 col-6">heiß<strong>t</strong></div>
											</div>
											<div class="row">
												<div class="py-2 col-6 border-right border-dark"><strong>Sie</strong></div>
												<div class="bg-light py-2 col-6">heiß<strong>en</strong></div>
											</div>
											<div class="row">
												<div class="py-2 col-6">&nbsp;</div>
												<div class="py-2 col-6">&nbsp;</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
											<div class="row">
												<div class="bg-light py-2 col-6">&nbsp;</div>
												<div class="py-2 col-6"><strong>sein</strong></div>
											</div>
											<div class="row">
												<div class="py-2 col-6 border-right border-dark"><strong>ich</strong></div>
												<div class="bg-light py-2 col-6"><strong>bin</strong></div>
											</div>
											<div class="row">
												<div class="bg-light py-2 col-6 border-right border-dark"><strong>du</strong></div>
												<div class="py-2 col-6"><strong>bist</strong></div>
											</div>
											<div class="row">
												<div class="py-2 col-6 border-right border-dark"><strong>Sie</strong></div>
												<div class="bg-light py-2 col-6"><strong>sind</strong></div>
											</div>
											<div class="row">
												<div class="bg-light py-2 col-6 border-right border-dark"><strong>mein Name</strong></div>
												<div class="py-2 col-6"><strong>ist</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong> H4. Wortstellung</strong> <small>어순</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table table-borderless text-center">
									<tr>
										<th scope="col" width="33%"><strong>Position 1</strong></th>
										<th class="bg-light" width="33%" scope="col"><strong>Position 2</strong></th>
										<th scope="col">Position 3</th>
									</tr>
									<tr>
										<td class="bg-light" scope="row"><strong>Wie</strong></td>
										<td><strong>heißen</strong></td>
										<td class="bg-light">Sie?</td>
									</tr>
									<tr>
										<td scope="row"><strong>Wie</strong></td>
										<td class="bg-light"><strong>ist</strong></td>
										<td>Ihr Name?</td>
									</tr>
									<tr>
										<td class="bg-light" scope="row"><strong>Sind</strong></td>
										<td><strong>Sie</strong></td>
										<td class="bg-light">Frau Kwan?</td>
									</tr>
									<tr>
										<td scope="row"><strong>Ich</strong></td>
										<td class="bg-light"><strong>heiße</strong></td>
										<td>Meier.</td>
									</tr>
									<tr>
										<td class="bg-light" scope="row"><strong>Mein Name</strong></td>
										<td><strong>ist</strong></td>
										<td class="bg-light">Brunner.</td>
									</tr>
								</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong> H5. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table table-borderless">
									<tr>
										<td class="border-bottom-0 border-dark border" width="50%">Hallo!</td>
										<td class="bg-light border border-dark border-bottom-0">Tschüs!</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0 border-dark border">Guten Morgen!</td>
										<td class="bg-light border border-dark border-top-0">Auf Wiedersehen!</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0 border-dark border">Guten Tag!</td>
										<td class="border border-dark border-bottom-0">Entschuldigung.</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0 border-dark border">Guten Abend!</td>
										<td class="border border-dark border-top-0 border-bottom-0">&nbsp;</td>
									</tr>
									<tr>
										<td class="border-top-0 border-dark border">Gute Nacht!</td>
										<td class="border border-dark border-top-0">&nbsp;</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Wie heißen Sie?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ich heiße Sandra Bauer.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Wie heißt du?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ich heiße Sandra.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Wie ist Ihr Name?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Mein Name ist Arum Park.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Wie ist dein Name?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Mein Name ist Arum.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Wie geht es Ihnen? / Wie geht es dir?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Danke, es geht mir super. / sehr gut. / gut. /</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">&nbsp;</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">nicht so gut. / schlecht. / es geht. / so la la.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">&nbsp;</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Und Ihnen? / Und dir?</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wer sind Sie?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich bin Yuna Kim.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wer bist du?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich bin Yuna.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wer ist Herr Bauer?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Das bin ich.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wer ist Somang Kim?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Das bin ich.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Sind Sie Frau Lee?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja, das bin ich. / Nein, ich bin Frau Park.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Bist du Sung Hwa?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja, das bin ich. / Nein, ich bin Chung Man.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Ist Herr Jang da?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja, Herr Jang ist da. / Nein, Herr Jang ist nicht da.</td>
									</tra>
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
				src: ["./sounds/Reihe 1/r1 H.mp3"],
				sprite : {
					"1": [0, 13655],
					"2": [4545, 2754],
					"3": [6614, 3208],
					"4": [9460, 4121],
					"5": [13192, 18439],
					"6": [18550, 2923],
					"7": [20767, 4306],
					"8": [24389, 3695],
					"9": [27789, 4323]
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