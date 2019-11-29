<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=.5">
	<title>하울러</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php require_once "ready.php"; ?>
<?php

echo("<table class=\"table border-0\"><tr><th scope=\"row border-0 text-center\">재생</th>\n");
for($i = 0; $i <= 13; $i++) {
echo("<td class=\"text-center align-middle border-0\">\n
	<button id=\"".$i."\" class=\"d-inline-block itm p-1 px-2 m-1 btn btn-outline-dark rounded\">".$i."</button>\n
</td>\n");
};
echo("</tr><tr><th scope=\"row border-0 text-center\">횟수</th>\n");
for($i = 0; $i <= 13; $i++) {
echo("<td class=\"text-center align-middle border-0\">\n
	<button id=\"cnt-".$i."\" class=\"d-inline-block sen p-1 px-2 m-1 btn btn-success text-white rounded\">0</button>\n
</td>\n");
};
echo("</tr></table>")
?>

<div class="border d-none border-dark" id="last"></div>

<script src="./js/howler.core.js"></script> 
<script src="./js/jquery-3.4.1.min.js"></script>
<script>
// 소리 출력 전역 변수와 함수
var sen = new Array(), pa = new Array(), he = new Array(), last;
$(".itm").each(function() {
	var t = $(this);
	var ti = t.attr("id");
	sen[ti] = 0;
	pa[ti] = t.html();
	he[ti] = t.height();
});

function stopAll() {
	$(".itm").each(function() {
		$(this).html(pa[$(this).attr("id")]);
	});
}

var nagehts = new Howl({
	src: ["./sounds/Reihe 8/r8 D4.mp3"],
	// src: ["./sounds/Reihe 8/r8 D4_44100.mp3"],
	sprite : {
		0: [1397,50417],
		1: [11557,1086],
		2: [13247,1415],
		3: [15200,1086],
		4: [16841,3006],
		5: [20826,1357],
		6: [22724,1590],
		7: [24815,3914],
		8: [29313,4189],
		9: [33880,6661],
		10: [42978,2021],
		11: [45658,2341],
		12: [48682,971],
		13: [50230,1364]
	},
	html5: true,
	volume: 1,
	format: "mp3",
	preload: true,
	onloaderror: function() {
		$(".alert").append("<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>");
		console.log("다시 읽어주세요!");
	},
	onplay: function() {
		console.log(nagehts.seek());
		console.log(nagehts.duration(nagehts.seek()));
	},
	onload: function() {
		$(".alert").hide();

		$(".itm").on("click", function() {
				var t = $(this);
				var ti = t.attr("id");
			if($("div#last").text() == "" || t.text() == "❚❚") {
				$("#last").text(ti);
				t.text("■");
				nagehts.seek();
				nagehts.play(ti);
				sen[ti]++;
	
				last = ti;
	
				$("#cnt-"+ti).text(sen[ti]);
			} else if(last == ti && nagehts.playing($("div#last").text())) {
				$("#last").text("");
				t.text(pa[ti]);
				nagehts.pause();
				sen[ti]--;
				$("#cnt-"+ti).text(sen[ti]);
			}

		});
	},
	onend: function() {
		$("div#last").text("");
		stopAll();
		$("#cnt-"+last).text(sen[last]);
		if(sen[last] == 2) {
			$("#"+last).after("<span class=\"border-0 p-1 px-2 rounded bg-warning text-dark font-weight-bold m-1\">번역</span>");
		}
	}


});

</script>
</body>
</html>