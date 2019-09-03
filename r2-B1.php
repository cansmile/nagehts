<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라 하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-10 col-xl-10">
					<table class="table">
						<thead>
							<tr>
								<th colspan="2" class="text-center display-4 text-white bg-success" height="100px">Dialog</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></th>
								<td>Woher kommen Sie?<span class="tran"><br><small>당신은 어디에서 오셨나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></th>
								<td>Ich komme aus Korea. Ich bin Koreanerin.<span class="tran"><br><small>저는 한국에서 왔어요. 한국(여)인이에요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></th>
								<td>Kommen Sie aus Seoul?<span class="tran"><br><small>서울에서 왔나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></th>
								<td>Nein, ich komme aus Busan. Aber ich wohne in Seoul.<span class="tran"><br><small>아뇨, 저는 부산 출신이에요. 하지만 서울에 살아요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td>Woher kommen Sie?<span class="tran"><br><small>당신은 어디에서 오셨나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></th>
								<td>Ich komme aus Japan. Ich bin Japaner.<span class="tran"><br><small>저는 일본에서 왔어요. 저는 일본인입니다.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
								<td>Und wo wohnen Sie?<span class="tran"><br><small>그러면 어디에서 살아요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
								<td>Ich wohne auch in Seoul.<span class="tran"><br><small>저도 서울에서 살아요.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-1 col-xl-1">
					<table class="table text-danger">
						<thead>
							<tr>
								<th scope="col" class="text-center"><img src="./images/sym_frau.png" alt="Frau" style="max-height: 70px; width: auto;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="height: 65px;">Koreanerin</td>
							</tr>
							<tr>
								<td style="height: 65px;">Japanerin</td>
							</tr>
							<tr>
								<td style="height: 65px;">Chinesin</td>
							</tr>
							<tr>
								<td style="height: 65px;">Deutsche</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-1 col-xl-1">
					<table class="table text-primary">
						<thead>
							<tr>
								<th scope="col" class="text-center"><img src="./images/sym_mann.png" alt="Mann" style="max-height: 70px; width: auto;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="height: 65px;">Koreaner</td>
							</tr>
							<tr>
								<td style="height: 65px;">Japaner</td>
							</tr>
							<tr>
								<td style="height: 65px;">Chinese</td>
							</tr>
							<tr>
								<td style="height: 65px;">Deutscher</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
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
					name : "r2 B1",
					sprite : {
						"0": [14.3, 40.8],
							"1": [14, 1.8],
							"2": [18, 4.2],
							"3": [25.5, 2.3],
							"4": [29.8, 4.8],
							"5": [39, 2],
							"6": [43.2, 3.7],
							"7": [49, 1.8],
							"8": [52.9, 2.3]
					}
				}
				, {
					name: "Bama_Country_Country",
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
					// 재상이 끝날 때 2번 이상이면 번역 보이기
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					$(".o").on("click", function() {
						ion.sound.play("Bama_Country_Country");
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
							ion.sound.pause("r2 B1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r2 B1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 B1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r2 B1", {
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