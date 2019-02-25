<?php include "header.php"; ?>
	<body>
<?php
if(strpos($fn, "-")) {
	// include "r-inhalt.php";
} else {
	include "level0-inhalt.php";
}
?>	  

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="mt-5 display-4">Reihe 0</h1>
							<h2>Deutschland und die deutsch spache</h2>
							<p>
								독일과 독일어 말하기
							</p>
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
			</div>
			<div class="container">
				<div class="row">
<?php
// include "r-inhalt.php";
?>
				</div>
			</div>
			<div class="container">
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