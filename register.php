<!DOCTYPE html>
<html>
<head>
	<title>Account - MazeClan</title>
	<link rel="icon" type="images/png" href="images/favicon.png" sizes="32x32"/>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<meta charset="utf-8">
</head>
<body>

	<?php
		include("include/nav.php");
		include("include/footer.php");
	?>

	<div class="account">
		<h1>Register</h1>
		<div class="login">
			<form method="POST" action="register12.php">
				<label>Name</label><br>
				<input type="text" name="name" placeholder="Name"><br>
				<label>Name</label><br>
				<input type="text" name="lastname" placeholder="Lastname"><br>
				<label>Address / ZIP / City</label><br>
				<input type="text" name="address" placeholder="Address"><br>
				<lbal>Email</label><br>
				<input type="email" name="email" placeholder="Email"><br>
				<label>Password</label><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="submit" value="SIGN UP">
				<p class="center">Have an account? <a href="login.php">Sign In</a></p>
			</form>
		</div>
	</div>

</body>
</html>