<?php
	session_start();
?>
<html>
<head>
<title>Podobne strony</title>
<link rel="stylesheet" href="style2.css" type="text/css"/>
</head>
<body>
<div id = "menubuttons">
<div id = "button"><a href="glowna.php" class = "button">Strona Główna</a> </div>
<div id = "button"><a href="galeria.php" class = "button">Galeria Zdjęć</a> </div>
<div id = "button"><a href="news.php" class = "button">News</a> </div>
<div id = "button"><a href="kontakt.php" class = "button">Kontakt</a></div>
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
    <h3>Przydatne linki:</h3><br>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href = "https://thewitcher.com/pl/witcher3" target="_blank">Oficjalna strona</a><br><br>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href = "https://forums.cdprojektred.com/index.php?forums/seria-gier-wiedzmin.32/" target="_blank">Oficjalne forum</a><br><br>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href = "https://www.gog.com/news/oferta_specjalna_bgry_z_serii_wiedzmin_do_85_taniejb" target="_blank">Kup grę</a>
</div>
</body>
</html>