<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
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
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 각 항목에 맞는 단어를 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 my-0">
					<table class="table my-0">
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
					<table class="table my-0">
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
					<table class="table my-0">
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
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm=new Array(), sen=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
				sen[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r3 B1",
					sprite : {
						"0": [7, 78],
						"1": [70.5, 2.2],
						"2": [50, 1.9],
						"3": [80, 1.5],
						"4": [56.2, 1.8],
						"5": [37.3, 1.6],
						"6": [25.8, 1.5],
						"7": [76.8, 1.6],
						"11": [14.4, .8],
						"12": [16.9, 1.2],
						"13": [20, 1.2],
						"14": [22.8, 1.6],
						"15": [25.8, 1.5],
						"16": [28.6, 1.5],
						"17": [31.5, 1.6],
						"18": [34.5, 1.5],
						"19": [37.3, 1.6],
						"20": [40.3, 1.6],
						"21": [43.5, 1.8],
						"22": [46.5, 1.8],
						"23": [50, 1.9],
						"30": [53.3, 1.3],
						"35": [56.2, 1.8],
						"40": [59.4, 1.6],
						"50": [62.3, 1.7],
						"56": [65, 2],
						"60": [68.3, 1.4],
						"67": [70.5, 2.2],
						"70": [73.9, 1.4],
						"80": [76.8, 1.6],
						"90": [80, 1.5],
						"100": [82.8, 1.6]
					}
				}
				, {
					name: "dingdongdang",
						path: "sounds/"
				}
				, {
					name: "Cartoon_Boing",
						path: "sounds/"
				}
				],
				path : "sounds/Reihe 3/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					// 재생이 끝날 때 2번 이상이면 번역 보이기
					hmn=obj.part;
					hm[hmn]++;
					// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
					if(obj.part=="0") {
						$("#0").show();
						$("#0_p").hide();
						if(hm[hmn] > 1) {
							$(".tran").show();
						}
					}
					else {
						if(obj.part > 10) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							if(hmn==17) {
								for(j=7;
								j <=9;
								j++) {
									$("#"+j).closest("tr").find(".tran").show();
								}
							}
							else if(hmn==18) {
								for(j=10;
								j <=12;
								j++) {
									$("#"+j).closest("tr").find(".tran").show();
								}
							}
							else if(hmn==19) {
								for(j=13;
								j <=16;
								j++) {
									$("#"+j).closest("tr").find(".tran").show();
								}
							}
							else {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}
					}
				}
				, ready_callback: function () {
					$(".o").on("click", function() {
						ion.sound.play("dingdongdang");
					}
					);
					$(".x").on("click", function() {
						ion.sound.play("Cartoon_Boing");
					}
					);
					$("[data-toggle='popover']").popover( {
						delay : {
							'hide': 1000
						}
						,
						container : "body"
					}
					);
					$(".pop").click(function () {
						// 가장 먼저 지문에 'an' 넣기
						if ( !$(this).siblings().hasClass("an")) {
							$(this).addClass("an");
							$(this).addClass("btn-warning");
							$(this).parent().children().removeClass("btn-light");
						}
						;
						// 문제 풀이 정도 업데이트
						var perc=Math.round(($(".an").length / $(".q").length) * 100);
						$(".progress>.bar").attr("width", perc + "%;");
					}
					);
					// 팝업 내용 사라지기
					$(".pop").popover().click(function() {
						setTimeout(function() {
							$(".pop").popover('hide');
						}
						, 500);
					}
					);
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 B1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 B1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 B1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 B1", {
								part: $(this).attr("id")
							}
							);
							// 전체 듣기 재생일 때는 일시정지 버튼 보이기
							if($(this).attr("id")=="0") {
								$(this).hide();
								$("#0_p").show();
							}
							;
						}
						;
					}
					);

					<?php include "wahl.php"; ?>

					// 정답확인
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
				}
			}
			);
		}
		);

		
	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>