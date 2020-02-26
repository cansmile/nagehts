<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Ergänzen Sie. <small>빈칸을 채우세요.</small></h2>
						<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<div class="row"><div class="col bg-gray-light">
							<table class="table">
								<tbody>
									<tr>
										<td class="border-0 text-left">Jonas Meyer</td>
									</tr>
									<tr>
										<td class="border-0 text-left">&nbsp;&nbsp;Diplom Ingenieur Siemens</td>
									</tr>
									<tr>
										<td class="border-0 text-left">Nonnendammallee 72</td>
									</tr>
									<tr>
										<td class="border-0 text-left">13628 Berlin Germany</td>
									</tr>
									<tr>
										<td class="border-0 text-right">&nbsp;</td>
									</tr>
									<tr>
										<td class="border-0 text-right">Tel.: (0941) 95 83 13</td>
									</tr>
									<tr>
										<td class="border-0 text-right">Handy: (0176) 59 17 77</td>
									</tr>
									<tr>
										<td class="border-0 text-right">E-Mail: jonasmeyer@yahoo.de</td>
									</tr>
								</tbody>
							</table>
						</div></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-2">
						<table class="table">
							<tbody>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">Herr Meyer, was sind Sie von Beruf?
										<span class="tran">마이어씨, 당신은 무슨일을 하시나요?</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">
										<div id="ant-1"></div>
										<span class="sen"><div class="input-group">
												Ich bin 1.
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-1">
												.
											</div></span>
										<span class="tran">저는 기술자에요.</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">&nbsp;</th>
									<td class="border-0 align-middle" height="50">Ich arbeite bei Siemens.
										<span class="tran">지멘스에서 일해요.</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">Wie ist Ihre Adresse?
										<span class="tran">주소가 어떻게 되나요?</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">
										<div id="ant-2"></div>
										<span class="sen"><div class="input-group">
												Meine Adresse ist 2.
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-2">
												.
											</div></span>
										<span class="tran">제 주소는 Nonnendammalle 72, 13628 Berlin에요.</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">Wie ist Ihre Telefonnummer?
										<span class="tran">전화번호는 어떻게 되나요?</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">
										<div id="ant-3"></div>
										<span class="sen"><div class="input-group">
												Meine Telefonnummer ist 3.
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-3">
												.
											</div></span>
										<span class="tran">제 전화번호는 958313에요.</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">&nbsp;</th>
									<td class="border-0 align-middle" height="50">
										<div id="ant-4"></div>
										<span class="sen"><div class="input-group">
												Und die Vorwahl ist 4.
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-4">
												.
											</div></span>
										<span class="tran">그리고 지역번호는 0941이에요.</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">Wie ist Ihre E-Mail-Adresse?
										<span class="tran">이메일 주소는 어떻게 되나요?</span>
									</td>
								</tr>
								<tr>
									<th class="border-0" width="20">·</th>
									<td class="border-0 align-middle" height="50">
										<div id="ant-5"></div>
										<span class="sen"><div class="input-group">
												Meine E-Mail-Adresse ist 5.
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="position: relative; top: -6px;" id="qst-5">
												.
											</div></span>
										<span class="tran">제 이메일 주소는 jonasmeyer@yahoo.de에요.</span>
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
					<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-2">
						<div class="row">
							<div class="col">
								<table class="table table-striped">
									<tbody>
										<tr>
											<td class="text-center border-0">Wie ist</td>
											<td class="text-center border-0">Ihre</td>
											<td class="text-center border-0">Adresse?</td>
										</tr>
										<tr>
											<td class="text-center">&nbsp;</td>
											<td class="text-center border-0">deine</td>
											<td class="text-center border-0">E-Mail-Adresse?</td>
										</tr>
										<tr>
											<td class="text-center">&nbsp;</td>
											<td class="text-center border-0">ihre</td>
											<td class="text-center border-0">Telefonnummer?</td>
										</tr>
										<tr>
											<td class="text-center">&nbsp;</td>
											<td class="text-center border-0">seine</td>
											<td class="text-center border-0">Handynummer?</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-2">
						<div class="row">
							<div class="col">
								<table class="table table-striped">
									<tbody>
										<tr>
											<td class="text-center border-0">Meine</td>
											<td class="text-center border-0">Adresse</td>
											<td class="text-center border-0">ist ...</td>
										</tr>
										<tr>
											<td class="text-center">Meine</td>
											<td class="text-center border-0">E-Mail-Adresse</td>
											<td class="text-center border-0">&nbsp;</td>
										</tr>
										<tr>
											<td class="text-center">Ihre</td>
											<td class="text-center border-0">Telefonnummer</td>
											<td class="text-center border-0">&nbsp;</td>
										</tr>
										<tr>
											<td class="text-center">Seine</td>
											<td class="text-center border-0">Handynummer</td>
											<td class="text-center border-0">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
		

		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();
			$(".ant").hide();
			$("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
			$("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
			var an = new Array();
			var an = ["Ingenieur",["Nonnendammallee 72, 13628 Berlin", "Nonnendammallee "],"958313","0941","jonasmeyer@yahoo.de"];

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
						ion.sound.play("dingdongdang");
						$(this).prop("disabled", true);
					}
				}
				$(this).removeClass("bg-danger");
				if( !$(this).attr("disabled")) {
					$(this).removeClass("text-white font-weight-bold");
					$(this).removeClass("bg-success");
				}
			}
			);

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
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
								var cl = "danger";
							}

							$(this).addClass("btn-" + cl + " text-" + tcl);
							$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

							$(".btn-lg").text().appendTo($(this).closest("td"));
							$(".btn-lg").remove();


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
				$("#qst-1").val(an[0]);
				$("#qst-1").addClass("bg-success text-white font-weight-bold");
				$("input:first()").prop("disabled",true);
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>