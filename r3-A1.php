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
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						<h3><small>인물을 누르면 해당 음성을 들을 수 있습니다.<br>문장을 2번 재생하면 번역이 나옵니다.</small></h3>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center display-4"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
									<th scope="col" colspan="2" class="text-center text-white bg-danger"><h1>Das ist meine Familie.<span class="tran"><br><small>나의 가족입니다.</small></span></h1></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="3" class="text-center"><img src="./images/Reihe 3/Reihe3-A-A1-1.png" alt="Das ist meine Familie." usemap="#image-map1"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center display-4" width="100"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
									<th scope="col" colspan="2" class="text-center text-white bg-primary"><h1>Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></h1></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Das bin ich.<span class="tran"><br><small>저에요.</small></span></td>
									<td rowspan="3" class="text-center" width="240"><img src="./images/Reihe 3/Reihe3-A-A1-2.png" id="21" class="so" style="width: auto; max-height: 140px;" alt="Das ist meine Familie."></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Das ist meine Frau.<span class="tran"><br><small>제 아내에요.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-primary text-center">▶</button></th>
									<td class="text-center">Wir sind verheiratet.<span class="tran"><br><small>우리는 결혼했어요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center display-4" width="100"><button type="button" id="6" class="so btn btn-outline-success">▶</button></th>
									<th scope="col" colspan="2" class="text-center text-white bg-success"><h1>Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></h1></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="7" class="so btn btn-outline-success text-center">▶</button></th>
									<td class="text-center">Das ist mein Sohn.<span class="tran"><br><small>제 아들이에요.</small></span></td>
									<td rowspan="4" class="text-center" width="240"><img src="./images/Reihe 3/Reihe3-A-A1-3.png" style="width: auto; max-height: 140px;" id="22" class="so" alt="Das ist meine Familie."></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="8" class="so btn btn-outline-success text-center">▶</button></th>
									<td class="text-center">Das ist meine Tochter.<span class="tran"><br><small>제 딸이에요.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="9" class="so btn btn-outline-success text-center">▶</button></th>
									<td class="text-center">Das sind meine Kinder.<span class="tran"><br><small>제 아이들이에요.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="10" class="so btn btn-outline-success text-center">▶</button></th>
									<td class="text-center">Mein Sohn ist 6 und meine Tochter ist 10.<span class="tran"><br><small>제 아들은 6살이고, 제 딸은 10살이에요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center display-4" width="100"><button type="button" id="11" class="so btn btn-outline-info">▶</button></th>
									<th scope="col" colspan="2" class="text-center text-white bg-info"><h1>Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></h1></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="12" class="so btn btn-outline-info text-center">▶</button></th>
									<td class="text-center">Das ist mein Vater.<span class="tran"><br><small>제 아버지에요.</small></span></td>
									<td rowspan="3" class="text-center" width="240"><img src="./images/Reihe 3/Reihe3-A-A1-4.png" style="width: auto; max-height: 140px;" id="23" class="so" alt="Das ist meine Familie."></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="13" class="so btn btn-outline-info text-center">▶</button></th>
									<td class="text-center">Das ist meine Mutter.<span class="tran"><br><small>제 어머니에요.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="14" class="so btn btn-outline-info text-center">▶</button></th>
									<td class="text-center">Das sind meine Eltern.<span class="tran"><br><small>제 부모님이에요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

		</div>
	</section>

<map name="image-map1">
    <area id="15" class="so" alt="Frau" title="Frau" coords="6,250,17,242,29,199,37,190,38,119,32,104,39,93,56,55,79,50,105,47,125,62,133,86,141,92,137,113,146,131,138,138,131,174,147,183,153,196,171,206,171,217,146,228,135,244,128,254" shape="poly">
    <area id="16" class="so" alt="Vater" title="Vater" coords="131,174,141,136,158,121,184,111,163,93,160,85,152,78,146,58,154,47,160,27,170,18,195,18,212,15,229,29,234,45,242,49,238,68,229,94,222,107,222,112,245,127,251,139,255,162,264,169,257,179,264,187,259,196,264,199,263,205,198,205,207,199,218,182,229,167,223,161,219,136,205,119,184,116,158,124,145,144,147,162,141,170,145,177" shape="poly">
    <area id="17" class="so" alt="Mutter" title="Mutter" coords="247,63,236,72,239,82,254,90,268,105,288,112,315,114,333,123,339,146,347,153,342,168,347,176,356,171,347,136,344,125,328,114,315,103,325,90,337,98,345,90,342,78,336,70,333,59,329,38,314,19,288,14,269,19,250,36" shape="poly">
    <area id="18" class="so" alt="Son" title="Sohn" coords="128,255,147,227,172,217,170,205,155,197,151,179,144,173,145,165,147,140,161,124,185,114,207,121,221,140,219,160,226,162,222,176,215,181,210,195,197,205,197,216,218,222,232,236,241,254,172,258,148,257" shape="poly">
    <area id="19" class="so" alt="Tochter" title="Tochter" coords="261,255,352,254,347,229,321,210,320,197,332,189,343,187,347,192,354,186,350,172,348,148,332,121,310,112,283,112,269,123,261,142,255,150,255,161,266,173,261,178,267,189,262,195,267,205,273,203,281,197,291,205,302,208,300,217,281,222,269,235" shape="poly">
    <area id="20" class="so" alt="ich" title="ich" coords="350,62,346,54,366,36,393,36,402,40,402,28,417,46,424,36,424,52,434,58,432,82,437,87,436,101,426,107,429,117,426,112,424,128,413,144,402,149,406,160,432,172,451,188,462,218,464,254,440,253,352,250,346,223,327,212,331,186,344,182,346,191,357,177,357,166,385,161,380,149,366,144,357,134,347,112,339,101,347,87" shape="poly">
</map>

		
<?php include "footer.php"; ?>
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
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}
				ion.sound({
					sounds : [{
						name : "r3 A1",

						sprite : {
							"0": [6,61.8],
							"1": [13.2,2.6],
							"2": [17,1.6],
							"3": [19.5,1.3],
							"4": [22.5,1.8],
							"5": [26.4,1.9],
							"6": [32,1.6],
							"7": [35.1,1.6],
							"8": [38.7,1.8],
							"9": [42.3,2],
							"10": [46.2,3.8],
							"11": [54,2],
							"12": [57.4,2.1],
							"13": [61,1.8],
							"14": [64.7,2],
							"15": [22.5,1.8],
							"16": [57.4,2.1],
							"17": [61,1.8],
							"18": [35.1,1.6],
							"19": [38.7,1.8],
							"20": [19.5,1.3],
							"21": [26.4,1.9],
							"22": [42.3,2],
							"23": [64.7,2]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 3/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재상이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else if(hmn < 15) {
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}

					}, ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
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
					ion.sound.pause("r3 A1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r3 A1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r3 A1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r3 A1", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>