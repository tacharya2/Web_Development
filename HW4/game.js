
//array to store the used location to place the image

usedLocation = []; 

usedLocationCounter = 0;

clicked = null;

clickedId = null;

correct = [];

correctLen = 0;

function start(){

/*hide the front page and take to the grid*/

$("#instructions").hide();

gridSize = $("#gridSize").val();

revealTime = $("#revealTime").val()*1000; //taken in ms

/*place random image according to grid selected*/

if(gridSize == "opt1"){

Size = 8;

gameOverTime = 120000+revealTime;

for(i = 1; i < 5; i++){

//function to get the location to place image. Parameter tells the maximum number
var rand = getNumber([1, 2, 3, 4, 5, 6, 7, 8]); 

var rand1 = getNumber([1, 2, 3, 4, 5, 6, 7, 8]);

$("#"+gridSize).find("td#"+rand).find("img").attr("src", i+".gif");

$("#"+gridSize).find("td#"+rand).find("img").attr("name", i);

$("#"+gridSize).find("td#"+rand1).find("img").attr("src", i+".gif");

$("#"+gridSize).find("td#"+rand1).find("img").attr("name", i);

}

/*override images after waiting specified time*/

setTimeout(function(){

for(i = 1; i < 9; i++){

$("#"+gridSize).find("td#"+i).find("img").attr("src","hide.png");

$("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");

}

}, revealTime);

}else if (gridSize == "opt2") {

Size = 10;

gameOverTime = 150000+revealTime;

  for (i = 1; i < 6; i++){
  
    //function to get the location to place image. Parameter tells the maximum number

var rand = getNumber([1,2,3,4,5,6,7,8,9,10]); 

var rand1 = getNumber([1,2,3,4,5,6,7,8,9,10]);

$("#"+gridSize).find("td#"+rand).find("img").attr("src",i+".gif");

$("#"+gridSize).find("td#"+rand).find("img").attr("name",i);

$("#"+gridSize).find("td#"+rand1).find("img").attr("src",i+".gif");

$("#"+gridSize).find("td#"+rand1).find("img").attr("name",i);

}

/*hide image after waiting specified time*/

setTimeout(function(){

for(i = 1; i < 11; i++){

$("#"+gridSize).find("td#"+i).find("img").attr("src","hide.png");

$("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");

}

}, revealTime);

}else if (gridSize=="opt3") {

Size = 12;

gameOverTime = 180000+revealTime;

for(i = 1; i < 7; i++){

var rand = getNumber([1,2,3,4,5,6,7,8,9,10,11,12]); //function to get the location to place image. Parameter tells the maximum number

var rand1 = getNumber([1,2,3,4,5,6,7,8,9,10,11,12]);

/*alert(rand+"and"+rand1);*/

$("#"+gridSize).find("td#"+rand).find("img").attr("src",i+".gif");

$("#"+gridSize).find("td#"+rand).find("img").attr("name",i);

$("#"+gridSize).find("td#"+rand1).find("img").attr("src",i+".gif");

$("#"+gridSize).find("td#"+rand1).find("img").attr("name",i);

}

/*hide image after waiting specified time*/

setTimeout(function(){

for(i=1;i<13;i++){

$("#"+gridSize).find("td#"+i).find("img").attr("src","hide.png");

$("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");

}

}, revealTime);

}

/*show the appropriate game grid*/

$("#"+gridSize).show();

/* use the timer */

var startTime = new Date().getTime();

var interval = setInterval(function(){

if(new Date().getTime() - startTime > gameOverTime){

clearInterval(interval);

alert("Sorry time over!\nThe game resets\nTry Again");

  //reset the game

location.reload(); 

return;

}

}, 1000);  

}

function getNumber(set){

var random = Math.floor(Math.random() * set.length);

while(jQuery.inArray(set[random],usedLocation)!=-1){

random = Math.floor(Math.random() * set.length);

}

usedLocation[usedLocationCounter]=set[random];

usedLocationCounter++;

return set[random];

}

function check(e) {
  
  //reveal the image

  $(e).attr("src", $(e).attr("name") + ".gif"); 
  
  //prevents clicking an already clicked option

$(e).attr("onclick",""); 

if(clicked == null){

clicked = $(e).attr("name");

clickedId = $(e).attr("id");

}

else{

if(clicked==$(e).attr("name")){

correct[correctLen] = clickedId;

correctLen++;

correct[correctLen] = $(e).attr("id");

correctLen++;

//see if the game is done

if(correct.length == Size){

$("#win").show();

}

clicked = null;

}

else{

clicked = null;

}

for(i = 0; i < Size+1; i++){

if(jQuery.inArray(""+i,correct) != -1){

continue;

}


$("#"+gridSize).find("td#"+i).find("img").attr("src","hide.png");

$("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");

}

}

}
