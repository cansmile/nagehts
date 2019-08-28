<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Hören Sie die Gespräche und ergänzen Sie. <br>
							<small> 대화문을 듣고 채우세요. </small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣고, 대화문에 맞는 단어를 선택하여 알맞게 채우세요.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
							Salatteller<span class="tran"><br>&nbsp;<small>샐러드 접시</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
							Cola<span class="tran"><br>&nbsp;<small>콜라</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
							Schweinebraten mit Salat<span class="tran"><br>&nbsp;<small>샐러드 곁들인 돼지고기 구이 </small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="4">
							Mineralwasser<span class="tran"><br>&nbsp;<small>미네랄 물</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
							Bier<span class="tran"><br>&nbsp;<small>맥주</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							Currywurst mit Pommes<span class="tran"><br>&nbsp;<small>감자 곁들인 카레 소시지</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
							Rotwein<span class="tran"><br>&nbsp;<small>적 포도주</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
							Käsekuchen<span class="tran"><br>&nbsp;<small>치즈 케잌</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="9">
							Fischbraten mit Kartoffelsalat<span class="tran"><br>&nbsp;<small>감자 샐러드 곁들인 생선 구이</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
							Espresso<span class="tran"><br>&nbsp;<small>에스프레소</small>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="11">
							Kaffee<span class="tran"><br>&nbsp;<small>커피</small>
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col" class="text-center"><button type="button" id="12" class="so btn btn-outline-primary">▶</button> Hörtext 1</th>
									<th scope="col" class="text-center"><button type="button" id="13" class="so btn btn-outline-success">▶</button> Hörtext 2</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="m-0 p-0"><span class="tran text-left"><br>
<strong>Mama: Na, Tim, was möchtest du trinken?</strong><br>
<small>엄마: 글쎄, 팀, 무엇을 마실래?</small><br>
<strong>Kind: Aja, ich möchte gern eine große Cola trinken. Darf ich, Mama?</strong><br>
<small>아이: 음, 나는 큰 콜라를 마시고 싶어요. 그래도 되요, 엄마?</small><br>
<strong>Mama: Na klar! Was möchtest du essen? Hier ist die Currywurst sehr lecker.</strong><br>
<small>엄마: 물론이지! 무엇을 먹기 원하니? 여기 카레소시지가 맛있단다.</small><br>
<strong>Kind: Ach, echt? Ich liebe Currywurst mit Pommes.</strong><br>
<small>아이: 아, 정말요? 저는 감자칩과 함께 카레소시지가 좋아요.</small><br>
<strong>Mama: Ich nehme dann einen Salatteller und ein Mineralwasser.</strong><br>
<small>엄마: 그럼 나는 샐러드 한 접시하고 미네랄물을 먹어야겠다.</small><br>
</span></td>
									<td class="m-0 p-0"><span class="tran text-left"><br>
<strong>die Frau: Ah! das Restaurant ist wirklich schön. Und die Musik! Ausgezeichnet!</strong><br>
<small>여자: 아! 레스토랑 좋네요. 그리고 음악도! 정말 좋아요!</small><br>
<strong>der Mann: Ich freue mich, dass es dir gefällt. Was möchtest du? Ich lade dich ein.</strong><br>
<small>남자: 저도 기쁘네요, 당신이 좋아하니까. 뭐드시겠어요? 당신 먼저 고르세요. </small><br>
<strong>die Frau: Oh, danke. Das ist sehr nett von dir. Ich bin hier zum ersten Mal. Kannst du mir etwas empfehlen?</strong><br>
<small>여자: 오, 고마워요. 정말 좋아요. 저는 여기 처음이에요. 저에게 추천해 주실 수 있나요?</small><br>
<strong>der Mann: Du isst nur vegetarisch oder? Der Fischbraten hier ist sehr gut. Er wird dir gut schmecken.</strong><br>
<small>남자: 채식만 하시나요? 여기 생성 구이는 정말 좋아요. 맛있을거에요.</small><br>
<strong>die Frau: Gut! Ich nehme dann den Fischbraten mit Kartoffelsalat. Als Getränk nehme ich ein Glas Rotwein.</strong><br>
<small>여자: 좋아요! 저는 그런다음 감자샐러드와 함께 생선구이로 할래요. 음료로는 적포도주 한잔으로 할게요.</small><br>
<strong>der Mann: Gut, dann nehme ich einen Schweinebraten mit Salat und trinke ein Bier dazu. Und als Nachtisch?</strong><br>
<small>남자: 좋아요, 그럼 저는 샐러드와 함ㄲ게 구운 돼지 고기를 먹고 맥주를 마실게요. 그리고 디저트는요?</small><br>
<strong>die Frau: Einen Kaffee und einen Käsekuchen! Und was möchtest du?</strong><br>
<small>여자: 커피와 치즈 케이크! 그리고 당신은요?</small><br>
<strong>der Mann: Ich nehme einen Espresso.</strong><br>
<small>남자: 저는 에스프레소 한잔이요.</small><br>
</span></td>
								</tr>
								<tr>
									<td width="30%">
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
											<h2 class="btn btn-primary btn-xl ttl d-block">die Mutter</h2>&nbsp;
										</div>
									</td>
									<td width="30%">
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
											<h2 class="btn btn-success btn-xl ttl d-block">der Mann</h2>&nbsp;
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
											<h2 class="btn btn-primary btn-xl ttl d-block">das Kind</h2>&nbsp;
										</div>
									</td>
									<td>
										<div style="min-height: 240px;" class="rounded-top border border-secondary so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-4">
											<h2 class="btn btn-success btn-xl ttl d-block">die Frau</h2>&nbsp;
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

				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th scope="row">Die Mutter</th>
									<td>nimmt</td>
									<td>einen ...</td>
								</tr>
								<tr>
									<th scope="row">Das Kind</th>
									<td>isst</td>
									<td>eine ...</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>trinkt</td>
									<td>ein ...</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="text-center table table-striped">
							<tbody>
								<tr>
									<th scope="row">Der Mann</th>
									<td>nimmt</td>
									<td>einen ...</td>
								</tr>
								<tr>
									<th scope="row">Die Frau</th>
									<td>isst</td>
									<td>eine ...</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>trinkt</td>
									<td>ein ...</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- 정답화인 버튼 시작 -->
<!-- 				<div class="row">
					<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
						정답확인
					</div>
				</div> -->
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
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r5 D5",

						sprite : {
							"0": [2.8,91.5],
							"1": [36.46,.94],
							"2": [23.7,.27],
							"3": [81.39,1.52],
							"4": [37.87,1.1],
							"5": [95.16,1.1],
							"6": [33.33,1.1],
							"7": [78.62,.66],
							"8": [89.03,1],
							"9": [74.21,2.11],
							"10": [93.24,.97],
							"11": [87.56,.84],
							"12": [15,25],
							"13": [41.7,53]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 5/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							if(obj.part > 11) {
								$("#"+obj.part).html("▶");
							}
							$("#"+hmn).closest("th").find(".tran").show();									
						}

					}, ready_callback: function () {
						
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
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};
	
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 D5", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r5 D5", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 D5", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r5 D5", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});


			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-sm").text().appendTo($(this).closest("td"));
					$(".btn-sm").remove();
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});
		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>