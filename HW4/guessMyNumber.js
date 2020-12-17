var rand = 0;
var attempts = 10;
var cur = 10;

function professorPermittedPiece(scale) {
  var dd = new Date();
  return ((Math.round(Math.abs(Math.sin(dd.getTime())) * 8.71 * scale)%scale));
}

function initializer() {
  // rand = Math.floor((Math.random() * 100)+1);
  rand = professorPermittedPiece(100);
  document.getElementById("attempts").innerHTML =  cur + " Guess Left";
}

function guess() {
  var entered = new Number(document.getElementById("number").value);
  if (entered == rand) {
    alert("You guessed it right: " + rand + ".\n Restarting game.");
    cur = attempts;
    initializer();

  } else {
    if (entered > rand && cur > 1) {
      cur = cur - 1;
      document.getElementById("attempts").innerHTML = cur + " guess left";
      document.getElementById("thrash").innerHTML = "My number is bellow your guess"
    }

    if (entered < rand && cur >= 1) {
      cur = cur - 1;
      document.getElementById("attempts").innerHTML = cur + " guess left";
      document.getElementById("thrash").innerHTML = "My number is above your guess"
    }
    if (cur == 0) {
      alert("You ran out of guesses! Correct number was: " + rand + ".\n Restarting the game");
      cur = attempts;
      initializer();
    }
  }
}