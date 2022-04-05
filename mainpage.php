<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include_once("config2.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="profile.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GREENSTORE-HOMEPAGE</title>
    <link rel="icon" href="trolley.gif">
</head>
<body>

    <div class="alert alert-warning alert-dismissible fade show" style="margin-bottom: 0px; background-color: hsla(56, 100%, 50%, 0.2);" role="alert">
        <strong>Holy guacamole!</strong> Enjoy shopping in
        <p1 style="color:#659A41; ">GREEN
            <p2 style="color:#91C11E ">STORE</p2>
        </p1>
        <button type="button" class="close" style="margin-left: 73%;" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" >&times;</span>
        </button>
    </div>

    <nav class="navbar navbar-expand navbar-light ">
        <a class="navbar-brand ">
            <h1 style="color:#659A41; ">GREEN
                <p2 style="color:#91C11E ">STORE</p2>
            </h1>
        </a>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" style="color: rgb(226, 147, 1); text-transform: uppercase;" href="mainpage.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: orange; text-transform: uppercase;" href="product.php">&nbsp;Product</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: orange; text-transform: uppercase; " href="sl.php">&nbsp;Shopping List</a>
                </li>

            </ul>  
        </div>
        <div type="button" style="color: orange;" data-bs-toggle="modal" data-bs-target="#modal" data-bs-backdrop="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>&nbsp;&nbsp;Profile&nbsp;&nbsp;&nbsp;&nbsp;
                   </div>

        
        <a class="nav-link btn btn-danger" style="text-decoration:none; color:white;" href="logout.php">
                     &nbsp;LOGOUT</a>
    </nav><br>


            <h3 class="text-center">Welcome, <i><?php echo $_SESSION['username'];?></i> !</h3>

            
        
    <div class="jumbotron text-center" style="font-size: 30px; background-image: url(banner.jpg);background-size: 1600px 300px;height: 300px;">
        <br>
        <strong><h1 >
                    <p1 style="color:#3d6b1e;">GREEN
                        <p2 style="color:#ade725 ">STORE</p2>
                    </p1>
                </h1>
                <p style="color: black;font-size: 20px;margin-bottom: 2%;">--Grab some fresh groceries and enjoy !!!--</p></strong>
    </div>

    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="3000">
                        <img src="1.jpg" class="d-block w-100" alt="GREENSTORE">
                    </div>
                    <div class="carousel-item" data-interval="3000 ">
                        <img src="3.jpg" class="d-block w-100" alt="GREENSTORE">
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="2.jpg" class="d-block w-100" alt="GREENSTORE">
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="6.jpg" class="d-block w-100" alt="GREENSTORE">
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <p class="text-center" style="background-image: radial-gradient(#91C11E,#659A41); padding: 50px; color: white; font-family: 'Alegreya', serif; font-size: 30px;">"Green Store is not a store itself, but rather personal shoppers that will pick your groceries for you.<br> We allow ordering up to two weeks in advance. Groceries are fresh produce groceries directly<br> from local farmers and entrepreneurs to keep
        the chain sustainability going"</p>
    <div class="container-fluid"><br>
        <div class="row" style="margin-left: 5%;">
            <div class="col-sm-4">
                <div style="width: 18rem;background-color: rgb(239, 239, 253);">
                    <img src="lock.gif" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center"><strong>Safe & Secure</strong><br> When you buy online, you want to know that you're buying from a trusted seller. Our entire website is fully secure, ensuring that your personal information is kept safe when you buy from us. You
                            can tell this from the padlock showing in the URL bar of your browser. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div style="width: 18rem;background-color: rgb(212, 236, 245);padding-bottom: 2%;">
                    <img src="pay.gif" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center"><strong>Payment Options</strong><br> We work hard to make shopping with us as easy as possible for our customers. That's why we have multiple options for payment. We accept all major credit cards (including American Express through
                            Paypal). You can also checkout with Paypal or Apple Pay. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div style="width: 18rem; background-color: rgb(239, 239, 253);">
                    <img src="customer.gif" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center"><strong>Award Winning Customer Service</strong><br> We are extremely proud of our award winning customer service, with staff who go beyond for our customers. The high number of extremely positive reviews that we have as a business
                            are a testament to our customers continue to rate us incredibly high for our service. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-1" style="padding: 50px">
        <div class="col-sm-4">
            <p class="text-center" style="color:#659A41;font-size:30px;">Browse through the world of finest groceries.</p>
            <p class="text-center" style="color:#91C11E;font-size:30px;">Market fresh, more value.</p>
            <a href="product.html" class="btn " style="margin-top: 25px; margin-left: 35%; background-color: orange; color: black;">Check Out Now</a>
        </div>
        <div class=" col-4">
            <img src="grocery.png " alt="Grocery ">
        </div>
    </div>
    <!-- First modal dialog -->
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 style="font-family: 'PT Sans', sans-serif;" class="modal-title">User Profile</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div style="background-color:rgba(198, 238, 203, 0.897);" class="modal-body">
                    <div id="leftpart">
                        <p></p>
                    </div>
                    <div id="rightpart">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <span title="Notifications"><a style= "padding-top: 1.0rem;" class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                  </svg></a></span>
                            </li>
                            <li id="deleteIcon" class="nav-item" data-bs-toggle="modal" data-bs-target="#modal3">
                                <span title="Delete Profile"><a style= "padding-top: 1.0rem;" class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg></a></span>
                            </li>
                        </ul>
                        <div id="profile-info">
                            <p id="fullName">Name : <?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?> </p>
                            <p id="email">Email Address : <?php echo $_SESSION['email'];?></p>
                            <p id="password">Password : <?php echo $_SESSION['password'];?></p> 
                            <p id="mobileNo">Mobile Number : <?php echo $_SESSION['phonenumber'];?></p>
                            <p id="birthDate">Birthdate : </p>
                            <p id="address">Address : </p> <br>
                            <a class="icon" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a> &nbsp
                            <a class="icon" href="https://twitter.com/"><i class="fa fa-twitter"></i></a> &nbsp
                            <a class="icon" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a> &nbsp
                            <a class="icon" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> &nbsp
                        </div>
                    </div>
                    <div>
                        <!-- <img id="firstpic" src="data:image/jpeg;base64,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" alt=""> -->
                        <div id="firstpic" class="flip-card" media="(max-width: 350px; max-height: 350px;)">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img id=showPhoto src="data:image/jpeg;base64,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"
                                        alt="Avatar" style="width:350px;height:350px; border-bottom-right-radius:80px;">
                                </div>
                                <div class="flip-card-back">
                                    <h1></h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Toogle to second dialog -->
                    <span title="Click to Edit Profile"><button id="editBtn" onclick="editText()" class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-dismiss="modal">Edit Profile</button></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- Second modal dialog -->
    <div class="modal fade" id="modal2" data-backdrop="static" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Edit User Profile <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg></h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <ul class="nav navbar-dark bg-light justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><svg style="color:black;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                  </svg></a>
                </li>
            </ul> -->
                    <div id="form-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="profile-pic">
                                        <span title="Click to Change Profile Photo"><label for="file" id="uploadBtn"><img id="profile-photo" class="rounded-circle" src="data:image/jpeg;base64,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" /></label></span>
                                        <input type="file" id="file">
                                    </div>
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>
                        </div>
                        <div>
                            <form class="row g-4">
                                <div class="col-md-6 form-floating">
                                    <input id="firstName" type="text" class="form-control" placeholder="First Name" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">First Name</label>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input id="lastName" type="text" class="form-control" placeholder="Last Name" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Last Name</label>
                                    <div class="invalid-feedback">
                                        Last Name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input id="emailForm" type="email" class="form-control" placeholder="Email Address" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Email Address</label>
                                    <div class="invalid-feedback">
                                        Valid email address is required.
                                    </div>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input id="passwordForm" type="password" class="form-control" placeholder="Password" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Password</label>
                                    <div class="invalid-feedback">
                                        Password is required.
                                    </div>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input id="mobileNoForm" type="tel" class="form-control" placeholder="Mobile Number" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Mobile Number</label>
                                    <div class="invalid-feedback">
                                        Mobile number is required.
                                    </div>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input id="birthDateForm" type="date" class="form-control" placeholder="Birthdate" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Birthdate</label>
                                    <div class="invalid-feedback">
                                        Birthdate is required.
                                    </div>
                                </div>
                                <div class="col-md-12 form-floating">
                                    <input id="addressLine1" type="text" class="form-control" placeholder="Address Line 2" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Address Line 1</label>
                                    <div class="invalid-feedback">
                                        Address is required.
                                    </div>
                                </div>
                                <div class="col-md-12 form-floating">
                                    <input id="addressLine2" type="text" class="form-control" placeholder="Address Line 2" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Address Line 2</label>
                                </div>
                                <div class="col-md-2 form-floating">
                                    <input id="postCode" type="number" class="form-control" placeholder="Postcode" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">Postcode</label>
                                    <div class="invalid-feedback">
                                        Postcode is required.
                                    </div>
                                </div>
                                <div class="col-md-5 form-floating">
                                    <input id="city" type="text" class="form-control" placeholder="City" required>
                                    <label style="padding-left: 1.5rem;" for="floatingInput">City</label>
                                    <div class="invalid-feedback">
                                        City is required.
                                    </div>
                                </div>
                                <div class="col-md-4 form-floating">
                                    <div class="form-floating">
                                        <select class="form-select" id="state" aria-label="Floating label select example">
                          <option selected></option>
                          <option value="Johor">Johor</option>
                          <option value="Kedah">Kedah</option>
                          <option value="Kelantan">Kelantan</option>
                          <option value="Melaka">Melaka</option>
                          <option value="Negeri Sembilan">Negeri Sembilan</option>
                          <option value="Pahang">Pahang</option>
                          <option value="Perak">Perak</option>
                          <option value="Perlis">Perlis</option>
                          <option value="Pulau Pinang">Pulau Pinang</option>
                          <option value="Sabah">Sabah</option>
                          <option value="Sarawak">Sarawak</option>
                          <option value="Selangor">Selangor</option>
                          <option value="Terengganu">Terengganu</option>
                          <option value="Wilayah Persekututan">Wilayah Persekutuan</option>
                        </select>
                                        <label for="state">State</label>
                                    </div>
                                </div>
                                <div style="padding-top: 2.0rem; padding-left: 2.0rem; padding-right: 2.0rem; padding-bottom: 2.0rem;" class="text-center d-grid gap-2">
                                    <span title="Click to Save Changes"><button onclick="changeText(); updateInfo();" type="submit" id= changeBtn class="btn btn-primary btn-lg" value="Save Changes"><input type="submit">Save Changes</button></span>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
                    <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
                    <!-- <a class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal" role="button">Save changes</a> -->
                    <span title="Go Back to User Profile"><button class="btn btn-primary" data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Third modal dialog -->
    <div class="modal fade" id="modal3" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button style="float: right;" type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                    <br>
                    <h3>Are you sure want to delete your profile?</h3>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class=" row ">

                <div class="col-sm ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">About</h2>
                        <p>Green Store helps you to manage grocery shopping list before going to the store to buy the products. HAPPY SHOPPING PEEPS!</p>
                        <h2 class="widget-title ">Stay Connected</h2>
                        <div class="social-widget ">
                            <a href="www.facebook.com "><i class="fa fa-facebook-square "></i></a>
                            <a href="www.googleplus.com "><i class="fa fa-google-plus-square "></i></a>
                            <a href="www.instagram.com "><i class="fa fa-instagram "></i></a>
                            <a href="www.twitter.com "><i class="fa fa-twitter "></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm categories-widget ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">Categories</h2>
                        <ul>
                            <li><a href="product.html ">Fruits</a></li>
                            <li><a href="product.html ">Vegetables</a></li>
                            <li><a href="product.html ">Beverages</a></li>
                            <li><a href="product.html ">Chocolates & Snacks</a></li>
                            <li><a href="product.html ">Bread & Bakery</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm informations-widget ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">Informations</h2>
                        <ul>
                            <li><a href="# ">About Us</a></li>
                            <li><a href="# ">Contact Us</a></li>
                            <li><a href="# ">Help & FAQs</a></li>
                            <li><a href="# ">Terms & Conditions</a></li>
                            <li><a href="# ">Private Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm ">
                    <div class="footer-widget contact-widget ">
                        <h2 class="widget-title ">Contact</h2>

                        <div class="contact-address ">
                            <i class="fa fa-map-marker "></i> Address : Jalan 6/95B, Cheras Utama, 56100 Kuala Lumpur, Malaysia
                        </div>

                        <div class="contact-number ">
                            <i class="fa fa-phone-square "></i> Phone : 1300-800-600
                        </div>

                        <div class="contact-email ">
                            <i class="fa fa-envelope "></i> Email : greenstore@gmail.com
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyright ">
            <div class="container ">
                <p>Copyright &copy; 2021. GREEN STORE. All Rights Reserved </p>

            </div>

        </div>
    </footer>



    <script src="profile.js "></script>

</body>
</html>

