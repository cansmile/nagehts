<?php include "header.php"; ?>
	<body>
<?php
$tl = array("r1-Guten Tag!"=>"A. Guten Tag!","r1-Wie heissen Sie"=>"B. Wie heißen Sie?","r1-Wie geht es Ihnen"=>"C. Wie geht es Ihnen?","r1-Wer ist Hyun Kim"=>"D. Wer ist Hyun Kim?","r1-Zahlen(1-10)"=>"F. Zahlen(1~10)","r1-Uebungen"=>"G. Übungen","r1-Grammatik und Wendungen"=>"H. Grammatik und Wendungen");
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
							<h1 class="mt-5 display-4">Reihe 1</h1>
							<h2> Wie heißen Sie? </h2>
							<p>
								이름이 어떻게 되시나요?
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
include "r-inhalt.php";
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