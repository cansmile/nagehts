<?php include "header.php"; ?>
<body>
	<?php include "nav.php"; ?>
	<?php if(ul()) {
		$cusr = wp_get_current_user();
		echo($cusr->user_login."<br>");
		echo($cusr->user_email."<br>");
		echo($cusr->user_firstname."<br>");
		echo($cusr->user_lastname."<br>");
		echo($cusr->display_name."<br>");
		echo($cusr->ID."<br>");
	} ?>
	