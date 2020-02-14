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
					<h2>Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라 하세요.</small>
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
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen">Hallo, ich <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option1" autocomplete="off"><label for="option3">heiße</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option2" autocomplete="off"><label for="option3">heißt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option3" autocomplete="off"><label for="option4">heißen</label>
											</div>
										</div> Abena.<span class="ans"></span><span class="tran"><br><small>안녕하세요, 저는 아비나에요.</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen">Wie <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option4" autocomplete="off"><label for="option3">heiße</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option5" autocomplete="off"><label for="option3">heißt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option6" autocomplete="off"><label for="option4">heißen</label>
											</div>
										</div> Sie?<span class="ans"></span><span class="tran"><br><small>당신은 이름이 뭐에요?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-info">▶</button></th>
								<td><span class="sen">Ich <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option7" autocomplete="off"><label for="option3">sind</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option8" autocomplete="off"><label for="option3">bin</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option9" autocomplete="off"><label for="option4">ost</label>
											</div>
										</div> Muammar.<span class="ans"></span><span class="tran"><br><small>저는 무아마에요.</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-info">▶</button></th>
								<td><span class="sen">Woher <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option10" autocomplete="off"><label for="option3">komme</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option11" autocomplete="off"><label for="option3">kommt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option12" autocomplete="off"><label for="option4">kommen</label>
											</div>
										</div> Sie?<span class="ans"></span><span class="tran"><br><small>당신은 어디에서 왔나요?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen">Ich <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option13" autocomplete="off"><label for="option3">komme</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option14" autocomplete="off"><label for="option3">kommt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option15" autocomplete="off"><label for="option4">kommen</label>
											</div>
										</div> aus Ghana. Und Sie?<span class="ans"></span><span class="tran"><br><small>저는 가나 출신이에요. 당신은요?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-info">▶</button></th>
								<td><span class="sen">Ich <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option16" autocomplete="off"><label for="option3">komme</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option17" autocomplete="off"><label for="option3">kommt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option18" autocomplete="off"><label for="option4">kommen</label>
											</div>
										</div> aus Libyen.<span class="ans"></span><span class="tran"><br><small>저는 리비아출신이에요.</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-info">▶</button></th>
								<td><span class="sen">Wo <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option19" autocomplete="off"><label for="option3">liege</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option20" autocomplete="off"><label for="option3">liegt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option21" autocomplete="off"><label for="option4">liegen</label>
											</div>
										</div> Ghana?<span class="ans"></span><span class="tran"><br><small>가나는 어디에 있죠?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen">Ghana <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option22" autocomplete="off"><label for="option3">liege</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option23" autocomplete="off"><label for="option3">liegt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option24" autocomplete="off"><label for="option4">liegen</label>
											</div>
										</div> in Westafrika.<span class="ans"></span><span class="tran"><br><small>가나는 서아프리카에 있어요.</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen">Wo <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option25" autocomplete="off"><label for="option3">liege</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option26" autocomplete="off"><label for="option3">liegt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option27" autocomplete="off"><label for="option4">liegen</label>
											</div>
										</div> Libyen?<span class="ans"></span><span class="tran"><br><small>리비아는 어디에 있나요?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="10" class="so btn btn-outline-danger">▶</button></th>
								<td><span class="sen"><span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option28" autocomplete="off"><label for="option3">Liege</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option29" autocomplete="off"><label for="option3">Liegt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option30" autocomplete="off"><label for="option4">Liegen</label>
											</div>
										</div> Libyen in Westafrika?<span class="ans"></span><span class="tran"><br><small>리비아는 서아프리카에 있나요?</small></span></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-info">▶</button></th>
								<td><span class="sen">Nein, Libyen <span class="nu"></span><div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option31" autocomplete="off"><label for="option3">liege</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
												<input type="radio" name="options" id="option32" autocomplete="off"><label for="option3">liegt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
												<input type="radio" name="options" id="option33" autocomplete="off"><label for="option4">liegen</label>
											</div>
										</div> in Nordafrika.<span class="ans"></span><span class="tran"><br><small>아뇨, 리비아는 북아프라카에 있어요.</small></span></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col" class="text-center">vier Himmelsrichtungen<br><small>네 방위</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="height: 65px;">der Norden<br><small>북</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Westen<br><small>서</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Osten<br><small>동</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">der Süden<br><small>남</small></td>
							</tr>
							<tr>
								<td style="height: 65px;">die Mitte<br><small>중앙</small></td>
							</tr>
							<tr>
								<td style="height: 65px;"><img src="./images/Reihe 2/Reihe-2-D2-1.png" alt="Map" style="max-width: 100%; height: auto;"></td>
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
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-top-0 border-bottom-0 text-center display-4">Norden</td>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
							</tr>
							<tr>
								<td class="border-top-0 border-bottom-0 align-middle text-right display-4">Westen</td>
								<td class="border-top-0 text-center align-middle border-bottom-0"><img src="./images/Reihe 2/Reihe-2-D2-2.png" alt="Him class="border-top-0 border-bottom-0"melsrichtungen" style="max-height: 320px; width: auto"></td>
								<td class="border-top-0 border-bottem-0 align-middle text-left display-4">Osten</td>
							</tr>
							<tr>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-top-0 border-bottom-0 text-center display-4">Süden</td>
								<td class="border-top-0 border-bottom-0">&nbsp;</td>
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
					name : "r2 D2",
					sprite : {
						"0": [3.7, 48.2],
							"1": [8.4, 2.8],
							"2": [11.8, 1.3],
							"3": [17.5, 1.4],
							"4": [19.3, 1.4],
							"5": [24.4, 3.3],
							"6": [30.3, 2.1],
							"7": [32.7, 1.3],
							"8": [37.9, 2.1],
							"9": [40.4, 1.3],
							"10": [42.5, 2.2],
							"11": [48.2, 3.8]
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
				path : "sounds/Reihe 2/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					// 재상이 끝날 때 2번 이상이면 번역 보이기
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
							ion.sound.pause("r2 D2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r2 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 D2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r2 D2", {
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
							


							$(this).removeClass("btn-light ");

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $("span.bg-success").length; // 맞춘 항목 수
							var pe = (qr / qa) * 100; // 정답 비율
							var tcl = "white"; // 기본 문자색

							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st = "원어민이세요?";
								var cl = "lime";
								var tcl = "dark";
							} else if(pe > 79) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 59) {
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
						};
					}
							);

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