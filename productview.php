<?php
//Example - MySQLi
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include("config.php");
include("component.php");

//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
//3. Execute the SQL query.
// $result = mysqli_query($mysqli, "SELECT * FROM producttb"); // using mysqli_query instead
$result1 = mysqli_query($mysqli, "SELECT * FROM fruits"); // using mysqli_query instead
$result2 = mysqli_query($mysqli, "SELECT * FROM vegetables"); // using mysqli_query instead
$result3 = mysqli_query($mysqli, "SELECT * FROM seafood"); // using mysqli_query instead
$result4 = mysqli_query($mysqli, "SELECT * FROM snacks"); // using mysqli_query instead
$result5 = mysqli_query($mysqli, "SELECT * FROM rice"); // using mysqli_query instead
$result6 = mysqli_query($mysqli, "SELECT * FROM can"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="product.js"></script>
    <script src="js/jquery-1.11.3.min.js "></script>
    <script src="js/shop.min.js "></script>
    <link rel="stylesheet" type="text/css" href="product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GREENSTORE-GROCERY ITEMS</title>
    <link rel="icon" href="trolley.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> -->
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#fcfff7">
<header style="background-color: white;">
        <nav class="navbar navbar-expand navbar-light ">
            <a class="navbar-brand ">
                <h1 style="color:#659A41; ">GREEN
                    <p2 style="color:#91C11E ">STORE</p2>
                </h1>
            </a>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" style="color: orange; text-transform: uppercase;" href="1stpage.html">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: rgb(226, 147, 1); text-transform: uppercase;" href="productview.php">&nbsp;Product</a>
                </li>
        </div>
        <a class="nav-link" style="color: rgb(226, 147, 1); text-transform: uppercase; " href="login.php">Login/Register</a>
        <button class="btn btn-outline-secondary text-center" onclick=" window.location.href='adminlogin.php' " style="color: black; width: 75px; ">ADMIN</button>
            </div>
        </nav>
    </header>

    <div class="mybox">
            <div class="container-fluid">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="3000">
                            <img src="5.jpg" class="d-block w-100" alt="Grocery">
                        </div>
                        <div class="carousel-item" data-interval="3000">
                            <img src="8.jpg" class="d-block w-100" alt="Grocery">
                        </div>
                        <div class="carousel-item" data-interval="3000">
                            <img src="9.jpg" class="d-block w-100" alt="Grocery">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="container-fluid" style="max-width: 100%; padding: 15px; background-color: #94c02e;">
        <div class="col-1">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#01">FRUITS</a>
                <a href="#04">SEAFOOD</a>
                <a href="#05">CANNED FOOD ITEMS</a>
                <a href="#06">VEGETABLES</a>
                <a href="#07">RICE</a>
                <a href="#11">SNACKS</a>
            </div>
            <span style="font-size:30px; cursor:pointer;color: white;" onclick="openNav()">&#9776;CATEGORY</span>
        </div>
    </div>

    <div style="margin-top: 2rem;" class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="01">FRUITS</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
                while($res = mysqli_fetch_array($result1)){
                component($res['fruit_id'], $res['fruit_name'], $res['fruit_price'], $res['fruit_desc'], $res['fruit_image']);
            }
            ?>
        </div>
    </div>

    <div class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="06">VEGETABLES</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
            while($res = mysqli_fetch_array($result2)){
                component($res['veg_id'], $res['veg_name'], $res['veg_price'], $res['veg_desc'], $res['veg_image']);
            }

            //Step 5: Freeing Resources and Closing Connection using mysqli
		    // mysqli_close($mysqli);
            ?>
        </div>
    </div>

    <div class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="04">SEAFOOD</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
            while($res = mysqli_fetch_array($result3)){
                component($res['sf_id'], $res['sf_name'], $res['sf_price'], $res['sf_desc'], $res['sf_image']);
            }

            //Step 5: Freeing Resources and Closing Connection using mysqli
		    //mysqli_close($mysqli);
            ?>
        </div>
    </div>

    <div class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="11">CHOCOLATES & SNACKS</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
            while($res = mysqli_fetch_array($result4)){
                component($res['snack_id'], $res['snack_name'], $res['snack_price'], $res['snack_desc'], $res['snack_image']);
            }

            //Step 5: Freeing Resources and Closing Connection using mysqli
		    //mysqli_close($mysqli);
            ?>
        </div>
    </div>

    <div class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="07">RICE</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
            while($res = mysqli_fetch_array($result5)){
                component($res['rice_id'], $res['rice_name'], $res['rice_price'], $res['rice_desc'], $res['rice_image']);
            }

            //Step 5: Freeing Resources and Closing Connection using mysqli
		    //mysqli_close($mysqli);
            ?>
        </div>
    </div>

    <div class="container">
    <div style="text-align:center; background-color: #e2f5d7; padding-top: 1rem; padding-bottom: 1rem; padding-left: 1rem; box-shadow: 0 0 20px 3px green;"><h2 id="05">CANNED FOOD ITEMS</h2></div>
        <div class="row text-center py-5">
            <?php
            //Step 4. Process the results from admin.php (insert new data)
            while($res = mysqli_fetch_array($result6)){
                component($res['can_id'], $res['can_name'], $res['can_price'], $res['can_desc'], $res['can_image']);
            }

            //Step 5: Freeing Resources and Closing Connection using mysqli
		    //mysqli_close($mysqli);
            ?>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <footer>
        <div class="container wrap">
            <div class="row">
                <div class="col-sm">
                    <div class="footer-widget">
                        <h2 class="widget-title">About</h2>
                        <p>Green Store helps you to manage grocery shopping list before going to the store to buy the products. HAPPY SHOPPING PEEPS!</p>
                        <h2 class="widget-title">Stay Connected</h2>
                        <div class="social-widget">
                            <a href="www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                            <a href="www.googleplus.com"><i class="fa fa-google-plus-square"></i></a>
                            <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm categories-widget">
                    <div class="footer-widget">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Fruits</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Beverages</a></li>
                        <li><a href="#">Chocolates & Snacks</a></li>
                        <li><a href="#">Bread & Bakery</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm informations-widget">
                    <div class="footer-widget">
                    <h2 class="widget-title">Informations</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help & FAQs</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Private Policy</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="footer-widget contact-widget">
                    <h2 class="widget-title">Contact</h2>
                    <div class="contact-address">
                        <i class="fa fa-map-marker"></i> Address : Jalan 6/95B, Cheras Utama, 56100 Kuala Lumpur, Malaysia
                    </div>
                    <div class="contact-number">
                        <i class="fa fa-phone-square"></i> Phone : 1300-800-600
                    </div>
                    <div class="contact-email">
                        <i class="fa fa-envelope"></i> Email : greenstore@gmail.com
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; 2021. GREEN STORE. All Rights Reserved </p>
            </div>
        </div>
    </footer>
    <script src="product.js"></script>
</body>
</html>