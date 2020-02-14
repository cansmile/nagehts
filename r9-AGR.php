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
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="1">
					der se<strong>ch</strong>zehnte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
					der zwölfte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="3">
					der zweiundzwanzigste
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					der fünfte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="5">
					der achtundzwanzigste
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					der neunte
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
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center border-0"><div class="bg-lime text-black rounded py-2"><strong>Grundzahlen und Ordnungszahlen</strong><span class="tran"><br><small>기수와 서수</small></span></div></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50"><button type="button" id="erste" class="so btn btn-outline-danger">▶</button></th>
								<td width="50">1</td>
								<td>eins</td>
								<td>der erste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="zweite" class="so btn btn-outline-danger">▶</button></th>
								<td>2</td>
								<td>zwei</td>
								<td>der zweite</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="dreite" class="so btn btn-outline-danger">▶</button></th>
								<td>3</td>
								<td>drei</td>
								<td>der dritte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="vierte" class="so btn btn-outline-danger">▶</button></th>
								<td>4</td>
								<td>vier</td>
								<td>der vierte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="fünfte" class="so btn btn-outline-danger">▶</button></th>
								<td>5</td>
								<td>fünf</td>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="sechte" class="so btn btn-outline-danger">▶</button></th>
								<td>6</td>
								<td>sechs</td>
								<td>der sechs<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="siebte" class="so btn btn-outline-danger">▶</button></th>
								<td>7</td>
								<td>sieben</td>
								<td>der sieb<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="achte" class="so btn btn-outline-danger">▶</button></th>
								<td>8</td>
								<td>acht</td>
								<td>der achte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="neunte" class="so btn btn-outline-danger">▶</button></th>
								<td>9</td>
								<td>neun</td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="zehn" class="so btn btn-outline-danger">▶</button></th>
								<td>10</td>
								<td>zehn</td>
								<td>der zehnte</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50"><button type="button" id="elf" class="so btn btn-outline-danger">▶</button></th>
								<td width="50">11</td>
								<td>elf</td>
								<td>der elfte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="zwölfte" class="so btn btn-outline-danger">▶</button></th>
								<td>12</td>
								<td>zwölf</td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="dreizehn" class="so btn btn-outline-danger">▶</button></th>
								<td>13</td>
								<td>dreizehn</td>
								<td>der dreizehnte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="vierzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>14</td>
								<td>vierzehn</td>
								<td>der vierzehnte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="fünfzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>15</td>
								<td>fünfzehn</td>
								<td>der fünfzehnte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="sechzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>16</td>
								<td>se<strong>ch</strong>zehn</td>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="siebzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>17</td>
								<td>sie<strong>b</strong>zehn</td>
								<td>der sie<strong>b</strong>zehnte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="achtzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>18</td>
								<td>achtzehn</td>
								<td>der achtzehnte</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="neunzehn" class="so btn btn-outline-danger">▶</button></th>
								<td>19</td>
								<td>neunzehn</td>
								<td>der neunzehnte</td>
							</tr>
								<th scope="row"><button type="button" id="zwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>20</td>
								<td>zwanzig</td>
								<td>der zwanzig<strong>ste</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50"><button type="button" id="einundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td width="50">21</td>
								<td>einundzwanzig</td>
								<td>der einundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="zweiundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>22</td>
								<td>zweiundzwanzig</td>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="dreiundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>23</td>
								<td>dreiundzwanzig</td>
								<td>der dreiundzwanzig</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="vierundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>24</td>
								<td>vierundzwanzig</td>
								<td>der vierundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="fümfundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>25</td>
								<td>fümfundzwanzig</td>
								<td>der fümfundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="sechsundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>26</td>
								<td>sechsundzwanzig</td>
								<td>der sechsundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="siebenundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>27</td>
								<td>siebenundzwanzig</td>
								<td>der siebenundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="achtundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>28</td>
								<td>achtundzwanzig</td>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="neunundzwanzig" class="so btn btn-outline-danger">▶</button></th>
								<td>29</td>
								<td>neunundzwanzig</td>
								<td>der neunundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="dreißig" class="so btn btn-outline-danger">▶</button></th>
								<td>30</td>
								<td>dreißig</td>
								<td>der dreißigte</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50"><button type="button" id="vierzig" class="so btn btn-outline-danger">▶</button></th>
								<td width="50">40</td>
								<td>vierzig</td>
								<td>der vierzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="fünfzig" class="so btn btn-outline-danger">▶</button></th>
								<td>50</td>
								<td>fünfzig</td>
								<td>der fünfzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="sechzig" class="so btn btn-outline-danger">▶</button></th>
								<td>60</td>
								<td>sechzig</td>
								<td>der sechzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="siebzig" class="so btn btn-outline-danger">▶</button></th>
								<td>70</td>
								<td>siebzig</td>
								<td>der siebzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="achtzig" class="so btn btn-outline-danger">▶</button></th>
								<td>80</td>
								<td>achtzig</td>
								<td>der achtzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="neunzig" class="so btn btn-outline-danger">▶</button></th>
								<td>90</td>
								<td>neunzig</td>
								<td>der neunzigste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="hundert" class="so btn btn-outline-danger">▶</button></th>
								<td>100</td>
								<td>hundert</td>
								<td>(ein)hundertste</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="hunderteins" class="so btn btn-outline-danger">▶</button></th>
								<td>101</td>
								<td>hunderteins</td>
								<td>(ein)hunderteinste</td>
							</tr>
							<tr>
								<th scope="row">&nbsp;</th>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th scope="row">&nbsp;</th>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center border-0"><div class="bg-lime text-black rounded py-2"><strong>Monate und Jahreszeiten</strong><span class="tran"><br><small>달과 계절</small></span></div></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0">
					<table class="table my-0">
						<tbody>
							<tr>
								<th class="align-middle" scope="row" rowspan="3" width="50"><button type="button" id="Frühling" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Frühling</td>
								<th scope="row" width="50"><button type="button" id="Januar" class="so btn btn-outline-danger">▶</button></th>
								<td>der März</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Februar" class="so btn btn-outline-danger">▶</button></th>
								<td>der April</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="März" class="so btn btn-outline-danger">▶</button></th>
								<td>der Mai</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="Sommer" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Sommer</td>
								<th scope="row"><button type="button" id="April" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juni</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Mai" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juli</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Juni" class="so btn btn-outline-danger">▶</button></th>
								<td>der August</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0">
					<table class="table my-0">
						<tbody>
							<tr>
								<th class="align-middle" scope="row" rowspan="3" width="50"><button type="button" id="Herbst" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Herbst</td>
								<th scope="row" width="50"><button type="button" id="Juli" class="so btn btn-outline-danger">▶</button></th>
								<td>der September</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="August" class="so btn btn-outline-danger">▶</button></th>
								<td>der Oktober</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="September" class="so btn btn-outline-danger">▶</button></th>
								<td>der November</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="Winter" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Winter</td>
								<th scope="row"><button type="button" id="Oktober" class="so btn btn-outline-danger">▶</button></th>
								<td>der Dezember</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="November" class="so btn btn-outline-danger">▶</button></th>
								<td>der Januar</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Dezember" class="so btn btn-outline-danger">▶</button></th>
								<td>der Februar</td>
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
						"erste": [1,2],
						"zweite": [1,2],
						"dreite": [1,2],
						"vierte": [1,2],
						"fünfte": [1,2],
						"sechte": [1,2],
						"siebte": [1,2],
						"achte": [1,2],
						"neunte": [1,2],
						"zehn": [1,2],
						"elf": [1,2],
						"zwölfte": [1,2],
						"dreizehn": [1,2],
						"vierzehn": [1,2],
						"fünfzehn": [1,2],
						"sechzehn": [1,2],
						"siebzehn": [1,2],
						"achtzehn": [1,2],
						"neunzehn": [1,2],
						"zwanzig": [1,2],
						"einundzwanzig": [1,2],
						"zweiundzwanzig": [1,2],
						"dreiundzwanzig": [1,2],
						"vierundzwanzig": [1,2],
						"fümfundzwanzig": [1,2],
						"sechsundzwanzig": [1,2],
						"siebenundzwanzig": [1,2],
						"achtundzwanzig": [1,2],
						"neunundzwanzig": [1,2],
						"dreißig": [1,2],
						"vierzig": [1,2],
						"fünfzig": [1,2],
						"sechzig": [1,2],
						"siebzig": [1,2],
						"achtzig": [1,2],
						"neunzig": [1,2],
						"hundert": [1,2],
						"hunderteins": [1,2],
						"Frühling": [1,2],
						"Januar": [1,2],
						"Februar": [1,2],
						"März": [1,2],
						"Sommer": [1,2],
						"April": [1,2],
						"Mai": [1,2],
						"Juni": [1,2],
						"Herbst": [1,2],
						"Juli": [1,2],
						"August": [1,2],
						"September": [1,2],
						"Winter": [1,2],
						"Oktober": [1,2],
						"November": [1,2],
						"Dezember": [1,2]
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
							} else if(pe > 79) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 59) {
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
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