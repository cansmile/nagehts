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
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
				<div class="col-12" id="itms">
					<button type="button" id="1" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm">
					der se<strong>ch</strong>zehnte
					</button>
					<button type="button" id="2" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm">
					der zwölfte
					</button>
					<button type="button" id="3" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm">
					der zweiundzwanzigste
					</button>
					<button type="button" id="4" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm">
					der fünfte
					</button>
					<button type="button" id="5" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm">
					der achtundzwanzigste
					</button>
					<button type="button" id="6" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm">
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
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 각 항목에 맞는 단어를 짝지우세요.</small> ]</h3>
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
								<th scope="row" width="50">1</td>
								<td width="50"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
								<td>eins</td>
								<td width="50"><button type="button" id="8" class="so btn btn-outline-danger">▶</button></td>
								<td>der erste</td>
							</tr>
							<tr>
								<th scope="row">2</td>
								<td><button type="button" id="9" class="so btn btn-outline-danger">▶</button></td>
								<td>zwei</td>
								<td><button type="button" id="10" class="so btn btn-outline-danger">▶</button></td>
								<td>der zweite</td>
							</tr>
							<tr>
								<th scope="row">3</td>
								<td><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
								<td>drei</td>
								<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
								<td>der dritte</td>
							</tr>
							<tr>
								<th scope="row">4</td>
								<td><button type="button" id="13" class="so btn btn-outline-danger">▶</button></td>
								<td>vier</td>
								<td><button type="button" id="14" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierte</td>
							</tr>
							<tr>
								<th scope="row">5</td>
								<td><button type="button" id="15" class="so btn btn-outline-danger">▶</button></td>
								<td>fünf</td>
								<td><button type="button" id="16" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">6</td>
								<td><button type="button" id="17" class="so btn btn-outline-danger">▶</button></td>
								<td>sechs</td>
								<td><button type="button" id="18" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechs<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row">7</td>
								<td><button type="button" id="19" class="so btn btn-outline-danger">▶</button></td>
								<td>sieben</td>
								<td><button type="button" id="20" class="so btn btn-outline-danger">▶</button></td>
								<td>der sieb<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row">8</td>
								<td><button type="button" id="21" class="so btn btn-outline-danger">▶</button></td>
								<td>acht</td>
								<td><button type="button" id="22" class="so btn btn-outline-danger">▶</button></td>
								<td>der achte</td>
							</tr>
							<tr>
								<th scope="row">9</td>
								<td><button type="button" id="23" class="so btn btn-outline-danger">▶</button></td>
								<td>neun</td>
								<td><button type="button" id="24" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">10</td>
								<td><button type="button" id="25" class="so btn btn-outline-danger">▶</button></td>
								<td>zehn</td>
								<td><button type="button" id="26" class="so btn btn-outline-danger">▶</button></td>
								<td>der zehnte</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50">11</td>
								<td width="50"><button type="button" id="27" class="so btn btn-outline-danger">▶</button></td>
								<td>elf</td>
								<td width="50"><button type="button" id="28" class="so btn btn-outline-danger">▶</button></td>
								<td>der elfte</td>
							</tr>
							<tr>
								<th scope="row">12</td>
								<td><button type="button" id="29" class="so btn btn-outline-danger">▶</button></td>
								<td>zwölf</td>
								<td><button type="button" id="30" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">13</td>
								<td><button type="button" id="31" class="so btn btn-outline-danger">▶</button></td>
								<td>dreizehn</td>
								<td><button type="button" id="32" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreizehnte</td>
							</tr>
							<tr>
								<th scope="row">14</td>
								<td><button type="button" id="33" class="so btn btn-outline-danger">▶</button></td>
								<td>vierzehn</td>
								<td><button type="button" id="34" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierzehnte</td>
							</tr>
							<tr>
								<th scope="row">15</td>
								<td><button type="button" id="35" class="so btn btn-outline-danger">▶</button></td>
								<td>fünfzehn</td>
								<td><button type="button" id="36" class="so btn btn-outline-danger">▶</button></td>
								<td>der fünfzehnte</td>
							</tr>
							<tr>
								<th scope="row">16</td>
								<td><button type="button" id="37" class="so btn btn-outline-danger">▶</button></td>
								<td>se<strong>ch</strong>zehn</td>
								<td><button type="button" id="38" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">17</td>
								<td><button type="button" id="39" class="so btn btn-outline-danger">▶</button></td>
								<td>sie<strong>b</strong>zehn</td>
								<td><button type="button" id="40" class="so btn btn-outline-danger">▶</button></td>
								<td>der sie<strong>b</strong>zehnte</td>
							</tr>
							<tr>
								<th scope="row">18</td>
								<td><button type="button" id="41" class="so btn btn-outline-danger">▶</button></td>
								<td>achtzehn</td>
								<td><button type="button" id="42" class="so btn btn-outline-danger">▶</button></td>
								<td>der achtzehnte</td>
							</tr>
							<tr>
								<th scope="row">19</td>
								<td><button type="button" id="43" class="so btn btn-outline-danger">▶</button></td>
								<td>neunzehn</td>
								<td><button type="button" id="44" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunzehnte</td>
							</tr>
								<th scope="row">20</td>
								<td><button type="button" id="45" class="so btn btn-outline-danger">▶</button></td>
								<td>zwanzig</td>
								<td><button type="button" id="46" class="so btn btn-outline-danger">▶</button></td>
								<td>der zwanzig<strong>ste</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50">21</td>
								<td width="50"><button type="button" id="47" class="so btn btn-outline-danger">▶</button></td>
								<td>einundzwanzig</td>
								<td width="50"><button type="button" id="48" class="so btn btn-outline-danger">▶</button></td>
								<td>der einundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">22</td>
								<td><button type="button" id="49" class="so btn btn-outline-danger">▶</button></td>
								<td>zweiundzwanzig</td>
								<td><button type="button" id="50" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">23</td>
								<td><button type="button" id="51" class="so btn btn-outline-danger">▶</button></td>
								<td>dreiundzwanzig</td>
								<td><button type="button" id="52" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreiundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">24</td>
								<td><button type="button" id="53" class="so btn btn-outline-danger">▶</button></td>
								<td>vierundzwanzig</td>
								<td><button type="button" id="54" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">25</td>
								<td><button type="button" id="55" class="so btn btn-outline-danger">▶</button></td>
								<td>fümfundzwanzig</td>
								<td><button type="button" id="56" class="so btn btn-outline-danger">▶</button></td>
								<td>der fümfundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">26</td>
								<td><button type="button" id="57" class="so btn btn-outline-danger">▶</button></td>
								<td>sechsundzwanzig</td>
								<td><button type="button" id="58" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechsundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">27</td>
								<td><button type="button" id="59" class="so btn btn-outline-danger">▶</button></td>
								<td>siebenundzwanzig</td>
								<td><button type="button" id="60" class="so btn btn-outline-danger">▶</button></td>
								<td>der siebenundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">28</td>
								<td><button type="button" id="61" class="so btn btn-outline-danger">▶</button></td>
								<td>achtundzwanzig</td>
								<td><button type="button" id="62" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">29</td>
								<td><button type="button" id="63" class="so btn btn-outline-danger">▶</button></td>
								<td>neunundzwanzig</td>
								<td><button type="button" id="64" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">30</td>
								<td><button type="button" id="65" class="so btn btn-outline-danger">▶</button></td>
								<td>dreißig</td>
								<td><button type="button" id="66" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreißigte</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50">40</td>
								<td width="50"><button type="button" id="67" class="so btn btn-outline-danger">▶</button></td>
								<td>vierzig</td>
								<td width="50"><button type="button" id="68" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierzigste</td>
							</tr>
							<tr>
								<th scope="row">50</td>
								<td><button type="button" id="69" class="so btn btn-outline-danger">▶</button></td>
								<td>fünfzig</td>
								<td><button type="button" id="70" class="so btn btn-outline-danger">▶</button></td>
								<td>der fünfzigste</td>
							</tr>
							<tr>
								<th scope="row">60</td>
								<td><button type="button" id="71" class="so btn btn-outline-danger">▶</button></td>
								<td>sechzig</td>
								<td><button type="button" id="72" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechzigste</td>
							</tr>
							<tr>
								<th scope="row">70</td>
								<td><button type="button" id="73" class="so btn btn-outline-danger">▶</button></td>
								<td>siebzig</td>
								<td><button type="button" id="74" class="so btn btn-outline-danger">▶</button></td>
								<td>der siebzigste</td>
							</tr>
							<tr>
								<th scope="row">80</td>
								<td><button type="button" id="75" class="so btn btn-outline-danger">▶</button></td>
								<td>achtzig</td>
								<td><button type="button" id="76" class="so btn btn-outline-danger">▶</button></td>
								<td>der achtzigste</td>
							</tr>
							<tr>
								<th scope="row">90</td>
								<td><button type="button" id="77" class="so btn btn-outline-danger">▶</button></td>
								<td>neunzig</td>
								<td><button type="button" id="78" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunzigste</td>
							</tr>
							<tr>
								<th scope="row">100</td>
								<td><button type="button" id="79" class="so btn btn-outline-danger">▶</button></td>
								<td>hundert</td>
								<td><button type="button" id="80" class="so btn btn-outline-danger">▶</button></td>
								<td>(ein)hundertste</td>
							</tr>
							<tr>
								<th scope="row">101</td>
								<td><button type="button" id="81" class="so btn btn-outline-danger">▶</button></td>
								<td>hunderteins</td>
								<td><button type="button" id="82" class="so btn btn-outline-danger">▶</button></td>
								<td>(ein)hunderteinste</td>
							</tr>
							<tr>
								<th scope="row">&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th scope="row">&nbsp;</td>
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
								<th class="align-middle" scope="row" rowspan="3" width="50"><button type="button" id="83" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Frühling</td>
								<th scope="row" width="50"><button type="button" id="84" class="so btn btn-outline-danger">▶</button></th>
								<td>der März</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="85" class="so btn btn-outline-danger">▶</button></th>
								<td>der April</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="86" class="so btn btn-outline-danger">▶</button></th>
								<td>der Mai</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="87" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Sommer</td>
								<th scope="row"><button type="button" id="88" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juni</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="89" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juli</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="90" class="so btn btn-outline-danger">▶</button></th>
								<td>der August</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0">
					<table class="table my-0">
						<tbody>
							<tr>
								<th class="align-middle" scope="row" rowspan="3" width="50"><button type="button" id="91" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Herbst</td>
								<th scope="row" width="50"><button type="button" id="92" class="so btn btn-outline-danger">▶</button></th>
								<td>der September</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="93" class="so btn btn-outline-danger">▶</button></th>
								<td>der Oktober</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="94" class="so btn btn-outline-danger">▶</button></th>
								<td>der November</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="95" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Winter</td>
								<th scope="row"><button type="button" id="96" class="so btn btn-outline-danger">▶</button></th>
								<td>der Dezember</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="97" class="so btn btn-outline-danger">▶</button></th>
								<td>der Januar</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="98" class="so btn btn-outline-danger">▶</button></th>
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
					name : "r9 AGR",
					sprite : {
						"0": [.869, 260.247],
						"1": [,],
						"2": [,],
						"3": [,],
						"4": [,],
						"5": [,],
						"6": [,],
						"7": [8.544, 1.026],
						"8": [122.260, 1.194],
						"9": [10.552, 1.180],
						"10": [125.369, 1.489],
						"11": [13.177, .942],
						"12": [128.771, 1.365],
						"13": [15.593, .834],
						"14": [132.148, 1.329],
						"15": [17.931, .918],
						"16": [136.188, 1.338],
						"17": [20.121, 1.037],
						"18": [139.843, 1.296],
						"19": [22.483, 1.152],
						"20": [143.348, 1.213],
						"21": [25.115, .810],
						"22": [146.840, 1.395],
						"23": [27.591, 1.012],
						"24": [150.535, 1.277],
						"25": [30.115, .974],
						"26": [153.784, 13.386],
						"27": [32.699, .664],
						"28": [157.544, 1.283],
						"29": [35.006, 1.224],
						"30": [160.954, 1.458],
						"31": [38.454, 1.135],
						"32": [164.254, 1.816],
						"33": [41.294, 1.068],
						"34": [167.685, 1.820],
						"35": [44.098, 1.322],
						"36": [171.080, 2.154],
						"37": [46.916, 1.169],
						"38": [174.891, 1.789],
						"39": [49.692, 1.444],
						"40": [178.340, 1.886],
						"41": [52.611, 1.443],
						"42": [182.406, 1.801],
						"43": [55.330, 1.324],
						"44": [186.567, 1.780],
						"45": [58.095, 1.073],
						"46": [190.349, 2.010],
						"47": [61.127, 1.555],
						"48": [195.073, 2.223],
						"49": [64.304, 1.664],
						"50": [199.026, 2.371],
						"51": [67.484, 1.589],
						"52": [203.552, 2.490],
						"53": [70.778, 1.473],
						"54": [207.966, 2.153],
						"55": [74.133, 1.663],
						"56": [212.255, 2.222],
						"57": [77.462, 1.565],
						"58": [216.548, 2.121],
						"59": [80.722, 1.567],
						"60": [220.089, 2.365],
						"61": [83.805, 1.495],
						"62": [224.436, 2.389],
						"63": [87.290, 1.617],
						"64": [228.758, 2.333],
						"65": [90.362, 1.217],
						"66": [232.820, 1.621],
						"67": [93.197, 1.207],
						"68": [235.869, 1.756],
						"69": [96.559, .971],
						"70": [239.739, 1.653],
						"71": [99.545, 1.349],
						"72": [243.094, 1.625],
						"73": [102.626, 1.295],
						"74": [246.527, 1.513],
						"75": [106.033, 1.174],
						"76": [249.642, 1.683],
						"77": [109.008, 1.425],
						"78": [253.094, 1.613],
						"79": [112.043, 1.292],
						"80": [256.239, 1.607],
						"81": [115.288, 1.571],
						"82": [259.320, 1.784],
						"83": [305.560, 1.315],
						"84": [270.640,1.344],
						"85": [273.095, 1.391],
						"86": [275.568, 1.270],
						"87": [308.460, 1.138],
						"88": [278.018, 1.279],
						"89": [280.692, .951],
						"90": [283.147, 1.330],
						"91": [311.435, 1.295],
						"92": [285.998, 1.282],
						"93": [288.782, 1.234],
						"94": [291.561, 1.405],
						"95": [314.203, 1.089],
						
						"96": [294.390, 1.401],
						"97": [297.103, 1.285],
						"98": [299.738, 1.271]
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
				path : "sounds/Reihe 9/",
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
						if(obj.part > 6) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".table").find(".tran").show();
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
							ion.sound.pause("r9 AGR", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r9 AGR", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 AGR", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r9 AGR", {
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
								var st = "쓰읍~ 다시 해 보실까요!";
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