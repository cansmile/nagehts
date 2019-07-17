<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Hören Sie und ergänzen Sie.<br>
							<small>듣고 채우세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>
						<h3>[ <small>듣고 빈 칸에 어울리는 단어로 채우세요. 단어를 그림에 맞게 짝지우세요.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 4/Reihe-4-C2-1-1.png" style="max-width: 240px; height: auto;"></th>
									<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
									<td>Claudia hat eine Schultasche, aber sie hat kein Lineal.<span class="tran"><br><small>Claudia는 책가방이 있지만 자는 없습니다. </small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="ant" id="ant-1"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Sie hat einen Kleber, aber </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append"><span class="input-group-text">Radiergummi.</span></div>
										</div><span class="tran"><br><small>그녀는 접착제가 있지만 지우개가 없습니다.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="ant" id="ant-2"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Sie hat Buntstifte, aber </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text"> Geld.</span></div>
										</div><span class="tran"><br><small>그녀에게는 크레용이 있지만 돈은 없습니다.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
							die Schultasche
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
							das Lineal
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="10">
							der Kleber
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="11">
							der Radiergummi
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
							die Buntstifte
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="13">
							das Geld
						</button>
					</div>
				</div>
				<div class="row">
					<div closs="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-2.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-3.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-4.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-5.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-6.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-1-7.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 4/Reihe-4-C2-2-1.png" style="max-width: 240px; height: auto;"></th>
									<td width="25"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
									<td>Michael hat ein Wörterbuch, aber er hat keine Büroklammern.<span class="tran"><br><small>Michael은 사전을 가지고 있지만 종이 클립은 없습니다.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="ant" id="ant-3"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er hat Geld,
aber </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-3">
											<div class="input-group-append"><span class="input-group-text">Bleistift.</span></div>
										</div><span class="tran"><br><small>그는 돈이 있지만 연필은 없습니다. 
</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="ant" id="ant-4"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er hat </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-4">
											<div class="input-group-append"><span class="input-group-text"> Kuli,</span></div>
										</div><span class="tran"><br><small>그는 펜이 있지만</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="ant" id="ant-5"></div><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">aber </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-5">
											<div class="input-group-append"><span class="input-group-text"> Schultasche.</span></div>
										</div><span class="tran"><br><small>책가방은 가지고 있지 않습니다.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="14">
							das Wörterbuch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="15">
							die Büroklammern
						</button>
						<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="16">
							das Geld
						</button>
						<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="17">
							der Bleistift
						</button>
						<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="18">
							der Kuli
						</button>
						<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm" id="19">
							die Schultasche
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-2.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-3.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-4.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-5.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-6.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<table class="table">
							<tbody>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td><img src="./images/Reihe 4/Reihe-4-C2-2-7.png" alt="Was ist das?" style="max-width: 120px; height: auto;"></td>
								</tr>
								<tr>
									<td>
										<div class="itm-lst 1itm" id="lst-12">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table table-striped text-center">
							<tbody>
								<tr>
									<td colspan="4" class="text-left">haben 동사는 4격 목적어를 취하며, 명사를 부정할 때는 kein이라는 부정관사를 사용한다.<br>이 때 kein은 부정관사류(ein, nein)와 같이 동일하게 관사어미변화한다. (keinen, keine, kein)</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><strong>m</strong></td>
									<td><strong>f</strong></td>
									<td><strong>n</strong></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><strong>부정관사</strong></td>
									<td><strong>부정관사</strong></td>
									<td><strong>부정관사</strong></td>
								</tr>
								<tr>
									<td><strong>Nominativ<small>&nbsp;주격</small></strong></td>
									<td>kein Kuli</td>
									<td>keine Schultasche</td>
									<td>kein Geld</td>
								</tr>
								<tr>
									<td><strong>Akkusativ<small>&nbsp;목적격</small></strong></td>
									<td>keinen Kuli</td>
									<td>keine Schultasche</td>
									<td>kein Geld</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-12">
						<table class="table table-striped text-center">
							<tbody>
								<tr>
									<td colspan="7" class="text-left"><strong>(un)bestimmte Artikel</strong></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td colspan="2"><strong>m</strong></td>
									<td colspan="2"><strong>f</strong></td>
									<td colspan="2"><strong>n</strong></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><strong>부정관사</strong></td>
									<td><strong>정관사</strong></td>
									<td><strong>부정관사</strong></td>
									<td><strong>정관사</strong></td>
									<td><strong>부정관사</strong></td>
									<td><strong>정관사</strong></td>
								</tr>
								<tr>
									<td><strong>Nominativ<small>&nbsp;주격</small></strong></td>
									<td>ein Tisch</td>
									<td>der Tisch</td>
									<td>eine Uhr</td>
									<td>die Uhr</td>
									<td>ein Auto</td>
									<td>das Auto</td>
								</tr>
								<tr>
									<td><strong>Akkusativ<small>&nbsp;목적격</small></strong></td>
									<td>einen Tisch</td>
									<td>den Tisch</td>
									<td>eine Uhr</td>
									<td>die Uhr</td>
									<td>ein Auto</td>
									<td>das Auto</td>
								</tr>
							</tbody>
						</table>
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
		<script src="./js/taptogroupnomove.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();

			var an = new Array();
			var an = ["keinen","kein","keinen","einen","keine"];

			$(document).ready(function() {
				$(".q").on("keyup", function () {
					var q = $(this).val().length;
					var qn = ($(this).attr("id").substr(4))-1;
					var a = $(this).val();
					var b = an[qn].substr(0,q);
					a = a.replace(/ /gi, "");
					b = b.replace(/ /gi, "");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");
					if(a == b) {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
					} else {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-danger");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
					}
					if(!$(this).val()) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).removeClass("text-white text-weight-bold");
					}
					if($(this).val()) {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					} else {
						$("#ant-"+$(this).attr("id").substr(4)).hide();
					}
				})

				$(".q").on("focusin", function() {
					$("#ant-"+$(this).attr("id").substr(4)).show();
					if(!$("#ant-"+$(this).attr("id").substr(4)).text()) {
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					}
				})

				$(".q").on("focusout", function() {
					$("#ant-"+$(this).attr("id").substr(4)).hide();
					var qn = ($(this).attr("id").substr(4))-1;
					var a = an[qn];
					var b = $(this).val();

					if(a == b) {
						$(this).addClass("bg-success");
						
						if(b.substr(0,5) == "aus d") {
							$("td").each(function() {
								if($(this).text().trim() == b.substr(8).trim()) {
									$(this).addClass("text-dark bg-warning");
								}
							})
						} else {
							$("td").each(function() {
								if($(this).text() == b.substr(4)) {
									$(this).addClass("text-dark bg-warning");
								}
							})
						}
							
						$(this).prop("disabled",true);
						$(this).addClass("text-weight-bold");

					} else {
						$(this).addClass("bg-danger");
					}

					if($(this).val()) {
						if($(this).hasClass("bg-danger")) {
							ion.sound.play("Cartoon_Boing");
						} else if($(this).hasClass("bg-success")){
							ion.sound.play("Bama_Country_Country");
						}
					}

					$(this).removeClass("text-white text-weight-bold");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");

				})


				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r4 C2",

						sprite : {
							"0": [7.6,95.5],
							"1": [38.8,4.5],
							"2": [44,6],
							"3": [50,4.3],
							"4": [84.9,5.1],
							"5": [91.4,4],
							"6": [97.6,1.9],
							"7": [99.5,2.1],
							"8": [16.1,1.8],
							"9": [20,1.6],
							"10": [23.5,2.5],
							"11": [27.5,2.5],
							"12": [31.3,2.4],
							"13": [34.9,1.7],
							"14": [60,1.4],
							"15": [63.6,2.7],
							"16": [67.9,2.1],
							"17": [72,2],
							"18": [75.8,2.6],
							"19": [80,2.2]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 4/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							if(hmn < 8) {
								$("#"+obj.part).html("▶");
								if(hm[hmn] > 1) {
									$("#"+obj.part).closest("tr").find(".tran").show();
								}
							}
						}

					}, ready_callback: function () {
						
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

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r4 C2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r4 C2", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r4 C2", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r4 C2", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>