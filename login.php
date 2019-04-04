<!DOCTYPE html>
<html>
<head>
	<title>Account - MazeClan</title>
	<link rel="icon" type="images/png" href="images/favicon.png" sizes="32x32"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<meta charset="utf-8">
</head>
<body>

	<?php
		include("include/nav.php");
		include("include/footer.php");
	?>

	    <?php
    session_start();
    // ANVÄNDS FÖR ATT VISA FORMULÄREN I SLUTET ELLER INTE
    $show_form = true;
    
    // OM DET FINNS ERROR MESSAGE
    if(isset($_SESSION['error_msg'])){
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";
       
        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }
    
    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if(isset($_SESSION['login'])){
        // har besökt sidan
        
        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "LOGGEDIN"){
            $show_form = false; // VISA INTE FORMULÄREN
            echo "Welcome   ".$_SESSION['name'] . "	!"; // VISA VÄLKOMSTTEXT
            ?>

            <!-- Utloggningsformulär -->
            <form action="accounts/logout.php">
                <input type="submit" value="Sign Off">
            </form>

            <?php
        }
    }    
    
    // OM VI SKA VISA FORMULÄREN
    if($show_form){
        // Visa formulären
         ?>


	<div class="account">
		<h1>Login</h1>
		<div class="login">
			<form method="POST" action="accounts/login.php">
				<lbal>Email</label><br>
				<input type="email" name="email" placeholder="Email"><br>
				<label>Password</label><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="submit" value="SIGN IN">
				<p class="left"><a href="register.php">Create an account</a></p>
				<p class="right"><a href="#">Forgot your password?</a></p>
			</form>
		</div>
	</div>

	<?php
		}
	?>


</body>
</html>