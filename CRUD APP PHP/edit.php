<?php
// Include the database connection file
include 'config.php';

// If the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Retrieve the form data
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	// Update the data in the "users" table
	mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");

	// Redirect to the homepage
	header('Location: index.php');
	exit();
}

// Retrieve the data for the specified ID
$id = mysqli_real_escape_string($conn, $_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</
