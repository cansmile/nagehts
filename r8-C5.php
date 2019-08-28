<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12" id="itms">
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
							fahren<span class="tran"><br><small>운전하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
							essen<span class="tran"><br><small>먹다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="3">
							gehen<span class="tran"><br><small>걷다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
							besuchen<span class="tran"><br><small>방문하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
							schenken<span class="tran"><br><small>선물하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
							einladen<span class="tran"><br><small>싣다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
							gefallen<span class="tran"><br><small>맘에 들다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
							bekommen<span class="tran"><br><small>얻다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="9">
							schreiben<span class="tran"><br><small>쓰다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="10">
							es geht<span class="tran"><br><small>그럭저럭 지내다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="11">
							schicken<span class="tran"><br><small>보내다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="12">
							einkaufen<span class="tran"><br><small>구매하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="13">
							gratulieren<span class="tran"><br><small>축하하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="14">
							danken<span class="tran"><br><small>생각하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
							haben<span class="tran"><br><small>가지다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
							schlafen<span class="tran"><br><small>잠자다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
							lernen<span class="tran"><br><small>배우다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
							helfen<span class="tran"><br><small>돕다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
							anrufen<span class="tran"><br><small>전화하다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="20">
							fragen<span class="tran"><br><small>묻다</small></span>
						</button>
						<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="21">
							schmecken<span class="tran"><br><small>맛이나다</small></span>
						</button>
					</div>
				</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-1">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Nominative<span class="tran"><small><br>1격 지배 동사</small></span>
</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-orange border-white so itm-lst col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-2">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-sm-2 pt-md-3 pt-lg-3 pt-xl-3">Verben im Akkusativ<span class="tran">&nbsp;<small><br>4격 지배 동사</small></span>
</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-warning border-white so itm-lst col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-3">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block">Verben im Dativ<span class="tran">&nbsp;<small>3격 그리고</small></span><br>und Akkusativ<span class="tran">&nbsp;<small>4격 지배동사</small></span>
</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-2 pr-3" id="lst-4">
					<h2 style="min-height: 60px;" class="btn btn-xl bg-white ttl d-block pt-3">Verben im Dativ<span class="tran">&nbsp;<small>3격 지배동새</small></span>
</h2>&nbsp;
				</div>
			</div>
		<!-- 리스트 끝 -->
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
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();

			$(document).ready(function() {

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

					$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
					$(this).removeClass("btn-light");
					$(this).addClass("btn-primary");
					$(".btn-lg").text().appendTo($(this).closest("td"));
					$(".btn-lg").remove();
				} else {
					$("div.itm-lst").each(function(idx) {
						if(!$(this).find("button").length) {
							if(na != "") {
								na += ", ";
							}
							na += (idx+1);
						}
					});
					alert("모든 문제를 풀어주세요!");
					// alert(na+"번 문제를 풀어주세요!");
				}
			});

		var pan = new Array(), pann;
		pan = [1,3,16];
		for(var p = 0; p < pan.length; p++) {
			pann = "#"+pan[p];
			for(var i = 0; i < $(".itm-lst").length; i++) {
				if($(pann).hasClass("ans" + (i+1))) {
					$(pann).insertAfter("#lst-" + (i+1) + ">h2");
				}
			}
			$(pann).find(".tran").show();
		}
		$(".itm-lst>button").addClass("btn-block btn-light");
	
});
			
		</script>
		<!-- ion.sound finished -->
	</body>
</html>