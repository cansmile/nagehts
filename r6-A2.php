<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" colspan="4" class="border-0">1. Was macht er <strong class="text-success">gern</strong>?</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0"><img src="./images/Reihe 6/Reihe-6-A2-1.png" alt="Was macht er gern?" style="max-width: 240px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-2.png" alt="Was macht er gern?" style="max-width: 240px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-4.png" alt="Was macht er gern?" style="max-width: 120px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-3.png" alt="Was macht er gern?" style="max-width: 120px; max-height: 120px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="mr-0 pr-0 border-0">
										<div class="input-group">
											Er
											<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-1">
											gern
										</div>
										<span class="tran"><br><small>그는 자전거타기를 좋아합니다.</small></span>
										<div class="ant" id="ant-1"></div>
									</td>
									<td class="ml-0 pl-0 border-0">
										<div class="input-group">
											<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-2">
											.
										</div>
										<div class="ant" id="ant-2"></div>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											Er
											<input type="text" class="form-control col-3 q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-3">
											gern Fußball.
										</div>
										<span class="tran"><br><small>그는 축구하기를 좋하합니다.</small></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											Er
											<input type="text" class="form-control col-3 q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-4">
											gern.
										</div>
										<span class="tran"><br><small>그는 수영하기를 좋아합니다.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" colspan="4" class="border-0">2. Was macht er <strong class="text-danger">nicht gern</strong>?</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0"><img src="./images/Reihe 6/Reihe-6-A2-5.png" alt="Was macht er nicht gern?" style="max-width: 240px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-6.png" alt="Was macht er nicht gern?" style="max-width: 240px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-7.png" alt="Was macht er nicht gern?" style="max-width: 120px; max-height: 120px;"></td>
									<td class="border-0 text-center align-middle"><img src="./images/Reihe 6/Reihe-6-A2-8.png" alt="Was macht er nicht gern?" style="max-width: 120px; max-height: 120px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="mr-0 pr-0 border-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											Er
											<input type="text" class="form-control col-3 q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-5">
											nicht gern Bücher.
										</div>
										<span class="tran"><br><small>그는 책 읽기를 좋아하지 않습니다.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											Er
											<input type="text" class="form-control col-3 q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-6">
											nicht gern Freunde.
										</div>
										<span class="tran"><br><small>그는 친구만나기를 좋아하지 않습니다.</small></span>
									</td>
								</tr>
								<tr>
									<td class="pr-0 mr-0 border-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											Er
											<input type="text" class="form-control col-3 q border-left-0 border-top-0 border-right-0 rounded ml-1" style="position: relative; top: -6px;" aria-label="." id="qst-7">
											nicht gern Auto.
										</div>
										<span class="tran"><br><small>그는 자동차 운전하기를 좋아하지 않습니다.</small></span>
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
									<th scope="col" colspan="2" class="bg-light border-0"><span class="rounded bg-success text-white m-1 px-3 py-2">GR</span> <span class="rounded bg-info text-white m-1 px-2 py-1">ADV1</span> gern[gεrn] <small>1. 즐겨, 기꺼이 2. 곧잘, 쉽게 3. 거리낌없이</small></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="50%">[부사]<br>
1. 즐겨, 기꺼이<br>
<div class="ml-4">• 부탁이나 권유에 대한 대답<br>
<span class="ml-4">Ja, gern! 네, 그럼요.</span><br><br>
• 감사에 대한 대답<br>
<span class="ml-4">Bitte, gern geschehen. 천만에요, 기꺼이 한일이에요.</span><br></div>
</td>
									<td>• 무엇을 즐겨하다 / 즐겨하지 않다<br>
<div class="pl-4">Ich schlafe gern. / nicht gern.<br>
<div class="pl-4">- Ich esse <strong>gern</strong>.<br>
- Er fährt <strong>gern</strong> Auto.<br>
- Sie spielt <strong>gern</strong> am Computer.<br>
- Sie sieht <strong>nicht gern</strong> fern.</div></div><br>
• gern은 동사 뒤에 위치한다.<br>
</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</section>
		
<!-- 여러개의 답이 인정되어야 하는 경우는 배열로 처리 -->
<!-- 확인하는 단계에서는 배열일 경우 모두 대치 -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();
			$(".ant").hide();
			$("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
			$("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
			var an = new Array();
			var an = ["fährt",["Rad", "Fahrrad"],"spielt","schwimmt","liest","trifft","fährt"];

			$(document).ready(function() {
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
							var qr = $("input.bg-success").length; // 맞춘 항목 수
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
					})
				var pan = new Array();
				pan = [];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).prop("disabled",true);
					$(pann).addClass("bg-success text-white font-weight-bold");
					$(pann).closest("tr").find(".tran").show();
				}

			});
			
		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>