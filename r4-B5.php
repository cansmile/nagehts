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
						<h2> Hören Sie und Ergänzen Sie.<br>
							<small>듣고 채우세요.</small>
						<button type="button" class="btn btn-primary ml-2 btn-inline so" id="0">
							HV
						</button><button type="button" class="btn btn-primary ml-2 btn-inline so" id="0_p">
							❚❚
						</button>
						</h2>
						<h3><small><br>문장 뒤에 passen zusammen은 자동으로 채워집니다.</small></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="table">
							<tbody>
								<tr>
									<td><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Der Stuhl und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-1">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>걸상과 책상이 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Der Bleistift und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-2">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>연필과 연필 깍기가 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="3" class="so btn btn-outline-success">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das Fenster und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-3">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>창문과 커튼이 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="4" class="so btn btn-outline-info">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Die Blume und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-4">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>꽃과 꽃병이 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Das Auge und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-5">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>눈과 안경이 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="6" class="so btn btn-outline-primary">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Die Hände und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-6">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>손과 장갑이 서로 어울려요.</small></span></td>
								</tr>
								<tr>
									<td><button type="button" id="7" class="so btn btn-outline-info">▶</button></td>
									<td><div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Die Zahnbürste und </span></div>
											<input type="text" class="form-control q" aria-label="." id="qst-7">
											<div class="input-group-append"><span class="input-group-text">.</span></div>
										</div><span class="tran"><br><small>치약과 칫솔이 서로 어울려요.</small></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th scope="col">Singular</th>
									<th scope="col">Plural</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>der</strong> Tisch</td>
									<td><strong>die</strong> Tische</td>
								</tr>
								<tr>
									<td><strong>das</strong> Auge</td>
									<td><strong>die</strong> Auge<strong>n</strong></td>
								</tr>
								<tr>
									<td><strong>das</strong> Fenster</td>
									<td><strong>die</strong> Fenster</td>
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
			var an = ["der Tisch","der Spitzer","der Vorhang","die Vase","die Brille","die Handschuhe","die Zahnpasta"];

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
						$("#qst-"+(qn+1)).val(an[qn]+" passen zusammen");
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
						name : "r4 B5",

						sprite : {
							"0": [2.7,53.4],
							"1": [6.1,6.5],
							"2": [13.4,6.6],
							"3": [20.4,6.9],
							"4": [28.1,6.3],
							"5": [35,6.5],
							"6": [42.7,5.7],
							"7": [49.1,7.2]
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
					ion.sound.pause("r4 B5", {
						part: "0"
					});
					$("#0").show();
					$(this).hide();
				} else if($(this).html() == "▶") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.play("r4 B5", {
						part: $(this).attr("id")
					});
					$(this).html("❚❚");
				} else if($(this).html() == "❚❚") {
					// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
					ion.sound.pause("r4 B5", {
						part: $(this).attr("id")
					});
					$(this).html("▶");
				} else {
					// _p 붙어 있지 않으면 id 그대로 재생
					ion.sound.play("r4 B5", {
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
				$("#qst-1").val(an[0]+" passen zusammen");
				$("#qst-1").prop("disabled",true);
				$("#qst-1").closest("tr").find(".tran").show();
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>