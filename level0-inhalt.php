<!-- 넵바 시작 -->	  
<?php
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";
?>
<div class="dropdown-divider"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"><a class="navbar-brand" href=".\index.php">처음</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item<?php if($fn == "Deutschland") { echo($a); } ?>"> <a class="nav-link" href=".\Deutschland.php">독일은...<?php if($fn == "Deutschland") { echo($sr); } ?></a> </li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle<?php if($fn == "r0" || $fn == "r1" || $fn == "r2" || $fn == "r3" || $fn == "r4" || $fn == "r5" || $fn == "r6" || $fn == "r7" || $fn == "r8" || $fn == "r9" || $fn == "r10") { echo($a); } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if($fn{0} == "r" || $fn{1} == 0) { echo("Reihe ".substr($fn,1)); } else if($fn{0} = "D") { echo($fn); } ?></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item<?php if($fn == "r0") { echo($a); } ?>" href="r0.php">Reihe 0<?php if($fn == "r0") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r1") { echo($a); } ?>" href="r1.php">Reihe 1<?php if($fn == "r1") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r2") { echo($a); } ?>" href="r2.php">Reihe 2<?php if($fn == "r2") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r3") { echo($a); } ?>" href="r3.php">Reihe 3<?php if($fn == "r3") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r4") { echo($a); } ?>" href="r4.php">Reihe 4<?php if($fn == "r4") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r5") { echo($a); } ?>" href="r5.php">Reihe 5<?php if($fn == "r5") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r6") { echo($a); } ?>" href="r6.php">Reihe 6<?php if($fn == "r6") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r7") { echo($a); } ?>" href="r7.php">Reihe 7<?php if($fn == "r7") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r8") { echo($a); } ?>" href="r8.php">Reihe 8<?php if($fn == "r8") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r9") { echo($a); } ?>" href="r9.php">Reihe 9<?php if($fn == "r9") { echo($sr); } ?></a> <a class="dropdown-item<?php if($fn == "r10") { echo($a); } ?>" href="r10.php">Reihe 10<?php if($fn == "r10") { echo($sr); } ?></a>
			</div>
			</li>
			<li><?php echo($fn); ?></li>
		</ul>
	</div>
</nav>
<!-- 넵바 끝 -->
