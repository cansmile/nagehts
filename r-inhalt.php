<?php
  // 읽어온 변수의 내용으로 inhalt 화면 만들기
  for($i = 0; $i < sizeof(array_keys($tl));$i++) {

    // $tl의 키 이름 배열
    $t1 = array_keys($tl)[$i];
    $t2 = $tl[$t1];
    $t3 = substr($t2, 3);
    if($fn != "index") {
    	$t4 = "Reihe 0/";
    }
    $t4 .= chr((833+$i));

    if(file_exists($t1.".php")) {
      echo("      <div class=\"col-lg-4 col-md-6 col-sm-12 text-center\">\n       <a href=\"{$t1}.php\" class=\"text-dark\">\n<img class=\"rounded-circle\" alt=\"{$t3}\" style=\"width: 140px; height: 140px;\" src=\"images\/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>{$t3}</h3>\n        <p>\n&nbsp;</p>\n       </a>\n      </div>\n");
    } else if(!file_exists($t1.".php")) {
      echo("      <div class=\"col-lg-4 col-md-6 col-sm-12 text-center\">\n       <img class=\"rounded-circle\" alt=\"{$t3}\" style=\"width: 140px; height: 140px;\" src=\"images\/{$t4}.png\" data-holder-rendered=\"true\">\n        <h3>{$t3}</h3>\n        <p>\n&nbsp;</p>\n\n     </div>\n");
    }
  }
?>