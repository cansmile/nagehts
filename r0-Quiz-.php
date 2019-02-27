<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">B. Quiz</h1>
							<h2> Wie viel wissen Sie über Deutschland und über die deutsche Sprache? </h2>
							<p>
								독일과 독일어에 대해 얼마나 알고 있나요?
							</p>
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
			<div class="row">
				<!--문제 시작-->
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="1">
					<h3 class="mt-3">1. 독일의 수도는 어디인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 본
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. 뮌헨
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. 베를린
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="2">
					<h3 class="mt-3">2. 독일은 몇 개의 연방으로 되어 있나요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 13개
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. 16개
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 20개
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="3">
					<h3 class="mt-3">3. 독일과 국경을 이루는 나라는 몇 나라인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 3개
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. 6개
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. 9개
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="4">
					<h3 class="mt-3">4. ‘축구’를 독일어로 뭐라고 할까요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. Fußball 푸쓰발
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Soccer 싸카
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Football 풋볼
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="5">
					<h3 class="mt-3">5. 독일의 프로 축구경기를 뭐라고 하나요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. K-league 케이 리그
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Bundesliga 분데스리가
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Premier League 프리미어리그
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="6">
					<h3 class="mt-3">6. 독일어로 ‘골인(Goal in)’을 뭐라고 하나요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Pass! 파스!
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Tor! 토-어!
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Foul 파울
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="7">
					<h3 class="mt-3">7. 독일어 jobben은 무슨 뜻인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. 아르바이트하다
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. 조깅하다
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 말하다
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="8">
					<h3 class="mt-3">8. 네 마리의 동물이 주인공으로 나오는 독일의 유명한 동화에서 동물들이 악대가 되어 가고싶어 했던 도시는 어디인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. 브레멘
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. 뮌헨
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 슈투트가르트
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="9">
					<h3 class="mt-3">9. 다음 중 우리말과 독일어가 알맞게 짝지어진 것은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. Bier = 맥주
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Kindergarten = 음식점
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Download = 업로드
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="10">
					<h3 class="mt-3">10. 독일어 Schule의 뜻은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. school
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. shoe
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. shoot
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="11">
					<h3 class="mt-3">11. 독일어 Hand의 뜻은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 발
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. 손
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 머리
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="12">
					<h3 class="mt-3">12. 다음 중 독일에서 태어난 사람은 누구인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 게리 올드만
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. 브루스 윌리스
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 톰 크루즈
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="13">
					<h3 class="mt-3">13. 독일 자동차가 아닌 것은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Audi 아우디
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Ford 포드
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. BMW 베엠베 또는 비엠더블유
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="14">
					<h3 class="mt-3">14. 독일어로 “독일”을 바르게 옮긴 것은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Dutch
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Deutschland
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Dänemark
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="15">
					<h3 class="mt-3">15. 다음 중 독일의 명소가 아닌 곳은 어디인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 로렐라이
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. 노이슈반슈타인성(백조의 성)
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. 빅벤
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="16">
					<h3 class="mt-3">16. &lt;95개 조항문&gt;을 발표하고 종교개혁을 이끈 독일의 유명한 종교개혁가는 누구인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 슈바이처
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. 마틴 루터
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 칼뱅
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="17">
					<h3 class="mt-3">17. 다음 중 독일의 아침 인사말은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. Guten Morgen!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="18">
					<h3 class="mt-3">18. 독일에서 발명되지 않은 물건은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. 컴퓨터
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. 맥주
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. 축구화
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="19">
					<h3 class="mt-3">19. 독일의 국기 색은 무엇인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block x"a>
						a. Schwarz, Grün, Gelb
					</div>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Schwarz, Rot, Gold
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Schwarz, Rot, Blau
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="20">
					<h3 class="mt-3">20. 유럽 중에 가장 큰 항구도시는 어디인가요?</h3>
					<div class="btn btn-info pop btn-lg btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. Hamburg
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Rotterdam
					</div>
					<div class="btn btn-info pop btn-lg btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Berlin
					</div>
				</div>
				<!--문제 끝-->
			</div>
		</section>
		<!-- 정답화인 버튼 시작 -->
		<div class="rows">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
		<!-- 정답확인 버튼 끝 -->

		<!-- 문제 풀이 진행 시작 -->
		<div class="progress progress-striped active fixed-bottom">
			<div class="bar" style="width: 0%;"></div>
		</div>
		<!-- 문제 풀이 진행 끝 -->

<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
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
					multiplay : true,
					ready_callback: function() {
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

		}
	});
});

		</script>
	</body>
</html>