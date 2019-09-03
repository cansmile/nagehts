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
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark so itm" id="1">
					zu Abend essen<span class="tran"><br><small>저녁 먹기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark so itm" id="2">
					die Zeitung lesen<span class="tran"><br><small>신문 읽기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark so itm" id="3">
					fernsehen<span class="tran"><br><small>TV 보기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark so itm" id="4">
					Fotos machen<span class="tran"><br><small>사진찍기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark so itm" id="5">
					das Mittagessen bestellen<span class="tran"><br><small>점심 주문하기</small></span>
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
					<h2>[ <small>그림에 맞는 단어를 그림 아래에 노란 단추를 눌러 넣으세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-0.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>Martin Klein ist Bankkaufmann.<span class="tran"><small><br>마틴 클라인은 은행원입니다.</small></span></td height="100" class="align-middle">
							</tr>
							<tr>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-1.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">
									<div class="itm-lst 1itm py-0 my-0" id="lst-1">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">(halb zehn)</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="8" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-2.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">
									<div class="itm-lst 1itm py-0 my-0" id="lst-2">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">(halb zwei)</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-4.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">
									<div class="itm-lst 1itm py-0 my-0" id="lst-4">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">(drei Uhr)</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="10" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-5.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">
									<div class="itm-lst 1itm py-0 my-0" id="lst-5">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">(halb acht)</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-3.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">
									<div class="itm-lst 1itm py-0 my-0" id="lst-3">
										<h2 class="btn py-0 my-0 btn-warning btnsml ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">(zehn)</td>
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
		$("#chk").hide();
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
					name : "r6 D2 Wohin passt das (Martin Klein",
					sprite : {
						"0": [4, 45.11],
							"6": [12.26, 3.06],
							"7": [18.4, 2.94],
							"8": [25.12, 3.59],
							"9": [32.2, 3.36],
							"10": [38.92, 3.42],
							"11": [46.29, 2.88]
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
				path : "sounds/Reihe 6/",
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
						if(obj.part > 5) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("table").find(".tran").show();
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
							ion.sound.pause("r6 D2 Wohin passt das (Martin Klein", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 D2 Wohin passt das (Martin Klein", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 D2 Wohin passt das (Martin Klein", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 D2 Wohin passt das (Martin Klein", {
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
							$(".tran").show();
							$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
							$(this).removeClass("btn-light");
							$(this).addClass("btn-primary");
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
					// $("#7").appendTo($("#lst-1"));
					// $("#7").addClass("btn-block");
					// $("#lst-1>h2").remove();
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