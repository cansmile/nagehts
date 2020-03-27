// 보기 란이 비어있으면 wahl 숨기기
function donewahl() {
	$("#wahl").hide();
	$("#marg").hide();
	$("#chk").show();
}

// 페이지를 클릭할 때마다 실행하는 함수
$(document).on("click", function() {
	if( $("#wahl").find(".itm").length < 1 ) {
		donewahl();
	} else if( $(".ans0").length > 0) {
		var f = 0;
		$("#wahl").find(".itm").each(function() {
			if(!$(this).hasClass("ans0")) {
				f = 1;
			}
		});
		if(f == 0) {
			donewahl();
		}
	}
}
);


// wahl 높이만큼 여백 만들기
$("#marg").height($("#wahl").innerHeight() * 2.5);

