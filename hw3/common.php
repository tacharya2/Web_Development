<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internal-common</title>
  <link rel="stylesheet" href="nerdluv.css">

</head>

<body>
  <!-- Define a validator function common to all other files -->
<?php
  function validator()
  {
  ?>
	<div id=" w3c">
      <a href="https://webster.cs.washington.edu/validate-html.php">
        <img src="image/w3c-xhtml.png" alt="Valid HTML" />
      </a>
      <a href="https://webster.cs.washington.edu/validate-css.php">
        <img src="image/w3c-css.png" alt="Valid CSS" />
      </a>
      </div>
    <?php
  }
    ?>
    <!-- Define myheader that would be common to all files -->
  <?php
  function myheader(){

    ?>
    <div id="bannerarea">
			<img src="image/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
    <?php
  }
?>

  <?php
  // Define myfooter function that is common to many other files

  function myfooter(){
  
  ?>

<div>
			<p>
        This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  
        Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="index.php"><img src="image/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>
  <?php
  }
  ?>

</body>

</html>