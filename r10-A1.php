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
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="1">
					das Schwimmbad
					<span class="tran"><br><small>수영장</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark itm so" id="2">
					das Kino (Megabox)
					<span class="tran"><br><small>영화관 (메가박스)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="3">
					der Blumenladen (Schön)
					<span class="tran"><br><small>꽃집 (쉔)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="4">
					die Bank (Sparkasse)
					<span class="tran"><br><small>은행 (슈파카세)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-lg btn-outline-dark itm so" id="5">
					die Kirche (Frauenkirche)
					<span class="tran"><br><small>교회 (프라우엔교회)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="6">
					die Bäckerei (Achso)
					<span class="tran"><br><small>빵집 (악소)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-lg btn-outline-dark itm so" id="7">
					die Apotheke (Löwe)
					<span class="tran"><br><small>약국 (뢰베)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark itm so" id="8">
					der Supermarkt (Kaiser)
					<span class="tran"><br><small>슈퍼마켓 (카이저)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="9">
					die Post
					<span class="tran"><br><small>우체국</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark itm so" id="10">
					die Sprachschule (Translingua)
					<span class="tran"><br><small>어학원 (트란스링구아)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="11">
					der Park
					<span class="tran"><br><small>공원</small></span>
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
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-9 text-center"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-A1.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
					<table class="table border-0">
						<tbody>
							<tr>
								<td class="border-0 text-center">①</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">②</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">③</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">④</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑤</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑥</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑦</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑧</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑨</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑩</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-10">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 text-center">⑪</td>
								<td class="border-0">
									<div class="itm-lst 1itm" id="lst-11">
										<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk"> 정답확인 </div>
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

	// 각 문장 재생 횟수 초기화
	var hm=new Array(), sen=new Array();
	$(".so").each(function() {
		hm[$(this).attr("id")]=0;
		sen[$(this).attr("id")]=$("#"+$(this).attr("id")).html();
	});

	$(document).ready(function() {

				ion.sound( {
					sounds : [ {
						name : "r10 A1",
						sprite : {
							"0": [.479, 38.716],
							"1": [5.031, 1.341],
							"2": [7.717, 1.693],
							"3": [11.285, 1.742],
							"4": [14.712, 1.648],
							"5": [18.199, 1.884],
							"6": [21.713, 1.789],
							"7": [25.033, 1.850],
							"8": [28.463, 1.952],
							"9": [31.925, 1000],
							"10": [34.120, 2.368],
							"11": [38.017, .964]
						}
					}
					, {
						name: "dingdongdang",
							path: "<?php echo($root); ?>sounds/",
					}
					, {
						name: "Cartoon_Boing",
							path: "<?php echo($root); ?>sounds/",
					}
					],
					path : "<?php echo($root); ?>sounds/Reihe 10/",
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
								ion.sound.pause("r10 A1", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).text()==sen[$(this).attr("id")]) {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r10 A1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r10 A1", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r10 A1", {
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

						<?php include "wahl.php"; ?>
						
						var pan=new Array();
						// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
						pan=[];
						var il=$("#itms>.itm").length;
						for(var p=0;
						p < pan.length;
						p++) {
							var pani="#lst-"+ pan[p];
							$(".itm").each(function() {
								if($(this).hasClass("ans"+ pan[p])) {
									$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
									$("#"+ $(this).attr("id")).addClass("btn-block btn-light");
									$("#lst-"+ pan[p] + ">h2").remove();
								}
							}
							)
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