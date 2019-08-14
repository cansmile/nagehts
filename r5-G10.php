d<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<style>
	th,td {
		height: 80px;
		text-align: center;
		vertical-align: middle;
	}
</style>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 px-0 mx-0">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center bg-light border-0">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">ich</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">du</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">sie/es/er</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">wir</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">ihr</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">sie/Sie</th>
								</tr>
							</tbody>
						</table>
					</div>					
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 px-0 mx-0">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center bg-light border-0">essen</th>
									<th scope="col" class="text-center bg-light border-0">sprechen</th>
									<th scope="col" class="text-center bg-light border-0">helfen</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0">
										<div id="ant-1"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q" id="qst-1">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-2"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q" id="qst-2">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-3"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q" id="qst-3">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-7"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="text-center form-control q" id="qst-7">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-8"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="text-center form-control q" id="qst-8">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-9"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="text-center form-control q" id="qst-9">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-13"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon13" class="text-center form-control q" id="qst-13">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-14"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon14" class="text-center form-control q" id="qst-14">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-15"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon15" class="text-center form-control q" id="qst-15">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-19"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon19" class="text-center form-control q" id="qst-19">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-20"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon20" class="text-center form-control q" id="qst-20">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-21"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon21" class="text-center form-control q" id="qst-21">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-25"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon25" class="text-center form-control q" id="qst-25">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-26"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon26" class="text-center form-control q" id="qst-26">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-27"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon27" class="text-center form-control q" id="qst-27">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-31"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon31" class="text-center form-control q" id="qst-31">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-32"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon32" class="text-center form-control q" id="qst-32">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-33"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon33" class="text-center form-control q" id="qst-33">
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>					
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 d-lg-none d-xl-none d-md-block d-sm-block px-0 mx-0">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center bg-light border-0">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">ich</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">du</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">sie/es/er</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">wir</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">ihr</th>
								</tr>
								<tr>
									<th scope="row" class="text-center bg-light align-middle border-0">sie/Sie</th>
								</tr>
							</tbody>
						</table>
					</div>					

					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 px-0 mx-0">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center bg-light border-0">nehmen</th>
									<th scope="col" class="text-center bg-light border-0">fahren</th>
									<th scope="col" class="text-center bg-light border-0">möchten</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0">
										<div id="ant-4"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q" id="qst-4">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-5"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q" id="qst-5">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-6"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q" id="qst-6">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-10"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon10" class="text-center form-control q" id="qst-10">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-11"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon11" class="text-center form-control q" id="qst-11">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-12"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon12" class="text-center form-control q" id="qst-12">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-16"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon16" class="text-center form-control q" id="qst-16">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-17"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon17" class="text-center form-control q" id="qst-17">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-18"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon18" class="text-center form-control q" id="qst-18">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-22"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon22" class="text-center form-control q" id="qst-22">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-23"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon23" class="text-center form-control q" id="qst-23">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-24"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon24" class="text-center form-control q" id="qst-24">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-28"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon28" class="text-center form-control q" id="qst-28">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-29"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon29" class="text-center form-control q" id="qst-29">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-30"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon30" class="text-center form-control q" id="qst-30">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-0">
										<div id="ant-34"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon34" class="text-center form-control q" id="qst-34">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-35"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon35" class="text-center form-control q" id="qst-35">
										</div>
									</td>
									<td class="border-0">
										<div id="ant-36"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon36" class="text-center form-control q" id="qst-36">
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
									<th scope="col" colspan="3">강변화 동사 (불규칙변화 동사) ↔ 약변화 동사 (규칙변화 동사)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>의미: 동사의 변화의 정도가 큰 동사</td>
									<td>① 어간 e → i</td>
									<td>sprechen → spricht</td>
								</tr>
								<tr>
									<td>→ 현재 및 과거형에서 동사어간에 모음 교체 현상이 일어나는 동사</td>
									<td>② 어간 a → ä</td>
									<td>fahren → fährt</td>
								</tr>
								<tr>
									<td>예) helfen → hilft</td>
									<td>③ 어간 e → ie</td>
									<td>lesen → liest</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
			var an = ["esse","spreche","helfe","nehme","fahre","möchte","isst","sprichst","hilfst","nimmst","fährst","möchtest","isst","spricht","hilft","nimmt","fährt","möchte","essen","sprechen","helfen","nehmen","fahren","möchten","esst","sprecht","helft","nehmt","fahrt","möchtet","essen","sprechen","helfen","nehmen","fahren","möchten"];

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

				var pan = new Array();
				pan = ["2","7","9","10","17","18","27"];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).prop("disabled",true);
					$(pann).closest("tr").find(".tran").show();
				}

			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>