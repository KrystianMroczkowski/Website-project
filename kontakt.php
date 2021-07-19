<?php
	session_start();
?>
<html>
<head>
<title>Kontakt</title>
<link rel="stylesheet" href="style2.css" type="text/css"/>
</head>
<body>
<div id = "menubuttons">
<div id = "button"><a href="glowna.php" class = "button">Strona Główna</a> </div>
<div id = "button"><a href="galeria.php" class = "button">Galeria Zdjęć</a> </div>
<div id = "button"><a href="news.php" class = "button">News</a> </div>
<div id = "button"><a href="podobne_strony.php" class = "button">Podobne Strony</a> </div>
</div>
<div id = "menubuttons2">
<div id = "button" style="float:right"><a href="db_registration.php" class = "button" <?php if(isset($_SESSION['logged']))
echo($_SESSION['logged'] == true) ? 'style="display:none;"' : ''?>>Zarejestruj się</a></div>
<div id = "button" style="float:right"><a href="login.php" class = "button"<?php if(isset($_SESSION['logged']))
echo($_SESSION['logged'] == true) ? 'style="display:none;"' : '' ?>>Zaloguj się</a></div>
<div id = "button" style="float:right"><a href="logout.php" class ="button"<?php if(!isset($_SESSION['logged']))
echo(true) ? 'style="display:none;"' : ''?>>Wyloguj się</a></div>
</div>
<div style = "clear:both;"></div>
</div>
<div id = "container2">
Email: wiedzmin_strona@wp.pl <br><br>
Numer tel: 123456789
</div>
</body>
</html>