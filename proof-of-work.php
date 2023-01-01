<!DOCTYPE html>
<html>
<head>
<style>
  
#Progress_Status {
  width: 50%;
  background-color: #ddd;
}
  
#myprogressBar {
  width: 1%;
  height: 35px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 32px;
  color: black;
}
  
  
</style>
</head>
<body>
  
<h3>Example of mintme intersitial page</h3>
  
<p>after hashes are complete users will be redirect to google: for Example</p>
  
<div id="Progress_Status">
  <div id="myprogressBar">1%</div>
</div>
  
<br>
<a id="btn" onclick="mine()"></a> 
  
<script>

window.onload = function(){
  document.getElementById('btn').click();
  
var scriptTag = document.createElement("script");
scriptTag.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js";
document.getElementsByTagName("head")[0].appendChild(scriptTag);
}
  
function mine() {
  var element = document.getElementById("myprogressBar");   
  var width = 1;
  var identity = setInterval(scene, 1500);<!--hash-Value-->
  function scene() {
    if (width >= 100) {
      window.location.href = "https://www.google.com";
    } else {
      width++; 
      element.style.width = width + '%'; 
      element.innerHTML = width * 1  + '%';
    }
  }
}
</script>
</body>
</html>