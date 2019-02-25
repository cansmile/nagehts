<!-- 넵바 시작 -->	  
<?php
// header 에서 정의된 변수 [ $fn 은 파일명만, $bn 은 확장자 포함 ]
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";

// 각 과별 중단원 파일명과 제목
$tl = array(
	array("r0-Alphabet"=>"A. Alphabet","r0-Quiz"=>"B. Quiz","r0-Zuordnung"=>"C. Zuordnung"),
	array("r1-Guten Tag!"=>"A. Guten Tag!","r1-Wie heissen Sie"=>"B. Wie heißen Sie?","r1-Wie geht es Ihnen"=>"C. Wie geht es Ihnen?","r1-Wer ist Hyun Kim"=>"D. Wer ist Hyun Kim?","r1-Zahlen(1-10)"=>"F. Zahlen(1~10)","r1-Uebungen"=>"G. Übungen","r1-Grammatik und Wendungen"=>"H. Grammatik und Wendungen"),
	array("r2-Woher kommen Sie!"=>"A. Woher kommen Sie?","r2-Ich bin Koreanerin"=>"B. Ich bin Koreanerin.","r2-Welche Sprachen sprechen Sie"=>"C. Welche Sprachen sprechen Sie?","r2-Wo liegt das Land"=>"D. Wo liegt das Land?","r2-Uebungen"=>"E. Übungen","r2-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
	array("r3-Wer ist das.php"=>"A. Wer ist das?","r3-Wie alt ist er.php"=>"B. Wie alt ist er?","r3-Wie viele Geschwister hast du.php"=>"C. Wie viele Geschwister hast du?","r3-Was sind Sie von Beruf.php"=>"D. Was sind Sie von Beruf?","r3-Visitenkarten.php"=>"E. Visitenkarten","r3-Uebungen.php"=>"F. Übungen","r3-Grammatik und Wendungen.php"=>"G. Grammatik und Wendungen"),
	array("r4-Wohnen.php"=>"A. Wohnen","r4-Im Zimmer.php"=>"B. Im Zimmer","r4-Was ist das.php"=>"C. Was ist das?","r4-Wie ist das.php"=>"D. Wie ist das?","r4-Uebungen.php"=>"E. Übungen","r4-Grammatik und Wendungen.php"=>"F. Grammatik und Wendungen"),
	array("r5-Essen und Trinken.php"=>"A. Essen und Trinken","r5-Was isst du gern und was trinkst du gern.php"=>"B. Was isst du gern und was trinkst du gern?","r5-Was isst und trinkt er/sie.php"=>"C. Was isst und trinkt er/sie?","r5-Im Restaurant. Was bekommen Sie.php"=>"D. Im Restaurant. Was bekommen Sie?","r5-Waehrend des Essens.php"=>"E. Während des Essens","r5-Was bezahlen Sie.php"=>"F. Was bezahlen Sie?","r5-Uebungen.php"=>"G. Übungen","r5-Grammatik und Wendungen.php"=>"H. Grammatik und Wendungen"),
	array("r6-Was machst du gern.php"=>"A. Was machst du gern?","r6-Wie spaet ist es.php"=>"B. Wie spät ist es?","r6-Wann hast du Deutschunterricht.php"=>"C. Wann hast du Deutschunterricht?","r6-Tagesablauf.php"=>"D. Tagesablauf","r6-Uebungen.php"=>"E. Übungen","r6-Grammatik und Wendungen.php"=>"F. Grammatik und Wendungen"),
	array("r7-Wochenende; Was haben Sie am Wochenende vor.php"=>"A. Wochenende: Was haben Sie am Wochenende vor?","r7-Verabredung. Hast du heute Abend Zeit.php"=>"B. Verabredung. Hast du heute Abend Zeit?","r7-Anweisungen.php"=>"C. Anweisungen: Was kann man, was darf man nicht?","r7-Uebungen.php"=>"D. Übungen","r7-Grammatik und Wendungen.php"=>"E. Grammatik und Wendungen"),
	array("r8-Koerper und Sport.php"=>"A. Körper und Sport","r8-Koerperteile und Taetigkeiten.php"=>"B. Körperteile und Tätigkeiten","r8-Krankheiten und Schmerzen.php"=>"C. Krankheiten und Schmerzen","r8-Beim Arzt.php"=>"D. Beim Arzt","r8-Uebungen.php"=>"E. Übungen","r8-Grammatik und Wendungen.php"=>"F. Grammatik und Wendungen"),
	array("r9-Feste in Deutschland.php"=>"A. Feste in Deutschland","r9-Geburtstagsfeier.php"=>"B. Geburtstagsfeier","r9-Geschenke. Wer schenkt wem was.php"=>"C. Geschenke. Wer schenkt wem was?","r9-Einladungskarte.php"=>"D. Einladungskarte","r9-Uebungen.php"=>"E. Übungen","r9-Grammatik und Wendungen.php"=>"F. Grammatik und Wendungen"),
	array("r10-Stadtplan.php"=>"A. Stadtplan","r10-Nach dem Weg fragen.php"=>"B. Nach dem Weg fragen","r10-Sehenswuerdigkeiten in Dresden.php"=>"C. Sehenswürdigkeiten in Dresden","r10-Urlaub in Dresden.php"=>"D. Urlaub in Dresden","r10-Uebungen.php"=>"E. Übungen","r10-Grammatik und Wendungen.php"=>"F. Grammatik und Wendungen")
);

// 페이지가 어디인지 판단
if(strlen($fn) < 4) {
	$rl = $fn;
	$rt = "Reihe ".substr($fn,1);
} else if($fn == "Deutschland") {
	$rl = $fn;
	$rt = "독일은";
} else {
	$dash = strpos($fn,"-");
}
?>
    <div class="dropdown-divider"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href=".\<?php echo($rl); ?>.php"><?php echo($rt); ?> - Inhalt</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php if($fn == "Deutschland") { ?>
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
  <?php } ?>
    </nav>
    <!-- 넵바 끝 -->

