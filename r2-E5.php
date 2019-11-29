<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
					a. In Daejeon.<span class="tran"><br>&nbsp;<small>대전에서.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
					b. Nein, in Suwon.<span class="tran"><br>&nbsp;<small>아니 난 수원에.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="3">
					c. Ja, ich spreche gut Englisch.<span class="tran"><br>&nbsp;<small>응, 나 영어 잘해.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-lg btn-outline-dark so itm" id="4">
					d. Nein, ich wohne in Jung-Gu.<span class="tran"><br>&nbsp;<small>아니, 난 중구에 살아.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
					e. Nein, ich komme nicht aus Finnland.<span class="tran"><br>&nbsp;<small>아니, 나는 필란드 출신이 아니야.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="6">
					f. Ich wohne auch in Seoul.<span class="tran"><br>&nbsp;<small>나도 서울에 살아.</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark itm" id="7">
					g. Ich komme aus Brasilien.<span class="tran"><br>&nbsp;<small>나는 브라질 출신이야.</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h3>[ <small>문제에 맞는 답안을 알맞게 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<table class="table table-light text-center">
						<tbody>
							<tr>
								<th class="bg-light" scope="row" width="10%">1</th>
								<td>Wohnst du in Yeosu?<span class="tran"><br>&nbsp;<small>너는 여수에서 사니?</small></span></td>
								<td width="40%">
									<div class="itm-lst 1itm" id="lst-1">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">2</th>
								<td>Kommst du aus Finnland?<span class="tran"><br>&nbsp;<small>넌 핀란드 출신이니?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-2">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">3</th>
								<td>Wo wohnst du?<span class="tran"><br>&nbsp;<small>너는 어디에 사니?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-3">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">4</th>
								<td>Ich wohne in Seoul, und du?<span class="tran"><br>&nbsp;<small>나는 서울에 살아, 너는?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-4">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">5</th>
								<td>Woher kommst du?<span class="tran"><br>&nbsp;<small>너는 어디에서 왔어?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-5">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">6</th>
								<td>Sprichst du gut Englisch?<span class="tran"><br>&nbsp;<small>너 영어 잘 말하니?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-6">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
									</div>
								</td>
							</tr>
							<tr>
								<th class="bg-light" scope="row">7</th>
								<td>Wohnst du in Gwangjin-Gu?<span class="tran"><br>&nbsp;<small>너는 광진구에 살아?</small></span></td>
								<td>
									<div class="itm-lst 1itm" id="lst-7">
										<h2 class="btn btn-warning btn-xl ttl d-block">
										▼ </h2>
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
			<div class="row">
				<div class="col">
					<table class="table text-center">
						<thead>
							<th scope="col">
								<span class="bg-lime font-weight-bold rounded p-1 px-2 m-1 text-left">TIPP</span>※ 참고
							</th>
						</thead>
						<tbody>
							<tr>
								<td><a href="./r2-Grammatik und Wendungen.php">Grammatik und Wendungen</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<div id="marg"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
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
		$("#chk").hide();
		$(document).ready(function() {
			$(".o").on("click", function() {
				ion.sound.play("dingdongdang");
			}
			);
			$(".x").on("click", function() {
				ion.sound.play("Cartoon_Boing");
			}
			);
			$("[data-toggle='popover']").popover( {
				delay : {
					'hide': 1000
				}
				,
				container : "body"
			}
			);
			$(".pop").click(function () {
				// 가장 먼저 지문에 'an' 넣기
				if ( !$(this).siblings().hasClass("an")) {
					$(this).addClass("an");
					$(this).addClass("btn-warning");
					$(this).parent().children().removeClass("btn-light");
				}
				;
				// 문제 풀이 정도 업데이트
				var perc=Math.round(($(".an").length / $(".q").length) * 100);
				$(".progress>.bar").attr("width", perc + "%;");
			}
			);
			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}
				, 500);
			}
			);
	<?php include "wahl.php"; ?>
	// 정답확인
	$("#chk").on("click", function() {
	var na="";
	if($("#itms").find("button").length < 1) {
	$(".tran").show();
	$(".itm-lst").each(function() {
	$(this).html($(this).find("button").html());
	// $(this).addClass("font-weight-bold bg-white border rounded border-dark");
	}
	);
	$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
	$(this).removeClass("btn-light");
	$(this).addClass("btn-primary");
	}
	else {
	$("div.itm-lst").each(function(idx) {
	if( !$(this).find("button").length) {
	if(na !="") {
	na +=", ";
	}
	na +=(idx+1);
	}
	}
	);
	alert(na+"번 문제를 풀어주세요!");
	}
	}
	);
	var pan=new Array();
	// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
	pan=[1];
	var il=$("#itms>.itm").length;
	for(var p=0;
	p < pan.length;
	p++) {
	var pani="#lst-"+ pan[p];
	$(".itm").each(function() {
	if($(this).hasClass("ans"+ pan[p])) {
	$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
	$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold text-left");
	$("#"+ $(this).attr("id")).addClass("border-0");
	$("#lst-"+ pan[p] + ">h2").remove();
	$("#lst-"+ pan[p]).closest("tr").find(".tran").show();
	}
	}
	)
	}
	}
	)
	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>