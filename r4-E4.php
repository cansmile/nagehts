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
											Ist das
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-1">
											Computer?
										</div>
										<span class="tran">이것은 컴퓨터입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-2"></div>
										<div class="input-group">
											Nein, das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-2">
											Computer.
										</div>
										<span class="tran">아니오, 컴퓨터가 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-3"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-3">
											Fernseher.
										</div>
										<span class="tran">이것은 텔레비전입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-4"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-4">
											Fernseher von Kim.
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
											Ist das
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-5">
											Handy?
										</div>
										<span class="tran">이것은 휴대폰입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-6"></div>
										<div class="input-group">
											Nein, das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-6">
											Handy.
										</div>
										<span class="tran">아니오, 이것은 휴대폰이 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-7"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-7">
											Telefon.
										</div>
										<span class="tran">이것은 전화기입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-8"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-8">
											Telefon von Mina.
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
											Ist das
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-9">
											Uhr?
										</div>
										<span class="tran">이것은 시계입니까?</span>
									</td>
								</tr>
								<tr>
									<th scope="row">B:</th>
									<td>
										<div id="ant-10"></div>
										<div class="input-group">
											Nein, das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon10" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-10">
											Uhr.
										</div>
										<span class="tran">아니오, 이것은 시계가 아닙니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-11"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon11" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-11">
											Brille.
										</div>
										<span class="tran">이것은 안경입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row">&nbsp;</th>
									<td>
										<div id="ant-12"></div>
										<div class="input-group">
											Das ist
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon12" class="text-center form-control q border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-12">
											Brille von Park.
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
			var an = ["ein","kein","ein","der","ein","kein","ein","das","eine","keine","eine","die"];

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
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");

									if( !$.isArray(an[i])) {
										$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
									}
									else {
										// 2 이상인 경우
										var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">";
										for(var fd = (an[i].length-1);
										fd >= 0;
										fd--) {
											if(fd < (an[i].length-1)) {
												r = r + " / ";
											}
											r = r + an[i][fd];
										}
										r = r +"</div>";
										if($("span.sen").length > 0) {
											$("#qst-"+(i+1)).closest("span.sen").after(r);
										} else {
											$("#qst-"+(i+1)).after(r);
										}
									}

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
								var st = "쓰읍~ 다시 해 보실까요?";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요~";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
							
							$(this).prop("disabled", true);
							$(".tran").show();
							$(this).attr("id", "done");
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
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