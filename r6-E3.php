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
									<th scope="col" width="45%" class="border-0 text-center text-white bg-secondary">formell 공식적</th>
									<th scope="col" width="10%" class="border-0 text-center bg-white">&nbsp;</th>
									<th scope="col" width="45%" class="border-0 text-center text-white bg-secondary">informell 비공식적</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-1">
										</div>
									</th>
									<td class="text-center">6.05</td>
									<td>
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-2">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-3">
										</div>
									</th>
									<td class="text-center">2.15</td>
									<td>
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-4">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-5">
										</div>
									</th>
									<td class="text-center">13.00</td>
									<td>
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-6">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-7">
										</div>
									</th>
									<td class="text-center">15.45</td>
									<td>
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-8">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-9"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-9">
										</div>
									</th>
									<td class="text-center">8.25</td>
									<td>
										<div class="ant" id="ant-10"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-10">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-11"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-11">
										</div>
									</th>
									<td class="text-center">14.57</td>
									<td>
										<div class="ant" id="ant-12"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-12">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="ant" id="ant-13"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-13">
										</div>
									</th>
									<td class="text-center">6.03</td>
									<td>
										<div class="ant" id="ant-14"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-14">
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
			var an = ["sechs Uhr fünf","fünf nach sechs","zwei Uhr fünfzehn","Viertel nach zwei","dreizehn Uhr","eins","fünfzehn Uhr fünfundvierzig","Viertel vor vier","acht Uhr fünfundzwanzig","fünf vor halb neun","vierzehn Uhr siebenundfünfzig","kurz vor drei","sechs Uhr drei","kurz nach sechs"];

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
				// $("#qst-2").val(an[1]);
				// $("#qst-2").prop("disabled",true);
				// $("#qst-2").closest("tr").find(".tran").show();


			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>