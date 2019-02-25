<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Competible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=.5">
        <title>How do you think </title>
        <!-- 스타일 링크 시작 -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="./css/global.css" rel="stylesheet" type="text/css">
        <!-- 스타일 링크 끝 -->
    </head>
    <body>
<?php
$fn = file_get_contents("r1-inhalt.php");
$st = substr($fn,stripos($fn,"\$tl"));
$st = substr($st,0,stripos($st,";")+1);
eval($st);
?>
    </body>
</html>
