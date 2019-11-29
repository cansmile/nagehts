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
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td>Was bekommen Sie, bitte?<span class="tran"><br><small>뭘 드시겠어요?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich möchte einen Salat.<span class="tran"><br><small>샐러드 하나요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
								<td>Bitte schön! Was möchten Sie?<span class="tran"><br><small>주문 받겠습니다! 뭘 드시겠어요?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich möchte eine Pizza.<span class="tran"><br><small>피자 하나요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
								<td>Bitte, was darf es denn sein?<span class="tran"><br><small>뭘 드시겠어요?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich nehme ein Steak und trinke ein Bier.<span class="tran"><br><small>스테이크 하나와 맥주 한 잔이요.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" width="20%">ich</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-1">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">du</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-2">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">Sie</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-3">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">er/sie/es</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-4">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">wir</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-5">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">ihr</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-6">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">Sie/sie</th>
								<td>
									<div class="input-group">
										möcht
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-7">
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" width="20%">ich</th>
								<td>
									<div class="input-group">
										nehm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-8">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">du</th>
								<td>
									<div class="input-group">
										nimm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-9">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">Sie</th>
								<td>
									<div class="input-group">
										nehm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-10">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">er/sie/es</th>
								<td>
									<div class="input-group">
										nimm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-11">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">wir</th>
								<td>
									<div class="input-group">
										nehm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-12">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">ihr</th>
								<td>
									<div class="input-group">
										nehm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-13">
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">Sie/sie</th>
								<td>
									<div class="input-group">
										nehm
										<input type="text" class="text-lowercase form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0" style="position: relative; top: -6px;" aria-label="." id="qst-14">
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
			
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>bekommen, nehmen : to get, to take<br>Was darf es denn sein? 뭘 드시겠어요?<br><br>주문할 때 <strong>부정관사</strong>를 사용한다. 그리고 계산할 때에는 먹은 음식을 계산한 것이므로 <strong>정관사</strong>를 사용한다.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span> möchten</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>möchten은 mögen(~을 좋아하다, ~일지도 모른다) 동사로부터 비롯된 접속법II식 동사이다. 접속법II식은 공손한 부탁이나 비현실적인 조건, 소망 등을 표현할 때 사용한다.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"><span class="bg-lime font-weight-bold p-1 px-2 m-1 rounded">TIPP</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="row">
										<div class="col-7 text-center">Das ist <strong>ein</strong> Salat.</div>
										<div class="col-5 text-center">(ein → 1격)</div>
										<div class="col-7 text-center">Ich nehme <strong>einen</strong> Salat.</div>
										<div class="col-5 text-center">(einen → 4격)</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
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
		var an=["e", "est", "en", "e", "en", "et", "en", "e", "st", "en", "t", "en", "t", "en"];
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
					name : "r5 D1",
					sprite : {
						"0": [13.92, 36.07],
							"1": [17.42, 2.04],
							"2": [22.12, 2.1],
							"3": [27.79, 3.43],
							"4": [33.81, 2.41],
							"5": [39.48, 3.13],
							"6": [45.45, 4.54]
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
							ion.sound.pause("r5 D1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 D1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 D1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 D1", {
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
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2");
									$("#qst-"+(i+1)).removeClass("rounded-0");
									$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}
							if (ri < (qst/2)) {
								$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞히셨네요!</h4>");
								$(this).addClass("bg-danger text-white");
							}
							else if(ri==qst) {
								$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞히셨네요!<br>혹시 독일인이세요?</h4>");
								$(this).addClass("bg-primary text-white");
							}
							else {
								$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞히셨네요!<br>훌륭합니다!</h4>");
								$(this).addClass("bg-warning text-white");
							}
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