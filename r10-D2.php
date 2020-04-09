<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2> Ergänzen Sie die Lücken. <br>
					<small> 빈칸을 채우세요. </small>
					[ <small>정답을 입력하면 입력란이 초록색으로 표시되고,<br> 오답이 될 때는 입력란이 붉게 표시됩니다.</small> ]
					<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
					<h3>[ <small><button type="button" class="btn disabled btn-sm btn-<?=$color ?>">HV</button> 버튼 또는 <button type="button" class="so btn btn-sm btn-outline-secondary disabled">▶</button> 버튼을 눌러 듣기를 2번 완료하면 문장의 번역이 나옵니다.</small> ]</h3>
				</div>
			</div>
			<div class="row my-2 py-2">
				<div class="col">
					<span class="border border-dark rounded p-2">ausgepackt</span>
					<span class="border border-dark rounded p-2">besichtigt</span>
					<span class="border border-dark rounded p-2">gefahren</span>
					<span class="border border-dark rounded p-2">gegessen</span>
					<span class="border border-dark rounded p-2">gekauft</span>
					<span class="border border-dark rounded p-2">gemacht</span>
					<span class="border border-dark rounded p-2">gesetzt</span>
					<span class="border border-dark rounded p-2">getrunken</span>
					<span class="border border-dark rounded p-2">kennengelernt</span>
					<span class="border border-dark rounded p-2">verpasst</span>
				</div>
			</div>
			<div class="row">
				<div class="col-12 border border-dark rounded p-2">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th colspan="2" scope="col" class="display-4 bg-light text-center"><small>Mein Urlaub in Dresden</small></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="line-height: 250%;">
									<div class="input-group d-inline">
										Hallo, ich bin gut in Dresden angekommen.<span class="tran"><br><small>안녕, 난 드레스덴에 잘 도착했어.</small><br></span> <span class="sen">Auf dem Incheon Flughafen war es so voll von Leuten beim Check-in, dass ich beinah mein Flugzeug <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-1"> habe.</span><span class="tran"><br><small>인천공항에서 체크인할 때 사람들로 꽉 차서 거의 비행기를 놓칠 뻔 했어.</small><br></span> Aber, Gott sei Dank, gab es 1 Stunde-Verspätung!<span class="tran"><br><small>하지만 다행히도 한 시간 지연되었어!.</small><br></span> Ich bin zuerst nach Frankfurt und dann anschließend nach Dresden geflogen.<span class="tran"><br><small>난 먼저 프랑크푸르트로 간 다음 이어서 드레스덴으로 갔어.</small><br></span> <span class="sen">Nach der Ankunft in Dresden bin ich mit dem Taxi ins Hotel <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-2">.</span><span class="tran"><br><small>드레스덴에 도착 후 택시를 타고 호텔로 갔어.</small><br></span>
									</div>
								</td>
							</tr>
							<td style="line-height: 250%;">
								<div class="input-group d-inline">
									Dort habe ich meinen Koffer <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-3"> und bin gleich mit der Tram in die Stadtmitte gefahren und habe dort den Zwinger, die Frauenkirche und vieles mehr besucht.<span class="tran"><br><small>거기서 짐을 풀고 나서 바로 트램을 타고 시내로 가서 츠빙어, 프라우엔교회, 그리고 여러 곳을 더 방문했어.</small><br></span> Besonders habe ich in der Gemäldegalerie Alte Meister am Zwinger die „Sixtinische Madonna” von Raffael <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-4">.<span class="tran"><br><small>특히 츠빙어 옆 알테 마이스터 회화관에서 라파엘의 “시스틴의 성모”를 관람했어.</small><br></span> Das war einfach wunderbar.<span class="tran"><br><small>그것은 정말 굉장했어.</small><br></span> Danach habe ich mit dem Bus eine Stadtrundfahrt <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-5">.<span class="tran"><br><small>그 후에 버스로 시내관광투어를 했어.</small><br></span> Die Stadt war wirklich toll!<span class="tran"><br><small>도시가 정말 멋졌어!</small><br></span> Du kennst mich ja!<span class="tran"><br><small>너도 알잖아!</small><br></span> Ich habe in der Altmarkt Galerie Geschenke für meine Familie und auch für dich <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-6">.<span class="tran"><br><small>알트마르크트 갤러리에서는 가족과 너한테 줄 선물을 샀어.</small><br></span> Dann habe ich mich in ein Café <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-7">.<span class="tran"><br><small>그런 다음 카페에 앉아 있었어.</small><br></span> Dort habe ich Kaffee <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-8"> und den berühmten Kuchen, Eierschecke <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-9">.<span class="tran"><br><small>거기서 커피를 마시고 유명한 케이크인 아이어슈에크를 먹었어.</small><br></span> Einfach köstlich.<span class="tran"><br><small>정말 맛있었어.</small><br></span>
								</div>
							</td>
						</tr>
						<td style="line-height: 250%;">
							<div class="input-group d-inline">
								Stell dir vor!<span class="tran"><br><small>상상해봐!</small><br></span> Ich habe da einen Jungen aus Österreich auf dem Konzert <input type="text" class="form-control q pl-0 col-4 rounded-0 border-left-0 border-right-0 border-top-0 mx-1 px-2 py-1 text-center border-dark d-inline-block" style="position: relative; top: -6px; max-width: 150px; min-width: 100px;" aria-label="." id="qst-10">.<span class="tran"><br><small>난 오스트리아 출신 젊은 남자를 콘서트에서 알게 되었어.</small><br></span> Er ist seit 3 Tagen in Dresden und hört gern Musik!<span class="tran"><br><small>그는 드레스덴에 머문지 3일 되었고 음악 듣는 걸 좋아해!</small><br></span> Wir sind zusammen ins Musikcafé gegangen, und haben zusammen Musik gehört und getanzt.<span class="tran"><br><small>우리는 함께 음악카페에 가서 함께 음악을 듣고 춤을 추었어.</small><br></span> Ich habe auch heute Abend mit ihm eine Verabredung!<span class="tran"><br><small>오늘도 저녁에 그와 약속이 있단다!</small><br></span> Wir wollen zusammen in die Oper gehen.<span class="tran"><br><small>우린 함께 오페라에 갈거야.</small><br></span> Ich schreibe dir bald wieder.<span class="tran"><br><small>곧 다시 쓸게.</small><br></span> Muss schon wieder los!<span class="tran"><br><small>벌써 다시 나가 봐야 해!</small><br></span>
							</div>
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
<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./<?=$root ?>js/popper.min.js"></script>
<script src="./<?=$root ?>js/bootstrap.js"></script>
<script src="./<?=$root ?>js/taptogroupnomove.js"></script>
<!-- interact.min.js -->
<script src="./<?=$root ?>js/ion.sound.min.js"></script>
<script>
	$("#0").hide();
	$("#0_p").hide();
	$(".tran").hide();
	$(".ant").hide();
	var an=new Array();
	var an=["verpasst", "gefahren", "ausgepackt", "besichtigt", "gemacht", "gekauft", "gesetzt", "getrunken", "gegessen", "kennengelernt"];
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
				name : "r10 D2",
				sprite : {
					"0": [0, 180.676]
				}
			}
			, {
				name: "dingdongdang",
					path: "<?=$root ?>sounds/",
			}
			, {
				name: "Cartoon_Boing",
					path: "<?=$root ?>sounds/",
			}
			],
			path : "<?=$root ?>sounds/Reihe 10/",
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
						$("#"+hmn).closest(".table").find(".tran").show();
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
						ion.sound.pause("r10 D2", {
							part: "0"
						}
						);
						$("#0").show();
						$(this).hide();
					}
					else if($(this).html()=="▶") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.play("r10 D2", {
							part: $(this).attr("id")
						}
						);
						$(this).html("❚❚");
					}
					else if($(this).html()=="❚❚") {
						// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
						ion.sound.pause("r10 D2", {
							part: $(this).attr("id")
						}
						);
						$(this).html("▶");
					}
					else {
						// _p 붙어 있지 않으면 id 그대로 재생
						ion.sound.play("r10 D2", {
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
									$("#qst-"+(i+1)).after("<div class=\"d-block text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold\" style=\"position: relative; top: -6px; max-width: 150px; min-width: 100px; max-width: 100px;\">"+an[i]+"</div>");
								}
								else {
									// 2 이상인 경우
									var r="<div class=\"text-dark bg-warning rounded p-1 m-1 px-2 font-weight-bold d-inline-block\" style=\"position: relative; top: -6px; max-width: 150px; min-width: 100px; max-width: 100px;\">";
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
				var pan=new Array();
				// pan=[1,2,3,4,5,6,7,8,9,10];
				pan=[];
				for(var p=0;
				p < pan.length;
				p++) {
					var pann="#qst-"+pan[p];
					$(pann).val(an[(pan[p]-1)]);
					$(pann).addClass("bg-success text-white font-weight-bold");
					$(pann).prop("disabled", true);
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
<?php include "footer.php"; ?>
</body>
</html>