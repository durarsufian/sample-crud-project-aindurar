<!DOCTYPE html>

<?php 

// Include database connection
include 'db.php';

// Get task ID
$id= $_GET['id']; 

// Fetch task details to update form
$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql);

$row= $rows->fetch_assoc();

// Check if the update form was submitted
if(isset($_POST['send'])){

$task = $_POST['task'];

// Update the task name in the database
$sql ="update tasks set name='$task' where id ='$id'";

$db->query($sql);

// Redirect back to the main page
header('location: index.php');

}

?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud App</title>
	</head>
	<body>
		<div class="container">
			
			<div class="row" style="margin-top: 70px;">
				
				<center><h1>Update Todo List</h1></center>
				<div class="col-md-10 col-md-offset-1">
					
						<hr><br>
						
						        <form method="post">
						        	<div class="form-group">
						        		<label>Task Name</label>
						        		<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
						        	</div>
						        	<input type="submit" name="send" value="Update" class="btn btn-success">&nbsp;
						        	<a href="index.php" class="btn btn-warning">Back</a>
						        </form>

				</div>
			</div>
		</div>
	</body>
</html>