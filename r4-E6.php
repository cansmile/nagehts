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
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row" colspan="2" class="border-secondary border p-4"><span class="text-white p-1 px-2 m-1 rounded bg-primary font-weight-bold">Tisch(m)</span> – klein - 80 €<br>Das ist ein Tisch. Der Tisch ist klein. Er kostet 80 Euro.</th>
								</tr>
								<tr>
									<th scope="row" width="10%">1.</th>
									<td><span class="text-white p-1 px-2 m-1 rounded bg-khaki font-weight-bold">Stühle(Pl)</span> – teuer – 399 €</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<div id="ant-1"></div><div id="ant-2"></div>
										<div class="input-group">Das sind&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-2" id="qst-1" style="position: relative; top: -5px;">
											.&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-3" id="qst-2" style="position: relative; top: -5px;">&nbsp;sind teuer. Sie kosten 399 Euro.
										</div>
										<span class="tran">이것들은 의자입니다. 이 의자들은 비쌉니다. 가격은 399유로입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">2.</th>
									<td><span class="text-white p-1 px-2 m-1 rounded bg-danger font-weight-bold">Lampe(f)</span> – praktisch – 52 €</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<div id="ant-3"></div><div id="ant-4"></div>
										<div class="input-group">Das ist&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-3" id="qst-3" style="position: relative; top: -5px;">
											.&nbsp;Die Lampe ist praktisch.&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-2" id="qst-4" style="position: relative; top: -5px;">&nbsp;kostet 52 Euro.
										</div>
										<span class="tran">이것은 램프입니다. 이 램프는 실용적입니다. 가격은 52유로입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">3.</th>
									<td><span class="text-white p-1 px-2 m-1 rounded bg-purple font-weight-bold">Lineal(n)</span> – lang - 5 €</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<div id="ant-5"></div><div id="ant-6"></div>
										<div class="input-group">Das ist ein Lineal.&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-3" id="qst-5" style="position: relative; top: -5px;">
											&nbsp;ist lang.&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control border-top-0 border-left-0 border-right-0 rounded-0 q col-2" id="qst-6" style="position: relative; top: -5px;">&nbsp;kostet 5 Euro.
										</div>
										<span class="tran">이것은 자입니다. 이 자는 깁니다. 가격은 5유로입니다. </span>
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
			var an = ["Stühle", "Die Stühle","eine Lampe", "Sie", "Das Lineal", "Es"];

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
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>