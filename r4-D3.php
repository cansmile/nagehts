<?php require "header.php"; ?>
<body>
<?php require "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Hören Sie und ergänzen Sie die Lücken. <br>
					<small> 듣고 빈칸을 채우세요. </small>
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다. 음성을 듣고 정답을 입력하세요.</small> ]</h3>
					<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td rowspan="5" class="align-middle" width="240"><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-D3-1.png" alt="Küche" style="max-width: 240px; height: auto;"></td>
								<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td>Das ist eine Küche.
									<span class="tran"><br><small>이것은 부엌입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="2" class="so btn btn-outline-primary">▶</button></td>
								<td>Das da ist eine Einbauküche.
									<span class="tran"><br><small>여기 이것은 빌트인 부엌입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="3" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div class="ant" id="ant-1"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-1" style="position: relative; top: -6px; max-width: 100px;">
										Küche ist komplett.
									</div>
									<span class="tran"><br><small>이 부엌은 완비되어 있습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="4" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div class="ant" id="ant-2"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-2" style="position: relative; top: -6px; max-width: 100px;">
										kostet 999 Euro.
									</div>
									<span class="tran"><br><small>가격은 999 유로입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div class="ant" id="ant-3"></div>
									<div class="input-group">
										Sie ist eine
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-3" style="position: relative; top: -6px; max-width: 100px;">
										Küche.
									</div>
									<span class="tran"><br><small>이것은 완비된 부엌입니다.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td rowspan="5" class="align-middle" width="240"><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-D3-2.png" alt="Wohnzimmer" style="max-width: 240px; height: auto;"></td>
								<td width="25"><button type="button" id="6" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="ant" id="ant-4"></div>
									<div class="input-group">
										Das ist
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-4" style="position: relative; top: -6px; max-width: 100px;">
										Wohnzimmer.
									</div>
									<span class="tran"><br><small>이것은 거실입니다</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="7" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="ant" id="ant-5"></div>
									<div class="input-group">
										Das
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-5" style="position: relative; top: -6px; max-width: 100px;">
										ist ein Designer-Tisch.
									</div>
									<span class="tran"><br><small>여기 이것은 디자이너 테이블입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="8" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="ant" id="ant-6"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-6" style="position: relative; top: -6px; max-width: 100px;">
										Designer-Tisch ist bildschön.
									</div>
									<span class="tran"><br><small>이 디자이너 테이블은 아름답습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="9" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="ant" id="ant-7"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-7" style="position: relative; top: -6px; max-width: 100px;">
										kostet 599 Euro.
									</div>
									<span class="tran"><br><small>가격은 599 유로입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="10" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div class="ant" id="ant-8"></div>
									<div class="input-group">
										Er ist ein bildschön
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1 pl-0" aria-label="." id="qst-8" style="position: relative; top: -6px; max-width: 100px;">
										Tisch.
									</div>
									<span class="tran"><br><small>그것은 아름다운 테이블입니다.
									</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td rowspan="5" class="align-middle" width="240"><img src="./<?php echo($root); ?>images/Reihe 4/Reihe-4-D3-3.png" alt="Schlafzimmer" style="max-width: 240px; height: auto;"></td>
								<td width="25"><button type="button" id="11" class="so btn btn-outline-info">▶</button></td>
								<td>
									<div class="ant" id="ant-9"></div>
									<div class="input-group">
										Das ist
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-9" style="position: relative; top: -6px; max-width: 100px;">
										Schlafzimmer.
									</div>
									<span class="tran"><br><small>이것은 침실입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="12" class="so btn btn-outline-info">▶</button></td>
								<td>
									<div class="ant" id="ant-10"></div>
									<div class="input-group">
										Das da ist
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-10" style="position: relative; top: -6px; max-width: 100px;">
										Bett.
									</div>
									<span class="tran"><br><small>여기 이것은 침대입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="13" class="so btn btn-outline-info">▶</button></td>
								<td>
									<div class="ant" id="ant-11"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-11" style="position: relative; top: -6px; max-width: 100px;">
										Bett ist originell.
									</div>
									<span class="tran"><br><small>이 침대는 독창적입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="14" class="so btn btn-outline-info">▶</button></td>
								<td>
									<div class="ant" id="ant-12"></div>
									<div class="input-group">
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1" aria-label="." id="qst-12" style="position: relative; top: -6px; max-width: 100px;">
										ist 499 Euro.
									</div>
									<span class="tran"><br><small>가격은 499 유로입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td width="25"><button type="button" id="15" class="so btn btn-outline-info">▶</button></td>
								<td>
									<div class="ant" id="ant-13"></div>
									<div class="input-group">
										Es ist ein originell
										<input type="text" class="form-control q border border-left-0 border border-right-0 border-top-0 rounded-0 mx-1 pl-0" aria-label="." id="qst-13" style="position: relative; top: -6px; max-width: 100px;">
										Bett.
									</div>
									<span class="tran"><br><small>그것은 독창적인 침대입니다.</small></span>
								</td>
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
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/howler.core.js"></script>
	<!-- 맞고 틀리는지 소리 -->
	<?php require_once("./{$root}oxsound.php"); ?>
	<script>
	$("#0").hide();
	$(".ant").hide();
	$(".tran").hide();
	var an=new Array();
	var an=["Die", "Sie", "komplette", "ein", "da", "Der", "Er", "er", "ein", "ein", "Das", "Es", "es"];
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
			src: [ "./<?php echo($root); ?>sounds/Reihe 4/r4 D3.mp3"],
			sprite: {
				"0": [2209, 86566],
				"1": [14250, 1822],
				"2": [18252, 2890],
				"3": [23024, 1877],
				"4": [27236, 3251],
				"5": [33213, 2741],
				"6": [42433, 1905],
				"7": [45923, 2709],
				"8": [50593, 2699],
				"9": [55804, 3178],
				"10": [61532, 2278],
				"11": [69838, 1852],
				"12": [73225, 2040],
				"13": [76974, 2219],
				"14": [81234, 2828],
				"15": [86628, 2041]
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
					if($(this).val().length > 0) {
						var wid=(($(this).val().length)+2)*2+"em";
						$(this).css("width", wid);
					}
					else {
						$(this).css("width", ((8+2)*2+"em"));
					}
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
							x.play();
						}
						else if($(this).hasClass("bg-success")) {
							o.play();
							$(this).prop("disabled", true);
						}
					}
					$(this).removeClass("bg-danger");
					if( !$(this).attr("disabled")) {
						$(this).removeClass("text-white font-weight-bold");
						$(this).removeClass("bg-success");
					}
				}
				);
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
								$("#qst-"+(i+1)).addClass("bg-success text-white rounded font-weight-bold p-1 px-2 ml-1");
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
									var r="<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 100px;\">";
									for(var fd=(an[i].length-1);
									fd >=0;
									fd--) {
										if(fd < (an[i].length-1)) {
											r=r + " / ";
										}
										r=r + an[i][fd];
									}
									r=r +"</div>";
									if($("span.sen").length > 0) {
										$("#qst-"+(i+1)).closest("span.sen").after(r);
									}
									else {
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
						var qa=$(".q").length; // 전체 문항 수
						var qr=$(".bg-success").length; // 맞춘 항목 수
						var pe=(qr / qa) * 100; // 정답 비율
						var tcl="white"; // 기본 문자색
						// 분류 기준은 100%, 80%, 60%, 40%
						if(pe > 99) {
							var st="원어민이세요?";
							var cl="lime";
							var tcl="dark";
						}
						else if(pe > 74) {
							var st="어! 좀 하시는데요~^^";
							var cl="success";
						}
						else if(pe > 49) {
							var st="쓰읍~ 다시 해 보실까요?";
							var cl="primary";
						}
						else {
							var st="좀 더 분발해 주세요~";
							var cl="danger";
						}
						$(this).addClass("btn-"+ cl + " text-"+ tcl);
						$(this).html("<h4>"+ qa + "문제 중 "+ qr + "개를 맞히셨네요!<br>"+ st + "</h4>");
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

				$(".so").on("click", function() {
					var t=$(this);
					var ti=t.attr("id");
					if(($("div#last").text()==""|| t.text()=="❚❚") && !t.hasClass(".itm-lst")) {
						$("#last").text(ti);
						t.text("■");
						nagehts.seek();
						nagehts.play(ti);
						sen[ti]++;
						last=ti;
						$("#cnt-"+ti).text(sen[ti]);
					}
					else if(last==ti && nagehts.playing($("div#last").text())) {
						$("#last").text("");
						t.html(pa[ti]);
						nagehts.pause();
						sen[ti]--;
						$("#cnt-"+ti).text(sen[ti]);
					}
				}
				);
				$("#0").show();
				$(".alert").hide();
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