<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>F1. Trennbare Verben</strong> <small>분리동사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="4"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">stehen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Maria steht auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">räumen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Maria räumt auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">aus</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">leeren</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Maria leert den Mülleimer aus.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">ab</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">waschen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Maria wäscht ab.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">ein</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">kaufen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie kauft ein.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col"><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button>&nbsp;</div><div class="col-2 text-right pr-0">fern</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0"> sehen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%"><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Sie sieht fern.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>F2. Trennbare Verben im Satz</strong> <small>문장에서의 분리동사의 위치</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table table-striped text-center border-0">
								<thead>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="4"><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">Position 2</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">Ende</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Tom</th>
										<td>steht</td>
										<td>um 7 Uhr</td>
										<td>auf.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Du</th>
										<td>räumst</td>
										<td>das Zimmer</td>
										<td>auf.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Maria</th>
										<td>ruft</td>
										<td>seine Freundin</td>
										<td>an.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wir</th>
										<td>gehen</td>
										<td>heute Abend</td>
										<td>aus.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ich</th>
										<td>kaufe</td>
										<td>im Supermarkt</td>
										<td>ein.</td>
									</tr>
									<tr>
										<th scope="row"><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Ihr</th>
										<td>seht</td>
										<td>abends</td>
										<td>fern.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>F3. Temporale Präpositionen</strong> <small>시간을 나타내는 전치사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table table-striped text-center border-0">
								<tr>
									<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								</tr>
								<tr>
									<td><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann gehen Sie zur Uni?</td>
									<td><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Um 4 Uhr.</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Am Morgen.</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><button type="button" id="25" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Am Freitag.</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><button type="button" id="26" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Von Montag bis Donnerstag.</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-success mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>F4. Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table table-striped align-middle text-center">
								<thead>
									<tr>
										<th class="border border-0" scope="col">&nbsp;</th>
										<th class="border border-0" scope="col" colspan="2">fernsehen</th>
										<th class="border border-top-0 border-dark border-bottom-0 border-right-0" scope="col">treffen</th>
										<th class="border border-top-0 border-dark border-bottom-0" scope="col">fahren</th>
										<th class="border border-0" scope="col" colspan="2">anfangen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="border border-0" scope="row">ich</th>
										<td class="border border-0">sehe</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">treffe</td>
										<td class="border border-top-0 border-dark border-bottom-0">fahre</td>
										<td class="border border-0">fange</td>
										<td class="border border-0">an</td>
									</tr>
									<tr>
										<th class="border border-0" scope="row">du</th>
										<td class="border border-0">siehst</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">triffst</td>
										<td class="border border-top-0 border-dark border-bottom-0">fährst</td>
										<td class="border border-0">fängst</td>
										<td class="border border-0">an</td>
									</tr>
									<tr>
										<th class="border border-0" scope="row">er/sie/es</th>
										<td class="border border-0">sieht</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">trifft</td>
										<td class="border border-top-0 border-dark border-bottom-0">fährt</td>
										<td class="border border-0">fängt</td>
										<td class="border border-0">an</td>
									</tr>
									<tr>
										<th class="border border-0" scope="row">wir</th>
										<td class="border border-0">sehen</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">treffen</td>
										<td class="border border-top-0 border-dark border-bottom-0">fahren</td>
										<td class="border border-0">fangen</td>
										<td class="border border-0">an</td>
									</tr>
									<tr>
										<th class="border border-0" scope="row">ihr</th>
										<td class="border border-0">seht</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">trefft</td>
										<td class="border border-top-0 border-dark border-bottom-0">fahrt</td>
										<td class="border border-0">fangt</td>
										<td class="border border-0">an</td>
									</tr>
									<tr>
										<th class="border border-0" scope="row">sie/Sie</th>
										<td class="border border-0">sehen</td>
										<td class="border border-0">fern</td>
										<td class="border border-top-0 border-dark border-bottom-0 border-right-0">treffen</td>
										<td class="border border-top-0 border-dark border-bottom-0">fahren</td>
										<td class="border border-0">fangen</td>
										<td class="border border-0">an</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>F5. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-left bg-light">
								<thead>
									<tr>
										<th scope="col" colspan="2">gern/nicht gern</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="27" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="28" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machen Sie gern?</td>
										<td><button type="button" id="29" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich spiele gern am Computer.</td>
									</tr>
									<tr>
										<td><button type="button" id="30" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machst du gern?</td>
										<td><button type="button" id="31" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich schlafe gern.</td>
									</tr>
									<tr>
										<td><button type="button" id="32" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machen Sie nicht gern?</td>
										<td><button type="button" id="33" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich arbeite nicht gern.</td>
									</tr>
									<tr>
										<td><button type="button" id="34" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Was machst du nicht gern?</td>
										<td><button type="button" id="35" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Ich sehe nicht gern fern.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="36" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Deutsch lernen macht mir Spaß.</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="37" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Musik hören macht mir Spaß.</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="38" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Kochen finde ich langweilig.</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="39" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Einkaufen finde ich langweilig.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<thead>
									<tr>
										<th scope="col" colspan="2">Haushalt</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="40" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="41" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Frühstück machen</td>
										<td><button type="button" id="42" class="so btn btn-outline-dark btn-sm mr-1">▶</button>das Geschirr abwaschen und abtrocknen</td>
									</tr>
									<tr>
										<td><button type="button" id="43" class="so btn btn-outline-dark btn-sm mr-1">▶</button>aufräumen</td>
										<td><button type="button" id="44" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Staub saugen</td>
									</tr>
									<tr>
										<td><button type="button" id="45" class="so btn btn-outline-dark btn-sm mr-1">▶</button>einkaufen</td>
										<td><button type="button" id="46" class="so btn btn-outline-dark btn-sm mr-1">▶</button>kochen</td>
									</tr>
									<tr>
										<td><button type="button" id="47" class="so btn btn-outline-dark btn-sm mr-1">▶</button>die Wäsche aufhängen</td>
										<td><button type="button" id="48" class="so btn btn-outline-dark btn-sm mr-1">▶</button>den Mülleimer ausleeren</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<thead>
									<tr>
										<th scope="col" colspan="2">Tagesablauf</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-center align-middle m-2 p-2" colspan="2"><button type="button" id="49" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="50" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Mina steht um 7 Uhr auf.</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="51" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Um 9 Uhr morgens fährt sie zur Uni.</td>
									</tr>
									<tr>
										<td colspan="2"><button type="button" id="52" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Um 6 Uhr abends kommt sie wieder nach Hause.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td width="50%"><button type="button" id="53" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann gehst du zur Uni?</td>
										<td><button type="button" id="54" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Am Morgen gehe ich zur Uni.</td>
									</tr>
									<tr>
										<td><button type="button" id="55" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann hast du Deutschunterricht?</td>
										<td><button type="button" id="56" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Um 9 Uhr habe ich Deutschunterricht.</td>
									</tr>
									<tr>
										<td><button type="button" id="57" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann hast du Vorlesungen?</td>
										<td><button type="button" id="58" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Von 9 bis 16 Uhr habe ich Vorlesungen.</td>
									</tr>
									<tr>
										<td><button type="button" id="59" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Wann fängt das Seminar an?</td>
										<td><button type="button" id="60" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Um halb neun beginnt es.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td><button type="button" id="61" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Um wie viel Uhr kommst du nach Hause?</td>
										<td><button type="button" id="62" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Um fünf Uhr komme ich nach Hause.</td>
									</tr>
									<tr>
										<td><button type="button" id="63" class="so btn btn-outline-dark btn-sm mr-1">▶</button>Von wann bis wann schläfst du?</td>
										<td><button type="button" id="64" class="so btn btn-outline-dark btn-sm mr-1">▶</button>- Von 11 Uhr bis 6 Uhr schlafe ich.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<thead>
									<tr>
										<th scope="col" colspan="2">Uhrzeit/Tageszeiten</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="2" width="50%"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr.</div><div class="col-2 text-center">12.00</div><div class="col-5 text-center">Es ist zwölf.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr fünfzehn.</div><div class="col-2 text-center">12.15</div><div class="col-5 text-center">Es ist Viertel nach zwölf.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr zwanzig.</div><div class="col-2 text-center">12.20</div><div class="col-5 text-center">Es ist zwanzig nach zwölf.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr dreißig.</div><div class="col-2 text-center">12.30</div><div class="col-5 text-center">Es ist halb eins.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr vierzig.</div><div class="col-2 text-center">12.40</div><div class="col-5 text-center">Es ist zwanzig vor eins.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr fünfundvierzig.</div><div class="col-2 text-center">12.45</div><div class="col-5 text-center">Es ist Viertel vor eins.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr fünfzig.</div><div class="col-2 text-center">12.50</div><div class="col-5 text-center">Es ist zehn vor eins.</div></div></td>
									</tr>
									<tr>
										<td colspan="2"><div class="row"><div class="col-5 text-center">Es ist zwölf Uhr achtundfünfzig.</div><div class="col-2 text-center">12.58</div><div class="col-5 text-center">Es ist kurz vor eins.</div></div></td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td>Wie spät ist es?</td>
										<td>Es ist 12 Uhr.</td>
									</tr>
									<tr>
										<td>Wie viel Uhr ist es?</td>
										<td>Es ist halb zehn.</td>
									</tr>
									<tr>
										<td colspan="2"><span class="d-inline-block">am Morgen</span>, <span class="d-inline-block">am Vormittag</span>, <span class="d-inline-block">am Mittag</span>, <span class="d-inline-block">am Nachmittag</span>, <span class="d-inline-block">am Abend</span>, <span class="d-inline-block">am Freitagabend</span>, <span class="d-inline-block">am Sonntagmorgen</span>, <span class="d-inline-block">am Montagnachmittag</span>, <span class="d-inline-block">in der Nacht</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="last" class="d-none"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?php echo($root); ?>js/popper.min.js"></script>
		<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
		<script src="./<?php echo($root); ?>js/howler.core.js"></script>
		<script>
			// 소리 출력 전역 변수와 함수
			var sen = new Array(), pa = new Array(), he = new Array(), last;
			$(".so").each(function() {
				var t = $(this);
				var ti = t.attr("id");
				sen[ti] = 0;
				pa[ti] = t.html();
				he[ti] = t.height();
			});

			function stopAll() {
				$(".so").each(function() {
					$(this).html(pa[$(this).attr("id")]);
				});
			}

			var nagehts = new Howl({
				// src: ["./<?php echo($root); ?>sounds/Reihe 1/r1 H.mp3"],
				src: ["./<?php echo($root); ?>sounds/Reihe 6/r6 F.mp3"],
				sprite : {
					"1": [4073, 33483],
					"2": [4335, 2632],
					"3": [6735, 2584],
					"4": [10211, 2067],
					"5": [12585, 2516],
					"6": [15910, 2439],
					"7": [18347, 3452],
					"8": [22706, 1808],
					"9": [24573, 2834],
					"10": [28128, 2236],
					"11": [30411, 2023],
					"12": [33410, 1996],
					"13": [35321, 1957],
					"14": [43288, 24966],
					"15": [43288, 3230],
					"16": [47472, 2785],
					"17": [51730, 3149],
					"18": [56155, 3015],
					"19": [60889, 2915],
					"20": [65719, 2276],
					"21": [74893, 13933],
					"22": [74893, 2766],
					"23": [78217, 2064],
					"24": [80791, 1775],
					"25": [83315, 1831],
					"26": [85695, 3039],
					"27": [93109, 42131],
					"28": [97469, 1912],
					"29": [100182, 2699],
					"30": [103881, 1921],
					"31": [106482, 2033],
					"32": [109311, 2224],
					"33": [112023, 2230],
					"34": [115371, 2300],
					"35": [118046, 2352],
					"36": [121100, 2744],
					"37": [124455, 2812],
					"38": [128155, 2733],
					"39": [131796, 3288],
					"40": [139940, 26163],
					"41": [141893, 2117],
					"42": [153070, 3673],
					"43": [144725, 1562],
					"44": [157644, 1710],
					"45": [147115, 1846],
					"46": [159975, 1409],
					"47": [149793, 2172],
					"48": [161661, 2372],
					"49": [167686, 63622],
					"50": [171012, 2685],
					"51": [175219, 3454],
					"52": [180418, 3673],
					"53": [185806, 2127],
					"54": [189095, 2692],
					"55": [192964, 2224],
					"56": [196330, 3180],
					"57": [200804, 2192],
					"58": [204165, 3913],
					"59": [209282, 2388],
					"60": [212434, 2305],
					"61": [215740, 2947],
					"62": [219770, 2775],
					"63": [223564, 2843],
					"64": [227186, 3823]
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
					$("#whole").show();
					$("#alt").hide();
					// $(".alert").hide();

					$(".so").on("click", function(idx) {
							var t = $(this);
							var ti = t.attr("id");

						if($("div#last").text() == "" || t.text() == "❚❚") {
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
				},
				onend: function() {
					$("div#last").text("");
					stopAll();
					$("#cnt-"+last).text(sen[last]);
					if(sen[last] == 2) {
						$("#"+last).find(".tran").show();
					}
				}


			});


	
	</script>
<?php include "footer.php"; ?>
	</body>
</html>