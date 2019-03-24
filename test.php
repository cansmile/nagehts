<!DOCTYPE html>
<html>
<head>
	<title>Hey~~~llo!</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
</head>
<body>
<table class="table">
	<thead class="th" scope="col">
		<div class="display-4" id="showme">&nbsp;</div>
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text" id="qst-ad1">1</span></div>
					<input type="text" placeholder="Antwort" aria-label="Antwort" aria-describedby="basic-addon1" class="form-control q" id="qst-1">
				</div>
			</td>
		</tr>
	</tbody>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/taptogroup.js"></script>
<script src="./js/ion.sound.min.js"></script>
<script>
	$(document).ready(function() {
		$(".q").on("keyup", function() {
			$("div#showme").html($(this).substr(-1));
			var a, an;
			a = new Array();
			var con = $(this).val();
			for(var i = 0; i < con.length; i++) {
				if(con.substr(i) != ".") {
					an += con.substr(i,1);
				} else {
					an += "<br>\n";
				}
			}
			$("div#showme").html(an);
		})
	})
</script>
</body>
</html>
