<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="mb col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					Fußball
					<span class="tran"><small>축구</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="2">
					Opa
					<span class="tran"><small>할아버지</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="3">
					Cola
					<span class="tran"><small>콜라</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="4">
					Klassik
					<span class="tran"><small>클래식</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
					Tennis
					<span class="tran"><small>테니스</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="6">
					Kaffee
					<span class="tran"><small>커피</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					Tschüs
					<span class="tran"><small>안녕히 가세요(작별인사)!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
					Tag
					<span class="tran"><small>안녕하세요(낮 인사)!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="9">
					Bier
					<span class="tran"><small>맥주</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="10">
					Baby
					<span class="tran"><small>아기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="11">
					Basketball
					<span class="tran"><small>야구</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					K-Popmusik
					<span class="tran"><small>케이팝 음악</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="13">
					Mama
					<span class="tran"><small>엄마</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
					Tee
					<span class="tran"><small>차</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="15">
					Hallo
					<span class="tran"><small>안녕하세요(만날 때 인사)!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="16">
					Rap
					<span class="tran"><small>랩</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="17">
					Papa
					<span class="tran"><small>아빠</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- 내용 시작 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Wie viel wissen Sie über die deutsche Sprache?<br>
					Sortieren Sie die Wörter nach den Themen.</h2>
					<p>
						독일어에 대해 얼마나 아나요? 다음 단어들을 주제에 따라 나누세요.
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
						</button>
					</p>
				</div>
			</div>
			<!-- 첫 번째 문제 -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 mb-1 mt text-center">
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼을 눌러 듣고 단어를 알맞은 그림에 짝지우세요. 다중 선택이 되지만 그림에 맞는 단어만 배치됩니다.</small> ]</h3>
					<div class="border-3 border-danger bg-light col-sm-12 col-md-12 col-lg-12">
						[ 주제: <h6 class="badge badge-primary badge-sm my-3" disabled>Begrüßung 인사 </h6>&nbsp; <h6 class="badge badge-info badge-sm my-3" disabled>Sport 스포츠 </h6>&nbsp; <h6 class="badge badge-success badge-sm my-3" disabled>Musik 음악 </h6>&nbsp; <h6 class="badge badge-danger badge-sm my-3" disabled>Getränke 음료 </h6>&nbsp; <h6 class="badge badge-warning badge-sm my-3" disabled>Familie 가족 </h6> ]
					</div>
				</div>
			</div>
			
			
			<!-- 리스트  시작 -->
			<div class="row mt-3" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-primary so itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-1.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Begrüßung</strong> 인사 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info so itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-2.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Sport</strong> 스포츠 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-3.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Musik</strong> 음악 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-4.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Getränke</strong> 음료 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-warning so itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-5">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-5.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Familie</strong> 가족 </h2>&nbsp;
				</div>
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
		</div>
		<!-- 리스트 끝 -->
	</section>

	<div id="marg"></div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- ion.sound -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			ion.sound( {
				sounds : [ {
					name : "R0_Ordnen_Sie",
					sprite: {
						"0": [60, 53],
							"1": [0, 1.6],
							"2": [3.9, 1.5],
							"3": [7.5, 1.3],
							"4": [11.3, 1.1],
							"5": [14.8, 1.4],
							"6": [18.4, 1.5],
							"7": [22.1, 1.4],
							"8": [26, 1.3],
							"9": [30, 1.3],
							"10": [33.3, 1.6],
							"11": [37.1, 1.5],
							"12": [40.9, 1.4],
							"13": [44.3, 1.5],
							"14": [48, .8],
							"15": [51.3, 1],
							"16": [54.9, 1],
							"17": [58.2, 1.2]
					}
				}
				, {
					name: "Cartoon_Boing",
						path: "sounds/"
				}
				],
				path : "sounds/Reihe 0/",
				preload : true,
				volume : 1.0,
				multiplay : false,
				ended_callback: function (obj) {
					// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
					if(obj.part=="0") {
						$("#0").show();
						$("#0_p").hide();
					}
					;
				}
				,
				ready_callback: function () {
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("R0_Ordnen_Sie", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("R0_Ordnen_Sie", {
								part: $(this).attr("id")
							}
							);
							// 전체 듣기 재생일 때는 일시정지 버튼 보이기
							if($(this).attr("id")=="0") {
								$(this).hide();
								$("#0_p").show();
							}
							;
						}
						;
					}
					);

					<?php include "wahl.php"; ?>

					// 정답 확인
					$("#chk").on("click", function() {
						if($(this).attr("id")=="chk") {
							if($("#itms>button").length < 1) {
								$(".tran").show();
								$(this).addClass("btn-success");
								$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
							}
							else {
								alert("문제를 모두 풀어주세요!")
							}
						}
					}
					) // 준비되면 HV 보이기
					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		}
		);

	</script>
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>