<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Ergänzen Sie. <small><br>빈칸을 채우세요.</small></h2>
					</div>
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table border-0">
							<tbody>
								<tr>
									<th scope="row" class="align-middle text-center" rowspan="4"><img src="./images/Reihe 4/Reihe-4-E3-1.png" style="max-width: 240px; height: auto;" alt="Petra"></th>
									<td>
										<div id="ant-1"></div>
										<div class="input-group">
											Petra 
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-1">
											mit Paul verheiratet.
										</div>
										<span class="tran">Petra는 Paul과 결혼했습니다.</span></td>
								</tr>
								<tr>
									<td>
										<div id="ant-2"></div>
										<div class="input-group">
											Sie 
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-2">
											zwei Kinder.
										</div>
										<span class="tran">그녀는 두명의 아이가 있습니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-3"></div>
										<div class="input-group">
											Sie 
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-3">
											Pfarrerin.
										</div>
										<span class="tran">그녀는 목사입니다.</span>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ant-4"></div>
										<div class="input-group">
											Ihr Mann Paul
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-4">
											auch Pfarrer von Beruf.
										</div>
										<span class="tran">그녀의 남편 Paul 또한 목사입니다.</span>
									</td>
								</tr>
								<tr>
									<th scope="row" class="align-middle text-center" rowspan="4"><img src="./images/Reihe 4/Reihe-4-E3-2.png" style="max-width: 240px; height: auto;" alt="Sabine"></th>
									<td>
										<div id="ant-5"></div>
										<div class="input-group">
											Sabine und Achim
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-5">
											nicht verheiratet.
										</div>
										<span class="tran">Sabine과 Achim은 결혼하지 않았습니다.</span>
									</td>
								</tr>
								<tr>
									<td>Sie leben zusammen.
										<span class="tran">그들은 함께 삽니다.</span></td>
								</tr>
								<tr>
									<td>
										<div id="ant-6"></div>
										<div class="input-group">
											Sie
									<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="text-center form-control col-2 q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-6">
											noch keine Kinder, aber eine Katze und einen Hund.
										</div>
										<span class="tran">아이들은 아직 없지만, 고양이와 개는 있습니다.</span>
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
			var an = ["ist","hat","ist","ist","sind","haben"];

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
										$("#qst-"+(i+1)).after(r);
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
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					})
				var pan = new Array();
				pan = [1];
				for(var p = 0; p < pan.length; p++) {
					var pann = "#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).prop("disabled",true);
					$(pann).addClass("bg-success text-white font-weight-bold");
					// $(pann).closest("tr").find(".tran").show();
				}
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>