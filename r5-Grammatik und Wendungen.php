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
									<strong>Demonstrativpronomen</strong> <small>지시대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table table-striped text-center align-middle border-0">
								<thead>
									<tr>
										<th scope="col" width="20%">&nbsp;</th>
										<th scope="col" width="20%" class="text-primary">m</th>
										<th scope="col" width="20%" class="text-danger">f</th>
										<th scope="col" width="20%" class="text-purple">n</th>
										<th scope="col" width="20%" class="text-khaki">Pl.</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span></th>
										<td class="text-primary">der</td>
										<td class="text-danger">die</td>
										<td class="text-purple">das</td>
										<td class="text-khaki">die</td>
									</tr>
									<tr>
										<th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span></th>
										<td class="text-primary">den</td>
										<td class="text-danger">die</td>
										<td class="text-purple">das</td>
										<td class="text-khaki">die</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped" width="80%">
								<thead>
									<tr>
										<th scope="col">TIPP</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><small>지시대명사는 앞에 언급했던 명사를 다시 지시하며 언급할 때 사용되며, 각 명사의 성에 해당하는 정관사로 표현한다.</small></th>
									</tr>
									<tr>
										<td>Isst du gern Schweinebraten?<br>Ja, <strong>der</strong> schmeckt gut.<br><br>
Ich esse gern Pizza.<br><strong>Die</strong> ist lecker.<br><br>
Mein Lieblingsessen ist Hähnchen.<br><strong>Das</strong> schmeckt sehr gut.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>bestimmter Artikel</strong> <small>정관사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col" width="20%">&nbsp;</th>
										<th class="text-primary" scope="col" width="20%">m</th>
										<th class="text-danger" scope="col" width="20%">f</th>
										<th class="text-purple" scope="col" width="20%">n</th>
										<th class="text-khaki" scope="col" width="20%">Pl.</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span></th>
										<td class="text-primary">der Salat</td>
										<td class="text-danger">die Pizza</td>
										<td class="text-purple">das Steak</td>
										<td class="text-khaki">die Spaghettis</td>
									</tr>
									<tr>
										<th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span></th>
										<td class="text-primary">den Salat</td>
										<td class="text-danger">die Pizza</td>
										<td class="text-purple">das Steak</td>
										<td class="text-khaki">die Spaghettis</td>
									</tr>
									<tr>
										<td colspan="5">Ich bezahle <strong>den</strong> Salat.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>unbestimmter Artikel</strong> <small>부정(不定)관사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col" width="25%">&nbsp;</th>
										<th class="text-primary" scope="col" width="25%">m</th>
										<th class="text-danger" scope="col" width="25%">f</th>
										<th class="text-purple" scope="col" width="25%">n</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span></th>
										<td class="text-primary">ein Salat</td>
										<td class="text-danger">eine Pizza</td>
										<td class="text-purple">ein Steak</td>
									</tr>
									<tr>
										<th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span></th>
										<td class="text-primary"><strong>einen</strong> Salat</td>
										<td class="text-danger">eine Pizza</td>
										<td class="text-purple">ein Steak</td>
									</tr>
									<tr>
										<td colspan="4">Ich bekomme einen Salat.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>negativer Artikel</strong> <small>부정(否定)관사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col" width="20%">&nbsp;</th>
										<th class="text-primary" scope="col" width="20%">m</th>
										<th class="text-danger" scope="col" width="20%">f</th>
										<th class="text-purple" scope="col" width="20%">n</th>
										<th class="text-khaki" scope="col" width="20%">Pl.</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Nominativ<span class="tran"><small>&nbsp;주격</small></span></th>
										<td class="text-primary">kein Salat</td>
										<td class="text-danger">keine Pizza</td>
										<td class="text-purple">kein Steak</td>
										<td class="text-khaki">keine Spaghettis</td>
									</tr>
									<tr>
										<th scope="row">Akkusativ<span class="tran"><small>&nbsp;목적격</small></span></th>
										<td class="text-primary">keinen Salat</td>
										<td class="text-danger">keine Pizza</td>
										<td class="text-purple">kein Steak</td>
										<td class="text-khaki">keine Spaghettis</td>
									</tr>
									<tr>
										<td colspan="5">Ich nehme <strong>keinen</strong> Salat.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>Verbkonjugation: essen, trinken, nehmen, bekommen, möchten</strong> <small>동사의 변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-center table-striped">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">essen</th>
										<th scope="col">trinken</th>
										<th scope="col">nehmen</th>
										<th scope="col">bekommen</th>
										<th scope="col">möchten</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">ich</th>
										<td>ess<strong>e</strong></td>
										<td>trink<strong>e</strong></td>
										<td>nehm<strong>e</strong></td>
										<td>bekomm<strong>e</strong></td>
										<td>möcht<strong>e</strong></td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td><strong>i</strong>ss<strong>t</strong></td>
										<td>trink<strong>st</strong></td>
										<td>n<strong>immst</strong></td>
										<td>bekomm<strong>st</strong></td>
										<td>möchte<strong>st</strong></td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td><strong>i</strong>ss<strong>t</strong></td>
										<td>trink<strong>t</strong></td>
										<td>nimm<strong>t</strong></td>
										<td>bekomm<strong>t</strong></td>
										<td>möcht<strong>e</strong></td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>ess<strong>en</strong></td>
										<td>trink<strong>en</strong></td>
										<td>nehm<strong>en</strong></td>
										<td>bekomm<strong>en</strong></td>
										<td>möcht<strong>en</strong></td>
									</tr>
									<tr>
										<th scope="row">ihr</th>
										<td>ess<strong>t</strong></td>
										<td>trink<strong>t</strong></td>
										<td>nehm<strong>t</strong></td>
										<td>bekomm<strong>t</strong></td>
										<td>möcht<strong>et</strong></td>
									</tr>
									<tr>
										<th scope="row">sie/Sie</th>
										<td>ess<strong>en</strong></td>
										<td>trink<strong>en</strong></td>
										<td>nehm<strong>en</strong></td>
										<td>bekomm<strong>en</strong></td>
										<td>möcht<strong>en</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-pink mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse6" area-expanded="false" aria-controls="collapse6" id="6">
									<strong>Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse6" aria-divledby="heading6" data-parent="#accordionitms">
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Was isst/ trinkst du gern?</td>
										<td>- Ich esse / trinke gern ...</td>
									</tr>
									<tr>
										<td>Was ist dein Lieblingsessen/ Lieblingsgetränk?</td>
										<td>- Mein Lieblingsessen/ Lieblingsgetränk ist ...</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Isst/ Trinkst du gern ... ?</td>
										<td>- Ja, ich esse/ trinke gern ...</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><span class="text-white">- </span>Nein, ich esse/ trinke nicht so gern ...</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><span class="text-white">- </span>Nein, ich mag keinen, keine, kein, keine ....</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Was möchtest du?</td>
										<td>- Ich möchte/ nehme/ esse/ trinke</td>
									</tr>
									<tr>
										<td>Was nimmst du?</td>
										<td><span class="text-light">- </span>einen/ eine / ein ...</td>
									</tr>
									<tr>
										<td>Was darf es sein?</td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Was isst du gern?</td>
										<td>- Ich esse gern ...</td>
									</tr>
									<tr>
										<td>Was trinkst du gern?</td>
										<td>- Ich trinke ...</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Was bezahlen Sie?</td>
										<td>- Ich bezahle den/ die/ das ...</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Zusammen oder getrennt?</td>
										<td>- Zusammen / Getrennt, bitte.</td>
									</tr>
									<tr>
										<td>Stimmt so.</td>
										<td>&nbsp;</td>
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
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>