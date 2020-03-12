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
					<div class="col text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]
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
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">1.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Korea?<span class="tran"><br><small>한국은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-1">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">2.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Australien?<span class="tran"><br><small>호주는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-2">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">3.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Amerika?<span class="tran"><br><small>미국은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-3">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">4.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Österreich?<span class="tran"><br><small>오스트리아는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-4">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">5.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt der Irak?<span class="tran"><br><small>이라크는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-5">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">6.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Indien?<span class="tran"><br><small>인도는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-6">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">7.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Kenia?<span class="tran"><br><small>케냐는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-7">
											.
										</div>
									</td>
								</tr>
								<tr>
									<th width="50" class="border-top-0 border-bottom-0"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
									<td width="50" class="border-top-0 border-bottom-0">8.</td>
									<td class="border-top-0 border-bottom-0">Wo liegt Deutschland?<span class="tran"><br><small>독일은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-8">
											.
										</div>
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
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			var an = new Array();
			var an = ["In Asien","In Australien","In Nordamerika","In Europa","In Asien","In Asien","In Afrika","In Europa"];

			$(document).ready(function() {
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
					name : "r2 D3",
					sprite : {
						"0": [.5, 62.73],
						"1": [4.43, 6.48],
						"2": [11.86, 7.44],
						"3": [20.48, 6.16],
						"4": [28.28, 6.47],
						"5": [36.07, 5.41],
						"6": [42.85, 6.81],
						"7": [50.26, 5.52],
						"8": [56.84, 5.72]
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
				path : "sounds/Reihe 2/",
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
						if(obj.part > 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
					// 값 확인해보자, io값이 참이면 전체 검사
					function rfchk(th,io) {
						var q, qn, a, b, fl;
						q = th.val().length;
						qn = (th.attr("id").substr(4))-1;
						a = th.val();
						a = a.replace(/ /gi, "");
						if(!$.isArray(an[qn])) {
							// 1 인 경우 
							if(io) {
								b = an[qn];
							} else {
								b = an[qn].substr(0,q);
							}
							b = b.replace(/ /gi, "");

							if(a == b) {
								return true;
							}

						} else {
							// 2 이상인 경우
							for(var fd = 0; fd < an[qn].length; fd++) {
								if(io) {
									b = an[qn][fd];
								} else {
									b = an[qn][fd].substr(0,q);
								}
								b = b.replace(/ /gi, "");
								
								if(a == b) {
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
						} else {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}

						if(!$(this).val()) {
							$(this).removeClass("bg-danger");
							$(this).removeClass("bg-success");
							$(this).removeClass("text-white font-weight-bold");
						}
						
						if($(this).val()) {
							$("#ant-"+$(this).attr("id").substr(4)).show();
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						} else {
							$("#ant-"+$(this).attr("id").substr(4)).hide();
						}
					})

					$(".q").on("focusin", function() {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						if(!$("#ant-"+$(this).attr("id").substr(4)).text()) {
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						}
						if($("#ant-"+$(this).attr("id").substr(4)).text()) {
							if(rfchk($(this))) {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-success");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
							} else {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-danger");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
							}
						}
					})

					$(".q").on("focusout", function() {
						$("#ant-"+$(this).attr("id").substr(4)).hide();

						if(rfchk($(this),true)) {
							$(this).addClass("bg-success");
							$(this).addClass("text-white");
						} else {
							$(this).addClass("bg-danger");
						}
						if($(this).val()) {
							if($(this).hasClass("bg-danger")) {
								ion.sound.play("Cartoon_Boing");
							} else if($(this).hasClass("bg-success")){
								ion.sound.play("dingdongdang");
								$(this).prop("disabled",true);
							}
						}

						$(this).removeClass("bg-danger");
						if(!$(this).attr("disabled")) {
							$(this).removeClass("text-white font-weight-bold");
							$(this).removeClass("bg-success");
						}
					})

					/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 D3", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r2 D3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r2 D3", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r2 D3", {
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
										if($("span.sen").length > 0) {if($("span.sen").length > 0) {
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

							checkHeight();
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					})
					$("#qst-1").val("In Asien");
					$("#qst-1").addClass("bg-success text-white font-weight-bold")
					$("#qst-1").attr("disabled",true);

					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>