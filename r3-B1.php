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
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="1">
					siebenundsechzig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
					dreiundzwanzig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="3">
					neunzig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="4">
					fünfunddreißig
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
					neunzehn
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					fünfzehn
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="7">
					achtzig
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
					<h2> Sie und ergänzen Sie.<br>
					<small>듣고 채우세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 각 항목에 맞는 단어를 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 my-0">
					<table class="table table-borderless my-0">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-danger">▶</button></th>
								<td>11</td>
								<td>elf</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="12" class="so btn btn-outline-danger">▶</button></th>
								<td>12</td>
								<td>zwölf</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="13" class="so btn btn-outline-danger">▶</button></th>
								<td>13</td>
								<td>dreitzehn</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="14" class="so btn btn-outline-danger">▶</button></th>
								<td>14</td>
								<td>vierzehn</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="15" class="so btn btn-outline-danger">▶</button></th>
								<td>15</td>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="16" class="so btn btn-outline-danger">▶</button></th>
								<td>16</td>
								<td><strong>sechzehn</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="17" class="so btn btn-outline-danger">▶</button></th>
								<td>17</td>
								<td><strong>siebzehn</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="18" class="so btn btn-outline-danger">▶</button></th>
								<td>18</td>
								<td>achtzehn</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="19" class="so btn btn-outline-danger">▶</button></th>
								<td>19</td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 my-0">
					<table class="table table-borderless my-0">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="20" class="so btn btn-outline-danger">▶</button></th>
								<td>20</td>
								<td>zwanzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="21" class="so btn btn-outline-danger">▶</button></th>
								<td>21</td>
								<td>einundzwanzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="22" class="so btn btn-outline-danger">▶</button></th>
								<td>22</td>
								<td>zweiundzwanzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="23" class="so btn btn-outline-danger">▶</button></th>
								<td>23</td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="30" class="so btn btn-outline-danger">▶</button></th>
								<td>30</td>
								<td><strong>dreißig</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="35" class="so btn btn-outline-danger">▶</button></th>
								<td>35</td>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="40" class="so btn btn-outline-danger">▶</button></th>
								<td>40</td>
								<td>vierzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="50" class="so btn btn-outline-danger">▶</button></th>
								<td>50</td>
								<td>fünfzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="56" class="so btn btn-outline-danger">▶</button></th>
								<td>56</td>
								<td>sechsundfünfzig</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 my-0">
					<table class="table table-borderless my-0">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="60" class="so btn btn-outline-danger">▶</button></th>
								<td>60</td>
								<td><strong>sechzig</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="67" class="so btn btn-outline-danger">▶</button></th>
								<td>67</td>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="70" class="so btn btn-outline-danger">▶</button></th>
								<td>70</td>
								<td><strong>siebzig</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="80" class="so btn btn-outline-danger">▶</button></th>
								<td>80</td>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="90" class="so btn btn-outline-danger">▶</button></th>
								<td>90</td>
								<td>
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="100" class="so btn btn-outline-danger">▶</button></th>
								<td>100</td>
								<td>(ein)hundert</td>
							</tr>
							<tr>
								<th scope="row" colspan="3" rowspan="3">&nbsp;</th>
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
			src: [ "./<?php echo($root); ?>sounds/Reihe 3/r3 B1.mp3"],
			sprite: {
				"0": [497, 83771],
				"1": [70465, 1929],
				"2": [49562, 2065],
				"3": [79629, 1535],
				"4": [55780, 1967],
				"5": [37091, 1545],
				"6": [25482, 1587],
				"7": [76571, 1623],
				"11": [13931, 1380],
				"12": [16718, 1254],
				"13": [19584, 1477],
				"14": [22539, 1554],
				"15": [25482, 1587],
				"16": [28274, 1663],
				"17": [31249, 1717],
				"18": [34171, 1617],
				"19": [37091, 1545],
				"20": [39961, 1739],
				"21": [43146, 1886],
				"22": [46279, 2011],
				"23": [49562, 2065],
				"30": [52982, 1530],
				"35": [55780, 1967],
				"40": [59138, 1680],
				"50": [62262, 1532],
				"56": [64896, 1849],
				"60": [67986, 1490],
				"67": [70465, 1929],
				"70": [73651, 1631],
				"80": [76571, 1623],
				"90": [79629, 1535],
				"100": [82450, 1719]
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
				<?php include "wahl.php";
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