<?php
$bn = basename($_SERVER["PHP_SELF"]);
$fn = substr($_SERVER['REDIRECT_URL'],1);
// $fn = str_replace(".php","",$bn);
$root = "dev/";
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=.5, minimum-scale=.25, user-scalable=yes, shrink-to-fit=no">
		<title>Na geht's? - Willkommen auf der PUTS Lern-Website! PUTS</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="./<?=$root ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="./<?=$root ?>css/bootstrap-custom.css" rel="stylesheet" type="text/css">
		<link href="./<?=$root ?>css/global.css" rel="stylesheet" type="text/css">
		<!-- <link href="./<?=$root ?>images/favicon.ico" rel="shortcut icon"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" importance="high">
	</head>