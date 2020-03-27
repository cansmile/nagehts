<?php include "header.php"; ?>
<body>
<?php include "back.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken.
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button> <br>
					<small> 빈칸을 채우세요. </small><br>
					[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>1. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-1">Auto
						<span class="tran">&nbsp;<small>자동차로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>2. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-2">Taxi
						<span class="tran">&nbsp;<small>택시로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>3. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-3">Zug
						<span class="tran">&nbsp;<small>기차로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>4. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-4">Fahrrad
					<span class="tran">&nbsp;<small>자전거로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>5. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-5">Straßenbahn
						<span class="tran">&nbsp;<small>전철로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>6. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-6">Schiff
						<span class="tran">&nbsp;<small>배로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>7. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-7">Flugzeug
						<span class="tran">&nbsp;<small>비행기로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>8. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-8">U-Bahn
						<span class="tran">&nbsp;<small>지하철로</small></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 my-3" style="line-height: 250%;">
					<div class="input-group">
						<button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1 px-3">▶</button>9. mit <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px;" aria-label="." id="qst-9">Motorrad
						<span class="tran">&nbsp;<small>오토바이로</small></span>
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
				<div class="row">
					<div class="col-12"><span class="border border-success bg-lime text-black p-1 px-2 m-1 rounded font-weight-bold">TIPP</span><strong>Präpositionen im Dativ</strong><small> 3격 지배전치사</small></div>
					<div class="col-12">
						<div class="p-1 px-2 my-2">
							<small>3격 지배 전치사 mit은 aus, bei, nach, seit, von, zu, gegenüber와 더불어 3격 지배전치사에 속하며 아래와 같은 의미로 사용된다:</small>
						</div>
						<table class="table">
							<tbody>
								<tr>
									<th rowspan="3" class="border-0">z.B.:</th>
									<td class="border-0">Ich gehe <strong>mit meiner Schwester</strong>.<small><br>나는 내 여동생과 함께 간다.</small></td>
								</tr>
								<tr>
									<td class="border-0">Er schreibt <strong>mit dem Kuli auf</strong>.<small><br>그는 볼펜으로 메모한다.</small></td>
								</tr>
								<tr>
									<td class="border-0">Sie fährt <strong>mit dem</strong> Bus zur Uni.<small><br>그녀는 버스를 타고 학교에 간다.</small></td>
								</tr>
							</tbody>
						</table>
						<div class="p-1 px-2 my-2 bg-light border border-secondary rounded">
							<small>독일어의 정(부정)관사류 및 인칭대명사의 격변화는 8과와 9과를 참고하기 바란다.</small>
						</div>
					</div>
				</div>
			</div>
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
		var an=["dem","dem","dem","dem","der","dem","dem","der","dem"];

		// 각 문장 재생 횟수 초기화
		var hm=new Array(), sen=new Array();
		$(".so").each(function() {
			hm[$(this).attr("id")]=0;
			sen[$(this).attr("id")]=$("#"+$(this).attr("id")).html();
		});

		$(document).ready(function() {

				ion.sound( {
					sounds : [ {
						name : "r10 B3b",
						sprite : {
							"0": [2.133, 33.171],
							"1": [8.662, 1.131],
							"2": [11.535, 1.218],
							"3": [14.626, 1.088],
							"4": [17.456, 1.523],
							"5": [20.721, 1.697],
							"6": [24.073, 1.305],
							"7": [27.163, 1.654],
							"8": [30.297, 1.436],
							"9": [33.475, 1.741]
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
					path : "sounds/Reihe 10/",
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
							$("#"+obj.part).html(sen[obj.part]);
							if(hm[hmn] > 1) {
								$("#"+hmn).closest("div").find(".tran").show();
							}
						}
					}
					, ready_callback: function () {

						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2)=="_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r10 B3b", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).text()==sen[$(this).attr("id")]) {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r10 B3b", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r10 B3b", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r10 B3b", {
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
						)
						;


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
											$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 100px;\">"+an[i]+"</div>");
										}
										else {
											// 2 이상인 경우
											var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 100px;\">";
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
						pan = [1];
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