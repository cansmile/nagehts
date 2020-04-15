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
					<h2>Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라 하세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
					<table class="table table-borderless">
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
					<table class="table table-borderless text-center">
						<thead class="thead-dark">
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
								<td style="height: 65px;"><img src="./<?php echo($root); ?>images/Reihe 2/Reihe-2-D2-1.png" alt="Map" style="max-width: 100%; height: auto;"></td>
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
					<table class="table table-borderless table-sm">
						<tbody>
							<tr>
								<td>&nbsp;</td>
								<td class="text-center display-4">Norden</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="align-middle text-right display-4">Westen</td>
								<td class="text-center align-middle"><img src="./<?php echo($root); ?>images/Reihe 2/Reihe-2-D2-2.png" alt="Himmelsrichtungen" style="max-height: 320px; width: auto"></td>
								<td class="align-middle text-left display-4">Osten</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td class="text-center display-4">Süden</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<div id="last" class="d-none"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
		$("#0").hide();
		$(".tran").hide();
		$(document).ready(function() {// 소리 출력 전역 변수와 함수
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
				src: ["./<?php echo($root); ?>sounds/Reihe 2/r2 D2.mp3"],
				sprite : {
					"0": [1138, 50607],
					"1": [8245, 2950],
					"2": [11601, 1606],
					"3": [17165, 1623],
					"4": [19015, 1557],
					"5": [23891, 3840],
					"6": [30292, 1834],
					"7": [32252, 1601],
					"8": [37470, 2244],
					"9": [40130, 1719],
					"10": [42001, 2580],
					"11": [48196, 3573]
				},
				html5: true,
				volume: 1,
				format: "mp3",
				preload: true,
				onloaderror: function() {
					$(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
					console.log("다시 읽어주세요!");
				},
				onload: function() {
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
					);

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
				$("#0").show();

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
		}
		);


	</script>
	<?php require "footer.php"; ?>
</body>
</html>