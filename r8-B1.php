<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<style>
	td,th,table {
		border-width: 0;
		border-style: hidden;
	}


</style>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 누르면 소리가 납니다.</small> ]
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-B1-1.png" alt="Eva"  usemap="#Eva"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 align-middle text-center"><img src="./images/Reihe 8/Reihe-8-B1-2.png" alt="Adam"  usemap="#Adam"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

<map name="Eva">
    <area class="so" id="1" alt="der Kopf" title="der Kopf" coords="26,170,170,224" shape="rect">
    <area class="so" id="2" alt="das Auge" title="das Auge" coords="34,231,176,267" shape="rect">
    <area class="so" id="3" alt="die Nase" title="die Nase" coords="33,274,180,317" shape="rect">
    <area class="so" id="4" alt="der Mund" title="der Mund" coords="44,324,190,357" shape="rect">
    <area class="so" id="5" alt="der Arm" title="der Arm" coords="53,369,172,402" shape="rect">
    <area class="so" id="6" alt="die Hand" title="die Hand" coords="53,414,180,453" shape="rect">
    <area class="so" id="7" alt="der Bauch" title="der Bauch" coords="53,457,205,496" shape="rect">
    <area class="so" id="8" alt="das Bein" title="das Bein" coords="54,539,190,580" shape="rect">
    <area class="so" id="9" alt="der Fuß" title="der Fuß" coords="53,592,177,636" shape="rect">
</map>

<map name="Adam">
    <area class="so" id="10" alt="das Ohr" title="das Ohr" coords="401,128,530,154" shape="rect">
    <area class="so" id="11" alt="das Gesicht" title="das Gesicht" coords="388,171,555,201" shape="rect">
    <area class="so" id="12" alt="die Zähne" title="die Zähne" coords="433,205,561,233" shape="rect">
    <area class="so" id="13" alt="der Hals" title="der Hals" coords="439,256,544,291" shape="rect">
    <area class="so" id="14" alt="der Rücken" title="der Rücken" coords="431,311,574,357" shape="rect">
    <area class="so" id="15" alt="die Brust" title="die Brust" coords="420,365,556,398" shape="rect">
    <area class="so" id="16" alt="der Finger" title="der Finger" coords="423,414,564,452" shape="rect">
    <area class="so" id="17" alt="das Knie" title="das Knie" coords="420,480,551,519" shape="rect">
    <area class="so" id="18" alt="der Zeh" title="der Zeh" coords="400,577,515,614" shape="rect">
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
						name : "r8 B1",

						sprite : {
							"0": [7.9,82.09],
							"1": [16.85,1.87],
							"2": [20,2.9],
							"3": [24.56,1.97],
							"4": [28,2.23],
							"5": [32.03,1.8],
							"6": [35.82,1.6],
							"7": [39.77,1.75],
							"8": [43.28,2.09],
							"9": [47.14,2.13],
							"10": [54.49,1.71],
							"11": [58.46,2.01],
							"12": [62.65,2.17],
							"13": [66.85,2.15],
							"14": [71.2,2.1],
							"15": [75.15,1.86],
							"16": [79.16,1.98],
							"17": [83.41,2.1],
							"18": [87.65,2.07]
						}
					},{
						name : "Bama_Country_Country",
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
							if(obj.part < 1) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
									$("#"+hmn).closest("button").find(".tran").show();		
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
					ion.sound.pause("r8 B1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 B1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 B1", {
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