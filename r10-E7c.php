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
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm px-3" id="1">
				Hauptstraße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm px-3" id="2">
				Kirchenweg
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm px-3" id="3">
				Leipziger Staße
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="4">
				links
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm px-3" id="5">
				links
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm px-3" id="6">
				rechten
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm px-3" id="7">
				rechts
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
						<h2>[ <small>보기를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
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
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-E7-1.png" alt="Wo ist das?" style="max-width: 100%; height: auto;"></div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col" class="border-0 font-weight-bold bg-light text-black">Dialog 3: An der Bushaltestelle:<span class="tran"><br><small>버스정류장에서</small><br></span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button></td>
									<td class="border-0">
										Entschuldigen Sie, wo finde ich hier die Frauenkirche?<span class="tran"><br><small>실례합니다만, 프라우엔교회가 어딘가요?</small><br></span>
									</td>
								</tr>
								<tr>
								<td class="border-0"><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button></td>
									<td class="border-0" style="line-height: 250%;">
										Die Frauenkirche?<span class="tran"><br><small>프라우엔교회요?</small><br></span> Die ist in der Luther Straße.<span class="tran"><br><small>루터슈트라세에 있어요.</small><br></span> Sie gehen hier die <div class="itm-lst 1itm d-inline-block mx-1" id="lst-1">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div> geradeaus entlang und biegen leicht nach <div class="itm-lst 1itm d-inline-block mx-1" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div>.<span class="tran"><br><small>여기서 하우프트슈트라세를 따라 곧장 가다가 왼쪽으로 조금만 가세요.</small><br></span> Die erste Straße biegen Sie sofort nach <div class="itm-lst 1itm d-inline-block mx-1" id="lst-3">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div> in den <div class="itm-lst 1itm d-inline-block mx-1" id="lst-4">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div>.<span class="tran"><br><small>첫번째 길에서 바로 오른쪽 키르헨슈트라세로 가세요.</small><br></span> Am Ende des Weges biegen Sie nach <div class="itm-lst 1itm d-inline-block mx-1" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div> in die <div class="itm-lst 1itm d-inline-block mx-1" id="lst-5">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div>.<span class="tran"><br><small>그 길 끝에서 왼쪽 라이프치거슈트라세로 가세요.</small><br></span> Auf der <div class="itm-lst 1itm d-inline-block mx-1" id="lst-6">
										<h2 class="btn btn-warning btn-lg ttl d-block" style="position: relative; top: 6px; min-width: 90px; max-width: 190px;">
										▼ </h2>
										</div> Seite sehen Sie dann schon die Frauenkirche.<span class="tran"><br><small>그러면 오른편에 바로 프라우엔교회가 보일 거예요.</small><br></span>
									</td>
								</tr>
								<tr>
									<td class="border-0"><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button></td>
									<td class="border-0">
										Ja, vielen Dank!<span class="tran"><br><small>네, 대단히 감사해요!</small><br></span>
									</td>
								</tr>
								<tr>
									<td class="border-0"><button type="button" id="11" class="so btn btn-outline-dark btn-sm mr-1">▶</button></td>
									<td class="border-0">
										Kein Problem. Auf Wiedersehen.<span class="tran"><br><small>천만에요. 안녕히 가세요.</small><br></span>
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
				$(".so").each(function() {
					hm[$(this).attr("id")]=0;
					sen[$(this).attr("id")]=$("#"+$(this).attr("id")).text();
				});

				ion.sound( {
					sounds : [ {
						name : "r10 U7",
						sprite : {
							"0": [76.640, 31.408],
							"8": [79.857, 3.365],
							"9": [83.213, 21.143],
							"10": [104.357, 1.095],
							"11": [105.452, 1.959]
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
							$("#"+obj.part).text(sen[obj.part]);
							if(hm[hmn] > 1) {
								$("#"+hmn).closest("ul").find(".tran").show();
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
								ion.sound.pause("r10 U7", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).text()==sen[$(this).attr("id")]) {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r10 U7", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r10 U7", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r10 U7", {
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
						var na = "";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

							// 정답 확인 div 상자 배경색 속성 없애10
							$(this).removeClass("btn-light ");

							$(".itm-lst").each(function() {
								if($(this).find("button.btn")) {
									$(this).find("button.btn").addClass("text-success font-weight-bold");
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
					pan = [];
					var il = $("#itms>.itm").length;
					for(var p = 0; p < pan.length; p++) {
					var pani = "#lst-" + pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans" + pan[p])) {
								$("#" + $(this).attr("id")).insertBefore($("#lst-" + pan[p] + ">h2"));
								$("#" + $(this).attr("id")).addClass("btn-inline-block");
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