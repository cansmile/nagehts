<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
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
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="1">
					gefahren
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="2">
					geredet
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="3">
					gelacht
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="4">
					gemacht
					</button>
					<button type="button" class="mt-1 mx-1 btn ans13 btn-md btn-outline-dark itm so" id="5">
					geblieben
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="6">
					angerufen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="7">
					gegrillt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so" id="8">
					gegangen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="9">
					gebacken
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="10">
					getanzt
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="11">
					gekommen
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="12">
					gratuliert
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="13">
					gehört
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
					<h2>Sprechen Sie in der Klasse. <small>수업시간에 이야기해보세요.</small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="line-height: 250%;">
					Ich heiße Silvia.  <span class="tran"><br><small>나는 실비아라고 해.</small><br></span>Gestern hatte ich meinen 20. Geburtstag.  <span class="tran"><br><small>나는 어제 20살 생일을 맞이했어.</small><br></span>Es war einfach ein wunderschönes Erlebnis.  <span class="tran"><br><small>파티는 진짜 너무 멋진 경험이었어.</small><br></span>Gleich am Morgen hat meine Freundin mich 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-1">
							<h2 class="btn btn-warning btn-xl ttl d-block"> kommen </h2>
						</div>
					 und mir zum Geburtstag 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-2">
							<h2 class="btn btn-warning btn-xl ttl d-block"> kommen </h2>
						</div>
					.  <span class="tran"><br><small>아침이 되자마자 내 친구가 나에게 전화하여 나에게 생일 축하를 해주었어.</small><br></span>Zum Frühstück hat meine Mutter mir ein leckeres Frühstück mit gekochtem Ei, und Speck und Toast 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-3">
							<h2 class="btn btn-warning btn-xl ttl d-block"> machen </h2>
						</div>
					.  <span class="tran"><br><small>아침식사에 엄마가 나에게 삶은 계란, 베이컨, 토스트 빵으로 맛난 아침식사를 해주었어.</small><br></span>Sie hat sogar einen selbstgemachten Kuchen 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-4">
							<h2 class="btn btn-warning btn-xl ttl d-block"> backen </h2>
						</div>
					-  <span class="tran"><br><small>더욱이 엄마가 손수 케익을 만들어 주셨어.</small><br></span>Erdbeerkuchen mit Sahne, einfach köstlich!  <span class="tran"><br><small>생크림 딸기 케익, 진짜 맛있었어.</small><br></span>Am Nachmittag haben mich meine Freunde abgeholt und für mich eine Überraschungsparty bei Alex organisiert.  <span class="tran"><br><small>오후에는 친구들이 나를 데리려 왔고 알렛스 집에서 나를 위한 깜짝 파티를 준비했어.</small><br></span>Es waren alle da.  <span class="tran"><br><small>친구들이 모두 다 왔어.</small><br></span>Selbst Carlos, unser Austausstudent aus Spanien, war auch mit dabei. <span class="tran"><br><small>스페인에서 온 교환학생인 카를로스도 왔어.</small><br></span> Und meine alte Schulfreundin Julia ist aus Frankfurt 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-5">
							<h2 class="btn btn-warning btn-xl ttl d-block"> kommen </h2>
						</div>
					.  <span class="tran"><br><small>나의 오랜 학교친구인 율리아도 프랑크프르트에서 왔어.</small><br></span>Sie ist mit der Bahn zu mir 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-6">
							<h2 class="btn btn-warning btn-xl ttl d-block"> fahren </h2>
						</div>
					, um mir zum Geburtstag zu gratulieren.  <span class="tran"><br><small>율리아는 나에게 생일축하인사를 하려고 기차를 타고 왔어.</small><br></span>Wir haben 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-7">
							<h2 class="btn btn-warning btn-xl ttl d-block"> grillen </h2>
						</div>
					und dabei Musik 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-8">
							<h2 class="btn btn-warning btn-xl ttl d-block"> hören </h2>
						</div>
					.  <span class="tran"><br><small>리는 그릴도 하고 음악도 들었어.</small><br></span>Bis zum Abend hin haben wir 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-9">
							<h2 class="btn btn-warning btn-xl ttl d-block"> reden </h2>
						</div>
					, 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-10">
							<h2 class="btn btn-warning btn-xl ttl d-block"> tanzen </h2>
						</div>
					 und viel 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-11">
							<h2 class="btn btn-warning btn-xl ttl d-block"> lachen </h2>
						</div>
					.  <span class="tran"><br><small>저녁까지 이야기도 나누었고, 춤도 추고 많이 웃었어.</small><br></span>Als Geburtstagsgeschenk habe ich von allen Konzertkarten für das nächste Xavier Naidoo Konzert für die erste Reihe bekommen. <span class="tran"><br><small>모든 친구들에게서 첫 번째 줄에서 관람할 수 있는  자비어 나이두 콘서트 표를 생일선물로 받았어.</small><br></span> Einfach genial!  <span class="tran"><br><small>진짜 기발한 선물이었어.</small><br></span>Sie sind spät gegen 11Uhr nach Hause 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-12">
							<h2 class="btn btn-warning btn-xl ttl d-block"> gehen </h2>
						</div>
					, nur Leoni ist bei mir 
						<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-13">
							<h2 class="btn btn-warning btn-xl ttl d-block"> bleiben </h2>
						</div>
					 und hat übernachtet.  <span class="tran"><br><small>친구들은 (저녁) 11시경에 집으로 돌아갔고 레오니만 우리집에 머물면서 잠을 잤어.</small><br></span>Diesen Tag vergesse ich ganz bestimmt nicht so schnell.  <span class="tran"><br><small>나는 이날을 그렇게 빨리 잊지 않을 것 같아.</small><br></span>Wie war denn dein letzter Geburtstag? <span class="tran"><br><small>너의 최근 생일파티는 어땠어?</small><br></span> Erzähl doch mal!<span class="tran"><br><small>이야기 좀 해주렴!</small><br></span>				</div>
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
						"0": [1.9, 109.27],
						"1": [68.83, .592],
						"2": [77.685, .648],
						"3": [79.728, .629],
						"4": [33.025, .558],
						"5": [99.729, .705],
						"6": [21.94, .95],
						"7": [72.706, .691],
						"8": [97.322, .605],
						"9": [36.463, .59],
						"10": [78.536, .666],
						"11": [66.225, .561],
						"12": [24.037, .801],
						"13": [74.466, .482]
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
					// 정답확인
					$("#chk").on("click", function() {
						var na="";
						if($("#itms").find("button").length < 1) {
							$(".tran").show();

						// 정답 확인 div 상자 배경색 속성 없애기
						$(this).removeClass("btn-light ");

						$(".itm-lst").each(function() {
							if($(this).find(".btn")) {
								$(this).find(".btn").addClass("font-weight-bold text-success");
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
							var st = "쓰읍~ 다시 해 보실까요!";
							var cl = "primary";
						} else {
							var st = "좀 더 분발해 주세요";
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