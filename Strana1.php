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
      
      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
        padding: 8px;
      }
      
      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        display: none; /* Hide all elements by default */
      }
      
      /* Clear floats after rows */ 
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* Content */
      .content {
        background-color: white;
        padding: 10px;
      }
      
      /* The "show" class is added to the filtered elements */
      .show {
        display: block;
      }
      
      /* Style the buttons */
      .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
      }
      
      .btn:hover {
        background-color: #ddd;
      }
      
      .btn.active {
        background-color: DarkGoldenRod;
        color: white;
      }
      </style>
      </head>
      <body>
  
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#" class="a">Gallery</a></li>
      <li><a href="Strana2.php">Views</a></li>
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
    #container {
      width: 100px;
      height: 100px;
      position: relative;
      background: red;
      overflow: hidden;
    }
    
    .animate {
      width: 25px;
      height: 25px;
      position: absolute;
      background-color: white;
      border-radius: 50%;
    }
  </style>

  <div id="container">
    <div class="animate" id="animate1"></div>
    <div class="animate" id="animate2"></div>
  </div>

  <p><button onclick="startAnimation()" style="background-color: DarkGoldenRod; color: white;">💟Click here💟</button></p>

  <script>
    let animationInterval;

    function startAnimation() {
      const animate1 = document.getElementById("animate1");
      const animate2 = document.getElementById("animate2");
      const container = document.getElementById("container");
      const containerWidth = container.offsetWidth;
      const containerHeight = container.offsetHeight;
      const radius = 45; // Poloměr kružnice (menší než polovina rozměrů čtverce)
      const centerX = containerWidth / 2;
      const centerY = containerHeight / 2;
      const angleIncrement = 0.01;
      const offsetX = 10; // Vychýlení doleva
      const offsetY = 10; // Vychýlení nahoru
      let angle1 = 0;
      let angle2 = Math.PI;

      clearInterval(animationInterval);
      animationInterval = setInterval(() => {
        const x1 = centerX + Math.cos(angle1) * (radius - animate1.offsetWidth / 2) - offsetX;
        const y1 = centerY + Math.sin(angle1) * (radius - animate1.offsetHeight / 2) - offsetY;
        const x2 = centerX + Math.cos(angle2) * (radius - animate2.offsetWidth / 2) - offsetX;
        const y2 = centerY + Math.sin(angle2) * (radius - animate2.offsetHeight / 2) - offsetY;

        animate1.style.left = Math.max(0, Math.min(containerWidth - animate1.offsetWidth, x1)) + "px";
        animate1.style.top = Math.max(0, Math.min(containerHeight - animate1.offsetHeight, y1)) + "px";

        animate2.style.left = Math.max(0, Math.min(containerWidth - animate2.offsetWidth, x2)) + "px";
        animate2.style.top = Math.max(0, Math.min(containerHeight - animate2.offsetHeight, y2)) + "px";

        angle1 += angleIncrement;
        angle2 += angleIncrement;
      }, 10);

      setTimeout(() => {
        clearInterval(animationInterval);
      }, 5000);
    }
  </script>
 
  <?php
echo "<h2>GALLERY</h2>";
?> 
<hr> 
  <p>💟💟Click on the buttons to get pictures.💟💟</p>
  <br>
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> 💟Show all💟</button>
    <button class="btn" onclick="filterSelection('Nature')"> Nature</button>
    <button class="btn" onclick="filterSelection('Flowers')"> Flowers</button>
    <button class="btn" onclick="filterSelection('Friends')"> Friends</button>
  </div>
  
  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column Nature">
      <div class="content">
        <img src="Nature1V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>
    <div class="column Nature">
      <div class="content">
      <img src="Nature2V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>
    <div class="column Nature">
      <div class="content">
      <img src="Nature3V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>
    
    <div class="column Nature">
      <div class="content">
        <img src="Nature4V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>


    <div class="column Nature">
      <div class="content">
        <img src="Nature5V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>



    <div class="column Nature">
      <div class="content">
      <img src="Nature6V.jpg" alt="Nature" style="width:100%">
        <h3>Nature</h3>
        
      </div>
    </div>


    <div class="column Flowers">
      <div class="content">
        <img src="Flowers1V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>
    <div class="column Flowers">
      <div class="content">
      <img src="Flowers2V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>
    <div class="column Flowers">
      <div class="content">
      <img src="Flowers3V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>
  
    <div class="column Flowers">
      <div class="content">
      <img src="Flowers4V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>


    <div class="column Flowers">
      <div class="content">
      <img src="Flowers5V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>

    <div class="column Flowers">
      <div class="content">
      <img src="Flowers6V.jpg" alt="Flowers" style="width:100%">
        <h3>Flowers</h3>
        
      </div>
    </div>


    <div class="column Friends">
      <div class="content">
        <img src="Friends1V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>
    <div class="column Friends">
      <div class="content">
      <img src="Friends2V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>
   

    <div class="column Friends">
      <div class="content">
      <img src="Friends3V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>

    <div class="column Friends">
      <div class="content">
      <img src="Friends4V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>

    <div class="column Friends">
      <div class="content">
    <img src="Friends5V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>

    <div class="column Friends">
      <div class="content">
    <img src="Friends6V.jpg" alt="Friends" style="width:100%">
        <h3>Friends</h3>
        
      </div>
    </div>

  <!-- END GRID -->
  </div>
  
  <!-- END MAIN -->
  </div>
  
  <script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
    }
  }
  
  function AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
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
