<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Wann feiert man was? Markieren Sie.<br>
							<small>축일을 언제 지내나요? 체크해보세요.</small>
						</h2>
						<h3>[ <small>문제를 모두 풀고 확인하세요.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Weihnachten<span class="tran">&nbsp;<small>크리스마스</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-1">
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Ostern<span class="tran">&nbsp;<small>부활절</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-2">
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Silvester<span class="tran">&nbsp;<small>12월 31일</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-3">
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Karneval<span class="tran">&nbsp;<small>카니발</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-4">
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Oktoberfest<span class="tran">&nbsp;<small>옥토버페스트</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-5">
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Valentinstag<span class="tran">&nbsp;<small>발렌타인데이</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-6">
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option21" autocomplete="off"><label for="option21">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option22" autocomplete="off"><label for="option22">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option23" autocomplete="off"><label for="option23">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option24" autocomplete="off"><label for="option24">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="border border-dark rounded p-1 px-2 d-block font-weight-bold">Erntedankfest<span class="tran">&nbsp;<small>추수감사절</small></span></div>
						<div class="btn-group btn-group-toggle q" data-toggle="buttons" id="qst-7">
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option25" autocomplete="off"><label for="option25">Frühling<span class="tran"><br><small>봄</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option26" autocomplete="off"><label for="option26">Sommer<span class="tran"><br><small>여름</small></span></label>
							</div>
							<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option27" autocomplete="off"><label for="option27">Herbst<span class="tran"><br><small>가을</small></span></label>
							</div>
							<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option28" autocomplete="off"><label for="option28">Winter<span class="tran"><br><small>겨울</small></span></label>
							</div>
						</div>
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
			$(".tran").hide();

			$(document).ready(function() {
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
									$(this).removeClass("btn-warning");
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
				pan = [];
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
<?php include "footer.php"; ?>
	</body>
</html>