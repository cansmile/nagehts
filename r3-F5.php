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
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
					Korea
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="2">
					Mexiko
					</button>
					<button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so" id="3">
					Griechenland
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="4">
					Franzose
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="5">
					Ungarin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans15 btn-md btn-outline-dark itm so" id="6">
					Indien
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="7">
					Polen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="8">
					Ungarn
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="9">
					Deutschland
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so" id="10">
					Mexikaner
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="11">
					Polin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans14 btn-md btn-outline-dark itm so" id="12">
					Griechin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="13">
					Frankreich
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="14">
					Deutscher
					</button>
					<button type="button" class="mt-1 mx-1 btn ans16 btn-md btn-outline-dark itm so" id="15">
					Inder
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="16">
					Koreanerin
					</button>
				</div>
			</div>
		</div>
	</section>
		<section>
			<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					<h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
				</div>
			</div>
				<div class="row">
					<div class="col-12 mb-4 mt-2 border border-dark rounded p-2">
						<table class="table border-0 text-center">
							<tbody>
								<tr>
									<td class="border-0">Vivien(Ungarn)</td>
									<td class="border-0">Sumi (Korea)</td>
								</tr>
								<tr>
									<td class="border-0">Pierre (Frankreich)</td>
									<td class="border-0">Diana (Griechenland)</td>
								</tr>
								<tr>
									<td class="border-0">Max (Deutschland)</td>
									<td class="border-0">Carlos (Mexiko)</td>
								</tr>
								<tr>
									<td class="border-0">Julia (Polen)</td>
									<td class="border-0">Amit (Indien)</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-12 mb-4 mt-2">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center" width="50%"><img src="./images/sym_frau.png" alt="Frau" style="max-height: 140px; width: auto;"></th>
									<th scope="col" class="text-center" width="50%"><img src="./images/sym_mann.png" alt="Mann" style="max-height: 140px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="line-height: 350%;"><button type="button" id="17" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Vivien kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Sie ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>비비안은 헝가리 출신이에요. 그녀는 헝가리인이에요.</small></span>
									</td>
									<td style="line-height: 350%;"><button type="button" id="18" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Pierre kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Er ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>피에르는 프랑스 출신이에요. 그는 프랑스인이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td style="line-height: 350%;"><button type="button" id="19" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Sumi kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Sie ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>수미는 한국 출신이에요. 그녀는 한국인이에요.</small></span>
									</td>
									<td style="line-height: 350%;"><button type="button" id="20" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Max kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Er ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>막스는 독일 출신이고, 독일인이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td style="line-height: 350%;"><button type="button" id="21" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Julia kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Sie ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>율리아는 폴란드 출신이고 폴란드인이에요.</small></span>
									</td>
									<td style="line-height: 350%;"><button type="button" id="22" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Carlos kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Er ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-12">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>카를로스는 멕시코 출신이에요. 그는 멕시코인이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td style="line-height: 350%;"><button type="button" id="23" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Diana kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-13">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Sie ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-14">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>다이아나는 그리스 출신이에요. 그녀는 그리스인이에요.</small></span>
									</td>
									<td style="line-height: 350%;"><button type="button" id="24" class="so btn btn-outline-dark btn-sm mr-1">▶</button>
										Amit kommt aus
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-15">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.<br>
										Er ist
										<div class="itm-lst 1itm d-inline-block px-0 mr-1" style="min-width: 200px;" id="lst-16">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
										.
										<span class="tran"><br><small>아밋은 인도 출신이에요. 그는 인도인이에요.</small></span>
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

<!-- 여러개의 답이 인정되어야 하는 경우는 배열로 처리 -->
<!-- 확인하는 단계에서는 배열일 경우 모두 대치 -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 각 문장 재생 횟수 초기화
			var hm=new Array(), sen=new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")]=0;
				sen[$(this).attr("id")]=$("#"+$(this).attr("id")).html();
			});

			ion.sound( {
				sounds : [ {
					name : "r3 F5",
					sprite : {
						"0": [.297, 50.285],
						"1": [8.994, .726],
						"2": [40.955, .769],
						"3": [22.201, .895],
						"4": [31.350, .877],
						"5": [4.333, .794],
						"6": [47.757, .741],
						"7": [15.692, .672],
						"8": [2.002, .751],
						"9": [35.161, .818],
						"10": [43.505, 1.134],
						"11": [17.941, .699],
						"12": [24.561, .750],
						"13": [29.064, .798],
						"14": [37.351, .646],
						"15": [49.710, .494],
						"16": [11.327, 1.001],
						"17": [.534, 4.874],
						"18": [27.580, 4.700],
						"19": [7.728, 4.737],
						"20": [33.946, 4.200],
						"21": [14.381, 4.368],
						"22": [39.586, 5.111],
						"23": [21.091, 4.197],
						"24": [46.184, 4.010]
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
				path : "sounds/Reihe 3/",
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
								$("#"+hmn).closest("td").find(".tran").show();
							}
						}
					}
				, ready_callback: function () {

					$(".so").on("click", function () {
							if($(this).attr("id").substr(-2)=="_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r3 F5", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).text()==sen[$(this).attr("id")]) {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r3 F5", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r3 F5", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r3 F5", {
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
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

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
					$("#0").show();
					$(".alert").hide();

					<?php include "wahl.php"; ?>

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14",15,16];
					pan=[1];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold text-center pl-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}
		
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