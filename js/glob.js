/* 글자 입력하는 문제에 필요한 함수 */
// 비교하여 색 입히기
function cmput(ts) {
var q = ts.val().length;
var qn = (ts.attr("id").substr(4))-1;
var a = ts.val();
var b = an[qn].substr(0,q);
a = a.replace(/ /gi, "");
b = b.replace(/ /gi, "");
ts.removeClass("bg-danger");
ts.removeClass("bg-success");
$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-danger");
$("#ant-"+$(this).attr("id").substr(4)).removeClass("text-success");

	if(a == b) {
		$(this).addClass("text-white text-weight-bold");
		$(this).addClass("bg-success");
		$("#ant-"+$(this).attr("id").substr(4)).addClass("text-success");
	} else {
		$(this).addClass("text-white text-weight-bold");
		$(this).addClass("bg-danger");
		$("#ant-"+$(this).attr("id").substr(4)).addClass("text-danger");
	}
}