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
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm" id="1">
					Franz Scholl
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="2">
					Robert Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="3">
					Maria Holm und Robert Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="4">
					Nora
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="5">
					Silvia Mark und Hans Holm
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm" id="6">
					Hans, Georg und Sabine
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm" id="7">
					Silvia Mark
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="8">
					Nora
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="9">
					Sabine Holm
					</button>
				</div>
			</div>
		</div>
	</section>
<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2> Sprechen Sie über den Stammbaum.
								<br>&nbsp;<small>아래 가계도에 대해 이야기해보세요.</small>
							</h2>
							<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ &nbsp;<small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-borderless">
							<thead>
								<tr>
									<th colspan="2" scope="col"><img src="./images/Reihe 3/Reihe-3-F1.png" alt="Stammbaum" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="row" style="line-height: 350%;">
											<div class="col"><span class="border border-dark rounded p-2 mx-2 d-inline">Robert Holm</span><span class="border border-dark rounded p-2 mx-2 d-inline">Maria Holm</span><span class="border border-dark rounded p-2 mx-2 d-inline">Birgit Mark</span><br><span class="border border-dark rounded p-2 mx-2 d-inline">Anton Mark</span><span class="border border-dark rounded p-2 mx-2 d-inline">Silvia Mark</span><span class="border border-dark rounded p-2 mx-2 d-inline">Hans Holm</span><span class="border border-dark rounded p-2 mx-2 d-inline">Georg Holm</span><br><span class="border border-dark rounded p-2 mx-2 d-inline">Sabine Holm</span><span class="border border-dark rounded p-2 mx-2 d-inline">Franz Scholl</span><span class="border border-dark rounded p-2 mx-2 d-inline">Nora</span><span class="border border-dark rounded p-2 mx-2 d-inline">Alex</span><br><span class="border 20200324 210139dark rounded p-2 mx-2 d-inline">Johanna</span><span class="border border-dark rounded p-2 mx-2 d-inline">Manuel</span></div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-borderless text-center">
							<thead>
								<tr class="border border-dark bg-dark text-white font-weight-bold rounded py-0">
									<th scope="col" width="50" class="display-4 py-0 align-text-top">&nbsp;<small>1.1.</small></th>
									<th scope="col" class="text-left">
									Wer bin ich?
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><br>
										&nbsp;<small>나는 누구인가요? 노라</small>
									</span>
								</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="50" scops="row">1.</th>
									<td class="text-left">
									Meine Eltern heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
									<span class="tran"><br>
										&nbsp;<small>저의 부모님은 질비아 마크와 한스 홀름이에요.</small>
									</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row">2.</th>
									<td class="text-left">
									Meine Großeltern heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
									<span class="tran"><br>
										&nbsp;<small>저의 조부모님은 마리아 홀름과 로버트 홀름이에요.</small>
									</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row">3.</th>
									<td class="text-left">Mein Bruder heißt Alex.
										<span class="tran"><br>
											&nbsp;<small>저의 남동생은 알렉스에요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row">4.</th>
									<span class="tran"><br>
											&nbsp;<small></small>
										</span>
									<td class="text-left">Mein Vater hat eine Schwester.
										<span class="tran"><br>
											&nbsp;<small>저의 아버지는 여동생이 한 분 있어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row">&nbsp;</th>
									<td class="text-left">
									Sie heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											&nbsp;<small>그녀는 자비네 홀름이에요.</small>
										</span>
								</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-borderless text-center">
							<thead>
								<tr class="border border-dark bg-dark text-white font-weight-bold rounded py-0">
									<th scope="col" width="50" class="display-4 py-0 align-text-top">&nbsp;<small>1.2.</small></th>
									<th scope="col" class="text-left">
										Wer bin ich?
										<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
										<span class="tran"><br>
											&nbsp;<small>나는 누구인가요? 로버트 홀름</small>
										</span>
								</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="50" scops="row">1.</th>
									<td class="text-left">Meine Frau heißt Maria Holm.
										<span class="tran"><br>
											&nbsp;<small>저의 아내는 마리아 홀름이에요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row">2.</th>
									<td class="text-left">
									Meine Kinder heißen
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											&nbsp;<small>제 아이들은 한스,게오르크와 자비네이에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row">3.</th>
									<td class="text-left">Mein Sohn, Hans Holm hat eine Tochter.
										<span class="tran"><br>
											&nbsp;<small>제 아들, 한스 홀름은 딸 하나가 있어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row">&nbsp;</th>
									<td class="text-left">
									Sie heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											&nbsp;<small>그녀는 노라에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row">4.</th>
									<td class="text-left">Meine Tochter ist mit ihm verheiratet.
										<span class="tran"><br>
											&nbsp;<small>저의 딸은 결혼했어요.</small>
										</span>
									</td>
								</tr>
								<tr>
									<th width="50" scops="row">&nbsp;</th>
									<td class="text-left">
									Er heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>
											&nbsp;<small>그는 프란츠 숄이에요.</small>
										</span>
								</td>
								</tr>
								<tr>
									<th width="50" scops="row">5.</th>
									<td class="text-left">
									Meine Schwiegertochter heißt
									<div class="itm-lst 1itm d-inline-block px-0 mx-0" style="min-width: 200px;" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									.	
										<span class="tran"><br>&nbsp;<small>저의 며느리는 질비아 마크에요.</small>
										</span>
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
				<div class="row">
					<div class="col">
						<table class="table table-borderless table-sm">
							<tbody>
								<tr>
									<td class="text-center">
										<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
											HV
										</button>
										<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="10" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Großvater</span>, <span class="wd">Opa</span><span class="wd">&nbsp;<small>할아버지</small></span><button type="button" id="11" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Großmutter</span>, <span class="wd">Oma</span><span class="wd">&nbsp;<small>할머니</small></span><button type="button" id="12" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Großeltern</span><span class="wd">&nbsp;<small>조부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="13" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Vater</span><span class="wd">&nbsp;<small>아버지</small></span><button type="button" id="14" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Mutter</span><span class="wd">&nbsp;<small>어머니</small></span><button type="button" id="15" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Eltern</span><span class="wd">&nbsp;<small>부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="16" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Sohn</span><span class="wd">&nbsp;<small>아들</small></span><button type="button" id="17" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Tochter</span><span class="wd">&nbsp;<small>딸</small></span><button type="button" id="18" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Kinder</span><span class="wd">&nbsp;<small>자녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="19" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Bruder</span><span class="wd">&nbsp;<small>형제</small></span><button type="button" id="20" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwester</span><span class="wd">&nbsp;<small>자매</small></span><button type="button" id="21" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Geschwister</span><span class="wd">&nbsp;<small>형제자매</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="22" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Enkelsohn</span><span class="wd">&nbsp;<small>손자</small></span><button type="button" id="23" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Enkeltochter</span><span class="wd">&nbsp;<small>손녀</small></span><button type="button" id="24" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Enkelkinder</span><span class="wd">&nbsp;<small>손자손녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="25" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwager</span><span class="wd">&nbsp;<small>형부, 처남, 매부, 매형</small></span><button type="button" id="26" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwägerin</span><span class="wd">&nbsp;<small>형수, 처제, 올케 …</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="27" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Onkel</span><span class="wd">&nbsp;<small>삼촌, 숙부</small></span><button type="button" id="28" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Tante</span><span class="wd">&nbsp;<small>이모, 고모, 숙모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="29" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Mann</span><span class="wd">&nbsp;<small>남편</small></span><button type="button" id="30" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Frau</span><span class="wd">&nbsp;<small>아내</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="31" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwiegervater</span><span class="wd">&nbsp;<small>장인. 시부</small></span><button type="button" id="32" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwiegermutter</span><span class="wd">&nbsp;<small>장모, 시모</small></span><button type="button" id="33" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwiegereltern</span><span class="wd">&nbsp;<small>처부모, 시부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="34" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwiegersohn</span><span class="wd">&nbsp;<small>사위</small></span><button type="button" id="35" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Schwiegertochter</span><span class="wd">&nbsp;<small>며느리</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="36" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Neffe</span<span class="wd">&nbsp;<small>조카</small></span><button type="button" id="37" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Nichte</span><span class="wd">&nbsp;<small>조카딸</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="38" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Cousin</span><span class="wd">&nbsp;<small>사촌 형제</small></span><button type="button" id="39" class="so btn btn-outline-primary btn-sm mx-2">▶</button><span class="wd">Cousine</span><span class="wd">&nbsp;<small>사촌 자매</small></span></div>
									</td>
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
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogrouph.js"></script>
	<script src="./js/howler.core.js"></script>
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
	src: ["./sounds/Reihe 3/r3 F1.mp3"],
	sprite : {
		"0": [1842, 130574],
		"10": [10137, 5435],
		"11": [17532, 5204],
		"12": [25143, 1662],
		"13": [28753, 1537],
		"14": [32656, 1278],
		"15": [36458, 1517],
		"16": [40342, 1430],
		"17": [43403, 1745],
		"18": [47706, 1669],
		"19": [52057, 1552],
		"20": [56088, 1769],
		"21": [59901, 1878],
		"22": [63893, 2007],
		"23": [67761, 2066],
		"24": [71915, 1762],
		"25": [77028, 1676],
		"26": [80671, 1895],
		"27": [84619, 1326],
		"28": [88254, 1555],
		"29": [92546, 1356],
		"30": [96099, 1835],
		"31": [100407, 1918],
		"32": [104465, 1575],
		"33": [108615, 1822],
		"34": [112246, 1857],
		"35": [116162, 1969],
		"36": [120376, 1311],
		"37": [123522, 1390],
		"38": [127171, 1471],
		"39": [130850, 1584]
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
			if( !$("#itms").find("button").length) {
				$("span.nu").each(function () {
					$(this).text($.trim($(this).closest("tr").find(".itm-lst").text()));
					$(this).removeClass("btn btn-outline-dark btn-sm nu");
					$(this).addClass("font-weight-bold rounded bg-success text-white p-1 px-2 m-1");
				}
				);

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");
				$(".itm-lst>button").addClass("text-success font-weight-bold");

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


				$(".tran").show();
				$(".itm-lst").hide();
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