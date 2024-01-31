<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biography Home Page</title>
<link rel="stylesheet" type="text/css" href="Reset.css">
<link rel="stylesheet" type="text/css" href="Styles.css">

</head>


<body>
<div id="wrapper">
	<header>
	 <?php include "/home/stoutmartech/public_html/users/wisnefsken2894/excersize/Bio-Includes/Includes/header.php";?>
	</header>
	<nav>
		<?php include "/home/stoutmartech/public_html/users/wisnefsken2894/excersize/Bio-Includes/Includes/Nav.php";?> 
	</nav>
	<main>
		<img src="Images/11.jpg" width="206" height="203" alt="" class="align-right" />
<h2 > Contact Me</h2>
		
	<form method="post" action="https://isaacsonk.stoutmartech.com/dmt275/class9-form.php">
	<div class="select">
	<p>
	<label>Name:</label>
	<input type="text" name="name">
	</p>
	<p>
	<label>Email:</label>
	<input type="email" name="email">
	</p>
	<p>
	<label>Comments:</label>
	<textarea name="comments"></textarea>
	</p>
	<p>
	<input class="button" type="submit" value="Send Form">	
	</p>
	</div>
	</form>	
	</main>
	<footer>
	  <?php include "/home/stoutmartech/public_html/users/wisnefsken2894/excersize/Bio-Includes/Includes/footer.php";?>
		<!-- Email opens in Gmail -->
	</footer>
</div>
</body>

</html>
