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
				<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so text-left" id="1">
					Guten Tag, Frau Lehmann? Was kann ich für Sie tun?
					<span class="tran"><br><small>안녕하세요, 레만 부인? 제가 뭘 도와드릴까요?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so text-left" id="2">
					Ich komme gleich mit ihm!
					<span class="tran"><br><small>제가 아들을 데리고 갈게요!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so text-left" id="3">
					Kann er für heute Vormittag einen Termin haben?
					<span class="tran"><br><small>오늘 오전에 예약할 수 있나요?</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so text-left" id="4">
					Vielen Dank!
					<span class="tran"><br><small>감사합니다!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so text-left" id="5">
					Bis dann!
					<span class="tran"><br><small>이 따 뵐게요!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so text-left" id="6">
					Guten Tag, mein Name ist Lehmann.
					<span class="tran"><br><small>안녕하세요, 저는 레만이라고 해요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so text-left" id="7">
					Mein Sohn Peter hat Fieber und starke Bauchschmerzen.
					<span class="tran"><br><small>제 아들 피터가 열이 나고 복통이 심해요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so text-left" id="8">
					Das ist gut!
					<span class="tran"><br><small>다행이네요!</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so text-left" id="9">
					Ja. Wir haben um 11 Uhr einen Termin frei.
					<span class="tran"><br><small>네. 11시에 시간이 비어있네요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so text-left" id="10">
					Guten Tag, Praxis Dr. Fischer.
					<span class="tran"><br><small>안녕하세요, 피셔 병원입니다.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so text-left" id="11">
					Keine Ursache. Bis gleich, Frau Lehmann.
					<span class="tran"><br><small>천만에요. 곧 뵙겠습니다, 레만 부인.</small></span>
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
						<h2>Ergänzen Sie den Dialog. <small>문장을 완성해 보세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>						
						</h2>
						<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">보기</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
						<table class="table">
							<tbody>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Arzthelfer:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Frau Lehmann:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Arzthelfer:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Frau Lehmann:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">&nbsp;</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Arzthelfer:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Frau Lehmann:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm d-inline-block" style="min-width: 32%;"  id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
										<div class="itm-lst 1itm d-inline-block" style="min-width: 32%;" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
										<div class="itm-lst 1itm d-inline-block" style="min-width: 32%;" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Arzthelfer:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th class="pb-0 pt-3 border-0 align-middle" scope="row" width="200">Frau Lehmann:</th>
									<td class="pb-0 pt-3 border-0 align-middle">
										<div class="itm-lst 1itm" id="lst-11">
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
			$(".tran").hide();
			$("#chk").hide();
			$("#0").hide();
			$("#0_p").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});

				ion.sound({
					sounds : [{
						name : "r8 D3 Termin beim Arzt",

						sprite : {
							"0": [5,46.31],
							"1": [18.74,3.67],
							"2": [40.79,1.86],
							"3": [28.81,3.61],
							"4": [43.03,1.21],
							"5": [49.7,1.56],
							"6": [14.17,3.18],
							"7": [23.8,4.32],
							"8": [39.34,1.22],
							"9": [34.47,3.43],
							"10": [9.23,3.54],
							"11": [44.82,3.66]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 8/",
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
							if(obj.part > 11) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
									$("#"+hmn).find(".tran").show();		
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
					ion.sound.pause("r8 D3 Termin beim Arzt", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 D3 Termin beim Arzt", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 D3 Termin beim Arzt", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 D3 Termin beim Arzt", {
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

					$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
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
			pan = [1, 4, 6, 7, 9, 11];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
						$("#" + $(this).attr("id")).addClass("border-0");
						$("#lst-" + pan[p] + ">h2").remove();
						// $("#lst-" + pan[p]).parent().find(".tran").show();
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