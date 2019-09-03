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
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm" id="6">
					a
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm" id="7">
					b
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="8">
					c
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm" id="9">
					d
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm" id="10">
					e
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
					<h2>[ <small>그림에 맞는 단어를 그림 아래에 노란 단추를 눌러 넣세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="align-middle border-0 text-center" scope="row">1.</th>
								<td class="align-middle border-0">Jemand schwimmt.<span class="tran"><small><br>어떤 사람이 수영한다.</small></span></td>
								<td class="align-middle border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-1">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle border-0 text-center" scope="row">2.</th>
								<td class="align-middle border-0">Jemand sieht fern.<span class="tran"><small><br>어떤 사람이 TV를 본다.</small></span></td>
								<td class="align-middle border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-2">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle border-0 text-center" scope="row">3.</th>
								<td class="align-middle border-0">Jemand kauft ein.<span class="tran"><small><br>어떤 사람이 구매한다.</small></span></td>
								<td class="align-middle border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-3">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="align-middle border-0 text-center" scope="row">4.</th>
								<td class="align-middle border-0">Jemand schläft.<span class="tran"><small><br>어떤 사람이 잔다.</small></span></td>
								<td class="align-middle border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-4">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="align-middle border-0 text-center" scope="row">5.</th>
								<td class="align-middle border-0">Jemand macht eine Flasche Sekt auf.<span class="tran"><small><br>어떤 사람이 샴페인 병을 연다.</small></span></td>
								<td class="align-middle border-0">
									<div class="itm-lst 1itm py-0 my-0" id="lst-5">
										<h2 class="btn btn-warning btn-lg ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
								<th class="border-0 text-center align-middle" scope="col"><span class="p-2 px-3 rounded m-1 text-white bg-danger">a</span></th>
								<th class="border-0 text-center align-middle" scope="col"><span class="p-2 px-3 rounded m-1 text-dark bg-warning">b</span></th>
								<th class="border-0 text-center align-middle" scope="col"><span class="p-2 px-3 rounded m-1 text-white bg-success">c</span></th>
								<th class="border-0 text-center align-middle" scope="col"><span class="p-2 px-3 rounded m-1 text-white bg-info">d</span></th>
								<th class="border-0 text-center align-middle" scope="col"><span class="p-2 px-3 rounded m-1 text-white bg-primary">e</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="border-0 text-center align-middle"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0 text-center align-middle"><button type="button" id="2" class="so btn btn-outline-warning">▶</button></td>
								<td class="border-0 text-center align-middle"><button type="button" id="3" class="so btn btn-outline-success">▶</button></td>
								<td class="border-0 text-center align-middle"><button type="button" id="4" class="so btn btn-outline-info">▶</button></td>
								<td class="border-0 text-center align-middle"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
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
					name : "r6 U1",
					sprite : {
						"0": [4.2, 112.08],
							"1": [8.4, 13.14],
							"2": [22.22, 9.89],
							"3": [36.05, 17.75],
							"4": [57.87, 39.03],
							"5": [98.93, 17.34]
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
						if(obj.part < 6) {
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
							ion.sound.pause("r6 U1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 U1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 U1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 U1", {
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
					// 정답확인
					$("#chk").on("click", function() {
						var na="";
						if($("#itms").find("button.itm").length < 1) {
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
					<?php include "wahl.php"; ?>
					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=[1];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								$("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}
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