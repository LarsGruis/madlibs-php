<?php
	$huisdier = $_POST["huisdier"];
	$persoon = $_POST["persoon"];
	$land = $_POST["land"];
	$vervelen = $_POST["vervelen"];
	$speelgoed = $_POST["speelgoed"];
	$docent = $_POST["docent"];
	$kopen = $_POST["kopen"];
	$bezigheid = $_POST["bezigheid"];
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

	<p>Er heerst paniek. Er heerst paniek in het koninkrijk "<?=$land?>."</p> 
	<p>Koning "<?=$docent?>" is ten einde raad en als koning "<?=$docent?>" ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$persoon?>."</p> 
	<p>"<?=$persoon?>"! Het is een ramp! Het is een schande!"</p>
	<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p> 
	<p>"Mijn <?=$huisdier?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net" <?=$speelgoed?> "voor hem gekocht!"</p> 
	<p>"Majesteit, uw <?=$huisdier?> komt vast vanzelf weer terug?"</p>
	<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$bezigheid?> leren?"</p> 
	<p>"Maar Sire, daar kunt u toch uw" <?=$kopen?> "voor gebruiken."</p> 
	<p>"<?=$persoon?> ", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p> 
	<p>"Mij <?=$vervelen?>, Sire."</p>
	<footer><p>Deze website is gemaakt door Spinoza</p></footer>	




</body>
</html>
	 