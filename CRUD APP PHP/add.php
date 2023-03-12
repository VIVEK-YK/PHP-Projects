<?php
// Include the database connection file
include 'config.php';

// If the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Retrieve the form data
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	// Insert the data into the "users" table
	mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");

	// Redirect to the homepage
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New User</title>
</head>
<body>
	<h1>Add New User</h1>
	<form method="POST">
		<label>Name:</label>
		<input type="text" name="name"><br><br>
		<label>Email:</label>
		<input type="email" name="email"><br><br>
		<input type="submit" value="Submit">
	</form>
	<a href="index.php">Back to Home</a>
</body>
</html>
