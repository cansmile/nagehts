<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table text-left">
							<tbody>
								<tr>
									<th class="border-0" scope="row" rowspan="2" width="50">1.</th>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">Ich gehe ins Kino.&nbsp;
											<input type="text" placeholder="(möchten)" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-1">
											 &nbsp;du mitkommen?
										</div>
										<span class="tran"><small>나 영화관 갈건데. 같이 갈래?</small></span>
									 </td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">Ich&nbsp;
											<input type="text" placeholder="(können)" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-2">
											 &nbsp;nicht. Ich&nbsp;
											<input type="text" placeholder="(müssen)" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-3">
											 &nbsp;leider lernen.
										</div>
										<span class="tran"><small>난 갈 수 없어. 나 공부해야해.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-0" scope="row" rowspan="2" width="50">2.</th>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="(können)" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-4">
											 &nbsp;du mir helfen?
										</div>
										<span class="tran"><small>나 좀 도와줄 수 있어?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">Natürlich. Was&nbsp;
											<input type="text" placeholder="(können)" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-5">
											 &nbsp;ich für dich tun?
										</div>
										<span class="tran"><small>물론. 내가 뭘 도와줄까?</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-0" scope="row" width="50">3.</th>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="(dürfen)" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-6">
											 &nbsp;ich Sie etwas fragen? – Na klar.
										</div>
										<span class="tran"><small>내가 물어봐도 되나요? 그럼.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<table class="table text-left">
							<tbody>
								<tr>
									<th class="border-0" scope="row" rowspan="2" width="50">4.</th>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="(wollen)" aria-label="Antwort" aria-describedby="basic-addon7" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-7">
											 &nbsp;Mina ins Schwimmbad gehen?
										</div>
										<span class="tran"><small>미나 수영장 간데?</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">Ja, aber sie&nbsp;
											<input type="text" placeholder="(möchten)" aria-label="Antwort" aria-describedby="basic-addon8" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-8">
											 &nbsp;auch zum Flohmarkt.
										</div>
										<span class="tran"><small>그래, 하지만 벼룩시장도 가고 싶어해. </small></span>
									</td>
								</tr>
								<tr>
									<th class="border-0" scope="row" width="50">5.</th>
									<td class="border-0 align-middle">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="(dürfen)" aria-label="Antwort" aria-describedby="basic-addon9" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-9">
											 &nbsp;Tim mit uns zum Deutschkurs gehen? – Ja, er&nbsp;
											<input type="text" placeholder="(dürfen)" aria-label="Antwort" aria-describedby="basic-addon10" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 100px;" id="qst-10">
											.
										</div>
										<span class="tran"><small>팀이 독일어강의 들어도 되나? 그럼 그래도 되지.</small></span>
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
			var an = ["Möchtest","kann","muss","Kannst","kann","Darf","Will","möchte","Darf","darf"];

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

				var pan = new Array();
				pan = [1];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).prop("disabled",true);
					$(pann).addClass("bg-success text-white font-weight-bold");
					$(pann).closest("tr").find(".tran").show();
				}

			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>