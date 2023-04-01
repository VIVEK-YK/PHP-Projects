<?php
include 'config.php';
$myArrData = '';
$sql = mysqli_query($conn, "SELECT * from crudwithjs");
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $data = "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["city"] . "</td><td id='inline'>
            <form method='post' action='edit.php'>
                <input type='hidden' name='id' value='" . $row["id"] . "'>
                <input type='submit' value='Edit'>
            </form>
            <form method='post' action='delete.php'>
                <input type='hidden' name='id' value='" . $row["id"] . "'>
                <input type='submit' value='Delete'>
            </form>
            </td></tr>";
        $myArrData .= $data;
    }
} else {
    echo "data doest exits.";
}
