<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>Trennbare Verben</strong> <small>분리동사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">stehen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria steht auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">räumen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria räumt auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">aus</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">leeren</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria leert den Mülleimer aus.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">ab</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">waschen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria wäscht ab.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">ein</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">kaufen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Sie kauft ein.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-2 text-right pr-0">fern</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0"> sehen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Sie sieht fern.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>Trennbare Verben im Satz</strong> <small>문장에서의 분리동사의 위치</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table table-striped text-center border-0">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">Position 2</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">Ende</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Tom</th>
										<td>steht</td>
										<td>um 7 Uhr</td>
										<td>auf.</td>
									</tr>
									<tr>
										<th scope="row">Du</th>
										<td>räumst</td>
										<td>das Zimmer</td>
										<td>auf.</td>
									</tr>
									<tr>
										<th scope="row">Maria</th>
										<td>ruft</td>
										<td>seine Freundin</td>
										<td>an.</td>
									</tr>
									<tr>
										<th scope="row">Wir</th>
										<td>gehen</td>
										<td>heute Abend</td>
										<td>aus.</td>
									</tr>
									<tr>
										<th scope="row">Ich</th>
										<td>kaufe</td>
										<td>im Supermarkt</td>
										<td>ein.</td>
									</tr>
									<tr>
										<th scope="row">Ihr</th>
										<td>seht</td>
										<td>abends</td>
										<td>fern.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
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
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse6" id="4">
									<strong>Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-left bg-light">
								<thead>
									<tr>
										<th scope="col" colspan="2">gern/nicht gern</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="50%">Was machen Sie gern?</td>
										<td>- Ich spiele gern am Computer.</td>
									</tr>
									<tr>
										<td>Was machst du gern?</td>
										<td>- Ich schlafe gern.</td>
									</tr>
									<tr>
										<td>Was machen Sie nicht gern?</td>
										<td>- Ich arbeite nicht gern.</td>
									</tr>
									<tr>
										<td>Was machst du nicht gern?</td>
										<td>- Ich sehe nicht gern fern.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2">Deutsch lernen macht mir Spaß.</td>
									</tr>
									<tr>
										<td colspan="2">Musik hören macht mir Spaß.</td>
									</tr>
									<tr>
										<td colspan="2">Kochen finde ich langweilig.</td>
									</tr>
									<tr>
										<td colspan="2">Einkaufen finde ich langweilig.</td>
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
										<td width="50%">Frühstück machen</td>
										<td>das Geschirr abwaschen und abtrocknen</td>
									</tr>
									<tr>
										<td>aufräumen</td>
										<td>Staub saugen</td>
									</tr>
									<tr>
										<td>einkaufen</td>
										<td>kochen</td>
									</tr>
									<tr>
										<td>die Wäsche aufhängen</td>
										<td>den Mülleimer ausleeren</td>
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
										<td colspan="2">Mina steht um 7 Uhr auf.</td>
									</tr>
									<tr>
										<td colspan="2">Um 9 Uhr morgens fährt sie zur Uni.</td>
									</tr>
									<tr>
										<td colspan="2">Um 6 Uhr abends kommt sie wieder nach Hause.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td width="50%">Wann gehst du zur Uni?</td>
										<td>- Am Morgen gehe ich zur Uni.</td>
									</tr>
									<tr>
										<td>Wann hast du Deutschunterricht?</td>
										<td>- Um 9 Uhr habe ich Deutschunterricht.</td>
									</tr>
									<tr>
										<td>Wann hast du Vorlesungen?</td>
										<td>- Von 9 bis 16 Uhr habe ich Vorlesungen.</td>
									</tr>
									<tr>
										<td>Wann fängt das Seminar an?</td>
										<td>- Um halb neun beginnt es.</td>
									</tr>
									<tr>
										<td style="max-height: 10px; font-size: 1pt;" class="p-0 m-0" colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td>Um wie viel Uhr kommst du nach Hause?</td>
										<td>- Um fünf Uhr komme ich nach Hause.</td>
									</tr>
									<tr>
										<td>Von wann bis wann schläfst du?</td>
										<td>- Von 11 Uhr bis 6 Uhr schlafe ich.</td>
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

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>