<!-- 넵바 시작 -->	  
<?php
$fn = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";
$tl = array("r1-Guten Tag!"=>"A. Guten Tag!","r1-Wie heissen Sie"=>"B. Wie heißen Sie?","r1-Wie geht es Ihnen"=>"C. Wie geht es Ihnen?","r1-Wer ist Hyun Kim"=>"D. Wer ist Hyun Kim?","r1-Zahlen(1-10)"=>"F. Zahlen(1~10)","r1-Uebungen"=>"G. Übungen","r1-Grammatik und Wendungen"=>"H. Grammatik und Wendungen");
?>
    <div class="dropdown-divider"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href=".\r1.php">Reihe 1 - Inhalt</a>
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

