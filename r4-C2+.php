<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Hören Sie und ergänzen Sie mit „ein/-e/-en“ oder „kein/-e/-en“.<br>
					<small>듣고 “ein/-e/-en” 또는 “kein/-e/-en“을 채우세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					<h3>[ <small>듣고 빈칸에 어울리는 단어로 채우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<th rowspan="3" class="align-top" style="font-size: 2em;">1</th>
								<td scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 4/Reihe-4-C2-1-1.png" style="max-width: 240px; height: auto;"></td>
								<td width="25"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td>Claudia hat eine Schultasche, aber sie hat kein Lineal.<span class="tran"><br><small>Claudia는 책가방이 있지만 자는 없습니다. </small></span></td>
							</tr>
							<tr>
								<td class="border-0"><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0"><div class="ant" id="ant-1"></div><div class="input-group">
								Sie hat einen Kleber, aber 
								<input type="text" class="form-control q border-left-0 border-right-0 border-top-0 rounded-0 mx-1 col-3" style="position: relative; top: -6px;" aria-label="." id="qst-1">
								Radiergummi.
								</div><span class="tran"><br><small>그녀는 풀이 있지만 지우개가 없습니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0"><div class="ant" id="ant-2"></div><div class="input-group">
								Sie hat Buntstifte, aber 
								<input type="text" class="form-control q border-left-0 border-right-0 border-top-0 rounded-0 mx-1 col-3" style="position: relative; top: -6px;" aria-label="." id="qst-2">
								 Geld.
								</div><span class="tran"><br><small>그녀는 색연필이 있지만 돈은 없습니다.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<th rowspan="4" class="align-top" style="font-size: 2em;">2</th>
								<td scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 4/Reihe-4-C2-2-1.png" style="max-width: 240px; height: auto;"></td>
								<td width="25"><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
								<td>Michael hat ein Wörterbuch, aber er hat keine Büroklammern.<span class="tran"><br><small>Michael은 사전을 가지고 있지만 클립은 없습니다.</small></span></td>
							</tr>
							<tr>
								<td class="border-0"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
								<td class="border-0"><div class="ant" id="ant-3"></div><div class="input-group">
								Er hat Geld, aber
								<input type="text" class="form-control q border-left-0 border-right-0 border-top-0 rounded-0 mx-1 col-3" style="position: relative; top: -6px;" aria-label="." id="qst-3">
								Bleistift.
							</div><span class="tran"><br><small>그는 돈이 있지만 연필은 없습니다.
						</small></span></td>
					</tr>
					<tr>
						<td class="border-0"><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
						<td class="border-0"><div class="ant" id="ant-4"></div><div class="input-group">
						Er hat 
						<input type="text" class="form-control q border-left-0 border-right-0 border-top-0 rounded-0 mx-1 col-3" style="position: relative; top: -6px;" aria-label="." id="qst-4">
						 Kuli,
						</div><span class="tran"><br><small>그는 펜이 있지만</small></span></td>
					</tr>
					<tr>
						<td class="border-0"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
						<td class="border-0"><div class="ant" id="ant-5"></div><div class="input-group">
						aber 
						<input type="text" class="form-control q border-left-0 border-right-0 border-top-0 rounded-0 mx-1 col-3" style="position: relative; top: -6px;" aria-label="." id="qst-5">
						 Schultasche.
						</div><span class="tran"><br><small>책가방은 가지고 있지 않습니다.</small></span></td>
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
		<div class="col-12">
			<table class="table table-striped text-center">
				<tbody>
					<tr>
						<td colspan="4" class="text-left">haben 동사는 4격 목적어를 취하며, 명사를 부정할 때는 kein이라는 부정관사를 사용한다.<br>이 때 kein은 부정관사류(ein, nein)와 같이 동일하게 관사어미변화한다. (keinen, keine, kein)</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="text-primary"><strong>m</strong></td>
						<td class="text-danger"><strong>f</strong></td>
						<td class="text-purple"><strong>n</strong></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="text-primary"><strong>부정관사</strong></td>
						<td class="text-danger"><strong>부정관사</strong></td>
						<td class="text-purple"><strong>부정관사</strong></td>
					</tr>
					<tr>
						<td><strong>Nominativ<small>&nbsp;주격</small></strong></td>
						<td class="text-primary">kein Kuli</td>
						<td class="text-danger">keine Schultasche</td>
						<td class="text-purple">kein Geld</td>
					</tr>
					<tr>
						<td><strong>Akkusativ<small>&nbsp;목적격</small></strong></td>
						<td class="text-primary">keinen Kuli</td>
						<td class="text-danger">keine Schultasche</td>
						<td class="text-purple">kein Geld</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-12">
			<table class="table table-striped text-center">
				<tbody>
					<tr>
						<td colspan="7" class="text-left"><strong>(un)bestimmte Artikel</strong></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="text-primary" colspan="2"><strong>m</strong></td>
						<td class="text-danger" colspan="2"><strong>f</strong></td>
						<td class="text-purple" colspan="2"><strong>n</strong></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="text-primary"><strong>부정관사</strong></td>
						<td class="text-primary"><strong>정관사</strong></td>
						<td class="text-danger"><strong>부정관사</strong></td>
						<td class="text-danger"><strong>정관사</strong></td>
						<td class="text-purple"><strong>부정관사</strong></td>
						<td class="text-purple"><strong>정관사</strong></td>
					</tr>
					<tr>
						<td><strong>Nominativ<small>&nbsp;주격</small></strong></td>
						<td class="text-primary">ein Tisch</td>
						<td class="text-primary">der Tisch</td>
						<td class="text-danger">eine Uhr</td>
						<td class="text-danger">die Uhr</td>
						<td class="text-purple">ein Auto</td>
						<td class="text-purple">das Auto</td>
					</tr>
					<tr>
						<td><strong>Akkusativ<small>&nbsp;목적격</small></strong></td>
						<td class="text-primary">einen Tisch</td>
						<td class="text-primary">den Tisch</td>
						<td class="text-danger">eine Uhr</td>
						<td class="text-danger">die Uhr</td>
						<td class="text-purple">ein Auto</td>
						<td class="text-purple">das Auto</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</section>

<div id="marg"></div>

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
	var an=["keinen", "kein", "keinen", "einen", "keine"];
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
				name : "r4 C2plus",
				sprite : {
					"0": [7.6, 95.5],
					"1": [16.432,3.906],
					"2": [22.587,3.529],
					"3": [28.298,2.741],
					"4": [37.433,5.464],
					"5": [44.405,3.776],
					"6": [50.000,1.833],
					"7": [52.295,2.009]
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
			path : "sounds/Reihe 4/",
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
					if(hmn < 8) {
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+obj.part).closest("tr").find(".tran").show();
						}
					}
					else {
						if(hm[hmn] > 1) {
							$("#"+obj.part).closest("button").find(".tran").show();
						}
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
						ion.sound.pause("r4 C2plus", {
							part: "0"
						}
						);
						$("#0").show();
						$(this).hide();
					}
					else if($(this).html()=="▶") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.play("r4 C2plus", {
							part: $(this).attr("id")
						}
						);
						$(this).html("❚❚");
					}
					else if($(this).html()=="❚❚") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r4 C2plus", {
							part: $(this).attr("id")
						}
						);
						$(this).html("▶");
					}
					else {
						// _p 붙어 있지 않으면 id 그대로 재생
						ion.sound.play("r4 C2plus", {
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
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
									$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
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