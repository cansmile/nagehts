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
							<thead>
								<tr>
									<th scope="col" class="text-center" width="15%">das Falsche</th>
									<th scope="col" class="text-center">&nbsp;</th>
									<th scope="col" class="text-center" width="15%">das Richtige</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-1.png" style="max-height: 120px; width: auto;" alt="das Falsche"><br>Käsebrötchen</td>
									<td class="border-0 text-left align-middle">
										<div id="ant-1"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad1">.</span></div>
										</div>
										<span class="tran"><small>저는 치즈빵을 주문하지 않았어요.</small></span>
									</td>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-2.png" style="max-height: 120px; width: auto;" alt="das Richtige"><br>Bratwurstbrötchen</td>
								</tr>
								<tr>
									<td class="border-0 text-left align-middle">
										<div id="ant-2"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
										<span class="tran"><small>저는 소시지빵을 주문하였어요.</small></span>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-3.png" style="max-height: 120px; width: auto;" alt="das Falsche"><br>Cola</td>
									<td class="border-0 text-left align-middle">
										<div id="ant-3"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">.</span></div>
										</div>
										<span class="tran"><small>저는 콜라를 주문하지 않있어요.	</small></span>
									</td>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-4.png" style="max-height: 120px; width: auto;" alt="das Richtige"><br>Orangensaft</td>
								</tr>
								<tr>
									<td class="border-0 text-left align-middle">
										<div id="ant-4"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">.</span></div>
										</div>
										<span class="tran"><small>저는 오렌지주스 한 잔을 주문하였어요.</small></span>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-5.png" style="max-height: 120px; width: auto;" alt="das Falsche"><br>Wein</td>
									<td class="border-0 text-left align-middle">
										<div id="ant-5"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">.</span></div>
										</div>
										<span class="tran"><small>저는 와인 한 잔을 주문하지 않았어요.</small></span>
									</td>
									<td rowspan="2" class="border-0 text-center align-middle"><img src="./images/Reihe 5/Reihe-5-G4-6.png" style="max-height: 120px; width: auto;" alt="das Richtige"><br>Bier</td>
								</tr>
								<tr>
									<td class="border-0 text-left align-middle">
										<div id="ant-6"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
										<span class="tran"><small>저는 맥주를 주문하였어요.</small></span>
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
			var an = ["Ich bekomme kein Käsebrötchen","Ich nehme ein Bratwurstbrötchen","Ich bekomme keine Cola","Ich nehme einen Orangensaft","Ich bekomme keinen Wein","Ich nehme ein Bier"];

			$(document).ready(function() {
				$(".q").on("keyup", function () {
					var q = $(this).val().length;
					var qn = ($(this).attr("id").substr(4))-1;
					var a = $(this).val();
					var b = an[qn].substr(0,q);
					a = a.replace(/ /gi, "");
					b = b.replace(/ /gi, "");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
					$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");
					if(a == b) {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
					} else {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-danger");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
					}
					if(!$(this).val()) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).removeClass("text-white text-weight-bold");
					}
					if($(this).val()) {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					} else {
						$("#ant-"+$(this).attr("id").substr(4)).hide();
					}
				})

				$(".q").on("focusin", function() {
					var q = $(this).val().length;
					var qn = ($(this).attr("id").substr(4))-1;
					var a = $(this).val();
					var b = an[qn].substr(0,q);
					a = a.replace(/ /gi, "");
					b = b.replace(/ /gi, "");

					$("#ant-"+$(this).attr("id").substr(4)).show();
					if(!$("#ant-"+$(this).attr("id").substr(4)).text()) {
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					}
					if($("#ant-"+$(this).attr("id").substr(4)).text()) {
						if(a == b) {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-success");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
						} else {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}
					}
				})

				$(".q").on("focusout", function() {
					$("#ant-"+$(this).attr("id").substr(4)).hide();
					var qn = ($(this).attr("id").substr(4))-1;
					var a = an[qn];
					var b = $(this).val();

					if(a == b) {
						$(this).addClass("bg-success");
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

					$(this).removeClass("text-white text-weight-bold");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");



				})

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
							var oan = an[i].replace(" ", "").toLowerCase();
							var nan = $("#qst-"+(i+1)).val().replace(" ", "").toLowerCase();
							var oran = $("#qst-"+(i+1)).val();
							if(oan == nan) {
								$("#qst-"+(i+1)).addClass("bg-success text-white");
								if($("#qst-"+(i+1)).val() != an[i]) {
									$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span>");
								}
								ri++;
							} else {
								$("#qst-"+(i+1)).val(an[i]);
								$("#qst-"+(i+1)).attr("disabled",true);
								$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span>");
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
				$("#qst-1").val(an[0]);
				$("#qst-1").prop("disabled",true);
				$("#qst-1").closest("tr").find(".tran").show();

				$("#qst-2").val(an[1]);
				$("#qst-2").prop("disabled",true);
				$("#qst-2").closest("tr").find(".tran").show();


			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>