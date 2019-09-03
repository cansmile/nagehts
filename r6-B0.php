<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<?php
$a_cell_height = 60;
$double_cell_height = $a_cell_height * 2;
?>
<!-- 선택지 고정 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 1; width: 100%;">
	<div class="container">
		<div class="row">
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm py-0 my-0" id="1">
					zwei Uhr fünfundfünfzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm py-0 my-0" id="2">
					sieben Uhr vierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm py-0 my-0" id="3">
					fünf Uhr fünfzehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm py-0 my-0" id="4">
					zehn Uhr zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm py-0 my-0" id="5">
					neun Uhr fünfundvierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm py-0 my-0" id="6">
					siebzehn Uhr fünfzehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans13 btn-lg btn-outline-dark itm py-0 my-0" id="7">
					elf Uhr drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm py-0 my-0" id="8">
					achtzehn Uhr dreißig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans17 btn-lg btn-outline-dark itm py-0 my-0" id="9">
					Viertel vor zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm py-0 my-0" id="10">
					neunzehn Uhr vierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans12 btn-lg btn-outline-dark itm py-0 my-0" id="11">
					einundzwanzig Uhr fünfundvierzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans16 btn-lg btn-outline-dark itm py-0 my-0" id="12">
					Viertel nach fünf.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm py-0 my-0" id="13">
					zweiundzwanzig Uhr zehn.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans15 btn-lg btn-outline-dark itm py-0 my-0" id="14">
					fünf vor drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm py-0 my-0" id="15">
					fünfzehn Uhr zwanzig.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans14 btn-lg btn-outline-dark itm py-0 my-0" id="16">
					dreiundzwanzig Uhr drei.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm py-0 my-0" id="17">
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
				<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h2>
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
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">1 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">13 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">6.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">18.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">3.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">15.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">7.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">19.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">10.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">22.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">2.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">14.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">5.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">17.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">9.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">21.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">11.03 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">23.03 <small>Uhr</small></th>
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
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>ein</strong> Uhr.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>dreizehn</strong> Uhr.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">1.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>sechs</strong> Uhr <strong>dreißig</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-1">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">2.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>drei</strong> Uhr <strong>zwanzig</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-2">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">3.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-3">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-4">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">4.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-5">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-6">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">5.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-7">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-8">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">6.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-9">
											<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-10">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">7.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-11">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-12">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2">8.</td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-13">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
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
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">1 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">13 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">6.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">18.30 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">3.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">15.20 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">7.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">19.40 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">10.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">22.10 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">2.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">14.55 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">5.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">17.15 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">9.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">21.45 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">11.03 <small>Uhr</small></th>
					</tr>
					<tr>
						<th class="align-middle" height="<?php echo($a_cell_height); ?>" scope="row">23.03 <small>Uhr</small></th>
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
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>eins</strong>.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">2.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle"><strong>halb</strong> sieben.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">3.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">zwanzig <strong>nach</strong> drei.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">zehn <strong>vor</strong> halb vier.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">4.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">zwanzig vor acht.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">zehn nach halb acht.</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">5.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">zehn nach zehn.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">6.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-15">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">7.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-16">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">8.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">
								<div class="itm-lst 1itm py-0 my-0" id="lst-17">
											<h2 class="btn py-0 my-0 btn-warning btn-sm ttl d-block">
											▼ </h2>
								</div>
							</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
						<td class="align-middle">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center align-middle" height="<?php echo($double_cell_height); ?>" width="50" rowspan="2"><div class="d-lg-none d-xl-block d-md-none d-sm-none"><i>oder</i></div><div class="d-lg-block d-xl-none d-md-block d-sm-block">9.</div></td>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">Es ist</td>
						<td class="align-middle">kurz nach elf.</td>
					</tr>
					<tr>
						<td width="80" height="<?php echo($a_cell_height); ?>" class="text-right pr-0 mr-0 align-middle">&nbsp;</td>
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
<script src="./js/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/taptogroup.js"></script>
<!-- interact.min.js -->
<script src="./js/ion.sound.min.js"></script>
<script>
	$(".tran").hide();

	$(document).ready(function() {

	// 정답확인
	$("#chk").on("click", function() {
		var na = "";
		if($("#itms").find("button").length < 1) {
			$(".tran").show();

			$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
			$(this).removeClass("btn-light");
			$(this).addClass("btn-primary");
			$(".btn-lg").text().appendTo($(this).closest("td"));
			$(".btn-lg").remove();
		} else {
			$("div.itm-lst").each(function(idx) {
				if(!$(this).find("button").length) {
					if(na != "") {
						na += ", ";
					}
					na += (idx+1);
				}
			});
			alert("모든 문제를 풀어주세요!");
			// alert(na+"번 문제를 풀어주세요!");
		}
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
	
});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>