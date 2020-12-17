<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matches</title>
</head>

<body>
  <!-- call the common file and its header -->
  <?php
  include "common.php";
  myheader();

  ?>
  <div>
    <!-- get the user input suing GET method -->
    <form action="matches-submit.php" method="GET">
      <fieldset>
       
          <legend>Returning User</legend>

          <ul>
            <li>
              <label for="name"><strong class="column">Name:</strong></label>
              <input type="text" size="20" name="name" maxlength="16">
            </li><br>
            <li>
              <input type="submit" value="View My Matches">
            </li>
          </ul>
      </fieldset>
    </form>
  </div>
<!-- call the myfooter and validator -->
  <?php
  myfooter();
  validator()
  ?>

</body>

</html>
