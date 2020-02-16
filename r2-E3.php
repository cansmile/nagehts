<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><span class="py-2 px-2 d-inline-block">komme</span><span class="py-2 px-2 d-inline-block">kommt</span><span class="py-2 px-2 d-inline-block">kommen</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0">1.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Frau Kim
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-1">
												aus Korea.
											</div></span>
										<span class="tran"><small>김 선생님은 한국 출신입니다.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">2.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Woher
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-2">
												Sie?
											</div></span>
										<span class="tran"><small>당신은 어디에서 왔나요?</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">3.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Ich
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-3">
												aus Japan.
											</div></span>
										<span class="tran"><small>저는 일본 출신입니다.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><span class="py-2 px-2 d-inline-block">heiße</span><span class="py-2 px-2 d-inline-block">heißt</span><span class="py-2 px-2 d-inline-block">heißen</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0">4.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Ich
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-4">
												Chul.
											</div></span>
										<span class="tran"><small>저는 철이에요.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">5.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Wie
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-5">
												du?
											</div></span>
										<span class="tran"><small>네 이름은 뭐야?</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">6.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Wie
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-6">
												Sie?
											</div></span>
										<span class="tran"><small>당신의 이름은 무엇인가요?</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><span class="py-2 px-2 d-inline-block">wohne</span><span class="py-2 px-2 d-inline-block">wohnt</span><span class="py-2 px-2 d-inline-block">wohnst</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="border-top-0 border-bottom-0">7.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Wo
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-7">
												du?
											</div></span>
										<span class="tran"><small>너는 어디 살아?</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">8.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Ich
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-8">
												in Salzburg.
											</div></span>
										<span class="tran"><small>나는 잘츠부르그에 살아.</small></span>
									</td>
								</tr>
								<tr>
									<th class="border-top-0 border-bottom-0">9.</th>
									<td class="border-top-0 border-bottom-0">
										<span class="sen"><div class="input-group">
												Stefan
												<input type="text" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" aria-label="." id="qst-9">
												in Graz.
											</div></span>
										<span class="tran"><small>스테판은 그라츠에 살아.</small></span>
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

			var an = new Array();
			var an = ["kommt","kommen","komme","heiße","heißt","heißen","wohnst","wohne","wohnt"];

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
						var na="";
						var ri=0;
						var qst=$(".q").length;
						$(".q").each(function () {
							if(na !="") {
								na +=", ";
							}
							if($(this).val()=="") {
								na +=$(this).attr("id").substr(4, 1);
							}
						}
						);
						if($(this).attr("id")=="done") {}
						else if(na=="") {
							for(var i=0;
							i < an.length;
							i++) {
								var oran=$("#qst-"+(i+1)).val();
								if(rfchk($("#qst-"+(i+1)), true)) {
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white d-inline-block rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0 d-block");
									$("#qst-"+(i+1)).closest(".sen").append("<div class=\"d-inline-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}

							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".bg-success").length; // 맞춘 항목 수
							var pe = (qr / qa) * 100; // 정답 비율
							var tcl = "white"; // 기본 문자색

							// 분류 기준은 100%, 80%, 60%, 40%
							if(pe > 99) {
								var st = "원어민이세요?";
								var cl = "lime";
								var tcl = "dark";
							} else if(pe > 74) {
								var st = "어! 좀 하시는데요~^^";
								var cl = "success";
							} else if(pe > 49) {
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
							$(this).prop("disabled", true);
							$(".tran").show();
							$(this).attr("id", "done");

							checkHeight();
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					})

				$("#qst-1").val(an[0]);
				$("#qst-4").val(an[3]);
				$("#qst-1").addClass("bg-success text-white font-weight-bold");
				$("#qst-4").addClass("bg-success text-white font-weight-bold");
				$("#qst-1").prop("disabled",true);
				$("#qst-4").prop("disabled",true);
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>