<!-- 넵바 시작 -->	  
<?php
// header 에서 정의된 변수 [ $fn 은 파일명만, $bn 은 확장자 포함 ]
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";

// 각 과별 대단원 파일명과 제목
$itl = array("D" => "Deutschland", 0 => "Deutschland und die deutsch spache", 1 => "Wie heißen Sie?", 2 => "Woher kommen Sie?", 3 => "Wer ist das?", 4 => "In meiner Wohnung", 5 => "Essen und Trinken", 6 => "Was machst du heute?", 7 => "Was hast du am Wochnende vor?", 8 => "Was fehlt Ihnen?", 9 => "Feste! Feste!", 10 => "Wie komme ich zur Bank?");

$itl_k = array("D" => "독일은…", 0 => "독일과 독일어 말하기", 1 => "이름이 어떻게 되시나요?", 2 => "어디서 오셨나요?", 3 => "이 분은 누구인가요?", 4 => "나의 집에서", 5 => "먹고 마시기", 6 => "오늘 뭐하니?", 7 => "주말에 뭐 하니?", 8 => "어디가 아픈가요?", 9 => "축제! 축제!", 10 => "은행에 어떻게 가나요?");

// 각 과별 중단원 파일명과 제목
$tl = array(
array("r0-Alphabet"=>"A. Alphabet","r0-Quiz-"=>"B. Quiz","r0-Zuordnung"=>"C. Zuordnung"),
array("r1-Guten Tag!"=> "A. Guten Tag!","r1-Wie heissen Sie"=>"B. Wie heißen Sie?","r1-Wie geht es Ihnen"=>"C. Wie geht es Ihnen?","r1-Wer ist Hyun Kim"=>"D. Wer ist Hyun Kim?","r1-Zahlen(1-10)"=>"F. Zahlen(1~10)","r1-Uebungen"=>"G. Übungen","r1-Grammatik und Wendungen"=>"H. Grammatik und Wendungen"),
array("r2-Woher kommen Sie!"=>"A. Woher kommen Sie?","r2-Ich bin Koreanerin"=>"B. Ich bin Koreanerin.","r2-Welche Sprachen sprechen Sie"=>"C. Welche Sprachen sprechen Sie?","r2-Wo liegt das Land"=>"D. Wo liegt das Land?","r2-Uebungen"=>"E. Übungen","r2-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
array("r3-Wer ist das"=>"A. Wer ist das?","r3-Wie alt ist er"=>"B. Wie alt ist er?","r3-Wie viele Geschwister hast du"=>"C. Wie viele Geschwister hast du?","r3-Was sind Sie von Beruf"=>"D. Was sind Sie von Beruf?","r3-Visitenkarten"=>"E. Visitenkarten","r3-Uebungen"=>"F. Übungen","r3-Grammatik und Wendungen"=>"G. Grammatik und Wendungen"),
array("r4-Wohnen"=>"A. Wohnen","r4-Im Zimmer"=>"B. Im Zimmer","r4-Was ist das"=>"C. Was ist das?","r4-Wie ist das"=>"D. Wie ist das?","r4-Uebungen"=>"E. Übungen","r4-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
array("r5-Essen und Trinken"=>"A. Essen und Trinken","r5-Was isst du gern und was trinkst du gern"=>"B. Was isst du gern und was trinkst du gern?","r5-Was isst und trinkt er/sie"=>"C. Was isst und trinkt er/sie?","r5-Im Restaurant. Was bekommen Sie"=>"D. Im Restaurant. Was bekommen Sie?","r5-Waehrend des Essens"=>"E. Während des Essens","r5-Was bezahlen Sie"=>"F. Was bezahlen Sie?","r5-Uebungen"=>"G. Übungen","r5-Grammatik und Wendungen"=>"H. Grammatik und Wendungen"),
array("r6-Was machst du gern"=>"A. Was machst du gern?","r6-Wie spaet ist es"=>"B. Wie spät ist es?","r6-Wann hast du Deutschunterricht"=>"C. Wann hast du Deutschunterricht?","r6-Tagesablauf"=>"D. Tagesablauf","r6-Uebungen"=>"E. Übungen","r6-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
array("r7-Wochenende, Was haben Sie am Wochenende vor"=>"A. Wochenende: Was haben Sie am Wochenende vor?","r7-Verabredung. Hast du heute Abend Zeit"=>"B. Verabredung. Hast du heute Abend Zeit?","r7-Anweisungen"=>"C. Anweisungen: Was kann man, was darf man nicht?","r7-Uebungen"=>"D. Übungen","r7-Grammatik und Wendungen"=>"E. Grammatik und Wendungen"),
array("r8-Koerper und Sport"=>"A. Körper und Sport","r8-Koerperteile und Taetigkeiten"=>"B. Körperteile und Tätigkeiten","r8-Krankheiten und Schmerzen"=>"C. Krankheiten und Schmerzen","r8-Beim Arzt"=>"D. Beim Arzt","r8-Uebungen"=>"E. Übungen","r8-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
array("r9-Feste in Deutschland"=>"A. Feste in Deutschland","r9-Geburtstagsfeier"=>"B. Geburtstagsfeier","r9-Geschenke. Wer schenkt wem was"=>"C. Geschenke. Wer schenkt wem was?","r9-Einladungskarte"=>"D. Einladungskarte","r9-Uebungen"=>"E. Übungen","r9-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"),
array("r10-Stadtplan"=>"A. Stadtplan","r10-Nach dem Weg fragen"=>"B. Nach dem Weg fragen","r10-Sehenswuerdigkeiten in Dresden"=>"C. Sehenswürdigkeiten in Dresden","r10-Urlaub in Dresden"=>"D. Urlaub in Dresden","r10-Uebungen"=>"E. Übungen","r10-Grammatik und Wendungen"=>"F. Grammatik und Wendungen")
);

// 각 과별 중단원 파일명과 제목 번역
$tl_k = array(
array("r0-Alphabet"=>"알파벳","r0-Quiz-"=>"퀴즈","r0-Zuordnung"=>"연결하기"),
array("r1-Guten Tag!"=> "안녕하세요!","r1-Wie heissen Sie"=>"이름이 어떻게 되시나요?","r1-Wie geht es Ihnen"=>"어떻게 지내시나요?","r1-Wer ist Hyun Kim"=>"김 현이 누구인가요?","r1-Zahlen(1-10)"=>"수(1~10)","r1-Uebungen"=>"연습하기","r1-Grammatik und Wendungen"=>"문법과 표현들"),
array("r2-Woher kommen Sie!"=>"어디서 오셨나요?","r2-Ich bin Koreanerin"=>"나는 한국 여자입니다.","r2-Welche Sprachen sprechen Sie"=>"어떠한 언어를 말할 수 있나요?","r2-Wo liegt das Land"=>"이 나라는 어디에 있나요?","r2-Uebungen"=>"연습문제","r2-Grammatik und Wendungen"=>"문법과 표현들"),
array("r3-Wer ist das"=>"이 분은 누구인가요?","r3-Wie alt ist er"=>"그는 몇 살인가요?","r3-Wie viele Geschwister hast du"=>"형제자매가 몇 명이니?","r3-Was sind Sie von Beruf"=>"직업이 어떻게 되나요?","r3-Visitenkarten"=>"명함","r3-Uebungen"=>"연습문제","r3-Grammatik und Wendungen"=>"문법과 표현들"),
array("r4-Wohnen"=>"사는 것","r4-Im Zimmer"=>"방에서","r4-Was ist das"=>"이것은 무엇인가요?","r4-Wie ist das"=>"이것은 어떤가요?","r4-Uebungen"=>"연습문제","r4-Grammatik und Wendungen"=>"문법과 표현들"),
array("r5-Essen und Trinken"=>"먹고 마시기","r5-Was isst du gern und was trinkst du gern"=>"무엇을 즐겨 먹고 마셔?","r5-Was isst und trinkt er/sie"=>"그(녀)는 무엇을 먹고 마시나요?","r5-Im Restaurant. Was bekommen Sie"=>"레스토랑에서 무엇을 원하시나요?","r5-Waehrend des Essens"=>"식사 중에","r5-Was bezahlen Sie"=>"무엇을 지불하시겠어요?","r5-Uebungen"=>"연습문제","r5-Grammatik und Wendungen"=>"문법과 표현들"),
array("r6-Was machst du gern"=>"하루일과 중 무엇을 즐겨 하니?","r6-Wie spaet ist es"=>"몇시인가요?","r6-Wann hast du Deutschunterricht"=>"독일어수업이 언제니?","r6-Tagesablauf"=>"하루일과","r6-Uebungen"=>"연습문제","r6-Grammatik und Wendungen"=>"문법과 표현들"),
array("r7-Wochenende, Was haben Sie am Wochenende vor"=>"주말: 주말에 무엇을 하나요?","r7-Verabredung. Hast du heute Abend Zeit"=>"약속. 오늘저녁시간있니?","r7-Anweisungen"=>"지시문. 무엇을 할수 있고 해서는 안되나요?","r7-Uebungen"=>"연습문제","r7-Grammatik und Wendungen"=>"문법과 표현들"),
array("r8-Koerper und Sport"=>"신체와 스포츠","r8-Koerperteile und Taetigkeiten"=>"신체부위와 하는 일","r8-Krankheiten und Schmerzen"=>"질병과 통증","r8-Beim Arzt"=>"개인병원에서","r8-Uebungen"=>"연습문제","r8-Grammatik und Wendungen"=>"문법과 표현들"),
array("r9-Feste in Deutschland"=>"독일의 축제","r9-Geburtstagsfeier"=>"생일파티","r9-Geschenke. Wer schenkt wem was"=>"선물. 누가 누구에게 무엇을 선물하나요?","r9-Einladungskarte"=>"초대장","r9-Uebungen"=>"연습문제","r9-Grammatik und Wendungen"=>"문법과 표현들"),
array("r10-Stadtplan"=>"지도","r10-Nach dem Weg fragen"=>"길 묻기","r10-Sehenswuerdigkeiten in Dresden"=>"드레스덴의 명소들","r10-Urlaub in Dresden"=>"드레스덴에서의 휴가","r10-Uebungen"=>"연습문제","r10-Grammatik und Wendungen"=>"문법과 표현들")
);

// 각 중단원 아래의 소단원
$rtl = array(
	1 =>
	array("A" => array("A2" => "Ordnen Sie zu.", "A3" => "Ergänzen Sie."),
		"B" => array("B1" => "Hören Sie und sprechen Sie nach.", "B3" => "Wie heißt du?", "B4" => "Ergänzen Sie die Lücken! Mädchen- oder Jungennamen?", "B5" => "Sortieren Sie die Namen nach Vor- und Familiennamen."),
		"C" => array("C2" => "Ordnen Sie zu.", "C1" => "Wie geht es Ihnen?", "C3" => "Wie geht es dir?"),
		"D" => array("D1" => "Im Deutschunterricht"),
		"F" => array("F1" => "Hören Sie und sprechen Sie nach.", "F2" => "Wie heißen die Zahlen?"),
		"G" => array("G1" => "Begrüßung", "G2" => "Was sagen die Personen?", "G3" => "Frage oder Antwort?", "G7" => "Ergänzen Sie: „du“ oder „Sie“.", "G8" => "Ergänzen Sie die passende Form.", "G11" => "Hören Sie und ergänzen Sie."))
);

// 각 중단원 아래의 소단원 해석
$k_rtl = array(
1 =>
	array("A" => array("A2" => "그림과 알맞은 표현을 연결해보세요.", "A3" => "말 풍선에 알맞은 표현을 채우세요."),
		"B" => array("B1" => "듣고 따라하세요.", "B3" => "네 이름을 무엇이니?", "B4" => "빈칸을 채우세요.", "B5" => "다음을 성과 이름으로 분류하세요."),
		"C" => array("C2" => "그림과 알맞은 표현을 연결해보세요.", "C1" => "어떻게 지내시나요?", "C3" => "어떻게 지내?"),
		"D" => array("D1" => "독일어 수업시간에"),
		"F" => array("F1" => "듣고 따라하세요.", "F2" => "다음 숫자들은 어떻게 불리나요?"),
		"G" => array("G1" => "인사", "G2" => "사람들이 뭐라고 하나요?", "G3" => "질문인가요? 대답인가요?", "G7" => "Ergänzen Sie: „du“ oder „Sie“.", "G8" => "Ergänzen Sie die passende Form.", "G11" => "Hören Sie und ergänzen Sie."))
);

// 페이지가 어디인지 판단
if($fn == "index") {
	$rl = "index";
	$rt = "Na geht's?";
} else if(strlen($fn) < 4 || $fn == "Deutschland") {
	$rl = "index";
	$rt = "처음 - Inhalt";
} else if(strpos($fn,"-")) {
	$dash = strpos($fn,"-");
	$da = substr($fn,($dash+1));
	$r = (int)substr($fn,1,($dash-1));
	if(strlen($da) < 4) {
		$rk = array_keys($tl[$r]);
		for($j = 0; $j < sizeof($rk); $j++) {
			if(($tl[$r][$rk[$j]])[0] == $da[0]) {
				$rl = $rk[$j];
			}
		}
		$rt = "Reihe {$r} - {$da[0]} - Inhalt";
	} else {
		$rl = substr($fn,0,($dash));
		$rt = "Reihe {$fn[1]} - Inhalt";
	}
}
// $dash 변수가 설정됐나?
$ds = isset($dash);
if(!$ds) {
	$r = (int)substr($fn,1);
}
?>
    <div class="dropdown-divider"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<?php if($fn != "index") { ?>
	<a href="<?php echo($rl.".php"); ?>">
		<button type="button" class="btn btn-dark">
			<span class="navber-toggler-icon">&lt;</span>
		</button>
	</a>
<?php } ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
<!-- 독일은… 페이지가 아니면 실행해 -->
          <li class="nav-item">
            <a class="nav-link<?php if($fn == "index") { echo($a); } ?>" href=".\<?php echo($rl); ?>.php"><?php echo($rt); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php if($fn == "Deutschland") { echo($a); } ?>" href=".\Deutschland.php">독일은...<?php if($fn == "Deutschland") { echo($sr); } ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle<?php if($fn[0] == "r") { echo($a); } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php if($ds) { if(strlen($da) > 4) { echo($tl[$r][$fn]); } else { for($z = 0; $z < sizeof($rtl[$r][$da[0]]); $z++) { if(array_keys($rtl[$r][$da[0]])[$z] == $da) { echo($z + 1); }; }; echo(". ".$rtl[$r][$da[0]][$da]); } } else if($fn == "index" || $fn == "Deutschland") { echo("학습하기"); } else { echo("Reihe ".$r); } ?> </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php
if($ds) {
	if(strlen($da) > 4) {
		$kom = $tl[$r];
		// 중단원 메뉴
		for($i = 0; $i < sizeof($kom); $i++) {
			$cn = array_keys($kom)[$i];
			if(file_exists($cn.".php")) {
				echo("<a class=\"dropdown-item");
				if($fn == $cn) {
					echo($a);
				}
				echo("\" href=\"".$cn.".php\"> ".$tl[$r][$cn]." </a> ");
			}
		}
	} else {
		$kom = $rtl[$r][$fn[($dash+1)]];
		// 소단원 메뉴; 빼기 이후의 글자수가 4글자 미만
		for($i = 0; $i < sizeof($kom); $i++) {
			// 메뉴의 키 정보
			$mkey = array_keys($kom)[$i];
			$cn = "r".$r."-".$mkey.".php";
			if(file_exists($cn)) {
				echo("<a class=\"dropdown-item");
				if($da == $mkey ) {
					echo($a);
				}
				$n = $i+1;
				echo("\" href=\"{$cn}\">{$n}. ".$kom[$mkey]." </a> ");
			}
		}
	}
} else {
	$kom = $tl;
	// 대단원 메뉴
	for($i = 0; $i < sizeof($kom); $i++) {
		echo("<a class=\"dropdown-item");
		if($fn == "r".($i)) {
			echo($a);
		}
		echo("\" href=\"r{$i}.php\"> Reihe {$i} </a> ");
	}
}
      ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- 넵바 끝 -->
