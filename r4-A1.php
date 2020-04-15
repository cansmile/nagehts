`<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
					das Apartment (das Hochhaus)<span class="tran"><br><small>아파트</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="2">
					das Einfamilienhaus<span class="tran"><br><small>단독주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					das Reihenhaus<span class="tran"><br><small>연립주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="4">
					der Bauernhof<span class="tran"><br><small>전원주택</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="5">
					das Studentenwohnheim<span class="tran"><br><small>기숙사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					das Ökohaus<span class="tran"><br><small>에코하우스</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					das Schloss<span class="tran"><br><small>성</small></span>
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
					<h2> Welche Wohnform ist das? <br>
					<small>어떤 집 형태인가요?</small>
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="btn disabled btn-sm btn-outline-dark">단어</button> 버튼을 눌러 2번 들으면, 번역이 나옵니다.<br>들으면서 단어를 그림과 연결하세요.<br />그림을 눌러도 들을 수 있습니다.</small> ]</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-1.png" style="max-width:240px; height: auto;" class="so" id="8"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-2.png" style="max-width:240px; height: auto;" class="so" id="9"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-3.png" style="max-width:240px; height: auto;" class="so" id="10"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-4.png" style="max-width:240px; height: auto;" class="so" id="11"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 aling-bottom">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-5.png" style="max-height:240px; max-width: 99%;" class="so" id="12"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-6.png" style="max-width:240px; height: auto;" class="so" id="13"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td height="350" class="align-middle"><img src="./<?=$root ?>images/Reihe 4/Reihe-4-A1-7.png" style="max-width:240px; height: auto;" class="so" id="14"></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
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
	$(document).ready(function() {
		// 소리 출력 전역 변수와 함수
		var sen=new Array(),
		pa=new Array(),
		he=new Array(),
		last;
		$(".so").each(function() {
			var t=$(this);
			var ti=t.attr("id");
			sen[ ti]=0;
			pa[ ti]=t.html();
		}
		);
		function stopAll() {
			$(".so").each(function() {
				$(this).html(pa[ $(this).attr("id")]);
			}
			);
		}
		// 문제 재생
		var nagehts=new Howl( {
			src: [ "./<?=$root ?>sounds/Reihe 4/r4 A1.mp3"],
			sprite: {
				"0": [1295, 41370],
					"1": [11970, 2700],
					"2": [18235, 2230],
					"3": [23963, 1763],
					"4": [28295, 1613],
					"5": [32346, 2071],
					"6": [36862, 1996],
					"7": [41131, 1487],
					"8": [41131, 1487],
					"9": [36862, 1996],
					"10": [11970, 2700],
					"11": [18235, 2230],
					"12": [32346, 2071],
					"13": [23963, 1763],
					"14": [28295, 1613]
			}
			,
			html5: true,
			volume: 1,
			format: "mp3",
			preload: true,
			onloaderror: function() {
				$(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
				console.log("다시 읽어주세요!");
			}
			,
			onload: function() {
				<?php require "wahl.php";
				?> // 정답확인
				$("#chk").on("click", function() {
					var na="";
					if($("#itms").find("button").length < 1) {
						$(".tran").show();
						$(".itm-lst").each(function() {
							$(this).html($(this).find("button").html());
							$(this).addClass("text-success font-weight-bold");
							// $(this).addClass("font-weight-bold bg-white border rounded border-dark");
						}
						);
						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");
						var qa=$(".itm-lst").length; // 전체 문항 수
						var qr=$(".text-success").length; // 맞춘 항목 수
						var pe=(qr / qa) * 100; // 정답 비율
						var tcl="white"; // 기본 문자색
						// 분류 기준은 100%, 80%, 60%, 40%
						if(pe > 99) {
							var st="원어민이세요?";
							var cl="lime";
							var tcl="dark";
						}
						else if(pe > 74) {
							var st="어! 좀 하시는데요~^^";
							var cl="success";
						}
						else if(pe > 49) {
							var st="쓰읍~ 다시 해 보실까요?";
							var cl="primary";
						}
						else {
							var st="좀 더 분발해 주세요~";
							var cl="danger";
						}
						$(this).addClass("btn-"+ cl + " text-"+ tcl);
						$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
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
						alert(na+"번 문제를 풀어주세요!");
					}
				}
				);
				$("#0").show();
				$(".alert").hide();
				$(".so").on("click", function() {
					var t=$(this);
					var ti=t.attr("id");
					if (($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
						$("#last").text(ti);
						t.text("■");
						nagehts.seek();
						nagehts.play(ti);
						sen[ ti]++;
						last=ti;
						$("#cnt-"+ ti).text(sen[ ti]);
					}
					else if (last==ti && nagehts.playing($("div#last").text())) {
						$("#last").text("");
						t.html(pa[ ti]);
						nagehts.pause();
						sen[ ti]--;
						$("#cnt-"+ ti).text(sen[ ti]);
					}
				}
				);
				$("#0").show();
			}
			,
			onend: function() {
				$("div#last").text("");
				stopAll();
				$("#cnt-"+last).text(sen[last]);
				if(last==0) {
					if(sen[last]==2) {
						$(".tran").show();
						$(".so").each(function() {
							pa[last]=$("#"+last).html();
						}
						);
					}
				}
				else if(sen[last]==2) {
					if($("#"+last).hasClass("itm")) {
						$("#"+last+">.tran").show();
					}
					$("#"+last).closest("tr").find(".tran").show();
					pa[last]=$("#"+last).html();
				}
			}
		}
		);
	}
	);

	</script>
	<?php include"footer.php"; ?>
</body>
</html>