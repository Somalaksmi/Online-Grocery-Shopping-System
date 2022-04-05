<?php
//Example - MySQLi
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//3. Execute the SQL query.
//deleting the row from table
//$result = mysqli_query($mysqli, "DELETE FROM producttb WHERE id=$id");


$result1 = mysqli_query($mysqli, "DELETE FROM fruits WHERE fruit_id=$id");
$result2 = mysqli_query($mysqli, "DELETE FROM vegetables WHERE veg_id=$id");
$result3 = mysqli_query($mysqli, "DELETE FROM seafood WHERE sf_id=$id");
$result4 = mysqli_query($mysqli, "DELETE FROM snacks WHERE snack_id=$id");
$result5 = mysqli_query($mysqli, "DELETE FROM rice WHERE rice_id=$id");
$result6 = mysqli_query($mysqli, "DELETE FROM can WHERE can_id=$id");


//Step 5: Freeing Resources and Closing Connection using mysqli
mysqli_close($mysqli);

//4. Process the results.
//redirecting to the display page (index.php in our case)
header("Location:admin.php");

?>