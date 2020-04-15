<?php require "header.php"; ?>
	<body>
<?php require "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Markieren Sie.<br>
							<small>체크해보세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table text-center">
							<tr>
								<td class="border-0" width="30%"><button type="button" id="1" class="so btn btn-outline-orange">▶</button>&nbsp;Martin Fischer</td>
								<td class="border-0" width="30%"><button type="button" id="2" class="so btn btn-outline-success">▶</button>&nbsp;Marie Schmidt</td>
								<td class="border-0" width="30%"><button type="button" id="3" class="so btn btn-outline-purple">▶</button>&nbsp;Max</td>
							</tr>
						</table>
					</div>
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>마틴피셔는 독감이다.</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Grippe.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>막스는 열이 있다.</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Fieber.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>마리 슈미트는 기침을 한다.</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Husten.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>마틴 피셔는 일하러 갈 수 없다.</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">kann nicht arbeiten gehen.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>마리 슈미트는 쇼핑을 갈 수 없다.</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">kann nicht einkaufen gehen.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>막스는 오늘 축구를 할 수 없다.</small></span>
									</td>
									<th class="border-0" scope="row">kann heute nicht Fußball spielen.</th>
								</tr>
								<tr>
									<th width="50%" class="border-0 text-center" scope="row" colspan="2">Was sagt der Arzt?<span class="tran"><br><small>의사는 무슨 말을 하나요?</small></span></th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option21" autocomplete="off"><label for="option21">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>“아스피린을 먹어야 해.”</small></span>
									</td>
									<th class="border-0" scope="row">„Du sollst Aspirin einnehmen“</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option22" autocomplete="off"><label for="option22">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option23" autocomplete="off"><label for="option23">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option24" autocomplete="off"><label for="option24">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>“기침약을 복용하세요.”</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">„Nehmen Sie Hustensaft.”</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option25" autocomplete="off"><label for="option25">Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option26" autocomplete="off"><label for="option26">Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option27" autocomplete="off"><label for="option27">Max</label>
											</div>
										</div>
										<span class="tran"><br><small>“누워있으셔야 해요.”</small></span>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">„Sie sollen im Bett bleiben”.</th>
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
		<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?php echo($root); ?>js/popper.min.js"></script>
		<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
		<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			// 각 문장 재생 횟수 초기화
			var hm = new Array();
			$(".so").each(function() {
				hm[$(this).attr("id")] = 0;
			});

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r8 C4",

						sprite : {
							"0": [2.469, 68.337],
							"1": [8.97,19.86],
							"2": [31.82,22.85],
							"3": [57.09,14.29]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "<?php echo($root); ?>sounds/Reihe 8/",
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
							if(obj.part > 0) {
								$("#"+obj.part).html("▶");
							}

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}


						}

					}, ready_callback: function () {

				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
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
					ion.sound.pause("r8 C4", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r8 C4", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r8 C4", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r8 C4", {
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


			// 정답확인
			$("#chk").on("click", function() {
				if($(this).attr("id") == "chk") {
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

						alert("모든 문제를 풀어주세요.");
						// alert(na + "번 문제를 풀어주세요.");
					} else {
						$(".tran").show();
						$(this).attr("id","done");
						$(".pop").each(function() {
							$(this).removeClass("btn-info");

							$(this).removeClass("btn-warning");
							if ($(this).hasClass("o") && $(this).hasClass("an")) {
								$(this).addClass("btn-success");
							} else if ($(this).hasClass("o")) {
								$(this).addClass("btn-warning");
							} else if ($(this).hasClass("an")) {
								$(this).addClass("btn-danger");
							} else {
								$(this).addClass("btn-light");
							};


						});


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
				var st = "쓰읍~ 다시 해 보실까요?";
				var cl = "primary";
			} else {
				var st = "좀 더 분발해 주세요~";
				var cl = "danger";
			}

			$(this).addClass("btn-" + cl + " text-" + tcl);
			$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

					};
				}
			});

			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan = [1,4,9];
			var il = $(".q").length;
			for(var p = 0; p < pan.length; p++) {
				var pani = "#qst-" + pan[p];
				$("#qst-" + pan[p] + ">div.o").addClass("an");
				$("#qst-" + pan[p] + ">div.o").addClass("btn-warning");
				$("#qst-" + pan[p] + ">div.o").removeClass("btn-light");
			}

});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>