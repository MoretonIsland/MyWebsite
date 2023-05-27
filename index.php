
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Strana1.css">
    <script src="myscripts.js"></script>
    <title>Test</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Libre+Baskerville|Merienda+One" rel="stylesheet">
    
    
<!--
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="Strana1.css">
  <title>Test</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Libre+Baskerville|Merienda+One" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   
   <!-- 
      h2 {
        font-size: 30px;
        font-family: 'Merienda One', cursive;
text-shadow: 0px 3px 5px Black;
      } -->


  

   
   <style>
      * {
    box-sizing: border-box;
      }
       
      body {
        background-color:white;
        padding: 20px;
      
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

      
h4 {
  font-size: 16px;
}


      li a:hover {
    background-color: #111;
  }

.a {
    background-color: DarkGoldenRod;
    color: white;
  }

  .row {
        margin: 10px -16px;
      }
      
      /* Barva a velikost obrazců, velký čtverec 100px, malý čtverec 25 px, velký čtverec červený, malý čtverec MediumBlue*/
      #container {
  width: 100px;
  height: 100px;
  position: relative;
  background: red;
}
#animate {
  width: 25px;
  height: 25px;
  position: absolute;
  background-color: MediumBlue;
}


</style>
</head>
<body>


<ul>
        <li><a href="#" class="a">Home</a></li>
        <li><a href="Strana1.php">Gallery</a></li>
        <li><a href="Strana2.php">Views</a></li>
        <li><a href="Strana3.php">Random numbers</a></li>
        <li><a href="Strana4.php">Contact</a></li>
    
    </ul>

    
   <!-- MAIN (Center website) -->
<div class="main">

   
    
<div style="text-align: center;"></div>


<?php
echo "<h1>MyWebsite</h1>";
?> 
  <hr>
  
<div id ="container">
  <div id ="animate"></div>
</div>
<p><button onclick="myMove()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>

<!-- Animace -->
<script>
function myMove() {
  let id = null;
  const elem = document.getElementById("animate");   
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 75) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + "px"; 
      elem.style.left = pos + "px"; 
    }
  }
}
</script> 

<?php
echo "<h2>HOME</h2>";
?> 
<hr>
<br>
<?php
echo "<h3>Date, time and time zone:</h3>";
?> 

<button type="button" onclick="document.getElementById('demo').innerHTML = Date()" style="background-color: DarkGoldenRod; color: white;">
💟Click here to see date, time and time zone.💟
</button>

<p id="demo"></p>

<hr>
<br>
<h3>The World Clock</h3>

<p>The link will open in a new browser window.</p>

<a href="https://www.timeanddate.com/worldclock/" target="_blank">The World Clock</a> 
<br>
<br>
<br>
<br>
<hr>

<!-- Vložení vodoznaku na obrázek v php, obrázky se uložily do složky Test (wamp-www-Test) -->
<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends2.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends2V.jpg", 50);
imagedestroy($im);
?>


<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers2.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers2V.jpg", 50);
imagedestroy($im);
?>



<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature1.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature1V.jpg", 50);
imagedestroy($im);
?>


<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature6.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature6V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers5.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers5V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers4.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers4V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends1.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends1V.jpg", 50);
imagedestroy($im);
?>


<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends10.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends10V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers3.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers3V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature4.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature4V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature3.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature3V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature5.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature5V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Nature2.jpg");
$wm = imagecreatefrompng("Nature.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Nature2V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends5.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends5V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends4.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends4V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Friends3.jpg");
$wm = imagecreatefrompng("Friends.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Friends3V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers1.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers1V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 600;
$h = 730;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Flowers6.jpg");
$wm = imagecreatefrompng("Flowers.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 600, 730);
imagejpeg($im, "Flowers6V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 400;
$h = 533;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("View2.jpg");
$wm = imagecreatefrompng("Views.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 400, 533);
imagejpeg($im, "View2V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 400;
$h = 533;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("Malmö.jpg");
$wm = imagecreatefrompng("Malmö.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 400, 533);
imagejpeg($im, "MalmöV.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 400;
$h = 533;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("View3.jpg");
$wm = imagecreatefrompng("Views.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 400, 533);
imagejpeg($im, "View3V.jpg", 50);
imagedestroy($im);
?>

<?php
$w = 400;
$h = 533;
$im = imagecreatetruecolor($w, $h);
$orig = imagecreatefromjpeg("View4.jpg");
$wm = imagecreatefrompng("Views.png");
imagecopy($im, $orig, 0, 0, 0, 0, $w, $h);
imagecopy($im, $wm, 50, 50, 0, 0, 400, 533);
imagejpeg($im, "View4V.jpg", 50);
imagedestroy($im);
?>

<br>
<br>
<br>
<!-- Vložení obrázku -->
<img src="View5.jpg" alt="View" class="image">

<br>
<br>
<br>
<br>
<!-- Footer -->
<footer>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="flex: 1; text-align: left;"><span class="footer-text"><?php echo "© 2010-" . date("Y") . " Firma.cz"; ?></span></div>
        <div style="flex: 1; text-align: center;"><h4 style="margin: 0; color: DarkGoldenRod;">MyWebsite</h4></div>
        <div style="flex: 1; text-align: right;"><h4 style="margin: 0;">Uliční 1234, 250 00 Město, Czech republic</h4></div>
    </div>
</footer>

</body>
</html>


