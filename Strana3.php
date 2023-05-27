<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Strana1.css">
<script src="myscripts.js"></script>
<title>Test</title>
<link href="https://fonts.googleapis.com/css?family=Cinzel|Libre+Baskerville|Merienda+One" rel="stylesheet">

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

      h3 {
        font-size: 15px;
        font-family: 'Cinzel', serif;

      }

      
#container {
  width: 100px;
  height: 100px;
  position: relative;
  background: DarkOrange;
}
#animate {
  width: 25px;
  height: 25px;
  position: absolute;
  background-color:DodgerBlue;
}   
      .row {
        margin: 10px -16px;
      }

</style>
 </head>
 <body>
    
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Strana1.php">Gallery</a></li>
      <li><a href="Strana2.php">Views</a></li>
      <li><a href="#" class="a">Random numbers</a></li>
      <li><a href="Strana4.php">Contact</a></li>
  
  </ul>

   
<!-- MAIN (Center website) -->
<div class="main">

<?php
echo "<h1>MyWebsite</h1>";
?> 
  <hr>

<div id ="container">
  <div id ="animate"></div>
</div>

<p><button onclick="myMove()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>



<script>
function myMove() {
  let id = null;
  const elem = document.getElementById("animate");
  let posTop = 0; // Pozice nahoru
  let posLeft = 0; // Pozice doleva
  let direction = 1; // Směr pohybu (1: dopředu, -1: zpět)
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (posTop === 0 && posLeft === 0 && direction === -1) {
      clearInterval(id);
    } else {
      if (posTop === 0 && posLeft < 75) {
        posLeft++;
      } else if (posLeft === 75 && posTop < 75) {
        posTop++;
      } else if (posTop === 75 && posLeft > 0) {
        posLeft--;
      } else if (posLeft === 0 && posTop > 0) {
        posTop--;
        if (posTop === 0) {
          direction = -1; // Změna směru na zpět
        }
      }
      elem.style.top = posTop + "px";
      elem.style.left = posLeft + "px";
    }
  }
}
</script>

<?php
echo "<h2>RANDOM NUMBERS</h2>";
?> 
<hr> 

  <p>💟💟Update this page to get random numbers.💟💟</p>
  
   

  <?php
echo "<h3>10 random numbers from 1 to 100:</h3>"; ?>


<?php

for ($i = 1; $i <=10; $i++) {
    echo "<li>";
    echo rand(1, 100);
    echo "</li>";
}
?>
<br>
<br>
<hr> 
<br>

<?php
echo "<h3>10 random numbers from 1 to 1000: </h3>"; ?>

<?php

for ($i = 1; $i <=10; $i++) {
    echo "<li>";
    echo rand(0, 1000);
    echo "</li>";
}
?>
<br> 
<br>
<hr> 
<br>

<?php
echo "<h3>10 random numbers from 1 to 10000:</h3>"; ?>

<?php

for ($i = 1; $i <=10; $i++) {
    echo "<li>";
    echo rand(1, 10000);
    echo "</li>";
}
?>
<br> 
<br>
<hr> 
<br> 
<br>
<br>
<br> 
<br>
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
