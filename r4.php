<?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>   
<!--이정표 시작-->
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
<?php include "inhalt.php"; ?>    
        </div>
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
    <script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="./<?=$root ?>js/popper.min.js"></script> 
    <script src="./<?=$root ?>js/bootstrap.js"></script>
  </body>
</html>