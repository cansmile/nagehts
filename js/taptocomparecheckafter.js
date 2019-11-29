/* 선택하여 넣기

필요한 요소들
div#itms>button.itm#lst-#
div#lsts>div.itm-lst>.ttl

*/
// 항목 선택하면 토글
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
var th = $(this).closest("th[scope=row]").attr("id").substr(3);
var ths = $("th[scope=row]").length;
var half = ths/2;

// 반대쪽 번호를 확인하자
if(th <= Number(half)) {
	var opp = Number(th)+Number(half);
} else {
	var opp = Number(th)-Number(half);
}

// 반대쪽 자식이 버튼인가?
if($("#th-"+opp).find("button").length) {
	var bt = $("#th-"+opp).find("button");
	var bti = bt.attr("id");
	var cpi = cp[bti-1];
}
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
					if(typeof x === 'undefined') {
						ion.sound.play("Cartoon_Boing");
					} else {
						x.play();
					}

				if($(this).parent().hasClass("itm-lst")) {
					$(this).blur();
					$(this).addClass("btn-light");
				}

		} else {
				// 맞으면 넣기
				if(cpi) {
					if(cpi == tt.attr("id")) {
						if(tm == 0) {
					if(typeof o === 'undefined') {
						ion.sound.play("dingdongdang");
					} else {
						o.play();
					}

							$(this).addClass("btn-block btn-light");
							$(this).insertAfter(t);
						}

						if($(this).closest(".1itm").children("button").length) {
							tm = 1;
						}

						// 한 아이템만 넣는 리스트 상자 클래스 있어?
						if(t.parent().hasClass("1itm")) {
							t.remove();
							$(this).removeClass("itm");
							$(this).removeClass('btn-secondary');
						}
					} else {
					if(typeof x === 'undefined') {
						ion.sound.play("Cartoon_Boing");
					} else {
						x.play();
					}

						if($(this).parent().hasClass("itm-lst")) {
							$(this).blur();
							$(this).addClass("btn-light");
						}
					}
					
				} else {
					// 맞는지 검사하는데, 반대쪽 항목이 #itms에 있으면 넣기
					if($("#itms").find("button#"+cp[(tt.attr("id")-1)]).length) {
						if(tm == 0) {
					if(typeof o === 'undefined') {
						ion.sound.play("dingdongdang");
					} else {
						o.play();
					}

							$(this).addClass("btn-block btn-light");
							$(this).insertAfter(t);
						}

						if($(this).closest(".1itm").children("button").length) {
							tm = 1;
						}

						// 한 아이템만 넣는 리스트 상자 클래스 있어?
						if(t.parent().hasClass("1itm")) {
							t.remove();
							$(this).removeClass("itm");
							$(this).removeClass('btn-secondary');
						}
					} else {
						// #itms에 반대쪽 항목이 없어서 띠용
					if(typeof x === 'undefined') {
						ion.sound.play("Cartoon_Boing");
					} else {
						x.play();
					}


						if($(this).parent().hasClass("itm-lst")) {
							$(this).blur();
							$(this).addClass("btn-light");
						}
					}
				}


		} // 답안 번호랑 맞는 것만 넣기 마감


	}); // btn-secondary.each() 마감

	// 선택 모두 풀기
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

