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
						<h2> Hören Sie und ergänzen Sie.<br>
							<small> 듣고 알맞은 국가와 도시를 넣으세요. </small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>
						<h3>[ <small>듣고 알맞은 위치에 단어를 짝지우세요.</small> ]</h3>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
							Korea
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="2">
							Ägypterin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
							Koreaner
						</button>
						<button type="button" class="mt-1 mx-1 btn ans9 btn-lg btn-outline-dark so itm" id="4">
							Englisch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans8 btn-lg btn-outline-dark so itm" id="5">
							Amerikaner
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="6">
							Arabisch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
							Koreanisch
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="8">
							Ägypten
						</button>
						<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="9">
							Amerika
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
						<tr>
							<th scope="col" class="text-center align-middle"><button type="button" id="22" class="so btn btn-danger btn-lg">▶</button></th>
							<td colspan="2" class="so text-center bg-danger text-white" height="25px"><h3>Dooly</h3></td>
							<td rowspan="5" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-C1-1.png" style="max-width: 240px; height: auto;" alt="Dooly"></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="10" class="so btn btn-danger">▶</button></th>
							<td colspan="2">Das ist Dooly. <br><span class="tran">&nbsp;<small>이 아이는 둘리에요.</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="11" class="so btn btn-danger">▶</button></th>
							<td>Er kommt aus <span class="btn btn-outline-dark btn-sm">①</span>. <br><span class="tran">&nbsp;<small>그는 <strong>한국</strong>에서 왔어요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="12" class="so btn btn-danger">▶</button></th>
							<td>Er ist <span class="btn btn-outline-dark btn-sm">②</span>. <br><span class="tran">&nbsp;<small>그는 <strong>한국인</strong>이에요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="13" class="so btn btn-danger">▶</button></th>
							<td>Er spricht <span class="btn btn-outline-dark btn-sm">③</span>. <br><span class="tran">&nbsp;<small>그는 <strong>한국어</strong>를 말해요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
						<tr>
							<th scope="col" class="text-center align-middle"><button type="button" id="23" class="so btn btn-info btn-lg">▶</button></th>
							<td colspan="2" class="so text-center bg-info text-white" height="25px"><h3>Kleopatra</h3></td>
							<td rowspan="5" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-C1-2.png" style="max-width: 240px; height: auto;" alt="Kleopatra"></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="14" class="so btn btn-info">▶</button></th>
							<td colspan="2">Das ist Kleopatra. <br><span class="tran">&nbsp;<small>이 사람은 클레오파트라에요.</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="15" class="so btn btn-info">▶</button></th>
							<td>Sie kommt aus <span class="btn btn-outline-dark btn-sm">④</span>. <br><span class="tran">&nbsp;<small>그녀는 <strong>이집트</strong>에서 왔어요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="16" class="so btn btn-info">▶</button></th>
							<td>Sie ist <span class="btn btn-outline-dark btn-sm">⑤</span>. <br><span class="tran">&nbsp;<small>그녀는 <strong>이집트인</strong>이에요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="17" class="so btn btn-info">▶</button></th>
							<td>Sie spricht <span class="btn btn-outline-dark btn-sm">⑥</span>. <br><span class="tran">&nbsp;<small>그녀는 <strong>아랍어</strong>를 말해요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table table-light text-center">
						<tr>
							<th scope="col" class="text-center align-middle"><button type="button" id="24" class="so btn btn-primary btn-lg">▶</button></th>
							<td colspan="2" class="so text-center bg-primary text-white" height="25px"><h3>Mickey Mouse</h3></td>
							<td rowspan="5" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-C1-3.png" style="max-width: 240px; height: auto;" alt="Mickey Mouse"></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="18" class="so btn btn-primary">▶</button></th>
							<td colspan="2">Das ist Mickey Mouse. <br><span class="tran">&nbsp;<small>이 아이는 미키 마우스에요.</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="19" class="so btn btn-primary">▶</button></th>
							<td>Er kommt aus <span class="btn btn-outline-dark btn-sm">⑦</span>. <br><span class="tran">&nbsp;<small>그는 <strong>미국</strong>에서 왔어요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="20" class="so btn btn-primary">▶</button></th>
							<td>Er ist <span class="btn btn-outline-dark btn-sm">⑧</span>. <br><span class="tran">&nbsp;<small>그는 <strong>미국인</strong>이에요.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="21" class="so btn btn-primary">▶</button></th>
							<td>Er spricht <span class="btn btn-outline-dark btn-sm">⑨</span>. <br><span class="tran">&nbsp;<small>그는 <strong>영어</strong>를 말해요..</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
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

				<div class="row text-center">
					<div class="col"></div>
					<div class="col-sm-9 col-md-8 col-lg-7 col-xl-10">
						<table class="table">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">ich</th>
									<td>spreche</td>
								</tr>
								<tr>
									<th scope="row">er/sie</th>
									<td>spricht</td>
								</tr>
								<tr>
									<th scope="row">Sie</th>
									<td>sprechen</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div clasas="col"></div>				
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
						name : "r2 C1",

						sprite : {
							"0": [7.5,49.5],
							"1": [14,.8],
							"2": [35.7,1],
							"3": [18.5,1],
							"4": [55.4,1.2],
							"5": [51.2,1.2],
							"6": [39.4,.9],
							"7": [22.5,1],
							"8": [31.4,.9],
							"9": [47.3,1],
							"10": [11.5,1.3],
							"11": [13.4,1.4],
							"12": [18.0,1.6],
							"13": [21.8,1.8],
							"14": [27.3,1.6],
							"15": [30.5,1.8],
							"16": [35.1,1.7],
							"17": [38.7,1.6],
							"18": [43.2,1.8],
							"19": [46.4,1.8],
							"20": [50.6,1.8],
							"21": [54.6,2],
							"22": [11.3,13],
							"23": [27,13.5],
							"24": [42.9,14]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 2/",
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
							if(obj.part > 9) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
								if(hmn == 22 || hmn == 23 || hmn == 24) {
									$("#"+hmn).closest("table").find(".tran").show();
								} else {
									$("#"+hmn).closest("tr").find(".tran").show();
								}

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
					ion.sound.pause("r2 C1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r2 C1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r2 C1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r2 C1", {
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
					$("span").each(function () {
						if($(this).text() == "①") {
							var iq = $("#lst-1").find("button").text();
						} else if($(this).text() == "②") {
							var iq = $("#lst-2").find("button").text();
						} else if($(this).text() == "③") {
							var iq = $("#lst-3").find("button").text();
						} else if($(this).text() == "④") {
							var iq = $("#lst-4").find("button").text();
						} else if($(this).text() == "⑤") {
							var iq = $("#lst-5").find("button").text();
						} else if($(this).text() == "⑥") {
							var iq = $("#lst-6").find("button").text();
						} else if($(this).text() == "⑦") {
							var iq = $("#lst-7").find("button").text();
						} else if($(this).text() == "⑧") {
							var iq = $("#lst-8").find("button").text();
						} else if($(this).text() == "⑨") {
							var iq = $("#lst-9").find("button").text();
						}
						$(this).text(iq);
						$(this).removeClass("btn btn-outline-dark btn-sm");
						$(this).addClass("font-weight-bold");

					});

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert(na+"번 문제를 풀어주세요!");
				}
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