<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Richtig oder falsch? Markieren Sie.<br>
							<small>어느 것이 옳은지 체크해보세요.</small>
							<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
							</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
							</button>
						</h2>
						<h3>[ <small>문제를 모두 풀고 확인하세요.</small> ]</h3>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
							<thead>
								<tr>
									<th scope="col" colspan="3" class="text-justify"><div class="border border-secondary p-4 m-4">In Korea isst man meistens dreimal warm.<span class="tran">&nbsp;<small>한국에서는 대부분 세 끼를 따뜻한 음식으로 먹는다.<br></small></span> Die Mutter kocht normalerweise.<span class="tran">&nbsp;<small>어머니가 보통 요리를 한다.<br></small></span> Es gibt morgens meistens eine warme Suppe, wie Dwaenjang Guk, eine Suppe aus Sojabohnenpaste mit Zwiebeln, Zucchini, Kartoffeln und Tofu.<span class="tran">&nbsp;<small>아침 식사엔 대체로 된장, 양파, 호박, 감자, 두부가 들어간 된장국과 같은 따뜻한 국이 있다.<br></small></span> Dazu gibt es natürlich Reis und vielleicht ein Spiegelei. Kimchi, eine koreanische Spezialität aus eingelegtem Chinakohl mit Chillipulver und Ingwer ist als Hauptbeilage immer dabei.<span class="tran">&nbsp;<small>거기에다가 밥은 당연히 있고 계란후라이가 있을 수도 있다. 발효시킨 배추, 고추가루, 생강으로 만든 한국의 특별식인 김치는 주반찬으로 항상 곁들여 먹는다.<br></small></span> Heutzutage isst man aber auch immer öfter nur Toast mit Beilagen sowie Müsli, wie in Deutschland.<span class="tran">&nbsp;<small>하지만 요즈음엔 점점 더 독일처럼 시리얼같은 것을 곁들여 토스트만 먹기도 한다.<br></small></span><br><br>Zu Mittag gibt es ebenfalls eine warme Mahlzeit.<span class="tran">&nbsp;<small>점심에도 마찬가지로 따뜻한 식사를 한다.<br></small></span> Meistens Reis mit verschiedenen Gemüsebeilagen, wie zum Beispiel Brokkoli, Spinat und natürlich Kimchi.<span class="tran">&nbsp;<small>대부분 밥을 먹는데, 예를 들어 김치는 물론이고 브로콜리, 시금치 같은 여러가지 채소반찬과 함께 먹는다.<br></small></span> Als Hauptspeise gibt es dann Fleisch (Rindfleischpfanne, Hühnerfleischpfanne oder Schweinefleischpfanne) mit Suppe.<span class="tran">&nbsp;<small>그리고 국과 주요리인 고기요리(불고기, 닭고기, 돼지고기)가 있다.<br></small></span> <br><br>Studierende essen normalerweise in der Mensa.<span class="tran">&nbsp;<small>학생들은 보통 학생식당에서 식사를 한다.<br></small></span> Abends findet die Familie Zeit, zusammen zu essen.<span class="tran">&nbsp;<small>저녁에는 가족이 함께 식사하는 시간을 가진다.<br></small></span> Da möchte man ja doch gern warm essen.<span class="tran">&nbsp;<small>그때도 물론 따뜻한 음식을 즐겨 먹는다.</small></span>
								</div></th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1.</td>
								<td class="text-justify">In Korea isst man immer dreimal warm.<span class="tran">&nbsp;<small>한국에서는 세 끼를 항상 따뜻한 음식을 먹는다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">richtig</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">2.</td>
								<td class="text-justify">Die Mutter kocht meistens.<span class="tran">&nbsp;<small>대체로 어머니가 요리를 한다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">richtig</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">3.</td>
								<td class="text-justify">Die Dwaenjang Guk ist aus Sojabohnenpaste mit Zwiebeln, Zucchini etc.<span class="tran">&nbsp;<small>된장국은 된장, 양파, 호박 등으로 만든다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">richtig</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">4.</td>
								<td class="text-justify">Die Koreaner essen morgens nie Toast.<span class="tran">&nbsp;<small>한국인은 아침에 토스트를 절대 먹지 않는다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">richtig</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">5.</td>
								<td class="text-justify">Mittags isst man warm, z.B. Reis mit verschiedenen Beilagen.<span class="tran">&nbsp;<small>점심에는 예를 들어 여러 가지 반찬을 곁들인 밥과 같은 따뜻한 식사를 한다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option9" autocomplete="off"><label for="option7">richtig</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option10" autocomplete="off"><label for="option8">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">6.</td>
								<td class="text-justify">Studierende essen immer in der Mensa.<span class="tran">&nbsp;<small>학생들은 항상 학생식당에서 식사를 한다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11" autocomplete="off"><label for="option7">richtig</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option12" autocomplete="off"><label for="option8">falsch</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">7.</td>
								<td class="text-justify">Die Familie isst abends zu Hause zusammen.<span class="tran">&nbsp;<small>저녁에는 가족이 집에서 함께 식사를 한다.<br></small></span></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option13" autocomplete="off"><label for="option7">richtig</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14" autocomplete="off"><label for="option8">falsch</label>
										</div>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
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

			var hm=new Array(), sen=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
				sen[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r5 C6",
					sprite : {
						"0": [0, 107.96]
					}
				}
				, {
					name: "dingdongdang",
						path: "sounds/"
				}
				, {
					name: "Cartoon_Boing",
						path: "sounds/"
				}
				],
				path : "sounds/Reihe 5/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					// 재생이 끝날 때 2번 이상이면 번역 보이기
					hmn=obj.part;
					hm[hmn]++;
					// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
					if(obj.part=="0") {
						$("#0").show();
						$("#0_p").hide();
						if(hm[hmn] > 1) {
							$(".tran").show();
						}
					}
					else {
						if(obj.part < 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest(".btn").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					$(".o").on("click", function() {
						ion.sound.play("dingdongdang");
					}
					);
					$(".x").on("click", function() {
						ion.sound.play("Cartoon_Boing");
					}
					);
					$("[data-toggle='popover']").popover( {
						delay : {
							'hide': 1000
						}
						,
						container : "body"
					}
					);
					$(".pop").click(function () {
						// 가장 먼저 지문에 'an' 넣기
						if ( !$(this).siblings().hasClass("an")) {
							$(this).addClass("an");
							$(this).addClass("btn-warning");
							$(this).parent().children().removeClass("btn-light");
						}
						;
						// 문제 풀이 정도 업데이트
						var perc=Math.round(($(".an").length / $(".q").length) * 100);
						$(".progress>.bar").attr("width", perc + "%;");
					}
					);
					// 팝업 내용 사라지기
					$(".pop").popover().click(function() {
						setTimeout(function() {
							$(".pop").popover('hide');
						}
						, 500);
					}
					);
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 C6", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 C6", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 C6", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 C6", {
								part: $(this).attr("id")
							}
							);
							// 전체 듣기 재생일 때는 일시정지 버튼 보이기
							if($(this).attr("id")=="0") {
								$(this).hide();
								$("#0_p").show();
							}
							;
						}
						;
					}
					);

					<?php include "wahl.php"; ?>
					// 정답확인
					$("#chk").on("click", function() {
						if ($(".an").length < $(".q").length) {
							var na = "";
							$(".q").each(function() {
								if (!$(this).find("div").hasClass("an")) {
									if (na != "") {
										na += ", ";
									}
									na += $(this).attr("id").substr(4);
								};
							});

							alert(na + "번 문제를 풀어주세요.");
						} else {
							$(".tran").show();
							$(".pop").each(function() {
								$(this).removeClass("btn-info");

								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass("btn-warning");
									$(this).addClass("btn-success");
								} else if ($(this).hasClass("o")) {
									$(this).addClass("btn-warning font-weight-bold");
								} else if ($(this).hasClass("an")) {
									$(this).addClass("btn-danger");
								} else {
									$(this).addClass("btn-light");
								};

								
							});

									// 정답 확인 div 상자 배경색 속성 없애기
									$(this).removeClass("btn-light ");

									var qa = $(".q").length; // 전체 문항 수
									var qr = $(".btn-success").length; // 맞춘 항목 수
									var pe = (qr / qa) * 100; // 정답 비율
									var tcl = "white"; // 기본 문자색

									// 분류 기준은 100%, 80%, 60%, 40%
									if(pe > 99) {
										var st = "원어민이세요?";
										var cl = "lime";
										var tcl = "dark";
									} else if(pe > 74) {
										var st = "어! 좀 하시는데요~^^";
										var cl = "success";
									} else if(pe > 49) {
										var st = "쓰읍~ 다시 해 보실까요?";
										var cl = "primary";
									} else {
										var st = "좀 더 분발해 주세요~";
										var cl = "danger";
									}

									$(this).addClass("btn-" + cl + " text-" + tcl);
									$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
						}
					}
					);
			$("#0").show();
			$(".alert").hide();
			$("#qst-1>div.o").addClass("an");
			$("#qst-1>div.o").addClass("btn-warning");
			$("#qst-1>div.o").removeClass("btn-light");
			}
		}
		);
	}
	);
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>