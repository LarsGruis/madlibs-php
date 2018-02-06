<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
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

	<form action="form1.php" method="post" class="form1">
		<p>Wat zou je graag willen kunnen?</p>
		<p>Met welke persoon kun je goed opschieten?</p> 
		<p>Wat is je favoriete getal?</p>
		<p>Wat heb je altijd bij je als je op vakantie gaat?</p>
		<p>Wat is je beste persoonlijke eigenschap?</p> 
		<p>Wat is je slechtste persoonlijke eigenschap?</p> 
		<p>Wat is je favoriete bezigheid?</p> 
		<br>
		<input type="submit" value="Verstuur" class="verstuur-onkunde">

	<div class="flexbox">	
		<input type="text" name="kunnen">
		<input type="text" name="opschieten">
		<input type="text" name="getal">
		<input type="text" name="vakantie">
		<input type="text" name="beste">
		<input type="text" name="slechtste">
		<input type="text" name="ergste">
    </div>
	</form>
   	   <footer><p>Deze website is gemaakt door Spinoza</p></footer>	
   </div>
</body>
</html>