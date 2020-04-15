<?php require "header.php"; ?>
	<body>
<?php require "nav.php"; ?>
<style>
	.video-container {position:relative; padding-bottom:56.25%; height:0; overflow:hidden;}
	.video-container iframe,.video-container object,.video-container embed {position:absolute; top:0; left:0; width:100%; height:100%;}
</style>
		<section>
			<div class="container">
							<!-- 고르는 아이템들 -->
				<div class="row">
					<div class="col-12 text-center align-middle display-4 p-5 m-1 border border-dark rounded"><small>
					<div class="bg-light text-secondary p-1 px-2 m-1 rounded">Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
					<div class="bg-secondary text-white p-1 px-2 m-1 rounded">Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
					<div class="bg-light text-secondary p-1 px-2 m-1 rounded">Augen, Ohren und Nase und Mund.</div>
					<div class="bg-secondary text-white p-1 px-2 m-1 rounded">Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
					</small></div>
					<div class="col-12"><div class="video-container rounded"><object width="320" height="240"><param name="movie" value="https://www.youtube.com/v/vyTNuVCdUzw?version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/v/vyTNuVCdUzw?version=3" type="application/x-shockwave-flash" width="320" height="240" allowscriptaccess="always" allowfullscreen="true"></embed></object></div></div>
				</div>

		</div>
	</section>



		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./<?php echo($root); ?>js/popper.min.js"></script>
		<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
		<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
		<!-- interact.min.js -->
		<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
		<script>
			$(".tran").hide();

			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "dingdongdang",
					}, {
						name : "Cartoon_Boing",
					}],
					path : "<?php echo($root); ?>sounds/",
					preload : true,
					volume : 1.0,
					multiplay: false,
	});


				$(".o").on("click", function() {
					ion.sound.play("dingdongdang");
				});

				$(".x").on("click", function() {
					ion.sound.play("Cartoon_Boing");
				});

				$("[data-toggle='popover']").popover({
					delay : {
						'hide' : 1000
					},
					container : "body"
				});

				$(".pop").click(function () {
					// 가장 먼저 지문에 'an' 넣기
					if (!$(this).siblings().hasClass("an")) {
						$(this).addClass("an");
						$(this).addClass("btn-warning");
						$(this).parent().children().removeClass("btn-light");
					};

					// 문제 풀이 정도 업데이트
					var perc = Math.round(($(".an").length / $(".q").length) * 100);
					$(".progress>.bar").attr("width", perc + "%;");

				});

			// 팝업 내용 사라지기
			$(".pop").popover().click(function() {
				setTimeout(function() {
					$(".pop").popover('hide');
				}, 500);
			});


			// 정답확인
			$("#chk").on("click", function() {
				if($(this).attr("id") == "chk") {
					if ($(".an").length < $(".q").length) {
						var na = "";
						$(".q").each(function() {
							if (!$(this).find("div").hasClass("an")) {
								if (na != "") {
									na += ", ";
								}
								na += $(this).attr("id").substr(4);
							};
						});

						alert(na + "번 문제를 풀어주세요.");
					} else {
						$(".tran").show();
						$(this).attr("id","done");
						$(".pop").each(function() {
							$(this).removeClass("btn-info");

							if ($(this).hasClass("o") && $(this).hasClass("an")) {
								$(this).removeClass("btn-warning");
								$(this).addClass("btn-success");
							} else if ($(this).hasClass("o")) {
								$(this).addClass("btn-primary");
							} else if ($(this).hasClass("an")) {
								$(this).addClass("btn-warning");
							} else {
								$(this).addClass("btn-light");
							};


						});

						$(this).removeClass("btn-light ");
						if ($(".btn-success").length < Math.ceil($(".q").length/2)) {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞히셨네요!</h4>");
							$(this).addClass("btn-danger");

						} else if ($(".btn-success").length == $(".q").length) {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞히셨네요!<br>혹시 독일인이세요?</h4>");
							$(this).addClass("btn-success");

						} else {
							$(this).html('<h4>' + $(".q").length + "문제 중 " + $(".btn-success").length + "개를 맞히셨네요!<br>훌륭합니다!</h4>");
							$(this).addClass("btn-warning");

						};
					};
				}
			});
		// $("#0").show();
		// $(".alert").hide();
		$("#qst-1>div.o").addClass("an");
		$("#qst-1>div.o").addClass("btn-warning");
		$("#qst-1>div.o").removeClass("btn-light");

});

		</script>
		<!-- ion.sound finished -->
<?php require "footer.php"; ?>
	</body>
</html>