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
						<h2>Hören Sie und Ergänzen Sie mit Verben.<br>
							<small>듣고 동사를 채우세요.</small>
						<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
							HV
						</button>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="table table-borderless">
							<thead>
								<tr>
									<th colspan="2" class="text-center" height="100px"><img src="./<?=$root ?>images/Reihe 1/Reihe-1-D1-1.png" alt="Deutschunterricht" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">
											<span class="sen">Guten Tag, ich <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option1" autocomplete="off">heiße
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option2" autocomplete="off">heißt
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option3" autocomplete="off">heißen
													</div>
												</div> Heike Klein.<span class="ans">&nbsp;</span>
											</span>
											<span class="sen">Ich <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option4" autocomplete="off">bin
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option5" autocomplete="off">sind
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option6" autocomplete="off">ist
													</div>
												</div> Ihre Deutschlehrerin.<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>안녕하세요, 저는 하이케 클라인이라고 해요. 저는 여러분의 독일어 선생님에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="2" class="so btn btn-outline-success">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Studenten</strong><span class="tran"><br><small><strong>학생들</strong></small></span></div>
										<div class="col-10">Guten Tag, Frau Klein.<span class="tran"><br><small>안녕하세요, 클라인 선생님.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">
											<span class="sen">Wer <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">bin
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option5" autocomplete="off">sind
													</div>
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option6" autocomplete="off">ist
													</div>
												</div> Hyun Kim?<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>김현이 누구인가요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="4" class="so btn btn-outline-info">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Hyun</strong><span class="tran"><br><small><strong>현</strong></small></span></div>
										<div class="col-10">
											<span class="sen">Das <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option4" autocomplete="off">bin
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option5" autocomplete="off">sind
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option6" autocomplete="off">ist
													</div>
												</div> ich.<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>저에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">
											<span class="sen"><span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-5">
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">Bin
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option5" autocomplete="off">Sind
													</div>
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option6" autocomplete="off">Ist
													</div>
												</div> Minjung Kim da?<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>김민정은 있나요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="6" class="so btn btn-outline-success">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Studenten</strong><span class="tran"><br><small><strong>학생들</strong></small></span></div>
										<div class="col-10">
											<span class="sen">Nein, Minjung <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-6">
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">bin
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option5" autocomplete="off">sind
													</div>
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option6" autocomplete="off">ist
													</div>
												</div> nicht da.<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>아뇨, 민정이는 없어요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">
											<span class="sen"><span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-7">
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option4" autocomplete="off">Bin
													</div>
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option5" autocomplete="off">Sind
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option6" autocomplete="off">Ist
													</div>
												</div> Sie Bokum Park?<span class="ans">&nbsp;</span>
											</span>
										  <span class="tran"><br><small>박보검 인가요?</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>William</strong><span class="tran"><br><small><strong>윌리엄</strong></small></span></div>
										<div class="col-10">
											<span class="sen">Nein, ich  <span class="nu"></span>
												<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
													<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
														<input type="radio" name="options" id="option1" autocomplete="off">heiße
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option2" autocomplete="off">heißt
													</div>
													<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
														<input type="radio" name="options" id="option3" autocomplete="off">heißen
													</div>
												</div> William Park.<span class="ans">&nbsp;</span>
											</span>
											<span class="tran"><br><small>아뇨, 저는 윌리엄 박이에요.</small></span></div>
									</div>
								</td>
								</tr>
								<tr>
									<th scope="row"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></th>
									<td><div class="row">
										<div class="col-2"><strong>Frau Klein</strong><span class="tran"><br><small><strong>클라인 선생님</strong></small></span></div>
										<div class="col-10">Oh, Entschuldigung!<span class="tran"><br><small>아, 실례했네요!</small></span></div>
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
	<div class="container">


		<div class="row">
			<table class="table table-borderless table-sm">
				<tbody>
					<tr>
						<th scope="row" class="border-top-0">
							<div class="row text-center">
								<div class="col-3"><span class="p-1 m-1 px-2 bg-lime">TIPP</span></div>
								<div class="col-3">da <small>여기, 거기(있는, 출석한)</small></div>
								<div class="col-3">nicht da<small>(없는, 결석한)</small></div>
								<div class="col-3">Entschuldigung <small>실례합니다</small></div>
							</div></th>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row mt-3">
			<div class="col"></div>
			<div class="col-11 text-center">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="py-1 col-4 border-right border-dark"><strong>Wer</strong></div>
							<div class="bg-light py-1 col-4 border-right border-dark"><i>ist</i></div>
							<div class="py-1 col-4">…?</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="py-1 col-4 border-right border-dark text-left pl-5">Das</div>
							<div class="bg-light py-1 col-4 border-dark"><i>bin ich.</i></div>
							<div class="py-1 col-4">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row mt-3">
			<div class="col"></div>
			<div class="col-11 text-center">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="bg-light py-1 col-4 border-right border-dark"><strong>Ist</strong></div>
							<div class="py-1 col-4 border-right border-dark"><i>Minjung Kim</i></div>
							<div class="bg-light py-1 col-4"><i>…?</i></div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="py-1 col-4">&nbsp;</div>
							<div class="py-1 col-4">&nbsp;</div>
							<div class="py-1 col-4">&nbsp;</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="py-1 col-4 border-right border-dark"><strong>Bist</strong></div>
							<div class="bg-light py-1 col-4 border-right border-dark"><i>du</i></div>
							<div class="py-1 col-4"><i>…?</i></div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="bg-light py-1 col-4 text-left pl-5">Ja. / Nein.</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="bg-light py-1 col-4 border-right border-dark"><strong>Sind</strong></div>
							<div class="py-1 col-4 border-right border-dark"><i>Sie</i></div>
							<div class="bg-light py-1 col-4"><i>…?</i></div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
						<div class="row">
							<div class="py-1 col-4">&nbsp;</div>
							<div class="py-1 col-4">&nbsp;</div>
							<div class="py-1 col-4">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col"></div>
		</div>

	</div>
