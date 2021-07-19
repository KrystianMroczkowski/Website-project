<?php
	session_start();
?>
<html>
<head>
<title>News</title>
<link rel="stylesheet" href="style2.css" type="text/css"/>
</head>
<body>
<div id = "menubuttons">
<div id = "button"><a href="glowna.php" class = "button">Strona Główna</a> </div>
<div id = "button"><a href="galeria.php" class = "button">Galeria Zdjęć</a> </div>
<div id = "button"><a href="podobne_strony.php" class = "button">Podobne Strony</a> </div>
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
<div id = "news">
    <h2>NEWS</h2>
    <a href="https://thewitcher.com/pl/news/32816/aktualizacje-dla-wiedzmina-3-i-wojny-krwi-na-nintendo-switch" target="_blank">
    <img src="img/news1.jpg" width="296" height="166"></a>
    <a href="https://thewitcher.com/pl/news/32771/oglaszamy-nowa-gre-mobilna-the-witcher-monster-slayer" target="_blank">
    <img src="img/news2.jpg" width="296" height="166"></a>
    <a href="https://thewitcher.com/pl/news/32722/wojna-krwi-od-dzisiaj-dostepna-na-ios" target="_blank">
    <img src="img/news3.jpg" width="296" height="166"></a>
    <br><br>
    <a href="https://thewitcher.com/pl/news/32795/wiedzmin-3-dziki-gon-zmierza-na-nowa-generacje" target="_blank">
    <img src="img/news4.jpg" width="296" height="166"></a>
    <a href="https://thewitcher.com/pl/news/32743/do-rodziny-wiedzminskich-nendoroidow-dolacza-triss-merigold" target="_blank">
    <img src="img/news5.jpg" width="296" height="166"></a>
    <a href="https://thewitcher.com/pl/news/32701/wez-udzial-w-konkursie-cdprgear" target="_blank">
    <img src="img/news6.jpg" width="296" height="166"></a>

</div>

</body>
</html>