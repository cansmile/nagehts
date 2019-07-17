<?php include "header.php"; ?>
	<body>
		<style>
			.itm-lst>button:after {content: ".";}
			.itm-lst>button {word-break: keep-all;}
		</style>
<?php include "nav.php"; ?>
<section>
	<div class="container">
					<!-- 고르는 아이템들 -->
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]</h2>
			</div>
		</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<tbody>
					<tr>
						<th scope="row" rowspan="4" class="align-middle text-center" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-1.png" alt="Face" style="max-width: 120px; height: auto;"></th>
						<td colspan="4">Schmeckt der Wein?</td>
					</tr>
					<tr>
						<td rowspan="3">Danke, ja,</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">er</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">ist</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">köstlich.</td>
					</tr>
					<tr>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">…</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">schmeckt</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">sehr gut.</td>
					</tr>
					<tr>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">&nbsp;</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">&nbsp;</td>
						<td class="border border-secondary border-right-0 border-top-0 border-bottom-0">gut.</td>
					</tr>
					<tr>
						<th scope="row" rowspan="2" class="align-middle text-center" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-2.png" alt="Face" style="max-width: 120px; height: auto;"></th>
						<td colspan="4">Schmeckt der Wein?</td>
					</tr>
					<tr>
						<td colspan="4">Nein, er ist sauer.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
		<div class="row">
			<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm" id="1">
					<span class="tran"><small>짜요.</small><br></span>salzig
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="2">
					<span class="tran"><small>딱딱해요.</small><br></span>hart
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm" id="3">
					<span class="tran"><small>너무 달아요.</small><br></span>zu süß
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm" id="4">
					<span class="tran"><small>따뜻해요.</small><br></span>warm
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm" id="5">
					<span class="tran"><small>차가워요.</small><br></span>kalt
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm" id="6">
					<span class="tran"><small>너무 매워요.</small><br></span>zu scharf
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm" id="7">
					<span class="tran"><small>말랐어요.</small><br></span>trocken
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm" id="8">
					<span class="tran"><small>신선하지 않아요.</small><br></span>nicht frisch
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm" id="9">
					<span class="tran"><small>너무 써요.</small><br></span>zu bitter
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="3"><span class="tran"><small>와인이</small><br></span>Der Wein ist</th>
							<td><span class="tran"><small>셔요.</small><br></span>sauer.</td>
						</tr>
						<tr>
							<td><span class="tran"><small>달아요.</small><br></span>süß.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="3"><span class="tran"><small>빵이</small><br></span>Das Brot ist</th>
							<td><span class="tran"><small>오래됐어요.</small><br></span>alt.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="3"><span class="tran"><small>고기가</small><br></span>Das Fleisch ist</th>
							<td><span class="tran"><small>너무 기름져요.</small><br></span>zu fettig.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td><span class="tran"><small>말랐어요.</small><br></span>trocken.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="2"><span class="tran"><small>맥주가</small><br></span>Das Bier ist</th>
							<td>
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td><span class="tran"><small>따뜻해요.</small><br></span>warm.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="2"><span class="tran"><small>스프가</small><br></span>Die Suppe ist</th>
							<td>
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td><span class="tran"><small>너무 매워요</small><br></span>zu scharf.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="2"><span class="tran"><small>소스가</small><br></span>Die Soße ist</th>
							<td><span class="tran"><small>짜요</small><br></span>salzig.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="2"><span class="tran"><small>레몬에이드가</small><br></span>Die Limo ist</th>
							<td><span class="tran"><small>미지근해요.</small><br></span>warm.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row" rowspan="2"><span class="tran"><small>샐러드가</small><br></span>Der Salat ist</th>
							<td><span class="tran"><small>짜요.</small><br></span>salzig.</td>
						</tr>
						<tr>
							<td>
								<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
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
	</div>
</section>
		

		
<?php include "footer.php"; ?>
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
				ion.sound({
					sounds : [{
						name : "Bama_Country_Country",
					}, {
						name : "Cartoon_Boing",
					}],
					path : "sounds/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				

		}
	});
	
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
			alert("모든 문제를 풀어주세요!");
		}
	});
});
		</script>
		<!-- ion.sound finished -->
	</body>
</html>