<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans6 btn-sm btn-outline-dark itm so" id="1">
					salzig<span class="tran"><br /><small>짜요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-sm btn-outline-dark itm so" id="2">
					hart<span class="tran"><br /><small>딱딱해요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-sm btn-outline-dark itm so" id="3">
					zu süß<span class="tran"><br /><small>너무 달아요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-sm btn-outline-dark itm so" id="4">
					warm<span class="tran"><br /><small>미지근해요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-sm btn-outline-dark itm so" id="5">
					kalt<span class="tran"><br /><small>차가워요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-sm btn-outline-dark itm so" id="6">
					zu scharf<span class="tran"><br /><small>너무 매워요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-sm btn-outline-dark itm so" id="7">
					trocken<span class="tran"><br /><small>말랐어요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-sm btn-outline-dark itm so" id="8">
					nicht frisch<span class="tran"><br /><small>신선하지 않아요.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-sm btn-outline-dark itm so" id="9">
					zu bitter<span class="tran"><br /><small>너무 써요.</small></span>
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
					<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="4" class="align-middle text-center" width="20%"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E3-1.png" alt="Face" style="max-width: 120px; height: auto;"></th>
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
								<th scope="row" rowspan="2" class="align-middle text-center" width="20%"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E3-2.png" alt="Face" style="max-width: 120px; height: auto;"></th>
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
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table table-borderless">
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
									<span class="tran"><small>미지근해요.</small></span>
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
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="3"><span class="tran"><small>빵이</small><br></span>Das Brot ist</th>
								<td><span class="tran"><small>오래됐어요.</small><br></span>alt.</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>말랐어요.</small></span>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>딱딱해요.</small></span>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="3"><span class="tran"><small>고기가</small><br></span>Das Fleisch ist</th>
								<td><span class="tran"><small>너무 기름져요.</small><br></span>zu fettig.</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>차가워요.</small></span>
									<div class="itm-lst 1itm" id="lst-4">
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
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="2"><span class="tran"><small>맥주가</small><br></span>Das Bier ist</th>
								<td>
									<span class="tran"><small>너무 써요.</small></span>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td><span class="tran"><small>미지근해요.</small><br></span>warm.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="2"><span class="tran"><small>스프가</small><br></span>Die Suppe ist</th>
								<td>
									<span class="tran"><small>짜요.</small></span>
									<div class="itm-lst 1itm" id="lst-6">
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
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="2"><span class="tran"><small>소스가</small><br></span>Die Soße ist</th>
								<td><span class="tran"><small>짜요</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>너무 매워요.</small></span>
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
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="2"><span class="tran"><small>레몬에이드가</small><br></span>Die Limo ist</th>
								<td><span class="tran"><small>미지근해요.</small><br></span>warm.</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>너무 달아요.</small></span>
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row" rowspan="2"><span class="tran"><small>샐러드가</small><br></span>Der Salat ist</th>
								<td><span class="tran"><small>짜요.</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td>
									<span class="tran"><small>신선하지 않아요.</small></span>
									<div class="itm-lst 1itm" id="lst-9">
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
	
	<div id="marg"></div>
	<div id="last" class="d-none"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?=$root ?>js/popper.min.js"></script>
	<script src="./<?=$root ?>js/bootstrap.js"></script>
	<script src="./<?=$root ?>js/taptogrouph.js"></script>
	<script src="./<?=$root ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
		$("#0").hide();
		$("button.so>.tran").hide();
		$(".itm-lst").each(function() {
			$(this).closest("td").find(".tran").show();
		}
		);
		$("#chk").hide();
		$(document).ready(function() {
			// 소리 출력 전역 변수와 함수
			var sen=new Array(), pa=new Array(), he=new Array(), last;
			$(".so").each(function() {
				var t=$(this);
				var ti=t.attr("id");
				sen[ ti]=0;
				pa[ ti]=t.html();
			}
			);
			function stopAll() {
				$(".so").each(function() {
					$(this).html(pa[ $(this).attr("id")]);
				}
				);
			}
			// 문제 재생
			var nagehts=new Howl( {
				src: [ "./<?=$root ?>sounds/Reihe 5/r5 E3.mp3"],
					sprite: {
					"0": [39, 34859],
					"1": [6920, 1413],
					"2": [9482, 1096],
					"3": [12321, 1437],
					"4": [15615, 1078],
					"5": [19112, 1175],
					"6": [22184, 1771],
					"7": [25554, 1311],
					"8": [28588, 1435],
					"9": [33515, 1398]
				}
				,
				html5: true,
				volume: 1,
				format: "mp3",
				preload: true,
				onloaderror: function() {
					$(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
					console.log("다시 읽어주세요!");
				}
				,
				onload: function() {
					<?php include "wahl.php"; ?>
					// 정답확인
					$("#chk").on("click", function() {
						if($("#wahl").visibility !="visible"&& $(this).attr("id")=="chk") {
							$(".tran").show();
							$(this).attr("id", "done");
							$(".itm").each(function() {
								if($(this).parent().attr("id").length > 5) {
									var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
								}
								else {
									var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
								}
								$(".tran").show();
								if($(this).hasClass("ans"+ (a))) {
									$(this).addClass("text-success font-weight-bold");
								}
								else {
									$(this).addClass("text-warning font-weight-bold");
									$(this).find(".tran").show();
								}
								;
								if($(this).hasClass("text-warning")) {
									// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
									for(var i=1;
									i <=$(".itm-lst").length;
									i++) {
										if($(this).hasClass("ans"+i)) {
											$(eval('"#lst-'+ i + '"')).append("<button class=\"mt-1 mx-1 btn btn-md btn-outline-dark btn-block text-danger bg-white font-weight-bold\">"+ $(this).html() + "</button>");
										}
									}
								}
								;
							}
							);
							$(".pop").each(function() {
								$(this).removeClass("btn-info");
								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass("btn-warning");
									$(this).addClass("text-success font-weight-bold");
								}
								else if ($(this).hasClass("o")) {
									$(this).addClass("text-danger font-weight-bold");
								}
								else if ($(this).hasClass("an")) {
									$(this).addClass("btn-warning");
								}
								else {
									$(this).addClass("btn-light");
								}
								;
							}
							);
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");
							$(".itm-lst").each(function() {
								if($(this).find(".btn")) {
									$(this).find(".btn").addClass("text-success font-weight-bold");
								}
							}
							);
							var qa=$(".itm-lst").length; // 전체 문항 수
							var qr=$(".text-success").length; // 맞춘 항목 수
							var pe=(qr / qa) * 100; // 정답 비율
							var tcl="white"; // 기본 문자색
							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st="원어민이세요?";
								var cl="lime";
								var tcl="dark";
							}
							else if(pe > 74) {
								var st="어! 좀 하시는데요~^^";
								var cl="success";
							}
							else if(pe > 49) {
								var st="쓰읍~ 다시 해 보실까요?";
								var cl="primary";
							}
							else {
								var st="좀 더 분발해 주세요~";
								var cl="danger";
							}
							$(this).addClass("btn-"+ cl + " text-"+ tcl);
							$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
						}
					}
					);

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10"];
					pan=[];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#lst-"+ pan[p] + ">.itm").addClass("btn-block font-weight-bold");
								$("#lst-"+ pan[p] + ">.itm").addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								$("#lst-"+ pan[p]).closest("table").find(".tran").show();
							}
						}
						)
					}

					$("#0").show();
					$(".alert").hide();

					$(".so").on("click", function() {
						var t=$(this);
						var ti=t.attr("id");
						if (($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
							$("#last").text(ti);
							t.text("■");
							nagehts.seek();
							nagehts.play(ti);
							sen[ ti]++;
							last=ti;
							$("#cnt-"+ ti).text(sen[ ti]);
						}
						else if (last==ti && nagehts.playing($("div#last").text())) {
							$("#last").text("");
							t.html(pa[ ti]);
							nagehts.pause();
							sen[ ti]--;
							$("#cnt-"+ ti).text(sen[ ti]);
						}
					}
					);
				}
				,
				onend: function() {
					$("div#last").text("");
					stopAll();
					$("#cnt-"+last).text(sen[last]);
					if(last==0) {
						if(sen[last]==2) {
							$(".tran").show();
							$(".so").each(function() {
								pa[last]=$("#"+last).html();
							}
							);
						}
					}
					else if(sen[last]==2) {
						if($("#"+last).hasClass("itm")) {
							$("#"+last+">.tran").show();
						}
						$("#"+last).closest("tr").find(".tran").show();
						pa[last]=$("#"+last).html();
					}
				}
			}
			);
		}
		);

	</script>
	<?php include "footer.php"; ?>
</body>
</html>