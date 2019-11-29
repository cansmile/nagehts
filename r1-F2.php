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
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 so itm" id="1">
					1
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 so itm" id="2">
					2
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 so itm" id="3">
					3
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 so itm" id="4">
					4
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans7 so itm" id="5">
					5
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 so itm" id="6">
					6
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans8 so itm" id="7">
					7
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 so itm" id="8">
					8
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans9 so itm" id="9">
					9
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans10 so itm" id="10">
					10
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h3>[ <small>번호를 알맞은 단어와 짝지우세요.</small> ]</h3>
				</div>
			</div>
			<!-- 리스트 시작 -->
			<div class="row text-center" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-1">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="eins">eins</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-2">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="zwei">zwei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-3">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="drei">drei</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-4">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="sechs">sechs</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-5">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="acht">acht</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-6">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="vier">vier</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-7">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="fünf">fünf</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-8">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="sieben">sieben</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-9">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="neun">neun</strong></h2>
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white itm-lst text-center text-dark col my-4" id="lst-10">
					<h2 class="btn btn-light mt-3 btn-xl ttl d-block"><strong class="so" id="zehn">zehn</strong></h2>
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
	
	<div id="marg"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<!-- ion.sound -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$("#chk").hide();
		$(document).ready(function() {
			ion.sound( {
				sounds : [ {
					name : "r1 F1",
					sprite : {
						"0": [7.1, 27.4],
						"1": [11.4, 1.2],
						"2": [14.1, 1],
						"3": [16.8, 1],
						"4": [19.1, 1.2],
						"5": [21.6, 1.2],
						"6": [24.1, 1.3],
						"7": [26.7, 1.2],
						"8": [28.9, 1],
						"9": [31.3, 1],
						"10": [33.3, 1.3],
						"eins": [11.4, 1.2],
						"zwei": [14.1, 1],
						"drei": [16.8, 1],
						"sechs": [24.1, 1.3],
						"acht": [28.9, 1],
						"vier": [19.1, 1.2],
						"fünf": [21.6, 1.2],
						"sieben": [26.7, 1.2],
						"neun": [31.3, 1],
						"zehn": [33.3, 1.3]
					}
				}
				],
				path : "sounds/Reihe 1/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					if(obj.part=="0") {
						$("#0").show();
						$("#0_p").hide();
					}
					;
				}
				, ready_callback: function () {
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r1 F1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r1 F1", {
								part: $(this).attr("id")
							}
							);
							// 전체 듣기 재생일 때는 일시정지 버튼 보이기
							if($(this).attr("id")=="0") {
								$(this).hide();
								$("#0_p").show();
							}
							;
						}
						;
					}
					);
					// 준비되면 HV 보이기
					$(".alert").hide();

					// 정답확인
					$("#chk").on("click", function() {
						if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
							$(this).attr("id", "done");
							$(".itm").each(function() {
								if($(this).hasClass("ans"+ ($(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1)))) {
									$(this).addClass("text-success font-weight-bold");
								}
								else {
									$(this).addClass("text-warning font-weight-bold");
									$(this).find(".tran").show();

								}
								;

								if($(this).hasClass("text-warning")) {
									// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
									for(var i = 1; i <= $(".itm-lst").length; i++) {
										if($(this).hasClass("ans"+i)) {
											$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block bg-white text-danger font-weight-bold\">" + $(this).html() + "</button>");
											// $(lstn).append(i);
										}
									}
								};

							}
						);

						if($(".itm").length==$(".itm.text-success").length) {
							ion.sound.play("dingdongdang");
							$(this).html("<h4>모든 답을 다 맞히셨네요!<br />혹시 독일사람인가요?</h4>");
							$(this).addClass("bg-success font-weight-bold text-white");
						}
						else {
							ion.sound.play("Cartoon_Boing");
							$(this).html("<h4>"+ $(".text-success.font-weight-bold").length + "개의 답을 맞히셨네요!</h4>");
							$(this).addClass("bg-orange font-weight-bold text-white");
						}
						;
					}
					}
					);
				}
			}
			);
			<?php include "wahl.php"; ?>
			// 정답 자동채우기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[1];
			for(var p=0;
			p < pan.length;
			p++) {
				var pani="#"+pan[p];
				for(var i=0;
				i < $(".itm-lst").length;
				i++) {
					if($(pani).hasClass("ans"+ (i+1))) {
						$(pani).insertAfter($("#lst-"+ (i+1) + ">h2"));
						$(pani).addClass("btn-block btn-light");
					}
				}
			}
		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>