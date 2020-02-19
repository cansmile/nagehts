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
									<strong>F1. Personalpronomen</strong> <small>인칭대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-striped align-middle text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">Nominativ</th>
										<th scope="col" class="border-0">Akkusativ</th>
										<th scope="col" class="border-0">Dativ</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="border-0">ich</td>
										<td class="border-0">mich</td>
										<td class="border-0">mir</td>
									</tr>
									<tr>
										<td class="border-0">du</td>
										<td class="border-0">dich</td>
										<td class="border-0">dir</td>
									</tr>
									<tr>
										<td class="border-0">Sie</td>
										<td class="border-0">Sie</td>
										<td class="border-0">Ihnen</td>
									</tr>
									<tr>
										<td class="border-0">er</td>
										<td class="border-0">ihn</td>
										<td class="border-0">ihm</td>
									</tr>
									<tr>
										<td class="border-0">sie</td>
										<td class="border-0">sie</td>
										<td class="border-0">ihr</td>
									</tr>
									<tr>
										<td class="border-0">es</td>
										<td class="border-0">es</td>
										<td class="border-0">ihm</td>
									</tr>
									<tr>
										<td class="border-0">wir</td>
										<td class="border-0">uns</td>
										<td class="border-0">uns</td>
									</tr>
									<tr>
										<td class="border-0">ihr</td>
										<td class="border-0">euch</td>
										<td class="border-0">euch</td>
									</tr>
									<tr>
										<td class="border-0">sie</td>
										<td class="border-0">sie</td>
										<td class="border-0">ihnen</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0 text-primary">m</th>
										<th scope="col" class="border-0 text-danger">f</th>
										<th scope="col" class="border-0 text-purple">n</th>
										<th scope="col" class="border-0 text-khaki">Pl</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">Nominativ</th>
										<td class="border-0 text-primary">der</td>
										<td class="border-0 text-danger">die</td>
										<td class="border-0 text-purple">das</td>
										<td class="border-0 text-khaki">die</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Akkusativ</th>
										<td class="border-0 text-primary">den</td>
										<td class="border-0 text-danger">die</td>
										<td class="border-0 text-purple">das</td>
										<td class="border-0 text-khaki">die</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Dativ</th>
										<td class="border-0 text-primary">dem</td>
										<td class="border-0 text-danger">der</td>
										<td class="border-0 text-purple">dem</td>
										<td class="border-0 text-khaki">den</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0 text-primary">m</th>
										<th scope="col" class="border-0 text-danger">f</th>
										<th scope="col" class="border-0 text-purple">n</th>
										<th scope="col" class="border-0 text-khaki">Pl</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">Nominativ</th>
										<td class="border-0 text-primary">ein</td>
										<td class="border-0 text-danger">eine</td>
										<td class="border-0 text-purple">ein</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Akkusativ</th>
										<td class="border-0 text-primary">einen</td>
										<td class="border-0 text-danger">eine</td>
										<td class="border-0 text-purple">ein</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">Dativ</th>
										<td class="border-0 text-primary">einem</td>
										<td class="border-0 text-danger">einer</td>
										<td class="border-0 text-purple">einem</td>
										<td class="border-0 text-khaki">-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>F2. Perfekt: haben/sein + Partizip II</strong> <small>완료형: haben / sein + 과거분사형</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<tbody>
									<tr>
										<th width="45%" scope="col" colspan="3" class="border-0">Grundform : Hilfsverb</th>
										<th width="10%" scope="col" class="border-0">+</th>
										<th width="45%" scope="col" colspan="3" class="border-0">Partizip II</th>
									</tr>
									<tr>
										<td class="border-0 text-right">↙</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">↘</td>
										<td class="border-0"></td>
										<td class="border-0 text-right">↙</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">↘</td>
									</tr>
									<tr>
										<td class="border-0 text-right">haben</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">sein</td>
										<td class="border-0"></td>
										<td class="border-0 text-right">ge-<span class="p-1 border border-secondary rounded m-1 px-3 bg-light"> </span>-t<br>(schwache V)</td>
										<td class="border-0"></td>
										<td class="border-0 text-left">ge-<span class="p-1 border border-secondary rounded m-1 px-3 bg-light"> </span>-en<br>(starke V)</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped" style="line-height: 250%;">
								<thead>
									<tr>
										<th colspan="2" class="border-0 text-center">Hilfsverben: Wann <span class="p-1 px-2 bg-light font-weight-bold border border-dark rounded">haben</span> und wann <span class="p-1 px-2 bg-light font-weight-bold border border-dark rounded">sein</span>? <small>조동사: haben과 sein</small></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="border-0 font-weight-bold text-center">Hilfsverb: haben (70-80%)</td>
										<td class="border-0 font-weight-bold text-center">Hilfsverb: sein (20-30%)</td>
									</tr>
									<tr>
										<td class="border-0">die meisten Verben<br>(V-trans./ V-intrans., +durativ / V-ieren)</td>
										<td class="border-0">nur drei Gruppen von V-intrans.<br>(+Bewegung / +Veränderung / sein, bleiben, werden)</td>
									</tr>
									<tr>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">habe</span> das Buch <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gelesen</span>.</td>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">bin</span> nach Seoul <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gefahren</span>.<br>(<span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">+Bewegung</span>: gehen, fliegen, laufen)</td>
									</tr>
									<tr>
										<td class="border-0">Er <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">hat</span> lange <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">gelebt</span>.<br>(schlafen, wohnen, blühen...)</td>
										<td class="border-0">Das Baby <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">ist</span> <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">eingeschlafen</span>.<br>(<span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">+Veränderung</span>: einschlafen, fallen...)</td>
									</tr>
									<tr>
										<td class="border-0">Er <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">hat</span> schon <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">studiert</span>.<br>(telefonieren, kontrollieren...)</td>
										<td class="border-0">Ich <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">bin</span> hier <span class="bg-light border border-secondary p-1 px-2 m-1 rounded font-weight-bold">geblieben</span>.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>F3. Präteritum von sein und haben.</strong> <small>haben과 sein의 과거형.</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table text-center table-striped align-middle">
								<thead>
									<tr>
										<th scope="col" class="border-0">&nbsp;</th>
										<th scope="col" class="border-0">ich</th>
										<th scope="col" class="border-0">du</th>
										<th scope="col" class="border-0">Sie</th>
										<th scope="col" class="border-0">er/sie/es</th>
										<th scope="col" class="border-0">wir</th>
										<th scope="col" class="border-0">ihr</th>
										<th scope="col" class="border-0">sie/Sie</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="border-0">sein</th>
										<td class="border-0">war</td>
										<td class="border-0">warst</td>
										<td class="border-0">waren</td>
										<td class="border-0">war</td>
										<td class="border-0">waren</td>
										<td class="border-0">wart</td>
										<td class="border-0">waren</td>
									</tr>
									<tr>
										<th scope="row" class="border-0">haben</th>
										<td class="border-0">hatte</td>
										<td class="border-0">hattest</td>
										<td class="border-0">hatten</td>
										<td class="border-0">hatte</td>
										<td class="border-0">hatten</td>
										<td class="border-0">hattet</td>
										<td class="border-0">hatten</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>F4. Konnektoren: deshalb und weil</strong> <small>접속사: deshalb와 weil</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table">
								<tbody>
									<tr>
										<td>Ich trinke gern Kaffee. <strong>Deshalb</strong> <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>möchte</strong></span> ich eine Kaffeemaschine <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>haben</strong></span>.</td>
									</tr>
									<tr>
										<td>Man kann Julia eine Halskette schenken, weil sie gern Schmuck <span class="bg-light border border-secondary p-1 px-2 m-1 rounded"><strong>trägt</strong></span>.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>F5. Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Frohe Weihnachten!</td>
										<td>Gesegnete Weihnachten!</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Prosit Neujahr!</td>
										<td>Guten Rutsch ins Neujahr!</td>
									</tr>
									<tr>
										<td>Frohes neues Jahr!</td>
										<td>Gesegnetes neues Jahr!</td>
									</tr>
									<tr>
										<td>Frohe Ostern!</td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Alles Gute zum Geburtstag!</td>
									</tr>
									<tr>
										<td>Alles Liebe zum Geburtstag!</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td>Welches Datum haben wir heute?</td>
									</tr>
									<tr>
										<td>- Heute ist der fünfzehnte August.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Wann hast du Geburtstag?</td>
									</tr>
									<tr>
										<td>- Ich habe im Juli/ im Sommer / am 30. Juli Geburtstag.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Welches Datum haben wir heute?</td>
									</tr>
									<tr>
										<td>- Heute ist der fünfzehnte August.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td>Wann bist du geboren?</td>
									</tr>
									<tr>
										<td>- Ich bin am 30. Juli 2000 geboren.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Am fünfzehnten August ist unabhängiger Tag.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td>Welche Feiertage und Feste gibt es in Korea?</td>
									</tr>
									<tr>
										<td>- Wir haben Neujahr, Kindertag, unabhängigen Tag, Chusuk etc.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Wie feiert man in Korea?</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td>Mit wem feiern Sie?</td>
									</tr>
									<tr>
										<td>- Wir feiern mit Familie. / mit Verwandten. / mit Nachbarn. / mit Freunden.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td>Wo feiern Sie?</td>
									</tr>
									<tr>
										<td>- Wir feiern zu Hause. / im Restaurant oder in der Kneipe. / draußen.</td>
									</tr>
									<tr>
										<td>- Wir mieten einen Raum.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td>Was möchten Sie zum Geburtstag bekommen?</td>
									</tr>
									<tr>
										<td>- Ich freue mich [nicht] über das Geschenk.</td>
									</tr>
									<tr>
										<td>- Ich möchte zum Geburtstag (nicht) gern ein iPad haben.</td>
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