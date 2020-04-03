<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 so itm" id="1">
					1
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 so itm" id="2">
					2
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 so itm" id="3">
					3
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 so itm" id="4">
					4
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans7 so itm" id="5">
					5
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 so itm" id="6">
					6
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans8 so itm" id="7">
					7
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 so itm" id="8">
					8
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans9 so itm" id="9">
					9
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans10 so itm" id="10">
					10
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h3>[ <small>번호를 알맞은 단어와 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<!-- 리스트 시작 -->
			<div class="row text-center" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-1">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="eins">eins</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-2">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="zwei">zwei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-3">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="drei">drei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-4">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="sechs">sechs</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-5">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="acht">acht</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-6">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="vier">vier</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-7">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="fünf">fünf</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-8">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="sieben">sieben</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-9">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="neun">neun</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-10">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="zehn">zehn</strong></h2>
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
	</section>
	
	<div id="marg"></div>
	<div id="last" class="d-none"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogrouph.js"></script>
	<script src="./<?php echo($root); ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./oxsound.php"); ?>
	<script>
		$("#chk").hide();
		$(document).ready(function() {
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
	src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 F1.mp3"],
	sprite : {
		"0": [242, 34112],
		"1": [11116, 1428],
		"2": [13755, 1421],
		"3": [16522, 1256],
		"4": [18856, 1327],
		"5": [21257, 1430],
		"6": [23796, 1484],
		"7": [26330, 1477],
		"8": [28673, 1265],
		"9": [30899, 1240],
		"10": [32999, 1315],
		"eins": [11116, 1428],
		"zwei": [13755, 1421],
		"drei": [16522, 1256],
		"vier": [18856, 1327],
		"fünf": [21257, 1430],
		"sechs": [23796, 1484],
		"sieben": [26330, 1477],
		"acht": [28673, 1265],
		"neun": [30899, 1240],
		"zehn": [32999, 1315]
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

		// 정답확인
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
						$(this).addClass("text-warning font-weight-bold");
						$(this).find(".tran").show();

					}
					;

					if($(this).hasClass("text-warning")) {
						// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
						for(var i = 1; i <= $(".itm-lst").length; i++) {
							if($(this).hasClass("ans"+i)) {
								$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger font-weight-bold\">" + $(this).html() + "</button>");
								// $(lstn).append(i);
							}
						}
					};

				}
			);


			// 정답 확인 div 상자 배경색 속성 없애기
			$(this).removeClass("btn-light ");

			var qa = $(".itm").length; // 전체 문항 수
			var qr = $(".text-success").length; // 맞춘 항목 수
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

			$(this).attr("id","done");

		}
		}
		);
		<?php include "wahl.php"; ?>

		// 미리 답 넣어놓기
		var pan=new Array();
		// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
		pan=[];
		for(var p=0;
		p < pan.length;
		p++) {
			var pani="#"+pan[p];
			for(var i=0;
			i < $(".itm-lst").length;
			i++) {
				if($(pani).hasClass("ans"+ (i+1))) {
					$(pani).insertAfter($("#lst-"+ (i+1) + ">h2"));
					$(pani).addClass("btn-block btn-light");
				}
			}
		}

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
			if($("#"+last).hasClass("itm")) {
				$("#"+last+">.tran").show();
			}
			$("#"+last).closest("tr").find(".tran").show();
			pa[last] = $("#"+last).html();
		}
	}


});

		}
		);

	
	</script>
	<?php include "footer.php"; ?>
</body>
</html>