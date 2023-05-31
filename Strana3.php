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

      h3 {
        font-size: 15px;
        font-family: 'Cinzel', serif;

      }
      
/* 
Animace - velikost obrazců, pozice a barva
*/    
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
<!-- ANIMACE -->
<div id ="container">
  <div id ="animate"></div>
</div>

<p><button onclick="myMove()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>

<!-- ANIMACE -->
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

<!-- GENEROVÁNÍ NÁHODNÝCH ČÍSEL -->
<?php
echo "<h3>10 random numbers from 1 to 1000:</h3>";
?>
<ul id="randomNumbers1000"></ul>
<p><button onclick="generateRandomNumbers(10, 1, 1000)">Generate</button></p>

<?php
echo "<h3>10 random numbers from 1000 to 5000:</h3>";
?>
<ul id="randomNumbers5000"></ul>
<p><button onclick="generateRandomNumbers(10, 1000, 5000)">Generate</button></p>

<?php
echo "<h3>10 random numbers from 5000 to 10000:</h3>";
?>
<ul id="randomNumbers10000"></ul>
<p><button onclick="generateRandomNumbers(10, 5000, 10000)">Generate</button></p>


<?php echo "<h3>Statistics random numbers 1 - 1000:</h3>"; ?>
<p><button onclick="calculateStatistics()">Calculate</button></p>
<p id="min"></p>
<p id="max"></p>
<p id="average"></p>
<p id="median"></p>
<p id="variance"></p>
<p id="evenCount"></p>
<p id="oddCount"></p>

<script>
function generateRandomNumbers(quantity, min, max) {
  // Vytvoření prázdného seznamu
  const list = document.createElement("ul");
  // Inicializace proměnných
  let numbers = []; // Pole pro uložení vygenerovaných čísel
  let sum = 0; // Součet vygenerovaných čísel
  let minNumber = Number.MAX_VALUE; // Nejmenší vygenerované číslo
  let maxNumber = Number.MIN_VALUE; // Největší vygenerované číslo

  // Generování náhodných čísel a výpočet statistik
  for (let i = 0; i < quantity; i++) {
    const randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
    numbers.push(randomNumber); // Přidání vygenerovaného čísla do pole
    sum += randomNumber; // Aktualizace součtu
    minNumber = Math.min(minNumber, randomNumber); // Aktualizace nejmenšího čísla
    maxNumber = Math.max(maxNumber, randomNumber); // Aktualizace největšího čísla
  }

  numbers.sort((a, b) => a - b); // Seřadit čísla vzestupně

  for (let i = 0; i < quantity; i++) {
    const listItem = document.createElement("li");
    listItem.innerText = numbers[i];

    // Přidá čárku za číslo, pokud to není poslední číslo v seznamu
    if (i < quantity - 1) {
      listItem.innerText += ",";
    }

    list.appendChild(listItem);
  }

  let targetElement;
  // Určení cílového elementu na základě hodnoty min a max
  if (min === 1 && max === 1000) {
    targetElement = document.getElementById("randomNumbers1000");
  } else if (min === 1000 && max === 5000) {
    targetElement = document.getElementById("randomNumbers5000");
  } else if (min === 5000 && max === 10000) {
    targetElement = document.getElementById("randomNumbers10000");
  }
  // Pokud je cílový element definován
  if (targetElement) {
    targetElement.innerHTML = "";
    targetElement.appendChild(list);
  }
}
function calculateStatistics() {
    const numbersElement = document.getElementById("randomNumbers1000");
    const numbersItems = numbersElement.getElementsByTagName("li");
    let numbers = [];

    // Získání čísel ze seznamu
    for (let i = 0; i < numbersItems.length; i++) {
        const number = parseInt(numbersItems[i].innerText);
        numbers.push(number);
    }

    let min = Math.min(...numbers); // Výpočet minimální hodnoty z pole `numbers`
    let max = Math.max(...numbers); // Výpočet maximální hodnoty z pole `numbers`
    let sum = numbers.reduce((acc, val) => acc + val, 0); // Výpočet součtu hodnot v poli `numbers`
    let average = sum / numbers.length; // Výpočet průměru hodnot v poli `numbers`

    // Seřazení čísel pro výpočet mediánu
    numbers.sort((a, b) => a - b);
    let median = 0;

    if (numbers.length % 2 === 0) {
        const middleIndex1 = numbers.length / 2 - 1;
        const middleIndex2 = numbers.length / 2;
        const number1 = numbers[middleIndex1];
        const number2 = numbers[middleIndex2];
        median = (number1 + number2) / 2;
    } else {
        const middleIndex = Math.floor(numbers.length / 2);
        median = numbers[middleIndex];
    }

    let variance = numbers.reduce((acc, val) => acc + Math.pow(val - average, 2), 0);
    variance /= numbers.length;

    let evenCount = 0;
    let oddCount = 0;

    for (let i = 0; i < numbers.length; i++) {
        if (numbers[i] % 2 === 0) {
            evenCount++;
        } else {
            oddCount++;
        }
    }
    // Přiřazení textového obsahu pro jednotlivé prvky na stránce
    document.getElementById("min").innerText = "Minimum: " + min;
    document.getElementById("max").innerText = "Maximum: " + max;
    document.getElementById("average").innerText = "Average: " + average.toFixed(2);
    document.getElementById("median").innerText = "Median: " + median;
    document.getElementById("variance").innerText = "Variance: " + variance.toFixed(2);
    document.getElementById("evenCount").innerText = "Even numbers: " + evenCount;
    document.getElementById("oddCount").innerText = "Odd numbers: " + oddCount;
}
</script>
    <br>
    <br>
    <hr>
    <br>
<!-- FOOTER -->
    <footer>
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="flex: 1; text-align: left;"><span class="footer-text"><?php echo "© 2010-" . date("Y") . " Firma.cz"; ?></span></div>
        <div style="flex: 1; text-align: center;"><h4 style="margin: 0; color: DarkGoldenRod;">MyWebsite</h4></div>
        <div style="flex: 1; text-align: right;"><h4 style="margin: 0;">Uliční 1234, 250 00 Město, Czech republic</h4></div>
      </div>
    </footer>
  </div>
</body>
</html>