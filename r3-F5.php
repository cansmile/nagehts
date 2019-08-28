d<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mb-4 mt-2 text-center">
						<table class="table">
							<tbody>
								<tr>
									<td><s>Vivien(Krankenschwester / Ungarn)</s></td>
									<td>Sumi (Ärztin / Korea)</td>
								</tr>
								<tr>
									<td><s>Pierre (Lehrer / Frankreich)</s></td>
									<td>Diana (Studentin / Griechenland)</td>
								</tr>
								<tr>
									<td>Max (Fußballspieler / Deutschland)</td>
									<td>Carlos (Kellner / Mexiko)</td>
								</tr>
								<tr>
									<td>Julia (Bankkauffrau / Polen)</td>
									<td>Amit (Chemiker/ Indien)</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center" width="50%"><img src="./images/sym_frau.png" alt="Frau" style="max-height: 140px; width: auto;"></th>
									<th scope="col" class="text-center" width="50%"><img src="./images/sym_mann.png" alt="Mann" style="max-height: 140px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">Vivien</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
										</div>
										<span class="tran"><small>비비안은 헝가리 출신이에요. 그녀는 간호사에요.</small></span>
									</td>
									<td>
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">Pierre</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-5">
										</div>
										<span class="tran"><small>피에르는 프랑스 출신이에요. 그는 직업상 교사에요.</small></span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">Sumi</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-2">
										</div>
										<span class="tran"><small>수미는 한국 출신이에요. 그녀는 의사에요.</small></span>
									</td>
									<td>
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">Max</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-6">
										</div>
										<span class="tran"><small>막스는 독일 출신이고, 축구선수에요.</small></span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">Julia</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-3">
										</div>
										<span class="tran"><small>율리아는 폴란드인이고 은행원이에요.</small></span>
									</td>
									<td>
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad7">Carlos</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-7">
										</div>
										<span class="tran"><small>카를로스는 멕시코 출신이에요. 그는 종업원이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad4">Diana</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-4">
										</div>
										<span class="tran"><small>다이아나는 그리스인이에요. 그녀는 학생이에요.</small></span>
									</td>
									<td>
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad8">Amit</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-8">
										</div>
										<span class="tran"><small>아밋은 인도사람이고 화학자에요.</small></span>
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
			var an = ["Vivien kommt aus Ungarn. Sie ist Krankenschwester.","Sumi kommt aus Korea. Sie ist Ärztin.","Julia ist Polin und Bankkauffrau.","Diana ist Griechin. Sie ist Studentin.","Pierre kommt aus Frankreich. Er ist Lehrer von Beruf.","Max ist Deutscher und Fußballspieler.","Carlos kommt aus Mexiko. Er ist Kellner.","Amit ist Inder und Chemiker"];

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
						$(this).addClass("bg-warning text-white");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id","done");
					} else {
						alert("모든 문제를 풀어주세요!");
						// alert(na+"번 문제를 풀어주세요!");
					};
				})
				$("#qst-1").val(an[0]);
				$("#qst-1").prop("disabled",true);
				$("#qst-1").closest("tr").find(".tran").show();

				$("#qst-5").val(an[4]);
				$("#qst-5").prop("disabled",true);
				$("#qst-5").closest("tr").find(".tran").show();


			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>