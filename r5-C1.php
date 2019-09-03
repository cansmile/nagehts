<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<section>
	<div class="container">	
		<div class="row">
			<div class="col">
				<table class="table">
					<tbody>
						<tr>
							<th class="text-center align-middle" scope="col" colspan="2"><img src="./images/Reihe 5/Reihe-5-C1-1.png" alt="Was isst er/sie?" style="max-width: 240px; height: auto;"></th>
							<th class="text-center align-middle" scope="col" colspan="2"><img src="./images/Reihe 5/Reihe-5-C1-2.png" alt="Was isst er/sie?" style="max-width: 240px; height: auto;"></th>
							<th class="text-center align-middle" scope="col" colspan="2"><img src="./images/Reihe 5/Reihe-5-C1-3.png" alt="Was isst er/sie?" style="max-width: 240px; height: auto;"></th>
						</tr>
						<tr>
							<td colspan="2" class="text-center">Sie isst (einen) Salat.</td>
							<td colspan="2" class="text-center">Er trinkt (ein) Bier.</td>
							<td colspan="2" class="text-center">Sie isst (eine) Suppe.</td>
						</tr>
						<tr>
							<td colspan="3">
								<table class="table-striped table text-center">
									<tbody>
										<tr>
											<th scope="row">ich</th>
											<td>esse</td>
											<td>Akk.</td>
										</tr>
										<tr>
											<th scope="row">du</th>
											<td>isst</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<th scope="row">Sie</th>
											<td>essen</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<th scope="row">er/sie</th>
											<td>isst</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
							<td colspan="3">
								<table class="table-striped table text-center">
									<tbody>
										<tr>
											<th scope="row">ich</th>
											<td>trinke</td>
											<td>Akk.</td>
										</tr>
										<tr>
											<th scope="row">du</th>
											<td>trinkst</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<th scope="row">Sie</th>
											<td>trinken</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<th scope="row">er/sie</th>
											<td>trinkt</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th scope="col" colspan="5">unbestimmter Artikel</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">&nbsp;</th>
							<td class="text-primary"><strong>m</strong></td>
							<td class="text-danger"><strong>f</strong></td>
							<td class="text-purple"><strong>n</strong></td>
							<td class="text-khaki"><strong>Pl.</strong></td>
						</tr>
						<tr>
							<th scope="row">Nominativ</th>
							<td class="text-primary">ein Kaffee</td>
							<td class="text-danger">eine Wurst</td>
							<td class="text-purple">ein Eis</td>
							<td class="text-khaki">Spaghettis</td>
						</tr>
						<tr>
							<th scope="row">Akkusativ</th>
							<td class="text-primary">einen Kaffee</td>
							<td class="text-danger">eine Wurst</td>
							<td class="text-purple">ein Eis</td>
							<td class="text-khaki">Spaghettis</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<? } ?>
<?php include "footer.php"; ?>

	</body>
</html>