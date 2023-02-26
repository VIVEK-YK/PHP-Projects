<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['logout']){
    echo "logout successful";
    header('location: http://localhost/project/php%20log%20in/login.php');
  }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WelCome Page</title>
    <style>
    <?php
        include "css/style.css";
    ?>
    </style>
  </head>
  <body>
    <div class="welcome">Hello <strong>userName</strong> this is welcome page</div>
    <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur impedit tempora recusandae perspiciatis veniam harum rerum accusantium, doloremque ipsum excepturi! Illum nobis atque aperiam ex, ratione enim! Quia, omnis?</p>
    <form action="logout.php" method="POST">
    <input type="submit" value="Log Out" name="logout">
    </form>
  </body>
</html>