<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<?php
$a_cell_height = 60;
$double_cell_height = $a_cell_height * 2;
?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 선택지 고정 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 1; width: 100%;">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm py-0 my-0 so" id="1">
					zwei Uhr fünfundfünfzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm py-0 my-0 so" id="2">
					sieben Uhr vierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm py-0 my-0 so" id="3">
					fünf Uhr fünfzehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm py-0 my-0 so" id="4">
					zehn Uhr zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm py-0 my-0 so" id="5">
					neun Uhr fünfundvierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm py-0 my-0 so" id="6">
					siebzehn Uhr fünfzehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm py-0 my-0 so" id="7">
					elf Uhr drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm py-0 my-0 so" id="8">
					achtzehn Uhr dreißig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark itm py-0 my-0 so" id="9">
					Viertel vor zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm py-0 my-0 so" id="10">
					neunzehn Uhr vierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm py-0 my-0 so" id="11">
					einundzwanzig Uhr fünfundvierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm py-0 my-0 so" id="12">
					Viertel nach fünf.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm py-0 my-0 so" id="13">
					zweiundzwanzig Uhr zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm py-0 my-0 so" id="14">
					fünf vor drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm py-0 my-0 so" id="15">
					fünfzehn Uhr zwanzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm py-0 my-0 so" id="16">
					dreiundzwanzig Uhr drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm py-0 my-0 so" id="17">
					vierzehn Uhr fünfundfünfzig.
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
				<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
				<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
				HV
				</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
				❚❚
				</button>
				</h2>
				<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료해도 문장의 번역이 나오지 않습니다.</small> ]</h3>
			</div>
		</div>
		<div class="row">
			<dov class="col"><img src="./images/Reihe 6/Reihe-6-B0.png" alt="Wie spät ist es?" style="max-width: 100%; height: auto;"></dov>
		</div>
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-1 px-0 mx-0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="align-middle" height="80" scope="col" class="text-center align-middle">man schreibt</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t1" scope="row">1 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t2" scope="row">13 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t3" scope="row">6.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t4" scope="row">18.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t5" scope="row">3.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t6" scope="row">15.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t7" scope="row">7.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t8" scope="row">19.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t9" scope="row">10.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t10" scope="row">22.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t11" scope="row">2.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t12" scope="row">14.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t13" scope="row">5.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t14" scope="row">17.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t15" scope="row">9.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t16" scope="row">21.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t17" scope="row">11.03 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t18" scope="row">23.03 <small>Uhr</small></th>
					</tr>
				</tbody>
			</table>
		</div>
			<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 col-xl-5 px-0 mx-0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th  height="80"scope="col" colspan="3" class="text-center align-middle">man sagt (offiziell)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">&nbsp;</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b1">Es ist</td>
						<td class="align-middle"><strong>ein</strong> Uhr.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b2">Es ist</td>
						<td class="align-middle"><strong>dreizehn</strong> Uhr.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">1.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b3">Es ist</td>
						<td class="align-middle"><strong>sechs</strong> Uhr <strong>dreißig</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b4">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-1">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">2.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b5">Es ist</td>
						<td class="align-middle"><strong>drei</strong> Uhr <strong>zwanzig</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b6">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-2">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">3.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b7">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-3">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b8">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-4">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">4.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b9">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-5">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b10">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-6">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">5.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b11">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-7">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b12">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-8">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">6.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b13">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-9">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b14">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-10">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">7.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b15">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-11">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b16">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-12">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">8.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b17">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-13">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b18">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-14">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
				</tbody>
			</table>
		</div>
			<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-1 px-0 mx-0 d-lg-block d-xl-none d-md-block d-sm-block">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="align-middle" height="80" scope="col" class="text-center align-middle">man schreibt</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t19" scope="row">1 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t20" scope="row">13 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t21" scope="row">6.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t22" scope="row">18.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t23" scope="row">3.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t24" scope="row">15.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t25" scope="row">7.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t26" scope="row">19.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t27" scope="row">10.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t28" scope="row">22.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t29" scope="row">2.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t30" scope="row">14.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t31" scope="row">5.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t32" scope="row">17.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t33" scope="row">9.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t34" scope="row">21.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t35" scope="row">11.03 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" id="t36" scope="row">23.03 <small>Uhr</small></th>
					</tr>
				</tbody>
			</table>
		</div>
			<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 col-xl-5 px-0 mx-0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="align-middle" height="80" scope="col" colspan="3" class="text-center align-middle">oder man sagt (inoffiziell)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">1.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b19">Es ist</td>
						<td class="align-middle"><strong>eins</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b20">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">2.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b21">Es ist</td>
						<td class="align-middle"><strong>halb</strong> sieben.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b22">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">3.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b23">Es ist</td>
						<td class="align-middle">zwanzig <strong>nach</strong> drei.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b24">Es ist</td>
						<td class="align-middle">zehn <strong>vor</strong> halb vier.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">4.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b25">Es ist</td>
						<td class="align-middle">zwanzig vor acht.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b26">Es ist</td>
						<td class="align-middle">zehn nach halb acht.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">5.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b27">Es ist</td>
						<td class="align-middle">zehn nach zehn.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b28">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">6.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b29">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-15">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b30">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">7.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b31">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-16">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b32">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">8.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b33">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-17">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b34">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">9.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b35">Es ist</td>
						<td class="align-middle">kurz nach elf.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle" id="b36">&nbsp;</td>
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
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="bg-light border-0"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="pl-1">• 시각을 나타낼 때에는 시각과 전치사 <strong>um</strong>이 함께 쓰인다.</div>
								<div class="pl-3">이때 의문사는 <strong>Um wie viel Uhr?</strong> 혹은 <strong>Wann?</strong> 으로 질문한다.</div>
								<div class="pl-1 pt-2">• 시간을 나타내는 부사구는 문장의 첫번째에 놓일수 있다.</div>
								<div class="pl-3">이 때 주어는 동사 다음에 위치한다.</div>
								<div class="pl-4 pt-2"><strong>Um sechs Uhr</strong> stehe <strong>ich</strong> auf.<br>
								<strong>Um halb elf</strong> schlafe <strong>ich</strong>.</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="bg-light border-0"><span class="bg-success rounded text-white m-1 p-2 px-3">GR</span>Wochentage: Heute ist Montag.<br><span class="ml-5"><small>요일: 오늘은 월요일이다.</small></span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="./images/Reihe 6/Reihe-6-GR.png" alt="GR" style="max-width: 100%; height: auto;"></td>
						</tr>
						<tr>
							<td class="bg-light border-0"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span><strong>Wochentage</strong><br><div class="pl-2 ml-5"><small>요일, 공휴일 등의 시간적 의미를 나타낼 때에는 전치사 an이 함께 쓰인다.</small></div></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
				<table class="table">
					<tbody>
						<tr>
							<td><span class="bg-info rounded text-white m-1 p-1 px-2"><strong>PRÄP.1</strong></span><strong>an</strong><small><strong>[an]</strong>&nbsp;1. <시간> …에 2. <장소, ,정지 > …옆에, … 3. 기타 관용적 표현</small></td>
						</tr>
						<tr>
							<td class="bg-light border-0"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span>[ <small>시간 및 장소적 의미의 전치사</small> an ] <span class="bg-dark text-light p-1 px-2">3격</span></td>
						</tr>
						<tr>
							<td>
								<div class="pl-4 row">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-middle">
