<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<?php if(ul()) { ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
							<h2> Sprechen Sie über die Sehenswürdigkeiten. 
							<br><small>세계 명소에 대해 말해보세요.</small>
							</h2>
							<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><img src="./images/Reihe 2/Reihe-2-E-2.png" alt="Herkunft" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="my-1 text-center" id="sehen"><span class="wd">das Namdaemun Tor</span><span class="wd">das Brandenburger Tor</span><span class="wd">der Eiffelturm</span><span class="wd">das Kolosseum</span><span class="wd">das Känguru</span><span class="wd">der Taco</span><span class="wd">der Panda</span><span class="wd">die Freiheitssatatue</span><span class="wd">die Pyramide</span><span class="wd">der Mt. Kilimanjaro</span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center" id="city"><span class="wd">Berlin</span><span class="wd">New York</span><span class="wd">Giza</span><span class="wd">Paris</span><span class="wd">Seoul</span><span class="wd">Mexiko City</span><span class="wd">Moshi</span><span class="wd">Peking</span><span class="wd">Rom</span><span class="wd">Sydney</span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center" id="coun"><span class="wd">Korea</span><span class="wd">Australien</span><span class="wd">Tanzania</span><span class="wd">Frankreich</span><span class="wd">Ägypten</span><span class="wd">Amerika</span><span class="wd">Deutschland</span><span class="wd">Italien</span><span class="wd">China</span><span class="wd">Mexiko</span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center" id="land"><span class="wd">Südamerika</span><span class="wd">Nordamerika</span><span class="wd">Asien</span><span class="wd">Australien</span><span class="wd">Afrika</span><span class="wd">Europa</span></div>
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
										<div class="ant" id="ant-0"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad0">z.B.: Namdeamun Tor</span></div>
											<input type="text" value="Wo ist das Namdaemun Tor? Es ist in Seoul, Korea. Korea ist in Asien." aria-label="Antwort" aria-describedby="basic-addon1" class="form-control">
										</div>
										<span class="tran"><br><span class="ml-5 text-success">Wo ist das Namdaemun Tor? Es ist in Seoul, Korea. Korea ist in Asien.<br><small class="text-dark">남대문은 어디에 있나요? 그것은 한국, 서울에 있습니다. 한국은 아시아 대륙에 있습니다.</small></span></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">1: Brandenburger</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad2">2: Kolosseum</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q" id="qst-2">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad3">3: Eiffelturm</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q" id="qst-3">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad4">4: Panda</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q" id="qst-4">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad5">5: Pyramide</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q" id="qst-5">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">6: Mt. Kilimanjaro</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q" id="qst-6">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">7: Känguru</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q" id="qst-7">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">8: Freiheitssatatue</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q" id="qst-8">
										</div>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant-" id="ant-9"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="qst-ad6">9: Taco</span></div>
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control q" id="qst-9">
										</div>
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
			var an = ["Wo ist das Brandenburger Tor? Es ist in Berlin, Deutschland. Deutschland liegt in Europa.","Wo ist das Kolosseum? Es ist in Rom, Italien. Italien liegt in Europa.","Wo ist der Eiffelturm? Er ist in Paris, Frankreich. Frankreich ist in Europa.","Wo ist der Panda? Er ist in Peking, China. China ist in Asien.","Wo ist die Pyramide? Sie ist in Giza, Ägypten. Ägypten ist in Afrika.","Wo ist der Mt. Kilimanjaro? Er ist in Moshi, Tanzania. Tanzania ist in Afrika.", "Wo ist das Känguru? Es ist in Sydney, Australien. Australien ist in Australien.", "Wo ist die Freiheitssatatue? Sie ist in New York, Amerika. Amerika ist in Nordamerika.", "Wo ist der Taco? Er ist in Mexiko City, Mexiko. Mexiko ist in Nordamerika."];
			var ant = new Array();
			var ant = ["브란덴부르그는 어디에 있나요? 그것은 독일, 베를린에 있습니다. 독일은 유럽 대륙에 위치합니다.","콜로세움은 어디에 있나요? 그것은 이탈리아 로마에 있습니다. 이탈리아는 유럽 대륙에 위치합니다.","에펠탑은 어디에 있나요? 그것은 프랑스, 파리에 있습니다. 프랑스는 유럽 대륙에 위치합니다.","판다는 어디에 있나요? 그것은 중국, 북경에 있습니다. 중국은 아시아 대륙에 위치합니다.","피라미드는 어디에 있나요? 그것은 이집트, 자이라에 있습니다. 이집트는 아프리카 대륙에 있습니다.","킬리만자로 산은 어디에 있나요? 그것은 탄자니아 모시에 있습니다. 탄자니아는 아프리카 대륙에 있습니다.", "캥거루는 어디에 있나요? 그것은 호주, 시드니에 있습니다. 호주는 오스트레일리아 대륙에 위치합니다.", "자유의 여신상은 어디에 있나요? 그것은 미국, 뉴욕에 있습니다. 미국은 북미 대륙에 있습니다.", "타코는 어디에 있나요? 그것은 멕시코, 멕시코시에 있습니다. 멕시코는 북미 대륙에 있습니다."];

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
					ch();
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
							var oan = an[i].replace(" ", "").toLowerCase();
							var nan = $("#qst-"+(i+1)).val().replace(" ", "").toLowerCase();
							var oran = $("#qst-"+(i+1)).val();
							if(oan == nan) {
								$("#qst-"+(i+1)).addClass("bg-success text-white");
								if($("#qst-"+(i+1)).val() != an[i]) {
									$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"<smal</span><span class=\"text-dark\">l><br>"+ant[i]+"</small></span>");
								}
								ri++;
							} else {
								$("#qst-"+(i+1)).val(an[i]);
								$("#qst-"+(i+1)).attr("disabled",true);
								$("#qst-"+(i+1)).parent().append("<span class=\"ml-5 text-danger\">"+oran+"</span><span class=\"text-dark\"><small><br>"+ant[i]+"</small></span>");
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
						alert(na+"번 문제를 풀어주세요!");
					};
				})
				$("#qst-1").val(an[0].substr(0,60));
				$("#qst-2").val(an[1].substr(0,21));
				ch();
				$("input:first()").prop("disabled",true);
			});
			
		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>