<?php
  session_start();
?>
<html>
<head>
<title>Strona Główna</title>
<link rel="stylesheet" href="style2.css" type="text/css"/>
</head>
<body>
<div id = "menubuttons">
<div id = "button"><a href="galeria.php" class = "button">Galeria Zdjęć</a> </div>
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
<div id = "container2">
<div class="slideshow-container">

<div class="mySlides">
<h2 class="author">OTWARTY ŚWIAT</h2>
       <q>W otwartym świecie "Dzikiego Gonu" nic nie musisz, ale wszystko możesz - to ty decydujesz, którą ścieżkę wybrać i jak potoczy się twoja przygoda. 
      Wcielasz się w wiedźmina - łowcę potworów, człowieka drogi, który zarabia na życie zabijając zagrażające ludziom plugawe monstra. 
      Sam wyznaczasz cele i wybierasz miejsca, do których się udasz. Możesz starać się o nagrodę za łeb odrażającej bestii, 
      która zaatakowała jakąś wioskę lub wspomóc intrygi księcia szukającego kogoś od mokrej roboty. Niezależnie od tego, 
      który styl bardziej ci odpowiada, znajdziesz go w “Wiedźminie”.</q>
</div>

<div class="mySlides">
<h2 class="author">ŁOWCA POTWORÓW</h2>
<q>Geralt jest wiedźminem, a każdy wiedźmin to odmieniec - człowiek poddany wyczerpującemu szkoleniu i mutacjom, których celem jest tylko jedno
       - stworzenie prawdziwej maszyny do zabijania potworów. Geralt, jako dziecko oddany do elitarnej Szkoły Wilka, oprócz nadludzkiej siły  i refleksu, 
       nie ma też sobie równych w walce na miecze - dzięki temu zyskał sławę niepokonanego wojownika, prawdziwego wirtuoza w swoim krwawym fachu.</q>
</div>

<div class="mySlides">
<h2 class="author">MUTACJE I ZDOLNOŚCI</h2>
  <q>Za sprawą mutacji wiedźmini zyskują niezwykłą szybkość, nadzwyczajny refleks i siłę. Mają także wyostrzone zmysły, dzięki którym więcej widzą, słyszą i dostrzegają. 
      Udoskonalone zmysły Geralta pozwalają mu wytropić wywernę nawet w bezksiężycową noc, podążać śladem perfum,
       których właścicielka przechodziła daną trasą wiele dni wcześniej albo parować bełty z kuszy, które ktoś wystrzelił w jego plecy. 
       Wiedźmińskie Znaki - kolejna pozycja w repertuarze zdolności Geralta - to potężne zaklęcia bojowe przybierające różne formy, od barier ochronnych, 
       przez nawałnice płomieni, po magiczne sidła i inne. Geralt posiada także swój wilczy medalion, symbol jego wiedźmińskiej szkoły, który ostrzega o bliskości magii i bestii, 
       stanowiąc bezcenne wsparcie dla łowcy potworów. Większość z tych zdolności można rozwijać, zwiększając ich możliwości i siłę, 
       by uczynić Geralta jeszcze bardziej przerażającym i skutecznym wojownikiem.</q>
</div>

<div class="mySlides">
<h2 class="author">EKWIPUNEK</h2>
  <q>Geralt, jako to łowca potworów, dysponuje imponującym arsenałem broni i umiejętności. Narzędzia wiedźmińskiego fachu - od mieczy, przez topory i kusze, 
      aż po wyposażenie specjalne dostępne tylko u najznamienitszych rzemieślników - pozwalają Geraltowi zadawać śmierć na wiele sposobów. 
      Szeroki wachlarz pancerzy chroni Geralta przed atakami fizycznymi i magicznymi, oddalając widmo zgonu, 
      a potężne oleje do smarowania ostrzy i bomby zapewniają mu dodatkową przewagę w walce. Wiedza z dziedziny alchemii umożliwia wiedźminowi rozpoznawanie rzadkich ziół, 
      z których warzy specjalne, wysoce toksyczne mikstury. Każda z nich zabiłyby zwyklego człowieka, ale zmutowany organizm Geralta radzi sobie z nimi bez problemów, 
      zyskując dodatkowe moce, takie jak widzenie w ciemności, szybsze ruchy, większa siła ciosów i wiele, wiele innych.</q>
</div>

<div class="mySlides">
<h2 class="author">POLOWANIE NA POTWORY</h2>
  <q>Geralt jest najemnym łowcą potworów w świecie, w którym naprawdę źle się dzieje. Stanowi niezbędną przeciwwagę dla przerażających monstrów, 
      licznie zamieszkujących niemal każde środowisko, a jego głównym zadaniem jest eliminowanie stworzeń, które zagrażają ludzkim społecznościom. 
      Polowanie na potwory to jego fach, a zleceń nigdy nie brakuje. Niektóre bestie należą do określonych gatunków, inne są unikatowe. 
      Te ostatnie są często wyjątkowo potężne lub inteligentne, a więc skuteczna walka z nimi wymaga nadzwyczajnych środków. 
      Wcielając się w Geralta wyruszysz na specjalne misje, podczas których poznasz styl walki i zachowania bestii, z którymi potem przyjdzie ci się zmierzyć.</q>
</div>

<div class="mySlides">
<h2 class="author">SOJUSZNICY I WROGOWIE</h2>
  <q>Wróg twojego wroga jest twoim przyjacielem - nie możesz sobie więc pozwolić na rozważania, czy jest istotą cnotliwą i szlachetną, 
      czy też bezwzględną i nikczemną do cna. Geralt to zawodowiec i jeśli tylko ułatwi mu to realizację zadania, przyjmie pomoc łotrów i kanalii,
       przebiegłych czarodziejek i rubasznych krasnoludów. Wiedźmin może również sam stać się celem - 
       postacie pragnące pokrzyżować mu plany mogą nasyłać na niego swoich szpiegów, zabójców czy zwykłych oprychów. 
       Władze zwykle nie przepadają za wiedźminami - nie możesz więc liczyć na pomoc strażników czy żołnierzy, musisz radzić sobie sam - a walka bywa niełatwa.</q>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
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