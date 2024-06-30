<html>
    <head>

    
</head>
    <body>

<a id="loclink" href = '#'> Get Location Posted </a>

<script>
var x = document.getElementById("demo");
var y = document.getElementById("loclink"); 

window.onload = function() {
    getLocation();
    
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {


 y.href = "/getloc.php?lat="+position.coords.latitude +"&lon="+position.coords.longitude;

}
</script>
</body>
    </html>



<?php
?>