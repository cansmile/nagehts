<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und ergänzen Sie „?“ oder „.“.<br>
					<small>빈칸에 물음표(?) 또는 마침표(.)를 넣으세요.</small>
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
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4"><table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4">Dialog 1</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></th>
							<td>
								<div>
									<span class="sen">Ich heiße Martin<span class="nu">①</span>
										<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option1" autocomplete="off">.
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2" autocomplete="off">?
											</div>
										</div></span>
								</div>
								<span class="tran"><br><small>나는 마틴이야<span class="nu">①</span></small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
							<td>
								<span class="sen">Und wie heißt du<span class="nu">②</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off">.
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>네 이름은 뭐니<span class="nu">②</span></small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
							<td>
								<span class="sen">Tim<span class="nu">③</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option5" autocomplete="off">.
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option6" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><br><small>팀이야<span class="nu">③</span></small></span>
							</td>
						</tr>
					</tbody>
				</table></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4"><table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4">Dialog 2</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="4" class="so btn btn-outline-success">▶</button></th>
							<td>
								<span class="sen">Wie heißen Sie<span class="nu">④</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option7" autocomplete="off">.
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option8" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>당신의 이름은 무엇인가요<span class="nu">④</span></small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="5" class="so btn btn-outline-info">▶</button></th>
							<td>
								<span class="sen">Mein Name ist Sauer<span class="nu">⑤</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-5">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option9" autocomplete="off">.
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option10" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>저의 이름은 자우어에요<span class="nu">⑤</span></small></span>
							</td>
						</tr>
					</tbody>
				</table></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4"><table class="table">
					<thead>
						<tr>
							<th colspan="2" scope="col" class="text-center"><p class="display-4">Dialog 3</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="6" class="so btn btn-outline-danger">▶</button></th>
							<td>
								<span class="sen">Ich heiße Esswein<span class="nu">⑥</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-6">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option13" autocomplete="off">.
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option14" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>제 이름은 에쓰바인이에요<span class="nu">⑥</span></small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
							<td>
								<span class="sen">Und Sie<span class="nu">⑦</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-7">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option15" autocomplete="off">.
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option16" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>당신은요<span class="nu">⑦</span></small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
							<td>
								<span class="sen">Anna, Anna Kim<span class="nu">⑧</span>
									<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-8">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option17" autocomplete="off">.
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option18" autocomplete="off">?
										</div>
									</div></span>
								<span class="tran"><br><small>안나, 안나 킴이에요<span class="nu">⑧</span></small></span>
							</td>
						</tr>
					</tbody>
				</table></div>
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
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<!-- interact.min.js -->
	<script src="./js/taptogroup.js"></script>
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$(".nu").hide();
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
					name : "r1 U3",
					sprite : {
						"0": [3.8, 34.5],
							"1": [12.7, 1.6],
							"2": [17, 1.5],
							"3": [20.1, .9],
							"4": [23.2, 1.2],
							"5": [26.4, 1.8],
							"6": [29.6, 2],
							"7": [33, 1],
							"8": [35.8, 2.5]
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
				path : "sounds/Reihe 1/",
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				,
				ready_callback: function () {
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
					// 정답확인
					$("#chk").on("click", function() {
						if ($(".an").length < $(".q").length) {
							var na="";
							$(".q").each(function() {
								if ( !$(this).find("div").hasClass("an")) {
									if (na !="") {
										na +=", ";
									}
									na +=$(this).attr("id").substr(-1);
								}
								;
							}
							);
							alert("모든 문제를 풀어주세요.");
							// alert(na + "번 문제를 풀어주세요.");
						}
						else {
							$(".pop").each(function() {
								$(this).removeClass("btn-info");
								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass("btn-warning");
									$(this).addClass("btn-success");
									$(this).parent().find(".nu").addClass("bg-success text-white font-weight-bold rounded p-1 px-2 m-1");
									$(this).closest("td").find(".nu").addClass("bg-success text-white font-weight-bold rounded p-1 px-2 m-1");
									$(this).closest("td").find(".nu").text($.trim($(this).text()));
								}
								else if ($(this).hasClass("o")) {
									$(this).addClass("btn-primary");
									$(this).closest("td").find(".sen").append("<button class=\"btn btn-warning text-dark rounded font-weight-bold p-1 px-2 m-1\">" + $(this).closest("td").find(".o").text() + "</button>");
									$(this).closest("td").find(".nu").addClass("btn p-1 px-2 m-1 btn-danger text-white font-weight-bold");
								}
								else if ($(this).hasClass("an")) {
									$(this).addClass("btn-warning");
									$(this).closest("td").find(".nu").text($.trim($(this).text()));
								}
								else {
									$(this).addClass("btn-light");
								}
								;


							}
							);
							$(".tran").show();
							$(".nu").show();
							$(".q").hide();


							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".sen>.bg-success").length; // 맞춘 항목 수
							var pe = (qr / qa) * 100; // 정답 비율
							var tcl = "white"; // 기본 문자색

							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st = "원어민이세요?";
								var cl = "lime";
								var tcl = "dark";
							} else if(pe > 74) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 49) {
								var st = "쓰읍~ 다시 해 보실까요!";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

							$(this).attr("id","done");

						}
						;
					}
					);
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r1 U3", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r1 U3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r1 U3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r1 U3", {
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
					// 준비되면 HV 보이기
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