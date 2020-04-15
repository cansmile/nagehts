<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="1">
					<div class="display-4">1</div>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="2">
					<div class="display-4">2</div>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="3">
					<div class="display-4">3</div>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="4">
					<div class="display-4">4</div>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="5">
					<div class="display-4">5</div>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>Hören Sie und ordnen Sie zu.
				<small> 듣고 그림과 내용을 연결해 보세요.</small>
				<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
				HV
				</button>
				</h2>
				<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">번호</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				<h3>[ <small>번호를 알맞은 그림과 짝지우세요.</small> ]</h3>
			</div>
			<!-- 리스트  시작 -->
			<div class="row mt-2" id="lsts">
				<div class="rounded-top border-0 itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-1">
					<img src=".\<?=$root ?>images\Reihe 1\Reihe-1-G2-1.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border-0 itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-2">
					<img src=".\<?=$root ?>images\Reihe 1\Reihe-1-G2-2.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border-0 itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-3">
					<img src=".\<?=$root ?>images\Reihe 1\Reihe-1-G2-3.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border-0 itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-4">
					<img src=".\<?=$root ?>images\Reihe 1\Reihe-1-G2-4.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
				<div class="rounded-top border-0 itm-lst mx-auto col-auto pt-1" style="min-height: 240px;" id="lst-5">
					<img src=".\<?=$root ?>images\Reihe 1\Reihe-1-G2-5.png" style="width: auto; max-height: 140px" class="mx-auto d-block ttl">
				</div>
			</div>
			<div class="row">
				<div class="col-auto">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="18">Dialog 1</p></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">1</button></th>
								<td>
									Auf Wiedersehen!
									<span class="tran"><br><small>안녕히 가세요!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-success">2</button></th>
								<td>
									Auf Wiedersehen!
									<span class="tran"><br><small>안녕히 계세요!</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-auto">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="19">Dialog 2</p></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">1</button></th>
								<td>
									Tschüs, Eva! Ich habe dich lieb!
									<span class="tran"><br><small>잘가, 에바! 사랑해!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-success">2</button></th>
								<td>
									Tschüs, Tim! Ich liebe dich auch! Gute Reise!
									<span class="tran"><br><small>안녕, 팀! 나도 사랑해! 여행 잘해!</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-auto">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="20">Dialog 3</p></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="10" class="so btn btn-outline-primary">1</button></th>
								<td>
									Guten Tag, Frau Kim!
									<span class="tran"><br><small>안녕하세요, 김 선생님.</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-success">2</button></th>
								<td>
									Guten Tag, Herr Cho!
									<span class="tran"><br><small>안녕하세요, 조 선생님!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="12" class="so btn btn-outline-primary">3</button></th>
								<td>
									Willkommen in Dresden! Das ist für Sie!
									<span class="tran"><br><small>드레스덴에 오신 것을 환영해요! 이거 받으세요!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="13" class="so btn btn-outline-success">4</button></th>
								<td>
									Oh, Danke. Das ist nett!
									<span class="tran"><br><small>오, 고마워요. 정말 친절하시네요!</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-auto">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="21">Dialog 4</p></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="14" class="so btn btn-outline-primary">1</button></th>
								<td>
									Hallo, Julia!
									<span class="tran"><br><small>안녕, 율리아!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="15" class="so btn btn-outline-success">2</button></th>
								<td>
									Hallo, Martin! Lange nicht gesehen.
									<span class="tran"><br><small>안녕, 마틴! 오랫만이다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-auto">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="text-center"><p class="display-4 so" id="22">Dialog 5</p></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="16" class="so btn btn-outline-primary">1</button></th>
								<td>
									Mama! Mama!
									<span class="tran"><br><small>엄마, 엄마!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="17" class="so btn btn-outline-success">2</button></th>
								<td>
									Oh, Mein Schatz! Hast du Hunger?
									<span class="tran"><br><small>오, 우리 강아지! 배고프니?</small></span>
								</td>
							</tr>
						</tbody>
					</table>
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
	<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?=$root ?>js/popper.min.js"></script>
	<script src="./<?=$root ?>js/bootstrap.js"></script>
	<script src="./<?=$root ?>js/taptogrouph.js"></script>
	<script src="./<?=$root ?>js/howler.core.js"></script>
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
	src: ["./<?=$root ?>sounds/Reihe 1/r1 G2.mp3"],
	sprite : {
		"0": [1222, 84607],
		"6": [12439, 1605],
		"7": [15526, 1812],
		"8": [22982, 3674],
		"9": [30064, 4961],
		"10": [41245, 2082],
		"11": [46087, 2054],
		"12": [50061, 3777],
		"13": [57417, 3039],
		"14": [65112, 1985],
		"15": [70280, 3551],
		"16": [78487, 1828],
		"17": [82599, 3152],
		"18": [9430, 8201],
		"19": [19969, 15092],
		"20": [39121, 21374],
		"21": [62833, 11140],
		"22": [76311, 9518]
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
		<?php require "wahl.php"; ?>

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
	<?php require "footer.php"; ?>
</body>
</html>