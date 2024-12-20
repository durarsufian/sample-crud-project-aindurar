<!DOCTYPE html>
<?php
// Developed by Aindurar Rania Balqis Binti Mohd Sufian

// Include the database connection file
include 'db.php';

// Pagination setup
$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

// Fetch tasks with limit for pagination
$sql = "select * from tasks limit ".$start." , ".$perPage." ";

// Calculate total pages for pagination
$total = $db->query("select * from tasks")->num_rows;
$pages = ceil($total / $perPage);
$rows = $db->query($sql);

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
				
				<center><h1>Todo List</h1></center>
				<div class="col-md-10 col-md-offset-1">
					
					<table class="table table-hover">
						<!-- Add task button -->
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
						<!-- Print button -->
						<button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
						<hr><br>

						<!-- Modal for adding task -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Task</h4>
									</div>
									<div class="modal-body">
										<form method="post" action="add.php">
											<div class="form-group">
												<label>Task Name</label>
												<input type="text" required name="task" class="form-control">
											</div>
											<input type="submit" name="send" value="Add" class="btn btn-success">
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Task table -->
						<thead>
							<tr>
								<th scope="col">ID.</th>
								<th scope="col">Task</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php while($row = $rows->fetch_assoc()): ?>	
								<th><?php echo $row['id'] ?></th>
								<td class="col-md-10"><?php echo $row['name'] ?></td>
								<td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
								<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>	
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>

					<!-- Pagination -->
					<center>
					<ul class="pagination">
						<?php for($i = 1; $i <= $pages; $i++): ?>
						<li><a href="?page=<?php echo $i;?>&per-page=<<?php echo $perPage; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>