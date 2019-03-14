<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			이 페이지의 문장을 <strong>누르면 들립니다!</strong><br>
			문제를 모두 풀어야
			<button class="badge badge-light" disabled>
				정답확인
			</button>
			이 됩니다.
			<br />
			<button class="badge badge-light">
				정답확인
			</button>
			을 누르면 지문의 배경색이
			<button class="badge badge-warning" disabled>
				선택한 지문
			</button>
			,
			<button class="badge badge-success" disabled>
				선택한 지문이 정답인 경우
			</button>
			,
			<button class="badge badge-primary" disabled>
				정답
			</button>
			으로 변합니다.
			<br />
			<p class="mt-4">
				각 문제마다 <strong style="color: red;">처음 선택한 항목</strong>만
				<button class="badge badge-light" disabled>
					정답확인
				</button>
				에 이용됩니다.
			</p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und sprechen Sie nach.</h2>
							<p>
								듣고 따라하세요.
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
								HV
							</button>
							<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
								❚❚
							</button>
							</p>
				</div>
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<td><button type="button" id="1" class="itm btn btn-outline-danger">1</button></td>
								<td>Guten Tag! Wie <span class="nu">①</span> Sie?<span class="tran"><br><small>안녕하세요! 당신의 이름은 무엇인가요?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="itm btn btn-outline-primary">2</button></td>
								<td>Guten Tag! Ich <span class="nu">②</span> Kim.<span class="tran"><br><small>안녕하세요! 저는 김이라고 해요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="itm btn btn-outline-primary">3</button></td>
								<td>Freut mich! Und wie <span class="nu">③</span> Ihr Name?<span class="tran"><br><small>반가워요! 그러면 당신의 이름은 무엇인가요?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="4" class="itm btn btn-outline-danger">4</button></td>
								<td>Mein Name <span class="nu">④</span> Sauer, Eva Sauer.<span class="tran"><br><small>제 이름은 자우어에요, 에바 자우어.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>

				<!--문제 시작-->
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="qst-1">
					<h3 class="mt-1">①에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						heiße
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						heißt
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						heißen
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="qst-2">
					<h3 class="mt-1">②에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						heiße
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						heißt
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						heißen
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="qst-3">
					<h3 class="mt-1">③에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						bin
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						ist
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						sind
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="qst-4">
					<h3 class="mt-1">④에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						bin
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						sind
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						ist
					</div>
				</div>
				<!--문제 끝-->
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
			<div class="row">
				<div class="col"></div>
				<div class="col-11 text-center">
					<div class="row">
						<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-12">
							<div class="row">
								<div class="bg-light py-2 col-3 border-right border-dark"><strong>Wie</strong></div>
								<div class="bg-light py-2 col-3 border-right border-dark"><i>heißen</i></div>
								<div class="bg-light py-2 col-6">Sie?</div>
							</div>
							<div class="row">
								<div class="py-2 col-3 border-right border-dark">&nbsp;</div>
								<div class="py-2 col-3 border-right border-dark"><i>ist</i></div>
								<div class="py-2 col-6"><strong>Ihr</strong> Name?</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-12">
							<div class="row">
								<div class="py-2 col-8 border-right border-dark">Ich</div>
								<div class="py-2 col-4"><i>heiße…</i></div>
							</div>
							<div class="row">
								<div class="bg-light py-2 col-8 border-right border-dark"><strong>Mein</strong> Name</div>
								<div class="bg-light py-2 col-4"><i>ist…</i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</div>
	</section>
		

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r1 B1",

						sprite : {
							"0": [7.2,23.3],
							"1": [12.8,2.7],
							"2": [17.8,2.3],
							"3": [21.7,2.6],
							"4": [27.1,2.7]
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
						$(".itm").on("click", function () {
							if($(this).attr("id").substr(-2) == "_p") {
								ion.sound.pause("r1 B1", {
									part: "0"
								});
								$("#0").show();
								$(this).hide();
							} else {
								ion.sound.play("r1 B1", {
									part: $(this).attr("id")
								});
								
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id") == "0") {
									$(this).hide();
									$("#0_p").show();
								};
							}
						});

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
							na += $(this).attr("id").substr(4);
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
						}
						;
					});

					$("span").each(function () {
						if($(this).text() == "①") {
							var iq = $("#qst-1>div.o").text();
						} else if($(this).text() == "②") {
							var iq = $("#qst-2>div.o").text();
						} else if($(this).text() == "③") {
							var iq = $("#qst-3>div.o").text();
						} else if($(this).text() == "④") {
							var iq = $("#qst-4>div.o").text();
						}
						$(this).text(iq);
						$(this).addClass("font-weight-bold");
					});
					$(".tran").show();

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

					// 준비되면 HV 보이기
					$("#0").show();
					$("#alt").hide();

					}
				});
				
			});
			
		</script>

		<!-- ion.sound finished -->
	</body>
</html>