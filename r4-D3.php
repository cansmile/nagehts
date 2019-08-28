<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Hören Sie und ergänzen Sie die Lücken. <br>
							<small> 듣고 빈칸을 채우세요. </small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다. 음성을 듣고 정답을 입력하세요.</small> ]</h3>
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고,<br> 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>

					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td rowspan="5" class="align-middle" width="240"><img src="./images/Reihe 4/Reihe-4-D3-1.png" alt="Küche" style="max-width: 240px; height: auto;"></td>
									<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
									<td>Das ist eine Küche.
									<span class="tran"><br><small>이것은 부엌입니다.</small></span></td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
									<td>Das da ist eine Einbauküche.
									<span class="tran"><br><small>여기 이것은 빌트인 부엌입니다.</small></span></td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
									<td>
										<div class="ant" id="ant-1"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append"><span class="input-group-text"> Küche ist komplett.</span></div>
										</div><span class="tran"><br><small>이 부엌은 완비되었습니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
									<td>
										<div class="ant" id="ant-2"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text"> kostet 999 Euro.</span></div>
										</div><span class="tran"><br><small>비용은 999 유로입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
									<td>
										<div class="ant" id="ant-3"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Sie ist eine </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-3">
											<div class="input-group-append"><span class="input-group-text">Küche.</span></div>
										</div><span class="tran"><br><small>이것은 완비된 부엌입니다.</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td rowspan="5" class="align-middle" width="240"><img src="./images/Reihe 4/Reihe-4-D3-2.png" alt="Wohnzimmer" style="max-width: 240px; height: auto;"></td>
									<td width="25"><button type="button" id="6" class="so btn btn-outline-success">▶</button></td>
									<td>
										<div class="ant" id="ant-4"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das ist </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-4">
											<div class="input-group-append"><span class="input-group-text"> Wohnzimmer.</span></div>
										</div><span class="tran"><br><small>이것은 거실입니다</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="7" class="so btn btn-outline-success">▶</button></td>
									<td>
										<div class="ant" id="ant-5"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-5">
											<div class="input-group-append"><span class="input-group-text"> ist ein Designer-Tisch.</span></div>
										</div><span class="tran"><br><small>여기 이것은 디자이너 테이블입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="8" class="so btn btn-outline-success">▶</button></td>
									<td>
										<div class="ant" id="ant-6"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-6">
											<div class="input-group-append"><span class="input-group-text"> Designer-Tisch ist bildschön.</span></div>
										</div><span class="tran"><br><small>이 디자이너 테이블은 아름답습니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="9" class="so btn btn-outline-success">▶</button></td>
									<td>
										<div class="ant" id="ant-7"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-7">
											<div class="input-group-append"><span class="input-group-text"> kostet 599 Euro.</span></div>
										</div><span class="tran"><br><small>비용은 599 유로입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="10" class="so btn btn-outline-success">▶</button></td>
									<td>
										<div class="ant" id="ant-8"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text pr-0">Er ist ein bildschön</span></div>
											<input type="text" class="form-control q pl-0" aria-label="." id="qst-8">
											<div class="input-group-append"><span class="input-group-text"> Tisch.</span></div>
										</div><span class="tran"><br><small>그것은 아름다운 테이블입니다.
										</small></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td rowspan="5" class="align-middle" width="240"><img src="./images/Reihe 4/Reihe-4-D3-3.png" alt="Schlafzimmer" style="max-width: 240px; height: auto;"></td>
									<td width="25"><button type="button" id="11" class="so btn btn-outline-info">▶</button></td>
									<td>
										<div class="ant" id="ant-9"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das ist </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-9">
											<div class="input-group-append"><span class="input-group-text"> Schlafzimmer.</span></div>
										</div><span class="tran"><br><small>이것은 침실입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="12" class="so btn btn-outline-info">▶</button></td>
									<td>
										<div class="ant" id="ant-10"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das da ist </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-10">
											<div class="input-group-append"><span class="input-group-text"> Bett.</span></div>
										</div><span class="tran"><br><small>여기 이 것은 침대입니다.
</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="13" class="so btn btn-outline-info">▶</button></td>
									<td>
										<div class="ant" id="ant-11"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-11">
											<div class="input-group-append"><span class="input-group-text"> Bett ist originell.</span></div>
										</div><span class="tran"><br><small>이 침대는 독창적입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="14" class="so btn btn-outline-info">▶</button></td>
									<td>
										<div class="ant" id="ant-12"></div>
										<div class="input-group">
											<input type="text" class="form-control q" aria-label="." id="qst-12">
											<div class="input-group-append"><span class="input-group-text"> ist 499 Euro.</span></div>
										</div><span class="tran"><br><small>비용은 499 유로입니다.</small></span>
									</td>
								</tr>
								<tr>
									<td width="25"><button type="button" id="15" class="so btn btn-outline-info">▶</button></td>
									<td>
										<div class="ant" id="ant-13"></div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text pr-0">Es ist ein originell</span></div>
											<input type="text" class="form-control q pl-0" aria-label="." id="qst-13">
											<div class="input-group-append"><span class="input-group-text"> Bett.</span></div>
										</div><span class="tran"><br><small>그것은 독창적인 침대입니다.</small></span>
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
		

		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroupnomove.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();

			var an = new Array();
			var an = ["Die","Sie","komplette","ein","da","Der","Er","er","ein","ein","Das","Es","es"];

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


				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r4 D3",

						sprite : {
							"0": [6.3,82.8],
							"1": [14,2.8],
							"2": [18.4,2.8],
							"3": [22.9,2.7],
							"4": [27.2,4.1],
							"5": [32.9,4],
							"6": [42.4,2.6],
							"7": [45.6,3.4],
							"8": [50.8,3.2],
							"9": [56,3.5],
							"10": [62,2],
							"11": [70,1.8],
							"12": [73.5,2],
							"13": [77.4,2],
							"14": [81.5,3],
							"15": [86.8,2.3]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 4/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn = obj.part;
						hm[hmn]++;

						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();

							if(hm[hmn] > 1) {
								$(".tran").show();
							}

						} else {
							$("#"+obj.part).html("▶");
							if(hm[hmn] > 1) {
								$("#"+obj.part).closest("tr").find(".tran").show();
							}
						}

					}, ready_callback: function () {
						
				$(".o").on("click", function() {
					ion.sound.play("Bama_Country_Country");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});
			
				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};
	
					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");
					
				});
				
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});

			$(".so").on("click", function () {
				if($(this).attr("id").substr(-2) == "_p") {
					// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r4 D3", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r4 D3", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r4 D3", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r4 D3", {
						part: $(this).attr("id")
					});

					// 전체 듣기 재생일 때는 일시정지 버튼 보이기
					if($(this).attr("id") == "0") {
						$(this).hide();
						$("#0_p").show();
					};
				};
			});

		$("#0").show();
		$(".alert").hide();
		}
	});
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>