<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
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
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다. 음성을 듣고 정답을 입력하세요.</small> ]</h3>
					<h3>[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" colspan="2">Bestellung im Restaurant<span class="tran"><small>&nbsp;주문</small></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" id="1" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-1"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Herr Ober,
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q text-center col-4 border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-1">
											bitte.</div>
									</div>
									<span class="tran"><small>여기 메뉴판 좀 주세요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="2" class="so btn btn-outline-success">▶</button></td>
								<td>Bitte schön!<span class="tran"><small>&nbsp;<br>여기있습니다.</small></td>
							</tr>
							<tr>
								<td><button type="button" id="3" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-2"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Wir möchten
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control col-3 q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-2">
											.</div>
									</div>
									<span class="tran"><small>주문할게요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="4" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-3"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Ja natürlich! 
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control col-4 q text-right pr-0 border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-3">
											?</div>
									</div>
									<span class="tran"><small>네, 알겠습니다. 무엇을 드시겠습니까?</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="5" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-4"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Ich nehme
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="pr-0 form-control col-6 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-4">
											.</div>
									</div>
									<span class="tran"><small>전 피자 하나와 샐러드 하나요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="6" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-5"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Und was möchten Sie 
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control col-3 q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-5">
											?</div>
									</div>
									<span class="tran"><small>그리고 음료는요?</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="7" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-6"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q col-6 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-6">
											.</div>
									</div>
									<span class="tran"><small>콜라 한 잔 주세요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="8" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-7"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Und Sie?
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q text-center col-6 border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-7">
											?</div>
									</div>
									<span class="tran"><small>이 쪽 분은 무엇을 드시겠습니까?</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="9" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div id="ant-8"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">
											Ich esse
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control col-4 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-8">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<div id="ant-9"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">und trinke
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control col-3 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-9">
											.</div>
									</div>
									<span class="tran"><small>전 스테이크 하나와 와인 한 잔이요.</small></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" colspan="2">Bezahlung im Restaurant<span class="tran"><small>&nbsp;계산</small></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" id="10" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-10"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Wir möchten bitte
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon10" class="form-control col-4 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-10">
											.</div>
									</div>
									<span class="tran"><small>계산하겠습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="11" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-11"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Bitte schön.
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon11" class="form-control col-6 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-11">
											?</div>
									</div>
									<span class="tran"><small>네. 같이 하시겠어요, 아니면 따로 하시겠어요?</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="12" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-12"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon12" class="form-control col-3 q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-12">
											, bitte.</div>
									</div>
									<span class="tran"><small>따로요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="13" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-13"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">und
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon13" class="form-control col-5 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-13">
											?</div>
									</div>
									<span class="tran"><small>그럼 무엇을 계산하시나요?</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="14" class="so btn btn-outline-danger">▶</button></td>
								<td>
									<div id="ant-14"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon14" class="form-control col-6 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-14">
										</div>
									</div>
									<span class="tran"><small>피자, 샐러드,</small></span>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<div id="ant-15"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Und
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon14" class="form-control col-6 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-15">
											.</div>
									</div>
									<span class="tran"><small>그리고 콜라요.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="15" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-16"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon15" class="form-control col-5 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-16">
											9,70 €.</div>
									</div>
									<span class="tran"><small>9유로 70 입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="16" class="so btn btn-outline-danger">▶</button></td>
								<td>
									11 €, bitte.
									<span class="tran"><small>&nbsp;<br>11유로 드리겠습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="17" class="so btn btn-outline-success">▶</button></td>
								<td>
									Vielen Dank!
									<span class="tran"><small>&nbsp;<br>감사합니다!</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="18" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div id="ant-17"></div><div id="ant-18"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Und ich bezahle
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon18" class="form-control q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-17">
											und</div>
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon18" class="form-control q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-18">
											.</div>
									</div>
									<span class="tran"><small>그리고 전 스테이크와 와인을 계산하겠습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="19" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-19"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon19" class="form-control col-2 q text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-19">
											,</div>
									</div>
									<span class="tran"><small>스태이크 하나,</small></span>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<div id="ant-20"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">und
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon19" class="form-control q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-20">
											...,</div>
									</div>
									<span class="tran"><small>그리고 와인 한 잔…,</small></span>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<div id="ant-21"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon19" class="form-control q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-21">
											18,50 €.</div>
									</div>
									<span class="tran"><small>18유로 50입니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="20" class="so btn btn-outline-primary">▶</button></td>
								<td>
									<div id="ant-22"></div>
									<div class="input-group">
										<div class="sen d-inline-flex">Hier, bitte. 20 €.
											<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon20" class="form-control q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-22">
											!</div>
									</div>
									<span class="tran"><small>여기 있습니다. 20유로. 됐습니다.</small></span>
								</td>
							</tr>
							<tr>
								<td><button type="button" id="21" class="so btn btn-outline-success">▶</button></td>
								<td>
									<div id="ant-23"></div>
									<div class="input-group">
										<div class="sen d-inline-flex"><input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon21" class="form-control q pr-0 text-center border-left-0 border-top-0 border-right-0 rounded-0 ml-1" style="position: relative; top: -6px;" id="qst-23">
											!</div>
									</div>
									<span class="tran"><small>감사합니다!</small></span>
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
		var an=["die Speisekarte", "gern bestellen", "Was möchten Sie", "eine Pizza und einen Salat", "trinken", "Ich trinke eine Cola", "Was bekommen Sie", "ein Steak", "einen Wein", "bezahlen", "Zusammen oder getrennt", "Getrennt", "was bezahlen Sie", "Die Pizza, den Salat", "die Cola", "Das macht", "das Steak", "den Wein", "Ein Steak", "einen Wein", "das macht", "Stimmt so", "Danke schön"];
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
					name : "r5 G16",
					sprite : {
						"0": [4.6, 95.38],
							"1": [5.57, 3.87],
							"2": [11.54, 1.19],
							"3": [13.4, 2.12],
							"4": [17.19, 2.79],
							"5": [21.41, 3.37],
							"6": [26.48, 2.1],
							"7": [29.51, 1.9],
							"8": [33.81, 4.3],
							"9": [40, 3.3],
							"10": [45.32, 3.1],
							"11": [48.84, 4.36],
							"12": [53.92, 1.85],
							"13": [56.9, 1.6],
							"14": [60.43, 3.3],
							"15": [66.82, 2.6],
							"16": [70.31, 1.54],
							"17": [72.75, 1.4],
							"18": [76.62, 3.2],
							"19": [82.62, 5.9],
							"20": [90.68, 4.6],
							"21": [97.27, 1.9]
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
				path : "sounds/Reihe 5/",
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
							ion.sound.pause("r5 G16", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r5 G16", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r5 G16", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r5 G16", {
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
					// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23"];
					pan=["1", "2", "4", "6", "8"];
					for(var p=0;
					p < pan.length;
					p++) {
						var pann="#qst-"+pan[p];
						$(pann).val(an[(pan[p]-1)]);
						$(pann).prop("disabled", true);
						$(pann).removeClass("rounded-0");
						$(pann).addClass("bg-success text-white font-weight-bold");
						// $(pann).closest("tr").find(".tran").show();
					}
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