<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="1">
					einkaufen<span class="tran"><br><small>구입하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="2">
					zuhören<span class="tran"><br><small>경청하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="3">
					gehören<span class="tran"><br><small>~에 속하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="4">
					aufhören<span class="tran"><br><small>끝나다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="5">
					besuchen<span class="tran"><br><small>방문하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="6">
					suchen<span class="tran"><br><small>찾다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="7">
					hören<span class="tran"><br><small>듣다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="8">
					aufstehen<span class="tran"><br><small>일어나다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="9">
					zählen<span class="tran"><br><small>세다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="10">
					bezahlen<span class="tran"><br><small>지불하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="11">
					stehen<span class="tran"><br><small>서 있다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="12">
					verkaufen<span class="tran"><br><small>판매하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="13">
					schlafen<span class="tran"><br><small>자다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="14">
					bestehen<span class="tran"><br><small>존재하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="15">
					einschlafen<span class="tran"><br><small>잠들다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans1 btn-lg btn-outline-dark so itm" id="16">
					kaufen<span class="tran"><br><small>구매하다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans2 btn-lg btn-outline-dark so itm" id="17">
					anrufen<span class="tran"><br><small>전화를 걸다</small></span>
					</button>
					<button type="button" class="mt-1 mx-1 btn ans3 btn-lg btn-outline-dark so itm" id="18">
					erzählen<span class="tran"><br><small>이야기하다</small></span>
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
					<h2>[ <small>단어를 알맞은 칸(einfache Verben, trennbare Verben, untrennbare Verben)에 넣으세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>einfache Verben</strong><br><small>단순동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>trennbare Verben</strong><br><small>분리동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>untrennbare Verben</strong><br><small>비분리동사</small></h2>&nbsp;
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
		<!-- 리스트 끝 -->
	</div>
</section>
<div id="marg"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/jquery-3.3.1.min.js"></script>
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
		<?php include "wahl.php";
		?> // 정답확인
		$("#chk").on("click", function() {
			var na="";
			if($("#itms").find("button").length < 1) {
				$(".tran").show();
				$(this).html("<h4>모든 답을 다 맞추셨네요!</h4>");
				$(this).removeClass("btn-light");
				$(this).addClass("btn-primary");
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
		// $("#0").show();
		var pan=new Array();
		// pan = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
		pan=[1, 12, 13, 16];
		for(var p=0;
		p < pan.length;
		p++) {
			var pani="#"+ pan[p];
			for(var n=0;
			n < $(".itm-lst").length;
			n++) {
				if($(pani).hasClass("ans"+(n+1))) {
					$(pani).insertAfter($("#lst-"+(n+1)+">h2"));
					$(pani).addClass("btn-block btn-light");
				}
			}
		}
	}
	);

</script>
<!-- ion.sound finished -->
<? } ?>
<?php include "footer.php"; ?>
</body>
</html>