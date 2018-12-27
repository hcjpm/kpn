<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kamień, papier i nożyczki</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="logo" class="tlo">
			Kamień, papier i nożyczki
		</div>
		<div id="menu" class="tlo">
			<?php
			include("inkludy/menu.php");
			?>
		</div>
    <div id="informacja" class="tlo">
			<?php
			include("inkludy/" . $informacja . ".php");
			?>
		</div>
		<div id="tresc" class="tlo">
			<?php
			include("inkludy/" . $prefiks . $zawartosc . ".php");
			?>
		</div>
	</body>
</html>