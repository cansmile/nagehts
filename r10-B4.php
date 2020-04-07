<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken. <br>
					<small> 빈칸을 채우세요. </small>
					[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]
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
				<div class="col-12"><img src="./<?php echo($root); ?>images/Reihe 10/Reihe-10-B4-1.png" alt="Ergänzen Sie die passenden Präpositionen." style="max-width: 100%; height: auto;"></div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">
									<div class="input-group">
										Ich heiße Nora und bin 9 Jahre alt. Ich gehe <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-1">Fuß<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-2">die Schule.
									</div>
									<span class="tran"><br><small>내 이름은 노라이고 9살이다. 나는 걸어서 학교에 간다.</small></span>
								
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">

									<div class="input-group">
										Mein Vater Hans Holm ist Pfarrer von Beruf. Er fährt <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-3"> dem Fahrrad 
									<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-4">
										Pfarramt.
									</div>
									<span class="tran"><br><small>나의 아버지 한스 홀름은 직업이 목사님이다. 그는 자전거를 타고 목사관으로 간다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">
									<div class="input-group">
										Meine Mutter Silvia Holm will zuerst meinen Bruder Alex <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-5"> Fuß
										<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-6"> den Kindergarten bringen und dann einkaufen. Sie fährt
										<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-7"> dem Bus
										<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-8"> Supermarkt Kaiser.
									</div>
									<span class="tran"><br><small>어머니 실비아 홀름은 먼저 걸어서 동생 알렉스를 유치원에 데려다주고 쇼핑하러 간다. 그녀는 버스를 타고 카이저 슈퍼마켓으로 간다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">

									<div class="input-group">
										Mein Onkel Georg ist Bankangestellter und arbeitet bei der Bank. Er fährt <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-9"> dem Motorrad <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-10">Bank.
									</div>
									<span class="tran"><br><small>게오르크 삼촌은 은행원이며 은행에서 일한다. 그는 오토바이를 타고 은행으로 간다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">

									<div class="input-group">
										Meine Tante Sabine ist Lehrerin. Sie fährt <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-11"> der U-Bahn <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-12">Schule.
									</div>
									<span class="tran"><br><small>자비네 이모는 교사이다. 그녀는 지하철 타고 학교로 간다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">
									<div class="input-group">
										Mein Onkel Franz Scholl ist Beamter. Er fliegt oft wegen der Dienstreise <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-13"> dem Flugzeug.
									</div>
									<span class="tran"><br><small>프란츠 숄 삼촌은 공무원이다. 그는 출장 때문에 종종 비행기를 타고 다닌다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
					<table class="table">
						<tbody>
							<tr>
							<th scope="row" class="border-0 text-center"><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button></th>
								<td class="border-0" style="line-height: 250%;">
									<div class="input-group">
										Meine Großeltern Robert und Maria Holm wollen <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-14"> Spanien in den Urlaub gehen. Sie wollen da eine Kreuzfahrt machen und fahren deshalb<input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; min-width: 150px; max-width: 200px;" aria-label="." id="qst-15"> dem Schiff.
									</div>
									<span class="tran"><br><small>조부모 로버트와 마리아 홀름은 스페인으로 휴가를 가기를 원한다. 거기서 크루즈여행을 하려고 배를 타고 간다.</small></span>
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
		var an=["zu", "in", "mit","zum","zu","in","mit","zum","mit","zur","mit","zur","mit","nach","mit"];
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
					name : "r10 B4",
					sprite : {
						"0": [.570, 110.024],
						"1": [15.095, 9.092],
						"2": [26.748, 10.490],
						"3": [39.384, 15.402],
						"4": [56.926, 12.188],
						"5": [70.932, 9.068],
						"6": [82.295, 10.045],
						"7": [94.733, 15.824]
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
				path : "<?php echo($root); ?>sounds/Reihe 10/",
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
							$("#"+hmn).closest(".table").find(".tran").show();
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
							ion.sound.pause("r10 B4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r10 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r10 B4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r10 B4", {
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
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");

									if( !$.isArray(an[i])) {
										$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; min-width: 150px;\">"+an[i]+"</div>");
									}
									else {
										// 2 이상인 경우
										var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; min-width: 150px;\">";
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

					var pan=new Array();
					// pan=[1,2,3,4,5,6,7,8,9,10];
					pan = [1,2];
					for(var p=0;
					p < pan.length;
					p++) {
						var pann="#qst-"+pan[p];
						$(pann).val(an[(pan[p]-1)]);
						$(pann).addClass("bg-success text-white font-weight-bold");
						$(pann).prop("disabled", true);
						// $(pann).closest("tr").find(".tran").show();
					}			
	


					$("#0").show();
					$(".alert").hide();
				}
			}
			);
		}
		);

	</script>
	<!-- ion.sound finished -->
	<?php include "footer.php"; ?>
</body>
</html>