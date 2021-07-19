<?php
	session_start();
?>
<html>
<head>
<title>Galeria zdjęć</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id = "menubuttons">
<div id = "button"><a href="glowna.php" class = "button">Strona Główna</a> </div>
<div id = "button"><a href="news.php" class = "button">News</a> </div>
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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 11</div>
  <img src="img/ss1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 11</div>
  <img src="img/ss2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 11</div>
  <img src="img/ss3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 11</div>
  <img src="img/ss4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 11</div>
  <img src="img/ss5.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 11</div>
  <img src="img/ss6.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 11</div>
  <img src="img/ss7.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 11</div>
  <img src="img/ss8.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 11</div>
  <img src="img/ss9.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 11</div>
  <img src="img/ss10.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 11</div>
  <img src="img/ss11.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>