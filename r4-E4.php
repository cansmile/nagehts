<?php include "header.php"; ?>
	<body>
<style>
	.bg-gray {
		background-color: #cccccc !important;
	}
</style>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 border-danger border m-2 p-2">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th scope="row" colspan="2" class="align-middle text-center"><img src="./images/Reihe 4/Reihe-4-E4-1.png" alt="Fernseher." style="max-width: 240px; height: auto;"></th>
								</tr>
								<tr>
									<th scope="row" width="20%">A:</th>
									<td>
										<div id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">Ist das</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad1">Computer?</span></div>
										</div>
										<span class="tran">이것은 컴퓨터입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">Nein, das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">Computer.</span></div>
										</div>
										<span class="tran">아니오, 컴퓨터가 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">Fernseher.</span></div>
										</div>
										<span class="tran">이것은 텔레비전입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad4">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">Fernseher von Kim.</span></div>
										</div>
										<span class="tran">김의 텔레비전입니다.</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 border-success border m-2 p-2">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th scope="row" colspan="2" class="align-middle text-center"><img src="./images/Reihe 4/Reihe-4-E4-2.png" alt="Telefon" style="max-width: 240px; height: auto;"></th>
								</tr>
								<tr>
									<th scope="row" width="20%">A:</th>
									<td>
										<div id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">Ist das</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">Handy?</span></div>
										</div>
										<span class="tran">이것은 휴대폰입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">Nein, das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">Handy.</span></div>
										</div>
										<span class="tran">아니오, 이것은 휴대폰이 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-7"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad7">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="text-center form-control q" id="qst-7">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad7">Telefon.</span></div>
										</div>
										<span class="tran">이것은 전화기입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-8"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad8">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="text-center form-control q" id="qst-8">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad8">Telefon von Mina.</span></div>
										</div>
										<span class="tran">이것은 미나의 전화기입니다. </span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 border-primary border m-2 p-2">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th scope="row" colspan="2" class="align-middle text-center"><img src="./images/Reihe 4/Reihe-4-E4-3.png" alt="Brille" style="max-width: 240px; height: auto;"></th>
								</tr>
								<tr>
									<th scope="row" width="20%">A:</th>
									<td>
										<div id="ant-9"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad9">Ist das</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="text-center form-control q" id="qst-9">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad9">Uhr?</span></div>
										</div>
										<span class="tran">이것은 시계입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-10"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad10">Nein, das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon10" class="text-center form-control q" id="qst-10">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad10">Uhr.</span></div>
										</div>
										<span class="tran">아니오, 이것은 시계가 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-11"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad11">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon11" class="text-center form-control q" id="qst-11">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad11">Brille.</span></div>
										</div>
										<span class="tran">이것은 안경입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-12"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad12">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon12" class="text-center form-control q" id="qst-12">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad12">Brille von Park.</span></div>
										</div>
										<span class="tran">이것은 박선생님의 안경입니다.</span>
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
			$(".ant").hide();
			$("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
			$("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
			var an = new Array();
			var an = ["ein","kein","ein","der","ein","kein","ein","das","eine","keine","eine","die"];

			function ch() {
				$(".wd").removeClass("bg-warning text-dark");
				$(".wd").each(function () {
					var t = $(this);
					var tt = t.text().trim();
					$("input").each(function() {
					if($(this).val().indexOf(tt) != -1) {
						t.addClass("bg-warning text-dark");
					}
				})

				})
			}

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
					ch();
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
						$(this).val(a);
						$(this).prop("disabled",true);
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
					
					if(na == "") {
						for(var i = 0; i < an.length; i++) {
							var oan = an[i].replace(/ /gi, "").toLowerCase();
							var nan = $("#qst-"+(i+1)).val().replace(/ /gi, "").toLowerCase();
							var oran = $("#qst-"+(i+1)).val();
							if(oan == nan) {
								$("#qst-"+(i+1)).addClass("bg-success text-white");
								if($("#qst-"+(i+1)).val() != an[i]) {
									$("#qst-"+(i+1)).closest("td").append("<br><span class=\"ml-5 text-success\">"+an[i]);
									$("#qst-"+(i+1)).closest("td").append("<br><span class=\"ml-5 text-danger\">"+oran+"</span>");
									$("#qst-"+(i+1)).hide();
								}
								ri++;
								$(".tran").show();
							} else {
								$("#qst-"+(i+1)).val(an[i]);
								$("#qst-"+(i+1)).closest("td").append("<br><span class=\"ml-5 text-success\">"+an[i]);
								$("#qst-"+(i+1)).closest("td").append("<br><span class=\"ml-5 text-danger\">"+oran+"</span>");
								$("#qst-"+(i+1)).hide();
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
					} else {
						alert("모든 문제를 풀어주세요!");
						// alert(na+"번 문제를 풀어주세요!");
					};
				})
				// $("#qst-1").val(an[0]);
				// $("#qst-8").val(an[7]);
				ch();
				// $("#qst-1").prop("disabled",true);
				// $("#qst-8").prop("disabled",true);
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>