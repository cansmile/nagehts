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
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
								<td>Hallo, ich heiße Abena.<span class="tran"><br><small>안녕하세요, 저는 아비나에요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></th>
								<td>Wie heißen Sie?<span class="tran"><br><small>당신은 이름이 뭐에요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-info">▶</button></th>
								<td>Ich bin Muammar.<span class="tran"><br><small>저는 무아마에요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-info">▶</button></th>
								<td>Woher kommen Sie?<span class="tran"><br><small>당신은 어디에서 왔나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td>Ich komme aus Ghana. Und Sie?<span class="tran"><br><small>저는 가나 출신이에요. 당신은요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-info">▶</button></th>
								<td>Ich komme aus Libyen.<span class="tran"><br><small>저는 리비아출신이에요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-info">▶</button></th>
								<td>Wo liegt Ghana?<span class="tran"><br><small>가나는 어디에 있죠?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-danger">▶</button></th>
								<td>Ghana liegt in Westafrika.<span class="tran"><br><small>가나는 서아프리카에 있어요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></th>
								<td>Wo liegt Libyen?<span class="tran"><br><small>리비아는 어디에 있나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="10" class="so btn btn-outline-danger">▶</button></th>
								<td>Liegt Libyen in Westafrika?<span class="tran"><br><small>리비아는 서아프리카에 있나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-info">▶</button></th>
								<td>Nein, Libyen liegt in Nordafrika.<span class="tran"><br><small>아뇨, 리비아는 북아프라카에 있어요.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col" class="text-center">vier Himmelsrichtungen<br><small>네 방위</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="height: 65px;">der Norden<br><small>북</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Westen<br><small>서</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Osten<br><small>동</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Süden<br><small>남</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">die Mitte<br><small>중앙</small></td>
							</tr>
							<tr>
								<td style="height: 65px;"><img src="./images/Reihe 2/Reihe-2-D2-1.png" alt="Map" style="max-width: 100%; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-top-0 border-bottom-0 text-center display-4">Norden</td>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
							</tr>
							<tr>
								<td class="border-top-0 border-bottom-0 align-middle text-right display-4">Westen</td>
								<td class="border-top-0 text-center align-middle border-bottom-0"><img src="./images/Reihe 2/Reihe-2-D2-2.png" alt="Him class="border-top-0 border-bottom-0"melsrichtungen" style="max-height: 320px; width: auto"></td>
								<td class="border-top-0 border-bottem-0 align-middle text-left display-4">Osten</td>
							</tr>
							<tr>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-top-0 border-bottom-0 text-center display-4">Süden</td>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
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
					name : "r2 D2",
					sprite : {
						"0": [3.7, 48.2],
							"1": [8.4, 2.8],
							"2": [11.8, 1.3],
							"3": [17.5, 1.4],
							"4": [19.3, 1.4],
							"5": [24.4, 3.3],
							"6": [30.3, 2.1],
							"7": [32.7, 1.3],
							"8": [37.9, 2.1],
							"9": [40.4, 1.3],
							"10": [42.5, 2.2],
							"11": [48.2, 3.8]
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
							ion.sound.pause("r2 D2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r2 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r2 D2", {
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