<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Schreiben Sie. <br>
					<small>써보세요.</small>
					</h2>
					<h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" class="border-0" width="5%">1.</th>
								<td class="border-0" width="45%">mehr Sport treiben (ihr)
									<span class="tran"><br><small>운동을 더 많이 하다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-3" id="qst-1" style="position: relative; top: -6px;">
										&nbsp;bitte mehr Sport!
									</div>
									<span class="tran"><small>운동을 더 많이 해라!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">2.</th>
								<td class="border-0">etwas lauter sprechen (Sie)
									<span class="tran"><br><small>조금 더 크게 말하다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-6" id="qst-2" style="position: relative; top: -6px;">
										&nbsp;bitte etwas lauter!
									</div>
									<span class="tran"><small>조금 더 크게 말하십시오!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">3.</th>
								<td class="border-0">Hände waschen (du)
									<span class="tran"><br><small>손을 씻다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-3" id="qst-3" style="position: relative; top: -6px;">
										&nbsp;bitte deine Hände!
									</div>
									<span class="tran"><small>손을 씻으렴!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">4.</th>
								<td class="border-0">nicht so viel Eis essen (ihr)
									<span class="tran"><br><small>아이스크림을 그렇게 많이 먹지 않다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-3" id="qst-4" style="position: relative; top: -6px;">
										&nbsp;nicht so viel Eis!
									</div>
									<span class="tran"><small>아이스크림을 그렇게 많이 먹지 말아라!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">5.</th>
								<td class="border-0">den Imperativ erklären (Sie)
									<span class="tran"><br><small>명령형을 설명하다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-6" id="qst-5" style="position: relative; top: -6px;">
										&nbsp;bitte den Imperativ!
									</div>
									<span class="tran"><small>명령형을 설명해주세요</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">6.</th>
								<td class="border-0">nicht viel rauchen (Sie)
									<span class="tran"><br><small>담배를 많이 피우지 않는다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-6" id="qst-6" style="position: relative; top: -6px;">
										&nbsp;nicht viel, bitte!
									</div>
									<span class="tran"><small>(담배를) 많이 피우지 마십시오, 제발!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">7.</th>
								<td class="border-0">mehr Obst und Gemüse essen (ihr)
									<span class="tran"><br><small>과일과 채소를 더 많이 먹다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-3" id="qst-7" style="position: relative; top: -6px;">
										&nbsp;mehr Obst und Gemüse, bitte!
									</div>
									<span class="tran"><small>과일과 채소를 더 많이 먹으렴!</small></span>
								</td>
							</tr>
							<tr>
								<th scope="row" class="border-0">8.</th>
								<td class="border-0">regelmäßig Rad fahren (du)
									<span class="tran"><br><small>정기적으로 자전거를 타다</small></span>
								</td>
								<td class="border-0">
									<div class="input-group">
										<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0 col-3" id="qst-8" style="position: relative; top: -6px;">
										&nbsp;regelmäßig Rad, bitte!
									</div>
									<span class="tran"><small>정기적으로 자전거를 타라, 제발!</small></span>
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
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$(".tran").hide();
		$(".ant").hide();
		var an=new Array();
		var an=["Treibt","Sprechen Sie","Wasch","Esst","Erklären Sie","Rauchen Sie","Esst","Fahr"];
		$(document).ready(function() {
			/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
			// 값 확인해보자, io값이 참이면 전체 검사
			function rfchk(th, io) {
				var q, qn, a, b, fl;
				q=th.val().length;
				qn=(th.attr("id").substr(4))-1;
				a=th.val();
				a=a.replace(/ /gi, "");
				if( !$.isArray(an[qn])) {
					// 1 인 경우
					if(io) {
						b=an[qn];
					}
					else {
						b=an[qn].substr(0, q);
					}
					b=b.replace(/ /gi, "");
					if(a==b) {
						return true;
					}
				}
				else {
					// 2 이상인 경우
					for(var fd=0;
					fd < an[qn].length;
					fd++) {
						if(io) {
							b=an[qn][fd];
						}
						else {
							b=an[qn][fd].substr(0, q);
						}
						b=b.replace(/ /gi, "");
						if(a==b) {
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
				}
				else {
					$(this).addClass("text-white font-weight-bold");
					$(this).addClass("bg-danger");
					$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
				}
				if( !$(this).val()) {
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					$(this).removeClass("text-white font-weight-bold");
				}
				if($(this).val()) {
					$("#ant-"+$(this).attr("id").substr(4)).show();
					$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
				}
				else {
					$("#ant-"+$(this).attr("id").substr(4)).hide();
				}
			}
			);
			$(".q").on("focusin", function() {
				$("#ant-"+$(this).attr("id").substr(4)).show();
				if( !$("#ant-"+$(this).attr("id").substr(4)).text()) {
					$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
				}
				if($("#ant-"+$(this).attr("id").substr(4)).text()) {
					if(rfchk($(this))) {
						$(this).addClass("text-white font-weight-bold");
						$(this).addClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
					}
					else {
						$(this).addClass("text-white font-weight-bold");
						$(this).addClass("bg-danger");
						$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
					}
				}
			}
			);
			$(".q").on("focusout", function() {
				$("#ant-"+$(this).attr("id").substr(4)).hide();
				if(rfchk($(this), true)) {
					$(this).addClass("bg-success");
					$(this).addClass("text-white");
				}
				else {
					$(this).addClass("bg-danger");
				}
				if($(this).val()) {
					if($(this).hasClass("bg-danger")) {
						ion.sound.play("Cartoon_Boing");
					}
					else if($(this).hasClass("bg-success")) {
						ion.sound.play("Bama_Country_Country");
						$(this).prop("disabled", true);
					}
				}
				$(this).removeClass("bg-danger");
				if( !$(this).attr("disabled")) {
					$(this).removeClass("text-white font-weight-bold");
					$(this).removeClass("bg-success");
				}
			}
			)
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
						if(rfchk($("#qst-"+(i+1)))) {
							$("#qst-"+(i+1)).addClass("bg-success text-white");
						}
						else {
							$("#qst-"+(i+1)).val(an[i]);
							$("#qst-"+(i+1)).attr("disabled", true);
							$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span>");
						}
						if($("#qst-"+(i+1)).hasClass("bg-success")) {
							ri++;
						}
					}
					if (ri < (qst/2)) {
						$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞추셨네요!</h4>");
						$(this).addClass("bg-danger text-white");
					}
					else if(ri==qst) {
						$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
						$(this).addClass("bg-primary text-white");
					}
					else {
						$(this).html('<h4>'+ qst + "문제 중 "+ ri + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
						$(this).addClass("bg-warning text-white");
					}
					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id", "done");
				}
				else {
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
				;
			}
			);
			var pan=new Array();
			// pan=[1,2,3,4,5,6,7,8,9,10];
			pan = [1,2,3];
			for(var p=0;
			p < pan.length;
			p++) {
				var pann="#qst-"+pan[p];
				$(pann).val(an[(pan[p]-1)]);
				$(pann).addClass("bg-success text-white font-weight-bold");
				$(pann).prop("disabled", true);
				$(pann).closest("tr").find(".tran").show();
			}
		}
		);
</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>