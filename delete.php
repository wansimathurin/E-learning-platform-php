<?php 
require("./db_connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM courses WHERE id = $id";
$result= mysqli_query($connect,$sql);
  if($result){
    header("location:courses.php");
  }else{
     echo "no courses deleted";
  }