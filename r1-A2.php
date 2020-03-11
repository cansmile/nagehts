<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	
	<!-- 알림 시작 -->
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		문제를 모두 풀어야
		<button class="badge badge-light" disabled>
		정답확인
		</button>
		이 됩니다.
		<br />
		<p class="mt-4">
			각 문제마다 <strong style="color: red;">처음 선택한 항목</strong>만
			<button class="badge badge-light" disabled>
			정답확인
			</button>
			에 이용됩니다.
		</p>
		<button class="badge badge-light">
		정답확인
		</button>
		을 누르면 지문의 배경색이
		<button class="badge badge-warning" disabled>
		선택한 지문
		</button>
		,
		<button class="badge badge-success" disabled>
		선택한 지문이 정답인 경우
		</button>
		,
		<button class="badge badge-primary" disabled>
		정답
		</button>
		으로 변합니다.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div id="itms">
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 so itm" id="1">
					Guten Morgen!<span class="tran"><br><small>아침인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 so itm" id="2">
					Guten Tag!<span class="tran"><br><small>낮 인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 so itm" id="3">
					Guten Abend!<span class="tran"><br><small>저녁인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 so itm" id="4">
					Hallo!<span class="tran"><br><small>일반인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans7 so itm" id="5">
					Tschüs!<span class="tran"><br><small>헤어질 때 인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 so itm" id="6">
					Gute Nacht!<span class="tran"><br><small>밤인사</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 so itm" id="7">
					Auf Wiedersehen!<span class="tran"><br><small>헤어질 때 인사</small></span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			
			<!-- 아이템들 시작 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>단어를 넣을 때는 그림을 누르세요.</h2>
					<h3>[ <small>단어를 알맞은 그림에 짝지우세요. 다중 선택이 되지만 그림 하나에 단어 하나만 배치됩니다.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">단어</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<!-- 아이템들 끝 -->
			<!-- 리스트 시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-1">
					<img src=".\images\Reihe 1\Reihe-1-A2-1.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-2">
					<img src=".\images\Reihe 1\Reihe-1-A2-2.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-3">
					<img src=".\images\Reihe 1\Reihe-1-A2-3.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-4">
					<img src=".\images\Reihe 1\Reihe-1-A2-4.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-5">
					<img src=".\images\Reihe 1\Reihe-1-A2-5.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-6">
					<img src=".\images\Reihe 1\Reihe-1-A2-6.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
				<div style="min-height: 240px;" class="itm-lst text-center text-dark rounded border border-light col-xs-3 col-sm-3 col-md-4 col-lg-3 col-xl-3" id="lst-7">
					<img src=".\images\Reihe 1\Reihe-1-A2-7.png" style="width: 100%; height: auto;" class="my-4 ttl">
				</div>
			</div>
			<!-- 리스트 끝 -->
			<div class="row">
				<!--문제 시작-->
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="1">
					<h3 class="mt-3">일반인사</h3>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="2">
					<h3 class="mt-3">아침인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						e. Guten Morgen!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="3">
					<h3 class="mt-3">낮 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="4">
					<h3 class="mt-3">저녁인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						d. Guten Abend!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Gute Nacht!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="5">
					<h3 class="mt-3">밤인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						c. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Guten Abend!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="6">
					<h3 class="mt-3">헤어질 때 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						b. Tschüs!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						d. Guten Tag!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e . Guten Abend!
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 q" id="7">
					<h3 class="mt-3">헤어질 때 인사</h3>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						a. Hallo!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						b. Guten Morgen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						c. Gute Nacht!
					</div>
					<div class="btn btn-info pop btn-xl btn-block o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
						d. Auf Wiedersehen!
					</div>
					<div class="btn btn-info pop btn-xl btn-block x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
						e. Guten Abend!
					</div>
				</div>
			</div>
			<!--문제 끝-->
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
		</div>
	</section>

	<div id="last" class="d-none"></div>
	<div id="marg"></div>
	<!-- 정답확인 버튼 끝 -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/ion.sound.min.js"></script>
	<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>
	<script src="./js/taptogroup.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
// 소리 출력 전역 변수와 함수
var sen = new Array(), pa = new Array(), he = new Array(), last;
$(".so").each(function() {
	var t = $(this);
	var ti = t.attr("id");
	sen[ti] = 0;
	pa[ti] = t.html();
});

function stopAll() {
	$(".so").each(function() {
		$(this).html(pa[$(this).attr("id")]);
	});
}

// 문제 재생
var nagehts = new Howl({
	src: ["./sounds/Reihe 1/r1 A2.mp3"],
	sprite : {
		"0": [345, 22869],
		"1": [6171, 1949],
		"2": [8712, 1922],
		"3": [11601, 1826],
		"4": [14372, 1314],
		"5": [16553, 1624],
		"6": [18651, 1922],
		"7": [20683, 2275]
	},
	html5: true,
	volume: 1,
	format: "mp3",
	preload: true,
	onloaderror: function() {
		$(".alert").append("<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>");
		console.log("다시 읽어주세요!");
	},
	onload: function() {
		// 음성 준비되면 HV 버튼 나타내기 
		$("#0").show();
		$(".alert").hide();

		$(".so").on("click", function() {
				var t = $(this);
				var ti = t.attr("id");

			if(($("div#last").text() == "" || t.text() == "❚❚") && !t.hasClass(".itm-lst")) {
				$("#last").text(ti);
				t.text("■");
				nagehts.seek();
				nagehts.play(ti);
				sen[ti]++;
	
				last = ti;
	
				$("#cnt-"+ti).text(sen[ti]);
			} else if(last == ti && nagehts.playing($("div#last").text())) {
				$("#last").text("");
				t.html(pa[ti]);
				nagehts.pause();
				sen[ti]--;
				$("#cnt-"+ti).text(sen[ti]);
			}

		});

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
			if ($(".an").length < $(".q").length) {
				var na="";
				$(".q").each(function() {
					if ( !$(this).find("div").hasClass("an")) {
						if (na !="") {
							na +=", ";
						}
						na +=$(this).find("h3").text();
					}
					;
				}
				);
				alert(na + " 문제를 풀어주세요.");
			}
			else {
				$(".itm").each(function() {
					if($(this).parent().attr("id").length > 5) {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
					} else {
						var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
					}
					$(".tran").show();
					if($(this).hasClass("ans"+ (a))) {
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
								$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger font-weight-bold\">" + $(this).html() + "</button>");
								// $(lstn).append(i);
							}
						}
					};

				}
				);


				$(".pop").each(function() {
					$(this).removeClass("btn-info");
					if ($(this).hasClass("o") && $(this).hasClass("an")) {
						$(this).removeClass("btn-warning");
						$(this).addClass("text-white btn-success font-weight-bold");
					}
					else if ($(this).hasClass("o")) {
						$(this).addClass("text-white btn-danger font-weight-bold");
					}
					else if ($(this).hasClass("an")) {
						$(this).addClass("btn-warning");
					}
					else {
						$(this).addClass("btn-light");
					}
					;
				}
				);

					// 정답 확인 div 상자 배경색 속성 없애기
					$(this).removeClass("btn-light ");

					var qa = $(".q").length + $(".itm").length; // 전체 문항 수
					var qr = $(".text-success").length + $(".btn-success").length; // 맞춘 항목 수
					var pe = (qr / qa) * 100; // 정답 비율
					var tcl = "white"; // 기본 문자색

					// 분류 기준은 100%, 80%, 60%, 40%
					if(pe > 99) {
						var st = "원어민이세요?";
						var cl = "lime";
						var tcl = "dark";
					} else if(pe > 74) {
						var st = "어! 좀 하시는데요~^^";
						var cl = "success";
					} else if(pe > 49) {
						var st = "쓰읍~ 다시 해 보실까요!";
						var cl = "primary";
					} else {
						var st = "좀 더 분발해 주세요";
						var cl = "danger";
					}

					$(this).addClass("btn-" + cl + " text-" + tcl);
					$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

					$(this).attr("id","done");


			}
			;
		}
		);


		$("#0").show();
		$(".alert").hide();

	},
	onend: function() {
		$("div#last").text("");
		stopAll();
		$("#cnt-"+last).text(sen[last]);
		if(last == 0) {
			if(sen[last] == 2) {
				$(".tran").show();
				$(".so").each(function() {
					pa[last] = $("#"+last).html();
				});
			}
		} else if(sen[last] == 2) {
			$("#"+last).find(".tran").show();
			pa[last] = $("#"+last).html();
		}
	}


});

		}
		);

	
	</script>
<?php } ?>
	<?php include "footer.php"; ?>
</body>
</html>