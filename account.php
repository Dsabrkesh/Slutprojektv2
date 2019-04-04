<!DOCTYPE html>
<html>
<head>
	<title>My Account - MaZeClan</title>
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
		include("include/footer.php")
	?>

	    <?php
    session_start();

    $show_form = true;
    
    if(isset($_SESSION['error_msg'])){

        echo $_SESSION['error_msg'] . "<br>";
       
        unset($_SESSION['error_msg']);
    }
    
    if(isset($_SESSION['login'])){
        
        if($_SESSION['login'] == "LOGGEDIN"){
            $show_form = false; 
            echo "<div class='profile'>WELCOME   " .$_SESSION['name'] . "</div>"; 
            ?>

            
            <div class="profile-logout">
                <form action="accounts/logout.php">
                	<input type="submit" value="Log Out">
        	    </form>
            </div>

            <?php
        }
    }    
    
    
    if($show_form){
        }
         ?>

</body>
</html>