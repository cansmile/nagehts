<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<style>
		td,th {
			height: 80px;
		}
	</style>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
					Österreicher
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="2">
					Schweizerin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="3">
					Amerikaner
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					Japanerin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="5">
					Spanierin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					Deutsch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="7">
					Spanisch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					Deutsch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="9">
					Englisch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="10">
					Deutsch
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="11">
					Italiener
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
					<h2> Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 <br>알맞은 위치에 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-sm-5 p-0">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col" colspan="2">Land&nbsp;<small>나라</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle py-0" scope="row">Korea</th>
								<td class="align-middle py-0"><button type="button" id="12" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Japan</th>
								<td class="align-middle py-0"><button type="button" id="16" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">China</th>
								<td class="align-middle py-0"><button type="button" id="20" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Deutschland</th>
								<td class="align-middle py-0"><button type="button" id="24" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Österreich</th>
								<td class="align-middle py-0"><button type="button" id="28" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Schweiz</th>
								<td class="align-middle py-0"><button type="button" id="32" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Frankreich</th>
								<td class="align-middle py-0"><button type="button" id="36" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Amerika</th>
								<td class="align-middle py-0"><button type="button" id="40" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Spanien</th>
								<td class="align-middle py-0"><button type="button" id="44" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Italien</th>
								<td class="align-middle py-0"><button type="button" id="48" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Türkei</th>
								<td class="align-middle py-0"><button type="button" id="52" class="so btn btn-danger">▶</button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-sm-5 p-0">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col" colspan="2">Mann&nbsp;<small>남</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle py-0">Koreaner</td>
								<td class="align-middle py-0"><button type="button" id="13" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Japaner</td>
								<td class="align-middle py-0"><button type="button" id="17" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Chinese</td>
								<td class="align-middle py-0"><button type="button" id="21" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Deutscher</td>
								<td class="align-middle py-0"><button type="button" id="25" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="29" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Schweizer</td>
								<td class="align-middle py-0"><button type="button" id="33" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Franzose</td>
								<td class="align-middle py-0"><button type="button" id="37" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="41" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Spanier</td>
								<td class="align-middle py-0"><button type="button" id="45" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="49" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Türke</td>
								<td class="align-middle py-0"><button type="button" id="53" class="so btn btn-danger">▶</button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 d-sm-block d-md-none d-lg-none d-xl-none p-0 mt-sm-5">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col">Land&nbsp;<small>나라</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle py-0" scope="row">Korea</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Japan</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">China</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Deutschland</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Österreich</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Schweiz</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Frankreich</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Amerika</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Spanien</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Italien</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Türkei</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-sm-5 p-0">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col" colspan="2">Frau&nbsp;<small>여</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle py-0">Koreanerin</td>
								<td class="align-middle py-0"><button type="button" id="14" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="18" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Chinesin</td>
								<td class="align-middle py-0"><button type="button" id="22" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Deutsche</td>
								<td class="align-middle py-0"><button type="button" id="26" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Österreicherin</td>
								<td class="align-middle py-0"><button type="button" id="30" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="34" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Französin</td>
								<td class="align-middle py-0"><button type="button" id="38" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Amerikanerin</td>
								<td class="align-middle py-0"><button type="button" id="42" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="46" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Italienerin</td>
								<td class="align-middle py-0"><button type="button" id="50" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Türkin</td>
								<td class="align-middle py-0"><button type="button" id="54" class="so btn btn-danger">▶</button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 d-sm-block d-md-block d-lg-none d-xl-none p-0 mt-sm-5">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col">Land&nbsp;<small>나라</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle py-0" scope="row">Korea</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Japan</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">China</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Deutschland</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Österreich</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Schweiz</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Frankreich</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Amerika</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Spanien</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">Italien</th>
							</tr>
							<tr>
								<th class="align-middle py-0" scope="row">die Türkei</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-sm-5 p-0">
					<table class="table table-borderless table-striped m-0 text-center">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle py-0" scope="col" colspan="2">Sprache&nbsp;<small>언어</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle py-0">Koreanisch</td>
								<td class="align-middle py-0"><button type="button" id="15" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Japanisch</td>
								<td class="align-middle py-0"><button type="button" id="19" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Chinesisch</td>
								<td class="align-middle py-0"><button type="button" id="23" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="27" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="31" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="35" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Französisch</td>
								<td class="align-middle py-0"><button type="button" id="39" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="43" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle py-0"><button type="button" id="47" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Italienisch</td>
								<td class="align-middle py-0"><button type="button" id="51" class="so btn btn-danger">▶</button></td>
							</tr>
							<tr>
								<td class="align-middle py-0">Türkisch</td>
								<td class="align-middle py-0"><button type="button" id="55" class="so btn btn-danger">▶</button></td>
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
	src: ["./<?php echo($root); ?>sounds/Reihe 2/r2 C2.mp3"],
	sprite : {
		"0": [2177, 106947],
		"1": [46233, 1680],
		"2": [57543, 1538],
		"3": [75713, 1658],
		"4": [21769, 1472],
		"5": [87094, 1490],
		"6": [41507, 1429],
		"7": [89266, 1574],
		"8": [50793, 1494],
		"9": [80573, 1432],
		"10": [59632, 1169],
		"11": [93886, 1601],
		"12": [8064, 1270],
		"13": [10350, 1576],
		"14": [12677, 1526],
		"15": [14726, 1576],
		"16": [17670, 1408],
		"17": [19576, 1482],
		"18": [21769, 1472],
		"19": [23842, 1614],
		"20": [26533, 1425],
		"21": [28330, 1586],
		"22": [30406, 1468],
		"23": [32471, 1693],
		"24": [35134, 1470],
		"25": [37330, 1297],
		"26": [39510, 1308],
		"27": [41507, 1429],
		"28": [44148, 1564],
		"29": [46233, 1680],
		"30": [48539, 1597],
		"31": [50793, 1494],
		"32": [53194, 1465],
		"33": [55324, 1520],
		"34": [57543, 1538],
		"35": [59632, 1169],
		"36": [64415, 1530],
		"37": [66642, 1588],
		"38": [68960, 1492],
		"39": [71323, 1430],
		"40": [73704, 1582],
		"41": [75713, 1658],
		"42": [77956, 1781],
		"43": [80573, 1432],
		"44": [82741, 1688],
		"45": [84890, 1455],
		"46": [87094, 1490],
		"47": [89266, 1574],
		"48": [91711, 1524],
		"49": [93886, 1601],
		"50": [96375, 1853],
		"51": [98774, 1632],
		"52": [101482, 1644],
		"53": [103942, 1508],
		"54": [106179, 1531],
		"55": [108233, 1560]
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

		// 정답확인
		$("#chk").on("click", function() {
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				$(".itm-lst").each(function() {
					$(this).html($(this).find("button").text());
					$(this).addClass("font-weight-bold text-success");
				}
				);

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				var qa = $(".itm-lst").length; // 전체 문항 수
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
			else {
				$("div.itm-lst").each(function(idx) {
					if( !$(this).find("button").length) {
						if(na !="") {
							na +=", ";
						}
						na +=(idx+1);
					}
				}
				);
				alert("모든 문제를 풀어주세요!");
				// alert(na+"번 문제를 풀어주세요!");
			}
		}
		);

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