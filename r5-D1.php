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
						<h3>[ <small>정답을 입력하면 입력이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
									<td>Was bekommen Sie, bitte?<span class="tran"><br><small>뭘 드시겠어요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
									<td>Ich möchte einen Salat.<span class="tran"><br><small>샐러드 하나요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
									<td>Bitte schön! Was möchten Sie?<span class="tran"><br><small>주문 받겠습니다! 뭘 드시겠어요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
									<td>Ich möchte eine Pizza.<span class="tran"><br><small>피자 하나요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
									<td>Bitte, was darf es denn sein?<span class="tran"><br><small>뭘 드시겠어요?</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
									<td>Ich nehme ein Steak und trinke ein Bier.<span class="tran"><br><small>스테이크 하나와 맥주 한 잔이요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
						<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
							<table class="table">
								<tbody>
									<tr>
										<th scope="row" width="20%">ich</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-1">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-2">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">Sie</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-3">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-4">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-5">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">ihr</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-6">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">Sie/sie</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">möcht</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-7">
											</div>
									</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
							<table class="table">
								<tbody>
									<tr>
										<th scope="row" width="20%">ich</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nehm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-8">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">du</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nimm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-9">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">Sie</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nehm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-10">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">er/sie/es</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nimm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-11">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">wir</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nehm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-12">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">ihr</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nehm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-13">
											</div>
									</td>
									</tr>
									<tr>
										<th scope="row">Sie/sie</th>
										<td>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text pr-0">nehm</span></div>
												<input type="text" class="form-control q pl-0" aria-label="." id="qst-14">
											</div>
									</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">TIPP</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>bekommen, nehmen : get, take<br>Was darf es denn sein? 뭘 드시겠어요?<br><br>주문할 때 <strong>부정관사</strong>를 사용한다. 그리고 계산할 때에는 먹은 음식을 계산한 것이므로 <strong>정관사</strong>를 사용한다.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">TIPP: möchten</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>möchten은 mögen(~을 좋아하다, ~일지도 모른다) 동사로부터 비롯된 접속법II식 동사이다. 접속법II식은 공손한 부탁이나 비현실적인 조건, 소망 등을 표현할 때 사용한다.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">TIPP</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Das ist <strong>ein</strong> Salat.<br>Ich nehme <strong>einen</strong> Salat.</td>
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
		<script src="./js/taptogroupnomove.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();

			var an = new Array();
			var an = ["e","est","en","e","en","et","en","e","st","en","t","en","t","en"];

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
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-danger");
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
							$(this).addClass("bg-danger");
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

					// 벗어날 때 모든 필드가 채워져서 - 모든 문제가 disabled일 때 - 번역 정답 표시 후 모두 보이기
					if($("input:disabled").length == $(".q").length) {
						$("input:disabled").addClass("bg-success text-white");
						$(".tran").show();
					}
				})


				// 각 문장 재생 횟수 초기화
				var hm = new Array();
				for(i = 0; i < $(".so").length; i++) {
					hm[i] = 0;
				}

				ion.sound({
					sounds : [{
						name : "r5 D1",

						sprite : {
							"0": [13.92,36.07],
							"1": [17.42,2.04],
							"2": [22.12,2.1],
							"3": [27.79,3.43],
							"4": [33.81,2.41],
							"5": [39.48,3.13],
							"6": [45.45,4.54]
						}
					},{
						name : "Bama_Country_Country",
						path : "sounds/"
					}, {
						name : "Cartoon_Boing",
						path : "sounds/"
					}],
					path : "sounds/Reihe 5/",
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
					ion.sound.pause("r5 D1", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r5 D1", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r5 D1", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r5 D1", {
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