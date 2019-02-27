<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">1. Hören Sie <br />und sprechen Sie nach.</h1>
							<h2>
								듣고 따라해보세요.
								<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0">
									HV
								</button>
								<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="0_p">
									❚❚
								</button>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- 알림 시작 -->
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
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="1">
									1. Guten Tag! Wie ________ Sie?
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
						<div class="card-body">1. 안녕하세요! 당신의 이름은 무엇인가요?</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									2. Guten Tag! Ich ________ Kim.
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
						<div class="card-body">2. 안녕하세요! 저는 김이라고 해요.</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									3. Freut mich! Und wie ________ Ihr Name?
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
						<div class="card-body">3. 반가워요! 그러면 당신의 이름은 무엇인가요?</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 itm btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									4. Mein Name ________ Sauer, Eva Sauer.
								</button>
							</h5>
						</div>
					</div>
					<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
						<div class="card-body">4. 제 이름은 자우어에요, 에바 자우어.</div>
					</div>
				</div>

				<!--문제 시작-->
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="5">
					<h3 class="mt-1">1번 문장의 ________에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. heiße
					</div>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. heißt
					</div>
					<div class="btn btn-info pop btn-sm btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. heißen
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="6">
					<h3 class="mt-1">2번 문장의 ________에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-sm btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. heiße
					</div>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. heißt
					</div>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. heißen
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="7">
					<h3 class="mt-1">3번 문장의 ________에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. bin
					</div>
					<div class="btn btn-info pop btn-sm btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. ist
					</div>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. sind
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="8">
					<h3 class="mt-1">4번 문장의 ________에 들어갈 단어는?</h3>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. bin
					</div>
					<div class="btn btn-info pop btn-sm btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. sind
					</div>
					<div class="btn btn-info pop btn-sm btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. ist
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
			$(".collapse").collapse("hide");

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
								if($(this).attr("id") != 0) {
								var ch = "#collapse"+$(this).closest(".card-header").attr("id").substr(7);
									if(!$(ch).hasClass("show")) {
										// _p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 B1", {
											part: $(this).attr("id")
										});
									}
								} else {
										//_p 붙어 있지 않으면 id 그대로 재생
										ion.sound.play("r1 B1", {
											part: $(this).attr("id")
										});
								}
								
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
							na += $(this).attr("id");
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

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).php('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).php('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-success");

					} else {
						$(this).php('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});

					// 준비되면 HV 보이기
					$("#0").show();

					}
				});
				
			});
			
		</script>

		<!-- ion.sound finished -->
	</body>
</html>