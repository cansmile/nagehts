<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und sprechen Sie nach.<br>
						<small>듣고 따라하세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
						HV
					</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
						❚❚
					</button>
					</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>
						<h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
							<td>
								Guten Tag! Wie <span class="nu">①</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-1">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option1" autocomplete="off">heiße
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option2" autocomplete="off">heißt
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option3" autocomplete="off">heißen
									</div>
								</div> Sie?
								<span class="tran"><br><small>안녕하세요! 당신의 이름은 무엇인가요?</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
							<td>
								Guten Tag! Ich <span class="nu">②</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-2">
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option4" autocomplete="off">heiße
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option5" autocomplete="off">heißt
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option6" autocomplete="off">heißen
									</div>
								</div> Kim.
								<span class="tran"><br><small>안녕하세요! 저는 김이라고 해요.</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></th>
							<td>
								Freut mich! Und wie <span class="nu">③</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-3">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option7" autocomplete="off">bin
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option8" autocomplete="off">ist
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option9" autocomplete="off">sind
									</div>
								</div> Ihr Name?
								<span class="tran"><br><small>반가워요! 그러면 당신의 이름은 무엇인가요?</small></span>
							</td>
						</tr>
						<tr>
							<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></th>
							<td>
								Mein Name <span class="nu">④</span>
								<div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q" data-toggle="buttons" id="qst-4">
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option10" autocomplete="off">bin
									</div>
									<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
										<input type="radio" name="options" id="option11" autocomplete="off">sind
									</div>
									<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
										<input type="radio" name="options" id="option12" autocomplete="off">ist
									</div>
								</div> Sauer, Eva Sauer.
								<span class="tran"><br><small>제 이름은 자우어에요. 에바 자우어.</small></span>
							</td>
						</tr>
					</tbody>
				</table></div>
		</div>
		<!-- 정답화인 버튼 시작 -->
		<div class="row">
			<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
				정답확인
			</div>
		</div>
		<!-- 정답확인 버튼 끝 -->
		<div class="row">
				<div class="col"></div>
				<div class="col-11 text-center">
					<div class="row">
						<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-12">
							<div class="row">
								<div class="bg-light py-2 col-3 border-right border-dark"><strong>Wie</strong></div>
								<div class="bg-light py-2 col-3 border-right border-dark"><i>heißen</i></div>
								<div class="bg-light py-2 col-6">Sie?</div>
							</div>
							<div class="row">
								<div class="py-2 col-3 border-right border-dark">&nbsp;</div>
								<div class="py-2 col-3 border-right border-dark"><i>ist</i></div>
								<div class="py-2 col-6"><strong>Ihr</strong> Name?</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-12">
							<div class="row">
								<div class="py-2 col-8 border-right border-dark">Ich</div>
								<div class="py-2 col-4"><i>heiße…</i></div>
							</div>
							<div class="row">
								<div class="bg-light py-2 col-8 border-right border-dark"><strong>Mein</strong> Name</div>
								<div class="bg-light py-2 col-4"><i>ist…</i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>
	</div>
</section>

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- interact.min.js -->
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".nu").hide();

			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r1 B1",

						sprite : {
							"0": [7.2,23.3],
							"1": [12.8,2.7],
							"2": [17.8,2.3],
							"3": [21.7,2.6],
							"4": [27.1,2.7]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 1/",
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
							$("#"+obj.part).html("▶");

							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}

					},
					ready_callback: function () {
						
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

					alert(na + "번 문제를 풀어주세요.");
				} else {
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
					$(".tran").show();
					$(".nu").show();
					$(".q").hide();
					
					$("span").each(function () {
						if($(this).text() == "①") {
							var tt = $("#qst-1>div.o").text();
						} else if($(this).text() == "②") {
							var tt = $("#qst-2>div.o").text();
						} else if($(this).text() == "③") {
							var tt = $("#qst-3>div.o").text();
						} else if($(this).text() == "④") {
							var tt = $("#qst-4>div.o").text();
						}
					$(this).text(tt);
					$(this).addClass("font-weight-bold");
					});


					$(this).removeClass("btn-light ");
					if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!</h4>");
						$(this).addClass("btn-danger");

					} else if ($(".btn-success").length == $(".q").length) {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("btn-primary");

					} else {
						$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("btn-warning");

					};
				};
			});

		
						$(".so").on("click", function () {
								if($(this).attr("id").substr(-2) == "_p") {
									// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r1 B1", {
										part: "0"
									});
									$("#0").show();
									$(this).hide();
								} else if($(this).html() == "▶") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.play("r1 B1", {
										part: $(this).attr("id")
									});
									$(this).html("❚❚");
								} else if($(this).html() == "❚❚") {
									// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
									ion.sound.pause("r1 B1", {
										part: $(this).attr("id")
									});
									$(this).html("▶");
								} else {
									// _p 붙어 있지 않으면 id 그대로 재생
									ion.sound.play("r1 B1", {
										part: $(this).attr("id")
									});

									// 전체 듣기 재생일 때는 일시정지 버튼 보이기
									if($(this).attr("id") == "0") {
										$(this).hide();
										$("#0_p").show();
									};
								};
							});
					// 준비되면 HV 보이기
					$("#0").show();
					$(".alert").hide();


					}
				});
				
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>