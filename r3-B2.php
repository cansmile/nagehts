<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2> Hören Sie und ergänzen Sie.<br>
							<small>듣고 채우세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button><br>
						[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]
						</h2>
						<h3>[ <small><button type="button" class="btn disabled btn-sm btn-primary">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 <br>문장의 번역이 나옵니다.</small> ]</h3>

					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row" rowspan="7" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-B2-1.png" style="max-width: 240px; height: auto;"></th>
									<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
									<td>Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
									<td>Das sind meine Geschwister, mein Bruder und meine Schwester.<span class="tran"><br><small>제 형제자매에요, 나의 형제와 나의 자매에요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
									<td>Wie alt sind sie?<span class="tran"><br><small>몇 살인가요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Mein Bruder ist</span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append"><span class="input-group-text">Jahre alt </span></div>
										</div><span class="tran"><br><small>나의 형제는 <span class="ant" id="ant-1">24</span>살이에요</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">und meine Schwester ist</span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text"> Jahre alt.</span></div>
										</div><span class="tran"><br><small>그리고 나의 자매는 <span class="ant" id="ant-2">22</span>살이에요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
									<td>Ach so, arbeiten sie?<span class="tran"><br><small>아 그래요, 그들은 일하나요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
									<td>Nein, sie studieren in Seoul.<span class="tran"><br><small>아뇨, 그들은 서울에서 공부해요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>Wie alt</td>
									<td>ist</td>
									<td>er/sie?</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>bist</td>
									<td>du?</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>sind</td>
									<td>Sie/sie?</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>Ich</td>
									<td>bin</td>
									<td>… Jahre alt.</td>
								</tr>
								<tr>
									<td>Er/Sie</td>
									<td>ist</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Sie/Sie</td>
									<td>sind</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>mein</td>
									<td>Bruder</td>
								</tr>
								<tr>
									<td>meine</td>
									<td>Schwester</td>
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
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();

			var an = new Array();
			var an = ["24","22"];

			$(document).ready(function() {
				$(".q").on("keyup", function () {
					var q = $(this).val().length;
					var qn = ($(this).attr("id").substr(4))-1;
					var a = $(this).val();
					var b = an[qn].substr(0,q);
					a = a.replace(/ /gi, "");
					b = b.replace(/ /gi, "");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					if(a == b) {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-success");
					} else {
						if((qn+1) == 1) {
							b = "vierundzwanzig";
							b = b.substr(0,q);
							b = b.replace(/ /gi, "");

							if(a == b) {
								$(this).addClass("bg-success");
								$(this).addClass("text-white text-weight-bold");
							} else {
								$(this).addClass("text-white text-weight-bold");
								$(this).addClass("bg-danger");
							}
						} else if((qn+1) == 2) {
							b = "zweiundzwanzig";
							b = b.substr(0,q);
							b = b.replace(/ /gi, "");

							if(a == b) {
								$(this).addClass("bg-success");
								$(this).addClass("text-white text-weight-bold");
							} else {
								$(this).addClass("text-white text-weight-bold");
								$(this).addClass("bg-danger");
							}
						} else {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-danger");
						}
					}
					if(!$(this).val()) {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$(this).removeClass("text-white text-weight-bold");
					}
				})

				$(".q").on("focusout", function() {
					var qn = ($(this).attr("id").substr(4))-1;
					var a = an[qn];
					var b = $(this).val();

					if(a == b) {
						$(this).addClass("bg-success");
						$(this).prop("disabled",true);
						$(this).addClass("text-weight-bold");
						$(this).closest("tr").find(".tran").show();
						$(this).closest("tr").find(".ant").show();

					} else {
						if((qn+1) == 1) {
							a = "vierundzwanzig";

							if(a == b) {
								$(this).addClass("bg-success");
								$(this).prop("disabled",true);
								$(this).addClass("text-weight-bold");
								$(this).closest("tr").find(".tran").show();
								$(this).closest("tr").find(".ant").show();
								$(this).closest("tr").find(".ant").text("스물네");
							} else {
								$(this).addClass("bg-danger");
							}
						} else if((qn+1) == 2) {
							a = "zweiundzwanzig";

							if(a == b) {
								$(this).addClass("bg-success");
								$(this).prop("disabled",true);
								$(this).addClass("text-weight-bold");
								$(this).closest("tr").find(".tran").show();
								$(this).closest("tr").find(".ant").show();
								$(this).closest("tr").find(".ant").text("스물두");
							} else {
								$(this).addClass("bg-danger");
							}
						} else {
							$(this).addClass("bg-danger");
						}
					}

					if($(this).val()) {
						if($(this).hasClass("bg-danger")) {
							ion.sound.play("Cartoon_Boing");
						} else if($(this).hasClass("bg-success")){
							ion.sound.play("Bama_Country_Country");
						}
					}

					$(this).removeClass("text-white text-weight-bold");
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");

					if($("input:disabled").length == $(".q").length) {
						$("input:disabled").addClass("bg-success text-white");
					}
				})


				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r3 B2",

						sprite : {
							"0": [3.4,28.3],
							"1": [8,2],
							"2": [11,4.8],
							"3": [17.2,1.5],
							"4": [19.1,2.7],
							"5": [22,3.2],
							"6": [25.7,2.3],
							"7": [28.8,2.8]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 3/",
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
					ion.sound.pause("r3 B2", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r3 B2", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r3 B2", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r3 B2", {
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