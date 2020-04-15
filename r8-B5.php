<?php require "header.php"; ?>
<body>
	<?php require "nav.php"; ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?=$color ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					das Auge<span class="tran"><br><small>눈</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
					der Kopf<span class="tran"><br><small>머리</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					die Augen<span class="tran"><br><small>눈(들)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="4">
					der Fuß<span class="tran"><br><small>발</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					die Füße<span class="tran"><br><small>발(들)</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="6">
					das Ohr<span class="tran"><br><small>귀</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="7">
					die Ohren<span class="tran"><br><small>귀(양쪽)</small></span>
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
					<h2>[ <small>다음 물건에 필요한 단어를 그림에 넣으세요.</small> ]
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2" id="lst-1">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./<?=$root ?>images/Reihe 8/Reihe-8-B5-1.png" alt="Hand" style="max-height: 120px; width: auto;"></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2" id="lst-2">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./<?=$root ?>images/Reihe 8/Reihe-8-B5-2.png" alt="Was passt?" style="max-height: 120px; width: auto;"></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-primary border-white so itm-lst col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2" id="lst-3">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./<?=$root ?>images/Reihe 8/Reihe-8-B5-3.png" alt="Was passt?" style="max-height: 120px; width: auto;"></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white so itm-lst col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2" id="lst-4">
					<h2 class="btn btn-xl bg-white ttl d-block"><img src="./<?=$root ?>images/Reihe 8/Reihe-8-B5-4.png" alt="Was passt?" style="max-height: 120px; width: auto;"></h2>&nbsp;
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
		<!-- 리스트 끝 -->
</section>

<div id="marg"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./<?=$root ?>js/popper.min.js"></script>
<script src="./<?=$root ?>js/bootstrap.js"></script>
<script src="./<?=$root ?>js/taptogroup.js"></script>
<!-- interact.min.js -->
<script src="./<?=$root ?>js/ion.sound.min.js"></script>
<script>
	$(".tran").hide();
	$("#chk").hide();
	$(document).ready(function() {
		// 정답확인
		$("#chk").on("click", function() {
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");
				$(".itm-lst").each(function() {
					if($(this).find("button.btn")) {
						$(this).find("button.btn").addClass("text-success");
					}
				}
				);
				var qa=$(".itm").length; // 전체 문항 수
				var qr=$(".text-success").length; // 맞춘 항목 수
				var pe=(qr / qa) * 100; // 정답 비율
				var tcl="white"; // 기본 문자색
				// 분류 기준은 100%, 80%, 60%, 40%
				if(pe > 99) {
					var st="원어민이세요?";
					var cl="lime";
					var tcl="dark";
				}
				else if(pe > 74) {
					var st="어! 좀 하시는데요~^^";
					var cl="success";
				}
				else if(pe > 49) {
					var st="쓰읍~ 다시 해 보실까요?";
					var cl="primary";
				}
				else {
					var st="좀 더 분발해 주세요~";
					var cl="danger";
				}
				$(this).addClass("btn-"+ cl + " text-"+ tcl);
				$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");

				$(".btn-lg").text().appendTo($(this).closest("td"));
				$(".btn-lg").remove();
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
				alert("모든 문제를 풀어주세요!");
				// alert(na+"번 문제를 풀어주세요!");
			}
		}
		);
		<?php require "wahl.php";
		?> var pan=new Array(), pann;
		pan=[2, 5];
		for(var p=0;
		p < pan.length;
		p++) {
			pann="#"+pan[p];
			for(var i=0;
			i < $(".itm-lst").length;
			i++) {
				if($(pann).hasClass("ans"+ (i+1))) {
					$(pann).insertAfter("#lst-"+ (i+1) + ">h2");
				}
			}
			// $(pann).find(".tran").show();
		}
		$(".itm-lst>button").addClass("btn-block btn-light");

	}
	);


</script>
<!-- ion.sound finished -->
<?php require "footer.php"; ?>
</body>
</html>