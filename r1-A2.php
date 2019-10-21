<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	
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
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans2 itm" id="1">
					Guten Morgen!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans1 itm" id="2">
					Guten Tag!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans3 itm" id="3">
					Guten Abend!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans5 itm" id="4">
					Hallo!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans7 itm" id="5">
					Tschüs!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans4 itm" id="6">
					Gute Nacht!
					</button>
					<button type="button" class="mt-1 mx-1 btn btn-lg btn-outline-dark ans6 itm" id="7">
					Auf Wiedersehen!
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
					<h3>[ <small>단어를 알맞은 그림에 짝지우세요. 다중 선택이 되지만 그림 하나에 단어 하나만 배치됩니다.</small> ]</h3>
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
	<div id="marg"></div>
	<!-- 정답확인 버튼 끝 -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroup.js"></script>
	<script src="./js/interact.min.js"></script>
	<!-- ion.sound -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#chk").hide();
		$(document).ready(function() {
			ion.sound( {
				sounds : [ {
					name: "Bama_Country_Country"
				}
				, {
					name: "Cartoon_Boing"
				}
				],
				path : "sounds/",
				preload : true,
				volume : 1.0,
				multiplay : true
			}
			);
			$(".o").on("click", function() {
				ion.sound.play("Bama_Country_Country");
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
		}
		);
		$(".pop").click(function () {
			// 가장 먼저 지문에 'an' 넣기
			if ( !$(this).siblings().hasClass("an")) {
				$(this).addClass("an");
				$(this).addClass("btn-warning");
			}
			;
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
						na +=$(this).attr("id");
					}
					;
				}
				);
				alert(na + "번 문제를 풀어주세요.");
			}
			else {
				$(".pop").each(function() {
					$(this).removeClass("btn-info");
					if ($(this).hasClass("o") && $(this).hasClass("an")) {
						$(this).removeClass("btn-warning");
						$(this).addClass("btn-success");
					}
					else if ($(this).hasClass("o")) {
						$(this).addClass("btn-primary");
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
				$(this).removeClass("btn-light ");
				if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
					$(this).html('<h4>'+ $(".q").length + "문제 중 "+ $(".btn-success").length + "개를 맞추셨네요!</h4>");
					$(this).addClass("btn-danger");
				}
				else if ($(".btn-success").length==$(".q").length) {
					$(this).html('<h4>'+ $(".q").length + "문제 중 "+ $(".btn-success").length + "개를 맞추셨네요!<br>혹시 독일인이세요?</h4>");
					$(this).addClass("btn-primary");
				}
				else {
					$(this).html('<h4>'+ $(".q").length + "문제 중 "+ $(".btn-success").length + "개를 맞추셨네요!<br>훌륭합니다!</h4>");
					$(this).addClass("btn-warning");
				}
				;
			}
			;
		}
		);

	</script>
<?php } ?>
	<?php include "footer.php"; ?>
</body>
</html>