<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<style>
	.btn-outline-pink {
	  color: #ff0099;
	  border-color: #ff0099;
	}

	.btn-outline-pink:hover {
	  color: #fff;
	  background-color: #ff0099;
	  border-color: #ff0099;
	}

	.btn-outline-pink:focus, .btn-outline-pink.focus {
	  box-shadow: 0 0 0 0.2rem rgba(255, 0, 204, 0.5);
	}

	.btn-outline-pink.disabled, .btn-outline-pink:disabled {
	  color: #ff0099;
	  background-color: transparent;
	}

	.btn-outline-pink:not(:disabled):not(.disabled):active, .btn-outline-pink:not(:disabled):not(.disabled).active,
	.show > .btn-outline-pink.dropdown-toggle {
	  color: #fff;
	  background-color: #ff0099;
	  border-color: #ff0099;
	}

	.btn-outline-pink:not(:disabled):not(.disabled):active:focus, .btn-outline-pink:not(:disabled):not(.disabled).active:focus,
	.show > .btn-outline-pink.dropdown-toggle:focus {
	  box-shadow: 0 0 0 0.2rem rgba(255, 0, 204, 0.5);
	}
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>Trennbare Verben</strong> <small>분리동사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">stehen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria steht auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">auf</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">räumen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria räumt auf.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">aus</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">leeren</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria leert den Mülleimer aus.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">ab</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">waschen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Maria wäscht ab.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">ein</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0">kaufen</div></div></td>
										<td width="10%" class="text-center">→</td>
										<td width="45%">Sie kauft ein.</td>
									</tr>
									<tr>
										<td width="45%" class="text-center"><div class="row"><div class="col">&nbsp;</div><div class="col-3 text-right pr-0">fern</div><div class="col-1 text-center">|</div><div class="col-4 text-left pl-0"> sehen</div></div></td>
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
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
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
								<button class="btn btn-outline-info mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table table-striped align-middle text-center border-0">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col" colspan="2">fernsehen</th>
										<th scope="col">treffen</th>
										<th scope="col">fahren</th>
										<th scope="col" colspan="2">anfangen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">ich</th>
										<td>sehe</td>
										<td>fern</td>
										<td>treffe</td>
										<td>fahre</td>
										<td>fange</td>
										<td>an</td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td>siehst</td>
										<td>fern</td>
										<td>triffst</td>
										<td>fährst</td>
										<td>fängst</td>
										<td>an</td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td>sieht</td>
										<td>fern</td>
										<td>trifft</td>
										<td>fährt</td>
										<td>fängt</td>
										<td>an</td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>sehen</td>
										<td>fern</td>
										<td>treffen</td>
										<td>fahren</td>
										<td>fangen</td>
										<td>an</td>
									</tr>
									<tr>
										<th scope="row">ihr</th>
										<td>seht</td>
										<td>fern</td>
										<td>trefft</td>
										<td>fahrt</td>
										<td>fangt</td>
										<td>an</td>
									</tr>
									<tr>
										<th scope="row">sie/Sie</th>
										<td>sehen</td>
										<td>fern</td>
										<td>treffen</td>
										<td>fahren</td>
										<td>fangen</td>
										<td>an</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-dark mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse6" id="4">
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
										<td width="50%">Frühtstück machen</td>
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
										<td width="50%">12.00 Es ist zwölf Uhr.</td>
										<td>Es ist zwölf.</td>
									</tr>
									<tr>
										<td>12.15 Es ist zwölf Uhr fünfzehn.</td>
										<td>Es ist Viertel nach zwölf.</td>
									</tr>
									<tr>
										<td>12.20 Es ist zwölf Uhr zwanzig.</td>
										<td>Es ist zwanzig nach zwölf.</td>
									</tr>
									<tr>
										<td>12.30 Es ist zwölf Uhr dreißig.</td>
										<td>Es ist halb eins.</td>
									</tr>
									<tr>
										<td>12.40 Es ist zwölf Uhr vierzig.</td>
										<td>Es ist zwanzig vor eins.</td>
									</tr>
									<tr>
										<td>12.45 Es ist zwölf Uhr fünfundvierzig.</td>
										<td>Es ist Viertel vor eins.</td>
									</tr>
									<tr>
										<td>12.50 Es ist zwölf Uhr fünfzig.</td>
										<td>Es ist zehn vor eins.</td>
									</tr>
									<tr>
										<td>12.58 Es ist zwölf Uhr achtundfünfzig.</td>
										<td>Es ist kurz vor eins.</td>
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
										<td colspan="2">am Morgen, am Vormittag, am Mittag, am Nachmittag, am Abend, am Freitagabend, am Sonntagmorgen, am Montagnachmittag, in der Nacht</td>
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

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
	</body>
</html>