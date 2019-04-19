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
						<h2>Richtig oder falsch? Markieren Sie.<br>
							<small>어느 것이 옳은지 체크해보세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3><small>2번 들어야 번역이 나옵니다</small></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center align-middle"><button type="button" id="18" class="so btn btn-danger btn-lg">▶</button></th>
									<td colspan="2" class="so text-center display-4 text-white bg-danger" height="100px">Dialog 1</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
									<td>Ich heiß<span class="nu">①</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-1">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">en</label>
											</div>
										</div>
									 Tim.<span class="tran"><br><small>나는 팀이라고 해.</small></span></td>
									<td rowspan="5" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-A6-1.png" alt="Tim" style="max-width: 320px; height: auto;"></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></th>
									<td>Ich komm<span class="nu">②</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-2">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">en</label>
											</div>
										</div>
									  aus Frankreich.<span class="tran"><br><small>나는 프랑스 출신이야.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
									<td>Ich wohn<span class="nu">③</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-3">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">en</label>
											</div>
										</div>
									  in Paris.<span class="tran"><br><small>나는 파리에 살아.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></th>
									<td>Das ist mein Vater.<span class="tran"><br><small>이 분은 나의 아버지야.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
									<td>Er wohn<span class="nu">④</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-4">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">e</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">en</label>
											</div>
										</div>
									  in Marseille.<span class="tran"><br><small>그는 마르세유에 살고 계셔.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center align-middle"><button type="button" id="19" class="so btn btn-warning btn-lg">▶</button></th>
									<td colspan="2" class="so text-center display-4 bg-warning" height="100px">Dialog 2</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><button type="button" id="6" class="so btn btn-outline-warning">▶</button></td>
									<td>Ich heiß<span class="nu">⑤</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-5">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">en</label>
											</div>
										</div>
									 Susi.<span class="tran"><br><small>나는 수시야.</small></span>
									</td>
									<th scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-A6-2.png" alt="Susi" style="max-width: 320px; height: auto;"></th>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="7" class="so btn btn-outline-warning">▶</button></th>
									<td>Das ist mein Teddybär, Lars.<span class="tran"><br><small>이것은 나의 태디베어야, 라스야.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="8" class="so btn btn-outline-warning">▶</button></th>
									<td>Ich wohn<span class="nu">⑥</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-6">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">en</label>
											</div>
										</div>
									  in Seoul,<span class="tran"><br><small>나는 서울에 살아.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="9" class="so btn btn-outline-warning">▶</button></th>
									<td>Aber ich komm<span class="nu">⑦</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-7">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option21" autocomplete="off"><label for="option21">en</label>
											</div>
										</div>
									  aus England.<span class="tran"><br><small>그렇지만 영국에서 왔어.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="10" class="so btn btn-outline-warning">▶</button></th>
									<td>Das ist meine Mutter.<span class="tran"><br><small>이 분은 나의 엄마야.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="11" class="so btn btn-outline-warning">▶</button></th>
									<td>Sie heiß<span class="nu">⑧</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-8">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option22" autocomplete="off"><label for="option22">e</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option23" autocomplete="off"><label for="option23">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option24" autocomplete="off"><label for="option24">en</label>
											</div>
										</div>
									  Monalisa<span class="tran"><br><small>그녀는 모나리자라고 불려.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="12" class="so btn btn-outline-warning">▶</button></th>
									<td>und wohn<span class="nu">⑨</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-9">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option25" autocomplete="off"><label for="option25">e</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option26" autocomplete="off"><label for="option26">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option27" autocomplete="off"><label for="option27">en</label>
											</div>
										</div>
									  in Seoul.<span class="tran"><br><small>그리고 서울에 살고 계셔.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center align-middle"><button type="button" id="20" class="so btn btn-primary btn-lg">▶</button></th>
									<td colspan="2" class="so text-center display-4 text-white bg-primary" height="100px">Dialog 3</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="13" class="so btn btn-outline-primary">▶</button></th>
									<td>Ich komm<span class="nu">⑩</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-10">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option28" autocomplete="off"><label for="option28">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option29" autocomplete="off"><label for="option29">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option30" autocomplete="off"><label for="option30">en</label>
											</div>
										</div>
									  aus der Türkei.<span class="tran"><br><small>나는 터키출신이야.</small></span></td>
									  <td rowspan="5" class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-A6-3.png" alt="Wie" style="max-width: 320px; height: auto;"></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="14" class="so btn btn-outline-primary">▶</button></th>
									<td>Ich wohn<span class="nu">⑪</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-11">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option31" autocomplete="off"><label for="option31">e</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option32" autocomplete="off"><label for="option32">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option33" autocomplete="off"><label for="option33">en</label>
											</div>
										</div>
									  in Dresden.<span class="tran"><br><small>나는 드레스덴에 살아.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="15" class="so btn btn-outline-primary">▶</button></th>
									<td>Das ist mein Freund.<span class="tran"><br><small>얘는 내 친구야.</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="16" class="so btn btn-outline-primary">▶</button></th>
									<td>Er komm<span class="nu">⑫</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-12">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option34" autocomplete="off"><label for="option34">e</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option35" autocomplete="off"><label for="option35">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option36" autocomplete="off"><label for="option36">en</label>
											</div>
										</div>
									  aus Japan,<span class="tran"><br><small>그는 일본에서 왔어,</small></span></td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="17" class="so btn btn-outline-primary">▶</button></th>
									<td>aber wohn<span class="nu">⑬</span>
										<div class="btn-group btn-group-toggle border border-dark border-left-0 border-top-0 border-right-0 q" data-toggle="buttons" id="qst-13">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option37" autocomplete="off"><label for="option37">e</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option38" autocomplete="off"><label for="option38">t</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option39" autocomplete="off"><label for="option39">en</label>
											</div>
										</div>
									  in Leipzig.<span class="tran"><br><small>그렇지만 라이프치히에 살아.</small></span></td>
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
						name : "r2 A6",

						sprite : {
							"0": [7.8,69],
							"1": [7.7,1.6],
							"2": [12.1,2.7],
							"3": [17.1,2.4],
							"4": [21.9,2.2],
							"5": [26.2,2],
							"6": [31.8,1.7],
							"7": [35.3,3],
							"8": [40.3,1.5],
							"9": [42,1.9],
							"10": [48.3,1.7],
							"11": [52.4,1.4],
							"12": [53.9,1.2],
							"13": [59.2,2.2],
							"14": [63.9,2.3],
							"15": [68.5,2],
							"16": [72.8,1.5],
							"17": [74.6,1.8],
							"18": [7.8,21],
							"19": [31.5,24],
							"20": [59.3,17.3]
						}
					},{
						name : "Bama_Country_Country",
						volume : 0.25,
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						volume : 0.25,
						path : "sounds/"
					}],
					path : "sounds/Reihe 2/",
					preload : true,
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
								if(hmn == 18 || hmn == 19 || hmn == 20) {
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
					ion.sound.pause("r2 A6", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r2 A6", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r2 A6", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r2 A6", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						if(hm == 0) {
							$(this).closest("div").find("p").hide();
						}
						$("#0_p").show();
					};
				};
			});


			// 정답확인
			$("#chk").on("click", function() {
				if ($(".an").length < $(".q").length) {
					var na = "";
					$(".q").each(function() {
						if (!$(this).find("div").hasClass("an")) {
							if (na != "") {
								na += ", ";
							}
							na += $(this).attr("id").substr(4);
						};
					});

					alert(na + "번 문제를 풀어주세요.");
				} else {
					$(".tran").show();
					$(".pop").each(function() {
						$(this).removeClass("btn-info");

						if ($(this).hasClass("o") && $(this).hasClass("an")) {
							$(this).removeClass("btn-warning");
							$(this).addClass("btn-success");
						} else if ($(this).hasClass("o")) {
							$(this).addClass("btn-primary");
						} else if ($(this).hasClass("an")) {
							$(this).addClass("btn-warning");
						} else {
							$(this).addClass("btn-light");
						};

						
					});

					$("span").each(function () {
						if($(this).text() == "①") {
							var iq = $("#qst-1>div.o").find("label").text();
						} else if($(this).text() == "②") {
							var iq = $("#qst-2>div.o").find("label").text();
						} else if($(this).text() == "③") {
							var iq = $("#qst-3>div.o").find("label").text();
						} else if($(this).text() == "④") {
							var iq = $("#qst-4>div.o").find("label").text();
						} else if($(this).text() == "⑤") {
							var iq = $("#qst-5>div.o").find("label").text();
						} else if($(this).text() == "⑥") {
							var iq = $("#qst-6>div.o").find("label").text();
						} else if($(this).text() == "⑦") {
							var iq = $("#qst-7>div.o").find("label").text();
						} else if($(this).text() == "⑧") {
							var iq = $("#qst-8>div.o").find("label").text();
						} else if($(this).text() == "⑨") {
							var iq = $("#qst-9>div.o").find("label").text();
						} else if($(this).text() == "⑩") {
							var iq = $("#qst-10>div.o").find("label").text();
						} else if($(this).text() == "⑪") {
							var iq = $("#qst-11>div.o").find("label").text();
						} else if($(this).text() == "⑫") {
							var iq = $("#qst-12>div.o").find("label").text();
						} else if($(this).text() == "⑬") {
							var iq = $("#qst-13>div.o").find("label").text();
						}

						$(this).text(iq);

					});
					$(".nu").addClass("font-weight-bold");
					$(".nu").show();
					$(".q").hide();

					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-primary");

					} else {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});
		$("#0").show();
		$(".alert").hide();
		$("#qst-1>div.o").addClass("an");
		$("#qst-1>div.o").addClass("btn-warning");
		$("#qst-1>div.o").removeClass("btn-light");
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>