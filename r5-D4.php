<?php include "header.php"; ?>
<body>
<?php include "back.php"; ?>
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
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
								<td>Herr Ober, die Speisekarte bitte.<span class="tran"><br><small>여기 메뉴판 좀 주세요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
								<td>Bitte schön!<span class="tran"><br><small>여기 있습니다!</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
								<td>Wir möchten gern bestellen.<span class="tran"><br><small>주문할게요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
								<td>Ja, natürlich! Was möchten Sie?<span class="tran"><br><small>네, 알겠습니다. 무엇을 드시겠습니까?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td>Ich nehme eine Pizza und einen Salat.<span class="tran"><br><small>전 피자 하나와 샐러드 하나요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></th>
								<td>Und was möchten Sie trinken?<span class="tran"><br><small>그리고 음료는요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
								<td>Ich trinke eine Cola.<span class="tran"><br><small>콜라 한 잔 주세요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
								<td>Und Sie? Was bekommen Sie?<span class="tran"><br><small>이 쪽 분은 무엇을 드시겠습니까?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-success">▶</button></th>
								<td>Ich esse ein Steak und trinke einen Wein.<span class="tran"><br><small>전 스테이크 하나와 와인 한 잔이요.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th scope="col" colspan="2">SPEISEKARTE</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-primary">Wein (m)</td>
								<td class="text-danger">Suppe (f)</td>
							</tr>
							<tr>
								<td class="text-purple">Steak (n)</td>
								<td class="text-primary">Salat (m)</td>
							</tr>
							<tr>
								<td class="text-danger">Cola (f)</td>
								<td class="text-purple">Fleisch (n)</td>
							</tr>
							<tr>
								<td class="text-purple">Brot (n)</td>
								<td class="text-danger">Pizza (f)</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	
	
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
					name : "r5 D4",
					sprite : {
						"0": [2.79, 45.75],
							"1": [11, 3.3],
							"2": [16.4, 1.5],
							"3": [18.3, 2.4],
							"4": [22.2, 2.8],
							"5": [26.38, 3.61],
							"6": [31.3, 2.3],
							"7": [34.47, 2.1],
							"8": [40, 2.84],
							"9": [45, 3.5]
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
							ion.sound.pause("r5 D4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 D4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 D4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 D4", {
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
	<?php include "footer.php"; ?>
</body>
</html>