<?php

session_start();

$username = $_POST["username"];
$error = "*Invalid username/password. Click 'Forgot Password' to reset your password.<br>  If you did not register, please sign up. ";

if($username == "username"){
    $_SESSION["username"] = $username;
    header("location: mainpage.php"); //send user to homepage, for example.
}else{
    $_SESSION["error"] = $error;
    header("location: login.php"); //send user back to the login page.
    
}

?>
