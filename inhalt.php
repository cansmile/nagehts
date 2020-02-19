<?php
// 반복 횟수; 중단원, 소단원, 대단원 모두 $kom에 입력됨
if($ds) {
	if(strlen($da) < $lm) {
		// 중단원 메뉴
		$kom = $rtl[$r][$fn[($dash+1)]];
	} else {
		// 소단원 메뉴
		$kom = $rtl[$r][($kom[$fn][0])];
	}
} else if($fn == "inthebeginning") {
	// 초기화면 메뉴
	$kom = $itl;
} else {
	// 대단원 메뉴
	$kom = $kom[$r];
}

$mc = sizeof($kom);
if($mc < 3) {
	$col = "col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12";
} else if($mc < 6) {
	$col = "col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3";
} else {
	$col = "col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3";
}
if(ul()) {
	if($fn == "inthebeginning" || $fn == "") {
		// 메인 페이지
		for($i = 0; $i < $mc; $i++) {
			// $tl의 키 이름 배열
			$t1 = array_keys($kom)[$i];
			$t2 = $itl[$t1];
			$t3 = $itl_k[$t1];
			if(!isset($t3)) {
				$t3 = "&nbsp;";
			}

			if($i < 1) {
				$t1 = "Deutschland";
				$t4 = "Reihe 0/D";
			} else {
				$t1 = "r".($i-1);
				$t4 = $i-1;
			}

		// 작업 단원($rm) 이하일 때
		if(($i-2) < $rm) {
			if(file_exists($t1.".php")) {
					echo("      <div class=\"{$col} text-center\">\n       <a href=\"{$t1}.php\" class=\"text-dark\">\n<img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>{$t2}</h3>\n        <p>\n{$t3}<br></p>\n       </a>\n      </div>\n");
			} else if(!file_exists($t1.".php")) {
				echo("      <div class=\"{$col} text-center\" style=\"opacity: .125;\">\n       <img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3 class=\"text-secondary\">{$t2}</h3>\n        <p class=\"text-secondary\">\n{$t3}</p>\n\n     </div>\n");
			}
		}

		// 작업 단원($rm) 이상인데, 편지자면
		if(($i-2) >= $rm && $edt) {
			if(file_exists($t1.".php")) {
					echo("      <div class=\"{$col} text-center\">\n       <a href=\"{$t1}.php\" class=\"text-dark\">\n<img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>{$t2}</h3>\n        <p>\n{$t3}<br></p>\n       </a>\n      </div>\n");
			} else if(!file_exists($t1.".php")) {
				echo("      <div class=\"{$col} text-center\" style=\"opacity: .125;\">\n       <img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3 class=\"text-secondary\">{$t2}</h3>\n        <p class=\"text-secondary\">\n{$t3}</p>\n\n     </div>\n");
			}
		}
	}
		
	} else if(strlen(substr($fn,(strpos($fn,"-")+1))) > 4) {
	// Reihe n - n
		for($i = 0; $i < $mc; $i++) {
			// $tl 또는 $rtl의 키 이름 배열
			$t1 = array_keys($kom)[$i];
			$t2 = $kom[$t1];
			$t3 = $rtl_k[$r][$t1[0]][$t1];
			if(!isset($t3)) {
				$t3 = "";
			}
			$t4 = $i+1;
			// GR이 있을 때 2번째 자리에서 2글자가 GR일 경우 GR로 대체
			// 링크용과 겸용일 때 제대로 연결되지 않는 문제를 해결하기 위해 $t5 변수 생성
			if(substr($t1, 1, 2) == "GR") {
				$t5 = "GR";
			} else {
				$t5 = $t1;
				for($c = 97; $c < 123; $c++) {
					if(substr($t1,-1) == chr($c)) {
						$t5 = substr($t1,0,(strlen($t1) - 1))."<small>-".($c - 96)."</small>";
					}
				}
			}
			if(file_exists("r".$r."-".$t1.".php")) {
					echo("      <div class=\"{$col} text-center\">\n       <a href=\"r{$r}-{$t1}.php\" class=\"text-dark\">\n<img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>{$t2}</h3>\n        <p>\n{$t3}<br><small>교재 <span class=\"bg-{$color} p-1 px-2 m-1 rounded text-white\"><strong>{$t5}</strong></span></small></p>\n       </a>\n      </div>\n");
			} else if(!file_exists("r".$r."-".$t1.".php")) {
				echo("      <div class=\"{$col} text-center\" style=\"opacity: .125;\">\n       <img class=\"rounded-circle\" alt=\"{$t2}\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3 class=\"text-secondary\">{$t2}</h3>\n        <p class=\"text-secondary\">\n{$t3}<br><small>교재 <span class=\"bg-{$color} p-1 px-2 m-1 rounded text-white\"><strong>{$t5}</strong></span></small></p>\n\n     </div>\n");
			}
		}
	} else {
		// Reihe n - Inhalt
		for($i = 0; $i < $mc; $i++) {
			// $tl의 키 이름 배열
			$t1 = array_keys($kom)[$i];
			$t2 = $tl[$r][$t1];
			$t3 = $tl_k[$r][$t1];
			if(!isset($t3)) {
				$t3 = "&nbsp;";
			}
			$t4 = "Reihe 0/".$t2[0];

			if(file_exists($t1.".php")) {
					echo("      <div class=\"{$col} text-center\">\n       <a href=\"{$t1}.php\" class=\"text-dark\">\n<img class=\"rounded-circle\" alt=\"".substr($t2,2)."\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>".substr($t2,2)."</h3>\n        <p>{$t3}</p>\n       </a>\n      </div>\n");
			} else if(!file_exists($t1.".php")) {
				echo("      <div class=\"{$col} text-center\" style=\"opacity: .125;\">\n       <img class=\"rounded-circle\" alt=\"".substr($t2,2)."\" style=\"width: 140px; height: 140px;\" src=\"images/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3 class=\"text-secondary\">".substr($t2,2)."</h3>\n        <p class=\"text-secondary\">\n{$t3}</p>\n\n     </div>\n");
			}
		}
		
	}
} else {
	echo("      <div class=\"col text-center\">\n       <p class=\"text-center display-4\"><a href=\"{$returnPath}\">로그인</a>이 필요합니다.<br>로그인 하셨다면, 학번을 입력해주세요.<br>이메일(<a href=\"mailto:cansmile@gmail.com\">cansmile@gmail.com</a>)을 주시면 빠르게 ‘학생’으로 등급이 조정됩니다.</p>\n\n     </div>\n");
}
?>