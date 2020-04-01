<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
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
								<td>Wir möchten bitte bezahlen.<span class="tran"><br><small>계산하겠습니다.	</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
								<td>Bitte schön. Zusammen oder getrennt?<span class="tran"><br><small>네. 같이 하시겠어요, 아니면 따로 하시겠어요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
								<td>Getrennt, bitte.<span class="tran"><br><small>따로요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
								<td>Und was bezahlen Sie?<span class="tran"><br><small>그럼 무엇을 계산하시나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td>Die Pizza, den Salat und die Cola.<span class="tran"><br><small>피자, 샐러드, 콜라요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></th>
								<td>Das macht 9,70.<span class="tran"><br><small>9유로 70 입니다.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
								<td>11 Euro, bitte.<span class="tran"><br><small>11유로 드립니다.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
								<td>Vielen Dank!<span class="tran"><br><small>감사합니다!</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-success">▶</button></th>
								<td>Und ich bezahle das Steak und den Wein.<span class="tran"><br><small>전 스테이크 하나와 와인 한 잔이요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="10" class="so btn btn-outline-primary">▶</button></th>
								<td>Ein Steak und einen Wein..., das macht 18 Euro 50.<span class="tran"><br><small>스테이크와 와인…. 18유로 50입니다.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-success">▶</button></th>
								<td>Hier, bitte. 20 Euro. Stimmt so.<span class="tran"><br><small>여기 있습니다. 20유로. 거스름 돈은 됐습니다. </small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="12" class="so btn btn-outline-primary">▶</button></th>
								<td>Danke schön!<span class="tran"><br><small>감사합니다!</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table table-striped text-justify">
						<thead>
							<tr>
								<th scope="col" colspan="2" class="text-center">주문과 계산</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>주문할 때 부정관사를 사용한 것과는 달리 계산할 때에는 먹은 음식을 계산한 것이므로 정관사를 사용한다.</td>
							</tr>
							<tr>
								<td class="font-weight-bold">„zusammen oder getrennt?”</td>
							</tr>
							<tr>
								<td>한꺼번에 아니면 각자 계산하시겠습니까?</td>
							</tr>
							<tr>
								<td class="font-weight-bold">„Stimmt so.”</td>
							</tr>
							<tr>
								<td>계산할 때 거스름돈을 팁으로 주겠다는 표현이다. 한국어로 “거스름돈은 됐습니다.”로 번역할 수 있다.</td>
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
					name : "r5 F2",
					sprite : {
						"0": [3.82, 61.07],
							"1": [11.38, 2.52],
							"2": [15.44, 3.43],
							"3": [19.87, 1.75],
							"4": [22.62, 2.14],
							"5": [26.06, 3.51],
							"6": [32.56, 2.75],
							"7": [35.92, 1.98],
							"8": [38.75, 1.14],
							"9": [42.65, 3.05],
							"10": [48.61, 5.65],
							"11": [56.41, 4.51],
							"12": [62.83, 2.21]
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
							ion.sound.pause("r5 F2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 F2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 F2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 F2", {
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
	});
	
	});
		
	</script>
	<!-- ion.sound finished -->
	<?php include "footer.php"; ?>
</body>
</html>