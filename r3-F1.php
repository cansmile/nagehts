d<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2> Sprechen Sie über den Stammbaum.
								<br><small>아래 가계도에 대해 이야기해보세요.
							</h2>
							<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><img src="./images/Reihe 3/Reihe-3-F1.png" alt="Stammbaum" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Robert Holm</span><span class="wd">Maria Holm</span><span class="wd">Birgit Mark</span><span class="wd">Anton Mark</span><span class="wd">Silvia Mark</span><span class="wd">Hans Holm</span><span class="wd">Georg Holm</span><span class="wd">Sabine Holm</span><span class="wd">Franz Scholl</span><span class="wd">Nora</span><span class="wd">Alex</span><span class="wd">Johanna</span><span class="wd">Manuel</span></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">1.1 Wer bin ich? </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
										</div>
										<span class="tran"><small>나는 누구인가요? 노라</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">1. Meine Eltern heißen</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-2">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad2">.</span></div>
										</div>
										<span class="tran"><small>저의 부모님은 실비아 마크와 한스 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">2. Meine Großeltern heißen </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-3">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad3">.</span></div>
										</div>
										<span class="tran"><small>저의 조부모님은 마리아 홀름과 로버트 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-a"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ada">3. Mein Bruder heißt Alex.</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-a"> -->
										</div>
										<span class="tran"><small>저의 형제는 알렉스에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-b"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-adb">4. Mein Vater hat eine Schwester.</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-b"> -->
										</div>
										<span class="tran"><small>저의 아버지는 자매가 한 분 있으세요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad4">Sie heißt </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-4">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad4">.</span></div>
										</div>
										<span class="tran"><small>그녀는 사빈 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">1.2 Wer bin ich? </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q" id="qst-5">
										</div>
										<span class="tran"><small>저는 누구인가요? 로버트 홀름</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-c"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-adc">1. Meine Frau heißt Maria Holm.</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-c"> -->
										</div>
										<span class="tran"><small>저의 아내는 마리아 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">2. Meine Kinder heißen </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q" id="qst-6">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
										<span class="tran"><small>제 아이들은 한스,게오르그와 사빈이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-d"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-add">3. Mein Sohn, Hans Holm hat eine Tochter.</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-d"> -->
										</div>
										<span class="tran"><small>제 아들, 한스 홀름은 딸 하나가 있어요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad7">Sie heißt</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q" id="qst-7">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad7">.</span></div>
										</div>
										<span class="tran"><small>그녀는 노라에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-e"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ade">4. Meine Tochter ist mit ihm verheiratet.</span></div>
											<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-e"> -->
										</div>
										<span class="tran"><small>저의 딸은 결혼했어요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad8">Er heißt</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q" id="qst-8">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad8">.</span></div>
										</div>
										<span class="tran"><small>그는 프란쯔 스콜이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant-" id="ant-9"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">5. Meine Schwiegertochter heißt </span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control q" id="qst-9">
											<div class="input-group-append"><span class="input-group-text" id="qst-ad6">.</span></div>
										</div>
										<span class="tran"><small>저의 며느리는 실비아 마크에요.</small></span>
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
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Großvater</span><span class="wd">Opa</span><span class="wd"><small>할아버지</small></span><span class="wd">Großmutter</span><span class="wd">Oma</span><span class="wd"><small>할머니</small></span><span class="wd">Großeltern</span><span class="wd"><small>조부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Vater</span><span class="wd"><small>아버지</small></span><span class="wd">Mutter</span><span class="wd"><small>어머니</small></span><span class="wd">Eltern</span><span class="wd"><small>부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Sohn</span><span class="wd"><small>아들</small></span><span class="wd">Tochter</span><span class="wd"><small>딸</small></span><span class="wd">Kinder</span><span class="wd"><small>자녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Bruder</span><span class="wd"><small>형제</small></span><span class="wd">Schwester</span><span class="wd"><small>자매</small></span><span class="wd">Geschwister</span><span class="wd"><small>형제자매</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Enkelsohn</span><span class="wd"><small>손자</small></span><span class="wd">Enkeltochter</span><span class="wd"><small>손녀</small></span><span class="wd">Enkelkinder</span><span class="wd"><small>손자손녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Schwager</span><span class="wd"><small>형부, 처남, 매부, 매형</small></span><span class="wd">Schwägerin</span><span class="wd"><small>형수, 처제, 올케 …</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Onkel</span><span class="wd"><small>삼촌, 숙부</small></span><span class="wd">Tante</span><span class="wd"><small>이모, 고모, 숙모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Mann</span><span class="wd"><small>남편</small></span><span class="wd">Frau</span><span class="wd"><small>아내</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Schwiegervater</span><span class="wd"><small>장인. 시부</small></span><span class="wd">Schwiegermutter</span><span class="wd"><small>장모, 시모</small></span><span class="wd">Schwiegereltern</span><span class="wd"><small>처부모, 시부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Schwiegersohn</span><span class="wd"><small>사위</small></span><span class="wd">Schwiegertochter</span><span class="wd"><small>며느리</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Neffe</span><span class="wd"><small>조카</small></span><span class="wd">Nichte</span><span class="wd"><small>조카딸</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Cousin</span><span class="wd"><small>사촌 형제</small></span><span class="wd">Cousine</span><span class="wd"><small>사촌 자매</small></span></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
			var an = ["Nora","Silvia Mark und Hans Holm","Maria Holm und Robert Holm","Sabine Holm","Robert Holm","Hans, Georg und Sabine","Nora","Franz Scholl","Silvia Mark"];

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
						$(this).addClass("bg-warning text-white");
					}

					$(this).prop("disabled", true);
					$(".tran").show();
					$(this).attr("id","done");
					} else {
						// alert(na+"번 문제를 풀어주세요!");
						alert("모든 문제를 풀어주세요!");
					};
				})
			});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>