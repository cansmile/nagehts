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
					</div>
				</div>

				<div class="row text-center">
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A2-1.png" style="max-width: 240px; height: auto;" alt="Sandmännchen"><br>Sandmännchen</div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A2-2.png" style="max-width: 240px; height: auto;" alt="Pororo"><br>Pororo</div>
					<div class="col"><img src="./images/Reihe 2/Reihe-2-A2-3.png" style="max-width: 150px; height: auto;" alt="Minnie Mouse"><br>Minnie Mouse</div>
				</div>
				<div class="row">
					<div class="mb col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
							Berlin
						</button>
						<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="2">
							California
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
							Korea
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="4">
							Seoul
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="5">
							Deutschland
						</button>
						<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
							Amerika
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-light text-center">
						<tr>
							<th class="bg-light" scope="col">번호</th>
							<th class="bg-light" scope="col">문장</th>
							<th class="bg-light" scope="col">국가/도시</th>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="7" class="so btn btn-primary">1</button></th>
							<td colspan="2">Hallo, Sandmännchen! Woher kommst du? <br><span class="tran">&nbsp;<small>안녕, 잔맨셴! 너는 어디에서 왔니?</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="8" class="so btn btn-danger">2</button></th>
							<td>Ich komme aus <span class="btn btn-outline-dark btn-sm">①</span> <br><span class="tran">&nbsp;<small>나는 <strong>독일</strong>에서 왔어.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="9" class="so btn btn-danger">3</button></th>
							<td>und ich wohne in <span class="btn btn-outline-dark btn-sm">②</span>. <br><span class="tran">&nbsp;<small>그리고 나는 <strong>베를린</strong>에 살아.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-light text-center">
						<tr>
							<th class="bg-light" scope="col">번호</th>
							<th class="bg-light" scope="col">문장</th>
							<th class="bg-light" scope="col">국가/도시</th>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="10" class="so btn btn-primary">1</button></th>
							<td colspan="2">Hi, Pororo ! Woher kommst du? <br><span class="tran">&nbsp;<small>안녕, 뽀로로! 너너는 어디에서 왔니?</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="11" class="so btn btn-danger">2</button></th>
							<td>Ich komme aus <span class="btn btn-outline-dark btn-sm">③</span>. <br><span class="tran">&nbsp;<small>나는 <strong>한국</strong>에서 왔어.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="12" class="so btn btn-danger">3</button></th>
							<td>Ich wohne in <span class="btn btn-outline-dark btn-sm">④</span>. <br><span class="tran">&nbsp;<small>나는 <strong>서울</strong>에서 살아.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
					</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-light text-center">
						<tr>
							<th class="bg-light" scope="col">번호</th>
							<th class="bg-light" scope="col">문장</th>
							<th class="bg-light" scope="col">국가/도시</th>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="13" class="so btn btn-primary">1</button></th>
							<td colspan="2">Hallo, Minnie Mouse, woher kommst du? <br><span class="tran">&nbsp;<small>안녕, 미니 마우스, 너는 어디에서 왔니?</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="14" class="so btn btn-danger">2</button></th>
							<td>Ich komme aus <span class="btn btn-outline-dark btn-sm">⑤</span>. <br><span class="tran">&nbsp;<small>나는 <strong>미국</strong>에서 왔어.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block">
											▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="15" class="so btn btn-danger">3</button></th>
							<td colspan="2">Und wo wohnst du? <br><span class="tran">&nbsp;<small>그러면 어디에서 살아?</small></span></td>
						</tr>
						<tr>
							<th class="bg-light" scope="row"><button type="button" id="16" class="so btn btn-primary">4</button></th>
							<td>Ich wohne in <span class="btn btn-outline-dark btn-sm">⑥</span>. <br><span class="tran">&nbsp;<small>나는 <strong>캘리포니아</strong>에 살아.</small></span></td>
							<td>
								<div class="itm-lst 1itm" id="lst-6">
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

			</div>
			<div class="row text-center">
				<div class="col"></div>
				<div class="col-sm-9 col-md-8 col-lg-7 col-xl-10">
					<table class="table text-center">
						<thead>
							<th scope="col">
								Nach-(Familien)namen (Herr / Frau)
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Müller Bauer Wecker Schneider Koch Schmidt Schumacher</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div clasas="col"></div>				
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

				ion.sound({
					sounds : [{
						name : "r2 A2",

						sprite : {
							"0": [3.1,54.4],
							"1": [21.1,.6],
							"2": [56.5,.7],
							"3": [34.1,.6],
							"4": [36.4,.5],
							"5": [18.7,.6],
							"6": [49,.8],
							"7": [10.1,3.6],
							"8": [17.8,1.9],
							"9": [20,1.9],
							"10": [26.7,3.4],
							"11": [33.1,2.1],
							"12": [35.5,1.5],
							"13": [41.9,3.2],
							"14": [48,2.3],
							"15": [52.1,1.5],
							"16": [55.5,2]
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
						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
						};
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
					ion.sound.pause("r2 A2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r2 A2", {
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