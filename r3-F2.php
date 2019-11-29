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
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4 mt-2 text-center">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" width="33%" class="text-center border-0"><img src="./images/Reihe 3/Reihe-3-F2-1.png " alt="Mario" style="max-height: 240px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center border-0">Mario, 13</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" width="33%">
										<div class="ant" id="ant-a"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ada">Wer ist das?</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-a"> -->
										</div>
										<span class="tran"><small>누구인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
										<span class="tran"><small>그는 마리오에요</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">Wie alt ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">?</span></div>
										</div>
										<span class="tran"><small>그는 몇 살인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-3">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">Jahre alt.</span></div>
										</div>
										<span class="tran"><small>그는 13살이에요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4 mt-2 text-center">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" width="33%" class="text-center border-0"><img src="./images/Reihe 3/Reihe-3-F2-2.png " alt="Caroline" style="max-height: 240px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center border-0">Caroline, 20</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" width="33%">
										<div class="ant" id="ant-b"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-adb">Wer ist das?</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-b"> -->
										</div>
										<span class="tran"><small>누구인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-5">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad5">.</span></div>
										</div>
										<span class="tran"><small>그녀는 캐롤라인이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">Wie alt ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">?</span></div>
										</div>
										<span class="tran"><small>그녀는 몇 살인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-7">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad7">ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-8">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad8">Jahre alt.</span></div>
										</div>
										<span class="tran"><small>그녀는 20살이에요.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4 mt-2 text-center">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" width="33%" class="text-center border-0"><img src="./images/Reihe 3/Reihe-3-F2-3.png " alt="Tanja" style="max-height: 240px; width: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center border-0">Tanja, 3</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0" width="33%">
										<div class="ant" id="ant-c"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-adc">Wer ist das?</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-c"> -->
										</div>
										<span class="tran"><small>누구인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-9"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad9">Das ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-9">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad9">.</span></div>
										</div>
										<span class="tran"><small>그녀는 탄야에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-10"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad10">Wie alt ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-10">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad10">?</span></div>
										</div>
										<span class="tran"><small>그녀는 몇 살인가요?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-11"></div>
										<div class="ant" id="ant-12"></div>
										<div class="input-group">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-11">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad11">ist</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-12">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad12">Jahre alt.</span></div>
										</div>
										<span class="tran"><small>그녀는 3살이에요.</small></span>
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
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
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
			var an = ["Mario","er","Er",["13", "dreizehn"],"Caroline","sie","Sie",["20", "zwanzig"],"Tanja","sie","Sie",["3", "drei"]];

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
						alert("모든 문제를 풀어주세요!");
						// alert(na+""번 문제를 풀어주세요!");
					};
				})
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>