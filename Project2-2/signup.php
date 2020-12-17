<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup form</title>
  <link rel="stylesheet" href="nerdluv.css">
</head>

<!-- Create a form -->

<body>
  <div>
    <form action="signup-submit.php" method="POST">
      <fieldset class="column">
        <legend><strong>Signup </strong></legend>
        
        <ul>
          <li>
            <label for="name" class="left"><strong>Name:</strong></label>
            <input type="text" size="20" name="name" maxlength="16"><br>
          </li><br>

          <li> 
            <label for="name" class="left"><strong>Userame:</strong></label>
            <input type="text" size="20" name="username" maxlength="16"><br>
          </li><br>
          <li> 
            <label for="name" class="left"><strong>Password:</strong></label>
            <input type="password" size="20" name="password" maxlength="16"><br>
          </li><br>
          <li> 
            <label for="name" class="left"><strong>Confirm Password:</strong></label>
            <input type="password" size="20" name="cpassword" maxlength="16"><br>
          </li><br>

          <li>
            <input type="submit" value="Log in">
          </li>
        </ul>

      </fieldset>
    </form>
  </div>
  <br>

  <?php

  ?>
</body>

</html>