<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionitms">
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-outline-danger mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse1" area-expanded="false" aria-controls="collapse1" id="1">
									<strong>W-Fragen und Antworten</strong> <small>W-의문사와 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<tbody>
									<tr>
										<td><strong>Wer</strong> ist das?</td>
										<td>Das ist mein Vater.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> alt sind Sie?</td>
										<td>Ich bin 43 Jahre alt.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> viele Geschwister hast du?</td>
										<td>Ich habe 3 Geschwister.</td>
									</tr>
									<tr>
										<td><strong>Wie</strong> ist Ihre Telefonnummer?</td>
										<td>Meine Telefonnummer ist 010-2777-3321</td>
									</tr>
									<tr>
										<td><strong>Was</strong> sind Sie von Beruf?</td>
										<td>Ich bin Taxifahrer.</td>
									</tr>
									<tr>
										<td><strong>Was</strong> macht sie?</td>
										<td>Sie ist Studentin.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-outline-orange mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse2" area-expanded="false" aria-controls="collapse2" id="2">
									<strong>Ja / Nein Fragen und Antworten</strong> <small>“예”, “아니요”로 시작하는 의문문과 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse2" aria-divledby="heading2" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<tbody>
									<tr>
										<td><strong>Ist</strong> das deine Mutter?</td>
										<td>Ja./ Nein, das ist meine Tante.</td>
									</tr>
									<tr>
										<td><strong>Haben</strong> Sie Kinder?</td>
										<td>Ja./ Nein, ich habe keine Kinder.</td>
									</tr>
									<tr>
										<td><strong>Sind</strong> Sie Lehrerin?</td>
										<td>Ja./ Nein, ich bin Ärztin.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-outline-warning mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse3" area-expanded="false" aria-controls="collapse3" id="3">
									<strong>Personalpronomen</strong> <small>인칭 대명사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse3" aria-divledby="heading3" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col">Singular</th>
										<th scope="col">Plural</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ich</td>
										<td>wir</td>
									</tr>
									<tr>
										<td>du</td>
										<td>ihr</td>
									</tr>
									<tr>
										<td>er/sie/es</td>
										<td>sie</td>
									</tr>
									<tr>
										<td>Sie</td>
										<td>Sie</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>Possessivartikel im Nominativ</strong> <small>주격의 소유관사</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="4">Singular</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ich</td>
										<td>mein-</td>
										<td>er</td>
										<td>sein-</td>
									</tr>
									<tr>
										<td>du</td>
										<td>dein-</td>
										<td>sie</td>
										<td>ihr-</td>
									</tr>
									<tr>
										<td>Sie</td>
										<td>Ihr-</td>
										<td>es</td>
										<td>sein-</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="2">Plural</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>sie</td>
										<td>ihr-</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped text-center align-middle">
								<thead>
									<tr>
										<th scope="col" colspan="3" class="text-center align-middle">Sg.</th>
										<th scope="col" rowspan="2" class="text-center align-middle">Pl.</th>
									</tr>
									<tr>
										<th scope="col" class="text-center align-middle">m</th>
										<th scope="col" class="text-center align-middle">f</th>
										<th scope="col" class="text-center align-middle">n</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>mein Vater</td>
										<td>mein Vater</td>
										<td>mein Kind</td>
										<td>meine Eltern</td>
									</tr>
									<tr>
										<td>dein Vater</td>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
									</tr>
									<tr>
										<td>deine Mutter</td>
										<td>deine Mutter</td>
										<td>Ihr Kind</td>
										<td>Ihre Eltern</td>
									</tr>
									<tr>
										<td>sein Vater</td>
										<td>sein Vater</td>
										<td>sein Kind</td>
										<td>seine Eltern</td>
									</tr>
									<tr>
										<td>ihr Vater</td>
										<td>ihre Mutter</td>
										<td>ihr Kind</td>
										<td>ihre Eltern</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>Verbkonjugation</strong> <small>동사변화</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-center align-middle table-striped">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">machen</th>
										<th scope="col">arbeiten</th>
										<th scope="col">studieren</th>
										<th scope="col">haben</th>
										<th scope="col">sein</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">ich</th>
										<td>mache</td>
										<td>mache</td>
										<td>studiere</td>
										<td>habe</td>
										<td>bin</td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td>mach<strong>st</strong></td>
										<td>arbeite<strong>st</strong></td>
										<td>studier<strong>st</strong></td>
										<td>ha<strong>st</strong></td>
										<td>bist</td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td>mach<strong>t</strong></td>
										<td>arbeite<strong>t</strong></td>
										<td>studier<strong>t</strong></td>
										<td>ha<strong>t</strong></td>
										<td>ist</td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>mach<strong>en</strong></td>
										<td>arbeit<strong>en</strong></td>
										<td>studier<strong>en</strong></td>
										<td>hab<strong>en</strong></td>
										<td>sind</td>
									</tr>
									<tr>
										<th scope="row">sind</th>
										<td>mach<strong>t</strong></td>
										<td>arbeite<strong>t</strong></td>
										<td>studier<strong>t</strong></td>
										<td>hab<strong>t</strong></td>
										<td>seid</td>
									</tr>
									<tr>
										<th scope="row">sie/Sie</th>
										<td>mach<strong>en</strong></td>
										<td>arbeit<strong>en</strong></td>
										<td>studier<strong>en</strong></td>
										<td>hab<strong>en</strong></td>
										<td>sind</td>
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
										<td width="50%">Wer ist das?</td>
										<td>- Das ist meine Mutter.</td>
									</tr>
									<tr>
										<td>Ist das dein Vater?</td>
										<td>- Ja. / Nein, das ist mein Onkel.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Wie alt sind Sie?</td>
										<td>- Ich bin 19 Jahre alt.</td>
									</tr>
									<tr>
										<td>Wie alt bist du?</td>
										<td>- Ich bin 35 Jahre alt.</td>
									</tr>
									<tr>
										<td>Wie alt ist er?</td>
										<td>- Er ist 20 Jahre alt.</td>
									</tr>
									<tr>
										<td>Wie alt ist sie?</td>
										<td>- Sie ist 22 Jahre alt.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Wie viele Geschwister haben Sie?</td>
										<td>- Ich habe einen Bruder.</td>
									</tr>
									<tr>
										<td>Wie viele Kinder hast du?</td>
										<td>- Ich habe keine Kinder.</td>
									</tr>
									<tr>
										<td>Haben Sie Kinder?</td>
										<td>- Ja. / Nein, ich habe keine Kinder.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Was ist Ihr Familienstand?</td>
										<td>- Ich bin ledig. / verheiratet. / geschieden. / verwitwet.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left bg-light">
								<tbody>
									<tr>
										<td width="50%">Was sind Sie von Beruf?</td>
										<td>- Ich bin Student.</td>
									</tr>
									<tr>
										<td>Was bist du von Beruf?</td>
										<td>- Ich bin Kellnerin.</td>
									</tr>
									<tr>
										<td>Was machen Sie?</td>
										<td>- Ich bin Lehrerin.</td>
									</tr>
									<tr>
										<td>Was machst du?</td>
										<td>- Ich bin Fußballspieler.</td>
									</tr>
								</tbody>
							</table>
							<table class="table text-left">
								<tbody>
									<tr>
										<td width="50%">Wie ist Ihre Adresse?</td>
										<td>- Meine Adresse ist ...</td>
									</tr>
									<tr>
										<td>Wie ist deine Telefonnummer?</td>
										<td>- Meine Telefonnummer ist ...</td>
									</tr>
									<tr>
										<td>Wie ist ihre Handynummer?</td>
										<td>- Ihre Handynummer ist ...</td>
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