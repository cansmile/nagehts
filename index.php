<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p>
								&nbsp;
							</p>
							<img src="images/Na geht's title.png" width="50%" class="mx-auto" alt=""/>
							<p>
								&nbsp;
							</p>
							<h1>Willkommen auf der PUTS Lern-Website!<br /><small>PUTS 학습 웹사이트에 오신 것을 환영합니다!</small></h1>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Inhalt</h2>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row">
<?php  include "inhalt.php"; ?>
				</div>
			</div>
		</section>
		
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
	</body>
</html>