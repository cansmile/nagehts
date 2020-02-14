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
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="1">
					Arzt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="2">
					Lehrer
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="3">
					Friseur
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					Kellner
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="5">
					Architektin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="6">
					Sekretär
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="7">
					Ingenieurin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
					Verkäuferin
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="9">
					Taxifahrerin
					</button>
				</div>
			</div>
		</div>
	</section>
	<style>
		td,th {
			height: 80px;
			text-align: center;
			vertical-align: middle;
		}
	</style>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie. <br>
					<small>알맞은 직업을 채우세요.</small>
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
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col" colspan="2" class="text-center"><img src="./images/sym_mann.png" alt="mann" style="max-height: 140px; width: auto;"> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="b1">
									<button type="button" id="10" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">Verkäufer <span class="tran"><small><br>&nbsp;(남)점원</small></span></td>
							</tr>
							<tr>
								<td id="b2">
									<button type="button" id="12" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;웨이터</small></span>
								</td>
							</tr>
							<tr>
								<td id="b3">
									<button type="button" id="14" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(남)선생님</small></span>
								</td>
							</tr>
							<tr>
								<td id="b4">
									<button type="button" id="16" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">Architekt <span class="tran"><small><br>(남)건축가&nbsp;</small></span></td>
							</tr>
							<tr>
								<td id="b5">
									<button type="button" id="18" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(남)의사</small></span>
								</td>
							</tr>
							<tr>
								<td id="b6">
									<button type="button" id="20" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">Taxifahrer <span class="tran"><small><br>&nbsp;(남)택시기사</small></span></td>
							</tr>
							<tr>
								<td id="b7">
									<button type="button" id="22" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(남)미용사</small></span>
								</td>
							</tr>
							<tr>
								<td id="b8">
									<button type="button" id="24" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">
									<div class="itm-lst 1itm" id="lst-8">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(남)비서</small></span>
								</td>
							</tr>
							<tr>
								<td id="b9">
									<button type="button" id="26" class="so btn btn-outline-primary">▶</button>
								</td>
								<td class="text-primary">Ingenieur <span class="tran"><small><br>&nbsp;(남)기술자</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col" colspan="2" class="text-center"><img src="./images/sym_frau.png" alt="frau" style="max-height: 140px; width: auto;"> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="b10">
									<button type="button" id="11" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(여)점원</small></span>
								</td>
							</tr>
							<tr>
								<td id="b11">
									<button type="button" id="13" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">Kellnerin <span class="tran"><small><br>&nbsp;웨이트리스</small></span></td>
							</tr>
							<tr>
								<td id="b12">
									<button type="button" id="15" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">Lehrerin <span class="tran"><small><br>&nbsp;(여)선생님</small></span></td>
							</tr>
							<tr>
								<td id="b13">
									<button type="button" id="17" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(여)건축가</small></span>
								</td>
							</tr>
							<tr>
								<td id="b14">
									<button type="button" id="19" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">Ärztin <span class="tran"><small><br>&nbsp;(여)의사</small></span></td>
							</tr>
							<tr>
								<td id="b15">
									<button type="button" id="21" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(여)택시기사</small></span>
								</td>
							</tr>
							<tr>
								<td id="b16">
									<button type="button" id="23" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">Friseurin <span class="tran"><small><br>&nbsp;(여)미용사</small></span></td>
							</tr>
							<tr>
								<td id="b17">
									<button type="button" id="25" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">Sekretärin <span class="tran"><small><br>&nbsp;(여)비서</small></span></td>
							</tr>
							<tr>
								<td id="b18">
									<button type="button" id="27" class="so btn btn-outline-danger">▶</button>
								</td>
								<td class="text-danger">
									<div class="itm-lst 1itm" id="lst-9">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
									<span class="tran"><small>&nbsp;(여)기술자</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th scope="col" class="text-primary"><img src="./images/sym_mann.png" alt="mann" style="max-height: 140px; width: auto;"> </th>
								<th scope="col" class="text-danger"><img src="./images/sym_frau.png" alt="frau" style="max-height: 140px; width: auto;"> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle text-primary" id="t1">Kellner</td>
								<td class="align-middle text-danger">Kellner<strong>in</strong></td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t2">Lehrer</td>
								<td class="align-middle text-danger">Lehrer<strong>in</strong></td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t3">Taxifahrer</td>
								<td class="align-middle text-danger">Taxifahrer<strong>in</strong></td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t4">Verkäufer</td>
								<td class="align-middle text-danger">Verkäufer<strong>in</strong></td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t5">Arzt</td>
								<td class="align-middle text-danger">Ärzt<strong>in</strong></td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t6">&nbsp;</td>
								<td class="align-middle text-danger">&nbsp;</td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t7">Krankenpfleger</td>
								<td class="align-middle text-danger">Krankenschwester</td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t8">Hausmann</td>
								<td class="align-middle text-danger">Hausfrau</td>
							</tr>
							<tr>
								<td class="align-middle text-primary" id="t9">Bankkaufmann</td>
								<td class="align-middle text-danger">Bankkauffrau</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
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
			function checkHeight() {
				// 좌우 셀 높이 맞추어 주기
				var tbn = 9; // 전체 셀의 반 값; 좌측과 우측이 같은 경우
				for(var i = 1; i <= tbn; i++) {
					if( $("#b"+i).height() > $("#b"+(i+tbn)).height() ) {
						$("#t"+(i+tbn)).height($("#b"+i).height());
						$("#t"+(i)).height($("#b"+i).height());
						$("#b"+(i+tbn)).height($("#b"+i).height());
					} else if( ($("#b"+i).height() < $("#b"+(i+tbn)).height()) || ($("#b"+i).height() == $("#b"+(i+tbn)).height()) ) {
						$("#t"+(i)).height($("#b"+(i+tbn)).height());
						$("#t"+(i+tbn)).height($("#b"+(i+tbn)).height());
						$("#b"+(i)).height($("#b"+(i+tbn)).height());
					}
				}
			}

			$(document).on("click", function() { checkHeight(); });

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
					name : "r3 D5",
					sprite : {
						"0": [4, 47.8],
							"1": [27.8, 1.5],
							"2": [17.6, 1.5],
							"3": [38, 2],
							"4": [12.9, 1.4],
							"5": [25, 1.9],
							"6": [43.1, 1.9],
							"7": [50, 2.1],
							"8": [10, 1.8],
							"9": [35, 2.3],
							"10": [7.5, 1.6],
							"11": [10, 1.8],
							"12": [12.9, 1.4],
							"13": [15, 1.7],
							"14": [17.6, 1.5],
							"15": [20, 1.3],
							"16": [22.4, 1.9],
							"17": [25, 1.9],
							"18": [27.8, 1.5],
							"19": [30, 1.75],
							"20": [32.5, 2],
							"21": [35, 2.3],
							"22": [38, 2],
							"23": [40.5, 1.8],
							"24": [43.1, 1.9],
							"25": [45.4, 1.6],
							"26": [48, 1.4],
							"27": [50, 2.1]
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
						if(obj.part > 9) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
					checkHeight();
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
							ion.sound.pause("r3 D5", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 D5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 D5", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 D5", {
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
							$(".itm-lst").each(function() {
								$(this).html($(this).find("button").html());
								$(this).addClass("font-weight-bold");
							}
							);
							$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
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
							// alert(na+"번 문제를 풀어주세요!");
							alert("빈 칸을 모두 채워주세요.");
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