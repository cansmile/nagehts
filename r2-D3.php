<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0">1.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Korea?<span class="tran"><br><small>한국은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad1">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">2.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Australien?<span class="tran"><br><small>호주는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">3.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Amerika?<span class="tran"><br><small>미국은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">4.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Österreich?<span class="tran"><br><small>오스트리아는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">5.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt der Irak?<span class="tran"><br><small>이라크는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">6.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Indien?<span class="tran"><br><small>인도는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">7.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Kenia?<span class="tran"><br><small>케냐는 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q" id="qst-7">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad7">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">8.</th>
									<td class="border-top-0 border-bottom-0">Wo liegt Deutschland?<span class="tran"><br><small>독일은 어디에 있나요?</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q" id="qst-8">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad8">.</span></div>
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
			var an = new Array();
			var an = ["In Asien","In Australien","In Nordamerika","In Europa","In Asien","In Asien","In Afrika","In Europa"];
			$(document).ready(function() {
				$(".q").on("keyup", function () {
					var q = $(this).val().length;
					var qn = ($(this).attr("id").substr(4))-1;
					if($(this).val() == an[qn].substr(0,q)) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-success");
					} else {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-danger");
					}
					if(!$(this).val()) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).removeClass("text-white text-weight-bold");
					}
				})

				$(".q").on("focusout", function() {
					var qn = ($(this).attr("id").substr(4))-1;
					if($(this).val() == an[qn]) {
						$(this).addClass("bg-success");
					} else {
						$(this).addClass("bg-danger");
					}
					
					if($(this).hasClass("bg-danger")) {
						ion.sound.play("Cartoon_Boing");
					} else if($(this).hasClass("bg-success")){
						ion.sound.play("Bama_Country_Country");
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
					
					if(na == "") {
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
						$(this).addClass("bg-warning text-white");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					} else {
						alert(na+"번 문제를 풀어주세요!");
					};
				})
				$("#qst-1").val("In Asien");

			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>