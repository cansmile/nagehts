<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>W-Fragen und Antworten</strong> <small>의문사로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table text-center">
									<tr>
										<th scope="col" width="50%">묻기</th>
										<th class="bg-light" scope="col">반응</th>
									</tr>
									<tr>
										<th class="bg-light" scope="row">Wie <strong>heißen</strong> Sie?</th>
										<td>Ich <strong>heiße</strong> David Kim.</td>
									</tr>
									<tr>
										<th scope="row">Wie <strong>ist</strong> Ihr Name?</th>
										<td class="bg-light">Mein Name <strong>ist</strong> Michael Brunner.</td>
									</tr>
									<tr>
										<th class="bg-light" scope="row">Wie <strong>geht</strong> es Ihnen?</th>
										<td>Danke, gut. Und Ihnen?</td>
									</tr>
								</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>Ja / Nein Fragen und Antworten</strong> <small>“예”, “아니요”로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table text-center">
								<tr>
									<th scope="col" width="50%">묻기</th>
									<th class="bg-light" scope="col">반응</th>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><strong>Sind</strong> Sie Herr Kim?</th>
									<td>Ja, das bin ich.</td>
								</tr>
								<tr>
									<th scope="row"><strong>Bist</strong> du So-Mang?</th>
									<td class="bg-light">Nein, ich bin Un-Hae.</td>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><strong>Ist</strong> Frau Kwan da?</th>
									<td>Nein, Frau Kwan ist nicht da.</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-info mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>Verbkonjugation</strong> <small>동사변화</small>
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
								<button class="btn btn-outline-success mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>Wortstellung</strong> <small>어순</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-center">
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
								<button class="btn btn-outline-dark mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-left">
									<tr>
										<td class="border-bottom-0 border-dark border" width="50%">Hallo!</td>
										<td class="bg-light border border-dark border-bottom-0">Tschüs!</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0 border-dark border">Guten Morgen!</td>
										<td class="bg-light border border-dark border-top-0">Auf Wiedershen!</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0 border-dark border">Guten Tag!</td>
										<td class="border border-dark border-bottom-0">Enschuldigung.</td>
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
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Und Ihnen? / Und dir?</td>
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

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- interact.min.js -->
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".collapse").collapse("hide");

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 U3",

						sprite : {
							"0": [3.8,34.5],
							"1": [12.7,1.6],
							"2": [17,1.5],
							"3": [20.1,.9],
							"4": [23.2,1.2],
							"5": [26.4,1.8],
							"6": [29.6,2],
							"7": [33,1],
							"8": [35.8,2.5]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 1/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
						};
					},
					ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};
	
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			// 정답확인
			$("#chk").on("click", function() {
				if ($(".an").length < $(".q").length) {
					var na = "";
					$(".q").each(function() {
						if (!$(this).find("div").hasClass("an")) {
							if (na != "") {
								na += ", ";
							}
							na += $(this).attr("id").substr(-1);
						};
					});

					alert(na + "번 문제를 풀어주세요.");
				} else {
					$(".pop").each(function() {
						$(this).removeClass("btn-info");

						if ($(this).hasClass("o") && $(this).hasClass("an")) {
							$(this).removeClass("btn-warning");
							$(this).addClass("btn-success");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-primary");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-warning");
						} else {
							$(this).addClass("btn-light");
						};

						
					});

					$("span").each(function () {
						if($(this).text() == "①") {
							$(this).parent().append($("#qst-1>div.o").text());
							$(this).remove();
						} else if($(this).text() == "②") {
							$(this).parent().append($("#qst-2>div.o").text());
							$(this).remove();
						} else if($(this).text() == "③") {
							$(this).parent().append($("#qst-3>div.o").text());
							$(this).remove();
						} else if($(this).text() == "④") {
							$(this).parent().append($("#qst-4>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑤") {
							$(this).parent().append($("#qst-5>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑥") {
							$(this).parent().append($("#qst-6>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑦") {
							$(this).parent().append($("#qst-7>div.o").text());
							$(this).remove();
						} else if($(this).text() == "⑧") {
							$(this).parent().append($("#qst-8>div.o").text());
							$(this).remove();
						}
					});

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-primary");

					} else {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});

		
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								ion.sound.pause("r1 U3", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else if($(this).attr("id") == 0) {
										//_p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U3", {
											part: $(this).attr("id")
										});
							} else {
								if($(this).parent()[0].tagName == "H5") {
									var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
								}
									if(!$(ch).hasClass("show") || !$(this).hasClass("btn-secondary")) {
										// _p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 U3", {
											part: $(this).attr("id")
										});
									}
								};
								
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
								};
							});
					// 준비되면 HV 보이기
					$("#0").show();
					$(".alert").hide();


					}
				});
				
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>