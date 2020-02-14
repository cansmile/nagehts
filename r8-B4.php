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
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
					anfassen<span class="tran"><br><small>건드리다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					essen<span class="tran"><br><small>먹다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					trinken<span class="tran"><br><small>마시다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					lachen<span class="tran"><br><small>웃다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="5">
					sehen<span class="tran"><br><small>보다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="6">
					hören<span class="tran"><br><small>듣다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="7">
					stehen<span class="tran"><br><small>서다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="8">
					gehen<span class="tran"><br><small>걷다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					geben<span class="tran"><br><small>주다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
					tragen<span class="tran"><br><small>들다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					schneiden<span class="tran"><br><small>자르다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans6 btn-lg btn-outline-dark so itm" id="12">
					lesen<span class="tran"><br><small>읽다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
					schreiben<span class="tran"><br><small>쓰다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="14">
					rauchen<span class="tran"><br><small>담배피우다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="15">
					aufmachen<span class="tran"><br><small>열다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="16">
					küssen<span class="tran"><br><small>키스하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="17">
					riechen<span class="tran"><br><small>냄새를 맡다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="18">
					atmen<span class="tran"><br><small>호흡하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="19">
					singen<span class="tran"><br><small>노래하다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="20">
					tanzen<span class="tran"><br><small>춤추다</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="21">
					husten<span class="tran"><br><small>기침하다</small></span>
				</button>
			</div>
		</div>
	</div>
</section>

		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>[ <small>단어를 알맞은 그림에 넣으세요.</small> ]
						</h2>
					</div>
				</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-1">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-1.png" alt="Hand" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-2">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-2.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-primary border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-3">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-3.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-orange border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-4">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-4.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-5">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-5.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-purple border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-6">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./images/Reihe 8/Reihe-8-B4-6.png" alt="Was passt?" style="max-height: 120px; width: auto;"><br>Man kann damit </h2>&nbsp;
				</div>
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

<div id="marg" class="border-danger"></div>		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<script src="./js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();
			$("#chk").hide();

			$(document).ready(function() {

			// 정답확인
			$("#chk").on("click", function() {
				var na = "";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();

					$(this).html("<h4>모든 답을 다 맞히셨네요!</h4>");
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

<?php include "wahl.php"; ?>

		var pan = new Array(), pann;
		pan = [1,9,10,11,13,15,21];
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
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>