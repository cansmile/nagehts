<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>

		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="text-center col-12">
							<h1 class="display-4">A. Guten Tag!</h1>
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
<?php  include "inhalt.php"; ?>
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