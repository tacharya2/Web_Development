
<?php
$errors = array();
$user = array(
"name" => "","gender" => "",  "personality" => "", "favoriteOs" => "", "ageStart" => "", 
"ageEnd" => "");
//make sure the user is not in the log before accessing them

if(isset($_POST["name"])){
  $user["name"] = urlencode($_POST["name"]);
}

if(isset($_POST["gender"])){
  $user["gender"] = urlencode($_POST["gender"]);
}

if(isset($_POST["age"])){
  $user["age"] = urlencode($_POST["age"]);
}

if(isset($_POST["personality_type"])){
  $user["personality_type"] = urlencode($_POST["personality"]);
}

if(isset($_POST["favoriteOs"])){
  $user["favoriteOs"] = urlencode($_POST["favoriteOs"]);
}

if(isset($_POST["ageStart"])){
  $user["ageStart"] = urlencode($_POST["ageStart"]);
}
if(isset($_POST["ageEnd"])){
  $user["ageEnd"] = urlencode($_POST["ageEnd"]);
}

//check for numberic entry to the name field
if(preg_match("/[0-9]/", $_POST["name"]) === 1){
$errors[] = "Name cannot be numeric. Please your name field";
}
//check alphateci with first letter capital

$fname_word = explode(" ", $user["name"]);
for($i = 0; $i < count($fname_word); $i++){
  if(strcmp(ucfirst($fname_word[$i]), $fname_word[$i]) !== 0){
    $errors[] = "Please capitalize your first character of your first name!";
  break;
  }
}

//Validating age
if(!is_numeric($user["age"])){
  $errors[] = "Please check your age field. Age must be numeric";
}

//Validating personality type
$personality_vaidator = array(
  "INFP", "ISTJ", "INTJ","ESTP", "ISTP", "ENTP", "INTP","ESFJ", "ISFJ", "ENFJ", "INFJ","ESFP", "ISFP", "ENFP", "ESTJ","ENTJ"
);
if(!in_array($user["personality_type"], $personality_vaidator)){
$errors[] = "Invalid personality type. Please click on the link for a valid personality type";
}

//validate min-max matching age
if(!is_numeric($_POST["ageStart"])){
  $errors[] = "Please enter a numeric age";
}
if(!is_numeric($_POST["ageEnd"])){
  $errors[] = "Please enter a numeric age";
}

//Writing the valid data to the singles.txt
if(empty($errors)){

$user_info = $user;
$write = implode(",", $user_info);
file_put_contents("singles.txt", PHP_EOL.$write, FILE_APPEND);
?>
<pre>
  Thank you
  Welcome to NerdLuv, <?php $user["name"]  ?>!
  Now <a href="matches.php">Log in to see your matches!</a>
</pre>
<?php
}else{
?>
<div>
  Please fix the errors highlighted!
  <ul>

  <?php 
  foreach($errors as $err){ ?>

  <li> <?php  $err  ?></li>
  <?php } ?>
  </ul>
  </ul>
</div>
<?php
}
?>