<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Was macht Tim heute Abend? <br>
					<small>팀은 오늘 저녁에 무엇을 하나요?</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다. 음성을 듣고 정답을 입력하세요.</small> ]</h3>
					<h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 border-white rounded bg-light">
					<table class="table">
						<tbody>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Tim</span>
									<br>
									<span class="p-1 ml-4 m-1 px-2 rounded bg-secondary text-white">Was machst du heute Nachmittag?
									</span>
									<button type="button" id="1" class="so btn btn-sm btn-outline-primary">▶</button>
									<span class="tran ml-5"><br><small>너 오늘 오후에 뭐해?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2 text-right">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Mina</span>
									<br>
									<button type="button" id="2" class="so btn btn-sm btn-outline-danger">▶</button>
									<span class="p-1 mr-4 m-1 px-2 rounded bg-warning">Nichts!
									</span>
									<span class="tran mr-5"><br><small>아무것도!</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Tim</span>
									<br>
									<span class="p-1 ml-4 m-1 px-2 rounded bg-secondary text-white">Hast du Lust auf Lernen?
									</span>
									<button type="button" id="3" class="so btn btn-sm btn-outline-primary">▶</button>
									<span class="tran ml-5"><br><small>그럼 공부할래?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2 text-right">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Mina</span>
									<br>
									<button type="button" id="4" class="so btn btn-sm btn-outline-danger">▶</button>
									<span class="p-1 mr-4 m-1 px-2 rounded bg-warning">Nöö. Keine Lust!
									</span>
									<span class="tran mr-5"><br><small>싫어. 별로 하고 싶지 않은데!</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Tim</span>
									<br>
									<span class="p-1 ml-4 m-1 px-2 rounded bg-secondary text-white">Gehen wir dann ins Musik-Café?
									</span>
									<button type="button" id="5" class="so btn btn-sm btn-outline-primary">▶</button>
									<span class="tran ml-5"><br><small>그럼 우리 음악-카페에 갈래?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2 text-right">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Mina</span>
									<br>
									<button type="button" id="6" class="so btn btn-sm btn-outline-danger">▶</button>
									<span class="p-1 mr-4 m-1 px-2 rounded bg-warning">Gute Idee! Wann denn?
									</span>
									<span class="tran mr-5"><br><small>좋은 생각이야! 그럼 언제?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Tim</span>
									<br>
									<span class="p-1 ml-4 m-1 px-2 rounded bg-secondary text-white">Um vier oder um sechs?
									</span>
									<button type="button" id="7" class="so btn btn-sm btn-outline-primary">▶</button>
									<span class="tran ml-5"><br><small>4시 또는 6시?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2 text-right">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Mina</span>
									<br>
									<button type="button" id="8" class="so btn btn-sm btn-outline-danger">▶</button>
									<span class="p-1 mr-4 m-1 px-2 rounded bg-warning">Gehen wir um vier?
									</span>
									<span class="tran mr-5"><br><small>우리 4시에 갈까?</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Tim</span>
									<br>
									<span class="p-1 ml-4 m-1 px-2 rounded bg-secondary text-white">Okay. Dann bis um vier!
									</span>
									<button type="button" id="9" class="so btn btn-sm btn-outline-primary">▶</button>
									<span class="tran ml-5"><br><small>좋아. 그럼 4시에 보자!</small></span>
								</td>
							</tr>
							<tr>
								<td class="border-0 p-0 pt-2 text-right">
									<span class="bg-dark text-white m-1 p-1 px-2 rounded">Mina</span>
									<br>
									<button type="button" id="10" class="so btn btn-sm btn-outline-danger">▶</button>
									<span class="p-1 mr-4 m-1 px-2 rounded bg-warning">Ja, bis dann!
									</span>
									<span class="tran mr-5"><br><small>그래, 그때 봐!</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table my-auto">
						<tbody>
							<tr>
								<td class="border-0 align-middle">1.</td>
								<td class="border-0 align-middle">
									<div class="ant" id="ant-1"></div>
									<div class="input-group">
										Tim und Mina gehen ins
										<input type="text" class="form-control border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1 q" style="position: relative; top: -6px;" aria-label="." id="qst-1">
										.
									</div><span class="tran"><small><br>네, 치우는 거 좋아해요.</small>
								</td>
							</tr>
							<tr>
								<td class="border-0 align-middle">2.</td>
								<td class="border-0 align-middle">
									<div class="ant" id="ant-2"></div>
									<div class="input-group">
										Tim trifft Mina heute um
										<input type="text" class="form-control border border-dark border-left-0 border-right-0 border-top-0 rounded-0 mx-1 px-2 py-1 q" style="position: relative; top: -6px;" aria-label="." id="qst-2">
										.
									</div><span class="tran"><small><br>아뇨, 저는 치우는 거 좋아하지 않아요.</small>
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
	<script src="./js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$(".ant").hide();

		var an=new Array();
		var an=["Musik-Café", ["vier", "4", "vier Uhr", "4 Uhr"]];
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
			var hm=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r7 B3",
					sprite : {
						"0": [3.17, 56.41],
							"1": [15.52, 2.67],
							"2": [20.58, 1.44],
							"3": [23.54, 2.6],
							"4": [27.8, 2.88],
							"5": [31.56, 2.67],
							"6": [37.12, 3.03],
							"7": [42.18, 3.1],
							"8": [48.32, 2.31],
							"9": [52.65, 3.17],
							"10": [56.98, 2.96]
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
				path : "sounds/Reihe 7/",
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
							ion.sound.pause("r7 B3", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r7 B3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r7 B3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r7 B3", {
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
										if($("span.sen").length > 0) {
											$("#qst-"+(i+1)).closest("span.sen").after(r);
										} else {
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
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
	</body>
</html>