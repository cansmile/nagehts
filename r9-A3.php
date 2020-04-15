<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken. <br>
					<small> 빈칸을 채우세요. </small>
					</h2>
 					<h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
				</div>
			</div>
			<div class="row my-2 py-2">
				<div class="col">
					<span class="border border-dark rounded p-2">das Jahr, <strong>–e</strong></span>
					<span class="border border-dark rounded p-2">der Monat, <strong>–e</strong></span>
					<span class="border border-dark rounded p-2">die Woche, <strong>–n</strong></span>
					<span class="border border-dark rounded p-2">der Tag, <strong>–e</strong></span>
					<span class="border border-dark rounded p-2">die Stunde, <strong>–n</strong></span>
					<span class="border border-dark rounded p-2">die Minute, <strong>–n</strong></span>
					<span class="border border-dark rounded p-2">die Sekunde, <strong>–n</strong></span>
					<span class="border border-dark rounded p-2">die Jahreszeit, –<strong>en</strong></span>
				</div>
			</div>
			<div class="row">
				<div class="col-6 my-2">
					<div class="input-group">
					Ein <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-1">
					hat 12<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-2">
					</div>
				</div>
				<div class="col-6 my-2">
					<div class="input-group">
					Ein <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-3">
					hat 4<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-4">
					</div>
				</div>
				<div class="col-6 my-2">
					<div class="input-group">
					Eine <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-5">
					hat 7<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-6">
					</div>
				</div>
				<div class="col-6 my-2">
					<div class="input-group">
					Ein <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-7">
					hat 24<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-8">
					</div>
				</div>
				<div class="col-6 my-2">
					<div class="input-group">
					Eine <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-9">
					hat 60<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-10">
					</div>
				</div>
				<div class="col-6 my-2">
					<div class="input-group">
					Eine <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-11">
					hat 60<input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark" style="position: relative; top: -6px;" aria-label="." id="qst-12">
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


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogroupnomove.js"></script>
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
	<script>
		$(".tran").hide();
		$(".ant").hide();
		var an=new Array();
		var an=["Jahr","Monate","Monat","Wochen","Woche","Tage","Tag","Stunden","Stunde","Minuten","Minute","Sekunden"];
		$(document).ready(function() {
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
			pan = [1,3,5,7,9,11];
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
	<?php require "footer.php"; ?>
</body>
</html>