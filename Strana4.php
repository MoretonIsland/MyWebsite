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
      } /* Nastaví vypočítávání velikosti prvku včetně borderu a paddingu. */
      
      
      body {
        background-color:white; /* Nastaví barvu pozadí pro celý dokument. */
        padding: 20px; /* Přidá 20px odsazení uvnitř prvku <body>. */
        font-family:;/* Nastaví výchozí fontovou rodinu pro text v dokumentu. */
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
        font-size: 20px;
        font-family: 'Merienda One', cursive;
        
      }


      .contact-word {
  margin-right: 15px; /* nastavení většího odsazení mezi slovy */
}
      .row {
        margin: 10px -16px;
      }

      
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
      background-color: white;
      border-radius: 50%;
    }
</style>
  </head>
  <body>
    
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Strana1.php">Gallery</a></li>
      <li><a href="Strana2.php">Views</a></li>
      <li><a href="Strana3.php">Random numbers</a></li>
      <li><a href="#" class="a">Contact</a></li>
  
  </ul>
  
  

<!-- MAIN (Center website) -->
<div class="main">

<?php
echo "<h1>MyWebsite</h1>";
?> 
  <hr>
  
  <div id="container">
    <div id="animate"></div>
  </div>

  <p><button onclick="myMove()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>

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
echo "<h2 style='display: inline;'><span class='contact-word'>CONTACT:</span></h2><p style='display: inline;'> Uliční 1234, 25000 Město, Czech republic</p>";
?>

<hr> 
<br>

<?php
echo "<h3>Contact form:</h3>";
?>  
  
  
  <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <h4 class="custom-heading">Name:</h4> <input type="text" name="name">
  
  <h4 class="custom-heading">E-mail:</h4> <input type="text" name="email">

  <h4 class="custom-heading">Website:</h4> <input type="text" name="website">
 
  <h4 class="custom-heading">Comment:</h4> <textarea name="comment" rows="5" cols="40"></textarea>

  <h4 class="custom-heading">Gender:</h4>
  <input type="radio" name="gender" value="female"><span class="custom-radio-label">Female</span>
  <input type="radio" name="gender" value="male"><span class="custom-radio-label">Male</span>
  <input type="radio" name="gender" value="other"><span class="custom-radio-label">Other</span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<style>
.custom-heading {
  color: black; /* Změňte barvu podle potřeby */
  font-size: 24px; /* Změňte velikost písma podle potřeby */
}

.custom-radio-label {
  color: blue; /* Změňte barvu podle potřeby */
  font-size: 18px; /* Změňte velikost písma podle potřeby */
}
</style>

  <style>
    input[type="submit"] {
      color: white; /* Změňte barvu podle potřeby */
      border: 2px white; /* Změňte barvu rámečku podle potřeby */
      padding: 10px 20px; /* Změňte vnitřní odsazení podle potřeby */
      background-color: DarkGoldenRod; /* Změňte barvu pozadí podle potřeby */
    }
  </style>
<br>
<hr>
<?php
echo "<style>
.custom-heading {
  font-size: 18px;
}

.custom-text {
  color: blue; 
  font-size: 18px;
}
</style>";

echo '<h3 class="custom-heading">Your input:</h3>';
echo '<h4 class="custom-text">' . $name . '</h4>';

echo '<h4 class="custom-text">' . $email . '</h4>';

echo '<h4 class="custom-text">' . $website . '</h4>';

echo '<h4 class="custom-text">' . $comment . '</h4>';

echo '<h4 class="custom-text">' . $gender . '</h4>';
?>
<hr>
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

  