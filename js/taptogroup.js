/* 선택하여 넣기

필요한 요소들
div#itms>button.itm#lst-#
div#lsts>div.itm-lst>.ttl

*/

// 항목 선택하면 토글
$("button.itm").bind("click", function() {
	$(this).removeClass("btn-light");
	$(this).toggleClass("btn-secondary");
});

// 제목 클릭하면 선택한 항목 넣기
$(".ttl").on("click", function() {
var t = $(this);
var tn = $(this).parent().attr("id").charAt(4); // 클릭한 주제 번호 얻기
var wa = 0;
var tm = 0;
	
	// 단어가 주제에 맞는지 대조
	$(".btn-secondary").each( function () {
		// 단어의 답안 번호 얻어내기
		for(var i = 1; i <= $(".itm-lst").length; i++) {
			var c = eval('"ans'+i+'"');
			if($(this).hasClass(c)) {
				var a=i;
			};
		};
		
		if(a != tn) {
				ion.sound.play("Cartoon_Boing");

				if(wa == 0) {
					ion.sound.play($(this).attr("id"));
				} else {
					tm += 5000;
					ion.sound.delay(tm).play($(this).attr("id"));
				};
				
		} else {
			$(this).addClass("btn-block btn-light");
			$(this).insertAfter(t);
		}
	});

	$(".itm").removeClass("btn-secondary");
	
});

// 되돌리기 누르면 전부 목록으로 넣기
$("#rst").on("click", function() {
	for (var i = 1; i <= ($(".itm").length); i++) {
		var n = eval('"#' + i + '"');
		$(n).appendTo("#itms");
		$(n).removeClass("btn-block");
		$(n).removeClass("btn-light");
	}
	$("#itms").children(".itm").removeClass("btn-secondary");
});

// 정답확인 - 각 lst-n 의 id를 모아 정답과 확인
$("#chk").on("click", function() {
	// $("#lst-1").children("button").appendTo(this);
});

// 로딩되면 단어 여백 초기화
$(document).ready(function() {
	$(".itm").appendTo("#itms");

	// 오답 일 때 띠용~
	ion.sound({
		sounds : [{
			name : "Bama_Country_Country"
		}, {
			name : "Cartoon_Boing"
		}],
		path : "sounds/",
		preload : true,
		volume : 1.0,
		multiplay : false
	});

	$("[data-toggle='popover']").popover({container : "body"});
});

