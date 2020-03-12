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
				<div class="col-3 text-center my-1">angekommen</div>
				<div class="col-3 text-center my-1">angerufen</div>
				<div class="col-3 text-center my-1">angezogen</div>
				<div class="col-3 text-center my-1">anrufen</div>
				<div class="col-3 text-center my-1">bin</div>
				<div class="col-3 text-center my-1">bist</div>
				<div class="col-3 text-center my-1">funktioniert</div>
				<div class="col-3 text-center my-1">geblieben</div>
				<div class="col-3 text-center my-1">gefunden</div>
				<div class="col-3 text-center my-1">gegangen</div>
				<div class="col-3 text-center my-1">gegessen</div>
				<div class="col-3 text-center my-1">gesprochen</div>
				<div class="col-3 text-center my-1">getrunken</div>
				<div class="col-3 text-center my-1">habe</div>
				<div class="col-3 text-center my-1">hat</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					1. Musst du ihn noch <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-1">? Nein, ich habe schon <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-2">.
					<span class="tran">&nbsp;<small>그에게 전화해야 하니? – 아니, 이미 전화했어.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					2. Warum gehst du nicht mit uns ins Kino? Früher <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-3">du doch immer mit uns ins Kino <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-4">.
					<span class="tran">&nbsp;<small>왜 우리와 함께 영화관에 안가니? 전엔 늘 우리와 함께 영화관에 갔잖아.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					3. Suchst du immer noch die Tasche? Nein, ich <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-5">sie schon <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." placeholder="finden" id="qst-6">.
					<span class="tran">&nbsp;<small>여전히 가방을 찾고 있니? – 아니, 이미 찾았어.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					4. Wann kommst du denn an? Ich <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-7">schon gestern <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-8">.
					<span class="tran">&nbsp;<small>대체 언제 도착하니? – 어제 이미 도착했어.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					5. Will er sich nicht anziehen? Er <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-9">sich schon <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-10">.
					<span class="tran">&nbsp;<small>그가 옷을 안입으려고 하니? – 이미 입었어.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					6. Warum funktioniert der Apparat nicht? Gestern <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-11">er noch gut <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-12">.
					<span class="tran">&nbsp;<small>이 기계가 왜 작동이 안될까요? 어제는 잘 되었는데요.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					7. Er ist ein interessanter Gesprächspartner. Ich <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-13">lange mit ihm <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-14">.
					<span class="tran">&nbsp;<small>그는 재미있는 대화상대야. 그와 오랫동안 이야기했어.</small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					8. Ich <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-15">gestern Abend eine Pizza <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-16">und eine Cola <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-17">.
					<span class="tran">&nbsp;<small>난 어제 저녁에 피자를 먹고 콜라를 마셨어.     </small></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 border border-dark rounded m-4 p-3" style="line-height: 250%;">
					<div class="input-group">
					9. Wo <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-18">du denn so lange <input type="text" class="form-control q rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark col-sm-12 col-md-6 col-md col-lg" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." placeholder="bleiben" id="qst-19">. Ich war im Büro.
					<span class="tran">&nbsp;<small>대체 어디서 그렇게 오래 있었니? - 사무실에 있었어.</small></span>
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
		var an=["anrufen","angerufen","bist","gegangen","habe","gefunden","bin","angekommen","hat","angezogen","hat","funktioniert","habe","gesprochen","habe","gegessen","getrunken","bist","geblieben"];
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
			pan = [1,2];
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