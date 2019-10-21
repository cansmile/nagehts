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
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">1.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Wann gehen wir ins Kino?&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-1">
											 &nbsp;Freitag.
										</div>
										<span class="tran"><small>우리 언제 영화 보러 가? 금요일에.</small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">2.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Mein Freund ist Pilot. Er arbeitet oft&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-2">
											 &nbsp;der Nacht.
										</div>
										<span class="tran"><small>내 친구는 파일럿이다. 그는 종종 밤에 일한다.</small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">3.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Meine Eltern kommen&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-3">
											&nbsp;Montag&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-4">
											 &nbsp;11.30 Uhr.
										</div>
										<span class="tran"><small>내 부모님은 월요일 11시 30분에 오신다.</small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">4.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Wollen wir heute einkaufen? Sagen wir&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-5">
											 &nbsp;3 Uhr?
										</div>
										<span class="tran"><small>오늘 장볼까? 3시경에 어때?</small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">5.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-capitalize text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-6">
											&nbsp;Freitag Vormittag treffe ich meinen Professor. Wir treffen uns&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-7">
											 &nbsp;10 Uhr vor der Universität.
										</div>
										<span class="tran"><small>나는 금요일 오전에 교수님을 만나기로 했다. 우리는 10시에 학교앞에서 만날꺼야. </small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">6.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Mein Baby kann nicht schlafen. Es schreit und weint immer&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-8">
											&nbsp;der Nacht.
										</div>
										<span class="tran"><small>내 아이는 잠을 못 잔다. 소리지르며 밤마다 늘 운다. </small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">7.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-capitalize text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-9">
											&nbsp;Sonntag&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-10">
											 &nbsp;20 Uhr läuft ein Konzert von Nena im Fernsehen. 
										</div>
										<span class="tran"><small>일요일 20시에 Nena 콘서트가 티비에 나온다. </small></span>
									 </td>
							</tr>
							<tr>
								<th class="align-middle text-center border-0" scope="row" width="50">8.</th>
								<td class="align-middle border-0">
										<div class="input-group d-inline-flex align-items-baseline">Wann wollen wir uns heute sehen? -Hm, vielleicht&nbsp;
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-lowercase text-center form-control q border-top-0 border-right-0 border-left-0 border-dark rounded-0" style="max-width: 120px;" id="qst-11">
											&nbsp;1?
										</div>
										<span class="tran"><small>우리 오늘 언제 볼까? - 글쎄, 한 1시에 어때?</small></span>
									 </td>
							</tr>
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
			var an = ["Am","in","am","um","um","Am","um","in","Am","um","um"];

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