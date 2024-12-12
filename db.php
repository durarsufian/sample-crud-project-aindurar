<?php 

// Create a new database connection
$db = new Mysqli;

// Connect to the MySQL database
$db->connect('localhost','root','','crud');

// Check if the database connection was successful
if(!$db){
	echo "database not connected";
}


 ?>