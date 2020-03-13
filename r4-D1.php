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
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="1">
					modern<span class="tran"><br><small>현대식의</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="2">
					günstig<span class="tran"><br><small>저렴한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="3">
					praktisch<span class="tran"><br><small>실용적인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="4">
					interessant<span class="tran"><br><small>흥미로운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="5">
					bequem<span class="tran"><br><small>편안한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="6">
					schön<span class="tran"><br><small>아름다운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="7">
					gut<span class="tran"><br><small>좋은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-danger so itm" id="8">
					groß<span class="tran"><br><small>큰</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="9">
					hässlich<span class="tran"><br><small>못생긴</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="10">
					unpraktisch<span class="tran"><br><small>비실용적인</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="11">
					klein<span class="tran"><br><small>작은</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="12">
					unbequem<span class="tran"><br><small>불편한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="13">
					teuer<span class="tran"><br><small>비싼</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="14">
					altmodisch<span class="tran"><br><small>구식의</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="15">
					langweilig<span class="tran"><br><small>지루한</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-primary so itm" id="16">
					schlecht<span class="tran"><br><small>나쁜</small></span>
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
					<h2> Ordnen Sie zu. </h2>
					<p> 알맞은 단어끼리 연결해보세요. <button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button></p>
					
				</div>
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h3>[ <small>붉은 색 단어는 왼편에 푸른 색 단어는 오른편에 넣으세요.<br>왼쪽 또는 오른쪽에 단어가 있을 때 짝이 맞지 않은 단어는 들어가지 않습니다.</small> ]</h3>
				</div>
			</div>
			<div class="row" id="lsts">
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
					<table class="table text-center">
						<tbody>
							<tr>
								<th scope="row" id="th-1">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-2">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-3">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-4">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-5">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-6">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-7">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-8">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-1">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 mt-1">
					<table class="table text-center">
						<tbody>
							<tr>
								<th scope="row" id="th-9">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-10">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-11">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-12">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-13">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-14">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-15">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
							</tr>
							<tr>
								<th scope="row" id="th-16">
									<div class="align-middle itm-lst 1itm py-0" style="min-height: 50px;" id="lst-2">
										<h1 class="btn btn-warning my-0 cmp btn-xl ttl d-block">
										▼ </h1>
									</div>
								</th>
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
	<script src="./js/taptocompare.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$("#chk").hide();
		$(".tran").hide();
		var cp=new Array();
		var cp=[14, 13, 10, 15, 12, 9, 16, 11, 6, 3, 8, 5, 2, 1, 4, 7];

		// 각 문장 재생 횟수 초기화
		var hm=new Array(), sen=new Array();
		$(".so").each(function() {
			hm[$(this).attr("id")]=0;
			sen[$(this).attr("id")]=$("#"+$(this).attr("id")).html();
		});

		$(document).ready(function() {

				ion.sound( {
					sounds : [ {
						name : "r4 D1",
						sprite : {
							"0": [.961, 77.992],
							"1": [9.466, 1.230],
							"2": [13.160, 1.274],
							"3": [16.627, 1.558],
							"4": [20.544, 1.426],
							"5": [24.285, 1.399],
							"6": [28.364, .865],
							"7": [33.072, .827],
							"8": [37.540, .890],
							"9": [41.339, 1.234],
							"10": [45.923, 1.542],
							"11": [50.878, 1.396],
							"12": [55.804, 1.497],
							"13": [60.380, 1.013],
							"14": [65.384, 1.272],
							"15": [70.510, 1.731],
							"16": [73.956, 1.255]
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
					path : "sounds/Reihe 4/",
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
							$("#"+obj.part).html(sen[obj.part]);
							if(hm[hmn] > 1) {
								$("#"+hmn).closest(".btn").find(".tran").show();
							}
						}
					}
					, ready_callback: function () {

						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2)=="_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r4 D1", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).text()==sen[$(this).attr("id")]) {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r4 D1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r4 D1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r4 D1", {
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
						)
						;


						// 정답확인
						$("#chk").on("click", function() {
							var na="";
							if($("#itms").find("button").length < 1) {
								$(".tran").show();
								
								// 정답 확인 div 상자 배경색 속성 없애기
								$(this).removeClass("btn-light ");

								$(".itm-lst").each(function() {
									if($(this).find(".so")) {
										$(this).find(".so").addClass("text-success");
									}
								});

								var qa = $(".so").length; // 전체 문항 수
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

						<?php include "wahl.php"; ?> // 준비되면 HV 보이기

						$("#th-1").find("h1").remove();
						$("#4").appendTo($("#th-1>div"));
						$("#4").addClass("btn-block btn-light");
						$("#th-9").find("h1").remove();
						$("#15").appendTo($("#th-9>div"));
						$("#15").addClass("btn-block btn-light");



						$("#0").show();
						$(".alert").hide();
					}
				}
				);
			
		});


	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>