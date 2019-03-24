<?php
  $link = mysqli_connect('localhost', 'root', 'qudwnWkd321!@#');
  if (!$link) { die('연결에 실패했습니다: ' . mysqli_error());}
  echo 'MySQL 서버에 정상적으로 연결되었습니다.';
  mysqli_close($link); 
?>

<?php
$hostIn     = 'localhost';
$dbIn       = 'wordpress';
$userIn     = 'root';
$passwordIn = 'qudwnWkd321!@#';
try {
    $MySQLDataBaseLink = new PDO(
                    "mysql:host=" . $hostIn . ";dbname=" . $dbIn, $userIn, $passwordIn);
    $MySQLDataBaseLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<br>Yippee - good connection' . "\r\n";
} catch(PDOException $e) {
    echo '<br><h3>Catch Connect Error--->>> ' . $e->getMessage() . '</h3>' . "\r\n";
    return false;
} //End Try Catch
?>

<?php
// 로그인 확인
include 'wp-load.php';

$cookie_name = 'wordpress_logged_in_'.md5(get_site_option('siteurl'));
$cookie = $_COOKIE&#91;$cookie_name&#93;;

$cuser = wp_set_current_user(wp_validate_auth_cookie($cookie, 'logged_in'));

// 로그인 했니 안 했니? boolen 학생 이상은 
function ul() {
	$user = wp_get_current_user();
	if(current_user_can("tablepress_add_tables")) {
		return $user->exists();
	} else {
		return false;
	}
  
  return $user->exists();
}
if(current_user_can("tablepress_add_tables")) {
  echo("<br><br><br><br><br>aHaHaHaHaHa<br>".ul()."<br>");
  $edt = true;

}

// 학번들
$ids = array("201903017","201903018","201903019","201903020","201903022","201903023","201903024","201903025","201903026","201903027","201903028","201903029","201903030","201903032","201903033","201903034","201903035","201903037","201903038","201903039","201903041","201903042","201903043","201903044","201903045","201903046","201903048","201903049","201903050","201903051","201903052","201903053","201803030","201603057","201603030","201603051");
$link = mysqli_connect('localhost', 'root', 'qudwnWkd321!@#');

echo("<br><br>[ ".count($ids)."명의 학생 조회 ]");
	for($i = 0; $i < count($ids); $i++) {
		$q = mysqli_query($link, "select * from `nagehts_users` where `ID` in (select `user_id` from `nagehts_usermeta` where `meta_value`=".$ids[$i].")");
		$r = $
		echo("<br>".$ids[$i].$q);
		// print_r("<br>".$q."|");

}
  mysqli_close($link); 

?>