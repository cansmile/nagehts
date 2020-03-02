<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl<small>선택지</small></div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="1">
					waren
					</button>
					<button type="button" class="mt-1 mx-1 btn ans8 btn-md btn-outline-dark itm so" id="2">
					hatte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans11 btn-md btn-outline-dark itm so" id="3">
					hatte
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-md btn-outline-dark itm so" id="4">
					warst
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="5">
					hatten
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-md btn-outline-dark itm so" id="6">
					waren
					</button>
					<button type="button" class="mt-1 mx-1 btn ans6 btn-md btn-outline-dark itm so" id="7">
					wart
					</button>
					<button type="button" class="mt-1 mx-1 btn ans9 btn-md btn-outline-dark itm so" id="8">
					hattest
					</button>
					<button type="button" class="mt-1 mx-1 btn ans7 btn-md btn-outline-dark itm so" id="9">
					waren
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="10">
					hatten
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-md btn-outline-dark itm so" id="11">
					war
					</button>
					<button type="button" class="mt-1 mx-1 btn ans4 btn-md btn-outline-dark itm so" id="12">
					war
					</button>
					<button type="button" class="mt-1 mx-1 btn ans12 btn-md btn-outline-dark itm so" id="13">
					hattet
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="14">
					hatten
					</button>
					<button type="button" class="mt-1 mx-1 btn ans5 btn-md btn-outline-dark itm so" id="15">
					waren
					</button>
					<button type="button" class="mt-1 mx-1 btn ans10 btn-md btn-outline-dark itm so" id="16">
					hatten
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
					</h2>
					<h3>[ <small>단어를 선택하고 알맞은 위치의 노란 단추를 누르세요.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col" class="border-0 text-center bg-secondary text-white">Personalpronomen</th>
								<th scope="col" class="border-0 text-center bg-dark text-white">ich</th>
								<th scope="col" class="border-0 text-center bg-secondary text-white">du</th>
								<th scope="col" class="border-0 text-center bg-dark text-white">Sie</th>
								<th scope="col" class="border-0 text-center bg-secondary text-white">er/sie/es</th>
								<th scope="col" class="border-0 text-center bg-dark text-white">wir</th>
								<th scope="col" class="border-0 text-center bg-secondary text-white">ihr</th>
								<th scope="col" class="border-0 text-center bg-dark text-white">Sie</th>
								<th scope="col" class="border-0 text-center bg-secondary text-white">sie</th>
							</tr>
							<tbody>
								<tr>
									<th scope="row" class="border-0 text-center bg-dark text-white">
										sein
									</th>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-1">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-white">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-2">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-white">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-4">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-5">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-white">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-6">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-7">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-white">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-3">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="border-0 text-center bg-secondary text-white">
										haben
									</th>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-8">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-light">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-9">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-light">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-11">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-light">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-12">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
									<td class="border-0 text-center bg-light">
										<div class="itm-lst 1itm d-inline-block px-0 m-0" style="min-width: 100px;" id="lst-10">
											<h2 class="btn btn-warning btn-xl ttl d-block"> ▼ </h2>
										</div>
									</td>
								</tr>
							</tbody>
						</thead>
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
		$(".tran").hide();
		$("#chk").hide();
		$(document).ready(function() {
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
					pan=[1,4,5,7,8,12];
					var il=$("#itms>.itm").length;
					for(var p=0;
					p < pan.length;
					p++) {
						var pani="#lst-"+ pan[p];
						$(".itm").each(function() {
							if($(this).hasClass("ans"+ pan[p])) {
								$("#"+ $(this).attr("id")).appendTo($("#lst-"+ pan[p]));
								$("#"+ $(this).attr("id")).addClass("btn-block font-weight-bold pl-0");
								$("#"+ $(this).attr("id")).addClass("border-0 text-center");
								$("#lst-"+ pan[p] + ">h2").remove();
								// $("#lst-"+ pan[p]).parent().find(".tran").show();
							}
						}
						)
					}

		}
		);
</script>
<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>