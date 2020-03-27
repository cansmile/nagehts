<?php
$hdr = "nagehts";
$dbn = "wordpress";
$fn = "2020_register.txt";
$h = fopen("/var/www/html/nagehts.org/public_html/".$fn, "rb") or die("이상해요");
$em = explode(",",fgets($h));
$puts = 0;
$sswu = 0;
$p = fopen("/var/www/html/nagehts.org/public_html/st.php", "w+") or die("이상해요");
fwrite($p,"
<!DOCTYPE html>
<html lang=\"kr\">
<head>
	<title>학생들이 어떻게 됐냐?</title>
	<link href=\"./css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
	<script src=\"./js/jquery-3.4.1.min.js\"></script>
	<script src=\"./js/popper.min.js\"></script>
	<script src=\"./js/bootstrap.js\"></script>
</head>
<body>
<section>
	<div class=\"container\">
		<div class=\"row\">
"); // php 출력용

$t = sizeof($em); // 전체 학생
$done = 0; // 완료된 학생
$group = "";
$link = mysqli_connect('localhost', 'root', 'qudwnWkd321!@#');
if (!$link) { die('연결에 실패했습니다: ' . mysqli_error());}


mysqli_select_db($link, $dbn);
for($i = 0; $i < sizeof($em); $i++) {
	$q = "SELECT * FROM `".$hdr."_users` WHERE `user_email` LIKE '".$em[$i]."' ORDER BY `ID` ASC";
	$qr = mysqli_query($link, $q);
	if($qr!=false) {
		$r = mysqli_fetch_array($qr);
		$uid = $r[0];
		$q = "SELECT `meta_value` FROM `".$hdr."_usermeta` WHERE `user_id` = ".$uid." AND `meta_key` = '".$hdr."_capabilities'";
		$qr = mysqli_query($link, $q);
		if($qr!=false) {
			$r = mysqli_fetch_array($qr); 
			if($r[0] == "a:1:{s:10:\"subscriber\";b:1;}") {
				fwrite($p,"<div class=\"col-4 text-center text-success p-2\"><span class=\"border border-dark rounded bg-white text-dark\">".$i."</span>&nbsp;".$em[$i]." = 구독자 </div>");
				$group .= date("Y-m-d H:i:s", time())."[ ".$em[$i]." ] 처리됨 "."\n";
				$q = "UPDATE `".$hdr."_usermeta` SET `meta_value` = 'a:1:{s:7:\"student\";b:1;}' WHERE `".$hdr."_usermeta`.`user_id` = ".$uid." and `".$hdr."_usermeta`.`meta_key` = '".$hdr."_capabilities';";
				$qr = mysqli_query($link, $q);
				$done++;
			} else if($r[0] == "a:1:{s:7:\"student\";b:1;}") {
				fwrite($p,"<div class=\"col-4 text-center text-white bg-success p-2\"><span class=\"border border-dark rounded bg-white text-dark\">".$i."</span>&nbsp;".$em[$i]." = 학생 </div>");
				$rs = "학생";
				$done++;
			} else {
				fwrite($p,"<div class=\"col-4 text-center text-danger p-2\"><span class=\"border border-dark rounded bg-white text-dark\">".$i."</span>&nbsp;".$em[$i]." = 미등록 </div>");
			}

			//  학생, 장신 역할 함께 있는 이용자
			if($r[0] == "a:2:{s:7:\"student\";b:1;s:4:\"puts\";b:1;}") {
				$done++;
				$puts++;
			}

			// 학생, 성신 역할 함께 있는 이용
			if($r[0] == "a:2:{s:7:\"student\";b:1;s:4:\"sswu\";b:1;}") {
				$done++;
				$sswu++;
			}
		}
	}
}
if($group != "") {
	echo($group."\n".$t."명 중 ".$done."명(장신: ".$puts."명, 성신: ".$sswu."명) 처리됨(".(round(($done/$t)*100,0))."%) - [".date("Y-m-d H:i:s", time())."]\n");
} else {
	echo("변화가 없습니다(장신: ".$puts."명, 성신: ".$sswu."명).[".date("Y-m-d H:i:s", time())."]\n");
}
fclose($h);
// php로 출력
fwrite($p, "
		</div>
	</div>
</section>
</body>
</html>
");
fclose($p);
?>