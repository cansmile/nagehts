<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="1">
					1
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="2">
					2
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="3">
					3
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="4">
					4
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="5">
					5
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="6">
					a
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm px-3" id="7">
					b
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm px-3" id="8">
					c
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm px-3" id="9">
					d
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm px-3" id="10">
					e
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
						<h2>[ <small>알파벳을] 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러도 번역은 나오지 않습니다. 정답확인하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 p-2 border-0 align-middle text-center" style="line-height: 5em;"><table class="table">
								<tbody>
									<tr>
										<th scope="row" class="text-center align-middle border-0" width="30"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>A</strong></span></th>
										<td class="text-center align-middle border-0" width="250">
											<img src="./images/Reihe 9/Reihe-9-C1-1.png" alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-1">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-6">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
									</tr>
								</tbody>
							</table></div>
							<div class="col-sm-12 col-md-12 col-lg-6 p-2 border-0 align-middle text-center" style="line-height: 5em;"><table class="table">
								<tbody>
									<tr>
										<th scope="row" class="text-center align-middle border-0" width="30"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>B</strong></span></th>
										<td class="text-center align-middle border-0" width="250">
											<img src="./images/Reihe 9/Reihe-9-C1-2.png" alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-2">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-7">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
									</tr>
								</tbody>
							</table></div>
							<div class="col-sm-12 col-md-12 col-lg-6 p-2 border-0 align-middle text-center" style="line-height: 5em;"><table class="table">
								<tbody>
									<tr>
										<th scope="row" class="text-center align-middle border-0" width="30"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>C</strong></span></th>
										<td class="text-center align-middle border-0" width="250">
											<img src="./images/Reihe 9/Reihe-9-C1-3.png" alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-3">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-8">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
									</tr>
								</tbody>
							</table></div>
							<div class="col-sm-12 col-md-12 col-lg-6 p-2 border-0 align-middle text-center" style="line-height: 5em;"><table class="table">
								<tbody>
									<tr>
										<th scope="row" class="text-center align-middle border-0" width="30"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>D</strong></span></th>
										<td class="text-center align-middle border-0" width="250">
											<img src="./images/Reihe 9/Reihe-9-C1-4.png" alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-4">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-9">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
									</tr>
								</tbody>
							</table></div>
							<div class="col-sm-12 col-md-12 col-lg-6 p-2 border-0 align-middle text-center" style="line-height: 5em;"><table class="table">
								<tbody>
									<tr>
										<th scope="row" class="text-center align-middle border-0" width="30"><span class="p-2 bg-lime px-3 border border-success rounded-circle"><strong>E</strong></span></th>
										<td class="text-center align-middle border-0" width="250">
											<img src="./images/Reihe 9/Reihe-9-C1-5.png" alt="Wer spricht mit wem?" style="max-width: 100%; height: auto;">
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-5">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
										<td class="text-center align-middle border-0">
											<div class="itm-lst 1itm" id="lst-10">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
											</div>
										</td>
									</tr>
								</tbody>
							</table></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-12 p-2 border border-light"><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>1</strong></span><br>Die Verkäuferin zeigt der Mutter und dem Kind ein Wertkauftelefon.<span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="12" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>2</strong></span><br>Eine Kursteilnehmerin stellt dem Lehrer eine Frage nach dem Dativ.<span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="13" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>3</strong></span><br>Der Vater will seiner Tochter beim Sprachenlernen helfen.<span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="14" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>4</strong></span><br>Tim schenkt seiner Freundin zum Valentinstag eine Halskette.<span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="15" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>5</strong></span><br>Die Oma kauft ihrem Enkelkind zum Geburtstag ein Fahrrad.<span class="tran"><br><small></small></span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-12 p-2 border border-light"><button type="button" id="16" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>a</strong></span><br>Deshalb kauft er ihr ein Wörterbuch.<br><span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>b</strong></span><br>Er erklärt ihr den Dativ.<br><span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>c</strong></span><br>Er schenkt ihr die Kette.<br><span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>d</strong></span><br>Sie zeigt ihnen ein Wertkauftelefon<br><span class="tran"><br><small></small></span>
							</div>
							<div class="col-12 p-2 border border-light"><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button><span class="p-1 bg-dark text-white border border-dark rounded mb-2 px-2"><strong>e</strong></span><br>Sie will ihm das Fahrrad schenken.<br><span class="tran"><br><small></small></span>
							</div>
						</div>
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
	$("#chk").hide();

	$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm=new Array(), sen=new Array();
				for(i=0;
				i < $(".so").length;
				i++) {
					hm[i]=0;
					sen[i]=0;
				}
				ion.sound( {
					sounds : [ {
						name : "r9 C1",
						sprite : {
							"0": [.9, 99.07],
							"11": [11.85, 7.33],
							"12": [28.72, 7.24],
							"13": [44.28, 7],
							"14": [58.75, 7.18],
							"15": [75.56, 7.3],
							"16": [21.21, 4.5],
							"17": [37.71, 4.77],
							"18": [52.35, 4.25],
							"19": [67.31, 5.8],
							"20": [84.35, 5.65]
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
					path : "sounds/Reihe 9/",
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
							if(obj.part > 9) {
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
								ion.sound.pause("r9 C1", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).html()=="▶") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r9 C1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r9 C1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r9 C1", {
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

					// 정답확인
					$("#chk").on("click", function() {
						var na = "";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							$(".itm-lst").each(function() {
								if($(this).find("button.btn")) {
									$(this).find("button.btn").addClass("text-success");
								}
							});

							var qa = $(".itm-lst").length; // 전체 문항 수
							var qr = $(".text-success").length; // 맞춘 항목 수
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

							$(".btn-lg").text().appendTo($(this).closest("td"));
							$(".btn-lg").remove();
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

				<?php include "wahl.php"; ?>

					var pan = new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10"];
					pan = [1,6];
					var il = $("#itms>.itm").length;
					for(var p = 0; p < pan.length; p++) {
					var pani = "#lst-" + pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans" + pan[p])) {
								$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
								$("#" + $(this).attr("id")).addClass("btn-block");
								$("#" + $(this).attr("id")).addClass("btn-light");
								$("#lst-" + pan[p] + ">h2").remove();
								// $("#lst-" + pan[p]).closest("tr").find(".tran").show();
							}
						})
					}



						$("#0").show();
						$(".alert").hide();
					}
				}
				);
			});
			
		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>