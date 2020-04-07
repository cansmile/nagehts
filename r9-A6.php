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
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="1">
					vor den Eltern
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="2">
					Neujahr
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="3">
					Koreanische Spiele
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
					am 1.1.
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="5">
					Reiskuchensuppe
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="6">
					zu Hause
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
					<h2>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="line-height: 250%;">
					Bei uns in Korea feiert man nicht nur am 1.1 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-1">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					, sondern auch 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-2">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					 nach dem Mondkalender Neujahr.<span class="tran"><br><small>우리나라 한국에서는 새해를 양력 1월 1일뿐만 아니라 음력 1월1일도 보낸다.</small></span> Dies ist meistens um Januar oder Anfang Februar herum.<span class="tran"><br><small>음력으로 새해는 대부분 1월경이나 2월 초 즈음이다.</small></span> Es ist eines der größten Feste in Korea.<span class="tran"><br><small>새해는 한국의 커다란 명절중 하나이다.</small></span> Da feiert man mit Familie und Verwandten 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-3">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					.<span class="tran"><br><small>그때 집에서 가족과 친적들과 함께 명절을 지낸다.</small></span> Man spielt 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-4">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					, wie zum Beispiel ‚Yutnoli‘ und verbeugt sich 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-5">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					 und Älteren.<span class="tran"><br><small>새해에는 한국 전통놀이들, 예를 들어 윳놀이를 하고 부모님과 친척어른들에게 새배를 드린다.</small></span> Dabei wünscht man ihnen ein frohes neues Jahr.<span class="tran"><br><small>이때 어른들은 복된 새해를 축원한다 (덕담을 한다).</small></span> Als traditionelles Gericht zum Neujahr gibt es 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 200px;" id="lst-6">
							<h2 class="btn btn-warning btn-xl ttl d-block">
							▼ </h2>
						</div>
					.<span class="tran"><br><small>새해명절음식으로 떡국이 있다.</small></span> In Korea wird man mit dem Neujahr automatisch 1 Jahr älter, so dass man auch sagt, dass man viel essen soll, damit man das neue Jahr gesund und munter beginnen kann.<span class="tran"><br><small>한국에서는 새해와 더불어 자동적으로 한 살이 더 많아지므로, 새해를 건강하고 활기차게 시작할 수 있도록 많이 먹어야 한다고 말한다.</small></span>
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
					name : "r9 A6",
					sprite : {
						"0": [.5, 61],
						"1": [36.56, .89],
						"2": [14.6, .6],
						"3": [32.94, 1.03],
						"4": [16.08, 1.21],
						"5": [48.22, 1.12],
						"6": [30.54, .72]
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
						if(obj.part > 6) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
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
							ion.sound.pause("r9 A6", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r9 A6", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 A6", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r9 A6", {
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
					// 정답확인
					$("#chk").on("click", function() {
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							if($(this).find(".btn")) {
								$(this).find(".btn").addClass("text-success");
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

					<?php include "wahl.php"; ?>

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=[];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold text-left pl-0");
								$("#"+ $(this).attr("id")).addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								$("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}
				}
			}
			);
		}
		);
</script>
<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>