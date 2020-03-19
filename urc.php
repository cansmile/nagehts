<?php
$hdr = "nagehts";
$dbn = "wordpress";
$fn = "2020_register.txt";
	$h = fopen("./".$fn, "r");
	$hh = fgets($h);
	$em = explode(",", $hh);

$t = sizeof($em); // 전체 학생
$done = 0; // 완료된 학생
$group = "";
$link = mysqli_connect('localhost', 'root', 'qudwnWkd321!@#');
if (!$link) { die('연결에 실패했습니다: ' . mysqli_error());}
// echo 'MySQL 서버에 정상적으로 연결되었습니다.';


mysqli_select_db($link, $dbn);
for($i = 0; $i < sizeof($em); $i++) {
	$q = "SELECT * FROM `".$hdr."_users` WHERE `user_email` LIKE '".$em[$i]."' ORDER BY `ID` ASC";
	$qr = mysqli_query($link, $q);
	if($qr!=false) {
		$r = mysqli_fetch_array($qr);
		// print_r("<br>".$em[$i]." = ".$r[0]);
		$uid = $r[0];
		$q = "SELECT `meta_value` FROM `".$hdr."_usermeta` WHERE `user_id` = ".$uid." AND `meta_key` = '".$hdr."_capabilities'";
		// echo($q."<br>");
		$qr = mysqli_query($link, $q);
		if($qr!=false) {
			$r = mysqli_fetch_array($qr); 
			// echo("<br>역할: ".$r[0]."<br>");
			// print_r("<br>".$r."<br>");
			if($r[0] == "a:1:{s:10:\"subscriber\";b:1;}") {
				$group .= date("Y-m-d H:i:s", time())."[ ".$em[$i]." ] 처리됨 "."\n";
				$q = "UPDATE `".$hdr."_usermeta` SET `meta_value` = 'a:1:{s:7:\"student\";b:1;}' WHERE `".$hdr."_usermeta`.`user_id` = ".$uid." and `".$hdr."_usermeta`.`meta_key` = '".$hdr."_capabilities';";
				$qr = mysqli_query($link, $q);
				// echo("<br>".$q."<br>");
				$done++;
			}
			if($r[0] == "a:1:{s:7:\"student\";b:1;}") {
				$done++;
			}
		}
	}
}
if($group != "") {
	echo($group."\n".$t."명 중 ".$done."명 처리됨(".(round(($done/$t)*100,0))."%) - [".date("Y-m-d H:i:s", time())."]\n");
}
?>
