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
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark itm so" id="1">
					bitter<span class="tran"><br><small>쓴</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark itm so" id="2">
					sauer<span class="tran"><br><small>신</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark itm so" id="3">
					scharf<span class="tran"><br><small>매운</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark itm so" id="4">
					fettig<span class="tran"><br><small>기름진</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm so" id="5">
					salzig<span class="tran"><br><small>짠</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark itm so" id="6">
					süß<span class="tran"><br><small>단</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>단어를 선택하고 알맞은 그림 아래의 노란 단추를 누르세요.</small> ]
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-1.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-2.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-3.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-4.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-5.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td style="height: 300px;" class="align-middle text-center"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-E2-6.png" alt="Geschmack" style="max-width: 180px; height: auto;"></td>
							</tr>
							<tr>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
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
	<div id="last" class="d-none"></div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?=$root ?>js/popper.min.js"></script>
	<script src="./<?=$root ?>js/bootstrap.js"></script>
	<script src="./<?=$root ?>js/taptogrouph.js"></script>
	<script src="./<?=$root ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
		$("#0").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
			// 소리 출력 전역 변수와 함수
			var sen=new Array(), pa=new Array(), he=new Array(), last;
			$(".so").each(function() {
				var t=$(this);
				var ti=t.attr("id");
				sen[ ti]=0;
				pa[ ti]=t.html();
			}
			);
			function stopAll() {
				$(".so").each(function() {
					$(this).html(pa[ $(this).attr("id")]);
				}
				);
			}
			// 문제 재생
			var nagehts=new Howl( {
				src: [ "./<?=$root ?>sounds/Reihe 5/r5 E2.mp3"],
					sprite: {
					"0": [382, 22140],
					"1": [6876, 1057],
					"2": [9831, 1143],
					"3": [12528, 1285],
					"4": [15214, 1171],
					"5": [18275, 1439],
					"6": [21170, 1338]
				}
				,
				html5: true,
				volume: 1,
				format: "mp3",
				preload: true,
				onloaderror: function() {
					$(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
					console.log("다시 읽어주세요!");
				}
				,
				onload: function() {
					<?php require "wahl.php"; ?>

					// 정답확인
					$("#chk").on("click", function() {
						if($("#wahl").visibility !="visible"&& $(this).attr("id")=="chk") {
							$(this).attr("id", "done");
							$(".itm").each(function() {
								if($(this).parent().attr("id").length > 5) {
									var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
								}
								else {
									var a=$(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
								}
								$(".tran").show();
								if($(this).hasClass("ans"+ (a))) {
									$(this).addClass("text-success font-weight-bold");
								}
								else {
									$(this).addClass("text-warning font-weight-bold");
									$(this).find(".tran").show();
								}
								;
								if($(this).hasClass("text-warning")) {
									// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
									for(var i=1;
									i <=$(".itm-lst").length;
									i++) {
										if($(this).hasClass("ans"+i)) {
											$(eval('"#lst-'+ i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold\">"+ $(this).html() + "</button>");
											// $(lstn).append(i);
										}
									}
								}
								;
							}
							);
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");
							$(".itm-lst").each(function() {
								if($(this).find(".btn")) {
									$(this).find(".btn").addClass("text-success font-weight-bold");
								}
							}
							);
							var qa=$(".itm-lst").length; // 전체 문항 수
							var qr=$(".text-success").length; // 맞춘 항목 수
							var pe=(qr / qa) * 100; // 정답 비율
							var tcl="white"; // 기본 문자색
							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st="원어민이세요?";
								var cl="lime";
								var tcl="dark";
							}
							else if(pe > 74) {
								var st="어! 좀 하시는데요~^^";
								var cl="success";
							}
							else if(pe > 49) {
								var st="쓰읍~ 다시 해 보실까요?";
								var cl="primary";
							}
							else {
								var st="좀 더 분발해 주세요~";
								var cl="danger";
							}
							$(this).addClass("btn-"+ cl + " text-"+ tcl);
							$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
						}
					}
					);
					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10"];
					pan=[1];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#lst-"+ pan[p] + ">.itm").addClass("btn-block font-weight-bold");
								$("#lst-"+ pan[p] + ">.itm").addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-" + pan[p]).closest("table").find(".tran").show();
							}
						}
						)
					}

					$("#0").show();
					$(".alert").hide();
					$(".so").on("click", function() {
						var t=$(this);
						var ti=t.attr("id");
						if (($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
							$("#last").text(ti);
							t.text("■");
							nagehts.seek();
							nagehts.play(ti);
							sen[ ti]++;
							last=ti;
							$("#cnt-"+ ti).text(sen[ ti]);
						}
						else if (last==ti && nagehts.playing($("div#last").text())) {
							$("#last").text("");
							t.html(pa[ ti]);
							nagehts.pause();
							sen[ ti]--;
							$("#cnt-"+ ti).text(sen[ ti]);
						}
					}
					);
				}
				,
				onend: function() {
					$("div#last").text("");
					stopAll();
					$("#cnt-"+last).text(sen[last]);
					if(last==0) {
						if(sen[last]==2) {
							$(".tran").show();
							$(".so").each(function() {
								pa[last]=$("#"+last).html();
							}
							);
						}
					}
					else if(sen[last]==2) {
						if($("#"+last).hasClass("itm")) {
							$("#"+last+">.tran").show();
						}
						$("#"+last).closest("tr").find(".tran").show();
						pa[last]=$("#"+last).html();
					}
				}
			}
			);
		}
		);

	</script>
	<?php require "footer.php"; ?>
</body>
</html>