<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Form</title>
</head>
<body>
  <form action="formInfo.php" method="POST"><br>
  First Name: <input type="text" name="FirstName" value = ""><br>
  Last Name: <input type="text" name="LastName" value = ""><br>
  Age: <input type="number" name="Age" value = ""><br>
  Gender: <input type="radio" name="Gender" value = "">Male
  <input type="radio" name="Gender" value = "">Female
  <input type="radio" name="Gender" value = "">Not willing <br>
  E-mail: <input type="text" name="email" value = ""><br>
  <input type="submit" name="submit"><br>
  <input type="reset" name="reset">
  </form>
</body>
</html>