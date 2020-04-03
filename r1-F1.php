2<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->

		<section>
			<div class="container">
				<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Hören Sie und sprechen Sie nach.<br>
							<p>
								듣고 따라하세요
							<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button>
						</p>
						</h2>
				</div>

				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 들으면 해당 음성이 재생됩니다. 단어를 누르면 그림이 나옵니다.</small> ]</h3>
					</div>
				</div>

				<div class="accordion row" id="accordionitms">
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseOne" area-expanded="false" aria-controls="collapseOne" id="1">
									eins
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-1.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseTwo" area-expanded="false" aria-controls="collapseTwo" id="2">
									zwei
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-2.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseThree" area-expanded="false" aria-controls="collapseThree" id="3">
									drei
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-3.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseFour" area-expanded="false" aria-controls="collapseFour" id="4">
									vier
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-4.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseFive" area-expanded="false" aria-controls="collapseFive" id="5">
									fünf
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-5.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseSix" area-expanded="false" aria-controls="collapseSix" id="6">
									sechs
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-6.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingSeven">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseSeven" area-expanded="false" aria-controls="collapseSeven" id="7">
									sieben
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-7.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingEight">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseEight" area-expanded="false" aria-controls="collapseEight" id="8">
									acht
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-8.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingNine">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseNine" area-expanded="false" aria-controls="collapseNine" id="9">
									neun
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-9.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
					<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl px-0 border-0">
						<div class="card-header border-0 bg-white" id="headingTen">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark btn-block btn-md mt-1 so" type="button" data-toggle="collapse" data-target="#collapseTen" area-expanded="false" aria-controls="collapseTen" id="10">
									zehn
								</button>
							</h5>
						</div>
						<div class="collapse border-0" id="collapseTen" aria-labelledby="headingTen" data-parent="#accordionitms">
							<img src=".\images\Reihe 1\Reihe-1-F1-10.png" style="max-width: 100%; height: auto;" class="d-block mx-auto">
						</div>
					</div>
				</div>
			</div>
		</section>
		
<div id="last" class="d-none"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?php echo($root); ?>js/popper.min.js"></script>
		<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
		<script src="./<?php echo($root); ?>js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>
		<script>
			$("#0").hide();
			$(".tran").hide();
			$(".nu").hide();

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
		"10": [32999, 1315]
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

		});
			
		</script>
<?php include "footer.php"; ?>
	</body>
</html>