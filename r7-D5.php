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
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-2 so" id="1">
					ins Café gehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-2 so" id="2">
					in den Supermarkt gehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-2" id="3">
					ins Restaurant gehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-2 so" id="4">
					in die Buchhandlung gehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-2 so" id="5">
					ins Kino gehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-2" id="6">
					in die Sprachschule gehen.
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
						<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
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
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr class="border border-dark rounded bg-light">
									<th class="text-center align-middle border-0" scope="row" width="50">Bsp.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Herr Kim will Deutsch lernen. Dann kann er&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-1" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>김 선생님은 독일어를 배우려고 한다. 그럼 그는 언어학교에 가는 것이 좋다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">1.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Wir wollen essen gehen. Dann sollten wir&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-2" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>우리는 식사를 하려고 한다. 그럼 우리는 식당에 가는 것이 좋다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">2.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Frau Lee will Kuchen essen und Kaffee trinken. Dann sollte sie&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-3" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>이 선생님은 케잌을 먹고 커피를 마시려고 한다. 그럼 그녀는 카페에 가는 것이 좋다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">3.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Er will ein Buch kaufen. Dann sollte&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-4" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>그는 책을 사려고 한다. 그럼 그는 서점에 가는 것이 좋다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">4.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Wir wollen einen Film sehen. Dann sollten wir&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-5" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>우리는 영화를 보려고 한다. 그럼 우리는 영화관에 가는 것이 좋다.</small></span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="text-center align-middle border-0" scope="row" width="50">5.</th>
									<td class="align-middle border-0">
										<div class="p-2 m-0">
											Ich will Fleisch besorgen. Dann sollte ich&nbsp;
											<div class="itm-lst 1itm d-inline-block" id="lst-6" style="min-width: 30%; ">
													<h2 class="btn btn-warning btn-xl ttl d-block">
													▼ </h2>
											</div>
											<span class="tran"><br><small>나는 고기를 사려고 한다. 그럼 슈퍼마켓에 가는 것이 좋다.</small></span>
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
		<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?php echo($root); ?>js/popper.min.js"></script>
		<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
		<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
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
					name : "r7 D5",
					sprite : {
						"0": [1.19, 24.08],
						"1": [10.99, 1.53],
						"2": [14.71, 2.19],
						"4": [19.27, 2.18],
						"5": [23.65, 1.66]
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
				path : "<?php echo($root); ?>sounds/Reihe 7/",
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
							ion.sound.pause("r7 D5", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r7 D5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 D5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r7 D5", {
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
						var na = "";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$("#lst-1").removeClass("itm-lst");	// bsp 제외
						$(".itm-lst").each(function() {
							if($(this).find(".btn")) {
								$(this).find(".btn").addClass("text-success font-weight-bold");
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

					var pan = new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10"];
					pan = [1,2];
					var il = $("#itms>.itm").length;
					for(var p = 0; p < pan.length; p++) {
					var pani = "#lst-" + pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans" + pan[p])) {
								$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
								$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
								$("#lst-" + pan[p] + ">h2").remove();
								// $("#lst-" + pan[p]).parent().find(".tran").show();
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
<?php include "footer.php"; ?>
	</body>
</html>