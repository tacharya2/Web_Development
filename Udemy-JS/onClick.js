
function myfunction() {
preventDefault();
var x = document.getElementById("xi").value.trim();
var y = document.getElementById("yi").value.trim();

  var z = 2 * x + 3 * y * y + 17.946;
  
  var a = document.getElementById("result");
  a.innerHTML = "Norman Number: " + z;
 
  document.getElementById("form").reset();
  
}