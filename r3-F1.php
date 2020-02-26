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
							<h2> Sprechen Sie über den Stammbaum.
								<br><small>아래 가계도에 대해 이야기해보세요.</small>
							</h2>
							<div class="col-lg-12 mb-4 mt-2 text-center">
						<h3>[ <small>정답을 입력하면 입력란 위로 초록색 확인 문장이 나타나고, 오답이 될 때는 확인 문장이 붉게 변합니다.</small> ]</h3>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2" scope="col"><img src="./images/Reihe 3/Reihe-3-F1.png" alt="Stammbaum" style="max-width: 100%; height: auto;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="my-1 text-center"><span class="wd">Robert Holm</span><span class="wd">Maria Holm</span><span class="wd">Birgit Mark</span><span class="wd">Anton Mark</span><span class="wd">Silvia Mark</span><span class="wd">Hans Holm</span><span class="wd">Georg Holm</span><span class="wd">Sabine Holm</span><span class="wd">Franz Scholl</span><span class="wd">Nora</span><span class="wd">Alex</span><span class="wd">Johanna</span><span class="wd">Manuel</span></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<table class="table">
							<tbody>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-1"></div>
										<span class="sen"><div class="input-group">
												1.1 Wer bin ich? 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-1">
											</div></span>
										<span class="tran"><small>나는 누구인가요? 노라</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-2"></div>
										<span class="sen"><div class="input-group">
												1. Meine Eltern heißen
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon2" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-2">
												.
											</div></span>
										<span class="tran"><small>저의 부모님은 질비아 마크와 한스 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-3"></div>
										<span class="sen"><div class="input-group">
												2. Meine Großeltern heißen 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-3">
												.
											</div></span>
										<span class="tran"><small>저의 조부모님은 마리아 홀름과 로버트 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-a"></div>
										<span class="sen"><div class="input-group">
												3. Mein Bruder heißt Alex.
												<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-a"> -->
											</div></span>
										<span class="tran"><small>저의 남동생은 알렉스에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-b"></div>
										<span class="sen"><div class="input-group">
												4. Mein Vater hat eine Schwester.
												<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-b"> -->
											</div></span>
										<span class="tran"><small>저의 아버지는 여동생이 한 분 있어요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-4"></div>
										<span class="sen"><div class="input-group">
												Sie heißt 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon4" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-4">
												.
											</div></span>
										<span class="tran"><small>그녀는 자비네 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-5"></div>
										<span class="sen"><div class="input-group">
												1.2 Wer bin ich? 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon5" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-5">
											</div></span>
										<span class="tran"><small>나는 누구인가요? 로버트 홀름</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-c"></div>
										<span class="sen"><div class="input-group">
												1. Meine Frau heißt Maria Holm.
												<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-c"> -->
											</div></span>
										<span class="tran"><small>저의 아내는 마리아 홀름이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-6"></div>
										<span class="sen"><div class="input-group">
												2. Meine Kinder heißen 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon6" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-6">
												.
											</div></span>
										<span class="tran"><small>제 아이들은 한스,게오르그와 자비네이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-d"></div>
										<span class="sen"><div class="input-group">
												3. Mein Sohn, Hans Holm hat eine Tochter.
												<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-d"> -->
											</div></span>
										<span class="tran"><small>제 아들, 한스 홀름은 딸 하나가 있어요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-7"></div>
										<span class="sen"><div class="input-group">
												Sie heißt
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon7" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-7">
												.
											</div></span>
										<span class="tran"><small>그녀는 노라에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-e"></div>
										<span class="sen"><div class="input-group">
												4. Meine Tochter ist mit ihm verheiratet.
												<!-- <input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon3" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-e"> -->
											</div></span>
										<span class="tran"><small>저의 딸은 결혼했어요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant" id="ant-8"></div>
										<span class="sen"><div class="input-group">
												Er heißt
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon8" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-8">
												.
											</div></span>
										<span class="tran"><small>그는 프란쯔 숄이에요.</small></span>
									</td>
								</tr>
								<tr>
									<td class="border-top-0 border-bottom-0">
										<div class="ant-" id="ant-9"></div>
										<span class="sen"><div class="input-group">
												5. Meine Schwiegertochter heißt 
												<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon9" class="form-control q border-left-0 border-top-0 border-right-0 rounded-0 mx-1" style="posetion: relative; top: -6px;" id="qst-9">
												.
											</div></span>
										<span class="tran"><small>저의 며느리는 질비아 마크에요.</small></span>
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
				<div class="row">
					<div class="col">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
											HV
										</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
											❚❚
										</button>
										<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?php echo($color); ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="1" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großvater</span><span class="wd">Opa</span><span class="wd"><small>할아버지</small></span><button type="button" id="2" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großmutter</span><span class="wd">Oma</span><span class="wd"><small>할머니</small></span><button type="button" id="3" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Großeltern</span><span class="wd"><small>조부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="4" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Vater</span><span class="wd"><small>아버지</small></span><button type="button" id="5" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Mutter</span><span class="wd"><small>어머니</small></span><button type="button" id="6" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Eltern</span><span class="wd"><small>부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="7" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Sohn</span><span class="wd"><small>아들</small></span><button type="button" id="8" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Tochter</span><span class="wd"><small>딸</small></span><button type="button" id="9" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Kinder</span><span class="wd"><small>자녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="10" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Bruder</span><span class="wd"><small>형제</small></span><button type="button" id="11" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwester</span><span class="wd"><small>자매</small></span><button type="button" id="12" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Geschwister</span><span class="wd"><small>형제자매</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="13" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkelsohn</span><span class="wd"><small>손자</small></span><button type="button" id="14" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkeltochter</span><span class="wd"><small>손녀</small></span><button type="button" id="15" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Enkelkinder</span><span class="wd"><small>손자손녀</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="16" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwager</span><span class="wd"><small>형부, 처남, 매부, 매형</small></span><button type="button" id="17" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwägerin</span><span class="wd"><small>형수, 처제, 올케 …</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="18" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Onkel</span><span class="wd"><small>삼촌, 숙부</small></span><button type="button" id="19" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Tante</span><span class="wd"><small>이모, 고모, 숙모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="20" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Mann</span><span class="wd"><small>남편</small></span><button type="button" id="21" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Frau</span><span class="wd"><small>아내</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="22" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegervater</span><span class="wd"><small>장인. 시부</small></span><button type="button" id="23" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegermutter</span><span class="wd"><small>장모, 시모</small></span><button type="button" id="24" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegereltern</span><span class="wd"><small>처부모, 시부모</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="25" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegersohn</span><span class="wd"><small>사위</small></span><button type="button" id="26" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Schwiegertochter</span><span class="wd"><small>며느리</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="27" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Neffe</span<span class="wd"><small>조카</small></span><button type="button" id="28" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Nichte</span><span class="wd"><small>조카딸</small></span></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="my-1 text-center"><button type="button" id="29" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Cousin</span><span class="wd"><small>사촌 형제</small></span><button type="button" id="30" class="so btn btn-outline-primary btn-sm mr-1">▶</button><span class="wd">Cousine</span><span class="wd"><small>사촌 자매</small></span></div>
									</td>
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
		<script src="./js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$(".ant").hide();
			$("span.wd").closest("td").addClass("mx-0 my-0 py-0 px-0");
			$("span.wd").addClass("mx-1 my-1 py-1 px-1 d-inline-block");
			var an = new Array();
			var an = ["Nora",["Silvia Mark und Hans Holm","Hans Holm und Silvia Mark"],["Maria Holm und Robert Holm","Robert Holm und Maria Holm"],"Sabine Holm","Robert Holm",["Hans, Georg und Sabine","Hans, Sabine und Georg","Georg, Hans und Sabine","Georg, Sabine und Hans","Sabine, Georg und Hans","Sabine, Hans und Georg"],"Nora","Franz Scholl","Silvia Mark"];

			$(document).ready(function() {
/* 입력하는 문자 확인(정답 표시 없음) 여기부터 */
// 값 확인해보자, io값이 참이면 전체 검사
function rfchk(th,io) {
	var q, qn, a, b, fl;
	q = th.val().length;
	qn = (th.attr("id").substr(4))-1;
	a = th.val();
	a = a.replace(/ /gi, "");
	if(!$.isArray(an[qn])) {
		// 1 인 경우 
		if(io) {
			b = an[qn];
		} else {
			b = an[qn].substr(0,q);
		}
		b = b.replace(/ /gi, "");

		if(a == b) {
			return true;
		}

	} else {
		// 2 이상인 경우
		for(var fd = 0; fd < an[qn].length; fd++) {
			if(io) {
				b = an[qn][fd];
			} else {
				b = an[qn][fd].substr(0,q);
			}
			b = b.replace(/ /gi, "");
			
			if(a == b) {
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
			);
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
					name : "r3 F1",
					sprite : {
						"0": [0, 131],
						"1": [7.95, 5.77],
						"2": [15.62, 5.03],
						"3": [22.85, 2.24],
						"4": [26.94, 1.64],
						"5": [30.71, 1.15],
						"6": [34.54, 1.58],
						"7": [38.33, 1.74],
						"8": [41.67, 1.3],
						"9": [46.11, 1.33],
						"10": [50.16, 1.8],
						"11": [54.46, 1.66],
						"12": [57.82, 2.07],
						"13": [62.13, 1.79],
						"14": [65.86, 1.84],
						"15": [70, 2.07],
						"16": [75.03, 2],
						"17": [78.8, 1.57],
						"18": [82.93, 1.27],
						"19": [86.43, 1.34],
						"20": [90.74, 1.33],
						"21": [94.411, 1.78],
						"22": [98.54, 1.95],
						"23": [102.54, 1.7],
						"24": [106.86, 1.53],
						"25": [110.28, 2.02],
						"26": [114.09, 2.2],
						"27": [118.52, 1.17],
						"28": [121.94, 1],
						"29": [125.42, 1.17],
						"30": [128.82, 1.6]
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
						if(obj.part > 0) {
							$("#"+obj.part).html("▶");
						}
						if(hm[hmn] > 1) {
							$("#"+hmn).closest("tr").find(".tran").show();
						}
					}
				}
				, ready_callback: function () {
					$(".so").on("click", function () {
						if($(this).attr("id").substr(-2)=="_p") {
							// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 F1", {
								part: "0"
							}
							);
							$("#0").show();
							$(this).hide();
						}
						else if($(this).html()=="▶") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.play("r3 F1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("❚❚");
						}
						else if($(this).html()=="❚❚") {
							// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
							ion.sound.pause("r3 F1", {
								part: $(this).attr("id")
							}
							);
							$(this).html("▶");
						}
						else {
							// _p 붙어 있지 않으면 id 그대로 재생
							ion.sound.play("r3 F1", {
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
								var st = "쓰읍~ 다시 해 보실까요";
								var cl = "primary";
							} else {
								var st = "좀 더 분발해 주세요";
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
				$("#0").show();
				$(".alert").hide();


				}
			}
			);
		});
			

		</script>
		<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
	</body>
</html>