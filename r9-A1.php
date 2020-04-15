<?php require "header.php"; ?>
<body>
	<?php require "nav.php"; ?>
	<style>
		.video-container {position:relative; padding-bottom:56.25%; height:0; overflow:hidden;}
		.video-container iframe,.video-container object,.video-container embed {position:absolute; top:0; left:0; width:100%; height:100%;}
	</style>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="1">
					Alles Gute zum Geburtstag!<span class="tran"><br><small>생일축하해!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-lg btn-outline-dark so itm" id="2">
					Frohe Ostern!<span class="tran"><br><small>복된 부활절!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="3">
					Prosit Neujahr!<span class="tran"><br><small>새해 복 많이 받으세요!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="4">
					Frohes neues Jahr!<span class="tran"><br><small>복된 새해 되세요!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					Alles Liebe zum Geburtstag!<span class="tran"><br><small>생일축하해!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="6">
					Guten Rutsch ins Neujahr!<span class="tran"><br><small>새해 복 많이 받으세요!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					Frohe Weinachten!<span class="tran"><br><small>메리 크리스마스!</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-lg btn-outline-dark so itm" id="8">
					Gesegnetes neues Jahr!<span class="tran"><br><small>새해 복 많이 받으세요!</small></span>
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
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top border bg-danger border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-1">
					<h2 class="btn btn-xl bg-white ttl d-block">Weinachten</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-success border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-2">
					<h2 class="btn btn-xl bg-white ttl d-block">Silvester</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-primary border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-3">
					<h2 class="btn btn-xl bg-white ttl d-block">Geburtstag</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-orange border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-4">
					<h2 class="btn btn-xl bg-white ttl d-block">Ostern</h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top border bg-lime border-white so itm-lst col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" id="lst-5">
					<h2 class="btn btn-xl bg-white ttl d-block">Neujahr</h2>&nbsp;
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
				<div class="col-12">
					<div class="video-container rounded">
						<object width="320" height="240">
							<param name="movie" value="https://www.youtube.com/v/TuyroRHlcBE?version=3"></param>
							<param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/v/TuyroRHlcBE?version=3" type="application/x-shockwave-flash" width="320" height="240" allowscriptaccess="always" allowfullscreen="true"></embed>
						</object>
					</div>
				</div>
			</div>
		</div>
		<!-- 리스트 끝 -->
	</section>
	<div id="marg" class="border-danger"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
	<script>
	$("#0").hide();
	$("#0_p").hide();
	$(".tran").hide();
	$("#chk").hide();
	$(document).ready(function() {
		// 각 문장 재생 횟수 초기화
		var hm=new Array(), sen=new Array();
		for(i=0;
		i < $(".so").length;
		i++) {
			hm[i]=0;
			sen[i]=0;
		}
		ion.sound( {
			sounds : [ {
				name : "r9 A1",
				sprite : {
					"0": [1.086, 30.409],
					"1": [6.853, 2.056],
					"2": [10.453, 1.111],
					"3": [13.227, 1.237],
					"4": [16.070, 1.295],
					"5": [19.226, 2.043],
					"6": [23.032, 1.688],
					"7": [26.370, 1.323],
					"8": [29.706, 1.688]
				}
			}
			, {
				name: "dingdongdang",
					path: "<?php echo($root); ?>sounds/",
			}
			, {
				name: "Cartoon_Boing",
					path: "<?php echo($root); ?>sounds/",
			}
			],
			path : "<?php echo($root); ?>sounds/Reihe 9/",
			preload : true,
			volume : 1.0,
			multiplay: false,
			ended_callback: function(obj) {
				// 재생이 끝날 때 2번 이상이면 번역 보이기
				hmn=obj.part;
				hm[hmn]++;
				// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
				if(obj.part=="0") {
					$("#0").show();
					$("#0_p").hide();
					if(hm[hmn] > 1) {
						$(".tran").show();
					}
				}
				else {
					if(obj.part < 0) {
						$("#"+obj.part).html("▶");
					}
					if(hm[hmn] > 6) {
						$("#"+hmn).closest("table").find(".tran").show();
					}
				}
			}
			, ready_callback: function () {
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
				$(".so").on("click", function () {
					if($(this).attr("id").substr(-2)=="_p") {
						// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r9 A1", {
							part: "0"
						}
						);
						$("#0").show();
						$("#0").show();
						$(this).hide();
					}
					else if($(this).html()=="▶") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.play("r9 A1", {
							part: $(this).attr("id")
						}
						);
						$(this).html("❚❚");
						$(this).html("❚❚");
					}
					else if($(this).html()=="❚❚") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r9 A1", {
							part: $(this).attr("id")
						}
						);
						$(this).html("▶");
						$(this).html("▶");
					}
					else {
						// _p 붙어 있지 않으면 id 그대로 재생
						ion.sound.play("r9 A1", {
							part: $(this).attr("id")
						}
						);
						// 전체 듣기 재생일 때는 일시정지 버튼 보이기
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
				// 정답확인
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
				<?php require "wahl.php";
				?> var pan=new Array(), pann;
				// pan = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
				pan=[1, 9, 10, 11, 13, 15, 21];
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
		}
		);
	}
	);

	</script>
	<!-- ion.sound finished -->
	<?php require "footer.php"; ?>
</body>
</html>