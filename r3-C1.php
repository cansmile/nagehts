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
					<h2> Hören Sie und sprechen Sie Nach.<br>
					<small>듣고 따라하세요.</small>
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
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row" rowspan="12" class="text-center align-middle"><img src="./images/Reihe 3/Reihe-3-C1-1.png" style="max-width: 240px; height: auto;"></th>
								<td width="25"><button type="button" id="1" class="so btn btn-outline-primary">▶</button></td>
								<td>Wer ist das?<span class="tran"><br><small>이 사람들은 누구니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="so btn btn-outline-danger">▶</button></td>
								<td>Das ist meine Familie.<span class="tran"><br><small>우리 가족이야.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich komme aus einer Großfamilie.<span class="tran"><br><small>우리는 대가족이야.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="4" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich habe einen Vater, eine Mutter und viele Geschwister.<span class="tran"><br><small>아버지, 어머니 그리고 많은 형제자매가 있어.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-primary">▶</button></td>
								<td>Das ist schön! Wie viele Geschwister hast du?<span class="tran"><br><small>좋겠다! 형제자매는 몇 명니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-danger">▶</button></td>
								<td>Ich habe sechs Geschwister.<span class="tran"><br><small>6명의 형제자매가 있어.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
								<td>Und wie viele Geschwister hast du?<span class="tran"><br><small>그러면 넌 형제자매가 몇명이야? </small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="8" class="so btn btn-outline-primary">▶</button></td>
								<td>Ich habe eine Schwester und einen Bruder.<span class="tran"><br><small>누나와 형이 있어.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="9" class="so btn btn-outline-primary">▶</button></td>
								<td>Und wer ist das?<span class="tran"><br><small>그럼 이 사람은 누구니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="10" class="so btn btn-outline-primary">▶</button></td>
								<td>Kommt er aus Japan?<span class="tran"><br><small>일본인이니?</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="11" class="so btn btn-outline-danger">▶</button></td>
								<td>Ah, das ist mein Schwager.<span class="tran"><br><small>아, 매형이에요.</small></span></td>
							</tr>
							<tr>
								<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
								<td>Er kommt aus Korea.<span class="tran"><br><small>그는 한국인이야.</small></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<thead>
							<tr>
								<th class="border-0" scope="col">unbestimmter Artikel</th>
								<th class="border-0 text-primary" scope="col">m</th>
								<th class="border-0 text-danger" scope="col">f</th>
								<th class="border-0 text-purple" scope="col">n</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="border-0" scope="row">Nominativ <small>주격</small></th>
								<td class="border-0 text-primary">ei<strong>n</strong></td>
								<td class="border-0 text-danger">ei<strong>ne</strong></td>
								<td class="border-0 text-purple">ei<strong>n</strong></td>
							</tr>
							<tr>
								<th class="border-0" scope="row">Akkusativ <small>목적격</small></th>
								<td class="border-0 text-primary">ei<strong>nen</strong></td>
								<td class="border-0 text-danger">ei<strong>ne</strong></td>
								<td class="border-0 text-purple">ei<strong>n</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<table class="table">
						<tbody>
							<tr>
								<td>ich</td>
								<td>hab<strong>e</strong></td>
							</tr>
							<tr>
								<td>du</td>
								<td>ha<strong>st</strong></td>
							</tr>
							<tr>
								<td>Sie(<small>당신</small>)</td>
								<td>hab<strong>en</strong></td>
							</tr>
							<tr>
								<td>er/sie(<small>그녀</small>)/es</td>
								<td>ha<strong>t</strong></td>
							</tr>
							<tr>
								<td>sie(<small>그들</small>)</td>
								<td>hab<strong>en</strong></td>
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
		$(".ant").hide();
		var an=new Array();
		var an=["24", "22"];
		$(document).ready(function() {
			$(".q").on("keyup", function () {
				var q=$(this).val().length;
				var qn=($(this).attr("id").substr(4))-1;
				var a=$(this).val();
				var b=an[qn].substr(0, q);
				a=a.replace(/ /gi, "");
				b=b.replace(/ /gi, "");
				$(this).removeClass("bg-danger");
				$(this).removeClass("bg-success");
				if(a==b) {
					$(this).addClass("text-white text-weight-bold");
					$(this).addClass("bg-success");
				}
				else {
					if((qn+1)==1) {
						b="vierundzwanzig";
						b=b.substr(0, q);
						b=b.replace(/ /gi, "");
						if(a==b) {
							$(this).addClass("bg-success");
							$(this).addClass("text-white text-weight-bold");
						}
						else {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-danger");
						}
					}
					else if((qn+1)==2) {
						b="zweiundzwanzig";
						b=b.substr(0, q);
						b=b.replace(/ /gi, "");
						if(a==b) {
							$(this).addClass("bg-success");
							$(this).addClass("text-white text-weight-bold");
						}
						else {
							$(this).addClass("text-white text-weight-bold");
							$(this).addClass("bg-danger");
						}
					}
					else {
						$(this).addClass("text-white text-weight-bold");
						$(this).addClass("bg-danger");
					}
				}
				if( !$(this).val()) {
					$(this).removeClass("bg-danger");
					$(this).removeClass("bg-success");
					$(this).removeClass("text-white text-weight-bold");
				}
			}
			);
			$(".q").on("focusout", function() {
				var qn=($(this).attr("id").substr(4))-1;
				var a=an[qn];
				var b=$(this).val();
				if(a==b) {
					$(this).addClass("bg-success");
					$(this).prop("disabled", true);
					$(this).addClass("text-weight-bold");
					$(this).closest("tr").find(".tran").show();
					$(this).closest("tr").find(".ant").show();
				}
				else {
					if((qn+1)==1) {
						a="vierundzwanzig";
						if(a==b) {
							$(this).addClass("bg-success");
							$(this).prop("disabled", true);
							$(this).addClass("text-weight-bold");
							$(this).closest("tr").find(".tran").show();
							$(this).closest("tr").find(".ant").show();
							$(this).closest("tr").find(".ant").text("스물네");
						}
						else {
							$(this).addClass("bg-danger");
						}
					}
					else if((qn+1)==2) {
						a="zweiundzwanzig";
						if(a==b) {
							$(this).addClass("bg-success");
							$(this).prop("disabled", true);
							$(this).addClass("text-weight-bold");
							$(this).closest("tr").find(".tran").show();
							$(this).closest("tr").find(".ant").show();
							$(this).closest("tr").find(".ant").text("스물두");
						}
						else {
							$(this).addClass("bg-danger");
						}
					}
					else {
						$(this).addClass("bg-danger");
					}
				}
				if($(this).val()) {
					if($(this).hasClass("bg-danger")) {
						ion.sound.play("Cartoon_Boing");
					}
					else if($(this).hasClass("bg-success")) {
						ion.sound.play("dingdongdang");
					}
				}
				$(this).removeClass("text-white text-weight-bold");
				$(this).removeClass("bg-danger");
				$(this).removeClass("bg-success");
				if($("input:disabled").length==$(".q").length) {
					$("input:disabled").addClass("bg-success text-white");
				}
			}
			) // 각 문장 재생 횟수 초기화
			var hm=new Array(), sen=new Array();
			for(i=0;
			i < $(".so").length;
			i++) {
				hm[i]=0;
				sen[i]=0;
			}
			ion.sound( {
				sounds : [ {
					name : "r3 C1",
					sprite : {
						"0": [8, 50],
							"1": [13.6, 1.4],
							"2": [16.4, 2.1],
							"3": [18.8, 3],
							"4": [22.3, 4.9],
							"5": [29.6, 4.3],
							"6": [35.8, 2],
							"7": [37.9, 2.7],
							"8": [42.3, 3.7],
							"9": [46, 1.6],
							"10": [48, 2],
							"11": [53.6, 2.4],
							"12": [56, 2]
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
				path : "sounds/Reihe 3/",
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
						$("#"+obj.part).html("▶");
						if(hm[hmn] > 1) {
							$("#"+obj.part).closest("tr").find(".tran").show();
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
							ion.sound.pause("r3 C1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 C1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 C1", {
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