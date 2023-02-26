<?php

require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["submit"]) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $sql = "SELECT * FROM USERS WHERE username = '$username' OR password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo "User Id already Exist.";
    } else {
      if($username == "" || $password == "" || $cpassword == ""){
        echo "Fill the boxes";
      }
      else if($password == $cpassword) {
        $hash_Pass = password_hash($password, 
                                PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) values('$username', '$hash_Pass')";
        if (mysqli_query($conn, $sql)) {
          header("location: http://localhost/project/php%20log%20in/login.php");
          echo "Registration Successful";
        } else {
          echo "Error: Found" . mysqli_error($conn);
        };
      } else {
        echo "Password should Match";
      }
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
  <style>
    <?php
    include "css/style.css";
    ?>
  </style>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="container">
    <div class="header">
      <h1>Sign Up</h1>
    </div>
    <hr>
    <label for="username">User Name</label>
    <input type="text" id="username" name="username" placeholder="Enter Your User Name">

    <label for="pasword">Password</label>
    <input type="password" name="password" id="password" placeholder="Enter Your Password">

    <label for="pasword">Confirm Password</label>
    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Your Password">

    <input type="submit" value="Sign up" name="submit">

    <p>Already have an account? <span><a href="login.php
      ">Log In</a></span></p>
  </form>
</body>

</html>