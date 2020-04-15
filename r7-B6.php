<?php require "header.php"; ?>
	<body>
<?php require "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
							Liebe Grüße<span class="tran"><br><small>사랑을 담아</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="2">
							leider kann ich doch nicht kommen.<span class="tran"><br><small>안타 깝게도 난 갈 수가 없어.</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="3">
							Betreff: Kino<span class="tran"><br><small>제목: 영화</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="4">
							Vielleicht können wir morgen ins Kino gehen?<span class="tran"><br><small>우리 내일 영화 보러 갈수 있을까?</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="5">
							Lieber Max,<span class="tran"><br><small>막스에게,</small></span>
						</button>
					</div>
		</div>
	</div>
</section>

	<section>
		<div class="container">
						<!-- 고르는 아이템들 -->
			<div class="row">
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2">
				<div class="col-12 mb-4 mt-2 text-center">
					<h2>1. Wählen Sie aus.
						<small><br> 선택하세요.</small>
					</h2>
				</div>
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-0 p-1 px-2 rounded" style="font-size: 1.5em;">Betreff: Kino</span>
									<div class="rounded bg-info text-white m-0 p-3" style="font-size: 1.5em;">Max, ich komme nicht. Keine Lust! Mina</div>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table mt-auto">
						<tbody>
							<tr>
								<td class="border-0 p-0 align-middle">
									Die SMS ist
									<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
										<div class="btn btn-light pop x pb-0" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
											<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">höflich.</label>
										</div>
										<div class="btn btn-light pop o pb-0" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
											<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">unhöflich.</label>
										</div>
									</div>

								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<div class="col-12 mb-4 mt-2 text-center">
					<h2>2. Sortieren Sie Wendungen. Schreiben Sie dann die E-Mail neu.
						<small><br> 아래의 낱말들을 맞는 순으로 정렬하여 이메일을 새로 써보세요. </small>
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
						HV
					</button><button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0_p">
						❚❚
					</button>
					</h2>
					<h3>[ <small>음성을 듣고 내용과 일치하는 문장을 선택하세요.</small> ]</h3>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼을 눌러 듣기를 2번 완료하면 문장과 번역이 나옵니다.</small> ]</h3>

				</div>
				<table class="table">
						<tbody>
							<tr>
								<td class="border-0 my-0 py-1">
									<div class="itm-lst 1itm" id="lst-1">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 my-0 py-1">
									<div class="itm-lst 1itm" id="lst-2">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 my-0 py-1">
									<div class="itm-lst 1itm" id="lst-3">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 my-0 py-1">
									<div class="itm-lst 1itm" id="lst-4">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<td class="border-0 my-0 py-1">
									<div class="itm-lst 1itm" id="lst-5">
												<h2 class="btn btn-warning btn-xl ttl d-block">
												▼ </h2>
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

<div id="marg"></div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?=$root ?>js/popper.min.js"></script>
		<script src="./<?=$root ?>js/bootstrap.js"></script>
		<script src="./<?=$root ?>js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./<?=$root ?>js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$("#chk").hide();

			$(document).ready(function() {

				// 각 문장 재생 횟수 초기화
				var hm = new Array(), sen = new Array();
				$(".so").each(function() {
					hm[$(this).attr("id")] = 0;
					sen[$(this).attr("id")] = 0;
				});


				ion.sound({
					sounds : [{
						name : "r7 B6 Sotieren Sie Wendungen",

						sprite : {
							"0": [1.46,20.93],
							"1": [20.73,1.91],
							"2": [14.01,2.16],
							"3": [9.31,1.96],
							"4": [16.93,3.06],
							"5": [12.43,1.26]
						}
					},{
						name : "dingdongdang",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "<?=$root ?>sounds/Reihe 7/",
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
							if(obj.part > 5) {
								$("#"+obj.part).html("▶");
							}
							if(hm[hmn] > 1) {
								$("#"+obj.part).closest("button").find(".tran").show();
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
					ion.sound.pause("r7 B6 Sotieren Sie Wendungen", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r7 B6 Sotieren Sie Wendungen", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r7 B6 Sotieren Sie Wendungen", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r7 B6 Sotieren Sie Wendungen", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

<?php require "wahl.php"; ?>

			// 정답확인
			$("#chk").on("click", function() {
				if($(this).attr("id") == "chk") {
					if ($(".an").length < $(".q").length || $("#itms>button").length) {
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
						$(this).attr("id","done");
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

						$(this).removeClass("btn-light ");

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							if($(this).find(".btn")) {
								$(this).find(".btn").addClass("text-success font-weight-bold");
							}
						});

						var qa = $(".itm-lst").length + $(".q").length ; // 전체 문항 수
						var qr = $(".text-success").length + $(".btn-success").length; // 맞춘 항목 수
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
		$("#0").show();
		$(".alert").hide();


			var pan = new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan = ["1"];
			var il = $("#itms>.itm").length;
			for(var p = 0; p < pan.length; p++) {
			var pani = "#lst-" + pan[p];
				$(".itm").each(function() {
					if($(this).hasClass("ans" + pan[p])) {
						$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
						$("#" + $(this).attr("id")).addClass("btn-block font-weight-bold");
						$("#" + $(this).attr("id")).addClass("border-0");
						$("#lst-" + pan[p] + ">h2").remove();
						// $("#lst-" + pan[p]).parent().find(".tran").show();
					}
				})
			}
		}
	});

});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>