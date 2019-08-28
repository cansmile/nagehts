d<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tr>
								<td rowspan="3" class="border-0">&nbsp;</td>
								<td class="text-right border border-secondary border-left-0 border-top-0 border-bottom-0">isst</td>
								<td class="border-0">gern</td>
								<td rowspan="3" class="text-center align-middle border border-secondary border-left-0 border-top-0 border-bottom-0"><img src="./images/Reihe 5/Reihe-5-G3-1.png" alt="Face" style="max-width: 120px; height: auto;"></td>
								<td rowspan="3" class="text-center align-middle border-0"><img src="./images/Reihe 5/Reihe-5-G3-2.png" alt="Face" style="max-width: 120px; height: auto;"></td>
								<td class="border border-secondary border-top-0 border-bottom-0 border-left-0 text-right">mag</td>
								<td class="border-0">keinen</td>
							</tr>
							<tr>
								<td class="text-right border border-secondary border-left-0 border-top-0 border-bottom-0">trinkt</td>
								<td class="border-0">&nbsp;</td>
								<td class="border border-secondary border-left-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-0">keine</td>
							</tr>
							<tr>
								<td class="border border-secondary border-left-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-0">&nbsp;</td>
								<td class="border border-secondary border-left-0 border-top-0 border-bottom-0">&nbsp;</td>
								<td class="border-0">kein</td>
							</tr>
							<tr>
								<th scope="row" class="border-0 bg-warning">Tim</th>
								<td colspan="3" class="text-center border border-secondary border-top-0 border-bottom-0 border-left-0 bg-warning">Hamburger, Cola</td>
								<td colspan="3" class="text-center border-0 bg-warning">Käse</td>
							</tr>
							<tr>
								<th scope="row" class="border-0 bg-warning">Monika</th>
								<td colspan="3" class="text-center border border-secondary border-top-0 border-bottom-0 border-left-0 bg-warning">Marmeladenbrot, Wein</td>
								<td colspan="3" class="text-center border-0 bg-warning">Bier</td>
							</tr>
						</table>
					</div>					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row" class="text-center align-middle" rowspan="3" width="10em">Tim</th>
									<td>
										<div id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad9">Er isst gern </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="text-center form-control col-4 q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad1">.</span></div>
										</div>
										<span class="tran">그는 햄버거 먹기를 좋아합니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">und trinkt gern </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control col-4 q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
										<span class="tran">그리고 콜라 마시기를 좋아합니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">Aber er mag keinen </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control col-4 q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">.</span></div>
										</div>
										<span class="tran">하지만 치즈는 좋아하지 않습니다.</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>

								<tr>
									<th scope="row" class="text-center align-middle" rowspan="3" width="10em">Monika</th>
									<td>
										<div id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad4">Sie isst gern </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control col-4 q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">.</span></div>
										</div>
										<span class="tran">그녀는 잼 바른 빵 먹는 것을 좋아합니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">und trinkt gern </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control col-4 q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">.</span></div>
										</div>
										<span class="tran">그리고 와인 마시기를 좋아합니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">Aber sie mag kein </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control col-4 q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
										<span class="tran">하지만 맥주는 좋아하지 않습니다.</span>
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
		
<!-- 여러개의 답이 인정되어야 하는 경우는 배열로 처리 -->
<!-- 확인하는 단계에서는 배열일 경우 모두 대치 -->
		
<?php include "footer.php"; ?>
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
			var an = ["Hamburger","Cola","Käse","Marmeladenbrot","Wein","Bier"];

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
	</body>
</html>