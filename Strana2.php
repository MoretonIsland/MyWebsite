<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Strana1.css">
<script src="myscripts.js"></script>
<title>Test</title>
<link href="https://fonts.googleapis.com/css?family=Cinzel|Libre+Baskerville|Merienda+One" rel="stylesheet">

  
    
<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <style>
      * {
        box-sizing: border-box;
      }
      
      
      body {
        background-color:white;
        padding: 20px;
        font-family:;
      }
  

      /* Center website */
      .main {
        max-width: 1000px;
        margin: auto;
      }
      
      h1 {
        font-size: 30px; 
        color: DarkGoldenRod;
        font-family: 'Merienda One', cursive;
        text-shadow: 0px 3px 5px Black;
      }

      
      h2 {
        font-size: 20px;
        font-family: 'Merienda One', cursive;
        text-shadow: 0px 3px 5px Black;
      }
      .row {
        margin: 10px -16px;
      }
      
      </style>


<style> 
/* 
   Nastavuje pozici, šířku a maximální šířku kontejneru.
*/
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}
/* 
    Styl pro základní obrázek.
    Nastavuje šířku na 100% a automatickou výšku.
    Určuje relativní pozici obrázku a z-index 1 pro správné překrytí.
*/
.image {
  display: block;
  width: 100%;
  height: auto;
  position: relative;
  z-index: 1;
}

/* 
    Styl pro překryv obrázků.
    Nastavuje absolutní pozici s plnou velikostí, aby překrylo základní obrázek.
    Výchozí průhlednost je 0.
*/
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
}

/* 
    Styl pro překryv při najetí myší na kontejner.
    Při najetí myší se změní průhlednost překryvu na 1 a stane se viditelným.
*/

.container:hover .overlay {
  opacity: 1;
}

/* 
    Styl pro překrytý obrázek.
    Na začátku není viditelný, je skrytý.
    Nastavuje absolutní pozici, která je nastavena na střed kontejneru.
    Z-index 3 zajišťuje, že překrytý obrázek bude viditelný před překryvem.
*/


.overlay-image {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  z-index: 3;
}

/* 
    Styl pro překrytý obrázek při najetí myší na kontejner.
    Při najetí myší se změní viditelnost překrytého obrázku na "block" a stane se viditelným.
*/
.container:hover .overlay-image {
  display: block;
}
</style>
  </head>
  <body>
    
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Strana1.php">Gallery</a></li>
      <li><a href="#" class="a">Views</a></li>
      <li><a href="Strana3.php">Random numbers</a></li>
      <li><a href="Strana4.php">Contact</a></li>
  
  </ul>
  

<!-- MAIN (Center website) -->
<div class="main">


<?php
echo "<h1>MyWebsite</h1>";
?> 
  <hr>

  <style>
   /* 
    Animace - velikost obrazců, pozice a barva
*/ 
    #container {
      width: 100px;
      height: 100px;
      position: relative;
      background: #ff59ff;
    }
    
    #animate {
      width: 25px;
      height: 25px;
      position: absolute;
      background-color: yellow;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <div id="container">
    <div id="animate"></div>
  </div>

  <p><button onclick="myMove()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>

  <script>
    function myMove() {
      let id = null;
      const elem = document.getElementById("animate");//Element, který je animován.
      let posTop = 0; // Pozice nahoru
      let posLeft = 0; // Pozice doleva
      let direction = 1; // Směr pohybu (1: dopředu, -1: zpět)
      clearInterval(id);// Zajištění, že interval neběží
      id = setInterval(frame, 5); 
      function frame() { // Deklarace funkce frame ()
        // Pokud je animace dokončena, pozice nahoru a doleva je 0 a směr je -1
        if (posTop === 0 && posLeft === 0 && direction === -1) {
          clearInterval(id);  
        } else {
          if (posTop === 0 && posLeft < 75) {  // Pohyb dopředu nahoru (pozice nahoru je 0 a pozice doleva je menší než 75)
            posLeft++;  // Posun pozice doleva o 1
          } else if (posLeft === 75 && posTop < 75) {  // Pohyb dopředu doprava (pozice doleva je 75 a pozice nahoru je menší než 75)
            posTop++; // Posun pozice nahoru o 1
          } else if (posTop === 75 && posLeft > 0) {  // Pohyb zpět dolů (pozice nahoru je 75 a pozice doleva je větší než 0)
            posLeft--; // Posun pozice doleva o 1
          } else if (posLeft === 0 && posTop > 0) { // Pohyb zpět doleva (pozice doleva je 0 a pozice nahoru je větší než 0)
            posTop--;// Posun pozice nahoru o 1
            if (posTop === 0) {
              direction = -1; // Změna směru na zpět (po dosažení počáteční pozice nahoru)
            }
          }
          elem.style.top = posTop + "px"; // Nastavení aktuální pozice nahoru pro stylování elementu
          elem.style.left = posLeft + "px"; // Nastavení aktuální pozice doleva pro stylování elementu
        }
      }
    }
  </script>


<?php
echo" <h2>VIEWS</h2>";
?>  
<hr> 
  
  <p>💟💟Touch the pictures below to get watermark.💟💟</p>

  


<div class="container">
  <img src="View2.jpg" alt="Avatar" class="image">
  <div class="overlay"></div>
  <img src="View2V.jpg" alt="Overlay Image" class="overlay-image">
</div>
<br>
<hr> 
<br>
<div class="container">
  <img src="View3.jpg" alt="Avatar" class="image">
  <div class="overlay"></div>
  <img src="View3V.jpg" alt="Overlay Image" class="overlay-image">
</div>
<br>
<hr>
<br>
<div class="container">
  <img src="Malmö.jpg" alt="Avatar" class="image">
  <div class="overlay"></div>
  <img src="MalmöV.jpg" alt="Overlay Image" class="overlay-image">
</div>
<br>
<hr>
<br>
<div class="container">
  <img src="View4.jpg" alt="Avatar" class="image">
  <div class="overlay"></div>
  <img src="View4V.jpg" alt="Overlay Image" class="overlay-image">
</div>

<!--
<div class="container">
  <img src="img_avatar.png" alt="Avatar" class="image">
  <div class="overlay">
    <a href="#" class="icon" title="User Profile">
      <i class="fa fa-user"></i>
    </a>
  </div>
</div>-->
  <br>
  <br>
  <br>
  <br>
  <footer>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="flex: 1; text-align: left;"><span class="footer-text"><?php echo "© 2010-" . date("Y") . " Firma.cz"; ?></span></div>
        <div style="flex: 1; text-align: center;"><h4 style="margin: 0; color: DarkGoldenRod;">MyWebsite</h4></div>
        <div style="flex: 1; text-align: right;"><h4 style="margin: 0;">Uliční 1234, 250 00 Město, Czech republic</h4></div>
    </div>
</footer>
  </body>
</html>