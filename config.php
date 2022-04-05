<?php

//Step 1: Connecting to a Database using MySQLi API 
// modify these variables for your installation
$databaseHost = 'localhost';
$databaseName = 'productdb';
$databaseUsername = 'user1';
$databasePassword = 'user1abc';


//MySQLi Procedural
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


//MySQLi Procedural approach
// mysqli_connect_errno returns the last error code
if ( mysqli_connect_errno() ) {
	// die() is equivalent to exit()
	die( "Database connection failed: " . mysqli_connect_error() );
} 

// echo "Database connected successfully <br>";


?>
