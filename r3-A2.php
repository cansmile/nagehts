<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>Hören Sie und sprechen Sie nach.<br>
					<small>듣고 따라 하세요.</small>
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
					<h3>[ <small>듣고 알맞은 단어를 선택하세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
					<table class="table table-borderless text-center">
						<thead>
							<tr>
								<th scope="col" colspan="3"><img src="./<?=$root ?>images/Reihe 3/Reihe3-A-A1-4.png" style="max-width: 100%; height: auto;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="bg-light"><div class="row">
									<div class="col-6"><small>나의</small></div>
									<div class="col-6 text-left">mein</div>
								</div></th>
								<td class="bg-light">Vater</td>
							</tr>
							<tr>
								<th rowspan="2" class="align-middle bg-light"><div class="row">
									<div class="col-6"></div>
									<div class="col-6 text-left">meine</div>
								</div></th>
								<td class="bg-light">Mutter</td>
							</tr>
							<tr>
								<td class="bg-light">Eltern</td>
							</tr>
							<tr>
								<th colspan="3" height="1" class="p-0 m-0 border-0">&nbsp;</th>
							</tr>
							<tr>
								<th class="bg-light"><div class="row">
									<div class="col-6"><small>당신의</small></div>
									<div class="col-6 text-left">Ihr</div>
								</div></th>
								<td class="bg-light">Vater</td>
							</tr>
							<tr>
								<th rowspan="2" class="align-middle bg-light"><div class="row">
									<div class="col-6"></div>
									<div class="col-6 text-left">Ihre</div>
								</div></th>
								<td class="bg-light">Mutter</td>
							</tr>
							<tr>
								<td class="bg-light">Eltern</td>
							</tr>
							<tr>
								<th colspan="3" height="1" class="p-0 m-0 border-0">&nbsp;</th>
							</tr>
							<tr>
								<th class="bg-light"><div class="row">
									<div class="col-6"></div>
									<div class="col-6 text-left">ich</div>
								</div></th>
								<td class="bg-light">komme</td>
							</tr>
							<tr>
								<th class="bg-light"><div class="row">
									<div class="col-6"><small>당신</small></div>
									<div class="col-6 text-left">Sie</div>
								</div></th>
								<td class="bg-light">komm<strong>en</strong></td>
							</tr>
							<tr>
								<th class="bg-light"><div class="row">
									<div class="col-6"><small>그들</small></div>
									<div class="col-6 text-left">sie</div>
								</div></th>
								<td class="bg-light">komm<strong>en</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-primary text-center">▶</button></th>
								<td>Wer ist das?<span class="tran"><br><small>이 사람은 누구인가요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-danger text-center">▶</button></th>
								<td>Das sind <span class="sen"><span class="nu"> </span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-1">
								<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
									<input type="radio" name="options" id="option1" autocomplete="off">mein
								</div>
								<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
									<input type="radio" name="options" id="option2" autocomplete="off">meine
								</div>
								</div><span class="ans"> </span></span> Großeltern, <span class="sen"><span class="nu"> </span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-2">
								<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
									<input type="radio" name="options" id="option1" autocomplete="off">mein
								</div>
								<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
									<input type="radio" name="options" id="option2" autocomplete="off">meine
								</div>
								</div><span class="ans"> </span></span> Opa und <span class="sen"><span class="nu"> </span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-3">
								<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
									<input type="radio" name="options" id="option1" autocomplete="off">mein
								</div>
								<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
									<input type="radio" name="options" id="option2" autocomplete="off">meine
								</div>
								</div><span class="ans"> </span></span> Oma.<span class="tran"><br><small>이 분들은 저의 조부모님들, 저의 할아버지와 저의 할머니세요. </small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-primary text-center">▶</button></th>
								<td>Was machen sie?<span class="tran"><br><small>그들은 무엇을 하시나요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-danger text-center">▶</button></th>
								<td>Mein Opa ist Pfarrer und <span class="sen"><span class="nu"> </span><div class="btn-group btn-group-toggle border border-dark border-top-0 border-left-0 border-right-0 q d-inline-flex" data-toggle="buttons" id="qst-4">
								<div class="btn btn-light pop x px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답이 아니에요.">
									<input type="radio" name="options" id="option1" autocomplete="off">mein
								</div>
								<div class="btn btn-light pop o px-1" data-toggle="popover" data-container="body" data-placement="top" data-content="정답!">
									<input type="radio" name="options" id="option2" autocomplete="off">meine
								</div>
								</div><span class="ans"> </span></span> Oma ist Lehrerin.<span class="tran"><br><small>저의 할아버지께서는 목사님이시고 저의 할머니는 선생님이세요.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-primary text-center">▶</button></th>
								<td>Kommen sie aus Korea?<span class="tran"><br><small>그들은 한국 출신인가요?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-danger text-center">▶</button></th>
								<td>Ja, sie kommen aus Seoul, Korea.<span class="tran"><br><small>네, 그분들은 한국, 서울에서 오셨어요.</small></span></td>
							</tr>
						</tbody>
					</table>
					<table class="table table-borderless table-sm text-center table-striped">
						<thead>
							<tr>
								<th class="text-primary" scope="col">maskulin(m)</th>
								<th class="text-danger" scope="col">feminin(f)</th>
								<th class="text-purple" scope="col">Plural(Pl.)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-primary">Vater</td>
								<td class="text-danger">Mutter</td>
								<td class="text-purple">Eltern</td>
							</tr>
							<tr>
								<td class="text-primary">Bruder</td>
								<td class="text-danger">Schwester</td>
								<td class="text-purple">Geschwister</td>
							</tr>
							<tr>
								<td class="text-primary">Großvater</td>
								<td class="text-danger">Großmutter</td>
								<td class="text-purple">Großeltern</td>
							</tr>
							<tr>
								<td class="text-primary">Sohn</td>
								<td class="text-danger">Tochter</td>
								<td class="text-purple">Kinder</td>
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
	<div id="last" class="d-none"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?=$root ?>js/popper.min.js"></script>
	<script src="./<?=$root ?>js/bootstrap.js"></script>
	<script src="./<?=$root ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
	$("#0").hide();
	$(".tran").hide();
	$(document).ready(function() {
		// 소리 출력 전역 변수와 함수
		var sen=new Array(),
		pa=new Array(),
		he=new Array(),
		last;
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
			src: [ "./<?=$root ?>sounds/Reihe 3/r3 A2.mp3"],
			sprite: {
				"0": [1801, 33093],
				"1": [10797, 1634],
				"2": [13699, 5062],
				"3": [19925, 1557],
				"4": [22630, 3996],
				"5": [28417, 2033],
				"6": [31605, 3037]
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
									na +=",";
								}
								na +=$(this).attr("id").substr(-1);
							}
							;
						}
						);
						alert("모든 문제를 풀어주세요.");
						// alert(na +"번 문제를 풀어주세요.");
					}
					else {
						$(".pop").each(function() {
							$(this).removeClass("btn-info");
							if ($(this).hasClass("o") && $(this).hasClass("an")) {
								$(this).removeClass("btn-warning");
								$(this).addClass("btn-success");
								$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-success font-weight-bold");
								$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
							}
							else if ($(this).hasClass("o")) {
								$(this).addClass("btn-<?=$color ?>");
								$(this).closest(".sen").find(".ans").html($.trim($(this).closest(".sen").find(".o").text()));
								$(this).closest(".sen").find(".nu").addClass("rounded p-1 px-2 text-white bg-danger font-weight-bold");
								$(this).closest(".sen").find(".ans").addClass("rounded bg-warning text-dark font-weight-bold text-center m-2 p-1 px-2");
							}
							else if ($(this).hasClass("an")) {
								$(this).addClass("btn-warning");
								$(this).closest(".sen").find(".nu").text($.trim($(this).text()));
							}
							else {
								$(this).addClass("btn-light");
							}
							;
							$(this).remove();
						}
						);
						$(".tran").show();
						$(".nu").show();
						$(".q").hide();
						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light");
						var qa=$(".q").length; // 전체 문항 수
						var qr=$(".bg-success").length; // 맞춘 항목 수
						var pe=(qr / qa) * 100; // 정답 비율
						var tcl="white"; // 기본 문자색
						// 분류 기준은 100%, 80%, 60%, 40%
						if (pe > 99) {
							var st="원어민이세요?";
							var cl="lime";
							var tcl="dark";
						}
						else if (pe > 74) {
							var st="어! 좀 하시는데요~^^";
							var cl="success";
						}
						else if (pe > 49) {
							var st="쓰읍~ 다시 해 보실까요!";
							var cl="primary";
						}
						else {
							var st="좀 더 분발해 주세요";
							var cl="danger";
						}
						$(this).addClass("btn-"+ cl + " text-"+ tcl);
						$(this).html("<h4>"+ qa + "문제 중"+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
					}
					;
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