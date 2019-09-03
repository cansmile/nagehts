<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
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
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append pr-0 mr-0"><span class="input-group-text">gern</span></div>
										</div>
										<div class="ant" id="ant-1"></div>
									</td>
									<td class="ml-0 pl-0 border-0">
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div>
										<div class="ant" id="ant-2"></div>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control col-3 q" aria-label="." id="qst-3">
											<div class="input-group-append"><span class="input-group-text">gern Fußball.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control col-3 q" aria-label="." id="qst-4">
											<div class="input-group-append"><span class="input-group-text">gern.</span></div>
										</div>
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
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control col-3 q" aria-label="." id="qst-5">
											<div class="input-group-append pr-0 mr-0"><span class="input-group-text">nicht gern Bücher.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control col-3 q" aria-label="." id="qst-6">
											<div class="input-group-append"><span class="input-group-text">nicht gern Freunde.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="pr-0 mr-0 border-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Er</span></div>
											<input type="text" class="form-control col-3 q" aria-label="." id="qst-7">
											<div class="input-group-append"><span class="input-group-text">nicht gern Auto.</span></div>
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
		<script src="./js/jquery-3.3.1.min.js"></script>
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
							ion.sound.play("Bama_Country_Country");
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
					var na = "";
					var ri = 0;
					var qst = $(".q").length;
					$(".q").each(function () {
						if(na != "") {
							na += ", ";
						}
						if($(this).val() == "") {
							na += $(this).attr("id").substr(4,1);
						}
					})
					
					if($(this).attr("id") == "done") {} else if(na == "") {
						for(var i = 0; i < an.length; i++) {
							var oran = $("#qst-"+(i+1)).val();
							if(rfchk($("#qst-"+(i+1)))) {
								$("#qst-"+(i+1)).addClass("bg-success text-white");
							} else {
								$("#qst-"+(i+1)).val(an[i]);
								$("#qst-"+(i+1)).attr("disabled",true);
								$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span>");
							}

							if($("#qst-"+(i+1)).hasClass("bg-success")) {
								ri++;
							}

						}

					if (ri < (qst/2)) {
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞추셨네요!</h4>");
						$(this).addClass("bg-danger text-white");
					} else if(ri == qst) {
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("bg-primary text-white");
					} else {
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("bg-warning text-dark");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id","done");
					} else {
						alert("모든 문제를 풀어주세요!");
						// alert(na+"번 문제를 풀어주세요!");
					};
				})
				// $("#qst-2").val(an[1]);
				// $("#qst-2").prop("disabled",true);
				// $("#qst-2").closest("tr").find(".tran").show();


			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>