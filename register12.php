<?php

session_start();

if( isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['address']) &&
    isset($_POST['email']) && isset($_POST['password'])){
    
    $dbc_form = mysqli_connect("localhost","root","","mazeclan");

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO accounts (name,lastname,address,email,password) VALUES ('$name','$lastname','$address','$email','$password');";
    
    if(mysqli_query($dbc_form,$query)){

        header("Location: shop.php");
    }else{ 

        $_SESSION['error_msg'] = "The E-Mail was already taken!";
        header("Location: register.php");
    }
}
else{ 
    $_SESSION['error_msg'] = "Incorrect information!";
    header("Location: register.php");
}
?>