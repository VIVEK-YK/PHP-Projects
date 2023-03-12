<?php
// Include the database connection file
include 'config.php';

// Retrieve the ID from the query string
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Delete the data from the "users" table for the specified ID
mysqli_query($conn, "DELETE FROM users WHERE id=$id");

// Redirect to the homepage
header('Location: index.php');
exit();
?>