<div class="pt-1"><strong>Am</strong> Morgen machen wir einen Spaziergang.<br>
<small class="pl-2">우리는 아침에 산책한다.</small><br></div>
<div class="pt-1"><strong>Am</strong> Sonntag gehen sie in die Kirche.<br>
<small class="pl-2">그들은 일요일에 교회에 간다.</small><br></div>
<div class="pt-1"><strong>Am</strong> Wochenende fahre ich nach Paris.<br>
<small class="pl-2">주말에 나는 파리로 간다.</small><br></div>
<div class="pt-1"><strong>Am</strong> 4. Juli habe ich Geburtstag.<br>
<small class="pl-2">7월 4일이 내 생일이다.</small><br></div>
									</div>
									<div class="my-auto col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-middle">
<div class="pt-1"><strong>an</strong> + dem Sonntag <br><span class="ml-5">= <strong>am</strong> Sonntag</span></div>
<div class="pt-1"><strong>an</strong> + dem Morgen <br><span class="ml-5">= <strong>am</strong> Morgen</span></div>
<div class="pt-1"><strong>an</strong> + dem Wochenende <br><span class="ml-5">= <strong>am</strong> Wochenende</span></div>
<div class="pt-1"><strong>an</strong> + dem 4. (vierten) Juli <br><span class="ml-5">= <strong>am</strong> 4. (vierten) Juli</span></div>
									</div>
								</div>
							</td>
						</tr>								
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
		


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
					name : "r6 B0",
					sprite : {
						"0": [1.24, 89.16],
						"1": [8, 3.6],
						"2": [12.71, 1.75],
						"3": [16.79, 1.95],
						"4": [20.83, 2],
						"5": [24.88, 2.38],
						"6": [29.52, 2.38],
						"7": [33.99, 1.66],
						"8": [39.23, 1.87],
						"9": [44.33, 1.42],
						"10": [49.11, 2.1],
						"11": [53.54, 3.1],
						"12": [59.08, 2.1],
						"13": [64.73, 2.31],
						"14": [70.12, 1.88],
						"15": [74.51, 2.46],
						"16": [79.81, 2.73],
						"17": [85.89, 2.88]
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
				path : "sounds/Reihe 6/",
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
						if(obj.part < 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".btn").find(".tran").show();
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
							ion.sound.pause("r6 B0", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 B0", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 B0", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 B0", {
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

	function checkHeight() {
		// 좌우 셀 높이 맞추어 주기
		var tbn = 18; // 전체 셀의 반 값; 좌측과 우측이 같은 경우
		for(var i = 1; i <= tbn; i++) {
			if( $("#b"+i).height() > $("#b"+(i+tbn)).height() ) {
				$("#t"+(i+tbn)).height($("#b"+i).height());
				$("#t"+(i)).height($("#b"+i).height());
				$("#b"+(i+tbn)).height($("#b"+i).height());
			} else if( ($("#b"+i).height() < $("#b"+(i+tbn)).height()) || ($("#b"+i).height() == $("#b"+(i+tbn)).height()) ) {
				$("#t"+(i)).height($("#b"+(i+tbn)).height());
				$("#t"+(i+tbn)).height($("#b"+(i+tbn)).height());
				$("#b"+(i)).height($("#b"+(i+tbn)).height());
			}
		}
	}

	$(document).on("click", function() { checkHeight(); });

	// 정답확인
	$("#chk").on("click", function() {
			if ($(".an").length < $(".q").length) {
				var na="";
				$(".q").each(function() {
					if ( !$(this).find("div").hasClass("an")) {
						if (na !="") {
							na +=", ";
						}
						na +=$(this).attr("id");
					}
					;
				}
				);
				alert(na + "번 문제를 풀어주세요.");
			}
			else {
				$(".itm").each(function() {
					if($(this).parent().attr("id").length > 5) {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
					} else {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
					}
					$(".tran").show();
					if($(this).hasClass("ans"+ (a))) {
						$(this).addClass("text-success font-weight-bold");
					}
					else {
						$(this).addClass("text-warning font-weight-bold");
						$(this).find(".tran").show();

					}
					;

					if($(this).hasClass("text-warning")) {
						// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
						for(var i = 1; i <= $(".itm-lst").length; i++) {
							if($(this).hasClass("ans"+i)) {
								$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger font-weight-bold\">" + $(this).html() + "</button>");
								// $(lstn).append(i);
							}
						}
					};

				}
				);

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("text-success");
					}
				});

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

				checkHeight();
			}
			;
		});

	var pan = new Array();
	pan = [];
	// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
	var il = $("#itms>.itm").length;
	for(var p = 0; p < pan.length; p++) {
	var pani = "#lst-" + pan[p];
		$(".itm").each(function() {
			if($(this).hasClass("ans" + pan[p])) {
				$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
				$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold text-left pl-0");
				$("#" + $(this).attr("id")).addClass("border-0");
				$("#" + $(this).attr("id")).attr("style","font-size: 1em;");
				$("#lst-" + pan[p] + ">h2").remove();
				$("#lst-" + pan[p]).parent().find(".tran").show();
			}
		})
	}
	

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