<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
					</div>
				</div>				
				<div class="row">
					<div class="col-12">
						<table class="table" style="height: 100%;">
							<tbody>
								<tr>
									<td class="text-center align-middle"><img src="./images/Reihe 2/Reihe-2-E-1.png" alt="Herkunft" style="max-width: 100%;  height: auto;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table table-responsive">
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0">1.</th>
									<td class="border-top-0 border-bottom-0">Peter kommt<span class="tran"><br><small>피터는 <strong>독일에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<input type="text" placeholder="Antw ort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad1">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">2.</th>
									<td class="border-top-0 border-bottom-0">Lucia kommt<span class="tran"><br><small>루시아는 <strong>스패인에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">3.</th>
									<td class="border-top-0 border-bottom-0">Ivan kommt<span class="tran"><br><small>이반은 <strong>러시아에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">4.</th>
									<td class="border-top-0 border-bottom-0">Marve kommt<span class="tran"><br><small>마브는 <strong>터키에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">5.</th>
									<td class="border-top-0 border-bottom-0">Arthur kommt<span class="tran"><br><small>아서는 <strong>브라질에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">6.</th>
									<td class="border-top-0 border-bottom-0">Diana kommt<span class="tran"><br><small>다이아나는 <strong>그리스에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">7.</th>
									<td class="border-top-0 border-bottom-0">Arti kommt<span class="tran"><br><small>아르티는 <strong>수단에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q" id="qst-7">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad7">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">8.</th>
									<td class="border-top-0 border-bottom-0">Linh kommt<span class="tran"><br><small>린은 <strong>베트남에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q" id="qst-8">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad8">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">9.</th>
									<td class="border-top-0 border-bottom-0">Xiao kommt<span class="tran"><br><small>샤오는 <strong>중국에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-9"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control q" id="qst-9">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad9">.</span></div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">10.</th>
									<td class="border-top-0 border-bottom-0">Vanessa kommt<span class="tran"><br><small>바네사는 <strong>우크라이나에서</strong> 왔다.</small></span></td>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-10"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon10" class="form-control q" id="qst-10">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad10">.</span></div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
								<table class="table">
									<tbody>
										<tr>
											<th rowspan="15">aus</th>
											<td>Korea</td>
										</tr>
										<tr>
											<td>Deutschland</td>
										</tr>
										<tr>
											<td>China</td>
										</tr>
										<tr>
											<td>Brasilien</td>
										</tr>
										<tr>
											<td>Spanien</td>
										</tr>
										<tr>
											<td>England</td>
										</tr>
										<tr>
											<td>Vietnam</td>
										</tr>
										<tr>
											<td>Ungarn</td>
										</tr>
										<tr>
											<td>Österreich</td>
										</tr>
										<tr>
											<td>Griechenland</td>
										</tr>
										<tr>
											<td>Polen</td>
										</tr>
										<tr>
											<td>Japan</td>
										</tr>
										<tr>
											<td>Amerika</td>
										</tr>
										<tr>
											<td>Russland</td>
										</tr>
										<tr>
											<td>…</td>
										</tr>
									</tbody>
								</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
								<table class="table">
									<tbody>
										<tr>
											<th rowspan="5">aus der</th>
											<td>Schweiz</td>
										</tr>
										<tr>
											<td>Türkei</td>
										</tr>
										<tr>
											<td>Ukraine</td>
										</tr>
										<tr>
											<td>…</td>
										</tr>
									</tbody>
								</table>
								<table class="table">
									<tbody>
										<tr>
											<th rowspan="3">aus dem</th>
											<td>Iran</td>
										</tr>
										<tr>
											<td>Irak</td>
										</tr>
										<tr>
											<td>Sudan</td>
										</tr>
										<tr>
											<td>…</td>
										</tr>
									</tbody>
								</table>
								<table class="table">
									<tbody>
										<tr>
											<th rowspan="3">aus den</th>
											<td>U.S.A</td>
										</tr>
										<tr>
											<td>Niederlanden</td>
										</tr>
										<tr>
											<td>…</td>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("td").addClass("py-2 align-middle");
			$("th").addClass("align-middle");
			$(".tran").hide();
			var an = new Array();
			var an = ["aus Deutschland","aus Spanien","aus Russland","aus der Türkei","aus Brasilien","aus Griechenland","aus dem Sudan","aus Vietnam","aus China","aus der Ukraine"];

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
					var na = "";
					var ri = 0;
					var qst = $(".q").length;
					$(".q").each(function () {
						if(na != "") {
							na += ", ";
						}
						if($(this).val() == "") {
							na += $(this).attr("id").substr(4);
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
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞히셨네요!</h4>");
						$(this).addClass("bg-danger text-white");
					} else if(ri == qst) {
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞히셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("bg-primary text-white");
					} else {
						$(this).html('<h4>' + qst + "문제 중 " + ri + "개를 맞히셨네요!<br>훌륭합니다!</h4>");
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
				$("#qst-1").addClass("bg-success text-white font-weight-bold");
				$("#qst-1").prop("disabled",true);

			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body> 
</html>