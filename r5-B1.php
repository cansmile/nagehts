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
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-info">▶</button></th>
									<td>Was isst du gern?<span class="tran"><br><small>넌 무엇을 즐겨먹니?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></th>
									<td>Ich esse gern Pizza. Die schmeckt gut.<span class="tran"><br><small>난 피자를 즐겨 먹어. 그것이 맛이 좋거든.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-info">▶</button></th>
									<td>Was isst du gern?<span class="tran"><br><small>넌 무엇을 즐겨 먹는데?</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></th>
									<td>Mein Lieblingsessen ist Wurstbrot. Das schmeckt gut.<span class="tran"><br><small>내가 좋아하는 음식은 소시지빵이야. 그것이 맛이 좋아.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-info">▶</button></th>
									<td>Ich esse gern Kuchen. Der ist lecker.<span class="tran"><br><small>나는 케이크를 즐겨 먹어. 그것이 맛있어.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
							<table class="table table-striped text-center">
								<tbody>
									<tr>
										<th scope="row" colspan="4">Demonstrativpronomen <small>지시대명사</small></th>
									</tr>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">m</th>
										<th scope="col">f</th>
										<th scope="col">n</th>
									</tr>
									<tr>
										<th scope="row">bestimmter Artikel</th>
										<td><strong>der</strong> Kuchen</td>
										<td><strong>die</strong> Pizza</td>
										<td><strong>das</strong> Wurstbrot</td>
									</tr>
									<tr>
										<th scope="row">Demonstrativpronomen</th>
										<td>der</td>
										<td>die</td>
										<td>das</td>
									</tr>
								</tbody>
							</table>
					</div>
				</div>

		</div>
	</section>
		

		
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
						name : "r5 B1 Mein Lieblingsessen",

						sprite : {
							"0": [10.5,43.7],
							"1": [17.9,2.1],
							"2": [22.5,4.9],
							"3": [32.1,3],
							"4": [38,5.6],
							"5": [50.5,3.5]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 5/",
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

						} else {
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
					ion.sound.pause("r5 B1 Mein Lieblingsessen", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r5 B1 Mein Lieblingsessen", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 B1 Mein Lieblingsessen", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r5 B1 Mein Lieblingsessen", {
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