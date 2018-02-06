<?php
	$kunnen = $_POST["kunnen"];
	$opschieten = $_POST["opschieten"];
	$getal = $_POST["getal"];
	$vakantie = $_POST["vakantie"];
	$beste = $_POST["beste"];
	$slechtste = $_POST["slechtste"];
	$ergste = $_POST["ergste"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Verhaal</title>
		<link rel="stylesheet" type="text/css" href="madlibs.css">
	</head>
<body>
	<header><img src="madlibs.png" alt="Mad Libs Logo" title="Mad Libs"></header>
	<div class="grijs">	
		<nav>
			<li><a href="madlibs.php">Er heerst paniek...</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>	
	    </nav>
	<h1>Onkunde</h1>
		<p>Er zijn veel mensen die niet kunnen <?=$kunnen?>. Neem nou <?=$opschieten?>. Zelfs met de hulp van een <?=$vakantie?> of zelfs <?=$getal?> kan <?=$opschieten?> niet <?=$kunnen?>. Dat heeft niet te maken met een gebrek aan <?=$beste?>, maar met een te veel aan <?=$slechtste?>. Te veel <?=$slechtste?> leidt tot <?=$ergste?> en dat is niet goed als je wilt <?=$kunnen?>. Helaas voor <?=$opschieten?>.</p>
		
	<footer><p>Deze website is gemaakt door Spinoza</p></footer>	




</body>
</html>