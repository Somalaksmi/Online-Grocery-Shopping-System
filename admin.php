<?php
//Example - MySQLi
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include_once("config.php");
include_once("component.php");

//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
//3. Execute the SQL query.
$result1 = mysqli_query($mysqli, "SELECT * FROM fruits"); // using mysqli_query instead
$result2 = mysqli_query($mysqli, "SELECT * FROM vegetables"); // using mysqli_query instead
$result3 = mysqli_query($mysqli, "SELECT * FROM seafood"); // using mysqli_query instead
$result4 = mysqli_query($mysqli, "SELECT * FROM snacks"); // using mysqli_query instead
$result5 = mysqli_query($mysqli, "SELECT * FROM rice"); // using mysqli_query instead
$result6 = mysqli_query($mysqli, "SELECT * FROM can"); // using mysqli_query instead
?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery-1.11.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GREENSTORE-ADMIN</title>
    <link rel="icon" href="trolley.gif">
    <style>
        body {
            font-family: 'PT Sans', sans-serif;
        }
        
        .navbar {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        
        nav {
            flex: 1;
            text-align: right;
        }
        
        nav ul {
            display: inline-block;
            list-style-type: none;
        }
        
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        
        .nav-item:hover {
            color: #91C11E;
        }
        
        .nav-link:hover {
            color: #91C11E;
        }
        
        a {
            text-decoration: none;
            color: #FFAD00;
        }
        
        p {
            color: #FFAD00;
        }
        
        .container {
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        
        .dropdown-menu {
            background-color: #FFAD00;
        }
        
        .dropdown-menu .dropdown-item {
            color: white;
        }
        
        ul {
            list-style-type: none;
        }
        
        .icon {
            text-decoration: none;
            font-size: 40px;
            color: black;
        }
        
        .row .col-1 {
            min-width: 1000px;
        }
        
        .row .col-2 {
            min-width: 500px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand navbar-light ">
        <a class="navbar-brand ">
            <h1 style="color:#659A41; ">GREEN
                <p2 style="color:#91C11E ">STORE</p2>
            </h1>
        </a>
        <a href="logout1.php" class="btn btn-danger" style="text-align:right;">LOGOUT</a>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <table id="productTable" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Edit</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

					<?php
					//Step 4. Process the results from admin.php (insert new data)
				
					while($res = mysqli_fetch_array($result1)){
						productrow($res['fruit_id'], $res['fruit_name'], $res['fruit_price'], $res['fruit_desc'], $res['fruit_image']);
					}

                    while($res = mysqli_fetch_array($result2)){
						productrow($res['veg_id'], $res['veg_name'], $res['veg_price'], $res['veg_desc'], $res['veg_image']);
					}

                    while($res = mysqli_fetch_array($result3)){
						productrow($res['sf_id'], $res['sf_name'], $res['sf_price'], $res['sf_desc'], $res['sf_image']);
					}

                    while($res = mysqli_fetch_array($result4)){
						productrow($res['snack_id'], $res['snack_name'], $res['snack_price'], $res['snack_desc'], $res['snack_image']);
					}

                    while($res = mysqli_fetch_array($result5)){
						productrow($res['rice_id'], $res['rice_name'], $res['rice_price'], $res['rice_desc'], $res['rice_image']);
					}

                    while($res = mysqli_fetch_array($result6)){
						productrow($res['can_id'], $res['can_name'], $res['can_price'], $res['can_desc'], $res['can_image']);
					}

					//Step 5: Freeing Resources and Closing Connection using mysqli
					// mysqli_close($mysqli);
					?>

                </table>
            </div>
            <div class="col-2">
                <div class="panel panel-primary" style="margin-bottom: 10px; border-color:#659A41;">
                    <div class="panel-heading" style="background-color: #659A41; color: white; padding: 10px; border-color:#659A41;">
                        Product Information
                    </div>
                    <form action="admin.php" method="POST">
                    <div class="panel-body" style="margin: 10px;">
                        <div class="form-group">
                            <label for="productimg">Product image: </label>
                            <input type="text" name="product_image" class="form-control" id="productimg" />
                        </div>
                        <div class="form-group">
                            <label for="productname">Product Name: </label>
                            <input type="text" name="product_name" class="form-control" id="productname" />
                        </div>
                        <div class="form-group">
                            <label for="productdes">Product Description: </label>
                            <input type="text " name="product_desc" class="form-control " id="productdes" />
                        </div>
                        <div class="form-group">
                            <label for="productprice">Product Price: </label>
                            <input type="text" name="product_price" class="form-control" id="productprice" />
                        </div>
                        <div class="form-group">
                            <label for="productcategory">Product Category: </label>
                            <select id="productcategory" name="product_category" class="form-control">
                                <option value="fruits">Fruits</option>
                                <option value="vegetables">Vegetables</option>
                                <option value="seafood">Seafood</option>
                                <option value="snacks">Chocolates & Snacks</option>
                                <option value="rice">Rice</option>
                                <option value="can">Canned Food Items</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-footer" style="background-color: rgb(255, 255, 255);border-color:#659A41;">
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="submit" id="updateButton" value="Add" name="Add" class="btn btn-primary" style="background-color:#FFAD00; border-color: #FFAD00; margin-left: 10px;">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="admin.js"></script>
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

<?php
//Example - MySQLi procedural
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include_once("config.php");

if(isset($_POST["Add"])) {	
	// The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
	$productname = mysqli_real_escape_string($mysqli, $_POST['product_name']);
	$productprice = mysqli_real_escape_string($mysqli, $_POST['product_price']);
	$productdesc = mysqli_real_escape_string($mysqli, $_POST['product_desc']);
    $productimage = mysqli_real_escape_string($mysqli, $_POST['product_image']);
    $productcategory = mysqli_real_escape_string($mysqli, $_POST['product_category']);

    // $productname = $_POST["product_name"];
    // $productprice = $_POST['product_price'];
    // $productdesc = $_POST['product_desc'];
    // $productimage = $_POST['product_image'];
		
	// checking empty fields
	if(empty($productname) || empty($productprice) || empty($productdesc) || empty($productimage)) {
				
		echo "<script>alert('Product Information is Incomplete!');</script>";
		
		//link to the previous page
		// echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		
		//Step 3. Execute the SQL query.	
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO producttb (product_name, product_price, product_desc, product_image, product_category) VALUES ('$productname','$productprice','$productdesc', '$productimage', '$productcategory')");
		
        if($productcategory == 'fruits'){
            $result = mysqli_query($mysqli, "INSERT INTO fruits (fruit_name, fruit_price, fruit_desc, fruit_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }
        
        else if($productcategory == 'vegetables'){
            $result = mysqli_query($mysqli, "INSERT INTO vegetables (veg_name, veg_price, veg_desc, veg_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }

        else if($productcategory == 'seafood'){
            $result = mysqli_query($mysqli, "INSERT INTO seafood (sf_name, sf_price, sf_desc, sf_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }

        else if($productcategory == 'snacks'){
            $result = mysqli_query($mysqli, "INSERT INTO snacks (snack_name, snack_price, snack_desc, snack_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }

        else if($productcategory == 'rice'){
            $result = mysqli_query($mysqli, "INSERT INTO rice (rice_name, rice_price, rice_desc, rice_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }

        else if($productcategory == 'can'){
            $result = mysqli_query($mysqli, "INSERT INTO can (can_name, can_price, can_desc, can_image) VALUES ('$productname','$productprice','$productdesc', '$productimage')");
        }

		//Step 4. Process the results.
		//display success message & the new data can be viewed on index.php
		// echo "<font color='green'>Product added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";
	
		//Step 5: Freeing Resources and Closing Connection using mysqli
		mysqli_close($mysqli);
	}
}
?>
</body>
</html>