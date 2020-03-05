<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라하세요.</small>
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
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="12" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-C1-1.png" style="max-width: 240px; height: auto;"></th>
								<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td>Wer ist das?<span class="tran"><br><small>이 사람들은 누구니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="sen">Das ist<span class="nu"></span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-1">
											<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3" autocomplete="off">mein
											</div>
											<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답">
												<input type="radio" name="options" id="option4" autocomplete="off">meine
											</div>
											<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option4" autocomplete="off">meinen
											</div>
										</div> Familie.<span class="ans"></span><span class="tran"><br><small>우리 가족이야.</small></span></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich komme aus einer Großfamilie.<span class="tran"><br><small>우리는 대가족이야.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="sen">Ich habe einen Vater,<span class="nu"></span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-2">
												<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
													<input type="radio" name="options" id="option3" autocomplete="off">ein
												</div>
												<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답">
													<input type="radio" name="options" id="option4" autocomplete="off">eine
												</div>
												<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
													<input type="radio" name="options" id="option4" autocomplete="off">einen
												</div>
											</div> Mutter und viele Geschwister.<span class="ans"></span><span class="tran"><br><small>아버지, 어머니 그리고 많은 형제자매가 있어.</small></span></span></td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
								<td>Das ist schön! Wie viele Geschwister hast du?<span class="tran"><br><small>좋겠다! 형제자매는 몇 명이니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich habe sechs Geschwister.<span class="tran"><br><small>6명의 형제자매가 있어.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
								<td>Und wie viele Geschwister hast du?<span class="tran"><br><small>그러면 넌 형제자매가 몇명이야? </small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
								<td><span class="sen">Ich habe <span class="nu"></span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-3">
													<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option3" autocomplete="off">ein
													</div>
													<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답">
														<input type="radio" name="options" id="option4" autocomplete="off">eine
													</div>
													<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">einen
													</div>
												</div>Schwester und einen Bruder.<span class="ans"></span><span class="tran"><br><small>누나와 형이 있어.</small></span></span></td>
							</tr>
							<tr>
								<td><button type="button" id="9" class="so btn btn-outline-primary">▶</button></td>
								<td>Und wer ist das?<span class="tran"><br><small>그럼 이 분은 누구시니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="10" class="so btn btn-outline-primary">▶</button></td>
								<td>Kommt er aus Japan?<span class="tran"><br><small>일본인이시니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
								<td><span class="sen">Ah, das ist<span class="nu"></span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-4">
													<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option3" autocomplete="off">mein
													</div>
													<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">meine
													</div>
													<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">meinen
													</div>
												</div> Schwager.<span class="ans"></span><span class="tran"><br><small>아, 매형이야  .</small></span></span></td>
							</tr>
							<tr>
								<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
								<td>Er kommt aus Korea.<span class="tran"><br><small>그는 한국인이야.</small></span></td>
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
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<thead>
							<tr>
								<th class="border-0" scope="col">unbestimmter Artikel</th>
								<th class="border-0 text-primary" scope="col">m</th>
								<th class="border-0 text-danger" scope="col">f</th>
								<th class="border-0 text-purple" scope="col">n</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="border-0" scope="row">Nominativ <small>주격</small></th>
								<td class="border-0 text-primary">ei<strong>n</strong></td>
								<td class="border-0 text-danger">ei<strong>ne</strong></td>
								<td class="border-0 text-purple">ei<strong>n</strong></td>
							</tr>
							<tr>
								<th class="border-0" scope="row">Akkusativ <small>목적격</small></th>
								<td class="border-0 text-primary">ei<strong>nen</strong></td>
								<td class="border-0 text-danger">ei<strong>ne</strong></td>
								<td class="border-0 text-purple">ei<strong>n</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td>ich</td>
								<td>hab<strong>e</strong></td>
							</tr>
							<tr>
								<td>du</td>
								<td>ha<strong>st</strong></td>
							</tr>
							<tr>
								<td>Sie(<small>당신</small>)</td>
								<td>hab<strong>en</strong></td>
							</tr>
							<tr>
								<td>er/sie(<small>그녀</small>)/es</td>
								<td>ha<strong>t</strong></td>
							</tr>
							<tr>
								<td>sie(<small>그들</small>)</td>
								<td>hab<strong>en</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	
	
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
		$(".ant").hide();
		var an=new Array();
		var an=["24", "22"];
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
					name : "r3 C1",
					sprite : {
						"0": [8, 50],
							"1": [13.6, 1.4],
							"2": [16.4, 2.1],
							"3": [18.8, 3],
							"4": [22.3, 4.9],
							"5": [29.6, 4.3],
							"6": [35.8, 2],
							"7": [37.9, 2.7],
							"8": [42.3, 3.7],
							"9": [46, 1.6],
							"10": [48, 2],
							"11": [53.6, 2.4],
							"12": [56, 2]
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+obj.part).closest("tr").find(".tran").show();
						}
					}
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
							ion.sound.pause("r3 C1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 C1", {
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
						if ($(".an").length < $(".q").length) {
							var na = "";
							$(".q").each(function() {
								if (!$(this).find("div").hasClass("an")) {
									if (na != "") {
										na += ", ";
									}
									na += $(this).attr("id").substr(-1);
								};
							});

							alert("모든 문제를 풀어주세요.");
							// alert(na + "번 문제를 풀어주세요.");
						} else {
							$(".pop").each(function() {
								$(this).removeClass("btn-info");

								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass("btn-warning");
									$(this).addClass("btn-success");
									$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-success font-weight-bold");
									$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
								} else if ($(this).hasClass("o")) {
									$(this).addClass("btn-<?php echo($color); ?>");
									$(this).closest(".sen").find(".ans").html($.trim($(this).closest(".sen").find(".o").text()));
									$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-danger font-weight-bold");
									$(this).closest(".sen").find(".ans").addClass("rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2");
								} else if ($(this).hasClass("an")) {
									$(this).addClass("btn-warning");
									$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
								} else {
									$(this).addClass("btn-light");
								};
								$(this).remove();
							});
							$(".tran").show();
							$(".nu").show();
							$(".q").hide();

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".bg-success").length; // 맞춘 항목 수
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
							
						};
					});

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