<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
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
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<img src="./images/Reihe 6/Reihe-6-C1-1.png" alt="Wann haben wir Deutschkurs?" style="max-width: 100%; height: auto;">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row"><button type="button" id="1" class="so btn btn-outline-danger">▶</button></th>
								<td>Hallo, Andrea. Wie geht’s?<span class="tran"><br><small>안녕, 안드레아. 어떻게 지내?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></th>
								<td>Danke gut. Und dir?<span class="tran"><br><small>고마워 좋아. 넌 어때?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="3" class="so btn btn-outline-danger">▶</button></th>
								<td>Auch gut. Danke. Wann haben wir Deutschkurs?<span class="tran"><br><small>나도 좋지. 고마워. 우리 독일어 수업 시간이 언제지?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></th>
								<td>Deutschunterricht haben wir am Montag und am Donnerstag.<span class="tran"><br><small>우리 독일어 수업은 월요일하고 목요일이야.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="5" class="so btn btn-outline-danger">▶</button></th>
								<td>Ach so. Um wie viel Uhr beginnt er?<span class="tran"><br><small>아 그래. 몇 시에 시작하지?</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="6" class="so btn btn-outline-primary">▶</button></th>
								<td>Um Viertel nach eins fängt er an.<span class="tran"><br><small>1시 15분에 시작해.</small></span></td>
							</tr>
							<tr>
								<th scope="row"><button type="button" id="7" class="so btn btn-outline-danger">▶</button></th>
								<td>Vielen Dank.<span class="tran"><br><small>고맙다.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table table-striped">
						<thead>
							<tr>
								<th colspan="2" scope="col">시간적 의미의 W-Frage와 전치사</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									• Wann... ? <br><span class="pl-2"><small>언제...?</small></span><br>
								</td>
								<td>
									■ Im Januar ... / Am Montag ...<br>
									<span class="ml-3">Um 12 Uhr ... / Am Morgen ...</span><br>
								</td>
								<tr>
									<td>
										• Wie viel Uhr... ? <br><span class="pl-2"><small>몇 시...?</small></span><br>
									</td>
									<td>
										■ 9 Uhr ... / 12 Uhr ...<br>
									</td>
								</tr>
								<tr>
									<td>
										• Um wie viel Uhr... ? <br><span class="pl-2"><small>몇 시에...?</small></span><br>
									</td>
									<td>
										■ Um 9 Uhr... / Um 12 Uhr ...<br>
									</td>
								</tr>
								<tr>
									<td>
										• Von wann bis wann..? <br><span class="pl-2"><small>언제부터 언제까지...?</small></span><br>
									</td>
									<td>
										■ Von Montag bis Freitag ...<br>
									</td>
								</tr>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-auto">
					<table class="table">
						<tbody>
							<tr>
								<td class="border bg-light">
									an | fangen mit +3 (= beginnen) <br><span class="pl-2"><small>~을 시작하다.</small></span><br>
									Der Lehrer fängt mit dem Unterricht an. <br><span class="pl-2"><small>선생님께서 수업을 시작하신다.</small></span><br>
									Ein neues Leben fängt an. <br><span class="pl-2"><small>새로운 인생이 시작된다.</small></span><br>
								</td>
							</tr>
							<tr>
								<td class="border-0"></td>
							</tr>
							<tr>
								<td class="bg-light border border-bottom-0"><span class="p-2 px-3 m-1 rounded text-white bg-success"><strong>GR</strong></span>&nbsp;<span class="p-1 rounded m-1 px-2 text-white bg-info"><strong>PRÄP.2</strong></span>&nbsp;<strong>um</strong>&nbsp;<small>[ʊm] ...경 (시각)</small></td>
							</tr>
							<tr>
								<td class="bg-light border border-top-0">
									Ich komme <strong>um</strong> 11 Uhr nachts nach Hause. <br><span class="pl-2"><small>나는 밤 11시<strong>에</strong> 귀가한다.</small></span><br>
									<strong>Um</strong> 9 Uhr beginnt der Deutschunterricht. <br><span class="pl-2"><small>9시<strong>에</strong> 독일어 수업이 시작된다.</small></span><br>
									<strong>Um</strong> 7 Uhr abends gehe ich nach Hause. <br><span class="pl-2"><small>저녁 7시<strong>에</strong> 집에 간다.</small></span><br>
								</td>
							</tr>
							<tr>
								<td class="border-0"></td>
							</tr>
							<tr>
								<td>der Deutschkurs <small>독일어 강좌</small> der Deutschunterricht <small>독일어 수업</small> beginnen /anfangen <small>시작하다</small></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
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
					name : "r6 C1",
					sprite : {
						"0": [7.62, 47.88],
							"1": [12.5, 2.54],
							"2": [17.38, 3.07],
							"3": [22.87, 4.48],
							"4": [31.3, 4.74],
							"5": [39.99, 4.28],
							"6": [48.15, 3],
							"7": [53.97, 1.67]
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
				path : "sounds/Reihe 6/",
				preload : true,
				volume : 1.0,
				multiplay: false,
				ended_callback: function(obj) {
					// 재상이 끝날 때 2번 이상이면 번역 보이기
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
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
							ion.sound.pause("r6 C1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r6 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r6 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r6 C1", {
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
					$("#0").show();
					$(".alert").hide();
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