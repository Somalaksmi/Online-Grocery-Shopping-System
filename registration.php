<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>GREENSTORE-LOGIN/REGISTER</title>
    <link rel="icon" href="trolley.gif">
</head>
<body>
<?php
    require('config2.php');
    session_start();
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
        $fname = mysqli_real_escape_string($mysqli, $fname);

        $lname = stripslashes($_REQUEST['lname']);
        $lname = mysqli_real_escape_string($mysqli, $lname);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($mysqli, $username);

        $phonenumber    = stripslashes($_REQUEST['phonenumber']);
        $phonenumber   = mysqli_real_escape_string($mysqli, $phonenumber);
        
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($mysqli, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);

        $confirmpassword = stripslashes($_REQUEST['confirmpassword']);
        $confirmpassword = mysqli_real_escape_string($mysqli, $confirmpassword);

        $create_datetime = date("Y-m-d H:i:s");
        
        $query    = "INSERT into `users` (fname, lname, username, phonenumber, email, password, confirmpassword, create_datetime)
                     VALUES ('$fname', '$lname', '$username', '$phonenumber', '$email', '$password', '$confirmpassword', '$create_datetime')";
        $result   = mysqli_query($mysqli, $query);

        if ($result) {
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['phonenumber'] = $phonenumber;
            $_SESSION['email'] = $email;
            echo "<form class='msg' style='text-align: center;'>
                    <h3><strong>You are registered successfully.</strong></h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </form>";
            
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>     

<?php
    }
    mysqli_close($mysqli);
?>
</body>
</html>
