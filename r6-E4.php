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
					<h2> Hören Sie und markieren Sie.
					<small><br> 듣고 표시하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small>음성을 듣고 알맞은 것을 선택하세요.<br><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-0">
					<table class="table my-0">
						<thead>
							<tr>
								<th class="border-0" scope="col" width="50">&nbsp;</th>
								<th class="border-0" scope="col"></th>
								<th class="border-0" scope="col" width="60%">trennbar <i>oder</i> nicht trennbar</th>
							</tr>
						</thead>
					</table>
					<table class="table table-striped my-0">
						<tbody>
							<tr>
								<th width="50" scope="row"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></th>
								<td>aufstehen
									<span class="tran"><br><small>일어나다</small></span>
								</td>
								<td width="60%" class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option1">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option2">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
								<td>bezahlen
									<span class="tran"><br><small>지불하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></th>
								<td>versuchen
									<span class="tran"><br><small>시도하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option5">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option6">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
								<td>anmachen
									<span class="tran"><br><small>켜다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option7">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option8">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></th>
								<td>einschlafen
									<span class="tran"><br><small>잠들다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option9">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option10">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></th>
								<td>einladen
									<span class="tran"><br><small>초대하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option11">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option12">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-0">
					<div class="col d-sm-none d-md-none d-lg-block d-xl-block">
						<table class="table my-0">
							<thead>
								<tr>
									<th class="border-0" scope="col" width="50">&nbsp;</th>
									<th class="border-0" scope="col"></th>
									<th class="border-0" scope="col" width="60%">trennbar <i>oder</i> nicht trennbar</th>
								</tr>
							</thead>
						</table>
					</div>
					<table class="table table-striped my-0">
						<tbody>
							<tr>
								<th width="50" scope="row"><button type="button" id="7" class="so btn btn-outline-primary">▶</button></th>
								<td>erzählen
									<span class="tran"><br><small>이야기하다</small></span>
								</td>
								<td width="60%" class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option13">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option14">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
								<td>besuchen
									<span class="tran"><br><small>방문하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option15">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option16">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="9" class="so btn btn-outline-primary">▶</button></th>
								<td>gehören
									<span class="tran"><br><small>속하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option17">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option18">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="10" class="so btn btn-outline-primary">▶</button></th>
								<td>aufhängen
									<span class="tran"><br><small>걸다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option19">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option20">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="11" class="so btn btn-outline-primary">▶</button></th>
								<td>verstehen
									<span class="tran"><br><small>이해하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-11">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option21">trennbar</label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option22">nicht trennbar</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="12" class="so btn btn-outline-primary">▶</button></th>
								<td>vorlesen
									<span class="tran"><br><small>낭독하다</small></span>
								</td>
								<td class="text-center">
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-12">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option23">trennbar</label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option24">nicht trennbar</label>
										</div>
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
					name : "r6 U4 Trennbar oder nicht",
					sprite : {
						"0": [6.61, 61.97],
							"1": [15.49, 1.85],
							"2": [20.650, 2.17],
							"3": [25.82, 2.66],
							"4": [30.98, 1.85],
							"5": [35.42, 2.17],
							"6": [39.62, 2.17],
							"7": [44.22, 1.6],
							"8": [48.57, 1.93],
							"9": [52.93, 2.42],
							"10": [57.61, 1.93],
							"11": [61.97, 2.34],
							"12": [66.49, 1.77]
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
				path : "sounds/Reihe 6/",
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
							ion.sound.pause("r6 U4 Trennbar oder nicht", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 U4 Trennbar oder nicht", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 U4 Trennbar oder nicht", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 U4 Trennbar oder nicht", {
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
							var na="";
							$(".q").each(function() {
								if ( !$(this).find("div").hasClass("an")) {
									if (na !="") {
										na +=", ";
									}
									na +=$(this).attr("id").substr(4);
								}
								;
							}
							);
							alert("모든 문제를 풀어주세요.");
							// alert(na + "번 문제를 풀어주세요.");
						}
						else {
							$(".tran").show();
							$(".pop").each(function() {
								$(this).removeClass("btn-info");
								if ($(this).hasClass("o") && $(this).hasClass("an")) {
									$(this).removeClass("btn-warning");
									$(this).addClass("btn-success");
								}
								else if ($(this).hasClass("o")) {
									$(this).addClass("btn-warning font-weight-bold");
								}
								else if ($(this).hasClass("an")) {
									$(this).addClass("btn-danger");
								}
								else {
									$(this).addClass("btn-light");
								}
								;
							}
							);
							$(this).removeClass("btn-light ");

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

						}
						;
					}
					);
					$("#0").show();
					$(".alert").hide();
					// $("#qst-1>div.o").addClass("an");
					// $("#qst-1>div.o").addClass("btn-warning");
					// $("#qst-1>div.o").removeClass("btn-light");
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