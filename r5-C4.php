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
					<h2> Hören Sie und ergänzen Sie.<br>
					<small>듣고 채우세요.</small>
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-borderless text-center">
						<thead>
							<th scope="col">&nbsp;</th>
							<th scope="col">morgens</th>
							<th scope="col">mittags</th>
							<th scope="col">nachmittags</th>
							<th scope="col">abends</th>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle" scope="row"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-C4-1.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 120px; height: auto;"><br><strong>Tim Sager</strong><br>Er trinkt/isst ...</th>
								<td class="align-middle"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-C4-2.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-C4-3.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-C4-4.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./<?=$root ?>images/Reihe 5/Reihe-5-C4-5.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12 py-2 my-2">
					<span class="border border-dark rounded p-1 px-2">Eis</span>
					<span class="border border-dark rounded p-1 px-2">Pizza</span>
					<span class="border border-dark rounded p-1 px-2">Flasche Milch</span>
					<span class="border border-dark rounded p-1 px-2">Hamburger</span>
					<span class="border border-dark rounded p-1 px-2">Dose Cola</span>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td>Morgens isst Tim Sager ein Brötchen mit Butter und Marmelade.<span class="tran"><br><small>아침에 팀 자거는 버터와 잼을 바른 빵을 먹는다.</small></span>
							</td>
						</tr>
						<tr>
							<td><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
							<td><div class="input-group">
								Er trinkt
								<input type="text" class="form-control col-sm-4 col-md-3 col-lg-4 col-xl-4 border-left-0 border-right-0 border-top-0 rounded-0 ml-0 q" aria-label="." style="position: relative; top: -6px;" id="qst-1">
								.
								</div><span class="tran"><br><small>그는 우유 한 병을 마신다.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-success">▶</button></td>
								<td><div class="input-group">
									Mittags isst er einen
									<input type="text" class="form-control col-sm-4 col-md-3 col-lg-2 col-xl-3 border-left-0 border-right-0 border-top-0 rounded-0 ml-1 q" aria-label="." style="position: relative; top: -6px;" id="qst-2">
									und trinkt eine Cola.
									</div><span class="tran"><br><small>점심엔 햄버거와 콜라 한 잔을 마신다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td><button type="button" id="4" class="so btn btn-outline-info">▶</button></td>
								<td><div class="input-group">
									Nachmittags isst er Pommes und ein
									<input type="text" class="form-control col-sm-4 col-md-3 col-lg-2 col-xl-3 border-left-0 border-right-0 border-top-0 rounded-0 ml-1 q" aria-label="." style="position: relative; top: -6px;" id="qst-3">
									.
									</div><span class="tran"><br><small>오후엔 감자튀김과 아이스크림을 먹는다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
								<td><div class="input-group">
									Abends isst er eine
									<input type="text" class="form-control col-sm-4 col-md-3 col-lg-2 col-xl-3 border-left-0 border-right-0 border-top-0 rounded-0 ml-1 q" aria-label="." style="position: relative; top: -6px;" id="qst-4">
									</div><span class="tran"><br><small>저녁엔 피자를 먹고</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
								<td><div class="input-group">
									und trinkt eine
									<input type="text" class="form-control col-sm-4 col-md-3 col-lg-2 col-xl-3 border-left-0 border-right-0 border-top-0 rounded-0 ml-1 q" aria-label="." style="position: relative; top: -6px;" id="qst-5">
									.
									</div><span class="tran"><br><small>콜라 한 캔을 마신다.</small></span>
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
		$(".ant").hide();
		var an=new Array();
		var an=["eine Flasche Milch", "Hamburger", "Eis", "Pizza", "Dose Cola"];
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
				src: [ "./<?=$root ?>sounds/Reihe 5/r5 C4.mp3"],
					sprite: {
					"0": [2800, 25235],
					"1": [13406, 5483],
					"2": [18750, 3434],
					"3": [22625, 5417],
					"4": [29167, 4557],
					"5": [34869, 3501],
					"6": [38166, 2289]
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
					/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
					// 값 확인해보자, io값이 참이면 전체 검사
					function rfchk(th, io) {
						var q, qn, a, b, fl;
						q=th.val().length;
						qn=(th.attr("id").substr(4))-1;
						a=th.val();
						a=a.replace(/ /gi, "");
						if( !$.isArray(an[qn])) {
							// 1 인 경우
							if(io) {
								b=an[qn];
							}
							else {
								b=an[qn].substr(0, q);
							}
							b=b.replace(/ /gi, "");
							if(a==b) {
								return true;
							}
						}
						else {
							// 2 이상인 경우
							for(var fd=0;
							fd < an[qn].length;
							fd++) {
								if(io) {
									b=an[qn][fd];
								}
								else {
									b=an[qn][fd].substr(0, q);
								}
								b=b.replace(/ /gi, "");
								if(a==b) {
									return true;
								}
							}
						}
					}
					$(".q").on("keyup", function () {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
						$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");
						if(rfchk($(this))) {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-success");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
						}
						else {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}
						if( !$(this).val()) {
							$(this).removeClass("bg-danger");
							$(this).removeClass("bg-success");
							$(this).removeClass("text-white font-weight-bold");
						}
						if($(this).val()) {
							$("#ant-"+$(this).attr("id").substr(4)).show();
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						}
						else {
							$("#ant-"+$(this).attr("id").substr(4)).hide();
						}
					}
					);
					$(".q").on("focusin", function() {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						if( !$("#ant-"+$(this).attr("id").substr(4)).text()) {
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						}
						if($("#ant-"+$(this).attr("id").substr(4)).text()) {
							if(rfchk($(this))) {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-success");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
							}
							else {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-danger");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
							}
						}
					}
					);
					$(".q").on("focusout", function() {
						$("#ant-"+$(this).attr("id").substr(4)).hide();
						if(rfchk($(this), true)) {
							$(this).addClass("bg-success");
							$(this).addClass("text-white");
						}
						else {
							$(this).addClass("bg-danger");
						}
						if($(this).val()) {
							if($(this).hasClass("bg-danger")) {
								x.play();
							}
							else if($(this).hasClass("bg-success")) {
								o.play();
								$(this).prop("disabled", true);
							}
						}
						$(this).removeClass("bg-danger");
						if( !$(this).attr("disabled")) {
							$(this).removeClass("text-white font-weight-bold");
							$(this).removeClass("bg-success");
						}
					}
					);

					$("#chk").on("click", function() {
						var na="";
						var ri=0;
						var qst=$(".q").length;
						$(".q").each(function () {
							if(na !="") {
								na +=", ";
							}
							if($(this).val()=="") {
								na +=$(this).attr("id").substr(4, 1);
							}
						}
						);
						if($(this).attr("id")=="done") {}
						else if(na=="") {
							for(var i=0;
							i < an.length;
							i++) {
								var oran=$("#qst-"+(i+1)).val();
								if(rfchk($("#qst-"+(i+1)), true)) {
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
									if( !$.isArray(an[i])) {
										$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
									}
									else {
										// 2 이상인 경우
										var r="<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">";
										for(var fd=(an[i].length-1);
										fd >=0;
										fd--) {
											if(fd < (an[i].length-1)) {
												r=r + " / ";
											}
											r=r + an[i][fd];
										}
										r=r +"</div>";
										if($("span.sen").length > 0) {
											$("#qst-"+(i+1)).closest("span.sen").after(r);
										}
										else {
											$("#qst-"+(i+1)).after(r);
										}
									}
								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");
							var qa=$(".q").length; // 전체 문항 수
							var qr=$(".bg-success").length; // 맞춘 항목 수
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
							$(this).prop("disabled", true);
							$(".tran").show();
							$(this).attr("id", "done");
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					}
					);
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