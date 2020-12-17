<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup form</title>
  <link rel="stylesheet" href="nerdluv.css">
</head>
<!-- include common file and call necessary functions -->
<?php
include("common.php");

?>
<?php myheader(); ?>
<!-- Create a form -->

<body>
  <div>
    <form action="signup-submit.php" method="POST">
      <fieldset class="column">

        <legend><strong> User Signup </strong></legend>

        <ul>

          <li>

            <label for="name" class="left"><strong>Name:</strong></label>
            <input type="text" size="20" name="name" maxlength="16"><br>
          </li><br>

          <li>
            <label for="gender"><strong>Gender: </strong></label>
            <input name="gender" type="radio" value="Male">Male
            <input name="gender" type="radio" value="Female">Female
          </li><br>

          <li>
            <label for="age"><strong>Age:</strong></label>
            <input type="text" name="number" size="6" maxlength="2"> <br>
          </li><br>

          <li>
            <label for="personality"><strong>Personality Type:</strong></label>
            <input type="text" name="personality" size="6" maxlength="4">
            <a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your type?)</a><br>
          </li><br>

          <li>
            <label for="favoriteOs"><strong>Favorite OS:</strong></label>
            <select name="favoriteOs" size="1" single name="select">
              <option>Windows
              <option>Mac OS X
              <option>Linux
            </select> <br>
          </li><br>

          <li>
            <label for="seekingAge"> <strong>Seeking Age:</strong></label>
            <input type="text" name="ageStart" size="6" maxlength="2" placeholder="min">
            to <input type="text" name="ageEnd" size="6" maxlength="2" placeholder="max"><br>
          </li><br>

          <li>
            <input type="submit" value="Sign Up">
          </li>
        </ul>


      </fieldset>
    </form>
  </div>
  <br>

  <?php
  myfooter()
  ?>
  <?php

  validator();

  ?>
</body>

</html>