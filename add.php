<?php 

// Include database connection file
include 'db.php';

// Check if form data is submitted
if(isset($_POST['send'])){

	$name = $_POST['task'];

	// Insert the new task into the database
	$sql = "insert into tasks (name) values ('$name')";

	$val = $db->query($sql);

	// Redirect to the main page if insertion is successful
	if($val){

		header('location: index.php');
	}

}

?>