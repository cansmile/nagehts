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

?>