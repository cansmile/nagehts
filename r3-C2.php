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
					<h2> Was ist Ihr Familienstand? <br>
					<small>가족상황이 어떻게 되죠?</small>
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
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" width="25%" class="border-0"><img src="./images/Reihe 3/Reihe-3-C2-1.png" style="max-width: 100%; height: auto;" alt=""></th>
								<th scope="col" width="25%" class="border-0"><img src="./images/Reihe 3/Reihe-3-C2-2.png" style="max-width: 100%; height: auto;" alt=""></th>
								<th scope="col" width="25%" class="border-0"><img src="./images/Reihe 3/Reihe-3-C2-3.png" style="max-width: 100%; height: auto;" alt=""></th>
								<th scope="col" width="25%" class="border-0"><img src="./images/Reihe 3/Reihe-3-C2-4.png" style="max-width: 100%; height: auto;" alt=""></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center border-0">ledig&nbsp;<small>미혼</small></td>
								<td class="text-center border-0">verheiratet&nbsp;<small>기혼</small></td>
								<td class="text-center border-0">geschieden&nbsp;<small>이혼</small></td>
								<td class="text-center border-0">verwitwet&nbsp;<small>사별</small></td>
							</tr>
							<tr>
								<td class="text-right" width="25"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td colspan="3">Was ist Ihr Familienstand?<span class="tran"><br><small>가족상황이 어떻게 되죠?</small></span></td>
							</tr>
							<tr>
								<td class="text-right"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td colspan="3">Ich bin verheiratet.<span class="tran"><br><small>저는 결혼했어요.</small></span></td>
							</tr>
							<tr>
								<td class="text-right"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td colspan="3">Haben Sie Kinder?<span class="tran"><br><small>아이가 있으신가요?</small></span></td>
							</tr>
							<tr>
								<td class="text-right"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
								<td colspan="3">Nein, ich habe keine Kinder. Und Sie?<span class="tran"><br><small>아뇨, 저는 아이가 없어요. 당신은요?</small></span></td>
							</tr>
							<tr>
								<td class="text-right"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
								<td colspan="3">Ich bin nicht verheiratet. Ich bin ledig.<span class="tran"><br><small>저는 결혼하지 않았어요. 저는 미혼이에요.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" class="bg-light border-0"><span class="p-1 px-2 rounded bg-lime m-1">TIPP</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">부정사 nicht는 동사, 형용사, 부사 등을 부정하는데 사용되고, kein은 명사를 부정하는데 사용된다.</th>
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
					name : "r3 C2",
					sprite : {
						"0": [4.4, 23],
							"1": [7.7, 2],
							"2": [12, 1.5],
							"3": [15, 2],
							"4": [18.3, 4],
							"5": [24.5, 3.5]
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+obj.part).closest("tr").find(".tran").show();
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
							ion.sound.pause("r3 C2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 C2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 C2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 C2", {
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