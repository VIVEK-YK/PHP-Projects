<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){


if($_POST["submit"]){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = "SELECT * FROM users  WHERE username = '$username' and password = '$password' ";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count == 1){
    echo "Login Successfull";
    header('location: http://localhost/project/php%20log%20in/index.php');
  }
  else{
    echo "Incorrect user id and password";
  }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
    <?php
        include "css/style.css";
    ?>
    </style>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="container">
      <div class="header"><h1>Log In</h1></div>
      <hr>
      <label for="userName">User Name</label>
      <input type="text" id="userName" name="username" placeholder="Enter Your User Name">

      <label for="pasword">Password</label>
      <input type="password" name="password" id="password" placeholder="Enter Your Password">

      <input type="submit" value="Login" name="submit">

      <p>Don't have an account? <span><a href="signup.php
      ">Sign Up</a></span></p>
    </form>
  </body>
</html>