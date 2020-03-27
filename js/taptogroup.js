/* 선택하여 넣기

필요한 요소들
div#itms>button.itm#lst-#
div#lsts>div.itm-lst>.ttl

*/

$("button.itm").bind("click", function() {
	if($(this).parent().hasClass("itm-lst")) {
		$(this).blur();
	} else {
		$(this).removeClass("btn-light");
		$(this).toggleClass("btn-secondary");
	}
});

$("button").on("click", function () {
	if($(this).parent().hasClass("1itm")) {
		$(this).blur();
		$(this).removeClass("btn-secondary");
	}
});

// 제목 클릭하면 선택한 항목 넣기
$(".ttl").on("click", function() {
var t = $(this);
var tn = $(this).parent().attr("id").substr(4); // 클릭한 주제 번호 얻기
var tm = 0;

// alert($("th[scope=row]:eq("+opp+")").html());
	// 단어가 주제에 맞는지 대조
	$(".btn-secondary").each( function () {
		var tt = $(this);
		// 단어의 답안 번호 얻어내기
		for(var i = 1; i <= $(".itm-lst").length; i++) {
			var c = eval('"ans'+i+'"');
			if($(this).hasClass(c)) {
				var a=i;
			};
		};

		// 답안 번호랑 맞는 것만 넣기
		if(a != tn) {
				// 틀리면 띠용
				ion.sound.play("Cartoon_Boing");


				if($(this).parent().hasClass("itm-lst")) {
					$(this).blur();
					$(this).addClass("btn-light");
				}

		} else {
				// 맞으면 넣기
				if(tm == 0) {
					ion.sound.play("dingdongdang");

					$(this).addClass("btn-block btn-light");
					$(this).insertAfter(t);
				}

				if($(this).closest(".1itm").children("button").length > 0) {
					tm = 1;
				}

				// 한 아이템만 넣는 리스트 상자 클래스 있어?
				if(t.parent().hasClass("1itm")) {
					t.remove();
					$(this).removeClass("itm");
					$(this).removeClass('btn-secondary');
				}

		} // 답안 번호랑 맞는 것만 넣기 마감


	}); // btn-secondary.each() 마감

	// 선택 모두 풀기
	$(".itm").removeClass("btn-secondary");
});

// 로딩되면 단어 여백 초기화
$(document).ready(function() {
	$(".itm").appendTo("#itms");

	// 오답 일 때 띠용~
	ion.sound({
		sounds : [{
			name : "dingdongdang"
		}, {
			name : "Cartoon_Boing"
		}],
		path : "sounds/",
		preload : true,
		volume : 1.0,
		multiplay : true
	});

	$("[data-toggle='popover']").popover({container : "body"});
});

