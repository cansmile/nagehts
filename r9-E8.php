<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken. <br>
					<small> 빈칸을 채우세요. </small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
 					<h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">

				<div class="col my-2 py-2">
					<span class="border border-dark p-1 px-2 rounded">uns</span>
					<span class="border border-dark p-1 px-2 rounded">wir</span>
					<span class="border border-dark p-1 px-2 rounded">Sie</span>
					<span class="border border-dark p-1 px-2 rounded">uns</span>
					<span class="border border-dark p-1 px-2 rounded">Ihnen</span>
				</div>
			</div>

 			<div class="row py-2 border border-dark my-2 rounded bg-light" style="line-height: 300%;">
				<div class="col-12">
					Sehr geehrter Herr Park,
					<span class="tran">&nbsp;<small>친애하는 박 선생님,</small>&nbsp;</span>
				</div>
				<div class="col-12 my-2">
					<div class="input-group">
						<input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1" style="min-width: 150px;" aria-label="." id="qst-1"> sind 20 Jahre verheiratet.<span class="tran">&nbsp;<small>저희가 결혼한 지 20주년이 되었습니다.</small>&nbsp;</span> Das möchten <input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1" style="min-width: 150px;" aria-label="." id="qst-2">gern mit <input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1 text-capitalize" style="min-width: 150px;" aria-label="." id="qst-3">und Ihrer Frau und unseren anderen Bekannten und Freunden feiern.<span class="tran">&nbsp;<small>저희는 당신과 당신의 아내, 우리의 다른 지인들과 친구들과 함께 축하 파티를 하고자 합니다.</small>&nbsp;</span> Die Feier ist am Montag, 16. 6., um 19.00 Uhr.<span class="tran">&nbsp;<small>파티는 6월 16일 월요일, 19시입니다.</small>&nbsp;</span> Haben<input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1 text-capitalize" style="min-width: 150px;" aria-label="." id="qst-4"> da Zeit?<span class="tran">&nbsp;<small>시간이 괜찮으신가요?</small>&nbsp;</span> Bitte antworten Sie <input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1" style="min-width: 150px;" aria-label="." id="qst-5">bis Mittwoch oder rufen Sie <input type="text" class="form-control q pl-0 col-1 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark mx-1" style="min-width: 150px;" aria-label="." id="qst-6">an.<span class="tran">&nbsp;<small>저희에게 수요일까지 답신을 주시거나 전화해주세요.</small>&nbsp;</span>
					</div>

				<div class="col-12  text-right">Mit freundlichen Grüßen<span class="tran">&nbsp;<small>마음을 담아,</small>&nbsp;</span><br>
						Ihre Christa und Wolfgang Haister
						<span class="tran">&nbsp;<small>당신의 크리스타와 볼프강 하이스터</small>&nbsp;</span></div>
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
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();
		$(".tran").hide();
		$(".ant").hide();
		var an=new Array();
		var an=["wir","wir","Ihnen","Sie","uns","uns"];
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
					name : "r9 E8",
					sprite : {
						"0": [.802, 43.390]
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
						if(obj.part > 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
					// 값 확인해보자, io값이 참이면 전체 검사
					function rfchk(th, io) {
						var q, qn, a, b, fl;
						q=th.val().length;
						qn=(th.attr("id").substr(4))-1;
						a=th.val();
						a=a.replace(/ /gi, "");
						if( !$.isArray(an[qn])) {
							// 1 인 경우
							if(io) {
								b=an[qn];
							}
							else {
								b=an[qn].substr(0, q);
							}
							b=b.replace(/ /gi, "");
							if(a==b) {
								return true;
							}
						}
						else {
							// 2 이상인 경우
							for(var fd=0;
							fd < an[qn].length;
							fd++) {
								if(io) {
									b=an[qn][fd];
								}
								else {
									b=an[qn][fd].substr(0, q);
								}
								b=b.replace(/ /gi, "");
								if(a==b) {
									return true;
								}
							}
						}
					}
					$(".q").on("keyup", function () {
						$(this).removeClass("bg-danger");
						$(this).removeClass("bg-success");
						$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
						$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");
						if(rfchk($(this))) {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-success");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
						}
						else {
							$(this).addClass("text-white font-weight-bold");
							$(this).addClass("bg-danger");
							$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
						}
						if( !$(this).val()) {
							$(this).removeClass("bg-danger");
							$(this).removeClass("bg-success");
							$(this).removeClass("text-white font-weight-bold");
						}
						if($(this).val()) {
							$("#ant-"+$(this).attr("id").substr(4)).show();
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						}
						else {
							$("#ant-"+$(this).attr("id").substr(4)).hide();
						}
					}
					);
					$(".q").on("focusin", function() {
						$("#ant-"+$(this).attr("id").substr(4)).show();
						if( !$("#ant-"+$(this).attr("id").substr(4)).text()) {
							$("#ant-"+$(this).attr("id").substr(4)).text($(this).val());
						}
						if($("#ant-"+$(this).attr("id").substr(4)).text()) {
							if(rfchk($(this))) {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-success");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
							}
							else {
								$(this).addClass("text-white font-weight-bold");
								$(this).addClass("bg-danger");
								$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
							}
						}
					}
					);
					$(".q").on("focusout", function() {
						$("#ant-"+$(this).attr("id").substr(4)).hide();
						if(rfchk($(this), true)) {
							$(this).addClass("bg-success");
							$(this).addClass("text-white");
						}
						else {
							$(this).addClass("bg-danger");
						}
						if($(this).val()) {
							if($(this).hasClass("bg-danger")) {
								ion.sound.play("Cartoon_Boing");
							}
							else if($(this).hasClass("bg-success")) {
								ion.sound.play("dingdongdang");
								$(this).prop("disabled", true);
							}
						}
						$(this).removeClass("bg-danger");
						if( !$(this).attr("disabled")) {
							$(this).removeClass("text-white font-weight-bold");
							$(this).removeClass("bg-success");
						}
					}
					)
					/* 입력하는 문자 확인(정답 표시 없음) 여기까지 */

					$("#chk").on("click", function() {
						var na="";
						var ri=0;
						var qst=$(".q").length;
						$(".q").each(function () {
							if(na !="") {
								na +=", ";
							}
							if($(this).val()=="") {
								na +=$(this).attr("id").substr(4, 1);
							}
						}
						);
						if($(this).attr("id")=="done") {}
						else if(na=="") {
							for(var i=0;
							i < an.length;
							i++) {
								var oran=$("#qst-"+(i+1)).val();
								if(rfchk($("#qst-"+(i+1)), true)) {
									$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2");
									$("#qst-"+(i+1)).removeClass("rounded-0");
								}
								else {
									$("#qst-"+(i+1)).val(oran);
									$("#qst-"+(i+1)).attr("disabled", true);
									$("#qst-"+(i+1)).addClass("bg-danger text-white rounded font-weight-bold p-1 px-2 ml-1");
									$("#qst-"+(i+1)).removeClass("rounded-0");

									if( !$.isArray(an[i])) {
										$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">"+an[i]+"</div>");
									}
									else {
										// 2 이상인 경우
										var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px;\">";
										for(var fd = (an[i].length-1);
										fd >= 0;
										fd--) {
											if(fd < (an[i].length-1)) {
												r = r + " / ";
											}
											r = r + an[i][fd];
										}
										r = r +"</div>";
										if($("span.sen").length > 0) {
											$("#qst-"+(i+1)).closest("span.sen").after(r);
										} else {
											$("#qst-"+(i+1)).after(r);
										}
									}

								}
								if($("#qst-"+(i+1)).hasClass("bg-success")) {
									ri++;
								}
							}
							// 정답 확인 div 상자 배경색 속성 없애기
							$(this).removeClass("btn-light ");

							var qa = $(".q").length; // 전체 문항 수
							var qr = $(".bg-success").length; // 맞춘 항목 수
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
							$(this).prop("disabled", true);
							$(".tran").show();
							$(".tran").addClass("font-weight-bold mx-2");
							$(this).attr("id", "done");
						}
						else {
							alert("모든 문제를 풀어주세요!");
							// alert(na+"번 문제를 풀어주세요!");
						}
						;
					}
					);

					var pan=new Array();
					// pan=[1,2,3,4,5,6,7,8,9,10];
					pan = [1];
					for(var p=0;
					p < pan.length;
					p++) {
						var pann="#qst-"+pan[p];
						$(pann).val(an[(pan[p]-1)]);
						$(pann).addClass("bg-success text-white font-weight-bold");
						$(pann).prop("disabled", true);
						// $(pann).closest("tr").find(".tran").show();
					}

					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 E8", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r9 E8", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r9 E8", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r9 E8", {
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
	<?php require "footer.php"; ?>
</body>
</html>