
<?php
include("config.php");

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "DELETE FROM crudwithjs WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "Data Deleted Successfull";
       
    }
    else{
        echo "Delete unsuccessful";
    }
}
?>
<button ><a href="index.php">GO Back</a></button>
