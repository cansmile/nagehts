<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken. <br>
					<small> 빈칸을 채우세요. </small>
					[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h2>
				</div>
			</div>
			<div class="row border border-dark rounded">
				<div class="col-12 my-2" style="line-height: 250%;">
					<ul>
						<li>einen Stadtrundgang machen: die Semperoper und dann den Zwinger besichtigen.<span class="tran"><br><small>시내구경: 잼퍼오퍼 관람 후 츠빙어를 구경</small></span></li>
						<li>am Nachmittag : einen Ausflug in die Sächsische Schweiz machen (es gibt schönes Panorama.<span class="tran"><br><small>오후에: 작센 스위스로 소풍(경치가 아름다움)</small></span></li>
						<li>am Abend: auf dem Orgelkonzert in der Frauenkirche sein…<span class="tran"><br><small>저녁에: 프라우엔교회에서 열린 오르간콘서트에 참석</small></span></li>
					</ul>
				</div>
			</div>
			<div class="row py-2 my-2">
				<div class="col">
					<span class="border border-dark rounded p-2">besichtigt</span>
					<span class="border border-dark rounded p-2">gab</span>
					<span class="border border-dark rounded p-2">gemacht</span>
					<span class="border border-dark rounded p-2">war</span>
				</div>
			</div>
			<div class="row">
				<div class="col-12 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
						Sonntag 16 Juli, Am Sonntag, den 16. Juli habe ich einen Stadtrundgang <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px; min-width: 50px;" aria-label="." id="qst-1">.<span class="tran">&nbsp;<small>7월 16일 일요일에 시내구경을 했다.</small>&nbsp;</span> Ich habe die Semperoper und dann den Zwinger <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px; min-width: 50px;" aria-label="." id="qst-2">.<span class="tran">&nbsp;<small>잼퍼오퍼와 츠빙어를 관람하였다.</small>&nbsp;</span> Am Nachmittag habe ich einen Ausflug in die Sächsische Schweiz <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px; min-width: 50px;" aria-label="." id="qst-3">.<span class="tran">&nbsp;<small>오후에는 작센의 스위스로 소풍을 갔다.</small>&nbsp;</span> Dort <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px; min-width: 50px;" aria-label="." id="qst-4"> es ein schönes Panorama.<span class="tran">&nbsp;<small>그곳은 경치가 아름다웠다.</small>&nbsp;</span> Am Abend <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 100px; min-width: 50px;" aria-label="." id="qst-5"> ich auf dem Orgelkonzert in der Frauenkirche.<span class="tran">&nbsp;<small>저녁엔 프라우엔교회에서 열린 오르간콘서트에 참석했다…</small>&nbsp;</span>
					
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
		</div>
	</section>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./js/ion.sound.min.js"></script>
	<script>
		$("#0").hide();
		$("#0_p").hide();

		$(".tran").hide();
		$(".ant").hide();
		var an=new Array();
		var an=["gemacht","besichtigt","gemacht","gab","war"];
		$(document).ready(function() {
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
								$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 100px;\">"+an[i]+"</div>");
							}
							else {
								// 2 이상인 경우
								var r = "<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 100px;\">";
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
			pan = [];
			for(var p=0;
			p < pan.length;
			p++) {
				var pann="#qst-"+pan[p];
				$(pann).val(an[(pan[p]-1)]);
				$(pann).addClass("bg-success text-white font-weight-bold");
				$(pann).prop("disabled", true);
				// $(pann).closest("tr").find(".tran").show();
			}			

		}
		);

	</script>
	<!-- ion.sound finished -->
	<? } ?>
	<?php include "footer.php"; ?>
</body>
</html>