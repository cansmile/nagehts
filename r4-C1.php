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
					<h2> Hören Sie und wählen Sie aus.
					<small><br> 듣고 선택하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small>음성을 듣고 있는 것을 선택하세요.<br><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장과 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table table-light text-center">
						<tbody>
							<tr>
								<td class="align-middle"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1"><img src="./images/Reihe 4/Reihe-4-C1-2.png" alt="Auto" style="max-width: 240px; height: auto;"></label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2"><img src="./images/Reihe 4/Reihe-4-C1-1.png" alt="Fahrrad" style="max-width: 240px; height: auto;"></label>
										</div>
									</div>
									<span class="tran"><br>Was ist das? Ist das ein Fahrrad?&nbsp;Nein, das ist kein Fahrrad. Das ist ein Auto.&nbsp;<small><br>이것은 무엇인가요? 이것은 자전거인가요? 아니오, 이것은 자전거가 아니에요. 이것은 자동차에요.</small></span>
								</td>
							</tr>
							<tr>
								<td class="align-middle"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3"><img src="./images/Reihe 4/Reihe-4-C1-3.png" alt="Katze" style="max-width: 240px; height: auto;"></label>
										</div>
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4"><img src="./images/Reihe 4/Reihe-4-C1-4.png" alt="Hund" style="max-width: 240px; height: auto;"></label>
										</div>
									</div>
									<span class="tran"><br>Was ist das? Ist das eine Katze?&nbsp;Nein, das ist keine Katze. Das ist ein Hund.<small><br>이것은 무엇인가요? 이것은 고양이인가요? 아니오, 이것은 고양이가 아니에요. 이것은 개에요.</small></span>
								</td>
							</tr>
							<tr>
								<td class="align-middle"><button type="button" id="3" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
										<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5"><img src="./images/Reihe 4/Reihe-4-C1-6.png" alt="Frau" style="max-width: 240px; height: auto;"></label>
										</div>
										<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6"><img src="./images/Reihe 4/Reihe-4-C1-5.png" alt="Mann" style="max-width: 240px; height: auto;"></label>
										</div>
									</div>
									<span class="tran"><br>Wer ist das? Ist das ein Mann? Nein, das ist kein Mann. Das ist eine Frau.<span class="tran">&nbsp;<small><br>이 사람은 누구인가요? 이 사람은 남자인가요? 아니오, 이 사람은 남자가 아니에요. 이 사람은 여자에요.</small></span>
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
			<div class="row">
				<div class="col">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th class="border-0" scope="col">&nbsp;</th>
								<th class="border-0 text-primary" scope="col" colspan="2"><strong>m</strong></th>
								<th class="border-0 text-danger" scope="col" colspan="2"><strong>f</strong></th>
								<th class="border-0 text-purple" scope="col" colspan="2"><strong>n</strong></th>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td class="border-0 text-primary">부정관사</td>
								<td class="border-0 text-primary">부정관사</td>
								<td class="border-0 text-danger">부정관사</td>
								<td class="border-0 text-danger">부정관사</td>
								<td class="border-0 text-purple">부정관사</td>
								<td class="border-0 text-purple">부정관사</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle">Nominativ<br><small>주격</small></td>
								<td class="align-middle text-primary">ein Mann</td>
								<td class="align-middle text-primary">kein Mann</td>
								<td class="align-middle text-danger">eine Katze</td>
								<td class="align-middle text-danger">keine Katze</td>
								<td class="align-middle text-purple">ein Fahrrad</td>
								<td class="align-middle text-purple">kein Fahrrad</td>
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
					name : "r4 C1",
					sprite : {
						"0": [16.6, 33.4],
							"1": [16.6, 10.9],
							"2": [30, 10.6],
							"3": [41.6, 9]
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
				path : "sounds/Reihe 4/",
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
							ion.sound.pause("r4 C1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r4 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r4 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r4 C1", {
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
									$(this).addClass("btn-primary");
								}
								else if ($(this).hasClass("an")) {
									$(this).addClass("btn-warning");
								}
								else {
									$(this).addClass("btn-light");
								}
								;
							}
							);

				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				var qa = $(".q").length; // 전체 문항 수
				var qr = $(".btn-success").length; // 맞춘 항목 수
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