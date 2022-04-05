<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <a href="1stpage.html" ></a>
    <title>GREENSTORE-ADMIN LOGIN</title>
    <link rel="icon" href="trolley.gif">
</head>
<body>
<?php
    require('config1.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($mysqli, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        // Check username is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($mysqli, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['message']="You are now logged in.";
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            // Redirect to user mainpage page
            header("Location: admin.php");

        } 
        else {
            $_SESSION['message']="Incorrect Username or Password.";
            header("Location: check.php");
             
            
        }
    } else {
?>

<div class="cont">
        <div class="form">
            
            <form action="" method="POST">

                <h2><br><br><br>Welcome to
                    <p1 style="color:#659A41; text-align: center;">GREEN
                        <p2 style="color:#91C11E ">STORE</p2>
                    </p1>
                </h2>
    
                <div class="form-floating" style="width: 50%; margin: 25px auto;">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    <label for="validationServer01" class="form-label">Username</label>
                </div>

                <div class="form-floating" style="width: 50%; margin: 25px auto;">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <label for="validationServer02" class="form-label">Password</label>
                </div>


                <div >
                    <button type="submit" id="submit_button"  value="Login" name="submit" style="background-color: #659A41; color: white;">Sign In</button>
                </div>
                

            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up" style="font-family: 'Akaya Telivigala'; color: black;">
                    <h3><br><br><br><br><br>Admin Login</h3>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <script>
        var tag = document.querySelector('.img-btn')
        tag.addEventListener('click', function() {
            var tag1 = document.querySelector('.cont')
            tag1.classList.toggle('s-signup')
        });

        // We access to the inputs by their id's
        var username = document.getElementById("username");
        var password = document.getElementById("password");

        // Form
        var contactForm = document.getElementById("form");

        // Event listener
        contactForm.addEventListener("submit", function(e) {
            let messageUsername = [];
            let messagePassword = [];

            if (username.value === "" || username.value === null) {
                messageUsername.push("* This field is required");
            }

            if (password.value === "" || password.value === null) {
                messagePassword.push("* This field is required");
            }

            // Statement to shows the errors
            if (messageUsername.length || messagePassword.length > 0) {
                e.preventDefault();
                errorElement.innerText = messageName;
                errorElementAddress.innerText = messageAddress;
            }

            // if the values length is filled and it's greater than 2 then redirect to this page
            if (
                (username.value.length > 7,
                    password.value.length > 8)
            ) {
                e.preventDefault();
                window.location.assign("mainpage.php");
            }

        });

    </script>


<?php
    }
?>
</body>
</html>

<?php
    unset($_SESSION["error"]);
    mysqli_close($mysqli);
?>
