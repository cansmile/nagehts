<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
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
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
						HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
						❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="4" class="border-0" class="align-middle text-center border-0" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-1.png" alt="Face" style="max-width: 120px; height: auto;"></th>
								<td colspan="4" class="border-0">Schmeckt der Wein?</td>
							</tr>
							<tr>
								<td rowspan="3" class="border-0">Danke, ja,</td>
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
								<th scope="row" rowspan="2" class="border-0" class="align-middle text-center border-0" width="20%"><img src="./images/Reihe 5/Reihe-5-E3-2.png" alt="Face" style="max-width: 120px; height: auto;"></th>
								<td colspan="4" class="border-0">Schmeckt der Wein?</td>
							</tr>
							<tr>
								<td colspan="4" class="border-0">Nein, er ist sauer.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>와인이</small><br></span>Der Wein ist</th>
								<td class="border-0"><span class="tran"><small>셔요.</small><br></span>sauer.</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>너무 달아요.</small><br></span>süß.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>따뜻해요.</small></span>
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
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>빵이</small><br></span>Das Brot ist</th>
								<td class="border-0"><span class="tran"><small>오래됐어요.</small><br></span>alt.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>말랐어요.</small></span>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0">
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
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="3" class="border-0"><span class="tran"><small>고기가</small><br></span>Das Fleisch ist</th>
								<td class="border-0"><span class="tran"><small>너무 기름져요.</small><br></span>zu fettig.</td>
							</tr>
							<tr>
								<td class="border-0">
									<span class="tran"><small>차가워요.</small></span>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>말랐어요.</small><br></span>trocken.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>맥주가</small><br></span>Das Bier ist</th>
								<td class="border-0">
									<span class="tran"><small>너무 써요.</small></span>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>따뜻해요.</small><br></span>warm.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>스프가</small><br></span>Die Suppe ist</th>
								<td class="border-0">
									<span class="tran"><small>짜요.</small></span>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0"><span class="tran"><small>너무 매워요</small><br></span>zu scharf.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>소스가</small><br></span>Die Soße ist</th>
								<td class="border-0"><span class="tran"><small>짜요</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td class="border-0">
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
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>레몬에이드가</small><br></span>Die Limo ist</th>
								<td class="border-0"><span class="tran"><small>미지근해요.</small><br></span>warm.</td>
							</tr>
							<tr>
								<td class="border-0">
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
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="2" class="border-0"><span class="tran"><small>샐러드가</small><br></span>Der Salat ist</th>
								<td class="border-0"><span class="tran"><small>짜요.</small><br></span>salzig.</td>
							</tr>
							<tr>
								<td class="border-0">
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
		$(".itm-lst").each(function() {
			$(this).closest("td").find(".tran").show();
		});
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
					name : "r5 E3",
					sprite : {
						"0": [.5, 35.65],
						"1": [7.42, 1],
						"2": [9.9, 1.33],
						"3": [12.78, 1.13],
						"4": [15.96, 1],
						"5": [19.43, 1.2],
						"6": [22.59, 1.5],
						"7": [26.09, 1],
						"8": [28.9, 1.3],
						"9": [33.93, 1.36]
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
							ion.sound.pause("r5 E3", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 E3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 E3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 E3", {
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
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(".tran").show();
					$(this).attr("id", "done");
					$(".itm").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
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
							for(var i = 1; i <= $(".itm-lst").length; i++) {
								if($(this).hasClass("ans"+i)) {
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-md btn-outline-dark btn-block text-danger bg-white font-weight-bold\">" + $(this).html() + "</button>");
								}
							}
						};

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
						$(this).find(".btn").addClass("text-success");
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
				} else if(pe > 79) {
					var st = "어! 좀 하시는데요~^^";
					var cl = "success";
				} else if(pe > 59) {
					var st = "쓰읍~ 다시 해 보실까요";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
			}
			}
			);
		


			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10"];
			pan = [];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#lst-" + pan[p] + ">.itm").addClass("btn-block font-weight-bold");
						$("#lst-" + pan[p] + ">.itm").addClass("border-0");
						$("#lst-" + pan[p] + ">h2").remove();
						$("#lst-" + pan[p]).closest("table").find(".tran").show();
					}
				})
			}
	


					$("#0").show();
					$(".alert").hide();
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