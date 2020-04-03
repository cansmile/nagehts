<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="1">
					Alberto
					</button>
					<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark so itm" id="2">
					Andreas
					</button>
					<button type="button" class="mt-1 mx-1 btn ans25 btn-lg btn-outline-dark so itm" id="3">
					Angelika
					</button>
					<button type="button" class="mt-1 mx-1 btn ans18 btn-lg btn-outline-dark so itm" id="4">
					Anton
					</button>
					<button type="button" class="mt-1 mx-1 btn ans22 btn-lg btn-outline-dark so itm" id="5">
					Barbara
					</button>
					<button type="button" class="mt-1 mx-1 btn ans19 btn-lg btn-outline-dark so itm" id="6">
					Birgit
					</button>
					<button type="button" class="mt-1 mx-1 btn ans26 btn-lg btn-outline-dark so itm" id="7">
					Brigitte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark so itm" id="8">
					Christian
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="9">
					Christiane
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
					Daniel
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="11">
					Frank
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="12">
					Franz
					</button>
					<button type="button" class="mt-1 mx-1 btn ans28 btn-lg btn-outline-dark so itm" id="13">
					Heike
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
					Heinz
					</button>
					<button type="button" class="mt-1 mx-1 btn ans23 btn-lg btn-outline-dark so itm" id="15">
					Helga
					</button>
					<button type="button" class="mt-1 mx-1 btn ans20 btn-lg btn-outline-dark so itm" id="16">
					Hilde
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
					Inge
					</button>
					<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark so itm" id="18">
					Johann
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					Julia
					</button>
					<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark so itm" id="20">
					Karl
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="21">
					Klaus
					</button>
					<button type="button" class="mt-1 mx-1 btn ans21 btn-lg btn-outline-dark so itm" id="22">
					Luisa
					</button>
					<button type="button" class="mt-1 mx-1 btn ans27 btn-lg btn-outline-dark so itm" id="23">
					Maja
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark so itm" id="24">
					Marko
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="25">
					Martin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="26">
					Max
					</button>
					<button type="button" class="mt-1 mx-1 btn ans24 btn-lg btn-outline-dark so itm" id="27">
					Monika
					</button>
					<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark so itm" id="28">
					Oliver
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="29">
					Otto
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="30">
					Peter
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark so itm" id="31">
					Rudolf
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="32">
					Sabine
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark so itm" id="33">
					Stefan
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="34">
					Thomas
					</button>

				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Mädchen- oder Jungennamen?
					<small>여자 혹은 남자이름?</small>
					</h2>
					<h2>[ <small>단어를 알맞은 위치에 짝지우세요. 다중 선택이 되지만 한 위치에 한 단어만 배치됩니다.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼은 정답 확인을 한 뒤에 나타납니다.</small> ]</h3>
				</div>
				
			</div>
			<div class="row" id="lsts">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-12 mt-1">
					<table class="table table-borderless text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-info"> 남자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="align-middle">1</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">2</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">4</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-11">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">5</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-12">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-13">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-14">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">6</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-15">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-16">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-17">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">7</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-18">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-12 mt-1 1itm" id="lst-2">
					<table class="table table-borderless text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-danger"> 여자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle" scope="row">1</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-19">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-20">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-21">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">2</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-22">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-23">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">4</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-24">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-25">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-26">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">5</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-27">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-28">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">&nbsp;</td>
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
			<div class="row">
				<div class="col-12">
					<table class="table table-borderless text-center">
						<thead class="thead-dark">
							<th scope="col">
								Nach-(Familien)namen (Herr / Frau)
							</th>
						</thead>
						<tbody>
							<tr>
							<td>Müller Bauer Wecker Schneider Koch Schmidt Schumacher</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
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
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./oxsound.php"); ?>
	<script>
		$("#0").hide();
		$("#0_p").hide();
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
	src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 B4.mp3"],
	sprite : {
		"0": [0, 86740],
		"1": [22435, 1792],
		"2": [43808, 1671],
		"3": [79517, 1562],
		"4": [51550, 1661],
		"5": [65839, 1494],
		"6": [60018, 1623],
		"7": [81336, 1655],
		"8": [47493, 1623],
		"9": [73623, 1756],
		"10": [34425, 1422],
		"11": [30438, 1450],
		"12": [20188, 1545],
		"13": [85113, 1554],
		"14": [16031, 1658],
		"15": [69979, 1531],
		"16": [61841, 1325],
		"17": [75891, 1285],
		"18": [45771, 1448],
		"19": [68035, 1521],
		"20": [41884, 1720],
		"21": [49554, 1593],
		"22": [63701, 1641],
		"23": [83157, 1609],
		"24": [32419, 1656],
		"25": [14251, 1682],
		"26": [28442, 1429],
		"28": [39803, 1860],
		"27": [77434, 1812],
		"29": [24467, 1444],
		"30": [18412, 1762],
		"31": [36114, 1574],
		"32": [71773, 1655],
		"33": [37939, 1718],
		"34": [26568, 1555]
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

			$(".itm-lst").each(function() {
				$(this).find(".so").addClass("okay");
			});
			// 정답 확인 div 상자 배경색 속성 없애기
			$(this).removeClass("btn-light ");

			var qa = $(".itm-lst").length; // 전체 문항 수
			var qr = $(".okay").length; // 맞춘 항목 수
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
			$("#0").show();

			$(this).attr("id","done");

		}
	}
	);
	<?php include "wahl.php"; ?>

		var pan = new Array();
		// pan = ["1","2","3","4","5","6","7","8","9","10"];
		pan = [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34];
		var il = $("#itms>.itm").length;
		for(var p = 0; p < pan.length; p++) {
		var pani = "#lst-" + pan[p];
			$(".itm").each(function() {
				if($(this).hasClass("ans" + pan[p])) {
					$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
					$("#" + $(this).attr("id")).addClass("btn-block");
					$("#" + $(this).attr("id")).addClass("btn-light");
					$("#lst-" + pan[p] + ">h2").remove();
					// $("#lst-" + pan[p]).parent().find(".tran").show();
				}
			})
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