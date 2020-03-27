<?php include "header.php"; ?>
<body>
<?php include "back.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="1">
					die Wurst<span class="tran">&nbsp;<small>소시지</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
					das Brot<span class="tran">&nbsp;<small>빵</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					das Wasser<span class="tran">&nbsp;<small>물</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					der Kaffee<span class="tran">&nbsp;<small>커피</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="5">
					der Tee<span class="tran">&nbsp;<small>차</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					der Käse<span class="tran">&nbsp;<small>치즈</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					der Reis<span class="tran">&nbsp;<small>밥</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="8">
					die Schokolade<span class="tran">&nbsp;<small>쵸콜릿</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					der Kuchen<span class="tran">&nbsp;<small>케잌</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="10">
					das Obst<span class="tran">&nbsp;<small>과일</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					das Fleisch<span class="tran">&nbsp;<small>고기</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="12">
					das Gemüse<span class="tran">&nbsp;<small>야채</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="13">
					die Milch<span class="tran">&nbsp;<small>우유</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="14">
					der Salat<span class="tran">&nbsp;<small>샐러드</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
					das Bier<span class="tran">&nbsp;<small>맥주</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
					das Eis<span class="tran">&nbsp;<small>아이스크림</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="17">
					die Suppe<span class="tran">&nbsp;<small>수프</small></span>
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
					<h2>[ <small>단어를 알맞은 칸(Essen, Getränk)에 넣으세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-info itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>1. Essen</strong><span class="tran">&nbsp;<small>음식</small></h2>&nbsp;</span>
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-danger itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>2. Getränk</strong><span class="tran">&nbsp;<small>음료</small></h2>&nbsp;</span>
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
	</div>
</section>
<div id="marg"></div>
<div id="last" class="d-none"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/taptogrouph.js"></script>
<script src="./js/howler.core.js"></script>
<!-- 맞고 틀리는지 소리 -->
<?php require_once("./oxsound.php"); ?>
<script>
$("#0").hide();
$(".tran").hide();
$(document).ready(function() {
	// 소리 출력 전역 변수와 함수
	var sen=new Array(), pa=new Array(), he=new Array(), last;
	$(".so").each(function() {
		var t=$(this);
		var ti=t.attr("id");
		sen[ ti]=0;
		pa[ ti]=t.html();
	}
	);
	function stopAll() {
		$(".so").each(function() {
			$(this).html(pa[ $(this).attr("id")]);
		}
		);
	}
	// 문제 재생
	var nagehts=new Howl( {
		src: [ "./sounds/Reihe 5/r5 A2.mp3"],
		sprite: {
			"0": [908, 96164],
				"1": [30601, 1768],
				"2": [20733, 1724],
				"3": [90493, 1701],
				"4": [62931, 1948],
				"5": [67151, 1597],
				"6": [51448, 1848],
				"7": [61899, 1894],
				"8": [78912, 1888],
				"9": [85108, 1598],
				"10": [15449, 1766],
				"11": [56693, 1820],
				"12": [9893, 1899],
				"13": [95313, 1846],
				"14": [25537, 1768],
				"15": [46417, 1649],
				"16": [35806, 1840],
				"17": [41146, 1548]
		}
		,
		html5: true,
		volume: 1,
		format: "mp3",
		preload: true,
		onloaderror: function() {
			$(".alert").append("<br /><strong class=\"font-weight-bold text-dark h4\">페이지를 다시 읽어주시기 바래요.</strong>");
			console.log("다시 읽어주세요!");
		}
		,
		onload: function() {
			<?php include "wahl.php";
			?> // 정답확인
			$("#chk").on("click", function() {
				var na="";
				if($("#itms").find("button").length < 1) {
					$(".tran").show();
					// 정답 확인 div 상자 배경색 속성 없애기
					$(this).removeClass("btn-light ");
					$(".itm-lst").each(function() {
						if($(this).find(".itm")) {
							$(this).find(".itm").addClass("text-success");
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
			$("#0").show();
			$(".alert").hide();
			$(".so").on("click", function() {
				var t=$(this);
				var ti=t.attr("id");
				if (($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
					$("#last").text(ti);
					t.text("■");
					nagehts.seek();
					nagehts.play(ti);
					sen[ ti]++;
					last=ti;
					$("#cnt-"+ ti).text(sen[ ti]);
				}
				else if (last==ti && nagehts.playing($("div#last").text())) {
					$("#last").text("");
					t.html(pa[ ti]);
					nagehts.pause();
					sen[ ti]--;
					$("#cnt-"+ ti).text(sen[ ti]);
				}
			}
			);
			// 미리 답 넣어놓기
			var pan=new Array();
			// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
			pan=[3, 12];
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
			$("#0").show();
		}
		,
		onend: function() {
			$("div#last").text("");
			stopAll();
			$("#cnt-"+last).text(sen[last]);
			if(last==0) {
				if(sen[last]==2) {
					$(".tran").show();
					$(".so").each(function() {
						pa[last]=$("#"+last).html();
					}
					);
				}
			}
			else if(sen[last]==2) {
				if($("#"+last).hasClass("itm")) {
					$("#"+last+">.tran").show();
				}
				$("#"+last).closest("tr").find(".tran").show();
				pa[last]=$("#"+last).html();
			}
		}
	}
	);
}
);

</script>
<?php include"footer.php"; ?>
</body>
</html>