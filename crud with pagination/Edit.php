// edit.php
<?php
include("config.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM crudwithjs WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $age = $row['age'];
    $city = $row['city'];
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $sql = "UPDATE crudwithjs SET name = '$name', age = '$age', city = '$city' WHERE id = '$id'";
    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_errno($conn);
    }
}

mysqli_close($conn);
?>

<form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
    Age: <input type="numbber" name="age" value="<?php echo $age; ?>"><br>
    City: <input type="text" name="city" value="<?php echo $city; ?>"><br>
    <input type="submit" name="submit" value="Update">
    <button><a href="index.php">Go Back</a></button>
</form>
