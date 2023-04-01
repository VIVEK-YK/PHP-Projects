<?php  

include "config.php";
session_start();
if(isset($_POST['add'])){
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $city= trim($_POST['city']);
    if($name == '' || $age == '' || $city == ''){
        $message = "all fill required";
        echo $message;
    }else{
    $sql = mysqli_prepare($conn, "INSERT INTO crudwithjs(name, age, city) VALUES(?,?,?)");
    mysqli_stmt_bind_param($sql,'sss', $name, $age, $city);
    if(mysqli_stmt_execute($sql)){
        $message = "data inserted.";
        // header('location: index.php');
        echo $message;
    }else{
        $message = "data inserting failed.";
        echo $message;
    }
}


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div><a href="http://localhost/crud%20app/index.php"></a></div>;<div><a href="http://localhost/crud%20app/index.php">Back to home</a></div>;
</body>
</html>