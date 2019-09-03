// 보기 란이 비어있으면 wahl 숨기기
function donewahl() {
	$("#wahl").hide();
	$("#marg").hide();
	$("#chk").show();
}
$("#marg").height($("#wahl").innerHeight() * 1.5); // wahl 높이만큼 여백 만들기
$(document).on("click", function() {
	if($("#wahl").find(".itm").length < 1) {
		donewahl();
	}
	else {
		if($(".ans0").length > 0) {
			if($("#wahl").find(".itm").length==$(".ans0").length) {
				donewahl();
			}
		}
	}
}
)
