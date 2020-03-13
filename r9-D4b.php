<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>문장을 듣고 맞는지 틀리는지 선택하세요..</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="1" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>a)</strong> Das Geburtstagskind heisst Julia.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-1">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option1" autocomplete="off"><label for="option1">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option2" autocomplete="off"><label for="option2">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="2" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>b)</strong> Sie feiert ihren 21. Geburtstag.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-2">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option3" autocomplete="off"><label for="option3">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option4" autocomplete="off"><label for="option4">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="3" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>c)</strong> Ihre Mutter hat einen selbstgemachten Kuchen gemacht.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-3">
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option5" autocomplete="off"><label for="option5">Richtig</label>
								</div>
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option6" autocomplete="off"><label for="option6">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="4" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>d)</strong> Ihre Freundin hat sie angerufen und ihr am Mittag gratuliert.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-4">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option7" autocomplete="off"><label for="option7">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option8" autocomplete="off"><label for="option8">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="5" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>e)</strong> Es gab eine Party bei Alex.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-5">
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option9" autocomplete="off"><label for="option9">Richtig</label>
								</div>
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option10" autocomplete="off"><label for="option10">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="6" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>f)</strong> Carlos kommt aus Frankfurt.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-6">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option11" autocomplete="off"><label for="option11">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option12" autocomplete="off"><label for="option12">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="7" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>g)</strong> Auf der Party wurde gegrillt und Musik gehört.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-7">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option13" autocomplete="off"><label for="option13">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option14" autocomplete="off"><label for="option14">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="8" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>h)</strong> Silvia hat als Geburtstagsgeschenk Konzertkarten bekommen.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-8">
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option15" autocomplete="off"><label for="option15">Richtig</label>
								</div>
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option16" autocomplete="off"><label for="option16">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="9" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>i)</strong> Leonie hat bei Silvia übernachtet.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-9">
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option17" autocomplete="off"><label for="option17">Richtig</label>
								</div>
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option18" autocomplete="off"><label for="option18">Falsch</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 my-2 p-3">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-dark rounded p-2 align-middle"><button type="button" id="10" class="so btn btn-outline-dark btn-sm mr-1">▶</button><strong>j)</strong> Der Geburtstag war eine Katastrophe.
							<span class="tran"><br><small>translate</small></span>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center align-middle">
							<div class="btn-group-vertical btn-group-toggle q" data-toggle="buttons" id="qst-10">
								<div class="btn btn-light pop x" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
								<input type="radio" name="options" id="option19" autocomplete="off"><label for="option19">Richtig</label>
								</div>
								<div class="btn btn-light pop o" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
								<input type="radio" name="options" id="option20" autocomplete="off"><label for="option20">Falsch</label>
								</div>
							</div>
						</div>
					</div>
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
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
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
					name : "r9 D4",
					sprite : {
						"0": [,],
						"1": [,],
						"2": [,],
						"3": [,],
						"4": [,],
						"5": [,],
						"6": [,],
						"7": [,],
						"8": [,],
						"9": [,],
						"10": [,]
					}
				}
				, {
					name: "dingdongdang",
						path: "sounds/"
				}
				, {
					name: "Cartoon_Boing",
						path: "sounds/"
				}
				],
				path : "sounds/Reihe 9/",
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
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("table").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {

					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 D4", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r9 D4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 D4", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r9 D4", {
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

				// 정답확인
				$("#chk").on("click", function() {
					if ($(".an").length < $(".q").length) {
						var na="";
						$(".q").each(function() {
							if ( !$(this).find("div").hasClass("an")) {
								if (na !="") {
									na +=", ";
								}
								na +=$(this).attr("id").substr(4);
							}
							;
						}
						);
						alert("모든 문제를 풀어주세요.");
						// alert(na + "번 문제를 풀어주세요.");
					}
					else {
						$(".tran").show();
						$(".pop").each(function() {
							$(this).removeClass("btn-info");
							if ($(this).hasClass("o") && $(this).hasClass("an")) {
								$(this).removeClass("btn-warning");
								$(this).addClass("btn-success");
							}
							else if ($(this).hasClass("o")) {
								$(this).addClass("btn-warning font-weight-bold");
							}
							else if ($(this).hasClass("an")) {
								$(this).addClass("btn-danger");
							}
							else {
								$(this).addClass("btn-light");
							}
							;
						}
						);
						$(this).removeClass("btn-light ");

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						var qa = $(".q").length; // 전체 문항 수
						var qr = $(".btn-success").length; // 맞춘 항목 수
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
					}
					;
				}
				);

					$("#0").show();
					$(".alert").hide();

					<?php include "wahl.php"; ?>

					var pan=new Array();
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
					pan=[1,2,3];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold pl-0");
								$("#"+ $(this).attr("id")).addClass("border-0");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-"+ pan[p]).parent().find(".tran").show();
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
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>