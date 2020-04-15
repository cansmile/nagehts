<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>오됴빠이브</title>
</head>
<script src="/js/audio5.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
<script>
	var audio_js = new Audio5js({
    ready: function () {
        this.load('sounds/dingdongdang.mp3');
    },
    play:function(){
        this.play();
    }
});

audio_js.play();

</script>
<?php
echo($_SERVER["SCRIPT_FILENAME"]."<br>");
echo($_SERVER["PHP_SELF"]."<br>");
print_r($_SERVER);
// echo(getPathname());
require "header.php";
echo(substr($_SERVER['REDIRECT_URL'],1));
// require "nav.php";
// require "/home/nagehts/public_html/core/src/Xpressengine/User/UserHandler.php";
// echo($users);
?>
</body>
</html>