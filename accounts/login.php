<?php

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){

    $dbc_form = mysqli_connect("localhost","root","","mazeclan");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";

    $result = mysqli_query($dbc_form,$query);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['login'] = "LOGGEDIN";
        header("Location: ../login.php");
    }
    else{
        
        $_SESSION['error_msg'] = "Incorrect information!";
        $_SESSION['login'] = "UTLOGGAD";
        header("Location: ../login.php");
    }
}
else{ 
    $_SESSION['error_msg'] = "Incorrect information!";
    header("Location: ../login.php");
}
?>