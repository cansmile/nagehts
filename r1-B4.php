<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					Julia
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
					Thomas
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					Sabine
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
					Max
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
					Daniel
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					Christiane
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					Klaus
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					Inge
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
					<h2>Mädchen- oder Jungennamen?
					<small>여자 혹은 남자이름?</small>
					</h2>
					<h3>[ <small>단어를 알맞은 위치에 짝지우세요. 다중 선택이 되지만 한 위치에 한 단어만 배치됩니다.</small> ]</h3>
				</div>
				
			</div>
			<div class="row" id="lsts">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
					<table class="table text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-info"> 남자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="align-middle">1</th>
								<td class="align-middle">Martin</td>
								<td class="align-middle">Heinz</td>
								<td class="align-middle">Peter</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">2</th>
								<td class="align-middle">Franz</td>
								<td class="align-middle">Alberto</td>
								<td class="align-middle">Otto</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Frank</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">4</th>
								<td class="align-middle">Marko</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Rudolf</td>
							</tr>
							<tr>
								<th scope="row" class="align-middle">5</th>
								<td class="align-middle">Stefan</td>
								<td class="align-middle">Oliver</td>
								<td class="align-middle">Karl</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">6</th>
								<td class="align-middle">Andreas</td>
								<td class="align-middle">Johann</td>
								<td class="align-middle">Christian</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">7</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Anton</td>
								<td class="align-middle">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12 mt-1 itm-lst 1itm" id="lst-2">
					<table class="table text-center">
						<thead>
							<tr>
								<th colspan="4" class="text-center bg-danger"> 여자 Vornamen </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle" scope="row">1</th>
								<td class="align-middle">Birgit</td>
								<td class="align-middle">Hilde</td>
								<td class="align-middle">Luisa</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">2</th>
								<td class="align-middle">Barbara</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">Helga</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">3</th>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
								<td class="align-middle">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">4</th>
								<td class="align-middle">Monika</td>
								<td class="align-middle">Angelika</td>
								<td class="align-middle">Brigitte</td>
							</tr>
							<tr>
								<th class="align-middle" scope="row">5</th>
								<td class="align-middle">Maja</td>
								<td class="align-middle">Heike</td>
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
				<div class="col-12">
					<table class="table text-center">
						<thead>
							<th scope="col">
								Nach-(Familien)namen (Herr / Frau)
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Müller Bauer Wecker Schneider Koch Schmidt Schumacher</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	
	<div id="marg"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#chk").hide();
		$(document).ready(function() {
			ion.sound( {
				sounds : [ {
					name: "Cartoon_Boing",
				}
				],
				path : "sounds/",
				preload : true,
				volume : 1.0,
				multiplay : false
			}
			);
			// 정답확인
			$("#chk").on("click", function() {
				var na="";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
				}
				else {
					$("div.itm-lst").each(function(idx) {
						if( !$(this).find("button").length) {
							if(na !="") {
								na +=", ";
							}
							na +=(idx+1);
						}
					}
					);
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			}
			);
			<?php include "wahl.php";
			?>
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>