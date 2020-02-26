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
					<h2> Hören Sie und ergänzen Sie die Lücken. <br>
					<small> 듣고 빈칸을 채우세요. </small>
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
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<td rowspan="2" class="align-middle"><img src="./images/Reihe 6/Reihe-6-D1-0.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
								<td><img src="./images/Reihe 6/Reihe-6-D1-5.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
								<td><img src="./images/Reihe 6/Reihe-6-D1-4.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
								<td><img src="./images/Reihe 6/Reihe-6-D1-3.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
								<td><img src="./images/Reihe 6/Reihe-6-D1-1.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
								<td><img src="./images/Reihe 6/Reihe-6-D1-2.png" alt="Tagesablauf" style="max-width: 100%; height: auto;"></td>
							</tr>
							<tr>
								<td class="border-0 text-center">6.00 Uhr</td>
								<td class="border-0 text-center">8.00 Uhr</td>
								<td class="border-0 text-center">9.30 Uhr</td>
								<td class="border-0 text-center">11.00 Uhr</td>
								<td class="border-0 text-center">1.00 Uhr</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td id="t1"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td id="b1">Das ist Maria Berndt.<span class="tran"><small><br>이 사람은 마리아 베른트이다.</small></td>
							</tr>
							<tr>
								<td id="t2"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
								<td id="b2">Maria Berndt ist Hausfrau.<span class="tran"><small><br>마리아 베른트는 주부이다.</small></td>
							</tr>
							<tr>
								<td id="t3"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
								<td id="b3">
									<div class="ant" id="ant-1"></div>
									<div class="input-group">
									Sie schläft
									<input type="text" class="form-control col-3 q border-top-0 border-left-0 border-right-0 rounded" style="position: relative; top: -6px;" aria-label="." id="qst-1">
									.
								</div><span class="tran"><small><br>그녀는 6시에 잔다.</small>
							</td>
						</tr>
						<tr>
							<td id="t4"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
							<td id="b4">
								<div class="ant" id="ant-2"></div>
								<div class="input-group">
									<input type="text" class="form-control col-3 q border-top-0 border-left-0 border-right-0 rounded" style="position: relative; top: -6px;" aria-label="." id="qst-2">
									steht sie auf.
								</div><span class="tran"><small><br>8시에 그녀는 일어난다.</small>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<table class="table">
					<tbody>
						<tr>
							<td id="t5"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
							<td id="b5">
								<div class="ant" id="ant-3"></div>
								<div class="input-group">
									<input type="text" class="form-control col-3 q border-top-0 border-left-0 border-right-0 rounded" style="position: relative; top: -6px;" aria-label="." id="qst-3">
									frühstückt sie.
								</div><span class="tran"><small><br>9시 반에 그녀는 아침을 먹는다.</small>
							</td>
						</tr>
						<tr>
							<td id="t6"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
							<td id="b6">Da isst sie ein Brötchen und trinkt Kaffee.<span class="tran"><small><br>그때는 작은 빵을 먹고 커피를 마신다.</small></td>
						</tr>
						<tr>
							<td id="t7"><button type="button" id="7" class="so btn btn-outline-primary">▶</button></td>
							<td id="b7">
								<div class="ant" id="ant-4"></div>
								<div class="input-group">
									<input type="text" class="form-control col-3 q border-top-0 border-left-0 border-right-0 rounded" style="position: relative; top: -6px;" aria-label="." id="qst-4">
									kauft sie Lebensmittel ein.
								</div><span class="tran"><small><br>11시에 그녀는 식료품을 산다.</small>
							</td>
						</tr>
						<tr>
							<td id="t8"><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
							<td id="b8">
								<div class="ant" id="ant-5"></div>
								<div class="input-group">
									<input type="text" class="form-control col-3 q border-top-0 border-left-0 border-right-0 rounded" style="position: relative; top: -6px;" aria-label="." id="qst-5">
									isst sie zu Mittag.
								</div><span class="tran"><small><br>1시에 그녀는 점심을 먹는다.</small>
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
var an=[["um sechs Uhr", "um 6 Uhr"], ["Um acht Uhr", "Um 8 Uhr"], ["Um halb zehn", "Um 9.30 Uhr"], ["Um elf Uhr", "Um 11 Uhr"], ["Um ein Uhr", "Um 1 Uhr"]];
function checkHeight() {
	// 좌우 셀 높이 맞추어 주기
	var tbn = 4; // 전체 셀의 반 값; 좌측과 우측이 같은 경우
	for(var i = 1; i <= tbn; i++) {
		if( $("#b"+i).height() > $("#b"+(i+tbn)).height() ) {
			$("#t"+(i+tbn)).height($("#b"+i).height());
			$("#t"+(i)).height($("#b"+i).height());
			$("#b"+(i+tbn)).height($("#b"+i).height());
		} else if( ($("#b"+i).height() < $("#b"+(i+tbn)).height()) || ($("#b"+i).height() == $("#b"+(i+tbn)).height()) ) {
			$("#t"+(i)).height($("#b"+(i+tbn)).height());
			$("#t"+(i+tbn)).height($("#b"+(i+tbn)).height());
			$("#b"+(i)).height($("#b"+(i+tbn)).height());
		}
	}
}

$(document).on("click", function() { checkHeight(); });

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
			name : "r6 D1",
			sprite : {
				"0": [3.48, 41.51],
					"1": [8.54, 2.26],
					"2": [11.81, 2.74],
					"3": [16.4, 2.42],
					"4": [20.89, 2.84],
					"5": [25.58, 2.69],
					"6": [29.38, 3.48],
					"7": [35.61, 3.9],
					"8": [41.83, 3.2]
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
					ion.sound.pause("r6 D1", {
						part: "0"
					}
					);
					$("#0").show();
					$(this).hide();
				}
				else if($(this).html()=="▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r6 D1", {
						part: $(this).attr("id")
					}
					);
					$(this).html("❚❚");
				}
				else if($(this).html()=="❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r6 D1", {
						part: $(this).attr("id")
					}
					);
					$(this).html("▶");
				}
				else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r6 D1", {
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

							checkHeight();
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