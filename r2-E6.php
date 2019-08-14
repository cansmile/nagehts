<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
						<h3>[ <small>답안을 보고 알맞은 문제를 입력하세요.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<table class="table">
							<tbody>
								<tr>
									<th width="50px" class="border-top-0 border-bottom-0">1.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append"><span class="input-group-text">(Sie)</span></div>
										</div>
										<span class="tran"><small>당신의 이름은 뭔가요?</small></span>
									</td>
									<td width="50%">
										Mein Name ist Mina Kim.<span class="tran"><br><small>저의 이름은 미나 김이에요.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">2.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text">(Sie)</span></div>
										</div>
										<span class="tran"><small>당신은 어디에서 사나요?</small></span>
									</td>
									<td>
										Ich wohne in Seoul.<span class="tran"><br><small>저는 서울에서 살아요.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">3.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-3">
											<div class="input-group-append"><span class="input-group-text">(Sie)</span></div>
										</div>
										<span class="tran"><small>독일어를 말할 수 있나요?</small></span>
									</td>
									<td>
										Ja, ich spreche etwas Deutsch.<span class="tran"><br><small>네, 저는 독일어를 조금 해요.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">4.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Und du,</span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-4">
											<div class="input-group-append"><span class="input-group-text">(du)</span></div>
										</div>
										<span class="tran"><small>그리고 넌, 네 이름은 뭐야?</small></span>
									</td>
									<td>
										Ich bin Sabine.<span class="tran"><br><small>나는 사빈이야.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">5.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-5">
											<div class="input-group-append"><span class="input-group-text">(du)</span></div>
										</div>
										<span class="tran"><small>너는? 너는 잘 지내?</small></span>
									</td>
									<td>
										Gut, danke!<span class="tran"><br><small>잘지내, 고마워!</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">6.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Und dir?</span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-6">
											<div class="input-group-append"><span class="input-group-text">(du)</span></div>
										</div>
										<span class="tran"><small>너는 어때? 잘 지내니?</small></span>
									</td>
									<td>
										Ja, Danke.<span class="tran"><br><small>응, 고마워.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">7.</th>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-7">
											<div class="input-group-append"><span class="input-group-text">(du)</span></div>
										</div>
										<span class="tran"><small>너는 어디 살아?</small></span>
									</td>
									<td>
										Ja, ich wohne in Berlin.<span class="tran"><br><small>응, 난 베를린에 살아.</small></span>
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

				<div class="row text-center">
				<div class="col"></div>
				<div class="col-sm-9 col-md-8 col-lg-7 col-xl-10">
					<table class="table text-center">
						<thead>
							<th scope="col">
								※ 참고
							</th>
						</thead>
						<tbody>
							<tr>
								<td><a href="./r2-Grammatik und Wendungen.php">Grammatik und Wendungen</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div clasas="col"></div>				
			</div>
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
			var an = ["Wie heißen Sie?","Wo wohnen Sie?","Sprechen Sie Deutsch?","wie heißt du?","Wie geht es dir?","Geht es dir gut?","Wohnst du in Berlin?"];
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
						if((qn+1) == 4) {
							b = "wie ist dein Name?";
							b = b.substr(0,q);
							b = b.replace(/ /gi, "");

							c = "wer bist du?";
							c = c.substr(0,q);
							c = c.replace(/ /gi, "");

							if(a == b || a == c) {
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
								$(this).addClass("bg-success");
								$(this).addClass("text-white text-weight-bold");
							} else {
								$(this).addClass("text-white text-weight-bold");
								$(this).addClass("bg-danger");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
							}
						} else {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}
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
					$("#ant-"+$(this).attr("id").substr(4)).show();
					if(!$("#ant-"+$(this).attr("id").substr(4)).text()) {
						$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
					}
				})

				$(".q").on("focusout", function() {
					$("#ant-"+$(this).attr("id").substr(4)).hide();
					var qn = ($(this).attr("id").substr(4))-1;
					var a = an[qn];
					var b = $(this).val();

					if(a == b) {
						$(this).addClass("bg-success");
						$(this).prop("disabled",true);
						$(this).addClass("text-weight-bold");
						$(this).closest("tr").find(".tran").show();

					} else {
						if((qn+1) == 4) {
							a = "wie ist dein Name?";
							c = "wer bist du?";

							if(a == b || c == b) {
								$(this).addClass("bg-success");
								$(this).prop("disabled",true);
								$(this).addClass("text-weight-bold");
								$(this).closest("tr").find(".tran").show();
								if(c == b) {
									$(this).closest("tr").find(".tran:first").html("<small>그리고 넌, 너는 누구니?</small>");
								}
							} else {
								$(this).addClass("bg-danger");
							}
						} else {
							$(this).addClass("bg-danger");
						}
					}

					if($(this).val()) {
						if($(this).hasClass("bg-danger")) {
							ion.sound.play("Cartoon_Boing");
						} else if($(this).hasClass("bg-success")){
							ion.sound.play("Bama_Country_Country");
						}
					}

					$(this).removeClass("text-white text-weight-bold");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");

					if($("input:disabled").length == $(".q").length) {
						$("input:disabled").addClass("bg-success text-white");
					}
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
						$(this).addClass("bg-warning text-white");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id","done");
					} else {
						alert(na+"번 문제를 풀어주세요!");
					};
				})
				$("#qst-1").val(an[0]);
				$("#qst-1").prop("disabled",true);
				$("#qst-1").closest("tr").find(".tran").show();

			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>