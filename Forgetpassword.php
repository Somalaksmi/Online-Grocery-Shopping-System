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
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <div class="cont">
        <div class="form">
            <form method="post" action="generatepassword.php">
                <h2>Forgot your password?<br>No worries!</h2>
                <div class="form-floating mb-3" style="width: 75%; margin: 25px auto;">
                    <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                    <label for="validationServer01" class="form-label">Email Address</label>
                </div>
        
                <button class="button submit" type="submit" value="Submit"  name="reset-password">Submit</button>
                <p class="text-center">Remember your credentials already?<br>
                    <a class="signin" href="login.php">Sign in here</a>
                </p>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up" style="font-family: 'Akaya Telivigala'; color: black;">
                    <h3>Type in the email address that you used to register with
                        <p1 style="color:#659A41; text-align: center;">GREEN
                            <p2 style="color:#91C11E ">STORE</p2>
                        </p1> and we will send you the username and password.</h3>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
