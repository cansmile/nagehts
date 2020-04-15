<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<?php $single_line_height = 50; ?>
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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="border-0 align-middle" width="50" rowspan="2" scope="row"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></th>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle" width="50">1.</td>
								<td class="border-0 align-middle">Räumen Sie gern auf?<span class="tran"><small><br>당신은 치우는 것을 좋아하나요?</small></span></td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle"></td>
								<td class="border-0 align-middle"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-1"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-1">
										, ich räume gern auf.
									</div><span class="tran"><small><br>네, 치우는 거 좋아해요.</small>
								</td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-2"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-2">
										, ich räume nicht gern auf.
									</div><span class="tran"><small><br>아뇨, 저는 치우는 거 좋아하지 않아요.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="border-0 align-middle" width="50" rowspan="2" scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle" width="50">2.</td>
								<td class="border-0 align-middle">Gehen Sie gern spazieren?<span class="tran"><small><br>당신은 산책하는 것을 좋아하지 않나요?</small></span></td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle"></td>
								<td class="border-0 align-middle"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-3"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-3">
										, ich gehe gern spazieren.
									</div><span class="tran"><small><br>네, 산책하는 거 좋아해요.</small>
								</td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-4"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-4">
										, ich gehe nicht gern spazieren.
									</div><span class="tran"><small><br>아뇨, 저는 산책하는 거 좋아하지 않아요.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="border-0 align-middle" width="50" rowspan="2" scope="row"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></th>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle" width="50">3.</td>
								<td class="border-0 align-middle">Gehen Sie nicht gern schwimmen?<span class="tran"><small><br>당신은 수영하는 것을 좋아하지 않나요?</small></span></td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle"></td>
								<td class="border-0 align-middle"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-5"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-5">
										, ich gehe gern schwimmen.
									</div><span class="tran"><small><br>네, 수영하는거 좋아해요.</small>
								</td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-6"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-6">
										, ich gehe nicht gern schwimmen.
									</div><span class="tran"><small><br>아뇨, 수영하는 거 좋아하지 않아요.</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th class="border-0 align-middle" width="50" rowspan="2" scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle" width="50">4.</td>
								<td class="border-0 align-middle">Kochen Sie nicht gern?<span class="tran"><small><br>당신은 요리하는 것을 좋아하지 않나요?</small></span></td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle"></td>
								<td class="border-0 align-middle"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-7"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-7">
										, ich koche gern.
									</div><span class="tran"><small><br>네, 저는 요리하는거 좋아해요.</small>
								</td>
							</tr>
							<tr>
								<td height="<?php echo($single_line_height); ?>" class="border-0 align-middle">
									<div class="ant" id="ant-8"></div>
									<div class="input-group">
										<input type="text" class="form-control text-right col-2 pr-0 mr-0 border-top-0 border-left-0 border-right-0 rounded q" style="position: relative; top: -6px;" aria-label="." id="qst-8">
										, ich koche nicht gern.
									</div><span class="tran"><small><br>아뇨, 저는 요리하는 거 좋아하지 않아요.</small>
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

			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th class="border-0" scope="col" colspan="2"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="border-0 align-middle">
									<strong>[긍정적 의문문]</strong><br>
									<div class="ml-4 pt-2">긍정의 대답은 ja<br>
									부정의 대답은 nein, nicht로 답을 한다.</div>
								</td>
								<td class="border-0 align-middle">
									<strong>[부정적 의문문]</strong> nicht, kein 포함<br>
									<div class="ml-4 pt-2">긍정의 대답은 doch<br>
									부정의 대답은 nein, nicht로 답을 한다.</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$(".ant").hide();
		var an=new Array();
		var an=["Ja", "Nein", "Ja", "Nein", "Doch", "Nein", "Doch", "Nein"];
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
			};

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
			);

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
					name : "r6 U2",
					sprite : {
						"0": [5, 97.91],
							"1": [10.79, 19.79],
							"2": [35.39, 20.51],
							"3": [58.79, 20.39],
							"4": [82.79, 19.67]
					}
				}
				, {
					name: "dingdongdang",
						path: "<?php echo($root); ?>sounds/",
				}
				, {
					name: "Cartoon_Boing",
						path: "<?php echo($root); ?>sounds/",
				}
				],
				path : "<?php echo($root); ?>sounds/Reihe 6/",
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
							ion.sound.pause("r6 U2", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 U2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 U2", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 U2", {
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
	<?php require "footer.php"; ?>
</body>
</html>