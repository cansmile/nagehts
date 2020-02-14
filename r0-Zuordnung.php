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
					<span class="tran"><small>잘가(작별인사)!</small></span>
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
					<span class="tran"><small>안녕(만날 때 인사)!</small></span>
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
				<div style="min-height: 240px;" class="rounded-top bg-primary itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-1.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Begrüßung</strong> 인사 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-2.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Sport</strong> 스포츠 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-3.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Musik</strong> 음악 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-4">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<img src=".\images\Reihe 0\Reihe-0-4.png" style="max-width: 100%; height: auto;" class="d-block">
					<strong>Getränke</strong> 음료 </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-warning itm-lst col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pt-1 border border-white" id="lst-5">
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

	<div id="last" class="d-none"></div>
	<div id="marg"></div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- ion.sound -->
	<script src="./js/ion.sound.min.js"></script>
	<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>

	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();

// 소리 출력 전역 변수와 함수
var sen = new Array(), pa = new Array(), he = new Array(), last;
$(".so").each(function() {
	var t = $(this);
	var ti = t.attr("id");
	sen[ti] = 0;
	pa[ti] = t.html();
});

function stopAll() {
	$(".so").each(function() {
		$(this).html(pa[$(this).attr("id")]);
	});
}

// 문제 재생
var nagehts = new Howl({
	src: ["./sounds/Reihe 0/R0_Ordnen_Sie.mp3"],
	sprite : {
		"0": [60000, 53008],
		"1": [0, 1600],
		"2": [3900, 1500],
		"3": [7500, 1300],
		"4": [11300, 1100],
		"5": [14800, 1400],
		"6": [18400, 1500],
		"7": [22100, 1400],
		"8": [26000, 1300],
		"9": [30000, 1300],
		"10": [33300, 1600],
		"11": [37100, 1500],
		"12": [40900, 1400],
		"13": [44300, 1500],
		"14": [48000, 800],
		"15": [51300, 1000],
		"16": [54900, 1000],
		"17": [58200, 1200]
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
		$("#0").show();
		$(".alert").hide();

		$(".so").on("click", function() {
				var t = $(this);
				var ti = t.attr("id");

			if(($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
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

		<?php include "wahl.php"; ?>

		var pan=new Array(), pann;
		// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
		pan=[2,7,8];
		for(var p=0;
		p < pan.length;
		p++) {
			pann="#"+pan[p];
			for(var i=0;
			i < $(".itm-lst").length;
			i++) {
				if($(pann).hasClass("ans"+ (i+1))) {
					$(pann).insertAfter("#lst-"+ (i+1) + ">h2");
				}
			}
			$(pann).find(".tran").show();
		}
		$(".itm-lst>button").addClass("btn-block btn-light");


		// 정답 확인
		$("#chk").on("click", function() {
			if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
				$(this).attr("id", "done");
				$(".itm").each(function() {
					if($(this).parent().attr("id").length > 5) {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
					} else {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
					}
					$(".tran").show();
					if($(this).hasClass("ans"+ (a))) {
						$(this).addClass("text-success font-weight-bold");
					}
					else {
						$(this).removeClass("btn-lg");
						$(this).addClass("btn-sm text-danger font-weight-bold");
						$(this).find(".tran").show();

					}
					;

					if($(this).hasClass("text-danger")) {
						// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
						for(var i = 1; i <= $(".itm-lst").length; i++) {
							if($(this).hasClass("ans"+i)) {
								$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-warning bg-white font-weight-bold\">" + $(this).html() + "</button>");
								// $(lstn).append(i);
							}
						}
					};

				}
				);

				if($(".itm").length==$(".itm.text-success").length) {
					$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
					$(this).addClass("bg-success font-weight-bold text-white");
				}
				else {
					$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
					$(this).addClass("bg-orange font-weight-bold text-white");
				};
			}
		});

		// 준비되면 HV 보이기
		$("#0").show();
		$(".alert").hide();


	},
	onend: function() {
		$("div#last").text("");
		stopAll();
		$("#cnt-"+last).text(sen[last]);
		if(last == 0) {
			if(sen[last] == 2) {
				$(".tran").show();
				$(".so").each(function() {
					pa[last] = $("#"+last).html();
				});
			}
		} else if(sen[last] == 2) {
			$("#"+last).find(".tran").show();
			pa[last] = $("#"+last).html();
		}
	}


});

	</script>
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>