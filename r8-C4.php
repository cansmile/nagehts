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
						<h2>Markieren Sie.<br>
							<small>체크해보세요.</small>
						<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
							❚❚
						</button>						
						
						</h2>
						<h3>[ <small>문제를 모두 풀고 확인하세요.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table text-center">
							<tr>
								<td class="border-0" width="30%"><button type="button" id="1" class="so btn btn-outline-orange">▶</button>&nbsp;Herr Martin Fischer</td>
								<td class="border-0" width="30%"><button type="button" id="2" class="so btn btn-outline-success">▶</button>&nbsp;Frau Marie Schmidt</td>
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
											<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Grippe.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Fieber.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">hat Husten.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">kann nicht arbeiten gehen.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">kann nicht einkaufen gehen.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">Max</label>
											</div>
										</div>
									</td>
									<th class="border-0" scope="row">kann heute nicht Fußball spielen.</th>
								</tr>
								<tr>
									<th width="50%" class="border-0 text-center" scope="row" colspan="2">Was sagt der Arzt?</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-8">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option21" autocomplete="off"><label for="option21">Max</label>
											</div>
										</div>
									</td>
									<th class="border-0" scope="row">„Du sollst Aspirin einnehmen.</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-9">
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option22" autocomplete="off"><label for="option22">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option23" autocomplete="off"><label for="option23">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option24" autocomplete="off"><label for="option24">Max</label>
											</div>
										</div>
									</td>
									<th width="50%" class="border-0 ailgn-middle" scope="row">„Nehmen Sie Hustensaft.”</th>
								</tr>
								<tr>
									<td class="border-0 text-right py-0">
										<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-10">
											<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option25" autocomplete="off"><label for="option25">Herr Martin Fischer</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option26" autocomplete="off"><label for="option26">Frau Marie Schmidt</label>
											</div>
											<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option27" autocomplete="off"><label for="option27">Max</label>
											</div>
										</div>
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
			// 각 문장 재생 횟수 초기화
			var hm = new Array();
			for(i = 0; i < $(".so").length; i++) {
				hm[i] = 0;
			}

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "r8 C4",

						sprite : {
							"0": [2.9,68.22],
							"1": [8.97,19.86],
							"2": [31.82,22.85],
							"3": [57.09,14.29]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 8/",
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

						$(this).removeClass("btn-light ");
						if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
							$(this).addClass("btn-danger");

						} else if ($(".btn-success").length == $(".q").length) {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
							$(this).addClass("btn-success");

						} else {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
							$(this).addClass("btn-warning");

						};
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
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>