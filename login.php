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
    <title>GREENSTORE-LOGIN/REGISTER</title>
    <link rel="icon" href="trolley.gif">
</head>
<body>
<?php
    require('config2.php');

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
            header("Location: mainpage.php");


        } else {
            $_SESSION['message']="Incorrect Username or Password.";
            header("Location: check.php");
             
            
        }
    } else {
?>
    
  <div class="cont">
  
       
        <div class="form">
            
            <form method="post" name="login" action="">

                <h2>Welcome to
                    <p1 style="color:#659A41; text-align: center;">GREEN
                        <p2 style="color:#91C11E ">STORE</p2>
                    </p1>
                </h2>

                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='msg'>$error</div>";
                    }
                ?>
    
                <div class="form-floating" style="width: 50%; margin: 25px auto;">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    <label for="validationServer01" class="form-label">Username</label>
                </div>

                <div class="form-floating" style="width: 50%; margin: 25px auto;">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <label for="validationServer02" class="form-label">Password</label>
                </div>


                <div >
                    <a class="forgetpassword" style="padding-left:24%" href="Forgetpassword.php">Forgot Password?</a>
                    <button type="submit" id="submit_button"  value="Login" name="submit" style="background-color: #659A41; color: white;">Sign In</button>
                </div>
                

                <div class="or-container">
                    <div class="line-separator"></div>
                    <div class="or-label">or</div>
                    <div class="line-separator"></div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-secondary btn-google text-uppercase" href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2Fsecurity&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><img src="https://img.icons8.com/color/16/000000/google-logo.png" style="width: 20px; height: 20px;margin-bottom: 1%;"> Sign in with Google</a>
                </div><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-primary btn-google text-uppercase" href="https://www.facebook.com/"><img src="fb.gif" style="width: 20px; height: 20px;margin-bottom: 1%;"> Sign in with Facebook</a>
                    
                </div>


            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up" style="font-family: 'Akaya Telivigala'; color: black;">
                    <h3>Want to make sure your family's being fed with high quality products? <strong>
                      <p1 style="color:#659A41; text-align: center;">GREEN
                          <p2 style="color:#91C11E ">STORE</p2>
                      </p1></strong> is the best choice!</h3>

                      <a class="nav-link btn btn-outline-secondary" style="text-decoration:none; color:black;" href="logout.php">
                     &nbsp;BACK</a>
                    
                      <br>
                    <p style="font-size: 22px;">Sign up and discover more about
                        <p1 style="color:#659A41; text-align: center;">GREEN
                            <p2 style="color:#91C11E ">STORE</p2>
                        </p1>!<br>
                        
                    </p>
                        
                        
                </div>
                <div class="img-text m-in" style="font-family: 'Akaya Telivigala'; color: black;">
                    <h1>One of us?</h1><br>
                    <p style="font-size: 22px;">If you already has an account, just sign in. </p>
                    
                </div>
                
                <br>

                <div class="img-btn">
                    <span class="m-up">Sign up</span><br>
                    <span class="m-in">Sign in</span>
                    
                </div>
   
                
            </div>


            <div class="form sign-up">
                <form action="registration.php" method="post" >
                    <h2>Sign up</h2>
                    <div class="row">
                        <div class="form-floating mb-3 col-sm-6">
                            <input type="text" class="form-control" id="username" placeholder="First Name" name="fname" required>
                            <label for="validationServer01" class="form-label">&nbsp;&nbsp;&nbsp;First Name</label>
                        </div>

                        <div class="form-floating mb-3 col-sm-6">
                            <input type="text" class="form-control" id="username" placeholder="Last Name" name="lname" required>
                            <label for="validationServer02" class="form-label">&nbsp;&nbsp;&nbsp;Last Name</label>
                        </div>

                        <div class="form-floating mb-3 col-sm-6">
                            <input type="text" class="form-control" id="username1" placeholder="Username" name="username" required>
                            <label for="validationServer03" class="form-label">&nbsp;&nbsp;&nbsp;Username</label>
                        </div>

                        <div class="form-floating mb-3 col-sm-6">
                            <input type="text" class="form-control" id="username" placeholder="Phone Number" name="phonenumber" required>
                            <label for="validationServer04" class="form-label">&nbsp;&nbsp;&nbsp;Phone Number</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Email Address" name="email" required>
                        <label for="validationServer05" class="form-label">Email Address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="password" required>
                        <label for="validationServer06" class="form-label">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" name="confirmpassword" required>
                        <label for="validationServer07" class="form-label">Confirm Password</label>
                    </div>
                    <button type="submit" id="submit_button" name="submit" value="Register" onclick="return Validate()" style="background-color: #659A41; color: white;">Sign Up</button>
                    <!-- <p class="link">Already have an account? <a href="login.php">Login here</a></p> -->
                </form>
            </div>
        </div>
    </div>
    
    <script>

    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

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
