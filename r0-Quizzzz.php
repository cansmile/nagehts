<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php require_once "ready.php"; ?>
	<!-- 알림 시작 -->
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		문제를 모두 풀어야
		<button class="badge badge-light" disabled>
		정답확인
		</button>
		이 됩니다.
		<br />
		<p class="mt-4">
			각 문제마다 <strong style="color: red;">처음 선택한 항목</strong>만
			<button class="badge badge-light" disabled>
			정답확인
			</button>
			에 이용됩니다.
		</p>
		<button class="badge badge-light">
		정답확인
		</button>
		을 누르면 지문의 배경색이
		<button class="badge badge-danger" disabled>
		선택한 지문
		</button>
		,
		<button class="badge badge-lime text-dark" disabled>
		선택한 지문이 정답인 경우
		</button>
		,
		<button class="badge badge-success" disabled>
		정답
		</button>
		으로 변합니다.
		<br />
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Wie viel wissen Sie über Deutschland und über die deutsche Sprache?
					<br>
					<small>독일과 독일어에 대해 얼마나 알고 있나요?</small></h2>
					<h3>[ <small>답안은 처음 선택한 항목만 인정됩니다.<br>처음 선택한 답안을 답안 확인에 사용합니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<!--문제 시작-->
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="1" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">1. 독일의 수도는 어디인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 본
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. 뮌헨
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							c. 베를린
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="2" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">2. 독일은 몇 개의 연방으로 되어 있나요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 13개
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. 16개
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 20개
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="3" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">3. 독일과 국경을 이루는 나라는 몇 나라인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 3개
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. 6개
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							c. 9개
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="4" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">4. ‘축구’를 독일어로 뭐라고 할까요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. Fußball<br><small class="ml-4">푸쓰발</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. Soccer<br><small class="ml-4">싸카</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Football<br><small class="ml-4">풋볼</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="5" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">5. 독일의 프로 축구경기를 뭐라고 하나요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. K-league<br><small class="ml-4">케이 리그</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. Bundesliga<br><small class="ml-4">분데스리가</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Premier League<br><small class="ml-4">프리미어리그</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="6" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">6. 독일어로 ‘골인(Goal in)’을 뭐라고 하나요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. Pass!<br><small class="ml-4">파스!</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. Tor!<br><small class="ml-4">토-어!</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Foul<br><small class="ml-4">파울</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="7" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">7. 독일어 jobben은 무슨 뜻인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. 아르바이트하다
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. 조깅하다
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 말하다
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="8" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">8. 네 마리의 동물이 주인공으로 나오는 독일의 유명한 동화에서 동물들이 악대가 되어 가고싶어 했던 도시는 어디인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. 브레멘
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. 뮌헨
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 슈투트가르트
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="9" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">9. 다음 중 우리말과 독일어가 알맞게 짝지어진 것은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. Bier<br><small class="ml-4">맥주</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. Kindergarten<br><small class="ml-4">음식점</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Download<br><small class="ml-4">업로드</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="10" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">10. 독일어 Schule의 뜻은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. school
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. shoe
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. shoot
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="11" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">11. 독일어 Hand의 뜻은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 발
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. 손
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 머리
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="12" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">12. 다음 중 독일에서 태어난 사람은 누구인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 게리 올드만
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. 브루스 윌리스
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 톰 크루즈
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="13" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">13. 독일 자동차가 아닌 것은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. Audi<br><small class="ml-4">아우디</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. Ford<br><small class="ml-4">포드</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. BMW<br><small class="ml-4">베엠베 또는 비엠더블유</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="14" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">14. 독일어로 “독일”을 바르게 옮긴 것은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. Dutch
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. Deutschland
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Dänemark
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="15" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">15. 다음 중 독일의 명소가 아닌 곳은 어디인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 로렐라이
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. 노이슈반슈타인성<br><small class="ml-4">백조의 성</small>
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							c. 빅벤
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="16" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">16. &lt;95개 조항문&gt;을 발표하고 종교개혁을 이끈 독일의 유명한 종교개혁가는 누구인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 슈바이처
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. 마틴 루터
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 칼뱅
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="17" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">17. 다음 중 독일의 아침 인사말은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. Gute Nacht!
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. Guten Tag!
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							c. Guten Morgen!
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="18" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">18. 독일에서 발명되지 않은 물건은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							a. 컴퓨터
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. 맥주
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. 축구화
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="19" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">19. 독일의 국기 색은 무엇인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left x"a>
							a. Schwarz, Grün, Gelb
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							b. Schwarz, Rot, Gold
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Schwarz, Rot, Blau
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q border-lime rounded border" id="20" style="min-height: 450px; position: relative;">
					<h3 class="mt-3">20. 유럽 중에 가장 큰 항구도시는 어디인가요?</h3>
					<div class="align-middle text-left pb-3" style="position: absolute; bottom: 0; min-width: 90%; min-width: 90%;">
						<div class="btn btn-info pop btn-lg btn-block text-left o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
							a. Hamburg
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							b. Rotterdam
						</div>
						<div class="btn btn-info pop btn-lg btn-block text-left x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
							c. Berlin
						</div>
					</div>
				</div>
				<!--문제 끝-->
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="rows">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
		</div>
	</section>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./oxsound.php"); ?>

	<script>
		$(document).ready(function() {
			// 팝업 설정
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
			});
						// 팝업 내용 사라지기
		$(".pop").popover().click(function() {
			setTimeout(function() {
				$(".pop").popover('hide');
			}, 500);
		});

		// 정답확인
		$("#chk").on("click", function() {
			if($(this).attr("id") == "chk") {
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
							$(this).addClass("btn-success text-white");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-warning font-weight-bold");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-danger");
						} else {
							$(this).addClass("btn-light");
						}
						;
					});

					// 정답 확인 div 상자 배경색 속성 없애기
					$(this).removeClass("btn-light ");

					$(".itm-lst").each(function() {
						if($(this).find(".btn")) {
							$(this).find(".btn").addClass("font-weight-bold text-success");
						}
					});

					var qa = $(".q").length; // 전체 문항 수
					var qr = $(".btn-success").length; // 맞춘 항목 수
					var pe = (qr / qa) * 100; // 정답 비율
					var tcl = "white"; // 기본 문자색

					// 분류 기준은 100%, 80%, 60%, 40%
					if(pe > 99) {
						var st = "원어민이세요?";
						var cl = "lime";
						var tcl = "dark";
					} else if(pe > 74) {
						var st = "어! 좀 하시는데요~^^";
						var cl = "success";
					} else if(pe > 49) {
						var st = "쓰읍~ 다시 해 보실까요?";
						var cl = "primary";
					} else {
						var st = "좀 더 분발해 주세요~";
						var cl = "danger";
					}

					$(this).addClass("btn-" + cl + " text-" + tcl);
					$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

				};
			}
		});
	});
	</script>
	<?php include "footer.php"; ?>
</body>
</html>