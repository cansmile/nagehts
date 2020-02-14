<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<style>
	td,th,table {
		border-width: 0;
		border-style: hidden;
	}
</style>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="1">
					Ich möchte heute nicht.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="2">
					Ich will ein bisschen lernen und fernsehen.
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="3">
					Wollen wir zusammen essen gehen?
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
					Ich will heute ins Konzert gehen.
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
				<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
				</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
				</button>						
				</h2>
				<h3>[ <small>단어를 선택하고 알맞은 위치의 단추를 누르세요.</small> ]</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<table class="table">
					<tbody>
						<tr>
							<td width="50"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
							<td>Wittmer.
								<span class="tran"><br><small>비트머.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
							<td>Hallo, Nina. Hier ist Tim.
								<span class="tran"><br><small>안녕, 니나. 팀이야.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
							<td>Hallo, Tim. Wie geht es dir?
								<span class="tran"><br><small>안녕, 팀. 어떻게 지내?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
							<td>Gut. Und dir?
								<span class="tran"><br><small>잘지내. 너는?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></td>
							<td>Auch gut.
								<span class="tran"><br><small>나도 잘지내.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="10" class="so btn btn-outline-primary">▶</button></td>
							<td>Sag mal. Was machst du heute Abend?
								<span class="tran"><br><small>말해. 너 오늘 저녁에 뭐해?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
							<td>Nichts Besonderes.
								<span class="tran"><br><small>별일없는데.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50">&nbsp;</td>
							<td>
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-danger btn-xl ttl d-block">
											▼ </h2>
								</div>
							
								<span class="tran"><small>공부 좀 하다가 TV좀 볼거야.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="13" class="so btn btn-outline-primary">▶</button></td>
							<td>Ach, Das kannst du immer machen.
								<span class="tran"><br><small>아, 그건 맨날 할 수 있잖아.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50">&nbsp;</td>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-primary btn-xl ttl d-block">
											▼ </h2>
								</div>
							
								<span class="tran"><small>나 오늘 콘서트 가려고해.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="15" class="so btn btn-outline-primary">▶</button></td>
							<td>In der Musikhalle I gibt es ein Jazz-Fest.
								<span class="tran"><br><small>음악홀 I에서 재즈 콘서트가 있어.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="16" class="so btn btn-outline-danger">▶</button></td>
							<td>Ach nee, dazu habe ich keine Lust.
								<span class="tran"><br><small>아, 싫어. 나는 별로야.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50">&nbsp;</td>
							<td>
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-danger btn-xl ttl d-block">
											▼ </h2>
								</div>
							
								<span class="tran"><small>오늘은 가고 싶지 않아.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="18" class="so btn btn-outline-primary">▶</button></td>
							<td>Schade. Was möchtest du denn?
								<span class="tran"><br><small>유감이네. 그럼 너는 뭐하고 싶니?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50">&nbsp;</td>
							<td>
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-primary btn-xl ttl d-block">
											▼ </h2>
								</div>
							
								<span class="tran"><small>함께 밥 먹으러 갈까?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="20" class="so btn btn-outline-danger">▶</button></td>
							<td>Ja, das ist eine gute Idee.
								<span class="tran"><br><small>응, 좋은 생각이야.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="21" class="so btn btn-outline-primary">▶</button></td>
							<td>Gut. Treffen wir uns um halb neun? Soll ich dich abholen?
								<span class="tran"><br><small>좋아. 우리 8시 반에 데리러갈까?</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="22" class="so btn btn-outline-danger">▶</button></td>
							<td>Ja, gut. Danke!
								<span class="tran"><br><small>그래, 좋다. 고마워.</small></span>
							</td>
						</tr>
						<tr>
							<td width="50"><button type="button" id="23" class="so btn btn-outline-primary">▶</button></td>
							<td>Bitte. Bis dann!
								<span class="tran"><br><small>괜찮아. 그럼 그 때 보자.</small></span>
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
	$(".tran").hide();
	$("#chk").hide();

	$(document).ready(function() {
		// 각 문장 재생 횟수 초기화
		var hm = new Array(), sen = new Array();
		$(".so").each(function() {
			hm[$(this).attr("id")] = 0;
			sen[$(this).attr("id")] = 0;
		});

		ion.sound({
			sounds : [{
				name : "r7 B2 Verabredung 2 Telefon ok",

				sprite : {
					"0": [3.89,58.31],
					"1": [45.14,1.65],
					"2": [32.26,2.73],
					"3": [48.87,2],
					"4": [36.92,2.29],
					"5": [19.39,1.28],
					"6": [20.68,2.1],
					"7": [22.99,2.47],
					"8": [25.34,1.8],
					"9": [27.15,1.12],
					"10": [28.28,2.44],
					"11": [30.72,1.53],
					"12": [32.26,2.73],
					"13": [35.01,1.93],
					"14": [36.92,2.29],
					"15": [39.27,2.91],
					"16": [42.19,2.94],
					"17": [45.14,1.65],
					"18": [46.8,2.07],
					"19": [48.87,2],
					"20": [50.88,2.52],
					"21": [54.13,4.45],
					"22": [58.34,1.92],
					"23": [60,1.92]
				}
			},{
				name : "dingdongdang",
				path : "sounds/"
			}, {
				name : "Cartoon_Boing",
				path : "sounds/"
			}],
			path : "sounds/Reihe 7/",
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
					if(obj.part > 4) {
						$("#"+obj.part).html("▶");
					}

					if(hm[hmn] > 1) {								
						$("#"+hmn).closest("tr").find(".tran").show();		
					}


				}

			}, ready_callback: function () {
				
				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
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
						ion.sound.pause("r7 B2 Verabredung 2 Telefon ok", {
							part: "0"
						});
						$("#0").show();
						$(this).hide();
					} else if($(this).html() == "▶") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.play("r7 B2 Verabredung 2 Telefon ok", {
							part: $(this).attr("id")
						});
						$(this).html("❚❚");
					} else if($(this).html() == "❚❚") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r7 B2 Verabredung 2 Telefon ok", {
							part: $(this).attr("id")
						});
						$(this).html("▶");
					} else {
						// _p 붙어 있지 않으면 id 그대로 재생
						ion.sound.play("r7 B2 Verabredung 2 Telefon ok", {
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

				$("#0").show();
				$(".alert").hide();

				<?php include "wahl.php"; ?>

				var pan = new Array();
				// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
				pan = [];
				var il = $("#itms>.itm").length;
				for(var p = 0; p < pan.length; p++) {
				var pani = "#lst-" + pan[p];
					$(".itm").each(function() {
						if($(this).hasClass("ans" + pan[p])) {
							$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
							$("#" + $(this).attr("id")).addClass("btn-block");
							$("#" + $(this).attr("id")).addClass("btn-light");
							$("#lst-" + pan[p] + ">h2").remove();
							$("#lst-" + pan[p]).parent().find(".tran").show();
						}
					})
				}
			}
		});
	});
			
</script>
<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>