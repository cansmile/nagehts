<?php include "header.php"; ?>
  <body>
<?php
$tl = array("r2-Woher kommen Sie!"=>"A. Woher kommen Sie?","r2-Ich bin Koreanerin"=>"B. Ich bin Koreanerin.","r2-Welche Sprachen sprechen Sie"=>"C. Welche Sprachen sprechen Sie?","r2-Wo liegt das Land"=>"D. Wo liegt das Land?","r2-Uebungen"=>"E. Übungen","r2-Grammatik und Wendungen"=>"F. Grammatik und Wendungen");
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
				<h1 class="mt-5 display-4">Reihe 2</h1>
				<h2>Woher kommen Sie?</h2>
				<p>&nbsp;</p>
				<p>자기 소개·높임말과 낮춤말·숫자 세기·만남과 작별인사·이름·안부 묻기</p>
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
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mt-2 text-center">
            <p>&nbsp;</p>
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