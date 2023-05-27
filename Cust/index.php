<?php
// Include the database connection file
include_once("config.php");

// Fetch contacts (in descending order)
$result = mysqli_query($mysqli, "SELECT * FROM contacts ORDER BY id DESC"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Member Manager</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		body
		{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Member Manager</h1>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($res = mysqli_fetch_array($result)) { ?>
				<tr>
					<td><?php echo $res['name']; ?></td>
					<td><?php echo $res['age']; ?></td>
					<td><?php echo $res['email']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $res['id']; ?>" class="btn-edit">Edit</a>
						<a href="delete.php?id=<?php echo $res['id']; ?>" class="btn-delete" onClick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="add.php" class="btn-add">Add Contact</a><br>
		<a href="../dashboard.php" class="btn-add">Back to Dashboard</a>
	</div>
</body>
</html>