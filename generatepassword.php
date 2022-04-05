
<!DOCTYPE html>
<html>

<head>
    <title>GREENSTORE-FORGOT PASSWORD</title>
    <link rel="icon" href="trolley.gif">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="Passwordstyle.css">
</head>

<body>


<?php
    include("config2.php");
    session_start();
    if(isset($_POST['Submit']))
    {
    $newpassword=($_POST['newpassword']);
    $confirmpassword=($_POST['confirmpassword']);
    $mysqli=mysqli_query($mysqli,"UPDATE users SET password=' $newpassword', confirmpassword='$confirmpassword'");
    $_SESSION['password'] = $newpassword;

    echo '<script>alert("Password changed successfully.")</script>';
    echo "<script> window.location.href = 'login.php';</script>";

    }
    
?>
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <div class="cont">
        <div class="form">
        <form  action="" method="post">
                <h2>Forgot your password?<br>No worries!</h2>

                <div class="form-floating mb-3" style="width: 75%; margin: 25px auto;">
                    <input type="password" class="form-control" placeholder="New Password" name="newpassword" id="txtPassword" required>
                    <label for="validationServer01" class="form-label">New Password</label>
                </div>
        
                <div class="form-floating mb-3" style="width: 75%; margin: 25px auto;">
                    <input type="password" class="form-control" placeholder="Confirm New Password" name="confirmpassword" id="txtConfirmPassword" required>
                    <label for="validationServer01" class="form-label">Confirm New Password</label>
                </div>

                <button class="button submit" type="submit" name="Submit" value="Submit" onclick="return Validate()">Submit</button>
                <p class="text-center">Change your password already?<br>
                    <a class="signin" href="login.php">Sign in here</a>
                </p>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up" style="font-family: 'Akaya Telivigala'; color: black;">
                    <h3><br><br><br>Type in the new password to sign in
                        <p1 style="color:#659A41; text-align: center;"><br><br>GREEN
                            <p2 style="color:#91C11E ">STORE</p2>
                        </p1></h3>
                </div>
            </div>
        </div>
    </div>



<script >
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>


