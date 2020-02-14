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
					<button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="10">
					Berlin
					</button>
					<button type="button" class="mt-1 mx-1 so btn ans1 btn-lg btn-outline-dark itm" id="11">
					Amerika
					</button>
					<button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="12">
					Berlin
					</button>
					<button type="button" class="mt-1 mx-1 so btn ans3 btn-lg btn-outline-dark itm" id="13">
					Dresden
					</button>
					<button type="button" class="mt-1 mx-1 so btn ans2 btn-lg btn-outline-dark itm" id="14">
					Berlin
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
					<h2>전체듣기
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					<br>
					<small>2번 들으면 번역이 나옵니다.</small>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					<h3>[ <small>듣고 알맞은 위치에 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col"><img src="./images/Reihe 2/Reihe-2-A4-1.png" style="max-width: 480px; height: auto;" alt="Sandmännchen"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="prev">
					<table class="table table-light">
						<tbody>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="1" class="so btn btn-danger">▶</button></th>
								<td>Hallo, ich bin Anna Müller. <span class="tran">&nbsp;<br><small>안녕하세요, 저는 안나 뮐러에요.</small></span></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="2" class="so btn btn-primary">▶</button></th>
								<td>Hallo, ich heiße Max Fernández. <span class="tran">&nbsp;<br><small>안녕하세요, 저는 막스 페르난데즈에요.</small></span></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="3" class="so btn btn-danger">▶</button></th>
								<td>Ah, kommen Sie aus Mexiko? <span class="tran">&nbsp;<br><small>아, 멕시코 출신이신가요?</small></span></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="4" class="so btn btn-primary">▶</button></th>
								<td>Nein, aus <span class="btn btn-outline-dark btn-sm nu">①</span>. <span class="tran">&nbsp;<br><small>아니오, <strong>미국</strong> 출신이에요.</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="5" class="so btn btn-danger">▶</button></th>
								<td>Und wohnen Sie hier in <span class="btn btn-outline-dark btn-sm nu">②</span>? <span class="tran">&nbsp;<br><small>그러면 당신은 <strong>베를린</strong>에서 사시나요?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="6" class="so btn btn-primary">▶</button></th>
								<td>Ja. Und Sie? <span class="tran">&nbsp;<br><small>네, 당신은요?</span></td></small>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="7" class="so btn btn-primary">▶</button></th>
								<td>Wohnen Sie auch in <span class="btn btn-outline-dark btn-sm nu">③</span>? <span class="tran">&nbsp;<br><small><strong>베를린</strong>에서 사시나요?</span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="8" class="so btn btn-danger">▶</button></th>
								<td>Nein, ich wohne in <span class="btn btn-outline-dark btn-sm nu">④</span>. <span class="tran">&nbsp;<br><small>아뇨, 저는 <strong>드레스덴</strong>에서 살아요.</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="text-right" scope="row"><button type="button" id="9" class="so btn btn-danger">▶</button></th>
								<td>Aber meine Mutter wohnt hier in <span class="btn btn-outline-dark btn-sm nu">⑤</span>. <span class="tran">&nbsp;<br><small>하지만, 제 어머님은 <strong>베를린</strong>에서 사세요.</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
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
			<div class="row">
				<div class="col-11 text-center">
					<div class="row">
						<div class="col-12 text-left my-2"><span class="bg-lime p-1 px-2 m-1 rounded font-weight-bold">TIPP</span></div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="row">
								<div class="bg-light py-2 col-6 border-right border-dark">Sie<br>(<small>당신</small>)</div>
								<div class="py-2 col-6">wohn<strong>en in</strong>…</div>
							</div>
							<div class="row">
								<div class="py-2 col-6 border-right border-dark">Ich</div>
								<div class="bg-light py-2 col-6">wehn<strong>e in</strong> …</div>
							</div>
							<div class="row">
								<div class="bg-light border-right border-dark py-2 col-6">Meine Mutter<br>(<small>나의 엄마</small>)</div>
								<div class="py-2 col-6">wohn<strong>t in </strong>…</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="row">
								<div class="bg-light py-2 col-6 border-right border-dark">Sie</div>
								<div class="py-2 col-6">komm<strong>en aus </strong>…</div>
							</div>
							<div class="row">
								<div class="py-2 col-6 border-right border-dark">Ich</div>
								<div class="bg-light py-2 col-6">komm<strong>e aus</strong> …</div>
							</div>
							<div class="row">
								<div class="bg-light py-2 col-6 border-right border-dark">Maria</div>
								<div class="py-2 col-6">komm<strong>t aus </strong>…</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
		$("#chk").hide();
		$(".tran").hide();
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
					name : "r2 A4 A5",
					sprite : {
						"0": [8.4, 24.2],
							"1": [8.6, 2.5],
							"2": [11.8, 2.3],
							"3": [14.8, 2.2],
							"4": [17.7, 1.8],
							"5": [20.4, 1.8],
							"6": [22.9, 1.6],
							"7": [25.3, 1.7],
							"8": [27.7, 2.5],
							"9": [30.4, 2],
							"10": [21.6, .6],
							"11": [18.7, .8],
							"12": [26.3, .6],
							"13": [29.3, .8],
							"14": [31.9, .6]
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
				path : "sounds/Reihe 2/",
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
						if(obj.part < 10) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
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
							ion.sound.pause("r2 A4 A5", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r2 A4 A5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 A4 A5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r2 A4 A5", {
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
						var na="";
						if($("#itms").find("button").length < 1) {
							$("span.nu").each(function () {
								$(this).text($.trim($(this).closest("tr").find(".itm-lst").text()));
								$(this).removeClass("btn btn-outline-dark btn-sm nu");
								$(this).addClass("font-weight-bold rounded bg-success text-white p-1 px-2 m-1");
							}
							);
							$(".tran").show();
							$(".itm-lst").hide();
							
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".itm-lst").length; // 전체 문항 수
							var qr = $(".bg-success").length; // 맞춘 항목 수
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

							$(this).attr("id","done");
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
							alert(na+"번 문제를 풀어주세요!");
						}
					}
					);
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