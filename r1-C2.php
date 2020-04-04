<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 itm so" id="1">
					schlecht<span class="tran"><br />잘 못지내요</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 itm so" id="2">
					gut<span class="tran"><br />잘 지내요</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 itm so" id="3">
					super<span class="tran"><br />아주 잘 지내요</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 itm so" id="4">
					es geht<span class="tran"><br />그럭저럭 지내요</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 itm so" id="5">
					sehr schlecht<span class="tran"><br />매우 안 좋아요</span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 itm so" id="6">
					sehr gut<span class="tran"><br />매우 잘 지내요</span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>단어를 그림과 짝지우세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			
			<!-- 리스트 시작 -->
			<div class="row mt-3" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-1">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-1.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-2">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-2.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-3">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-3.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-4">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-4.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-5">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-5.png" class="ttl">
				</div>
				<div style="min-height: 240px;" class="rounded-top border-0 itm-lst text-center text-dark col-4 col-xl" id="lst-6">
					<img style="max-width: 100%; height: auto;" src=".\<?php echo($root); ?>images\Reihe 1\Reihe-1-C2-6.png" class="ttl">
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
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
		$("#0").hide();
		$(".tran").hide();
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
	src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 C2.mp3"],
	sprite : {
		"0": [289, 20259],
		"1": [16683, 1281],
		"2": [11426, 1162],
		"3": [5513, 1233],
		"4": [14001, 1452],
		"5": [18894, 1677],
		"6": [8055, 1776]
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
		pan=[3,4,5];
		for(var p=0;
		p < pan.length;
		p++) {
			var pani="#"+pan[p];
			for(var i=0;
			i < $(".itm-lst").length;
			i++) {
				if($(pani).hasClass("ans"+ (i+1))) {
					$(pani).insertAfter($("#lst-"+ (i+1) + ">img"));
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