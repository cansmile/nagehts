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
				<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
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
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고 각 항목에 맞는 단어를 짝지우세요.</small> ]</h3>
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
								<td width="50"><button type="button" id="eins" class="so btn btn-outline-danger">▶</button></td>
								<td>eins</td>
								<td width="50"><button type="button" id="erste" class="so btn btn-outline-danger">▶</button></td>
								<td>der erste</td>
							</tr>
							<tr>
								<th scope="row">2</td>
								<td><button type="button" id="zwei" class="so btn btn-outline-danger">▶</button></td>
								<td>zwei</td>
								<td><button type="button" id="zweite" class="so btn btn-outline-danger">▶</button></td>
								<td>der zweite</td>
							</tr>
							<tr>
								<th scope="row">3</td>
								<td><button type="button" id="drei" class="so btn btn-outline-danger">▶</button></td>
								<td>drei</td>
								<td><button type="button" id="dritte" class="so btn btn-outline-danger">▶</button></td>
								<td>der dritte</td>
							</tr>
							<tr>
								<th scope="row">4</td>
								<td><button type="button" id="vier" class="so btn btn-outline-danger">▶</button></td>
								<td>vier</td>
								<td><button type="button" id="vierte" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierte</td>
							</tr>
							<tr>
								<th scope="row">5</td>
								<td><button type="button" id="fünf" class="so btn btn-outline-danger">▶</button></td>
								<td>fünf</td>
								<td><button type="button" id="fünfte" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">6</td>
								<td><button type="button" id="sechs" class="so btn btn-outline-danger">▶</button></td>
								<td>sechs</td>
								<td><button type="button" id="sechste" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechs<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row">7</td>
								<td><button type="button" id="sieben" class="so btn btn-outline-danger">▶</button></td>
								<td>sieben</td>
								<td><button type="button" id="siebte" class="so btn btn-outline-danger">▶</button></td>
								<td>der sieb<strong>te</strong></td>
							</tr>
							<tr>
								<th scope="row">8</td>
								<td><button type="button" id="acht" class="so btn btn-outline-danger">▶</button></td>
								<td>acht</td>
								<td><button type="button" id="achte" class="so btn btn-outline-danger">▶</button></td>
								<td>der achte</td>
							</tr>
							<tr>
								<th scope="row">9</td>
								<td><button type="button" id="neun" class="so btn btn-outline-danger">▶</button></td>
								<td>neun</td>
								<td><button type="button" id="neunte" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">10</td>
								<td><button type="button" id="zehn" class="so btn btn-outline-danger">▶</button></td>
								<td>zehn</td>
								<td><button type="button" id="zehnte" class="so btn btn-outline-danger">▶</button></td>
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
								<td width="50"><button type="button" id="elf" class="so btn btn-outline-danger">▶</button></td>
								<td>elf</td>
								<td width="50"><button type="button" id="elfte" class="so btn btn-outline-danger">▶</button></td>
								<td>der elfte</td>
							</tr>
							<tr>
								<th scope="row">12</td>
								<td><button type="button" id="zwölf" class="so btn btn-outline-danger">▶</button></td>
								<td>zwölf</td>
								<td><button type="button" id="zwölfte" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">13</td>
								<td><button type="button" id="derizehn" class="so btn btn-outline-danger">▶</button></td>
								<td>dreizehn</td>
								<td><button type="button" id="dreizehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreizehnte</td>
							</tr>
							<tr>
								<th scope="row">14</td>
								<td><button type="button" id="vierzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>vierzehn</td>
								<td><button type="button" id="vierzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierzehnte</td>
							</tr>
							<tr>
								<th scope="row">15</td>
								<td><button type="button" id="fünfzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>fünfzehn</td>
								<td><button type="button" id="fünfzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der fünfzehnte</td>
							</tr>
							<tr>
								<th scope="row">16</td>
								<td><button type="button" id="sechzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>se<strong>ch</strong>zehn</td>
								<td><button type="button" id="sechzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">17</td>
								<td><button type="button" id="siebzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>sie<strong>b</strong>zehn</td>
								<td><button type="button" id="siebzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der sie<strong>b</strong>zehnte</td>
							</tr>
							<tr>
								<th scope="row">18</td>
								<td><button type="button" id="achtzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>achtzehn</td>
								<td><button type="button" id="achtzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der achtzehnte</td>
							</tr>
							<tr>
								<th scope="row">19</td>
								<td><button type="button" id="neunzehn" class="so btn btn-outline-danger">▶</button></td>
								<td>neunzehn</td>
								<td><button type="button" id="neunzehnte" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunzehnte</td>
							</tr>
								<th scope="row">20</td>
								<td><button type="button" id="zwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>zwanzig</td>
								<td><button type="button" id="zwanzigste" class="so btn btn-outline-danger">▶</button></td>
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
								<td width="50"><button type="button" id="einundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>einundzwanzig</td>
								<td width="50"><button type="button" id="einundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der einundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">22</td>
								<td><button type="button" id="zweiundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>zweiundzwanzig</td>
								<td><button type="button" id="zweiundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">23</td>
								<td><button type="button" id="dreiundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>dreiundzwanzig</td>
								<td><button type="button" id="dreiundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreiundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">24</td>
								<td><button type="button" id="vierundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>vierundzwanzig</td>
								<td><button type="button" id="vierundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">25</td>
								<td><button type="button" id="fümfundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>fümfundzwanzig</td>
								<td><button type="button" id="fümfundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der fümfundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">26</td>
								<td><button type="button" id="sechsundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>sechsundzwanzig</td>
								<td><button type="button" id="sechsundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechsundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">27</td>
								<td><button type="button" id="siebenundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>siebenundzwanzig</td>
								<td><button type="button" id="siebenundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der siebenundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">28</td>
								<td><button type="button" id="achtundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>achtundzwanzig</td>
								<td><button type="button" id="achtundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">29</td>
								<td><button type="button" id="neunundzwanzig" class="so btn btn-outline-danger">▶</button></td>
								<td>neunundzwanzig</td>
								<td><button type="button" id="neunundzwanzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunundzwanzigste</td>
							</tr>
							<tr>
								<th scope="row">30</td>
								<td><button type="button" id="dreißig" class="so btn btn-outline-danger">▶</button></td>
								<td>dreißig</td>
								<td><button type="button" id="dreißigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der dreißigste</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-0 mt-5">
					<table class="table my-0">
						<tbody>
							<tr>
								<th scope="row" width="50">40</td>
								<td width="50"><button type="button" id="vierzig" class="so btn btn-outline-danger">▶</button></td>
								<td>vierzig</td>
								<td width="50"><button type="button" id="vierzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der vierzigste</td>
							</tr>
							<tr>
								<th scope="row">50</td>
								<td><button type="button" id="fünfzig" class="so btn btn-outline-danger">▶</button></td>
								<td>fünfzig</td>
								<td><button type="button" id="fünfzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der fünfzigste</td>
							</tr>
							<tr>
								<th scope="row">60</td>
								<td><button type="button" id="sechzig" class="so btn btn-outline-danger">▶</button></td>
								<td>sechzig</td>
								<td><button type="button" id="sechzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der sechzigste</td>
							</tr>
							<tr>
								<th scope="row">70</td>
								<td><button type="button" id="siebzig" class="so btn btn-outline-danger">▶</button></td>
								<td>siebzig</td>
								<td><button type="button" id="siebzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der siebzigste</td>
							</tr>
							<tr>
								<th scope="row">80</td>
								<td><button type="button" id="achtzig" class="so btn btn-outline-danger">▶</button></td>
								<td>achtzig</td>
								<td><button type="button" id="achtzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der achtzigste</td>
							</tr>
							<tr>
								<th scope="row">90</td>
								<td><button type="button" id="neunzig" class="so btn btn-outline-danger">▶</button></td>
								<td>neunzig</td>
								<td><button type="button" id="neunzigste" class="so btn btn-outline-danger">▶</button></td>
								<td>der neunzigste</td>
							</tr>
							<tr>
								<th scope="row">100</td>
								<td><button type="button" id="hundert" class="so btn btn-outline-danger">▶</button></td>
								<td>hundert</td>
								<td><button type="button" id="hundertste" class="so btn btn-outline-danger">▶</button></td>
								<td>der (ein)hundertste</td>
							</tr>
							<tr>
								<th scope="row">101</td>
								<td><button type="button" id="hunderteins" class="so btn btn-outline-danger">▶</button></td>
								<td>hunderteins</td>
								<td><button type="button" id="hunderteinste" class="so btn btn-outline-danger">▶</button></td>
								<td>der (ein)hunderteinste</td>
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
								<th class="align-middle" scope="row" rowspan="3" width="50"><button type="button" id="Frühling" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Frühling</td>
								<th scope="row" width="50"><button type="button" id="März" class="so btn btn-outline-danger">▶</button></th>
								<td>der März</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="April" class="so btn btn-outline-danger">▶</button></th>
								<td>der April</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Mai" class="so btn btn-outline-danger">▶</button></th>
								<td>der Mai</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="Sommer" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Sommer</td>
								<th scope="row"><button type="button" id="Juni" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juni</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Juli" class="so btn btn-outline-danger">▶</button></th>
								<td>der Juli</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="August" class="so btn btn-outline-danger">▶</button></th>
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
								<th scope="row" width="50"><button type="button" id="September" class="so btn btn-outline-danger">▶</button></th>
								<td>der September</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Oktober" class="so btn btn-outline-danger">▶</button></th>
								<td>der Oktober</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="November" class="so btn btn-outline-danger">▶</button></th>
								<td>der November</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row" rowspan="3"><button type="button" id="Winter" class="so btn btn-outline-danger">▶</button></th>
								<td rowspan="3" class="align-middle text-center">der Winter</td>
								<th scope="row"><button type="button" id="Dezember" class="so btn btn-outline-danger">▶</button></th>
								<td>der Dezember</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Januar" class="so btn btn-outline-danger">▶</button></th>
								<td>der Januar</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="Februar" class="so btn btn-outline-danger">▶</button></th>
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
	<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?=$root ?>js/popper.min.js"></script>
	<script src="./<?=$root ?>js/bootstrap.js"></script>
	<script src="./<?=$root ?>js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./<?=$root ?>js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm=new Array(), sen=new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")]=0;
				sen[$(this).attr("id")]=$("#"+$(this).attr("id")).text();
			});
			ion.sound( {
				sounds : [ {
					name : "r9 AGR",
					sprite : {
						"0": [.869, 260.247],
						"1": [174.891, 1.789],
						"2": [160.954, 1.458],
						"3": [199.026, 2.371],
						"4": [136.188, 1.338],
						"5": [224.436, 2.389],
						"6": [150.535, 1.277],
						"acht": [25.115, .810],
						"achte": [146.840, 1.395],
						"achtundzwanzig": [83.805, 1.495],
						"achtundzwanzigste": [224.436, 2.389],
						"achtzehn": [52.611, 1.443],
						"achtzehnte": [182.406, 1.801],
						"achtzig": [106.033, 1.174],
						"achtzigste": [249.642, 1.683],
						"April": [278.018, 1.279],
						"August": [288.782, 1.234],
						"derizehn": [38.454, 1.135],
						"Dezember": [299.738, 1.271],
						"drei": [13.177, .942],
						"dreiundzwanzig": [67.484, 1.589],
						"dreiundzwanzigste": [203.552, 2.490],
						"dreizehnte": [164.254, 1.816],
						"dreißig": [90.362, 1.217],
						"dreißigste": [232.820, 1.621],
						"dritte": [128.771, 1.365],
						"eins": [8.544, 1.026],
						"einundzwanzig": [61.127, 1.555],
						"einundzwanzigste": [195.073, 2.223],
						"elf": [32.699, .664],
						"elfte": [157.544, 1.283],
						"erste": [122.260, 1.194],
						"Februar": [273.095, 1.391],
						"Frühling": [305.560, 1.315],
						"fümfundzwanzig": [74.133, 1.663],
						"fümfundzwanzigste": [212.255, 2.222],
						"fünf": [17.931, .918],
						"fünfte": [136.188, 1.338],
						"fünfzehn": [44.098, 1.322],
						"fünfzehnte": [171.080, 2.154],
						"fünfzig": [96.559, .971],
						"fünfzigste": [239.739, 1.653],
						"Herbst": [311.435, 1.295],
						"hundert": [112.043, 1.292],
						"hunderteins": [115.288, 1.571],
						"hunderteinste": [259.320, 1.784],
						"hundertste": [256.239, 1.607],
						"Januar": [270.640,1.344],
						"Juli": [285.998, 1.282],
						"Juni": [283.147, 1.330],
						"Mai": [280.692, .951],
						"März": [275.568, 1.270],
						"neun": [27.591, 1.012],
						"neunte": [150.535, 1.277],
						"neunundzwanzig": [87.290, 1.617],
						"neunundzwanzigste": [228.758, 2.333],
						"neunzehn": [55.330, 1.324],
						"neunzehnte": [186.567, 1.780],
						"neunzig": [109.008, 1.425],
						"neunzigste": [253.094, 1.613],
						"November": [297.103, 1.285],
						"Oktober": [294.390, 1.401],
						"sechs": [20.121, 1.037],
						"sechste": [139.843, 1.296],
						"sechsundzwanzig": [77.462, 1.565],
						"sechsundzwanzigste": [216.548, 2.121],
						"sechzehn": [46.916, 1.169],
						"sechzehnte": [174.891, 1.789],
						"sechzig": [99.545, 1.349],
						"sechzigste": [243.094, 1.625],
						"September": [291.561, 1.405],
						"sieben": [22.483, 1.152],
						"siebenundzwanzig": [80.722, 1.567],
						"siebenundzwanzigste": [220.089, 2.365],
						"siebte": [143.348, 1.213],
						"siebzehn": [49.692, 1.444],
						"siebzehnte": [178.340, 1.886],
						"siebzig": [102.626, 1.295],
						"siebzigste": [246.527, 1.513],
						"Sommer": [308.460, 1.138],
						"vier": [15.593, .834],
						"vierte": [132.148, 1.329],
						"vierundzwanzig": [70.778, 1.473],
						"vierundzwanzigste": [207.966, 2.153],
						"vierzehn": [41.294, 1.068],
						"vierzehnte": [167.685, 1.820],
						"vierzig": [93.197, 1.207],
						"vierzigste": [235.869, 1.756],
						"Winter": [314.203, 1.089],
						"zehn": [30.115, .974],
						"zehnte": [153.784, 13.386],
						"zwanzig": [58.095, 1.073],
						"zwanzigste": [190.349, 2.010],
						"zwei": [10.552, 1.180],
						"zweite": [125.369, 1.489],
						"zweiundzwanzig": [64.304, 1.664],
						"zweiundzwanzigste": [199.026, 2.371],
						"zwölf": [35.006, 1.224],
						"zwölfte": [160.954, 1.458]
					}
				}
				, {
					name: "dingdongdang",
						path: "<?=$root ?>sounds/",
				}
				, {
					name: "Cartoon_Boing",
						path: "<?=$root ?>sounds/",
				}
				],
				path : "<?=$root ?>sounds/Reihe 9/",
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
						$("#"+obj.part).text(sen[obj.part]);
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
						else if($(this).text()==sen[$(this).attr("id")]) {
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
	<?php include "footer.php"; ?>
</body>
</html>