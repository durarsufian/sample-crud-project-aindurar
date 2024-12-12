<?php 

// Include database connection file
include 'db.php';

// Get the ID
$id = $_GET['id'];

// Delete the task with the specified ID
$sql = "delete from tasks where id = '$id' ";

$val = $db->query($sql);

if($val){
// Redirect to index.php after successful deletion
header('location: index.php');
};

?>