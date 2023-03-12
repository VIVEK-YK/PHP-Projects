<?php
// Include the database connection file
include 'config.php';

// Retrieve all the data from the "users" table
$result = mysqli_query($conn, "SELECT * FROM users");

// Display the data in an HTML table
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD App in PHP</title>
</head>
<body style="display:grid; place-items:center;">
	<h1>CRUD App in PHP</h1>
	<a href="add.php">Add New User</a>
	<table border="1" cellspacing = '0' width = '60%'>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
