 
 // Funkce pro generování náhodných čísel v zadaném rozsahu
function generateRandomNumbers(min, max) {
    var numbers = [];
    for (var i = 0; i < 10; i++) {
      numbers.push(Math.floor(Math.random() * (max - min + 1)) + min);
    }
    var ul = document.getElementById("randomNumbers");
    ul.innerHTML = numbers.map(number => `<li>${number}.</li>`).join("");
  }
 
 
  
  // Funkce pro výpočet statistik
  function calculateStatistics() {
    var lis = document.querySelectorAll("#randomNumbers li");
    var numbers = Array.from(lis).map(function(li) {
      return parseInt(li.textContent);
    });
  
    var min = Math.min.apply(null, numbers);
    var max = Math.max.apply(null, numbers);
    var sum = numbers.reduce(function(acc, curr) {
      return acc + curr;
    }, 0);
    var average = sum / numbers.length;
  
    numbers.sort(function(a, b) {
      return a - b;
    });
    var median;
    if (numbers.length % 2 === 0) {
      var mid1 = numbers.length / 2 - 1;
      var mid2 = numbers.length / 2;
      median = (numbers[mid1] + numbers[mid2]) / 2;
    } else {
      var mid = Math.floor(numbers.length / 2);
      median = numbers[mid];
    }
  
    var squaredDiffs = numbers.map(function(number) {
      return Math.pow(number - average, 2);
    });
    var variance = squaredDiffs.reduce(function(acc, curr) {
      return acc + curr;
    }, 0) / numbers.length;
  
    document.getElementById("min").textContent = "Minimum: " + min;
    document.getElementById("max").textContent = "Maximum: " + max;
    document.getElementById("average").textContent = "Average: " + average.toFixed(2);
    document.getElementById("median").textContent = "Median: " + median;
    document.getElementById("variance").textContent = "Variance: " + variance.toFixed(2);
  }