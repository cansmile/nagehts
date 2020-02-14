<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<style>
		td,th,table {
			border-width: 0;
			border-style: hidden;
		}
	</style>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>보기를 어울리는 위치에 알맞은 형태로 입력하세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col align-middle text-center border border-light bg-dark text-white p-1 px-2 pt-2 m-1 rounded">zu Abend essen<span class="tran"><br /><small>저녁 먹기</small></span></div>
				<div class="col align-middle text-center border border-light bg-dark text-white p-1 px-2 pt-2 m-1 rounded">die Zeitung lesen<span class="tran"><br /><small>신문읽기</small></span></div>
				<div class="col align-middle text-center border border-light bg-dark text-white p-1 px-2 pt-2 m-1 rounded">fernsehen<span class="tran"><br /><small>TV 보기</small></span></div>
				<div class="col align-middle text-center border border-light bg-dark text-white p-1 px-2 pt-2 m-1 rounded">Fotos machen<span class="tran"><br /><small>사진찍기</small></span></div>
				<div class="col align-middle text-center border border-light bg-dark text-white p-1 px-2 pt-2 m-1 rounded">Mittagessen bestellen<span class="tran"><br /><small>점심 주문하기</small></span></div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-0.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td height="100" class="align-middle">Martin Klein ist Bankkaufmann.<span class="tran"><small><br>마틴 클라인은 은행원입니다.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-1.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>
									Um halb zehn&nbsp;<br />
									<div class="ant" id="ant-1"></div>
									<div class="input-group">
										<input type="text" class="form-control border border-top-0 border-left-0 border-right-0 q" aria-label="." id="qst-1" style="position: relation; top: 5px;">
									</div><span class="tran"><br /><small>9시 30분에 그는 신문을 읽습니다.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="8" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-2.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>
									Um halb zwei&nbsp;<br />
									<div class="ant" id="ant-2"></div>
									<div class="input-group">
										<input type="text" class="form-control border border-top-0 border-left-0 border-right-0 q" aria-label="." id="qst-2" style="position: relation; top: 5px;">
									</div><span class="tran"><br /><small>1시 30분에 그는 점심을 주문합니다.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="9" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-4.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>
									Um drei&nbsp;<br />
									<div class="ant" id="ant-3"></div>
									<div class="input-group">
										<input type="text" class="form-control border border-top-0 border-left-0 border-right-0 q" aria-label="." id="qst-3" style="position: relation; top: 5px;">
									</div><span class="tran"><br /><small>3시에 그는 사진을 찍습니다.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="10" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-5.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>
									Um halb acht&nbsp;<br />
									<div class="ant" id="ant-4"></div>
									<div class="input-group">
										<input type="text" class="form-control border border-top-0 border-left-0 border-right-0 q" aria-label="." id="qst-4" style="position: relation; top: 5px;">
									</div><span class="tran"><br /><small>7시 30분에 그는 저녁을 먹습니다.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center align-middle"><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
							</tr>
							<tr>
								<td height="200" class="align-middle text-center"><img src="./images/Reihe 6/Reihe-6-D2-3.png" alt="Wohin passt das?" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td>
									Um zehn&nbsp;<br />
									<div class="ant" id="ant-5"></div>
									<div class="input-group">
										<input type="text" class="form-control border border-top-0 border-left-0 border-right-0 q" aria-label="." id="qst-5" style="position: relation; top: 5px;">
									</div><span class="tran"><br /><small>10시에 그는 TV를 봅니다.</small>
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
	var an=[["liest er die Zeitung", "liest er die Zeitung."], ["bestellt er das Mittagessen", "bestellt er das Mittagessen."], ["macht er Fotos", "macht er Fotos."], ["isst er zu Abend", "isst er zu Abend."], ["sieht er fern", "sieht er fern."]];
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
					name : "r6 D2 Wohin passt das (Martin Klein",
					sprite : {
						"0": [4, 45.11],
							"6": [12.26, 3.06],
							"7": [18.4, 2.94],
							"8": [25.12, 3.59],
							"9": [32.1, 3.46],
							"10": [38.92, 3.42],
							"11": [46.29, 2.88]
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
				path : "sounds/Reihe 6/",
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
						if(obj.part > 5) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("table").find(".tran").show();
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
							ion.sound.pause("r6 D2 Wohin passt das (Martin Klein", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 D2 Wohin passt das (Martin Klein", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 D2 Wohin passt das (Martin Klein", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 D2 Wohin passt das (Martin Klein", {
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

					// 정답확인
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
									$("#qst-"+(i+1)).addClass("bg-danger d-block text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
									$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i][1]+"</div>");
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
							} else if(pe > 79) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 59) {
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");r

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
					// $("#7").appendTo($("#lst-1"));
					// $("#7").addClass("btn-block");
					// $("#lst-1>h2").remove();
				}
			}
			);
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>