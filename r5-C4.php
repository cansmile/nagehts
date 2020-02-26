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
					<h2> Hören Sie und ergänzen Sie.<br>
					<small>듣고 채우세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table text-center">
						<thead>
							<th scope="col">&nbsp;</th>
							<th scope="col">morgens</th>
							<th scope="col">mittags</th>
							<th scope="col">nachmittags</th>
							<th scope="col">abends</th>
						</thead>
						<tbody>
							<tr>
								<th class="align-middle" scope="row"><img src="./images/Reihe 5/Reihe-5-C4-1.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 120px; height: auto;"><br><strong>Tim Sager</strong><br>Er trinkt/isst ...</th>
								<td class="align-middle"><img src="./images/Reihe 5/Reihe-5-C4-2.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./images/Reihe 5/Reihe-5-C4-3.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./images/Reihe 5/Reihe-5-C4-4.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
								<td class="align-middle"><img src="./images/Reihe 5/Reihe-5-C4-5.png" alt="Was isst und trinkt Tim Sager?" style="max-width: 180px; height: auto;"></td>
							</tr>
						</tbody>
					</table>
					<table class="table text-center">
						<tbody>
							<tr>
								<td width="20%">Eis</td>
								<td width="20%">Pizza</td>
								<td width="20%">Flasche Milch</td>
								<td width="20%">Hamburger</td>
								<td width="20%">Dose Cola</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
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
					<table class="table">
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
		$(".ant").hide();
		var an=new Array();
		var an=["eine Flasche Milch", "Hamburger", "Eis", "Pizza", "Dose Cola"];
		$(document).ready(function() {
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
						ion.sound.play("Cartoon_Boing");
					}
					else if($(this).hasClass("bg-success")) {
						ion.sound.play("dingdongdang");
						$(this).prop("disabled", true);
					}
				}
				$(this).removeClass("bg-danger");
				if( !$(this).attr("disabled")) {
					$(this).removeClass("text-white font-weight-bold");
					$(this).removeClass("bg-success");
				}
			}
			)
			/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
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
					name : "r5 C4",
					sprite : {
						"0": [2.92, 37.69],
							"1": [13.74, 5.31],
							"2": [19.25, 2.87],
							"3": [22.81, 5.26],
							"4": [29.3, 4.53],
							"5": [35, 3.51],
							"6": [38.46, 2.1]
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
				path : "sounds/Reihe 5/",
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
							ion.sound.pause("r5 C4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 C4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 C4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 C4", {
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
										var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">";
										for(var fd = (an[i].length-1);
										fd >= 0;
										fd--) {
											if(fd < (an[i].length-1)) {
												r = r + " / ";
											}
											r = r + an[i][fd];
										}
										r = r +"</div>";
										$("#qst-"+(i+1)).after(r);
									}

								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}

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
							var st = "쓰읍~ 다시 해 보실까요";
							var cl = "primary";
						} else {
							var st = "좀 더 분발해 주세요";
							var cl = "danger";
						}

						$(this).addClass("btn-" + cl + " text-" + tcl);
						$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
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
				}
			}
			);
			// $("#qst-1").val(an[0]+" passen zusammen");
			// $("#qst-1").prop("disabled",true);
			// $("#qst-1").closest("tr").find(".tran").show();
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>