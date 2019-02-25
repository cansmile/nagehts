<?php include "header.php"; ?>
	<body>
		<!-- 넵바 시작 -->
		<div class="dropdown-divider"></div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href=".\r1-Guten Tag!.php">Reihe 1 - A - Inhalt</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 1. Ordnen Sie zu </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item active" href="r1-A2.php">1. Ordnen Sie zu<span class="sr-only">(current)</span></a> <a class="dropdown-item" href="r1-A3.php">2. Ergänzen Sie</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=".\index.php">처음</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=".\Deutschland.php">독일은...</a>
					</li>
				</ul>

			</div>
		</nav>
		<!-- 넵바 끝 -->

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">1. Ordnen Sie zu.<br />
								</h1>
							<h2>
								그림에 알맞은 표현을 연결해보세요.
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<!-- 알림 시작 -->
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
		<div class="container-fluid">
			
		<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>단어를 넣을 때는 그림을 누르세요.</h2>
				</div>
				<div class="mb-2 text-center" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans2 itm" id="1">
						Guten Morgen!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans1 itm" id="2">
						Guten Tag!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans3 itm" id="3">
						Guten Abend!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans5 itm" id="4">
						Hallo!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans6 itm" id="5">
						Tschüs!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans4 itm" id="6">
						Gute Nacht!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-sm btn-outline-dark ans7 itm" id="7">
						Auf Wiedersehen!
					</button>
				</div>
			</div>
			<!-- 아이템들 끝 -->

			<!-- 리스트 시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-1">
					<img src=".\images\Reihe 1\Reihe-1-A2-1.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-2">
					<img src=".\images\Reihe 1\Reihe-1-A2-2.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-3">
					<img src=".\images\Reihe 1\Reihe-1-A2-3.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-4">
					<img src=".\images\Reihe 1\Reihe-1-A2-4.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-5">
					<img src=".\images\Reihe 1\Reihe-1-A2-5.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-6">
					<img src=".\images\Reihe 1\Reihe-1-A2-6.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border border-outline-dark itm-lst text-center text-dark m-1 col-sm col-md col-lg" id="lst-7">
					<img src=".\images\Reihe 1\Reihe-1-A2-7.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
			</div>
		<!-- 리스트 끝 -->

			<div class="row">
				<!--문제 시작-->
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="1">
					<h3 class="mt-3">일반인사</h3>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="2">
					<h3 class="mt-3">아침인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						e. Guten Morgen!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="3">
					<h3 class="mt-3">낮 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="4">
					<h3 class="mt-3">저녁인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="5">
					<h3 class="mt-3">밤인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Guten Abend!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="6">
					<h3 class="mt-3">헤어질 때 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Tschüs!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e . Guten Abend!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="7">
					<h3 class="mt-3">헤어질 때 또 다른 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						d. Auf Wiedersehen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Guten Abend!
					</div>
				</div>
			</div>

				<!--문제 끝-->
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
	</div>
</section>
		<!-- 정답확인 버튼 끝 -->


<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/interact.min.js"></script>
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "Bama_Country_Country"
					}, {
						name : "Cartoon_Boing"
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay : true
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

					}
					;
				};
			});

		</script>
	</body>
</html>