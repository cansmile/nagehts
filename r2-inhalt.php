<!-- 넵바 시작 -->	  
<?php
$fn = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";
$tl = array("r2-Woher kommen Sie!"=>"A. Woher kommen Sie?","r2-Ich bin Koreanerin"=>"B. Ich bin Koreanerin.","r2-Welche Sprachen sprechen Sie"=>"C. Welche Sprachen sprechen Sie?","r2-Wo liegt das Land"=>"D. Wo liegt das Land?","r2-Uebungen"=>"E. Übungen","r2-Grammatik und Wendungen"=>"F. Grammatik und Wendungen");
?>
    <div class="dropdown-divider"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href=".\r2.php">Reihe 2 - Inhalt</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle<?php if($fn{2} == "-") { echo($a); } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo($tl[$fn]); ?> </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              for($i = 0; $i < sizeof($tl); $i++) {
                echo("<a class=\"dropdown-item");
                if($fn == array_keys($tl)[$i]) {
                  echo(" active");
                }
                echo("\" href=\"".array_keys($tl)[$i].".php\"> ".$tl[array_keys($tl)[$i]]." </a> ");
              }
              ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=".\index.php">처음</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=".\Deutschland.php">독일은...</a>
          </li>
        </ul>

      </div>
    </nav>
    <!-- 넵바 끝 -->

