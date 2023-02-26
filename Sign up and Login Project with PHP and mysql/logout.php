<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['logout']){
    echo "logout successful";
    header('location: http://localhost/project/php%20log%20in/login.php');
  }
}


?>