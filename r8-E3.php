<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
<!-- 알림 끝 -->
<style>
	td,th,table {
		border-width: 0;
		border-style: hidden;
	}
</style>
<!-- 보기시작 -->
<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
	<div class="container">
		<div class="row">
			<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
			<div class="col-12" id="itms">
				<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
				Bleiben Sie im Bett und trinken Sie viel Tee.<span class="tran"><br>&nbsp;<small>침대에 누워 차를 많이 마시세요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="2">
				Ich habe Husten und auch Fieber.<span class="tran"><br>&nbsp;<small>제가 기침하고 열도 있어서요.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="3">
				Danke, Frau Doktor.<span class="tran"><br>&nbsp;<small>감사해요, 의사 선생님.</small></span>
				</button>
				<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
				Ich verschreibe Ihnen ein Rezept.<span class="tran"><br>&nbsp;<small>제가 처방전을 드릴게요.</small></span>
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
				<h2>Er gänzen Sie.<br><small>채우세요. </small>[ <small>단어를 누르면 소리가 납니다.</small> ]
				<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
				HV
				</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
				❚❚
				</button>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table">
					<tbody>
						<tr>
							<td scope="row" width="50">
								<button type="button" id="5" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>Guten Tag, Herr Kim. Was fehlt Ihnen denn?<span class="tran"><br><small>안녕하세요, 김 선생님. 무슨 일이신가요?</small></span></td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="6" class="so btn btn-outline-primary">▶</button>
							</td>
							<td>Guten Tag, Frau Doktor!<span class="tran"><br><small>안녕하세요, 의사 선생님!</small></span></td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="7" class="so btn btn-outline-primary">▶</button>
							</td>
							<td>
								<div class="itm-lst 1itm" id="lst-1">
									<h2 class="btn btn-warning btn-xl ttl d-block">
									▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="8" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>Ach so! Machen Sie sich oben frei und husten Sie mal!<span class="tran"><br><small>알겠어요! 상체를 편하게 하시고 기침한 번 해보세요!</small></span></td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="9" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>(Nach der Untersuchung) Sie haben Grippe.<span class="tran"><br><small>(진찰 후) 당신은 독감이 있으세요.</small></span></td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="10" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>
								<div class="itm-lst 1itm" id="lst-2">
									<h2 class="btn btn-warning btn-xl ttl d-block">
									▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="11" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>und schreibe Sie für eine Woche krank.<span class="tran"><br><small>그리고 일주일치 약을 써 드릴게요.</small></span></td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="12" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>
								<div class="itm-lst 1itm" id="lst-3">
									<h2 class="btn btn-warning btn-xl ttl d-block">
									▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="13" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>
								<div class="itm-lst 1itm" id="lst-4">
									<h2 class="btn btn-warning btn-xl ttl d-block">
									▼ </h2>
								</div>
							</td>
						</tr>
						<tr>
							<td scope="row">
								<button type="button" id="14" class="so btn btn-outline-danger">▶</button>
							</td>
							<td>Gute Besserung, Herr Kim!<span class="tran"><br><small>얼른 회복하세요, 김 선생님!</small></span></td>
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
	</div>
</section>

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
		// 각 문장 재생 횟수 초기화
		var hm = new Array(), sen = new Array();
		$(".so").each(function() {
			hm[$(this).attr("id")] = 0;
			sen[$(this).attr("id")] = 0;
		});
		ion.sound({
			sounds : [{
				name : "r8 U3",
				sprite : {
					"0": [4.23,37.34],
					"1": [34.68,3.21],
					"2": [18.43,2.33],
					"3": [38.04,1.54],
					"4": [29.78,2.09],
					"5": [13.43,3.33],
					"6": [16.83,1.6],
					"7": [18.43,2.33],
					"8": [21.13,4.08],
					"9": [27.98,1.4],
					"10": [29.78,2.09],
					"11": [31.9,2.37],
					"12": [34.68,3.21],
					"13": [38.04,1.54],
					"14": [39.68,1.83]
				}
			},{
				name : "dingdongdang",
				path : "sounds/"
			}, {
				name : "Cartoon_Boing",
				path : "sounds/"
			}],
			path : "sounds/Reihe 8/",
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
					// 재생 후 플레이 버튼으로 바꾸기
					if(obj.part > 4) {
						$("#"+obj.part).html("▶");
					}
					if(hm[hmn] > 1) {
						$("#"+hmn).closest("button").find(".tran").show();
						$("#"+hmn).closest("tr").find(".tran").show();
					}
				}
			}, ready_callback: function () {
				
		$(".o").on("click", function() {
			ion.sound.play("dingdongdang");
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
			ion.sound.pause("r8 U3", {
				part: "0"
			});
			$("#0").show();
			$(this).hide();
		} else if($(this).html() == "▶") {
			// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
			ion.sound.play("r8 U3", {
				part: $(this).attr("id")
			});
			$(this).html("❚❚");
		} else if($(this).html() == "❚❚") {
			// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
			ion.sound.pause("r8 U3", {
				part: $(this).attr("id")
			});
			$(this).html("▶");
		} else {
			// _p 붙어 있지 않으면 id 그대로 재생
			ion.sound.play("r8 U3", {
				part: $(this).attr("id")
			});
			// 전체 듣기 재생일 때는 일시정지 버튼 보이기
			if($(this).attr("id") == "0") {
				$(this).hide();
				$("#0_p").show();
			};
		};
	});
	// 정답확인
	$("#chk").on("click", function() {
		var na = "";
		if($("#itms").find("button").length < 1) {
			$(".tran").show();

			// 정답 확인 div 상자 배경색 속성 없애기
			$(this).removeClass("btn-light ");

			$(".itm-lst").each(function() {
				if($(this).find("button.btn")) {
					$(this).find("button.btn").addClass("text-success");
				}
			});

			var qa = $(".itm-lst").length; // 전체 문항 수
			var qr = $(".text-success").length; // 맞춘 항목 수
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
				var st = "쓰읍~ 다시 해 보실까요?";
				var cl = "primary";
			} else {
				var st = "좀 더 분발해 주세요~";
				var cl = "danger";
			}

			$(this).addClass("btn-" + cl + " text-" + tcl);
			$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

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
	$("#0").show();
	$(".alert").hide();
<?php include "wahl.php"; ?>
// 자동 답 채우기
var pan = new Array();
// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
pan = [1];
var il = $("#itms>.itm").length;
for(var p = 0; p < pan.length; p++) {
var pani = "#lst-" + pan[p];
$(".itm").each(function() {
if($(this).hasClass("ans" + pan[p])) {
$("#" + $(this).attr("id")).appendTo($("#lst-" + pan[p]));
$("#" + $(this).attr("id")).addClass("btn-block");
$("#" + $(this).attr("id")).addClass("btn-light");
$("#lst-" + pan[p] + ">h2").remove();
// $("#lst-" + pan[p]).closest("tr").find(".tran").show();
}
})
}
}
});

});

</script>
<!-- ion.sound finished -->
<?php include "footer.php"; ?>
</body>
</html>