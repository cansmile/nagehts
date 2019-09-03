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
									<strong>W-Fragen und Antworten</strong> <small>W-의문사와 대답</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse1" aria-divledby="heading1" data-parent="#accordionitms">
							<table class="table text-center">
									<tr>
										<th scope="col" width="50%">묻기</th>
										<th class="bg-light" scope="col">반응</th>
									</tr>
									<tr>
										<th class="bg-light" scope="row"><strong>Woher</strong> kommen Sie?</th>
										<td>Ich komme <strong>aus</strong> Deutschland.</td>
									</tr>
									<tr>
										<th scope="row"><strong>Wo</strong> wohnen Sie?</th>
										<td class="bg-light">Ich wohne <strong>in</strong> München.</td>
									</tr>
									<tr>
										<th class="bg-light" scope="row">Wo <strong>liegt</strong> Ghana?</th>
										<td>Ghana liegt <strong>in</strong> Westafrika.</td>
									</tr>
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
							<table class="table text-center">
								<tr>
									<th scope="col" width="50%">묻기</th>
									<th class="bg-light" scope="col">반응</th>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><strong>Kommen</strong> Sie aus Japan?</th>
									<td>Ja(Nein), ich komme *(nicht) aus Japan.</td>
								</tr>
								<tr>
									<th scope="row"><strong>Wohnen</strong> Sie in Seoul?</th>
									<td class="bg-light">Ja(Nein), ich wohne *(nicht) in Seoul.</td>
								</tr>
								<tr>
									<th class="bg-light" scope="row"><strong>Liegt</strong> Frankreich in Europa?</th>
									<td>Ja, es liegt in Europa.</td>
								</tr>
								<tr>
									<th scope="row" colspan="2" class="text-right">* nicht<small>는 부정어로서 영어의 </small>not<small>을 의미한다</small>.</th>
								</tr>
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
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-center" width="20%" scope="col">Personalpronomen</th>
										<th class="text-center" width="20%" scope="col">kommen</th>
										<th class="text-center" width="20%" scope="col">wohnen</th>
										<th class="text-center" width="20%" scope="col">sprechen</th>
										<th class="text-center" width="20%" scope="col">liegen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-center" scope="row">ich</th>
										<td class="text-center">komm<strong>e</strong></td>
										<td class="text-center">wohn<strong>e</strong></td>
										<td class="text-center">sprech<strong>e</td></strong>
										<td class="text-center">lieg<strong>e</td></strong>
									</tr>
									<tr>
										<th class="text-center" scope="row">du</th>
										<td class="text-center">komm<strong>st</strong></td>
										<td class="text-center">wohn<strong>st</strong></td>
										<td class="text-center">sprich<strong>st</strong></td>
										<td class="text-center">lieg<strong>st</strong></td>
									</tr>
									<tr>
										<th class="text-center" scope="row">er/sie/es</th>
										<td class="text-center">komm<strong>t</strong></td>
										<td class="text-center">wohn<strong>t</strong></td>
										<td class="text-center">sprich<strong>t</strong></td>
										<td class="text-center">sprich<strong>t</strong></td>
									</tr>
									<tr>
										<th class="text-center" scope="row">Sie</th>
										<td class="text-center">komm<strong>en</strong></td>
										<td class="text-center">komm<strong>en</strong></td>
										<td class="text-center">sprech<strong>en</strong></td>
										<td class="text-center">lieg<strong>en</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading4">
							<h5 class="mb-0">
								<button class="btn btn-outline-primary mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse4" area-expanded="false" aria-controls="collapse4" id="4">
									<strong>Wortstellung</strong> <small>어순</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse4" aria-divledby="heading4" data-parent="#accordionitms">
							<table class="table text-center">
								<thead>
									<tr>
										<th width="25%" scope="col">&nbsp;</th>
										<th width="25%" scope="col" width="33%"><strong>Position 1</strong></th>
										<th width="25%" class="bg-light" width="33%" scope="col"><strong>Position 2</strong></th>
										<th width="25%" scope="col">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">W-Frage<small><br>w-의문문</small></th>
										<td class="bg-light" scope="row"><strong>Woher<br>Wo<br>Welche</strong> Sprachen</td>
										<td><strong>kommen<br>wohnst<br>sprechen</strong></td>
										<td class="bg-light"><strong>Sie?<br>du?<br>Sie?</strong></td>
									</tr>
									<tr>
										<th scope="row" class="bg-light">Ja/Nein Frage<small><br>예/아니오-의문문</small></th>
										<td><strong>Kommt<br>Liegt</strong></td>
										<td class="bg-light"><strong>er<br>Amerika</strong></td>
										<td><strong>aus Korea?<br>in Nordamerika?</strong></td>
									</tr>
									<tr>
										<th scope="row">Aussagesatz<small><br>평서문</small></th>
										<td class="bg-light" scope="row"><strong>Sie<br>Ich</strong></td>
										<td><strong>kommt<br>wohne</strong></td>
										<td class="bg-light"><strong>aus Italien.<br>in Gwangnaru.</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading5">
							<h5 class="mb-0">
								<button class="btn btn-outline-purple mt-1 mx-1 btn-block" type="button" data-toggle="collapse" data-target="#collapse5" area-expanded="false" aria-controls="collapse5" id="5">
									<strong>Redewendungen</strong> <small>어휘와 숙어</small>
								</button>
							</h5>
						</div>
						<div class="collapse" id="collapse5" aria-divledby="heading5" data-parent="#accordionitms">
							<table class="table text-left">
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Woher kommen Sie?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ich komme aus Korea.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Woher kommst du?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ich komme aus Korea.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Woher kommt sie?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Sie kommt aus Korea.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">&nbsp;</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">&nbsp;</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Kommen Sie aus Japan?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ja (Nein), ich komme (nicht) aus Japan.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Kommst du aus Deutschland?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ja (Nein), ich komme (nicht) aus Deutschland.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">Kommt sie aus Italien?</td>
										<td class="bg-light border border-dark border-top-0 border-bottom-0 border-left-0 border-right-0">- Ja (Nein), sie kommt (nicht) aus Italien.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wo wohnen Sie?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich wohne in Busan.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich wohne in Busan.</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich wohne in Busan.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wo wohnt er?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Er wohnt in Busan.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">&nbsp;</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">&nbsp;</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wohnen Sie in Guri?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja (Nein), ich wohne (nicht) in Guri.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wohnst du in Guri ?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja (Nein), ich wohne (nicht) in Guri.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wohnt sie in Guri?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja (Nein), sie wohnt (nicht) in Guri.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Welche Sprachen sprechen Sie?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich spreche Koreanisch, Englisch und Deutsch.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Welche Sprachen sprichst du?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ich spreche Japanisch.</td>
									</tr>
									<tr>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Welche Sprachen spricht er?</td>
										<td class="bg-light border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Er spricht Japanisch.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Wo liegt Korea?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Korea liegt in Asien.</td>
									</tr>
									<tr>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">Liegt Deutschland in Europa?</td>
										<td class="border border-dark border-left-0 border-top-0 border-right-0 border-bottom-0">- Ja, es liegt in Europa.</td>
									</tr>

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