</section>

<div id="last" class="d-none"></div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?=$root ?>js/popper.min.js"></script>
		<script src="./<?=$root ?>js/bootstrap.js"></script>
		<script src="./<?=$root ?>js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./{$root}oxsound.php"); ?>
		<script>
			$("#0").hide();
			$(".tran").hide();
			$(".nu").hide();

			$(document).ready(function() {
// 소리 출력 전역 변수와 함수
var sen = new Array(), pa = new Array(), he = new Array(), last;
$(".so").each(function() {
	var t = $(this);
	var ti = t.attr("id");
	sen[ti] = 0;
	pa[ti] = t.html();
});

function stopAll() {
	$(".so").each(function() {
		$(this).html(pa[$(this).attr("id")]);
	});
}

// 문제 재생
var nagehts = new Howl({
	src: ["./<?=$root ?>sounds/Reihe 1/r1 D1.mp3"],
	sprite : {
		"0": [1417, 47624],
		"1": [15735, 5595],
		"2": [23354, 2256],
		"3": [26878, 1972],
		"4": [30188, 1552],
		"5": [33363, 1909],
		"6": [36173, 2961],
		"7": [40340, 1744],
		"8": [43128, 2672],
		"9": [46799, 2199]
	},
	html5: true,
	volume: 1,
	format: "mp3",
	preload: true,
	onloaderror: function() {
		$(".alert").append("<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>");
		console.log("다시 읽어주세요!");
	},
	onload: function() {
		// 음성 준비되면 HV 버튼 나타내기
		$("#0").show();
		$(".alert").hide();

		$(".so").on("click", function() {
				var t = $(this);
				var ti = t.attr("id");

			if(($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
				$("#last").text(ti);
				t.text("■");
				nagehts.seek();
				nagehts.play(ti);
				sen[ti]++;

				last = ti;

				$("#cnt-"+ti).text(sen[ti]);
			} else if(last == ti && nagehts.playing($("div#last").text())) {
				$("#last").text("");
				t.html(pa[ti]);
				nagehts.pause();
				sen[ti]--;
				$("#cnt-"+ti).text(sen[ti]);
			}

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
		});

		// 팝업 내용 사라지기
		$(".pop").popover().click(function() {
			setTimeout(function() {
				$(".pop").popover('hide');
			}, 500);
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
						$(this).addClass("btn-<?=$color ?>");
						$(this).closest(".sen").find(".ans").html($.trim($(this).closest(".sen").find(".o").text()));
						$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-danger font-weight-bold");
						$(this).closest(".sen").find(".ans").addClass("rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2");
					} else if ($(this).hasClass("an")) {
						$(this).addClass("btn-warning");
						$(this).closest("td").find(".nu").text($.trim($(this).text()));
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
					var st = "쓰읍~ 다시 해 보실까요?";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요~";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

				$(this).attr("id","done");
			};
		});

	$("#0").show();
	$(".alert").hide();

	},
	onend: function() {
		$("div#last").text("");
		stopAll();
		$("#cnt-"+last).text(sen[last]);
		if(last == 0) {
			if(sen[last] == 2) {
				$(".tran").show();
				$(".so").each(function() {
					pa[last] = $("#"+last).html();
				});
			}
		} else if(sen[last] == 2) {
			if($("#"+last).hasClass("itm")) {
				$("#"+last+">.tran").show();
			}
			$("#"+last).closest("tr").find(".tran").show();
			pa[last] = $("#"+last).html();
		}
	}


});

		});

		</script>
<?php require "footer.php"; ?>
	</body>
</html>