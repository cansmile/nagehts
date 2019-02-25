<?php include "header.php"; ?>
	<body>
<?php include "r1-inhalt.php"; ?>

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">A. Guten Tag!<?php
							if(strpos($fn,"-")) {
								$dash = strpos($fn,"-");
								$r = substr($fn,1,($dash-1));
								echo($r);
							}
								?></h1>
							<h2>
								좋은 아침이에요!
							</h2>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--이정표 시작-->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Inhalt</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<a href="r1-A2.php" class="text-dark"><img class="rounded-circle" alt="Ordnen Sie zu." style="width: 140px; height: 140px;" src="images/1.png" data-holder-rendered="true"> <h3>Ordnen Sie zu.</h3>
						<p>
							그림과 알맞은 표현을 연결해보세요.<br />(<small>교재 <strong>A2</strong> 문제</small>)
						</p></a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<a href="r1-A3.php" class="text-dark"><img class="rounded-circle" alt="Ergänzen Sie." style="width: 140px; height: 140px;" src="images/2.png" data-holder-rendered="true"> <h3>Ergänzen Sie.</h3>
						<p>
							말 풍선에 알맞은 표현을 채우세요.<br />(<small>교재 <strong>A3</strong> 문제</small>)
						</p></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<p>
							&nbsp;
						</p>
					</div>
				</div>
			</div>
		</section>
		<!--이정표 끝-->

<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
	</body>
</html>